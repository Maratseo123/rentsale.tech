<?php /* Smarty version 2.6.31, created on 2024-06-11 13:44:31
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/my_packages.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'addCSS', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/my_packages.tpl', 3, false),array('function', 'gateways', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/my_packages.tpl', 17, false),array('function', 'rlHook', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/my_packages.tpl', 67, false),array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/my_packages.tpl', 3, false),array('modifier', 'count', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/my_packages.tpl', 36, false),array('modifier', 'in_array', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/my_packages.tpl', 39, false),array('modifier', 'regex_replace', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/my_packages.tpl', 157, false),)), $this); ?>
<!-- my packages tpl -->

<?php echo $this->_plugins['function']['addCSS'][0][0]->smartyAddCSS(array('file' => ((is_array($_tmp=$this->_tpl_vars['rlTplBase'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'components/plans-chart/plans-chart.css') : smarty_modifier_cat($_tmp, 'components/plans-chart/plans-chart.css'))), $this);?>


<script class="fl-js-dynamic">flynax.qtip();</script>

<?php if ($this->_tpl_vars['renew_id']): ?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_header.tpl') : smarty_modifier_cat($_tmp, 'fieldset_header.tpl')), 'smarty_include_vars' => array('id' => 'plan_block','name' => $this->_tpl_vars['lang']['plan_details'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<ul class="packages">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'my_package_item.tpl') : smarty_modifier_cat($_tmp, 'my_package_item.tpl')), 'smarty_include_vars' => array('package' => $this->_tpl_vars['pack_info'],'renew' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</ul>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_footer.tpl') : smarty_modifier_cat($_tmp, 'fieldset_footer.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<form id="form-checkout" name="payment" method="post" action="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
.html?renew=<?php echo $this->_tpl_vars['renew_id']; ?>
<?php else: ?>?page=<?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
&renew=<?php echo $this->_tpl_vars['renew_id']; ?>
<?php endif; ?>">
		<input type="hidden" name="step" value="checkout" />
		<?php echo $this->_plugins['function']['gateways'][0][0]->gateways(array(), $this);?>


		<div class="form-buttons">
			<input type="submit" value="<?php echo $this->_tpl_vars['lang']['checkout']; ?>
" />
		</div>
	</form>

<?php elseif ($this->_tpl_vars['purchase']): ?>

	<?php if (empty ( $this->_tpl_vars['available_packages'] )): ?>
		<div class="info"><?php echo $this->_tpl_vars['lang']['no_available_packages']; ?>
</div>
	<?php else: ?>
		<form name="payment" method="post" action="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
/purchase.html<?php else: ?>?page=<?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
&amp;purchase<?php endif; ?>">
			<input type="hidden" name="action" value="submit" />
            <?php $this->assign('subscription_exists', false); ?>
            <?php $this->assign('featured_exists', false); ?>
            <?php $_from = $this->_tpl_vars['available_packages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['plan']):
?><?php if ($this->_tpl_vars['plan']['Subscription'] && $this->_tpl_vars['plan']['Price'] > 0 && ! $this->_tpl_vars['plan']['Listings_remains']): ?><?php $this->assign('subscription_exists', true); ?><?php elseif ($this->_tpl_vars['plan']['Featured'] && $this->_tpl_vars['plan']['Price'] > 0 && ! $this->_tpl_vars['plan']['Listings_remains']): ?><?php $this->assign('featured_exists', true); ?><?php endif; ?><?php endforeach; endif; unset($_from); ?>
            <!-- select a plan -->
			<div class="plans-container">
                <ul class="plans<?php if (count($this->_tpl_vars['available_packages']) > 5): ?> more-5<?php endif; ?><?php if ($this->_tpl_vars['subscription_exists']): ?> with-subscription<?php endif; ?><?php if ($this->_tpl_vars['featured_exists']): ?> with-featured<?php endif; ?>">
                    <?php $_from = $this->_tpl_vars['available_packages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['plansF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['plansF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['plan']):
        $this->_foreach['plansF']['iteration']++;
?><?php echo ''; ?><?php $this->assign('item_disabled', false); ?><?php echo ''; ?><?php if ($this->_tpl_vars['used_plans_id'] && ((is_array($_tmp=$this->_tpl_vars['plan']['ID'])) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['used_plans_id']) : in_array($_tmp, $this->_tpl_vars['used_plans_id']))): ?><?php echo ''; ?><?php $this->assign('item_disabled', true); ?><?php echo ''; ?><?php endif; ?><?php echo '<li id="plan_'; ?><?php echo $this->_tpl_vars['plan']['ID']; ?><?php echo '" class="plan"><div class="frame'; ?><?php if ($this->_tpl_vars['plan']['Color']): ?><?php echo ' colored'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['item_disabled']): ?><?php echo ' disabled'; ?><?php endif; ?><?php echo '" '; ?><?php if ($this->_tpl_vars['plan']['Color']): ?><?php echo 'style="background-color: #'; ?><?php echo $this->_tpl_vars['plan']['Color']; ?><?php echo ';border-color: #'; ?><?php echo $this->_tpl_vars['plan']['Color']; ?><?php echo ';"'; ?><?php endif; ?><?php echo '><span class="name">'; ?><?php echo $this->_tpl_vars['plan']['name']; ?><?php echo '</span><span class="price">'; ?><?php if (isset ( $this->_tpl_vars['plan']['Listings_remains'] ) || $this->_tpl_vars['item_disabled']): ?><?php echo '&#8212;'; ?><?php else: ?><?php echo ''; ?><?php if ($this->_tpl_vars['config']['system_currency_position'] == 'before'): ?><?php echo ''; ?><?php echo $this->_tpl_vars['config']['system_currency']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php echo $this->_tpl_vars['plan']['Price']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['config']['system_currency_position'] == 'after'): ?><?php echo ''; ?><?php echo $this->_tpl_vars['config']['system_currency']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo '</span><span title="'; ?><?php echo $this->_tpl_vars['lang']['plan_type']; ?><?php echo '" class="type">'; ?><?php $this->assign('l_type', ((is_array($_tmp=$this->_tpl_vars['plan']['Type'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_plan_short') : smarty_modifier_cat($_tmp, '_plan_short'))); ?><?php echo ''; ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['l_type']]; ?><?php echo '</span><span title="'; ?><?php echo $this->_tpl_vars['lang']['listing_live']; ?><?php echo '" class="count">'; ?><?php if ($this->_tpl_vars['plan']['Listing_period']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['plan']['Listing_period']; ?><?php echo ' '; ?><?php echo $this->_tpl_vars['lang']['days']; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['lang']['unlimited']; ?><?php echo ''; ?><?php endif; ?><?php echo '</span><span title="'; ?><?php echo $this->_tpl_vars['lang']['images_number']; ?><?php echo '" class="count">'; ?><?php if ($this->_tpl_vars['plan']['Image_unlim']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['lang']['unlimited']; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['plan']['Image']; ?><?php echo ' '; ?><?php echo $this->_tpl_vars['lang']['photos_count']; ?><?php echo ''; ?><?php endif; ?><?php echo '</span><span title="'; ?><?php echo $this->_tpl_vars['lang']['number_of_videos']; ?><?php echo '" class="count">'; ?><?php if ($this->_tpl_vars['plan']['Video_unlim']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['lang']['unlimited']; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['plan']['Video']; ?><?php echo ' '; ?><?php echo $this->_tpl_vars['lang']['video']; ?><?php echo ''; ?><?php endif; ?><?php echo '</span>'; ?><?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'tplMyPackagesPlanService'), $this);?><?php echo ''; ?><?php if ($this->_tpl_vars['plan']['des']): ?><?php echo '<span class="description"><img class="qtip middle-bottom" alt="" title="'; ?><?php echo $this->_tpl_vars['plan']['des']; ?><?php echo '" id="fd_'; ?><?php echo $this->_tpl_vars['plan']['Key']; ?><?php echo '" src="'; ?><?php echo $this->_tpl_vars['rlTplBase']; ?><?php echo 'img/blank.gif" /></span>'; ?><?php endif; ?><?php echo '<div class="selector"><label '; ?><?php if ($this->_tpl_vars['item_disabled']): ?><?php echo 'class="hint" title="'; ?><?php echo $this->_tpl_vars['lang']['duplicate_package_purchase_error']; ?><?php echo '"'; ?><?php endif; ?><?php echo '><input class="multiline" '; ?><?php if ($this->_tpl_vars['item_disabled']): ?><?php echo 'disabled="disabled" '; ?><?php endif; ?><?php echo ' type="radio" name="plan" value="'; ?><?php echo $this->_tpl_vars['plan']['ID']; ?><?php echo '" '; ?><?php if ($this->_tpl_vars['plan']['ID'] == $_POST['plan'] && ! $this->_tpl_vars['item_disabled']): ?><?php echo 'checked="checked"'; ?><?php endif; ?><?php echo ' /></label>'; ?><?php if ($this->_tpl_vars['plan']['Subscription'] && $this->_tpl_vars['plan']['Price'] > 0 && ! $this->_tpl_vars['item_disabled']): ?><?php echo '<div>'; ?><?php $this->assign('subscription_period', ((is_array($_tmp='subscription_period_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['plan']['Period']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['plan']['Period']))); ?><?php echo '<label title="'; ?><?php echo $this->_tpl_vars['lang']['subscription_period']; ?><?php echo ': '; ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['subscription_period']]; ?><?php echo '" class="hint"><input type="checkbox" name="subscription" '; ?><?php if ($_POST['subscription'] == $this->_tpl_vars['plan']['ID']): ?><?php echo 'checked="checked"'; ?><?php endif; ?><?php echo ' class="multiline" value="'; ?><?php echo $this->_tpl_vars['plan']['ID']; ?><?php echo '" /> '; ?><?php echo $this->_tpl_vars['lang']['subscription']; ?><?php echo '</label></div>'; ?><?php endif; ?><?php echo '</div></div></li>'; ?>
<?php endforeach; endif; unset($_from); ?>
                </ul>
			</div>

			<script class="fl-js-dynamic">
			var plans = Array();
			var selected_plan_id = 0;
			var last_plan_id = 0;
			<?php $_from = $this->_tpl_vars['available_packages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
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
			});

			'; ?>

			</script>
			<!-- select a plan end -->
            <div class="nav-buttons">
                <input type="submit" value="<?php echo $this->_tpl_vars['lang']['next']; ?>
" />
            </div>
		</form>
	<?php endif; ?>

<?php else: ?>

	<?php if ($this->_tpl_vars['packages']): ?>
		<ul class="packages">
			<?php $_from = $this->_tpl_vars['packages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['packagesF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['packagesF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['package']):
        $this->_foreach['packagesF']['iteration']++;
?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'my_package_item.tpl') : smarty_modifier_cat($_tmp, 'my_package_item.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php endforeach; endif; unset($_from); ?>
		</ul>

		<a href="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
/purchase.html<?php else: ?>?page=<?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
&amp;purchase<?php endif; ?>" class="button"><?php echo $this->_tpl_vars['lang']['purchase_new_package']; ?>
</a>

		<script class="fl-js-dynamic"><?php echo '
		$(document).ready(function(){
			$(\'.packages .unsubscription\').each(function() {
				$(this).flModal({
					caption: \'\',
					content: \''; ?>
<?php echo $this->_tpl_vars['lang']['stripe_unsubscripbe_confirmation']; ?>
<?php echo '\',
					prompt: \'xajax_cancelSubscription(\\\'\'+ $(this).attr(\'accesskey\').split(\'-\')[2] +\'\\\', \\\'\'+ $(this).attr(\'accesskey\').split(\'-\')[0] +\'\\\', \'+ $(this).attr(\'accesskey\').split(\'-\')[1] +\')\',
					width: \'auto\',
					height: \'auto\'
				});
			});
		});

		'; ?>
</script>
	<?php else: ?>

		<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?>
			<?php $this->assign('link', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['rlBase'])) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['pageInfo']['Path']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['pageInfo']['Path'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '/purchase.html') : smarty_modifier_cat($_tmp, '/purchase.html'))); ?>
		<?php else: ?>
			<?php $this->assign('link', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['rlBase'])) ? $this->_run_mod_handler('cat', true, $_tmp, '?page=') : smarty_modifier_cat($_tmp, '?page=')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['pageInfo']['Path']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['pageInfo']['Path'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '&amp;purchase') : smarty_modifier_cat($_tmp, '&amp;purchase'))); ?>
		<?php endif; ?>
		<?php $this->assign('replace', ((is_array($_tmp=((is_array($_tmp='<a href="')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['link']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['link'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '" class="static">$1</a>') : smarty_modifier_cat($_tmp, '" class="static">$1</a>'))); ?>
		<span class="info"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['no_packages_available'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, '/\[(.*)\]/', $this->_tpl_vars['replace']) : smarty_modifier_regex_replace($_tmp, '/\[(.*)\]/', $this->_tpl_vars['replace'])); ?>
</span>

	<?php endif; ?>

<?php endif; ?>

<!-- my packages tpl end -->