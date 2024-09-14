<?php /* Smarty version 2.6.31, created on 2023-12-18 02:00:50
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/smarty_blocks/js_script.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/smarty_blocks/js_script.tpl', 2, false),array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/smarty_blocks/js_script.tpl', 4, false),array('modifier', 'escape', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/smarty_blocks/js_script.tpl', 11, false),array('modifier', 'regex_replace', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/smarty_blocks/js_script.tpl', 26, false),array('modifier', 'intval', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/smarty_blocks/js_script.tpl', 58, false),array('function', 'pageUrl', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/smarty_blocks/js_script.tpl', 69, false),)), $this); ?>
<?php $this->assign('sReplace', ('{')."field".('}')); ?>
<?php $this->assign('missing_booking_field', ((is_array($_tmp=$this->_tpl_vars['lang']['notice_field_empty'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['sReplace'], 'error_field') : smarty_modifier_replace($_tmp, $this->_tpl_vars['sReplace'], 'error_field'))); ?>
<?php $this->assign('incorrect_booking_field', ((is_array($_tmp=$this->_tpl_vars['lang']['notice_field_incorrect'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['sReplace'], 'error_field') : smarty_modifier_replace($_tmp, $this->_tpl_vars['sReplace'], 'error_field'))); ?>
<?php $this->assign('phrase_hours', ((is_array($_tmp='booking_escort_duration_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['request']['To']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['request']['To']))); ?>

<script class="fl-js-dynamic">
    /* booking special configs */
    var bookingConfigs                       = [];
    bookingConfigs.booking_debug             = false;
    bookingConfigs.listing_id                = <?php if ($this->_tpl_vars['listing_data']['ID']): ?><?php echo $this->_tpl_vars['listing_data']['ID']; ?>
<?php elseif ($this->_tpl_vars['bookingData']['listing_id']): ?><?php echo $this->_tpl_vars['bookingData']['listing_id']; ?>
<?php else: ?>0<?php endif; ?>;
    bookingConfigs.defPrice                  = '<?php echo ((is_array($_tmp=$this->_tpl_vars['defPrice']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
';
    bookingConfigs.defCurrency               = '<?php if ($this->_tpl_vars['defPrice'] && $this->_tpl_vars['defPrice']['currency']): ?><?php echo $this->_tpl_vars['defPrice']['currency']; ?>
<?php else: ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?>';
    bookingConfigs.min_bl                    = <?php if ($this->_tpl_vars['bookingConfigs']['Min_book_day']): ?><?php echo $this->_tpl_vars['bookingConfigs']['Min_book_day']; ?>
<?php else: ?>0<?php endif; ?>;
    bookingConfigs.max_bl                    = <?php if ($this->_tpl_vars['bookingConfigs']['Max_book_day']): ?><?php echo $this->_tpl_vars['bookingConfigs']['Max_book_day']; ?>
<?php else: ?>0<?php endif; ?>;
    bookingConfigs.fixed_range               = <?php if ($this->_tpl_vars['bookingConfigs']['Fixed_rate_range']): ?><?php echo $this->_tpl_vars['bookingConfigs']['Fixed_rate_range']; ?>
<?php else: ?>0<?php endif; ?>;
    bookingConfigs.Booking_type              = '<?php echo $this->_tpl_vars['bookingConfigs']['Booking_type']; ?>
';
    bookingConfigs.price_delimiter           = '<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['price_delimiter'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
';
    bookingConfigs.deny                      = <?php if ($this->_tpl_vars['bookingConfigs']['Deny_guest'] && ! $this->_tpl_vars['isLogin']): ?>0<?php else: ?>1<?php endif; ?>;
    bookingConfigs.day_prefix                = '#day_';
    bookingConfigs.bookingDateFormat         = '<?php if ((defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)): ?><?php echo (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null); ?>
<?php else: ?>%b %d, %Y<?php endif; ?>';
    bookingConfigs.bookingTimeZone           = '<?php if ($this->_tpl_vars['config']['timezone']): ?><?php echo $this->_tpl_vars['config']['timezone']; ?>
