<?php /* Smarty version 2.6.31, created on 2024-02-22 22:02:18
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/add_listing/step_done.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'phrase', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/add_listing/step_done.tpl', 10, false),array('function', 'pageUrl', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/add_listing/step_done.tpl', 16, false),array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/add_listing/step_done.tpl', 17, false),array('modifier', 'regex_replace', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/add_listing/step_done.tpl', 18, false),)), $this); ?>
<!-- done step -->

<div class="text-notice">
    <?php if ($this->_tpl_vars['config']['listing_auto_approval']): ?>
        <?php $this->assign('done_phrase_key', 'notice_after_listing_adding_auto'); ?>
    <?php else: ?>
        <?php $this->assign('done_phrase_key', 'notice_after_listing_adding'); ?>
    <?php endif; ?>

    <?php echo $this->_plugins['function']['phrase'][0][0]->getPhrase(array('key' => $this->_tpl_vars['done_phrase_key']), $this);?>

</div>

<?php if (! $this->_tpl_vars['addMoreListing']): ?>
    <?php $this->assign('addMoreListing', $this->_tpl_vars['pageInfo']['Key']); ?>
<?php endif; ?>
<?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('assign' => 'return_link','key' => $this->_tpl_vars['addMoreListing']), $this);?>

<?php $this->assign('replace', ((is_array($_tmp=((is_array($_tmp='<a href="')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['return_link']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['return_link'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '">$1</a>') : smarty_modifier_cat($_tmp, '">$1</a>'))); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['add_one_more_listing'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, '/\[(.*)\]/', $this->_tpl_vars['replace']) : smarty_modifier_regex_replace($_tmp, '/\[(.*)\]/', $this->_tpl_vars['replace'])); ?>


<!-- done step end -->