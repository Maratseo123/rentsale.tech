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

use Flynax\Plugins\HybridAuth\Configs as HybridAuthConfigs;

require_once __DIR__ . '/vendor/autoload.php';

$providers = array(
    'facebook' => array(
        'validate' => array(
            'ha_facebook_app_id' => 'required',
            'ha_facebook_app_secret' => 'required',
        ),
        'enable_copy_button' => true,
        'guide_link' => 'https://www.flynax.com/files/manuals/social-network-login/Guide%20for%20Creating%20a%20Facebook%20App.pdf',
    ),
    'google' => array(
        'validate' => array(
            'ha_google_app_key' => 'required',
            'ha_google_app_id' => 'required',
        ),
        'enable_copy_button' => true,
        'guide_link' => 'https://www.flynax.com/files/manuals/social-network-login/Guide%20for%20Creating%20a%20Google%20App.pdf',
    ),
    'twitter' => array(
        'validate' => array(
            'ha_twitter_app_id' => 'required',
            'ha_twitter_app_secret' => 'required',
        ),
        'enable_copy_button' => true,
        'guide_link' => 'https://www.flynax.com/files/manuals/social-network-login/Guide%20for%20Creating%20a%20Twitter%20App.pdf',
    ),
    'vkontakte' => array(
        'validate' => array(
            'ha_vkontakte_app_id' => 'required',
            'ha_vkontakte_app_secret' => 'required',
            'ha_vkontakte_app_key' => 'required',
        ),
        'enable_copy_button' => true,
        'guide_link' => 'https://www.flynax.com/files/manuals/social-network-login/Guide%20for%20Creating%20a%20VK%20App.pdf',
    ),
    /* @since 2.1.0 - Apple Sign in added */
    'apple' => array(
        'guide_link' => 'https://www.flynax.com/files/manuals/social-network-login/Guide-for-Configure-Apple-Signin.pdf',
    ),
);

HybridAuthConfigs::i()->setConfig('providers', $providers);
HybridAuthConfigs::i()->setConfig('flynax_configs', $GLOBALS['config']);
HybridAuthConfigs::i()->setConfig('flynax_phrases', $GLOBALS['lang']);

use \Flynax\Components\ObjectsContainer;

if (!function_exists('hybridAuthMakeObject')) {
    /**
     * Flynax object container helper
     *
     * @param  string $className - Flynax class name
     * @return bool|mixed
     */
    function hybridAuthMakeObject($className = '')
    {
        if (!$className) {
            return false;
        }

        return ObjectsContainer::i()->make($className);
    }
}
