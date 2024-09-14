<?php /* Smarty version 2.6.31, created on 2024-04-24 15:46:43
         compiled from /var/www/u2273289/data/www/rentsale.tech/plugins/categories_tree/level.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'buildCategoryUrl', '/var/www/u2273289/data/www/rentsale.tech/plugins/categories_tree/level.tpl', 16, false),array('modifier', 'number_format', '/var/www/u2273289/data/www/rentsale.tech/plugins/categories_tree/level.tpl', 23, false),array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/plugins/categories_tree/level.tpl', 30, false),)), $this); ?>
<!-- tree level tpl -->

<ul class="ctree-sc-container<?php if (! $this->_tpl_vars['direct']): ?> hide<?php endif; ?>">
<?php $_from = $this->_tpl_vars['ctree_subcategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sub_cat']):
?>
    <li id="ctree-catid-<?php echo $this->_tpl_vars['sub_cat']['ID']; ?>
" 
        class="<?php if ($this->_tpl_vars['direct'] && $this->_tpl_vars['sub_cat']['sub_categories']): ?>
                loaded&nbsp;
                <?php if ($this->_tpl_vars['box_listing_type']['Ctree_open_subcat']): ?>opened<?php endif; ?>
            <?php endif; ?> <?php if (! empty ( $this->_tpl_vars['cache_ctree_data'][$this->_tpl_vars['sub_cat']['ID']]['Sub_cat'] )): ?>ctree-sc<?php endif; ?>">
        <img title="<?php echo $this->_tpl_vars['lang']['category_tree_show_subcategories']; ?>
" 
            class="plus-icon" 
            alt="<?php if ($this->_tpl_vars['lang'][$this->_tpl_vars['sub_cat']['pName']]): ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['sub_cat']['pName']]; ?>
<?php else: ?><?php echo $this->_tpl_vars['sub_cat']['name']; ?>
<?php endif; ?>" 
            src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" />
        <a <?php if ($this->_tpl_vars['category']['ID'] == $this->_tpl_vars['sub_cat']['ID']): ?>class="current"<?php endif; ?> 
            title="<?php if ($this->_tpl_vars['lang'][$this->_tpl_vars['sub_cat']['pName']]): ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['sub_cat']['pName']]; ?>
<?php else: ?><?php echo $this->_tpl_vars['sub_cat']['name']; ?>
<?php endif; ?>" 
            href="<?php echo $this->_plugins['function']['buildCategoryUrl'][0][0]->buildCategoryUrl(array('category' => $this->_tpl_vars['sub_cat'],'page_key' => $this->_tpl_vars['box_listing_type']['Page_key'],'cat_postfix' => $this->_tpl_vars['box_listing_type']['Cat_postfix']), $this);?>
">
                <?php echo $this->_tpl_vars['sub_cat']['name']; ?>

        </a>
        <?php if ($this->_tpl_vars['box_listing_type']['Ctree_subcat_counter']): ?>
            <span class="count hlight"><?php echo ((is_array($_tmp=$this->_tpl_vars['cache_ctree_data'][$this->_tpl_vars['sub_cat']['ID']]['Count'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</span>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['direct'] && $this->_tpl_vars['sub_cat']['sub_categories']): ?>
            <?php if (! $this->_tpl_vars['box_listing_type']['Ctree_open_subcat']): ?>
                <?php $this->assign('direct', false); ?>
            <?php endif; ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=(defined('RL_PLUGINS') ? @RL_PLUGINS : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'categories_tree') : smarty_modifier_cat($_tmp, 'categories_tree')))) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'level.tpl') : smarty_modifier_cat($_tmp, 'level.tpl')), 'smarty_include_vars' => array('ctree_subcategories' => $this->_tpl_vars['sub_cat']['sub_categories'],'direct' => $this->_tpl_vars['direct'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php endif; ?>
    </li>
<?php endforeach; endif; unset($_from); ?>
</ul>

<!-- tree level tpl end -->