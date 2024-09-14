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

$reefless->loadClass('Booking', null, 'booking');
$rlBooking->prepareBookingOrder();

if (isset($_POST['booking_order']) && !$configs['Prepayment']) {
    $rlBooking->bookingOrder();
} else {
    if ($_SESSION['bookingData'] && $configs['Prepayment'] && $step == 'prepayment') {
        $rlBooking->initPrepayment();
    }
}      
