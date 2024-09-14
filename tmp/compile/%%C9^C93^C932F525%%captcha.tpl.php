<?php /* Smarty version 2.6.31, created on 2024-05-02 03:34:14
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/captcha.tpl */ ?>
<?php if ($this->_tpl_vars['table_cell']): ?>
    <tr>
        <td class="name"><?php echo $this->_tpl_vars['lang']['security_code']; ?>
<span class="red">*</span></td>
        <td class="field">
            <input type="text" class="text" id="<?php if ($this->_tpl_vars['captcha_id']): ?><?php echo $this->_tpl_vars['captcha_id']; ?>
_<?php endif; ?>security_code" name="security_code" maxlength="<?php echo $this->_tpl_vars['config']['security_code_length']; ?>
" style="width: 50px; margin: 0;" />
            <img style="margin-<?php echo $this->_tpl_vars['text_dir']; ?>
: 20px;" id="<?php if ($this->_tpl_vars['captcha_id']): ?><?php echo $this->_tpl_vars['captcha_id']; ?>
_<?php endif; ?>security_img" class="<?php if ($this->_tpl_vars['captcha_id']): ?><?php echo $this->_tpl_vars['captcha_id']; ?>
_<?php endif; ?>security_img" alt="<?php echo $this->_tpl_vars['lang']['click_refresh']; ?>
" title="<?php echo $this->_tpl_vars['lang']['click_refresh']; ?>
" src="<?php echo (defined('RL_LIBS_URL') ? @RL_LIBS_URL : null); ?>
kcaptcha/getImage.php?<?php echo $_SERVER['REQUEST_TIME']; ?>
<?php if ($this->_tpl_vars['captcha_id']): ?>&amp;id=<?php echo $this->_tpl_vars['captcha_id']; ?>
<?php endif; ?>" style="cursor: pointer;" onclick="$(this).attr('src','<?php echo (defined('RL_LIBS_URL') ? @RL_LIBS_URL : null); ?>
kcaptcha/getImage.php?'+Math.random()<?php if ($this->_tpl_vars['captcha_id']): ?>+'&amp;id=<?php echo $this->_tpl_vars['captcha_id']; ?>
'<?php endif; ?>);" />
        </td>
    </tr>
<?php else: ?>
    <?php if (! $this->_tpl_vars['no_caption']): ?>
        <div class="name"><?php echo $this->_tpl_vars['lang']['security_code']; ?>
 <span class="red">*</span></div>
        <div class="field">
    <?php endif; ?>

    <img id="<?php if ($this->_tpl_vars['captcha_id']): ?><?php echo $this->_tpl_vars['captcha_id']; ?>
_<?php endif; ?>security_img" class="<?php if ($this->_tpl_vars['captcha_id']): ?><?php echo $this->_tpl_vars['captcha_id']; ?>
_<?php endif; ?>security_img" alt="<?php echo $this->_tpl_vars['lang']['click_refresh']; ?>
" title="<?php echo $this->_tpl_vars['lang']['click_refresh']; ?>
" src="<?php echo (defined('RL_LIBS_URL') ? @RL_LIBS_URL : null); ?>
kcaptcha/getImage.php?<?php echo $_SERVER['REQUEST_TIME']; ?>
<?php if ($this->_tpl_vars['captcha_id']): ?>&amp;id=<?php echo $this->_tpl_vars['captcha_id']; ?>
<?php endif; ?>" style="cursor: pointer;" onclick="$(this).attr('src','<?php echo (defined('RL_LIBS_URL') ? @RL_LIBS_URL : null); ?>
kcaptcha/getImage.php?'+Math.random()<?php if ($this->_tpl_vars['captcha_id']): ?>+'&amp;id=<?php echo $this->_tpl_vars['captcha_id']; ?>
'<?php endif; ?>);" />

    <input type="text" class="wauto ml-2" id="<?php if ($this->_tpl_vars['captcha_id']): ?><?php echo $this->_tpl_vars['captcha_id']; ?>
_<?php endif; ?>security_code" name="security_code" maxlength="<?php echo $this->_tpl_vars['config']['security_code_length']; ?>
" size="<?php echo $this->_tpl_vars['config']['security_code_length']; ?>
" style="margin: 0;" />
    <?php if (! $this->_tpl_vars['no_hint']): ?><span style="line-height:16px;"><?php echo $this->_tpl_vars['lang']['captcha_info']; ?>
</span><br /><?php endif; ?>

    <?php if (! $this->_tpl_vars['no_caption']): ?>
        </div>
    <?php endif; ?>
<?php endif; ?>