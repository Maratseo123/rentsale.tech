<?php /* Smarty version 2.6.31, created on 2023-12-30 14:01:07
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/add_listing/step_checkout.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/add_listing/step_checkout.tpl', 17, false),array('function', 'rlHook', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/add_listing/step_checkout.tpl', 39, false),array('function', 'buildFormAction', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/add_listing/step_checkout.tpl', 44, false),array('function', 'gateways', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/add_listing/step_checkout.tpl', 47, false),array('function', 'buildPrevStepURL', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/add_listing/step_checkout.tpl', 50, false),)), $this); ?>
<!-- checkout step -->

<script>
<?php echo '

if (typeof window.paymentFailValidationCallback == \'undefined\') {
    window.paymentFailValidationCallback = new Array();
}

window.paymentFailValidationCallback.push(function(){
    manageListing.enableButton();
});

'; ?>

</script>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_header.tpl') : smarty_modifier_cat($_tmp, 'fieldset_header.tpl')), 'smarty_include_vars' => array('name' => $this->_tpl_vars['lang']['order_details'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="info-table">
    <div class="table-cell">
        <div class="name"><div><span><?php echo $this->_tpl_vars['lang']['listing']; ?>
</span></div></div>
        <div class="value"><?php echo $this->_tpl_vars['listing_title']; ?>
</div>
    </div>

    <div class="table-cell">
        <div class="name"><div><span><?php echo $this->_tpl_vars['lang']['plan']; ?>
</span></div></div>
        <div class="value"><?php echo $this->_tpl_vars['plan_info']['name']; ?>
</div>
    </div>

    <div class="table-cell">
        <div class="name"><div><span><?php echo $this->_tpl_vars['lang']['price']; ?>
</span></div></div>
        <div class="value">
            <?php if ($this->_tpl_vars['config']['system_currency_position'] == 'before'): ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?>
            <?php echo $this->_tpl_vars['plan_info']['Price']; ?>

            <?php if ($this->_tpl_vars['config']['system_currency_position'] == 'after'): ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?>
        </div>
    </div>

    <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'checkoutStepAfterOrderInfo'), $this);?>

</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_footer.tpl') : smarty_modifier_cat($_tmp, 'fieldset_footer.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form id="form-checkout" method="post" action="<?php echo $this->_plugins['function']['buildFormAction'][0][0]->buildFormAction(array(), $this);?>
">
    <input type="hidden" name="step" value="checkout" />

    <?php echo $this->_plugins['function']['gateways'][0][0]->gateways(array(), $this);?>


    <div class="form-buttons form">
        <a href="<?php echo $this->_plugins['function']['buildPrevStepURL'][0][0]->buildPrevStepURL(array('show_extended' => $this->_tpl_vars['manageListing']->singleStep), $this);?>
"><?php echo $this->_tpl_vars['lang']['perv_step']; ?>
</a>
        <input type="submit" value="<?php echo $this->_tpl_vars['lang']['next_step']; ?>
" data-default-phrase="<?php echo $this->_tpl_vars['lang']['next_step']; ?>
" />
    </div>
</form>

<!-- checkout step -->