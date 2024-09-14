<?php /* Smarty version 2.6.31, created on 2023-12-22 19:25:54
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/plugins/affiliate/general_stats.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/affiliate/general_stats.tpl', 9, false),array('modifier', 'trim', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/affiliate/general_stats.tpl', 9, false),array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/affiliate/general_stats.tpl', 94, false),array('modifier', 'regex_replace', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/affiliate/general_stats.tpl', 99, false),)), $this); ?>
<!-- my affiliates page tpl -->

<div class="content-padding">
    <?php if ($this->_tpl_vars['isLogin']): ?>
        <div class="affiliate-stats">
            <?php if ($this->_tpl_vars['config']['aff_html_in_link']): ?>
                <div class="submit-cell"><?php echo $this->_tpl_vars['lang']['aff_your_referral_link']; ?>
:</div>
                <div class="aff-referral-link two-inline">
                    <div><input type="button" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['select'])) ? $this->_run_mod_handler('replace', true, $_tmp, '-', '') : smarty_modifier_replace($_tmp, '-', '')))) ? $this->_run_mod_handler('trim', true, $_tmp) : trim($_tmp)); ?>
" /></div>
                    <div>
                        <input type="text" value='<a title="<?php echo $this->_tpl_vars['lang']['aff_by_product']; ?>
" href="<?php echo (defined('RL_URL_HOME') ? @RL_URL_HOME : null); ?>
?aff=<?php echo $this->_tpl_vars['account_info']['ID']; ?>
"><?php echo $this->_tpl_vars['lang']['aff_by_product']; ?>
</a>' />
                    </div>
                </div>
            <?php else: ?>
                <div class="submit-cell">
                    <?php echo $this->_tpl_vars['lang']['aff_your_referral_link']; ?>
:
                    <a class="aff-referral-link" href="javascript://"><?php echo (defined('RL_URL_HOME') ? @RL_URL_HOME : null); ?>
?aff=<?php echo $this->_tpl_vars['account_info']['ID']; ?>
</a>
                </div>
            <?php endif; ?>

            <div class="row current-stats">
                <h3 class="col-md-12"><?php echo $this->_tpl_vars['lang']['aff_current_statistics']; ?>
</h3>

                <div class="col-sm-5">
                    <div class="table-cell small">
                        <div class="name"><?php echo $this->_tpl_vars['lang']['aff_cur_count_visitors']; ?>
</div>
                        <div class="value"><span><?php echo $this->_tpl_vars['stats']['Current']['Visitors']; ?>
</span></div>
                    </div>
                    <div class="table-cell small">
                        <div class="name"><?php echo $this->_tpl_vars['lang']['aff_cur_count_unique_visitors']; ?>
</div>
                        <div class="value"><span><?php echo $this->_tpl_vars['stats']['Current']['Unique_visitors']; ?>
</span></div>
                    </div>
                    <div class="table-cell small">
                        <div class="name"><?php echo $this->_tpl_vars['lang']['aff_cur_count_registered']; ?>
</div>
                        <div class="value"><span><?php echo $this->_tpl_vars['stats']['Current']['Registered']; ?>
</span></div>
                    </div>
                    <div class="table-cell small">
                        <div class="name"><?php echo $this->_tpl_vars['lang']['aff_cur_count_transactions']; ?>
</div>
                        <div class="value"><span><?php echo $this->_tpl_vars['stats']['Current']['Transactions']; ?>
</span></div>
                    </div>
                    <div class="table-cell small">
                        <div class="name"><?php echo $this->_tpl_vars['lang']['aff_cur_pending_earnings']; ?>
</div>
                        <div class="value"><span><?php echo $this->_tpl_vars['stats']['Current']['Pending_earnings']; ?>
</span></div>
                    </div>
                    <div class="table-cell small">
                        <div class="name"><?php echo $this->_tpl_vars['lang']['aff_cur_available_earnings']; ?>
</div>
                        <div class="value"><span><?php echo $this->_tpl_vars['stats']['Current']['Available_earnings']; ?>
</span></div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <?php if ($this->_tpl_vars['stats']['Current']['Unique_visitors'] || $this->_tpl_vars['stats']['Current']['Transactions']): ?>
                        <canvas id="current_stats" width="150" height="150">
                            Your browser doesn't support HTML5.
                        </canvas>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row total-stats">
                <h3 class="col-md-12"><?php echo $this->_tpl_vars['lang']['aff_general_statistics']; ?>
</h3>

                <div class="col-sm-5">
                    <div class="table-cell small">
                        <div class="name"><?php echo $this->_tpl_vars['lang']['aff_gen_count_visitors']; ?>
</div>
                        <div class="value"><span><?php echo $this->_tpl_vars['stats']['Total']['Visitors']; ?>
</span></div>
                    </div>
                    <div class="table-cell small">
                        <div class="name"><?php echo $this->_tpl_vars['lang']['aff_gen_count_unique_visitors']; ?>
</div>
                        <div class="value"><span><?php echo $this->_tpl_vars['stats']['Total']['Unique_visitors']; ?>
</span></div>
                    </div>
                    <div class="table-cell small">
                        <div class="name"><?php echo $this->_tpl_vars['lang']['aff_gen_count_registered']; ?>
</div>
                        <div class="value"><span><?php echo $this->_tpl_vars['stats']['Total']['Registered']; ?>
</span></div>
                    </div>
                    <div class="table-cell small">
                        <div class="name"><?php echo $this->_tpl_vars['lang']['aff_gen_count_transactions']; ?>
</div>
                        <div class="value"><span><?php echo $this->_tpl_vars['stats']['Total']['Transactions']; ?>
</span></div>
                    </div>
                    <div class="table-cell small">
                        <div class="name"><?php echo $this->_tpl_vars['lang']['aff_gen_earnings']; ?>
</div>
                        <div class="value"><span><?php echo $this->_tpl_vars['stats']['Total']['Earnings']; ?>
</span></div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <?php if ($this->_tpl_vars['stats']['Total']['Unique_visitors'] || $this->_tpl_vars['stats']['Total']['Transactions']): ?>
                        <canvas id="total_stats" width="150" height="150">
                            Your browser doesn't support HTML5.
                        </canvas>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <?php $this->assign('replace', ((is_array($_tmp=((is_array($_tmp='<a href="')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['my_profile_url']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['my_profile_url'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '">$1</a>') : smarty_modifier_cat($_tmp, '">$1</a>'))); ?>

        <script class="fl-js-dynamic">
        lang.aff_copy                  = '<?php echo $this->_tpl_vars['lang']['aff_copy']; ?>
';
        lang.aff_referral_link_coppied = '<?php echo $this->_tpl_vars['lang']['aff_referral_link_coppied']; ?>
';
        lang.aff_billing_details_empty = '<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['aff_billing_details_empty'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, "/\[(.*)\]/", $this->_tpl_vars['replace']) : smarty_modifier_regex_replace($_tmp, "/\[(.*)\]/", $this->_tpl_vars['replace'])); ?>
';
        var current_stats_data         = '';
        var total_stats                = '';
        var aff_html_in_link           = <?php if ($this->_tpl_vars['config']['aff_html_in_link']): ?>true<?php else: ?>false<?php endif; ?>;

        // current statistics
        <?php if ($this->_tpl_vars['stats']['Current']['Unique_visitors'] || $this->_tpl_vars['stats']['Current']['Transactions'] || $this->_tpl_vars['stats']['Current']['Registered']): ?>
            current_stats_data = [<?php echo $this->_tpl_vars['stats']['Current']['Unique_visitors']; ?>
, <?php echo $this->_tpl_vars['stats']['Current']['Transactions']; ?>
, <?php echo $this->_tpl_vars['stats']['Current']['Registered']; ?>
];
            var current_label = ['<?php echo $this->_tpl_vars['lang']['aff_cur_count_visitors']; ?>
', '<?php echo $this->_tpl_vars['lang']['aff_cur_count_transactions']; ?>
', '<?php echo $this->_tpl_vars['lang']['aff_cur_count_registered']; ?>
'];
        <?php endif; ?>

        // total statistics
        <?php if ($this->_tpl_vars['stats']['Total']['Unique_visitors'] || $this->_tpl_vars['stats']['Total']['Transactions'] || $this->_tpl_vars['stats']['Total']['Registered']): ?>
            total_stats = [<?php echo $this->_tpl_vars['stats']['Total']['Unique_visitors']; ?>
, <?php echo $this->_tpl_vars['stats']['Total']['Transactions']; ?>
, <?php echo $this->_tpl_vars['stats']['Total']['Registered']; ?>
];
            var total_label = ['<?php echo $this->_tpl_vars['lang']['aff_gen_count_visitors']; ?>
', '<?php echo $this->_tpl_vars['lang']['aff_gen_count_transactions']; ?>
', '<?php echo $this->_tpl_vars['lang']['aff_gen_count_registered']; ?>
'];
        <?php endif; ?>

        <?php echo '
        $(function() {
            if (aff_html_in_link) {
                $(\'div.aff-referral-link [type=button]\').click(function() {
                    copyTextToClipboard($(\'div.aff-referral-link [type=text]\').val());
                });
            } else {
                $(\'a.aff-referral-link\').click(function() {
                    copyTextToClipboard($(this).text());
                });
            }

            function copyTextToClipboard(text) {
                if (!text) {
                    return false;
                }

                var $textarea   = document.createElement(\'textarea\');
                $textarea.value = text;
                $textarea.type  = \'hidden\';
                document.body.appendChild($textarea);
                $textarea.select();
                document.execCommand(\'copy\');
                printMessage(\'notice\', lang.aff_referral_link_coppied);
                document.body.removeChild($textarea);
            }

            // draw chart for current stats
            if (current_stats_data) {
                affiliateJS.buildChart(\'current_stats\', current_stats_data, current_label);
            }

            // draw chart for total stats
            if (total_stats) {
                setTimeout(function(){
                    affiliateJS.buildChart(\'total_stats\', total_stats, total_label);
                }, 500);
            }

            // show warning if Billing Details is missing
            '; ?>
<?php if (! $this->_tpl_vars['account_info']['Aff_billing_details']): ?>
                printMessage('warning', lang.aff_billing_details_empty);
            <?php endif; ?><?php echo '
        });
        '; ?>

        </script>
    <?php else: ?>
        <?php echo $this->_tpl_vars['lang']['notice_should_login']; ?>

    <?php endif; ?>
</div>

<!-- my affiliates page tpl end -->