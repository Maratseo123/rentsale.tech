<?php /* Smarty version 2.6.31, created on 2024-04-26 17:25:03
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/contact_us.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'rlHook', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/contact_us.tpl', 24, false),)), $this); ?>
<!-- contact us -->

<?php if ($_GET['sending'] == 'complete'): ?>
	<div class="text-notice"><?php echo $this->_tpl_vars['lang']['contact_sent']; ?>
</div>
<?php else: ?>
	<div class="content-padding">
		<form action="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pages']['contact_us']; ?>
.html<?php else: ?>?page=<?php echo $this->_tpl_vars['pages']['contact_us']; ?>
<?php endif; ?>" method="post">
			<input type="hidden" name="action" value="contact_us" />
			
			<div class="submit-cell">
				<div class="name"><?php echo $this->_tpl_vars['lang']['your_name']; ?>
 <span class="red">*</span></div>
				<div class="field">
					<input class="wauto" type="text" name="your_name" maxlength="50" size="50" value="<?php if ($_POST['your_name']): ?><?php echo $_POST['your_name']; ?>
<?php elseif ($this->_tpl_vars['account_info']): ?><?php echo $this->_tpl_vars['account_info']['Full_name']; ?>
<?php endif; ?>" />
				</div>
			</div>

			<div class="submit-cell">
				<div class="name"><?php echo $this->_tpl_vars['lang']['your_email']; ?>
 <span class="red">*</span></div>
				<div class="field">
					<input class="wauto" type="text" name="your_email" size="50" maxlength="100" value="<?php if ($_POST['your_email']): ?><?php echo $_POST['your_email']; ?>
<?php else: ?><?php echo $this->_tpl_vars['account_info']['Mail']; ?>
<?php endif; ?>" />
				</div>
			</div>

			<?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'contactFields'), $this);?>


			<div class="submit-cell">
				<div class="name"><?php echo $this->_tpl_vars['lang']['message']; ?>
 <span class="red">*</span></div>
				<div class="field">
					<textarea name="message" rows="6" cols="50"><?php echo $_POST['message']; ?>
</textarea>
				</div>
			</div>

			<?php if ($this->_tpl_vars['config']['security_img_contact_us']): ?>
			<div class="submit-cell">
				<div class="name"><?php echo $this->_tpl_vars['lang']['security_code']; ?>
 <span class="red">*</span></div>
				<div class="field">
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'captcha.tpl', 'smarty_include_vars' => array('no_caption' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</div>
			</div>
			<?php endif; ?>

			<div class="submit-cell buttons">
				<div class="name"></div>
				<div class="field"><input onclick="$(this).val('<?php echo $this->_tpl_vars['lang']['loading']; ?>
');" type="submit" name="finish" value="<?php echo $this->_tpl_vars['lang']['send']; ?>
" /></div>
			</div>
		</form>
	</div>
<?php endif; ?>

<!-- contact us end -->