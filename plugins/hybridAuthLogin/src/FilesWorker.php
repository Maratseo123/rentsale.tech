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

class FilesWorker
{
    /**
     * @var array - Plugin folders stucture
     */
    private $paths;

    /**
     * @var string - Folder structure will build depending on this plugin name
     */
    private $pluginName;

    /**
     * @var \rlSmarty
     */
    private $rlSmarty;

    public function __construct($pluginName)
    {
        $this->setPluginName($pluginName);
        if ($GLOBALS['rlSmarty']) {
            $this->rlSmarty = $GLOBALS['rlSmarty'];
        }

        if ($this->getPluginName()) {
            $this->buildPaths();
        }
    }

    /**
     * Getter of the pluginName property
     *
     * @return string
     */
    public function getPluginName()
    {
        return $this->pluginName;
    }

    /**
     * Setter of the pluginName property
     *
     * @param string $pluginName
     */
    public function setPluginName($pluginName)
    {
        $this->pluginName = (string) $pluginName;
    }

    /**
     * Build path and URL to the plugin: view, static folders
     */
    private function buildPaths()
    {

        $pathBase = RL_PLUGINS . $this->getPluginName();
        $urlBase = RL_PLUGINS_URL . $this->getPluginName();

        $configs = array(
            'url' => array(
                'view' => "{$urlBase}/view/",
                'static' => "{$urlBase}/static/",
            ),
            'path' => array(
                'view' => "{$pathBase}/view/",
                'static' => "{$pathBase}/static/",
            ),
        );

        $this->paths = $configs;
    }

    /**
     * Getter of the paths property
     *
     * @return array
     */
    public function getIncludingFilesStructure()
    {
        return $this->paths;
    }

    /**
     * Return full path of the view
     *
     * @param  string $viewName - Tpl file of which you want to get full path
     * @return string
     */
    public function getViewPath($viewName)
    {
        $pluginStructure = $this->getIncludingFilesStructure();
        return sprintf('%s%s.tpl', $pluginStructure['path']['view'], $viewName);
    }

    /**
     * Load view file from the 'view' folder of the plugin
     *
     * @param string $viewName - View name including extension
     */
    public function loadView($viewName)
    {
        $viewPath = $this->getViewPath($viewName);
        if (file_exists($viewPath) && is_readable($viewPath)) {
            $this->rlSmarty->display($viewPath);
        }
    }
}
