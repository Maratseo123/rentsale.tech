<?php /* Smarty version 2.6.31, created on 2023-10-31 14:53:14
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/admin/booking.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/admin/booking.tpl', 38, false),array('modifier', 'count', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/admin/booking.tpl', 148, false),array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/admin/booking.tpl', 242, false),array('modifier', 'date_format', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/booking/admin/booking.tpl', 567, false),)), $this); ?>
<!-- booking system -->

<!-- navigation bar -->
<div id="nav_bar">
    <?php if ($_GET['mode'] == 'booking_fields' && ! $_GET['action']): ?>
        <a href="<?php echo $this->_tpl_vars['rlBaseC']; ?>
mode=booking_fields&action=add" class="button_bar"><?php echo '<span class="left"></span><span class="center_add">'; ?><?php echo $this->_tpl_vars['lang']['add_field']; ?><?php echo '</span><span class="right"></span>'; ?>
</a>
    <?php endif; ?>

    <?php if ($_GET['mode'] != 'listings'): ?>
        <a href="<?php echo $this->_tpl_vars['rlBaseC']; ?>
mode=listings" class="button_bar"><?php echo '<span class="left"></span><span class="center_list">'; ?><?php echo $this->_tpl_vars['lang']['booking_admin_listings_tab']; ?><?php echo '</span><span class="right"></span>'; ?>
</a>
    <?php endif; ?>

    <?php if ($_GET['mode'] != 'booking_colors'): ?>
        <a href="<?php echo $this->_tpl_vars['rlBaseC']; ?>
mode=booking_colors" class="button_bar"><?php echo '<span class="left"></span><span class="center_list">'; ?><?php echo $this->_tpl_vars['lang']['booking_colors']; ?><?php echo '</span><span class="right"></span>'; ?>
</a>
    <?php endif; ?>

    <?php if ($_GET['mode'] != 'booking_fields' || ( $_GET['mode'] == 'booking_fields' && $_GET['action'] )): ?>
        <a href="<?php echo $this->_tpl_vars['rlBaseC']; ?>
mode=booking_fields" class="button_bar"><?php echo '<span class="left"></span><span class="center_list">'; ?><?php echo $this->_tpl_vars['lang']['booking_fields_list']; ?><?php echo '</span><span class="right"></span>'; ?>
</a>
    <?php endif; ?>

    <?php if ($_GET['mode'] || ( ! $_GET['mode'] && $_GET['action'] == 'view' )): ?>
        <a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['rlBaseC'])) ? $this->_run_mod_handler('replace', true, $_tmp, '&amp;', '') : smarty_modifier_replace($_tmp, '&amp;', '')); ?>
" class="button_bar"><?php echo '<span class="left"></span><span class="center_list">'; ?><?php echo $this->_tpl_vars['lang']['booking_requests']; ?><?php echo '</span><span class="right"></span>'; ?>
</a>
    <?php endif; ?>
</div>

<div class="clear" style="*margin: -3px 0; *height: 1px;"></div>
<!-- navigation bar end -->

<?php $this->assign('sPost', $_POST); ?>

<?php if ($_GET['mode'] == 'booking_colors'): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'blocks/m_block_start.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <form action="<?php echo $this->_tpl_vars['rlBaseC']; ?>
mode=booking_colors" method="post" onsubmit="$(this).find('[type=submit]').val('<?php echo $this->_tpl_vars['lang']['loading']; ?>
').attr('disabled', true);">
        <input type="hidden" name="submit" value="1" />
        <table class="form">
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['booking_admin_colors_available']; ?>
</td>
            <td class="field">
                <input type="hidden" name="b[available]" value="<?php echo $this->_tpl_vars['sPost']['b']['available']; ?>
" />
                <input type="hidden" name="b[available_rgb]" value="<?php echo $this->_tpl_vars['sPost']['b']['available_rgb']; ?>
" />
                <div class="colorSelector" id="colorSelector_available">
                    <div style="background-color: <?php echo $this->_tpl_vars['sPost']['b']['available']; ?>
"></div>
                </div>
            </td>
        </tr>
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['booking_admin_colors_closed']; ?>
</td>
            <td class="field">
                <input type="hidden" name="b[closed]" value="<?php echo $this->_tpl_vars['sPost']['b']['closed']; ?>
" />
                <input type="hidden" name="b[closed_rgb]" value="<?php echo $this->_tpl_vars['sPost']['b']['closed_rgb']; ?>
" />
                <div class="colorSelector" id="colorSelector_closed">
                    <div style="background-color: <?php echo $this->_tpl_vars['sPost']['b']['closed']; ?>
"></div>
                </div>
            </td>
        </tr>
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['booking_admin_colors_own']; ?>
</td>
            <td class="field">
                <input type="hidden" name="b[own]" value="<?php echo $this->_tpl_vars['sPost']['b']['own']; ?>
" />
                <input type="hidden" name="b[own_rgb]" value="<?php echo $this->_tpl_vars['sPost']['b']['own_rgb']; ?>
" />
                <div class="colorSelector" id="colorSelector_own" style="display: inline-block;">
                    <div style="background-color: <?php echo $this->_tpl_vars['sPost']['b']['own']; ?>
"></div>
                </div>

                <span class="field_description" style="position: absolute; margin: 10px 10px"><?php echo $this->_tpl_vars['lang']['booking_admin_colors_own_desc']; ?>
</span>
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="field">
                <input type="submit" value="<?php echo $this->_tpl_vars['lang']['save']; ?>
" />
            </td>
        </tr>
        </table>
    </form>

    <script type="text/javascript"><?php echo '
        $(document).ready(function() {
            function addColorPicker(step) {
                $(\'#colorSelector_\' + step).ColorPicker({
                    color: $(\'input[name="b[\' + step + \']"]\').val(),
                    onShow: function(colpkr) {
                        $(colpkr).fadeIn(500);
                        return false;
                    },
                    onHide: function(colpkr) {
                        $(colpkr).fadeOut(500);
                        return false;
                    },
                    onChange: function(hsb, hex, rgb) {
                        $(\'#colorSelector_\' + step + \' div\').css(\'backgroundColor\', \'#\' + hex);
                        $(\'#colorSelector_\' + step).parent().find(\'input[name="b[\' + step + \']"]\').val(\'#\' + hex);
                        $(\'input[name="b[\' + step + \'_rgb]"]\').val(rgb.r + \',\' + rgb.g + \',\' + rgb.b);
                    }
                });
            }

            addColorPicker(\'available\');
            addColorPicker(\'closed\');
            addColorPicker(\'own\');
        });
    '; ?>
</script>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'blocks/m_block_end.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php elseif ($_GET['mode'] == 'booking_fields'): ?>
    <?php if (isset ( $_GET['action'] )): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'blocks/m_block_start.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php $this->assign('sPost', $_POST); ?>

        <!-- add new field -->
        <form action="<?php echo $this->_tpl_vars['rlBaseC']; ?>
mode=booking_fields&action=<?php if ($_GET['action'] == 'add'): ?>add<?php elseif ($_GET['action'] == 'edit'): ?>edit&field=<?php echo $_GET['field']; ?>
<?php endif; ?>" method="post" onsubmit="$(this).find('[type=submit]').val('<?php echo $this->_tpl_vars['lang']['loading']; ?>
').attr('disabled', true);">
            <input type="hidden" name="submit" value="1" />
            <?php if ($_GET['action'] == 'edit'): ?>
                <input type="hidden" name="fromPost" value="1" />
            <?php endif; ?>

            <table class="form">
            <tr>
            <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['key']; ?>
</td>
            <td class="field">
                <input <?php if ($_GET['action'] == 'edit'): ?>readonly<?php endif; ?> class="<?php if ($_GET['action'] == 'edit'): ?>disabled<?php else: ?>text<?php endif; ?> lang_add" name="key" type="text" style="width: 150px;" value="<?php echo $this->_tpl_vars['sPost']['key']; ?>
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
                        <textarea rows="" cols="" name="description[<?php echo $this->_tpl_vars['language']['Code']; ?>
]"><?php echo $this->_tpl_vars['sPost']['description'][$this->_tpl_vars['language']['Code']]; ?>
</textarea>
                        <?php if (count($this->_tpl_vars['allLangs']) > 1): ?></div><?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                </td>
            </tr>

            <tr>
                <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['required_field']; ?>
</td>
                <td class="field">
                    <?php if ($this->_tpl_vars['sPost']['required'] == '1'): ?>
                        <?php $this->assign('required_yes', 'checked'); ?>
                    <?php elseif ($this->_tpl_vars['sPost']['required'] == '0'): ?>
                        <?php $this->assign('required_no', 'checked'); ?>
                    <?php else: ?>
                        <?php $this->assign('required_no', 'checked'); ?>
                    <?php endif; ?>
                    <input <?php echo $this->_tpl_vars['required_yes']; ?>
 class="lang_add" type="radio" id="req_yes" name="required" value="1" /> <label for="req_yes"><?php echo $this->_tpl_vars['lang']['yes']; ?>
</label>
                    <input <?php echo $this->_tpl_vars['required_no']; ?>
 class="lang_add" type="radio" id="req_no" name="required" value="0" /> <label for="req_no"><?php echo $this->_tpl_vars['lang']['no']; ?>
</label>
                </td>
            </tr>

            <tr>
                <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['status']; ?>
</td>
                <td class="field">
                    <select name="status">
                        <option value="active" <?php if ($this->_tpl_vars['sPost']['status'] == 'active'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['lang']['active']; ?>
</option>
                        <option value="approval" <?php if ($this->_tpl_vars['sPost']['status'] == 'approval'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['lang']['approval']; ?>
</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['field_type']; ?>
</td>
                <td class="field">
                    <select <?php if ($_GET['action'] == 'edit'): ?>disabled<?php endif; ?> onchange="field_types(this.value);" name="type" <?php if ($_GET['action'] == 'edit'): ?>class="disabled"<?php endif; ?>>
                        <option value=""><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
                        <?php $_from = $this->_tpl_vars['b_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['bType']):
?>
                        <option <?php if ($this->_tpl_vars['sPost']['type'] == $this->_tpl_vars['key']): ?>selected<?php endif; ?> value="<?php echo $this->_tpl_vars['key']; ?>
"><?php echo $this->_tpl_vars['bType']; ?>
</option>
                        <?php endforeach; endif; unset($_from); ?>
                    </select>
                    <?php if ($_GET['action'] == 'edit'): ?>
                        <input type="hidden" name="type" value="<?php echo $this->_tpl_vars['sPost']['type']; ?>
" />
                    <?php endif; ?>
                </td>
            </tr>

            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['booking_type']; ?>
</td>
                <td class="field">
                    <select name="booking_type" <?php if ($this->_tpl_vars['sPost']['key'] == 'email' || $this->_tpl_vars['sPost']['key'] == 'first_name' || $this->_tpl_vars['sPost']['key'] == 'last_name'): ?>class="disabled" disabled="disabled"<?php endif; ?>>
                        <option <?php if ($this->_tpl_vars['sPost']['booking_type'] == 'date_range,date_time_range,time_range'): ?>selected="selected"<?php endif; ?> value="date_range,date_time_range,time_range"><?php echo $this->_tpl_vars['lang']['any']; ?>
</option>
                        <option <?php if ($this->_tpl_vars['sPost']['booking_type'] == 'date_range'): ?>selected="selected"<?php endif; ?> value="date_range"><?php echo $this->_tpl_vars['lang']['booking_date_range']; ?>
</option>
                        <option <?php if ($this->_tpl_vars['sPost']['booking_type'] == 'date_time_range'): ?>selected="selected"<?php endif; ?> value="date_time_range"><?php echo $this->_tpl_vars['lang']['booking_date_time_range']; ?>
</option>
                        <option <?php if ($this->_tpl_vars['sPost']['booking_type'] == 'time_range'): ?>selected="selected"<?php endif; ?> value="time_range"><?php echo $this->_tpl_vars['lang']['booking_time_range']; ?>
</option>
                    </select>

                    <?php if ($this->_tpl_vars['sPost']['key'] == 'email' || $this->_tpl_vars['sPost']['key'] == 'first_name' || $this->_tpl_vars['sPost']['key'] == 'last_name'): ?>
                        <span class="field_description">
                            <?php if ($this->_tpl_vars['sPost']['key'] == 'email' || $this->_tpl_vars['sPost']['key'] == 'first_name' || $this->_tpl_vars['sPost']['key'] == 'last_name'): ?>
                                <?php $this->assign('field_name', $this->_tpl_vars['lang'][$this->_tpl_vars['sPost']['key']]); ?>
                            <?php else: ?>

                                <?php $this->assign('field_name', ((is_array($_tmp='booking_fields+name+')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['sPost']['key']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['sPost']['key']))); ?>
                                <?php $this->assign('field_name', $this->_tpl_vars['lang'][$this->_tpl_vars['field_name']]); ?>
                            <?php endif; ?>

                            <?php $this->assign('sReplace', ('{')."field".('}')); ?>
                            <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['booking_sys_field_protected'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['sReplace'], $this->_tpl_vars['field_name']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['sReplace'], $this->_tpl_vars['field_name'])); ?>

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

                    <?php $this->assign('text_cond', $this->_tpl_vars['sPost']['text']); ?>
                    <tr>
                        <td class="name"><?php echo $this->_tpl_vars['lang']['check_condition']; ?>
</td>
                        <td class="field">
                            <select class="lang_add" name="text[condition]">
                                <option value="">- <?php echo $this->_tpl_vars['lang']['condition']; ?>
 -</option>

                                <?php $_from = $this->_tpl_vars['l_cond']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cKey'] => $this->_tpl_vars['condition']):
?>
                                    <option <?php if ($this->_tpl_vars['text_cond']['condition'] == $this->_tpl_vars['cKey']): ?>selected<?php endif; ?> value="<?php echo $this->_tpl_vars['cKey']; ?>
"><?php echo $this->_tpl_vars['condition']; ?>
</option>
                                <?php endforeach; endif; unset($_from); ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td class="name"><?php echo $this->_tpl_vars['lang']['maxlength']; ?>
</td>
                        <td class="field">
                            <input class="text lang_add numeric" name="text[maxlength]" type="text" style="width: 50px; text-align: center;" value="<?php echo $this->_tpl_vars['sPost']['text']['maxlength']; ?>
" maxlength="3" />
                            <span class="field_description"><?php echo $this->_tpl_vars['lang']['default_text_value_des']; ?>
</span>
                        </td>
                    </tr>
                    </table>
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
                            <input class="text lang_add numeric" name="textarea[maxlength]" type="text" style="width: 50px; text-align: center;" value="<?php echo $this->_tpl_vars['textarea']['maxlength']; ?>
" maxlength="4" />
                            <span class="field_description"><?php echo $this->_tpl_vars['lang']['default_textarea_value_des']; ?>
</span>
                        </td>
                    </tr>
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
                            <input class="numeric" name="number[maxlength]" type="text" style="width: 60px; text-align: center;" value="<?php echo $this->_tpl_vars['sPost']['number']['maxlength']; ?>
" maxlength="8" />
                            <span class="field_description"><?php echo $this->_tpl_vars['lang']['number_field_length_hint']; ?>
</span>
                        </td>
                    </tr>
                    </table>
                </div>
                <!-- number field end -->
            </div>
            <!-- additional options end -->

            <!-- additional JS -->
            <?php if ($this->_tpl_vars['sPost']['type'] != false): ?>
                <script type="text/javascript">field_types('<?php echo $this->_tpl_vars['sPost']['type']; ?>
');</script>
            <?php endif; ?>
            <!-- additional JS end -->

            <table class="sTable">
            <tr>
            <td style="width: 180px"></td>
            <td>
                <input class="button lang_add" type="submit" value="<?php if ($_GET['action'] == 'edit'): ?><?php echo $this->_tpl_vars['lang']['edit']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['add']; ?>
<?php endif; ?>" />
            </td>
            </tr>
            </table>
        </form>
        <!-- add new field end -->

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'blocks/m_block_end.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php else: ?>
        <div id="grid"></div>
        <script type="text/javascript"><?php echo '
        $(document).ready(function() {
            bookingFields = new gridObj({
                key: \'bookingFields\',
                id: \'grid\',
                ajaxUrl: rlPlugins + \'booking/admin/booking.inc.php?q=ext\',
                defaultSortField: false,
                title: lang[\'booking_fields_manager\'],
                fields: [
                    {name: \'name\', mapping: \'name\', type: \'string\'},
                    {name: \'Type\', mapping: \'Type\'},
                    {name: \'Booking_type\', mapping: \'Booking_type\'},
                    {name: \'Required\', mapping: \'Required\'},
                    {name: \'Position\', mapping: \'Position\', type: \'int\'},
                    {name: \'Status\', mapping: \'Status\'},
                    {name: \'Key\', mapping: \'Key\'}
                ],
                columns: [
                    {
                        header: lang[\'ext_name\'],
                        dataIndex: \'name\',
                        width: 60,
                        id: \'rlExt_item_bold\'
                    },{
                        id: \'rlExt_item\',
                        header: lang[\'ext_type\'],
                        dataIndex: \'Type\',
                        width: 30,
                    },{
                        header: \''; ?>
<?php echo $this->_tpl_vars['lang']['booking_type']; ?>
<?php echo '\',
                        dataIndex: \'Booking_type\',
                        width: 30,
                        editor: new Ext.form.ComboBox({
                            store: [
                                [\'date_range,date_time_range,time_range\', \''; ?>
<?php echo $this->_tpl_vars['lang']['any']; ?>
<?php echo '\'],
                                [\'date_range\', \''; ?>
<?php echo $this->_tpl_vars['lang']['booking_date_range']; ?>
<?php echo '\'],
                                [\'date_time_range\', \''; ?>
<?php echo $this->_tpl_vars['lang']['booking_date_time_range']; ?>
<?php echo '\'],
                                [\'time_range\', \''; ?>
<?php echo $this->_tpl_vars['lang']['booking_time_range']; ?>
<?php echo '\']
                            ],
                            mode: \'local\',
                            typeAhead: true,
                            triggerAction: \'all\',
                            selectOnFocus: true
                        })
                    },{
                        header: lang[\'ext_required_field\'],
                        dataIndex: \'Required\',
                        width: 17,
                        editor: new Ext.form.ComboBox({
                            store: [
                                [\'1\', lang[\'ext_yes\']],
                                [\'0\', lang[\'ext_no\']]
                            ],
                            displayField: \'value\',
                            valueField: \'key\',
                            emptyText: lang[\'ext_not_available\'],
                            typeAhead: true,
                            mode: \'local\',
                            triggerAction: \'all\',
                            selectOnFocus:true
                        }),
                        renderer: function(val){
                            return \'<span ext:qtip="\' + lang[\'ext_click_to_edit\'] + \'">\' + val + \'</span>\';
                        }
                    },{
                        header: lang[\'ext_position\'],
                        dataIndex: \'Position\',
                        width: 10,
                        editor: new Ext.form.TextField({
                            allowBlank: false
                        }),
                        renderer: function(val){
                            return \'<span ext:qtip="\' + lang[\'ext_click_to_edit\'] + \'">\' + val + \'</span>\';
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
                        renderer: function(data) {
                            var out = "<center>";
                            out += "<img class=\'edit\' ext:qtip=\'" + lang[\'ext_edit\'] + "\' src=\'" + rlUrlHome;
                            out += "img/blank.gif\' onClick=\'location.href=\\"" + rlUrlHome + "index.php?controller=";
                            out += controller + "&mode=booking_fields&action=edit&field=" + data + "\\"\' />";
                            out += "<img class=\'remove\' ext:qtip=\'" + lang[\'ext_delete\'] + "\' src=\'" + rlUrlHome;
                            out += "img/blank.gif\' onClick=\'rlConfirm( \\"" + lang[\'booking_ext_notice_delete_field\'];
                            out += "\\",\\"apAjaxRequest\\", \\"" + [\'bookingDeleteField\', data] + "\\", \\"field_load\\")\' ";
                            out += "class=\'delete\' /></center>";
                            return out;
                        }
                    }
                ]
            });

            bookingFields.init();
            grid.push(bookingFields.grid);

            // disallow to change "Booking type" option for system fields
            bookingFields.grid.addListener(\'beforeedit\', function(editEvent) {
                var field_key = editEvent.record.data.Key;

                if (editEvent.field == \'Booking_type\'
                    && field_key
                    && (field_key == \'email\' || field_key == \'first_name\' || field_key == \'last_name\')
                ) {
                    printMessage(
                        \'error\',
                        \''; ?>
<?php echo $this->_tpl_vars['lang']['booking_sys_field_protected']; ?>
<?php echo '\'.replace(
                            \'{field}\',
                            lang[\'booking_fields+name+\' + field_key]
                        )
                    );

                    return false;
                }
            });
        });
        '; ?>
</script>
    <?php endif; ?>
<?php elseif ($_GET['mode'] == 'listings'): ?>
    <div id="grid"></div>

    <script type="text/javascript"><?php echo '
    $(document).ready(function() {
        bookingAvailableListings = new gridObj({
            key: \'bookingAvailableListings\',
            id: \'grid\',
            ajaxUrl: rlPlugins + \'booking/admin/booking.inc.php?q=ext_listings\',
            defaultSortField: false,
            title: \''; ?>
<?php echo $this->_tpl_vars['lang']['ext_listing_rate_range_manager']; ?>
<?php echo '\',
            fields: [
                {name: \'ID\', mapping: \'ID\', type: \'int\'},
                {name: \'ref\', mapping: \'ref\'},
                {name: \'link\', mapping: \'link\', type: \'string\'}
            ],
            columns: [
                {
                    header: lang[\'ext_id\'],
                    dataIndex: \'ID\',
                    width: 40,
                    fixed: true
                },{
                    header: lang[\'ext_ref_number\'],
                    dataIndex: \'ref\',
                    hidden: '; ?>
<?php if ($this->_tpl_vars['refExists']): ?>false<?php else: ?>true<?php endif; ?><?php echo ',
                    width: 5
                },{
                    header: lang.ext_title,
                    dataIndex: \'link\',
                    width: 60,
                    id: \'rlExt_item_bold\'
                }
            ]
        });

        bookingAvailableListings.init();
        grid.push(bookingAvailableListings.grid);
    });
    '; ?>
</script>
<?php elseif ($_GET['id']): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'blocks/m_block_start.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <fieldset class="light">
        <legend id="legend_cats" class="up" onclick="fieldset_action('booking_page_details');"><?php echo $this->_tpl_vars['lang']['booking_page_details']; ?>
</legend>
        <div id="booking_page_details">
            <table class="form">
            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['booking_ref_number']; ?>
:</td>
                <td class="field"><?php if ($this->_tpl_vars['request']['ref_number']): ?><?php echo $this->_tpl_vars['request']['ref_number']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['not_available']; ?>
<?php endif; ?></td>
            </tr>
            <tr>
                <td class="name">
                    <?php if ($this->_tpl_vars['request']['Booking_type'] == 'time_range'): ?>
                        <?php echo $this->_tpl_vars['lang']['booking_escort_date']; ?>
:
                    <?php elseif ($this->_tpl_vars['request']['Booking_type'] == 'date_time_range'): ?>
                        <?php echo $this->_tpl_vars['lang']['booking_checkin_auto']; ?>
:
                    <?php else: ?>
                        <?php echo $this->_tpl_vars['lang']['booking_checkin']; ?>
:
                    <?php endif; ?>
                </td>
                <td class="field">
                    <b><?php echo ((is_array($_tmp=$this->_tpl_vars['request']['From'])) ? $this->_run_mod_handler('date_format', true, $_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)) : smarty_modifier_date_format($_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null))); ?>
</b>

                    <?php if (( $this->_tpl_vars['request']['booking_check_in'] || $this->_tpl_vars['request']['Checkin'] ) && $this->_tpl_vars['request']['Booking_type'] != 'time_range'): ?>
                        - <?php if ($this->_tpl_vars['request']['Booking_type'] == 'date_time_range'): ?><?php echo $this->_tpl_vars['request']['Checkin']; ?>
<?php else: ?><?php echo $this->_tpl_vars['request']['booking_check_in']; ?>
<?php endif; ?>
                    <?php endif; ?>
                </td>
            </tr>

            <?php if ($this->_tpl_vars['request']['Booking_type'] == 'time_range'): ?>
                <tr>
                    <td class="name"><?php echo $this->_tpl_vars['lang']['booking_escort_type']; ?>
:</td>
                    <td class="field">
                        <?php if ($this->_tpl_vars['listing_escort']): ?>
                            <?php echo $this->_tpl_vars['listing_escort']['escort_rates']['Fields']['escort_rates']['value'][$this->_tpl_vars['request']['Checkin']]['title']; ?>

                        <?php else: ?>
                            <?php echo $this->_tpl_vars['bookingRates'][$this->_tpl_vars['request']['Checkin']]['title']; ?>

                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td class="name"><?php echo $this->_tpl_vars['lang']['booking_escort_time']; ?>
:</td>
                    <td class="field"><?php echo $this->_tpl_vars['request']['Checkout']; ?>
</td>
                </tr>
                <tr>
                    <td class="name"><?php echo $this->_tpl_vars['lang']['booking_escort_duration']; ?>
:</td>
                    <td class="field">
                        <?php $this->assign('phrase_hours', ((is_array($_tmp='booking_escort_duration_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['request']['To']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['request']['To']))); ?>
                        <?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['phrase_hours']]; ?>

                    </td>
                </tr>
            <?php else: ?>
                <tr>
                    <td class="name">
                        <?php if ($this->_tpl_vars['request']['Booking_type'] == 'date_time_range'): ?>
                            <?php echo $this->_tpl_vars['lang']['booking_checkout_auto']; ?>
:
                        <?php else: ?>
                            <?php echo $this->_tpl_vars['lang']['booking_checkout']; ?>
:
                        <?php endif; ?>
                    </td>
                    <td class="field">
                        <b><?php echo ((is_array($_tmp=$this->_tpl_vars['request']['To'])) ? $this->_run_mod_handler('date_format', true, $_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)) : smarty_modifier_date_format($_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null))); ?>
</b>

                        <?php if ($this->_tpl_vars['request']['booking_check_out'] || $this->_tpl_vars['request']['Checkout']): ?>
                            - <?php if ($this->_tpl_vars['request']['Booking_type'] == 'date_time_range'): ?><?php echo $this->_tpl_vars['request']['Checkout']; ?>
<?php else: ?><?php echo $this->_tpl_vars['request']['booking_check_out']; ?>
<?php endif; ?>
                        <?php endif; ?>
                    </td>
                </tr>

                <?php if ($this->_tpl_vars['request']['Booking_type'] === 'date_range'): ?>
                    <tr>
                        <td class="name"><?php echo $this->_tpl_vars['lang']['booking_nights']; ?>
:</td>
                        <td class="field"><?php echo $this->_tpl_vars['request']['Booking_nights']; ?>
</td>
                    </tr>
                <?php endif; ?>
            <?php endif; ?>

            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['status']; ?>
:</td>
                <td class="field"><?php echo $this->_tpl_vars['request']['Stat']; ?>
</td>
            </tr>
            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['total']; ?>
:</td>
                <td class="field">
                    <?php if ($this->_tpl_vars['defPrice']['currency']): ?>
                        <?php $this->assign('booking_currency', $this->_tpl_vars['defPrice']['currency']); ?>
                    <?php else: ?>
                        <?php $this->assign('booking_currency', $this->_tpl_vars['config']['system_currency']); ?>
                    <?php endif; ?>

                    <?php if ($this->_tpl_vars['config']['system_currency_position'] == 'before'): ?>
                        <?php echo $this->_tpl_vars['booking_currency']; ?>
 <?php echo $this->_tpl_vars['request']['Amount']; ?>

                    <?php else: ?>
                        <?php echo $this->_tpl_vars['request']['Amount']; ?>
 <?php echo $this->_tpl_vars['booking_currency']; ?>

                    <?php endif; ?>
                </td>
            </tr>
            </table>
        </div>
    </fieldset>

    <fieldset class="light">
        <legend id="legend_cats" class="up" onclick="fieldset_action('booking_client_details');"><?php echo $this->_tpl_vars['lang']['booking_client_details']; ?>
</legend>
        <div id="booking_client_details">
            <table class="form">
            <?php $_from = $this->_tpl_vars['request']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fKey'] => $this->_tpl_vars['field']):
?>
                <?php $this->assign('field_value', $this->_tpl_vars['field']['value']); ?>

                <?php if ($this->_tpl_vars['field']['Type'] == 'bool'): ?>
                    <?php if ($this->_tpl_vars['field']['value'] == '1'): ?>
                        <?php $this->assign('field_value', $this->_tpl_vars['lang']['yes']); ?>
                    <?php else: ?>
                        <?php $this->assign('field_value', $this->_tpl_vars['lang']['no']); ?>
                    <?php endif; ?>
                <?php endif; ?>

                <tr>
                    <td class="name"><?php echo $this->_tpl_vars['field']['name']; ?>
:</td>
                    <td class="field">
                        <?php if ($this->_tpl_vars['field']['Condition'] == 'isUrl' || $this->_tpl_vars['field']['Condition'] == 'isEmail'): ?>
                            <a href="<?php if ($this->_tpl_vars['field']['Condition'] == 'isEmail'): ?>mailto:<?php endif; ?><?php echo $this->_tpl_vars['field_value']; ?>
" title="<?php echo $this->_tpl_vars['field_value']; ?>
"><?php echo $this->_tpl_vars['field_value']; ?>
</a>
                        <?php else: ?>
                            <?php echo $this->_tpl_vars['field_value']; ?>

                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; endif; unset($_from); ?>
            </table>
        </div>
    </fieldset>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'blocks/m_block_end.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
    <div id="grid"></div>
    <script type="text/javascript">
    /**
     * @todo - Remove when compatibility will be >= 4.8.1 with new phrase scopes
     */
    lang.booking_checkin  = '<?php echo $this->_tpl_vars['lang']['booking_checkin']; ?>
