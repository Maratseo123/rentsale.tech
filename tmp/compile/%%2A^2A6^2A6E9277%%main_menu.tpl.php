<?php /* Smarty version 2.6.31, created on 2023-12-18 01:50:46
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/menus/main_menu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'pageUrl', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/menus/main_menu.tpl', 23, false),)), $this); ?>
<!-- main menu block -->

<div class="menu d-flex justify-content-end">
    <div class="d-none d-lg-flex h-100 align-items-center flex-fill shrink-fix justify-content-end">
        <span class="mobile-menu-header d-none align-items-center">
            <span class="mr-auto"><?php echo $this->_tpl_vars['lang']['menu']; ?>
</span>
            <svg viewBox="0 0 12 12">
                <use xlink:href="#close-icon"></use>
            </svg>
        </span>

	<?php $_from = $this->_tpl_vars['main_menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['mMenu'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['mMenu']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['mainMenu']):
        $this->_foreach['mMenu']['iteration']++;
?>
		<?php if ($this->_tpl_vars['mainMenu']['Key'] == 'add_listing'): ?><?php $this->assign('add_listing_button', $this->_tpl_vars['mainMenu']); ?><?php continue; ?><?php endif; ?>
		<a title="<?php echo $this->_tpl_vars['mainMenu']['title']; ?>
"
           class="h-100<?php if ($this->_tpl_vars['pageInfo']['Key'] == $this->_tpl_vars['mainMenu']['Key']): ?> active<?php endif; ?>"
           <?php if ($this->_tpl_vars['mainMenu']['No_follow'] || $this->_tpl_vars['mainMenu']['Login']): ?>
           rel="nofollow"
           <?php endif; ?>
           href="<?php echo ''; ?><?php if ($this->_tpl_vars['mainMenu']['Page_type'] == 'external'): ?><?php echo ''; ?><?php echo $this->_tpl_vars['mainMenu']['Controller']; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => $this->_tpl_vars['mainMenu']['Key'],'vars' => $this->_tpl_vars['mainMenu']['Get_vars']), $this);?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
"><?php echo $this->_tpl_vars['mainMenu']['name']; ?>
</a>
	<?php endforeach; endif; unset($_from); ?>
    </div>

    <?php if ($this->_tpl_vars['add_listing_button']): ?>
        <a class="h-100 add-property icon-opacity d-flex" 
        <?php if ($this->_tpl_vars['mainMenu']['No_follow'] || $this->_tpl_vars['mainMenu']['Login']): ?>
        rel="nofollow"
        <?php endif; ?>
        title="<?php echo $this->_tpl_vars['mainMenu']['title']; ?>
"
        href="<?php echo ''; ?><?php if ($this->_tpl_vars['pageInfo']['Controller'] != 'add_listing' && ! empty ( $this->_tpl_vars['category']['Path'] ) && ! $this->_tpl_vars['category']['Lock']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['rlBase']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['add_listing_button']['Path']; ?><?php echo '/'; ?><?php echo $this->_tpl_vars['category']['Path']; ?><?php echo '/'; ?><?php echo $this->_tpl_vars['steps']['plan']['path']; ?><?php echo '.html'; ?><?php else: ?><?php echo '?page='; ?><?php echo $this->_tpl_vars['add_listing_button']['Path']; ?><?php echo '&step='; ?><?php echo $this->_tpl_vars['steps']['plan']['path']; ?><?php echo '&id='; ?><?php echo $this->_tpl_vars['category']['ID']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => $this->_tpl_vars['add_listing_button']['Key']), $this);?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
"><span class="icon-opacity__icon"></span><?php echo $this->_tpl_vars['add_listing_button']['name']; ?>
</a>
    <?php endif; ?>

	</div>


<!-- main menu block end -->