<?php /* Smarty version 2.6.31, created on 2023-12-30 14:03:04
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/smarty_blocks/binding_days.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'explode', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/smarty_blocks/binding_days.tpl', 24, false),)), $this); ?>
<!-- binding days -->

<div id="bindings_obj">
    <?php if ($this->_tpl_vars['booking_configs']['Booking_type'] == 'time_range'): ?>
        <?php echo $this->_tpl_vars['lang']['booking_binding_days_unavailable']; ?>

    <?php else: ?>
        <form id="binding_days_form" method="post">
            <div class="list-table content-padding" id="rate_ranges_table">
                <div class="header">
                    <div style="width: 200px;"><?php echo $this->_tpl_vars['lang']['booking_checkin']; ?>
</div>
                    <div><?php echo $this->_tpl_vars['lang']['booking_checkout']; ?>
</div>
                    <div style="width: 80px;"><?php echo $this->_tpl_vars['lang']['actions']; ?>
</div>
                </div>

                <div class="row" id="bind_days_checkbox">
                    <div class="checkbox" data-caption="<?php echo $this->_tpl_vars['lang']['booking_checkin']; ?>
">
                        <?php unset($this->_sections['bookingWeekdays']);
$this->_sections['bookingWeekdays']['name'] = 'bookingWeekdays';
$this->_sections['bookingWeekdays']['start'] = (int)1;
$this->_sections['bookingWeekdays']['loop'] = is_array($_loop=8) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['bookingWeekdays']['show'] = true;
$this->_sections['bookingWeekdays']['max'] = $this->_sections['bookingWeekdays']['loop'];
$this->_sections['bookingWeekdays']['step'] = 1;
if ($this->_sections['bookingWeekdays']['start'] < 0)
    $this->_sections['bookingWeekdays']['start'] = max($this->_sections['bookingWeekdays']['step'] > 0 ? 0 : -1, $this->_sections['bookingWeekdays']['loop'] + $this->_sections['bookingWeekdays']['start']);
else
    $this->_sections['bookingWeekdays']['start'] = min($this->_sections['bookingWeekdays']['start'], $this->_sections['bookingWeekdays']['step'] > 0 ? $this->_sections['bookingWeekdays']['loop'] : $this->_sections['bookingWeekdays']['loop']-1);
if ($this->_sections['bookingWeekdays']['show']) {
    $this->_sections['bookingWeekdays']['total'] = min(ceil(($this->_sections['bookingWeekdays']['step'] > 0 ? $this->_sections['bookingWeekdays']['loop'] - $this->_sections['bookingWeekdays']['start'] : $this->_sections['bookingWeekdays']['start']+1)/abs($this->_sections['bookingWeekdays']['step'])), $this->_sections['bookingWeekdays']['max']);
    if ($this->_sections['bookingWeekdays']['total'] == 0)
        $this->_sections['bookingWeekdays']['show'] = false;
} else
    $this->_sections['bookingWeekdays']['total'] = 0;
if ($this->_sections['bookingWeekdays']['show']):

            for ($this->_sections['bookingWeekdays']['index'] = $this->_sections['bookingWeekdays']['start'], $this->_sections['bookingWeekdays']['iteration'] = 1;
                 $this->_sections['bookingWeekdays']['iteration'] <= $this->_sections['bookingWeekdays']['total'];
                 $this->_sections['bookingWeekdays']['index'] += $this->_sections['bookingWeekdays']['step'], $this->_sections['bookingWeekdays']['iteration']++):
$this->_sections['bookingWeekdays']['rownum'] = $this->_sections['bookingWeekdays']['iteration'];
$this->_sections['bookingWeekdays']['index_prev'] = $this->_sections['bookingWeekdays']['index'] - $this->_sections['bookingWeekdays']['step'];
$this->_sections['bookingWeekdays']['index_next'] = $this->_sections['bookingWeekdays']['index'] + $this->_sections['bookingWeekdays']['step'];
$this->_sections['bookingWeekdays']['first']      = ($this->_sections['bookingWeekdays']['iteration'] == 1);
$this->_sections['bookingWeekdays']['last']       = ($this->_sections['bookingWeekdays']['iteration'] == $this->_sections['bookingWeekdays']['total']);
?>
                            <?php $this->assign('i', $this->_sections['bookingWeekdays']['index']); ?>

                            <div style="padding: 0 0 5px;">
                                <label>
                                    <input class="inline"
                                           type="checkbox"
                                           <?php if (in_array ( $this->_tpl_vars['bookingWeekdays']['en'][$this->_tpl_vars['i']] , ((is_array($_tmp=',')) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['binding_days']['Checkin']) : explode($_tmp, $this->_tpl_vars['binding_days']['Checkin'])) ) || ! $this->_tpl_vars['binding_days']['Checkin']): ?>checked="checked"<?php endif; ?>
                                           name="in"
                                           value="<?php echo $this->_tpl_vars['bookingWeekdays']['en'][$this->_tpl_vars['i']]; ?>
"
                                    /> <?php echo $this->_tpl_vars['bookingWeekdays']['full'][$this->_tpl_vars['i']]; ?>

                                </label>
                            </div>
                        <?php endfor; endif; ?>
                    </div>
                    <div data-caption="<?php echo $this->_tpl_vars['lang']['booking_checkout']; ?>
">
                        <?php unset($this->_sections['bookingWeekdays']);
$this->_sections['bookingWeekdays']['name'] = 'bookingWeekdays';
$this->_sections['bookingWeekdays']['start'] = (int)1;
$this->_sections['bookingWeekdays']['loop'] = is_array($_loop=8) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['bookingWeekdays']['show'] = true;
$this->_sections['bookingWeekdays']['max'] = $this->_sections['bookingWeekdays']['loop'];
$this->_sections['bookingWeekdays']['step'] = 1;
if ($this->_sections['bookingWeekdays']['start'] < 0)
    $this->_sections['bookingWeekdays']['start'] = max($this->_sections['bookingWeekdays']['step'] > 0 ? 0 : -1, $this->_sections['bookingWeekdays']['loop'] + $this->_sections['bookingWeekdays']['start']);
else
    $this->_sections['bookingWeekdays']['start'] = min($this->_sections['bookingWeekdays']['start'], $this->_sections['bookingWeekdays']['step'] > 0 ? $this->_sections['bookingWeekdays']['loop'] : $this->_sections['bookingWeekdays']['loop']-1);
if ($this->_sections['bookingWeekdays']['show']) {
    $this->_sections['bookingWeekdays']['total'] = min(ceil(($this->_sections['bookingWeekdays']['step'] > 0 ? $this->_sections['bookingWeekdays']['loop'] - $this->_sections['bookingWeekdays']['start'] : $this->_sections['bookingWeekdays']['start']+1)/abs($this->_sections['bookingWeekdays']['step'])), $this->_sections['bookingWeekdays']['max']);
    if ($this->_sections['bookingWeekdays']['total'] == 0)
        $this->_sections['bookingWeekdays']['show'] = false;
} else
    $this->_sections['bookingWeekdays']['total'] = 0;
if ($this->_sections['bookingWeekdays']['show']):

            for ($this->_sections['bookingWeekdays']['index'] = $this->_sections['bookingWeekdays']['start'], $this->_sections['bookingWeekdays']['iteration'] = 1;
                 $this->_sections['bookingWeekdays']['iteration'] <= $this->_sections['bookingWeekdays']['total'];
                 $this->_sections['bookingWeekdays']['index'] += $this->_sections['bookingWeekdays']['step'], $this->_sections['bookingWeekdays']['iteration']++):
$this->_sections['bookingWeekdays']['rownum'] = $this->_sections['bookingWeekdays']['iteration'];
$this->_sections['bookingWeekdays']['index_prev'] = $this->_sections['bookingWeekdays']['index'] - $this->_sections['bookingWeekdays']['step'];
$this->_sections['bookingWeekdays']['index_next'] = $this->_sections['bookingWeekdays']['index'] + $this->_sections['bookingWeekdays']['step'];
$this->_sections['bookingWeekdays']['first']      = ($this->_sections['bookingWeekdays']['iteration'] == 1);
$this->_sections['bookingWeekdays']['last']       = ($this->_sections['bookingWeekdays']['iteration'] == $this->_sections['bookingWeekdays']['total']);
?>
                            <?php $this->assign('i', $this->_sections['bookingWeekdays']['index']); ?>
                            <div style="padding: 0 0 5px;">
                                <label>
                                    <input class="inline"
                                           type="checkbox"
                                           <?php if (in_array ( $this->_tpl_vars['bookingWeekdays']['en'][$this->_tpl_vars['i']] , ((is_array($_tmp=',')) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['binding_days']['Checkout']) : explode($_tmp, $this->_tpl_vars['binding_days']['Checkout'])) ) || ! $this->_tpl_vars['binding_days']['Checkout']): ?>checked="checked"<?php endif; ?>
                                           name="out"
                                           value="<?php echo $this->_tpl_vars['bookingWeekdays']['en'][$this->_tpl_vars['i']]; ?>
"
                                    /> <?php echo $this->_tpl_vars['bookingWeekdays']['full'][$this->_tpl_vars['i']]; ?>

                                </label>
                            </div>
                        <?php endfor; endif; ?>
                    </div>
                    <div data-caption="<?php echo $this->_tpl_vars['lang']['actions']; ?>
">
                        <input type="button" class="save_binding_days" value="<?php echo $this->_tpl_vars['lang']['save']; ?>
">
                    </div>
                </div>
            </div>
        </form>
    <?php endif; ?>
</div>

<!-- binding days end -->