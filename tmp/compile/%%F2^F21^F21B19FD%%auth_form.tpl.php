<?php /* Smarty version 2.6.31, created on 2023-12-18 01:51:24
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/add_listing/auth_form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'rlHook', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/add_listing/auth_form.tpl', 3, false),array('modifier', 'count', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/add_listing/auth_form.tpl', 39, false),)), $this); ?>
<!-- user authorization form -->

<?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'addListingAuthFormTopTpl'), $this);?>


<div class="auth"><?php echo '<div class="cell"><div><div class="caption">'; ?><?php echo $this->_tpl_vars['lang']['sign_in']; ?><?php echo '</div><div class="name">'; ?><?php if ($this->_tpl_vars['config']['account_login_mode'] == 'email'): ?><?php echo ''; ?><?php echo $this->_tpl_vars['lang']['mail']; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['lang']['username']; ?><?php echo ''; ?><?php endif; ?><?php echo '</div><input form="listing_form"class="w210"type="text"name="login[username]"maxlength="100"value="'; ?><?php echo $_POST['login']['username']; ?><?php echo '" /><div class="name">'; ?><?php echo $this->_tpl_vars['lang']['password']; ?><?php echo '</div><input form="listing_form" class="w210" type="password" name="login[password]" maxlength="100" /><div class="pt-3"><a target="_blank"title="'; ?><?php echo $this->_tpl_vars['lang']['remind_pass']; ?><?php echo '"href="'; ?><?php echo $this->_tpl_vars['rlBase']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['pages']['remind']; ?><?php echo '.html'; ?><?php else: ?><?php echo '?page='; ?><?php echo $this->_tpl_vars['pages']['remind']; ?><?php echo ''; ?><?php endif; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['lang']['forgot_pass']; ?><?php echo '</a></div>'; ?><?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'addListingAuthFormAfterLoginTpl'), $this);?><?php echo '</div></div><div class="divider">'; ?><?php echo $this->_tpl_vars['lang']['or']; ?><?php echo '</div><div class="cell">'; ?><?php $this->assign('selected_atype', ''); ?><?php echo '<div><div class="caption">'; ?><?php echo $this->_tpl_vars['lang']['sign_up']; ?><?php echo '</div>'; ?><?php if ($this->_tpl_vars['quick_types'] && count($this->_tpl_vars['quick_types']) <= 1): ?><?php echo '<div class="name">'; ?><?php echo $this->_tpl_vars['lang']['your_name']; ?><?php echo '</div><input form="listing_form"class="w210"type="text"name="register[name]"maxlength="100"value="'; ?><?php echo $_POST['register']['name']; ?><?php echo '" />'; ?><?php endif; ?><?php echo '<div class="name">'; ?><?php echo $this->_tpl_vars['lang']['your_email']; ?><?php echo '</div><input form="listing_form"class="w210"type="text"name="register[email]"maxlength="100"value="'; ?><?php echo $_POST['register']['email']; ?><?php echo '"  />'; ?><?php if ($this->_tpl_vars['quick_types'] && count($this->_tpl_vars['quick_types']) > 1): ?><?php echo '<div class="name">'; ?><?php echo $this->_tpl_vars['lang']['account_type']; ?><?php echo '</div><select form="listing_form" class="w120" name="register[type]">'; ?><?php $_from = $this->_tpl_vars['quick_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['acTypes'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['acTypes']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['quick_reg_type']):
        $this->_foreach['acTypes']['iteration']++;
?><?php echo ''; ?><?php if ($_POST['register']['type'] && $_POST['register']['type'] == $this->_tpl_vars['quick_reg_type']['ID']): ?><?php echo ''; ?><?php $this->assign('selected_atype', $this->_tpl_vars['quick_reg_type']['Key']); ?><?php echo ''; ?><?php elseif (! $_POST['register']['type'] && ($this->_foreach['acTypes']['iteration'] <= 1)): ?><?php echo ''; ?><?php $this->assign('selected_atype', $this->_tpl_vars['quick_reg_type']['Key']); ?><?php echo ''; ?><?php endif; ?><?php echo '<option value="'; ?><?php echo $this->_tpl_vars['quick_reg_type']['ID']; ?><?php echo '"'; ?><?php if (( $_POST['register']['type'] && $_POST['register']['type'] == $this->_tpl_vars['quick_reg_type']['ID'] ) || ( ! $_POST['register']['type'] && ($this->_foreach['acTypes']['iteration'] <= 1) )): ?><?php echo 'selected="selected"'; ?><?php endif; ?><?php echo 'data-key="'; ?><?php echo $this->_tpl_vars['quick_reg_type']['Key']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['quick_reg_type']['name']; ?><?php echo '</option>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</select>'; ?><?php $_from = $this->_tpl_vars['quick_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['acName'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['acName']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['quick_reg_type']):
        $this->_foreach['acName']['iteration']++;
?><?php echo ''; ?><?php if ($this->_tpl_vars['quick_reg_type']['desc']): ?><?php echo '<div class="qtip_cont">'; ?><?php echo $this->_tpl_vars['quick_reg_type']['desc']; ?><?php echo '</div><img class="qtip '; ?><?php if (! ($this->_foreach['acName']['iteration'] <= 1)): ?><?php echo 'hide '; ?><?php endif; ?><?php echo 'sc_'; ?><?php echo $this->_tpl_vars['quick_reg_type']['ID']; ?><?php echo '"src="'; ?><?php echo $this->_tpl_vars['rlTplBase']; ?><?php echo 'img/blank.gif"alt="" />'; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['quick_types'] && count($this->_tpl_vars['quick_types']) == 1): ?><?php echo ''; ?><?php $this->assign('selected_atype', $this->_tpl_vars['quick_types']['0']['Key']); ?><?php echo '<input form="listing_form" type="hidden" name="register[type]" value="'; ?><?php echo $this->_tpl_vars['quick_types']['0']['ID']; ?><?php echo '" />'; ?><?php endif; ?><?php echo '<div class="agreement-fields'; ?><?php if (! $this->_tpl_vars['selected_atype']): ?><?php echo ' hide'; ?><?php endif; ?><?php echo '">'; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'blocks/agreement_fields.tpl', 'smarty_include_vars' => array('data_form' => 'listing_form')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo '</div><script class="fl-js-dynamic">'; ?><?php echo '
            $(function(){
                $(\'[name="register[type]"]\').off(\'change\', accountTypeHandler).on(\'change\', accountTypeHandler);
            });

            function accountTypeHandler(){
                var atype_key = $(\'[name="register[type]"]\').find(\'option:selected\').data(\'key\');

                // show/hide related agreement fields
                var $agFields          = $(\'div.ag_fields\');
                var $agFieldsContainer = $agFields.closest(\'div.agreement-fields\');

                $agFields.find(\'input\').attr(\'disabled\', true);
                $agFields.addClass(\'hide\');
                $agFieldsContainer.addClass(\'hide\');

                if (atype_key != \'\' && atype_key != undefined) {
                    $agFieldsContainer.removeClass(\'hide\');

                    $agFields.each(function(){
                        var at_types = $(this).data(\'types\');

                        if (at_types.indexOf(atype_key) != -1 || at_types == \'\') {
                            $(this).removeClass(\'hide\');
                            $(this).find(\'input\').removeAttr(\'disabled\');
                        }
                    });
                }
            }
            '; ?><?php echo '</script>'; ?><?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'addListingAuthFormAfterRegistrationTpl'), $this);?><?php echo '</div></div>'; ?>
</div>

<?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'addListingAuthFormBottomTpl'), $this);?>


<!-- user authorization form end -->