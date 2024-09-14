<?php /* Smarty version 2.6.31, created on 2024-09-09 18:59:15
         compiled from /var/www/u2273289/data/www/rentsale.tech/plugins/autoPoster/admin/view/settings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'version_compare', '/var/www/u2273289/data/www/rentsale.tech/plugins/autoPoster/admin/view/settings.tpl', 4, false),)), $this); ?>
<!-- Settings handler of the AutoPoster plugin tpl -->

<script>
    const isXlsPluginAvailable = <?php if ($this->_tpl_vars['plugins']['export_import'] && ((is_array($_tmp=$this->_tpl_vars['plugins']['export_import'])) ? $this->_run_mod_handler('version_compare', true, $_tmp, '3.9.0', '>') : version_compare($_tmp, '3.9.0', '>'))): ?>true<?php else: ?>false<?php endif; ?>,
        isXmlPluginAvailable = <?php if ($this->_tpl_vars['plugins']['xmlFeeds'] && ((is_array($_tmp=$this->_tpl_vars['plugins']['xmlFeeds'])) ? $this->_run_mod_handler('version_compare', true, $_tmp, '3.5.0', '>') : version_compare($_tmp, '3.5.0', '>'))): ?>true<?php else: ?>false<?php endif; ?>;

<?php echo '
    $(function() {
        let $apOwnCronField = $(\'[name="post_config[ap_own_cron][value]"]\').closest(\'td\');

        autoPosterHandler($apOwnCronField.find(\'input:checked\').val());

        $apOwnCronField.change(function() {
            autoPosterHandler($apOwnCronField.find(\'input:checked\').val());
        });

        if (!isXlsPluginAvailable) {
            let $inputs = $(\'[name="post_config[ap_xls_frontend][value]"],[name="post_config[ap_xls_backend][value]"]\');
            $inputs.filter(\'[value=0]\').trigger(\'click\');
            $inputs.prop(\'disabled\', true);
        }

        if (!isXmlPluginAvailable) {
            let $inputs = $(\'[name="post_config[ap_xml_backend][value]"]\');
            $inputs.filter(\'[value=0]\').trigger(\'click\');
            $inputs.prop(\'disabled\', true);
        }
    });

    /**
     * Show/hide necessary fields of selected autoposter own cron
     */
    const autoPosterHandler = function(ownCron) {
        let $cronAdsLimit = $(\'[name="post_config[ap_cron_ads_limit][value]"]\').filter(\'[type="text"]\');

        if (Number(ownCron)) {
            $cronAdsLimit.prop(\'disabled\', false).removeClass(\'disabled\');
        } else {
            $cronAdsLimit.prop(\'disabled\', true).addClass(\'disabled\');
        }
    }
'; ?>
</script>

<!-- Settings handler of the AutoPoster plugin tpl end -->