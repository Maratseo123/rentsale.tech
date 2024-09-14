<?php /* Smarty version 2.6.31, created on 2024-05-02 03:32:10
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/menus/account_menu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'pageUrl', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/menus/account_menu.tpl', 12, false),array('function', 'rlHook', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/menus/account_menu.tpl', 66, false),array('modifier', 'replace', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/menus/account_menu.tpl', 46, false),)), $this); ?>
<?php if ($this->_tpl_vars['isLogin']): ?>
    <?php if (! $this->_tpl_vars['removeAccountMenuWelcomeContainer']): ?>
        <div class="welcome"><?php echo $this->_tpl_vars['lang']['welcome']; ?>
, <?php echo $this->_tpl_vars['isLogin']; ?>
!</div>
    <?php endif; ?>

    <ul class="account-menu-content d-inline-block">
        <?php $_from = $this->_tpl_vars['account_menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['mItem']):
?>
            <?php $this->assign('accountMenuHref', ''); ?>
            <?php if ($this->_tpl_vars['mItem']['Page_type'] == 'external'): ?>
                <?php $this->assign('accountMenuHref', $this->_tpl_vars['mItem']['Controller']); ?>
            <?php else: ?>
                <?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => $this->_tpl_vars['mItem']['Key'],'vars' => $this->_tpl_vars['mItem']['Get_vars'],'assign' => 'accountMenuHref'), $this);?>

            <?php endif; ?>

            <?php if ($this->_tpl_vars['mItem']['Key'] == 'my_messages' && ! $this->_tpl_vars['config']['messages_module']): ?><?php else: ?>
                <li class="d-flex align-items-center justify-content-between position-relative pt-1 pb-1<?php if ($this->_tpl_vars['mItem']['Key'] == 'my_messages' && $this->_tpl_vars['new_messages']): ?> messages<?php endif; ?>">
                    <?php if ((defined('IS_ESCORT') ? @IS_ESCORT : null) === true): ?>
                        <a<?php if ($this->_tpl_vars['page'] == $this->_tpl_vars['mItem']['Path']): ?> class="active"<?php endif; ?>
                           title="<?php echo ''; ?><?php if ($this->_tpl_vars['account_info']['Type'] == 'personal' && ( $this->_tpl_vars['mItem']['Key'] == 'add_listing' || $this->_tpl_vars['mItem']['Controller'] == 'my_listings' )): ?><?php echo ''; ?><?php echo $this->_tpl_vars['lang']['escort_my_profile']; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['mItem']['title']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
"
                           href="<?php echo $this->_tpl_vars['accountMenuHref']; ?>
"
                        >
                            <?php if ($this->_tpl_vars['account_info']['Type'] == 'personal' && ( $this->_tpl_vars['mItem']['Key'] == 'add_listing' || $this->_tpl_vars['mItem']['Controller'] == 'my_listings' )): ?>
                                <?php echo $this->_tpl_vars['lang']['escort_my_profile']; ?>

                            <?php else: ?>
                                <?php echo $this->_tpl_vars['mItem']['name']; ?>

                            <?php endif; ?>
                        </a>
                    <?php else: ?>
                        <a<?php if ($this->_tpl_vars['page'] == $this->_tpl_vars['mItem']['Path']): ?> class="active"<?php endif; ?>
                           title="<?php echo $this->_tpl_vars['mItem']['title']; ?>
"
                           href="<?php echo $this->_tpl_vars['accountMenuHref']; ?>
"
                        >
                            <?php echo $this->_tpl_vars['mItem']['name']; ?>

                        </a>
                    <?php endif; ?>

                    <?php if ($this->_tpl_vars['mItem']['Key'] == 'my_messages' && $this->_tpl_vars['new_messages']): ?>
                        <a class="counter ml-4"
                           title="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['new_message_available'])) ? $this->_run_mod_handler('replace', true, $_tmp, '[count]', $this->_tpl_vars['new_messages']) : smarty_modifier_replace($_tmp, '[count]', $this->_tpl_vars['new_messages'])); ?>
"
                           href="<?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'my_messages'), $this);?>
"
                        >
                            <?php echo $this->_tpl_vars['new_messages']; ?>

                        </a>
                    <?php endif; ?>
                </li>
            <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>

        <li class="position-relative pt-1 pb-1">
            <a title="<?php echo $this->_tpl_vars['lang']['title_logout']; ?>
"
               href="<?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'login','vars' => 'action=logout'), $this);?>
"
               class="logout"
            >
                <?php echo $this->_tpl_vars['lang']['logout']; ?>

            </a>
        </li>
    </ul>

    <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'tplAfterAccountMenu'), $this);?>

<?php else: ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'blocks/login_modal.tpl', 'smarty_include_vars' => array('linkLabels' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>