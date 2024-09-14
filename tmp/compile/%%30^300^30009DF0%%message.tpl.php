<?php /* Smarty version 2.6.31, created on 2024-04-26 02:16:07
         compiled from /var/www/u2273289/data/www/rentsale.tech/plugins/booking/smarty_blocks/message.tpl */ ?>
<div class="hide" id="booking_message_obj">
    <?php if ($this->_tpl_vars['fieldsetEnable']): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'blocks/fieldset_header.tpl', 'smarty_include_vars' => array('id' => 'booking_mes','name' => $this->_tpl_vars['lang']['booking_details'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>

    <div id="booking_message"></div>

    <?php if ($this->_tpl_vars['fieldsetEnable']): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'blocks/fieldset_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>
</div>