<?php else: ?>America/New_York<?php endif; ?>';
    bookingConfigs.selected                  = [];
    bookingConfigs.usRange                   = [];
    bookingConfigs.closeRange                = [];
    bookingConfigs.usBook                    = [];
    bookingConfigs.total_cost                = '<?php if ($this->_tpl_vars['bookingData']['amount']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['bookingData']['amount'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, '/[^0-9.,]+/', '') : smarty_modifier_regex_replace($_tmp, '/[^0-9.,]+/', '')); ?>
<?php elseif ($this->_tpl_vars['bookingData']['total_cost']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['bookingData']['total_cost'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, '/[^0-9.,]+/', '') : smarty_modifier_regex_replace($_tmp, '/[^0-9.,]+/', '')); ?>
<?php else: ?>0<?php endif; ?>';
    bookingConfigs.total_days                = <?php if ($this->_tpl_vars['bookingData']['total_days']): ?><?php echo $this->_tpl_vars['bookingData']['total_days']; ?>
<?php else: ?>0<?php endif; ?>;
    bookingConfigs.cur_id                    = 0;
    bookingConfigs.s_id                      = 0;
    bookingConfigs.db_start                  = <?php if ($this->_tpl_vars['bookingData'] && $this->_tpl_vars['bookingData']['start_date']): ?><?php echo $this->_tpl_vars['bookingData']['start_date']; ?>
<?php else: ?>0<?php endif; ?>;
    bookingConfigs.start_date_value          = '<?php if ($this->_tpl_vars['bookingData']): ?><?php echo $this->_tpl_vars['bookingData']['start_date_value']; ?>
<?php endif; ?>';
    bookingConfigs.db_end                    = <?php if ($this->_tpl_vars['bookingData'] && $this->_tpl_vars['bookingData']['end_date']): ?><?php echo $this->_tpl_vars['bookingData']['end_date']; ?>
<?php else: ?>0<?php endif; ?>;
    bookingConfigs.end_date_value            = '<?php if ($this->_tpl_vars['bookingData']): ?><?php echo $this->_tpl_vars['bookingData']['end_date_value']; ?>
<?php endif; ?>';
    bookingConfigs.first                     = 0;
    bookingConfigs.index                     = 0;
    bookingConfigs.period_updated            = false;
    bookingConfigs.bind_checkin              = '';
    bookingConfigs.bind_checkout             = '';
    bookingConfigs.check_in                  = '<?php if ($this->_tpl_vars['listing_data']): ?><?php echo $this->_tpl_vars['listing_data']['booking_check_in']; ?>
<?php else: ?><?php echo $this->_tpl_vars['bookingData']['checkin']; ?>
<?php endif; ?>';
    bookingConfigs.check_out                 = '<?php if ($this->_tpl_vars['listing_data']): ?><?php echo $this->_tpl_vars['listing_data']['booking_check_out']; ?>
<?php else: ?><?php echo $this->_tpl_vars['bookingData']['checkout']; ?>
<?php endif; ?>';
    bookingConfigs.listing_check_in          = '<?php if ($this->_tpl_vars['listing']): ?><?php echo $this->_tpl_vars['listing']['booking_check_in']; ?>
<?php endif; ?>';
    bookingConfigs.listing_check_out         = '<?php if ($this->_tpl_vars['listing']): ?><?php echo $this->_tpl_vars['listing']['booking_check_out']; ?>
<?php endif; ?>';
    bookingConfigs.system_currency_position  = '<?php echo $this->_tpl_vars['config']['system_currency_position']; ?>
';
    bookingConfigs.booking_calendar_position = '<?php echo $this->_tpl_vars['config']['booking_calendar_position']; ?>
';
    bookingConfigs.booking_calendar_box_side = '<?php echo $this->_tpl_vars['blocks']['booking_calendar_box']['Side']; ?>
