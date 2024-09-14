<?php /* Smarty version 2.6.31, created on 2024-04-26 02:16:07
         compiled from /var/www/u2273289/data/www/rentsale.tech/plugins/booking/booking_group.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/plugins/booking/booking_group.tpl', 6, false),)), $this); ?>
<!-- section of booking -->

<?php if ($this->_tpl_vars['displayCalendar']): ?>
    <div id="area_booking" class="hide content-padding <?php if ($this->_tpl_vars['config']['booking_calendar_position'] == 'box'): ?>box<?php endif; ?>">
        <?php if ($this->_tpl_vars['bookingConfigs']['Booking_type'] == 'time_range' && (defined('IS_ESCORT') ? @IS_ESCORT : null) !== true): ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['bookingBlocksFolder'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'escort_data.tpl') : smarty_modifier_cat($_tmp, 'escort_data.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php endif; ?>

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['bookingBlocksFolder'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'calendar.tpl') : smarty_modifier_cat($_tmp, 'calendar.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['bookingBlocksFolder'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'message.tpl') : smarty_modifier_cat($_tmp, 'message.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['bookingBlocksFolder'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'fields.tpl') : smarty_modifier_cat($_tmp, 'fields.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['bookingBlocksFolder'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'styles.tpl') : smarty_modifier_cat($_tmp, 'styles.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['bookingBlocksFolder'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'js_script.tpl') : smarty_modifier_cat($_tmp, 'js_script.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<!-- section of booking end -->