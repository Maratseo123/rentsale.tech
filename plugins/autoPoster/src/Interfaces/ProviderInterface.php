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

namespace Autoposter\Interfaces;

interface ProviderInterface
{
    /**
     * Post listing to the provider
     *
     * @param int $listing_id
     *
     * @return mixed
     */
    public function post($listing_id);

    /**
     * Delete post from the provider's timeline
     *
     * @since 1.3.0
     *
     * @param int $listing_id
     * @return mixed
     */
    public function deletePost($listing_id);

    /**
     * Get provider token
     * @return mixed
     */
    public function getToken();
}
