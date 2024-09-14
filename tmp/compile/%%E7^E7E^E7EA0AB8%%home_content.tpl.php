<?php /* Smarty version 2.6.31, created on 2024-04-24 15:46:43
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/home_content.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/home_content.tpl', 15, false),)), $this); ?>
<!-- home page content tpl -->

<section class="horizontal-search<?php if ($this->_tpl_vars['config']['home_page_h1']): ?> h1-exists<?php endif; ?><?php if ($this->_tpl_vars['config']['home_map_search']): ?> map-search-mode<?php endif; ?>">
    <div class="point1">
        <?php if ($this->_tpl_vars['config']['home_page_h1'] && ! $this->_tpl_vars['config']['home_map_search']): ?>
        <div class="row">
            <div class="col-xl-6 col-md-5 h1-container">
                <h1><?php if ($this->_tpl_vars['pageInfo']['h1']): ?><?php echo $this->_tpl_vars['pageInfo']['h1']; ?>
<?php else: ?><?php echo $this->_tpl_vars['pageInfo']['name']; ?>
<?php endif; ?></h1>
                <?php if ($this->_tpl_vars['lang']['home_page_h3']): ?><h3><?php echo $this->_tpl_vars['lang']['home_page_h3']; ?>
</h3><?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['search_forms']): ?>
            <div <?php if ($this->_tpl_vars['config']['home_page_h1'] && ! $this->_tpl_vars['config']['home_map_search']): ?>class="col-xl-5 col-md-6 offset-md-1" <?php endif; ?>id="search_area">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'horizontal_search.tpl') : smarty_modifier_cat($_tmp, 'horizontal_search.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </div>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['config']['home_page_h1'] && ! $this->_tpl_vars['config']['home_map_search']): ?>
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- home page content tpl end -->