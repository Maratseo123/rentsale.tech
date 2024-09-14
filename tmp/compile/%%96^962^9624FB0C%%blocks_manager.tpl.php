<?php /* Smarty version 2.6.31, created on 2024-04-24 15:46:43
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/blocks_manager.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strpos', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/blocks_manager.tpl', 8, false),array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/blocks_manager.tpl', 31, false),array('modifier', 'count', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/blocks_manager.tpl', 59, false),array('insert', 'eval', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/blocks_manager.tpl', 45, false),array('function', 'rlHook', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/blocks_manager.tpl', 69, false),)), $this); ?>
<?php if ($this->_tpl_vars['block']['Side'] == 'left' || $this->_tpl_vars['block']['Side'] == 'right' || $this->_tpl_vars['side'] == 'sidebar'): ?>
	<?php $this->assign('style', 'side'); ?>
<?php else: ?>
	<?php $this->assign('style', 'content'); ?>
<?php endif; ?>

<?php $this->assign('block_class', false); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['block']['Key'])) ? $this->_run_mod_handler('strpos', true, $_tmp, 'ltcategories_') : strpos($_tmp, 'ltcategories_')) === 0): ?>
	<?php $this->assign('block_class', 'categories-box stick'); ?>
<?php elseif (((is_array($_tmp=$this->_tpl_vars['block']['Key'])) ? $this->_run_mod_handler('strpos', true, $_tmp, 'ltsb_') : strpos($_tmp, 'ltsb_')) === 0 || ((is_array($_tmp=$this->_tpl_vars['block']['Key'])) ? $this->_run_mod_handler('strpos', true, $_tmp, 'ltma_') : strpos($_tmp, 'ltma_')) === 0 || ((is_array($_tmp=$this->_tpl_vars['block']['Key'])) ? $this->_run_mod_handler('strpos', true, $_tmp, 'ltpb_') : strpos($_tmp, 'ltpb_')) === 0): ?>
	<?php $this->assign('block_class', 'side_block_search light-inputs stick'); ?>
<?php elseif (((is_array($_tmp=$this->_tpl_vars['block']['Content'])) ? $this->_run_mod_handler('strpos', true, $_tmp, 'search') : strpos($_tmp, 'search')) != false && ((is_array($_tmp=$this->_tpl_vars['block']['Content'])) ? $this->_run_mod_handler('strpos', true, $_tmp, 'key="') : strpos($_tmp, 'key="')) != false): ?>
	<?php $this->assign('block_class', 'side_block_search light-inputs stick'); ?>
<?php elseif ($this->_tpl_vars['block']['Key'] == 'account_alphabetic_filter'): ?>
	<?php $this->assign('block_class', 'light-inputs stick'); ?>
<?php elseif ($this->_tpl_vars['block']['Key'] == 'account_search'): ?>
	<?php $this->assign('block_class', 'light-inputs side_block_search stick'); ?>
<?php elseif ($this->_tpl_vars['block']['Key'] == 'account_page_info'): ?>
	<?php $this->assign('block_class', 'account-info seller-short stick'); ?>
<?php elseif ($this->_tpl_vars['block']['Key'] == 'account_page_location'): ?>
	<?php $this->assign('block_class', 'account-location light-inputs stick'); ?>
<?php elseif ($this->_tpl_vars['block']['Key'] == 'my_profile_sidebar' || ( $this->_tpl_vars['block']['Key'] == 'search_by_distance' && $this->_tpl_vars['pageInfo']['Key'] == 'search_by_distance' )): ?>
	<?php $this->assign('block_class', 'stick'); ?>
<?php elseif (((is_array($_tmp=$this->_tpl_vars['block']['Key'])) ? $this->_run_mod_handler('strpos', true, $_tmp, 'categoryFilter_') : strpos($_tmp, 'categoryFilter_')) === 0): ?>
	<?php $this->assign('block_class', 'light-inputs stick'); ?>
<?php elseif ($this->_tpl_vars['block']['Key'] == 'get_more_details'): ?>
	<?php $this->assign('block_class', 'highlighted'); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['block']['Plugin']): ?>
	<?php $this->assign('block_class', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['block_class'])) ? $this->_run_mod_handler('cat', true, $_tmp, ' ') : smarty_modifier_cat($_tmp, ' ')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['block']['Plugin']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['block']['Plugin']))); ?>
<?php else: ?>
    <?php $this->assign('block_class', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['block_class'])) ? $this->_run_mod_handler('cat', true, $_tmp, ' ') : smarty_modifier_cat($_tmp, ' ')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['block']['Key']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['block']['Key']))); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['block']['Type'] == 'html'): ?>
    <?php $this->assign('block_class', ((is_array($_tmp=$this->_tpl_vars['block_class'])) ? $this->_run_mod_handler('cat', true, $_tmp, ' html-block') : smarty_modifier_cat($_tmp, ' html-block'))); ?>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['style']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['style'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '_block_header.tpl') : smarty_modifier_cat($_tmp, '_block_header.tpl')), 'smarty_include_vars' => array('title' => $this->_tpl_vars['block']['name'],'no_padding' => $this->_tpl_vars['no_padding'],'block_class' => $this->_tpl_vars['block_class'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['block']['Type'] == 'html'): ?>
	<?php echo $this->_tpl_vars['block']['Content']; ?>

<?php elseif ($this->_tpl_vars['block']['Type'] == 'smarty'): ?>
	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'eval', 'content' => $this->_tpl_vars['block']['Content'])), $this); ?>

<?php elseif ($this->_tpl_vars['block']['Type'] == 'php'): ?>
	<?php 
		eval($this->_tpl_vars['block']['Content']);
	 ?>
<?php endif; ?>

<?php 
    $key = str_replace('ltfb_', '', $this->_tpl_vars['block']['Key']);
    $var = 'featured_' . $key;

    $this->assign('featured_listings_count', $this->_tpl_vars[$var] ? count($this->_tpl_vars[$var]) : 0);
 ?>

<?php if (( $this->_tpl_vars['block']['Side'] == 'top' || $this->_tpl_vars['block']['Side'] == 'middle' || $this->_tpl_vars['block']['Side'] == 'bottom' ) && $this->_tpl_vars['tpl_settings']['home_page_load_more_button'] && $this->_tpl_vars['pageInfo']['Key'] == 'home' && ( ( strpos($this->_tpl_vars['block']['Key'], 'ltfb_') === 0 && $this->_tpl_vars['featured_listings_count'] >= $this->_tpl_vars['config']['featured_per_page'] ) || ( $this->_tpl_vars['block']['Plugin'] == 'listings_box' && $this->_tpl_vars['listings_box'] && count($this->_tpl_vars['listings_box']) >= $this->_tpl_vars['config']['featured_per_page'] ) )): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'load-more-button.tpl') : smarty_modifier_cat($_tmp, 'load-more-button.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'tplBlocksManagerContentBottom'), $this);?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['style']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['style'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '_block_footer.tpl') : smarty_modifier_cat($_tmp, '_block_footer.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>