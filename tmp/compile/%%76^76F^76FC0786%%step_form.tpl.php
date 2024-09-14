<?php /* Smarty version 2.6.31, created on 2024-05-02 01:31:13
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/controllers/edit_listing/step_form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'addJS', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/controllers/edit_listing/step_form.tpl', 3, false),array('function', 'rlHook', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/controllers/edit_listing/step_form.tpl', 5, false),array('function', 'phrase', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/controllers/edit_listing/step_form.tpl', 31, false),array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/controllers/edit_listing/step_form.tpl', 3, false),array('modifier', 'count', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/controllers/edit_listing/step_form.tpl', 23, false),array('modifier', 'json_encode', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/controllers/edit_listing/step_form.tpl', 146, false),)), $this); ?>
<!-- step form -->

<?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=$this->_tpl_vars['rlTplBase'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'js/util_data.js') : smarty_modifier_cat($_tmp, 'js/util_data.js'))), $this);?>


<?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'editListingTopTpl'), $this);?>


<div id="category_container" class="content-padding selected">
    <?php if (! $this->_tpl_vars['allowed_types']): ?>
        <?php echo $this->_tpl_vars['lang']['add_listing_deny']; ?>

    <?php else: ?>
        <div class="category-selection">
            <div class="text-notice"><?php echo $this->_tpl_vars['lang']['add_listing_notice']; ?>
</div>

            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['componentDir'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'category-selector') : smarty_modifier_cat($_tmp, 'category-selector')))) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, '_category-selector.tpl') : smarty_modifier_cat($_tmp, '_category-selector.tpl')), 'smarty_include_vars' => array('dropdown_data' => $this->_tpl_vars['allowed_types'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

            <div class="form-buttons">
                <a id="next_step" href="javascript:void(0)" class="button disabled" data-default-value="<?php echo $this->_tpl_vars['lang']['select_category']; ?>
">
                    <?php echo $this->_tpl_vars['lang']['select_category']; ?>

                </a>
            </div>
        </div>

        <div class="dynamic-content<?php if (count($this->_tpl_vars['plans']) == 1 && $this->_tpl_vars['manageListing']->planID): ?> single-plan<?php endif; ?>">
            <?php if (! $this->_tpl_vars['single_category_mode']): ?>
            <div class="selected-category submit-cell">
                <div class="name"><?php echo $this->_tpl_vars['lang']['category']; ?>
</div>
                <div class="field checkbox-field">
                    <span class="link">
                        <?php if ($this->_tpl_vars['parent_names']): ?>
                            <?php $_from = $this->_tpl_vars['parent_names']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['parent_name']):
?>
                                <?php echo $this->_plugins['function']['phrase'][0][0]->getPhrase(array('key' => ((is_array($_tmp='categories+name+')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['parent_name']['Key']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['parent_name']['Key']))), $this);?>
 /
                            <?php endforeach; endif; unset($_from); ?>
                        <?php endif; ?>
                        <?php echo $this->_tpl_vars['manageListing']->category['name']; ?>

                    </span>
                </div>
            </div>
            <?php endif; ?>

            <div class="selected-plan submit-cell">
                <div class="name"><?php echo $this->_tpl_vars['lang']['plan']; ?>
 <span class="red">&nbsp;*</span></div>
                <div class="field single-field">
                    <select form="listing_form" name="plan">
                        <option value="0"><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
                        <?php if ($this->_tpl_vars['plans']): ?>
                            <?php $_from = $this->_tpl_vars['plans']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['plan']):
?>
                                <option
                                    value="<?php echo $this->_tpl_vars['plan']['ID']; ?>
"
                                    <?php if (isset ( $this->_tpl_vars['plan']['Listings_remains'] )): ?>
                                    data-available="true"
                                    <?php endif; ?>
                                    <?php if ($this->_tpl_vars['manageListing']->planID == $this->_tpl_vars['plan']['ID']): ?>
                                        selected="selected"
                                    <?php endif; ?>
                                    <?php if ($this->_tpl_vars['plan']['plan_disabled'] && $this->_tpl_vars['manageListing']->planID != $this->_tpl_vars['plan']['ID']): ?>
                                        disabled="disabled"
                                    <?php endif; ?>>

                                    <?php echo $this->_tpl_vars['plan']['name']; ?>
 (<?php echo ''; ?><?php if (! $this->_tpl_vars['plan']['Advanced_mode'] && $this->_tpl_vars['item_disabled']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['lang']['used_up']; ?><?php echo ''; ?><?php elseif (isset ( $this->_tpl_vars['plan']['Listings_remains'] )): ?><?php echo ''; ?><?php echo $this->_tpl_vars['lang']['available']; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php if ($this->_tpl_vars['plan']['Price'] == 0): ?><?php echo ''; ?><?php echo $this->_tpl_vars['lang']['free']; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php if ($this->_tpl_vars['config']['system_currency_position'] == 'before'): ?><?php echo ''; ?><?php echo $this->_tpl_vars['config']['system_currency']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php echo $this->_tpl_vars['plan']['Price']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['config']['system_currency_position'] == 'after'): ?><?php echo ''; ?><?php echo $this->_tpl_vars['config']['system_currency']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
)
                                </option>
                            <?php endforeach; endif; unset($_from); ?>
                        <?php endif; ?>
                    </select>

                    <span class="plans-chart-link link"><?php echo $this->_tpl_vars['lang']['view_plans_chart']; ?>
</span>
                </div>
            </div>

            <div class="listing-form">
                <?php if (! $this->_tpl_vars['single_category_mode']): ?>
                <div class="form-crossed disabled">
                    <div class="submit-cell">
                        <div class="name"><div class="content-padding"><?php echo $this->_tpl_vars['lang']['crossed_categories']; ?>
</div></div>
                        <div class="field">
                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['componentDir'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'crossed-category') : smarty_modifier_cat($_tmp, 'crossed-category')))) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, '_crossed-category.tpl') : smarty_modifier_cat($_tmp, '_crossed-category.tpl')), 'smarty_include_vars' => array('crossed_types' => $this->_tpl_vars['allowed_types'],'append_to' => 'listing_form','selected_type' => $this->_tpl_vars['manageListing']->listingType['Key'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <div class="form-fields">
                    <?php if ($this->_tpl_vars['form']): ?>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['controllerDir'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'add_listing') : smarty_modifier_cat($_tmp, 'add_listing')))) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'step_form.tpl') : smarty_modifier_cat($_tmp, 'step_form.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php else: ?>
                        No form data available
                    <?php endif; ?>
                </div>

                <div class="form-media">
                    <div class="submit-cell">
                        <div class="name">
                            <div class="content-padding">
                                <?php $this->assign('mediaRequired', false); ?>
                                <?php if ($this->_tpl_vars['manageListing']->listingType && $this->_tpl_vars['manageListing']->listingType['Photo_required'] === '1'): ?>
                                    <?php $this->assign('mediaRequired', true); ?>
                                <?php endif; ?>

                                <?php echo $this->_tpl_vars['lang']['add_media']; ?>
<span class="red<?php if (! $this->_tpl_vars['mediaRequired']): ?> d-none<?php endif; ?>">&nbsp;*</span>
                            </div>
                        </div>
                        <div class="field">
                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['controllerDir'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'add_listing') : smarty_modifier_cat($_tmp, 'add_listing')))) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'step_photo.tpl') : smarty_modifier_cat($_tmp, 'step_photo.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        </div>
                    </div>
                </div>

                <div class="submit-cell form-buttons">
                    <div class="name"></div>
                    <input form="listing_form" type="submit" value="<?php echo $this->_tpl_vars['lang']['edit_listing']; ?>
" data-default-phrase="<?php echo $this->_tpl_vars['lang']['edit_listing']; ?>
" />
                </div>
            </div>
        </div>

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['controllerDir'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'add_listing') : smarty_modifier_cat($_tmp, 'add_listing')))) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'plan_option.tpl') : smarty_modifier_cat($_tmp, 'plan_option.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

        <script>
        lang.single_step_select_plan = '<?php echo $this->_tpl_vars['lang']['single_step_select_plan']; ?>
';
        lang.select_plan             = '<?php echo $this->_tpl_vars['lang']['select_plan']; ?>
';
        lang.apply                   = '<?php echo $this->_tpl_vars['lang']['apply']; ?>
';
        lang.used_up                 = '<?php echo $this->_tpl_vars['lang']['used_up']; ?>
';
        lang.notice_no_plans_related = '<?php echo $this->_tpl_vars['lang']['notice_no_plans_related']; ?>
';

        rlConfig['user_category_path_prefix'] = '<?php echo $this->_tpl_vars['manageListing']->userCategoryPathPrefix; ?>
';

        rlConfig['manageListing'] = [];
        rlConfig['manageListing']['from_post'] = true;
        rlConfig['manageListing']['single_plan'] = <?php if ($this->_tpl_vars['manageListing']->singlePlan): ?>true<?php else: ?>false<?php endif; ?>;
        rlConfig['manageListing']['selected_plan_id'] = <?php if ($this->_tpl_vars['manageListing']->planID): ?><?php echo $this->_tpl_vars['manageListing']->planID; ?>
<?php else: ?>null<?php endif; ?>;
        rlConfig['manageListing']['current_plans'] = <?php if ($this->_tpl_vars['manageListing']->plans): ?>JSON.parse('<?php echo json_encode($this->_tpl_vars['manageListing']->plans); ?>
'.replace(/(\r\n|\n)/gi, '<br />'))<?php else: ?>[]<?php endif; ?>;
        rlConfig['manageListing']['selected_category_id'] = <?php if ($this->_tpl_vars['manageListing']->category['ID']): ?>'<?php echo $this->_tpl_vars['manageListing']->category['ID']; ?>
'<?php else: ?>null<?php endif; ?>;
        rlConfig['manageListing']['selected_type'] = <?php if ($this->_tpl_vars['manageListing']->listingType): ?>'<?php echo $this->_tpl_vars['manageListing']->listingType['Key']; ?>
'<?php else: ?>null<?php endif; ?>;
        rlConfig['manageListing']['user_category_id'] = <?php if ($this->_tpl_vars['manageListing']->category['user_category_id']): ?>'<?php echo $this->_tpl_vars['manageListing']->category['user_category_id']; ?>
'<?php else: ?>null<?php endif; ?>;
        rlConfig['manageListing']['parent_ids'] = '<?php if ($this->_tpl_vars['manageListing']->category['Parent_IDs']): ?><?php echo $this->_tpl_vars['manageListing']->category['Parent_IDs']; ?>
<?php endif; ?>';
        </script>

        <?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=$this->_tpl_vars['rlTplBase'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'controllers/add_listing/single_step.js') : smarty_modifier_cat($_tmp, 'controllers/add_listing/single_step.js')),'id' => 'single-step'), $this);?>

    <?php endif; ?>
</div>

<?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'editListingBottomTpl'), $this);?>


<!-- step form end -->