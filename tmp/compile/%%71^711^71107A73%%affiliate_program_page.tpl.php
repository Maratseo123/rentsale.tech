<?php /* Smarty version 2.6.31, created on 2024-05-02 03:32:10
         compiled from /var/www/u2273289/data/www/rentsale.tech/plugins/affiliate/affiliate_program_page.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/plugins/affiliate/affiliate_program_page.tpl', 5, false),array('modifier', 'replace', '/var/www/u2273289/data/www/rentsale.tech/plugins/affiliate/affiliate_program_page.tpl', 70, false),)), $this); ?>
<!-- affiliate program page tpl -->

<?php $this->assign('aff_terms_of_use_page_name', 'pages+name+aff_terms_of_use_program_page'); ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?>
    <?php $this->assign('aff_terms_of_use_link', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['rlBase'])) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['pages']['aff_terms_of_use_program_page']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['pages']['aff_terms_of_use_program_page'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '.html') : smarty_modifier_cat($_tmp, '.html'))); ?>
<?php else: ?>
    <?php $this->assign('aff_terms_of_use_link', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['rlBase'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'index.php?page=') : smarty_modifier_cat($_tmp, 'index.php?page=')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['pages']['aff_terms_of_use_program_page']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['pages']['aff_terms_of_use_program_page']))); ?>
<?php endif; ?>
<?php $this->assign('aff_terms_of_use_link', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp='<a class="aff_terms_of_use_link" href="')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['aff_terms_of_use_link']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['aff_terms_of_use_link'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '" target="_blank" title="') : smarty_modifier_cat($_tmp, '" target="_blank" title="')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['lang'][$this->_tpl_vars['aff_terms_of_use_page_name']]) : smarty_modifier_cat($_tmp, $this->_tpl_vars['lang'][$this->_tpl_vars['aff_terms_of_use_page_name']])))) ? $this->_run_mod_handler('cat', true, $_tmp, '">') : smarty_modifier_cat($_tmp, '">')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['lang'][$this->_tpl_vars['aff_terms_of_use_page_name']]) : smarty_modifier_cat($_tmp, $this->_tpl_vars['lang'][$this->_tpl_vars['aff_terms_of_use_page_name']])))) ? $this->_run_mod_handler('cat', true, $_tmp, '</a>') : smarty_modifier_cat($_tmp, '</a>'))); ?>

<!-- content of the Affiliate page -->
<div class="content-padding affiliate">
    <?php $this->assign('affiliate_page_static_content', "pages+content+aff_program_page"); ?>
    <?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['affiliate_page_static_content']]; ?>

</div>
<!-- content of the Affiliate page end -->

<!-- login/registration process only for affiliate accounts -->
<?php if (! $this->_tpl_vars['isLogin'] || ( $this->_tpl_vars['isLogin'] && $this->_tpl_vars['account_info']['Type'] != 'affiliate' )): ?>
    <div class="affiliate">
        <div class="auth"><?php echo '<div class="cell"><div><div class="caption">'; ?><?php echo $this->_tpl_vars['lang']['sign_in']; ?><?php echo '</div><div>'; ?><?php if ($this->_tpl_vars['account_info']['Type'] != 'affiliate'): ?><?php echo ''; ?><?php $this->assign('isLogin', false); ?><?php echo ''; ?><?php 
                                $GLOBALS['config']['security_login_attempt_user_module_tmp'] = $GLOBALS['config']['security_login_attempt_user_module'];
                                $GLOBALS['config']['security_login_attempt_user_module'] = false;
                             ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='menus')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'account_menu.tpl') : smarty_modifier_cat($_tmp, 'account_menu.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php if ($this->_tpl_vars['account_info']['Type'] != 'affiliate'): ?><?php echo ''; ?><?php $this->assign('isLogin', true); ?><?php echo ''; ?><?php 
                                $GLOBALS['config']['security_login_attempt_user_module'] = $GLOBALS['config']['security_login_attempt_user_module_tmp'];
                                unset($GLOBALS['config']['security_login_attempt_user_module_tmp']);
                             ?><?php echo ''; ?><?php endif; ?><?php echo '</div></div></div><div class="divider">'; ?><?php echo $this->_tpl_vars['lang']['or']; ?><?php echo '</div><div class="cell"><div><div class="caption">'; ?><?php echo $this->_tpl_vars['lang']['sign_up']; ?><?php echo '</div><div><form class="register-form-affiliate" action="" method="post"><input type="text" name="register[name]" maxlength="100" value="'; ?><?php echo $_POST['register']['name']; ?><?php echo '" placeholder="'; ?><?php echo $this->_tpl_vars['lang']['your_name']; ?><?php echo '" /><input type="text" name="register[email]" maxlength="150" value="'; ?><?php echo $_POST['register']['email']; ?><?php echo '" placeholder="'; ?><?php echo $this->_tpl_vars['lang']['your_email']; ?><?php echo '" /><div class="name accept_checkbox"><label><input '; ?><?php if ($_POST['register']['accept'] == 'yes'): ?><?php echo 'checked="checked"'; ?><?php endif; ?><?php echo ' type="checkbox" name="register[accept]" value="yes" class="policy" /> '; ?><?php echo $this->_tpl_vars['lang']['aff_affiliate_accept']; ?><?php echo ' '; ?><?php echo $this->_tpl_vars['aff_terms_of_use_link']; ?><?php echo '</label></div><input name="affiliate_join_button" '; ?><?php if (! $_POST['register']['accept']): ?><?php echo 'disabled="disabled" class="disabled"'; ?><?php endif; ?><?php echo ' type="submit" value="'; ?><?php echo $this->_tpl_vars['lang']['registration']; ?><?php echo '" /></form></div></div></div>'; ?>
</div>
    </div>

    <?php $this->assign('sReplace', ('{')."field".('}')); ?>
    <?php $this->assign('missing_field', ((is_array($_tmp=$this->_tpl_vars['lang']['notice_field_empty'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['sReplace'], 'error_field') : smarty_modifier_replace($_tmp, $this->_tpl_vars['sReplace'], 'error_field'))); ?>

    <script class="fl-js-dynamic"><?php echo '
        $(function() {
            let $button = $(\'input[name="affiliate_join_button"]\'),
                $form   = $(\'form.register-form-affiliate\'),
                $name   = $(\'input[name="register[name]"]\'),
                $email  = $(\'input[name="register[email]"]\');

            $(\'input[name="register[accept]"]\').click(function() {
                if ($(this).is(\':checked\')) {
                    $button.removeAttr(\'disabled\').removeClass(\'disabled\');
                } else {
                    $button.attr(\'disabled\', \'disabled\').addClass(\'disabled\');
                }
            });

            $(\'<input/>\', {\'type\' : \'hidden\', \'name\' : \'affiliate_log_form\', \'value\' : \'1\'}).appendTo(
                \'div.auth form.login-form\'
            );

            let error = \''; ?>
<?php echo $this->_tpl_vars['missing_field']; ?>
<?php echo '\', errorField = \'\', fieldName = \'\';

            $button.click(function() {
                $form.submit(function() { return false; });

                let nameValue = $name.val(), emailValue = $email.val();

                if (nameValue === \'\' || emailValue === \'\') {
                    if (nameValue === \'\' && emailValue !== \'\') {
                        fieldName = \''; ?>
"<b><?php echo $this->_tpl_vars['lang']['your_name']; ?>
</b>"<?php echo '\';
                        errorField = \'register[name]\';
                    }

                    if (nameValue !== \'\' && emailValue === \'\') {
                        fieldName = \''; ?>
"<b><?php echo $this->_tpl_vars['lang']['your_email']; ?>
</b>"<?php echo '\';
                        errorField = \'register[email]\';
                    }

                    if (nameValue === \'\' && emailValue === \'\') {
                        fieldName = \'\';
                        errorField = \'register[name],register[email]\';
                    }

                    printMessage(\'error\', error.replace(\'error_field\', fieldName), errorField);
                } else {
                    $form.off(\'submit\').submit(function() { return true; });
                }
            })
        });
    '; ?>
</script>
<?php else: ?>
    <a class="button" title="<?php echo $this->_tpl_vars['lang']['aff_go_to_account']; ?>
" href="<?php echo $this->_tpl_vars['general_stats_url']; ?>
"><?php echo $this->_tpl_vars['lang']['aff_go_to_account']; ?>
</a>
<?php endif; ?>
<!-- login/registration process only for affiliate accounts end -->

<!-- affiliate program page end -->