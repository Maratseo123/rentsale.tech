<?php /* Smarty version 2.6.31, created on 2023-10-29 16:14:33
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/plugins/fieldBoundBoxes/admin/field_bound_boxes.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/fieldBoundBoxes/admin/field_bound_boxes.tpl', 83, false),array('modifier', 'regex_replace', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/fieldBoundBoxes/admin/field_bound_boxes.tpl', 235, false),array('modifier', 'count', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/fieldBoundBoxes/admin/field_bound_boxes.tpl', 299, false),array('modifier', 'explode', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/fieldBoundBoxes/admin/field_bound_boxes.tpl', 617, false),array('modifier', 'ceil', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/fieldBoundBoxes/admin/field_bound_boxes.tpl', 821, false),array('modifier', 'json_encode', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/fieldBoundBoxes/admin/field_bound_boxes.tpl', 1430, false),array('modifier', 'escape', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/fieldBoundBoxes/admin/field_bound_boxes.tpl', 1430, false),array('function', 'fckEditor', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/fieldBoundBoxes/admin/field_bound_boxes.tpl', 383, false),)), $this); ?>
<!-- filed bound boxes tpl -->

<div id="nav_bar">
    <?php if ($this->_tpl_vars['aRights'][$this->_tpl_vars['cKey']]['add']): ?>
        <?php if (! $_GET['action'] && ! $_GET['box']): ?>
            <a href="<?php echo $this->_tpl_vars['rlBaseC']; ?>
action=add" class="button_bar"><span class="left"></span><span class="center_add"><?php echo $this->_tpl_vars['lang']['add_block']; ?>
</span><span class="right"></span></a>
        <?php elseif ($_GET['action'] == 'edit'): ?>
            <a href="<?php echo $this->_tpl_vars['rlBaseC']; ?>
box=<?php echo $_GET['box']; ?>
" class="button_bar"><span class="left"></span><span class="center_build"><?php echo $this->_tpl_vars['lang']['manage']; ?>
</span><span class="right"></span></a>
        <?php endif; ?>
    <?php endif; ?>
    <?php if ($_GET['box'] && $_GET['item']): ?>
        <a href="<?php echo $this->_tpl_vars['rlBaseC']; ?>
&box=<?php echo $_GET['box']; ?>
" class="button_bar"><span class="left"></span><span class="center_list"><?php echo $this->_tpl_vars['lang']['fb_items_list']; ?>
</span><span class="right"></span></a>
    <?php else: ?>
        <a href="<?php echo $this->_tpl_vars['rlBaseC']; ?>
" class="button_bar"><span class="left"></span><span class="center_list"><?php echo $this->_tpl_vars['lang']['blocks_list']; ?>
</span><span class="right"></span></a>
    <?php endif; ?>

    <?php if ($_GET['box'] && ! $_GET['action']): ?>
        <a href="<?php echo $this->_tpl_vars['rlBaseC']; ?>
action=edit&box=<?php echo $_GET['box']; ?>
" class="button_bar"><span class="left"></span><span class="center_edit"><?php echo $this->_tpl_vars['lang']['edit_block']; ?>
</span><span class="right"></span></a>

        <?php if (! $_GET['item']): ?>
            <?php if ($this->_tpl_vars['box_info']['Multiple_items']): ?>
                <a href="javascript:void(0)"
                   class="button_bar"
                   id="add_new_item">
                   <span class="left"></span><span class="center_add"><?php echo $this->_tpl_vars['lang']['add_item']; ?>
</span><span class="right"></span>
               </a>
            <?php else: ?>
                <a href="javascript:void(0)"
                   class="button_bar"
                   onclick="rlConfirm('<?php echo $this->_tpl_vars['lang']['fb_rebuild_notice']; ?>
', 'fbbReCopyItems', '<?php echo $_GET['box']; ?>
')">
                   <span class="left"></span><span class="center_build"><?php echo $this->_tpl_vars['lang']['fb_rebuild_box_items']; ?>
</span><span class="right"></span>
               </a>
            <?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>
</div>

<!-- Add item in mutiple items mode -->
<?php if ($this->_tpl_vars['box_info']['Multiple_items']): ?>
    <style type="text/css">
    <?php echo '

    #found_items {
        flex-wrap: wrap;
    }
    .box-item {
        display: flex;
        align-items: center;
        border: 1px #cfcdce solid;
        background: #f1f1f1;
        border-radius: 3px;
        padding: 10px;
        margin: 0 15px 15px 0;
        flex: 0 0 190px;
        min-width: 0;
    }
    .box-item:hover {
        border: 1px #afafaf solid;
        background: #e8e8e8;
    }
    .box-item:hover .box-item_action {
        opacity: 1;
    }
    .box-item_name {
        flex: 1;
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
        padding-right: 5px;
    }
    .box-item_action {
        width: 20px;
        height: 20px;
        background: url(\''; ?>
<?php echo (defined('RL_URL_HOME') ? @RL_URL_HOME : null); ?>
<?php echo (defined('ADMIN') ? @ADMIN : null); ?>
<?php echo '/img/form.png\') 0 -650px no-repeat;
        opacity: .7;
        cursor: pointer;
    }

    '; ?>

    </style>

    <div id="search" class="hide">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_start.tpl') : smarty_modifier_cat($_tmp, 'm_block_start.tpl')), 'smarty_include_vars' => array('block_caption' => $this->_tpl_vars['lang']['add_item'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

        <form name="keyword_search" method="post" accept="">
            <input style="width: 350px;max-width: 100%;" type="text" name="keyword" placeholder="<?php echo $this->_tpl_vars['lang']['keyword_search']; ?>
" />
            <input type="submit" value="<?php echo $this->_tpl_vars['lang']['search']; ?>
" data-phrase="<?php echo $this->_tpl_vars['lang']['search']; ?>
" />
        </form>

        <div style="margin-top: 20px;min-height: 100px;">
            <span id="start_hint" style="padding: 0;" class="field_description_noicon"><?php echo $this->_tpl_vars['lang']['fbb_items_search_hint']; ?>
</span>
            <div id="found_items" class="hide"></div>
            <div id="limit_hint" class="hide" style="padding: 10px 0;">
                <div class="field_description" style="margin: 0;"><?php echo $this->_tpl_vars['lang']['fbb_too_much_items_found']; ?>
</div>
            </div>
        </div>

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_end.tpl') : smarty_modifier_cat($_tmp, 'm_block_end.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>

    <script type="text/javascript" src="<?php echo (defined('RL_LIBS_URL') ? @RL_LIBS_URL : null); ?>
javascript/jsRender.js"></script>

    <script id="item-tpl" type="text/x-jsrender">
        <div class="box-item" title="[%:name%][%if Parent_name%], [%:Parent_name%][%/if%]">
            <div class="box-item_name">
                [%if Parent_name%]<b>[%/if%][%:name%][%if Parent_name%]</b>, [%:Parent_name%][%/if%]
            </div>
            <div class="box-item_action" data-key="[%:Key%]" data-name="[%:name%]" title="<?php echo $this->_tpl_vars['lang']['add']; ?>
"></div>
        </div>
    </script>

    <script>
    var multifield_mode = <?php if ($this->_tpl_vars['box_multifield']): ?>1<?php else: ?>0<?php endif; ?>;
    var box_id = '<?php echo $this->_tpl_vars['box_info']['ID']; ?>
';
    var format_id = '<?php echo $this->_tpl_vars['format_id']; ?>
';

    <?php echo '

    $(function(){
        var items_limit = 20;

        var timer = false;
        var val = null;

        var $form = $(\'[name=keyword_search]\');
        var $button = $form.find(\'[type=submit]\');
        var $input = $form.find(\'[name=keyword]\');
        var $startHint = $(\'#start_hint\');
        var $itemsArea = $(\'#found_items\');
        var $limitHint = $(\'#limit_hint\');

        var searchItems = function(){
            if (val.length <= 2) {
                $startHint.show();
                $itemsArea.empty().hide();
            } else {
                $button.val(lang.loading);

                var data = {
                    q: \'ext\',
                    parent: format_id,
                    action: \'search\',
                    Name: val,
                    Search_all_levels: 1,
                    start: 0,
                    limit: items_limit,
                    sort: \'name\'
                };
                var ajax_url = rlPlugins + \'/multiField/admin/multi_formats.inc.php\';

                $.getJSON(ajax_url, data, function(response, status) {
                    $itemsArea.empty();
                    $limitHint.hide();
                    $button.val($button.data(\'phrase\'));

                    if (status == \'success\') {
                        $itemsArea.css(\'display\', \'flex\');
                        $startHint.hide();

                        if (response.data.length) {
                            $itemsArea.append($(\'#item-tpl\').render(response.data));
                        } else {
                            $itemsArea.append(\'<span style="padding: 0;" class="field_description_noicon">\' + lang[\'fbb_no_items_found\'] + \'</span>\');
                        }

                        if (parseInt(response.total) > items_limit) {
                            $limitHint.show();
                        }
                    } else {
                        printMessage(\'error\', lang[\'system_error\']);
                    }
                });
            }
        }

        $form.submit(function(){
            val = $input.val();
            searchItems();

            return false;
        });

        $itemsArea.on(\'click\', \'.box-item_action\', function(){
            var $item = $(this);

            var data = {
                item: \'fbbAddItem\',
                boxID: box_id,
                itemKey: $(this).data(\'key\'),
                itemName: $(this).data(\'name\')
            }

            $.getJSON(rlConfig[\'ajax_url\'], data, function(response, status) {
                if (status == \'success\') {
                    if (response.status == \'OK\') {
                        $item.closest(\'.box-item\').hide();
                        itemsGrid.reload();

                        printMessage(\'notice\', response.message);
                    } else {
                        printMessage(\'error\', response.message);
                    }
                } else {
                    printMessage(\'error\', lang[\'system_error\']);
                }
            });
        });

        $(\'#add_new_item\').click(function(){
            show(\'search\');
        });
    });

    '; ?>

    </script>
<?php endif; ?>
<!-- Add item in mutiple items mode -->

<?php if ($_GET['action'] == 'edit_item'): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_start.tpl') : smarty_modifier_cat($_tmp, 'm_block_start.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <?php $this->assign('sPost', $_POST); ?>
    <form action="<?php echo $this->_tpl_vars['rlBaseC']; ?>
box=<?php echo $_GET['box']; ?>
&action=edit_item&item=<?php echo $_GET['item']; ?>
" method="post" enctype="multipart/form-data">
        <input type="hidden" name="fromPost" value="1" />
        <table class="form">

        <?php if ($this->_tpl_vars['fbb_info']['Style'] != 'text'): ?>
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['fb_item_icon']; ?>
</td>
            <td class="field">
                <input class="file" type="file" name="icon"/>

                <?php if ($this->_tpl_vars['fbb_info']['Style'] != 'responsive'): ?>
                    <?php $this->assign('gallery_link', '<a href="javascript:void(0);" id="open_gallery">$1</a>'); ?>
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['fb_select_from_gallery'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, '/\[(.*)\]/', $this->_tpl_vars['gallery_link']) : smarty_modifier_regex_replace($_tmp, '/\[(.*)\]/', $this->_tpl_vars['gallery_link'])); ?>


                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=(defined('RL_PLUGINS') ? @RL_PLUGINS : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldBoundBoxes/admin/icon_manager.tpl') : smarty_modifier_cat($_tmp, 'fieldBoundBoxes/admin/icon_manager.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                    <input type="hidden" name="svg_icon" />
                <?php endif; ?>

                <span class="field_description"><?php if ($this->_tpl_vars['fbb_info']['Style'] == 'responsive'): ?><?php echo $this->_tpl_vars['lang']['fb_responsive_style_icons_hint']; ?>
<?php else: ?><?php echo $this->_tpl_vars['fbb_info']['Icons_width']; ?>
px / <?php echo $this->_tpl_vars['fbb_info']['Icons_height']; ?>
px<?php endif; ?></span>

                <div id="gallery"<?php if (empty ( $this->_tpl_vars['sPost']['icon'] )): ?> class="hide"<?php endif; ?>>
                    <div style="margin: 1px 0 4px 0;">
                        <fieldset style="margin-top:10px">
                            <legend id="legend_details" class="up" onclick="fieldset_action('details');"><?php echo $this->_tpl_vars['lang']['fb_current_icon']; ?>
</legend>
                            <div id="fileupload" class="ui-widget" style="padding: 0;">
                                <span class="item active template-download"
                                      style="margin: 0 0 5px 0;<?php if ($this->_tpl_vars['fbb_info']['Style'] == 'responsive'): ?>width: 200px;<?php else: ?>width: <?php echo $this->_tpl_vars['fbb_info']['Icons_width']+4; ?>
px;<?php endif; ?>">
                                    <img style="box-sizing: border-box;width: 100%" src="<?php echo (defined('RL_FILES_URL') ? @RL_FILES_URL : null); ?>
<?php echo $this->_tpl_vars['sPost']['icon']; ?>
" class="thumbnail" />
                                    <img title="<?php echo $this->_tpl_vars['lang']['delete']; ?>
" alt="<?php echo $this->_tpl_vars['lang']['delete']; ?>
" class="delete" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
/img/blank.gif" onclick="fbbDeleteIcon('<?php echo $this->_tpl_vars['item_id']; ?>
');" />
                                </span>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="loading" id="photos_loading" style="width: 100%;"></div>
            </td>
        </tr>
        <?php endif; ?>

        <tr>
            <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['fb_item_path']; ?>

            </td>
            <td class="field">
                <table>
                    <tr>
                        <td>
                            <span style="padding: 0 5px 0 0;" class="field_description_noicon">
                                <?php echo (defined('RL_URL_HOME') ? @RL_URL_HOME : null); ?>
<?php echo $this->_tpl_vars['fb_page_info']['Path']; ?>
/</span>
                        </td>

                        <td>
                            <input type="text" name="path" value="<?php echo $this->_tpl_vars['sPost']['path']; ?>
" />
                            <span class="field_description_noicon" style="padding:0" id="path_postfix"><?php if ($this->_tpl_vars['fbb_info']['postfix']): ?>.html<?php endif; ?></span>
                        </td>

                        <td>
                            <span class="field_description_noicon" id="cat_postfix_el">
                                <?php if ($this->_tpl_vars['sPost']['type']): ?><?php if ($this->_tpl_vars['listing_types'][$this->_tpl_vars['sPost']['type']]['Cat_postfix']): ?>.html<?php else: ?>/<?php endif; ?><?php endif; ?>
                            </span>

                            <?php if ($_GET['action'] == 'add'): ?>
                                <span class="field_description"> - <?php echo $this->_tpl_vars['lang']['fb_regenerate_path_desc']; ?>
</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <?php if ($this->_tpl_vars['fbb_info']['Style'] != 'icon'): ?>
        <tr>
            <td class="name">
                <?php echo $this->_tpl_vars['lang']['name']; ?>

            </td>
            <td class="field">
                <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                    <ul class="tabs">
                        <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
                        <li lang="<?php echo $this->_tpl_vars['language']['Code']; ?>
" <?php if (($this->_foreach['langF']['iteration'] <= 1)): ?>class="active"<?php endif; ?>><?php echo $this->_tpl_vars['language']['name']; ?>
</li>
                        <?php endforeach; endif; unset($_from); ?>
                    </ul>
                <?php endif; ?>

                <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
                    <?php if (count($this->_tpl_vars['allLangs']) > 1): ?><div class="tab_area<?php if (! ($this->_foreach['langF']['iteration'] <= 1)): ?> hide<?php endif; ?> <?php echo $this->_tpl_vars['language']['Code']; ?>
"><?php endif; ?>
                    <input placeholder="<?php echo $this->_tpl_vars['option_names'][$this->_tpl_vars['language']['Code']]; ?>
" type="text" name="name[<?php echo $this->_tpl_vars['language']['Code']; ?>
]" value="<?php echo $this->_tpl_vars['sPost']['name'][$this->_tpl_vars['language']['Code']]; ?>
" maxlength="350" class="w350" />
                    <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                            <span class="field_description_noicon"><?php echo $this->_tpl_vars['lang']['name']; ?>
 (<b><?php echo $this->_tpl_vars['language']['name']; ?>
</b>)</span>
                        </div>
                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
            </td>
        </tr>
        <?php endif; ?>

        <tr>
            <td class="name">
                <?php echo $this->_tpl_vars['lang']['title']; ?>

            </td>
            <td class="field">
                <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                    <ul class="tabs">
                        <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
                        <li lang="<?php echo $this->_tpl_vars['language']['Code']; ?>
" <?php if (($this->_foreach['langF']['iteration'] <= 1)): ?>class="active"<?php endif; ?>><?php echo $this->_tpl_vars['language']['name']; ?>
</li>
                        <?php endforeach; endif; unset($_from); ?>
                    </ul>
                <?php endif; ?>

                <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
                    <?php if (count($this->_tpl_vars['allLangs']) > 1): ?><div class="tab_area<?php if (! ($this->_foreach['langF']['iteration'] <= 1)): ?> hide<?php endif; ?> <?php echo $this->_tpl_vars['language']['Code']; ?>
"><?php endif; ?>
                    <input type="text" name="title[<?php echo $this->_tpl_vars['language']['Code']; ?>
]" value="<?php echo $this->_tpl_vars['sPost']['title'][$this->_tpl_vars['language']['Code']]; ?>
" maxlength="350" class="w350" />
                    <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                            <span class="field_description_noicon"><?php echo $this->_tpl_vars['lang']['title']; ?>
 (<b><?php echo $this->_tpl_vars['language']['name']; ?>
</b>)</span>
                        </div>
                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
            </td>
        </tr>

        <tr>
            <td class="name">
                <?php echo $this->_tpl_vars['lang']['h1_heading']; ?>

            </td>
            <td class="field">
                <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                    <ul class="tabs">
                        <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
                        <li lang="<?php echo $this->_tpl_vars['language']['Code']; ?>
" <?php if (($this->_foreach['langF']['iteration'] <= 1)): ?>class="active"<?php endif; ?>><?php echo $this->_tpl_vars['language']['name']; ?>
</li>
                        <?php endforeach; endif; unset($_from); ?>
                    </ul>
                <?php endif; ?>

                <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
                    <?php if (count($this->_tpl_vars['allLangs']) > 1): ?><div class="tab_area<?php if (! ($this->_foreach['langF']['iteration'] <= 1)): ?> hide<?php endif; ?> <?php echo $this->_tpl_vars['language']['Code']; ?>
"><?php endif; ?>
                    <input type="text" name="h1[<?php echo $this->_tpl_vars['language']['Code']; ?>
]" value="<?php echo $this->_tpl_vars['sPost']['h1'][$this->_tpl_vars['language']['Code']]; ?>
" maxlength="350" class="w350" />
                    <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                            <span class="field_description_noicon"><?php echo $this->_tpl_vars['lang']['h1_heading']; ?>
 (<b><?php echo $this->_tpl_vars['language']['name']; ?>
</b>)</span>
                        </div>
                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
            </td>
        </tr>

        <tr>
            <td class="name">
                <?php echo $this->_tpl_vars['lang']['description']; ?>

            </td>
            <td class="field">
                <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                    <ul class="tabs">
                        <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
                            <li lang="<?php echo $this->_tpl_vars['language']['Code']; ?>
" <?php if (($this->_foreach['langF']['iteration'] <= 1)): ?>class="active"<?php endif; ?>><?php echo $this->_tpl_vars['language']['name']; ?>
</li>
                        <?php endforeach; endif; unset($_from); ?>
                    </ul>
                <?php endif; ?>

                <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
                    <?php if (count($this->_tpl_vars['allLangs']) > 1): ?><div class="ckeditor tab_area<?php if (! ($this->_foreach['langF']['iteration'] <= 1)): ?> hide<?php endif; ?> <?php echo $this->_tpl_vars['language']['Code']; ?>
"><?php endif; ?>
                    <?php $this->assign('dCode', ((is_array($_tmp='description_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['language']['Code']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['language']['Code']))); ?>
                    <?php echo $this->_plugins['function']['fckEditor'][0][0]->fckEditor(array('name' => ((is_array($_tmp='description_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['language']['Code']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['language']['Code'])),'width' => '100%','height' => '140','value' => $this->_tpl_vars['sPost'][$this->_tpl_vars['dCode']]), $this);?>

                    <?php if (count($this->_tpl_vars['allLangs']) > 1): ?></div><?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
            </td>
        </tr>

        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['meta_description']; ?>
</td>
            <td class="field">
                <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                    <ul class="tabs">
                        <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
                        <li lang="<?php echo $this->_tpl_vars['language']['Code']; ?>
" <?php if (($this->_foreach['langF']['iteration'] <= 1)): ?>class="active"<?php endif; ?>><?php echo $this->_tpl_vars['language']['name']; ?>
</li>
                        <?php endforeach; endif; unset($_from); ?>
                    </ul>
                <?php endif; ?>

                <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
                    <?php $this->assign('lMetaDescription', $this->_tpl_vars['sPost']['meta_description']); ?>
                    <?php if (count($this->_tpl_vars['allLangs']) > 1): ?><div class="tab_area<?php if (! ($this->_foreach['langF']['iteration'] <= 1)): ?> hide<?php endif; ?> <?php echo $this->_tpl_vars['language']['Code']; ?>
"><?php endif; ?>
                    <textarea cols="50" rows="2" name="meta_description[<?php echo $this->_tpl_vars['language']['Code']; ?>
]"><?php echo $this->_tpl_vars['lMetaDescription'][$this->_tpl_vars['language']['Code']]; ?>
</textarea>
                    <?php if (count($this->_tpl_vars['allLangs']) > 1): ?></div><?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
            </td>
        </tr>

        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['meta_keywords']; ?>
</td>
            <td class="field">
                <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                    <ul class="tabs">
                        <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
                        <li lang="<?php echo $this->_tpl_vars['language']['Code']; ?>
" <?php if (($this->_foreach['langF']['iteration'] <= 1)): ?>class="active"<?php endif; ?>><?php echo $this->_tpl_vars['language']['name']; ?>
</li>
                        <?php endforeach; endif; unset($_from); ?>
                    </ul>
                <?php endif; ?>

                <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
                    <?php $this->assign('lMetaKeywords', $this->_tpl_vars['sPost']['meta_keywords']); ?>
                    <?php if (count($this->_tpl_vars['allLangs']) > 1): ?><div class="tab_area<?php if (! ($this->_foreach['langF']['iteration'] <= 1)): ?> hide<?php endif; ?> <?php echo $this->_tpl_vars['language']['Code']; ?>
"><?php endif; ?>
                    <textarea cols="50" rows="2" name="meta_keywords[<?php echo $this->_tpl_vars['language']['Code']; ?>
]"><?php echo $this->_tpl_vars['lMetaKeywords'][$this->_tpl_vars['language']['Code']]; ?>
</textarea>
                    <?php if (count($this->_tpl_vars['allLangs']) > 1): ?></div><?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
            </td>
        </tr>

        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['status']; ?>
</td>
            <td class="field">
                <select name="status">
                    <option value="active" <?php if ($this->_tpl_vars['sPost']['status'] == 'active'): ?>selected="selected"<?php endif; ?>>
                        <?php echo $this->_tpl_vars['lang']['active']; ?>

                    </option>
                    <option value="approval" <?php if ($this->_tpl_vars['sPost']['status'] == 'approval'): ?>selected="selected"<?php endif; ?>>
                        <?php echo $this->_tpl_vars['lang']['approval']; ?>

                    </option>
                </select>
            </td>
        </tr>

        <tr>
            <td></td>
            <td class="field">
                <input type="submit" value="<?php echo $this->_tpl_vars['lang']['edit']; ?>
" />
            </td>
        </tr>
        </table>
    </form>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_end.tpl') : smarty_modifier_cat($_tmp, 'm_block_end.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php elseif ($_GET['action']): ?>
    <?php $this->assign('sPost', $_POST); ?>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_start.tpl') : smarty_modifier_cat($_tmp, 'm_block_start.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <form action="<?php echo $this->_tpl_vars['rlBaseC']; ?>
action=<?php if ($_GET['action'] == 'add'): ?>add<?php elseif ($_GET['action'] == 'edit'): ?>edit&box=<?php echo $_GET['box']; ?>
<?php endif; ?>" method="post">
        <input type="hidden" name="submit" value="1" />

        <?php if ($_GET['action'] == 'edit'): ?>
            <input type="hidden" name="fromPost" value="1" />
        <?php endif; ?>

        <table class="form">
            <tr>
                <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['fb_field']; ?>
</td>
                <td class="field">
                    <select name="fbb[field_key]" <?php if ($_GET['action'] == 'edit'): ?>disabled="disabled" class="disabled"<?php endif; ?>>
                        <option value="0"><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
                        <?php $_from = $this->_tpl_vars['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
                            <option
                                <?php if ($this->_tpl_vars['sPost']['fbb']['field_key'] == $this->_tpl_vars['field']['Key']): ?>selected="selected"<?php endif; ?>
                                value="<?php echo $this->_tpl_vars['field']['Key']; ?>
">
                                    <?php echo $this->_tpl_vars['field']['name']; ?>

                            </option>
                        <?php endforeach; endif; unset($_from); ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['listing_type']; ?>
</td>
                <td class="field">
                    <select name="fbb[listing_type]">
                        <option value="">- <?php echo $this->_tpl_vars['lang']['all']; ?>
 -</option>
                            <?php $_from = $this->_tpl_vars['listing_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['l_type']):
?>
                                <option
                                    <?php if ($this->_tpl_vars['sPost']['fbb']['listing_type'] == $this->_tpl_vars['l_type']['Key']): ?>selected="selected"<?php endif; ?>
                                    value="<?php echo $this->_tpl_vars['l_type']['Key']; ?>
">
                                        <?php echo $this->_tpl_vars['l_type']['name']; ?>

                                </option>
                            <?php endforeach; endif; unset($_from); ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['fb_show_empty']; ?>
</td>
                <td class="field">
                    <?php if ($this->_tpl_vars['sPost']['fbb']['show_empty'] == '1'): ?>
                        <?php $this->assign('empty_yes', 'checked="checked"'); ?>
                    <?php elseif ($this->_tpl_vars['sPost']['fbb']['show_empty'] == '0'): ?>
                        <?php $this->assign('empty_no', 'checked="checked"'); ?>
                    <?php else: ?>
                        <?php $this->assign('empty_yes', 'checked="checked"'); ?>
                    <?php endif; ?>

                    <label>
                        <input <?php echo $this->_tpl_vars['empty_yes']; ?>
 class="lang_add" type="radio" name="fbb[show_empty]" value="1" />
                            <?php echo $this->_tpl_vars['lang']['yes']; ?>

                    </label>
                    <label>
                        <input <?php echo $this->_tpl_vars['empty_no']; ?>
 class="lang_add" type="radio" name="fbb[show_empty]" value="0" />
                            <?php echo $this->_tpl_vars['lang']['no']; ?>

                    </label>
                </td>
            </tr>

            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['display_counter']; ?>
</td>
                <td class="field">
                    <?php if ($this->_tpl_vars['sPost']['fbb']['show_count'] == '1'): ?>
                        <?php $this->assign('count_yes', 'checked="checked"'); ?>
                    <?php elseif ($this->_tpl_vars['sPost']['fbb']['show_count'] == '0'): ?>
                        <?php $this->assign('count_no', 'checked="checked"'); ?>
                    <?php else: ?>
                        <?php $this->assign('count_yes', 'checked="checked"'); ?>
                    <?php endif; ?>

                    <label>
                        <input <?php echo $this->_tpl_vars['count_yes']; ?>
 class="lang_add" type="radio" name="fbb[show_count]" value="1" />
                            <?php echo $this->_tpl_vars['lang']['yes']; ?>

                    </label>
                    <label>
                        <input <?php echo $this->_tpl_vars['count_no']; ?>
 class="lang_add" type="radio" name="fbb[show_count]" value="0" />
                            <?php echo $this->_tpl_vars['lang']['no']; ?>

                    </label>

                    <label id="counter_single_line" class="hide"><input type="checkbox" name="single_line_counter" value="1"<?php if ($this->_tpl_vars['sPost']['single_line_counter']): ?> checked="chekced"<?php endif; ?> /> <?php echo $this->_tpl_vars['lang']['fbb_counter_single_line']; ?>
</label>
                </td>
            </tr>

            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['order_type']; ?>
</td>
                <td class="field">
                    <select name="sorting">
                        <option value="position" <?php if ($this->_tpl_vars['sPost']['sorting'] == 'position'): ?>selected="selected"<?php endif; ?>>
                            <?php echo $this->_tpl_vars['lang']['position']; ?>

                        </option>
                        <option value="alphabet" <?php if ($this->_tpl_vars['sPost']['sorting'] == 'alphabet'): ?>selected="selected"<?php endif; ?>>
                            <?php echo $this->_tpl_vars['lang']['alphabetic']; ?>

                        </option>
                    </select>
                </td>
            </tr>

            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['status']; ?>
</td>
                <td class="field">
                    <select name="status">
                        <option value="active" <?php if ($this->_tpl_vars['sPost']['box']['status'] == 'active'): ?>selected="selected"<?php endif; ?>>
                            <?php echo $this->_tpl_vars['lang']['active']; ?>

                        </option>
                        <option value="approval" <?php if ($this->_tpl_vars['sPost']['box']['status'] == 'approval'): ?>selected="selected"<?php endif; ?>>
                            <?php echo $this->_tpl_vars['lang']['approval']; ?>

                        </option>
                    </select>
                </td>
            </tr>

            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['fb_box_style']; ?>
</td>
                <td class="field">
                    <select name="fbb[style]">
                        <option value="text" <?php if ($this->_tpl_vars['sPost']['fbb']['style'] == 'text'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['fb_box_style_text']; ?>
</option>
                        <option value="text_pic" <?php if ($this->_tpl_vars['sPost']['fbb']['style'] == 'text_pic'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['fb_box_style_text_pic']; ?>
</option>
                        <option value="icon" <?php if ($this->_tpl_vars['sPost']['fbb']['style'] == 'icon'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['fb_box_style_icon']; ?>
</option>
                        <option value="responsive" <?php if ($this->_tpl_vars['sPost']['fbb']['style'] == 'responsive'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['fb_box_style_responsive']; ?>
</option>
                    </select>
                </td>
            </tr>
            </table>

            <div id="plate_orientation_area" class="hide">
                <table class="form">
                <tr>
                    <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['fbb_orientation']; ?>
</td>
                    <td class="field">
                        <?php if ($this->_tpl_vars['sPost']['fbb']['orientation'] == 'landscape'): ?>
                            <?php $this->assign('landscape', 'checked="checked"'); ?>
                        <?php elseif ($this->_tpl_vars['sPost']['fbb']['orientation'] == 'portrait'): ?>
                            <?php $this->assign('portrait', 'checked="checked"'); ?>
                        <?php else: ?>
                            <?php $this->assign('landscape', 'checked="checked"'); ?>
                        <?php endif; ?>
                        <label>
                            <input <?php echo $this->_tpl_vars['landscape']; ?>
 class="lang_add" type="radio" name="fbb[orientation]" value="landscape" />
                                <?php echo $this->_tpl_vars['lang']['fbb_landscape']; ?>
</label>
                        <label>
                            <input <?php echo $this->_tpl_vars['portrait']; ?>
 class="lang_add" type="radio" name="fbb[orientation]" value="portrait" />
                                <?php echo $this->_tpl_vars['lang']['fbb_portrait']; ?>
</label>
                    </td>
                </tr>
            </table>
            </div>

            <div id="icons_area" class="hide">
                <table class="form">
                <tr>
                    <td class="divider" colspan="3">
                        <div class="inner" id="icon_settings_heading"><?php echo $this->_tpl_vars['lang']['fb_icon_settings']; ?>
</div>
                    </td>
                </tr>
                <tr>
                    <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['fb_icons_position']; ?>
</td>
                    <td class="field">
                        <select name="fbb[icons_position]">
                            <?php $_from = ((is_array($_tmp=",")) ? $this->_run_mod_handler('explode', true, $_tmp, "left,right,top,bottom") : explode($_tmp, "left,right,top,bottom")); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['side']):
?>
                                <option
                                    <?php if ($this->_tpl_vars['sPost']['fbb']['icons_position']): ?>
                                        <?php if ($this->_tpl_vars['sPost']['fbb']['icons_position'] == $this->_tpl_vars['side']): ?>
                                            selected="selected"
                                        <?php endif; ?>
                                    <?php elseif ($this->_tpl_vars['side'] == 'top'): ?>
                                        selected="selected"
                                    <?php endif; ?>
                                    value="<?php echo $this->_tpl_vars['side']; ?>
">
                                        <?php echo $this->_tpl_vars['sides'][$this->_tpl_vars['side']]; ?>

                                </option>
                            <?php endforeach; endif; unset($_from); ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['width']; ?>
</td>
                    <td class="field">
                        <input
                            type="text"
                            class="numeric"
                            name="fbb[icons_width]"
                            style="width:30px"
                            value="<?php if ($this->_tpl_vars['sPost']['fbb']['icons_width']): ?><?php echo $this->_tpl_vars['sPost']['fbb']['icons_width']; ?>
<?php else: ?>70<?php endif; ?>"
                            />
                    </td>
                </tr>
                <tr>
                    <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['height']; ?>
</td>
                    <td class="field">
                        <input
                            type="text"
                            class="numeric"
                            name="fbb[icons_height]"
                            style="width:30px"
                            value="<?php if ($this->_tpl_vars['sPost']['fbb']['icons_height']): ?><?php echo $this->_tpl_vars['sPost']['fbb']['icons_height']; ?>
<?php else: ?>70<?php endif; ?>"
                            />
                    </td>
                </tr>
                <tr>
                    <td class="name"><?php echo $this->_tpl_vars['lang']['fbb_resize_pictures']; ?>
</td>
                    <td class="field">
                        <?php $this->assign('checkbox_field', 'resize_icons'); ?>

                        <?php if ($this->_tpl_vars['sPost']['fbb'][$this->_tpl_vars['checkbox_field']] == '1'): ?>
                            <?php $this->assign(((is_array($_tmp=$this->_tpl_vars['checkbox_field'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_yes') : smarty_modifier_cat($_tmp, '_yes')), 'checked="checked"'); ?>
                        <?php elseif ($this->_tpl_vars['sPost']['fbb'][$this->_tpl_vars['checkbox_field']] == '0'): ?>
                            <?php $this->assign(((is_array($_tmp=$this->_tpl_vars['checkbox_field'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_no') : smarty_modifier_cat($_tmp, '_no')), 'checked="checked"'); ?>
                        <?php else: ?>
                            <?php $this->assign(((is_array($_tmp=$this->_tpl_vars['checkbox_field'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_yes') : smarty_modifier_cat($_tmp, '_yes')), 'checked="checked"'); ?>
                        <?php endif; ?>

                        <input <?php echo $this->_tpl_vars['resize_icons_yes']; ?>
 type="radio" id="<?php echo $this->_tpl_vars['checkbox_field']; ?>
_yes" name="fbb[<?php echo $this->_tpl_vars['checkbox_field']; ?>
]" value="1" /> <label for="<?php echo $this->_tpl_vars['checkbox_field']; ?>
_yes"><?php echo $this->_tpl_vars['lang']['yes']; ?>
</label>
                        <input <?php echo $this->_tpl_vars['resize_icons_no']; ?>
 type="radio" id="<?php echo $this->_tpl_vars['checkbox_field']; ?>
_no" name="fbb[<?php echo $this->_tpl_vars['checkbox_field']; ?>
]" value="0" /> <label for="<?php echo $this->_tpl_vars['checkbox_field']; ?>
_no"><?php echo $this->_tpl_vars['lang']['no']; ?>
</label>
                    </td>
                </tr>
                </table>
            </div>

            <table class="form">
            <tr>
                <td class="divider" colspan="3">
                    <div class="inner"><?php echo $this->_tpl_vars['lang']['fb_box_settings']; ?>
</div>
                </td>
            </tr>

            <tr>
                <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['name']; ?>
</td>
                <td class="field">
                    <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                        <ul class="tabs">
                            <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
                                <li
                                    lang="<?php echo $this->_tpl_vars['language']['Code']; ?>
"
                                    <?php if (($this->_foreach['langF']['iteration'] <= 1)): ?>class="active"<?php endif; ?>><?php echo $this->_tpl_vars['language']['name']; ?>

                                </li>
                            <?php endforeach; endif; unset($_from); ?>
                        </ul>
                    <?php endif; ?>

                    <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
                        <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                            <div class="tab_area<?php if (! ($this->_foreach['langF']['iteration'] <= 1)): ?> hide<?php endif; ?> <?php echo $this->_tpl_vars['language']['Code']; ?>
">
                        <?php endif; ?>

                            <input
                                type="text"
                                name="box[name][<?php echo $this->_tpl_vars['language']['Code']; ?>
]"
                                value="<?php echo $this->_tpl_vars['sPost']['box']['name'][$this->_tpl_vars['language']['Code']]; ?>
"
                                style="width: 250px;"
                                maxlength="50"/>

                        <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                                <span class="field_description_noicon">
                                    <?php echo $this->_tpl_vars['lang']['name']; ?>
 (<b><?php echo $this->_tpl_vars['language']['name']; ?>
</b>)
                                </span>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                </td>
            </tr>

            <tr>
                <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['block_side']; ?>
</td>
                <td class="field">
                    <select name="box[side]">
                        <option value=""><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
                            <?php $_from = $this->_tpl_vars['l_block_sides']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sides_f'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sides_f']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sKey'] => $this->_tpl_vars['block_side']):
        $this->_foreach['sides_f']['iteration']++;
?>
                                <?php if ($this->_tpl_vars['sKey'] != 'header_banner' && $this->_tpl_vars['sKey'] != 'integrated_banner'): ?>
                                <option
                                    value="<?php echo $this->_tpl_vars['sKey']; ?>
"
                                    <?php if ($this->_tpl_vars['sKey'] == $this->_tpl_vars['sPost']['box']['side']): ?>selected="selected"<?php endif; ?>>
                                        <?php echo $this->_tpl_vars['block_side']; ?>

                                </option>
                                <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>
                    </select>
                </td>
            </tr>
            </table>

            <div class="column-options">
                <table class="form">
                <tr>
                    <td class="name"><?php echo $this->_tpl_vars['lang']['number_of_columns']; ?>
</td>
                    <td class="field">
                        <select name="fbb[columns]">
                            <option value="auto"<?php if ($this->_tpl_vars['sPost']['fbb']['columns'] == 'auto' || ! $this->_tpl_vars['sPost']['fbb']['columns']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['fb_auto']; ?>
</option>
                            <?php unset($this->_sections['fb_cols']);
$this->_sections['fb_cols']['name'] = 'fb_cols';
$this->_sections['fb_cols']['start'] = (int)1;
$this->_sections['fb_cols']['loop'] = is_array($_loop=5) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['fb_cols']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['fb_cols']['show'] = true;
$this->_sections['fb_cols']['max'] = $this->_sections['fb_cols']['loop'];
if ($this->_sections['fb_cols']['start'] < 0)
    $this->_sections['fb_cols']['start'] = max($this->_sections['fb_cols']['step'] > 0 ? 0 : -1, $this->_sections['fb_cols']['loop'] + $this->_sections['fb_cols']['start']);
else
    $this->_sections['fb_cols']['start'] = min($this->_sections['fb_cols']['start'], $this->_sections['fb_cols']['step'] > 0 ? $this->_sections['fb_cols']['loop'] : $this->_sections['fb_cols']['loop']-1);
if ($this->_sections['fb_cols']['show']) {
    $this->_sections['fb_cols']['total'] = min(ceil(($this->_sections['fb_cols']['step'] > 0 ? $this->_sections['fb_cols']['loop'] - $this->_sections['fb_cols']['start'] : $this->_sections['fb_cols']['start']+1)/abs($this->_sections['fb_cols']['step'])), $this->_sections['fb_cols']['max']);
    if ($this->_sections['fb_cols']['total'] == 0)
        $this->_sections['fb_cols']['show'] = false;
} else
    $this->_sections['fb_cols']['total'] = 0;
if ($this->_sections['fb_cols']['show']):

            for ($this->_sections['fb_cols']['index'] = $this->_sections['fb_cols']['start'], $this->_sections['fb_cols']['iteration'] = 1;
                 $this->_sections['fb_cols']['iteration'] <= $this->_sections['fb_cols']['total'];
                 $this->_sections['fb_cols']['index'] += $this->_sections['fb_cols']['step'], $this->_sections['fb_cols']['iteration']++):
$this->_sections['fb_cols']['rownum'] = $this->_sections['fb_cols']['iteration'];
$this->_sections['fb_cols']['index_prev'] = $this->_sections['fb_cols']['index'] - $this->_sections['fb_cols']['step'];
$this->_sections['fb_cols']['index_next'] = $this->_sections['fb_cols']['index'] + $this->_sections['fb_cols']['step'];
$this->_sections['fb_cols']['first']      = ($this->_sections['fb_cols']['iteration'] == 1);
$this->_sections['fb_cols']['last']       = ($this->_sections['fb_cols']['iteration'] == $this->_sections['fb_cols']['total']);
?>
                            <option value="<?php echo $this->_sections['fb_cols']['index']; ?>
"<?php if ($this->_tpl_vars['sPost']['fbb']['columns'] == $this->_sections['fb_cols']['index']): ?> selected="selected"<?php endif; ?>>
                                <?php echo $this->_sections['fb_cols']['index']; ?>
 <?php echo $this->_tpl_vars['lang']['fb_columns']; ?>
</option>
                            <?php endfor; endif; ?>
                        </select>
                    </td>
                </tr>
                </table>
            </div>

            <table class="form">
            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['use_block_design']; ?>
</td>
                <td class="field">
                    <?php if ($this->_tpl_vars['sPost']['box']['tpl'] == '1'): ?>
                        <?php $this->assign('tpl_yes', 'checked="checked"'); ?>
                    <?php elseif ($this->_tpl_vars['sPost']['box']['tpl'] == '0'): ?>
                        <?php $this->assign('tpl_no', 'checked="checked"'); ?>
                    <?php else: ?>
                        <?php $this->assign('tpl_yes', 'checked="checked"'); ?>
                    <?php endif; ?>
                    <label>
                        <input <?php echo $this->_tpl_vars['tpl_yes']; ?>
 class="lang_add" type="radio" name="box[tpl]" value="1" />
                            <?php echo $this->_tpl_vars['lang']['yes']; ?>
</label>
                    <label>
                        <input <?php echo $this->_tpl_vars['tpl_no']; ?>
 class="lang_add" type="radio" name="box[tpl]" value="0" />
                            <?php echo $this->_tpl_vars['lang']['no']; ?>
</label>
                </td>
            </tr>

            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['use_block_header']; ?>
</td>
                <td class="field">
                    <?php if ($this->_tpl_vars['sPost']['box']['header'] == '1'): ?>
                        <?php $this->assign('header_yes', 'checked="checked"'); ?>
                    <?php elseif ($this->_tpl_vars['sPost']['box']['header'] == '0'): ?>
                        <?php $this->assign('header_no', 'checked="checked"'); ?>
                    <?php else: ?>
                        <?php $this->assign('header_yes', 'checked="checked"'); ?>
                    <?php endif; ?>

                    <label>
                        <input <?php echo $this->_tpl_vars['header_yes']; ?>
 class="lang_add" type="radio" name="box[header]" value="1" />
                            <?php echo $this->_tpl_vars['lang']['yes']; ?>
</label>
                    <label>
                        <input <?php echo $this->_tpl_vars['header_no']; ?>
 class="lang_add" type="radio" name="box[header]" value="0" />
                            <?php echo $this->_tpl_vars['lang']['no']; ?>
</label>
                </td>
            </tr>

            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['show_on_pages']; ?>
</td>
                <td class="field" id="pages_obj">
                    <fieldset class="light">
                        <?php $this->assign('pages_phrase', 'admin_controllers+name+pages'); ?>
                        <legend id="legend_pages" class="up"><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['pages_phrase']]; ?>
</legend>
                        <div id="pages">
                            <div id="pages_cont" <?php if (! empty ( $this->_tpl_vars['sPost']['box']['show_on_all'] )): ?>style="display: none;"<?php endif; ?>>
                                <?php $this->assign('bPages', $this->_tpl_vars['sPost']['box']['pages']); ?>
                                <table class="sTable" style="margin-bottom: 15px;">
                                <tr>
                                <td valign="top">
                                    <?php $_from = $this->_tpl_vars['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['pagesF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['pagesF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['page']):
        $this->_foreach['pagesF']['iteration']++;
?>
                                    <?php $this->assign('pId', $this->_tpl_vars['page']['ID']); ?>
                                    <div style="padding: 2px 8px;">
                                        <input
                                            class="checkbox"
                                            <?php if (isset ( $this->_tpl_vars['bPages'][$this->_tpl_vars['pId']] )): ?>checked="checked"<?php endif; ?>
                                            id="page_<?php echo $this->_tpl_vars['page']['ID']; ?>
"
                                            type="checkbox"
                                            name="box[pages][<?php echo $this->_tpl_vars['page']['ID']; ?>
]"
                                            value="<?php echo $this->_tpl_vars['page']['ID']; ?>
"/>

                                            <label class="cLabel" for="page_<?php echo $this->_tpl_vars['page']['ID']; ?>
"><?php echo $this->_tpl_vars['page']['name']; ?>
</label>
                                    </div>
                                    <?php $this->assign('perCol', ((is_array($_tmp=$this->_foreach['pagesF']['total']/3)) ? $this->_run_mod_handler('ceil', true, $_tmp) : ceil($_tmp))); ?>

                                    <?php if ($this->_foreach['pagesF']['iteration'] % $this->_tpl_vars['perCol'] == 0): ?>
                                        </td>
                                        <td valign="top">
                                    <?php endif; ?>
                                    <?php endforeach; endif; unset($_from); ?>
                                    </td>
                                </tr>
                                </table>
                            </div>

                            <div class="grey_area" style="margin: 0 0 5px;">
                                <label>
                                    <input
                                        id="show_on_all"
                                        <?php if ($this->_tpl_vars['sPost']['box']['show_on_all']): ?>checked="checked"<?php endif; ?>
                                        type="checkbox"
                                        name="box[show_on_all]"
                                        value="true"/>
                                            <?php echo $this->_tpl_vars['lang']['sticky']; ?>

                                </label>
                                <span id="pages_nav" <?php if ($this->_tpl_vars['sPost']['box']['show_on_all']): ?>class="hide"<?php endif; ?>>
                                    <span onclick="$('#pages_cont input').prop('checked', true);" class="green_10">
                                        <?php echo $this->_tpl_vars['lang']['check_all']; ?>
</span>
                                    <span class="divider"> | </span>
                                    <span onclick="$('#pages_cont input').prop('checked', false);" class="green_10">
                                        <?php echo $this->_tpl_vars['lang']['uncheck_all']; ?>
</span>
                                </span>
                            </div>
                        </div>
                    </fieldset>
                </td>
            </tr>

            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['show_in_categories']; ?>
</td>
                <td class="field">
                    <fieldset class="light">
                        <legend id="legend_cats" class="up" onclick="fieldset_action('cats');">
                            <?php echo $this->_tpl_vars['lang']['categories']; ?>
</legend>

                        <div id="cats">
                            <div
                                id="cat_checkboxed"
                                style="margin: 0 0 8px;<?php if ($this->_tpl_vars['sPost']['box']['cat_sticky']): ?>display: none<?php endif; ?>">

                                <div class="tree">
                                    <?php $_from = $this->_tpl_vars['sections']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['section']):
?>
                                        <fieldset class="light">
                                            <legend
                                                id="legend_section_<?php echo $this->_tpl_vars['section']['ID']; ?>
"
                                                class="up"
                                                onclick="fieldset_action('section_<?php echo $this->_tpl_vars['section']['ID']; ?>
');">
                                                <?php echo $this->_tpl_vars['section']['name']; ?>
</legend>

                                            <div id="section_<?php echo $this->_tpl_vars['section']['ID']; ?>
">
                                            <?php if (! empty ( $this->_tpl_vars['section']['Categories'] )): ?>
                                                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'category_level_checkbox.tpl') : smarty_modifier_cat($_tmp, 'category_level_checkbox.tpl')), 'smarty_include_vars' => array('categories' => $this->_tpl_vars['section']['Categories'],'first' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                            <?php else: ?>
                                                <div style="padding: 0 0 8px 10px;"><?php echo $this->_tpl_vars['lang']['no_items_in_sections']; ?>
</div>
                                            <?php endif; ?>
                                            </div>
                                        </fieldset>
                                    <?php endforeach; endif; unset($_from); ?>
                                </div>

                                <div style="padding: 0 0 6px 37px;">
                                    <label>
                                        <input
                                            <?php if (! empty ( $this->_tpl_vars['sPost']['subcategories'] )): ?>checked="checked"<?php endif; ?>
                                            type="checkbox"
                                            name="box[subcategories]"
                                            value="1"
                                            /> <?php echo $this->_tpl_vars['lang']['include_subcats']; ?>

                                    </label>
                                </div>
                            </div>

                            <script type="text/javascript">
                            var tree_selected = <?php if ($_POST['categories']): ?>[<?php $_from = $_POST['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['postcatF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['postcatF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['post_cat']):
        $this->_foreach['postcatF']['iteration']++;
?>['<?php echo $this->_tpl_vars['post_cat']; ?>
']<?php if (! ($this->_foreach['postcatF']['iteration'] == $this->_foreach['postcatF']['total'])): ?>,<?php endif; ?><?php endforeach; endif; unset($_from); ?>]<?php else: ?>false<?php endif; ?>;
                            var tree_parentPoints = <?php if ($this->_tpl_vars['parentPoints']): ?>[<?php $_from = $this->_tpl_vars['parentPoints']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['parentF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['parentF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['parent_point']):
        $this->_foreach['parentF']['iteration']++;
?>['<?php echo $this->_tpl_vars['parent_point']; ?>
']<?php if (! ($this->_foreach['parentF']['iteration'] == $this->_foreach['parentF']['total'])): ?>,<?php endif; ?><?php endforeach; endif; unset($_from); ?>]<?php else: ?>false<?php endif; ?>;
                            <?php echo '

                            $(document).ready(function(){
                                flynax.treeLoadLevel(
                                    \'checkbox\',
                                    \'flynax.openTree(tree_selected, tree_parentPoints)\',
                                    \'div#cat_checkboxed\'
                                );
                                flynax.openTree(tree_selected, tree_parentPoints);

                                $(\'input[name="box[cat_sticky]"]\').click(function(){
                                    $(\'#cat_checkboxed\').slideToggle();
                                    $(\'#cats_nav\').fadeToggle();
                                });
                            });

                            '; ?>

                            </script>

                            <div class="grey_area">
                                <label>
                                    <input
                                        class="checkbox"
                                        <?php if ($this->_tpl_vars['sPost']['box']['cat_sticky']): ?>checked="checked"<?php endif; ?>
                                        type="checkbox"
                                        name="box[cat_sticky]"
                                        value="true" />
                                    <?php echo $this->_tpl_vars['lang']['sticky']; ?>

                                </label>
                                <span id="cats_nav" <?php if ($this->_tpl_vars['sPost']['cat_sticky']): ?>class="hide"<?php endif; ?>>
                                    <span
                                        onclick="$('#cat_checkboxed div.tree input').prop('checked', true);"
                                        class="green_10">
                                            <?php echo $this->_tpl_vars['lang']['check_all']; ?>

                                    </span>
                                    <span class="divider"> | </span>
                                    <span
                                        onclick="$('#cat_checkboxed div.tree input').prop('checked', false);"
                                        class="green_10">
                                            <?php echo $this->_tpl_vars['lang']['uncheck_all']; ?>

                                    </span>
                                </span>
                            </div>

                        </div>
                    </fieldset>
                </td>
            </tr>

            <tr>
                <td class="divider" colspan="3">
                    <div class="inner"><?php echo $this->_tpl_vars['lang']['fb_page_settings']; ?>
</div>
                </td>
            </tr>

            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['fb_use_parent_page']; ?>
</td>
                <td class="field">
                    <?php if ($this->_tpl_vars['sPost']['fbb']['parent_page'] == '1'): ?>
                        <?php $this->assign('parent_page_yes', 'checked="checked"'); ?>
                    <?php elseif ($this->_tpl_vars['sPost']['fbb']['parent_page'] == '0'): ?>
                        <?php $this->assign('parent_page_no', 'checked="checked"'); ?>
                    <?php else: ?>
                        <?php $this->assign('parent_page_no', 'checked="checked"'); ?>
                    <?php endif; ?>

                    <label>
                        <input <?php echo $this->_tpl_vars['parent_page_yes']; ?>
 class="lang_add" type="radio" name="fbb[parent_page]" value="1" />
                            <?php echo $this->_tpl_vars['lang']['yes']; ?>

                    </label>
                    <label>
                        <input <?php echo $this->_tpl_vars['parent_page_no']; ?>
 class="lang_add" type="radio" name="fbb[parent_page]" value="0" />
                            <?php echo $this->_tpl_vars['lang']['no']; ?>

                    </label>

                    <span class="field_description"><?php echo $this->_tpl_vars['lang']['fb_use_parent_page_hint']; ?>
</span>
                </td>
            </tr>

            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['page_url']; ?>
</td>
                <td class="field">
                    <?php if (count($this->_tpl_vars['allLangs']) > 1 && $this->_tpl_vars['config']['multilingual_paths']): ?>
                        <div>
                            <ul class="tabs">
                                <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
                                <li lang="<?php echo $this->_tpl_vars['language']['Code']; ?>
" <?php if (($this->_foreach['langF']['iteration'] <= 1)): ?>class="active"<?php endif; ?>><?php echo $this->_tpl_vars['language']['name']; ?>
</li>
                                <?php endforeach; endif; unset($_from); ?>
                            </ul>

                            <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
                                <div class="tab_area<?php if (! ($this->_foreach['langF']['iteration'] <= 1)): ?> hide<?php endif; ?> <?php echo $this->_tpl_vars['language']['Code']; ?>
">
                                    <span style="padding: 0 5px 0 0;" class="field_description_noicon">
                                        <?php echo (defined('RL_URL_HOME') ? @RL_URL_HOME : null); ?>
<?php if ($this->_tpl_vars['language']['Code'] !== $this->_tpl_vars['config']['lang']): ?><?php echo $this->_tpl_vars['language']['Code']; ?>
/<?php endif; ?>
                                    </span>
                                    <input name="page[path][<?php echo $this->_tpl_vars['language']['Code']; ?>
]" type="text" value="<?php echo $this->_tpl_vars['sPost']['page']['path'][$this->_tpl_vars['language']['Code']]; ?>
" maxlength="40" />
                                    <span class="field_description_noicon">/<?php echo $this->_tpl_vars['lang']['fb_option_key']; ?>
</span>
                                    <span class="field_description_noicon path_postfix" style="padding:0">
                                        <?php if ($this->_tpl_vars['sPost']['page']['postfix']): ?>x.html<?php else: ?>y/<?php endif; ?>
                                    </span>
                                </div>
                            <?php endforeach; endif; unset($_from); ?>
                        </div>

                        <div class="field_description" style="margin: 10px 0;"><?php echo $this->_tpl_vars['lang']['fb_regenerate_path_desc']; ?>
</div>
                    <?php else: ?>
                        <table>
                        <tr>
                            <td>
                                <span style="padding: 0 5px 0 0;" class="field_description_noicon">
                                    <?php echo (defined('RL_URL_HOME') ? @RL_URL_HOME : null); ?>
<?php if ((defined('RL_LANG_CODE') ? @RL_LANG_CODE : null) !== $this->_tpl_vars['config']['lang']): ?><?php echo (defined('RL_LANG_CODE') ? @RL_LANG_CODE : null); ?>
/<?php endif; ?>
                                </span>
                            </td>
                            <td>
                                <input type="text" name="page[path][<?php echo $this->_tpl_vars['config']['lang']; ?>
]" value="<?php echo $this->_tpl_vars['sPost']['page']['path'][$this->_tpl_vars['config']['lang']]; ?>
" />
                            </td>
                            <td>
                                <span class="field_description_noicon">/<?php echo $this->_tpl_vars['lang']['fb_option_key']; ?>
</span>
                                <span class="field_description_noicon" style="padding:0" id="path_postfix">
                                    <?php if ($this->_tpl_vars['sPost']['page']['postfix']): ?>.html<?php else: ?>/<?php endif; ?>
                                </span>
                            </td>
                            <td>
                                <?php if ($_GET['action'] == 'add'): ?>
                                    <span class="field_description"> - <?php echo $this->_tpl_vars['lang']['fb_regenerate_path_desc']; ?>
</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                        </table>
                    <?php endif; ?>
                </td>
            </tr>

            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['fb_html_postfix']; ?>
</td>
                <td class="field">
                    <?php if ($this->_tpl_vars['sPost']['fbb']['postfix'] == '1'): ?>
                        <?php $this->assign('postfix_yes', 'checked="checked"'); ?>
                    <?php elseif ($this->_tpl_vars['sPost']['fbb']['postfix'] == '0'): ?>
                        <?php $this->assign('postfix_no', 'checked="checked"'); ?>
                    <?php else: ?>
                        <?php $this->assign('postfix_yes', 'checked="checked"'); ?>
                    <?php endif; ?>

                    <label>
                        <input <?php echo $this->_tpl_vars['postfix_yes']; ?>
 class="lang_add" type="radio" name="fbb[postfix]" value="1" />
                            <?php echo $this->_tpl_vars['lang']['yes']; ?>

                    </label>
                    <label>
                        <input <?php echo $this->_tpl_vars['postfix_no']; ?>
 class="lang_add" type="radio" name="fbb[postfix]" value="0" />
                            <?php echo $this->_tpl_vars['lang']['no']; ?>

                    </label>
                </td>
            </tr>
            </table>

            <div id="page_settings">
                <div class="column-options">
                    <table class="form">
                    <tr>
                        <td class="name"><?php echo $this->_tpl_vars['lang']['number_of_columns']; ?>
</td>
                        <td class="field">
                            <select name="fbb[page_columns]">
                                <option value="auto"<?php if ($this->_tpl_vars['sPost']['fbb']['page_columns'] == 'auto' || ! $this->_tpl_vars['sPost']['fbb']['page_columns']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['fb_auto']; ?>
</option>
                                <?php unset($this->_sections['page_cols']);
$this->_sections['page_cols']['name'] = 'page_cols';
$this->_sections['page_cols']['start'] = (int)2;
$this->_sections['page_cols']['loop'] = is_array($_loop=5) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['page_cols']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['page_cols']['show'] = true;
$this->_sections['page_cols']['max'] = $this->_sections['page_cols']['loop'];
if ($this->_sections['page_cols']['start'] < 0)
    $this->_sections['page_cols']['start'] = max($this->_sections['page_cols']['step'] > 0 ? 0 : -1, $this->_sections['page_cols']['loop'] + $this->_sections['page_cols']['start']);
else
    $this->_sections['page_cols']['start'] = min($this->_sections['page_cols']['start'], $this->_sections['page_cols']['step'] > 0 ? $this->_sections['page_cols']['loop'] : $this->_sections['page_cols']['loop']-1);
if ($this->_sections['page_cols']['show']) {
    $this->_sections['page_cols']['total'] = min(ceil(($this->_sections['page_cols']['step'] > 0 ? $this->_sections['page_cols']['loop'] - $this->_sections['page_cols']['start'] : $this->_sections['page_cols']['start']+1)/abs($this->_sections['page_cols']['step'])), $this->_sections['page_cols']['max']);
    if ($this->_sections['page_cols']['total'] == 0)
        $this->_sections['page_cols']['show'] = false;
} else
    $this->_sections['page_cols']['total'] = 0;
if ($this->_sections['page_cols']['show']):

            for ($this->_sections['page_cols']['index'] = $this->_sections['page_cols']['start'], $this->_sections['page_cols']['iteration'] = 1;
                 $this->_sections['page_cols']['iteration'] <= $this->_sections['page_cols']['total'];
                 $this->_sections['page_cols']['index'] += $this->_sections['page_cols']['step'], $this->_sections['page_cols']['iteration']++):
$this->_sections['page_cols']['rownum'] = $this->_sections['page_cols']['iteration'];
$this->_sections['page_cols']['index_prev'] = $this->_sections['page_cols']['index'] - $this->_sections['page_cols']['step'];
$this->_sections['page_cols']['index_next'] = $this->_sections['page_cols']['index'] + $this->_sections['page_cols']['step'];
$this->_sections['page_cols']['first']      = ($this->_sections['page_cols']['iteration'] == 1);
$this->_sections['page_cols']['last']       = ($this->_sections['page_cols']['iteration'] == $this->_sections['page_cols']['total']);
?>
                                <option value="<?php echo $this->_sections['page_cols']['index']; ?>
"<?php if ($this->_tpl_vars['sPost']['fbb']['page_columns'] == $this->_sections['page_cols']['index']): ?> selected="selected"<?php endif; ?>>
                                    <?php echo $this->_sections['page_cols']['index']; ?>
 <?php echo $this->_tpl_vars['lang']['fb_columns']; ?>
</option>
                                <?php endfor; endif; ?>
                            </select>
                        </td>
                    </tr>
                    </table>
                </div>

                <table class="form">
                <tr>
                    <td class="name">
                        <span class="red">*</span><?php echo $this->_tpl_vars['lang']['name']; ?>

                    </td>
                    <td class="field">
                        <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                            <ul class="tabs">
                                <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
                                <li
                                    lang="<?php echo $this->_tpl_vars['language']['Code']; ?>
"
                                    <?php if (($this->_foreach['langF']['iteration'] <= 1)): ?>class="active"<?php endif; ?>>
                                        <?php echo $this->_tpl_vars['language']['name']; ?>

                                </li>
                                <?php endforeach; endif; unset($_from); ?>
                            </ul>
                        <?php endif; ?>

                        <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
                            <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                                <div class="tab_area<?php if (! ($this->_foreach['langF']['iteration'] <= 1)): ?> hide<?php endif; ?> <?php echo $this->_tpl_vars['language']['Code']; ?>
">
                            <?php endif; ?>

                            <input
                                type="text"
                                name="page[name][<?php echo $this->_tpl_vars['language']['Code']; ?>
]"
                                value="<?php echo $this->_tpl_vars['sPost']['page']['name'][$this->_tpl_vars['language']['Code']]; ?>
"
                                maxlength="350"
                                class="w350"
                            />

                            <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                                    <span class="field_description_noicon"><?php echo $this->_tpl_vars['lang']['title']; ?>
 (<b><?php echo $this->_tpl_vars['language']['name']; ?>
</b>)</span>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>
                    </td>
                </tr>

                <tr>
                    <td class="name">
                        <span class="red">*</span><?php echo $this->_tpl_vars['lang']['title']; ?>

                    </td>
                    <td class="field">
                        <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                            <ul class="tabs">
                                <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
                                <li
                                    lang="<?php echo $this->_tpl_vars['language']['Code']; ?>
"
                                    <?php if (($this->_foreach['langF']['iteration'] <= 1)): ?>class="active"<?php endif; ?>>
                                        <?php echo $this->_tpl_vars['language']['name']; ?>

                                </li>
                                <?php endforeach; endif; unset($_from); ?>
                            </ul>
                        <?php endif; ?>

                        <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
                            <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                                <div class="tab_area<?php if (! ($this->_foreach['langF']['iteration'] <= 1)): ?> hide<?php endif; ?> <?php echo $this->_tpl_vars['language']['Code']; ?>
">
                            <?php endif; ?>

                            <input
                                type="text"
                                name="page[title][<?php echo $this->_tpl_vars['language']['Code']; ?>
]"
                                value="<?php echo $this->_tpl_vars['sPost']['page']['title'][$this->_tpl_vars['language']['Code']]; ?>
"
                                maxlength="350"
                                class="w350"
                            />

                            <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                                    <span class="field_description_noicon"><?php echo $this->_tpl_vars['lang']['title']; ?>
 (<b><?php echo $this->_tpl_vars['language']['name']; ?>
</b>)</span>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>
                    </td>
                </tr>

                <tr>
                    <td class="name">
                        <?php echo $this->_tpl_vars['lang']['h1_heading']; ?>

                    </td>
                    <td class="field">
                        <div>
                            <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                                <ul class="tabs">
                                    <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
                                    <li
                                        lang="<?php echo $this->_tpl_vars['language']['Code']; ?>
"
                                        <?php if (($this->_foreach['langF']['iteration'] <= 1)): ?>class="active"<?php endif; ?>>
                                            <?php echo $this->_tpl_vars['language']['name']; ?>

                                    </li>
                                    <?php endforeach; endif; unset($_from); ?>
                                </ul>
                            <?php endif; ?>

                            <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
                                <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                                    <div class="tab_area<?php if (! ($this->_foreach['langF']['iteration'] <= 1)): ?> hide<?php endif; ?> <?php echo $this->_tpl_vars['language']['Code']; ?>
">
                                <?php endif; ?>

                                <input
                                    type="text"
                                    name="page[h1][<?php echo $this->_tpl_vars['language']['Code']; ?>
]"
                                    value="<?php echo $this->_tpl_vars['sPost']['page']['h1'][$this->_tpl_vars['language']['Code']]; ?>
"
                                    maxlength="350"
                                    class="w350"/>

                                <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                                        <span class="field_description_noicon">
                                            <?php echo $this->_tpl_vars['lang']['h1_heading']; ?>
 (<b><?php echo $this->_tpl_vars['language']['name']; ?>
</b>)</span>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="name"><?php echo $this->_tpl_vars['lang']['meta_description']; ?>
</td>
                    <td class="field">
                        <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                            <ul class="tabs">
                                <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
                                <li
                                    lang="<?php echo $this->_tpl_vars['language']['Code']; ?>
"
                                    <?php if (($this->_foreach['langF']['iteration'] <= 1)): ?>class="active"<?php endif; ?>>
                                        <?php echo $this->_tpl_vars['language']['name']; ?>
</li>
                                <?php endforeach; endif; unset($_from); ?>
                            </ul>
                        <?php endif; ?>

                        <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
                            <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                                <div class="tab_area<?php if (! ($this->_foreach['langF']['iteration'] <= 1)): ?> hide<?php endif; ?> <?php echo $this->_tpl_vars['language']['Code']; ?>
">
                            <?php endif; ?>
                                <textarea name="page[meta_description][<?php echo $this->_tpl_vars['language']['Code']; ?>
]"><?php echo $this->_tpl_vars['sPost']['page']['meta_description'][$this->_tpl_vars['language']['Code']]; ?>
</textarea>
                            <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>
                    </td>
                </tr>

                <tr>
                    <td class="name"><?php echo $this->_tpl_vars['lang']['meta_keywords']; ?>
</td>
                    <td>
                        <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                            <ul class="tabs">
                                <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
                                    <li
                                        lang="<?php echo $this->_tpl_vars['language']['Code']; ?>
"
                                        <?php if (($this->_foreach['langF']['iteration'] <= 1)): ?>class="active"<?php endif; ?>>
                                            <?php echo $this->_tpl_vars['language']['name']; ?>

                                    </li>
                                <?php endforeach; endif; unset($_from); ?>
                            </ul>
                        <?php endif; ?>

                        <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
                            <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                                <div class="tab_area<?php if (! ($this->_foreach['langF']['iteration'] <= 1)): ?> hide<?php endif; ?> <?php echo $this->_tpl_vars['language']['Code']; ?>
">
                            <?php endif; ?>
                            <textarea name="page[meta_keywords][<?php echo $this->_tpl_vars['language']['Code']; ?>
]"><?php echo $this->_tpl_vars['sPost']['page']['meta_keywords'][$this->_tpl_vars['language']['Code']]; ?>
</textarea>
                            <?php if (count($this->_tpl_vars['allLangs']) > 1): ?></div><?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>
                    </td>
                </tr>
                </table>
            </div>

            <table class="form">
            <tr>
                <td class="divider" colspan="3">
                    <div class="inner"><?php echo $this->_tpl_vars['lang']['fb_seo_settings']; ?>
</div>
                </td>
            </tr>

            <tr>
                <td></td>
                <td class="field">
                    <span class="field_description">
                        <?php echo $this->_tpl_vars['lang']['fb_seo_defaults_hint']; ?>

                    </span>
                </td>
            </tr>

            <tr>
                <td class="name">
                    <?php echo $this->_tpl_vars['lang']['h1_heading']; ?>

                </td>
                <td class="field">
                    <div>
                        <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                            <ul class="tabs">
                                <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
                                <li
                                    lang="<?php echo $this->_tpl_vars['language']['Code']; ?>
"
                                    <?php if (($this->_foreach['langF']['iteration'] <= 1)): ?>class="active"<?php endif; ?>>
                                        <?php echo $this->_tpl_vars['language']['name']; ?>

                                </li>
                                <?php endforeach; endif; unset($_from); ?>
                            </ul>
                        <?php endif; ?>

                        <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
                            <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                                <div class="tab_area<?php if (! ($this->_foreach['langF']['iteration'] <= 1)): ?> hide<?php endif; ?> <?php echo $this->_tpl_vars['language']['Code']; ?>
">
                            <?php endif; ?>

                            <input
                                type="text"
                                name="defaults[h1][<?php echo $this->_tpl_vars['language']['Code']; ?>
]"
                                value="<?php echo $this->_tpl_vars['sPost']['defaults']['h1'][$this->_tpl_vars['language']['Code']]; ?>
"
                                maxlength="350"
                                class="w350" />

                            <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                                    <span class="field_description_noicon">
                                        <?php echo $this->_tpl_vars['lang']['h1_heading']; ?>
 (<b><?php echo $this->_tpl_vars['language']['name']; ?>
</b>)</span>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td class="name">
                    <?php echo $this->_tpl_vars['lang']['title']; ?>

                </td>
                <td class="field">
                    <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                        <ul class="tabs">
                            <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
                            <li
                                lang="<?php echo $this->_tpl_vars['language']['Code']; ?>
"
                                <?php if (($this->_foreach['langF']['iteration'] <= 1)): ?>class="active"<?php endif; ?>>
                                    <?php echo $this->_tpl_vars['language']['name']; ?>

                            </li>
                            <?php endforeach; endif; unset($_from); ?>
                        </ul>
                    <?php endif; ?>

                    <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
                        <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                            <div class="tab_area<?php if (! ($this->_foreach['langF']['iteration'] <= 1)): ?> hide<?php endif; ?> <?php echo $this->_tpl_vars['language']['Code']; ?>
">
                        <?php endif; ?>

                        <input
                            type="text"
                            name="defaults[title][<?php echo $this->_tpl_vars['language']['Code']; ?>
]"
                            value="<?php echo $this->_tpl_vars['sPost']['defaults']['title'][$this->_tpl_vars['language']['Code']]; ?>
"
                            maxlength="350"
                            class="w350"
                        />

                        <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                                <span class="field_description_noicon"><?php echo $this->_tpl_vars['lang']['title']; ?>
 (<b><?php echo $this->_tpl_vars['language']['name']; ?>
</b>)</span>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                </td>
            </tr>

            <tr>
                <td class="name">
                    <?php echo $this->_tpl_vars['lang']['description']; ?>

                </td>
                <td class="field">
                    <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                        <ul class="tabs">
                            <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
                                <li lang="<?php echo $this->_tpl_vars['language']['Code']; ?>
" <?php if (($this->_foreach['langF']['iteration'] <= 1)): ?>class="active"<?php endif; ?>><?php echo $this->_tpl_vars['language']['name']; ?>
</li>
                            <?php endforeach; endif; unset($_from); ?>
                        </ul>
                    <?php endif; ?>

                    <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
                        <?php if (count($this->_tpl_vars['allLangs']) > 1): ?><div class="ckeditor tab_area<?php if (! ($this->_foreach['langF']['iteration'] <= 1)): ?> hide<?php endif; ?> <?php echo $this->_tpl_vars['language']['Code']; ?>
"><?php endif; ?>

                        <?php $this->assign('dCode', ((is_array($_tmp='default_des_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['language']['Code']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['language']['Code']))); ?>

                        <?php echo $this->_plugins['function']['fckEditor'][0][0]->fckEditor(array('name' => ((is_array($_tmp='default_des_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['language']['Code']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['language']['Code'])),'width' => '100%','height' => '140','value' => $this->_tpl_vars['sPost'][$this->_tpl_vars['dCode']]), $this);?>

                        <?php if (count($this->_tpl_vars['allLangs']) > 1): ?></div><?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                </td>
            </tr>

            <tr>
                <td class="name">
                    <?php echo $this->_tpl_vars['lang']['meta_description']; ?>

                </td>
                <td class="field">
                    <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                        <ul class="tabs">
                            <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
                            <li
                                lang="<?php echo $this->_tpl_vars['language']['Code']; ?>
"
                                <?php if (($this->_foreach['langF']['iteration'] <= 1)): ?>class="active"<?php endif; ?>>
                                    <?php echo $this->_tpl_vars['language']['name']; ?>
</li>
                            <?php endforeach; endif; unset($_from); ?>
                        </ul>
                    <?php endif; ?>

                    <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
                        <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                            <div class="tab_area<?php if (! ($this->_foreach['langF']['iteration'] <= 1)): ?> hide<?php endif; ?> <?php echo $this->_tpl_vars['language']['Code']; ?>
">
                        <?php endif; ?>
                            <textarea name="defaults[meta_description][<?php echo $this->_tpl_vars['language']['Code']; ?>
]"><?php echo $this->_tpl_vars['sPost']['defaults']['meta_description'][$this->_tpl_vars['language']['Code']]; ?>
</textarea>
                        <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                </td>
            </tr>

            <tr>
                <td class="name">
                    <?php echo $this->_tpl_vars['lang']['meta_keywords']; ?>

                </td>
                <td>
                    <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                        <ul class="tabs">
                            <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
                                <li
                                    lang="<?php echo $this->_tpl_vars['language']['Code']; ?>
"
                                    <?php if (($this->_foreach['langF']['iteration'] <= 1)): ?>class="active"<?php endif; ?>>
                                        <?php echo $this->_tpl_vars['language']['name']; ?>

                                </li>
                            <?php endforeach; endif; unset($_from); ?>
                        </ul>
                    <?php endif; ?>

                    <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
                        <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                            <div class="tab_area<?php if (! ($this->_foreach['langF']['iteration'] <= 1)): ?> hide<?php endif; ?> <?php echo $this->_tpl_vars['language']['Code']; ?>
">
                        <?php endif; ?>
                        <textarea name="defaults[meta_keywords][<?php echo $this->_tpl_vars['language']['Code']; ?>
]"><?php echo $this->_tpl_vars['sPost']['defaults']['meta_keywords'][$this->_tpl_vars['language']['Code']]; ?>
</textarea>
                        <?php if (count($this->_tpl_vars['allLangs']) > 1): ?></div><?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                </td>
            </tr>

            <tr>
                <td></td>
                <td class="field">
                    <input type="submit" value="<?php if ($_GET['action'] == 'edit'): ?><?php echo $this->_tpl_vars['lang']['edit']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['add']; ?>
<?php endif; ?>" />
                </td>
            </tr>
            </table>

            <script type="text/javascript">
                var fields_names = JSON.parse('<?php echo ((is_array($_tmp=json_encode($this->_tpl_vars['fields_names']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
'.replace(/(\r\n|\n)/gi, '<br />'));

                var allLangs = new Array();
                <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['languages']):
?>
                    allLangs.push('<?php echo $this->_tpl_vars['languages']['Code']; ?>
');
                <?php endforeach; endif; unset($_from); ?>

                var langs = JSON.parse('<?php echo json_encode($this->_tpl_vars['languages']); ?>
'.replace(/(\r\n|\n)/gi, '<br />'));
                var box_name_edited = false;
                var page_name_edited = false;

                <?php echo '
                $(document).ready(function(){
                    $(\'input[name^="box[name]"]\').change(function(){
                        box_name_edited = true;
                    });

                    $(\'input[name^="page[name]"]\').change(function(){
                        page_name_edited = true;
                    });

                    $(\'#legend_pages\').click(function(){
                        fieldset_action(\'pages\');
                    });

                    $(\'input#show_on_all\').click(function(){
                        $(\'#pages_cont\').slideToggle();
                        $(\'#pages_nav\').fadeToggle();
                    });

                    $(\'input[name="fbb[postfix]"]\').change(function(){
                        postfixClickHandler();
                    });
                    postfixClickHandler();

                    $(\'select[name="fbb[field_key]"]\').change(function(){
                        fieldsSelectorHandler();
                    });

                    $(\'select[name="fbb[style]"]\').change(function(){
                        styleClickHandler();
                        singleLineCounterHandler();
                    });
                    styleClickHandler(true);

                    $(\'select[name="box[side]"]\').change(function(){
                        sideClickHandler();
                    });
                    sideClickHandler();

                    $(\'input[name="fbb[parent_page]"]\').change(function(){
                        parentPageClickHandler();
                    });
                    parentPageClickHandler();

                    $(\'input[name="fbb[show_count]"]\').change(function(){
                        singleLineCounterHandler();
                    });
                    $(\'select[name="fbb[icons_position]\').change(function(){
                        singleLineCounterHandler();
                    });
                    singleLineCounterHandler();

                    '; ?>

                    <?php if ($_GET['action'] != 'edit'): ?>
                        fieldsSelectorHandler();
                    <?php endif; ?>
                    <?php echo '
                });

                var postfixClickHandler = function(){
                    var enabled = parseInt( $(\'input[name="fbb[postfix]"]:checked\').val() ) ? 1 : 0;

                    $(\'#path_postfix,.path_postfix\').html(enabled != 0 ? \'.html\' : \'/\');
                };

                var fieldsSelectorHandler = function() {
                    var value = $(\'select[name="fbb[field_key]"]\').val();

                    if (value && value != 0) {
                        allLangs.forEach(function(lang_code) {
                            var field_name = fields_names[value][lang_code];

                            if (!box_name_edited) {
                                $(\'input[name="box[name][\' + lang_code + \']"]\').val(field_name);
                            }

                            if (!page_name_edited) {
                                $(\'input[name="page[name][\' + lang_code + \']"]\').val(field_name);
                            }
                        });

                        $(\'input[name="page[path]"]\').val(str2path(value));
                    }
                };

                var sideClickHandler = function() {
                    var side = $(\'select[name="box[side]"] option:selected\').val();
                    var action = \'show\';

                    $(\'select[name="fbb[columns]"] option\').filter(function(){
                        action = \'show\';

                        if ([\'left\', \'middle_left\', \'middle_right\'].indexOf(side) >= 0
                            && $(this).val() > 2
                        ) {
                            action = \'hide\';

                            if ($(\'select[name="fbb[columns]"]\').val() > 2) {
                                $(\'select[name="fbb[columns]"]\').val(\'auto\');
                            }

                        } else if ([\'top\', \'bottom\', \'middle\'].indexOf(side) >= 0
                            && $(this).val() == 1) {

                            action = \'hide\';

                            if ($(\'select[name="fbb[columns]"]\').val() == 1) {
                                $(\'select[name="fbb[columns]"]\').val(\'auto\');
                            }
                        }

                        $(this)[action]();
                    });

                    return;
                };

                var parentPageClickHandler = function() {
                    var enabled = parseInt( $(\'input[name="fbb[parent_page]"]:checked\').val() ) ? 1 : 0;

                    if (enabled != 0) {
                        $(\'#page_settings\').slideDown();
                    } else {
                        $(\'#page_settings\').slideUp();
                    }
                };

                '; ?>

                lang['fb_picture_settings'] = '<?php echo $this->_tpl_vars['lang']['fb_picture_settings']; ?>
';
                <?php echo '

                var styleClickHandler = function(init) {
                    var value = $(\'select[name="fbb[style]"]\').val();
                    var hide_effect = init ? \'hide\' : \'slideUp\';

                    if (value == \'text_pic\' || value == \'icon\') {
                        $(\'#icons_area\').slideDown();
                        $(\'#plate_orientation_area\')[hide_effect]();
                    } else if (value == \'responsive\') {
                        $(\'#plate_orientation_area\').slideDown();
                        $(\'#icons_area\')[hide_effect]();
                    } else {
                        $(\'#icons_area\')[hide_effect]();
                        $(\'#plate_orientation_area\')[hide_effect]();
                    }

                    $(\'.column-options\')[value == \'icon\' ? hide_effect : \'slideDown\']();

                    $(\'#icon_settings_heading\').html(lang[value == \'text_pic\' ? \'fb_picture_settings\' : \'fb_icon_settings\']);
                };

                var singleLineCounterHandler = function() {
                    $(\'#counter_single_line\')[
                        $(\'[name="fbb[show_count]"]:checked\').val() === \'1\'
                        && $(\'[name="fbb[style]"]\').val() == \'text_pic\'
                        && [\'left\', \'right\'].indexOf($(\'[name="fbb[icons_position]"\').val()) < 0
                            ? \'show\' : \'hide\'
                    ]();
                }

                var str2path = function(str) {
                    str = str.replace(/[^a-z0-9]+/ig, \'-\');
                    str = str.toLowerCase();

                    return str ? str : \'\';
                };
            '; ?>

            </script>
    </form>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_end.tpl') : smarty_modifier_cat($_tmp, 'm_block_end.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php else: ?>

    <?php echo '
    <script type="text/javascript">
    var addItem = function(){
    '; ?>

        var names = new Array();

        <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['languages']):
?>
        names['<?php echo $this->_tpl_vars['languages']['Code']; ?>
'] = $('#ni_<?php echo $this->_tpl_vars['languages']['Code']; ?>
').val();
        <?php endforeach; endif; unset($_from); ?>

        xajax_addItem(
            $('#ni_key').val(),
            names,
            $('#ni_status').val(),
            '<?php echo $_GET['box']; ?>
',
            $('#ni_default:checked').val()
        );
    <?php echo '
    }
    </script>
    '; ?>


    <?php echo '
    <script type="text/javascript">
    var editItem = function(key){
    '; ?>

        var names = new Array();

        <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['languages']):
?>
        names['<?php echo $this->_tpl_vars['languages']['Code']; ?>
'] = $('#ei_<?php echo $this->_tpl_vars['languages']['Code']; ?>
').val();
        <?php endforeach; endif; unset($_from); ?>

        xajax_editItem(key, names, $('#ei_status').val(), '<?php echo $_GET['box']; ?>
', $('#ei_default:checked').val());
    <?php echo '
    }
    </script>
    '; ?>

    <!-- add new item end -->

    <?php if (! $_GET['box']): ?>
    <script type="text/javascript">
        // blocks sides list
        var block_sides = [
            <?php $_from = $this->_tpl_vars['l_block_sides']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sides_f'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sides_f']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sKey'] => $this->_tpl_vars['block_side']):
        $this->_foreach['sides_f']['iteration']++;
?>
                <?php if ($this->_tpl_vars['sKey'] == 'header_banner' || $this->_tpl_vars['sKey'] == 'integrated_banner'): ?>
                    <?php continue; ?>
                <?php endif; ?>

                ['<?php echo $this->_tpl_vars['sKey']; ?>
', '<?php echo $this->_tpl_vars['block_side']; ?>
'],
            <?php endforeach; endif; unset($_from); ?>
        ];
    </script>
    <?php endif; ?>

    <!-- field-bound boxes grid -->
    <div id="grid"></div>
    <script type="text/javascript">//<![CDATA[
    <?php if ($_GET['box']): ?>
        var itemsGrid;
        var box = '<?php echo $_GET['box']; ?>
';

        <?php echo '
        $(document).ready(function(){
            itemsGrid = new gridObj({
                key: \'fbb_data_items\',
                id: \'grid\',
                ajaxUrl: rlPlugins + \'fieldBoundBoxes/admin/field_bound_boxes.inc.php?q=ext&box=\'+box,
                defaultSortField: \'name\',
                remoteSortable: true,
                title: lang[\'ext_format_items_manager\'],
                fields: [
                    {name: \'name\', mapping: \'name\', type: \'string\'},
                    {name: \'Position\', mapping: \'Position\', type: \'int\'},
                    {name: \'Status\', mapping: \'Status\'},
                    {name: \'Key\', mapping: \'Key\'}
                ],
                columns: [
                    {
                        header: lang[\'ext_name\'],
                        dataIndex: \'name\',
                        width: 40
                    },{
                        header: lang[\'ext_position\'],
                        dataIndex: \'Position\',
                        width: 70,
                        fixed: true,
                        editor: new Ext.form.NumberField({
                            allowBlank: false,
                            allowDecimals: false
                        }),
                        renderer: function(val){
                            return \'<span ext:qtip="\'+lang[\'ext_click_to_edit\']+\'">\'+val+\'</span>\';
                        }
                    },{
                        header: lang[\'ext_status\'],
                        dataIndex: \'Status\',
                        width: 80,
                        fixed: true,
                        editor: new Ext.form.ComboBox({
                            store: [
                                [\'active\', lang[\'ext_active\']],
                                [\'approval\', lang[\'ext_approval\']]
                            ],
                            displayField: \'value\',
                            valueField: \'key\',
                            typeAhead: true,
                            mode: \'local\',
                            triggerAction: \'all\',
                            selectOnFocus:true
                        })
                    },{
                        header: lang[\'ext_actions\'],
                        width: 70,
                        fixed: true,
                        dataIndex: \'Key\',
                        sortable: false,
                        renderer: function(val) {
                            var out = "<center>";
                            out += "<a href=\'"+rlUrlHome+"index.php?controller="+controller+"&box='; ?>
<?php echo $_GET['box']; ?>
<?php echo '&action=edit_item&item="+val+"\'><img class=\'edit\' ext:qtip=\'"+lang[\'ext_edit\']+"\' src=\'"+rlUrlHome+"img/blank.gif\' /></a>";
                            out += "<img class=\'remove\' ext:qtip=\'"+lang[\'ext_delete\']+"\' src=\'"+rlUrlHome+"img/blank.gif\' onClick=\'rlConfirm( \\""+lang[\'ext_notice_delete\']+"\\", \\"fbbDeleteItem\\", \\""+Array(val)+"\\" )\' />";
                            out += "</center>";

                            return out;
                        }
                    }
                ]
            });

            itemsGrid.init();
            grid.push(itemsGrid.grid);
        });
        '; ?>

    <?php else: ?>
        <?php echo '
        var fieldBoundBoxesGrid;

        $(document).ready(function(){

            fieldBoundBoxesGrid = new gridObj({
                key: \'field_bound_boxes\',
                id: \'grid\',
                ajaxUrl: rlPlugins + \'fieldBoundBoxes/admin/field_bound_boxes.inc.php?q=ext\',
                defaultSortField: \'name\',
                title: lang[\'ext_blocks_manager\'],
                fields: [
                    {name: \'name\', mapping: \'name\', type: \'string\'},
                    {name: \'Field_name\', mapping: \'Field_name\'},
                    {name: \'Position\', mapping: \'Position\', type: \'int\'},
                    {name: \'Status\', mapping: \'Status\'},
                    {name: \'Tpl\', mapping: \'Tpl\'},
                    {name: \'Side\', mapping: \'Side\'},
                    {name: \'Key\', mapping: \'Key\'}
                ],
                columns: [{
                        header: lang[\'ext_name\'],
                        dataIndex: \'name\',
                        id: \'rlExt_item_bold\',
                        width: 40
                    },{
                        header: lang[\'fb_field\'],
                        dataIndex: \'Field_name\',
                        id: \'rlExt_item_bold\',
                        width: 180,
                        fixed: true,
                    },{
                        header: lang[\'ext_block_side\'],
                        dataIndex: \'Side\',
                        width: 140,
                        fixed: true,
                        editor: new Ext.form.ComboBox({
                            store: block_sides,
                            displayField: \'value\',
                            valueField: \'key\',
                            typeAhead: true,
                            mode: \'local\',
                            triggerAction: \'all\',
                            selectOnFocus: true
                        }),
                        renderer: function(val){
                            return \'<span ext:qtip="\'+lang[\'ext_click_to_edit\']+\'">\'+val+\'</span>\';
                        }
                    },{
                        header: lang[\'ext_block_style\'],
                        dataIndex: \'Tpl\',
                        width: 140,
                        fixed: true,
                        editor: new Ext.form.ComboBox({
                            store: [
                                [\'1\', lang[\'ext_yes\']],
                                [\'0\', lang[\'ext_no\']]
                            ],
                            displayField: \'value\',
                            valueField: \'key\',
                            typeAhead: true,
                            mode: \'local\',
                            triggerAction: \'all\',
                            selectOnFocus:true
                        }),
                        renderer: function(val){
                            return \'<span ext:qtip="\'+lang[\'ext_click_to_edit\']+\'">\'+val+\'</span>\';
                        }
                    },{
                        header: lang[\'ext_status\'],
                        dataIndex: \'Status\',
                        width: 120,
                        fixed: true,
                        editor: new Ext.form.ComboBox({
                            store: [
                                [\'active\', lang[\'ext_active\']],
                                [\'approval\', lang[\'ext_approval\']]
                            ],
                            displayField: \'value\',
                            valueField: \'key\',
                            typeAhead: true,
                            mode: \'local\',
                            triggerAction: \'all\',
                            selectOnFocus:true
                        })
                    },{
                        header: lang[\'ext_actions\'],
                        width: 100,
                        fixed: true,
                        dataIndex: \'Key\',
                        sortable: false,
                        renderer: function(data) {
                            var manage_link = data == \'years\' ? "eval(Ext.MessageBox.alert(\\""+lang[\'ext_notice\']+"\\", \\""+lang[\'ext_data_format_auto\']+"\\"))" : \'\';
                            var manage_href = data == \'years\' ? "javascript:void(0)" : rlUrlHome+"index.php?controller="+controller+"&box="+data;
                            var out = "<center>";
                            var splitter = false;

                            out += "<a href="+manage_href+" onclick=\'"+manage_link+"\'><img class=\'manage\' ext:qtip=\'"+lang[\'ext_manage\']+"\' src=\'"+rlUrlHome+"img/blank.gif\' /></a>";
                            out += "<a href="+rlUrlHome+"index.php?controller="+controller+"&action=edit&box="+data+"><img class=\'edit\' ext:qtip=\'"+lang[\'ext_edit\']+"\' src=\'"+rlUrlHome+"img/blank.gif\' /></a>";
                            out += "<img class=\'remove\' ext:qtip=\'"+lang[\'ext_delete\']+"\' src=\'"+rlUrlHome+"img/blank.gif\' onClick=\'rlConfirm( \\""+lang[\'ext_notice_\'+delete_mod]+"\\", \\"fbbDeleteBox\\", \\""+Array(data)+"\\", \\"section_load\\" )\' />";
                            out += "</center>";

                            return out;
                        }
                    }
                ]
            });

            fieldBoundBoxesGrid.init();
            grid.push(fieldBoundBoxesGrid.grid);

        });
        '; ?>

    <?php endif; ?>
    //]]>
    </script>
<?php endif; ?>

<script>
    <?php echo '
    function fbbDeleteIcon(item_id) {
        var data = {};

        data.item_id = item_id;
        data.item = \'fbbDeleteIcon\';

        fbbDoRequest(data, lang[\'fb_icon_deleted\'], function() {
            $(\'#gallery\').slideUp(\'normal\');
        });
    }

    function fbbReCopyItems(box) {
        var data = {};

        data.box_key = box;
        data.item = \'fbbRecopyBoxItems\';

        fbbDoRequest(data, lang[\'fb_items_recopied\'], function() { itemsGrid.reload() });
    }

    function fbbDeleteItem(val) {
        var data = {};

        data.box_key = \''; ?>
<?php echo $_GET['box']; ?>
<?php echo '\';
        data.item_key = val;
        data.item = \'fbbDeleteItem\';

        fbbDoRequest(data, \''; ?>
<?php echo $this->_tpl_vars['lang']['item_deleted']; ?>
<?php echo '\', function() { itemsGrid.reload() });

        // Display related item in search results
        $(\'[data-key=\' + val + \']\').closest(\'.box-item\').css(\'display\', \'flex\');
    }

    function fbbDeleteBox(box) {
        var data = {};
        data.box_key = box;
        data.item = \'fbbDeleteBox\';

        fbbDoRequest(data, \''; ?>
<?php echo $this->_tpl_vars['lang']['block_deleted']; ?>
<?php echo '\', function() { fieldBoundBoxesGrid.reload() });
    }

    function fbbDoRequest(data, successMessage, callback) {
        $.getJSON(rlConfig[\'ajax_url\'], data, function(response) {
            if (response.status == \'ok\') {
                printMessage(\'notice\', successMessage);
                callback();
            } else {
                return false;
            }
        });
    }
    '; ?>

</script>
<!-- field bound boxes tpl end -->