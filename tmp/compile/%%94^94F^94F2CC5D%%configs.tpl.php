<?php /* Smarty version 2.6.31, created on 2023-12-30 14:03:04
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/smarty_blocks/configs.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/smarty_blocks/configs.tpl', 75, false),array('modifier', 'replace', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/smarty_blocks/configs.tpl', 80, false),)), $this); ?>
<!-- booking configs tpl -->

<form id="configs_form" method="post">
    <div class="submit-cell clearfix">
        <div class="name">
            <?php echo $this->_tpl_vars['lang']['booking_deny_guest']; ?>

            <img class="qtip" alt="" title="<?php echo $this->_tpl_vars['lang']['booking_deny_guests_option_disabled']; ?>
" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" />
        </div>
        <div class="field checkbox-field inline-fields">
            <?php if ($this->_tpl_vars['booking_configs']['Deny_guest'] && $this->_tpl_vars['booking_configs']['Prepayment']): ?>
                <input type="hidden" value="1" name="deny_guest" />
            <?php endif; ?>

            <span class="custom-input">
                <label title="<?php echo $this->_tpl_vars['lang']['yes']; ?>
">
                    <input <?php if ($this->_tpl_vars['booking_configs']['Deny_guest']): ?>checked="checked"<?php endif; ?> type="radio" value="1" name="deny_guest" <?php if ($this->_tpl_vars['booking_configs']['Deny_guest'] && $this->_tpl_vars['booking_configs']['Prepayment']): ?>class="disabled" disabled="disabled"<?php endif; ?> />
                    <?php echo $this->_tpl_vars['lang']['yes']; ?>

                </label>
            </span>

            <span class="custom-input">
                <label title="<?php echo $this->_tpl_vars['lang']['no']; ?>
">
                    <input <?php if (! $this->_tpl_vars['booking_configs']['Deny_guest']): ?>checked="checked"<?php endif; ?> type="radio" value="0" name="deny_guest" <?php if ($this->_tpl_vars['booking_configs']['Deny_guest'] && $this->_tpl_vars['booking_configs']['Prepayment']): ?>class="disabled" disabled="disabled"<?php endif; ?> />
                    <?php echo $this->_tpl_vars['lang']['no']; ?>

                </label>
            </span>
        </div>
    </div>

    <div class="submit-cell clearfix <?php if ($this->_tpl_vars['booking_configs']['Booking_type'] == 'time_range'): ?>hide<?php endif; ?>">
        <div class="name">
            <?php echo $this->_tpl_vars['lang']['booking_min_book_day']; ?>

            <img class="qtip" alt="" title="<?php echo $this->_tpl_vars['lang']['booking_min_config_desc']; ?>
" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" />
        </div>
        <div class="field single-field">
            <input type="text" name="min_book_day" size="2" class="wauto numeric" maxlength="2" value="<?php if ($this->_tpl_vars['booking_configs']['Min_book_day']): ?><?php echo $this->_tpl_vars['booking_configs']['Min_book_day']; ?>
<?php else: ?>2<?php endif; ?>" />
        </div>
    </div>

    <div class="submit-cell clearfix <?php if ($this->_tpl_vars['booking_configs']['Booking_type'] == 'time_range'): ?>hide<?php endif; ?>">
        <div class="name">
            <?php echo $this->_tpl_vars['lang']['booking_max_book_day']; ?>

            <img class="qtip" alt="" title="<?php echo $this->_tpl_vars['lang']['booking_max_config_desc']; ?>
" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" />
        </div>
        <div class="field single-field">
            <input type="text" name="max_book_day" size="2" class="wauto numeric" maxlength="2" value="<?php if ($this->_tpl_vars['booking_configs']['Max_book_day']): ?><?php echo $this->_tpl_vars['booking_configs']['Max_book_day']; ?>
<?php else: ?>0<?php endif; ?>" />
        </div>
    </div>

    <div class="submit-cell clearfix <?php if ($this->_tpl_vars['booking_configs']['Booking_type'] == 'time_range'): ?>hide<?php endif; ?>">
        <div class="name">
            <?php echo $this->_tpl_vars['lang']['booking_fixed_range']; ?>

            <img class="qtip" alt="" title="<?php echo $this->_tpl_vars['lang']['booking_fixed_range_config_desc']; ?>
" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" />
        </div>
        <div class="field checkbox-field inline-fields">
            <span class="custom-input">
                <label title="<?php echo $this->_tpl_vars['lang']['yes']; ?>
">
                    <input <?php if ($this->_tpl_vars['booking_configs']['Fixed_rate_range']): ?>checked="checked"<?php endif; ?> type="radio" value="1" name="fixed_rate_range" />
                    <?php echo $this->_tpl_vars['lang']['yes']; ?>

                </label>
            </span>

            <span class="custom-input">
                <label title="<?php echo $this->_tpl_vars['lang']['no']; ?>
">
                    <input <?php if (! $this->_tpl_vars['booking_configs']['Fixed_rate_range']): ?>checked="checked"<?php endif; ?> type="radio" value="0" name="fixed_rate_range" />
                    <?php echo $this->_tpl_vars['lang']['no']; ?>

                </label>
            </span>
        </div>
    </div>

    <div class="submit-cell clearfix">
        <?php $this->assign('replace_from', ('{')."from".('}')); ?>
        <?php $this->assign('replace_to', ('{')."to".('}')); ?>
        <?php $this->assign('active_from', ((is_array($_tmp=$this->_tpl_vars['listing_data']['Pay_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)) : smarty_modifier_date_format($_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)))); ?>
        <?php $this->assign('active_to', ((is_array($_tmp=$this->_tpl_vars['listing_data']['Plan_expire'])) ? $this->_run_mod_handler('date_format', true, $_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)) : smarty_modifier_date_format($_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)))); ?>

        <div class="name">
            <?php echo $this->_tpl_vars['lang']['booking_calendar_restricted']; ?>

            <img class="qtip" alt="" title="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['booking_calendar_restricted_config_desc'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['replace_from'], $this->_tpl_vars['active_from']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['replace_from'], $this->_tpl_vars['active_from'])))) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['replace_to'], $this->_tpl_vars['active_to']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['replace_to'], $this->_tpl_vars['active_to'])); ?>
" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" />
        </div>

        <div class="field checkbox-field inline-fields">
            <span class="custom-input">
                <label title="<?php echo $this->_tpl_vars['lang']['yes']; ?>
">
                    <input <?php if ($this->_tpl_vars['booking_configs']['Calendar_restricted']): ?>checked="checked"<?php endif; ?> type="radio" value="1" name="calendar_restricted" />
                    <?php echo $this->_tpl_vars['lang']['yes']; ?>

                </label>
            </span>

            <span class="custom-input">
                <label title="<?php echo $this->_tpl_vars['lang']['no']; ?>
">
                    <input <?php if (! $this->_tpl_vars['booking_configs']['Calendar_restricted']): ?>checked="checked"<?php endif; ?> type="radio" value="0" name="calendar_restricted" />
                    <?php echo $this->_tpl_vars['lang']['no']; ?>

                </label>
            </span>
        </div>
    </div>

    <div class="submit-cell clearfix<?php if ($this->_tpl_vars['booking_configs']['Booking_type'] === 'time_range'): ?> hide<?php endif; ?>">
        <div class="name">
            <?php echo $this->_tpl_vars['lang']['booking_hide_booked_days']; ?>

            <img class="qtip" alt="" title="<?php echo $this->_tpl_vars['lang']['booking_hide_booked_days_desc']; ?>
" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" />
        </div>
        <div class="field checkbox-field inline-fields">
            <span class="custom-input">
                <label title="<?php echo $this->_tpl_vars['lang']['yes']; ?>
">
                    <input <?php if ($this->_tpl_vars['booking_configs']['Hide_booked_days']): ?>checked="checked"<?php endif; ?> type="radio" value="1" name="hide_booked_days" />
                    <?php echo $this->_tpl_vars['lang']['yes']; ?>

                </label>
            </span>

            <span class="custom-input">
                <label title="<?php echo $this->_tpl_vars['lang']['no']; ?>
">
                    <input <?php if (! $this->_tpl_vars['booking_configs']['Hide_booked_days']): ?>checked="checked"<?php endif; ?> type="radio" value="0" name="hide_booked_days" />
                    <?php echo $this->_tpl_vars['lang']['no']; ?>

                </label>
            </span>
        </div>
    </div>

    <div class="submit-cell clearfix">
        <div class="name"></div>
        <div class="field single-field">
            <input type="button" class="save_configs" value="<?php echo $this->_tpl_vars['lang']['save']; ?>
">
        </div>
    </div>
</form>



<!-- booking configs tpl end -->