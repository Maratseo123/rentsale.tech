<?php /* Smarty version 2.6.31, created on 2024-05-02 01:31:13
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/controllers/edit_listing/edit_listing.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'addJS', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/controllers/edit_listing/edit_listing.tpl', 4, false),array('function', 'processStep', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/controllers/edit_listing/edit_listing.tpl', 6, false),array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/controllers/edit_listing/edit_listing.tpl', 4, false),)), $this); ?>
<!-- edit listing -->

<?php if (! $this->_tpl_vars['no_access']): ?>
    <?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=$this->_tpl_vars['rlTplBase'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'controllers/add_listing/manage_listing.js') : smarty_modifier_cat($_tmp, 'controllers/add_listing/manage_listing.js'))), $this);?>

    
    <?php echo $this->_plugins['function']['processStep'][0][0]->processTplStep(array(), $this);?>

<?php elseif ($this->_tpl_vars['errors']): ?>
    <ul class="text-notice">
    <?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['error']):
?>
        <li><?php echo $this->_tpl_vars['error']; ?>
</li>
    <?php endforeach; endif; unset($_from); ?>
    </ul>
<?php endif; ?>

<!-- edit listing end -->