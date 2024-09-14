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

/**
 * Class rlBoookingFields
 * @todo Fix typo in name of class
 */
class rlBoookingFields
{
    /**
     * Create booking field
     *
     * @param  string $type  - Field type
     * @param  array  $data  - Field info
     * @param  array  $langs - Available system languages
     * @return bool
     */
    public function createBookingField($type, $data, $langs)
    {
        global $rlActions, $rlDb;

        $info = $lang_keys = array();
        $max_postition   = $rlDb->getRow('SELECT MAX(`Position`) AS `Max` FROM `{db_prefix}booking_fields`');
        $alter_table_sql = 'ALTER TABLE `{db_prefix}booking_requests` ADD ';

        // insert field information
        $info = array(
            'Key'          => $data['key'],
            'Type'         => $type,
            'Booking_type' => $data['booking_type'],
            'Required'     => $data['required'],
            'Status'       => $data['status'],
            'Position'     => $max_postition['Max'] + 1,
        );

        // collect phrases
        foreach ($langs as $key => $value) {
            $lang_keys[] = array(
                'Code'   => $langs[$key]['Code'],
                'Module' => 'common',
                'Status' => 'active',
                'Key'    => 'booking_fields+name+' . $data['key'],
                'Value'  => $data['names'][$langs[$key]['Code']],
                'Plugin' => 'booking',
            );

            if (!empty($data['description'][$langs[$key]['Code']])) {
                $lang_keys[] = array(
                    'Code'   => $langs[$key]['Code'],
                    'Module' => 'common',
                    'Status' => 'active',
                    'Key'    => 'booking_fields+description+' . $data['key'],
                    'Value'  => $data['description'][$langs[$key]['Code']],
                    'Plugin' => 'booking',
                );
            }
        }

        // generate lang keys and type's additional information
        switch ($type) {
            case 'text':
                if (!empty($data['condition'])) {
                    $info['Condition'] = $data['condition'];
                }
                $maxlength = (int) $data['maxlength'];
                $info['Values'] = $maxlength > 255 || $maxlength < 0 ? 255 : $maxlength;

                foreach ($langs as $key => $value) {
                    if (!empty($data['default'][$langs[$key]['Code']])) {
                        $info['Default'] = 1;

                        $lang_keys[] = array(
                            'Code'   => $langs[$key]['Code'],
                            'Module' => 'common',
                            'Status' => 'active',
                            'Key'    => 'booking_fields+default+' . $data['key'],
                            'Value'  => $data['default'][$langs[$key]['Code']],
                            'Plugin' => 'booking',
                        );
                    }
                }

                $sql = $alter_table_sql . "`{$data['key']}` VARCHAR({$data['maxlength']}) ";
                $sql .= 'CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL';
                break;

            case 'textarea':
                $maxlength = (int) $data['maxlength'];
                $info['Values'] = $maxlength > 0 ? $maxlength : 500;

                $sql = $alter_table_sql . "`{$data['key']}` MEDIUMTEXT ";
                $sql .= 'CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL';
                break;

            case 'number':
                $info['Default'] = $data['max'];

                $sql = $alter_table_sql . "`{$data['key']}` DOUBLE NOT NULL";
                break;

            case 'bool':
                $info['Default'] = $data['default'];

                $sql = $alter_table_sql . "`{$data['key']}` ENUM('0', '1') DEFAULT '{$data['default']}' NOT NULL";
                break;
        };

        if ($rlDb->query($sql)) {
            $rlActions->insertOne($info, 'booking_fields');
            $rlActions->insert($lang_keys, 'lang_keys');

            return true;
        } else {
            $GLOBALS['rlDebug']->logger('Can not create new booking field (MYSQL ALTER QUERY FAIL)');
        }

        return false;
    }

