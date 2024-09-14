<?php /* Smarty version 2.6.31, created on 2023-12-18 01:50:52
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/listing_details_sidebar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'rlHook', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/listing_details_sidebar.tpl', 3, false),array('function', 'staticMap', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/listing_details_sidebar.tpl', 19, false),array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/listing_details_sidebar.tpl', 9, false),)), $this); ?>
<!-- listing details sidebar -->

<?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'listing_details_sidebar'), $this);?>


<!-- seller info -->
<?php if (! $this->_tpl_vars['pageInfo']['Listing_details_inactive']): ?>
<section class="side_block no-header seller-short<?php if (! $this->_tpl_vars['seller_info']['Photo']): ?> no-picture<?php endif; ?>">
	<div>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'listing_details_seller.tpl') : smarty_modifier_cat($_tmp, 'listing_details_seller.tpl')), 'smarty_include_vars' => array('sidebar' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</div>
</section>
<?php endif; ?>
<!-- seller info end -->

<!-- map -->
<?php if (! $this->_tpl_vars['listing']['location'] && $this->_tpl_vars['config']['map_module'] && $this->_tpl_vars['location']['direct'] && ( ! $this->_tpl_vars['listing_type']['Photo'] || ! $this->_tpl_vars['photos'] )): ?>
	<section title="<?php echo $this->_tpl_vars['lang']['expand_map']; ?>
" class="side_block no-style map-capture">
		<img alt="<?php echo $this->_tpl_vars['lang']['expand_map']; ?>
" 
             src="<?php echo $this->_plugins['function']['staticMap'][0][0]->staticMap(array('location' => $this->_tpl_vars['location']['direct'],'zoom' => $this->_tpl_vars['config']['map_default_zoom'],'width' => 480,'height' => 180), $this);?>
" 
             srcset="<?php echo $this->_plugins['function']['staticMap'][0][0]->staticMap(array('location' => $this->_tpl_vars['location']['direct'],'zoom' => $this->_tpl_vars['config']['map_default_zoom'],'width' => 480,'height' => 180,'scale' => 2), $this);?>
 2x" />
		<span class="media-enlarge"><span></span></span>
	</section>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'listing_details_static_map.tpl') : smarty_modifier_cat($_tmp, 'listing_details_static_map.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<!-- listing details sidebar end -->