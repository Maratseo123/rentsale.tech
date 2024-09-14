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

use Flynax\Plugins\HybridAuth\Configs as HybridAuthConfigs;

class Google extends AbstractProviderAdapter
{
    private $app;

    /**
     * Exception error text
     *
     * @since 2.1.4
     * @var string
     */
    public $appError = '';

    /**
     * Google constructor.
     */
    public function __construct()
    {
        $appID = HybridAuthConfigs::i()->getConfig('flynax_configs')['ha_google_app_key'];
        $appSecret = HybridAuthConfigs::i()->getConfig('flynax_configs')['ha_google_app_id'];

        $configs = array(
            'callback' => $this->getRedirectURLToTheProvider('google'),
            'keys' => array(
                'id' => $appID,
                'secret' => $appSecret,
            ),
            'scope' => 'https://www.googleapis.com/auth/userinfo.profile ' .
                        'https://www.googleapis.com/auth/userinfo.email',
            'access_type' => 'offline',
            'approval_prompt' => 'force',
            'photo_size' => 2000,
        );
        $this->app = new \Hybridauth\Provider\Google($configs);
    }

    /**
     * Authenticate using Google account
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
}
