<?php /* Smarty version 2.6.31, created on 2024-04-24 15:46:43
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/side_block_header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strpos', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/side_block_header.tpl', 1, false),array('modifier', 'explode', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/side_block_header.tpl', 1, false),array('modifier', 'count', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/side_block_header.tpl', 1, false),)), $this); ?>
<section class="side_block<?php if (! $this->_tpl_vars['block']['Tpl']): ?> no-style<?php endif; ?><?php if (isset ( $this->_tpl_vars['block']['Header'] ) && ! $this->_tpl_vars['block']['Header']): ?> no-header<?php endif; ?><?php if (((is_array($_tmp=$this->_tpl_vars['block']['Key'])) ? $this->_run_mod_handler('strpos', true, $_tmp, 'ltcb_') : strpos($_tmp, 'ltcb_')) === 0): ?><?php if (count(((is_array($_tmp=',')) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['types']) : explode($_tmp, $this->_tpl_vars['types']))) <= 1): ?> categories-box-nav<?php endif; ?><?php endif; ?><?php if ($this->_tpl_vars['block_class']): ?> <?php echo $this->_tpl_vars['block_class']; ?>
<?php endif; ?>">
	<?php if ($this->_tpl_vars['block']['Header']): ?><h3><?php if ($this->_tpl_vars['name']): ?><?php echo $this->_tpl_vars['name']; ?>
<?php else: ?><?php echo $this->_tpl_vars['block']['name']; ?>
<?php endif; ?></h3><?php endif; ?>
	<div class="clearfix">