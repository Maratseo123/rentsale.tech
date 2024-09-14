<?php /* Smarty version 2.6.31, created on 2024-05-02 01:23:40
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/controllers/add_listing/step_form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'addJS', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/controllers/add_listing/step_form.tpl', 3, false),array('function', 'buildFormAction', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/controllers/add_listing/step_form.tpl', 8, false),array('function', 'rlHook', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/controllers/add_listing/step_form.tpl', 23, false),array('function', 'buildPrevStepURL', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/controllers/add_listing/step_form.tpl', 105, false),array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/controllers/add_listing/step_form.tpl', 3, false),)), $this); ?>
<!-- fill in form step -->

<?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=(defined('RL_LIBS_URL') ? @RL_LIBS_URL : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'ckeditor/ckeditor.js') : smarty_modifier_cat($_tmp, 'ckeditor/ckeditor.js'))), $this);?>

<?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=$this->_tpl_vars['rlTplBase'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'js/form.js') : smarty_modifier_cat($_tmp, 'js/form.js'))), $this);?>


<script>window.textarea_fields = new Array();</script>

<form id="listing_form" enctype="multipart/form-data" method="post" action="<?php echo $this->_plugins['function']['buildFormAction'][0][0]->buildFormAction(array('show_extended' => $this->_tpl_vars['manageListing']->singleStep), $this);?>
">
    <input type="hidden" name="step" value="form" />
    <input type="hidden" name="from_post" value="1" />

    <?php if ($this->_tpl_vars['plan_info']['Cross'] && ! $this->_tpl_vars['manageListing']->singleStep && ! $this->_tpl_vars['single_category_mode']): ?>
        <div class="content-padding">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_header.tpl') : smarty_modifier_cat($_tmp, 'fieldset_header.tpl')), 'smarty_include_vars' => array('id' => 'crossed_categories_group','name' => $this->_tpl_vars['lang']['crossed_categories'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['componentDir'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'crossed-category') : smarty_modifier_cat($_tmp, 'crossed-category')))) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, '_crossed-category.tpl') : smarty_modifier_cat($_tmp, '_crossed-category.tpl')), 'smarty_include_vars' => array('selected_type' => $this->_tpl_vars['manageListing']->listingType['Key'],'selected_category_id' => $this->_tpl_vars['manageListing']->category['ID'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_footer.tpl') : smarty_modifier_cat($_tmp, 'fieldset_footer.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div>
    <?php endif; ?>

    <div class="content-padding">
        <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'addListingPreFields'), $this);?>


        <?php if (! $this->_tpl_vars['manageListing']->singleStep && $this->_tpl_vars['manageListing']->planType == 'account' && $this->_tpl_vars['plan_info']['Advanced_mode']): ?>
        <div class="submit-cell clearfix">
            <div class="name">
                <?php echo $this->_tpl_vars['lang']['listing_type']; ?>

            </div>

            <div class="field checkbox-field" id="sf_field_fetured">
                <div class="row">
                    <span class="custom-input col-xs-12 col-sm-6 col-md-4">
                        <label title="<?php echo $this->_tpl_vars['lang']['standard']; ?>
">
                            <?php if ($this->_tpl_vars['plan_info']['Standard_listings'] == 0): ?>
                                <input type="radio" value="standard" name="ad_type" <?php if ($_POST['ad_type'] == 'standard' || ( ! isset ( $_POST['ad_type'] ) && $this->_tpl_vars['account_info']['plan']['Featured_remains'] <= 0 && $this->_tpl_vars['plan_info']['Featured_listings'] > 0 )): ?>checked="checked"<?php endif; ?> /> <?php echo $this->_tpl_vars['lang']['standard']; ?>

                            <?php else: ?>
                                <?php if (( $_POST['ad_type'] == 'standard' || ! isset ( $_POST['ad_type'] ) ) && $this->_tpl_vars['plan_info']['Standard_listings'] > 0 && ( ! isset ( $this->_tpl_vars['account_info']['plan']['Standard_remains'] ) || ( isset ( $this->_tpl_vars['account_info']['plan']['Standard_remains'] ) && $this->_tpl_vars['account_info']['plan']['Standard_remains'] > 0 ) )): ?>
                                    <?php $this->assign('standard_checked', true); ?>
                                <?php endif; ?>
                                <input type="radio" value="standard" name="ad_type" <?php if ($this->_tpl_vars['standard_checked']): ?>checked="checked"<?php endif; ?> <?php if ($this->_tpl_vars['plan_info']['Standard_listings'] <= 0 || ( isset ( $this->_tpl_vars['account_info']['plan']['Standard_remains'] ) && $this->_tpl_vars['account_info']['plan']['Standard_remains'] <= 0 )): ?>disabled="disabled"<?php endif; ?> />
                                <?php echo $this->_tpl_vars['lang']['standard']; ?>
 (<?php if ($this->_tpl_vars['plan_using']): ?><?php echo $this->_tpl_vars['plan_using']['Standard_remains']; ?>
<?php else: ?><?php echo $this->_tpl_vars['plan_info']['Standard_listings']; ?>
<?php endif; ?>)
                            <?php endif; ?>
                        </label>
                    </span>
                    <span class="custom-input col-xs-12 col-sm-6 col-md-4">
                        <label title="<?php echo $this->_tpl_vars['lang']['featured']; ?>
">
                            <?php if ($this->_tpl_vars['plan_info']['Featured_listings'] == 0): ?>
                                <input type="radio" value="featured" name="ad_type" <?php if ($_POST['ad_type'] == 'featured' || ( ! isset ( $_POST['ad_type'] ) && $this->_tpl_vars['account_info']['plan']['Standard_remains'] <= 0 && $this->_tpl_vars['plan_info']['Standard_listings'] > 0 )): ?>checked="checked"<?php endif; ?> /> <?php echo $this->_tpl_vars['lang']['featured']; ?>

                            <?php else: ?>
                                <?php if (( $_POST['ad_type'] == 'featured' || ( ! isset ( $_POST['ad_type'] ) && $this->_tpl_vars['account_info']['plan']['Standard_remains'] <= 0 ) ) && $this->_tpl_vars['plan_info']['Featured_listings'] > 0 && ( ! isset ( $this->_tpl_vars['account_info']['plan']['Featured_remains'] ) || ( isset ( $this->_tpl_vars['account_info']['plan']['Featured_remains'] ) && $this->_tpl_vars['account_info']['plan']['Featured_remains'] > 0 ) ) && ! $this->_tpl_vars['standard_checked']): ?>
                                    <?php $this->assign('featured_checked', true); ?>
                                <?php endif; ?>
                                <input type="radio" value="featured" name="ad_type" <?php if ($this->_tpl_vars['featured_checked']): ?>checked="checked"<?php endif; ?> <?php if ($this->_tpl_vars['plan_info']['Featured_listings'] <= 0 || ( isset ( $this->_tpl_vars['account_info']['plan']['Featured_remains'] ) && $this->_tpl_vars['account_info']['plan']['Featured_remains'] <= 0 )): ?>disabled="disabled"<?php endif; ?> />
                                <?php echo $this->_tpl_vars['lang']['featured']; ?>
 (<?php if ($this->_tpl_vars['plan_using']): ?><?php echo $this->_tpl_vars['plan_using']['Featured_remains']; ?>
<?php else: ?><?php echo $this->_tpl_vars['plan_info']['Featured_listings']; ?>
<?php endif; ?>)
                            <?php endif; ?>
                        </label>
                    </span>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php $_from = $this->_tpl_vars['form']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['group']):
?>
        <?php if ($this->_tpl_vars['group']['Group_ID']): ?>
            <?php if ($this->_tpl_vars['group']['Fields'] && $this->_tpl_vars['group']['Display']): ?>
                <?php $this->assign('hide', false); ?>
            <?php else: ?>
                <?php $this->assign('hide', true); ?>
            <?php endif; ?>

            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_header.tpl') : smarty_modifier_cat($_tmp, 'fieldset_header.tpl')), 'smarty_include_vars' => array('id' => $this->_tpl_vars['group']['Key'],'name' => $this->_tpl_vars['lang'][$this->_tpl_vars['group']['pName']])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php if ($this->_tpl_vars['group']['Fields']): ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'field.tpl') : smarty_modifier_cat($_tmp, 'field.tpl')), 'smarty_include_vars' => array('fields' => $this->_tpl_vars['group']['Fields'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php else: ?>
                <?php echo $this->_tpl_vars['lang']['no_items_in_group']; ?>

            <?php endif; ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_footer.tpl') : smarty_modifier_cat($_tmp, 'fieldset_footer.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php else: ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'field.tpl') : smarty_modifier_cat($_tmp, 'field.tpl')), 'smarty_include_vars' => array('fields' => $this->_tpl_vars['group']['Fields'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
    </div>

    <!-- login/sing up form -->
    <?php if (! $this->_tpl_vars['manageListing']->singleStep && ! $this->_tpl_vars['isLogin']): ?>
        <div class="submit-cell">
            <div class="name"><div class="content-padding"><?php echo $this->_tpl_vars['lang']['authorization']; ?>
</div></div>
            <div class="field light-inputs">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['controllerDir'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'add_listing') : smarty_modifier_cat($_tmp, 'add_listing')))) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'auth_form.tpl') : smarty_modifier_cat($_tmp, 'auth_form.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </div>
        </div>
    <?php endif; ?>
    <!-- login/sing up form end -->

    <?php if ($this->_tpl_vars['config']['security_img_add_listing'] && $this->_tpl_vars['manageListing']->controller == 'add_listing'): ?>
    <div class="submit-cell">
        <div class="name"><?php echo $this->_tpl_vars['lang']['security_code']; ?>
</div>
        <div class="field"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'captcha.tpl', 'smarty_include_vars' => array('no_caption' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
    </div>
    <?php endif; ?>

    <?php if (! $this->_tpl_vars['manageListing']->singleStep): ?>
        <span class="form-buttons form">
            <a href="<?php echo $this->_plugins['function']['buildPrevStepURL'][0][0]->buildPrevStepURL(array(), $this);?>
"><?php echo $this->_tpl_vars['lang']['perv_step']; ?>
</a>
            <input type="submit" value="<?php echo $this->_tpl_vars['lang']['next_step']; ?>
" />
        </span>
    <?php endif; ?>

    <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'tplStepFormAfterForm'), $this);?>

</form>

<script class="fl-js-dynamic">
<?php echo '

$(function(){
    flForm.auth();
    flForm.typeQTip();
    flForm.fields();
    flForm.accountFieldSimulation();
    flForm.fileFieldAction();
    flForm.realtyPropType();

    // TODO
    flynaxTpl.locationHandler();
    flynax.qtip();
    hashTabs();
});

'; ?>

</script>

<!-- fill in form step end -->