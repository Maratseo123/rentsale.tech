<?php /* Smarty version 2.6.31, created on 2024-04-11 02:43:49
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/booking_reservations.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'version_compare', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/booking_reservations.tpl', 21, false),array('modifier', 'date_format', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/booking_reservations.tpl', 52, false),array('modifier', 'count', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/booking_reservations.tpl', 98, false),array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/booking_reservations.tpl', 104, false),array('modifier', 'replace', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/booking_reservations.tpl', 126, false),array('function', 'paging', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/booking_reservations.tpl', 98, false),array('function', 'math', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/booking_reservations.tpl', 101, false),)), $this); ?>
<!-- booking reservations -->

<?php if ($this->_tpl_vars['isLogin']): ?>
    <div class="content-padding <?php if (defined ( 'IS_ESCORT' )): ?>reservations-escort<?php endif; ?>">
        <?php if ($this->_tpl_vars['reservations']): ?>
            <section id="listings" class="list row">
                <?php $_from = $this->_tpl_vars['reservations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['bReservations'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bReservations']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['request_id'] => $this->_tpl_vars['reservation']):
        $this->_foreach['bReservations']['iteration']++;
?>
                    <?php if ($this->_tpl_vars['reservation']['ltype']): ?>
                        <?php $this->assign('listing_type', $this->_tpl_vars['listing_types'][$this->_tpl_vars['reservation']['ltype']]); ?>
                    <?php endif; ?>

                    <article id="item_request_<?php echo $this->_tpl_vars['request_id']; ?>
" class="item<?php if (! $this->_tpl_vars['listing_type']['Photo']): ?> no-image<?php endif; ?> two-inline col-sm-6<?php if (! $this->_tpl_vars['side_bar_exists']): ?> col-md-12<?php endif; ?>">
                        <div class="navigation-column">
                            <?php if ($this->_tpl_vars['reservation']['status'] == 'process'): ?><a id="<?php echo $this->_tpl_vars['request_id']; ?>
" class="button remove_request" href="javascript:void(0)"><?php echo $this->_tpl_vars['lang']['remove']; ?>
</a><?php endif; ?>
                        </div>

                        <div class="clearfix">
                            <a title="<?php echo $this->_tpl_vars['reservation']['title']; ?>
" <?php if ($this->_tpl_vars['config']['view_details_new_window']): ?>target="_blank"<?php endif; ?> href="<?php echo $this->_tpl_vars['reservation']['link']; ?>
">
                                <div class="picture<?php if (! $this->_tpl_vars['reservation']['Main_photo']): ?> no-picture<?php endif; ?>">
                                                                        <?php if (((is_array($_tmp=$this->_tpl_vars['config']['rl_version'])) ? $this->_run_mod_handler('version_compare', true, $_tmp, '4.6.2') : version_compare($_tmp, '4.6.2')) <= 0): ?>
                                        <img alt="<?php echo $this->_tpl_vars['reservation']['title']; ?>
"
                                             src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank_10x7.gif"
                                                <?php if ($this->_tpl_vars['reservation']['Main_photo']): ?>data-1x="<?php echo (defined('RL_FILES_URL') ? @RL_FILES_URL : null); ?>
<?php echo $this->_tpl_vars['reservation']['Main_photo']; ?>
"<?php endif; ?>
                                                <?php if ($this->_tpl_vars['reservation']['Main_photo'] || $this->_tpl_vars['reservation']['Main_photo_x2']): ?>data-2x="<?php echo (defined('RL_FILES_URL') ? @RL_FILES_URL : null); ?>
<?php if ($this->_tpl_vars['reservation']['Main_photo_x2']): ?><?php echo $this->_tpl_vars['reservation']['Main_photo_x2']; ?>
<?php else: ?><?php echo $this->_tpl_vars['reservation']['Main_photo']; ?>
<?php endif; ?>"<?php endif; ?> />
                                    <?php else: ?>
                                        <img alt="<?php echo $this->_tpl_vars['reservation']['title']; ?>
"
                                            src="<?php if ($this->_tpl_vars['reservation']['Main_photo']): ?><?php echo (defined('RL_FILES_URL') ? @RL_FILES_URL : null); ?>
<?php echo $this->_tpl_vars['reservation']['Main_photo']; ?>
<?php else: ?><?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank_10x7.gif<?php endif; ?>"
                                            <?php if ($this->_tpl_vars['reservation']['Main_photo_x2']): ?>srcset="<?php echo (defined('RL_FILES_URL') ? @RL_FILES_URL : null); ?>
<?php echo $this->_tpl_vars['reservation']['Main_photo_x2']; ?>
 2x"<?php endif; ?> />
                                    <?php endif; ?>
                                </div>
                            </a>

                            <ul <?php if ($this->_tpl_vars['tpl_settings']['name'] !== 'escort_nova_wide'): ?>class="<?php if (((is_array($_tmp=$this->_tpl_vars['config']['rl_version'])) ? $this->_run_mod_handler('version_compare', true, $_tmp, '4.9.1', '>') : version_compare($_tmp, '4.9.1', '>'))): ?>card<?php else: ?>ad<?php endif; ?>-info"<?php endif; ?>>
                                <li class="title">
                                    <a class="link-large" title="<?php echo $this->_tpl_vars['reservation']['listing_title']; ?>
" <?php if ($this->_tpl_vars['config']['view_details_new_window']): ?>target="_blank"<?php endif; ?> href="<?php echo $this->_tpl_vars['reservation']['link']; ?>
">
                                        <?php echo $this->_tpl_vars['reservation']['title']; ?>

                                    </a>
                                </li>

                                <li><b><?php echo $this->_tpl_vars['lang']['booking_request_id']; ?>
:</b> <?php echo $this->_tpl_vars['request_id']; ?>
</li>

                                <li>
                                    <?php if ($this->_tpl_vars['reservation']['Booking_type'] == 'time_range'): ?>
                                        <b><?php echo $this->_tpl_vars['lang']['booking_escort_date']; ?>
:</b>
                                    <?php elseif ($this->_tpl_vars['reservation']['Booking_type'] == 'date_time_range'): ?>
                                        <b><?php echo $this->_tpl_vars['lang']['booking_checkin_auto']; ?>
:</b>
                                    <?php else: ?>
                                        <b><?php echo $this->_tpl_vars['lang']['booking_checkin']; ?>
:</b>
                                    <?php endif; ?>

                                    <?php echo ((is_array($_tmp=$this->_tpl_vars['reservation']['Booking_from'])) ? $this->_run_mod_handler('date_format', true, $_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)) : smarty_modifier_date_format($_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null))); ?>

                                    <?php if ($this->_tpl_vars['reservation']['Booking_type'] != 'time_range' && $this->_tpl_vars['reservation']['Checkin']): ?> - <?php echo $this->_tpl_vars['reservation']['Checkin']; ?>
<?php endif; ?>
                                </li>

                                <?php if ($this->_tpl_vars['reservation']['Booking_type'] != 'time_range'): ?>
                                    <li>
                                        <?php if ($this->_tpl_vars['reservation']['Booking_type'] == 'date_time_range'): ?>
                                            <b><?php echo $this->_tpl_vars['lang']['booking_checkout_auto']; ?>
:</b>
                                        <?php else: ?>
                                            <b><?php echo $this->_tpl_vars['lang']['booking_checkout']; ?>
:</b>
                                        <?php endif; ?>

                                        <?php echo ((is_array($_tmp=$this->_tpl_vars['reservation']['Booking_to'])) ? $this->_run_mod_handler('date_format', true, $_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)) : smarty_modifier_date_format($_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null))); ?>

                                        <?php if ($this->_tpl_vars['reservation']['Checkout']): ?> - <?php echo $this->_tpl_vars['reservation']['Checkout']; ?>
<?php endif; ?>
                                    </li>
                                <?php endif; ?>

                                <?php if ($this->_tpl_vars['reservation']['Booking_type'] == 'time_range'): ?>
                                    <?php if ($this->_tpl_vars['reservation']['Checkout']): ?>
                                        <li><b><?php echo $this->_tpl_vars['lang']['booking_escort_time']; ?>
:</b> <?php echo $this->_tpl_vars['reservation']['Checkout']; ?>
</li>
                                    <?php endif; ?>

                                    <?php if ($this->_tpl_vars['reservation']['Type']): ?>
                                        <li><b><?php echo $this->_tpl_vars['lang']['booking_escort_type']; ?>
:</b> <?php echo $this->_tpl_vars['reservation']['Type']; ?>
</li>
                                    <?php endif; ?>

                                    <?php if ($this->_tpl_vars['reservation']['Duration']): ?>
                                        <li><b><?php echo $this->_tpl_vars['lang']['booking_escort_duration']; ?>
:</b> <?php echo $this->_tpl_vars['reservation']['Duration']; ?>
</li>
                                    <?php endif; ?>
                                <?php endif; ?>

                                <li class="statuses">
                                    <b><?php echo $this->_tpl_vars['lang']['status']; ?>
:</b>
                                    <span class="<?php if ($this->_tpl_vars['reservation']['status'] == 'process'): ?>pending<?php elseif ($this->_tpl_vars['reservation']['status'] == 'refused'): ?>expired<?php else: ?>active<?php endif; ?>"><?php if ($this->_tpl_vars['reservation']['status'] == 'process'): ?><?php if ($this->_tpl_vars['reservation']['Book_status'] == 'new'): ?><?php echo $this->_tpl_vars['lang']['new']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['booking_request_read']; ?>
<?php endif; ?> (<?php endif; ?><?php if ($this->_tpl_vars['reservation']['status'] == 'process'): ?><?php echo $this->_tpl_vars['lang']['pending']; ?>
<?php elseif ($this->_tpl_vars['reservation']['status'] == 'booked'): ?><?php echo $this->_tpl_vars['lang']['booking_legend_booked']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['booking_refused']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['reservation']['status'] == 'process'): ?>)<?php endif; ?></span>

                                    <?php if ($this->_tpl_vars['reservation']['Comment']): ?>
                                        <img class="qtip" alt="" title="<?php echo $this->_tpl_vars['reservation']['Comment']; ?>
" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" />
                                    <?php endif; ?>
                                </li>
                            </ul>
                        </div>
                    </article>
                <?php endforeach; endif; unset($_from); ?>
            </section>

            <!-- paging block -->
            <?php echo $this->_plugins['function']['paging'][0][0]->paging(array('calc' => $this->_tpl_vars['pInfo']['calc'],'total' => count($this->_tpl_vars['reservations']),'current' => $this->_tpl_vars['pInfo']['current'],'per_page' => $this->_tpl_vars['config']['booking_reservations_per_page']), $this);?>

            <!-- paging block end -->

            <?php echo smarty_function_math(array('assign' => 'prev_page','equation' => 'current - 1','current' => $this->_tpl_vars['pInfo']['current']), $this);?>


            <?php if ($this->_tpl_vars['config']['mod_rewrite']): ?>
                <?php $this->assign('prev_page', ((is_array($_tmp=((is_array($_tmp='/index')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['prev_page']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['prev_page'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '.html') : smarty_modifier_cat($_tmp, '.html'))); ?>
            <?php else: ?>
                <?php $this->assign('prev_page', ((is_array($_tmp='&pg=')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['prev_page']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['prev_page']))); ?>
            <?php endif; ?>

            <script class="fl-js-dynamic">
            lang['booking_remove_notice']   = '<?php echo $this->_tpl_vars['lang']['booking_remove_notice']; ?>
';
            lang['booking_no_reservations'] = '<?php echo $this->_tpl_vars['lang']['booking_no_reservations']; ?>
';

            /* booking special configs */
            var bookingConfigs         = new Array();

                        <?php if (((is_array($_tmp=$this->_tpl_vars['config']['rl_version'])) ? $this->_run_mod_handler('version_compare', true, $_tmp, '4.6.2') : version_compare($_tmp, '4.6.2')) <= 0): ?>flynaxTpl.hisrc();<?php endif; ?>

            flynax.qtip();

            // redirect to prev page after remove all reservations in current page
            var prev_page = false;

            <?php if ($this->_tpl_vars['config']['mod_rewrite']): ?>
                <?php if ($this->_tpl_vars['pInfo']['current'] > 2): ?>
                    prev_page = '<?php echo ((is_array($_tmp=$this->_tpl_vars['booking_reservations_url'])) ? $this->_run_mod_handler('replace', true, $_tmp, ".html", $this->_tpl_vars['prev_page']) : smarty_modifier_replace($_tmp, ".html", $this->_tpl_vars['prev_page'])); ?>
';
                <?php else: ?>
                    prev_page = '<?php echo $this->_tpl_vars['booking_reservations_url']; ?>
';
                <?php endif; ?>
            <?php else: ?>
                <?php if ($this->_tpl_vars['pInfo']['current'] > 2): ?>
                    prev_page = '<?php echo ((is_array($_tmp=$this->_tpl_vars['booking_reservations_url'])) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['prev_page']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['prev_page'])); ?>
';
                <?php else: ?>
                    prev_page = '<?php echo $this->_tpl_vars['booking_reservations_url']; ?>
';
                <?php endif; ?>
            <?php endif; ?>

            booking.requestRemoveHandler(prev_page);
            </script>
        <?php else: ?>
            <div class="text-notice"><?php echo $this->_tpl_vars['lang']['booking_no_reservations']; ?>
</div>
        <?php endif; ?>
    </div>
<?php endif; ?>

<!-- booking reservations end -->