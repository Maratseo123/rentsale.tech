<?php /* Smarty version 2.6.31, created on 2023-12-18 01:50:49
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/plugins/multiField/location_selector.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/multiField/location_selector.tpl', 3, false),array('modifier', 'escape', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/multiField/location_selector.tpl', 23, false),)), $this); ?>
<!-- Location selector in user navbar | multifield -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=(defined('RL_PLUGINS') ? @RL_PLUGINS : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'multiField') : smarty_modifier_cat($_tmp, 'multiField')))) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'static') : smarty_modifier_cat($_tmp, 'static')))) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'gallery.svg') : smarty_modifier_cat($_tmp, 'gallery.svg')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<span class="circle" id="mf-location-selector">
    <span class="default<?php if ($this->_tpl_vars['mf_is_nova']): ?> header-contacts<?php endif; ?>">
        <?php echo '<svg class="mf-location-icon mr-2 align-self-center'; ?><?php if (! $this->_tpl_vars['mf_is_nova']): ?><?php echo ' header-usernav-icon-fill'; ?><?php endif; ?><?php echo '" viewBox="0 0 20 20"><use xlink:href="#mf-location"></use></svg><span class="flex-fill">'; ?><?php if ($this->_tpl_vars['geo_filter_data']['applied_location']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['geo_filter_data']['applied_location']['name']; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['lang']['mf_select_location']; ?><?php echo ''; ?><?php endif; ?><?php echo '</span>'; ?>

    </span>
</span>

<script class="fl-js-dynamic">
var mf_current_location = "<?php echo ((is_array($_tmp=$this->_tpl_vars['mf_current_location'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
";
var mf_location_autodetected = <?php if ($_SESSION['geo_location_autodetected']): ?>true<?php else: ?>false<?php endif; ?>;
lang['mf_is_your_location'] = '<?php echo $this->_tpl_vars['lang']['mf_is_your_location']; ?>
';
lang['mf_no_location_in_popover'] = '<?php echo $this->_tpl_vars['lang']['mf_no_location_in_popover']; ?>
';
lang['mf_select_location'] = '<?php echo $this->_tpl_vars['lang']['mf_select_location']; ?>
';
lang['yes'] = '<?php echo $this->_tpl_vars['lang']['yes']; ?>
';
lang['no'] = '<?php echo $this->_tpl_vars['lang']['no']; ?>
';
<?php echo '

$(function(){
    var popupPrepared = false;
    var $buttonDefault = $(\'#mf-location-selector\');
    var $button = $buttonDefault.find(\' > .default\');
    var cities = [];

    $(\'.gf-root\').on(\'click\', \'a.gf-ajax\', function(){
        gfAjaxClick($(this).data(\'key\'), $(this).data(\'path\'), $(this).data(\'link\'))
    });

    var showCities = function(){
        if (cities.length) {
            var $container = $(\'.gf-cities\');

            if (!$container.find(\'ul\').length) {
                var $list = $(\'<ul>\').attr(\'class\', \'list-unstyled row\');

                $list.append($(\'#gf_city_item\').render(cities));
                $container.append($list);
            }
        }
    }

    var showPopup = function(){
        var $geoFilterBox = $(\'.gf-root\');

        $(\'#mf-location-selector\').popup({
            click: false,
            scroll: false,
            content: $geoFilterBox,
            caption: lang[\'mf_select_location\'],
            onShow: function(){
                showCities();

                $buttonDefault.unbind(\'click\');

                createCookie(\'mf_usernavbar_popup_showed\', 1, 365);
            },
            onClose: function($interface){
                var tmp = $geoFilterBox.clone();
                $(\'#gf_tmp\').append($geoFilterBox);

                // Keep clone of interface to allow the box looks properly during the fade affect
                $interface.find(\'.body\').append(tmp);

                this.destroy();
            }
        });
    }

    var getCities = function(){
        flUtil.ajax({
            mode: \'mfGetCities\',
            path: location.pathname
        }, function(response, status) {
            if (status == \'success\' && response.status == \'OK\') {
                cities = response.results;
                showCities();
            } else {
                console.log(\'GeoFilter: Unable to get popular cities, ajax request failed\')
            }
        });
    }

    var initPopup = function(){
        if (popupPrepared) {
            showPopup();
        } else {
            flUtil.loadScript([
                rlConfig[\'tpl_base\'] + \'components/popup/_popup.js\',
                rlConfig[\'libs_url\'] + \'javascript/jsRender.js\'
            ], function(){
                showPopup();
                getCities();
                popupPrepared = true;
            });
        }
    }

    if (!readCookie(\'mf_usernavbar_popup_showed\')) {
        flUtil.loadStyle(rlConfig[\'tpl_base\'] + \'components/popover/popover.css\');
        flUtil.loadScript(rlConfig[\'tpl_base\'] + \'components/popover/_popover.js\', function(){
            var closeSave = function(popover){
                popover.close()
                createCookie(\'mf_usernavbar_popup_showed\', 1, 365);
            }

            var $content = $(\'<div>\').append(
                mf_location_autodetected
                    ? lang[\'mf_is_your_location\'].replace(\'{location}\', \'<b>\' + mf_current_location + \'</b>\')
                    : lang[\'mf_no_location_in_popover\']
            );

            $buttonDefault.popover({
                width: 200,
                content: $content,
                navigation: {
                    okButton: {
                        text: lang[\'yes\'],
                        class: \'low\',
                        onClick: function(popover){
                            closeSave(popover);

                            if (!mf_location_autodetected) {
                                setTimeout(function(){
                                    initPopup();
                                }, 10);
                            }
                        }
                    },
                    cancelButton: {
                        text: lang[\'no\'],
                        class: \'low cancel\',
                        onClick: function(popover){
                            closeSave(popover);

                            if (mf_location_autodetected) {
                                setTimeout(function(){
                                    initPopup();
                                }, 10);
                            }
                        }
                    }
                }
            }).trigger(\'click\');

            $button.click(function(){
                initPopup();
            });
        });
    } else {
        $button.click(function(){
            initPopup();
        });
    }
});

'; ?>

</script>

<!-- Location selector in user navbar | multifield end -->