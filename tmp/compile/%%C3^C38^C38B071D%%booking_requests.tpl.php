<?php /* Smarty version 2.6.31, created on 2024-01-06 19:21:25
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/booking_requests.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/booking_requests.tpl', 13, false),array('modifier', 'date_format', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/booking_requests.tpl', 68, false),)), $this); ?>
<!-- booking requests -->

<?php if ($this->_tpl_vars['isLogin']): ?>
    <div class="content-padding requests<?php if ($this->_tpl_vars['bookingConfigs']['Booking_type'] == 'time_range'): ?> escort<?php endif; ?>" id="area_booking">
        <?php if ($this->_tpl_vars['requests'] || $this->_tpl_vars['request']): ?>
            <?php if ($this->_tpl_vars['config']['mod_rewrite']): ?>
                <?php $this->assign('require_id', $_GET['request_id']); ?>
            <?php else: ?>
                <?php $this->assign('require_id', $_GET['id']); ?>
            <?php endif; ?>

            <?php if (! $this->_tpl_vars['require_id']): ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['bookingBlocksFolder'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'requests.tpl') : smarty_modifier_cat($_tmp, 'requests.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php else: ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['bookingBlocksFolder'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'styles.tpl') : smarty_modifier_cat($_tmp, 'styles.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                <?php if ($this->_tpl_vars['bookingConfigs']['Booking_type'] == 'time_range'): ?>
                    <?php if ($this->_tpl_vars['listing_escort']): ?>
                        <?php $this->assign('listing', $this->_tpl_vars['listing_escort']); ?>
                    <?php endif; ?>

                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['bookingBlocksFolder'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'escort_data.tpl') : smarty_modifier_cat($_tmp, 'escort_data.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <?php else: ?>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['bookingBlocksFolder'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'calendar.tpl') : smarty_modifier_cat($_tmp, 'calendar.tpl')), 'smarty_include_vars' => array('fieldsetEnable' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <?php endif; ?>

                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['bookingBlocksFolder'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'js_script.tpl') : smarty_modifier_cat($_tmp, 'js_script.tpl')), 'smarty_include_vars' => array('qtipEnable' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['bookingBlocksFolder'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'checkin_checkout.tpl') : smarty_modifier_cat($_tmp, 'checkin_checkout.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                <?php if ($this->_tpl_vars['request']['Status_request'] == 'process'): ?>
                    <?php if ($this->_tpl_vars['bookingConfigs']['Booking_type'] == 'time_range'): ?>
                        <?php $this->assign('change_button_phrase', $this->_tpl_vars['lang']['booking_button_change_date']); ?>
                    <?php else: ?>
                        <?php $this->assign('change_button_phrase', $this->_tpl_vars['lang']['booking_button_change_period']); ?>
                    <?php endif; ?>

                    <a id="change_period" class="button" title="<?php echo $this->_tpl_vars['change_button_phrase']; ?>
" href="javascript:void(0)"><?php echo $this->_tpl_vars['change_button_phrase']; ?>
</a>
                    <a id="cancel_changes" class="red margin cancel hide" href="javascript:void(0)"><?php echo $this->_tpl_vars['lang']['cancel']; ?>
</a>
                <?php endif; ?>

                <div id="booking_details" class="row clearfix">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div>
                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'blocks/fieldset_header.tpl', 'smarty_include_vars' => array('name' => $this->_tpl_vars['lang']['booking_page_details'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                            <?php if ($this->_tpl_vars['plugins']['ref']): ?>
                                <div class="table-cell clearfix">
                                    <div class="name"><div><span><?php echo $this->_tpl_vars['lang']['booking_ref_number']; ?>
</span></div></div>
                                    <div class="field"><?php if ($this->_tpl_vars['request']['ref_number']): ?><?php echo $this->_tpl_vars['request']['ref_number']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['not_available']; ?>
<?php endif; ?></div>
                                </div>
                            <?php endif; ?>

                            <div class="table-cell clearfix check-in <?php if ($this->_tpl_vars['request']['Status_request'] == 'process' && $this->_tpl_vars['bookingConfigs']['Booking_type'] != 'time_range'): ?>current_dates<?php endif; ?>">
                                <div class="name">
                                    <div>
                                        <span>
                                            <?php if ($this->_tpl_vars['bookingConfigs']['Booking_type'] == 'time_range'): ?>
                                                <?php echo $this->_tpl_vars['lang']['booking_escort_date']; ?>

                                            <?php elseif ($this->_tpl_vars['bookingConfigs']['Booking_type'] == 'date_time_range'): ?>
                                                <?php echo $this->_tpl_vars['lang']['booking_checkin_auto']; ?>

                                            <?php else: ?>
                                                <?php echo $this->_tpl_vars['lang']['booking_checkin']; ?>

                                            <?php endif; ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="field start_date">
                                    <b><?php echo ((is_array($_tmp=$this->_tpl_vars['request']['From'])) ? $this->_run_mod_handler('date_format', true, $_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)) : smarty_modifier_date_format($_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null))); ?>
</b>

                                    <?php if (( $this->_tpl_vars['request']['booking_check_in'] || $this->_tpl_vars['request']['Checkin'] ) && $this->_tpl_vars['bookingConfigs']['Booking_type'] != 'time_range'): ?>
                                        - <?php if ($this->_tpl_vars['bookingConfigs']['Booking_type'] == 'date_time_range'): ?><?php echo $this->_tpl_vars['request']['Checkin']; ?>
<?php else: ?><?php echo $this->_tpl_vars['request']['booking_check_in']; ?>
<?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <?php if ($this->_tpl_vars['bookingConfigs']['Booking_type'] == 'time_range'): ?>
                                <div class="table-cell clearfix">
                                    <div class="name"><div><span><?php echo $this->_tpl_vars['lang']['booking_escort_type']; ?>
</span></div></div>
                                    <div class="field type">
                                        <?php if ($this->_tpl_vars['listing_escort']['escort_rates']['Fields']['escort_rates']['value']): ?>
                                            <?php echo $this->_tpl_vars['listing_escort']['escort_rates']['Fields']['escort_rates']['value'][$this->_tpl_vars['request']['Checkin']]['title']; ?>

                                        <?php else: ?>
                                            <?php echo $this->_tpl_vars['bookingRates'][$this->_tpl_vars['request']['Checkin']]['title']; ?>

                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="table-cell clearfix">
                                    <div class="name"><div><span><?php echo $this->_tpl_vars['lang']['booking_escort_time']; ?>
</span></div></div>
                                    <div class="field time"><?php echo $this->_tpl_vars['request']['Checkout']; ?>
</div>
                                </div>

                                <div class="table-cell clearfix <?php if (! $this->_tpl_vars['request']['To']): ?>hide<?php endif; ?>">
                                    <div class="name"><div><span><?php echo $this->_tpl_vars['lang']['booking_escort_duration']; ?>
</span></div></div>
                                    <div class="field duration">
                                        <?php $this->assign('phrase_hours', ((is_array($_tmp='booking_escort_duration_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['request']['To']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['request']['To']))); ?>
                                        <?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['phrase_hours']]; ?>

                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="table-cell clearfix check-out <?php if ($this->_tpl_vars['request']['Status_request'] == 'process' && $this->_tpl_vars['bookingConfigs']['Booking_type'] != 'time_range'): ?>current_dates<?php endif; ?>">
                                    <div class="name">
                                        <div>
                                            <span>
                                                <?php if ($this->_tpl_vars['bookingConfigs']['Booking_type'] == 'date_time_range'): ?>
                                                    <?php echo $this->_tpl_vars['lang']['booking_checkout_auto']; ?>

                                                <?php else: ?>
                                                    <?php echo $this->_tpl_vars['lang']['booking_checkout']; ?>

                                                <?php endif; ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="field end_date">
                                        <b><?php echo ((is_array($_tmp=$this->_tpl_vars['request']['To'])) ? $this->_run_mod_handler('date_format', true, $_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)) : smarty_modifier_date_format($_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null))); ?>
</b>

                                        <?php if ($this->_tpl_vars['request']['booking_check_out'] || $this->_tpl_vars['request']['Checkout']): ?>
                                            - <?php if ($this->_tpl_vars['bookingConfigs']['Booking_type'] == 'date_time_range'): ?><?php echo $this->_tpl_vars['request']['Checkout']; ?>
<?php else: ?><?php echo $this->_tpl_vars['request']['booking_check_out']; ?>
<?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if ($this->_tpl_vars['bookingConfigs']['Booking_type'] === 'date_range'): ?>
                                <div class="table-cell clearfix">
                                    <div class="name"><div><span><?php echo $this->_tpl_vars['lang']['booking_nights']; ?>
</span></div></div>
                                    <div class="field nights-count"><?php echo $this->_tpl_vars['bookingData']['nights']; ?>
</div>
                                </div>
                            <?php endif; ?>

                            <div class="table-cell clearfix">
                                <div class="name"><div><span><?php echo $this->_tpl_vars['lang']['status']; ?>
</span></div></div>
                                <div class="field" id="owRes"><?php echo $this->_tpl_vars['request']['Stat']; ?>
</div>
                            </div>
                            <div class="table-cell clearfix">
                                <div class="name"><div><span><?php echo $this->_tpl_vars['lang']['total']; ?>
</span></div></div>
                                <div class="field total_cost amount">
                                    <?php if ($this->_tpl_vars['defPrice']['currency']): ?>
                                        <?php $this->assign('booking_currency', $this->_tpl_vars['defPrice']['currency']); ?>
                                    <?php else: ?>
                                        <?php $this->assign('booking_currency', $this->_tpl_vars['config']['system_currency']); ?>
                                    <?php endif; ?>

                                    <?php if ($this->_tpl_vars['config']['system_currency_position'] == 'before'): ?>
                                        <?php echo $this->_tpl_vars['booking_currency']; ?>
 <?php echo $this->_tpl_vars['request']['Amount']; ?>

                                    <?php else: ?>
                                        <?php echo $this->_tpl_vars['request']['Amount']; ?>
 <?php echo $this->_tpl_vars['booking_currency']; ?>

                                    <?php endif; ?>
                                </div>
                            </div>

                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'blocks/fieldset_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div>
                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'blocks/fieldset_header.tpl', 'smarty_include_vars' => array('name' => $this->_tpl_vars['lang']['booking_client_details'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                            <?php $_from = $this->_tpl_vars['request']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
                                <?php if ($this->_tpl_vars['field']['Type'] != 'textarea'): ?>
                                    <div class="table-cell clearfix">
                                        <div class="name"><div><span><?php echo $this->_tpl_vars['field']['name']; ?>
</span></div></div>
                                        <div class="field"><?php echo $this->_tpl_vars['field']['value']; ?>
</div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?>

                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'blocks/fieldset_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        </div>
                    </div>
                </div>

                <?php $_from = $this->_tpl_vars['request']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
                    <?php if ($this->_tpl_vars['field']['Type'] == 'textarea' && $this->_tpl_vars['field']['value']): ?>
                        <div class="table-cell clearfix wide-field">
                            <div class="name <?php echo $this->_tpl_vars['field']['Key']; ?>
"><div><span><?php echo $this->_tpl_vars['field']['name']; ?>
</span></div>
                            </div>
                            <div class="field"><?php echo $this->_tpl_vars['field']['value']; ?>
</div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>

                <?php if ($this->_tpl_vars['request']['Status_request'] == 'process'): ?>
                    <div id="owner_actions">
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'blocks/fieldset_header.tpl', 'smarty_include_vars' => array('name' => $this->_tpl_vars['lang']['booking_requests_comments'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                        <div id="refuse_answer">
                            <textarea name="textarea_answer" rows="5" cols="" id="textarea_answer"></textarea>
                            <div>
                                <input type="button" id="accept_btn" class="button" value="<?php echo $this->_tpl_vars['lang']['booking_accept']; ?>
" />
                                <a id="refuse_btn" class="red margin cancel" href="javascript:void(0)"><?php echo $this->_tpl_vars['lang']['booking_refuse']; ?>
</a>
                            <div>
                        </div>

                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'blocks/fieldset_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    </div>
                <?php endif; ?>

                <script class="fl-js-dynamic"><?php echo '
                $(function() {
                    $(\'#textarea_answer\').textareaCount({
                        \'maxCharacterSize\': 255,
                        \'warningNumber\'   : 20
                    });

                    $(\'#accept_btn\').click(function(){
                        booking.bookingRequestHandler(\'accept\', \''; ?>
<?php echo $this->_tpl_vars['require_id']; ?>
<?php echo '\')
                    });

                    $(\'#refuse_btn\').click(function(){
                        booking.bookingRequestHandler(\'refuse\', \''; ?>
<?php echo $this->_tpl_vars['require_id']; ?>
<?php echo '\')
                    });

                    if (typeof $.convertPrice == \'function\') {
                        $(\'#booking_details .total_cost\').convertPrice({showCents: true, shortView: true});
                    }
                });'; ?>


                <?php if ($this->_tpl_vars['request']['Status_request'] == 'process'): ?>
                    flynax.htmlEditor(['textarea_answer']);
                <?php endif; ?>
                </script>
            <?php endif; ?>
        <?php else: ?>
            <div class="text-notice"><?php echo $this->_tpl_vars['lang']['booking_no_requests']; ?>
</div>
        <?php endif; ?>
    </div>

    <script class="fl-js-dynamic">
    lang.booking_accept               = '<?php echo $this->_tpl_vars['lang']['booking_accept']; ?>
';
    lang.booking_refuse               = '<?php echo $this->_tpl_vars['lang']['booking_refuse']; ?>
';
    lang.booking_refused              = '<?php echo $this->_tpl_vars['lang']['booking_refused']; ?>
';
    lang.booking_accepted             = '<?php echo $this->_tpl_vars['lang']['booking_accepted']; ?>
';
    lang.booking_no_requests          = '<?php echo $this->_tpl_vars['lang']['booking_no_requests']; ?>
';
    lang.booking_remove_notice        = '<?php echo $this->_tpl_vars['lang']['booking_remove_notice']; ?>
';
    lang.save                         = '<?php echo $this->_tpl_vars['lang']['save']; ?>
';
    lang.booking_button_change_period = '<?php if ($this->_tpl_vars['bookingConfigs']['Booking_type'] == 'time_range'): ?><?php echo $this->_tpl_vars['lang']['booking_button_change_date']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['booking_button_change_period']; ?>
<?php endif; ?>';

    /* booking special configs (if it isn't exist) */
    if (typeof bookingConfigs == 'undefined') <?php echo '{'; ?>

        var bookingConfigs = [];
    <?php echo '}'; ?>


    bookingConfigs['request_id'] = <?php if ($this->_tpl_vars['request']['Req_ID'] && $this->_tpl_vars['request']['Status_request'] == 'process'): ?><?php echo $this->_tpl_vars['request']['Req_ID']; ?>
<?php else: ?>0<?php endif; ?>;
    var tmpBookingConfigs = [];

    booking.requestRemoveHandler();
    booking.changePeriodHandler();
    booking.revertRequestChanges();
    </script>
<?php endif; ?>

<!-- booking requests end -->