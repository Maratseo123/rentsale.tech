<?php /* Smarty version 2.6.31, created on 2023-12-18 01:53:46
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/login_modal.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/login_modal.tpl', 12, false),array('modifier', 'replace', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/login_modal.tpl', 14, false),array('modifier', 'regex_replace', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/login_modal.tpl', 14, false),array('function', 'pageUrl', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/login_modal.tpl', 19, false),array('function', 'rlHook', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/login_modal.tpl', 41, false),)), $this); ?>
<!-- login modal content -->

<?php if ($this->_tpl_vars['showLoginModalHeader']): ?>
    <div class="caption_padding"><?php echo $this->_tpl_vars['lang']['login']; ?>
</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['loginAttemptsLeft'] > 0 && $this->_tpl_vars['config']['security_login_attempt_user_module']): ?>
    <div class="attention"><?php echo $this->_tpl_vars['loginAttemptsMess']; ?>
</div>
<?php elseif ($this->_tpl_vars['loginAttemptsLeft'] <= 0 && $this->_tpl_vars['config']['security_login_attempt_user_module']): ?>
    <div class="attention">
        <?php $this->assign('periodVar', ('{')."period".('}')); ?>
        <?php $this->assign('replace', ((is_array($_tmp=((is_array($_tmp='<b>')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['config']['security_login_attempt_user_period']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['config']['security_login_attempt_user_period'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '</b>') : smarty_modifier_cat($_tmp, '</b>'))); ?>
        <?php $this->assign('regReplace', '<span class="red">$1</span>'); ?>
        <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['login_attempt_error'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['periodVar'], $this->_tpl_vars['replace']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['periodVar'], $this->_tpl_vars['replace'])))) ? $this->_run_mod_handler('regex_replace', true, $_tmp, '/\[(.*)\]/', $this->_tpl_vars['regReplace']) : smarty_modifier_regex_replace($_tmp, '/\[(.*)\]/', $this->_tpl_vars['regReplace'])); ?>

    </div>
<?php endif; ?>

<form <?php if ($this->_tpl_vars['loginAttemptsLeft'] <= 0 && $this->_tpl_vars['config']['security_login_attempt_user_module']): ?>onsubmit="return false;"<?php endif; ?>
      action="<?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'login'), $this);?>
"
      method="post"
      class="login-form"
>
    <input type="hidden" name="action" value="login" />

    <input placeholder="<?php if ($this->_tpl_vars['config']['account_login_mode'] == 'email'): ?><?php echo $this->_tpl_vars['lang']['mail']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['username']; ?>
<?php endif; ?>"
           type="text"
           class="w-100 mb-3"
           name="username"
           maxlength="100"
           value="<?php echo $_POST['username']; ?>
" <?php if ($this->_tpl_vars['loginAttemptsLeft'] <= 0 && $this->_tpl_vars['config']['security_login_attempt_user_module']): ?>disabled="disabled"<?php endif; ?>
    />
    <input placeholder="<?php echo $this->_tpl_vars['lang']['password']; ?>
"
           type="password"
           class="w-100 mb-3"
           name="password"
           maxlength="100" <?php if ($this->_tpl_vars['loginAttemptsLeft'] <= 0 && $this->_tpl_vars['config']['security_login_attempt_user_module']): ?>disabled="disabled"<?php endif; ?>
    />

    <div class="mb-3">
        <input type="submit" class="w-100" value="<?php echo $this->_tpl_vars['lang']['login']; ?>
" <?php if ($this->_tpl_vars['loginAttemptsLeft'] <= 0 && $this->_tpl_vars['config']['security_login_attempt_user_module']): ?>disabled="disabled"<?php endif; ?> />
        <span class="hookUserNavbar"><?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'tplUserNavbar'), $this);?>
</span>
    </div>

    <?php if ($this->_tpl_vars['config']['remember_me']): ?>
        <div class="remember-me mb-3">
            <label><input type="checkbox" name="remember_me" checked="checked" /><?php echo $this->_tpl_vars['lang']['remember_me']; ?>
</label>
        </div>
    <?php endif; ?>
</form>

<?php if ($this->_tpl_vars['linkLabels']): ?>
    <?php echo $this->_tpl_vars['lang']['forgot_pass']; ?>
 <a title="<?php echo $this->_tpl_vars['lang']['remind_pass']; ?>
" href="<?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'remind'), $this);?>
"><?php echo $this->_tpl_vars['lang']['remind_pass']; ?>
</a>
    <?php if ($this->_tpl_vars['pages']['registration']): ?>
        <div class="mt-1">
            <?php echo $this->_tpl_vars['lang']['new_here']; ?>
 <a title="<?php echo $this->_tpl_vars['lang']['create_account']; ?>
" href="<?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'registration'), $this);?>
"><?php echo $this->_tpl_vars['lang']['create_account']; ?>
</a>
        </div>
    <?php endif; ?>
<?php else: ?>
    <div class="text-center">
        <a title="<?php echo $this->_tpl_vars['lang']['remind_pass']; ?>
" href="<?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'remind'), $this);?>
"><?php echo $this->_tpl_vars['lang']['forgot_pass']; ?>
</a>
        <?php if ($this->_tpl_vars['pages']['registration']): ?>
            <div class="mt-1">
                <a title="<?php echo $this->_tpl_vars['lang']['create_account']; ?>
" href="<?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'registration'), $this);?>
"><?php echo $this->_tpl_vars['lang']['registration']; ?>
</a>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>

<!-- login modal content end -->