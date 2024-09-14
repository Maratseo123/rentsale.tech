<?php /* Smarty version 2.6.31, created on 2023-12-11 01:40:33
         compiled from blocks/fields/add_edit_form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', 'blocks/fields/add_edit_form.tpl', 5, false),array('modifier', 'count', 'blocks/fields/add_edit_form.tpl', 23, false),array('modifier', 'replace', 'blocks/fields/add_edit_form.tpl', 136, false),array('modifier', 'in_array', 'blocks/fields/add_edit_form.tpl', 166, false),array('modifier', 'strip_tags', 'blocks/fields/add_edit_form.tpl', 409, false),array('modifier', 'regex_replace', 'blocks/fields/add_edit_form.tpl', 634, false),array('function', 'rlHook', 'blocks/fields/add_edit_form.tpl', 141, false),)), $this); ?>
<!-- add/edit new field -->

<?php $this->assign('sPost', $_POST); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_start.tpl') : smarty_modifier_cat($_tmp, 'm_block_start.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form onsubmit="return submitHandler();" action="<?php echo $this->_tpl_vars['rlBaseC']; ?>
action=<?php if ($_GET['action'] == 'add'): ?>add<?php elseif ($_GET['action'] == 'edit'): ?>edit&amp;field=<?php echo $_GET['field']; ?>
<?php endif; ?>" method="post">
    <input type="hidden" name="submit" value="1" />
    <?php if ($_GET['action'] == 'edit'): ?>
        <input type="hidden" name="fromPost" value="1" />
    <?php endif; ?>
    <table class="form">
    <tr>
        <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['key']; ?>
</td>
        <td class="field">
            <input <?php if ($_GET['action'] == 'edit'): ?>readonly="readonly"<?php endif; ?> class="<?php if ($_GET['action'] == 'edit'): ?>disabled<?php endif; ?>" name="key" type="text" style="width: 150px;" value="<?php echo $this->_tpl_vars['sPost']['key']; ?>
" maxlength="30" />
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
        <td class="name"><?php echo $this->_tpl_vars['lang']['description']; ?>
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
                <textarea cols="" rows="" name="description[<?php echo $this->_tpl_vars['language']['Code']; ?>
]"><?php echo $this->_tpl_vars['sPost']['description'][$this->_tpl_vars['language']['Code']]; ?>
</textarea>
                <?php if (count($this->_tpl_vars['allLangs']) > 1): ?></div><?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
        </td>
    </tr>

    <tr>
        <td class="name"><?php echo $this->_tpl_vars['lang']['required_field']; ?>
</td>
        <td>
            <?php if ($this->_tpl_vars['sPost']['required'] == '1'): ?>
                <?php $this->assign('required_yes', 'checked="checked"'); ?>
            <?php elseif ($this->_tpl_vars['sPost']['required'] == '0'): ?>
                <?php $this->assign('required_no', 'checked="checked"'); ?>
            <?php else: ?>
                <?php $this->assign('required_no', 'checked="checked"'); ?>
            <?php endif; ?>
            <label><input <?php echo $this->_tpl_vars['required_yes']; ?>
 type="radio" name="required" value="1" /> <?php echo $this->_tpl_vars['lang']['yes']; ?>
</label>
            <label><input <?php echo $this->_tpl_vars['required_no']; ?>
 type="radio" name="required" value="0" /> <?php echo $this->_tpl_vars['lang']['no']; ?>
</label>
        </td>
    </tr>

    <tr>
        <td class="name"><?php echo $this->_tpl_vars['lang']['google_map']; ?>
</td>
        <td class="field">
            <?php if ($this->_tpl_vars['sPost']['map'] == '1'): ?>
                <?php $this->assign('map_yes', 'checked="checked"'); ?>
            <?php elseif ($this->_tpl_vars['sPost']['map'] == '0'): ?>
                <?php $this->assign('map_no', 'checked="checked"'); ?>
            <?php else: ?>
                <?php $this->assign('map_no', 'checked="checked"'); ?>
            <?php endif; ?>

            <table>
            <tr>
                <td>
                    <label><input <?php echo $this->_tpl_vars['map_yes']; ?>
 type="radio" name="map" value="1" /> <?php echo $this->_tpl_vars['lang']['yes']; ?>
</label>
                    <label><input <?php echo $this->_tpl_vars['map_no']; ?>
 type="radio" name="map" value="0" /> <?php echo $this->_tpl_vars['lang']['no']; ?>
</label>
                </td>
                <td>
                    <span class="field_description"><?php echo $this->_tpl_vars['lang']['use_for_displaing_map']; ?>
</span>
                </td>
            </tr>
            </table>
        </td>
    </tr>
    <?php if ($this->_tpl_vars['config']['membership_module']): ?>
    <tr>
        <td class="name"><?php echo $this->_tpl_vars['lang']['contact_field']; ?>
</td>
        <td class="field">
            <?php if ($this->_tpl_vars['sPost']['contact'] == '1'): ?>
                <?php $this->assign('contact_yes', 'checked="checked"'); ?>
            <?php elseif ($this->_tpl_vars['sPost']['contact'] == '0'): ?>
                <?php $this->assign('contact_no', 'checked="checked"'); ?>
            <?php else: ?>
                <?php $this->assign('contact_no', 'checked="checked"'); ?>
            <?php endif; ?>

            <table>
            <tr>
                <td>
                    <label><input <?php echo $this->_tpl_vars['contact_yes']; ?>
 type="radio" name="contact" value="1" /> <?php echo $this->_tpl_vars['lang']['yes']; ?>
</label>
                    <label><input <?php echo $this->_tpl_vars['contact_no']; ?>
 type="radio" name="contact" value="0" /> <?php echo $this->_tpl_vars['lang']['no']; ?>
</label>
                </td>
                <td>
                    <span class="field_description"><?php echo $this->_tpl_vars['lang']['contact_field_for_membership']; ?>
</span>
                </td>
            </tr>
            </table>
        </td>
    </tr>
    <?php endif; ?>
    <tr>
        <td class="name"><?php echo $this->_tpl_vars['lang']['show_on']; ?>
</td>
        <td class="field">
            <?php if ($_GET['controller'] == 'account_fields'): ?>
                <?php $this->assign('add_pk', "pages+name+registration"); ?>
                <?php $this->assign('details_pk', 'view_account'); ?>
            <?php else: ?>
                <?php $this->assign('add_pk', "pages+name+add_listing"); ?>
                <?php $this->assign('details_pk', "pages+name+view_details"); ?>
            <?php endif; ?>
            <label><input <?php if (isset ( $this->_tpl_vars['sPost']['add_page'] )): ?>checked="checked"<?php else: ?><?php if (empty ( $this->_tpl_vars['sPost'] )): ?>checked="checked"<?php endif; ?><?php endif; ?> type="checkbox" name="add_page" /> <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['add_edit_page_tpl'])) ? $this->_run_mod_handler('replace', true, $_tmp, "[page]", $this->_tpl_vars['lang'][$this->_tpl_vars['add_pk']]) : smarty_modifier_replace($_tmp, "[page]", $this->_tpl_vars['lang'][$this->_tpl_vars['add_pk']])); ?>
</label>
            <label <?php if ($this->_tpl_vars['sPost']['type'] == 'accept'): ?>style="display:none"<?php endif; ?>><input <?php if (isset ( $this->_tpl_vars['sPost']['details_page'] ) && $this->_tpl_vars['sPost']['type'] != 'accept'): ?>checked="checked"<?php else: ?><?php if (empty ( $this->_tpl_vars['sPost'] )): ?>checked="checked"<?php endif; ?><?php endif; ?> type="checkbox" name="details_page" /> <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['add_edit_page_tpl'])) ? $this->_run_mod_handler('replace', true, $_tmp, "[page]", $this->_tpl_vars['lang'][$this->_tpl_vars['details_pk']]) : smarty_modifier_replace($_tmp, "[page]", $this->_tpl_vars['lang'][$this->_tpl_vars['details_pk']])); ?>
</label>
        </td>
    </tr>

    <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'apTplFieldsForm'), $this);?>


    <tr>
        <td class="name"><?php echo $this->_tpl_vars['lang']['status']; ?>
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
        <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['field_type']; ?>
</td>
        <td class="field">
            <select <?php if ($_GET['action'] == 'edit'): ?>disabled="disabled"<?php endif; ?> name="type" class="<?php if ($_GET['action'] == 'edit'): ?>disabled<?php endif; ?>">
                <option value=""><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
                <?php $_from = $this->_tpl_vars['l_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['lType']):
?>
                    <option <?php if ($this->_tpl_vars['sPost']['type'] == $this->_tpl_vars['key']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_tpl_vars['key']; ?>
"><?php echo $this->_tpl_vars['lType']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
            </select>
            <?php if ($_GET['action'] == 'edit'): ?>
                <input type="hidden" name="type" value="<?php echo $this->_tpl_vars['sPost']['type']; ?>
" />
            <?php endif; ?>

            <?php if ($_GET['action'] == 'edit' && $this->_tpl_vars['sys_fields'] && ((is_array($_tmp=$this->_tpl_vars['field_info']['Key'])) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['sys_fields']) : in_array($_tmp, $this->_tpl_vars['sys_fields']))): ?>
                <span class="field_description"><?php echo $this->_tpl_vars['lang']['system_field_notice']; ?>
</span>
            <?php endif; ?>
        </td>
    </tr>
    </table>

    <!-- additional options -->
    <div id="additional_options">

    <script type="text/javascript">
    var langs_list = Array(
    <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['lF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['languages']):
        $this->_foreach['lF']['iteration']++;
?>
    '<?php echo $this->_tpl_vars['languages']['Code']; ?>
|<?php echo $this->_tpl_vars['languages']['name']; ?>
'<?php if (! ($this->_foreach['lF']['iteration'] == $this->_foreach['lF']['total'])): ?>,<?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
    );
    </script>

    <!-- text field -->
    <?php $this->assign('textDefault', $this->_tpl_vars['sPost']['text']['default']); ?>
    <div id="field_text" class="hide">
        <table class="form">
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['default_value']; ?>
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
                    <input type="text" name="text[default][<?php echo $this->_tpl_vars['language']['Code']; ?>
]" value="<?php echo $this->_tpl_vars['textDefault'][$this->_tpl_vars['language']['Code']]; ?>
" maxlength="100" />
                    <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                            <span class="field_description_noicon"><?php echo $this->_tpl_vars['lang']['name']; ?>
 (<b><?php echo $this->_tpl_vars['language']['name']; ?>
</b>)</span>
                        </div>
                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
            </td>
        </tr>

        <?php $this->assign('text_cond', $this->_tpl_vars['sPost']['text']); ?>
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['check_condition']; ?>
</td>
            <td class="field">
                <select name="text[condition]">
                    <option value=""><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
                    <?php $_from = $this->_tpl_vars['l_cond']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cKey'] => $this->_tpl_vars['condition']):
?>
                        <option <?php if ($this->_tpl_vars['text_cond']['condition'] == $this->_tpl_vars['cKey']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_tpl_vars['cKey']; ?>
"><?php echo $this->_tpl_vars['condition']; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
            </td>
        </tr>
        </table>
        <?php if (count($this->_tpl_vars['allLangs']) > 1 && $_GET['field'] != 'First_name' && $_GET['field'] != 'Last_name'): ?>
        <div id="text_multilingual" <?php if ($this->_tpl_vars['text_cond']['condition']): ?>class="hide"<?php endif; ?>>
            <table class="form">
            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['multilingual']; ?>
</td>
                <td class="field">
                    <?php if ($this->_tpl_vars['sPost']['text']['multilingual'] == '1'): ?>
                        <?php $this->assign('text_multilingual_yes', 'checked="checked"'); ?>
                    <?php elseif ($this->_tpl_vars['sPost']['text']['multilingual'] == '0'): ?>
                        <?php $this->assign('text_multilingual_no', 'checked="checked"'); ?>
                    <?php else: ?>
                        <?php $this->assign('text_multilingual_no', 'checked="checked"'); ?>
                    <?php endif; ?>

                    <label><input <?php echo $this->_tpl_vars['text_multilingual_yes']; ?>
 type="radio" name="text[multilingual]" value="1" /> <?php echo $this->_tpl_vars['lang']['yes']; ?>
</label>
                    <label><input <?php echo $this->_tpl_vars['text_multilingual_no']; ?>
 type="radio" name="text[multilingual]" value="0" /> <?php echo $this->_tpl_vars['lang']['no']; ?>
</label>
                </td>
            </tr>
            </table>
        </div>
        <?php endif; ?>
        <table class="form">
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['maxlength']; ?>
</td>
            <td class="field">
                <input class="numeric" name="text[maxlength]" type="text" style="width: 50px; text-align: center;" value="<?php echo $this->_tpl_vars['sPost']['text']['maxlength']; ?>
" maxlength="3" /> <span class="field_description"><?php echo $this->_tpl_vars['lang']['default_text_value_des']; ?>
</span>
            </td>
        </tr>

        <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'apTplFieldsFormText'), $this);?>


        </table>

        <script type="text/javascript">
        <?php echo '

        $(document).ready(function(){
            $(\'select[name="text[condition]"]\').change(function(){
                var val = $(this).val();

                if ( val )
                {
                    $(\'#text_multilingual\').slideUp();
                    $(\'input[name="text[multilingual]"][value=0]\').prop(\'checked\', true);
                }
                else
                {
                    $(\'#text_multilingual\').slideDown();
                }
            });
        });

        '; ?>

        </script>
    </div>
    <!-- text field end -->

    <!-- textarea field -->
    <?php $this->assign('textarea', $this->_tpl_vars['sPost']['textarea']); ?>
    <div id="field_textarea" class="hide">
        <table class="form">
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['maxlength']; ?>
</td>
            <td class="field">
                <input class="numeric" name="textarea[maxlength]" type="text" style="width: 50px; text-align: center;" value="<?php echo $this->_tpl_vars['textarea']['maxlength']; ?>
" maxlength="4" /> <span class="field_description"><?php echo $this->_tpl_vars['lang']['default_textarea_value_des']; ?>
</span>
            </td>
        </tr>
        <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['multilingual']; ?>
</td>
            <td class="field">
                <?php if ($this->_tpl_vars['sPost']['textarea']['multilingual'] == '1'): ?>
                    <?php $this->assign('multilingual_yes', 'checked="checked"'); ?>
                <?php elseif ($this->_tpl_vars['sPost']['textarea']['multilingual'] == '0'): ?>
                    <?php $this->assign('multilingual_no', 'checked="checked"'); ?>
                <?php else: ?>
                    <?php $this->assign('multilingual_no', 'checked="checked"'); ?>
                <?php endif; ?>

                <label><input <?php echo $this->_tpl_vars['multilingual_yes']; ?>
 type="radio" name="textarea[multilingual]" value="1" /> <?php echo $this->_tpl_vars['lang']['yes']; ?>
</label>
                <label><input <?php echo $this->_tpl_vars['multilingual_no']; ?>
 type="radio" name="textarea[multilingual]" value="0" /> <?php echo $this->_tpl_vars['lang']['no']; ?>
</label>
            </td>
        </tr>
        <?php endif; ?>
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['html_editor']; ?>
</td>
            <td class="field">
                <?php if ($this->_tpl_vars['sPost']['textarea']['html'] == '1'): ?>
                    <?php $this->assign('html_yes', 'checked="checked"'); ?>
                <?php elseif ($this->_tpl_vars['sPost']['textarea']['html'] == '0'): ?>
                    <?php $this->assign('html_no', 'checked="checked"'); ?>
                <?php else: ?>
                    <?php $this->assign('html_no', 'checked="checked"'); ?>
                <?php endif; ?>

                <label><input <?php echo $this->_tpl_vars['html_yes']; ?>
 type="radio" name="textarea[html]" value="1" /> <?php echo $this->_tpl_vars['lang']['yes']; ?>
</label>
                <label><input <?php echo $this->_tpl_vars['html_no']; ?>
 type="radio" name="textarea[html]" value="0" /> <?php echo $this->_tpl_vars['lang']['no']; ?>
</label>
            </td>
        </tr>

        <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'apTplFieldsFormTextarea'), $this);?>


        </table>
    </div>
    <!-- textarea field end -->

    <!-- number field -->
    <?php $this->assign('number', $this->_tpl_vars['sPost']['number']); ?>
    <div id="field_number" class="hide">
        <table class="form">
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['maxlength']; ?>
</td>
            <td class="field">
                <input class="numeric" name="number[max_length]" type="text" style="width: 60px; text-align: center;" value="<?php echo $this->_tpl_vars['number']['max_length']; ?>
" maxlength="8" />
                <span class="field_description"><?php echo $this->_tpl_vars['lang']['number_field_length_hint']; ?>
</span>
            </td>
        </tr>
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['number_format']; ?>
</td>
            <td class="field">
                <?php if ($this->_tpl_vars['sPost']['number']['format'] == '1'): ?>
                    <?php $this->assign('number_format_yes', 'checked="checked"'); ?>
                <?php elseif ($this->_tpl_vars['sPost']['number']['format'] == '0'): ?>
                    <?php $this->assign('number_format_no', 'checked="checked"'); ?>
                <?php else: ?>
                    <?php $this->assign('number_format_no', 'checked="checked"'); ?>
                <?php endif; ?>

                <label><input <?php echo $this->_tpl_vars['number_format_yes']; ?>
 name="number[format]" type="radio" value="1" /> <?php echo $this->_tpl_vars['lang']['yes']; ?>
</label>
                <label><input <?php echo $this->_tpl_vars['number_format_no']; ?>
  name="number[format]" type="radio" value="0" /> <?php echo $this->_tpl_vars['lang']['no']; ?>
</label>

                <span class="field_description"><?php echo $this->_tpl_vars['lang']['number_format_hint']; ?>
</span>
            </td>
        </tr>
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['thousands_separator']; ?>
</td>
            <td class="field">
                <input name="number[thousands_sep]" type="text" value="<?php echo $this->_tpl_vars['number']['thousands_sep']; ?>
" maxlength="1" style="width: 15px; text-align: center;"/>
                <span class="field_description"><?php echo $this->_tpl_vars['lang']['thousands_separator_hint']; ?>
</span>
            </td>
        </tr>

        <script type="text/javascript"><?php echo '
        $(document).ready(function(){
            flynax.numberFormatHandler($(\'#field_number\'));
        });
        '; ?>
</script>

        <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'apTplFieldsNumber'), $this);?>


        </table>
    </div>
    <!-- number field end -->

    <!-- phone number field -->
    <?php $this->assign('phone', $this->_tpl_vars['sPost']['phone']); ?>
    <div id="field_phone" class="hide">
        <table class="form">
        <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'apTplFieldsPhone'), $this);?>


        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['phone_hide_number']; ?>
</td>
            <td class="field">
                <?php if ($this->_tpl_vars['phone']['hide_number'] == '1'): ?>
                    <?php $this->assign('hide_number_yes', 'checked="checked"'); ?>
                <?php elseif ($this->_tpl_vars['phone']['hide_number'] == '0'): ?>
                    <?php $this->assign('hide_number_no', 'checked="checked"'); ?>
                <?php else: ?>
                    <?php $this->assign('hide_number_no', 'checked="checked"'); ?>
                <?php endif; ?>

                <label>
                    <input <?php echo $this->_tpl_vars['hide_number_yes']; ?>
 name="phone[hide_number]" type="radio" value="1" /> <?php echo $this->_tpl_vars['lang']['yes']; ?>

                </label>
                <label>
                    <input <?php echo $this->_tpl_vars['hide_number_no']; ?>
  name="phone[hide_number]" type="radio" value="0" /> <?php echo $this->_tpl_vars['lang']['no']; ?>

                </label>
            </td>
        </tr>

        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['bind_data_format']; ?>
</td>
            <td class="field">
                <select id="dd_phone_block" name="phone[condition]" class="data_format">
                    <option value="0"><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
                    <?php $_from = $this->_tpl_vars['data_formats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['format']):
?>
                    <option value="<?php echo $this->_tpl_vars['format']['Key']; ?>
"<?php if ($this->_tpl_vars['format']['Key'] == $this->_tpl_vars['phone']['condition']): ?> selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['format']['name'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
            </td>
        </tr>

        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['field_format']; ?>
</td>
            <td class="field_tall">
                <ul class="clear_list">
                    <li><label><input type="checkbox" name="phone[code]" <?php if ($this->_tpl_vars['phone']['code']): ?>checked="checked"<?php endif; ?> value="1" /> <?php echo $this->_tpl_vars['lang']['phone_code']; ?>
</label></li>
                    <li id="phone_block" <?php if ($this->_tpl_vars['phone']['condition']): ?>class="hide"<?php endif; ?>><input style="width: 20px;text-align: center;" type="text" name="phone[area_length]" value="<?php if ($this->_tpl_vars['phone']['area_length']): ?><?php echo $this->_tpl_vars['phone']['area_length']; ?>
<?php else: ?>3<?php endif; ?>" maxlength="1" /> <label><?php echo $this->_tpl_vars['lang']['phone_area_length']; ?>
</label></li>
                    <li><input style="width: 20px;text-align: center;" type="text" name="phone[phone_length]" value="<?php if ($this->_tpl_vars['phone']['phone_length']): ?><?php echo $this->_tpl_vars['phone']['phone_length']; ?>
<?php else: ?>7<?php endif; ?>" maxlength="1" /> <label><?php echo $this->_tpl_vars['lang']['phone_number_length']; ?>
</label></li>
                    <li><label><input type="checkbox" name="phone[ext]" <?php if ($this->_tpl_vars['phone']['ext']): ?>checked="checked"<?php endif; ?> value="1" /> <?php echo $this->_tpl_vars['lang']['phone_ext']; ?>
</label></li>
                </ul>
            </td>
        </tr>
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['field_preview']; ?>
</td>
            <td class="field">
                <div style="padding: 0 0 10px 0;">
                    <span class="phone_code_prev hide">+ <input disabled="disabled" type="text" maxlength="4" style="width: 30px;text-align: center;" /> -</span>
                    <input disabled="disabled" id="phone_area_input" type="text" maxlength="5" style="width: 40px;text-align: center;" />
                    - <input disabled="disabled" id="phone_number_input" type="text" maxlength="9" style="width: 80px;" /></span>
                    <span class="phone_ext hide">/ <input disabled="disabled" type="text" maxlength="4" style="width: 35px;" /></span>
                </div>
                <div>
                    <span class="phone_code_prev hide">+ xxx</span>
                    <span id="phone_area_preview">(xxx)</span>
                    <span id="phone_number_preview">123-4567</span>
                    <span class="phone_ext hide"><?php echo $this->_tpl_vars['lang']['phone_ext_out']; ?>
22</span>
                </div>
            </td>
        </tr>

        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['messenger_icons']; ?>
</td>
            <td class="field">
                <?php if ($this->_tpl_vars['phone']['messenger_icons'] == '1'): ?>
                    <?php $this->assign('messenger_icons_yes', 'checked="checked"'); ?>
                <?php elseif ($this->_tpl_vars['phone']['messenger_icons'] == '0'): ?>
                    <?php $this->assign('messenger_icons_no', 'checked="checked"'); ?>
                <?php else: ?>
                    <?php $this->assign('messenger_icons_no', 'checked="checked"'); ?>
                <?php endif; ?>

                <label>
                    <input <?php echo $this->_tpl_vars['messenger_icons_yes']; ?>
 name="phone[messenger_icons]" type="radio" value="1" /> <?php echo $this->_tpl_vars['lang']['yes']; ?>

                </label>
                <label>
                    <input <?php echo $this->_tpl_vars['messenger_icons_no']; ?>
  name="phone[messenger_icons]" type="radio" value="0" /> <?php echo $this->_tpl_vars['lang']['no']; ?>

                </label>
            </td>
        </tr>

        </table>

        <script type="text/javascript">flynax.phoneFieldControls();</script>
    </div>
    <!-- phone number field -->

    <!-- date field -->
    <?php $this->assign('date', $this->_tpl_vars['sPost']['date']); ?>
    <div id="field_date" class="hide">
        <table class="form">
        <tr>
            <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['mode']; ?>
</td>
            <td class="field">
                <label><input <?php if ($this->_tpl_vars['date']['mode'] == 'single'): ?>checked="checked"<?php endif; ?> type="radio" name="date[mode]" value="single" /> <?php echo $this->_tpl_vars['lang']['single_date']; ?>
</label>
                <label><input <?php if ($this->_tpl_vars['date']['mode'] == 'multi'): ?>checked="checked"<?php endif; ?> type="radio" name="date[mode]" value="multi" /> <?php echo $this->_tpl_vars['lang']['time_period']; ?>
</label>
            </td>
        </tr>

        <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'apTplFieldsDate'), $this);?>


        </table>
    </div>
    <!-- date field end -->

    <!-- boolean field -->
    <?php if ($this->_tpl_vars['sPost']['bool']['default'] == '1'): ?>
        <?php $this->assign('bool_default_yes', 'checked="checked"'); ?>
    <?php elseif ($this->_tpl_vars['sPost']['required'] == '0'): ?>
        <?php $this->assign('bool_default_no', 'checked="checked"'); ?>
    <?php else: ?>
        <?php $this->assign('bool_default_no', 'checked="checked"'); ?>
    <?php endif; ?>
    <div id="field_bool" class="hide">
        <table class="form">
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['default_value']; ?>
</td>
            <td class="field">
                <label><input <?php echo $this->_tpl_vars['bool_default_yes']; ?>
 type="radio" name="bool[default]" value="1" /> <?php echo $this->_tpl_vars['lang']['yes']; ?>
</label>
                <label><input <?php echo $this->_tpl_vars['bool_default_no']; ?>
 type="radio" name="bool[default]" value="0" /> <?php echo $this->_tpl_vars['lang']['no']; ?>
</label>
            </td>
        </tr>

        <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'apTplFieldsBool'), $this);?>


        </table>
    </div>
    <!-- boolean field end -->

    <!-- mixed field -->
    <div id="field_mixed" class="hide">
        <script type="text/javascript">
        var mixed_step = 1;
        </script>
        <table class="form">

        <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'apTplFieldsMixed'), $this);?>


        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['bind_data_format']; ?>
</td>
            <td class="field">
                <select id="dd_mixed_block" name="mixed_data_format" class="data_format">
                    <option value="0"><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
                    <?php $_from = $this->_tpl_vars['data_formats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['format']):
?>
                    <option value="<?php echo $this->_tpl_vars['format']['Key']; ?>
"<?php if ($this->_tpl_vars['format']['Key'] == $this->_tpl_vars['sPost']['mixed_data_format']): ?> selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['format']['name'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
            </td>
        </tr>
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['number_format']; ?>
</td>
            <td class="field">
                <?php if ($this->_tpl_vars['sPost']['format'] == '1'): ?>
                    <?php $this->assign('mixed_number_format_yes', 'checked="checked"'); ?>
                <?php elseif ($this->_tpl_vars['sPost']['format'] == '0'): ?>
                    <?php $this->assign('mixed_number_format_no', 'checked="checked"'); ?>
                <?php else: ?>
                    <?php $this->assign('mixed_number_format_no', 'checked="checked"'); ?>
                <?php endif; ?>

                <label><input <?php echo $this->_tpl_vars['mixed_number_format_yes']; ?>
 name="mixed[format]" type="radio" value="1" /> <?php echo $this->_tpl_vars['lang']['yes']; ?>
</label>
                <label><input <?php echo $this->_tpl_vars['mixed_number_format_no']; ?>
 name="mixed[format]" type="radio" value="0" /> <?php echo $this->_tpl_vars['lang']['no']; ?>
</label>

                <span class="field_description"><?php echo $this->_tpl_vars['lang']['number_format_hint']; ?>
</span>
            </td>
        </tr>
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['thousands_separator']; ?>
</td>
            <td class="field">
                <input name="mixed[thousands_sep]" type="text" value="<?php echo $this->_tpl_vars['sPost']['thousands_sep']; ?>
" maxlength="1" style="width: 15px; text-align: center;"/>
                <span class="field_description"><?php echo $this->_tpl_vars['lang']['thousands_separator_hint']; ?>
</span>
            </td>
        </tr>

        <script type="text/javascript"><?php echo '
        $(document).ready(function(){
            flynax.numberFormatHandler($(\'#field_mixed\'));
        });
        '; ?>
</script>

        </table>

        <div id="mixed_block" <?php if ($this->_tpl_vars['sPost']['mixed_data_format']): ?>class="hide"<?php endif; ?>>
        <table class="form" style="margin: 10px 0 0;">
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['field_items']; ?>
</td>
            <td class="field">
                <div class="options-section" id="mixed">
                <?php if ($this->_tpl_vars['sPost']['mixed']): ?>
                    <?php $_from = $this->_tpl_vars['sPost']['mixed']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['mixedKey'] => $this->_tpl_vars['mixedItem']):
?>
                    <?php if ($this->_tpl_vars['mixedKey'] != 'default' && $this->_tpl_vars['mixedKey'] != 'format' && $this->_tpl_vars['mixedKey'] != 'thousands_sep'): ?>
                        <div id="mixed_<?php echo $this->_tpl_vars['mixedKey']; ?>
" class="option">
                            <div class="controls">
                                <label><input <?php if ($this->_tpl_vars['sPost']['mixed']['default'] == $this->_tpl_vars['mixedKey']): ?>checked="checked"<?php endif; ?> id="mixed_def_<?php echo $this->_tpl_vars['mixedKey']; ?>
" type="radio" name="mixed[default]" value="<?php echo $this->_tpl_vars['mixedKey']; ?>
"> Default</label>
                                <a href="javascript:void(0)" onclick="$('#mixed_<?php echo $this->_tpl_vars['mixedKey']; ?>
').remove();" class="delete_item">Remove</a>
                            </div>

                            <div class="data">
                                <ul class="tabs">
                                    <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['lang_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lang_foreach']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['languages']):
        $this->_foreach['lang_foreach']['iteration']++;
?>
                                        <?php $this->assign('lCode', $this->_tpl_vars['languages']['Code']); ?>
                                        <li <?php if (($this->_foreach['lang_foreach']['iteration'] <= 1)): ?>class="active"<?php endif; ?> lang="<?php echo $this->_tpl_vars['lCode']; ?>
"><?php echo $this->_tpl_vars['languages']['name']; ?>
</li>
                                    <?php endforeach; endif; unset($_from); ?>
                                </ul>
                                <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['lang_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lang_foreach']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['languages']):
        $this->_foreach['lang_foreach']['iteration']++;
?>
                                    <?php $this->assign('lCode', $this->_tpl_vars['languages']['Code']); ?>
                                    <div class="tab_area <?php if (! ($this->_foreach['lang_foreach']['iteration'] <= 1)): ?>hide<?php endif; ?> <?php echo $this->_tpl_vars['lCode']; ?>
">
                                        <input type="text" class="margin float" name="mixed[<?php echo $this->_tpl_vars['mixedKey']; ?>
][<?php echo $this->_tpl_vars['languages']['Code']; ?>
]" value="<?php echo $this->_tpl_vars['mixedItem'][$this->_tpl_vars['lCode']]; ?>
">
                                        <span class="field_description_noicon"><?php echo $this->_tpl_vars['lang']['item_value']; ?>
 (<b><?php echo $this->_tpl_vars['languages']['name']; ?>
</b>)</span>
                                    </div>
                                <?php endforeach; endif; unset($_from); ?>
                            </div>
                        </div>
                        <script type="text/javascript">
                            if (mixed_step <= <?php echo $this->_tpl_vars['mixedKey']; ?>
)
                                mixed_step = <?php echo $this->_tpl_vars['mixedKey']; ?>
 + 1;
                        </script>
                    <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                <?php endif; ?>
                </div>

                <div class="add_item"><a href="javascript:void(0)" onclick="field_build('mixed', langs_list );"><?php echo $this->_tpl_vars['lang']['add_field_item']; ?>
</a></div>
            </td>
        </tr>
        </table>
        </div>
    </div>
    <!-- mixed field end -->

    <!-- dropdown list field -->
    <div id="field_select" class="hide">
        <script type="text/javascript">
        var select_step = 1;
        </script>
        <table class="form">

        <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'apTplFieldsDropdown'), $this);?>


        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['bind_data_format']; ?>
</td>
            <td class="field">
                <select id="dd_select_block" name="data_format" class="data_format">
                    <option value="0"><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
                    <?php $_from = $this->_tpl_vars['data_formats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['format']):
?>
                    <option value="<?php echo $this->_tpl_vars['format']['Key']; ?>
"<?php if ($this->_tpl_vars['format']['Key'] == $this->_tpl_vars['sPost']['data_format']): ?> selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['format']['name'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>

                <span class="field_description" id="field_condition_hint">
                    <?php $this->assign('replace', '<a target="_blank" class="static" href="javascript:void(0)">$1</a>'); ?>
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['field_data_formats_hint'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, '/\[(.*)\]/', $this->_tpl_vars['replace']) : smarty_modifier_regex_replace($_tmp, '/\[(.*)\]/', $this->_tpl_vars['replace'])); ?>

                </span>
            </td>
        </tr>

        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['field_autocomplete_option']; ?>
</td>
            <td class="field">
                <?php if ($this->_tpl_vars['sPost']['autocomplete'] == '1' && $this->_tpl_vars['sPost']['data_format'] !== 'years'): ?>
                    <?php $this->assign('autocomplete_yes', 'checked="checked"'); ?>
                <?php elseif (! $this->_tpl_vars['sPost']['autocomplete'] || $this->_tpl_vars['sPost']['autocomplete'] == '0'): ?>
                    <?php $this->assign('autocomplete_no', 'checked="checked"'); ?>
                <?php endif; ?>

                <label>
                    <input type="radio"
                           name="autocomplete"
                           value="1"
                           <?php echo $this->_tpl_vars['autocomplete_yes']; ?>

                           <?php if ($this->_tpl_vars['sPost']['data_format'] === 'years'): ?>disabled<?php endif; ?> /> <?php echo $this->_tpl_vars['lang']['yes']; ?>

                </label>
                <label>
                    <input type="radio"
                           name="autocomplete"
                           value="0"
                           <?php echo $this->_tpl_vars['autocomplete_no']; ?>

                           <?php if ($this->_tpl_vars['sPost']['data_format'] === 'years'): ?>disabled<?php endif; ?> /> <?php echo $this->_tpl_vars['lang']['no']; ?>

                </label>

                <span class="field_description" id="field_autocomplete_hint"><?php echo $this->_tpl_vars['lang']['autocomplete_not_allowed']; ?>
</span>
            </td>
        </tr>
        </table>

        <script type="text/javascript">
        var field_condition_href = '<?php echo $this->_tpl_vars['rlBase']; ?>
index.php?controller=data_formats&mode=manage&format=[key]';
        <?php echo '

        $(\'#dd_select_block\').change(function(){
            fieldConditionHandler();
        });

        $(document).ready(function(){
            fieldConditionHandler();
        });

        function fieldConditionHandler() {
            var data_format = $(\'#dd_select_block\').val();
            data_format = data_format && data_format != \'0\' ? data_format : \'\';

            if (data_format) {
                $(\'#field_condition_hint a\').attr(\'href\', field_condition_href.replace(\'[key]\', data_format));
                $(\'#field_condition_hint\').fadeIn();
            } else {
                $(\'#field_condition_hint\').fadeOut(\'fast\');
            }

            $(\'#field_autocomplete_hint\')[data_format === \'years\' ? \'show\' : \'hide\']();
            $(\'[name="autocomplete"]\').prop(\'disabled\', data_format === \'years\');

            if (data_format === \'years\') {
                $(\'[name="autocomplete"][value="0"]\').prop(\'checked\', true);
            }
        }
        '; ?>
</script>

        <div id="select_block" <?php if ($this->_tpl_vars['sPost']['data_format']): ?>class="hide"<?php endif; ?>>
        <table class="form" style="margin: 10px 0 0;">
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['field_items']; ?>
</td>
            <td class="field">
                <div class="options-section" id="select">
                <?php if ($this->_tpl_vars['sPost']['select']): ?>
                    <?php $_from = $this->_tpl_vars['sPost']['select']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['selectKey'] => $this->_tpl_vars['selectItem']):
?>
                    <?php if ($this->_tpl_vars['selectKey'] != 'default'): ?>
                        <div id="select_<?php echo $this->_tpl_vars['selectKey']; ?>
" class="option">
                            <div class="controls">
                                <label><input <?php if ($this->_tpl_vars['sPost']['select']['default'] == $this->_tpl_vars['selectKey']): ?>checked="checked"<?php endif; ?> id="select_def_<?php echo $this->_tpl_vars['selectKey']; ?>
" type="radio" name="select[default]" value="<?php echo $this->_tpl_vars['selectKey']; ?>
"> Default</label>
                                <a href="javascript:void(0)" onclick="$('#select_<?php echo $this->_tpl_vars['selectKey']; ?>
').remove();" class="delete_item">Remove</a>
                            </div>

                            <div class="data">
                                <ul class="tabs">
                                    <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['lang_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lang_foreach']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['languages']):
        $this->_foreach['lang_foreach']['iteration']++;
?>
                                        <?php $this->assign('lCode', $this->_tpl_vars['languages']['Code']); ?>
                                        <li <?php if (($this->_foreach['lang_foreach']['iteration'] <= 1)): ?>class="active"<?php endif; ?> lang="<?php echo $this->_tpl_vars['lCode']; ?>
"><?php echo $this->_tpl_vars['languages']['name']; ?>
</li>
                                    <?php endforeach; endif; unset($_from); ?>
                                </ul>
                                <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['lang_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lang_foreach']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['languages']):
        $this->_foreach['lang_foreach']['iteration']++;
?>
                                    <?php $this->assign('lCode', $this->_tpl_vars['languages']['Code']); ?>
                                    <div class="tab_area <?php if (! ($this->_foreach['lang_foreach']['iteration'] <= 1)): ?>hide<?php endif; ?> <?php echo $this->_tpl_vars['lCode']; ?>
">
                                        <input type="text" class="margin float" name="select[<?php echo $this->_tpl_vars['selectKey']; ?>
][<?php echo $this->_tpl_vars['languages']['Code']; ?>
]" value="<?php echo $this->_tpl_vars['selectItem'][$this->_tpl_vars['lCode']]; ?>
">
                                        <span class="field_description_noicon"><?php echo $this->_tpl_vars['lang']['item_value']; ?>
 (<b><?php echo $this->_tpl_vars['languages']['name']; ?>
</b>)</span>
                                    </div>
                                <?php endforeach; endif; unset($_from); ?>
                            </div>
                        </div>
                        <script type="text/javascript">
                            if (select_step <= <?php echo $this->_tpl_vars['selectKey']; ?>
)
                                select_step = <?php echo $this->_tpl_vars['selectKey']; ?>
 + 1;
                        </script>
                    <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                <?php endif; ?>
                </div>

                <div class="add_item"><a href="javascript:void(0)" onclick="field_build('select', langs_list );"><?php echo $this->_tpl_vars['lang']['add_field_item']; ?>
</a></div>
            </td>
        </tr>
        </table>
        </div>
    </div>
    <!-- dropdown list field end -->

    <!-- radio set field -->
    <div id="field_radio" class="hide">
        <script type="text/javascript">
        var radio_step = 1;
        </script>
        <table class="form">

        <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'apTplFieldsRadio'), $this);?>


        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['bind_data_format']; ?>
</td>
            <td class="field">
                <select id="dd_radio_block" name="data_format" class="data_format margin">
                    <option value="0"><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
                    <?php $_from = $this->_tpl_vars['data_formats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['format']):
?>
                    <option value="<?php echo $this->_tpl_vars['format']['Key']; ?>
"<?php if ($this->_tpl_vars['format']['Key'] == $this->_tpl_vars['sPost']['data_format']): ?> selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['format']['name'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
            </td>
        </tr>
        </table>

        <div id="radio_block" <?php if ($this->_tpl_vars['sPost']['data_format']): ?>class="hide"<?php endif; ?>>
        <table class="form" style="margin: 10px 0 0;">
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['field_items']; ?>
</td>
            <td class="field">
                <div class="options-section" id="radio">
                <?php if ($this->_tpl_vars['sPost']['radio']): ?>
                    <?php $_from = $this->_tpl_vars['sPost']['radio']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['radioKey'] => $this->_tpl_vars['radioItem']):
?>
                    <?php if ($this->_tpl_vars['radioKey'] != 'default'): ?>
                        <div id="radio_<?php echo $this->_tpl_vars['radioKey']; ?>
" class="option">
                            <div class="controls">
                                <label><input <?php if ($this->_tpl_vars['sPost']['radio']['default'] == $this->_tpl_vars['radioKey']): ?>checked="checked"<?php endif; ?> id="radio_def_<?php echo $this->_tpl_vars['radioKey']; ?>
" type="radio" name="radio[default]" value="<?php echo $this->_tpl_vars['radioKey']; ?>
"> Default</label>
                                <a href="javascript:void(0)" onclick="$('#radio_<?php echo $this->_tpl_vars['radioKey']; ?>
').remove();" class="delete_item">Remove</a>
                            </div>

                            <div class="data">
                                <ul class="tabs">
                                    <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['lang_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lang_foreach']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['languages']):
        $this->_foreach['lang_foreach']['iteration']++;
?>
                                        <?php $this->assign('lCode', $this->_tpl_vars['languages']['Code']); ?>
                                        <li <?php if (($this->_foreach['lang_foreach']['iteration'] <= 1)): ?>class="active"<?php endif; ?> lang="<?php echo $this->_tpl_vars['lCode']; ?>
"><?php echo $this->_tpl_vars['languages']['name']; ?>
</li>
                                    <?php endforeach; endif; unset($_from); ?>
                                </ul>
                                <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['lang_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lang_foreach']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['languages']):
        $this->_foreach['lang_foreach']['iteration']++;
?>
                                    <?php $this->assign('lCode', $this->_tpl_vars['languages']['Code']); ?>
                                    <div class="tab_area <?php if (! ($this->_foreach['lang_foreach']['iteration'] <= 1)): ?>hide<?php endif; ?> <?php echo $this->_tpl_vars['lCode']; ?>
">
                                        <input type="text" class="margin float" name="radio[<?php echo $this->_tpl_vars['radioKey']; ?>
][<?php echo $this->_tpl_vars['languages']['Code']; ?>
]" value="<?php echo $this->_tpl_vars['radioItem'][$this->_tpl_vars['lCode']]; ?>
">
                                        <span class="field_description_noicon"><?php echo $this->_tpl_vars['lang']['item_value']; ?>
 (<b><?php echo $this->_tpl_vars['languages']['name']; ?>
</b>)</span>
                                    </div>
                                <?php endforeach; endif; unset($_from); ?>
                            </div>
                        </div>
                        <script type="text/javascript">
                            if (radio_step <= <?php echo $this->_tpl_vars['radioKey']; ?>
)
                                radio_step = <?php echo $this->_tpl_vars['radioKey']; ?>
 + 1;
                        </script>
                    <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                <?php endif; ?>
                </div>

                <div class="add_item"><a href="javascript:void(0)" onclick="field_build('radio', langs_list );"><?php echo $this->_tpl_vars['lang']['add_field_item']; ?>
</a></div>
            </td>
        </tr>
        </table>
        </div>
    </div>
    <!-- radio set field end -->

    <!-- checkbox set field -->
    <div id="field_checkbox" class="hide">
        <script type="text/javascript">
        var checkbox_step = 1;
        </script>
        <table class="form">

        <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'apTplFieldsCheckbox'), $this);?>


        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['number_of_columns']; ?>
</td>
            <td>
                <select name="column_number" style="width:40px">
                    <?php unset($this->_sections['column_numbers']);
$this->_sections['column_numbers']['name'] = 'column_numbers';
$this->_sections['column_numbers']['start'] = (int)1;
$this->_sections['column_numbers']['loop'] = is_array($_loop=7) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['column_numbers']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['column_numbers']['show'] = true;
$this->_sections['column_numbers']['max'] = $this->_sections['column_numbers']['loop'];
if ($this->_sections['column_numbers']['start'] < 0)
    $this->_sections['column_numbers']['start'] = max($this->_sections['column_numbers']['step'] > 0 ? 0 : -1, $this->_sections['column_numbers']['loop'] + $this->_sections['column_numbers']['start']);
else
    $this->_sections['column_numbers']['start'] = min($this->_sections['column_numbers']['start'], $this->_sections['column_numbers']['step'] > 0 ? $this->_sections['column_numbers']['loop'] : $this->_sections['column_numbers']['loop']-1);
if ($this->_sections['column_numbers']['show']) {
    $this->_sections['column_numbers']['total'] = min(ceil(($this->_sections['column_numbers']['step'] > 0 ? $this->_sections['column_numbers']['loop'] - $this->_sections['column_numbers']['start'] : $this->_sections['column_numbers']['start']+1)/abs($this->_sections['column_numbers']['step'])), $this->_sections['column_numbers']['max']);
    if ($this->_sections['column_numbers']['total'] == 0)
        $this->_sections['column_numbers']['show'] = false;
} else
    $this->_sections['column_numbers']['total'] = 0;
if ($this->_sections['column_numbers']['show']):

            for ($this->_sections['column_numbers']['index'] = $this->_sections['column_numbers']['start'], $this->_sections['column_numbers']['iteration'] = 1;
                 $this->_sections['column_numbers']['iteration'] <= $this->_sections['column_numbers']['total'];
                 $this->_sections['column_numbers']['index'] += $this->_sections['column_numbers']['step'], $this->_sections['column_numbers']['iteration']++):
$this->_sections['column_numbers']['rownum'] = $this->_sections['column_numbers']['iteration'];
$this->_sections['column_numbers']['index_prev'] = $this->_sections['column_numbers']['index'] - $this->_sections['column_numbers']['step'];
$this->_sections['column_numbers']['index_next'] = $this->_sections['column_numbers']['index'] + $this->_sections['column_numbers']['step'];
$this->_sections['column_numbers']['first']      = ($this->_sections['column_numbers']['iteration'] == 1);
$this->_sections['column_numbers']['last']       = ($this->_sections['column_numbers']['iteration'] == $this->_sections['column_numbers']['total']);
?>
                        <?php $this->assign('column_number', $this->_sections['column_numbers']['index']); ?>

                        <?php if ($this->_tpl_vars['column_number'] != 5): ?>
                            <option value="<?php echo $this->_tpl_vars['column_number']; ?>
" <?php if (( $this->_tpl_vars['sPost']['column_number'] && $this->_tpl_vars['sPost']['column_number'] == $this->_tpl_vars['column_number'] ) || ( ! $this->_tpl_vars['sPost']['column_number'] && $this->_tpl_vars['column_number'] == 3 )): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['column_number']; ?>
</option>
                        <?php endif; ?>
                    <?php endfor; endif; ?>
                </select>
            </td>
        </tr>

        <?php if ($this->_tpl_vars['cInfo']['Controller'] == 'account_fields'): ?>
            <input type="hidden" name="<?php echo $this->_tpl_vars['checkbox_field']; ?>
" value="0" />
        <?php else: ?>
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['show_all_options']; ?>
</td>
            <td>
                <?php $this->assign('checkbox_field', 'show_tils'); ?>

                <?php if ($this->_tpl_vars['sPost'][$this->_tpl_vars['checkbox_field']] == '1'): ?>
                    <?php $this->assign(((is_array($_tmp=$this->_tpl_vars['checkbox_field'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_yes') : smarty_modifier_cat($_tmp, '_yes')), 'checked="checked"'); ?>
                <?php elseif ($this->_tpl_vars['sPost'][$this->_tpl_vars['checkbox_field']] == '0'): ?>
                    <?php $this->assign(((is_array($_tmp=$this->_tpl_vars['checkbox_field'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_no') : smarty_modifier_cat($_tmp, '_no')), 'checked="checked"'); ?>
                <?php else: ?>
                    <?php $this->assign(((is_array($_tmp=$this->_tpl_vars['checkbox_field'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_yes') : smarty_modifier_cat($_tmp, '_yes')), 'checked="checked"'); ?>
                <?php endif; ?>

                <input <?php echo $this->_tpl_vars['show_tils_yes']; ?>
 type="radio" id="<?php echo $this->_tpl_vars['checkbox_field']; ?>
_yes" name="<?php echo $this->_tpl_vars['checkbox_field']; ?>
" value="1" /> <label for="<?php echo $this->_tpl_vars['checkbox_field']; ?>
_yes"><?php echo $this->_tpl_vars['lang']['yes']; ?>
</label>
                <input <?php echo $this->_tpl_vars['show_tils_no']; ?>
 type="radio" id="<?php echo $this->_tpl_vars['checkbox_field']; ?>
_no" name="<?php echo $this->_tpl_vars['checkbox_field']; ?>
" value="0" /> <label for="<?php echo $this->_tpl_vars['checkbox_field']; ?>
_no"><?php echo $this->_tpl_vars['lang']['no']; ?>
</label>

                <span class="field_description"><?php echo $this->_tpl_vars['lang']['show_all_options_hint']; ?>
</span>
            </td>
        </tr>
        <?php endif; ?>

        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['bind_data_format']; ?>
</td>
            <td>
                <select id="dd_checkbox_block" name="data_format" class="data_format">
                    <option value="0"><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
                    <?php $_from = $this->_tpl_vars['data_formats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['format']):
?>
                    <option value="<?php echo $this->_tpl_vars['format']['Key']; ?>
"<?php if ($this->_tpl_vars['format']['Key'] == $this->_tpl_vars['sPost']['data_format']): ?> selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['format']['name'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
            </td>
        </tr>
        </table>

        <div id="checkbox_block" <?php if ($this->_tpl_vars['sPost']['data_format']): ?>class="hide"<?php endif; ?>>
        <table class="form" style="margin: 10px 0 0;">
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['field_items']; ?>
</td>
            <td class="field">
                <div class="options-section" id="checkbox">
                <?php if ($this->_tpl_vars['sPost']['checkbox']): ?>
                    <?php $_from = $this->_tpl_vars['sPost']['checkbox']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['checkboxKey'] => $this->_tpl_vars['checkboxItem']):
?>
                    <?php $this->assign('checkbox', $this->_tpl_vars['sPost']['checkbox']); ?>
                    <?php $this->assign('checkboxIter', $this->_tpl_vars['checkbox'][$this->_tpl_vars['checkboxKey']]); ?>
                    <?php if ($this->_tpl_vars['checkboxKey'] != 'default'): ?>
                        <div id="checkbox_<?php echo $this->_tpl_vars['checkboxKey']; ?>
" class="option">
                            <div class="controls">
                                <label><input <?php if ($this->_tpl_vars['checkboxIter']['default'] == $this->_tpl_vars['checkboxKey']): ?>checked="checked"<?php endif; ?> id="checkbox_def_<?php echo $this->_tpl_vars['checkboxKey']; ?>
" type="checkbox" name="checkbox[default][]" value="<?php echo $this->_tpl_vars['checkboxKey']; ?>
"> Default</label>
                                <a href="javascript:void(0)" onclick="$('#checkbox_<?php echo $this->_tpl_vars['checkboxKey']; ?>
').remove();" class="delete_item">Remove</a>
                            </div>

                            <div class="data">
                                <ul class="tabs">
                                    <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['lang_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lang_foreach']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['languages']):
        $this->_foreach['lang_foreach']['iteration']++;
?>
                                        <?php $this->assign('lCode', $this->_tpl_vars['languages']['Code']); ?>
                                        <li <?php if (($this->_foreach['lang_foreach']['iteration'] <= 1)): ?>class="active"<?php endif; ?> lang="<?php echo $this->_tpl_vars['lCode']; ?>
"><?php echo $this->_tpl_vars['languages']['name']; ?>
</li>
                                    <?php endforeach; endif; unset($_from); ?>
                                </ul>
                                <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['lang_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lang_foreach']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['languages']):
        $this->_foreach['lang_foreach']['iteration']++;
?>
                                    <?php $this->assign('lCode', $this->_tpl_vars['languages']['Code']); ?>
                                    <div class="tab_area <?php if (! ($this->_foreach['lang_foreach']['iteration'] <= 1)): ?>hide<?php endif; ?> <?php echo $this->_tpl_vars['lCode']; ?>
">
                                        <input type="text" class="margin float" name="checkbox[<?php echo $this->_tpl_vars['checkboxKey']; ?>
][<?php echo $this->_tpl_vars['languages']['Code']; ?>
]" value="<?php echo $this->_tpl_vars['checkboxItem'][$this->_tpl_vars['lCode']]; ?>
">
                                        <span class="field_description_noicon"><?php echo $this->_tpl_vars['lang']['item_value']; ?>
 (<b><?php echo $this->_tpl_vars['languages']['name']; ?>
</b>)</span>
                                    </div>
                                <?php endforeach; endif; unset($_from); ?>
                            </div>
                        </div>
                        <script type="text/javascript">
                            if (checkbox_step <= <?php echo $this->_tpl_vars['checkboxKey']; ?>
)
                                checkbox_step = <?php echo $this->_tpl_vars['checkboxKey']; ?>
 + 1;
                        </script>
                    <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                <?php endif; ?>
                </div>

                <div class="add_item"><a href="javascript:void(0)" onclick="field_build('checkbox', langs_list );"><?php echo $this->_tpl_vars['lang']['add_field_item']; ?>
</a></div>
            </td>
        </tr>
        </table>
        </div>
    </div>
    <!-- checkbox set field end -->

    <!-- image field -->
    <?php $this->assign('image', $this->_tpl_vars['sPost']['image']); ?>
    <div id="field_image" class="hide">
        <table class="form">
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['resize_type']; ?>
</td>
            <td class="field">
                <select onchange="resize_action($(this).val());" name="image[resize_type]">
                    <option value=""><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
                    <?php $_from = $this->_tpl_vars['l_resize']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['resKey'] => $this->_tpl_vars['resize']):
?>
                        <option value="<?php echo $this->_tpl_vars['resKey']; ?>
" <?php if ($this->_tpl_vars['resKey'] == $this->_tpl_vars['sPost']['image']['resize_type']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['resize']; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
            </td>
        </tr>

        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['resolution']; ?>
</td>
            <td class="field">
                <table>
                <tr>
                    <td><?php echo $this->_tpl_vars['lang']['width']; ?>
:</td>
                    <td>
                        <input readonly="readonly" id="resW" class="margin numeric disabled" name="image[width]" type="text" style="width: 40px; text-align: center;" value="<?php echo $this->_tpl_vars['sPost']['image']['width']; ?>
" maxlength="4" />
                    </td>
                </tr>
                <tr>
                    <td><?php echo $this->_tpl_vars['lang']['height']; ?>
:</td>
                    <td>
                        <input readonly="readonly" id="resH" class="margin numeric disabled" name="image[height]" type="text" style="width: 40px; text-align: center;" value="<?php echo $this->_tpl_vars['sPost']['image']['height']; ?>
" maxlength="4" />
                    </td>
                </tr>
                </table>
            </td>
        </tr>

        <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'apTplFieldsImage'), $this);?>


        </table>
    </div>
    <!-- image field end -->

    <!-- file storage field -->
    <?php $this->assign('image', $this->_tpl_vars['sPost']['image']); ?>
    <div id="field_file" class="hide">
        <table class="form">
        <tr>
            <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['file_type']; ?>
</td>
            <td class="field">
                <select name="file[type]">
                    <option value=""><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
                    <?php $_from = $this->_tpl_vars['l_file_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ftKey'] => $this->_tpl_vars['fTypes']):
?>
                        <option value="<?php echo $this->_tpl_vars['ftKey']; ?>
" <?php if ($this->_tpl_vars['ftKey'] == $this->_tpl_vars['sPost']['file']['type']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['fTypes']['name']; ?>
 (<?php echo $this->_tpl_vars['fTypes']['ext']; ?>
)</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
            </td>
        </tr>

        <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'apTplFieldsFile'), $this);?>


        </table>
    </div>
    <!-- file storage field end -->

    <!-- agreement field -->
    <div id="field_accept" class="hide">
        <table class="form">

        <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'apTplFieldsAgreement'), $this);?>


        <tr>
            <td class="name">
                <div>
                    <span class="red">*</span><?php echo $this->_tpl_vars['lang']['agreement_page']; ?>

                </div>
            </td>
            <td class="field">
                <select name="accept_page">
                    <option value=""><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>

                    <?php $_from = $this->_tpl_vars['agreement_pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['page_item']):
?>
                        <?php $this->assign('lang_page_key', ((is_array($_tmp='pages+name+')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['page_item']['Key']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['page_item']['Key']))); ?>

                        <?php if ($this->_tpl_vars['lang'][$this->_tpl_vars['lang_page_key']] != ''): ?>
                            <option value="<?php echo $this->_tpl_vars['page_item']['Key']; ?>
"
                                <?php if ($this->_tpl_vars['page_item']['Key'] == $this->_tpl_vars['sPost']['accept_page']): ?>selected="selected"<?php endif; ?>>
                                <?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['lang_page_key']]; ?>

                            </option>
                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                </select>

                <?php $this->assign('replace', ((is_array($_tmp=((is_array($_tmp='<a target="_blank" class="static" href="')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['rlBase']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['rlBase'])))) ? $this->_run_mod_handler('cat', true, $_tmp, 'index.php?controller=pages&action=add">$1</a>') : smarty_modifier_cat($_tmp, 'index.php?controller=pages&action=add">$1</a>'))); ?>
                <span class="field_description"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['agreement_page_notice'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, '/\[(.*)\]/', $this->_tpl_vars['replace']) : smarty_modifier_regex_replace($_tmp, '/\[(.*)\]/', $this->_tpl_vars['replace'])); ?>
</span>
            </td>
        </tr>

        <?php if ($this->_tpl_vars['cInfo']['Controller'] == 'account_fields'): ?>
            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['agreement_first_step']; ?>
</td>
                <td class="field">
                    <?php if ($this->_tpl_vars['sPost']['first_step'] == '1' || $this->_tpl_vars['sPost']['first_step'] == ''): ?>
                        <?php $this->assign('first_step_yes', 'checked="checked"'); ?>
                    <?php elseif ($this->_tpl_vars['sPost']['first_step'] == '0'): ?>
                        <?php $this->assign('first_step_no', 'checked="checked"'); ?>
                    <?php endif; ?>

                    <div style="width: 150px; display: inline-block;">
                        <label><input <?php echo $this->_tpl_vars['first_step_yes']; ?>
 type="radio" name="first_step" value="1" /> <?php echo $this->_tpl_vars['lang']['yes']; ?>
</label>
                        <label><input <?php echo $this->_tpl_vars['first_step_no']; ?>
 type="radio" name="first_step" value="0" /> <?php echo $this->_tpl_vars['lang']['no']; ?>
</label>
                    </div>

                    <span class="field_description"><?php echo $this->_tpl_vars['lang']['agreement_first_step_hint']; ?>
</span>
                </td>
            </tr>

            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['enable_for']; ?>
</td>
                <td class="field">
                    <fieldset class="light">
                        <legend id="legend_accounts_tab_area" class="up" onclick="fieldset_action('accounts_tab_area');"><?php echo $this->_tpl_vars['lang']['account_type']; ?>
</legend>
                        <div id="accounts_tab_area" style="padding: 0 10px 10px 10px;">
                            <table>
                            <tr>
                                <td>
                                    <table>
                                    <tr>
                                    <?php $_from = $this->_tpl_vars['account_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['ac_type'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ac_type']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['a_type']):
        $this->_foreach['ac_type']['iteration']++;
?>
                                        <?php if ($this->_tpl_vars['a_type']['Key'] != 'visitor'): ?>
                                            <td>
                                                <div style="margin: 0 20px 0 0;">
                                                    <label>
                                                        <input <?php if ($this->_tpl_vars['sPost']['atypes'] && ((is_array($_tmp=$this->_tpl_vars['a_type']['Key'])) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['sPost']['atypes']) : in_array($_tmp, $this->_tpl_vars['sPost']['atypes']))): ?>checked="checked"<?php endif; ?>
                                                               style="margin-bottom: 0px;"
                                                               type="checkbox"
                                                               value="<?php echo $this->_tpl_vars['a_type']['Key']; ?>
"
                                                               name="atypes[]"
                                                        />
                                                        <?php echo $this->_tpl_vars['a_type']['name']; ?>

                                                    </label>
                                                </div>
                                            </td>

                                            <?php if ($this->_foreach['ac_type']['iteration']%3 == 0 && ! ($this->_foreach['ac_type']['iteration'] == $this->_foreach['ac_type']['total'])): ?>
                                                </tr>
                                                <tr>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    <?php endforeach; endif; unset($_from); ?>
                                    </tr>
                                    </table>
                                </td>
                                <td>
                                    <span class="field_description"><?php echo $this->_tpl_vars['lang']['agreement_atypes_hint']; ?>
</span>
                                </td>
                            </tr>
                            </table>

                            <div class="grey_area" style="margin: 8px 0 0;">
                                <span onclick="$('#accounts_tab_area input').prop('checked', true);" class="green_10"><?php echo $this->_tpl_vars['lang']['check_all']; ?>
</span>
                                <span class="divider"> | </span>
                                <span onclick="$('#accounts_tab_area input').prop('checked', false);" class="green_10"><?php echo $this->_tpl_vars['lang']['uncheck_all']; ?>
</span>
                            </div>
                        </div>
                    </fieldset>
                </td>
            </tr>

            <script type="text/javascript"><?php echo '
            $(\'[name=first_step]\').change(function(){
                fieldAgreementHandler();
            });

            $(function(){
                fieldAgreementHandler();
            });

            function fieldAgreementHandler() {
                var $aTypesArea = $(\'#accounts_tab_area\');

                if ($(\'[name=first_step]:checked\').val() == 0) {
                    $aTypesArea.find(\'input\').removeAttr(\'checked\').prop(\'checked\', false);
                    $aTypesArea.closest(\'tr\').addClass(\'hide\');
                } else {
                    $aTypesArea.closest(\'tr\').removeClass(\'hide\');
                }
            }
            '; ?>
</script>
        <?php endif; ?>
        </table>
    </div>
    <!-- agreement field -->

    <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'apTplFieldsFormBottom'), $this);?>


    </div>
    <!-- additional options end -->

    <?php $this->assign('no_expand', 0); ?>
    <?php if ($_GET['action'] == 'edit' && $this->_tpl_vars['sys_fields'] && ((is_array($_tmp=$this->_tpl_vars['field_info']['Key'])) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['sys_fields']) : in_array($_tmp, $this->_tpl_vars['sys_fields']))): ?>
        <?php $this->assign('no_expand', 1); ?>
    <?php endif; ?>

    <!-- additional JS -->
    <script type="text/javascript">
        field_types(<?php echo $this->_tpl_vars['no_expand']; ?>
);

                <?php if ($_GET['action'] == 'edit' && $this->_tpl_vars['sys_fields'] && ((is_array($_tmp=$this->_tpl_vars['field_info']['Key'])) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['sys_fields']) : in_array($_tmp, $this->_tpl_vars['sys_fields']))): ?>
            <?php echo '
            $(\'#additional_options\').show();
            $(\'#field_select\').removeClass(\'hide\');
            $(\'#select_block\').hide();

            $(\'#field_select > table.form tr\').each(function () {
                $(this)[$(this).find(\'[name="autocomplete"]\').length ? \'show\' : \'hide\']();

            })
            '; ?>

        <?php endif; ?>
    </script>

    <?php if ($this->_tpl_vars['sPost']['image']['resize_type']): ?>
    <script type="text/javascript">
        resize_action('<?php echo $this->_tpl_vars['sPost']['image']['resize_type']; ?>
');
    </script>
    <?php endif; ?>
    <!-- additional JS end -->

    <table class="form">
    <tr>
        <td class="no_divider"></td>
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

<!-- add/edit new field end -->