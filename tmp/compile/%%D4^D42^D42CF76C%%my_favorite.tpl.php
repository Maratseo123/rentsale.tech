<?php /* Smarty version 2.6.31, created on 2023-12-24 15:59:56
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/my_favorite.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/my_favorite.tpl', 5, false),array('function', 'rlHook', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/my_favorite.tpl', 7, false),array('function', 'paging', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/my_favorite.tpl', 12, false),)), $this); ?>
<!-- my favorites -->

<?php if (! empty ( $this->_tpl_vars['listings'] )): ?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'grid_navbar.tpl') : smarty_modifier_cat($_tmp, 'grid_navbar.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
	<?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'favouriteBeforeListings'), $this);?>

	
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'grid.tpl') : smarty_modifier_cat($_tmp, 'grid.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
	<!-- paging block -->
	<?php echo $this->_plugins['function']['paging'][0][0]->paging(array('calc' => $this->_tpl_vars['pInfo']['calc'],'total' => $this->_tpl_vars['listings'],'current' => $this->_tpl_vars['pInfo']['current'],'per_page' => $this->_tpl_vars['config']['listings_per_page'],'controller' => $this->_tpl_vars['pages']['my_favorites']), $this);?>

	<!-- paging block end -->

<?php else: ?>
	<div class="info"><?php echo $this->_tpl_vars['lang']['no_favorite']; ?>
</div>
<?php endif; ?>

<!-- my favorites end -->