<?php /* Smarty version 2.6.31, created on 2024-05-02 01:32:10
         compiled from /var/www/u2273289/data/www/rentsale.tech/plugins/booking/nav_bar.tpl */ ?>
<?php if ($this->_tpl_vars['listing']['ID'] && $this->_tpl_vars['listing']['booking_module'] && ( $this->_tpl_vars['booking_allowed_plans'][$this->_tpl_vars['listing']['Plan_ID']] || ( $this->_tpl_vars['config']['membership_module'] && $this->_tpl_vars['booking_allowed_membership_plans'][$this->_tpl_vars['listing']['Plan_ID']] ) ) && $this->_tpl_vars['listing_type']['Booking_type'] != 'none'): ?>
    <li class="nav-icon">
        <a class="booking-details" href="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pages']['booking_details']; ?>
.html?id=<?php echo $this->_tpl_vars['listing']['ID']; ?>
<?php else: ?>?page=<?php echo $this->_tpl_vars['pages']['booking_details']; ?>
&id=<?php echo $this->_tpl_vars['listing']['ID']; ?>
<?php endif; ?>">
            <span><?php echo $this->_tpl_vars['lang']['booking_module']; ?>
</span>&nbsp;
        </a>
    </li>
<?php endif; ?>