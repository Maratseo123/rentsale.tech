<?php /* Smarty version 2.6.31, created on 2023-12-30 14:01:07
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/credit_card_payment.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/credit_card_payment.tpl', 5, false),array('modifier', 'explode', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/credit_card_payment.tpl', 28, false),array('modifier', 'df', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/credit_card_payment.tpl', 88, false),array('function', 'rlHook', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/credit_card_payment.tpl', 59, false),)), $this); ?>
<!-- credit card payment tpl -->
<div id="card-form">
	<input type="hidden" name="form" value="checkout" />

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_header.tpl') : smarty_modifier_cat($_tmp, 'fieldset_header.tpl')), 'smarty_include_vars' => array('id' => 'credit_card_details','name' => $this->_tpl_vars['lang']['credit_card_details'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<div class="submit-cell">
		<div class="name"><?php echo $this->_tpl_vars['lang']['card_holder_name']; ?>
</div>
		<div class="field">
			<input type="text" name="f[card_name]" class="wauto" maxlength="35" size="35" value="<?php echo $_POST['f']['card_name']; ?>
" />
		</div>
	</div>

	<div class="submit-cell">
		<div class="name"><?php echo $this->_tpl_vars['lang']['card_number']; ?>
 <span class="red">&nbsp;*</span></div>
		<div class="field">
			<input type="text" name="f[card_number]" class="wauto" maxlength="18" size="18" />

			<img id="card_icon" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" alt="card type" />
			<input type="hidden" value="" name="card_type" />
		</div>
	</div>

	<div class="submit-cell">
		<div class="name"><?php echo $this->_tpl_vars['lang']['card_expiration']; ?>
 <span class="red">&nbsp;*</span></div>
		<div class="field">
			<select name="f[exp_month]" class="w120">
				<option><?php echo $this->_tpl_vars['lang']['month']; ?>
</option>
				<?php $_from = ((is_array($_tmp=',')) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['lang']['dp_months_list']) : explode($_tmp, $this->_tpl_vars['lang']['dp_months_list'])); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['monthF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['monthF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['month']):
        $this->_foreach['monthF']['iteration']++;
?>
                    <?php if ($this->_foreach['monthF']['iteration'] < 10): ?>
                        <?php $this->assign('exp_month', ((is_array($_tmp='0')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_foreach['monthF']['iteration']) : smarty_modifier_cat($_tmp, $this->_foreach['monthF']['iteration']))); ?>
                    <?php else: ?>
                        <?php $this->assign('exp_month', $this->_foreach['monthF']['iteration']); ?>
                    <?php endif; ?>
					<option <?php if ($_POST['f']['exp_month'] == $this->_tpl_vars['exp_month']): ?>selected="selected"<?php endif; ?> value="<?php if ($this->_foreach['monthF']['iteration'] < 10): ?>0<?php endif; ?><?php echo $this->_foreach['monthF']['iteration']; ?>
"><?php if ($this->_foreach['monthF']['iteration'] < 10): ?>0<?php endif; ?><?php echo $this->_foreach['monthF']['iteration']; ?>
 - <?php echo $this->_tpl_vars['month']; ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
			</select>
			<?php 
				global $rlSmarty;
				$years_range = range(date('Y'), date('Y')+15);
				$rlSmarty->assign('years_range', $years_range);
			 ?>
			<select name="f[exp_year]" style="width: 70px;">
				<option><?php echo $this->_tpl_vars['lang']['year']; ?>
</option>
				<?php $_from = $this->_tpl_vars['years_range']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['year']):
?>
					<option <?php if ($_POST['f']['exp_year'] == $this->_tpl_vars['year']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_tpl_vars['year']; ?>
"><?php echo $this->_tpl_vars['year']; ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
			</select>
		</div>
	</div>

	<div class="submit-cell">
		<div class="name"><?php echo $this->_tpl_vars['lang']['card_verification_code']; ?>
 <span class="red">&nbsp;*</span></div>
		<div class="field">
			<input type="text" name="f[card_verification_code]" class="wauto" maxlength="4" size="4" />
			<img class="cvc" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" alt="cvc" />
		</div>
	</div>

	<?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'creditCardPayment'), $this);?>


	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_footer.tpl') : smarty_modifier_cat($_tmp, 'fieldset_footer.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_header.tpl') : smarty_modifier_cat($_tmp, 'fieldset_header.tpl')), 'smarty_include_vars' => array('id' => 'billing_details','name' => $this->_tpl_vars['lang']['billing_details'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<div class="submit-cell">
		<div class="name"></div>
		<div class="field checkbox-field">
			<label><input type="checkbox" name="use_account_info" id="use-account-info" <?php if ($_POST['use_account_info'] || ! $_POST['form']): ?>checked="checked"<?php endif; ?> /> <?php echo $this->_tpl_vars['lang']['use_account_info']; ?>
</label>
		</div>
	</div>
	<div id="billing-form" <?php if ($_POST['use_account_info'] || ! $_POST['form']): ?>class="hide"<?php endif; ?>>
		<div class="submit-cell">
			<div class="name"><?php echo $this->_tpl_vars['lang']['first_name']; ?>
</div>
			<div class="field single-field">
				<input type="text" name="f[first_name]" class="wauto" value="<?php echo $_POST['f']['first_name']; ?>
" maxlength="50" size="35" />
			</div>
		</div>
		<div class="submit-cell">
			<div class="name"><?php echo $this->_tpl_vars['lang']['last_name']; ?>
</div>
			<div class="field single-field">
				<input type="text" name="f[last_name]" class="wauto" value="<?php echo $_POST['f']['last_name']; ?>
" maxlength="50" size="35" />
			</div>
		</div>
		<div class="submit-cell clearfix">
			<div class="name"><?php echo $this->_tpl_vars['lang']['billing_country']; ?>
</div>
			<div class="field single-field">
				<select name="f[b_country]">
					<option value=""><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
					<?php $_from = ((is_array($_tmp='countries')) ? $this->_run_mod_handler('df', true, $_tmp) : smarty_modifier_df($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['country']):
?>
						<option value="<?php echo $this->_tpl_vars['country']['Key']; ?>
" <?php if ($_POST['f']['b_country'] == $this->_tpl_vars['country']['Key']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['country']['name']; ?>
</option>
					<?php endforeach; endif; unset($_from); ?>
				</select>
			</div>
		</div>
		<div class="submit-cell hide">
			<div class="name"><?php echo $this->_tpl_vars['lang']['billing_state']; ?>
</div>
			<div class="field single-field">
				<select name="f[b_states]">
					<option value=""><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
					<?php $_from = ((is_array($_tmp='us_states')) ? $this->_run_mod_handler('df', true, $_tmp) : smarty_modifier_df($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['state']):
?>
						<option value="<?php echo $this->_tpl_vars['state']['iso']; ?>
" <?php if ($_POST['f']['state'] == $this->_tpl_vars['state']['iso']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['state']['name']; ?>
</option>
					<?php endforeach; endif; unset($_from); ?>
				</select>
			</div>
		</div>
		<div class="submit-cell">
			<div class="name"><?php echo $this->_tpl_vars['lang']['billing_state']; ?>
</div>
			<div class="field single-field">
				<input id="state" type="text" name="f[region]" class="wauto" value="<?php echo $_POST['f']['region']; ?>
" size="35" />
			</div>
		</div>
		<div class="submit-cell">
			<div class="name"><?php echo $this->_tpl_vars['lang']['billing_city']; ?>
</div>
			<div class="field single-field">
				<input type="text" name="f[city]" class="wauto" value="<?php echo $_POST['f']['city']; ?>
" maxlength="100" size="35" />
			</div>
		</div>
		<div class="submit-cell">
			<div class="name"><?php echo $this->_tpl_vars['lang']['billing_zip']; ?>
</div>
			<div class="field single-field">
				<input type="text" name="f[zip]" class="wauto numeric" value="<?php echo $_POST['f']['zip']; ?>
" maxlength="5" size="8" />
			</div>
		</div>
		<div class="submit-cell">
			<div class="name"><?php echo $this->_tpl_vars['lang']['billing_address']; ?>
</div>
			<div class="field single-field">
				<input type="text" name="f[address]" class="wauto" value="<?php echo $_POST['f']['address']; ?>
" maxlength="255" size="35" />
			</div>
		</div>
	</div>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_footer.tpl') : smarty_modifier_cat($_tmp, 'fieldset_footer.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<script class="fl-js-dynamic">
	<?php echo '

	$(document).ready(function(){
		flynaxTpl.locationHandler();
		$(\'input[name="f[card_number]"]\').validateCreditCard(function(result){
			$(\'#card_icon\').attr(\'class\', \'\');
			if ( result.card_type ) {
				$(\'#card_icon\').addClass(result.card_type.name);
				$(\'input[name=card_type]\').val(result.card_type.name);
			}
		});
		if ($(\'input#use-account-info\').is(\':checked\')) {
			$(\'#billing-form\').hide();
		}
		$(\'input#use-account-info\').change(function() {
			if ($(this).is(\':checked\'))	{
				$(\'#billing-form\').hide();
			} else {
				$(\'#billing-form\').show();
			}
		});
	});

	'; ?>

	</script>

	<?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'creditCardPaymentBottom'), $this);?>


</div>
<!-- credit card payment tpl end -->