<?php /* Smarty version 2.6.31, created on 2023-12-22 06:03:08
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/plugins/hybridAuthLogin/view/registrationBottomTpl.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/hybridAuthLogin/view/registrationBottomTpl.tpl', 1, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['hybrid_configs']['path']['view'])) ? $this->_run_mod_handler('cat', true, $_tmp, '/iconsContainer.tpl') : smarty_modifier_cat($_tmp, '/iconsContainer.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script class="fl-js-dynamic">
    <?php echo '
    $(document).ready(function () {
        var $iconsContainer = $(\'.ha-icons-container.in-registration\');
        if ($iconsContainer.length) {
            var $contentContainer = $(\'#content div.content-padding\');

            $contentContainer.prepend($iconsContainer);
            $iconsContainer.removeClass(\'hide\');
        }
    });
    '; ?>

</script>