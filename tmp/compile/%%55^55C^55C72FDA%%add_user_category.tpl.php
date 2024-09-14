<?php /* Smarty version 2.6.31, created on 2023-12-18 01:51:18
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/add_user_category.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'regex_replace', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/add_user_category.tpl', 9, false),array('modifier', 'replace', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/add_user_category.tpl', 9, false),)), $this); ?>
<!-- add user category -->

<script id="add_user_category" type="text/x-jsrender">
    <?php $this->assign('tmp_link', '<a href="javascript:void(0);" class="add">$1</a>'); ?>
    <?php $this->assign('replace', '<b>[%:category%]</b>'); ?>
    <?php $this->assign('find', ('{')."category".('}')); ?>

    <span class="tmp-category">
        <span class="tmp-info"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['tmp_category_info'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, '/\[(.*)\]/', $this->_tpl_vars['tmp_link']) : smarty_modifier_regex_replace($_tmp, '/\[(.*)\]/', $this->_tpl_vars['tmp_link'])))) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['find'], $this->_tpl_vars['replace']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['find'], $this->_tpl_vars['replace'])); ?>
</span>
        <span class="tmp-input">
            <input type="text" />
            <input value="<?php echo $this->_tpl_vars['lang']['add']; ?>
" data-default-value="<?php echo $this->_tpl_vars['lang']['add']; ?>
" type="button" />
            <span class="red margin"><?php echo $this->_tpl_vars['lang']['cancel']; ?>
</span>
        </span>
    </span>
</script>

<script class="fl-js-dynamic">
<?php echo '

var addUserCategoryAction = function($select, $option, $current_cont, id){
    // build user category submission interface
    if ($option.hasClass(\'user-category\')) {
        var parent_category = {category: $option.text()};

        // append dom
        $current_cont.append(
            $(\'#add_user_category\').render(parent_category)
        );

        var $user_category_cont = $current_cont.find(\'span.tmp-category\');
        var $user_category_input = $user_category_cont.find(\'input[type=text]\');

        // handle events
        $user_category_cont
            .on(\'click\', \'.tmp-info a\', function(){
                $user_category_cont.addClass(\'show-input\');
                $user_category_input.focus();
            })
            .on(\'click\', \'span.red\', function(){
                $user_category_cont.removeClass(\'show-input\');
            })
            .on(\'click\', \'input[type=button]\', function(){
                var name = $user_category_input.val();
                var $button = $(this);

                if (name) {
                    $button.val(lang[\'loading\']);

                    // add tmp category
                    var data = {
                        mode: \'addUserCategory\',
                        parent_id: id,
                        name: name,
                        account_id: rlAccountInfo[\'ID\']
                    };
                    flUtil.ajax(data, function(response, status){
                        // reset button state
                        $button.val($button.data(\'default-value\'));

                        // process results
                        if (status == \'success\') {
                            if (response.status == \'OK\') {
                                // add new category to the select
                                $current_cont.find(\'select\').append(
                                    $(\'<option>\')
                                        .text(name)
                                        .val(response.results)
                                        .attr(\'data-path\', rlConfig[\'user_category_path_prefix\'] + response.results)
                                    )
                                    .focus()
                                    .val(response.results)
                                    .change();

                                // remove interface
                                $user_category_input.val(\'\');
                                $user_category_cont.fadeOut(function(){
                                    $(this).remove();
                                });
                            } else {
                                printMessage(\'error\', response.message);
                            }
                        } else {
                            printMessage(\'error\', lang[\'system_error\']);
                        }
                    });
                }
            });
    }
}

'; ?>

</script>

<!-- add user category end -->