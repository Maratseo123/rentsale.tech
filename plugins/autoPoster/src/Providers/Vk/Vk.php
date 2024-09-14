<?php


/******************************************************************************
 *  
 *  PROJECT: Flynax Classifieds Software
 *  VERSION: 4.9.3
 *  LICENSE: RU70XA4A4YQ2 - https://www.flynax.ru/user-agreement.html
 *  PRODUCT: General Classifieds
 *  DOMAIN: rentsale.tech
 *  FILE: RLAUTOPOSTER.CLASS.PHP
 *  
 *  The software is a commercial product delivered under single, non-exclusive,
 *  non-transferable license for one domain or IP address. Therefore distribution,
 *  sale or transfer of the file in whole or in part without permission of Flynax
 *  respective owners is considered to be illegal and breach of Flynax License End
 *  User Agreement.
 *  
 *  You are not allowed to remove this information from the file without permission
 *  of Flynax respective owners.
 *  
 *  Flynax Classifieds Software 2024 | All copyrights reserved.
 *  
 *  https://www.flynax.ru
 ******************************************************************************/

namespace Autoposter\Providers;

use Flynax\Utils\ListingMedia;
use Autoposter\AutoPosterContainer;
use Autoposter\AutoPosterModules;
use Autoposter\Interfaces\ProviderInterface;
use Autoposter\MessageBuilder;
use Autoposter\Notifier;

/**
 * Class Vk
 * @since 1.6.0
 */
class Vk implements ProviderInterface
{
    /**
     * @var \rlDb
     */
    private $rlDb;

    /**
     * @var array - Flynax configuration array
     */
    private $flConfigs;

    /**
     * @var int - Token
     */
    private $token;

    /**
     * @var string - Post listings to
     */
    private  $post_to;

    /**
     * @var int - Owner id page/group
     */
    private $owner_id;

    /**
     * @var \rlListings
     */
    private $rlListings;

    /**
     * @var \reefless
     */
    private $reefless;

    /**
     * @var object
     */
    private $notifier;

    /**
     * Flag for the TMP photo file usage
     *
     * @since 1.7.0
     * @var boolean
     */
    private $tmpPhotoPath = false;

    /**
     * Vk constructor.
     */
    public function __construct()
    {
        $this->flConfigs = AutoPosterContainer::getConfig('flConfigs');
        $this->rlDb = AutoPosterContainer::getObject('rlDb');
        $this->rlListings = AutoPosterContainer::getObject('rlListings');
        $this->reefless = AutoPosterContainer::getObject('reefless');
        $this->notifier = new Notifier('vk');
        $this->token = $this->flConfigs['ap_vk_token'];
        $this->post_to = $this->flConfigs['ap_vk_post_to'];
        $this->owner_id = $this->flConfigs['ap_vk_owner_id'];
    }

    /**
     * Send post to the Vk
     * @param  int $listing_id - Posting listing ID
     * @return bool            - Does posting is processed successfully
     */
    public function post($listing_id)
    {
        if ($this->hasBeenPosted($listing_id) || !$this->rlListings->isActive($listing_id)) {
            return false;
        }

        $rlLang = AutoPosterContainer::getObject('rlLang');
        $GLOBALS['lang'] = $rlLang->getLangBySide('frontEnd', RL_LANG_CODE);
        $listing_data = $this->rlListings->getListing($listing_id);
        $main_photo = $listing_data['Main_photo']
        ? $this->rlDb->fetch('Photo', ['Thumbnail' => $listing_data['Main_photo']], null, 1, 'listing_photos', 'row')
        : '';

        if (!$main_photo) {
            return false;
        }

        $urlListings = $this->reefless->getListingUrl($listing_data);
        $messageBuilder = new MessageBuilder();
        $message = trim($messageBuilder->decodeMessage($listing_data, RL_LANG_CODE));
        $attach_data = [];
        if (!$message) {
            return false;
        }

        $module = new AutoPosterModules();
        $GLOBALS['pages'] = $module->getAllPages();

        try {
            $original_photo_path = RL_FILES . $main_photo['Photo'];
            ListingMedia::prepareURL($main_photo);
            $photo_path = $this->getPhotoFilePath($main_photo['Photo'], $original_photo_path);
            $urlUpload = $this->getUploadImageUrl();
            $resultUpload = $this->uploadImageToServer($urlUpload, $photo_path);
            $mediaData = $this->saveImageToVk($resultUpload);

            if ($mediaData) {
                if ($mediaData->error) {
                    $this->notifier->logMessage('Vk API Exception: Unable to upload photo, error occurs: ' . $mediaData->error->error_msg);
                    return false;
                } else {
                    array_push($attach_data, $mediaData->response[0]->id, $mediaData->response[0]->owner_id);
                }
            } else {
                return false;
            }

            $attacStr = 'photo';

            if ($this->post_to === 'to_group') {
                $this->owner_id = '-'.$this->owner_id;
            }
            $attacStr .= $attach_data[1] . '_' . $attach_data[0] . ',' . $urlListings;

            $params = array(
                'access_token' => $this->token,
                'owner_id'     => $this->owner_id,
                'message'      => $message,
                'attachments' => $attacStr,
                'v' => 5.131
            );

            $resutPost =  json_decode(file_get_contents(
                'https://api.vk.com/method/wall.post?' . http_build_query($params)
            ));

            if ($resutPost->response->post_id) {
                $this->afterSuccessPosting($resutPost->response->post_id, $listing_id);
                return true;
            } else {
                $this->notifier->logMessage('Vk API: Unable to post the message, error occurs: ' . $resutPost->error->error_msg);
                return false;
            }
        } catch (\Exception $e) {
            $this->notifier->logMessage('Vk error posting');
        }
        return false;
    }

