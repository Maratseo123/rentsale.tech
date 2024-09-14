<?php /* Smarty version 2.6.31, created on 2024-05-02 02:20:45
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/recently.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/recently.tpl', 5, false),array('modifier', 'count', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/recently.tpl', 7, false),array('modifier', 'regex_replace', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/recently.tpl', 23, false),array('function', 'paging', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/recently.tpl', 16, false),array('function', 'pageUrl', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/recently.tpl', 21, false),array('function', 'phrase', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/recently.tpl', 25, false),)), $this); ?>
<!-- recently listings area -->
<?php $this->assign('partition', $this->_tpl_vars['listing_types'][$this->_tpl_vars['lt_key']]['Page_key']); ?>

<?php if ($this->_tpl_vars['listings']): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'grid.tpl') : smarty_modifier_cat($_tmp, 'grid.tpl')), 'smarty_include_vars' => array('periods' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <?php if (count($this->_tpl_vars['listing_types']) > 1): ?>
        <?php if ($this->_tpl_vars['config']['mod_rewrite']): ?>
            <?php $this->assign('type_url', $this->_tpl_vars['pages'][$this->_tpl_vars['partition']]); ?>
        <?php else: ?>
            <?php $this->assign('type_url', ((is_array($_tmp='type=')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['pages'][$this->_tpl_vars['partition']]) : smarty_modifier_cat($_tmp, $this->_tpl_vars['pages'][$this->_tpl_vars['partition']]))); ?>
        <?php endif; ?>
    <?php endif; ?>

    <!-- paging block -->
    <?php echo $this->_plugins['function']['paging'][0][0]->paging(array('calc' => $this->_tpl_vars['pInfo']['calc'],'total' => count($this->_tpl_vars['listings']),'current' => $this->_tpl_vars['pInfo']['current'],'per_page' => $this->_tpl_vars['config']['listings_per_page'],'url' => $this->_tpl_vars['type_url']), $this);?>

    <!-- paging block end -->
<?php else: ?>
    <div class="text-notice">
        <?php if ($this->_tpl_vars['pages']['add_listing']): ?>
            <?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'add_listing','assign' => 'add_listing_href'), $this);?>

            <?php $this->assign('link', ((is_array($_tmp=((is_array($_tmp='<a href="')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['add_listing_href']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['add_listing_href'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '">$1</a>') : smarty_modifier_cat($_tmp, '">$1</a>'))); ?>
            <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['no_listings_here'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, '/\[(.+)\]/', $this->_tpl_vars['link']) : smarty_modifier_regex_replace($_tmp, '/\[(.+)\]/', $this->_tpl_vars['link'])); ?>

        <?php else: ?>
            <?php echo $this->_plugins['function']['phrase'][0][0]->getPhrase(array('key' => 'no_listings_found_deny_posting','db_check' => 'true'), $this);?>

        <?php endif; ?>
    </div>
<?php endif; ?>

<!-- recently listings area end -->