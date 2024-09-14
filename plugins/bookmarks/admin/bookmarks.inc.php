<?php

/******************************************************************************
 *  
 *  PROJECT: Flynax Classifieds Software
 *  VERSION: 4.7.2
 *  LICENSE: RU70XA4A4YQ2 - https://www.flynax.ru/user-agreement.html
 *  PRODUCT: General Classifieds
 *  DOMAIN: heidenbauer.ru
 *  FILE: BOOKMARKS.INC.PHP
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

if (in_array($_GET['action'], array('add', 'edit'))) {
    // Load system lib
    require_once(RL_LIBS . 'system.lib.php');

    $rlSmarty->assign_by_ref('languages', $languages);

    $reefless->loadClass('BookmarksAdmin', null, 'bookmarks');

    // Remove useless box positions
    unset($l_block_sides['header_banner'], $l_block_sides['integrated_banner']);

    // Blocks manager reference mode
    if ($cInfo['prev'] == 'blocks') {
        $_SESSION['bookmarks_ref_blocks'] = true;
    }

    // Prepare services
    $services = $rlBookmarksAdmin->getServices();

    $bcAStep = $_GET['action'] == 'add'
    ? $lang['bsh_add_block']
    : $lang['edit_block'];
    
    $rlSmarty->assign_by_ref('services', $services);
    
    // Prepare align items
    $aligns = array(
        'left'   => $lang['bookmark_left'],
        'center' => $lang['bookmark_center'],
        'right'  => $lang['bookmark_right'],
    );
    $rlSmarty->assign_by_ref('aligns', $aligns);
    
    // Prepare sizes
    $button_sizes = array(
        'medium' => $lang['bookmark_mode_medium'],
        'large'  => $lang['bookmark_mode_large'],
        'small'  => $lang['bookmark_mode_small'],
    );
    $rlSmarty->assign_by_ref('button_sizes', $button_sizes);

    // Prepare themes
    $themes = array(
        'transparent' => $lang['bookmarks_theme_transparent'],
        'light'       => $lang['bookmarks_theme_light'],
        'dark'        => $lang['bookmarks_theme_dark'],
    );
    $rlSmarty->assign_by_ref('themes', $themes);

    // Get pages list
    $pages = $rlDb->fetch(array('ID', 'Key'), array('Tpl' => 1), "AND `Status` = 'active' ORDER BY `Key`", null, 'pages');
    $pages = $rlLang->replaceLangKeys($pages, 'pages', array('name' ), RL_LANG_CODE, 'admin');
    $rlSmarty->assign_by_ref('pages', $pages);
    
    if ($_GET['action'] == 'edit') {
        if ($_GET['block']) {
            $id = (int) str_replace('bookmark_inline_', '', $_GET['block']);
            $_GET['item'] = $id;
        } else {
            $id = (int) $_GET['item'];
        }
        
        // Get current share box info
        $sql = "
            SELECT `T1`.*, `T2`.`Tpl`, `T2`.`Header`, `T2`.`Side`, `T2`.`Sticky`, `T2`.`Page_ID`, `T2`.`Status`
            FROM `" . RL_DBPREFIX  . "bookmarks` AS `T1` 
            LEFT JOIN `". RL_DBPREFIX ."blocks` AS `T2` ON `T1`.`Key` = `T2`.`Key` 
            WHERE `T1`.`ID` = {$id} LIMIT 1
        ";

        $block_info = $rlDb->getRow($sql);
        $rlSmarty->assign_by_ref('block_info', $block_info);

        // Simulate post
        if (!$_POST['fromPost']) {
            $_POST['status']          = $block_info['Status'];
            $_POST['show_on_all']     = $block_info['Sticky'];
            $_POST['pages']           = explode(',', $block_info['Page_ID']);
            $_POST['type']            = $block_info['Type'];
            $_POST['theme']           = $block_info['Theme'];
            $_POST['button_size']     = $block_info['View_mode'];
            $_POST['services']        = $block_info['Services'];
            $_POST['counter']      = $block_info['Counter'];

            if ($block_info['Type'] == 'inline') {
                $_POST['side']        = $block_info['Side'];
                $_POST['tpl']         = $block_info['Tpl'];
                $_POST['header']      = $block_info['Header'];
                $_POST['align']       = $block_info['Align'];

                $names = $rlDb->fetch(
                    array('Code', 'Value'),
                    array('Key' => 'blocks+name+' . $block_info['Key']),
                    "AND `Status` <> 'trash'",
                    null,
                    'lang_keys'
                );

                foreach ($names as $name) {
                    $_POST['name'][$name['Code']] = $name['Value'];
                }
            }
        }
    }
    
    if (isset($_POST['submit'])) {
        $errors = array();
        
        $block_key         = $_POST['key'];
        $block_type        = $_POST['type'];
        $selected_services = $_POST['services'];
        $button_size       = $_POST['button_size'];
        $counter           = $_POST['counter'];
        $theme             = $_POST['theme'];

        // Create box key | "Add Box" mode
        if ($_GET['action'] == 'add') {
            $max = $rlDb->getRow(
                "SELECT MAX(`ID`) AS `Max` FROM `" . RL_DBPREFIX  . "bookmarks`",
                'Max'
            );
            $new_key = 'bookmark_' . $block_type . '_' . ++$max;
        }
        
        // Check type
        if (empty($block_type)) {
            $errors[] = str_replace(
                '{field}',
                "<b>{$lang['bsh_bookmark_type']}</b>",
                $lang['notice_select_empty']
            );
        }

        // Check services
        if (!$selected_services) {
            $errors[] = $lang['bookmarks_no_services_error'];
        }

        if ($block_type == 'inline') {
            $names  = $_POST['name'];
            $side   = $_POST['side'];
            $header = (int) $_POST['header'];
            $align  = $_POST['align'];

            // Check names
            if ($header) {
                foreach ($languages as $lng) {
                    if (empty($names[$lng['Code']])) {
                        $errors[] = str_replace(
                            '{field}',
                            "<b>{$lang['name']} ({$lng['name']})</b>",
                            $lang['notice_field_empty']
                        );
                        $error_fields[] = "name[{$lng['Code']}]";
                    }
                }
            }

            // Check side
            if (empty($side)) {
                $errors[] = str_replace(
                    '{field}',
                    "<b>{$lang['block_side']}</b>",
                    $lang['notice_select_empty']
                );
                $error_fields[] = 'side';
            }

            // Check side
            if (empty($align)) {
                $errors[] = str_replace(
                    '{field}',
                    "<b>{$lang['bookmarks_align']}</b>",
                    $lang['notice_select_empty']
                );
                $error_fields[] = 'align';
            }
        } else {
            $side = 'bottom';

            if ($_POST['pages']) {
                $page_search = " OR FIND_IN_SET(" . implode(", `Page_ID`) > 0 OR FIND_IN_SET(", $_POST['pages']) . ", `Page_ID`) > 0";
            }
            if ($_GET['action'] == 'edit') {
                $page_except = " AND `T1`.`ID` != {$id}";
            }

            $sql = "
                SELECT COUNT(`T1`.`Key`) AS `Count`
                FROM `" . RL_DBPREFIX . "bookmarks` AS `T1`
                LEFT JOIN `" . RL_DBPREFIX . "blocks` AS `T2` ON `T1`.`Key` = `T2`.`Key`
                WHERE `T1`.`Type` = 'floating_bar' AND (
                    `T2`.`Sticky` = '1' {$page_search}
                )
                {$page_except}
            ";
            $exist = $rlDb->getRow($sql);

            if ($exist['Count']) {
                $errors[] = $lang['bookmarks_floating_bar_duplicate'];
                $error_fields[] = "pages";
            }
        }

        if ($errors) {
            $rlSmarty->assign_by_ref('errors', $errors);
        } else {
            // Box data
            $box_data = array(
                'Side'          => $side,
                'Type'          => 'smarty',
                'Readonly'      => 1,
                'Tpl'           => $_POST['tpl'],
                'Header'        => $_POST['header'],
                'Page_ID'       => $_POST['pages'] ? implode(',', $_POST['pages']) : '',
                'Subcategories' => 1,
                'Sticky'        => empty($_POST['show_on_all']) ? 0 : 1,
                'Cat_sticky'    => 1,
                'Content'       => $rlBookmarksAdmin->generateContent(
                    $block_type,
                    $selected_services,
                    $button_size,
                    $counter,
                    $theme,
                    $align,
                    ($block_info['Key'] ?: $new_key)
                ),
            );

            // Bookmark data
            $bookmark_data = array(
                'Type'         => $block_type,
                'Services'     => $selected_services,
                'Align'        => $align,
                'Theme'        => $theme,
                'View_mode'    => $button_size,
                'Counter'      => $counter,
            );

            // Add new box
            if ($_GET['action'] == 'add') {
                // Get max position
                $position = $rlDb->getRow(
                    "SELECT MAX(`Position`) AS `Max` FROM `" . RL_DBPREFIX . "blocks`",
                    'Max'
                );

                $box_data['Key']      = $new_key;
                $box_data['Position'] = ++$position;
                $box_data['Plugin']   = 'bookmarks';
                $box_data['Status']   = 'active';
                $bookmark_data['Key'] = $new_key;

                // Save system box
                if ($rlActions->insertOne($box_data, 'blocks')) {
                    if ($block_type == 'inline' && $header) {
                        // Save box names
                        foreach ($languages as $lng) {
                            $lang_keys[] = array(
                                'Code'   => $lng['Code'],
                                'Module' => 'common',
                                'Status' => 'active',
                                'Key'    => 'blocks+name+' . $new_key,
                                'Value'  => $names[$lng['Code']],
                                'Plugin' => 'bookmarks',
                           );
                        }
                        $rlActions->insert($lang_keys, 'lang_keys');
                    }
                    
                    // Save bookmark entry
                    $rlActions->insertOne($bookmark_data, 'bookmarks');
                    
                    $message = $lang['block_added'];
                } else {
                    $error_msg = "Can't add new bookmark block (MYSQL problems)";

                    trigger_error($error_msg, E_WARNING);
                    $rlDebug->logger($error_msg);
                }
            }
            // Edit box
            elseif ($_GET['action'] == 'edit') {
                $phrase_key = 'blocks+name+' . $block_info['Key'];
                $box_data['Status'] = $_POST['status'];

                $update_data = array(
                    'fields' => $box_data,
                    'where'  => array(
                        'Key' => $block_info['Key']
                    )
                );
                $rlActions->updateOne($update_data, 'blocks');

                // Update bookmark entry
                $bookmark_data = array(
                    'fields' => $bookmark_data,
                    'where' => array(
                        'Key' => $block_info['Key']
                    )
                );
                $rlActions->updateOne($bookmark_data, 'bookmarks');
                
                // Update box names
                if ($block_type == 'inline' && $header) {
                    foreach ($languages as $lng) {
                        // Edit if exists
                        if ($rlDb->getOne('ID',"`Key` = '{$phrase_key}' AND `Code` = '{$lng['Code']}'", 'lang_keys')) {
                            $update = array(
                                'fields' => array(
                                    'Value' => $names[$lng['Code']]
                                ),
                                'where' => array(
                                    'Code' => $lng['Code'],
                                    'Key' => $phrase_key
                                )
                            );
                            $rlActions->updateOne($update, 'lang_keys');
                        }
                        // Add if doesn't
                        else {
                            $insert = array(
                                'Code'   => $lng['Code'],
                                'Module' => 'common',
                                'Key'    => $phrase_key,
                                'Plugin' => 'bookmarks',
                                'Value'  => $names[$lng['Code']]
                            );
                            $rlActions->insertOne($insert, 'lang_keys');
                        }
                    }
                }
                // Remove phrases
                elseif ($block_info['Header'] && !$header) {
                    $sql = "
                        DELETE FROM `" . RL_DBPREFIX  . "lang_keys`
                        WHERE `Key` = '{$phrase_key}' AND `Plugin` = 'bookmarks'
                    ";
                    $rlDb->query($sql);
                }

                $message = $lang['block_edited'];

                // Replace controller in ref mode
                if ($_SESSION['bookmarks_ref_blocks']) {
                    $controller = 'blocks';
                    unset($_SESSION['bookmarks_ref_blocks']);
                }
            }

            $reefless->loadClass('Notice');
            $rlNotice->saveNotice($message);
            $reefless->redirect(array('controller' => $controller));
        }
    }
}
