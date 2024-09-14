<?php /* Smarty version 2.6.31, created on 2024-05-02 03:32:11
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/registration.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'addCSS', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/registration.tpl', 3, false),array('function', 'addJS', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/registration.tpl', 4, false),array('function', 'rlHook', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/registration.tpl', 10, false),array('function', 'gateways', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/registration.tpl', 270, false),array('function', 'pageUrl', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/registration.tpl', 288, false),array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/registration.tpl', 3, false),array('modifier', 'array_values', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/registration.tpl', 17, false),array('modifier', 'htmlspecialchars', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/registration.tpl', 45, false),array('modifier', 'count', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/registration.tpl', 106, false),array('modifier', 'intval', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/registration.tpl', 249, false),array('modifier', 'regex_replace', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/registration.tpl', 290, false),array('modifier', 'replace', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/registration.tpl', 295, false),)), $this); ?>
<!-- registration controller -->

<?php echo $this->_plugins['function']['addCSS'][0][0]->smartyAddCSS(array('file' => ((is_array($_tmp=$this->_tpl_vars['rlTplBase'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'components/plans-chart/plans-chart.css') : smarty_modifier_cat($_tmp, 'components/plans-chart/plans-chart.css'))), $this);?>

<?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=(defined('RL_LIBS_URL') ? @RL_LIBS_URL : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'jquery/jquery.qtip.js') : smarty_modifier_cat($_tmp, 'jquery/jquery.qtip.js'))), $this);?>

<?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=(defined('RL_LIBS_URL') ? @RL_LIBS_URL : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'ckeditor/ckeditor.js') : smarty_modifier_cat($_tmp, 'ckeditor/ckeditor.js'))), $this);?>

<?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=$this->_tpl_vars['rlTplBase'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'js/form.js') : smarty_modifier_cat($_tmp, 'js/form.js'))), $this);?>


<script class="fl-js-dynamic">flynax.qtip(); flynax.phoneField();</script>

<?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'registrationTopTpl'), $this);?>


<!-- steps -->
<?php if ($this->_tpl_vars['cur_step'] == 'done'): ?><?php $this->assign('allow_link', false); ?><?php else: ?><?php $this->assign('allow_link', true); ?><?php endif; ?>
<?php $this->assign('current_found', false); ?>

<ul class="steps mobile">
    <?php $this->assign('steps_values', array_values($this->_tpl_vars['reg_steps'])); ?>
    <?php $_from = $this->_tpl_vars['steps_values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['stepsF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['stepsF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['step_key'] => $this->_tpl_vars['step']):
        $this->_foreach['stepsF']['iteration']++;
?><?php echo ''; ?><?php if ($this->_tpl_vars['step']['key'] == 'account' && $_SESSION['registration']['no_account_step']): ?><?php echo ''; ?><?php continue; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['cur_step'] == $this->_tpl_vars['step']['key'] || ! $this->_tpl_vars['cur_step']): ?><?php echo ''; ?><?php $this->assign('allow_link', false); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $this->assign('next_index', $this->_tpl_vars['step_key']+1); ?><?php echo '<li id="step_'; ?><?php echo $this->_tpl_vars['step']['key']; ?><?php echo '" class="'; ?><?php if ($this->_tpl_vars['cur_step']): ?><?php echo ''; ?><?php if ($this->_tpl_vars['cur_step'] == $this->_tpl_vars['step']['key']): ?><?php echo 'current'; ?><?php $this->assign('current_found', true); ?><?php echo ''; ?><?php elseif (! $this->_tpl_vars['current_found']): ?><?php echo ''; ?><?php if ($this->_tpl_vars['steps_values'][$this->_tpl_vars['next_index']]['key'] == $this->_tpl_vars['cur_step']): ?><?php echo 'prev '; ?><?php endif; ?><?php echo 'past'; ?><?php endif; ?><?php echo ''; ?><?php elseif (($this->_foreach['stepsF']['iteration'] <= 1)): ?><?php echo 'current'; ?><?php endif; ?><?php echo '"><a href="'; ?><?php if ($this->_tpl_vars['allow_link']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['rlBase']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['pageInfo']['Path']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['step']['key'] == 'profile'): ?><?php echo '.html?edit'; ?><?php else: ?><?php echo '/'; ?><?php echo $this->_tpl_vars['reg_steps'][$this->_tpl_vars['step']['key']]['path']; ?><?php echo '.html'; ?><?php endif; ?><?php echo ''; ?><?php else: ?><?php echo '?page='; ?><?php echo $this->_tpl_vars['pageInfo']['Path']; ?><?php echo '&amp;step='; ?><?php echo $this->_tpl_vars['reg_steps'][$this->_tpl_vars['step']['key']]['path']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['step']['key'] == 'profile'): ?><?php echo '&amp;edit'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php else: ?><?php echo 'javascript:void(0)'; ?><?php endif; ?><?php echo '" title="'; ?><?php echo $this->_tpl_vars['step']['name']; ?><?php echo '">'; ?><?php if ($this->_tpl_vars['step']['caption']): ?><?php echo '<span>'; ?><?php echo $this->_tpl_vars['lang']['step']; ?><?php echo '</span> '; ?><?php echo $this->_foreach['stepsF']['iteration']; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['step']['name']; ?><?php echo ''; ?><?php endif; ?><?php echo '</a></li>'; ?>
<?php endforeach; endif; unset($_from); ?>
</ul>
<!-- steps -->

<h1><?php if ($this->_tpl_vars['cur_step']): ?><?php echo $this->_tpl_vars['reg_steps'][$this->_tpl_vars['cur_step']]['name']; ?>
<?php else: ?><?php echo $this->_tpl_vars['reg_steps']['profile']['name']; ?>
<?php endif; ?></h1>

<?php if ($this->_tpl_vars['agentRegistration'] && $this->_tpl_vars['cur_step'] !== 'done'): ?>
    <h3 class="mb-4"><?php echo $this->_tpl_vars['lang']['agent_registration_notice']; ?>
</h3>
<?php endif; ?>

<?php if (! $this->_tpl_vars['no_access']): ?>
<div class="content-padding">
    <?php if (! $this->_tpl_vars['cur_step']): ?>
        <div class="area_profile step_area">
            <form name="account_reg_form" method="post" action="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
.html<?php else: ?>?page=<?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
<?php endif; ?>" enctype="multipart/form-data">
                <input type="hidden" name="step" value="profile" />

                <div class="submit-cell<?php if ($this->_tpl_vars['config']['account_login_mode'] == 'email'): ?> hide<?php endif; ?>">
                    <div class="name"><?php echo $this->_tpl_vars['lang']['username']; ?>
</div>
                    <div class="field single-field">
                        <input size="35" class="wauto" type="text" name="profile[username]" <?php if ($_SESSION['registration']['account_id']): ?>readonly="readonly"<?php endif; ?> maxlength="50" <?php if ($_POST['profile']['username']): ?>value="<?php echo ((is_array($_tmp=$_POST['profile']['username'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"<?php endif; ?> />
                    </div>
                </div>

                <div class="submit-cell">
                    <div class="name"><?php echo $this->_tpl_vars['lang']['mail']; ?>
</div>
                    <div class="field single-field">
                        <div>
                            <input size="45"
                                   class="wauto"
                                   type="text"
                                   name="profile[mail]"
                                   <?php if ($_SESSION['registration']['account_id']): ?>readonly="readonly"<?php endif; ?>
                                   value="<?php echo ''; ?><?php if ($_POST['profile']['mail']): ?><?php echo ''; ?><?php echo ((is_array($_tmp=$_POST['profile']['mail'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['agentRegistration'] && $this->_tpl_vars['agentInvite'] && $this->_tpl_vars['agentInvite']['Agent_Email']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['agentInvite']['Agent_Email']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
"
                            />
                        </div>
                        <div class="options">
                            <label class="d-block pt-3 pb-1">
                                <input value="1" type="checkbox" <?php if (isset ( $_POST['profile']['display_email'] )): ?>checked="checked"<?php endif; ?> name="profile[display_email]" /> <?php echo $this->_tpl_vars['lang']['display_email']; ?>

                            </label>

                            <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'tplRegistrationCheckbox'), $this);?>
<!-- > 4.1.0 -->
                        </div>
                    </div>
                </div>

                <div class="submit-cell">
                    <div class="name"><?php echo $this->_tpl_vars['lang']['password']; ?>
</div>
                    <div class="field single-field two-inline left">
                        <div><input size="25" class="wauto" type="password" name="profile[password]" maxlength="50" <?php if ($_POST['profile']['password']): ?>value="<?php echo $_POST['profile']['password']; ?>
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
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="submit-cell">
                    <div class="name"><?php echo $this->_tpl_vars['lang']['password_repeat']; ?>
</div>
                    <div class="field single-field">
                        <input size="25" class="wauto" type="password" name="profile[password_repeat]" maxlength="50" <?php if ($_POST['profile']['password']): ?>value="<?php echo $_POST['profile']['password']; ?>
"<?php endif; ?> />
                    </div>
                </div>

                <div class="submit-cell">
                    <div class="name"><?php echo $this->_tpl_vars['lang']['account_type']; ?>
</div>
                    <div class="field single-field">
                        <?php if (count($this->_tpl_vars['account_types']) > 1): ?>
                            <select name="profile[type]">
                                <option value="0"><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
                                <?php $_from = $this->_tpl_vars['account_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['account_type']):
?>
                                    <option value="<?php echo $this->_tpl_vars['account_type']['ID']; ?>
"
                                        <?php if ($_POST['profile']['type'] == $this->_tpl_vars['account_type']['ID']): ?>selected="selected"<?php endif; ?>
                                        data-key="<?php echo $this->_tpl_vars['account_type']['Key']; ?>
">
                                        <?php echo $this->_tpl_vars['account_type']['name']; ?>

                                    </option>
                                <?php endforeach; endif; unset($_from); ?>
                            </select>

                            <?php $_from = $this->_tpl_vars['account_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['account_type']):
?>
                                <?php if ($this->_tpl_vars['account_type']['desc']): ?><div class="qtip_cont"><?php echo $this->_tpl_vars['account_type']['desc']; ?>
</div><img class="qtip hide desc_<?php echo $this->_tpl_vars['account_type']['ID']; ?>
" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" alt="" /><?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?>
                        <?php else: ?>
                            <?php $_from = $this->_tpl_vars['account_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['typesF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['typesF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['account_type']):
        $this->_foreach['typesF']['iteration']++;
?>
                                <?php $this->assign('own_location', $this->_tpl_vars['account_type']['Own_location']); ?>
                                <div class="default_size mt-2"><?php echo $this->_tpl_vars['account_type']['name']; ?>
</div>
                                <select name="profile[type]" class="hide">
                                    <option value="<?php echo $this->_tpl_vars['account_type']['ID']; ?>
"
                                        selected="selected"
                                        data-key="<?php echo $this->_tpl_vars['account_type']['Key']; ?>
">
                                        <?php echo $this->_tpl_vars['account_type']['name']; ?>

                                    </option>
                                </select>
                                <?php if ($this->_tpl_vars['account_type']['desc']): ?>
                                    <div class="qtip_cont"><?php echo $this->_tpl_vars['account_type']['desc']; ?>
</div><img title="" class="qtip" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" alt="" />
                                <?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?>
                        <?php endif; ?>
                    </div>
                </div>

                <div id="personal_address_field" class="<?php if (count($this->_tpl_vars['account_types']) > 1 || ! $this->_tpl_vars['own_location']): ?>hide<?php endif; ?>">
                    <div class="submit-cell">
                        <div class="name"><?php echo $this->_tpl_vars['lang']['personal_address']; ?>
</div>
                        <div class="field single-field">
                            <?php if ($this->_tpl_vars['config']['account_wildcard']): ?>
                                <?php echo $this->_tpl_vars['scheme']; ?>
://<input type="text" class="ml-2" style="width: 90px;" maxlength="30" name="profile[location]" <?php if ($_SESSION['registration']['account_id']): ?>readonly="readonly"<?php endif; ?> <?php if ($_POST['profile']['location']): ?>value="<?php echo $_POST['profile']['location']; ?>
"<?php endif; ?> />.<?php echo $this->_tpl_vars['domain']; ?>

                            <?php else: ?>
                                <?php echo $this->_tpl_vars['scheme']; ?>
://<?php echo $this->_tpl_vars['domain']; ?>
/<?php if ((defined('RL_DIR') ? @RL_DIR : null)): ?><?php echo (defined('RL_DIR') ? @RL_DIR : null); ?>
<?php endif; ?><input type="text" class="ml-2" style="width: 90px;" maxlength="30" name="profile[location]" <?php if ($_POST['profile']['location']): ?>value="<?php echo $_POST['profile']['location']; ?>
"<?php endif; ?> />
                            <?php endif; ?>

                            <div class="notice"><?php echo $this->_tpl_vars['lang']['latin_characters_only']; ?>
</div>
                        </div>
                    </div>
                </div>

                <?php if ($this->_tpl_vars['config']['security_img_registration']): ?>
                    <div class="submit-cell">
                        <div class="name"><?php echo $this->_tpl_vars['lang']['security_code']; ?>
</div>
                        <div class="field"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'captcha.tpl', 'smarty_include_vars' => array('no_caption' => true,'no_hint' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
                    </div>
                <?php endif; ?>

                <div class="submit-cell<?php if (count($this->_tpl_vars['account_types']) > 1): ?> hide<?php endif; ?>">
                    <div class="name"></div>
                    <div class="field">
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'blocks/agreement_fields.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    </div>
                </div>

                <div class="submit-cell buttons">
                    <div class="name"></div>
                    <div class="field">
                        <input type="submit" value="<?php echo $this->_tpl_vars['lang']['next_step']; ?>
" id="profile_submit" />
                    </div>
                </div>

                <script class="fl-js-dynamic">
                var reg_account_fields = false;
                var reg_account_type = false;
                var reg_account_submit = false;
                var account_types = new Array();

                <?php $_from = $this->_tpl_vars['account_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['account_type']):
?>
                    account_types[<?php echo $this->_tpl_vars['account_type']['ID']; ?>
] = <?php if ($this->_tpl_vars['account_type']['Own_location']): ?>1<?php else: ?>0<?php endif; ?>;
                <?php endforeach; endif; unset($_from); ?>

                flynax.registration(<?php if ($this->_tpl_vars['fields']): ?>true<?php endif; ?>);
                flynax.passwordStrength();
                </script>
            </form>
        </div>
    <?php else: ?>
        <?php if ($this->_tpl_vars['cur_step'] == 'account'): ?>

        <!-- account additional fields step	-->
        <div class="area_account step_area">
            <form name="account_reg_form" method="post" action="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
/<?php echo $this->_tpl_vars['reg_steps'][$this->_tpl_vars['cur_step']]['path']; ?>
.html<?php else: ?>?page=<?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
&amp;step=<?php echo $this->_tpl_vars['reg_steps'][$this->_tpl_vars['cur_step']]['path']; ?>
<?php endif; ?>" enctype="multipart/form-data">
                <input type="hidden" name="step" value="account" />

                <div id="account_table">
                    <?php if ($this->_tpl_vars['fields']): ?>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'reg_account.tpl') : smarty_modifier_cat($_tmp, 'reg_account.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php endif; ?>
                </div>

                <div class="hide eval">flynaxTpl.customInput();</div>

                <span class="form-buttons form">
                    <a href="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
.html?edit<?php else: ?>?page=<?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
&amp;edit<?php endif; ?>"><?php if ((defined('RL_LANG_DIR') ? @RL_LANG_DIR : null) == 'ltr'): ?>&larr;<?php else: ?>&rarr;<?php endif; ?> <?php echo $this->_tpl_vars['lang']['perv_step']; ?>
</a>
                    <input type="submit" value="<?php echo $this->_tpl_vars['lang']['next_step']; ?>
" />
                </span>
            </form>

            <script class="fl-js-dynamic">flynax.registrationSubmitFormHandler();</script>
        </div>

        <?php elseif ($this->_tpl_vars['cur_step'] == 'plan'): ?>

        <!-- plan step	-->
        <div class="area_plan step_area">
            <form name="account_reg_form" method="post" action="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
/<?php echo $this->_tpl_vars['reg_steps'][$this->_tpl_vars['cur_step']]['path']; ?>
.html<?php else: ?>?page=<?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
&amp;step=<?php echo $this->_tpl_vars['reg_steps'][$this->_tpl_vars['cur_step']]['path']; ?>
<?php endif; ?>" enctype="multipart/form-data">
                <input type="hidden" name="step" value="plan" />

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
?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'membership_plan.tpl') : smarty_modifier_cat($_tmp, 'membership_plan.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>
<?php endforeach; endif; unset($_from); ?>
                    </ul>
                </div>

                <span class="form-buttons form">
                    <?php if ($_SESSION['registration']['no_account_step']): ?>
                        <a href="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
.html?edit<?php else: ?>?page=<?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
&amp;edit<?php endif; ?>"><?php if ((defined('RL_LANG_DIR') ? @RL_LANG_DIR : null) == 'ltr'): ?>&larr;<?php else: ?>&rarr;<?php endif; ?> <?php echo $this->_tpl_vars['lang']['perv_step']; ?>
</a>
                    <?php else: ?>
                        <a href="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
/<?php echo $this->_tpl_vars['prev_step']['path']; ?>
.html<?php else: ?>?page=<?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
&amp;step=<?php echo $this->_tpl_vars['prev_step']['path']; ?>
<?php endif; ?>"><?php if ((defined('RL_LANG_DIR') ? @RL_LANG_DIR : null) == 'ltr'): ?>&larr;<?php else: ?>&rarr;<?php endif; ?> <?php echo $this->_tpl_vars['lang']['perv_step']; ?>
</a>
                    <?php endif; ?>
                    <input type="submit" value="<?php echo $this->_tpl_vars['lang']['next_step']; ?>
" />
                </span>
            </form>

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
            });

            '; ?>

            </script>
        </div>

        <?php elseif ($this->_tpl_vars['cur_step'] == 'checkout'): ?>

        <!-- checkout step	-->
        <div class="area_checkout step_area content-padding">
            <div style="padding-bottom: 5px;"><?php echo $this->_tpl_vars['lang']['checkout_step_info']; ?>
</div>

            <form id="form-checkout" method="post" action="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
/<?php echo $this->_tpl_vars['reg_steps'][$this->_tpl_vars['cur_step']]['path']; ?>
.html<?php else: ?>?page=<?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
&amp;step=<?php echo $this->_tpl_vars['reg_steps'][$this->_tpl_vars['cur_step']]['path']; ?>
<?php endif; ?>">
                <input type="hidden" name="step" value="checkout" />
                <?php echo $this->_plugins['function']['gateways'][0][0]->gateways(array(), $this);?>

                <div class="form-buttons no-top-padding">
                    <a href="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
/<?php echo $this->_tpl_vars['prev_step']['path']; ?>
.html<?php else: ?>?page=<?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
&amp;step=<?php echo $this->_tpl_vars['prev_step']['path']; ?>
<?php endif; ?>"><?php if ((defined('RL_LANG_DIR') ? @RL_LANG_DIR : null) == 'ltr'): ?>&larr;<?php else: ?>&rarr;<?php endif; ?> <?php echo $this->_tpl_vars['lang']['perv_step']; ?>
</a>
                    <input type="submit" value="<?php echo $this->_tpl_vars['lang']['next_step']; ?>
" />
                </div>
            </form>
        </div>

        <?php elseif ($this->_tpl_vars['cur_step'] == 'done'): ?>

        <!-- done step	-->
        <div class="area_done">
            <div class="caption"><?php echo $this->_tpl_vars['lang']['registration_complete_caption']; ?>
</div>

            <?php if ($this->_tpl_vars['account_types'][$this->_tpl_vars['registr_account_type']]['Auto_login'] && ! $this->_tpl_vars['account_types'][$this->_tpl_vars['registr_account_type']]['Email_confirmation'] && ! $this->_tpl_vars['account_types'][$this->_tpl_vars['registr_account_type']]['Admin_confirmation']): ?>
                <?php if ($this->_tpl_vars['pages']['add_listing']): ?>
                    <?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'add_listing','assign' => 'add_listing_href'), $this);?>

                    <?php $this->assign('replace', ((is_array($_tmp=((is_array($_tmp='<a href="')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['add_listing_href']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['add_listing_href'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '">$1</a>') : smarty_modifier_cat($_tmp, '">$1</a>'))); ?>
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['registration_complete_auto_login'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, '/\[(.*)\]/', $this->_tpl_vars['replace']) : smarty_modifier_regex_replace($_tmp, '/\[(.*)\]/', $this->_tpl_vars['replace'])); ?>

                <?php endif; ?>
            <?php else: ?>
                <?php if ($this->_tpl_vars['account_types'][$this->_tpl_vars['registr_account_type']]['Email_confirmation']): ?>
                    <?php $this->assign('replace', ('{')."email".('}')); ?>
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['registration_complete_incomplete'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['replace'], $_SESSION['ses_registration_data']['email']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['replace'], $_SESSION['ses_registration_data']['email'])); ?>

                <?php else: ?>
                    <?php if ($this->_tpl_vars['account_types'][$this->_tpl_vars['registr_account_type']]['Admin_confirmation']): ?>
                        <?php echo $this->_tpl_vars['lang']['registration_complete_pending']; ?>

                    <?php else: ?>
                        <?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'login','assign' => 'account_area_link'), $this);?>

                        <?php $this->assign('replace', ((is_array($_tmp=((is_array($_tmp='<a href="')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['account_area_link']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['account_area_link'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '">$1</a>') : smarty_modifier_cat($_tmp, '">$1</a>'))); ?>
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['registration_complete_active'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, '/\[(.*)\]/', $this->_tpl_vars['replace']) : smarty_modifier_regex_replace($_tmp, '/\[(.*)\]/', $this->_tpl_vars['replace'])); ?>

                    <?php endif; ?>
                <?php endif; ?>
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'registrationStepActionsTpl'), $this);?>


    <?php endif; ?>

    <?php if ($this->_tpl_vars['cur_step']): ?>
        <script class="fl-js-dynamic">
            <?php echo '
            $(document).ready(function(){
                flynax.switchStep(\''; ?>
<?php echo $this->_tpl_vars['cur_step']; ?>
<?php echo '\');
            });
            '; ?>

        </script>
    <?php endif; ?>
</div>
<?php else: ?>
    <ul>
    <?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['error']):
?>
        <li><?php echo $this->_tpl_vars['error']; ?>
</li>
    <?php endforeach; endif; unset($_from); ?>
    </ul>
<?php endif; ?>

<?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'registrationBottomTpl'), $this);?>


<!-- registration controller end -->