<?php /* Smarty version 2.6.31, created on 2023-12-18 02:05:00
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/add_listing/step_plan.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'buildFormAction', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/add_listing/step_plan.tpl', 3, false),array('function', 'buildPrevStepURL', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/add_listing/step_plan.tpl', 33, false),array('modifier', 'count', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/add_listing/step_plan.tpl', 19, false),array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/add_listing/step_plan.tpl', 22, false),)), $this); ?>
<!-- select plan step -->

<form method="post" action="<?php echo $this->_plugins['function']['buildFormAction'][0][0]->buildFormAction(array(), $this);?>
">
    <input type="hidden" name="step" value="plan" />
    <input type="hidden" name="from_post" value="1" />

    <?php $this->assign('subscription_exists', false); ?>
    <?php $this->assign('featured_exists', false); ?>

    <?php $_from = $this->_tpl_vars['plans']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['plan']):
?>
        <?php if ($this->_tpl_vars['plan']['Subscription'] && $this->_tpl_vars['plan']['Price'] > 0 && ! $this->_tpl_vars['plan']['Listings_remains']): ?>
            <?php $this->assign('subscription_exists', true); ?>
        <?php elseif ($this->_tpl_vars['plan']['Featured'] && $this->_tpl_vars['plan']['Price'] > 0 && ! $this->_tpl_vars['plan']['Listings_remains']): ?>
            <?php $this->assign('featured_exists', true); ?>
        <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>

    <div class="plans-container<?php if ($this->_tpl_vars['manageListing']->planType == 'account'): ?> membership-plans<?php endif; ?><?php if ($this->_tpl_vars['manageListing']->singleStep): ?> mCustomScrollbar<?php endif; ?>">
        <ul class="plans<?php if (count($this->_tpl_vars['plans']) > 5): ?> more-5<?php endif; ?><?php if ($this->_tpl_vars['subscription_exists']): ?> with-subscription<?php endif; ?><?php if ($this->_tpl_vars['featured_exists']): ?> with-featured<?php endif; ?>">
            <?php $_from = $this->_tpl_vars['plans']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['plansF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['plansF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['plan']):
        $this->_foreach['plansF']['iteration']++;
?><?php echo ''; ?><?php if ($this->_tpl_vars['manageListing']->planType == 'account'): ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'membership_plan.tpl') : smarty_modifier_cat($_tmp, 'membership_plan.tpl')), 'smarty_include_vars' => array('new_account' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'listing_plan.tpl') : smarty_modifier_cat($_tmp, 'listing_plan.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
<?php endforeach; endif; unset($_from); ?>
        </ul>
    </div>
    
    <?php if (! $this->_tpl_vars['manageListing']->singleStep): ?>
    <div class="form-buttons">
        <?php if (! $this->_tpl_vars['single_category_mode']): ?>
        <a href="<?php echo $this->_plugins['function']['buildPrevStepURL'][0][0]->buildPrevStepURL(array(), $this);?>
"><?php echo $this->_tpl_vars['lang']['perv_step']; ?>
</a>
        <?php endif; ?>
        <input type="submit" value="<?php echo $this->_tpl_vars['lang']['next_step']; ?>
" />
    </div>
    <?php endif; ?>
</form>

<script class="fl-js-dynamic">
$(function() <?php echo ' { '; ?>

    var plans = Array();

    <?php $_from = $this->_tpl_vars['plans']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['plan']):
?>
        plans[<?php echo $this->_tpl_vars['plan']['ID']; ?>
] = new Array();
        <?php if ($this->_tpl_vars['manageListing']->planType == 'listing'): ?>
            plans[<?php echo $this->_tpl_vars['plan']['ID']; ?>
]['Advanced_mode'] = <?php echo $this->_tpl_vars['plan']['Advanced_mode']; ?>
;
            plans[<?php echo $this->_tpl_vars['plan']['ID']; ?>
]['Package_ID'] = <?php if ($this->_tpl_vars['plan']['Package_ID']): ?><?php echo $this->_tpl_vars['plan']['Package_ID']; ?>
<?php else: ?>false<?php endif; ?>;
        <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>

    flynax.planClick(plans);
    flynax.qtip(); // Combine this
    flynaxTpl.qtip(); // and this one
<?php echo ' } '; ?>
);
</script>

<!-- select plan step end -->