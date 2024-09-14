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

class rlConfig
{
    /**
     * get configuration value by configuration name
     *
     * @param string - configuration variable name
     * @return string - configuration variable value
     *
     **/
    public function getConfig($name)
    {
        global $rlDb;

        if (empty($GLOBALS['config'])) {
            return $rlDb->getOne('Default', "`Key` = '{$name}'", 'config');
        } else {
            return $GLOBALS['config'][$name];
        }
    }

    /**
     * Set value for configuration
     *
     * @param  string $key   - Configuration key
     * @param  string $value - New value
     * @return bool
     */
    public function setConfig($key, $value)
    {
        global $rlDb, $config;

        if (!$key) {
            return false;
        }

        if (isset($config[$key])) {
            $rlDb->updateOne(['fields' => ['Default' => $value], 'where'  => ['Key' => $key]], 'config');
            return true;
        } else {
            /**
             * Create config in database if was missing before
             * @since 4.8.0
             */
            $rlDb->insertOne(['Key' => $key, 'Default' => $value], 'config');
            $config[$key] = $value;

            return true;
        }
    }

    /**
     * get all configuration by group id
     *
     * @param string - configuration group id
     * @return array - mixed
     *
     **/
    public function allConfig($group = null)
    {
        global $rlDb;

        if (empty($GLOBALS['config'])) {
            $where = !is_null($group) ? array('Group_ID' => (int) $group) : null;
            $rlDb->outputRowsMap = array('Key', 'Default');
            $configs = $rlDb->fetch($rlDb->outputRowsMap, $where, null, null, 'config');

            $GLOBALS['config'] = &$configs;
            return $configs;
        }
        return $GLOBALS['config'];
    }
}
