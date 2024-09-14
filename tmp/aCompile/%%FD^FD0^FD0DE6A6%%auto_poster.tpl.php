<?php /* Smarty version 2.6.31, created on 2024-01-06 14:32:38
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/plugins/autoPoster/admin/auto_poster.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/autoPoster/admin/auto_poster.tpl', 22, false),)), $this); ?>
<!-- AutoPoster admin area tpl -->

<script src="<?php echo (defined('RL_PLUGINS_URL') ? @RL_PLUGINS_URL : null); ?>
autoPoster/static/admin_lib.js"></script>
<link href='<?php echo (defined('RL_PLUGINS_URL') ? @RL_PLUGINS_URL : null); ?>
autoPoster/static/admin_style.css' type='text/css' rel='stylesheet' />

<?php if ($_GET['action']): ?>
    <?php $this->assign('sPost', $_POST); ?>
    <?php $this->assign('module', $_GET['module']); ?>
    <?php $this->assign('action', $_GET['action']); ?>

    <!-- Navigation bar -->
    <div id="nav_bar">
        <a href="<?php echo $this->_tpl_vars['rlBaseC']; ?>
" class="button_bar"><span class="left"></span><span class="center_list"><?php echo $this->_tpl_vars['lang']['ap_modules_list']; ?>
</span><span class="right"></span></a>

        <?php if ($this->_tpl_vars['action'] != 'edit'): ?>
            <a href="<?php echo $this->_tpl_vars['rlBaseC']; ?>
action=edit&module=<?php echo $this->_tpl_vars['module']; ?>
" class="button_bar"><span class="left"></span><span class="center_list"><?php echo $this->_tpl_vars['lang']['ap_module_configuration']; ?>
</span><span class="right"></span></a>
        <?php endif; ?>

    </div>
    <!-- Navigation bar end-->

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_start.tpl') : smarty_modifier_cat($_tmp, 'm_block_start.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <?php if ($this->_tpl_vars['action'] == 'edit'): ?>
        <?php if ($this->_tpl_vars['guide_link']): ?>
            <div class="provide-guide-box">
                <?php echo $this->_tpl_vars['guide_link']; ?>

            </div>
        <?php endif; ?>

        <fieldset class="light">
            <legend id="legend_accounts_tab_area" class="up" onclick="fieldset_action('module_config');"><?php echo $this->_tpl_vars['lang']['ap_module_settings']; ?>
</legend>

            <div id="module_config">
                <form  action="<?php echo $this->_tpl_vars['rlBaseC']; ?>
action=<?php if ($_GET['action'] == 'add'): ?>add<?php elseif ($_GET['action'] == 'edit'): ?>edit&amp;module=<?php echo $this->_tpl_vars['module']; ?>
<?php endif; ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="submit" value="1" />
                    <table class="form">
                        <?php if ($this->_tpl_vars['OAuthLink']): ?>
                            <tr>
                                <td class="name"><?php echo $this->_tpl_vars['lang']['ap_copy_valid_oauth']; ?>
</td>
                                <td class="field">
                                    <input  id="copy-correct-link" data-url="<?php echo $this->_tpl_vars['OAuthLink']; ?>
" type="button" name="<?php echo $this->_tpl_vars['lang']['copy']; ?>
" value="<?php echo $this->_tpl_vars['lang']['ap_copy']; ?>
">
                                </td>
                            </tr>
                            <script>
                                var succesfully_copied_phrase = '<?php echo $this->_tpl_vars['lang']['ap_link_copied']; ?>
';
                                <?php echo '
                                $(document).ready(function () {
                                    var autoPosterAdmin = new autoPosterAdminClass();
                                    $(\'#copy-correct-link\').click(function (e) {
                                        var link = $(this).data(\'url\');
                                        if (autoPosterAdmin.copyTextToClipBoard(link)) {
                                            printMessage(\'notice\', succesfully_copied_phrase);
                                        }
                                    });
                                });
                                '; ?>

                            </script>
                        <?php endif; ?>
                        <!-- Module configs -->
                        <?php $_from = $this->_tpl_vars['module_configs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['configItem']):
?>
                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['admin_options']['path']['view'])) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'module_configs.tpl') : smarty_modifier_cat($_tmp, 'module_configs.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        <?php endforeach; endif; unset($_from); ?>
                        <!-- Module configs end -->

                        <tr>
                            <td class="name"><?php echo $this->_tpl_vars['lang']['status']; ?>
</td>
                            <td class="field">
                                <select name="status">
                                    <option value="active" <?php if ($this->_tpl_vars['sPost']['status'] == 'active'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['active']; ?>
</option>
                                    <option value="approval" <?php if ($this->_tpl_vars['sPost']['status'] == 'approval'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['approval']; ?>
</option>
                                </select>
                            </td>
                        </tr>
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

        <!-- Module management -->
        <?php if ($this->_tpl_vars['allow_management']): ?>
            <fieldset class="light">
                <legend id="legend_accounts_tab_area" class="up" onclick="fieldset_action('module_management');"><?php echo $this->_tpl_vars['lang']['ap_module_managment']; ?>
</legend>
                <div id="module_management">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['admin_options']['path']['view'])) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'modules') : smarty_modifier_cat($_tmp, 'modules')))) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, $_GET['module']) : smarty_modifier_cat($_tmp, $_GET['module'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '.tpl') : smarty_modifier_cat($_tmp, '.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </div>
            </fieldset>
        <?php endif; ?>

        <?php if ($_GET['module'] == 'telegram'): ?>
            <script>
            <?php echo '

            $(function(){
                $(\'.get-chat-id\').click(function(){
                    var data = {
                        token: $(\'input[name="post_config[ap_telegram_bot_token]"]\').val()
                    };
                    flynax.sendAjaxRequest(\'ap_get_telegram_chat_id\', data, function(response){
                        $(\'input[name="post_config[ap_telegram_chat_id]"]\').val(response.results);
                    });
                });
            });

            '; ?>

            </script>
        <?php elseif ($_GET['module'] == 'facebook'): ?>
            <script><?php echo '
            $(function () {
                let $destinatonType = $(\'[name="post_config[ap_facebook_post_to]"]\');

                $destinatonType.change(function () {
                    fbDestinationHandler();
                });

                /**
                 * Show/hide page/group id field by value of the "Post listings to" field
                 * It must be hidden when selected "Business page", because ID will be getting automatically
                 */
                function fbDestinationHandler () {
                    let destinationType = $destinatonType.find(\'option:selected\').val(),
                        $pageGroupIDTr = $(\'[name="post_config[ap_facebook_subject_id]"]\').closest(\'tr\');

                    if (!destinationType || destinationType === \'to_page\') {
                        $pageGroupIDTr.slideUp();
                    } else {
                        $pageGroupIDTr.slideDown();
                    }
                }
            });
            '; ?>
