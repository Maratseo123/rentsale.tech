<?php /* Smarty version 2.6.31, created on 2023-12-18 01:57:30
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/availability_block.tpl */ ?>
<!-- availability block tpl -->

<section class="side_block_search"><?php echo '<form id="booking-form" class="booking-availability" method="post" action="#"><div class="search-item single-field"><div class="field"></div><select id="booking_listing_type" name="booking_listing_type"><option value="" disabled selected>'; ?><?php echo $this->_tpl_vars['lang']['listing_type']; ?><?php echo '</option>'; ?><?php if ($this->_tpl_vars['listing_types']): ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['listing_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['booking_ltype']):
?><?php echo ''; ?><?php if ($this->_tpl_vars['booking_ltype']['Key'] && $this->_tpl_vars['booking_ltype']['Booking_type'] != 'none'): ?><?php echo '<option value="'; ?><?php echo $this->_tpl_vars['booking_ltype']['Key']; ?><?php echo '"data-path="'; ?><?php echo $this->_tpl_vars['pages'][$this->_tpl_vars['booking_ltype']['Page_key']]; ?><?php echo '"data-type="'; ?><?php echo $this->_tpl_vars['booking_ltype']['Booking_type']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['booking_ltype']['name']; ?><?php echo '</option>'; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?><?php endif; ?><?php echo '</select></div><div class="search-item two-fields"><input placeholder="'; ?><?php echo $this->_tpl_vars['lang']['booking_checkin']; ?><?php echo '"type="text"id="booking_check_in"name="f[check_availability][from]"maxlength="10"value="'; ?><?php echo $_POST['check_availability']['from']; ?><?php echo '"autocomplete="off"/><input placeholder="'; ?><?php echo $this->_tpl_vars['lang']['booking_checkout']; ?><?php echo '"type="text"id="booking_check_out"name="f[check_availability][to]"maxlength="10"value="'; ?><?php echo $_POST['check_availability']['to']; ?><?php echo '"autocomplete="off"/></div><div class="search-button"><input class="button" type="submit" value="'; ?><?php echo $this->_tpl_vars['lang']['search']; ?><?php echo '" /></div></form></section>'; ?>


<script class="fl-js-dynamic">
lang.search                  = '<?php echo $this->_tpl_vars['lang']['search']; ?>
';
lang.notice_field_empty      = '<?php echo $this->_tpl_vars['lang']['notice_field_empty']; ?>
';
lang.listing_type            = '<?php echo $this->_tpl_vars['lang']['listing_type']; ?>
';
lang.booking_checkin         = '<?php echo $this->_tpl_vars['lang']['booking_checkin']; ?>
';
lang.booking_checkin_auto    = '<?php echo $this->_tpl_vars['lang']['booking_checkin_auto']; ?>
';
lang.booking_checkin_escort  = '<?php echo $this->_tpl_vars['lang']['booking_checkin_escort']; ?>
';
lang.booking_checkout        = '<?php echo $this->_tpl_vars['lang']['booking_checkout']; ?>
';
lang.booking_checkout_auto   = '<?php echo $this->_tpl_vars['lang']['booking_checkout_auto']; ?>
';
lang.booking_checkout_escort = '<?php echo $this->_tpl_vars['lang']['booking_checkout_escort']; ?>
';

<?php echo '
var bookingAvailabilityBoxClass = function() {
    let self           = this,
        $checkInField  = $(\'#booking_check_in\'),
        $checkOutField = $(\'#booking_check_out\'),
        $listingType   = $(\'#booking_listing_type\'),
        $searchForm    = $(\'#booking-form\');

    this.submitFormHandler = function() {
        $searchForm.on(\'submit\', function(event){
            var $submitButton = $(this).find(\'[type="submit"]\');
            $submitButton.val(lang[\'loading\']).addClass(\'disabled\').attr(\'disabled\', \'disabled\');

            // check values in form
            if (!$checkInField.val() || !$checkOutField.val() || !$listingType.val()) {
                event.preventDefault();
                var error = \'\';

                if (!$checkInField.val() || !$checkOutField.val()) {
                    error = \''; ?>
<?php echo $this->_tpl_vars['lang']['booking_availability_error']; ?>
<?php echo '\';
                }

                if (!$listingType.val()) {
                    if (error) {
                        var errors = \'<ul><li>\' + lang[\'notice_field_empty\'].replace(\'{field}\', lang[\'listing_type\']);
                        errors += \'</li><li>\' + error + \'</li></ul>\';

                        error = errors;
                    } else {
                        error = lang[\'notice_field_empty\'].replace(\'{field}\', lang[\'listing_type\']);
                    }
                }

                printMessage(\'error\', error);

                self.highlightFields();
                $submitButton.val(lang[\'search\']).removeClass(\'disabled\').removeAttr(\'disabled\');
                return false;
            } else {
                var action_url = rlConfig[\'seo_url\'];
                var ltype_path = $listingType.find(\'option:selected\').data(\'path\');

                if (action_url && ltype_path) {
                    if (rlConfig[\'mod_rewrite\']) {
                        action_url += ltype_path + \'/\' + \''; ?>
<?php echo $this->_tpl_vars['search_results_url']; ?>
<?php echo '.html\';
                    } else {
                        action_url += \'?page=\' + ltype_path + \'&\' + \''; ?>
<?php echo $this->_tpl_vars['search_results_url']; ?>
<?php echo '\';
                    }

                    $(this).attr(\'action\', action_url);
                }
            }
        });

        return true;
    }

    // highlight empty fields
    this.highlightFields = function() {
        if (!$checkInField.val()) {
            $checkInField.addClass(\'error\');
            $checkInField.unbind(\'click\').click(function() { $(this).removeClass(\'error\'); });
        }

        if (!$checkOutField.val()) {
            $checkOutField.addClass(\'error\');
            $checkOutField.unbind(\'click\').click(function() { $(this).removeClass(\'error\'); });
        }

        if (!$listingType.val()) {
            $listingType.addClass(\'error\');
            $listingType.unbind(\'click\').click(function() { $(this).removeClass(\'error\'); });
        }
    }

    /**
     * Replace phrases in placeholders by booking type
     */
    this.placeholderHandler = function() {
        $listingType.change(function(){
            var type     = $(this).find(\'option:selected\').data(\'type\');
            var checkin  = lang[\'booking_checkin\'];
            var checkout = lang[\'booking_checkout\'];

            if ($(this).val() && type) {
                switch (type) {
                  case \'date_time_range\':
                    checkin  = lang[\'booking_checkin_auto\'];
                    checkout = lang[\'booking_checkout_auto\'];
                    break;

                  case \'time_range\':
                    checkin  = lang[\'booking_checkin_escort\'];
                    checkout = lang[\'booking_checkout_escort\'];
                    break;
                }
            }

            $checkInField.attr(\'placeholder\', checkin);
            $checkOutField.attr(\'placeholder\', checkout);
        });
    }

    this.init = function() {
        flUtil.loadStyle(rlConfig.tpl_base + \'css/jquery.ui.css\');
        flUtil.loadScript(rlConfig.libs_url + \'jquery/jquery.ui.js\', function() {
            flUtil.loadScript(
                rlConfig.libs_url + \'jquery/datePicker/i18n/ui.datepicker-\' + (rlLang ? rlLang : \'en\') + \'.js\',
                function() {
                    var dp_regional = rlLang === \'en\' ? \'en-GB\' : rlLang;
                    var dates = $("#booking_check_in, #booking_check_out").datepicker({
                        showOn     : \'focus\',
                        dateFormat : \'dd-mm-yy\',
                        minDate    : new Date(),
                        changeMonth: true,
                        changeYear : true,
                        yearRange  : \'-100:+30\',
                        onSelect   : function(selectedDate) {
                            if (this.id === \'booking_check_in\') {
                                var instance = $(this).data(\'datepicker\'),
                                date = $.datepicker.parseDate(instance.settings.dateFormat
                                    || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
                                date.setDate(date.getDate() + 1);
                                dates.not(this).datepicker(\'option\', \'minDate\', date);

                                var mMonth = date.getMonth() + 1;
                                var mDay = date.getDate();

                                mMonth = mMonth < 10 ? \'0\' + mMonth : mMonth;
                                mDay = mDay < 10 ? \'0\' + mDay : mDay;

                                $checkOutField.val(mDay + \'-\' + mMonth + \'-\' + date.getFullYear());
                            }
                        }
                    }).datepicker($.datepicker.regional[dp_regional]);
                }
            );
        });

        self.submitFormHandler();
        self.placeholderHandler();
    }
}

var bookingAvailabilityBox = new bookingAvailabilityBoxClass();

$(function() {
    bookingAvailabilityBox.init();
});
'; ?>
</script>

<!-- availability block tpl end -->