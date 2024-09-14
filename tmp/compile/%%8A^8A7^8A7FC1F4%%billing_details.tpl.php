<?php /* Smarty version 2.6.31, created on 2024-05-02 01:32:26
         compiled from /var/www/u2273289/data/www/rentsale.tech/plugins//affiliate/billing_details.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/plugins//affiliate/billing_details.tpl', 9, false),)), $this); ?>
<!-- Billing details tpl -->

<?php if ($this->_tpl_vars['isLogin'] && $this->_tpl_vars['account_info']['Type'] == 'affiliate' && ( $this->_tpl_vars['config']['aff_paypal'] || $this->_tpl_vars['config']['aff_western_union'] || $this->_tpl_vars['config']['aff_bank_wire'] )): ?>
    <?php $this->assign('paypal_name', 'payment_gateways+name+paypal'); ?>
    <?php $this->assign('affPost', $_POST['aff_billing_details']); ?>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_header.tpl') : smarty_modifier_cat($_tmp, 'fieldset_header.tpl')), 'smarty_include_vars' => array('id' => 'aff_billing_area','name' => $this->_tpl_vars['lang']['aff_billing_area'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <div class="submit-cell billing_type">
        <div class="name"><?php echo $this->_tpl_vars['lang']['aff_billing_type']; ?>
</div>
        <div class="field inline-fields">
            <?php if ($this->_tpl_vars['config']['aff_paypal']): ?>
                <span class="custom-input">
                    <label>
                        <input type="radio" 
                            value="paypal" 
                            name="aff_billing_details[type]" 
                            <?php if ($this->_tpl_vars['affPost']['type'] == 'paypal'): ?>checked="checked"<?php endif; ?>/>
                        <?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['paypal_name']]; ?>

                    </label>
                </span>
            <?php endif; ?>

            <?php if ($this->_tpl_vars['config']['aff_western_union']): ?>
                <span class="custom-input">
                    <label>
                        <input type="radio" 
                            value="western_union" 
                            name="aff_billing_details[type]" 
                            <?php if ($this->_tpl_vars['affPost']['type'] == 'western_union'): ?>checked="checked"<?php endif; ?>/>
                        <?php echo $this->_tpl_vars['lang']['aff_western_union']; ?>

                    </label>
                </span>
            <?php endif; ?>

            <?php if ($this->_tpl_vars['config']['aff_bank_wire']): ?>
                <span class="custom-input">
                    <label>
                        <input type="radio" 
                            value="bank_wire" 
                            name="aff_billing_details[type]" 
                            <?php if ($this->_tpl_vars['affPost']['type'] == 'bank_wire'): ?>checked="checked"<?php endif; ?>/>
                        <?php echo $this->_tpl_vars['lang']['aff_bank_wire']; ?>

                    </label>
                </span>
            <?php endif; ?>
        </div>
    </div>

    <?php if ($this->_tpl_vars['config']['aff_paypal']): ?>
        <div class="submit-cell paypal <?php if ($this->_tpl_vars['affPost']['type'] != 'paypal'): ?>hide<?php endif; ?>">
            <div class="name"><?php echo $this->_tpl_vars['lang']['aff_paypal_email']; ?>
</div>
            <div class="field single-field">
                <input type="text" 
                    value="<?php echo $this->_tpl_vars['affPost']['paypal_email']; ?>
" 
                    placeholder="<?php echo $this->_tpl_vars['lang']['mail']; ?>
" 
                    name="aff_billing_details[paypal_email]"/>
            </div>
        </div>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['config']['aff_western_union']): ?>
        <div class="submit-cell western_union <?php if ($this->_tpl_vars['affPost']['type'] != 'western_union'): ?>hide<?php endif; ?>">
            <div class="name"><?php echo $this->_tpl_vars['lang']['aff_wu_country']; ?>
</div>
            <div class="field single-field">
                <input type="text" 
                    value="<?php echo $this->_tpl_vars['affPost']['wu_country']; ?>
" 
                    placeholder="<?php echo $this->_tpl_vars['lang']['aff_wu_country']; ?>
" 
                    name="aff_billing_details[wu_country]"/>
            </div>
        </div>

        <div class="submit-cell western_union <?php if ($this->_tpl_vars['affPost']['type'] != 'western_union'): ?>hide<?php endif; ?>">
            <div class="name"><?php echo $this->_tpl_vars['lang']['aff_wu_city']; ?>
</div>
            <div class="field single-field">
                <input type="text" 
                    value="<?php echo $this->_tpl_vars['affPost']['wu_city']; ?>
" 
                    placeholder="<?php echo $this->_tpl_vars['lang']['aff_wu_city']; ?>
" 
                    name="aff_billing_details[wu_city]"/>
            </div>
        </div>

        <div class="submit-cell western_union <?php if ($this->_tpl_vars['affPost']['type'] != 'western_union'): ?>hide<?php endif; ?>">
            <div class="name"><?php echo $this->_tpl_vars['lang']['aff_wu_fullname']; ?>
</div>
            <div class="field single-field">
                <input type="text" 
                    value="<?php echo $this->_tpl_vars['affPost']['wu_fullname']; ?>
" 
                    placeholder="<?php echo $this->_tpl_vars['lang']['aff_wu_fullname']; ?>
" 
                    name="aff_billing_details[wu_fullname]"/>
            </div>
        </div>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['config']['aff_bank_wire']): ?>
        <div class="submit-cell bank_wire <?php if ($this->_tpl_vars['affPost']['type'] != 'bank_wire'): ?>hide<?php endif; ?>">
            <div class="name"><?php echo $this->_tpl_vars['lang']['aff_bank_wire_details']; ?>
</div>
            <div class="field single-field">
                <textarea rows="5" 
                    cols="" 
                    name="aff_billing_details[bank_wire_details]"><?php echo $this->_tpl_vars['affPost']['bank_wire_details']; ?>
</textarea>
            </div>
        </div>
    <?php endif; ?>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_footer.tpl') : smarty_modifier_cat($_tmp, 'fieldset_footer.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <script class="fl-js-dynamic"><?php echo '
    $(\'#profile_submit\').closest(\'.submit-cell\').before($(\'#fs_aff_billing_area\'));

    $(function(){
        $(\'[name="aff_billing_details[type]"]\').change(function(){
            var type = $(this).attr(\'value\');

            if (type) {
                $(\'#fs_aff_billing_area .submit-cell.\' + type).fadeIn();
                $(\'#fs_aff_billing_area .submit-cell:not(.\' + type + \'):not(.billing_type)\').hide();
            }
        });
    });
    '; ?>
</script>
<?php endif; ?>

<!-- Billing details tpl end -->