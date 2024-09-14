<?php /* Smarty version 2.6.31, created on 2024-01-10 11:17:51
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/payment_history.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/payment_history.tpl', 14, false),array('function', 'paging', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/payment_history.tpl', 56, false),array('modifier', 'date_format', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/payment_history.tpl', 47, false),)), $this); ?>
<!-- payment history tpl -->

<?php if ($this->_tpl_vars['transactions']): ?>

	<div class="transactions list-table content-padding">
		<div class="header">
			<div class="center" style="width: 40px;">#</div>
			<div><?php echo $this->_tpl_vars['lang']['item']; ?>
</div>
			<div style="width: 280px;"><?php echo $this->_tpl_vars['lang']['transaction_info']; ?>
</div>
			<div style="width: 65px;"><?php echo $this->_tpl_vars['lang']['status']; ?>
</div>
		</div>

		<?php $_from = $this->_tpl_vars['transactions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['transactionF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['transactionF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['transactionF']['iteration']++;
?>
			<?php echo smarty_function_math(array('assign' => 'iteration','equation' => '(((current?current:1)-1)*per_page)+iter','iter' => $this->_foreach['transactionF']['iteration'],'current' => $this->_tpl_vars['pInfo']['current'],'per_page' => $this->_tpl_vars['config']['transactions_per_page']), $this);?>

			<div class="row">
				<div class="center iteration no-flex"><?php echo $this->_tpl_vars['iteration']; ?>
</div>
				<div data-caption="<?php echo $this->_tpl_vars['lang']['item']; ?>
" class="content">
					<?php if ($this->_tpl_vars['item']['Plan_name'] || $this->_tpl_vars['item']['Item_name']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['item']['Plan_name']; ?><?php echo '<div>'; ?><?php if ($this->_tpl_vars['item']['link']): ?><?php echo '<a href="'; ?><?php echo $this->_tpl_vars['item']['link']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['item']['Item_name']; ?><?php echo '</a>'; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['item']['Item_name']; ?><?php echo ''; ?><?php endif; ?><?php echo '</div>'; ?>

					<?php else: ?>
						<span class="red"><?php echo $this->_tpl_vars['lang']['item_not_available']; ?>
</span>
					<?php endif; ?>
				</div>
			
				<div class="no-flex default">
					<div class="table-cell clearfix small">
						<div class="name"><?php echo $this->_tpl_vars['lang']['payment_gateway']; ?>
</div>
						<div class="value"><?php if ($this->_tpl_vars['item']['Gateway']): ?><?php echo $this->_tpl_vars['item']['Gateway']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['not_selected']; ?>
<?php endif; ?></div>
					</div>
					<div class="table-cell clearfix small">
						<div class="name"><?php echo $this->_tpl_vars['lang']['amount']; ?>
</div>
						<div class="value"><?php if ($this->_tpl_vars['config']['system_currency_position'] == 'before'): ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?> <?php echo $this->_tpl_vars['item']['Total']; ?>
 <?php if ($this->_tpl_vars['config']['system_currency_position'] == 'after'): ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?></div>
					</div>
					<div class="table-cell clearfix small">
						<div class="name"><?php echo $this->_tpl_vars['lang']['txn_id']; ?>
</div>
						<div class="value" id="txn-id-<?php echo $this->_tpl_vars['item']['ID']; ?>
" data-txn="<?php echo $this->_tpl_vars['item']['Txn_ID']; ?>
"><?php echo $this->_tpl_vars['item']['Txn_ID']; ?>
</div>
					</div>
					<div class="table-cell clearfix small">
						<div class="name"><?php echo $this->_tpl_vars['lang']['date']; ?>
</div>
						<div class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['Date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)) : smarty_modifier_date_format($_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null))); ?>
</div>
					</div>
				</div>
				<div data-caption="<?php echo $this->_tpl_vars['lang']['status']; ?>
" class="statuses"><span class="<?php echo $this->_tpl_vars['item']['Status']; ?>
"><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['item']['Status']]; ?>
</span></div>
			</div>
		<?php endforeach; endif; unset($_from); ?>
	</div>
	
	<!-- paging block -->
	<?php echo $this->_plugins['function']['paging'][0][0]->paging(array('calc' => $this->_tpl_vars['pInfo']['calc'],'total' => $this->_tpl_vars['transactions'],'current' => $this->_tpl_vars['pInfo']['current'],'per_page' => $this->_tpl_vars['config']['transactions_per_page']), $this);?>

	<!-- paging block end -->

<?php else: ?>
	<div class="content-padding text-message"><?php echo $this->_tpl_vars['lang']['no_account_transactions']; ?>
</div>
<?php endif; ?>
<!-- payment history tpl end -->