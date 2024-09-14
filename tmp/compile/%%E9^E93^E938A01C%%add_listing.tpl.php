<?php /* Smarty version 2.6.31, created on 2023-12-18 01:51:18
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/add_listing/add_listing.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'rlHook', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/add_listing/add_listing.tpl', 3, false),array('function', 'addJS', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/add_listing/add_listing.tpl', 27, false),array('function', 'processStep', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/add_listing/add_listing.tpl', 29, false),array('modifier', 'array_values', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/add_listing/add_listing.tpl', 12, false),array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/add_listing/add_listing.tpl', 27, false),)), $this); ?>
<!-- add listing -->

<?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'addListingTopTpl'), $this);?>


<?php if (! $this->_tpl_vars['no_access']): ?>
    <?php if (isset ( $this->_tpl_vars['manageListing']->singleStep ) && ! $this->_tpl_vars['manageListing']->singleStep): ?>
        <!-- steps -->
        <?php $this->assign('allow_link', true); ?>
        <?php $this->assign('current_found', false); ?>

        <ul class="steps mobile">
            <?php $this->assign('steps_values', array_values($this->_tpl_vars['steps'])); ?>
            <?php $_from = $this->_tpl_vars['steps_values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['stepsF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['stepsF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['step_key'] => $this->_tpl_vars['step']):
        $this->_foreach['stepsF']['iteration']++;
?><?php echo ''; ?><?php if ($this->_tpl_vars['cur_step'] == $this->_tpl_vars['step']['key'] || ! $this->_tpl_vars['cur_step']): ?><?php echo ''; ?><?php $this->assign('allow_link', false); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $this->assign('next_index', $this->_tpl_vars['step_key']+1); ?><?php echo '<li data-path="'; ?><?php echo $this->_tpl_vars['steps'][$this->_tpl_vars['step']['key']]['path']; ?><?php echo '" class="'; ?><?php if ($this->_tpl_vars['cur_step'] == $this->_tpl_vars['step']['key']): ?><?php echo 'current'; ?><?php $this->assign('current_found', true); ?><?php echo ''; ?><?php elseif (! $this->_tpl_vars['current_found']): ?><?php echo ''; ?><?php if ($this->_tpl_vars['steps_values'][$this->_tpl_vars['next_index']]['key'] == $this->_tpl_vars['cur_step']): ?><?php echo 'prev '; ?><?php endif; ?><?php echo 'past'; ?><?php endif; ?><?php echo '"><a href="'; ?><?php if ($this->_tpl_vars['allow_link']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['rlBase']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['pageInfo']['Path']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['step']['key'] == 'category'): ?><?php echo '.html?edit'; ?><?php else: ?><?php echo '/'; ?><?php echo $this->_tpl_vars['manageListing']->category['Path']; ?><?php echo '/'; ?><?php echo $this->_tpl_vars['steps'][$this->_tpl_vars['step']['key']]['path']; ?><?php echo '.html'; ?><?php endif; ?><?php echo ''; ?><?php else: ?><?php echo '?page='; ?><?php echo $this->_tpl_vars['pageInfo']['Path']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['step']['key'] != 'category'): ?><?php echo '&id='; ?><?php echo $this->_tpl_vars['manageListing']->category['ID']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['steps'][$this->_tpl_vars['step']['key']]['path']): ?><?php echo '&step='; ?><?php echo $this->_tpl_vars['steps'][$this->_tpl_vars['step']['key']]['path']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['step']['key'] == 'category'): ?><?php echo '&edit'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php else: ?><?php echo 'javascript:void(0)'; ?><?php endif; ?><?php echo '" title="'; ?><?php echo $this->_tpl_vars['step']['name']; ?><?php echo '">'; ?><?php if ($this->_tpl_vars['step']['caption']): ?><?php echo '<span>'; ?><?php echo $this->_tpl_vars['lang']['step']; ?><?php echo '</span> '; ?><?php echo $this->_foreach['stepsF']['iteration']; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['step']['name']; ?><?php echo ''; ?><?php endif; ?><?php echo '</a></li>'; ?>
<?php endforeach; endif; unset($_from); ?>
        </ul>
        <!-- steps -->

        <h1><?php echo $this->_tpl_vars['pageInfo']['name']; ?>
</h1>
    <?php endif; ?>

    <?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=$this->_tpl_vars['rlTplBase'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'controllers/add_listing/manage_listing.js') : smarty_modifier_cat($_tmp, 'controllers/add_listing/manage_listing.js'))), $this);?>


    <?php echo $this->_plugins['function']['processStep'][0][0]->processTplStep(array(), $this);?>


    <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'addListingStepActionsTpl'), $this);?>

<?php elseif ($this->_tpl_vars['errors']): ?>
    <ul class="text-notice">
    <?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['error']):
?>
        <li><?php echo $this->_tpl_vars['error']; ?>
</li>
    <?php endforeach; endif; unset($_from); ?>
    </ul>
<?php endif; ?>

<!-- add listing end -->