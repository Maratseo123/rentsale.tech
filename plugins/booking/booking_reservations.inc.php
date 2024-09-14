<?php

/******************************************************************************
 *  
 *  PROJECT: Flynax Classifieds Software
 *  VERSION: 4.7.2
 *  LICENSE: RU70XA4A4YQ2 - https://www.flynax.ru/user-agreement.html
 *  PRODUCT: General Classifieds
 *  DOMAIN: heidenbauer.ru
 *  FILE: BOOKING_RESERVATIONS.INC.PHP
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

$GLOBALS['reefless']->loadClass('Booking', null, 'booking');

$reservations = $GLOBALS['rlBooking']->getReservations();
$GLOBALS['rlSmarty']->assign_by_ref('reservations', $reservations);

/* mark reservations as notified */
if ($reservations && $account_info['ID']) {
    $update['fields']['Renter_notified'] = '1';
    $update['where']['Renter_ID'] = $account_info['ID'];
    $rlDb->updateOne($update, 'booking_requests');
}

$GLOBALS['rlSmarty']->assign_by_ref('booking_reservations_url', $reefless->getPageUrl('booking_reservations'));
