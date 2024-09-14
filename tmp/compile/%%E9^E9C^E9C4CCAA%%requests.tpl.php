<?php /* Smarty version 2.6.31, created on 2024-01-06 19:21:25
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/smarty_blocks/requests.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'str2path', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/smarty_blocks/requests.tpl', 25, false),array('modifier', 'date_format', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/smarty_blocks/requests.tpl', 33, false),)), $this); ?>
<!-- booking requests -->

<?php if ($this->_tpl_vars['requests']): ?>
    <div class="list-table">
        <div class="header">
            <div class="center" style="width: 40px">#</div>
            <div><?php echo $this->_tpl_vars['lang']['listing']; ?>
</div>

            <?php if ($this->_tpl_vars['plugins']['ref']): ?>
                <div style="width: 90px"><?php echo $this->_tpl_vars['lang']['booking_ref_number']; ?>
</div>
            <?php endif; ?>

            <div style="width: 235px">
                <?php if ((defined('IS_ESCORT') ? @IS_ESCORT : null) === true): ?><?php echo $this->_tpl_vars['lang']['date']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['booking_period']; ?>
<?php endif; ?>
            </div>
            <div style="width: 195px"><?php echo $this->_tpl_vars['lang']['booking_author']; ?>
</div>
            <div style="width: 160px"><?php echo $this->_tpl_vars['lang']['status']; ?>
</div>
            <div style="width: 60px"><?php echo $this->_tpl_vars['lang']['actions']; ?>
</div>
        </div>

        <?php $_from = $this->_tpl_vars['requests']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rKey'] => $this->_tpl_vars['request']):
?>
            <div class="row" id="item_request_<?php echo $this->_tpl_vars['request']['ID']; ?>
">
                <div class="center iteration no-flex"><?php echo $this->_tpl_vars['request']['ID']; ?>
</div>
                <div data-caption="<?php echo $this->_tpl_vars['lang']['listing']; ?>
" class="content">
                    <a href="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pages']['booking_requests']; ?>
/<?php echo $this->_plugins['function']['str2path'][0][0]->str2path(array('string' => $this->_tpl_vars['request']['title']), $this);?>
-r<?php echo $this->_tpl_vars['rKey']; ?>
.html<?php else: ?>?page=<?php echo $this->_tpl_vars['pages']['booking_requests']; ?>
&id=<?php echo $this->_tpl_vars['rKey']; ?>
<?php endif; ?>" title="<?php echo $this->_tpl_vars['lang']['booking_page_details']; ?>
"><?php echo $this->_tpl_vars['request']['title']; ?>
</a>
                </div>

                <?php if ($this->_tpl_vars['plugins']['ref']): ?>
                    <div data-caption="<?php echo $this->_tpl_vars['lang']['listing']; ?>
"><?php if ($this->_tpl_vars['request']['ref_number']): ?><?php echo $this->_tpl_vars['request']['ref_number']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['not_available']; ?>
<?php endif; ?></div>
                <?php endif; ?>

                <div data-caption="<?php if ((defined('IS_ESCORT') ? @IS_ESCORT : null) === true): ?><?php echo $this->_tpl_vars['lang']['date']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['booking_period']; ?>
<?php endif; ?>">
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['request']['From'])) ? $this->_run_mod_handler('date_format', true, $_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)) : smarty_modifier_date_format($_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null))); ?>


                    <?php if ($this->_tpl_vars['request']['Booking_type'] == 'time_range' && $this->_tpl_vars['request']['Checkout']): ?>
                        - <?php echo $this->_tpl_vars['request']['Checkout']; ?>

                    <?php else: ?>
                        <?php if ($this->_tpl_vars['request']['To']): ?>
                            - <?php echo ((is_array($_tmp=$this->_tpl_vars['request']['To'])) ? $this->_run_mod_handler('date_format', true, $_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)) : smarty_modifier_date_format($_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null))); ?>

                        <?php endif; ?>
                    <?php endif; ?>
                </div>

                <div data-caption="<?php echo $this->_tpl_vars['lang']['booking_author']; ?>
"><?php echo $this->_tpl_vars['request']['Author']; ?>
</div>
                <div id="status_<?php echo $this->_tpl_vars['request']['ID']; ?>
" data-caption="<?php echo $this->_tpl_vars['lang']['status']; ?>
" class="statuses">
                    <span class="<?php if ($this->_tpl_vars['request']['status'] == 'process'): ?>pending<?php elseif ($this->_tpl_vars['request']['status'] == 'refused'): ?>expired<?php else: ?>active<?php endif; ?>"><?php if ($this->_tpl_vars['request']['status'] == 'process'): ?><?php if ($this->_tpl_vars['request']['Book_status'] == 'new'): ?><?php echo $this->_tpl_vars['lang']['new']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['booking_request_read']; ?>
<?php endif; ?> (<?php endif; ?><?php if ($this->_tpl_vars['request']['status'] == 'process'): ?><?php echo $this->_tpl_vars['lang']['pending']; ?>
<?php elseif ($this->_tpl_vars['request']['status'] == 'booked'): ?><?php echo $this->_tpl_vars['lang']['booking_legend_booked']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['booking_refused']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['request']['status'] == 'process'): ?>)<?php endif; ?>
                    </span>
                </div>
                <div data-caption="<?php echo $this->_tpl_vars['lang']['actions']; ?>
">
                    <img id="<?php echo $this->_tpl_vars['request']['ID']; ?>
" class="remove remove_request" alt="<?php echo $this->_tpl_vars['lang']['delete']; ?>
" title="<?php echo $this->_tpl_vars['lang']['delete']; ?>
" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" />
                </div>
            </div>
        <?php endforeach; endif; unset($_from); ?>
    </div>
<?php endif; ?>

<!-- booking requests end -->