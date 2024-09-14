<?php /* Smarty version 2.6.31, created on 2024-01-03 18:50:52
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/smarty_blocks/rate_ranges.tpl */ ?>
<!-- rate range -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'blocks/fieldset_header.tpl', 'smarty_include_vars' => array('id' => 'rate_range','name' => $this->_tpl_vars['lang']['booking_rate_range'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<ul class="ranges" id="booking_rate_range">
    <?php $_from = $this->_tpl_vars['rate_ranges']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rateRange']):
?>
        <li class="two-inline clearfix">
            <div class="price"><?php if ($this->_tpl_vars['rateRange']['Price']): ?><?php echo $this->_tpl_vars['rateRange']['Price']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['booking_close_days']; ?>
<?php endif; ?></div>
            <div class="date">
                <?php echo $this->_tpl_vars['rateRange']['From']; ?>
 - <?php echo $this->_tpl_vars['rateRange']['To']; ?>


                <?php if (! empty ( $this->_tpl_vars['rateRange']['Desc'] )): ?>
                    <img class="booking_qtip" alt="" title="<?php echo $this->_tpl_vars['rateRange']['Desc']; ?>
" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" />
                <?php endif; ?>
            </div>
        </li>
    <?php endforeach; endif; unset($_from); ?>

    <?php if ($this->_tpl_vars['use_time_frame']): ?>
        <li class="two-inline clearfix">
            <div class="price"><?php echo $this->_tpl_vars['defPrice']['name']; ?>
</div>
            <div class="date">
                <?php echo $this->_tpl_vars['lang']['booking_rate_price_per_day']; ?>


                <?php if ($this->_tpl_vars['range_regular_desc']): ?>
                    <img class="booking_qtip" alt="" title="<?php echo $this->_tpl_vars['range_regular_desc']; ?>
" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" />
                <?php endif; ?>
            </div>
        </li>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['bookingConfigs']['price_per_hour']): ?>
        <li class="two-inline clearfix">
            <div class="price">
                <?php if ($this->_tpl_vars['defPrice']['currency']): ?>
                    <?php $this->assign('booking_currency', $this->_tpl_vars['defPrice']['currency']); ?>
                <?php else: ?>
                    <?php $this->assign('booking_currency', $this->_tpl_vars['config']['system_currency']); ?>
                <?php endif; ?>

                <?php if ($this->_tpl_vars['config']['system_currency_position'] == 'before'): ?>
                    <?php echo $this->_tpl_vars['booking_currency']; ?>
 <?php echo $this->_tpl_vars['bookingConfigs']['price_per_hour']; ?>

                <?php else: ?>
                    <?php echo $this->_tpl_vars['bookingConfigs']['price_per_hour']; ?>
 <?php echo $this->_tpl_vars['booking_currency']; ?>

                <?php endif; ?>
            </div>
            <div class="date">
                <?php echo $this->_tpl_vars['lang']['booking_rate_price_per_hour']; ?>

            </div>
        </li>
    <?php endif; ?>
</ul>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'blocks/fieldset_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>



<!-- rate range end -->