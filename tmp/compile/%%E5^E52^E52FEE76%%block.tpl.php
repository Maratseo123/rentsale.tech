<?php /* Smarty version 2.6.31, created on 2024-04-24 15:46:43
         compiled from /var/www/u2273289/data/www/rentsale.tech/plugins/categories_tree/block.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'explode', '/var/www/u2273289/data/www/rentsale.tech/plugins/categories_tree/block.tpl', 4, false),array('modifier', 'count', '/var/www/u2273289/data/www/rentsale.tech/plugins/categories_tree/block.tpl', 14, false),array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/plugins/categories_tree/block.tpl', 15, false),array('modifier', 'number_format', '/var/www/u2273289/data/www/rentsale.tech/plugins/categories_tree/block.tpl', 79, false),array('modifier', 'in_array', '/var/www/u2273289/data/www/rentsale.tech/plugins/categories_tree/block.tpl', 85, false),array('function', 'math', '/var/www/u2273289/data/www/rentsale.tech/plugins/categories_tree/block.tpl', 22, false),array('function', 'rlHook', '/var/www/u2273289/data/www/rentsale.tech/plugins/categories_tree/block.tpl', 58, false),)), $this); ?>
<!-- category tree -->

<?php if (is_string ( $this->_tpl_vars['types'] )): ?>
    <?php $this->assign('types', ((is_array($_tmp=',')) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['types']) : explode($_tmp, $this->_tpl_vars['types']))); ?>
<?php endif; ?>

<?php if (! $this->_tpl_vars['box_categories']): ?>
    <?php $this->assign('box_categories', $this->_tpl_vars['categories']); ?>
<?php endif; ?>

<?php $_from = $this->_tpl_vars['types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['type']):
?>
    <?php $this->assign('box_listing_type', $this->_tpl_vars['listing_types'][$this->_tpl_vars['type']]); ?>

    <?php if (count($this->_tpl_vars['types']) > 1): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_header.tpl') : smarty_modifier_cat($_tmp, 'fieldset_header.tpl')), 'smarty_include_vars' => array('name' => $this->_tpl_vars['box_listing_type']['name'],'id' => ((is_array($_tmp='addcatblock')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['box_listing_type']['Key']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['box_listing_type']['Key'])))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['box_categories'][$this->_tpl_vars['type']]): ?>
        <?php if ($this->_tpl_vars['category']['ID'] > 0 && $this->_tpl_vars['box_listing_type']['Ctree_child_only']): ?>
            <?php echo smarty_function_math(array('assign' => 'ctree_cbc_count','equation' => 'count-2','count' => count($this->_tpl_vars['bread_crumbs'])), $this);?>

            <?php $this->assign('ctree_cbc', $this->_tpl_vars['bread_crumbs'][$this->_tpl_vars['ctree_cbc_count']]); ?>
            <div class="ctree-move-top">
                <a title="<?php echo $this->_tpl_vars['lang']['category_tree_go_back']; ?>
"
                    href="<?php echo ''; ?><?php echo $this->_tpl_vars['rlBase']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['ctree_cbc']['path']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['ctree_cbc']['category']): ?><?php echo ''; ?><?php if ($this->_tpl_vars['box_listing_type']['Cat_postfix']): ?><?php echo '.html'; ?><?php else: ?><?php echo '/'; ?><?php endif; ?><?php echo ''; ?><?php else: ?><?php echo '.html'; ?><?php endif; ?><?php echo ''; ?><?php else: ?><?php echo '?page='; ?><?php echo $this->_tpl_vars['ctree_cbc']['path']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
">
                    <?php echo $this->_tpl_vars['lang']['category_tree_go_back']; ?>

                </a>
            </div>
        <?php endif; ?>

        <ul class="ctree-container <?php if ($this->_tpl_vars['box_listing_type']['Ablock_show_subcats']): ?>ctree-allow-sc<?php endif; ?>"
            id="ctree-container-<?php echo $this->_tpl_vars['type']; ?>
">
        <?php $_from = $this->_tpl_vars['box_categories'][$this->_tpl_vars['type']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['fCats'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fCats']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['cat']):
        $this->_foreach['fCats']['iteration']++;
?>
            <li id="ctree-catid-<?php echo $this->_tpl_vars['cat']['ID']; ?>
"
                class="loaded
                <?php if (( $this->_tpl_vars['category']['ID'] == $this->_tpl_vars['cat']['ID'] && $this->_tpl_vars['box_listing_type']['Ctree_child_only'] && $this->_tpl_vars['cat']['sub_categories'] ) || ( $this->_tpl_vars['cat']['sub_categories'] && $this->_tpl_vars['box_listing_type']['Ctree_open_subcat'] )): ?>
                    opened
                <?php endif; ?>&nbsp;
                <?php if (! empty ( $this->_tpl_vars['cat']['sub_categories'] ) && $this->_tpl_vars['box_listing_type']['Ablock_show_subcats']): ?>ctree-sc<?php endif; ?>">
                <img title="<?php echo $this->_tpl_vars['lang']['category_tree_show_subcategories']; ?>
"
                    class="plus-icon"
                    alt="<?php echo $this->_tpl_vars['lang']['category_tree_show_subcategories']; ?>
"
                    src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" />

                <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'tplPreCategory'), $this);?>


                <?php if ($this->_tpl_vars['category']['ID'] == $this->_tpl_vars['cat']['ID'] && $this->_tpl_vars['box_listing_type']['Ctree_child_only']): ?>
                    <span class="current"><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['cat']['pName']]; ?>
</span>
                <?php else: ?>
                    <a <?php if ($this->_tpl_vars['category']['ID'] == $this->_tpl_vars['cat']['ID']): ?>class="current"<?php endif; ?>
                        title="<?php if ($this->_tpl_vars['lang'][$this->_tpl_vars['cat']['pTitle']]): ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['cat']['pTitle']]; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['cat']['pName']]; ?>
<?php endif; ?>"
                        href="<?php echo ''; ?><?php echo $this->_tpl_vars['rlBase']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['pages'][$this->_tpl_vars['box_listing_type']['Page_key']]; ?><?php echo '/'; ?><?php echo $this->_tpl_vars['cat']['Path']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['box_listing_type']['Cat_postfix']): ?><?php echo '.html'; ?><?php else: ?><?php echo '/'; ?><?php endif; ?><?php echo ''; ?><?php else: ?><?php echo '?page='; ?><?php echo $this->_tpl_vars['pages'][$this->_tpl_vars['box_listing_type']['Page_key']]; ?><?php echo '&category='; ?><?php echo $this->_tpl_vars['cat']['ID']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
">
                        <?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['cat']['pName']]; ?>

                    </a>
                <?php endif; ?>

                <?php if ($this->_tpl_vars['box_listing_type']['Cat_listing_counter']): ?>
                    <span class="count hlight"><?php echo ((is_array($_tmp=$this->_tpl_vars['cat']['Count'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</span>
                <?php endif; ?>

                <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'tplPostCategory'), $this);?>


                <?php $this->assign('direct', false); ?>
                <?php if (( $this->_tpl_vars['ctree_bc'] && ((is_array($_tmp=$this->_tpl_vars['cat']['ID'])) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['ctree_bc']) : in_array($_tmp, $this->_tpl_vars['ctree_bc'])) ) || $this->_tpl_vars['box_listing_type']['Ctree_open_subcat'] || ( $this->_tpl_vars['category']['ID'] == $this->_tpl_vars['cat']['ID'] && $this->_tpl_vars['box_listing_type']['Ctree_child_only'] )): ?>
                    <?php $this->assign('direct', true); ?>
                <?php endif; ?>

                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=(defined('RL_PLUGINS') ? @RL_PLUGINS : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'categories_tree') : smarty_modifier_cat($_tmp, 'categories_tree')))) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'level.tpl') : smarty_modifier_cat($_tmp, 'level.tpl')), 'smarty_include_vars' => array('ctree_subcategories' => $this->_tpl_vars['cat']['sub_categories'],'direct' => $this->_tpl_vars['direct'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </li>
        <?php endforeach; endif; unset($_from); ?>
        </ul>

        <script class="fl-js-dynamic">
        var ctree_bc = new Array();
        <?php if ($this->_tpl_vars['ctree_bc'] && ! $this->_tpl_vars['box_listing_type']['Ctree_child_only']): ?>
            <?php $_from = $this->_tpl_vars['ctree_bc']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cb_item']):
?>
                ctree_bc.push(<?php echo $this->_tpl_vars['cb_item']; ?>
);
            <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
        var ctree_progress = false;
        <?php echo '

        $(document).ready(function(){
            $(\'#ctree-container-'; ?>
<?php echo $this->_tpl_vars['type']; ?>
<?php echo '\').parent().attr(\'style\', false);
            $(\'#ctree-container-'; ?>
<?php echo $this->_tpl_vars['type']; ?>
<?php echo '\').closest(\'div.fieldset\').parent().attr(\'style\', false);

            ctreeOpen'; ?>
<?php echo $this->_tpl_vars['type']; ?>
<?php echo '();

            if (ctree_bc.length > 0) {
                $(\'#ctree-catid-\'+ctree_bc[0]).addClass(\'opened\');
                if ( ctree_bc[1] ) {
                    $(\'#ctree-catid-\'+ctree_bc[1]).find(\'img.plus-icon:first\').trigger(\'click\');
                }
            }

            // Adapt box for customScrollbar function
            var $box = $(\'#ctree-container-'; ?>
<?php echo $this->_tpl_vars['type']; ?>
<?php echo '\');

            if ($box.closest(\'.mCustomScrollbar\').length) {
                $box.closest(\'.side_block.categories-box-nav\').addClass(\'tree\');
            }
        });

        var ctreeOpen'; ?>
<?php echo $this->_tpl_vars['type']; ?>
<?php echo ' = function(){
            $(\'#ctree-container-'; ?>
<?php echo $this->_tpl_vars['type']; ?>
<?php echo ' li.ctree-sc > img.plus-icon\')
                .off(\'click\')
                .on(\'click\', function(){
                var self = this;
                if ($(this).parent().hasClass(\'opened\')) {
                    $(this).parent().find(\'ul\').fadeOut(function(){
                        $(self).parent().removeClass(\'opened\');
                    });
                } else {
                    if ($(this).parent().hasClass(\'loaded\')) {
                        $(this).parent().find(\'ul\').fadeIn(function(){
                            $(self).parent().addClass(\'opened\');
                        });
                    } else {
                        if (!ctree_progress) {
                            var id = $(this).parent().attr(\'id\').split(\'-\')[2];
                            ctree_progress = true;

                            $.post(
                                rlConfig[\'ajax_url\'],
                                {
                                    mode: \'ctreeOpen\',
                                    item: {
                                        id    : id,
                                        type  : \''; ?>
<?php echo $this->_tpl_vars['type']; ?>
<?php echo '\',
                                        cat_id: '; ?>
<?php if ($this->_tpl_vars['category']['ID']): ?><?php echo $this->_tpl_vars['category']['ID']; ?>
<?php else: ?>0<?php endif; ?><?php echo '
                                    },
                                    lang: rlLang
                                },
                                function(response){
                                    if (response && (response.status || response.message)) {
                                        if (response.status == \'OK\' && response.data) {
                                            ctree_progress = false;

                                            var $catContainer = $(\'#ctree-catid-\' + id);
                                            $catContainer.append(response.data);
                                            $catContainer.addClass(\'opened loaded\');
                                            $catContainer.find(\'ul\').removeClass(\'hide\');

                                            ctreeOpen'; ?>
<?php echo $this->_tpl_vars['type']; ?>
<?php echo '();

                                            // open last selected category
                                            if (ctree_bc.length > 0) {
                                                for (var i in ctree_bc) {
                                                    var $catContainer = $(\'#ctree-catid-\' + ctree_bc[i]);

                                                    if (!$catContainer.hasClass(\'opened\')) {
                                                        $catContainer.find(\'img.plus-icon\').trigger(\'click\');
                                                    }
                                                }
                                            }
                                        } else {
                                            printMessage(\'error\', response.message);
                                        }
                                    }
                                },
                                \'json\'
                            );
                        }
                    }
                }
            });
        }
        '; ?>

        </script>
    <?php else: ?>
        <div class="text-notice"><?php echo $this->_tpl_vars['lang']['listing_type_no_categories']; ?>
</div>
    <?php endif; ?>

    <?php if (count($this->_tpl_vars['types']) > 1): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_footer.tpl') : smarty_modifier_cat($_tmp, 'fieldset_footer.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>

<?php endforeach; endif; unset($_from); ?>

<!-- category tree end -->