<?php

/******************************************************************************
 *  
 *  PROJECT: Flynax Classifieds Software
 *  VERSION: 4.7.2
 *  LICENSE: RU70XA4A4YQ2 - https://www.flynax.ru/user-agreement.html
 *  PRODUCT: General Classifieds
 *  DOMAIN: heidenbauer.ru
 *  FILE: RLREPORTBROKENLISTING.CLASS.PHP
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
use \ReportListings\Helpers\Requests;

if (! function_exists('request')) {
    /**
     * Request class helper
     *
     * @param string $name    - $_REQUEST parameter key
     * @return mixed|Requests - Request data | Request class object if nothing has been provided
     */
    function request($name = '')
    {
        if (!$name) {
            return new Requests();
        }
        
        return Requests::request($name);
    }
}
