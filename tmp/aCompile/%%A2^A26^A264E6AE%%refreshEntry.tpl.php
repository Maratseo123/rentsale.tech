<?php /* Smarty version 2.6.31, created on 2023-10-29 14:52:00
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/plugins/multiField/admin/refreshEntry.tpl */ ?>
<!-- refresh entry tpl -->

<script>
"use strict";

lang['recount']                       = "<?php echo $this->_tpl_vars['lang']['recount']; ?>
";
lang['mf_refresh']                    = "<?php echo $this->_tpl_vars['lang']['mf_refresh']; ?>
";
lang['mf_refresh_in_progress']        = "<?php echo $this->_tpl_vars['lang']['mf_refresh_in_progress']; ?>
";
lang['mf_geo_path_rebuilt']           = "<?php echo $this->_tpl_vars['lang']['mf_geo_path_rebuilt']; ?>
";
lang['mf_fields_rebuilt']             = "<?php echo $this->_tpl_vars['lang']['mf_fields_rebuilt']; ?>
";
lang['mf_rebuild_path_promt']         = "<?php echo $this->_tpl_vars['lang']['mf_rebuild_path_promt']; ?>
";
lang['mf_subdomains_prompt']          = "<?php echo $this->_tpl_vars['lang']['mf_subdomains_prompt']; ?>
";
lang['mf_rebuild_path_in_progress']   = "<?php echo $this->_tpl_vars['lang']['mf_rebuild_path_in_progress']; ?>
";

var mf_geo_subdomains_type     = "<?php echo $this->_tpl_vars['config']['mf_geo_subdomains_type']; ?>
";

<?php echo '
$(function(){
    var in_progress = false;
    var msg_widnow  = false;
    var start       = 0;

    var $rebuildPathButton   = $(\'#mfRebuildPaths\');
    var $rebuildFieldsButton = $(\'#mfRebuildFields\');

    var $option = $(\'select[name="post_config[mf_geo_subdomains_type][value]"]\');

    var disableButton = function($button){
        $button
            .addClass(\'disabled\')
            .attr(\'disabled\', true)
            .val(lang[\'loading\']);
    }

    var enableButton = function($button){
        var phrase = $button.attr(\'id\') == \'mfRebuildPaths\'
            ? lang[\'mf_refresh\']
            : lang[\'recount\'];

        $button
            .removeClass(\'disabled\')
            .attr(\'disabled\', false)
            .val(phrase);
    }

    var rebuild = function(){
        var data = {
            start: start,
            modify: $option.length ? 1 : 0,
            value: typeof $option != \'undefined\' ? $option.val() : 0,
            mode: \'mfRebuildPaths\',
            controller: controller
        };
        $.getJSON(rlConfig[\'ajax_url\'], data, function(response, status){
            if (status == \'success\') {
                if (response.status == \'next\') {
                    start++;
                    rebuild();

                    msg_widnow.updateProgress(response.progress / 100);
                } else if (response.status == \'completed\') {
                    in_progress = false;
                    start = 0;

                    msg_widnow.updateProgress(1);

                    if ($rebuildPathButton.length) {
                        setTimeout(function(){
                            printMessage(\'notice\', lang[\'mf_geo_path_rebuilt\']);
                            enableButton($rebuildPathButton);
                            msg_widnow.hide();
                        }, 2000);
                    } else {
                        setTimeout(function(){
                            $option.closest(\'form\').submit();
                        }, 1000);
                    }
                } else {
                    printMessage(\'error\', response.message);
                    enableButton($rebuildPathButton);
                }
            } else {
                printMessage(\'error\', lang[\'system_error\']);
            }
        });
    }

    var startProgress = function(){
        in_progress = true;

        msg_widnow = Ext.MessageBox.show({
            title: lang[\'mf_refresh\'],
            msg: lang[\'mf_refresh_in_progress\'],
            progress: true,
            width: 300,
            wait: false
        });

        msg_widnow.updateProgress(0);

        rebuild();
    }

    // Refresh paths
    $rebuildPathButton.click(function(){
        Ext.MessageBox.confirm(lang[\'ext_confirm\'], lang[\'mf_rebuild_path_promt\'], function(btn){
            if (btn == \'yes\') {
                startProgress();
                disableButton($rebuildPathButton);
            }
        });
    });

    // Rebuild fields
    $rebuildFieldsButton.click(function(){
        disableButton($rebuildFieldsButton);

        var data = {mode: \'mfRebuildFields\'}
        $.getJSON(rlConfig[\'ajax_url\'], data, function(response){
            enableButton($rebuildFieldsButton);

            if (response.status == \'ok\') {
                printMessage(\'notice\', lang[\'mf_fields_rebuilt\']);
            } else if (response.status == \'error\') {
                printMessage(\'error\', response.message);
            }
        });
    });

    // Unique option listener
    $option.change(function(){
        var val = $(this).val();

        if (mf_geo_subdomains_type != \'unique\' && val == \'unique\'
            || mf_geo_subdomains_type == \'unique\' && val != \'unique\'
        ) {
            Ext.MessageBox.confirm(lang[\'ext_confirm\'], lang[\'mf_subdomains_prompt\'], function(btn){
                if (btn == \'yes\') {
                    startProgress();
                } else {
                    $option.val(mf_geo_subdomains_type);
                }
            });
        }
    });

    $(window).bind(\'beforeunload\', function(){
        if (in_progress) {
            return lang[\'mf_rebuild_path_in_progress\'];
        }
    });
});
'; ?>

</script>

<!-- refresh entry tpl end -->