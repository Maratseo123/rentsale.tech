<?php /* Smarty version 2.6.31, created on 2023-12-18 01:50:52
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/fieldset_header.tpl */ ?>
<!-- fieldset block -->

<div class="fieldset<?php if (! $this->_tpl_vars['id']): ?> light<?php endif; ?><?php if ($this->_tpl_vars['hide']): ?> hidden-default<?php endif; ?>" <?php if ($this->_tpl_vars['id']): ?>id="fs_<?php echo $this->_tpl_vars['id']; ?>
"<?php endif; ?>>
	<header <?php if ($this->_tpl_vars['class']): ?>class="<?php echo $this->_tpl_vars['class']; ?>
"<?php endif; ?>><?php if ($this->_tpl_vars['id']): ?><span class="arrow"></span><?php endif; ?><?php echo $this->_tpl_vars['name']; ?>
</header>
		
	<div class="body">
		<div>