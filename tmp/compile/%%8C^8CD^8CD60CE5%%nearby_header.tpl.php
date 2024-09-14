<?php /* Smarty version 2.6.31, created on 2024-01-06 16:26:26
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/plugins/multiField/nearby_header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/multiField/nearby_header.tpl', 9, false),)), $this); ?>
<!-- nearby listings header -->

<div class="col-12 mf-nearby-wrapper mt-2 mb-2">
    <?php if ($this->_tpl_vars['mf_nearby_listings_only']): ?>
        <div class="text-notice"><?php echo $this->_tpl_vars['lang']['no_listings_found_deny_posting']; ?>
</div>
    <?php endif; ?>

    <div class="align-center">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=(defined('RL_PLUGINS') ? @RL_PLUGINS : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'multiField/static/nearby.svg') : smarty_modifier_cat($_tmp, 'multiField/static/nearby.svg')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>

    <div class="fieldset divider text-center">
        <header><?php echo $this->_tpl_vars['lang']['mf_nearby_listings_hint']; ?>
</header>
    </div>
</div>

<!-- nearby listings header end -->