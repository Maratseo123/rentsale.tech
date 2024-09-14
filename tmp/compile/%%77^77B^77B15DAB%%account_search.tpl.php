<?php /* Smarty version 2.6.31, created on 2024-04-26 02:18:34
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/account_search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/account_search.tpl', 6, false),)), $this); ?>
<!-- account search -->

<span class="expander"></span>

<form class="light-inputs" method="post" action="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
/<?php echo $this->_tpl_vars['search_results_url']; ?>
.html<?php else: ?>?page=<?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
&amp;<?php echo $this->_tpl_vars['search_results_url']; ?>
<?php endif; ?>">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fields_search_box.tpl') : smarty_modifier_cat($_tmp, 'fields_search_box.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<input type="hidden" name="search" value="true" />
	<input type="submit" name="search" value="<?php echo $this->_tpl_vars['lang']['search']; ?>
" />
</form>

<!-- account search end -->