    /**
     * Edit booking field
     *
     * @param  string $type  - Field type
     * @param  array  $data  - Field information
     * @param  array  $langs - Available system languages
     * @return bool
     */
    public function editBookingField($type, $data, $langs)
    {
        global $rlDb;

        $info           = [];
        $lang_keys      = [];
        $info['where']  = ['Key' => $data['key']];
        $info['fields'] = [
            'Required'     => $data['required'],
            'Status'       => $data['status'],
            'Booking_type' => $data['booking_type'],
        ];

        foreach ($langs as $key => $value) {
            $name_key = 'booking_fields+name+' . $data['key'];
            $desc_key = 'booking_fields+description+' . $data['key'];

            if ($rlDb->getOne('ID', "`Key` = '{$name_key}' AND `Code` = '{$langs[$key]['Code']}'", 'lang_keys')) {
                $update_phrases = array(
                    'fields' => array(
                        'Value' => $data['names'][$langs[$key]['Code']],
                    ),
                    'where' => array(
                        'Code' => $langs[$key]['Code'],
                        'Key'  => $name_key,
                    ),
                );

                $rlDb->updateOne($update_phrases, 'lang_keys');
            } else {
                $insert_phrases = array(
                    'Code'   => $langs[$key]['Code'],
                    'Module' => 'common',
                    'Status' => 'active',
                    'Key'    => $name_key,
                    'Value'  => $data['names'][$langs[$key]['Code']],
                    'Plugin' => 'booking',
                );

                $rlDb->insertOne($insert_phrases, 'lang_keys');
            }

            if ($rlDb->getOne('ID', "`Key` = '{$desc_key}' AND `Code` = '{$langs[$key]['Code']}'", 'lang_keys')) {
                $lang_keys_desc['where'] = array(
                    'Code' => $langs[$key]['Code'],
                    'Key'  => $desc_key,
                );
                $lang_keys_desc['fields'] = array(
                    'Value' => $data['description'][$langs[$key]['Code']],
                );

                $rlDb->updateOne($lang_keys_desc, 'lang_keys');
            } else {
                if (!empty($data['description'][$langs[$key]['Code']])) {
                    $field_description = array(
                        'Code'   => $langs[$key]['Code'],
                        'Module' => 'common',
                        'Status' => 'active',
                        'Key'    => $desc_key,
                        'Value'  => $data['description'][$langs[$key]['Code']],
                        'Plugin' => 'booking',
                    );

                    $rlDb->insertOne($field_description, 'lang_keys');
                }
            }
        }

        // generate lang keys and types for additional information
        switch ($type) {
            case 'text':
                $info['fields']['Condition'] = $data['condition'];
                $maxlength = (int) $data['maxlength'];
                $info['fields']['Values'] = $maxlength > 255 || $maxlength < 0 ? 255 : $maxlength;

                $additional_alter = 'ALTER TABLE `{db_prefix}booking_requests` ';
                $additional_alter .= "CHANGE `{$data['key']}` `{$data['key']}` VARCHAR({$info['fields']['Values']}) ";
                $additional_alter .= 'CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL';

                foreach ($langs as $key => $value) {
                    if (!empty($data['default'][$langs[$key]['Code']])) {
                        $info['fields']['Default'] = 1;

                        $lang_keys[] = array(
                            'Code'   => $langs[$key]['Code'],
                            'Module' => 'common',
                            'Status' => 'active',
                            'Key'    => 'booking_fields+default+' . $data['key'],
                            'Value'  => $data['default'][$langs[$key]['Code']],
                            'Plugin' => 'booking',
                        );
                    } else {
                        $info['fields']['Default'] = 0;
                    }
                }

                break;

            case 'textarea':
                $maxlength = (int) $data['maxlength'];
                $info['fields']['Values'] = $maxlength > 0 ? $maxlength : 500;
                break;

            case 'number':
                $info['fields']['Default'] = $data['min'];
                $info['fields']['Values']  = $data['max'];
                break;

            case 'bool':
                $info['fields']['Default'] = $data['default'];
                break;
        };

        if ($info) {
            if ($additional_alter) {
                if (!$rlDb->query($additional_alter)) {
                    $GLOBALS['rlDebug']->logger('Can not create additional booking field (MYSQL ALTER QUERY FAIL)');
                }
            }

            $rlDb->updateOne($info, 'booking_fields');
        }

        if ($lang_keys) {
            $sql = 'DELETE FROM `{db_prefix}lang_keys` ';
            $sql .= "WHERE `Key` REGEXP '^booking_fields(.*){$data['key']}_([0-9][a-zA-Z]*)$' ";
            $sql .= "AND `Key` <> 'booking_fields+name+{$data['key']}'";
            $rlDb->query($sql);

            $rlDb->insert($lang_keys, 'lang_keys');
        }

        return true;
    }

    /**
     * Ajax delete L field
     *
     * @param  string      $key - Field key
     * @return bool|string
     */
    public function ajaxDeleteLField($key)
    {
        global $rlDb;

        if (!$rlDb->getOne('ID', "`Key` = '{$key}'", 'booking_fields')) {
            $GLOBALS['rlDebug']->logger('Can not delete booking field, field with requested key does not exist');
            return false;
        }

        // delete column in requests table
        if ($rlDb->query('ALTER TABLE `' . RL_DBPREFIX . "booking_requests` DROP `{$key}`")) {
            // delete information from listing_fields table
            $rlDb->query('DELETE FROM `' . RL_DBPREFIX . "booking_fields` WHERE `Key` = '{$key}'");

            // delete languages phrases by current field
            $sql = 'DELETE FROM `{db_prefix}lang_keys` WHERE ';
            $sql .= "`Key` = 'booking_fields+name+{$key}' ";
            $sql .= "OR `Key` = 'booking_fields+default+{$key}' ";
            $sql .= "OR `Key` = 'booking_fields+description+{$key}'";
            $rlDb->query($sql);

            return $GLOBALS['lang']['field_deleted'];
        }

        return false;
    }
}
