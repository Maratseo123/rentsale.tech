<?php /* Smarty version 2.6.31, created on 2023-12-18 01:59:39
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/listing_type.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'rlHook', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/listing_type.tpl', 3, false),array('function', 'paging', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/listing_type.tpl', 13, false),array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/listing_type.tpl', 8, false),array('modifier', 'count', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/listing_type.tpl', 13, false),array('modifier', 'regex_replace', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/listing_type.tpl', 21, false),array('modifier', 'replace', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/listing_type.tpl', 154, false),)), $this); ?>
<!-- listing type -->

<?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'browseTop'), $this);?>


<!-- search results -->
<?php if ($this->_tpl_vars['search_results']): ?>
    <?php if (! empty ( $this->_tpl_vars['listings'] )): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'grid_navbar.tpl') : smarty_modifier_cat($_tmp, 'grid_navbar.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'grid.tpl') : smarty_modifier_cat($_tmp, 'grid.tpl')), 'smarty_include_vars' => array('hl' => true,'grid_photo' => $this->_tpl_vars['listing_type']['Photo'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <script class="fl-js-dynamic">flynaxTpl.highlightResults($('#autocomplete').val());</script>

        <!-- paging block -->
        <?php echo $this->_plugins['function']['paging'][0][0]->paging(array('calc' => $this->_tpl_vars['pInfo']['calc'],'total' => count($this->_tpl_vars['listings']),'current' => $this->_tpl_vars['pInfo']['current'],'per_page' => $this->_tpl_vars['config']['listings_per_page'],'url' => $this->_tpl_vars['search_results_url'],'method' => $this->_tpl_vars['listing_type']['Submit_method']), $this);?>

        <!-- paging block end -->
    <?php else: ?>
        <div class="text-notice">
            <?php if ($this->_tpl_vars['listing_type']['Admin_only'] || ! $this->_tpl_vars['pages']['add_listing']): ?>
                <?php echo $this->_tpl_vars['lang']['no_listings_found_deny_posting']; ?>

            <?php else: ?>
                <?php $this->assign('link', ((is_array($_tmp=((is_array($_tmp='<a href="')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['add_listing_link']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['add_listing_link'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '">$1</a>') : smarty_modifier_cat($_tmp, '">$1</a>'))); ?>
                <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['no_listings_found'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, '/\[(.+)\]/', $this->_tpl_vars['link']) : smarty_modifier_regex_replace($_tmp, '/\[(.+)\]/', $this->_tpl_vars['link'])); ?>

            <?php endif; ?>

            <br />
            <?php if (! $_COOKIE['checkAlert']): ?>
                <?php $this->assign('link', ((is_array($_tmp=((is_array($_tmp='<span name="alter-save-search" class="')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['listing_type']['Key']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['listing_type']['Key'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '"><span class="link">$1</span></span>') : smarty_modifier_cat($_tmp, '"><span class="link">$1</span></span>'))); ?>
                <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['save_search_text'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, '/\[(.+)\]/', $this->_tpl_vars['link']) : smarty_modifier_regex_replace($_tmp, '/\[(.+)\]/', $this->_tpl_vars['link'])); ?>

            <?php endif; ?>
        </div>
    <?php endif; ?>

    <script class="fl-js-dynamic">
    <?php echo '
    $(function () {
        /**
         * Save search link handler
         *
         * @since 4.8.2 - Function moved from xAjax to ajax && Function moved from system.lib.js
         */
        flUtil.loadStyle(rlConfig.tpl_base + \'components/popup/popup.css\');
        flUtil.loadScript(rlConfig.tpl_base + \'components/popup/_popup.js\', function() {
            $(\'span#save_search, span[name=alter-save-search]\').click(function() {
                var type = $(this).attr(\'class\');

                if (!type) {
                    console.log(\'Error: Missing required key of listing type.\');
                    return;
                }

                if (isLogin) {
                    $(this).popup({
                        click     : false,
                        content   : lang.save_search_confirm,
                        caption   : lang.notice,
                        navigation: {
                            okButton: {
                                text: lang.save,
                                onClick: function(popup){
                                    var $button = $(this), data;
                                    $button.addClass(\'disabled\').attr(\'disabled\', true).val(lang.loading);

                                    data = {mode: \'ajaxSaveSearch\', type: type};
                                    flUtil.ajax(data, function(response, status) {
                                        if (status === \'success\' && response && response.status === \'OK\') {
                                            printMessage(\'notice\', response.message);
                                        } else {
                                            $button.removeClass().removeAttr(\'disabled\').val(lang.save);
                                            printMessage(
                                                \'error\',
                                                response.message ? response.message : lang.system_error
                                            );
                                        }

                                        popup.close();
                                    });
                                }
                            },
                            cancelButton: {text: lang.cancel, class: \'cancel\'}
                        }
                    });
                } else {
                    let $loginForm = $(\'#login_modal_source > *\').clone();
                    $loginForm.find(\'.caption_padding\').hide();

                    $(this).popup({
                        click  : false,
                        content: $loginForm,
                        caption: \''; ?>
<?php echo $this->_tpl_vars['lang']['sign_in']; ?>
<?php echo '\',
                        width  : 320,
                        onShow : function ($popup) {
                            $popup.find(\'form\').prepend(
                                $(\'<input>\', {type: \'hidden\', name: \'alert_type\', value: type})
                            );

                            // Prevent closing the popup by click on label with checkbox
                            if ($popup.find(\'.remember-me\')) {
                                $popup.find(\'input#css_INPUT_1\').attr(\'id\', \'css_INPUT_99999\');
                                $popup.find(\'label[for="css_INPUT_1"]\').attr(\'for\', \'css_INPUT_99999\');
                            }
                        }
                    });
                }
            });
        });
    });
    '; ?>

    </script>
    <!-- search results end -->
<?php else: ?>
    <!-- browse/search forms mode -->

    <?php if ($this->_tpl_vars['advanced_search']): ?>

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'advanced_search.tpl') : smarty_modifier_cat($_tmp, 'advanced_search.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <?php else: ?>

        <?php if (! empty ( $this->_tpl_vars['category']['des'] )): ?>
            <div class="category-description">
                <?php echo $this->_tpl_vars['category']['des']; ?>

            </div>
        <?php endif; ?>

        <?php if (! empty ( $this->_tpl_vars['listings'] )): ?>

            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'grid_navbar.tpl') : smarty_modifier_cat($_tmp, 'grid_navbar.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'grid.tpl') : smarty_modifier_cat($_tmp, 'grid.tpl')), 'smarty_include_vars' => array('grid_photo' => $this->_tpl_vars['listing_type']['Photo'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

            <!-- paging block -->
            <?php if ($this->_tpl_vars['config']['mod_rewrite']): ?>
                <?php echo $this->_plugins['function']['paging'][0][0]->paging(array('calc' => $this->_tpl_vars['pInfo']['calc'],'total' => count($this->_tpl_vars['listings']),'current' => $this->_tpl_vars['pInfo']['current'],'per_page' => $this->_tpl_vars['config']['listings_per_page'],'url' => $this->_tpl_vars['category']['Path']), $this);?>

            <?php else: ?>
                <?php echo $this->_plugins['function']['paging'][0][0]->paging(array('calc' => $this->_tpl_vars['pInfo']['calc'],'total' => count($this->_tpl_vars['listings']),'current' => $this->_tpl_vars['pInfo']['current'],'per_page' => $this->_tpl_vars['config']['listings_per_page'],'url' => ((is_array($_tmp='category=')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['category']['ID']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['category']['ID']))), $this);?>

            <?php endif; ?>
            <!-- paging block end -->

        <?php else: ?>
            <?php if ($this->_tpl_vars['category']['Lock']): ?>
                <?php $this->assign('br_count', count($this->_tpl_vars['bread_crumbs'])); ?>
                <?php $this->assign('br_count', $this->_tpl_vars['br_count']-2); ?>

                <?php if ($this->_tpl_vars['config']['mod_rewrite']): ?>
                    <?php $this->assign('lock_link', ((is_array($_tmp=$this->_tpl_vars['rlBase'])) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['bread_crumbs'][$this->_tpl_vars['br_count']]['path']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['bread_crumbs'][$this->_tpl_vars['br_count']]['path']))); ?>
                    <?php if ($this->_tpl_vars['listing_type']['Cat_postfix']): ?>
                        <?php $this->assign('lock_link', ((is_array($_tmp=$this->_tpl_vars['lock_link'])) ? $this->_run_mod_handler('cat', true, $_tmp, '.html') : smarty_modifier_cat($_tmp, '.html'))); ?>
                    <?php else: ?>
                        <?php $this->assign('lock_link', ((is_array($_tmp=$this->_tpl_vars['lock_link'])) ? $this->_run_mod_handler('cat', true, $_tmp, '/') : smarty_modifier_cat($_tmp, '/'))); ?>
                    <?php endif; ?>
                <?php else: ?>
                    <?php $this->assign('lock_link', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['rlBase'])) ? $this->_run_mod_handler('cat', true, $_tmp, '?page=') : smarty_modifier_cat($_tmp, '?page=')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['bread_crumbs'][$this->_tpl_vars['br_count']]['path']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['bread_crumbs'][$this->_tpl_vars['br_count']]['path']))); ?>
                <?php endif; ?>
                <?php $this->assign('replace_name', ('{')."name".('}')); ?>
                <?php $this->assign('replace', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp='<a title="')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['lang']['back_to_category']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['lang']['back_to_category'])))) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['replace_name'], $this->_tpl_vars['bread_crumbs'][$this->_tpl_vars['br_count']]['name']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['replace_name'], $this->_tpl_vars['bread_crumbs'][$this->_tpl_vars['br_count']]['name'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '" href="') : smarty_modifier_cat($_tmp, '" href="')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['lock_link']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['lock_link'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '">$1</a>') : smarty_modifier_cat($_tmp, '">$1</a>'))); ?>
                <div class="text-notice"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['browse_category_locked'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, '/\[(.+)\]/', $this->_tpl_vars['replace']) : smarty_modifier_regex_replace($_tmp, '/\[(.+)\]/', $this->_tpl_vars['replace'])); ?>
