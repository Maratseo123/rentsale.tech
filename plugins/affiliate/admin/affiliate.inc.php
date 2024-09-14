<?php

/******************************************************************************
 *  
 *  PROJECT: Flynax Classifieds Software
 *  VERSION: 4.7.2
 *  LICENSE: RU70XA4A4YQ2 - https://www.flynax.ru/user-agreement.html
 *  PRODUCT: General Classifieds
 *  DOMAIN: heidenbauer.ru
 *  FILE: COMMISSIONS.INC.PHP
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

/* ext js action */
if ($_GET['q'] == 'ext') {
    /* system config */
    require_once '../../../includes/config.inc.php';
    require_once RL_ADMIN_CONTROL . 'ext_header.inc.php';
    require_once RL_LIBS . 'system.lib.php';

    /* banners grid */
    if ($_GET['mode'] == 'banners') {
        /* data update */
        if ($_GET['action'] == 'update') {
            $field = $rlValid->xSql($_GET['field']);
            $value = $rlValid->xSql(nl2br($_GET['value']));
            $id    = (int) $_GET['id'];

            $rlDb->updateOne(array('fields' => array($field => $value), 'where' => array('ID' => $id)), 'aff_banners');
            exit;
        }
        /* get affiliate banners */
        else {
            $reefless->loadClass('Affiliate', null, 'affiliate');
            $result = $rlAffiliate->getAffiliateBanners();
        }
    }
    /* get affiliate payouts */
    elseif ($_GET['mode'] == 'payouts') {
        $reefless->loadClass('Affiliate', null, 'affiliate');
        $result = $rlAffiliate->getApPaymentHistory();
    }
    /* get affiliate events */
    else {
        $reefless->loadClass('Affiliate', null, 'affiliate');
        $result = $rlAffiliate->getAffiliateEvents();
    }

    echo json_encode(['total' => $result['count'], 'data' => $result['data']]);
}
/* ext js action end */
else {
    $reefless->loadClass('Affiliate', null, 'affiliate');

    /* additional bread crumb step */
    if ($_GET['action']) {
        switch ($_GET['action']) {
            case 'add':
                $bcAStep = $lang['aff_add_banner_button'];
                break;

            case 'edit':
                $bcAStep = $lang['aff_edit_banner'];
                break;

            case 'view':
                $bcAStep = $lang['aff_payout_details'];
                break;
        }
    }

    /* add/edit banners */
    if ($_GET['mode'] == 'banners' && in_array($_GET['action'], array('add', 'edit'))) {
        // get all languages
        $allLangs = $GLOBALS['languages'];
        $rlSmarty->assign_by_ref('allLangs', $allLangs);

        if ($_GET['action'] == 'add') {
            /* adding new banner */
            if ($_POST['submit']) {
                $rlAffiliate->addBanner();
            }
        }

        if ($_GET['action'] == 'edit' && (int) $_GET['id']) {
            $banner_info = $rlDb->fetch('*', array('ID' => $_GET['id']), null, null, 'aff_banners', 'row');

            /* edit banner */
            if ($_POST['fromPost']) {
                if ($_SESSION['admin_notice_type'] && !$_POST['removed_banner']) {
                    $_POST['image'] = $banner_info['Image'];
                }

                $rlAffiliate->editBanner();
            }
            /* simulate POST */
            else {
                if ($banner_info) {
                    $_POST['width'] = $banner_info['Width'];
                    $_POST['height'] = $banner_info['Height'];
                    $_POST['image'] = $banner_info['Image'];

                    // get names
                    $names = $rlDb->fetch(array('Code', 'Value'), array('Key' => 'aff_banner_' . $banner_info['Key']), "AND `Status` = 'active'", null, 'lang_keys');

                    foreach ($names as $name_phrase) {
                        $_POST['name'][$name_phrase['Code']] = $name_phrase['Value'];
                    }
                }
            }
        }
    }

    /* view payout details */
    if ($_GET['mode'] == 'payouts' && $_GET['action'] == 'view') {
        $rlAffiliate->getApPayoutDetails();
    }
}
