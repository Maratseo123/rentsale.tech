<?php /* Smarty version 2.6.31, created on 2024-09-10 05:16:52
         compiled from /var/www/u2273289/data/www/rentsale.tech/plugins/fieldBoundBoxes/admin/refreshEntry.tpl */ ?>
<!-- fieldBoundBoxes recount function -->

<tr class="body">
    <td class="list_td"><?php echo $this->_tpl_vars['lang']['fb_recount_text']; ?>
</td>
    <td class="list_td" align="center">
        <input id="fbbRecount" type="button" value="<?php echo $this->_tpl_vars['lang']['recount']; ?>
" style="margin: 0;width: 100px;" />

        <script>
            lang['recount'] = "<?php echo $this->_tpl_vars['lang']['recount']; ?>
";
            lang['fb_recount_in_progress'] = "<?php echo $this->_tpl_vars['lang']['resize_in_progress']; ?>
";

            <?php echo '

            var fbbRecountStack = 0;

            $(document).ready(function(){
                $(\'#fbbRecount\').click(function(){

                    $(this).val(lang[\'loading\']);
                    printMessage(\'notice\', lang[\'fb_recount_in_progress\']);

                    $.getJSON(rlConfig[\'ajax_url\'], {item: \'fbbRecount\', stack: fbbRecountStack}, function(response){
                        if (response.status == \'ok\') {
                            $(\'#fbbRecount\').val(lang[\'recount\']);
                            printMessage(\'notice\', lang[\'fb_listings_recounted\']);
                        } else {
                            printMessage(\'error\', lang[\'system_error\']);
                        }
                    });
                });
            });
            '; ?>

        </script>
    </td>
</tr>

<!-- fieldBoundBoxes recount function end -->