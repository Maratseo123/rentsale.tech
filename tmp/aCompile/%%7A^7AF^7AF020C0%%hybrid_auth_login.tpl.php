<?php /* Smarty version 2.6.31, created on 2023-12-09 23:00:42
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/plugins/hybridAuthLogin/admin/hybrid_auth_login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/hybridAuthLogin/admin/hybrid_auth_login.tpl', 12, false),)), $this); ?>
<?php if ($_GET['action']): ?>
    <?php $this->assign('sPost', $_POST); ?>
    <?php $this->assign('module', $_GET['module']); ?>
    <?php $this->assign('action', $_GET['action']); ?>

    <!-- Navigation bar -->
    <div id="nav_bar">
        <a href="<?php echo $this->_tpl_vars['rlBaseC']; ?>
" class="button_bar"><span class="left"></span><span class="center_list"><?php echo $this->_tpl_vars['lang']['ha_modules_list']; ?>
</span><span class="right"></span></a>
    </div>
    <!-- Navigation bar end-->

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_start.tpl') : smarty_modifier_cat($_tmp, 'm_block_start.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <?php if ($this->_tpl_vars['guide_link']): ?>
        <div class="provide-guide-box"><?php echo $this->_tpl_vars['guide_link']; ?>
</div>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['module'] == 'apple'): ?>
        <?php echo $this->_tpl_vars['lang']['ha_apple_configuration_notice']; ?>

    <?php else: ?>
    <fieldset class="light">
        <legend id="legend_accounts_tab_area" class="up" onclick="fieldset_action('module_config');"><?php echo $this->_tpl_vars['lang']['ha_module']; ?>
</legend>
        <div id="module_config">
            <form action="<?php echo $this->_tpl_vars['rlBaseC']; ?>
action=<?php if ($_GET['action'] == 'add'): ?>add<?php elseif ($_GET['action'] == 'edit'): ?>edit&amp;module=<?php echo $this->_tpl_vars['module']; ?>
<?php endif; ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="submit" value="1" />

                <table class="form">
                    <?php if ($this->_tpl_vars['redirect_url']): ?>
                        <tr>
                            <td class="name">
                                <?php echo $this->_tpl_vars['lang']['ha_copy_link']; ?>

                            </td>
                            <td class="field">
                                <input data-link="<?php echo $this->_tpl_vars['redirect_url']; ?>
" id="ha-copy-redirect-link" type="button" value="<?php echo $this->_tpl_vars['lang']['ha_copy']; ?>
">
                            </td>
                        </tr>

                        <script type="text/javascript">
                            var shouldEnableCopyRedirectLink = <?php if ($this->_tpl_vars['redirect_url']): ?>true<?php else: ?>false<?php endif; ?>;
                            <?php echo '
                            $(document).ready(function () {
                                var hybridAuthAdmin = new hybridAuthAdminClass();
                                if (shouldEnableCopyRedirectLink) {
                                    hybridAuthAdmin.enableLinkCopyButton();
                                }
                            });
                            '; ?>

                        </script>
                    <?php endif; ?>
                    <!-- Module configs -->
                    <?php $_from = $this->_tpl_vars['module_settings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['configItem']):
?>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['hybrid_configs']['path']['view'])) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'module_configs.tpl') : smarty_modifier_cat($_tmp, 'module_configs.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php endforeach; endif; unset($_from); ?>
                    <!-- Module configs end -->

                    <tr>
                        <td></td>
                        <td class="field">
                            <input type="submit" value="<?php echo $this->_tpl_vars['lang']['edit']; ?>
" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </fieldset>
    <?php endif; ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_end.tpl') : smarty_modifier_cat($_tmp, 'm_block_end.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
    <!-- hybrid auth main grid -->
    <div id="grid"></div>
    <!-- hybrid auth main grid end -->

    <script type="text/javascript">
        var haLang = [];
        haLang['ha_ap_modules'] = '<?php echo $this->_tpl_vars['lang']['ha_ap_modules']; ?>
';
        haIsFacebookConnectEnabled = <?php echo $this->_tpl_vars['ha_is_facebook_connect_enabled']; ?>
;
        <?php echo '
        $(document).ready(function () {
            var hybridAuthAdmin = new hybridAuthAdminClass();
            if (!haIsFacebookConnectEnabled) {
                hybridAuthAdmin.enableMainGrid();
            }
        });
        '; ?>

    </script>
<?php endif; ?>