';
    bookingConfigs.booking_regular_per_hour  = <?php if ($this->_tpl_vars['bookingConfigs']['price_per_hour']): ?><?php echo $this->_tpl_vars['bookingConfigs']['price_per_hour']; ?>
<?php else: ?>0<?php endif; ?>;
    bookingConfigs.prepayment                = <?php if ($this->_tpl_vars['bookingConfigs']['Prepayment']): ?><?php echo $this->_tpl_vars['bookingConfigs']['Prepayment']; ?>
<?php else: ?>0<?php endif; ?>;
    bookingConfigs.edit_action               = <?php if ($this->_tpl_vars['edit_action']): ?>true<?php else: ?>false<?php endif; ?>;
    bookingConfigs.is_escort                 = <?php if ((defined('IS_ESCORT') ? @IS_ESCORT : null) === true): ?>true<?php else: ?>false<?php endif; ?>;
    bookingConfigs.in_popup                  = false;
    bookingConfigs.escort_type_service       = '<?php if ($this->_tpl_vars['bookingConfigs']['Booking_type'] == 'time_range'): ?><?php echo $this->_tpl_vars['bookingData']['checkin']; ?>
<?php endif; ?>';
    bookingConfigs.escort_type_service_title = '<?php if ($this->_tpl_vars['listing_escort']): ?><?php echo $this->_tpl_vars['listing_escort']['escort_rates']['Fields']['escort_rates']['value'][$this->_tpl_vars['request']['Checkin']]['title']; ?>
<?php else: ?><?php echo $this->_tpl_vars['bookingRates'][$this->_tpl_vars['request']['Checkin']]['title']; ?>
<?php endif; ?>';
    bookingConfigs.escort_time_service       = '<?php if ($this->_tpl_vars['bookingConfigs']['Booking_type'] == 'time_range'): ?><?php echo $this->_tpl_vars['bookingData']['checkout']; ?>
<?php endif; ?>';
    bookingConfigs.escortTimeServiceValue    = '<?php if ($this->_tpl_vars['bookingConfigs']['Booking_type'] == 'time_range'): ?><?php echo $this->_tpl_vars['bookingData']['checkout']; ?>
<?php endif; ?>';
    bookingConfigs.escort_duration           = '<?php if ($this->_tpl_vars['bookingConfigs']['Booking_type'] == 'time_range'): ?><?php echo $this->_tpl_vars['bookingData']['end_date']; ?>
<?php endif; ?>';
    bookingConfigs.escort_duration_title     = '<?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['phrase_hours']]; ?>
';
    bookingConfigs.site_template             = '<?php echo $this->_tpl_vars['config']['template']; ?>
