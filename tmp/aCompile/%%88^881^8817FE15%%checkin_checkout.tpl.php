<?php /* Smarty version 2.6.31, created on 2023-10-31 01:56:22
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/smarty_blocks/checkin_checkout.tpl */ ?>
<div id="booking_checkin_field" class="hide">
    <select name="f[booking_check_in]">
        <option value="0"><?php echo $this->_tpl_vars['lang']['any']; ?>
</option>
        <?php $_from = $this->_tpl_vars['booking_time_range']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['timeKey'] => $this->_tpl_vars['timeValue']):
?>
            <option <?php if ($this->_tpl_vars['timeKey'] == $_POST['f']['booking_check_in']): ?>selected<?php endif; ?> value="<?php echo $this->_tpl_vars['timeKey']; ?>
">
                <?php echo $this->_tpl_vars['timeValue']; ?>

            </option>
        <?php endforeach; endif; unset($_from); ?>
    </select>
</div>

<div id="booking_checkout_field" class="hide">
    <select name="f[booking_check_out]"
        <?php if (( $this->_tpl_vars['bookingConfigs']['Booking_type'] == 'time_range' || (defined('IS_ESCORT') ? @IS_ESCORT : null) === true ) && ! $this->_tpl_vars['edit_action']): ?>
            class="disabled" disabled="disabled"
        <?php endif; ?>
    >
        <option value="0"><?php echo $this->_tpl_vars['lang']['any']; ?>
</option>
        <?php $_from = $this->_tpl_vars['booking_time_range']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['timeKey'] => $this->_tpl_vars['timeValue']):
?>
            <option <?php if ($this->_tpl_vars['timeKey'] == $_POST['f']['booking_check_out'] || ( $this->_tpl_vars['edit_action'] && $this->_tpl_vars['bookingConfigs']['Booking_type'] == 'time_range' && $this->_tpl_vars['timeValue'] == $this->_tpl_vars['bookingData']['checkout'] )): ?>selected<?php endif; ?>
                value="<?php echo $this->_tpl_vars['timeKey']; ?>
"
            >
                <?php echo $this->_tpl_vars['timeValue']; ?>

            </option>
        <?php endforeach; endif; unset($_from); ?>
    </select>
</div>