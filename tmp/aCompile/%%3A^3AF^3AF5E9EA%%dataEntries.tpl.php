<?php /* Smarty version 2.6.31, created on 2023-12-11 01:40:33
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/plugins/multiField/admin/dataEntries.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'implode', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/multiField/admin/dataEntries.tpl', 7, false),)), $this); ?>
<!-- MultiField dataEntries.tpl -->

<script>
<?php echo '

$(function(){
    var multi_formats = \''; ?>
<?php echo ((is_array($_tmp=',')) ? $this->_run_mod_handler('implode', true, $_tmp, $this->_tpl_vars['multi_format_keys']) : implode($_tmp, $this->_tpl_vars['multi_format_keys'])); ?>
<?php echo '\'.split(\',\');
    var selector = \'\';

    for (var i in multi_formats) {
        selector += \'option[value=\' + multi_formats[i] + \'],\'
    }

    selector = selector.substring(0, selector.length - 1);

    $(\'#additional_options > div:not(#field_select)\').find(\'select[name=data_format]\').find(selector).remove();
});

'; ?>

</script>

<!-- MultiField dataEntries.tpl end -->