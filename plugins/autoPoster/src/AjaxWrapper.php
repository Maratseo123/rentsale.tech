<?php

/******************************************************************************
 *  
 *  PROJECT: Flynax Classifieds Software
 *  VERSION: 4.7.2
 *  LICENSE: RU70XA4A4YQ2 - https://www.flynax.ru/user-agreement.html
 *  PRODUCT: General Classifieds
 *  DOMAIN: heidenbauer.ru
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
 *  Flynax Classifieds Software 2023 | All copyrights reserved.
 *  
 *  https://www.flynax.ru
 ******************************************************************************/

namespace Autoposter;

use Autoposter\ProviderController;

class AjaxWrapper
{
    /**
     * @var array - Flynax language array
     */
    private $lang;
    
    /**
     * AjaxWrapper constructor.
     */
    public function __construct()
    {
        $this->lang = AutoPosterContainer::getConfig('lang');
    }
    
    /**
     * Sending post to the wall of the provider
     *
     * @param  string $provider   - Provider name
     * @param  int    $listing_id - Postings listing ID
     * @return array  $out        - Ajax response
     */
    public function sendPost2Wall($provider, $listing_id)
    {
        $provider_str = $provider;
        $providerController = new ProviderController($provider);
        $provider = $providerController->getProvider();
        
        if (!method_exists($provider, 'post')) {
            $out['status'] = 'ERROR';
            $out['message'] = $this->lang['ap_sending_method_dosnt_exist'];
            $out['provider'] = $provider_str;
            
            return $out;
        }
    
        if ($provider->post($listing_id)) {
            $out['status'] = 'OK';
            $out['message'] = $this->lang['ap_message_sent'];
            $out['provider'] = $provider_str;
            
            return $out;
        }
        
        $out['status'] = 'ERROR';
        $out['message'] = $this->lang['massage_doesnt_sent'];
        $out['provider'] = $provider_str;
        
        return $out;
    }
}
