<?php /* Smarty version 2.6.31, created on 2024-08-21 19:01:14
         compiled from /var/www/u2273289/data/www/rentsale.tech/plugins/booking/booking_order.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'pageUrl', '/var/www/u2273289/data/www/rentsale.tech/plugins/booking/booking_order.tpl', 5, false),array('function', 'gateways', '/var/www/u2273289/data/www/rentsale.tech/plugins/booking/booking_order.tpl', 70, false),array('function', 'phrase', '/var/www/u2273289/data/www/rentsale.tech/plugins/booking/booking_order.tpl', 81, false),array('modifier', 'replace', '/var/www/u2273289/data/www/rentsale.tech/plugins/booking/booking_order.tpl', 13, false),array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/plugins/booking/booking_order.tpl', 13, false),)), $this); ?>
<!-- section of booking order -->

<?php if ($this->_tpl_vars['isLogin'] || ( ! $this->_tpl_vars['isLogin'] && ! $this->_tpl_vars['bookingConfigs']['Deny_guest'] )): ?>
    <?php if ($this->_tpl_vars['bookingData']): ?>
        <?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'booking_order','assign' => 'booking_order_page'), $this);?>


        <ul class="steps">
            <li class="<?php if (! $this->_tpl_vars['step']): ?>current<?php else: ?>past<?php endif; ?>">
                <a href="<?php if (! $this->_tpl_vars['step']): ?>javascript:void(0)<?php else: ?><?php echo $this->_tpl_vars['booking_order_page']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?>?<?php else: ?>&<?php endif; ?>edit<?php endif; ?>" title="<?php echo $this->_tpl_vars['lang']['booking_calendar']; ?>
"><span><?php echo $this->_tpl_vars['lang']['step']; ?>
</span> 1</a>
            </li>

            <li class="<?php if ($this->_tpl_vars['step'] && $this->_tpl_vars['step'] == 'fields'): ?>current<?php elseif ($this->_tpl_vars['step'] && $this->_tpl_vars['step'] == 'prepayment'): ?>past<?php endif; ?>">
                <a href="<?php if (! $this->_tpl_vars['step'] || $this->_tpl_vars['step'] == 'fields'): ?>javascript:void(0)<?php else: ?><?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['booking_order_page'])) ? $this->_run_mod_handler('replace', true, $_tmp, '.html', '/contact-details.html') : smarty_modifier_replace($_tmp, '.html', '/contact-details.html')))) ? $this->_run_mod_handler('cat', true, $_tmp, '?edit') : smarty_modifier_cat($_tmp, '?edit')); ?>
<?php else: ?><?php echo $this->_tpl_vars['booking_order_page']; ?>
&step=contact-details&edit<?php endif; ?><?php endif; ?>" title="<?php echo $this->_tpl_vars['lang']['booking_client_details']; ?>
"><span><?php echo $this->_tpl_vars['lang']['step']; ?>
</span> 2</a>
            </li>

            <?php if ($this->_tpl_vars['bookingConfigs']['Prepayment']): ?>
                <li <?php if ($this->_tpl_vars['step'] && $this->_tpl_vars['step'] == 'prepayment'): ?>class="current"<?php endif; ?>>
                    <a href="javascript:void(0)" title="<?php echo $this->_tpl_vars['lang']['booking_prepayment_step']; ?>
"><span><?php echo $this->_tpl_vars['lang']['step']; ?>
</span> 3</a>
                </li>
            <?php endif; ?>

            <li>
                <a href="javascript:void(0)" title="<?php echo $this->_tpl_vars['lang']['reg_done']; ?>
"><span><?php echo $this->_tpl_vars['lang']['reg_done']; ?>
</span></a>
            </li>
        </ul>

        <div id="area_booking" class="content-padding <?php if ($this->_tpl_vars['bookingConfigs']['Booking_type'] == 'time_range'): ?>escort<?php endif; ?>">
            <?php if ($this->_tpl_vars['bookingConfigs']['Booking_type'] == 'time_range'): ?>
                <?php if (! $this->_tpl_vars['step']): ?>
                    <?php if ($this->_tpl_vars['listing_escort']): ?>
                        <?php $this->assign('listing', $this->_tpl_vars['listing_escort']); ?>
                    <?php endif; ?>

                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['bookingBlocksFolder'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'escort_data.tpl') : smarty_modifier_cat($_tmp, 'escort_data.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <?php endif; ?>
            <?php else: ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['bookingBlocksFolder'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'calendar.tpl') : smarty_modifier_cat($_tmp, 'calendar.tpl')), 'smarty_include_vars' => array('fieldsetEnable' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php endif; ?>

            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['bookingBlocksFolder'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'message.tpl') : smarty_modifier_cat($_tmp, 'message.tpl')), 'smarty_include_vars' => array('fieldsetEnable' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['bookingBlocksFolder'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'checkin_checkout.tpl') : smarty_modifier_cat($_tmp, 'checkin_checkout.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['bookingBlocksFolder'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'fields.tpl') : smarty_modifier_cat($_tmp, 'fields.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div>

        <?php if ($this->_tpl_vars['step'] == 'prepayment' && $this->_tpl_vars['bookingConfigs']['Prepayment']): ?>
            <?php $this->assign('b_prepayment_percent', ('{')."prepayment_percent".('}')); ?>
            <?php $this->assign('percent', ('{')."prepayment".('}')); ?>
            <?php $this->assign('booking_adapted_notice_1', ((is_array($_tmp=$this->_tpl_vars['lang']['booking_prepayment_step_notice'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['b_prepayment_percent'], $this->_tpl_vars['bookingConfigs']['Prepayment']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['b_prepayment_percent'], $this->_tpl_vars['bookingConfigs']['Prepayment']))); ?>

            <?php if ($this->_tpl_vars['config']['system_currency_position'] == 'before'): ?>
                <?php $this->assign('booking_rest', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['config']['system_currency'])) ? $this->_run_mod_handler('cat', true, $_tmp, ' ') : smarty_modifier_cat($_tmp, ' ')))) ? $this->_run_mod_handler('cat', true, $_tmp, $_SESSION['bookingData']['prepayment']) : smarty_modifier_cat($_tmp, $_SESSION['bookingData']['prepayment']))); ?>
            <?php else: ?>
                <?php $this->assign('booking_rest', ((is_array($_tmp=((is_array($_tmp=$_SESSION['bookingData']['prepayment'])) ? $this->_run_mod_handler('cat', true, $_tmp, ' ') : smarty_modifier_cat($_tmp, ' ')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['config']['system_currency']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['config']['system_currency']))); ?>
            <?php endif; ?>
            <?php $this->assign('booking_adapted_notice_2', ((is_array($_tmp=$this->_tpl_vars['booking_adapted_notice_1'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['percent'], $this->_tpl_vars['booking_rest']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['percent'], $this->_tpl_vars['booking_rest']))); ?>

            <?php $this->assign('b_amount', ('{')."amount".('}')); ?>
            <?php if ($this->_tpl_vars['config']['system_currency_position'] == 'before'): ?>
                <?php $this->assign('booking_amount', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['config']['system_currency'])) ? $this->_run_mod_handler('cat', true, $_tmp, ' ') : smarty_modifier_cat($_tmp, ' ')))) ? $this->_run_mod_handler('cat', true, $_tmp, $_SESSION['bookingData']['total_cost']) : smarty_modifier_cat($_tmp, $_SESSION['bookingData']['total_cost']))); ?>
            <?php else: ?>
                <?php $this->assign('booking_amount', ((is_array($_tmp=((is_array($_tmp=$_SESSION['bookingData']['total_cost'])) ? $this->_run_mod_handler('cat', true, $_tmp, ' ') : smarty_modifier_cat($_tmp, ' ')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['config']['system_currency']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['config']['system_currency']))); ?>
            <?php endif; ?>
            <?php $this->assign('booking_adapted_notice_3', ((is_array($_tmp=$this->_tpl_vars['booking_adapted_notice_2'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['b_amount'], $this->_tpl_vars['booking_amount']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['b_amount'], $this->_tpl_vars['booking_amount']))); ?>

            <div class="prepayment-notice"><?php echo $this->_tpl_vars['booking_adapted_notice_3']; ?>
</div>

            <!-- payment gateways -->
            <form id="form-checkout" method="post" action="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
/prepayment.html<?php else: ?>?page=<?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
&step=prepayment<?php endif; ?>">
                <input type="hidden" name="step" value="checkout" />
                <?php echo $this->_plugins['function']['gateways'][0][0]->gateways(array(), $this);?>

                <div class="form-buttons">
                    <input type="submit" value="<?php echo $this->_tpl_vars['lang']['checkout']; ?>
" />
                </div>
            </form>
            <!-- end payment gateways -->
        <?php endif; ?>

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['bookingBlocksFolder'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'styles.tpl') : smarty_modifier_cat($_tmp, 'styles.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['bookingBlocksFolder'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'js_script.tpl') : smarty_modifier_cat($_tmp, 'js_script.tpl')), 'smarty_include_vars' => array('qtipEnable' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php else: ?>
        <?php echo $this->_plugins['function']['phrase'][0][0]->getPhrase(array('key' => 'booking_data_not_found','db_check' => true), $this);?>

    <?php endif; ?>
<?php else: ?>
    <?php echo $this->_tpl_vars['lang']['booking_deny_guests']; ?>

<?php endif; ?>

<!-- section of booking order end -->