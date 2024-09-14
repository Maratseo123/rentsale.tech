<?php /* Smarty version 2.6.31, created on 2023-10-31 15:35:23
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/admin/booking_type_properties.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/admin/booking_type_properties.tpl', 71, false),)), $this); ?>
</table>
<?php $this->assign('sPost', $this->_tpl_vars['sPost']); ?>
<!-- booking type properties -->

<table class="form">
    <tr>
        <td class="divider" colspan="3">
            <div class="inner"><?php echo $this->_tpl_vars['lang']['booking_module']; ?>
</div>
        </td>
    </tr>

    <tr>
        <td class="name"><?php echo $this->_tpl_vars['lang']['booking_type']; ?>
</td>
        <td class="field">
            <select name="Booking_type">
                <option value="none" <?php if ($this->_tpl_vars['sPost']['Booking_type'] == 'none'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['booking_none']; ?>
</option>
                <option value="date_range" <?php if ($this->_tpl_vars['sPost']['Booking_type'] == 'date_range'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['booking_date_range']; ?>
</option>
                <option value="date_time_range" <?php if ($this->_tpl_vars['sPost']['Booking_type'] == 'date_time_range'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['booking_date_time_range']; ?>
</option>
                <option value="time_range" <?php if ($this->_tpl_vars['sPost']['Booking_type'] == 'time_range'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['booking_time_range']; ?>
</option>
            </select>
        </td>
    </tr>

    <tr <?php if ($this->_tpl_vars['sPost']['Booking_type'] !== 'time_range' || (defined('IS_ESCORT') ? @IS_ESCORT : null) === true): ?>class="hide"<?php endif; ?>>
        <td class="name"><?php echo $this->_tpl_vars['lang']['booking_repeatedly_service']; ?>
</td>
        <td class="field">
            <?php if ($this->_tpl_vars['sPost']['Booking_repeatedly'] == '1'): ?>
                <?php $this->assign('repeatedly_yes', 'checked'); ?>
            <?php elseif ($this->_tpl_vars['sPost']['Booking_repeatedly'] == '0'): ?>
                <?php $this->assign('repeatedly_no', 'checked'); ?>
            <?php else: ?>
                <?php $this->assign('repeatedly_yes', 'checked'); ?>
            <?php endif; ?>

            <label><input <?php echo $this->_tpl_vars['repeatedly_yes']; ?>
 type="radio" name="Booking_repeatedly" value="1" />&nbsp;<?php echo $this->_tpl_vars['lang']['yes']; ?>
</label>
            <label><input <?php echo $this->_tpl_vars['repeatedly_no']; ?>
 type="radio" name="Booking_repeatedly" value="0" />&nbsp;<?php echo $this->_tpl_vars['lang']['no']; ?>
</label>
        </td>
    </tr>

    <tr <?php if ($this->_tpl_vars['sPost']['Booking_type'] == 'time_range'): ?>class="hide"<?php endif; ?>>
        <td class="name"><?php echo $this->_tpl_vars['lang']['booking_admin_price_field_devide_price']; ?>
</td>
        <td class="field">
            <select name="Booking_price_field" <?php if ($this->_tpl_vars['sPost']['Booking_type'] == 'none'): ?>class="disabled" disabled="disabled"<?php endif; ?>>
                <option value=""><?php echo $this->_tpl_vars['lang']['booking_none']; ?>
</option>

                <?php $_from = $this->_tpl_vars['price_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
                    <option value="<?php echo $this->_tpl_vars['field']['Key']; ?>
"<?php if ($this->_tpl_vars['field']['Key'] == $this->_tpl_vars['booking_price_field'] || $this->_tpl_vars['sPost']['Booking_price_field'] == $this->_tpl_vars['field']['Key']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['field']['name']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
            </select>

            <span class="field_description"><?php echo $this->_tpl_vars['lang']['booking_price_field_hint']; ?>
</span>
        </td>
    </tr>

    <tr <?php if ($this->_tpl_vars['sPost']['Booking_type'] == 'time_range'): ?>class="hide"<?php endif; ?>>
        <td class="name"><?php echo $this->_tpl_vars['lang']['booking_rent_field']; ?>
</td>
        <td class="field">
            <select name="Booking_rent_field" <?php if ($this->_tpl_vars['sPost']['Booking_type'] == 'none'): ?>class="disabled" disabled="disabled"<?php endif; ?>>
                <option value=""><?php echo $this->_tpl_vars['lang']['booking_none']; ?>
</option>

                <?php $_from = $this->_tpl_vars['rent_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
                    <option value="<?php echo $this->_tpl_vars['field']['Key']; ?>
"<?php if ($this->_tpl_vars['field']['Key'] == $this->_tpl_vars['booking_rent_field'] || $this->_tpl_vars['sPost']['Booking_rent_field'] == $this->_tpl_vars['field']['Key']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['field']['name']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
            </select>

            <span class="field_description"><?php echo $this->_tpl_vars['lang']['booking_rent_field_hint']; ?>
</span>
        </td>
    </tr>

    <?php $_from = $this->_tpl_vars['rent_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
        <?php $this->assign('rent_field_key', ((is_array($_tmp='Booking_rent_field_value_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['field']['Key']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['field']['Key']))); ?>

        <?php if ($this->_tpl_vars['sPost'][$this->_tpl_vars['rent_field_key']]): ?>
            <?php $this->assign('post_rent_field_key', $this->_tpl_vars['field']['Key']); ?>
            <?php $this->assign('post_rent_field_value', $this->_tpl_vars['sPost'][$this->_tpl_vars['rent_field_key']]); ?>
            <?php break; ?>
        <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>

    <tr class="rent_field_values <?php if (! $this->_tpl_vars['booking_rent_field'] && ! $this->_tpl_vars['post_rent_field_value']): ?>hide<?php endif; ?>">
        <td class="name"><?php echo $this->_tpl_vars['lang']['booking_rent_field_value']; ?>
</td>
        <td class="field">
            <?php $_from = $this->_tpl_vars['rent_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
                <select name="Booking_rent_field_value_<?php echo $this->_tpl_vars['field']['Key']; ?>
" class="<?php if (( $this->_tpl_vars['field']['Key'] != $this->_tpl_vars['booking_rent_field'] || ! $this->_tpl_vars['booking_rent_field'] ) && ( $this->_tpl_vars['field']['Key'] != $this->_tpl_vars['post_rent_field_key'] )): ?>hide<?php endif; ?>">

                <?php if ($this->_tpl_vars['field']['Values']): ?>
                    <option value=""><?php echo $this->_tpl_vars['lang']['booking_none']; ?>
</option>

                    <?php $_from = $this->_tpl_vars['field']['Values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field_value']):
?>
                        <option value="<?php echo $this->_tpl_vars['field_value']['Key']; ?>
"<?php if ($this->_tpl_vars['field_value']['Key'] == $this->_tpl_vars['booking_rent_field_value'] || $this->_tpl_vars['post_rent_field_value'] == $this->_tpl_vars['field_value']['Key']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['field_value']['pName']]; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                <?php endif; ?>
                </select>
            <?php endforeach; endif; unset($_from); ?>
        </td>
    </tr>

    <tr <?php if ($this->_tpl_vars['sPost']['Booking_type'] == 'time_range' && ! $this->_tpl_vars['sPost']['Booking_time_frame_field']): ?>class="hide"<?php endif; ?>>
        <td class="name"><?php echo $this->_tpl_vars['lang']['booking_time_frame_field']; ?>
</td>
        <td class="field">
            <select name="Booking_time_frame_field" <?php if ($this->_tpl_vars['sPost']['Booking_type'] == 'none' && ! $this->_tpl_vars['sPost']['Booking_time_frame_field']): ?>class="disabled" disabled="disabled"<?php endif; ?>>
                <option value=""><?php echo $this->_tpl_vars['lang']['booking_none']; ?>
</option>

                <?php $_from = $this->_tpl_vars['rent_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
                    <option value="<?php echo $this->_tpl_vars['field']['Key']; ?>
"<?php if ($this->_tpl_vars['field']['Key'] == $this->_tpl_vars['booking_time_frame_field'] || $this->_tpl_vars['field']['Key'] == $this->_tpl_vars['sPost']['Booking_time_frame_field']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['field']['name']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
            </select>

            <span class="field_description"><?php echo $this->_tpl_vars['lang']['booking_time_frame_field_hint']; ?>
</span>
        </td>
    </tr>

    <?php if ($this->_tpl_vars['sPost']['Booking_time_frame_field']): ?>
        <?php $this->assign('post_rent_time_field', $this->_tpl_vars['sPost']['Booking_time_frame_field']); ?>
        <?php $this->assign('post_rent_time_value', ((is_array($_tmp='Booking_rent_field_value_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['sPost']['Booking_time_frame_field']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['sPost']['Booking_time_frame_field']))); ?>
        <?php $this->assign('post_rent_time_value', $this->_tpl_vars['sPost'][$this->_tpl_vars['post_rent_time_value']]); ?>
        <?php $this->assign('time_frame_field_values', ((is_array($_tmp='Booking_time_frame_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['post_rent_time_field']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['post_rent_time_field']))); ?>
    <?php endif; ?>

    <tr class="booking_rent_time_frame <?php if (! $this->_tpl_vars['booking_time_frame_field'] && ! $this->_tpl_vars['post_rent_time_field']): ?>hide<?php endif; ?>">
        <td class="name"><?php echo $this->_tpl_vars['lang']['booking_admin_rent_time_frame']; ?>
</td>
        <td class="field">
            <table class="rent_time_frame_mapping">
                <tr>
                    <td>
                        <?php $_from = $this->_tpl_vars['rent_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['time_frame_field']):
?>
                            <?php if ($this->_tpl_vars['time_frame_field']['Values']): ?>
                                <select name="Booking_time_frame_<?php echo $this->_tpl_vars['time_frame_field']['Key']; ?>
[hour]" class="<?php if (( $this->_tpl_vars['booking_time_frame_field'] != $this->_tpl_vars['time_frame_field']['Key'] || ! $this->_tpl_vars['booking_time_frame_field'] ) && ( $this->_tpl_vars['post_rent_time_field'] != $this->_tpl_vars['time_frame_field']['Key'] )): ?>hide<?php endif; ?> <?php if ($this->_tpl_vars['sPost']['Booking_type'] != 'date_time_range'): ?>disabled<?php endif; ?>" <?php if ($this->_tpl_vars['sPost']['Booking_type'] != 'date_time_range'): ?>disabled="disabled"<?php endif; ?>>
                                    <option value=""><?php echo $this->_tpl_vars['lang']['booking_none']; ?>
</option>

                                    <?php $_from = $this->_tpl_vars['time_frame_field']['Values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['time_frame_value']):
?>
                                        <option value="<?php echo $this->_tpl_vars['time_frame_value']['Key']; ?>
"<?php if (( $this->_tpl_vars['time_frame_field']['Key'] == $this->_tpl_vars['booking_time_frame_field'] && $this->_tpl_vars['time_frame_value']['Key'] == $this->_tpl_vars['booking_time_frame_field_value']['hour'] ) || ( $this->_tpl_vars['sPost'][$this->_tpl_vars['time_frame_field_values']]['hour'] == $this->_tpl_vars['time_frame_value']['Key'] )): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['time_frame_value']['pName']]; ?>
</option>
                                    <?php endforeach; endif; unset($_from); ?>
                                </select>
                            <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>

                        <span class="field_description_noicon"><?php echo $this->_tpl_vars['lang']['booking_admin_rent_time_frame_per_hour']; ?>
</span>
                        <span class="field_description"><?php echo $this->_tpl_vars['lang']['booking_rent_time_frame_per_day_hint']; ?>
</span>
                    </td>
                </tr>

                <tr>
                    <td>
                        <?php $_from = $this->_tpl_vars['rent_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['time_frame_field']):
?>
                            <?php if ($this->_tpl_vars['time_frame_field']['Values']): ?>
                                <select name="Booking_time_frame_<?php echo $this->_tpl_vars['time_frame_field']['Key']; ?>
[day]" class="<?php if (( $this->_tpl_vars['booking_time_frame_field'] != $this->_tpl_vars['time_frame_field']['Key'] || ! $this->_tpl_vars['booking_time_frame_field'] ) && ( $this->_tpl_vars['post_rent_time_field'] != $this->_tpl_vars['time_frame_field']['Key'] )): ?>hide<?php endif; ?>">
                                    <option value=""><?php echo $this->_tpl_vars['lang']['booking_none']; ?>
</option>

                                    <?php $_from = $this->_tpl_vars['time_frame_field']['Values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['time_frame_value']):
?>
                                        <option value="<?php echo $this->_tpl_vars['time_frame_value']['Key']; ?>
"<?php if (( $this->_tpl_vars['time_frame_field']['Key'] == $this->_tpl_vars['booking_time_frame_field'] && $this->_tpl_vars['time_frame_value']['Key'] == $this->_tpl_vars['booking_time_frame_field_value']['day'] ) || ( $this->_tpl_vars['sPost'][$this->_tpl_vars['time_frame_field_values']]['day'] == $this->_tpl_vars['time_frame_value']['Key'] )): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['time_frame_value']['pName']]; ?>
</option>
                                    <?php endforeach; endif; unset($_from); ?>
                                </select>
                            <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>

                        <span class="field_description_noicon"><?php echo $this->_tpl_vars['lang']['booking_admin_rent_time_frame_per_day']; ?>
</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php $_from = $this->_tpl_vars['rent_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['time_frame_field']):
?>
                            <?php if ($this->_tpl_vars['time_frame_field']['Values']): ?>
                                <select name="Booking_time_frame_<?php echo $this->_tpl_vars['time_frame_field']['Key']; ?>
[week]" class="<?php if (( $this->_tpl_vars['booking_time_frame_field'] != $this->_tpl_vars['time_frame_field']['Key'] || ! $this->_tpl_vars['booking_time_frame_field'] ) && ( $this->_tpl_vars['post_rent_time_field'] != $this->_tpl_vars['time_frame_field']['Key'] )): ?>hide<?php endif; ?>">
                                    <option value=""><?php echo $this->_tpl_vars['lang']['booking_none']; ?>
</option>

                                    <?php $_from = $this->_tpl_vars['time_frame_field']['Values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['time_frame_value']):
?>
                                        <option value="<?php echo $this->_tpl_vars['time_frame_value']['Key']; ?>
"<?php if (( $this->_tpl_vars['time_frame_field']['Key'] == $this->_tpl_vars['booking_time_frame_field'] && $this->_tpl_vars['time_frame_value']['Key'] == $this->_tpl_vars['booking_time_frame_field_value']['week'] ) || ( $this->_tpl_vars['sPost'][$this->_tpl_vars['time_frame_field_values']]['week'] == $this->_tpl_vars['time_frame_value']['Key'] )): ?> selected="seelcted"<?php endif; ?>><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['time_frame_value']['pName']]; ?>
</option>
                                    <?php endforeach; endif; unset($_from); ?>
                                </select>
                            <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>

                        <span class="field_description_noicon"><?php echo $this->_tpl_vars['lang']['booking_admin_rent_time_frame_per_week']; ?>
</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php $_from = $this->_tpl_vars['rent_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['time_frame_field']):
?>
                            <?php if ($this->_tpl_vars['time_frame_field']['Values']): ?>
                                <select name="Booking_time_frame_<?php echo $this->_tpl_vars['time_frame_field']['Key']; ?>
[month]" class="<?php if (( $this->_tpl_vars['booking_time_frame_field'] != $this->_tpl_vars['time_frame_field']['Key'] || ! $this->_tpl_vars['booking_time_frame_field'] ) && ( $this->_tpl_vars['post_rent_time_field'] != $this->_tpl_vars['time_frame_field']['Key'] )): ?>hide<?php endif; ?>">
                                    <option value=""><?php echo $this->_tpl_vars['lang']['booking_none']; ?>
</option>

                                    <?php $_from = $this->_tpl_vars['time_frame_field']['Values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['time_frame_value']):
?>
                                        <option value="<?php echo $this->_tpl_vars['time_frame_value']['Key']; ?>
"<?php if (( $this->_tpl_vars['time_frame_field']['Key'] == $this->_tpl_vars['booking_time_frame_field'] && $this->_tpl_vars['time_frame_value']['Key'] == $this->_tpl_vars['booking_time_frame_field_value']['month'] ) || ( $this->_tpl_vars['sPost'][$this->_tpl_vars['time_frame_field_values']]['month'] == $this->_tpl_vars['time_frame_value']['Key'] )): ?> selected="seelcted"<?php endif; ?>><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['time_frame_value']['pName']]; ?>
</option>
                                    <?php endforeach; endif; unset($_from); ?>
                                </select>
                            <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>

                        <span class="field_description_noicon"><?php echo $this->_tpl_vars['lang']['booking_admin_rent_time_frame_per_month']; ?>
</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php $_from = $this->_tpl_vars['rent_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['time_frame_field']):
?>
                            <?php if ($this->_tpl_vars['time_frame_field']['Values']): ?>
                                <select name="Booking_time_frame_<?php echo $this->_tpl_vars['time_frame_field']['Key']; ?>
[year]" class="<?php if (( $this->_tpl_vars['booking_time_frame_field'] != $this->_tpl_vars['time_frame_field']['Key'] || ! $this->_tpl_vars['booking_time_frame_field'] ) && ( $this->_tpl_vars['post_rent_time_field'] != $this->_tpl_vars['time_frame_field']['Key'] )): ?>hide<?php endif; ?>">
                                    <option value=""><?php echo $this->_tpl_vars['lang']['booking_none']; ?>
</option>

                                    <?php $_from = $this->_tpl_vars['time_frame_field']['Values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['time_frame_value']):
?>
                                        <option value="<?php echo $this->_tpl_vars['time_frame_value']['Key']; ?>
"<?php if (( $this->_tpl_vars['time_frame_field']['Key'] == $this->_tpl_vars['booking_time_frame_field'] && $this->_tpl_vars['time_frame_value']['Key'] == $this->_tpl_vars['booking_time_frame_field_value']['year'] ) || ( $this->_tpl_vars['sPost'][$this->_tpl_vars['time_frame_field_values']]['year'] == $this->_tpl_vars['time_frame_value']['Key'] )): ?> selected="seelcted"<?php endif; ?>><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['time_frame_value']['pName']]; ?>
</option>
                                    <?php endforeach; endif; unset($_from); ?>
                                </select>
                            <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>

                        <span class="field_description_noicon"><?php echo $this->_tpl_vars['lang']['booking_admin_rent_time_frame_per_year']; ?>
</span>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr>
        <td class="name"><?php echo $this->_tpl_vars['lang']['booking_prepayment_type']; ?>
</td>
        <td class="field">
            <select name="Booking_prepayment_type" <?php if ($this->_tpl_vars['sPost']['Booking_type'] == 'none'): ?>class="disabled" disabled="disabled"<?php endif; ?>>
                <option value="none" <?php if ($this->_tpl_vars['sPost']['Booking_prepayment_type'] == 'none'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['booking_none']; ?>
</option>
                <option value="for_admin" <?php if ($this->_tpl_vars['sPost']['Booking_prepayment_type'] == 'for_admin'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['administrator']; ?>
</option>
            </select>
        </td>
    </tr>

    <tr>
        <td class="name"><?php echo $this->_tpl_vars['lang']['booking_prepayment_percent']; ?>
</td>
        <td class="field">
            <?php if (( $this->_tpl_vars['sPost']['Booking_prepayment_type'] == 'none' || $this->_tpl_vars['sPost']['Booking_type'] == 'none' ) || ! $this->_tpl_vars['sPost']): ?>
                <?php $this->assign('booking_hide_percent', true); ?>
            <?php endif; ?>

            <input type="text" name="Booking_prepayment_percent" value="<?php if (! $this->_tpl_vars['booking_hide_percent']): ?><?php echo $this->_tpl_vars['sPost']['Booking_prepayment_percent']; ?>
<?php endif; ?>" class="w60 numeric <?php if ($this->_tpl_vars['booking_hide_percent']): ?>disabled<?php endif; ?>" <?php if ($this->_tpl_vars['booking_hide_percent']): ?>disabled="disabled"<?php endif; ?> maxlength="5">
        </td>
    </tr>

<script><?php echo '
$(function() {
    fieldBookingTypeHandler();
    fieldBookingPrepaymentHandler();
    fieldBookingRentHandler();
    fieldBookingTimeFrameHandler();
});

function fieldBookingTypeHandler() {
    let $bookingTypeField        = $(\'[name="Booking_type"]\'),
        $rentFieldGroup          = $(\'tr.rent_field_values\'),
        $rentTimeFrameFieldGroup = $(\'tr.booking_rent_time_frame\'),
        $priceField              = $(\'[name="Booking_price_field"]\'),
        $rentField               = $(\'[name="Booking_rent_field"]\'),
        $timeFrameField          = $(\'[name="Booking_time_frame_field"]\'),
        $prepaymentTypeField     = $(\'[name="Booking_prepayment_type"]\'),
        $repeatedlyServiceField  = $(\'[name="Booking_repeatedly"]\'),
        isEscort                 = '; ?>
<?php if ((defined('IS_ESCORT') ? @IS_ESCORT : null) === true): ?>true<?php else: ?>false<?php endif; ?><?php echo ';

    $bookingTypeField.change(function(){
        if ($(this).val() === \'none\') {
            $bookingTypeField.closest(\'table.form\').find(\'input\').val(\'\');
            $bookingTypeField.closest(\'table.form\').find(\'select option[value=""]\').attr(\'selected\', \'selected\');
            $prepaymentTypeField.find(\'option[value="none"]\').attr(\'selected\', \'selected\');
            $bookingTypeField.closest(\'table.form\').find(\'input,select:not([name="Booking_type"])\').addClass(\'disabled\').attr(\'disabled\', \'disabled\');
            $bookingTypeField.next(\'span.field_description\').fadeOut(\'fast\');
            $rentFieldGroup.fadeOut(\'fast\');
            $rentTimeFrameFieldGroup.fadeOut(\'fast\');
        } else {
            if ($(this).val() === \'time_range\') {
                $priceField.find(\'option[value=""]\').attr(\'selected\', \'selected\');
                $priceField.closest(\'tr\').fadeOut(\'fast\');
                $rentField.find(\'option[value=""]\').attr(\'selected\', \'selected\');
                $rentField.closest(\'tr\').fadeOut(\'fast\');
                $timeFrameField.find(\'option[value=""]\').attr(\'selected\', \'selected\');
                $timeFrameField.closest(\'tr\').fadeOut(\'fast\');

                $prepaymentTypeField.find(\'option[value="none"]\').attr(\'selected\', \'selected\');
                $prepaymentTypeField.removeClass(\'disabled\').removeAttr(\'disabled\');

                $bookingTypeField.next(\'span.field_description\').fadeIn(\'slow\');

                $rentFieldGroup.fadeOut(\'fast\');
                $rentTimeFrameFieldGroup.fadeOut(\'fast\');

                if (false === isEscort) {
                    $repeatedlyServiceField.closest(\'tr\').fadeIn(\'slow\');
                }
            } else {
                $timeFrameField.closest(\'tr\').show();
                $priceField.closest(\'tr\').show();
                $rentField.closest(\'tr\').show();
                $bookingTypeField.closest(\'table.form\').find(\'input:not([name="Booking_prepayment_percent"]),select:not([name="Booking_type"])\').removeClass(\'disabled\').removeAttr(\'disabled\');
                $bookingTypeField.next(\'span.field_description\').fadeOut(\'fast\');
                $repeatedlyServiceField.closest(\'tr\').fadeOut(\'fast\');
            }

            // Disable "Per hour" option for all booking types except Auto
            if ($bookingTypeField.val() !== \'date_time_range\') {
                $(\'.booking_rent_time_frame\').find(\'[name*="[hour]"]\').addClass(\'disabled\').attr(\'disabled\', \'disabled\');
            }
        }
    });
}

function fieldBookingPrepaymentHandler() {
    var $prepayment_field = $(\'[name="Booking_prepayment_type"]\');
    var $percent_field    = $(\'[name="Booking_prepayment_percent"]\');

    $prepayment_field.change(function(){
        if ($(this).val() === \'none\') {
            $percent_field.val(\'\').addClass(\'disabled\').attr(\'disabled\', \'disabled\');
        } else {
            $percent_field.removeClass(\'disabled\').removeAttr(\'disabled\');
        }
    });
}

function fieldBookingRentHandler() {
    var $rent_field = $(\'[name="Booking_rent_field"]\');
    var $rent_field_values_tr = $(\'.rent_field_values\');

    $rent_field.change(function(){
        var rent_field_val = $(this).val();

        if (rent_field_val) {
            $rent_field_values_tr.find(\'select\').addClass(\'hide\');
            $rent_field_values_tr.find(\'[name="Booking_rent_field_value_\' + rent_field_val + \'"]\').removeClass(\'hide\');
            $rent_field_values_tr.fadeIn(\'slow\');
        } else {
            $rent_field_values_tr.fadeOut();
            $rent_field_values_tr.find(\'select option[value=""]\').attr(\'selected\', \'selected\');
        }
    });
}

function fieldBookingTimeFrameHandler() {
    var $time_frame_field = $(\'[name="Booking_time_frame_field"]\');
    var $time_frame_values_tr = $(\'.booking_rent_time_frame\');

    $time_frame_field.change(function(){
        var time_frame_field_val = $(this).val();

        if (time_frame_field_val) {
            $time_frame_values_tr.find(\'select\').addClass(\'hide\');
            $time_frame_values_tr.find(\'[name*="Booking_time_frame_\' + time_frame_field_val + \'"]\').removeClass(\'hide\');
            $time_frame_values_tr.fadeIn(\'slow\');

            // disable "Per hour" option for all booking types except Auto
            if ($(\'[name="Booking_type"]\').val() !== \'date_time_range\') {
                $time_frame_values_tr.find(\'[name="Booking_time_frame_\' + time_frame_field_val + \'[hour]"]\').addClass(\'disabled\').attr(\'disabled\', \'disabled\');
            }
        } else {
            $time_frame_values_tr.fadeOut();
            $time_frame_values_tr.find(\'select option[value=""]\').attr(\'selected\', \'selected\');
        }
    });
}
'; ?>
</script>

<style><?php echo '
table.rent_time_frame_mapping {
    margin-top: 0 !important;
}
table.rent_time_frame_mapping tr:not(:nth-of-type(1)) td {
    padding-top: 10px !important;
}
'; ?>
</style>

<!-- booking type properties end -->