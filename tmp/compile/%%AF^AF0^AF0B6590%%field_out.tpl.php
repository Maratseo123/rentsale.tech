<?php /* Smarty version 2.6.31, created on 2023-12-18 01:50:52
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/field_out.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/field_out.tpl', 15, false),)), $this); ?>
<!-- field output tpl -->

<div class="<?php echo 'table-cell clearfix'; ?><?php if ($this->_tpl_vars['group']['Key'] == 'common'): ?><?php echo ' col-md-6 col-sm-6 col-xs-12 two-columns'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['small']): ?><?php echo ' small'; ?><?php endif; ?><?php echo ''; ?><?php if (( $this->_tpl_vars['item']['Type'] == 'checkbox' && $this->_tpl_vars['item']['Opt1'] ) || $this->_tpl_vars['item']['Type'] == 'textarea'): ?><?php echo ' wide-field'; ?><?php if ($this->_tpl_vars['item']['Type'] == 'textarea'): ?><?php echo ' textarea'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['item']['Type'] == 'phone'): ?><?php echo ' phone'; ?><?php endif; ?><?php echo ''; ?>
" 
    id="df_field_<?php echo $this->_tpl_vars['item']['Key']; ?>
">
	<?php if ($this->_tpl_vars['item']['Type'] == 'image' && $this->_tpl_vars['small']): ?><?php else: ?>
		<div class="name" title="<?php echo $this->_tpl_vars['item']['name']; ?>
"><?php if (! $this->_tpl_vars['small']): ?><div><span><?php echo $this->_tpl_vars['item']['name']; ?>
</span></div><?php else: ?><?php if ($this->_tpl_vars['item']['name']): ?><?php echo $this->_tpl_vars['item']['name']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['item']['pName']]; ?>
<?php endif; ?><?php endif; ?></div>
	<?php endif; ?>
	<div class="value<?php if ($this->_tpl_vars['item']['Type'] == 'image'): ?> image<?php endif; ?>">
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'field_out_value.tpl') : smarty_modifier_cat($_tmp, 'field_out_value.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</div>
</div>

<!-- field output tpl end -->