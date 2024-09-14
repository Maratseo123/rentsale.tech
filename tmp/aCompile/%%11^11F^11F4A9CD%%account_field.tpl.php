<?php /* Smarty version 2.6.31, created on 2023-11-29 14:41:28
         compiled from blocks/account_field.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'blocks/account_field.tpl', 20, false),array('modifier', 'df', 'blocks/account_field.tpl', 172, false),array('modifier', 'replace', 'blocks/account_field.tpl', 420, false),array('function', 'rlHook', 'blocks/account_field.tpl', 330, false),array('function', 'getTmpFile', 'blocks/account_field.tpl', 419, false),)), $this); ?>
<!-- account fields add -->

<table class="form">
<?php $_from = $this->_tpl_vars['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
    <?php $this->assign('fKey', $this->_tpl_vars['field']['Key']); ?>
    <?php $this->assign('fVal', $_POST['f']); ?>

    <tr>
        <td class="name">
            <?php echo $this->_tpl_vars['field']['name']; ?>

            <?php if ($this->_tpl_vars['field']['Required']): ?>
                <span class="red">*</span>
            <?php endif; ?>
            <?php if (! empty ( $this->_tpl_vars['field']['description'] )): ?>
                <img alt="" class="qtip" title="<?php echo $this->_tpl_vars['field']['description']; ?>
" id="fd_<?php echo $this->_tpl_vars['field']['Key']; ?>
" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" />
            <?php endif; ?>
        </td>
        <td class="field">
            <?php if ($this->_tpl_vars['field']['Type'] == 'text'): ?>
                <?php if ($this->_tpl_vars['field']['Multilingual'] && count($this->_tpl_vars['allLangs']) > 1): ?>
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
                        <?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']][$this->_tpl_vars['language']['Code']]): ?>
                            <?php $this->assign('default_value', $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']][$this->_tpl_vars['language']['Code']]); ?>
                        <?php elseif ($this->_tpl_vars['field']['pMultiDefault']): ?>
                            <?php $this->assign('default_value', $this->_tpl_vars['field']['pMultiDefault'][$this->_tpl_vars['language']['Code']]); ?>
                        <?php elseif ($this->_tpl_vars['field']['Default'] && $this->_tpl_vars['lang'][$this->_tpl_vars['field']['pDefault']]): ?>
                            <?php $this->assign('default_value', $this->_tpl_vars['lang'][$this->_tpl_vars['field']['pDefault']]); ?>
                        <?php endif; ?>

                        <input class="w250" type="text" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][<?php echo $this->_tpl_vars['language']['Code']; ?>
]" maxlength="<?php if ($this->_tpl_vars['field']['Values'] != ''): ?><?php echo $this->_tpl_vars['field']['Values']; ?>
<?php else: ?>255<?php endif; ?>" value="<?php echo $this->_tpl_vars['default_value']; ?>
" /> <span class="field_description_noicon"><?php echo $this->_tpl_vars['language']['name']; ?>
</span>
                    </div>
                    <?php endforeach; endif; unset($_from); ?>
                <?php else: ?>
                    <input class="w250" type="text" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
]" maxlength="<?php if ($this->_tpl_vars['field']['Values'] != ''): ?><?php echo $this->_tpl_vars['field']['Values']; ?>
<?php else: ?>255<?php endif; ?>" <?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]): ?>value="<?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]; ?>
"<?php elseif ($this->_tpl_vars['field']['Default']): ?>value="<?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['field']['pDefault']]; ?>
"<?php endif; ?> />
                <?php endif; ?>
            <?php elseif ($this->_tpl_vars['field']['Type'] == 'textarea'): ?>
                <script type="text/javascript">var textarea_fields = new Array();</script>
                <div class="hide eval">
                    var textarea_fields = new Array();
                </div>

                <?php if ($this->_tpl_vars['field']['Multilingual'] && count($this->_tpl_vars['allLangs']) > 1): ?>
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
                    <div class="ckeditor tab_area<?php if (! ($this->_foreach['langF']['iteration'] <= 1)): ?> hide<?php endif; ?> <?php echo $this->_tpl_vars['language']['Code']; ?>
">
                        <?php if ($this->_tpl_vars['field']['Condition'] == 'html'): ?><div class="hide"><?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']][$this->_tpl_vars['language']['Code']]): ?><?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']][$this->_tpl_vars['language']['Code']]; ?>
<?php elseif ($this->_tpl_vars['field']['Default']): ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['field']['pDefault']]; ?>
<?php endif; ?></div><?php endif; ?>
                        <textarea rows="5" cols="" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][<?php echo $this->_tpl_vars['language']['Code']; ?>
]" id="textarea_<?php echo $this->_tpl_vars['field']['Key']; ?>
_<?php echo $this->_tpl_vars['language']['Code']; ?>
"><?php if ($this->_tpl_vars['field']['Condition'] != 'html'): ?><?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']][$this->_tpl_vars['language']['Code']]): ?><?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']][$this->_tpl_vars['language']['Code']]; ?>
<?php elseif ($this->_tpl_vars['field']['Default']): ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['field']['pDefault']]; ?>
<?php endif; ?><?php endif; ?></textarea>
                        <script type="text/javascript">
                        textarea_fields.push('textarea_<?php echo $this->_tpl_vars['field']['Key']; ?>
_<?php echo $this->_tpl_vars['language']['Code']; ?>
');
                        <?php if ($this->_tpl_vars['field']['Condition'] != 'html'): ?>
                        <?php echo '

                        $(document).ready(function(){
                            $(\'#textarea_'; ?>
<?php echo $this->_tpl_vars['field']['Key']; ?>
_<?php echo $this->_tpl_vars['language']['Code']; ?>
<?php echo '\').textareaCount({
                                \'maxCharacterSize\': '; ?>
<?php echo $this->_tpl_vars['field']['Values']; ?>
<?php echo ',
                                \'warningNumber\': 20
                            })
                        });

                        '; ?>

                        <?php endif; ?>
                        </script>

                        <?php if ($this->_tpl_vars['field']['Condition'] != 'html'): ?>
                            <div class="hide eval">
                                <?php echo '
                                $(\'#textarea_'; ?>
<?php echo $this->_tpl_vars['field']['Key']; ?>
<?php echo '\').textareaCount({
                                    \'maxCharacterSize\': '; ?>
<?php echo $this->_tpl_vars['field']['Values']; ?>
<?php echo ',
                                    \'warningNumber\': 20
                                });
                                '; ?>

                            </div>
                        <?php else: ?>
                            <div class="hide eval">
                                textarea_fields.push('textarea_<?php echo $this->_tpl_vars['field']['Key']; ?>
_<?php echo $this->_tpl_vars['language']['Code']; ?>
');
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; endif; unset($_from); ?>
                <?php else: ?>
                    <?php if ($this->_tpl_vars['field']['Condition'] == 'html'): ?><div class="hide"><?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]): ?><?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]; ?>
<?php elseif ($this->_tpl_vars['field']['Default']): ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['field']['pDefault']]; ?>
<?php endif; ?></div><?php endif; ?>
                    <textarea rows="5" cols="" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
]" id="textarea_<?php echo $this->_tpl_vars['field']['Key']; ?>
"><?php if ($this->_tpl_vars['field']['Condition'] != 'html'): ?><?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]): ?><?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]; ?>
<?php elseif ($this->_tpl_vars['field']['Default']): ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['field']['pDefault']]; ?>
<?php endif; ?><?php endif; ?></textarea>
                    <script type="text/javascript">
                    textarea_fields.push('textarea_<?php echo $this->_tpl_vars['field']['Key']; ?>
');
                    <?php if ($this->_tpl_vars['field']['Condition'] != 'html'): ?>
                    <?php echo '

                    $(document).ready(function(){
                        $(\'#textarea_'; ?>
<?php echo $this->_tpl_vars['field']['Key']; ?>
<?php echo '\').textareaCount({
                            \'maxCharacterSize\': '; ?>
<?php echo $this->_tpl_vars['field']['Values']; ?>
<?php echo ',
                            \'warningNumber\': 20
                        })
                    });

                    '; ?>

                    <?php endif; ?>
                    </script>

                    <?php if ($this->_tpl_vars['field']['Condition'] != 'html'): ?>
                        <div class="hide eval">
                            <?php echo '
                            $(\'#textarea_'; ?>
<?php echo $this->_tpl_vars['field']['Key']; ?>
<?php echo '\').textareaCount({
                                \'maxCharacterSize\': '; ?>
<?php echo $this->_tpl_vars['field']['Values']; ?>
<?php echo ',
                                \'warningNumber\': 20
                            });
                            '; ?>

                        </div>
                    <?php else: ?>
                        <div class="hide eval">
                            textarea_fields.push('textarea_<?php echo $this->_tpl_vars['field']['Key']; ?>
');
                        </div>
                    <?php endif; ?>
                <?php endif; ?>

                <?php if ($this->_tpl_vars['field']['Condition'] == 'html'): ?>
                    <div class="hide eval">
                        flynax.htmlEditor(
                            textarea_fields,
                            <?php if ($this->_tpl_vars['field']['Values']): ?>
                                [[
                                    'wordcount',
                                    <?php echo '{'; ?>

                                        showParagraphs    : false,
                                        showWordCount     : false,
                                        showCharCount     : true,
                                        maxCharCount      : <?php echo $this->_tpl_vars['field']['Values']; ?>
,
                                        countSpacesAsChars: true,
                                    <?php echo '}'; ?>

                                ]]
                            <?php else: ?>[]<?php endif; ?>
                        );
                    </div>

                    <script type="text/javascript">
                    flynax.htmlEditor(
                        textarea_fields,
                        <?php if ($this->_tpl_vars['field']['Values']): ?>
                            [[
                                'wordcount',
                                <?php echo '{'; ?>

                                    showParagraphs    : false,
                                    showWordCount     : false,
                                    showCharCount     : true,
                                    maxCharCount      : <?php echo $this->_tpl_vars['field']['Values']; ?>
,
                                    countSpacesAsChars: true,
                                <?php echo '}'; ?>

                            ]]
                        <?php else: ?>[]<?php endif; ?>
                    );
                    </script>
                <?php endif; ?>
            <?php elseif ($this->_tpl_vars['field']['Type'] == 'number'): ?>
                <input type="text" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
]" size="<?php if ($this->_tpl_vars['field']['Values']): ?><?php echo $this->_tpl_vars['field']['Values']; ?>
<?php else: ?>10<?php endif; ?>" maxlength="<?php if ($this->_tpl_vars['field']['Values']): ?><?php echo $this->_tpl_vars['field']['Values']; ?>
<?php else: ?>10<?php endif; ?>" <?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]): ?>value="<?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]; ?>
"<?php elseif ($this->_tpl_vars['field']['Default']): ?>value="<?php echo $this->_tpl_vars['field']['default']; ?>
"<?php endif; ?> />
            <?php elseif ($this->_tpl_vars['field']['Type'] == 'phone'): ?>
                <span class="phone-field">
                    <?php if ($this->_tpl_vars['field']['Opt1']): ?>
                        + <input type="text" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][code]" <?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['code']): ?>value="<?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['code']; ?>
"<?php endif; ?> maxlength="4" size="3" class="wauto ta-center numeric" /> -
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['field']['Condition']): ?>
                        <?php $this->assign('df_source', ((is_array($_tmp=$this->_tpl_vars['field']['Condition'])) ? $this->_run_mod_handler('df', true, $_tmp) : smarty_modifier_df($_tmp))); ?>
                        <select name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][area]" class="w50">
                            <?php $_from = $this->_tpl_vars['df_source']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['df_key'] => $this->_tpl_vars['df_item']):
?>
                                <option value="<?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['df_item']['pName']]; ?>
" <?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['area']): ?><?php if ($this->_tpl_vars['lang'][$this->_tpl_vars['df_item']['pName']] == $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['area']): ?>selected="selected"<?php endif; ?><?php else: ?><?php if ($this->_tpl_vars['df_item']['Default']): ?>selected="selected"<?php endif; ?><?php endif; ?>><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['df_item']['pName']]; ?>
</option>
                            <?php endforeach; endif; unset($_from); ?>
                        </select>
                    <?php else: ?>
                        <input type="text" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][area]" <?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['area']): ?>value="<?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['area']; ?>
"<?php endif; ?> maxlength="<?php echo $this->_tpl_vars['field']['Default']; ?>
" size="<?php echo $this->_tpl_vars['field']['Default']; ?>
" class="wauto ta-center numeric" />
                    <?php endif; ?>
                    -
                    <input type="text" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][number]" <?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['number']): ?>value="<?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['number']; ?>
"<?php endif; ?> maxlength="<?php echo $this->_tpl_vars['field']['Values']; ?>
" size="<?php echo $this->_tpl_vars['field']['Values']+2; ?>
" class="wauto ta-center numeric" />
                    <?php if ($this->_tpl_vars['field']['Opt2']): ?>
                        <?php echo $this->_tpl_vars['lang']['phone_ext_out']; ?>
 <input type="text" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][ext]" <?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['ext']): ?>value="<?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['ext']; ?>
"<?php endif; ?> maxlength="4" size="3" class="wauto ta-center" />
                    <?php endif; ?>
                </span>

                <?php if ($this->_tpl_vars['field']['Opt3'] && ( $this->_tpl_vars['config']['whatsapp_phone_icon'] || $this->_tpl_vars['config']['viber_phone_icon'] || $this->_tpl_vars['config']['telegram_phone_icon'] )): ?>
                    <div class="phone-messengers mt-3 mb-3">
                        <?php if ($this->_tpl_vars['config']['whatsapp_phone_icon']): ?>
                            <span class="custom-input d-block phone-messengers__whatsapp">
                                <label title="<?php echo $this->_tpl_vars['lang']['profile_has_whatsapp']; ?>
">
                                    <input type="checkbox"
                                           <?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['messengers']['whatsapp']): ?>checked="checked"<?php endif; ?>
                                           value="<?php echo $this->_tpl_vars['_phoneMessengers']['whatsapp']; ?>
"
                                           name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][messengers][whatsapp]"
                                    />
                                    <?php echo $this->_tpl_vars['lang']['profile_has_whatsapp']; ?>

                                </label>
                            </span>
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['config']['viber_phone_icon']): ?>
                            <span class="custom-input d-block mt-2 phone-messengers__viber">
                                <label title="<?php echo $this->_tpl_vars['lang']['profile_has_viber']; ?>
">
                                    <input type="checkbox"
                                           <?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['messengers']['viber']): ?>checked="checked"<?php endif; ?>
                                           value="<?php echo $this->_tpl_vars['_phoneMessengers']['viber']; ?>
"
                                           name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][messengers][viber]"
                                    />
                                    <?php echo $this->_tpl_vars['lang']['profile_has_viber']; ?>

                                </label>
                            </span>
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['config']['telegram_phone_icon']): ?>
                            <span class="custom-input d-block mt-2 phone-messengers__telegram">
                                <label title="<?php echo $this->_tpl_vars['lang']['profile_has_telegram']; ?>
">
                                    <input type="checkbox"
                                           <?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['messengers']['telegram']): ?>checked="checked"<?php endif; ?>
                                           value="<?php echo $this->_tpl_vars['_phoneMessengers']['telegram']; ?>
"
                                           name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][messengers][telegram]"
                                    />
                                    <?php echo $this->_tpl_vars['lang']['profile_has_telegram']; ?>

                                </label>
                            </span>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <script><?php echo '
                $(function(){
                    flynax.phoneField();
                });
                '; ?>
</script>
            <?php elseif ($this->_tpl_vars['field']['Type'] == 'date'): ?>
                <?php if ($this->_tpl_vars['field']['Default'] == 'single'): ?>
                    <input type="text"
                        id="date_<?php echo $this->_tpl_vars['field']['Key']; ?>
"
                        name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
]"
                        maxlength="10"
                        class="date-calendar"
                        value="<?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]; ?>
"
                        autocomplete="off" />

                    <script type="text/javascript">
                    <?php echo '
                    $(document).ready(function(){
                        $(\'#date_'; ?>
<?php echo $this->_tpl_vars['field']['Key']; ?>
<?php echo '\').datepicker({
                            showOn: \'both\',
                            buttonImage    : \''; ?>
<?php echo $this->_tpl_vars['rlTplBase']; ?>
<?php echo 'img/blank.gif\',
                            buttonText     : \''; ?>
<?php echo $this->_tpl_vars['lang']['dp_choose_date']; ?>
<?php echo '\',
                            buttonImageOnly: true,
                            dateFormat     : \'yy-mm-dd\',
                            changeMonth    : true,
                            changeYear     : true,
                            yearRange      : \'-100:+30\'
                        }).datepicker($.datepicker.regional[\''; ?>
<?php echo (defined('RL_LANG_CODE') ? @RL_LANG_CODE : null); ?>
<?php echo '\']);
                    });
                    '; ?>

                    </script>
                <?php elseif ($this->_tpl_vars['field']['Default'] == 'multi'): ?>
                    <input type="text"
                        id="date_<?php echo $this->_tpl_vars['field']['Key']; ?>
_from"
                        name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][from]"
                        maxlength="10"
                        class="date-calendar"
                        value="<?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['from']; ?>
"
                        autocomplete="off" />

                    <img class="divider" alt="" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" />

                    <input type="text"
                        id="date_<?php echo $this->_tpl_vars['field']['Key']; ?>
_to"
                        name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][to]"
                        maxlength="10"
                        class="date-calendar"
                        value="<?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['to']; ?>
"
                        autocomplete="off" />

                    <script type="text/javascript">
                    <?php echo '
                    $(document).ready(function(){
                        $(\'#date_'; ?>
<?php echo $this->_tpl_vars['field']['Key']; ?>
<?php echo '_from\').datepicker({
                            showOn         : \'both\',
                            buttonImage    : \''; ?>
<?php echo $this->_tpl_vars['rlTplBase']; ?>
<?php echo 'img/blank.gif\',
                            buttonText     : \''; ?>
<?php echo $this->_tpl_vars['lang']['dp_choose_date']; ?>
<?php echo '\',
                            buttonImageOnly: true,
                            dateFormat     : \'yy-mm-dd\',
                            changeMonth    : true,
                            changeYear     : true,
                            yearRange      : \'-100:+30\'
                        }).datepicker($.datepicker.regional[\''; ?>
<?php echo (defined('RL_LANG_CODE') ? @RL_LANG_CODE : null); ?>
<?php echo '\']);

                        $(\'#date_'; ?>
<?php echo $this->_tpl_vars['field']['Key']; ?>
<?php echo '_to\').datepicker({
                            showOn         : \'both\',
                            buttonImage    : \''; ?>
<?php echo $this->_tpl_vars['rlTplBase']; ?>
<?php echo 'img/blank.gif\',
                            buttonText     : \''; ?>
<?php echo $this->_tpl_vars['lang']['dp_choose_date']; ?>
<?php echo '\',
                            buttonImageOnly: true,
                            dateFormat     : \'yy-mm-dd\',
                            changeMonth    : true,
                            changeYear     : true,
                            yearRange      : \'-100:+30\'
                        }).datepicker($.datepicker.regional[\''; ?>
<?php echo (defined('RL_LANG_CODE') ? @RL_LANG_CODE : null); ?>
<?php echo '\']);
                    });
                    '; ?>

                    </script>
                <?php endif; ?>
            <?php elseif ($this->_tpl_vars['field']['Type'] == 'mixed'): ?>
                <input class="numeric" type="text" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][value]" size="8" maxlength="15" <?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['value']): ?>value="<?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['value']; ?>
"<?php endif; ?> style="width: 70px;" />

                <?php if (! empty ( $this->_tpl_vars['field']['Condition'] )): ?>
                    <?php $this->assign('df_source', ((is_array($_tmp=$this->_tpl_vars['field']['Condition'])) ? $this->_run_mod_handler('df', true, $_tmp) : smarty_modifier_df($_tmp))); ?>
                <?php else: ?>
                    <?php $this->assign('df_source', $this->_tpl_vars['field']['Values']); ?>
                <?php endif; ?>

                <?php if (count($this->_tpl_vars['df_source']) > 1): ?>
                    <select name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][df]" style="width: 60px;">
                        <?php $_from = $this->_tpl_vars['df_source']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['df_key'] => $this->_tpl_vars['df_item']):
?>
                            <option value="<?php echo $this->_tpl_vars['df_item']['Key']; ?>
" <?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['df']): ?><?php if ($this->_tpl_vars['df_item']['Key'] == $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['df']): ?>selected="selected"<?php endif; ?><?php else: ?><?php if ($this->_tpl_vars['df_key'] == $this->_tpl_vars['field']['Default']): ?>selected="selected"<?php endif; ?><?php endif; ?>><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['df_item']['pName']]; ?>
</option>
                        <?php endforeach; endif; unset($_from); ?>
                    </select>
                <?php else: ?>
                    <input type="hidden" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][df]" value="<?php $_from = $this->_tpl_vars['df_source']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['df_item']):
?><?php echo $this->_tpl_vars['df_item']['Key']; ?>
<?php endforeach; endif; unset($_from); ?>" />
                    <?php $_from = $this->_tpl_vars['df_source']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['df_item']):
?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['df_item']['pName']]; ?>
<?php endforeach; endif; unset($_from); ?>
                <?php endif; ?>
            <?php elseif ($this->_tpl_vars['field']['Type'] == 'bool'): ?>
                <label><input type="radio" value="1" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
]" <?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]): ?>checked="checked"<?php elseif ($this->_tpl_vars['field']['Default']): ?>checked="checked"<?php endif; ?> /> <?php echo $this->_tpl_vars['lang']['yes']; ?>
</label>
                <label><input type="radio" value="0" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
]" <?php if (! $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]): ?>checked="checked"<?php elseif (! $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']] && ! $this->_tpl_vars['field']['Default']): ?>checked="checked"<?php endif; ?> /> <?php echo $this->_tpl_vars['lang']['no']; ?>
</label>
            <?php elseif ($this->_tpl_vars['field']['Type'] == 'select'): ?>
                <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'apTplAccountFieldSelect'), $this);?>

                <select name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
]"<?php if ($this->_tpl_vars['field']['Autocomplete']): ?> class="select-autocomplete"<?php endif; ?>>
                    <option value="0"><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>

                    <?php $_from = $this->_tpl_vars['field']['Values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['option']):
?>
                        <?php if ($this->_tpl_vars['field']['Condition']): ?>
                            <?php $this->assign('key', $this->_tpl_vars['option']['Key']); ?>
                        <?php endif; ?>
                        <option value="<?php if ($this->_tpl_vars['field']['Condition']): ?><?php echo $this->_tpl_vars['option']['Key']; ?>
<?php else: ?><?php echo $this->_tpl_vars['key']; ?>
<?php endif; ?>" <?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]): ?><?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']] == $this->_tpl_vars['key']): ?>selected="selected"<?php endif; ?><?php else: ?><?php if (( $this->_tpl_vars['field']['Default'] == $this->_tpl_vars['key'] ) || $this->_tpl_vars['option']['Default']): ?>selected="selected"<?php endif; ?><?php endif; ?>><?php if ($this->_tpl_vars['option']['name']): ?><?php echo $this->_tpl_vars['option']['name']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['option']['pName']]; ?>
<?php endif; ?></option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
            <?php elseif ($this->_tpl_vars['field']['Type'] == 'checkbox'): ?>
                <?php $this->assign('fDefault', $this->_tpl_vars['field']['Default']); ?>
                <input type="hidden" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][0]" value="0" />
                <table>
                <tr>
                <?php $_from = $this->_tpl_vars['field']['Values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['checkboxF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['checkboxF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['option']):
        $this->_foreach['checkboxF']['iteration']++;
?>
                    <?php if (! empty ( $this->_tpl_vars['field']['Condition'] )): ?>
                        <?php $this->assign('key', $this->_tpl_vars['option']['Key']); ?>
                    <?php endif; ?>
                    <td <?php if ($this->_foreach['checkboxF']['total'] > 5): ?>style="width: 33%"<?php endif; ?>>
                        <input type="checkbox" id="<?php echo $this->_tpl_vars['field']['Key']; ?>
_<?php echo $this->_tpl_vars['key']; ?>
" value="<?php echo $this->_tpl_vars['key']; ?>
" <?php if (is_array ( $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']] )): ?><?php $_from = $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['chVals']):
?><?php if ($this->_tpl_vars['chVals'] == $this->_tpl_vars['key']): ?>checked="checked"<?php endif; ?><?php endforeach; endif; unset($_from); ?><?php else: ?><?php $_from = $this->_tpl_vars['field']['Default']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['chDef']):
?><?php if ($this->_tpl_vars['chDef'] == $this->_tpl_vars['key']): ?>checked="checked"<?php endif; ?><?php endforeach; endif; unset($_from); ?><?php endif; ?> name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][<?php echo $this->_tpl_vars['key']; ?>
]" /> <label for="<?php echo $this->_tpl_vars['field']['Key']; ?>
_<?php echo $this->_tpl_vars['key']; ?>
" class="fLable"><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['option']['pName']]; ?>
</label>
                    </td>
                    <?php if ($this->_foreach['checkboxF']['iteration']%3 == 0): ?>
                    </tr>
                    <tr>
                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
                </tr>
                </table>
            <?php elseif ($this->_tpl_vars['field']['Type'] == 'radio'): ?>
                <input type="hidden" value="0" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
]" />
                <table>
                <tr>
                <?php $_from = $this->_tpl_vars['field']['Values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['radioF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['radioF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['option']):
        $this->_foreach['radioF']['iteration']++;
?>
                    <td <?php if ($this->_foreach['radioF']['total'] > 5): ?>style="width: 33%"<?php endif; ?>>
                        <input type="radio" id="<?php echo $this->_tpl_vars['field']['Key']; ?>
_<?php echo $this->_tpl_vars['key']; ?>
" value="<?php echo $this->_tpl_vars['key']; ?>
" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
]" <?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]): ?><?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']] == $this->_tpl_vars['key']): ?>checked="checked"<?php endif; ?><?php else: ?><?php if ($this->_tpl_vars['field']['Default'] == $this->_tpl_vars['key']): ?>checked="checked"<?php endif; ?><?php endif; ?> /> <label for="<?php echo $this->_tpl_vars['field']['Key']; ?>
_<?php echo $this->_tpl_vars['key']; ?>
" class="fLable"><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['option']['pName']]; ?>
</label>
                    </td>
                    <?php if ($this->_foreach['radioF']['iteration']%3 == 0): ?>
                    </tr>
                    <tr>
                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
                </tr>
                </table>
            <?php elseif ($this->_tpl_vars['field']['Type'] == 'file' || $this->_tpl_vars['field']['Type'] == 'image'): ?>
                <?php $this->assign('field_type', $this->_tpl_vars['field']['Default']); ?>
                <input type="hidden" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
]" value="" />

                <?php $this->assign('field_value', ''); ?>

                <?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]): ?>
                    <?php $this->assign('field_value', $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]); ?>
                <?php elseif ($_POST['f_sys_exist'][$this->_tpl_vars['fKey']]): ?>
                    <?php $this->assign('field_value', $_POST['f_sys_exist'][$this->_tpl_vars['fKey']]); ?>
                <?php endif; ?>

                <?php if ($this->_tpl_vars['field_value']): ?>
                    <div id="<?php echo $this->_tpl_vars['field']['Key']; ?>
_file" style="padding: 0 0 5px 0;">
                        <input type="hidden" name="f[sys_exist_<?php echo $this->_tpl_vars['field']['Key']; ?>
]" value="<?php echo $this->_tpl_vars['field_value']; ?>
" />

                        <?php if ($this->_tpl_vars['field']['Type'] == 'file'): ?>
                            <a href="<?php echo (defined('RL_FILES_URL') ? @RL_FILES_URL : null); ?>
<?php echo $this->_tpl_vars['field_value']; ?>
"><?php echo $this->_tpl_vars['lang']['download']; ?>
</a>
                            |
                            <a id="delete_<?php echo $this->_tpl_vars['field']['Key']; ?>
" href="javascript:void(0)"><?php echo $this->_tpl_vars['lang']['delete']; ?>
</a>
                        <?php else: ?>
                            <div class="relative fleft">
                                <img style="width: auto;height: auto;" class="thumbnail" title="<?php echo $this->_tpl_vars['field']['name']; ?>
" alt="<?php echo $this->_tpl_vars['field']['name']; ?>
" src="<?php echo (defined('RL_FILES_URL') ? @RL_FILES_URL : null); ?>
<?php echo $this->_tpl_vars['field_value']; ?>
" />
                                <img id="delete_<?php echo $this->_tpl_vars['field']['Key']; ?>
" class="delete_item" style="display: block;" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" alt="" title="<?php echo $this->_tpl_vars['lang']['delete']; ?>
" />
                            </div>
                            <div class="clear"></div>
                        <?php endif; ?>

                        <script type="text/javascript">//<![CDATA[
                        <?php echo '

                        $(document).ready(function(){
                            $(\'#delete_'; ?>
<?php echo $this->_tpl_vars['field']['Key']; ?>
<?php echo '\').click(function(){
                                '; ?>

                                rlConfirm('<?php echo $this->_tpl_vars['lang']['delete_confirm']; ?>
', 'xajax_delAccountFile', Array('<?php echo $this->_tpl_vars['field']['Key']; ?>
"', '<?php echo $this->_tpl_vars['aInfo']['ID']; ?>
', '"<?php echo $this->_tpl_vars['field']['Key']; ?>
_file'));
                                <?php echo '
                            });
                        });

                        '; ?>

                        //]]>
                        </script>
                    </div>
                <?php endif; ?>
                <?php echo $this->_plugins['function']['getTmpFile'][0][0]->getTmpFile(array('field' => $this->_tpl_vars['field']['Key'],'parent' => 'f'), $this);?>

                <input type="file" name="<?php echo $this->_tpl_vars['field']['Key']; ?>
" /><?php if ($this->_tpl_vars['field']['Type'] == 'file' && ! empty ( $this->_tpl_vars['field']['Default'] )): ?><span class="grey_small"> <em><?php echo $this->_tpl_vars['l_file_types'][$this->_tpl_vars['field_type']]['name']; ?>
 (.<?php echo ((is_array($_tmp=$this->_tpl_vars['l_file_types'][$this->_tpl_vars['field_type']]['ext'])) ? $this->_run_mod_handler('replace', true, $_tmp, ',', ', .') : smarty_modifier_replace($_tmp, ',', ', .')); ?>
)</em></span><?php endif; ?>
            <?php elseif ($this->_tpl_vars['field']['Type'] == 'accept'): ?>
                <textarea cols="" rows="6" readonly="readonly" name="<?php echo $this->_tpl_vars['field']['Key']; ?>
"><?php echo $this->_tpl_vars['field']['default']; ?>
</textarea>
                <div style="padding: 5px 0 0 0;">
                    <input type="hidden" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
]" value="no" />
                    <input type="checkbox" id="<?php echo $this->_tpl_vars['field']['Key']; ?>
" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
]" value="yes" /> <label for="<?php echo $this->_tpl_vars['field']['Key']; ?>
" class="fLable"><?php echo $this->_tpl_vars['lang']['accept']; ?>
</label><?php if ($this->_tpl_vars['field']['Required']): ?><span class="red">*</span><?php endif; ?>
                </div>
            <?php endif; ?>
        </td>
    </tr>

<?php endforeach; endif; unset($_from); ?>
</table>

<!-- account fields add end -->