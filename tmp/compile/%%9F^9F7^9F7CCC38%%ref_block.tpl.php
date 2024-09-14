<?php /* Smarty version 2.6.31, created on 2023-12-18 02:06:35
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/plugins/ref/ref_block.tpl */ ?>
<!-- referent number look up block -->

<form name="refnumber_lookup" action="" method="post">
    <input style="width: 90%;" type="text" id="ref_input" value="<?php echo $this->_tpl_vars['lang']['ref_label']; ?>
" />
    <input type="submit" value="<?php echo $this->_tpl_vars['lang']['search']; ?>
" style="margin-top: 10px;" />
</form>

<script class="fl-js-dynamic">
var refnumber_input_default = "<?php echo $this->_tpl_vars['lang']['ref_label']; ?>
";
var search_phrase = "<?php echo $this->_tpl_vars['lang']['search']; ?>
";

<?php echo '
    $(document).ready(function () {
        var refNumber = new refNumberClass();

        $(\'form[name=refnumber_lookup] input[type=text]\').focus(function () {
            if ($(this).val() == refnumber_input_default) {
                $(this).val(\'\');
            }
        }).blur(function () {
            if ($(this).val() == \'\') {
                $(this).val(refnumber_input_default);
            }
        });
        $(\'form[name=refnumber_lookup]\').submit(function () {
            if ($(\'#ref_input\').val()) {
                var $searchButton = $(\'form[name=refnumber_lookup] input[type=submit]\');

                $searchButton.val(lang[\'loading\']);
                refNumber.refSearch($(\'form[name=refnumber_lookup] input[type=text]\').val());
                $searchButton.val(search_phrase);
            }

            return false;
        });
    });
'; ?>

</script>

<!-- referent number look up block end -->