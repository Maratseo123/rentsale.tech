<?php /* Smarty version 2.6.31, created on 2024-04-24 15:46:43
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/user_navbar.tpl */ ?>
<!-- user navigation bar -->

<span class="circle <?php if ($this->_tpl_vars['isLogin']): ?> logged-in<?php else: ?> circle_content-padding<?php endif; ?><?php if ($this->_tpl_vars['new_messages']): ?> notify<?php endif; ?>" id="user-navbar">
    <span class="default"><span><?php if ($this->_tpl_vars['isLogin']): ?><?php echo $this->_tpl_vars['isLogin']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['login']; ?>
<?php endif; ?></span></span>
    <span class="content <?php if ($this->_tpl_vars['isLogin']): ?>a-menu<?php endif; ?> hide">
        <?php if ($this->_tpl_vars['isLogin']): ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'menus/user_navbar_menu.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php else: ?>
            <span class="user-navbar-container">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'blocks/login_modal.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </span>
        <?php endif; ?>
    </span>
</span>

<!-- user navigation bar end -->