</div>
            <?php else: ?>
                <div class="text-notice">
                    <?php if ($this->_tpl_vars['listing_type']['Admin_only'] || ! $this->_tpl_vars['pages']['add_listing']): ?>
                        <?php echo $this->_tpl_vars['lang']['no_listings_here_submit_deny']; ?>

                    <?php else: ?>
                        <?php $this->assign('link', ((is_array($_tmp=((is_array($_tmp='<a href="')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['add_listing_link']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['add_listing_link'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '">$1</a>') : smarty_modifier_cat($_tmp, '">$1</a>'))); ?>
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['no_listings_here'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, '/\[(.+)\]/', $this->_tpl_vars['link']) : smarty_modifier_regex_replace($_tmp, '/\[(.+)\]/', $this->_tpl_vars['link'])); ?>

                    <?php endif; ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>

    <?php endif; ?>

<?php endif; ?>
<!-- browse mode -->

<script class="fl-js-dynamic">
var is_advanced_search = <?php if ($this->_tpl_vars['advanced_search']): ?>true<?php else: ?>false<?php endif; ?>;
<?php echo '

flUtil.loadScript(rlConfig[\'tpl_base\'] + \'js/form.js\', function(){
    if (is_advanced_search) {
        flForm.realtyPropType();
    } else {
        flForm.realtyPropType(
            \'div.search-item span.custom-input input[name="f[sale_rent]"]\',
            \'div.search-item span.custom-input input[name="f[time_frame]"]\',
            \'.search-item\'
        );
    }
});

'; ?>

</script>

<?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'browseBottom'), $this);?>


<!-- listing type end -->