';
    bookingConfigs.clock_system              = <?php echo ((is_array($_tmp=$this->_tpl_vars['config']['booking_clock_system'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
;
    bookingConfigs.first_day                 = '<?php echo $this->_tpl_vars['config']['booking_first_day']; ?>
';
    bookingConfigs.Booking_repeatedly        = <?php if ($this->_tpl_vars['bookingConfigs']['Booking_repeatedly']): ?>true<?php else: ?>false<?php endif; ?>;

    /* additional checking of booking box calendar */
    <?php echo '
    if (bookingConfigs.booking_calendar_position === \'box\' && $(\'section.booking > div\').length === 0) {
        bookingConfigs.booking_calendar_position = \'listing\';
    }
    '; ?>


    bookingConfigs.booking_order_page = "<?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'booking_order'), $this);?>
";

    lang.deny_text                     = '<?php echo $this->_tpl_vars['lang']['booking_deny_guests']; ?>
';
    lang.min_bl_text                   = '<?php echo $this->_tpl_vars['lang']['booking_min_booking']; ?>
';
    lang.max_bl_text                   = '<?php echo $this->_tpl_vars['lang']['booking_max_booking']; ?>
';
    lang.closed_day_text               = '<?php echo $this->_tpl_vars['lang']['booking_day_closed']; ?>
';
    lang.booked_day_text               = '<?php echo $this->_tpl_vars['lang']['booking_day_booked']; ?>
';
    lang.check_in_only_text            = "<?php if ($this->_tpl_vars['bookingConfigs']['Booking_type'] == 'time_range' && (defined('IS_ESCORT') ? @IS_ESCORT : null) === true): ?><?php echo $this->_tpl_vars['lang']['booking_escort_check_in_only']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['booking_check_in_only']; ?>
<?php endif; ?>";
    lang.check_out_only_text           = '<?php echo $this->_tpl_vars['lang']['booking_check_out_only']; ?>
';
    lang.already_booked_text           = '<?php echo $this->_tpl_vars['lang']['booking_already_booked']; ?>
';
    lang.booking_checkin               = '<?php if ($this->_tpl_vars['bookingConfigs']['Booking_type'] == 'date_time_range'): ?><?php echo $this->_tpl_vars['lang']['booking_checkin_auto']; ?>
<?php elseif ($this->_tpl_vars['bookingConfigs']['Booking_type'] == 'time_range'): ?><?php echo $this->_tpl_vars['lang']['booking_checkin_escort']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['booking_checkin']; ?>
<?php endif; ?>';
    lang.booking_checkout              = '<?php if ($this->_tpl_vars['bookingConfigs']['Booking_type'] == 'date_time_range'): ?><?php echo $this->_tpl_vars['lang']['booking_checkout_auto']; ?>
<?php elseif ($this->_tpl_vars['bookingConfigs']['Booking_type'] == 'time_range'): ?><?php echo $this->_tpl_vars['lang']['booking_checkout_escort']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['booking_checkout']; ?>
<?php endif; ?>';
    lang.booking_amount                = '<?php echo $this->_tpl_vars['lang']['total']; ?>
';
    lang.booking_nights                = '<?php echo $this->_tpl_vars['lang']['booking_nights']; ?>
';
    lang.booking_prev                  = '<?php echo $this->_tpl_vars['lang']['booking_prev']; ?>
';
    lang.booking_next                  = '<?php echo $this->_tpl_vars['lang']['booking_next']; ?>
';
    lang.booking_month                 = '<?php echo $this->_tpl_vars['lang']['booking_month']; ?>
';
    lang.booking_monday                = '<?php echo $this->_tpl_vars['bookingWeekdays']['short']['1']; ?>
';
    lang.booking_tuesday               = '<?php echo $this->_tpl_vars['bookingWeekdays']['short']['2']; ?>
';
    lang.booking_wednesday             = '<?php echo $this->_tpl_vars['bookingWeekdays']['short']['3']; ?>
';
    lang.booking_thursday              = '<?php echo $this->_tpl_vars['bookingWeekdays']['short']['4']; ?>
';
    lang.booking_friday                = '<?php echo $this->_tpl_vars['bookingWeekdays']['short']['5']; ?>
';
    lang.booking_saturday              = '<?php echo $this->_tpl_vars['bookingWeekdays']['short']['6']; ?>
';
    lang.booking_sunday                = '<?php echo $this->_tpl_vars['bookingWeekdays']['short']['7']; ?>
';
    lang.booking_start_booking_title   = '<?php echo $this->_tpl_vars['lang']['booking_start_booking_title']; ?>
';
    lang.booking_message_step_button   = '<?php echo $this->_tpl_vars['lang']['booking_message_step_button']; ?>
';
    lang.booking_field_error           = '<?php echo $this->_tpl_vars['missing_booking_field']; ?>
';
    lang.booking_inccorect_field_error = '<?php echo $this->_tpl_vars['incorrect_booking_field']; ?>
';
    lang.not_available                 = '<?php echo $this->_tpl_vars['lang']['not_available']; ?>
';
    lang.next_step                     = '<?php echo $this->_tpl_vars['lang']['next_step']; ?>
';
    lang.booking_escort_date           = '<?php echo $this->_tpl_vars['lang']['booking_escort_date']; ?>
';
    lang.booking_escort_time           = '<?php echo $this->_tpl_vars['lang']['booking_escort_time']; ?>
';
    lang.booking_escort_type           = '<?php echo $this->_tpl_vars['lang']['booking_escort_type']; ?>
';
    lang.booking_escort_duration       = '<?php echo $this->_tpl_vars['lang']['booking_escort_duration']; ?>
';
    lang.booking_button_select_date    = '<?php echo $this->_tpl_vars['lang']['booking_button_select_date']; ?>
';
    lang.time_midnight                 = '<?php echo $this->_tpl_vars['lang']['time_midnight']; ?>
';
    lang.time_noon                     = '<?php echo $this->_tpl_vars['lang']['time_noon']; ?>
';
    lang.booking_prepayment_step       = '<?php echo $this->_tpl_vars['lang']['booking_prepayment_step']; ?>
';
    lang.booking_time_next_day         = '<?php echo $this->_tpl_vars['lang']['booking_time_next_day']; ?>
';
    lang.booking_short_price_k         = '<?php echo $this->_tpl_vars['lang']['booking_short_price_k']; ?>
';
    lang.booking_short_price_m         = '<?php echo $this->_tpl_vars['lang']['booking_short_price_m']; ?>
';
    lang.booking_short_price_b         = '<?php echo $this->_tpl_vars['lang']['booking_short_price_b']; ?>
';
    lang.booking_rate_selector         = '<?php echo $this->_tpl_vars['lang']['booking_rate_selector']; ?>
';

    $('.booking_rates .table-cell').addClass('hide').css('display', 'none');

    <?php if ($this->_tpl_vars['bookingConfigs']['Booking_type'] == 'time_range' && $this->_tpl_vars['bookingAvailability']): ?>
        bookingConfigs.availability = [];
        <?php $_from = $this->_tpl_vars['bookingAvailability']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['av_day']):
?>
            bookingConfigs.availability.day_<?php echo $this->_tpl_vars['av_day']['day']; ?>
 = [
                '<?php if ($this->_tpl_vars['av_day']['originalFrom']): ?><?php echo $this->_tpl_vars['av_day']['originalFrom']; ?>
<?php else: ?><?php echo $this->_tpl_vars['av_day']['from']; ?>
<?php endif; ?>',
                '<?php if ($this->_tpl_vars['av_day']['originalTo']): ?><?php echo $this->_tpl_vars['av_day']['originalTo']; ?>
<?php else: ?><?php echo $this->_tpl_vars['av_day']['to']; ?>
<?php endif; ?>',
            ];
        <?php endforeach; endif; unset($_from); ?>
    <?php endif; ?>

    <?php echo '
    $(function() {
        if (typeof booking === \'undefined\') {
            return;
        }

        '; ?>
<?php if ($this->_tpl_vars['qtipEnable']): ?><?php echo '
        booking.qtipInit();
        '; ?>
<?php endif; ?><?php echo '

        if (bookingConfigs.booking_calendar_position === \'box\') {
            $(\'.booking_rates\').addClass(\'hide\');
            $(\'#area_booking\').fadeIn(\'slow\');
        } else {
            $(\'#area_booking\').insertAfter($(\'.booking_rates .table-cell:last\')).fadeIn(\'slow\');
        }

        '; ?>

        <?php if (! $this->_tpl_vars['step']): ?>
            booking.getDates(bookingConfigs.listing_id);
        <?php elseif ($this->_tpl_vars['step'] && $this->_tpl_vars['step'] == 'fields'): ?>
            booking.bookingFieldsValidator();
        <?php endif; ?>
        <?php echo '

        $(\'#step_2 .cancel\').click(function() {
            booking.stepsHandler(\'all\', \'hide\');
        });

        /* move user to booking details */
        setTimeout(function(){
            if (window.location.hash === \'#booking\') {
                var $booking_container = bookingConfigs.booking_calendar_position === \'box\'
                    ? $(\'aside .side_block.booking\')
                    : $(\'.booking_rates\');

                $(\'html,body\').animate({scrollTop: $booking_container.offset().top - 100}, \'slow\');
            }
        }, 800);

    });
'; ?>
</script>