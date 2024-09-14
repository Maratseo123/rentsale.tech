<?php

/******************************************************************************
 *  
 *  PROJECT: Flynax Classifieds Software
 *  VERSION: 4.7.2
 *  LICENSE: RU70XA4A4YQ2 - https://www.flynax.ru/user-agreement.html
 *  PRODUCT: General Classifieds
 *  DOMAIN: heidenbauer.ru
 *  FILE: REQUESTS.PHP
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
 *  Flynax Classifieds Software 2023 | All copyrights reserved.
 *  
 *  https://www.flynax.ru
 ******************************************************************************/

namespace Flynax\Plugins\HybridAuth\Providers;

use Flynax\Plugins\HybridAuth\Interfaces\ProviderInterface;
use Flynax\Plugins\HybridAuth\Configs as HybridAuthConfigs;

class Vkontakte extends AbstractProviderAdapter
{
    /**
     * Application instance
     * @var \Hybridauth\Provider\Vkontakte
     */
    protected $vkObject;

    /**
     * Exception error text
     *
     * @since 2.1.4
     * @var string
     */
    public $appError = '';

    /**
     * Vkontakte constructor.
     */
    public function __construct()
    {

        $appID = HybridAuthConfigs::i()->getConfig('flynax_configs')['ha_vkontakte_app_id']; // '6452270';
        $appSecret = HybridAuthConfigs::i()->getConfig('flynax_configs')['ha_vkontakte_app_key']; // 'zVEOgnMrKCJAvC8PmSLr';
        $appKey = HybridAuthConfigs::i()->getConfig('flynax_configs')['ha_vkontakte_app_secret']; // '4085fae54085fae54085fae54b40e78ecb440854085fae51a52f1cceeeae0fcb77118c6';

        $configs = array(
            'callback' => $this->getRedirectURLToTheProvider('vkontakte'),
            'keys' => array(
                'id' => $appID,
                'secret' => $appSecret,
                'key' => $appKey,
            ),
            'photo_size' => 400,
        );

        $this->vkObject = new \Hybridauth\Provider\Vkontakte($configs);
    }


    /**
     * Authenticate using Vkontakte account
     *
     * @return array|\Hybridauth\User\Profile|void
     */
    public function authenticate()
    {
        $userInfo = array();

        try {
            $this->vkObject->authenticate();
            $userInfo = $this->vkObject->getUserProfile();
        } catch (\Exception $e) {
            $this->appError = $e->getMessage();
        }

        return $userInfo;
    }

    /**
     * Checking does provided URL is a not a dummy image
     *
     * @param  string $url - URL of profile image
     * @return bool        - True if image is not dummy, false in otherwise cases
     */
    public function isNotEmptyImage($url)
    {
        if (!$url) {
            false;
        }
        $excludeImageRegex = '/camera_[0-9]{2,3}.png/m';

        preg_match($excludeImageRegex, $url, $matches, 0);
        array_filter($matches);

        return !empty($matches);
    }
}
