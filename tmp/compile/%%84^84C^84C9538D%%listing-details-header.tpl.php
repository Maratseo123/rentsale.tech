<?php /* Smarty version 2.6.31, created on 2024-04-26 02:14:44
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/listing-details-header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/listing-details-header.tpl', 6, false),)), $this); ?>
<!-- listing details header -->

<div class="row listing-header">
    <h1 class="col-md-10"><?php echo $this->_tpl_vars['pageInfo']['name']; ?>
</h1>
    <div class="col-md-2">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['controllerDir'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'listing_details/navigation.tpl') : smarty_modifier_cat($_tmp, 'listing_details/navigation.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
</div>

<!-- listing details header end -->