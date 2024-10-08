<?php

/******************************************************************************
 *  
 *  PROJECT: Flynax Classifieds Software
 *  VERSION: 4.9.2
 *  LICENSE: RU70XA4A4YQ2 - https://www.flynax.ru/user-agreement.html
 *  PRODUCT: Real Estate Classifieds
 *  DOMAIN: heidenbauer.ru
 *  FILE: INDEX.PHP
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

/* template settings */
$tpl_settings = array(
	'type' => 'responsive_42', // DO NOT CHANGE THIS SETTING
	'version' => 1.1,
	'name' => 'realty_map_wide', // _flatty_wide - is necessary postfix
	'inventory_menu' => false,
	'right_block' => false,
	'long_top_block' => false,
	'featured_price_tag' => true,
	'ffb_list' => false, //field bound boxes plugins list
	'fbb_custom_tpl' => true,
	'header_banner' => true,
    'header_banner_size_hint' => '728x90',
    'home_page_gallery' => false,
	'listing_details_anchor_tabs' => true,
    'listing_details_nav_mode' => 'gallery_mixed',
	'search_on_map_page' => true,
	'home_page_map_search' => true,
	'browse_add_listing_icon' => false,
	'listing_grid_except_fields' => array('title', 'bedrooms', 'bathrooms', 'square_feet', 'time_frame', 'phone'),
    'sidebar_sticky_pages' => array('listing_details'),
    'sidebar_restricted_pages' => array('search_on_map'),
    'svg_icon_fill' => true,
    'default_listing_grid_mode' => 'list',
    'listing_grid_mode_only' => false,
    'qtip' => array(
        'background' => '0069a6',
        'b_color'    => '0069a6',
    ),
);

if ( is_object($rlSmarty) ) {
	$rlSmarty -> assign_by_ref('tpl_settings', $tpl_settings);
}
