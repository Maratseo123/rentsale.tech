<?php /* Smarty version 2.6.31, created on 2024-04-24 15:46:43
         compiled from /var/www/u2273289/data/www/rentsale.tech/plugins/listings_box/listings_box.block.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'rlHook', '/var/www/u2273289/data/www/rentsale.tech/plugins/listings_box/listings_box.block.tpl', 2, false),array('function', 'pageUrl', '/var/www/u2273289/data/www/rentsale.tech/plugins/listings_box/listings_box.block.tpl', 18, false),array('function', 'phrase', '/var/www/u2273289/data/www/rentsale.tech/plugins/listings_box/listings_box.block.tpl', 22, false),array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/plugins/listings_box/listings_box.block.tpl', 10, false),array('modifier', 'regex_replace', '/var/www/u2273289/data/www/rentsale.tech/plugins/listings_box/listings_box.block.tpl', 20, false),)), $this); ?>
<!-- listings boxes -->
<?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'featuredTop'), $this);?>


<?php if (! empty ( $this->_tpl_vars['listings_box'] )): ?>
    <ul id="listing_box_<?php echo $this->_tpl_vars['block']['ID']; ?>
" class="row featured<?php if ($this->_tpl_vars['box_option']['display_mode'] == 'grid'): ?> lb-box-grid<?php endif; ?> with-pictures">
    <?php $_from = $this->_tpl_vars['listings_box']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['listingsF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['listingsF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['featured_listing']):
        $this->_foreach['listingsF']['iteration']++;
?><?php echo ''; ?><?php $this->assign('type', $this->_tpl_vars['featured_listing']['Listing_type']); ?><?php echo ''; ?><?php $this->assign('page_key', $this->_tpl_vars['listing_types'][$this->_tpl_vars['type']]['Page_key']); ?><?php echo ''; ?><?php if ($this->_tpl_vars['box_option']['display_mode'] == 'default'): ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'featured_item.tpl') : smarty_modifier_cat($_tmp, 'featured_item.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['box_option']['display_mode'] == 'grid'): ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=(defined('RL_PLUGINS') ? @RL_PLUGINS : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'listings_box') : smarty_modifier_cat($_tmp, 'listings_box')))) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'listings_box.grid.tpl') : smarty_modifier_cat($_tmp, 'listings_box.grid.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
<?php endforeach; endif; unset($_from); ?>
    </ul>
<?php else: ?>
    <?php if ($this->_tpl_vars['pages']['add_listing']): ?>
        <?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'add_listing','assign' => 'add_listing_href'), $this);?>

        <?php $this->assign('link', ((is_array($_tmp=((is_array($_tmp='<a href="')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['add_listing_href']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['add_listing_href'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '">$1</a>') : smarty_modifier_cat($_tmp, '">$1</a>'))); ?>
        <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['no_listings_here'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, '/\[(.+)\]/', $this->_tpl_vars['link']) : smarty_modifier_regex_replace($_tmp, '/\[(.+)\]/', $this->_tpl_vars['link'])); ?>

    <?php else: ?>
        <?php echo $this->_plugins['function']['phrase'][0][0]->getPhrase(array('key' => 'no_listings_found_deny_posting','db_check' => 'true'), $this);?>

    <?php endif; ?>
<?php endif; ?>
<!-- listings boxes end -->