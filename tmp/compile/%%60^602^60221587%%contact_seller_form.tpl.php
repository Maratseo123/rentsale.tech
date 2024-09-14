<?php /* Smarty version 2.6.31, created on 2023-12-18 01:50:52
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/contact_seller_form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'rlHook', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/contact_seller_form.tpl', 21, false),array('function', 'phrase', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/contact_seller_form.tpl', 50, false),array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/contact_seller_form.tpl', 42, false),)), $this); ?>
<!-- contact seller form tpl -->

<?php 
global $captcha_box_id, $rlSmarty;
$captcha_box_id = $captcha_box_id ? $captcha_box_id + 1 : 1;
$rlSmarty->assign('captcha_box_id', $captcha_box_id);
 ?>

<form name="contact_owner"
      data-listing-id="<?php if ($this->_tpl_vars['listing_data']['ID']): ?><?php echo $this->_tpl_vars['listing_data']['ID']; ?>
<?php endif; ?>"
      data-box-id="<?php echo $this->_tpl_vars['captcha_box_id']; ?>
"
      data-account-id="<?php if ($this->_tpl_vars['account']['ID']): ?><?php echo $this->_tpl_vars['account']['ID']; ?>
<?php else: ?>0<?php endif; ?>"
      class="w-100"
      method="post"
      action="">
    <?php if ($this->_tpl_vars['isLogin']): ?>
        <div class="submit-cell">
            <textarea <?php if ($this->_tpl_vars['allow_send_message']): ?>id="contact_owner_message_<?php echo $this->_tpl_vars['captcha_box_id']; ?>
" name="contact_message"<?php endif; ?> rows="<?php if ($this->_tpl_vars['allow_send_message']): ?>6<?php else: ?>4<?php endif; ?>" placeholder="<?php echo $this->_tpl_vars['lang']['message']; ?>
" cols=""></textarea>
        </div>

        <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'contactSellerFormAboveMessage'), $this);?>

    <?php else: ?>
        <div class="submit-cell">
            <div class="field"><input class="w-100" placeholder="<?php echo $this->_tpl_vars['lang']['name']; ?>
" maxlength="100" type="text" name="contact_name" id="contact_name_<?php echo $this->_tpl_vars['captcha_box_id']; ?>
" value="<?php echo $this->_tpl_vars['account_info']['Full_name']; ?>
" /><span></span></div>
        </div>
        <div class="submit-cell">
            <div class="field"><input class="w-100" placeholder="<?php echo $this->_tpl_vars['lang']['mail']; ?>
" maxlength="200" type="text" name="contact_email" id="contact_email_<?php echo $this->_tpl_vars['captcha_box_id']; ?>
" value="<?php echo $this->_tpl_vars['account_info']['Mail']; ?>
" /><span></span></div>
        </div>
        <div class="submit-cell">
            <div class="field"><input class="w-100" placeholder="<?php echo $this->_tpl_vars['lang']['contact_phone']; ?>
" maxlength="30" type="text" name="contact_phone" id="contact_phone_<?php echo $this->_tpl_vars['captcha_box_id']; ?>
" /><span></span></div>
        </div>

        <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'contactSellerFormAboveMessage'), $this);?>


        <div class="submit-cell">
            <textarea placeholder="<?php echo $this->_tpl_vars['lang']['message']; ?>
" <?php if ($this->_tpl_vars['allow_send_message']): ?>id="contact_owner_message_<?php echo $this->_tpl_vars['captcha_box_id']; ?>
" name="contact_message"<?php endif; ?> rows="<?php if ($this->_tpl_vars['allow_send_message']): ?>5<?php else: ?>3<?php endif; ?>" cols=""></textarea>
        </div>

        <?php if ($this->_tpl_vars['allow_send_message'] && $this->_tpl_vars['config']['security_img_contact_seller']): ?>
            <div class="submit-cell">
                <div class="field">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'captcha.tpl', 'smarty_include_vars' => array('captcha_id' => ((is_array($_tmp='contact_code_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['captcha_box_id']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['captcha_box_id'])),'no_caption' => true,'no_hint' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <div class="submit-cell buttons">
        <div class="field">
            <input type="submit" class="w-100" name="finish" value="<?php echo $this->_plugins['function']['phrase'][0][0]->getPhrase(array('key' => 'contact_owner'), $this);?>
" data-phrase="<?php echo $this->_plugins['function']['phrase'][0][0]->getPhrase(array('key' => 'contact_owner'), $this);?>
" />
            <input class="hide" type="reset" id="form_reset_<?php echo $this->_tpl_vars['captcha_box_id']; ?>
" value="reset" />
        </div>
    </div>
</form>

<script class="fl-js-dynamic"><?php echo '
$(function () {
    flynaxTpl.setupTextarea();
});
'; ?>
</script>
<!-- contact seller form tpl end -->