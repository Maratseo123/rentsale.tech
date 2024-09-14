<?php /* Smarty version 2.6.31, created on 2023-12-18 01:50:46
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/content.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/content.tpl', 7, false),array('modifier', 'escape', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/content.tpl', 72, false),array('modifier', 'regex_replace', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/content.tpl', 74, false),array('function', 'rlHook', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/content.tpl', 18, false),)), $this); ?>
<!-- page content -->

<?php $this->assign('featured_gallary', false); ?>

<div id="wrapper" class="flex-fill w-100">
    <section id="main_container">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'bread_crumbs.tpl') : smarty_modifier_cat($_tmp, 'bread_crumbs.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

        <?php if ($this->_tpl_vars['pageInfo']['Key'] != 'search_on_map' && $this->_tpl_vars['config']['header_banner_space']): ?>
            <div class="header-banner-cont w-100 h-100 mx-auto <?php if (! $this->_tpl_vars['bread_crumbs_exists']): ?>pt-4<?php endif; ?> d-flex justify-content-center">
                <div id="header-banner" class="point1 mx-auto overflow-hidden">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'header_banner.tpl') : smarty_modifier_cat($_tmp, 'header_banner.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="inside-container point1 clearfix pt-4 pb-5 mt-lg-3">
            <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'tplAbovePageContent'), $this);?>


            <?php if ($this->_tpl_vars['pageInfo']['Controller'] == 'listing_details'): ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'listing-details-header.tpl') : smarty_modifier_cat($_tmp, 'listing-details-header.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php endif; ?>

            <div class="row">
                <!-- left blocks area on home page -->
                <?php if ($this->_tpl_vars['side_bar_exists'] && ( $this->_tpl_vars['blocks']['left'] || $this->_tpl_vars['pageInfo']['Controller'] == 'listing_details' )): ?>
                    <aside class="left <?php if ($this->_tpl_vars['pageInfo']['Controller'] == 'listing_details'): ?>order-2 col-lg-4<?php else: ?>col-lg-3<?php endif; ?>">
                        <?php echo ''; ?><?php if ($this->_tpl_vars['pageInfo']['Controller'] == 'listing_details'): ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'listing_details_sidebar.tpl') : smarty_modifier_cat($_tmp, 'listing_details_sidebar.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['blocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?><?php echo ''; ?><?php if ($this->_tpl_vars['block']['Side'] == 'left'): ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'blocks_manager.tpl') : smarty_modifier_cat($_tmp, 'blocks_manager.tpl')), 'smarty_include_vars' => array('block' => $this->_tpl_vars['block'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?>

                    </aside>
                <?php endif; ?>
                <!-- left blocks area end -->

                <section id="content" class="<?php if ($this->_tpl_vars['side_bar_exists']): ?><?php if ($this->_tpl_vars['pageInfo']['Controller'] == 'listing_details'): ?>order-1 col-lg-8<?php else: ?>col-lg-9<?php endif; ?><?php else: ?>col-lg-12<?php endif; ?>">
                    <?php if ($this->_tpl_vars['pageInfo']['Key'] != 'search_on_map' && $this->_tpl_vars['pageInfo']['Controller'] != 'listing_details' && ! $this->_tpl_vars['no_h1']): ?>
                        <?php if ($this->_tpl_vars['navIcons']): ?>
                            <div class="h1-nav">
                                <nav id="content_nav_icons">
                                    <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'pageNavIcons'), $this);?>


                                    <?php if (! empty ( $this->_tpl_vars['navIcons'] )): ?>
                                        <?php $_from = $this->_tpl_vars['navIcons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['icon']):
?>
                                            <?php echo $this->_tpl_vars['icon']; ?>

                                        <?php endforeach; endif; unset($_from); ?>
                                    <?php endif; ?>
                                </nav>
                        <?php endif; ?>

                        <?php if (( $this->_tpl_vars['pageInfo']['Controller'] == 'home' && $this->_tpl_vars['config']['home_page_h1'] && $this->_tpl_vars['config']['home_map_search'] ) || $this->_tpl_vars['pageInfo']['Controller'] != 'home'): ?>
                            <h1<?php if (( $this->_tpl_vars['pageInfo']['Key'] == 'login' || $this->_tpl_vars['pageInfo']['Login'] ) && ! $this->_tpl_vars['isLogin']): ?> class="text-center"<?php endif; ?>><?php if ($this->_tpl_vars['pageInfo']['h1']): ?><?php echo $this->_tpl_vars['pageInfo']['h1']; ?>
<?php else: ?><?php echo $this->_tpl_vars['pageInfo']['name']; ?>
<?php endif; ?></h1>
                        <?php endif; ?>

                        <?php if ($this->_tpl_vars['navIcons']): ?>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>

                    <div id="system_message">
                        <?php if ($this->_tpl_vars['errors'] || $this->_tpl_vars['pNotice'] || $this->_tpl_vars['pAlert']): ?>
                            <script class="fl-js-dynamic">
                                var fixed_message = <?php if ($this->_tpl_vars['fixed_message']): ?>false<?php else: ?>true<?php endif; ?>;
                                var message_text = '', error_fields = '';
                                var message_type = 'error';
                                <?php if (isset ( $this->_tpl_vars['errors'] )): ?>
                                    error_fields = <?php if ($this->_tpl_vars['error_fields']): ?>'<?php echo ((is_array($_tmp=$this->_tpl_vars['error_fields'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
'<?php else: ?>false<?php endif; ?>;
                                    message_text += '<ul>';
                                    <?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['error']):
?>message_text += '<li><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['error'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, "/[\r\t\n]/", "<br />") : smarty_modifier_regex_replace($_tmp, "/[\r\t\n]/", "<br />")))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
</li>';<?php endforeach; endif; unset($_from); ?>
                                    message_text += '</ul>';
                                <?php endif; ?>
                                <?php if (isset ( $this->_tpl_vars['pNotice'] )): ?>
                                    message_text = '<?php echo ((is_array($_tmp=$this->_tpl_vars['pNotice'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
';
                                    message_type = 'notice';
                                <?php endif; ?>
                                <?php if (isset ( $this->_tpl_vars['pAlert'] )): ?>
                                    var message_text = '<?php echo ((is_array($_tmp=$this->_tpl_vars['pAlert'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
';
                                    message_type = 'warning';
                                <?php endif; ?>
                                <?php echo '
                                $(document).ready(function(){
                                    if (message_text) {
                                        printMessage(message_type, message_text, error_fields, fixed_message);
                                    }
                                });
                            '; ?>
</script>
                        <?php endif; ?>

                        <!-- no javascript mode -->
                        <?php if (! (defined('IS_BOT') ? @IS_BOT : null)): ?>
                        <noscript>
                        <div class="warning">
                            <div class="inner">
                                <div class="icon"></div>
                                <div class="message"><?php echo $this->_tpl_vars['lang']['no_javascript_warning']; ?>
</div>
                            </div>
                        </div>
                        </noscript>
                        <?php endif; ?>
                        <!-- no javascript mode end -->
                    </div>

                    <?php if ($this->_tpl_vars['pageInfo']['Key'] != 'search_on_map'): ?>
                        <?php if ($this->_tpl_vars['blocks']['top']): ?>
                        <!-- top blocks area -->
                        <aside class="top">
                            <?php $_from = $this->_tpl_vars['blocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
                            <?php if ($this->_tpl_vars['block']['Side'] == 'top'): ?>
                                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'blocks_manager.tpl') : smarty_modifier_cat($_tmp, 'blocks_manager.tpl')), 'smarty_include_vars' => array('block' => $this->_tpl_vars['block'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                            <?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?>
                        <!-- top blocks area end -->
                        </aside>
                        <?php endif; ?>
                    <?php endif; ?>

                    <section id="controller_area"><?php echo ''; ?><?php if ($this->_tpl_vars['pageInfo']['Page_type'] == 'system'): ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['content'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php else: ?><?php echo '<div class="content-padding">'; ?><?php echo $this->_tpl_vars['staticContent']; ?><?php echo '</div>'; ?><?php endif; ?><?php echo ''; ?>
</section>

                    <?php if ($this->_tpl_vars['pageInfo']['Key'] != 'search_on_map'): ?>
                        <!-- middle blocks area -->
                        <?php if ($this->_tpl_vars['blocks']['middle']): ?>
                        <aside class="middle">
                            <?php $_from = $this->_tpl_vars['blocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
                                <?php if ($this->_tpl_vars['block']['Side'] == 'middle'): ?>
                                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'blocks_manager.tpl') : smarty_modifier_cat($_tmp, 'blocks_manager.tpl')), 'smarty_include_vars' => array('block' => $this->_tpl_vars['block'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                <?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?>
                        </aside>
                        <?php endif; ?>
                        <!-- middle blocks area end -->

                        <?php if ($this->_tpl_vars['blocks']['middle_left'] || $this->_tpl_vars['blocks']['middle_right']): ?>
                        <!-- middle blocks area -->
                        <aside class="row two-middle">
                            <div class="col-md-6 col-sm-12">
                                <div>
                                    <?php $_from = $this->_tpl_vars['blocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
                                    <?php if ($this->_tpl_vars['block']['Side'] == 'middle_left'): ?>
                                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'blocks_manager.tpl') : smarty_modifier_cat($_tmp, 'blocks_manager.tpl')), 'smarty_include_vars' => array('block' => $this->_tpl_vars['block'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                    <?php endif; ?>
                                    <?php endforeach; endif; unset($_from); ?>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <div>
                                    <?php $_from = $this->_tpl_vars['blocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
                                    <?php if ($this->_tpl_vars['block']['Side'] == 'middle_right'): ?>
                                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'blocks_manager.tpl') : smarty_modifier_cat($_tmp, 'blocks_manager.tpl')), 'smarty_include_vars' => array('block' => $this->_tpl_vars['block'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                    <?php endif; ?>
                                    <?php endforeach; endif; unset($_from); ?>
                                </div>
                            </div>
                        </aside>
                        <!-- middle blocks area end -->
                        <?php endif; ?>

                        <?php if ($this->_tpl_vars['blocks']['bottom']): ?>
                        <!-- bottom blocks area -->
                        <aside class="bottom">
                            <?php $_from = $this->_tpl_vars['blocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
                            <?php if ($this->_tpl_vars['block']['Side'] == 'bottom'): ?>
                                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'blocks_manager.tpl') : smarty_modifier_cat($_tmp, 'blocks_manager.tpl')), 'smarty_include_vars' => array('block' => $this->_tpl_vars['block'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                            <?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?>
                        </aside>
                        <!-- bottom blocks area end -->
                        <?php endif; ?>
                    <?php endif; ?>
                </section>
            </div>
        </div>
    </section>
</div>

<?php if ($this->_tpl_vars['plugins']['massmailer_newsletter']): ?>
    <div class="hide" id="tmp-newsletter"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=(defined('RL_PLUGINS') ? @RL_PLUGINS : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'massmailer_newsletter') : smarty_modifier_cat($_tmp, 'massmailer_newsletter')))) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'block.tpl') : smarty_modifier_cat($_tmp, 'block.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
<?php endif; ?>

<!-- page content end -->