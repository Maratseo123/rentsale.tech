<?php /* Smarty version 2.6.31, created on 2023-12-18 02:00:50
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/smarty_blocks/styles.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'explode', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/smarty_blocks/styles.tpl', 2, false),array('modifier', 'strpos', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/smarty_blocks/styles.tpl', 11, false),)), $this); ?>
<?php if ($this->_tpl_vars['config']['booking_colors']): ?>
    <?php $this->assign('unColors', ((is_array($_tmp="|")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['config']['booking_colors']) : explode($_tmp, $this->_tpl_vars['config']['booking_colors']))); ?>

    <?php if ($this->_tpl_vars['unColors']['0'] && $this->_tpl_vars['unColors']['1'] && $this->_tpl_vars['unColors']['2']): ?>
        <style type="text/css">
            .booked,
            .closed,
            .checkin,
            .checkout,
            .partially-booked <?php echo '{'; ?>

                background: rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['1'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['1']; ?>
);
            <?php echo '}'; ?>

            .pr_checkin:not(.booked):not(.checkout):not(.daySelect):not(.current-request),
            .checkin:not(.booked):not(.pr_checkout):not(.daySelect):not(.current-request) <?php echo '{'; ?>

                background: linear-gradient(
                    to bottom right, 
                    transparent 0%, 
                    transparent 49%, 
                    rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['1'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['1']; ?>
) 51%, 
                    rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['1'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['1']; ?>
) 100%
                );
            <?php echo '}'; ?>

            .pr_checkout:not(.booked):not(.checkin):not(.daySelect):not(.current-request),
            .checkout:not(.booked):not(.pr_checkin):not(.daySelect):not(.current-request) <?php echo '{'; ?>

                background: linear-gradient(
                    to top left, transparent 0%, 
                    transparent 49%, 
                    rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['1'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['1']; ?>
) 51%, 
                    rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['1'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['1']; ?>
) 100%
                );
            <?php echo '}'; ?>

            .pr_checkin.daySelect,
            .checkin.daySelect,
            .pr_checkin.current-request,
            .checkin.current-request <?php echo '{'; ?>

                background: linear-gradient(
                    to top left, 
                    rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['1'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['1']; ?>
) 0%, 
                    rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['1'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['1']; ?>
) 49%, 
                    rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['0'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['0']; ?>
) 51%, 
                    rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['0'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['0']; ?>
) 100%
                );
            <?php echo '}'; ?>

            .pr_checkout.daySelect,
            .checkout.daySelect,
            .pr_checkout.current-request,
            .checkout.current-request <?php echo '{'; ?>

                background: linear-gradient(
                    to bottom right, 
                    rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['1'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['1']; ?>
) 0%, 
                    rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['1'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['1']; ?>
) 49%, 
                    rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['0'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['0']; ?>
) 51%, 
                    rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['0'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['0']; ?>
) 100%
                );
            <?php echo '}'; ?>

            .daySelect.start:not(.checkin):not(.pr_checkin):not(.checkout):not(.pr_checkout):not(.booked),
            .current-request.start:not(.checkin):not(.pr_checkin):not(.checkout):not(.pr_checkout):not(.booked) <?php echo '{'; ?>

                background: linear-gradient(
                    to bottom right, 
                    transparent 0%, 
                    transparent 49%, 
                    rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['0'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['0']; ?>
) 51%, 
                    rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['0'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['0']; ?>
) 100%
                );
            <?php echo '}'; ?>

            .daySelect.end:not(.checkin):not(.pr_checkin):not(.checkout):not(.pr_checkout):not(.booked),
            .current-request.end:not(.checkin):not(.pr_checkin):not(.checkout):not(.pr_checkout):not(.booked) <?php echo '{'; ?>

                background: linear-gradient(
                    to top left, transparent 0%, 
                    transparent 49%, 
                    rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['0'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['0']; ?>
) 51%, 
                    rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['0'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['0']; ?>
) 100%
                );
            <?php echo '}'; ?>

            .daySelect:not(.pr_checkin):not(.pr_checkout):not(.checkin):not(.checkout):not(.start):not(.end),
            .current-request:not(.pr_checkin):not(.checkin):not(.checkout):not(.pr_checkout) <?php echo '{'; ?>

                background: rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['0'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['0']; ?>
);
            <?php echo '}'; ?>

            .calendar_td:hover .today:not(.booked), 
            .calendar_td:hover .available:not(.booked):not(.closed):not(.pr_checkout.checkin) <?php echo '{'; ?>

                box-shadow: inset 0 0 0 2px rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['0'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['0']; ?>
);
            <?php echo '}'; ?>

            .calendar_td .closed <?php echo '{'; ?>

                background: rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['1'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['1']; ?>
);
            <?php echo '}'; ?>

            .calendar_td .today <?php echo '{'; ?>

                color: rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['0'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['0']; ?>
);
            <?php echo '}'; ?>


            /* highlight own pending requests */
            .calendar_td .own-request:not(.daySelect):not(.pr_checkin_own):not(.pr_checkout_own),
            .calendar_td .pr_checkin_own.pr_checkout_own <?php echo '{'; ?>

                background: rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['2'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['2']; ?>
);
            <?php echo '}'; ?>

            .calendar_td .pr_checkin_own:not(.pr_checkout_own):not(.daySelect):not(.checkout):not(.pr_checkout) <?php echo '{'; ?>

                background: linear-gradient(
                    to bottom right, 
                    transparent 0%, 
                    transparent 49%, 
                    rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['2'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['2']; ?>
) 51%, 
                    rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['2'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['2']; ?>
) 100%
                );
            <?php echo '}'; ?>

            .calendar_td .pr_checkout_own:not(.pr_checkin_own):not(.daySelect):not(.checkin):not(.pr_checkin) <?php echo '{'; ?>

                background: linear-gradient(
                    to top left, transparent 0%, 
                    transparent 49%, 
                    rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['2'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['2']; ?>
) 51%, 
                    rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['2'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['2']; ?>
) 100%
                );
            <?php echo '}'; ?>

            .calendar_td .pr_checkout_own.pr_checkin:not(.pr_checkin_own),
            .calendar_td .pr_checkout_own.checkin <?php echo '{'; ?>

                background: linear-gradient(
                    to bottom right, 
                    rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['2'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['2']; ?>
) 0%, 
                    rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['2'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['2']; ?>
) 49%, 
                    rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['1'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['1']; ?>
) 51%, 
                    rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['1'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['1']; ?>
) 100%
                );
            <?php echo '}'; ?>

            .calendar_td .pr_checkin_own.pr_checkout:not(.pr_checkout_own),
            .calendar_td .pr_checkin_own.checkout <?php echo '{'; ?>

                background: linear-gradient(
                    to bottom right, 
                    rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['1'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['1']; ?>
) 0%, 
                    rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['1'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['1']; ?>
) 49%, 
                    rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['2'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['2']; ?>
) 51%, 
                    rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['2'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['2']; ?>
) 100%
                );
            <?php echo '}'; ?>

            .calendar_td .pr_checkin_own.daySelect <?php echo '{'; ?>

                background: linear-gradient(
                    to bottom right, 
                    rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['0'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['0']; ?>
) 0%, 
                    rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['0'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['0']; ?>
) 49%,
                    rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['2'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['2']; ?>
) 51%,
                    rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['2'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['2']; ?>
) 100%
                );
            <?php echo '}'; ?>

            .calendar_td .pr_checkout_own.daySelect <?php echo '{'; ?>

                background: linear-gradient(
                    to bottom right, 
                    rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['2'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['2']; ?>
) 0%, 
                    rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['2'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['2']; ?>
) 49%, 
                    rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['0'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['0']; ?>
) 51%, 
                    rgb<?php if (((is_array($_tmp=$this->_tpl_vars['unColors']['0'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '.') : strpos($_tmp, '.'))): ?>a<?php endif; ?>(<?php echo $this->_tpl_vars['unColors']['0']; ?>
) 100%
                );
            <?php echo '}'; ?>

        </style>
    <?php endif; ?>
<?php endif; ?>