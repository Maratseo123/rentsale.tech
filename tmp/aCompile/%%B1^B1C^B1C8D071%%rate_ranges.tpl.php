<?php /* Smarty version 2.6.31, created on 2024-09-04 03:34:20
         compiled from /var/www/u2273289/data/www/rentsale.tech/plugins/booking/rate_ranges.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/plugins/booking/rate_ranges.tpl', 14, false),array('modifier', 'replace', '/var/www/u2273289/data/www/rentsale.tech/plugins/booking/rate_ranges.tpl', 71, false),array('modifier', 'count', '/var/www/u2273289/data/www/rentsale.tech/plugins/booking/rate_ranges.tpl', 178, false),array('modifier', 'intval', '/var/www/u2273289/data/www/rentsale.tech/plugins/booking/rate_ranges.tpl', 209, false),array('modifier', 'df', '/var/www/u2273289/data/www/rentsale.tech/plugins/booking/rate_ranges.tpl', 238, false),array('modifier', 'unserialize', '/var/www/u2273289/data/www/rentsale.tech/plugins/booking/rate_ranges.tpl', 291, false),array('modifier', 'lower', '/var/www/u2273289/data/www/rentsale.tech/plugins/booking/rate_ranges.tpl', 390, false),array('function', 'math', '/var/www/u2273289/data/www/rentsale.tech/plugins/booking/rate_ranges.tpl', 48, false),)), $this); ?>
<!-- list of rate ranges tpl -->

<div id="manage_item_dom" class="hide">
    <div class="manage-photo light-inputs <?php if ((defined('REALM') ? @REALM : null) == 'admin'): ?>admin<?php endif; ?>">
        <div class="two-inline">
            <div><input name="item-desc-save" type="button" value="<?php echo $this->_tpl_vars['lang']['save']; ?>
"></div>
            <div style="padding-<?php if ($this->_tpl_vars['text_dir_rev']): ?><?php echo $this->_tpl_vars['text_dir_rev']; ?>
<?php else: ?>right<?php endif; ?>: 15px;">
                <input style="width: 100%;" placeholder="<?php echo $this->_tpl_vars['lang']['description']; ?>
" name="item-desc" type="text">
            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=(defined('RL_PLUGINS') ? @RL_PLUGINS : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'booking/smarty_blocks/checkin_checkout.tpl') : smarty_modifier_cat($_tmp, 'booking/smarty_blocks/checkin_checkout.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="hide" id="booking_rate_ranges_list">
    <div class="list-table content-padding">
        <div class="header">
            <div class="from"><?php echo $this->_tpl_vars['lang']['from']; ?>
</div>
            <div class="to"><?php echo $this->_tpl_vars['lang']['to']; ?>
</div>
            <div class="price"><?php echo $this->_tpl_vars['lang']['price']; ?>
 <?php echo $this->_tpl_vars['lang']['booking_price_notice']; ?>
</div>
            <div class="desc"><?php echo $this->_tpl_vars['lang']['description']; ?>
</div>
            <div class="actions"><?php echo $this->_tpl_vars['lang']['actions']; ?>
</div>
        </div>

        <?php if ($this->_tpl_vars['rate_ranges']): ?>
            <?php $_from = $this->_tpl_vars['rate_ranges']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['postRateRanges'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['postRateRanges']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['rate_range']):
        $this->_foreach['postRateRanges']['iteration']++;
?>
                <?php $this->assign('rate_index', $this->_tpl_vars['rate_range']['ID']); ?>

                <div class="row" id="rrange_<?php echo $this->_tpl_vars['rate_index']; ?>
">
                    <div data-caption="<?php echo $this->_tpl_vars['lang']['from']; ?>
"><?php echo $this->_tpl_vars['rate_range']['From']; ?>
</div>
                    <div data-caption="<?php echo $this->_tpl_vars['lang']['to']; ?>
"><?php echo $this->_tpl_vars['rate_range']['To']; ?>
</div>
                    <div data-caption="<?php echo $this->_tpl_vars['lang']['price']; ?>
"><?php if ($this->_tpl_vars['rate_range']['Price']): ?><?php echo $this->_tpl_vars['rate_range']['Price']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['booking_close_days']; ?>
<?php endif; ?></div>
                    <div data-caption="<?php echo $this->_tpl_vars['lang']['description']; ?>
">
                        <?php $this->assign('qtip_e', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=" <br><hr><a class='booking_edit_desc' href='javascript:void(0)' onclick='booking.editDesc(")) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['rate_index']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['rate_index'])))) ? $this->_run_mod_handler('cat', true, $_tmp, ")'>") : smarty_modifier_cat($_tmp, ")'>")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['lang']['edit']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['lang']['edit'])))) ? $this->_run_mod_handler('cat', true, $_tmp, "</a>") : smarty_modifier_cat($_tmp, "</a>"))); ?>

                        <img class="booking_qtip" alt="" title="<?php if ($this->_tpl_vars['rate_range']['Desc']): ?><?php echo $this->_tpl_vars['rate_range']['Desc']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['not_available']; ?>
<?php endif; ?> <?php echo $this->_tpl_vars['qtip_e']; ?>
" id="desc_ico_<?php echo $this->_tpl_vars['rate_index']; ?>
" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" />

                        <textarea class="hide" id="save_desc_<?php echo $this->_tpl_vars['rate_index']; ?>
" cols="30" rows="2"><?php echo $this->_tpl_vars['rate_range']['Desc']; ?>
</textarea>
                    </div>
                    <div data-caption="<?php echo $this->_tpl_vars['lang']['actions']; ?>
">
                        <img class="remove remove_rate" id="<?php echo $this->_tpl_vars['rate_index']; ?>
" title="<?php echo $this->_tpl_vars['lang']['delete']; ?>
" alt="<?php echo $this->_tpl_vars['lang']['delete']; ?>
" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif">
                    </div>
                </div>

                <?php if (($this->_foreach['postRateRanges']['iteration'] == $this->_foreach['postRateRanges']['total'])): ?>
                    <?php $this->assign('current_rate_index', $this->_tpl_vars['rate_range']['ID']); ?>
                    <?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['current_rate_index'],'y' => 1,'assign' => 'current_rate_index'), $this);?>

                <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
        <?php else: ?>
            <?php if ($this->_tpl_vars['errors'] && $_POST['b']): ?>
                <?php $this->assign('post_rate_ranges', $_POST['b']); ?>

                <?php if ($_POST['f'][$this->_tpl_vars['config']['price_tag_field']]['currency']): ?>
                    <?php $this->assign('currency_name', ((is_array($_tmp='data_formats+name+')) ? $this->_run_mod_handler('cat', true, $_tmp, $_POST['f'][$this->_tpl_vars['config']['price_tag_field']]['currency']) : smarty_modifier_cat($_tmp, $_POST['f'][$this->_tpl_vars['config']['price_tag_field']]['currency']))); ?>

                    <?php if ($this->_tpl_vars['lang'][$this->_tpl_vars['currency_name']]): ?>
                        <?php $this->assign('lCurrency', $this->_tpl_vars['lang'][$this->_tpl_vars['currency_name']]); ?>
                    <?php else: ?>
                        <?php $this->assign('lCurrency', $this->_tpl_vars['config']['system_currency']); ?>
                    <?php endif; ?>
                <?php endif; ?>

                <?php $_from = $this->_tpl_vars['post_rate_ranges']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['postRateRanges'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['postRateRanges']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['rate_range']):
        $this->_foreach['postRateRanges']['iteration']++;
?>
                    <?php if ($this->_tpl_vars['rate_range']['from'] || $this->_tpl_vars['rate_range']['to']): ?>
                        <?php $this->assign('rate_index', $this->_foreach['postRateRanges']['iteration']); ?>

                        <div class="row tmp" id="add_rate_<?php echo $this->_tpl_vars['rate_index']; ?>
">
                            <div data-caption="<?php echo $this->_tpl_vars['lang']['from']; ?>
">
                                <input class="w120" type="text" name="b[<?php echo $this->_tpl_vars['rate_index']; ?>
][from]" id="brr_from_<?php echo $this->_tpl_vars['rate_index']; ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['rate_range']['from'])) ? $this->_run_mod_handler('replace', true, $_tmp, '/', '-') : smarty_modifier_replace($_tmp, '/', '-')); ?>
" />
                            </div>
                            <div data-caption="<?php echo $this->_tpl_vars['lang']['to']; ?>
">
                                <input class="w120" type="text" name="b[<?php echo $this->_tpl_vars['rate_index']; ?>
][to]" id="brr_to_<?php echo $this->_tpl_vars['rate_index']; ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['rate_range']['to'])) ? $this->_run_mod_handler('replace', true, $_tmp, '/', '-') : smarty_modifier_replace($_tmp, '/', '-')); ?>
" />
                            </div>
                            <div data-caption="<?php echo $this->_tpl_vars['lang']['price']; ?>
">
                                <?php if ($this->_tpl_vars['config']['system_currency_position'] == 'before'): ?><?php echo $this->_tpl_vars['lCurrency']; ?>
 <?php endif; ?><input type="text" class="numeric w120 price" name="b[<?php echo $this->_tpl_vars['rate_index']; ?>
][price]" id="price_<?php echo $this->_tpl_vars['rate_index']; ?>
" value="<?php echo $this->_tpl_vars['rate_range']['price']; ?>
" /><?php if ($this->_tpl_vars['config']['system_currency_position'] != 'before'): ?> <?php echo $this->_tpl_vars['lCurrency']; ?>
<?php endif; ?><img class="booking_qtip" alt="" title="<?php echo $this->_tpl_vars['lang']['booking_close_rate_range_notice']; ?>
" id="rate_desc_<?php echo $this->_tpl_vars['rate_index']; ?>
" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif">
                            </div>
                            <div data-caption="<?php echo $this->_tpl_vars['lang']['description']; ?>
" class="rate-ranges-description">
                                <a href="javascript:void(0)" onclick="booking.addDesc(<?php echo $this->_tpl_vars['rate_index']; ?>
)"><?php echo $this->_tpl_vars['lang']['description']; ?>
</a>
                                <textarea class="hide" id="save_desc_<?php echo $this->_tpl_vars['rate_index']; ?>
" name="b[<?php echo $this->_tpl_vars['rate_index']; ?>
][desc]" cols="30" rows="2"><?php echo $this->_tpl_vars['rate_range']['desc']; ?>
</textarea>
                            </div>
                            <div data-caption="<?php echo $this->_tpl_vars['lang']['actions']; ?>
" class="rate-ranges-actions">
                                <img class="remove" onclick="booking.removeRate(<?php echo $this->_tpl_vars['rate_index']; ?>
)" title="<?php echo $this->_tpl_vars['lang']['delete']; ?>
" alt="<?php echo $this->_tpl_vars['lang']['delete']; ?>
" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" />
                            </div>
                        </div>

                        <?php $this->assign('current_rate_index', $this->_foreach['postRateRanges']['iteration']); ?>
                        <?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['current_rate_index'],'y' => 1,'assign' => 'current_rate_index'), $this);?>

                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
            <?php endif; ?>
        <?php endif; ?>

        <div class="row" id="rrange_regular">
            <div data-caption="<?php echo $this->_tpl_vars['lang']['from']; ?>
"><?php echo $this->_tpl_vars['lang']['booking_rate_price_per_day']; ?>
</div>
            <div data-caption="<?php echo $this->_tpl_vars['lang']['to']; ?>
"></div>
            <div data-caption="<?php echo $this->_tpl_vars['lang']['price']; ?>
">
                <?php if ($this->_tpl_vars['defPrice']['name']): ?>
                    <?php echo $this->_tpl_vars['defPrice']['name']; ?>

                <?php else: ?>
                    <?php echo $this->_tpl_vars['lang']['not_available']; ?>

                    <img class="booking_qtip" alt="" title="<?php echo $this->_tpl_vars['lang']['booking_empty_regular']; ?>
" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif">
                <?php endif; ?>
            </div>

            <div data-caption="<?php echo $this->_tpl_vars['lang']['description']; ?>
">
                <?php if (! $this->_tpl_vars['errors']): ?>
                    <?php $this->assign('qtip_e_regular', ((is_array($_tmp=((is_array($_tmp=" <br><hr><a class='booking_edit_desc' href='javascript:void(0)' onclick='booking.editDesc()'>")) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['lang']['edit']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['lang']['edit'])))) ? $this->_run_mod_handler('cat', true, $_tmp, "</a>") : smarty_modifier_cat($_tmp, "</a>"))); ?>

                    <img class="booking_qtip" alt="" title="<?php if (! empty ( $this->_tpl_vars['range_regular_desc'] )): ?><?php echo $this->_tpl_vars['range_regular_desc']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['not_available']; ?>
<?php endif; ?> <?php echo $this->_tpl_vars['qtip_e_regular']; ?>
" id="desc_ico_regular" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" />

                    <textarea class="hide" id="save_desc_regular" cols="30" rows="2"><?php echo $this->_tpl_vars['range_regular_desc']; ?>
</textarea>
                <?php else: ?>
                    <a href="javascript:void(0)" onclick="booking.addDesc()"><?php echo $this->_tpl_vars['lang']['description']; ?>
</a>
                    <textarea class="hide" id="save_desc_regular" name="b[regular][desc] cols=" 30"="" rows="2"><?php echo $_POST['b']['regular']['desc']; ?>
</textarea>
                <?php endif; ?>
            </div>
            <div data-caption="<?php echo $this->_tpl_vars['lang']['actions']; ?>
"><?php echo $this->_tpl_vars['lang']['not_available']; ?>
</div>
        </div>
    </div>

    <div id="add_ranges_table">
        <a class="add_rate_range" href="javascript:void(0)"><?php echo $this->_tpl_vars['lang']['booking_rate_add']; ?>
</a>
    </div>
</div>

<div id="availability" class="submit-cell clearfix hide">
    <div class="name"><?php echo $this->_tpl_vars['lang']['booking_availability']; ?>
</div>
    <div class="field">
        <div class="availability-field-container">
            <?php unset($this->_sections['bookingAvailability']);
$this->_sections['bookingAvailability']['name'] = 'bookingAvailability';
$this->_sections['bookingAvailability']['start'] = (int)1;
$this->_sections['bookingAvailability']['loop'] = is_array($_loop=8) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['bookingAvailability']['show'] = true;
$this->_sections['bookingAvailability']['max'] = $this->_sections['bookingAvailability']['loop'];
$this->_sections['bookingAvailability']['step'] = 1;
if ($this->_sections['bookingAvailability']['start'] < 0)
    $this->_sections['bookingAvailability']['start'] = max($this->_sections['bookingAvailability']['step'] > 0 ? 0 : -1, $this->_sections['bookingAvailability']['loop'] + $this->_sections['bookingAvailability']['start']);
else
    $this->_sections['bookingAvailability']['start'] = min($this->_sections['bookingAvailability']['start'], $this->_sections['bookingAvailability']['step'] > 0 ? $this->_sections['bookingAvailability']['loop'] : $this->_sections['bookingAvailability']['loop']-1);
if ($this->_sections['bookingAvailability']['show']) {
    $this->_sections['bookingAvailability']['total'] = min(ceil(($this->_sections['bookingAvailability']['step'] > 0 ? $this->_sections['bookingAvailability']['loop'] - $this->_sections['bookingAvailability']['start'] : $this->_sections['bookingAvailability']['start']+1)/abs($this->_sections['bookingAvailability']['step'])), $this->_sections['bookingAvailability']['max']);
    if ($this->_sections['bookingAvailability']['total'] == 0)
        $this->_sections['bookingAvailability']['show'] = false;
} else
    $this->_sections['bookingAvailability']['total'] = 0;
if ($this->_sections['bookingAvailability']['show']):

            for ($this->_sections['bookingAvailability']['index'] = $this->_sections['bookingAvailability']['start'], $this->_sections['bookingAvailability']['iteration'] = 1;
                 $this->_sections['bookingAvailability']['iteration'] <= $this->_sections['bookingAvailability']['total'];
                 $this->_sections['bookingAvailability']['index'] += $this->_sections['bookingAvailability']['step'], $this->_sections['bookingAvailability']['iteration']++):
$this->_sections['bookingAvailability']['rownum'] = $this->_sections['bookingAvailability']['iteration'];
$this->_sections['bookingAvailability']['index_prev'] = $this->_sections['bookingAvailability']['index'] - $this->_sections['bookingAvailability']['step'];
$this->_sections['bookingAvailability']['index_next'] = $this->_sections['bookingAvailability']['index'] + $this->_sections['bookingAvailability']['step'];
$this->_sections['bookingAvailability']['first']      = ($this->_sections['bookingAvailability']['iteration'] == 1);
$this->_sections['bookingAvailability']['last']       = ($this->_sections['bookingAvailability']['iteration'] == $this->_sections['bookingAvailability']['total']);
?>
                <?php $this->assign('availabilityPost', $_POST['f']['booking_availability']); ?>
                <?php $this->assign('i', $this->_sections['bookingAvailability']['index']); ?>

                <?php if ($this->_tpl_vars['config']['booking_first_day'] === 'sunday'): ?>
                    <?php if ($this->_tpl_vars['i'] === 1): ?>
                        <?php $this->assign('i', 7); ?>
                    <?php else: ?>
                        <?php $this->assign('i', $this->_tpl_vars['i']-1); ?>
                    <?php endif; ?>
                <?php endif; ?>

                <div>
                    <div class="day"><?php echo $this->_tpl_vars['bookingWeekdays']['full'][$this->_tpl_vars['i']]; ?>
</div>
                    <div class="av_from">
                        <select name="f[booking_availability][<?php echo $this->_tpl_vars['i']; ?>
][from]" id="hourly-availability-from-<?php echo $this->_tpl_vars['i']; ?>
">
                            <option value="0" <?php if (! $_POST): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['lang']['not_available']; ?>
</option>

                            <?php $_from = $this->_tpl_vars['booking_time_range']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['timeKey'] => $this->_tpl_vars['timeValue']):
?>
                                <option <?php if ($this->_tpl_vars['timeKey'] == $this->_tpl_vars['availabilityPost'][$this->_tpl_vars['i']]['from']): ?>selected<?php endif; ?> value="<?php echo $this->_tpl_vars['timeKey']; ?>
">
                                    <?php echo $this->_tpl_vars['timeValue']; ?>

                                </option>
                            <?php endforeach; endif; unset($_from); ?>
                        </select>
                    </div>
                    <div class="av_to">
                        <select name="f[booking_availability][<?php echo $this->_tpl_vars['i']; ?>
][to]" id="hourly-availability-to-<?php echo $this->_tpl_vars['i']; ?>
">
                            <option value="0" <?php if (! $_POST): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['lang']['not_available']; ?>
</option>

                            <?php $_from = $this->_tpl_vars['booking_time_range']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['timeKey'] => $this->_tpl_vars['timeValue']):
?>
                                <option <?php if ($this->_tpl_vars['timeKey'] == $this->_tpl_vars['availabilityPost'][$this->_tpl_vars['i']]['to']): ?>selected<?php endif; ?> value="<?php echo $this->_tpl_vars['timeKey']; ?>
">
                                    <?php echo $this->_tpl_vars['timeValue']; ?>

                                </option>
                            <?php endforeach; endif; unset($_from); ?>
                        </select>
                    </div>
                </div>
            <?php endfor; endif; ?>
        </div>
    </div>
</div>

<div id="rates" class="submit-cell clearfix hide">
    <div class="name"><?php echo $this->_tpl_vars['lang']['booking_rates']; ?>
</div>
    <div class="field">
        <div class="rates-field-container">
            <?php if ($_POST['f']['booking_rates'] && count($_POST['f']['booking_rates']) >= 2): ?>
                <?php $this->assign('ratesCount', count($_POST['f']['booking_rates'])); ?>
            <?php else: ?>
                <?php $this->assign('ratesCount', 1); ?>
            <?php endif; ?>

            <?php unset($this->_sections['bookingRates']);
$this->_sections['bookingRates']['name'] = 'bookingRates';
$this->_sections['bookingRates']['start'] = (int)0;
$this->_sections['bookingRates']['loop'] = is_array($_loop=$this->_tpl_vars['ratesCount']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['bookingRates']['show'] = true;
$this->_sections['bookingRates']['max'] = $this->_sections['bookingRates']['loop'];
$this->_sections['bookingRates']['step'] = 1;
if ($this->_sections['bookingRates']['start'] < 0)
    $this->_sections['bookingRates']['start'] = max($this->_sections['bookingRates']['step'] > 0 ? 0 : -1, $this->_sections['bookingRates']['loop'] + $this->_sections['bookingRates']['start']);
else
    $this->_sections['bookingRates']['start'] = min($this->_sections['bookingRates']['start'], $this->_sections['bookingRates']['step'] > 0 ? $this->_sections['bookingRates']['loop'] : $this->_sections['bookingRates']['loop']-1);
if ($this->_sections['bookingRates']['show']) {
    $this->_sections['bookingRates']['total'] = min(ceil(($this->_sections['bookingRates']['step'] > 0 ? $this->_sections['bookingRates']['loop'] - $this->_sections['bookingRates']['start'] : $this->_sections['bookingRates']['start']+1)/abs($this->_sections['bookingRates']['step'])), $this->_sections['bookingRates']['max']);
    if ($this->_sections['bookingRates']['total'] == 0)
        $this->_sections['bookingRates']['show'] = false;
} else
    $this->_sections['bookingRates']['total'] = 0;
if ($this->_sections['bookingRates']['show']):

            for ($this->_sections['bookingRates']['index'] = $this->_sections['bookingRates']['start'], $this->_sections['bookingRates']['iteration'] = 1;
                 $this->_sections['bookingRates']['iteration'] <= $this->_sections['bookingRates']['total'];
                 $this->_sections['bookingRates']['index'] += $this->_sections['bookingRates']['step'], $this->_sections['bookingRates']['iteration']++):
$this->_sections['bookingRates']['rownum'] = $this->_sections['bookingRates']['iteration'];
$this->_sections['bookingRates']['index_prev'] = $this->_sections['bookingRates']['index'] - $this->_sections['bookingRates']['step'];
$this->_sections['bookingRates']['index_next'] = $this->_sections['bookingRates']['index'] + $this->_sections['bookingRates']['step'];
$this->_sections['bookingRates']['first']      = ($this->_sections['bookingRates']['iteration'] == 1);
$this->_sections['bookingRates']['last']       = ($this->_sections['bookingRates']['iteration'] == $this->_sections['bookingRates']['total']);
?>
                <?php $this->assign('i', $this->_sections['bookingRates']['index']); ?>

                <div class="rates"><?php echo '<input type="text"name="f[booking_rates]['; ?><?php echo $this->_tpl_vars['i']; ?><?php echo '][title]"id="hourly-rates-name-'; ?><?php echo $this->_tpl_vars['i']; ?><?php echo '"placeholder="'; ?><?php echo $this->_tpl_vars['lang']['booking_rate_title']; ?><?php echo '"value="'; ?><?php echo $_POST['f']['booking_rates'][$this->_tpl_vars['i']]['title']; ?><?php echo '"><select name="f[booking_rates]['; ?><?php echo $this->_tpl_vars['i']; ?><?php echo '][time]"id="hourly-rates-duration-'; ?><?php echo $this->_tpl_vars['i']; ?><?php echo '"class="hourly-rates-duration"><option value="">'; ?><?php echo $this->_tpl_vars['lang']['booking_rate_selector']; ?><?php echo '</option>'; ?><?php unset($this->_sections['bookingTime']);
$this->_sections['bookingTime']['name'] = 'bookingTime';
$this->_sections['bookingTime']['start'] = (int)1;
$this->_sections['bookingTime']['loop'] = is_array($_loop=25) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['bookingTime']['show'] = true;
$this->_sections['bookingTime']['max'] = $this->_sections['bookingTime']['loop'];
$this->_sections['bookingTime']['step'] = 1;
if ($this->_sections['bookingTime']['start'] < 0)
    $this->_sections['bookingTime']['start'] = max($this->_sections['bookingTime']['step'] > 0 ? 0 : -1, $this->_sections['bookingTime']['loop'] + $this->_sections['bookingTime']['start']);
else
    $this->_sections['bookingTime']['start'] = min($this->_sections['bookingTime']['start'], $this->_sections['bookingTime']['step'] > 0 ? $this->_sections['bookingTime']['loop'] : $this->_sections['bookingTime']['loop']-1);
if ($this->_sections['bookingTime']['show']) {
    $this->_sections['bookingTime']['total'] = min(ceil(($this->_sections['bookingTime']['step'] > 0 ? $this->_sections['bookingTime']['loop'] - $this->_sections['bookingTime']['start'] : $this->_sections['bookingTime']['start']+1)/abs($this->_sections['bookingTime']['step'])), $this->_sections['bookingTime']['max']);
    if ($this->_sections['bookingTime']['total'] == 0)
        $this->_sections['bookingTime']['show'] = false;
} else
    $this->_sections['bookingTime']['total'] = 0;
if ($this->_sections['bookingTime']['show']):

            for ($this->_sections['bookingTime']['index'] = $this->_sections['bookingTime']['start'], $this->_sections['bookingTime']['iteration'] = 1;
                 $this->_sections['bookingTime']['iteration'] <= $this->_sections['bookingTime']['total'];
                 $this->_sections['bookingTime']['index'] += $this->_sections['bookingTime']['step'], $this->_sections['bookingTime']['iteration']++):
$this->_sections['bookingTime']['rownum'] = $this->_sections['bookingTime']['iteration'];
$this->_sections['bookingTime']['index_prev'] = $this->_sections['bookingTime']['index'] - $this->_sections['bookingTime']['step'];
$this->_sections['bookingTime']['index_next'] = $this->_sections['bookingTime']['index'] + $this->_sections['bookingTime']['step'];
$this->_sections['bookingTime']['first']      = ($this->_sections['bookingTime']['iteration'] == 1);
$this->_sections['bookingTime']['last']       = ($this->_sections['bookingTime']['iteration'] == $this->_sections['bookingTime']['total']);
?><?php echo ''; ?><?php $this->assign('hoursValue', ''); ?><?php echo ''; ?><?php $this->assign('timeValue', ''); ?><?php echo ''; ?><?php $this->assign('j', $this->_sections['bookingTime']['index']); ?><?php echo ''; ?><?php if ($this->_tpl_vars['j'] > 1): ?><?php echo ''; ?><?php $this->assign('hoursValue', $this->_tpl_vars['j']/2); ?><?php echo ''; ?><?php if ($this->_tpl_vars['j'] % 2): ?><?php echo ''; ?><?php $this->assign('timeValue', ((is_array($_tmp=$this->_tpl_vars['hoursValue'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp))); ?><?php echo ''; ?><?php $this->assign('timeValue', ((is_array($_tmp=$this->_tpl_vars['timeValue'])) ? $this->_run_mod_handler('cat', true, $_tmp, ':30') : smarty_modifier_cat($_tmp, ':30'))); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->assign('timeValue', ((is_array($_tmp=$this->_tpl_vars['hoursValue'])) ? $this->_run_mod_handler('cat', true, $_tmp, ':00') : smarty_modifier_cat($_tmp, ':00'))); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['hoursValue'] <= 9.5): ?><?php echo ''; ?><?php $this->assign('timeValue', ((is_array($_tmp='0')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['timeValue']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['timeValue']))); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->assign('hoursValue', '0.5'); ?><?php echo ''; ?><?php $this->assign('timeValue', '00:30'); ?><?php echo ''; ?><?php endif; ?><?php echo '<option value="'; ?><?php echo $this->_tpl_vars['hoursValue']; ?><?php echo '"'; ?><?php if ($_POST['f']['booking_rates'][$this->_tpl_vars['i']]['time'] == $this->_tpl_vars['hoursValue']): ?><?php echo 'selected'; ?><?php endif; ?><?php echo '>'; ?><?php echo $this->_tpl_vars['timeValue']; ?><?php echo '</option>'; ?><?php endfor; endif; ?><?php echo '</select><input type="text"name="f[booking_rates]['; ?><?php echo $this->_tpl_vars['i']; ?><?php echo '][price]"id="hourly-rates-price-'; ?><?php echo $this->_tpl_vars['i']; ?><?php echo '"placeholder="'; ?><?php echo $this->_tpl_vars['lang']['price']; ?><?php echo '"class="numeric w120"value="'; ?><?php echo $_POST['f']['booking_rates'][$this->_tpl_vars['i']]['price']; ?><?php echo '"><select name="f[booking_rates]['; ?><?php echo $this->_tpl_vars['i']; ?><?php echo '][currency]" id="hourly-rate-currency-'; ?><?php echo $this->_tpl_vars['i']; ?><?php echo '">'; ?><?php $_from = ((is_array($_tmp='currency')) ? $this->_run_mod_handler('df', true, $_tmp) : smarty_modifier_df($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['currency']):
?><?php echo '<option value="'; ?><?php echo $this->_tpl_vars['currency']['Key']; ?><?php echo '"'; ?><?php if ($_POST['f']['booking_rates'][$this->_tpl_vars['i']]['currency'] == $this->_tpl_vars['currency']['Key']): ?><?php echo 'selected'; ?><?php endif; ?><?php echo '>'; ?><?php echo $this->_tpl_vars['currency']['name']; ?><?php echo '</option>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</select>'; ?><?php if (( $this->_tpl_vars['bookingConfigs'] && $this->_tpl_vars['bookingConfigs']['Booking_repeatedly'] == '0' ) || ( $this->_tpl_vars['listing_type'] && $this->_tpl_vars['listing_type']['Booking_repeatedly'] == '0' )): ?><?php echo '<select name="f[booking_rates]['; ?><?php echo $this->_tpl_vars['i']; ?><?php echo '][type]" id="hourly-rate-type-'; ?><?php echo $this->_tpl_vars['i']; ?><?php echo '"><option value="single" '; ?><?php if ($_POST['f']['booking_rates'][$this->_tpl_vars['i']]['type'] == 'single'): ?><?php echo 'selected'; ?><?php endif; ?><?php echo '>'; ?><?php echo $this->_tpl_vars['lang']['booking_single_rate']; ?><?php echo '</option><option value="multi"'; ?><?php if ($_POST['f']['booking_rates'][$this->_tpl_vars['i']]['type'] == 'multi' || ! $_POST['f']['booking_rates'][$this->_tpl_vars['i']]): ?><?php echo 'selected'; ?><?php endif; ?><?php echo '>'; ?><?php echo $this->_tpl_vars['lang']['booking_multi_rate']; ?><?php echo '</option></select>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['i'] > 0): ?><?php echo '<img src="'; ?><?php echo $this->_tpl_vars['rlTplBase']; ?><?php echo 'img/blank.gif"alt="'; ?><?php echo $this->_tpl_vars['lang']['delete']; ?><?php echo '"class="remove remove-hourly-rate"title="'; ?><?php echo $this->_tpl_vars['lang']['delete']; ?><?php echo '"onclick="$(this).closest(\'.rates\').fadeOut(\'fast\', function()'; ?>{<?php echo '$(this).remove();booking.rateIndex--;'; ?>}<?php echo ');">'; ?><?php endif; ?><?php echo '<script class="fl-js-dynamic">booking.rateIndex = '; ?><?php echo $this->_tpl_vars['i']; ?><?php echo ';</script>'; ?>
</div>
            <?php endfor; endif; ?>

            <div class="new-rate-button">
                <a href="javascript://" onclick="booking.addNewHourlyRate();"><?php echo $this->_tpl_vars['lang']['booking_addNewHourlyRate']; ?>
</a>
            </div>
        </div>
    </div>
</div>

<?php if ($this->_tpl_vars['listing_type']['Key']): ?>
    <?php $this->assign('price_field_key', ((is_array($_tmp='booking_price_field_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['listing_type']['Key']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['listing_type']['Key']))); ?>
    <?php $this->assign('booking_price_field', $this->_tpl_vars['config'][$this->_tpl_vars['price_field_key']]); ?>

    <?php $this->assign('rent_field_config', ((is_array($_tmp='booking_rent_field_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['listing_type']['Key']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['listing_type']['Key']))); ?>
    <?php $this->assign('booking_rent_field_data', ((is_array($_tmp=$this->_tpl_vars['config'][$this->_tpl_vars['rent_field_config']])) ? $this->_run_mod_handler('unserialize', true, $_tmp) : unserialize($_tmp))); ?>

    <?php if ($this->_tpl_vars['booking_rent_field_data']['0'] && $this->_tpl_vars['booking_rent_field_data']['1']): ?>
        <?php $this->assign('booking_rent_field', $this->_tpl_vars['booking_rent_field_data']['0']); ?>
        <?php $this->assign('booking_rent_value', $this->_tpl_vars['booking_rent_field_data']['1']); ?>
    <?php endif; ?>

    <?php $this->assign('time_frame_field_config', ((is_array($_tmp='booking_time_frame_field_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['listing_type']['Key']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['listing_type']['Key']))); ?>
    <?php $this->assign('booking_time_frame_field_data', ((is_array($_tmp=$this->_tpl_vars['config'][$this->_tpl_vars['time_frame_field_config']])) ? $this->_run_mod_handler('unserialize', true, $_tmp) : unserialize($_tmp))); ?>

    <?php if ($this->_tpl_vars['booking_time_frame_field_data']['0'] && $this->_tpl_vars['booking_time_frame_field_data']['1']): ?>
        <?php $this->assign('booking_time_frame_field', $this->_tpl_vars['booking_time_frame_field_data']['0']); ?>
        <?php $this->assign('booking_time_frame_value', $this->_tpl_vars['booking_time_frame_field_data']['1']); ?>
    <?php endif; ?>
<?php endif; ?>

<?php  $GLOBALS['rlSmarty']->assign_by_ref('l_timezone', $GLOBALS['l_timezone']);  ?>
<?php if ($this->_tpl_vars['l_timezone'][$this->_tpl_vars['config']['timezone']] && $this->_tpl_vars['l_timezone'][$this->_tpl_vars['config']['timezone']]['0']): ?>
    <?php $this->assign('time_offset', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['l_timezone'][$this->_tpl_vars['config']['timezone']]['0'])) ? $this->_run_mod_handler('replace', true, $_tmp, ':00', '') : smarty_modifier_replace($_tmp, ':00', '')))) ? $this->_run_mod_handler('replace', true, $_tmp, ':30', '.5') : smarty_modifier_replace($_tmp, ':30', '.5'))); ?>
<?php else: ?>
    <?php $this->assign('time_offset', '-5'); ?>
<?php endif; ?>

<script class="fl-js-dynamic">
lang.to                                     = '<?php echo $this->_tpl_vars['lang']['to']; ?>
';
lang.description                            = '<?php echo $this->_tpl_vars['lang']['description']; ?>
';
lang.from                                   = '<?php echo $this->_tpl_vars['lang']['from']; ?>
';
lang.edit                                   = '<?php echo $this->_tpl_vars['lang']['edit']; ?>
';
lang.price                                  = '<?php echo $this->_tpl_vars['lang']['price']; ?>
';
lang.cancel                                 = '<?php echo $this->_tpl_vars['lang']['cancel']; ?>
';
lang.actions                                = '<?php echo $this->_tpl_vars['lang']['actions']; ?>
';
lang.warning                                = '<?php echo $this->_tpl_vars['lang']['warning']; ?>
';
lang.booking_ok                             = '<?php echo $this->_tpl_vars['lang']['booking_ok']; ?>
';
lang.description                            = '<?php echo $this->_tpl_vars['lang']['description']; ?>
';
lang.not_available                          = '<?php echo $this->_tpl_vars['lang']['not_available']; ?>
';
lang.booking_checkin                        = '<?php if ($this->_tpl_vars['bookingConfigs']['Booking_type'] == 'date_time_range'): ?><?php echo $this->_tpl_vars['lang']['booking_checkin_auto']; ?>
<?php elseif ($this->_tpl_vars['bookingConfigs']['Booking_type'] == 'time_range'): ?><?php echo $this->_tpl_vars['lang']['booking_checkin_escort']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['booking_checkin']; ?>
<?php endif; ?>';
lang.booking_checkout                       = '<?php if ($this->_tpl_vars['bookingConfigs']['Booking_type'] == 'date_time_range'): ?><?php echo $this->_tpl_vars['lang']['booking_checkout_auto']; ?>
<?php elseif ($this->_tpl_vars['bookingConfigs']['Booking_type'] == 'time_range'): ?><?php echo $this->_tpl_vars['lang']['booking_checkout_escort']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['booking_checkout']; ?>
<?php endif; ?>';
lang.booking_rate_range                     = '<?php echo $this->_tpl_vars['lang']['booking_rate_range']; ?>
';
lang.booking_remove_confirm                 = '<?php echo $this->_tpl_vars['lang']['booking_remove_confirm']; ?>
';
lang.booking_rate_price_per_day             = '<?php echo $this->_tpl_vars['lang']['booking_rate_price_per_day']; ?>
';
lang.booking_close_rate_range_notice        = '<?php echo $this->_tpl_vars['lang']['booking_close_rate_range_notice']; ?>
';
lang.booking_addEditListingErrorEmptyRanges = '<?php echo $this->_tpl_vars['lang']['booking_addEditListingErrorEmptyRanges']; ?>
';
lang.booking_empty_regular                  = '<?php echo $this->_tpl_vars['lang']['booking_empty_regular']; ?>
';
lang.booking_close_days                     = '<?php echo $this->_tpl_vars['lang']['booking_close_days']; ?>
';
lang.booking_rate_title                     = '<?php echo $this->_tpl_vars['lang']['booking_rate_title']; ?>
';
lang.booking_emptyHourlyRanges              = '<?php echo $this->_tpl_vars['lang']['booking_emptyHourlyRanges']; ?>
';
lang.booking_rate_selector                  = '<?php echo $this->_tpl_vars['lang']['booking_rate_selector']; ?>
';
lang.booking_single_rate                    = '<?php echo $this->_tpl_vars['lang']['booking_single_rate']; ?>
';
lang.booking_multi_rate                     = '<?php echo $this->_tpl_vars['lang']['booking_multi_rate']; ?>
';
lang.add_listing                            = '<?php echo $this->_tpl_vars['lang']['add_listing']; ?>
';

var bookingConfigs                      = [];
bookingConfigs.system_currency_position = '<?php echo $this->_tpl_vars['config']['system_currency_position']; ?>
';
bookingConfigs.booking_price_field      = '<?php echo $this->_tpl_vars['booking_price_field']; ?>
';
bookingConfigs.booking_rent_field       = '<?php echo $this->_tpl_vars['booking_rent_field']; ?>
';
bookingConfigs.booking_rent_value       = '<?php echo $this->_tpl_vars['booking_rent_value']; ?>
';
bookingConfigs.booking_time_frame_field = '<?php echo $this->_tpl_vars['booking_time_frame_field']; ?>
';
bookingConfigs.booking_min_book_day     = <?php if ($this->_tpl_vars['bookingConfigs']['Min_book_day']): ?><?php echo $this->_tpl_vars['bookingConfigs']['Min_book_day']; ?>
<?php else: ?>2<?php endif; ?>;
bookingConfigs.booking_type             = '<?php if ($this->_tpl_vars['bookingConfigs'] && $this->_tpl_vars['bookingConfigs']['Booking_type']): ?><?php echo $this->_tpl_vars['bookingConfigs']['Booking_type']; ?>
<?php elseif ($this->_tpl_vars['listing_type'] && $this->_tpl_vars['listing_type']['Booking_type']): ?><?php echo $this->_tpl_vars['listing_type']['Booking_type']; ?>
<?php endif; ?>';
bookingConfigs.booking_time_frame       = [];
bookingConfigs.bookingTimeZone          = '<?php if ($this->_tpl_vars['config']['timezone']): ?><?php echo $this->_tpl_vars['config']['timezone']; ?>
<?php else: ?>America/New_York<?php endif; ?>';
bookingConfigs.bookingTimeOffset        = '<?php echo $this->_tpl_vars['time_offset']; ?>
';
bookingConfigs.is_escort                = <?php if ((defined('IS_ESCORT') ? @IS_ESCORT : null) === true): ?>true<?php else: ?>false<?php endif; ?>;
bookingConfigs.clock_system             = <?php echo ((is_array($_tmp=$this->_tpl_vars['config']['booking_clock_system'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
;
bookingConfigs.first_day                = '<?php echo $this->_tpl_vars['config']['booking_first_day']; ?>
';

<?php if ($this->_tpl_vars['booking_time_frame_value']): ?>
    <?php $_from = $this->_tpl_vars['booking_time_frame_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['time_frame_key'] => $this->_tpl_vars['time_frame_item']):
?>
        <?php if ($this->_tpl_vars['time_frame_item']): ?>
            bookingConfigs.booking_time_frame.<?php echo $this->_tpl_vars['time_frame_key']; ?>
 = '<?php echo $this->_tpl_vars['time_frame_item']; ?>
';
        <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

bookingConfigs.current_field     = <?php if ($this->_tpl_vars['current_rate_index']): ?><?php echo $this->_tpl_vars['current_rate_index']; ?>
<?php else: ?>1<?php endif; ?>;
bookingConfigs.listing_id        = '<?php if ($_GET['id']): ?><?php echo $_GET['id']; ?>
<?php elseif ($_SESSION['add_listing']['listing_id']): ?><?php echo $_SESSION['add_listing']['listing_id']; ?>
<?php endif; ?>';
bookingConfigs.src_delete_img    = '<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif';
bookingConfigs.isAdmin           = <?php if ((defined('REALM') ? @REALM : null) == 'admin'): ?>true<?php else: ?>false<?php endif; ?>;
bookingConfigs.rlLang            = '<?php echo (defined('RL_LANG_CODE') ? @RL_LANG_CODE : null); ?>
';
bookingConfigs.rlController      = bookingConfigs.isAdmin
? "<?php if ($_GET['action'] == 'add'): ?>add_listing<?php else: ?>edit_listing<?php endif; ?>"
: rlPageInfo.controller;
bookingConfigs.post_rate_ranges  = <?php if ($this->_tpl_vars['post_rate_ranges']): ?>true<?php else: ?>false<?php endif; ?>;
bookingConfigs.booking_available = <?php if ($this->_tpl_vars['booking_available']): ?>true<?php else: ?>false<?php endif; ?>;
bookingConfigs.bookingRepeatedly = <?php if (( $this->_tpl_vars['bookingConfigs'] && $this->_tpl_vars['bookingConfigs']['Booking_repeatedly'] == '1' ) || ( $this->_tpl_vars['listing_type'] && $this->_tpl_vars['listing_type']['Booking_repeatedly'] == '1' )): ?>true<?php else: ?>false<?php endif; ?>;

bookingConfigs.currencies = [];
<?php $_from = ((is_array($_tmp='currency')) ? $this->_run_mod_handler('df', true, $_tmp) : smarty_modifier_df($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['currency']):
?>
    bookingConfigs.currencies.push({key: '<?php echo $this->_tpl_vars['currency']['Key']; ?>
', value: '<?php echo $this->_tpl_vars['currency']['name']; ?>
'});
<?php endforeach; endif; unset($_from); ?>

<?php echo '
$(function(){
    booking.init();
});
'; ?>

</script>

<?php if ((defined('REALM') ? @REALM : null) == 'admin'): ?>
    <script src="<?php echo (defined('RL_LIBS_URL') ? @RL_LIBS_URL : null); ?>
jquery/datePicker/i18n/ui.datepicker-<?php echo ((is_array($_tmp=(defined('RL_LANG_CODE') ? @RL_LANG_CODE : null))) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
.js"></script>
<?php endif; ?>

<!-- list of rate ranges tpl end -->