';
    lang.booking_checkout = '<?php echo $this->_tpl_vars['lang']['booking_checkout']; ?>
';
    lang.booking_accepted = '<?php echo $this->_tpl_vars['lang']['booking_accepted']; ?>
';
    lang.booking_refused  = '<?php echo $this->_tpl_vars['lang']['booking_refused']; ?>
';

    <?php echo '
    $(document).ready(function() {
        bookingRequestsGrid = new gridObj({
            key: \'bookingRequests\',
            id: \'grid\',
            fieldID: \'Request_ID\',
            ajaxUrl: rlPlugins + \'booking/admin/booking.inc.php?q=ext_stat\',
            defaultSortField: false,
            title: \''; ?>
<?php echo $this->_tpl_vars['lang']['booking_requests']; ?>
<?php echo '\',
            fields: [
                {name: \'ID\', mapping: \'ID\'},
                {name: \'Listing_ID\', mapping: \'Listing_ID\'},
                {name: \'ref_number\', mapping: \'ref_number\'},
                {name: \'link\', mapping: \'link\', type: \'string\'},
                {name: \'Booking_status\', mapping: \'Booking_status\'},
                {name: \'Key\', mapping: \'Key\'},
                {name: \'Booking_client\', mapping: \'Booking_client\'},
                {name: \'Booking_from\', mapping: \'Booking_from\', type: \'date\', dateFormat: \'U\'},
                {name: \'Booking_to\', mapping: \'Booking_to\'},
                {name: \'Booking_ID\', mapping: \'Booking_ID\', type: \'int\'},
                {name: \'Request_ID\', mapping: \'Request_ID\'}
            ],
            columns: [
                {
                    header: lang[\'ext_id\'],
                    dataIndex: \'Booking_ID\',
                    width: 30,
                    fixed: true
                },{
                    header: lang.ext_listing_id,
                    dataIndex: \'Listing_ID\',
                    width: 7
                },{
                    header: lang.ext_title,
                    dataIndex: \'link\',
                    width: 60,
                    id: \'rlExt_item_bold\'
                },{
                    header: lang[\'ext_booking_client\'],
                    dataIndex: \'Booking_client\',
                    width: 15
                },{
                    header: lang.booking_checkin,
                    dataIndex: \'Booking_from\',
                    width: 15,
                    renderer: Ext.util.Format.dateRenderer(rlDateFormat.replace(/%/g, \'\').replace(\'b\', \'M\'))
                },{
                    header: lang.booking_checkout,
                    dataIndex: \'Booking_to\',
                    width: 15
                },{
                    header: lang[\'ext_status\'],
                    dataIndex: \'Booking_status\',
                    width: 80,
                    fixed: true,
                    editor: new Ext.form.ComboBox({
                        store: [
                            [\'process\', lang.new],
                            [\'booked\',  lang.booking_accepted],
                            [\'refused\', lang.booking_refused]
                        ],
                        displayField: \'value\',
                        valueField: \'key\',
                        typeAhead: true,
                        mode: \'local\',
                        triggerAction: \'all\',
                        selectOnFocus:true
                    }),
                    renderer: function(val){
                        return \'<span ext:qtip="\' + lang[\'ext_click_to_edit\'] + \'">\' + val + \'</span>\';
                    }
                },{
                    header: lang[\'ext_actions\'],
                    width: 70,
                    fixed: true,
                    dataIndex: \'Request_ID\',
                    sortable: false,
                    renderer: function(data) {
                        var out = "<center>";
                        out += "<img class=\'view\' ext:qtip=\'" + lang[\'ext_view\'] + "\' src=\'";
                        out += rlUrlHome + "img/blank.gif\' onClick=\'location.href=\\"";
                        out += rlUrlHome + "index.php?controller=" + controller + "&action=view&id=";
                        out += data + "\\"\' />";
                        out += "<img class=\'remove\' ext:qtip=\'" +  lang[\'ext_delete\'] + "\' src=\'";
                        out += rlUrlHome + "img/blank.gif\' onClick=\'rlConfirm( \\"";
                        out += lang[\'ext_booking_remove_notice_ap\'] + "\\", \\"apAjaxRequest\\", \\"";
                        out += [\'bookingDeleteRequest\', data] + "\\" )\' class=\'delete\' />";
                        out += "</center>";

                        return out;
                    }
                }
            ]
        });

        bookingRequestsGrid.init();
        grid.push(bookingRequestsGrid.grid);
    });
    '; ?>
</script>
<?php endif; ?>

<script>
<?php $this->assign('sReplace', ('{')."field".('}')); ?>
<?php $this->assign('missing_booking_field', ((is_array($_tmp=$this->_tpl_vars['lang']['notice_field_empty'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['sReplace'], 'error_field') : smarty_modifier_replace($_tmp, $this->_tpl_vars['sReplace'], 'error_field'))); ?>

lang['to']                             = '<?php echo $this->_tpl_vars['lang']['to']; ?>
';
lang['description']                    = '<?php echo $this->_tpl_vars['lang']['description']; ?>
';
lang['from']                           = '<?php echo $this->_tpl_vars['lang']['from']; ?>
';
lang['price']                          = '<?php echo $this->_tpl_vars['lang']['price']; ?>
';
lang['field_protected']                = '<?php echo $this->_tpl_vars['lang']['field_protected']; ?>
';
lang['booking_field_error']            = '<?php echo $this->_tpl_vars['missing_booking_field']; ?>
';
lang['booking_fields+name+email']      = '<?php echo $this->_tpl_vars['lang']['mail']; ?>
';
lang['booking_fields+name+last_name']  = '<?php echo $this->_tpl_vars['lang']['last_name']; ?>
';
lang['booking_fields+name+first_name'] = '<?php echo $this->_tpl_vars['lang']['first_name']; ?>
';

<?php echo '

/**
 * Function for ajax requests
 *
 * @param data        - Key of action and data for request
 * @param additional
 */
var apAjaxRequest = function(data, additional) {
    data = data.split(\',\');

    if (data && data[0] && data[1]) {
        mode = data[0];
        item = data[1];
    } else {
        return;
    }

    var errors = false;

    // check system fields
    if (mode === \'bookingDeleteField\' && jQuery.inArray(item, [\'email\', \'first_name\', \'last_name\']) >= 0) {
        printMessage(\'error\', lang.field_protected.replace(\'{field}\', lang[\'booking_fields+name+\' + item]));
        errors = true;
    }

    if (mode && item && !errors) {
        $.post(
            rlConfig.ajax_url,
            {mode: mode, item: item, additional: additional},
            function(response) {
                if (response.status === \'OK\') {
                    if (mode === \'bookingDeleteField\') {
                        bookingFields.reload();
                    } else if (mode === \'bookingDeleteRequest\') {
                        bookingRequestsGrid.reload();
                    }

                    printMessage(\'notice\', response.data);
                } else {
                    printMessage(\'error\', response.message);
                }
            },
            \'json\'
        );
    }
};
'; ?>
</script>

<!-- booking system end -->