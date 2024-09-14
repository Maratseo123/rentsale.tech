<?php /* Smarty version 2.6.31, created on 2023-12-18 01:59:39
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/categories.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'rlHook', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/categories.tpl', 8, false),array('function', 'math', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/categories.tpl', 59, false),array('modifier', 'number_format', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/categories.tpl', 28, false),array('modifier', 'count', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/categories.tpl', 59, false),)), $this); ?>
<!-- categories block tpl -->

<?php if ($this->_tpl_vars['pageInfo']['Controller'] != 'listing_type'): ?>
	<div class="text-notice"><?php echo $this->_tpl_vars['lang']['lt_categories_box_failed']; ?>
</div>
<?php else: ?>
	<?php if (! empty ( $this->_tpl_vars['categories'] )): ?>
	
		<?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'browsePreCategories'), $this);?>

		<?php $this->assign('show_cat_divider', false); ?>

		<span class="expander"></span>
		
		<div class="cat-tree-cont limit-height">
			<ul class="row cat-tree"><?php echo ''; ?><?php $_from = $this->_tpl_vars['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['fCats'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fCats']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['cat']):
        $this->_foreach['fCats']['iteration']++;
?><?php echo '<li class="'; ?><?php if ($this->_tpl_vars['block']['Side'] == 'left'): ?><?php echo 'col-md-12'; ?><?php elseif ($this->_tpl_vars['block']['Side'] == 'middle_left' || $this->_tpl_vars['block']['Side'] == 'middle_right'): ?><?php echo 'col-md-'; ?><?php if ($this->_tpl_vars['side_bar_exists']): ?><?php echo '12'; ?><?php else: ?><?php echo '6'; ?><?php endif; ?><?php echo ''; ?><?php else: ?><?php echo 'col-md-'; ?><?php if ($this->_tpl_vars['side_bar_exists']): ?><?php echo '4'; ?><?php else: ?><?php echo '3'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ' col-sm-4">'; ?><?php echo ''; ?><?php if ($this->_tpl_vars['listing_type']['Cat_show_subcats']): ?><?php echo '<span class="toggle">'; ?><?php if (! empty ( $this->_tpl_vars['cat']['sub_categories'] )): ?><?php echo '+'; ?><?php endif; ?><?php echo '</span>'; ?><?php endif; ?><?php echo '<a title="'; ?><?php if ($this->_tpl_vars['lang'][$this->_tpl_vars['cat']['pTitle']]): ?><?php echo ''; ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['cat']['pTitle']]; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['cat']['name']; ?><?php echo ''; ?><?php endif; ?><?php echo '" href="'; ?><?php echo $this->_tpl_vars['rlBase']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['pageInfo']['Path']; ?><?php echo '/'; ?><?php echo $this->_tpl_vars['cat']['Path']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['listing_type']['Cat_postfix']): ?><?php echo '.html'; ?><?php else: ?><?php echo '/'; ?><?php endif; ?><?php echo ''; ?><?php else: ?><?php echo '?page='; ?><?php echo $this->_tpl_vars['pageInfo']['Path']; ?><?php echo '&category='; ?><?php echo $this->_tpl_vars['cat']['ID']; ?><?php echo ''; ?><?php endif; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['cat']['name']; ?><?php echo '</a>'; ?><?php if ($this->_tpl_vars['listing_type']['Cat_listing_counter']): ?><?php echo '&nbsp;<span class="counter">('; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['cat']['Count'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?><?php echo ')</span>'; ?><?php endif; ?><?php echo ''; ?><?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'tplPostCategory'), $this);?><?php echo ''; ?><?php if (! empty ( $this->_tpl_vars['cat']['sub_categories'] ) && $this->_tpl_vars['listing_type']['Cat_show_subcats']): ?><?php echo '<ul class="sub-cats">'; ?><?php $_from = $this->_tpl_vars['cat']['sub_categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['subCatF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['subCatF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sub_cat']):
        $this->_foreach['subCatF']['iteration']++;
?><?php echo '<li>'; ?><?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'tplPreSubCategory'), $this);?><?php echo '<a title="'; ?><?php if ($this->_tpl_vars['lang'][$this->_tpl_vars['sub_cat']['pTitle']]): ?><?php echo ''; ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['sub_cat']['pTitle']]; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['sub_cat']['name']; ?><?php echo ''; ?><?php endif; ?><?php echo '" href="'; ?><?php echo $this->_tpl_vars['rlBase']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['pageInfo']['Path']; ?><?php echo '/'; ?><?php echo $this->_tpl_vars['sub_cat']['Path']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['listing_type']['Cat_postfix']): ?><?php echo '.html'; ?><?php else: ?><?php echo '/'; ?><?php endif; ?><?php echo ''; ?><?php else: ?><?php echo '?page='; ?><?php echo $this->_tpl_vars['pageInfo']['Path']; ?><?php echo '&category='; ?><?php echo $this->_tpl_vars['sub_cat']['ID']; ?><?php echo ''; ?><?php endif; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['sub_cat']['name']; ?><?php echo '</a>'; ?><?php if ($this->_tpl_vars['listing_type']['Cat_listing_counter']): ?><?php echo '&nbsp;<span class="counter">('; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['sub_cat']['Count'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?><?php echo ')</span>'; ?><?php endif; ?><?php echo '</li>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</ul>'; ?><?php endif; ?><?php echo '</li>'; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?>
</ul>

			<div class="cat-toggle hide">...</div>
		</div>
		
		<?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'browsePostCategories'), $this);?>

	
	<?php elseif (empty ( $this->_tpl_vars['categories'] ) && ! $this->_tpl_vars['category']['ID']): ?>
		<div class="info"><?php echo $this->_tpl_vars['lang']['listing_type_no_categories']; ?>
</div>
	<?php elseif (empty ( $this->_tpl_vars['categories'] )): ?>
		<?php echo smarty_function_math(array('assign' => 'bc_count','equation' => 'count-2','count' => count($this->_tpl_vars['bread_crumbs'])), $this);?>

		<a href="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
<?php if ($this->_tpl_vars['bread_crumbs'][$this->_tpl_vars['bc_count']]['Path']): ?>/<?php echo $this->_tpl_vars['bread_crumbs'][$this->_tpl_vars['bc_count']]['Path']; ?>
<?php if ($this->_tpl_vars['listing_type']['Cat_postfix']): ?>.html<?php else: ?>/<?php endif; ?><?php else: ?>.html<?php endif; ?><?php else: ?>?page=<?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
<?php if ($this->_tpl_vars['bread_crumbs'][$this->_tpl_vars['bc_count']]['ID']): ?>&category=<?php echo $this->_tpl_vars['bread_crumbs'][$this->_tpl_vars['bc_count']]['ID']; ?>
<?php endif; ?><?php endif; ?>">&larr; <?php echo $this->_tpl_vars['bread_crumbs'][$this->_tpl_vars['bc_count']]['name']; ?>
</a>
	<?php endif; ?>
<?php endif; ?>

<!-- categories block tpl -->