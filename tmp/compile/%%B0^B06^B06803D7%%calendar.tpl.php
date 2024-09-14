<?php /* Smarty version 2.6.31, created on 2024-04-26 02:16:07
         compiled from /var/www/u2273289/data/www/rentsale.tech/plugins/booking/smarty_blocks/calendar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', '/var/www/u2273289/data/www/rentsale.tech/plugins/booking/smarty_blocks/calendar.tpl', 14, false),)), $this); ?>
<?php if ($this->_tpl_vars['fieldsetEnable'] && ! $this->_tpl_vars['step']): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'blocks/fieldset_header.tpl', 'smarty_include_vars' => array('id' => 'calendar_fieldset','name' => $this->_tpl_vars['lang']['booking_calendar'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<div class="booking_notices <?php if ($this->_tpl_vars['step']): ?>hide<?php endif; ?>">
    <ul>
        <li class="<?php if ($this->_tpl_vars['bookingConfigs']['Deny_guest'] && ! $this->_tpl_vars['isLogin']): ?>active<?php else: ?>hide<?php endif; ?> static">
            <?php echo $this->_tpl_vars['lang']['booking_deny_guests']; ?>

        </li>

        <?php if ($this->_tpl_vars['bookingConfigs']['Booking_type'] != 'time_range'): ?>
            <li class="static<?php if ($this->_tpl_vars['bookingConfigs']['Min_book_day'] && $this->_tpl_vars['bookingConfigs']['Min_book_day'] > 1): ?> active<?php else: ?> hide<?php endif; ?>">
                <?php $this->assign('minNights', ('{')."nights".('}')); ?>
                <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['booking_min_booking'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['minNights'], $this->_tpl_vars['bookingConfigs']['Min_book_day']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['minNights'], $this->_tpl_vars['bookingConfigs']['Min_book_day'])); ?>

            </li>
            <li class="static<?php if ($this->_tpl_vars['bookingConfigs']['Max_book_day']): ?> active<?php else: ?> hide<?php endif; ?>">
                <?php $this->assign('maxNights', ('{')."nights".('}')); ?>
                <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['booking_max_booking'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['maxNights'], $this->_tpl_vars['bookingConfigs']['Max_book_day']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['maxNights'], $this->_tpl_vars['bookingConfigs']['Max_book_day'])); ?>

            </li>
        <?php endif; ?>
    </ul>
</div>

<div id="booking_calendar" class="<?php if ($this->_tpl_vars['fieldsetEnable']): ?>in-fieldset<?php endif; ?><?php if ($this->_tpl_vars['step']): ?> hide<?php endif; ?>"><?php echo $this->_tpl_vars['lang']['loading']; ?>
</div>

<?php if ($this->_tpl_vars['fieldsetEnable'] && ! $this->_tpl_vars['step']): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'blocks/fieldset_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>