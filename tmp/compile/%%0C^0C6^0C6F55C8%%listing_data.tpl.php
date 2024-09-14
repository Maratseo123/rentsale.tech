<?php /* Smarty version 2.6.31, created on 2024-01-03 18:50:52
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/smarty_blocks/listing_data.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'version_compare', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/smarty_blocks/listing_data.tpl', 10, false),)), $this); ?>
<!-- short listing information -->

<script>var listings_map = [];</script>

<section id="listings" class="grid row <?php if ($this->_tpl_vars['block']['Side'] == 'left'): ?>booking-order<?php endif; ?>">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'blocks/listing.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</section>

<!-- @todo 3.1.0 - Remove this when "compatible" will be more than 4.6.2 -->
<?php if (((is_array($_tmp=$this->_tpl_vars['config']['rl_version'])) ? $this->_run_mod_handler('version_compare', true, $_tmp, '4.6.2') : version_compare($_tmp, '4.6.2')) <= 0): ?><script class="fl-js-static">flynaxTpl.hisrc();</script><?php endif; ?>

<!-- short listing information end -->