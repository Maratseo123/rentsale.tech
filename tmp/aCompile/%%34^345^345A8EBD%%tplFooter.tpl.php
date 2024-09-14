<?php /* Smarty version 2.6.31, created on 2023-10-29 14:52:00
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/plugins/multiField/admin/tplFooter.tpl */ ?>
<!-- MultiField tpl footer -->

<?php if ($this->_tpl_vars['multi_format_keys']): ?>
    <script src="<?php echo (defined('RL_PLUGINS_URL') ? @RL_PLUGINS_URL : null); ?>
multiField/static/lib.js"></script>

    <script>
    <?php echo '
    $(function(){
        for (var i in mfFields) {
            (function(fields, values){
                var mfHandler = new mfHandlerClass();
                mfHandler.init(\'f\', fields, values);
            })(mfFields[i], mfFieldVals[i]);
        }
    });
    '; ?>

    </script>
<?php endif; ?>

<!-- MultiField tpl footer end -->