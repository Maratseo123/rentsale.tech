<?php

/******************************************************************************
 *  
 *  PROJECT: Flynax Classifieds Software
 *  VERSION: 4.7.2
 *  LICENSE: RU70XA4A4YQ2 - https://www.flynax.ru/user-agreement.html
 *  PRODUCT: General Classifieds
 *  DOMAIN: heidenbauer.ru
 *  FILE: REQUESTS.PHP
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

namespace Flynax\Plugins\HybridAuth;

class Configs
{
    /**
     * @var array - Plugin configs
     */
    protected $configs;

    /**
     * @var Configs class instance
     */
    private static $instance = null;

    /**
     * Get plugin config by name
     *
     * @param string $configName
     * @return mixed              - Configuration plugin value
     */
    public  function getConfig($configName = '')
    {
        return $this->configs[$configName];
    }

    /**
     * Set plugin configuration
     *
     * @param string $configName
     * @param string $value
     * @return bool
     */
    public function setConfig($configName = '', $value = '')
    {
        if (!$configName || !$value) {
            return false;
        }

        $this->configs[$configName] = $value;
        return true;
    }

    /**
     * Get instance of the class
     *
     * @return \Flynax\Plugins\HybridAuth\Configs
     */
    public static function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * Return an instance of the current class
     * Helper of the getInstance method
     *
     * @return \Flynax\Plugins\HybridAuth\Configs
     */
    public static function i()
    {
        return self::getInstance();
    }

    /*
    * Cloning blocked of the Singleton class
    */
    private function __clone()
    {
    }

    /**
     * Constructor is empty for Singleton
     */
    private function __construct()
    {
    }
}
