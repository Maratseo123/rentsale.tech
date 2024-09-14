<?php /* Smarty version 2.6.31, created on 2023-12-18 02:08:46
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/profile/profile.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/profile/profile.tpl', 8, false),array('modifier', 'count', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/profile/profile.tpl', 60, false),array('modifier', 'intval', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/profile/profile.tpl', 75, false),array('modifier', 'replace', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/profile/profile.tpl', 131, false),array('modifier', 'date_format', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/profile/profile.tpl', 311, false),array('function', 'addJS', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/profile/profile.tpl', 98, false),array('function', 'rlHook', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/profile/profile.tpl', 153, false),array('function', 'pageUrl', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/profile/profile.tpl', 405, false),array('function', 'gateways', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/profile/profile.tpl', 416, false),)), $this); ?>
<!-- my profile -->

<?php if ($this->_tpl_vars['step'] == 'purchase'): ?>
    <?php if ($this->_tpl_vars['membership_plan']['Subscription']): ?>
        <span class="text-notice" style="display: inline-block;margin-bottom: 15px;"><?php echo $this->_tpl_vars['lang']['notice_has_active_membership_subscription']; ?>
</span>

        <div class="content-padding">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_header.tpl') : smarty_modifier_cat($_tmp, 'fieldset_header.tpl')), 'smarty_include_vars' => array('id' => 'subscription_details','name' => $this->_tpl_vars['lang']['subscription_details'],'tall' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

            <div class="table-cell">
                <div class="name"><?php echo $this->_tpl_vars['lang']['item']; ?>
:</div>
                <div class="value"><?php echo $this->_tpl_vars['membership_plan']['name']; ?>
</div>
            </div>
            <div class="table-cell">
                <div class="name"><?php echo $this->_tpl_vars['lang']['price']; ?>
:</div>
                <div class="value"><?php if ($this->_tpl_vars['config']['system_currency_position'] == 'before'): ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['membership_plan']['Price']; ?>
<?php if ($this->_tpl_vars['config']['system_currency_position'] == 'after'): ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?></div>
            </div>
            <div class="table-cell">
                <div class="name"><?php echo $this->_tpl_vars['lang']['subscription_period']; ?>
:</div>
                <?php $this->assign('subscription_period_name', ((is_array($_tmp='subscription_period_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['membership_plan']['Period']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['membership_plan']['Period']))); ?>
                <div class="value"><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['subscription_period_name']]; ?>
</div>
            </div>

            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_footer.tpl') : smarty_modifier_cat($_tmp, 'fieldset_footer.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

            <div class="table-cell">
                <div class="value">
                    <a class="unsubscription button" id="unsubscription-<?php echo $this->_tpl_vars['account_info']['ID']; ?>
" href="javascript:void(0);" accesskey="<?php echo $this->_tpl_vars['account_info']['ID']; ?>
-<?php echo $this->_tpl_vars['membership_plan']['Subscription_ID']; ?>
-<?php echo $this->_tpl_vars['membership_plan']['Subscription_service']; ?>
"><?php echo $this->_tpl_vars['lang']['unsubscription']; ?>
</a>
                </div>
            </div>
        </div>

        <script class="fl-js-dynamic">
        <?php echo '

        $(document).ready(function(){
            $(\'.unsubscription\').each(function() {
                $(this).flModal({
                    caption: \'\',
                    content: \''; ?>
<?php echo $this->_tpl_vars['lang']['stripe_unsubscripbe_confirmation']; ?>
<?php echo '\',
                    prompt: \'flSubscription.cancelSubscription(\\\'\'+ $(this).attr(\'accesskey\').split(\'-\')[2] +\'\\\', \\\'\'+ $(this).attr(\'accesskey\').split(\'-\')[0] +\'\\\', \'+ $(this).attr(\'accesskey\').split(\'-\')[1] +\', \\\''; ?>
<?php echo $this->_tpl_vars['pageInfo']['Key']; ?>
<?php echo '\\\')\',
                    width: \'auto\',
                    height: \'auto\'
                });
            });
        });

        '; ?>

        </script>
    <?php else: ?>
        <form name="account_reg_form" method="post" action="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
/purchase.html<?php else: ?>?page=<?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
&amp;step=purchase<?php endif; ?>" enctype="multipart/form-data">
            <input type="hidden" name="form" value="plan" />
            <input type="hidden" name="step" value="purchase" />

            <?php if ($this->_tpl_vars['plans']): ?>
                <div class="plans-container membership-plans">
                    <?php $this->assign('subscription_exists', false); ?>
                    <?php $_from = $this->_tpl_vars['plans']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['plan']):
?><?php if ($this->_tpl_vars['plan']['Subscription'] && $this->_tpl_vars['plan']['Price'] > 0 && ! $this->_tpl_vars['plan']['Listings_remains']): ?><?php $this->assign('subscription_exists', true); ?><?php break; ?><?php endif; ?><?php endforeach; endif; unset($_from); ?>

                    <ul class="plans<?php if (count($this->_tpl_vars['plans']) > 5): ?> more-5<?php endif; ?><?php if ($this->_tpl_vars['subscription_exists']): ?> with-subscription<?php endif; ?>">
                        <?php $_from = $this->_tpl_vars['plans']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['plansF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['plansF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['plan']):
        $this->_foreach['plansF']['iteration']++;
?><?php echo ''; ?><?php if ($this->_tpl_vars['plan']['ID'] != $this->_tpl_vars['account_info']['plan']['ID']): ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'membership_plan.tpl') : smarty_modifier_cat($_tmp, 'membership_plan.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
<?php endforeach; endif; unset($_from); ?>
                    </ul>
                </div>

                <script class="fl-js-dynamic">
                var plans = Array();
                var selected_plan_id = 0;
                <?php $_from = $this->_tpl_vars['plans']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['plan']):
?>
                    plans[<?php echo $this->_tpl_vars['plan']['ID']; ?>
] = new Array();
                    plans[<?php echo $this->_tpl_vars['plan']['ID']; ?>
]['Key'] = '<?php echo $this->_tpl_vars['plan']['Key']; ?>
';
                    plans[<?php echo $this->_tpl_vars['plan']['ID']; ?>
]['Featured'] = <?php echo intval($this->_tpl_vars['plan']['Featured']); ?>
;
                <?php endforeach; endif; unset($_from); ?>

                <?php echo '

                $(document).ready(function(){
                    flynax.planClick();
                    flynax.qtip();
                });

                '; ?>

                </script>

                <span class="form-buttons">
                    <input type="submit" value="<?php echo $this->_tpl_vars['lang']['continue']; ?>
" />
                    <a class="red margin close" href="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
.html?info=membership<?php else: ?>?page=<?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
&info=membership<?php endif; ?>"><?php echo $this->_tpl_vars['lang']['cancel']; ?>
</a>
                </span>
            <?php else: ?>
                <span class="text-notice"><?php echo $this->_tpl_vars['lang']['notice_no_membership_plans_related']; ?>
</span>
            <?php endif; ?>
        </form>
    <?php endif; ?>
<?php else: ?>
    <?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=(defined('RL_LIBS_URL') ? @RL_LIBS_URL : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'jquery/jquery.qtip.js') : smarty_modifier_cat($_tmp, 'jquery/jquery.qtip.js'))), $this);?>

    <?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=(defined('RL_LIBS_URL') ? @RL_LIBS_URL : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'ckeditor/ckeditor.js') : smarty_modifier_cat($_tmp, 'ckeditor/ckeditor.js'))), $this);?>


    <script class="fl-js-dynamic">flynax.qtip(); flynax.phoneField();</script>

    <!-- tabs -->
    <?php if (count($this->_tpl_vars['tabs']) > 2): ?>
    <ul class="tabs tabs-hash">
        <?php $_from = $this->_tpl_vars['tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['tabF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['tabF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tab']):
        $this->_foreach['tabF']['iteration']++;
?><?php echo ''; ?><?php if ($this->_tpl_vars['tab']['key'] == 'password'): ?><?php echo ''; ?><?php continue; ?><?php echo ''; ?><?php endif; ?><?php echo '<li '; ?><?php if (( ! isset ( $_REQUEST['info'] ) && ($this->_foreach['tabF']['iteration'] <= 1) ) || $_REQUEST['info'] == $this->_tpl_vars['tab']['key']): ?><?php echo 'class="active"'; ?><?php endif; ?><?php echo ' id="tab_'; ?><?php echo $this->_tpl_vars['tab']['key']; ?><?php echo '"><a href="#'; ?><?php echo $this->_tpl_vars['tab']['key']; ?><?php echo '" data-target="'; ?><?php echo $this->_tpl_vars['tab']['key']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['tab']['name']; ?><?php echo '</a></li>'; ?>
<?php endforeach; endif; unset($_from); ?>
    </ul>
    <?php endif; ?>
    <!-- tabs end -->

    <div class="content-padding">

        <!-- profile -->
        <div id="area_profile" class="tab_area <?php if (! isset ( $_REQUEST['info'] ) || $_REQUEST['info'] == 'profile'): ?><?php else: ?>hide<?php endif; ?>">
            <form style="margin-bottom: 30px;" method="post" action="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
.html<?php else: ?>?page=<?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
<?php endif; ?>" enctype="multipart/form-data">
                <input type="hidden" name="info" value="profile" />
                <input type="hidden" name="fromPost_profile" value="1" />

                <div class="submit-cell">
                    <div class="name"><?php echo $this->_tpl_vars['lang']['mail']; ?>
</div>
                    <div class="field single-field">
                        <input type="text" name="profile[mail]" maxlength="150" <?php if ($_POST['profile']['mail']): ?>value="<?php echo $_POST['profile']['mail']; ?>
"<?php endif; ?> />
                        <?php if ($this->_tpl_vars['config']['account_edit_email_confirmation']): ?>
                            <div id="email_change_notice" class="notice_message <?php if (! $this->_tpl_vars['aInfo']['Mail_tmp']): ?>hide<?php endif; ?>">
                                <?php if ($this->_tpl_vars['aInfo']['Mail_tmp']): ?>
                                    <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['account_edit_email_confirmation_info'])) ? $this->_run_mod_handler('replace', true, $_tmp, '[e-mail]', $this->_tpl_vars['aInfo']['Mail_tmp']) : smarty_modifier_replace($_tmp, '[e-mail]', $this->_tpl_vars['aInfo']['Mail_tmp'])); ?>

                                <?php else: ?>
                                    <b><?php echo $this->_tpl_vars['lang']['notice']; ?>
</b>: <?php echo $this->_tpl_vars['lang']['account_edit_email_confirmation_notice']; ?>

                                    <script class="fl-js-dynamic">
                                    <?php echo '

                                    $(document).ready(function(){
                                        $(\'input[name="profile[mail]"]\').focus(function(){
                                            $(\'#email_change_notice\').fadeIn(\'slow\');
                                        });
                                    });

                                    '; ?>

                                    </script>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <label style="padding: 15px 0 5px;display: block;">
                            <input value="1" type="checkbox" <?php if ($_POST['profile']['display_email']): ?>checked="checked"<?php endif; ?> name="profile[display_email]" /> <?php echo $this->_tpl_vars['lang']['display_email']; ?>

                        </label>

                        <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'tplProfileCheckbox'), $this);?>
 <!-- > 4.3.0 -->
                    </div>
                </div>

                <?php if ($this->_tpl_vars['account_info']['Own_page']): ?>
                <div class="submit-cell">
                    <div class="name"><?php echo $this->_tpl_vars['lang']['personal_address']; ?>
</div>
                    <div class="field <?php if ($this->_tpl_vars['profile_info']['Own_address']): ?>checkbox-field<?php endif; ?>">
                        <?php if ($this->_tpl_vars['profile_info']['Own_location']): ?>
                            <?php if ($this->_tpl_vars['config']['account_wildcard']): ?>
                                <?php echo $this->_tpl_vars['scheme']; ?>
://<input type="text" style="width: 90px;" maxlength="30" name="profile[location]" <?php if ($_POST['profile']['location']): ?>value="<?php echo $_POST['profile']['location']; ?>
"<?php endif; ?> />.<?php echo $this->_tpl_vars['domain']; ?>

                            <?php else: ?>
                                <?php echo $this->_tpl_vars['scheme']; ?>
://<?php echo $this->_tpl_vars['domain']; ?>
/<input type="text" style="width: 90px;" maxlength="30" name="profile[location]" <?php if ($_POST['profile']['location']): ?>value="<?php echo $_POST['profile']['location']; ?>
"<?php endif; ?> />
                            <?php endif; ?>
                            <div class="notice_message"><?php echo $this->_tpl_vars['lang']['latin_characters_only']; ?>
</div>
                        <?php else: ?>
                            <a target="_blank" href="<?php echo $this->_tpl_vars['profile_info']['Personal_address']; ?>
">
                                <?php echo $this->_tpl_vars['profile_info']['Personal_address']; ?>

                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endif; ?>

                <?php if (count($this->_tpl_vars['languages']) > 1): ?>
                <div class="submit-cell">
                    <div class="name"><?php echo $this->_tpl_vars['lang']['profile_lang']; ?>
</div>
                    <div class="field single-field">
                        <select name="profile[lang]">
                            <?php $_from = $this->_tpl_vars['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lang_item']):
?>
                                <option value="<?php echo $this->_tpl_vars['lang_item']['Code']; ?>
" <?php if ($this->_tpl_vars['profile_info']['Lang'] == $this->_tpl_vars['lang_item']['Code']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang_item']['name']; ?>
</option>
                            <?php endforeach; endif; unset($_from); ?>
                        </select>
                    </div>
                </div>
                <?php endif; ?>

                <div class="submit-cell">
                    <div class="name"></div>
                    <div class="field">
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'blocks/agreement_fields.tpl', 'smarty_include_vars' => array('selected_atype' => $this->_tpl_vars['profile_info']['Type'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    </div>
                </div>

                <div class="submit-cell">
                    <div class="name"></div>
                    <div class="field"><input type="submit" value="<?php echo $this->_tpl_vars['lang']['save']; ?>
" id="profile_submit" /></div>
                </div>
            </form>

            <!-- manage password -->
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_header.tpl') : smarty_modifier_cat($_tmp, 'fieldset_header.tpl')), 'smarty_include_vars' => array('id' => 'change_password_area','name' => $this->_tpl_vars['lang']['manage_password'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

            <div class="submit-cell">
                <div class="name"><?php echo $this->_tpl_vars['lang']['current_password']; ?>
</div>
                <div class="field single-field"><input class="wauto" type="password" id="current_password" size="25" maxlength="30" /></div>
            </div>

            <div class="submit-cell">
                <div class="name"><?php echo $this->_tpl_vars['lang']['new_password']; ?>
</div>
                <div class="field single-field two-inline left">
                    <div><input id="new_password" size="25" class="wauto" type="password" name="profile[password]" maxlength="50" <?php if ($_POST['profile']['password']): ?>value="<?php echo $_POST['profile']['password']; ?>
"<?php endif; ?> /></div>
                    <?php if ($this->_tpl_vars['config']['account_password_strength']): ?>
                        <div>
                            <input type="hidden" id="password_strength" value="" />
                            <div class="password_strength">
                                <div class="scale">
                                    <div class="color"></div>
                                    <div class="shine"></div>
                                </div>
                                <div id="pass_strength"></div>
                            </div>

                            <script class="fl-js-dynamic">
                            <?php echo '

                            $(document).ready(function(){
                                flynax.passwordStrength();

                                $(\'#new_password\').blur(function(){
                                    if ( rlConfig[\'account_password_strength\'] ) {
                                        if ( $(\'#password_strength\').val() < 3 ) {
                                            printMessage(\'warning\', lang[\'password_weak_warning\'])
                                        }
                                        else {
                                            $(\'div.warning div.close\').trigger(\'click\');
                                        }
                                    }
                                });
                            });

                            '; ?>

                            </script>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="submit-cell">
                <div class="name"><?php echo $this->_tpl_vars['lang']['new_password_repeat']; ?>
</div>
                <div class="field single-field"><input class="wauto" size="25" type="password" id="password_repeat" maxlength="30" /></div>
            </div>

            <div class="submit-cell buttons">
                <div class="name"></div>
                <div class="field"><input id="change_password" type="button" value="<?php echo $this->_tpl_vars['lang']['change']; ?>
" /></div>
            </div>

            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_footer.tpl') : smarty_modifier_cat($_tmp, 'fieldset_footer.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

            <script class="fl-js-dynamic">
            <?php echo '

            $(document).ready(function(){
                $(\'#change_password\').click(function(){
                    xajax_changePass( $(\'#current_password\').val(), $(\'#new_password\').val(), $(\'#password_repeat\').val() );
                    $(this).val(\''; ?>
<?php echo $this->_tpl_vars['lang']['loading']; ?>
<?php echo '\');
                });
            });

            '; ?>

            </script>
            <!-- manage password end -->
        </div>
        <!-- profile end -->

        <!-- account -->
        <?php if (! empty ( $this->_tpl_vars['profile_info']['Fields'] )): ?>
            <div id="area_account" class="tab_area <?php if ($_REQUEST['info'] != 'account'): ?>hide<?php endif; ?>">
                <form method="post" action="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
.html<?php else: ?>?page=<?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
<?php endif; ?>" enctype="multipart/form-data">
                    <input type="hidden" name="info" value="account" />
                    <input type="hidden" name="fromPost_account" value="1" />

                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'reg_account.tpl') : smarty_modifier_cat($_tmp, 'reg_account.tpl')), 'smarty_include_vars' => array('fields' => $this->_tpl_vars['profile_info']['Fields'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                    <div class="submit-cell">
                        <div class="name"></div>
                        <div class="field"><input type="submit" name="finish" value="<?php echo $this->_tpl_vars['lang']['edit']; ?>
" /></div>
                    </div>
                </form>
            </div>
        <?php endif; ?>
        <!-- account end -->

        <!-- membership -->
        <?php if ($this->_tpl_vars['config']['membership_module']): ?>
            <div id="area_membership" class="tab_area <?php if ($_REQUEST['info'] != 'membership'): ?>hide<?php endif; ?>">
                <?php if ($this->_tpl_vars['membership_plan']): ?>
                    <ul class="packages">
                        <li class="clearfix">
                            <div class="frame clearfix" <?php if ($this->_tpl_vars['membership_plan']['Color']): ?>style="background-color: #<?php echo $this->_tpl_vars['membership_plan']['Color']; ?>
;border-color: #<?php echo $this->_tpl_vars['membership_plan']['Color']; ?>
;"<?php endif; ?>>
                                <h3 class="name"><?php echo $this->_tpl_vars['membership_plan']['name']; ?>
</h3>
                                <div class="plan-info">
                                    <span class="price">
                                        <?php if ($this->_tpl_vars['membership_plan']['Price'] > 0): ?><?php if ($this->_tpl_vars['config']['system_currency_position'] == 'before'): ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['membership_plan']['Price']; ?>
<?php if ($this->_tpl_vars['config']['system_currency_position'] == 'after'): ?> <?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?><?php else: ?><?php echo $this->_tpl_vars['lang']['free']; ?>
<?php endif; ?>
                                    </span>
                                    <span>
                                        <?php if ($this->_tpl_vars['account_info']['Status'] == 'active' && $this->_tpl_vars['account_info']['Payment_status'] == 'paid'): ?>
                                            <?php echo $this->_tpl_vars['lang']['active_till']; ?>
: <span class="highlight"><?php if ($this->_tpl_vars['membership_plan']['Plan_period']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['membership_plan']['Plan_expire'])) ? $this->_run_mod_handler('date_format', true, $_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)) : smarty_modifier_date_format($_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null))); ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['unlimited_short']; ?>
<?php endif; ?></span>
                                        <?php else: ?>
                                            <?php echo $this->_tpl_vars['lang']['status']; ?>
: <span class="overdue"><b><?php if ($this->_tpl_vars['account_info']['Payment_status'] == 'unpaid'): ?><?php echo $this->_tpl_vars['lang']['not_paid']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['account_info']['Status']]; ?>
<?php endif; ?></b></span>
                                        <?php endif; ?>
                                    </span>
                                </div>

                                <div class="listing-info">
                                    <?php if ($this->_tpl_vars['membership_plan']['Services']): ?>
                                        <?php $_from = $this->_tpl_vars['membership_services']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['service']):
?>
                                        <span class="count">
                                            <?php echo $this->_tpl_vars['service']['name']; ?>
: <span class="highlight"><?php if ($this->_tpl_vars['membership_plan']['Services'][$this->_tpl_vars['service']['Key']]): ?><?php echo $this->_tpl_vars['lang']['yes']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['no']; ?>
<?php endif; ?></span>
                                        </span>
                                        <?php endforeach; endif; unset($_from); ?>
                                    <?php else: ?>

                                    <?php endif; ?>
                                                                    </div>
                            </div>

                            <div class="status table-cell">
                                <?php if (isset ( $this->_tpl_vars['membership_plan']['Services']['add_listing'] )): ?>
                                <ul class="package_info">
                                    <?php if ($this->_tpl_vars['membership_plan']['Advanced_mode']): ?>
                                        <li>
                                            <?php echo $this->_tpl_vars['lang']['standard_stat_label']; ?>
:
                                            <span <?php if (empty ( $this->_tpl_vars['membership_plan']['Standard_remains'] ) && ! empty ( $this->_tpl_vars['membership_plan']['Standard_listings'] )): ?>class="overdue"<?php endif; ?>>
                                                <?php if (empty ( $this->_tpl_vars['membership_plan']['Standard_listings'] )): ?>
                                                    <b><?php echo $this->_tpl_vars['lang']['unlimited_short']; ?>
</b>
                                                <?php else: ?>
                                                    <?php $this->assign('rRest', ('{')."rest".('}')); ?>
                                                    <?php $this->assign('rAmount', ('{')."amount".('}')); ?>
                                                    <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['rest_of_amount'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['rRest'], $this->_tpl_vars['membership_plan']['Standard_remains']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['rRest'], $this->_tpl_vars['membership_plan']['Standard_remains'])))) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['rAmount'], $this->_tpl_vars['membership_plan']['Standard_listings']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['rAmount'], $this->_tpl_vars['membership_plan']['Standard_listings'])); ?>

                                                <?php endif; ?>
                                            </span>
                                        </li>
                                        <li style="padding-top: 5px;">
                                            <?php echo $this->_tpl_vars['lang']['featured_stat_label']; ?>
:
                                            <span <?php if (empty ( $this->_tpl_vars['membership_plan']['Featured_remains'] ) && ! empty ( $this->_tpl_vars['membership_plan']['Featured_listings'] )): ?>class="overdue"<?php endif; ?>>
                                                <?php if (empty ( $this->_tpl_vars['membership_plan']['Featured_listings'] )): ?>
                                                    <b><?php echo $this->_tpl_vars['lang']['unlimited_short']; ?>
</b>
                                                <?php else: ?>
                                                    <?php $this->assign('rRest', ('{')."rest".('}')); ?>
                                                    <?php $this->assign('rAmount', ('{')."amount".('}')); ?>
                                                    <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['rest_of_amount'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['rRest'], $this->_tpl_vars['membership_plan']['Featured_remains']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['rRest'], $this->_tpl_vars['membership_plan']['Featured_remains'])))) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['rAmount'], $this->_tpl_vars['membership_plan']['Featured_listings']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['rAmount'], $this->_tpl_vars['membership_plan']['Featured_listings'])); ?>

                                                <?php endif; ?>
                                            </span>
                                        </li>
                                    <?php else: ?>
                                        <li>
                                            <?php if ($this->_tpl_vars['membership_plan']['Featured_listing']): ?>
                                                <?php echo $this->_tpl_vars['lang']['featured_stat_label']; ?>
:
                                            <?php else: ?>
                                                <?php echo $this->_tpl_vars['lang']['standard_stat_label']; ?>
:
                                            <?php endif; ?>
                                            <span <?php if (empty ( $this->_tpl_vars['membership_plan']['Listings_remains'] ) && ! empty ( $this->_tpl_vars['membership_plan']['Listing_number'] )): ?>class="overdue"<?php endif; ?>>
                                                <?php if (empty ( $this->_tpl_vars['membership_plan']['Listing_number'] )): ?>
                                                    <b><?php echo $this->_tpl_vars['lang']['unlimited_short']; ?>
</b>
                                                <?php else: ?>
                                                    <?php $this->assign('rRest', ('{')."rest".('}')); ?>
                                                    <?php $this->assign('rAmount', ('{')."amount".('}')); ?>
                                                    <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['rest_of_amount'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['rRest'], $this->_tpl_vars['membership_plan']['Listings_remains']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['rRest'], $this->_tpl_vars['membership_plan']['Listings_remains'])))) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['rAmount'], $this->_tpl_vars['membership_plan']['Listing_number']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['rAmount'], $this->_tpl_vars['membership_plan']['Listing_number'])); ?>

                                                <?php endif; ?>
                                            </span>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                                <?php endif; ?>
                                <?php if ($this->_tpl_vars['membership_plan']): ?>
                                    <div class="renew">
                                        <?php if ($this->_tpl_vars['membership_plan']['Subscription']): ?>
                                            <a class="unsubscription button" id="unsubscription-<?php echo $this->_tpl_vars['account_info']['ID']; ?>
" href="javascript:void(0);" accesskey="<?php echo $this->_tpl_vars['account_info']['ID']; ?>
-<?php echo $this->_tpl_vars['membership_plan']['Subscription_ID']; ?>
-<?php echo $this->_tpl_vars['membership_plan']['Subscription_service']; ?>
"><span><?php echo $this->_tpl_vars['lang']['unsubscription']; ?>
</span>&nbsp;</a>
                                        <?php else: ?>
                                            <?php if ($this->_tpl_vars['account_info']['Status'] == 'expired' && ( $this->_tpl_vars['membership_plan']['Limit'] > $this->_tpl_vars['account_info']['plan']['Count_used'] || $this->_tpl_vars['membership_plan']['Limit'] == 0 )): ?>
                                                <a class="button" href="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
/renew.html?info=membership<?php else: ?>?page=<?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
&step=renew&info=membership<?php endif; ?>"><?php if ($this->_tpl_vars['account_info']['Payment_status'] == 'unpaid'): ?><?php echo $this->_tpl_vars['lang']['proceed_checkout']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['renew']; ?>
<?php endif; ?></a>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </li>
                    </ul>
                <?php else: ?>
                    <div class="text-notice"><?php echo $this->_tpl_vars['lang']['notice_no_membership_plans_selected']; ?>
</div>
                <?php endif; ?>

                <?php if ($this->_tpl_vars['step'] != 'renew'): ?>
                    <?php if ($this->_tpl_vars['ms_plans_total'] > 0): ?>
                        <a href="<?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'my_profile','add_url' => 'step=purchase'), $this);?>
" class="button">
                            <?php if ($this->_tpl_vars['membership_plan']): ?>
                                <?php echo $this->_tpl_vars['lang']['change_plan']; ?>

                            <?php else: ?>
                                <?php echo $this->_tpl_vars['lang']['select_plan']; ?>

                            <?php endif; ?>
                        </a>
                    <?php endif; ?>
                <?php elseif ($this->_tpl_vars['account_info']['Status'] == 'expired'): ?>
                    <form id="form-checkout" name="payment" method="post" action="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
/renew.html?info=membership<?php else: ?>?page=<?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
&step=renew&info=membership<?php endif; ?>">
                        <input type="hidden" name="step" value="checkout" />
                        <?php echo $this->_plugins['function']['gateways'][0][0]->gateways(array(), $this);?>


                        <div>
                            <input type="submit" value="<?php echo $this->_tpl_vars['lang']['checkout']; ?>
" />
                            <a class="red margin close" href="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
.html?info=membership<?php else: ?>?page=<?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
&info=membership<?php endif; ?>"><?php echo $this->_tpl_vars['lang']['cancel']; ?>
</a>
                        </div>
                    </form>
                <?php endif; ?>

            </div>
            <script class="fl-js-dynamic">
            <?php echo '

            $(document).ready(function(){
                $(\'div.renew .unsubscription\').each(function() {
                    $(this).flModal({
                        caption: \'\',
                        content: \''; ?>
<?php echo $this->_tpl_vars['lang']['stripe_unsubscripbe_confirmation']; ?>
<?php echo '\',
                        prompt: \'flSubscription.cancelSubscription(\\\'\'+ $(this).attr(\'accesskey\').split(\'-\')[2] +\'\\\', \\\'\'+ $(this).attr(\'accesskey\').split(\'-\')[0] +\'\\\', \'+ $(this).attr(\'accesskey\').split(\'-\')[1] +\', false)\',
                        width: \'auto\',
                        height: \'auto\'
                    });
                });
            });

            '; ?>

            </script>
        <?php endif; ?>
        <!-- membership end -->
    </div>

    <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'profileBlock'), $this);?>

<?php endif; ?>
<?php if ($this->_tpl_vars['membership_plan']['Subscription']): ?>
    <?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=$this->_tpl_vars['rlTplBase'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'js/subscription.js') : smarty_modifier_cat($_tmp, 'js/subscription.js')),'id' => 'subscription'), $this);?>

<?php endif; ?>
<!-- my profile end -->