    /**
     * Get real photo path, copy remote photo (in case of active remote storage plugin)
     * as temporary local file and remove it after uploading to the VK server
     *
     * @since 1.7.0
     *
     * @param  string $photoURL  - Photo URL
     * @param  string $photoPath - Local photo path
     * @return string            - Final existing photo path
     */
    public function getPhotoFilePath(string $photoURL, string $photoPath): string
    {
        global $domain_info;

        $photo_path_data = pathinfo($photoPath);
        $photo_url_data = parse_url($photoURL);

        if (false === strpos($photo_url_data['host'], $domain_info['host'])) {
            $tmp_path = sprintf('%sautoPosterVK-%s%s.%s', RL_TMP, mt_rand(), time(), $photo_path_data['extension']);
            if ($this->reefless->copyRemoteFile($photoURL, $tmp_path)) {
                $this->tmpPhotoPath = true;
                return $tmp_path;
            } else {
                return $photoPath;
            }
        } else {
            return $photoPath;
        }
    }

    /**
     * Get server url  vk for upload image .
     *
     * @return string - Url for upload
     */
    public function getUploadImageUrl()
    {
        $url_info = json_decode(file_get_contents(
            'https://api.vk.com/method/photos.getWallUploadServer?group_id='
                . $this->owner_id . '&access_token=' . $this->token . '&v=5.131'
        ));

        if ($url_info) {
            return  $url_info->response->upload_url;
        }

        return;
    }

    /**
     * Upload image resource to server vk
     * @param  $url - url get from vk server
     * @param  $pathImage - path image
     * @return array - media data
     */
    public function uploadImageToServer($url, $pathImage)
    {
        if (!empty($url)) {
            $file_new = new \CURLFile($pathImage);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($ch, CURLOPT_POSTFIELDS, array(
                'file1' => $file_new
            ));
            $result = json_decode(curl_exec($ch), true);
            curl_close($ch);

            if ($this->tmpPhotoPath) {
                unlink($pathImage);
            }

            return $result;
        }
        return null;
    }

    /**
     * Save image on Vk
     *
     * @param array $uploadData
     * @return object|null
     */
    public function saveImageToVk($uploadData)
    {
        if (!empty($uploadData['server'])) {
            $result = json_decode(file_get_contents(
                'https://api.vk.com/method/photos.saveWallPhoto?group_id=' . $this->owner_id
                    . '&server=' . $uploadData['server'] . '&photo='
                    . stripslashes($uploadData['photo']) . '&hash='
                    . $uploadData['hash'] . '&access_token=' . $this->token . '&v=5.131'
            ));
            return $result;
        }
        return null;
    }

    /**
     * After posting to the Vk timeline trigger
     *
     * @param int $message_id - Posted message ID
     * @param int $listing_id - Posted listing ID
     */
    public function afterSuccessPosting($message_id, $listing_id)
    {
        $GLOBALS['rlAutoPoster']->setSocialNetworkID($message_id, $listing_id, 'Vk_message_id');
    }

    /**
     * Checking does listing has been posted to the Vk wall
     *
     * @param  int  $listing_id - ID of the checking Listing
     * @return bool             - Checking status
     */
    public function hasBeenPosted($listing_id)
    {
        return !empty($this->rlDb->getOne('Vk_message_id', "`Listing_ID` = {$listing_id}", 'autoposter_listings'));
    }

    /**
     * Getting vk token
     */
    public function getToken()
    {}

    /**
     * Delete Vk post
     *
     * @param int $listingID
     * @return void
     */
    public function deletePost($listingID)
    {
        $listingID = (int) $listingID;
        if (!$listingID || !$postID = $this->getVkPostID($listingID)) {
            return false;
        }

        if ($this->post_to === 'to_group') {
            $this->owner_id = '-'.$this->owner_id;
        }

        $params = array(
            'post_id' => $postID,
            'access_token' => $this->token,
            'owner_id'  => $this->owner_id,
            'v' => 5.131
        );

        file_get_contents('https://api.vk.com/method/wall.delete?' . http_build_query($params));
    }

    /**
     * Getting Vk post ID
     *
     * @param int $listingID
     * @return string
     */
    public function getVkPostID($listingID)
    {
        $listingID = (int) $listingID;
        if (!$listingID) {
            return '';
        }

        $where = sprintf("`Listing_ID` = %d", $listingID);
        return $this->rlDb->getOne('Vk_message_id', $where, 'autoposter_listings');
    }

    /*** DEPRECATED METHODS ***/

    /**
     * Checking is listings status is non Active
     *
     * @deprecated 1.8.0
     *
     * @param  int  $listing_id
     * @return bool  - Is listings posted
     */
    public function isListingsActive($listing_id)
    {}
}
