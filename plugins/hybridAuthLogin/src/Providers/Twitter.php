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
use Flynax\Plugins\HybridAuth\Traits\UrlTrait;

class Twitter implements ProviderInterface
{
    use UrlTrait;

    /**
     * Application instance
     * @var \Hybridauth\Provider\Twitter
     */
    private $app;

    /**
     * Exception error text
     *
     * @since 2.1.4
     * @var string
     */
    public $appError = '';

    /**
     * Twitter constructor.
     */
    public function __construct()
    {
        $appKey = HybridAuthConfigs::i()->getConfig('flynax_configs')['ha_twitter_app_id'];
        $appSecret = HybridAuthConfigs::i()->getConfig('flynax_configs')['ha_twitter_app_secret'];

        $configs = array(
            'callback' => $this->getRedirectURLToTheProvider('twitter'),
            'keys' => array(
                'key' => $appKey,
                'secret' => $appSecret,
            ),
            'photo_size' => '400x400',
        );

        $this->app = new \Hybridauth\Provider\Twitter($configs);
    }

    /**
     * Authenticate using Twitter account
     *
     * @return array|\Hybridauth\User\Profile|void
     */
    public function authenticate()
    {
        $userInfo = array();

        try {
            $this->app->authenticate();
            $userInfo = $this->app->getUserProfile();
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
        $disabledPictureName = 'default_profile.png';

        return (bool) strpos($url, $disabledPictureName);
    }
}
