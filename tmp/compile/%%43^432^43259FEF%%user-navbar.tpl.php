<?php /* Smarty version 2.6.31, created on 2024-01-05 14:22:50
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/user-navbar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/user-navbar.tpl', 11, false),)), $this); ?>
<?php if ($this->_tpl_vars['new_booking_requests'] || $this->_tpl_vars['changed_booking_reservations']): ?>
    <script class="fl-js-dynamic"><?php echo '
    if (!$(\'#user-navbar\').hasClass(\'notify\')) {
        $(\'#user-navbar\').addClass(\'notify\');
    }

    $(\'#user-navbar a\').each(function(){
        '; ?>
<?php if ($this->_tpl_vars['new_booking_requests'] && $this->_tpl_vars['booking_requests_url']): ?><?php echo '
            if ($(this).attr(\'href\') == \''; ?>
<?php echo $this->_tpl_vars['booking_requests_url']; ?>
<?php echo '\') {
                $(this).addClass(\'b_requests\');
                $(this).after(\'<a class="counter requests_count" title="'; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['booking_new_requests'])) ? $this->_run_mod_handler('replace', true, $_tmp, '[count]', $this->_tpl_vars['new_booking_requests']) : smarty_modifier_replace($_tmp, '[count]', $this->_tpl_vars['new_booking_requests'])); ?>
" href="<?php echo $this->_tpl_vars['booking_requests_url']; ?>
"><?php echo $this->_tpl_vars['new_booking_requests']; ?>
<?php echo '</a>\');
            }
        '; ?>
<?php endif; ?><?php if ($this->_tpl_vars['changed_booking_reservations'] && $this->_tpl_vars['booking_reservations_url']): ?><?php echo '
            if ($(this).attr(\'href\') == \''; ?>
<?php echo $this->_tpl_vars['booking_reservations_url']; ?>
<?php echo '\') {
                $(this).addClass(\'b_reservations\');
                $(this).after(\'<a class="counter reservations_count" title="'; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['booking_changed_reservations'])) ? $this->_run_mod_handler('replace', true, $_tmp, '[count]', $this->_tpl_vars['changed_booking_reservations']) : smarty_modifier_replace($_tmp, '[count]', $this->_tpl_vars['changed_booking_reservations'])); ?>
" href="<?php echo $this->_tpl_vars['booking_reservations_url']; ?>
"><?php echo $this->_tpl_vars['changed_booking_reservations']; ?>
<?php echo '</a>\');
            }
        '; ?>
<?php endif; ?><?php echo '
    });
    '; ?>
</script>
<?php endif; ?>