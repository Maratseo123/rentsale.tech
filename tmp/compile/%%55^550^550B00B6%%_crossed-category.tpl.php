<?php /* Smarty version 2.6.31, created on 2023-12-18 01:51:12
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/components/crossed-category/_crossed-category.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/components/crossed-category/_crossed-category.tpl', 7, false),array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/components/crossed-category/_crossed-category.tpl', 12, false),array('function', 'phrase', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/components/crossed-category/_crossed-category.tpl', 30, false),array('function', 'addJS', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/components/crossed-category/_crossed-category.tpl', 42, false),)), $this); ?>
<!-- Crossed categories block -->

<div class="crossed-categories-container">
    <section class="crossed-categories">
        <div class="text-notice">
            <?php $this->assign('number_var', ('{')."number".('}')); ?>
            <span class="default"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['crossed_top_text'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['number_var'], '<b id="crossed_counter"></b>') : smarty_modifier_replace($_tmp, $this->_tpl_vars['number_var'], '<b id="crossed_counter"></b>')); ?>
</span>
            <span class="exceeded"><?php echo $this->_tpl_vars['lang']['crossed_top_text_denied']; ?>
</span>
        </div>

        <div class="crossed-selection">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['componentDir'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'category-selector') : smarty_modifier_cat($_tmp, 'category-selector')))) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, '_category-selector.tpl') : smarty_modifier_cat($_tmp, '_category-selector.tpl')), 'smarty_include_vars' => array('dropdown_data' => $this->_tpl_vars['crossed_types'],'section_postfix' => 'crossed','no_user_category' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div>

        <div class="crossed-add">
            <div class="form-buttons">
                <a href="javascript:void(0)" class="button disabled"><?php echo $this->_tpl_vars['lang']['stick_category']; ?>
</a>
            </div>
        </div>

        <div class="crossed-tree empty">
            <h3><?php echo $this->_tpl_vars['lang']['selected_crossed_categories']; ?>
</h3>
            <ul>
                <?php if ($this->_tpl_vars['crossed_categories']): ?>
                    <?php $_from = $this->_tpl_vars['crossed_categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['crossed_category']):
?>
                    <li data-id="<?php echo $this->_tpl_vars['crossed_category']['ID']; ?>
">
                        <a href="javascript://" target="_blank"><?php echo $this->_plugins['function']['phrase'][0][0]->getPhrase(array('key' => ((is_array($_tmp='categories+name+')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['crossed_category']['Key']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['crossed_category']['Key']))), $this);?>
</a>
                        <img src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" class="remove" alt="<?php echo $this->_tpl_vars['lang']['remove']; ?>
" title="<?php echo $this->_tpl_vars['lang']['remove']; ?>
" />
                    </li>
                    <?php endforeach; endif; unset($_from); ?>
                <?php endif; ?>
            </ul>
        </div>
    </section>

    <input type="hidden" name="crossed_categories" value="<?php echo $_POST['crossed_categories']; ?>
"<?php if ($this->_tpl_vars['append_to']): ?> form="<?php echo $this->_tpl_vars['append_to']; ?>
"<?php endif; ?> />
</div>

<?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=$this->_tpl_vars['rlTplBase'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'components/crossed-category/_crossed-category.js') : smarty_modifier_cat($_tmp, 'components/crossed-category/_crossed-category.js'))), $this);?>


<script class="fl-js-dynamic">
rlConfig['crossed_categories_by_type'] = <?php echo $this->_tpl_vars['config']['crossed_categories_by_type']; ?>
;

lang['crossed_top_text_denied'] = "<?php echo $this->_tpl_vars['lang']['crossed_top_text_denied']; ?>
";
lang['remove'] = "<?php echo $this->_tpl_vars['lang']['remove']; ?>
";
<?php echo '

(function(){
    "use strict";

    rlConfig[\'cross_category_instance\'] = new crossedCategoryClass();
    rlConfig[\'cross_category_instance\'].init('; ?>

        <?php if ($this->_tpl_vars['plan_info']['Cross']): ?><?php echo $this->_tpl_vars['plan_info']['Cross']; ?>
<?php else: ?>null<?php endif; ?>,
        <?php if ($this->_tpl_vars['selected_type']): ?>'<?php echo $this->_tpl_vars['selected_type']; ?>
'<?php else: ?>null<?php endif; ?>,
        <?php if ($this->_tpl_vars['selected_category_id']): ?>'<?php echo $this->_tpl_vars['selected_category_id']; ?>
'<?php else: ?>null<?php endif; ?>
    <?php echo ');
})();

'; ?>

</script>

<!-- Crossed categories block end -->