</script>
        <?php endif; ?>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_end.tpl') : smarty_modifier_cat($_tmp, 'm_block_end.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <!-- Module management end -->

    <?php endif; ?>

<?php else: ?>
    <!-- auto poster grid -->
    <div id="grid"></div>
    <script type="text/javascript">//<![CDATA[
        lang['ap_modules'] = '<?php echo $this->_tpl_vars['lang']['ap_modules']; ?>
';
        lang['id'] = '<?php echo $this->_tpl_vars['lang']['id']; ?>
';
        lang['key'] = '<?php echo $this->_tpl_vars['lang']['key']; ?>
';
        lang['name'] = '<?php echo $this->_tpl_vars['lang']['name']; ?>
';

        <?php echo '
        $(document).ready(function(){
            var autoPosterGrid = new autoPosterModulesGridClass();
            autoPosterGrid.init();
        });
        '; ?>

    </script>
    <!-- auto poster grid end -->

    <?php if ($this->_tpl_vars['error_log']): ?>
        <div class="error-log">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_start.tpl') : smarty_modifier_cat($_tmp, 'm_block_start.tpl')), 'smarty_include_vars' => array('block_caption' => $this->_tpl_vars['lang']['system_error'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php $_from = $this->_tpl_vars['error_log']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['error_line']):
?>
            <div class="error-log_item">
                <div class="error-log_date"><?php echo $this->_tpl_vars['error_line']['date']; ?>
</div>
                <div class="error-log_message"><?php echo $this->_tpl_vars['error_line']['message']; ?>
</div>
            </div>
            <?php endforeach; endif; unset($_from); ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_end.tpl') : smarty_modifier_cat($_tmp, 'm_block_end.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

            <div id="nav_bar">
                <a href="javascript://" id="clear_logs" class="button_bar"><span class="left"></span><span class="center_remove"><?php echo $this->_tpl_vars['lang']['ap_clear_log']; ?>
</span><span class="right"></span></a>
            </div>
        </div>

        <script>
        lang['confirm_notice'] = "<?php echo $this->_tpl_vars['lang']['confirm_notice']; ?>
";
        <?php echo '

        $(function(){
            $(\'#clear_logs\').click(function(){
                Ext.MessageBox.confirm(lang[\'ext_confirm\'], lang[\'confirm_notice\'], function(btn){
                    if (btn == \'yes\'){
                        flynax.sendAjaxRequest(\'ap_clear_log\', {\'clear\': 1}, function(response, status){
                            if (response.status == \'OK\') {
                                $(\'.error-log\').hide();
                            } else {
                                printMessage(\'error\', lang.system_error);
                            }
                        });
                    }
                });
            });
        });

        '; ?>

        </script>
    <?php endif; ?>
<?php endif; ?>

<!-- AutoPoster admin area tpl end -->