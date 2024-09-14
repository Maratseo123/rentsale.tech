<?php /* Smarty version 2.6.31, created on 2023-12-30 14:03:04
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/booking_details.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/booking_details.tpl', 22, false),)), $this); ?>
<!-- booking details -->

<!-- tabs -->
<ul class="tabs tabs-hash"><?php echo '<li class="active" id="tab_requests"><a href="#requests" data-target="requests">'; ?><?php echo $this->_tpl_vars['lang']['booking_booking_requests']; ?><?php echo '</a></li><li id="tab_binding"><a href="#binding" data-target="binding">'; ?><?php echo $this->_tpl_vars['lang']['booking_binding_days']; ?><?php echo '</a></li><li id="tab_configs"><a href="#configs" data-target="configs">'; ?><?php echo $this->_tpl_vars['lang']['booking_module']; ?><?php echo '</a></li>'; ?>
</ul>
<!-- tabs end -->

<!-- requests tab -->
<div id="area_requests" class="tab_area content-padding">
    <?php if (empty ( $this->_tpl_vars['requests'] )): ?>
        <div class="text-message"><?php echo $this->_tpl_vars['lang']['booking_no_requests']; ?>
</div>
    <?php else: ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['bookingBlocksFolder'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'requests.tpl') : smarty_modifier_cat($_tmp, 'requests.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>
</div>
<!-- requests tab end -->

<!-- binding checkin / checkout tab -->
<div id="area_binding" class="tab_area content-padding hide">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['bookingBlocksFolder'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'binding_days.tpl') : smarty_modifier_cat($_tmp, 'binding_days.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>
<!-- binding checkin / checkout tab end -->

<!-- configs tab -->
<div id="area_configs" class="tab_area content-padding hide">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['bookingBlocksFolder'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'configs.tpl') : smarty_modifier_cat($_tmp, 'configs.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>
<!-- configs tab end -->

<script class="fl-js-dynamic">
lang.save                     = '<?php echo $this->_tpl_vars['lang']['save']; ?>
';
lang.booking_no_requests      = '<?php echo $this->_tpl_vars['lang']['booking_no_requests']; ?>
';
lang.booking_remove_notice    = '<?php echo $this->_tpl_vars['lang']['booking_remove_notice']; ?>
';
lang.booking_min_config_desc  = '<?php echo $this->_tpl_vars['lang']['booking_min_config_desc']; ?>
';
lang.booking_max_config_error = '<?php echo $this->_tpl_vars['lang']['booking_max_config_error']; ?>
';

var bookingConfigs            = [];
bookingConfigs.listing_id  = '<?php if ($_GET['id']): ?><?php echo $_GET['id']; ?>
<?php elseif ($_SESSION['add_listing']['listing_id']): ?><?php echo $_SESSION['add_listing']['listing_id']; ?>
<?php endif; ?>';

booking.saveBindingDaysHandler();
booking.saveConfigsHandler();
booking.requestRemoveHandler();
</script>

<!-- booking details end -->