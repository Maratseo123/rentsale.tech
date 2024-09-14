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

class HybridAuth
{
    /**
     * @var \rlAccountTypes
     */
    protected $rlAccountTypes;

    /**
     * @var \Flynax\Plugins\HybridAuth\ModulesManager
     */
    protected $modules;

    /**
     * @var \Flynax\Plugins\HybridAuth\ProviderResolver
     */
    protected $providers;

    /**
     * @var \Flynax\Plugins\HybridAuth\FilesWorker
     */
    protected $filesIncluder;

    /**
     * @var \rlDb
     */
    protected $rlDb;

    /**
     * @var \reefless
     */
    private $reefless;

    /**
     * @var \rlActions
     */
    private $rlActions;

    /**
     * @var \rlSmarty
     */
    private $rlSmarty;

    /**
     * HybridAuth constructor.
     */
    public function __construct()
    {
        $this->rlAccountTypes = hybridAuthMakeObject('rlAccountTypes');
        $this->rlDb = hybridAuthMakeObject('rlDb');
        $this->rlActions = hybridAuthMakeObject('rlActions');

        $this->reefless = $GLOBALS['reefless'];
        $this->modules = new ModulesManager();
        $this->filesIncluder = new FilesWorker(\rlHybridAuthLogin::PLUGIN_NAME);
        $this->providers = new ProviderResolver();

        if (!defined('REALM')) {
            $this->rlSmarty = hybridAuthMakeObject('rlSmarty');
        }
    }

    /**
     * Checking is this current Flynax installation has more than 1 Account type
     * @return bool
     */
    public function isMultipleAccountTypeInstallation()
    {
        return (count($this->getAccountTypes()) > 1);
    }


    /**
     * Redirect user with message
     *
     * @param array  $to      - Redirect to URL
     * @param string $message - Message body
     * @param string $type    - Message type: {'notice', 'alerts', 'errors', 'infos'}
     * @param bool   $isFront - Is it front end redirect
     */
    public static function redirectWithMessage($to, $message, $type = 'notice', $isFront = false)
    {
        /** @var \rlNotice $rlNotice */
        $rlNotice = hybridAuthMakeObject('rlNotice');
        $self = new self();

        $rlNotice->saveNotice($message, $type);
        !$isFront ? $self->reefless->redirect($to) : $self->reefless->redirect(null, $to);
        exit;
    }

    /**
     * Redirect user with message in the back-end part
     * Helper of redirectWithMessage method
     *
     * @param array  $to      - Redirect to URL
     * @param string $message - Message body
     * @param string $type    - Message type: {'notice', 'alerts', 'errors', 'infos'}
     */
    public static function redirectWithMessageToAP($to, $message, $type = 'notice')
    {
        self::redirectWithMessage($to, $message, $type, false);
    }

    /**
     * Redirect user with message in the front-end part
     * Helper of redirectWithMessage method
     *
     * @param array  $to      - Redirect to URL
     * @param string $message - Message body
     * @param string $type    - Message type: {'notice', 'alerts', 'errors', 'infos'}
     */
    public static function redirectWithMessageToFront($to, $message, $type = 'notice')
    {
        self::redirectWithMessage($to, $message, $type, true);
    }

    /**
     * Getting all available account types
     *
     * @return array - Account types list
     */
    public function getAccountTypes()
    {
        /** @var \rlAccount $rlAccount */
        $rlAccount = hybridAuthMakeObject('rlAccount');
        $accountTypes = $rlAccount->getAccountTypes(array('visitor', 'affiliate'));

        foreach ($accountTypes as $key => $value) {
            if (!$value['Quick_registration']) {
                unset($accountTypes[$key]);
            }
        }

        return array_values($accountTypes);
    }

    /**
     * Getting social icons for the front-end part of the plugin
     *
     * @return array - Prepared social networks icons
     */
    public function getSocialNetworksIcon()
    {
        $icons = array();

        $folderStructure = $this->filesIncluder->getIncludingFilesStructure();
        $activeModules = $this->providers->getProviders('active');

        $iconsFolder = sprintf('%s%s', $folderStructure['url']['static'], 'social-icons/');
        $requestLink = sprintf('%s%s', RL_PLUGINS_URL, 'hybridAuthLogin/');

        foreach ($activeModules as $provider) {
            /* @todo: Remove as soon as the provider will available for WEB too */
            if ('apple' === $provider['Provider']) {
                continue;
            }

            if (!$this->modules->isModuleConfigured($provider['Provider'])) {
                continue;
            }

            $socialNetworkIcon = sprintf('%s%s.png', $iconsFolder, $provider['Provider']);
            $providerLoginUrl = sprintf('%s%s', $requestLink, $provider['Provider']);

            // TODO: Check if file is readable and exist before adding it to the icons list
            $info = array(
                'network' => $provider['Provider'],
                'name' => ucfirst($provider['Provider']),
                'icon' => $socialNetworkIcon,
                'url' => $providerLoginUrl,
            );
            $icons[] = $info;
        }

        return $icons;
    }

    /**
     * Getting all pages
     * @since 1.1.0
     *
     * @return mixed $pages - Pages array
     */
    public function getAllPages()
    {
        $this->rlDb->setTable('pages');
        $this->rlDb->outputRowsMap = array('Key', 'Path');
        $pages = $this->rlDb->fetch($this->rlDb->outputRowsMap, array('Status' => 'active'));
        $this->rlDb->resetTable();

        return $pages;
    }

    /**
     * Run after successful quick register process
     *
     * @param  array  $newAccountInfo - Result of the rlAccount->quickRegistration() method
     * @param  string $toEmail        - Email to which you want to send login credentials
     * @return bool                   - Result of the email sending process
     */
    public static function afterSuccessRegistration($newAccountInfo, $toEmail)
    {
        if (!$newAccountInfo || !$toEmail) {
            return false;
        }

        /** @var \rlMail $rlMail */
        $rlMail = hybridAuthMakeObject('rlMail');
        /** @var \rlAccount $rlAccount */
        $rlAccount = hybridAuthMakeObject('rlAccount');

        $rlLang = hybridAuthMakeObject('rlLang');
        $configs = Configs::i()->getConfig('flynax_configs');

        define('IS_LOGIN', true);
        $accountInfo = $rlAccount->getProfile((int) $newAccountInfo[2]);

        $mail_tpl = $rlMail->getEmailTemplate('quick_account_created');
        $find = array('{login}', '{password}', '{name}');
        $replace = array($newAccountInfo[0], $newAccountInfo[1], $accountInfo['Full_name']);

        $mail_tpl['body'] = str_replace($find, $replace, $mail_tpl['body']);

        return $rlMail->send($mail_tpl, $toEmail);
    }
}
