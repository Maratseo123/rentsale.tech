<?php /* Smarty version 2.6.31, created on 2024-09-10 19:28:14
         compiled from /var/www/u2273289/data/www/rentsale.tech/plugins/listings_box/admin/listings_box.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/plugins/listings_box/admin/listings_box.tpl', 19, false),array('modifier', 'count', '/var/www/u2273289/data/www/rentsale.tech/plugins/listings_box/admin/listings_box.tpl', 33, false),array('modifier', 'in_array', '/var/www/u2273289/data/www/rentsale.tech/plugins/listings_box/admin/listings_box.tpl', 79, false),array('modifier', 'ceil', '/var/www/u2273289/data/www/rentsale.tech/plugins/listings_box/admin/listings_box.tpl', 85, false),array('function', 'rlHook', '/var/www/u2273289/data/www/rentsale.tech/plugins/listings_box/admin/listings_box.tpl', 312, false),)), $this); ?>
<!-- listings box tpl -->

<!-- navigation bar -->
<div id="nav_bar">

    <?php if ($this->_tpl_vars['aRights'][$this->_tpl_vars['cKey']]['add'] && $_GET['action'] != 'add'): ?>
        <a href="<?php echo $this->_tpl_vars['rlBaseC']; ?>
action=add" class="button_bar"><span class="left"></span><span class="center_add"><?php echo $this->_tpl_vars['lang']['listings_box_add_new_block']; ?>
</span><span class="right"></span></a>
    <?php endif; ?>

    <a href="<?php echo $this->_tpl_vars['rlBase']; ?>
index.php?controller=<?php echo $_GET['controller']; ?>
" class="button_bar"><span class="left"></span><span class="center_list"><?php echo $this->_tpl_vars['lang']['listings_box_block_list']; ?>
</span><span class="right"></span></a>
</div>
<!-- navigation bar end -->

<?php if ($_GET['action'] == 'add' || $_GET['action'] == 'edit'): ?>

    <?php $this->assign('sPost', $_POST); ?>

    <!-- add new/edit block -->
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_start.tpl') : smarty_modifier_cat($_tmp, 'm_block_start.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <form onsubmit="return submitHandler();"  action="<?php echo $this->_tpl_vars['rlBaseC']; ?>
action=<?php if ($_GET['action'] == 'add'): ?>add<?php elseif ($_GET['action'] == 'edit'): ?>edit&amp;block=<?php echo $_GET['block']; ?>
<?php endif; ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="submit" value="1" />

            <?php if ($_GET['action'] == 'edit'): ?>
                <input type="hidden" name="fromPost" value="1" />
                <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['sPost']['id']; ?>
" />
            <?php endif; ?>
            <table class="form">
            <tr>
                <td class="name">
                    <span class="red">*</span><?php echo $this->_tpl_vars['lang']['name']; ?>

                </td>
                <td>
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
                        <input type="text" name="name[<?php echo $this->_tpl_vars['language']['Code']; ?>
]" value="<?php echo $this->_tpl_vars['sPost']['name'][$this->_tpl_vars['language']['Code']]; ?>
" maxlength="350" />
                        <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                                <span class="field_description_noicon"><?php echo $this->_tpl_vars['lang']['name']; ?>
 (<b><?php echo $this->_tpl_vars['language']['name']; ?>
</b>)</span>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                </td>
            </tr>

            <tr>
                <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['block_side']; ?>
</td>
                <td class="field">
                    <select name="side">
                        <option value=""><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
                        <?php $_from = $this->_tpl_vars['l_block_sides']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sides_f'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sides_f']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sKey'] => $this->_tpl_vars['block_side']):
        $this->_foreach['sides_f']['iteration']++;
?>
                            <?php if ($this->_tpl_vars['sKey'] != 'integrated_banner'): ?>
                                <option value="<?php echo $this->_tpl_vars['sKey']; ?>
" <?php if ($this->_tpl_vars['sKey'] == $this->_tpl_vars['sPost']['side']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['block_side']; ?>
</option>
                            <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['listing_type']; ?>
</td>
                <td class="field">
                    <fieldset class="light">
                        <legend id="legend_type" onclick="fieldset_action('type');" class="up"><?php echo $this->_tpl_vars['lang']['listing_type']; ?>
</legend>
                        <div id="type">
                            <table id="list_rt">
                                <tr>
                                    <td valign="top">
                                    <?php $_from = $this->_tpl_vars['listing_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['typeF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['typeF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['listing_type']):
        $this->_foreach['typeF']['iteration']++;
?>
                                    <?php if ($this->_tpl_vars['listing_type']['Photo'] || ( $this->_tpl_vars['listing_type']['Key'] == 'jobs' && $this->_tpl_vars['config']['package_name'] == 'general' )): ?>
                                        <div style="padding: 2px 8px;">
                                            <input class="checkbox"
                                                   <?php if ($this->_tpl_vars['sPost']['type'] && ((is_array($_tmp=$this->_tpl_vars['listing_type']['Type'])) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['sPost']['type']) : in_array($_tmp, $this->_tpl_vars['sPost']['type']))): ?>checked="checked"<?php endif; ?>
                                                   id="type_<?php echo $this->_tpl_vars['listing_type']['Type']; ?>
"
                                                   type="checkbox"
                                                   name="type[<?php echo $this->_tpl_vars['listing_type']['Type']; ?>
]"
                                                   value="<?php echo $this->_tpl_vars['listing_type']['Type']; ?>
" /> <label class="cLabel" for="type_<?php echo $this->_tpl_vars['listing_type']['Type']; ?>
"><?php echo $this->_tpl_vars['listing_type']['name']; ?>
</label>
                                        </div>
                                        <?php $this->assign('perCol', ((is_array($_tmp=$this->_foreach['typeF']['total']/3)) ? $this->_run_mod_handler('ceil', true, $_tmp) : ceil($_tmp))); ?>

                                        <?php if ($this->_foreach['typeF']['iteration'] % $this->_tpl_vars['perCol'] == 0): ?>
                                            </td>
                                            <td valign="top">
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    <?php endforeach; endif; unset($_from); ?>
                                    </td>
                                </tr>
                            </table>
                            <div class="grey_area" style="margin: 0 0 5px;">
                                <span>
                                    <span onclick="$('#list_rt input').prop('checked', true);" class="green_10"><?php echo $this->_tpl_vars['lang']['check_all']; ?>
</span>
                                    <span class="divider"> | </span>
                                    <span onclick="$('#list_rt input').prop('checked', false);" class="green_10"><?php echo $this->_tpl_vars['lang']['uncheck_all']; ?>
</span>
                                </span>
                            </div>
                        </div>
                    </fieldset>
                </td>
            </tr>
            <tr>
                <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['block_type']; ?>
</td>
                <td class="field">
                    <select name="box_type">
                        <option value=""><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
                        <?php $_from = $this->_tpl_vars['box_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sKey'] => $this->_tpl_vars['box_type']):
?>
                        <option value="<?php echo $this->_tpl_vars['sKey']; ?>
" <?php if ($this->_tpl_vars['sKey'] == $this->_tpl_vars['sPost']['box_type']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['box_type']; ?>
</option>
                        <?php endforeach; endif; unset($_from); ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['listings_box_number_of_listing']; ?>
</td>
                <td class="field">
                    <input type="text" class="numeric" name="count" value="<?php echo $this->_tpl_vars['sPost']['count']; ?>
" maxlength="2" style="width: 139px;" />
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
                            <div id="pages_cont" <?php if (! empty ( $this->_tpl_vars['sPost']['show_on_all'] )): ?>style="display: none;"<?php endif; ?>>
                                <?php $this->assign('bPages', $this->_tpl_vars['sPost']['pages']); ?>
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
                                        <input class="checkbox" <?php if (isset ( $this->_tpl_vars['bPages'][$this->_tpl_vars['pId']] )): ?>checked="checked"<?php endif; ?> id="page_<?php echo $this->_tpl_vars['page']['ID']; ?>
" type="checkbox" name="pages[<?php echo $this->_tpl_vars['page']['ID']; ?>
]" value="<?php echo $this->_tpl_vars['page']['ID']; ?>
" /> <label class="cLabel" for="page_<?php echo $this->_tpl_vars['page']['ID']; ?>
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
                                <label><input id="show_on_all" <?php if ($this->_tpl_vars['sPost']['show_on_all']): ?>checked="checked"<?php endif; ?> type="checkbox" name="show_on_all" value="true" /> <?php echo $this->_tpl_vars['lang']['sticky']; ?>
</label>
                                <span id="pages_nav" <?php if ($this->_tpl_vars['sPost']['show_on_all']): ?>class="hide"<?php endif; ?>>
                                    <span onclick="$('#pages_cont input').prop('checked', true);" class="green_10"><?php echo $this->_tpl_vars['lang']['check_all']; ?>
</span>
                                    <span class="divider"> | </span>
                                    <span onclick="$('#pages_cont input').prop('checked', false);" class="green_10"><?php echo $this->_tpl_vars['lang']['uncheck_all']; ?>
</span>
                                </span>
                            </div>
                        </div>
                    </fieldset>

                    <script type="text/javascript">
                    <?php echo '

                    $(document).ready(function(){
                        $(\'#legend_pages\').click(function(){
                            fieldset_action(\'pages\');
                        });

                        $(\'input#show_on_all\').click(function(){
                            $(\'#pages_cont\').slideToggle();
                            $(\'#pages_nav\').fadeToggle();
                        });
                    });

                    '; ?>

                    </script>
                </td>
            </tr>
            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['show_in_categories']; ?>
</td>
                <td class="field">
                    <fieldset class="light">
                        <legend id="legend_cats" class="up" onclick="fieldset_action('cats');"><?php echo $this->_tpl_vars['lang']['categories']; ?>
</legend>
                        <div id="cats">
                            <div id="cat_checkboxed" style="margin: 0 0 8px;<?php if ($this->_tpl_vars['sPost']['cat_sticky']): ?>display: none<?php endif; ?>">
                                <div class="tree">
                                    <?php $_from = $this->_tpl_vars['sections']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['section']):
?>
                                        <fieldset class="light">
                                            <legend id="legend_section_<?php echo $this->_tpl_vars['section']['ID']; ?>
" class="up" onclick="fieldset_action('section_<?php echo $this->_tpl_vars['section']['ID']; ?>
');"><?php echo $this->_tpl_vars['section']['name']; ?>
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
                                    <label><input <?php if (! empty ( $this->_tpl_vars['sPost']['subcategories'] )): ?>checked="checked"<?php endif; ?> type="checkbox" name="subcategories" value="1" /> <?php echo $this->_tpl_vars['lang']['include_subcats']; ?>
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
                                flynax.treeLoadLevel(\'checkbox\', \'flynax.openTree(tree_selected, tree_parentPoints)\', \'div#cat_checkboxed\');
                                flynax.openTree(tree_selected, tree_parentPoints);

                                $(\'input[name=cat_sticky]\').click(function(){
                                    $(\'#cat_checkboxed\').slideToggle();
                                    $(\'#cats_nav\').fadeToggle();
                                });
                            });

                            '; ?>

                            </script>

                            <div class="grey_area">
                                <label><input class="checkbox" <?php if ($this->_tpl_vars['sPost']['cat_sticky']): ?>checked="checked"<?php endif; ?> type="checkbox" name="cat_sticky" value="true" /> <?php echo $this->_tpl_vars['lang']['sticky']; ?>
</label>
                                <span id="cats_nav" <?php if ($this->_tpl_vars['sPost']['cat_sticky']): ?>class="hide"<?php endif; ?>>
                                    <span onclick="$('#cat_checkboxed div.tree input').prop('checked', true);" class="green_10"><?php echo $this->_tpl_vars['lang']['check_all']; ?>
</span>
                                    <span class="divider"> | </span>
                                    <span onclick="$('#cat_checkboxed div.tree input').prop('checked', false);" class="green_10"><?php echo $this->_tpl_vars['lang']['uncheck_all']; ?>
</span>
                                </span>
                            </div>

                        </div>
                    </fieldset>
                </td>
            </tr>
            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['listings_box_display_mode']; ?>
</td>
                <td id="display_mode" class="field">

                    <?php if ($this->_tpl_vars['sPost']['display_mode'] == 'default'): ?>
                        <?php $this->assign('display_mode_yes', 'checked="checked"'); ?>
                    <?php elseif ($this->_tpl_vars['sPost']['display_mode'] == 'grid'): ?>
                        <?php $this->assign('display_mode_no', 'checked="checked"'); ?>
                    <?php else: ?>
                        <?php $this->assign('display_mode_yes', 'checked="checked"'); ?>
                    <?php endif; ?>
                    <label><input <?php echo $this->_tpl_vars['display_mode_yes']; ?>
 class="lang_add" type="radio" name="display_mode" value="default" /> <?php echo $this->_tpl_vars['lang']['listings_box_default']; ?>
</label>
                    <label><input <?php echo $this->_tpl_vars['display_mode_no']; ?>
 class="lang_add" type="radio" name="display_mode" value="grid" /> <?php echo $this->_tpl_vars['lang']['listings_box_grid']; ?>
</label>
                </td>
            </tr>
            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['listings_box_dublicate']; ?>
</td>
                <td class="field">
                    <?php if ($this->_tpl_vars['sPost']['unique'] == '1'): ?>
                        <?php $this->assign('dub_yes', 'checked="checked"'); ?>
                    <?php elseif ($this->_tpl_vars['sPost']['unique'] == '0'): ?>
                        <?php $this->assign('dub_no', 'checked="checked"'); ?>
                    <?php else: ?>
                        <?php $this->assign('dub_no', 'checked="checked"'); ?>
                    <?php endif; ?>
                    <label><input <?php echo $this->_tpl_vars['dub_yes']; ?>
 class="lang_add" type="radio" name="unique" value="1" /> <?php echo $this->_tpl_vars['lang']['yes']; ?>
</label>
                    <label><input <?php echo $this->_tpl_vars['dub_no']; ?>
 class="lang_add" type="radio" name="unique" value="0" /> <?php echo $this->_tpl_vars['lang']['no']; ?>
</label>
                </td>
            </tr>
            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['listings_box_by_category']; ?>
</td>
                <td class="field">
                    <?php if ($this->_tpl_vars['sPost']['by_category'] == '1'): ?>
                        <?php $this->assign('by_category_yes', 'checked="checked"'); ?>
                    <?php elseif ($this->_tpl_vars['sPost']['unique'] == '0'): ?>
                        <?php $this->assign('by_category_no', 'checked="checked"'); ?>
                    <?php else: ?>
                        <?php $this->assign('by_category_no', 'checked="checked"'); ?>
                    <?php endif; ?>
                    <label><input <?php echo $this->_tpl_vars['by_category_yes']; ?>
 class="lang_add" type="radio" name="by_category" value="1" /> <?php echo $this->_tpl_vars['lang']['yes']; ?>
</label>
                    <label><input <?php echo $this->_tpl_vars['by_category_no']; ?>
 class="lang_add" type="radio" name="by_category" value="0" /> <?php echo $this->_tpl_vars['lang']['no']; ?>
</label>
                </td>
            </tr>
            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['use_block_design']; ?>
</td>
                <td class="field">
                    <?php if ($this->_tpl_vars['sPost']['tpl'] == '1'): ?>
                        <?php $this->assign('tpl_yes', 'checked="checked"'); ?>
                    <?php elseif ($this->_tpl_vars['sPost']['tpl'] == '0'): ?>
                        <?php $this->assign('tpl_no', 'checked="checked"'); ?>
                    <?php else: ?>
                        <?php $this->assign('tpl_yes', 'checked="checked"'); ?>
                    <?php endif; ?>
                    <label><input <?php echo $this->_tpl_vars['tpl_yes']; ?>
 class="lang_add" type="radio" name="tpl" value="1" /> <?php echo $this->_tpl_vars['lang']['yes']; ?>
</label>
                    <label><input <?php echo $this->_tpl_vars['tpl_no']; ?>
 class="lang_add" type="radio" name="tpl" value="0" /> <?php echo $this->_tpl_vars['lang']['no']; ?>
</label>
                </td>
            </tr>
            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['use_block_header']; ?>
</td>
                <td class="field">
                    <?php if ($this->_tpl_vars['sPost']['header'] == '1'): ?>
                        <?php $this->assign('header_yes', 'checked="checked"'); ?>
                    <?php elseif ($this->_tpl_vars['sPost']['header'] == '0'): ?>
                        <?php $this->assign('header_no', 'checked="checked"'); ?>
                    <?php else: ?>
                        <?php $this->assign('header_yes', 'checked="checked"'); ?>
                    <?php endif; ?>
                    <label><input <?php echo $this->_tpl_vars['header_yes']; ?>
 class="lang_add" type="radio" name="header" value="1" /> <?php echo $this->_tpl_vars['lang']['yes']; ?>
</label>
                    <label><input <?php echo $this->_tpl_vars['header_no']; ?>
 class="lang_add" type="radio" name="header" value="0" /> <?php echo $this->_tpl_vars['lang']['no']; ?>
</label>
                </td>
            </tr>

            <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'apTplBlocksForm'), $this);?>

            <tr>
                <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['status']; ?>
</td>
                <td class="field">
                    <select name="status">
                        <option value="active" <?php if ($this->_tpl_vars['sPost']['status'] == 'active'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['active']; ?>
</option>
                        <option value="approval" <?php if ($this->_tpl_vars['sPost']['status'] == 'approval'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['approval']; ?>
</option>
                    </select>
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
        </form>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_end.tpl') : smarty_modifier_cat($_tmp, 'm_block_end.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <!-- add new block end -->

    <!-- select category action -->
    <script type="text/javascript">

    <?php echo '
    function cat_chooser(cat_id){
        return true;
    }
    '; ?>


    <?php if ($_POST['parent_id']): ?>
        cat_chooser('<?php echo $_POST['parent_id']; ?>
');
    <?php elseif ($_GET['parent_id']): ?>
        cat_chooser('<?php echo $_GET['parent_id']; ?>
');
    <?php endif; ?>
    </script>
    <!-- select category action end -->

    <!-- additional JS -->
    <?php if ($this->_tpl_vars['sPost']['type']): ?>
    <script type="text/javascript">
    <?php echo '
    $(document).ready(function(){
        block_banner(\'btype_'; ?>
<?php echo $this->_tpl_vars['sPost']['type']; ?>
<?php echo '\', \'#btypes div\');
    });

    '; ?>

    </script>
    <?php endif; ?>
    <!-- additional JS end -->

<?php else: ?>
    <script type="text/javascript">
    // blocks sides list
    var block_sides = [
    <?php $_from = $this->_tpl_vars['l_block_sides']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sides_f'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sides_f']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sKey'] => $this->_tpl_vars['block_side']):
        $this->_foreach['sides_f']['iteration']++;
?>
        <?php if ($this->_tpl_vars['sKey'] != 'integrated_banner'): ?>
            ['<?php echo $this->_tpl_vars['sKey']; ?>
', '<?php echo $this->_tpl_vars['block_side']; ?>
']<?php if (! ($this->_foreach['sides_f']['iteration'] == $this->_foreach['sides_f']['total'])): ?>,<?php endif; ?>
        <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
    ];

    // blocks box types list
    var block_types = [
    <?php $_from = $this->_tpl_vars['box_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sides_f'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sides_f']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sKey'] => $this->_tpl_vars['block_types']):
        $this->_foreach['sides_f']['iteration']++;
?>
        ['<?php echo $this->_tpl_vars['sKey']; ?>
', '<?php echo $this->_tpl_vars['block_types']; ?>
']<?php if (! ($this->_foreach['sides_f']['iteration'] == $this->_foreach['sides_f']['total'])): ?>,<?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
    ];

    </script>
    <div id="gridListingsBox"></div>
    <script type="text/javascript">//<![CDATA[
    lang['listings_box_number_of_listing'] = '<?php echo $this->_tpl_vars['lang']['listings_box_number_of_listing']; ?>
'
    var listingsBox;

    <?php echo '
    $(document).ready(function(){

        listingsBox = new gridObj({
            key: \'listings_box\',
            id: \'gridListingsBox\',
            ajaxUrl: rlPlugins + \'listings_box/admin/listings_box.inc.php?q=ext\',
            defaultSortField: \'ID\',
            title: lang[\'ext_manager\'],
            fields: [
                {name: \'ID\', mapping: \'ID\', type: \'int\'},
                {name: \'name\', mapping: \'name\'},
                {name: \'Type\', mapping: \'Type\'},
                {name: \'Box_type\', mapping: \'Box_type\'},
                {name: \'Count\', mapping: \'Count\'},
                {name: \'Side\', mapping: \'Side\'},
                {name: \'Status\', mapping: \'Status\'}
            ],
            columns: [
                {
                    header: lang[\'ext_id\'],
                    dataIndex: \'ID\',
                    fixed: true,
                    width: 40
                },{
                    header: lang[\'ext_name\'],
                    dataIndex: \'name\'
                },{
                    header: lang[\'listings_box_ext_box_type\'],
                    dataIndex: \'Box_type\',
                    width: 120,
                    fixed: true,
                    editor: new Ext.form.ComboBox({
                        store: block_types,
                        displayField: \'value\',
                        valueField: \'key\',
                        typeAhead: false,
                        mode: \'local\',
                        triggerAction: \'all\',
                        selectOnFocus:true
                    }),
                    renderer: function(val){
                        return \'<span ext:qtip="\'+lang[\'ext_click_to_edit\']+\'">\'+val+\'</span>\';
                    }
                },{
                    header: lang[\'listings_box_number_of_listing\'],
                    dataIndex: \'Count\',
                    width: 120,
                    fixed: true,
                    editor: new Ext.form.NumberField({
                        allowBlank: false,
                        maxValue: 30,
                        minValue: 1
                    }),
                    renderer: function(val){
                        return \'<span ext:qtip="\'+lang[\'ext_click_to_edit\']+\'">\'+val+\'</span>\';
                    }
                },{
                    header: lang[\'ext_block_side\'],
                    dataIndex: \'Side\',
                    width: 120,
                    fixed: true,
                    editor: new Ext.form.ComboBox({
                        store: block_sides,
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
                    width: 100,
                    fixed: true,
                    editor: new Ext.form.ComboBox({
                        store: [
                            [\'active\', lang[\'ext_active\']],
                            [\'approval\', lang[\'ext_approval\']]
                        ],
                        mode: \'local\',
                        typeAhead: true,
                        triggerAction: \'all\',
                        selectOnFocus: true
                    })
                },{
                    header: lang[\'ext_actions\'],
                    width: 70,
                    fixed: true,
                    dataIndex: \'ID\',
                    sortable: false,
                    renderer: function(id) {
                        var out = \'\';

                        // edit
                        out += \'<a href="\' + rlUrlHome + \'index.php?controller=\'+controller+\'&action=edit&block=\'+id+\'">\';
                        out += \'<img class="edit ext:qtip="\' + lang[\'ext_edit\'] + \'" src="\' + rlUrlHome + \'img/blank.gif" /></a>\';

                        // delete
                        out += \'<img data-id="\'+id+\'" class="remove" ext:qtip="\' + lang[\'ext_delete\'] + \'"\';
                        out += \'src="\' + rlUrlHome + \'img/blank.gif"  />\';

                        return out;
                    }
                }
            ]
        });

        listingsBox.init();
        grid.push(listingsBox.grid);

        $(\'#gridListingsBox\').on(\'click\', \'img.remove\', deleteListingsBox.confirm)

    });

    var deleteListingsBoxClass = function(){

        this.confirm = function() {
            var id = $(this).data("id");
            rlConfirm(lang[\'ext_notice_delete\'], "deleteListingsBox.request", id);
        }

        this.request = function(index) {
            $.get(rlConfig["ajax_url"], {item: \'deleteListingsBox\', id: index}, function (response) {
                printMessage(\'notice\', response.message);
                listingsBox.init();
            }, \'json\');
        }
    }

    var deleteListingsBox = new deleteListingsBoxClass();

    '; ?>

    //]]>
    </script>
<?php endif; ?>
<!-- listings box tpl end -->