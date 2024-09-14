<?php /* Smarty version 2.6.31, created on 2024-01-06 19:26:58
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/upgrade_listing.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'addCSS', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/upgrade_listing.tpl', 3, false),array('function', 'addJS', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/upgrade_listing.tpl', 63, false),array('function', 'rlHook', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/upgrade_listing.tpl', 66, false),array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/upgrade_listing.tpl', 3, false),array('modifier', 'regex_replace', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/upgrade_listing.tpl', 9, false),array('modifier', 'count', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/upgrade_listing.tpl', 79, false),)), $this); ?>
<!-- upgrade listing plan -->

<?php echo $this->_plugins['function']['addCSS'][0][0]->smartyAddCSS(array('file' => ((is_array($_tmp=$this->_tpl_vars['rlTplBase'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'components/plans-chart/plans-chart.css') : smarty_modifier_cat($_tmp, 'components/plans-chart/plans-chart.css'))), $this);?>


<?php if (isset ( $_GET['completed'] )): ?>

	<span class="text-notice">
		<?php $this->assign('replace', ((is_array($_tmp=((is_array($_tmp='<a href="')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['link']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['link'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '">$1</a>') : smarty_modifier_cat($_tmp, '">$1</a>'))); ?>
		<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['notice_payment_listing_completed'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, '/\[(.*)\]/', $this->_tpl_vars['replace']) : smarty_modifier_regex_replace($_tmp, '/\[(.*)\]/', $this->_tpl_vars['replace'])); ?>

	</span>

<?php elseif (isset ( $this->_tpl_vars['subscription']['ID'] )): ?>

	<span class="text-notice" style="display: inline-block;margin-bottom: 15px;"><?php echo $this->_tpl_vars['lang']['notice_has_active_subscription']; ?>
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
			<div class="value"><?php echo $this->_tpl_vars['listing_title']; ?>
</div>
		</div>
		<div class="table-cell">
			<div class="name"><?php echo $this->_tpl_vars['lang']['plan']; ?>
:</div>
			<div class="value"><?php echo $this->_tpl_vars['plans'][$this->_tpl_vars['listing']['Plan_ID']]['name']; ?>
</div>
		</div>
		<div class="table-cell">
			<div class="name"><?php echo $this->_tpl_vars['lang']['price']; ?>
:</div>
			<div class="value"><?php if ($this->_tpl_vars['config']['system_currency_position'] == 'before'): ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['plans'][$this->_tpl_vars['listing']['Plan_ID']]['Price']; ?>
<?php if ($this->_tpl_vars['config']['system_currency_position'] == 'after'): ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?></div>
		</div>
		<div class="table-cell">
			<div class="name"><?php echo $this->_tpl_vars['lang']['subscription_period']; ?>
:</div>
			<?php $this->assign('subscription_period_name', ((is_array($_tmp='subscription_period_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['plans'][$this->_tpl_vars['listing']['Plan_ID']]['Period']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['plans'][$this->_tpl_vars['listing']['Plan_ID']]['Period']))); ?>
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
				<a class="unsubscription button" id="unsubscription-<?php echo $this->_tpl_vars['subscription']['Item_ID']; ?>
" href="javascript:void(0);" accesskey="<?php echo $this->_tpl_vars['subscription']['Item_ID']; ?>
-<?php echo $this->_tpl_vars['subscription']['ID']; ?>
-<?php echo $this->_tpl_vars['subscription']['Service']; ?>
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

	<?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=$this->_tpl_vars['rlTplBase'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'js/subscription.js') : smarty_modifier_cat($_tmp, 'js/subscription.js')),'id' => 'subscription'), $this);?>

<?php else: ?>

	<?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'upgradeListingTop'), $this);?>


	<form method="post" action="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
<?php if ($this->_tpl_vars['featured']): ?>/featured<?php endif; ?>.html?id=<?php if ($_GET['id']): ?><?php echo $_GET['id']; ?>
<?php else: ?><?php echo $_GET['item']; ?>
<?php endif; ?><?php else: ?>?page=<?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
&amp;id=<?php if ($_GET['id']): ?><?php echo $_GET['id']; ?>
<?php else: ?><?php echo $_GET['item']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['featured']): ?>&amp;featured<?php endif; ?><?php endif; ?>">
		<input type="hidden" name="upgrade" value="true" />
		<input type="hidden" name="from_post" value="1" />

		<!-- select a plan -->
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'divider.tpl') : smarty_modifier_cat($_tmp, 'divider.tpl')), 'smarty_include_vars' => array('name' => $this->_tpl_vars['lang']['select_plan'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

		<div class="plans-container">
            <?php $this->assign('subscription_exists', false); ?>
            <?php $this->assign('featured_exists', false); ?>
            <?php $_from = $this->_tpl_vars['plans']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['plan']):
?><?php if ($this->_tpl_vars['plan']['Subscription'] && $this->_tpl_vars['plan']['Price'] > 0 && ! $this->_tpl_vars['plan']['Listings_remains']): ?><?php $this->assign('subscription_exists', true); ?><?php elseif ($this->_tpl_vars['plan']['Featured'] && $this->_tpl_vars['plan']['Price'] > 0 && ! $this->_tpl_vars['plan']['Listings_remains']): ?><?php $this->assign('featured_exists', true); ?><?php endif; ?><?php endforeach; endif; unset($_from); ?>
            <ul class="plans<?php if (count($this->_tpl_vars['plans']) > 5): ?> more-5<?php endif; ?><?php if ($this->_tpl_vars['subscription_exists']): ?> with-subscription<?php endif; ?><?php if ($this->_tpl_vars['featured_exists']): ?> with-featured<?php endif; ?>">
			<?php $_from = $this->_tpl_vars['plans']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['plansF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['plansF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['plan']):
        $this->_foreach['plansF']['iteration']++;
?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'listing_plan.tpl') : smarty_modifier_cat($_tmp, 'listing_plan.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>
<?php endforeach; endif; unset($_from); ?>
			</ul>
		</div>

		<script class="fl-js-dynamic">
		var plans = Array();
		var selected_plan_id = 0;
		var last_plan_id = 0;
		<?php $_from = $this->_tpl_vars['plans']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['plan']):
?>
		plans[<?php echo $this->_tpl_vars['plan']['ID']; ?>
] = new Array();
		plans[<?php echo $this->_tpl_vars['plan']['ID']; ?>
]['Key'] = '<?php echo $this->_tpl_vars['plan']['Key']; ?>
';
		plans[<?php echo $this->_tpl_vars['plan']['ID']; ?>
]['Price'] = <?php echo $this->_tpl_vars['plan']['Price']; ?>
;
		plans[<?php echo $this->_tpl_vars['plan']['ID']; ?>
]['Featured'] = <?php echo $this->_tpl_vars['plan']['Featured']; ?>
;
		plans[<?php echo $this->_tpl_vars['plan']['ID']; ?>
]['Advanced_mode'] = <?php echo $this->_tpl_vars['plan']['Advanced_mode']; ?>
;
		plans[<?php echo $this->_tpl_vars['plan']['ID']; ?>
]['Package_ID'] = <?php if ($this->_tpl_vars['plan']['Package_ID']): ?><?php echo $this->_tpl_vars['plan']['Package_ID']; ?>
<?php else: ?>false<?php endif; ?>;
		plans[<?php echo $this->_tpl_vars['plan']['ID']; ?>
]['Standard_listings'] = <?php echo $this->_tpl_vars['plan']['Standard_listings']; ?>
;
		plans[<?php echo $this->_tpl_vars['plan']['ID']; ?>
]['Featured_listings'] = <?php echo $this->_tpl_vars['plan']['Featured_listings']; ?>
;
		plans[<?php echo $this->_tpl_vars['plan']['ID']; ?>
]['Standard_remains'] = <?php if ($this->_tpl_vars['plan']['Standard_remains']): ?><?php echo $this->_tpl_vars['plan']['Standard_remains']; ?>
<?php else: ?>false<?php endif; ?>;
		plans[<?php echo $this->_tpl_vars['plan']['ID']; ?>
]['Featured_remains'] = <?php if ($this->_tpl_vars['plan']['Featured_remains']): ?><?php echo $this->_tpl_vars['plan']['Featured_remains']; ?>
<?php else: ?>false<?php endif; ?>;
		plans[<?php echo $this->_tpl_vars['plan']['ID']; ?>
]['Listings_remains'] = <?php if ($this->_tpl_vars['plan']['Listings_remains']): ?><?php echo $this->_tpl_vars['plan']['Listings_remains']; ?>
<?php else: ?>false<?php endif; ?>;
		<?php endforeach; endif; unset($_from); ?>

		<?php echo '

		$(document).ready(function(){
			flynax.planClick();
			flynax.qtip();
		});

		'; ?>

		</script>
		<!-- select a plan end -->

		<div class="form-buttons">
			<input type="submit" value="<?php echo $this->_tpl_vars['lang']['next']; ?>
" />
		</div>

	</form>

	<?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'upgradeListingBottom'), $this);?>


<?php endif; ?>

<!-- upgrade listing plan end -->