<?php /* Smarty version 2.6.31, created on 2024-04-24 15:46:43
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/fields_search_horizontal.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/fields_search_horizontal.tpl', 10, false),array('modifier', 'replace', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/fields_search_horizontal.tpl', 39, false),array('modifier', 'df', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/fields_search_horizontal.tpl', 138, false),array('modifier', 'count', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/fields_search_horizontal.tpl', 143, false),array('function', 'addCSS', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/fields_search_horizontal.tpl', 66, false),array('function', 'rlHook', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/fields_search_horizontal.tpl', 182, false),array('function', 'phrase', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/fields_search_horizontal.tpl', 216, false),array('function', 'math', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/fields_search_horizontal.tpl', 265, false),)), $this); ?>
<?php echo '<!-- fields block (for search in horizontal box) -->'; ?><?php if ($this->_tpl_vars['listing_type']['Submit_method'] == 'post'): ?><?php echo ''; ?><?php $this->assign('fVal', $_POST); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->assign('fVal', $_GET); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $this->assign('sbd_file', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=(defined('RL_PLUGINS') ? @RL_PLUGINS : null))) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'search_by_distance') : smarty_modifier_cat($_tmp, 'search_by_distance')))) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'field.tpl') : smarty_modifier_cat($_tmp, 'field.tpl'))); ?><?php echo ''; ?><?php $this->assign('multicat_listing_type', $this->_tpl_vars['search_form']['listing_type']); ?><?php echo ''; ?><?php $this->assign('levels_number', $this->_tpl_vars['listing_types'][$this->_tpl_vars['multicat_listing_type']]['Search_multicat_levels']); ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?><?php echo ''; ?><?php $this->assign('fKey', $this->_tpl_vars['field']['Key']); ?><?php echo ''; ?><?php $this->assign('cell_class', 'single-field'); ?><?php echo ''; ?><?php if ($this->_tpl_vars['field']['Key'] == 'address' || $this->_tpl_vars['field']['Key'] == 'b_address'): ?><?php echo ''; ?><?php $this->assign('cell_class', 'address'); ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['field']['Type'] == 'price' || $this->_tpl_vars['field']['Type'] == 'mixed'): ?><?php echo ''; ?><?php $this->assign('cell_class', 'three-field'); ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['field']['Type'] == 'select' && $this->_tpl_vars['field']['Condition'] == 'years'): ?><?php echo ''; ?><?php $this->assign('cell_class', 'two-fields'); ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['field']['Type'] == 'bool'): ?><?php echo ''; ?><?php $this->assign('cell_class', 'couple-field'); ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['field']['Type'] == 'date'): ?><?php echo ''; ?><?php $this->assign('cell_class', 'two-fields'); ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['field']['Type'] == 'number'): ?><?php echo ''; ?><?php $this->assign('cell_class', 'numeric-field'); ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['field']['Type'] == 'checkbox' || $this->_tpl_vars['field']['Type'] == 'radio'): ?><?php echo ''; ?><?php $this->assign('cell_class', 'checkbox-field'); ?><?php echo ''; ?><?php endif; ?><?php echo '<div class="search-form-cell '; ?><?php echo $this->_tpl_vars['cell_class']; ?><?php echo ' '; ?><?php if ($this->_tpl_vars['field']['Type'] != 'date'): ?><?php echo ''; ?><?php echo $this->_tpl_vars['field']['Type']; ?><?php echo ''; ?><?php endif; ?><?php echo '"><div><span>'; ?><?php if ($this->_tpl_vars['field']['Type'] == 'number'): ?><?php echo ''; ?><?php $this->assign('replace_field_key', ('{')."field_name".('}')); ?><?php echo ''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['number_caption_min'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['replace_field_key'], $this->_tpl_vars['lang'][$this->_tpl_vars['field']['pName']]) : smarty_modifier_replace($_tmp, $this->_tpl_vars['replace_field_key'], $this->_tpl_vars['lang'][$this->_tpl_vars['field']['pName']])); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->assign('field_phrase_key', $this->_tpl_vars['field']['pName']); ?><?php echo ''; ?><?php if ($this->_tpl_vars['listing_types'][$this->_tpl_vars['multicat_listing_type']]['Search_multi_categories'] > 0 && $this->_tpl_vars['field']['Key'] == 'Category_ID' && $this->_tpl_vars['listing_types'][$this->_tpl_vars['multicat_listing_type']]['Search_multicat_phrases']): ?><?php echo ''; ?><?php $this->assign('field_phrase_key', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp='multilevel_category+')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['multicat_listing_type']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['multicat_listing_type'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '+') : smarty_modifier_cat($_tmp, '+')))) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_LANG_CODE') ? @RL_LANG_CODE : null)) : smarty_modifier_cat($_tmp, (defined('RL_LANG_CODE') ? @RL_LANG_CODE : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, '+1') : smarty_modifier_cat($_tmp, '+1'))); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['lang'][$this->_tpl_vars['field_phrase_key']]): ?><?php echo ''; ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['field_phrase_key']]; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['field']['pName']]; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo '</span><div'; ?><?php if ($this->_tpl_vars['field']['Type'] == 'date'): ?><?php echo ' class="search-item '; ?><?php echo $this->_tpl_vars['cell_class']; ?><?php echo '"'; ?><?php endif; ?><?php echo '>'; ?><?php if ($this->_tpl_vars['field']['Type'] == 'text'): ?><?php echo ''; ?><?php if ($this->_tpl_vars['aHooks']['search_by_distance'] && $this->_tpl_vars['field']['Key'] == $this->_tpl_vars['config']['sbd_zip_field'] && is_file ( $this->_tpl_vars['sbd_file'] )): ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['sbd_file'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php else: ?><?php echo '<input type="text" name="f['; ?><?php echo $this->_tpl_vars['field']['Key']; ?><?php echo ']" maxlength="'; ?><?php if ($this->_tpl_vars['field']['Values'] != ''): ?><?php echo ''; ?><?php echo $this->_tpl_vars['field']['Values']; ?><?php echo ''; ?><?php else: ?><?php echo '255'; ?><?php endif; ?><?php echo '" '; ?><?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]): ?><?php echo 'value="'; ?><?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]; ?><?php echo '"'; ?><?php endif; ?><?php echo ' />'; ?><?php if ($this->_tpl_vars['field']['Key'] == 'keyword_search'): ?><?php echo '<input checked="checked" value="2" type="radio" name="f[keyword_search_type]" /><!-- any word in any order -->'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['field']['Type'] == 'number'): ?><?php echo ''; ?><?php if ($this->_tpl_vars['aHooks']['search_by_distance'] && $this->_tpl_vars['field']['Key'] == $this->_tpl_vars['config']['sbd_zip_field'] && is_file ( $this->_tpl_vars['sbd_file'] )): ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['sbd_file'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php else: ?><?php echo '<input value="'; ?><?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['from']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['from']; ?><?php echo ''; ?><?php endif; ?><?php echo '" type="number" name="f['; ?><?php echo $this->_tpl_vars['field']['Key']; ?><?php echo '][from]" min="1" maxlength="'; ?><?php if ($this->_tpl_vars['field']['Values']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['field']['Values']; ?><?php echo ''; ?><?php else: ?><?php echo '18'; ?><?php endif; ?><?php echo '" />'; ?><?php endif; ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['field']['Type'] == 'date'): ?><?php echo ''; ?><?php echo $this->_plugins['function']['addCSS'][0][0]->smartyAddCSS(array('file' => ((is_array($_tmp=$this->_tpl_vars['rlTplBase'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'css/jquery.ui.css') : smarty_modifier_cat($_tmp, 'css/jquery.ui.css'))), $this);?><?php echo ''; ?><?php if ($this->_tpl_vars['field']['Default'] == 'multi'): ?><?php echo '<input class="date"type="text"id="date_'; ?><?php echo $this->_tpl_vars['field']['Key']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['postfix']): ?><?php echo '_'; ?><?php echo $this->_tpl_vars['postfix']; ?><?php echo ''; ?><?php endif; ?><?php echo '_'; ?><?php echo $this->_tpl_vars['post_form_key']; ?><?php echo '"name="f['; ?><?php echo $this->_tpl_vars['field']['Key']; ?><?php echo ']"maxlength="10"value="'; ?><?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]; ?><?php echo '"autocomplete="off" /><div class="clear"></div><script class="fl-js-dynamic">$(document).ready(function()'; ?><?php echo '{'; ?><?php echo '$(\'#date_'; ?><?php echo $this->_tpl_vars['field']['Key']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['postfix']): ?><?php echo '_'; ?><?php echo $this->_tpl_vars['postfix']; ?><?php echo ''; ?><?php endif; ?><?php echo '_'; ?><?php echo $this->_tpl_vars['post_form_key']; ?><?php echo '\').datepicker('; ?><?php echo '{
                            showOn     : \'focus\',
                            dateFormat : \'yy-mm-dd\',
                            changeMonth: true,
                            changeYear : true,
                            yearRange  : \'-100:+30\'
                        }'; ?><?php echo ').datepicker($.datepicker.regional[\''; ?><?php echo (defined('RL_LANG_CODE') ? @RL_LANG_CODE : null); ?><?php echo '\']);'; ?><?php echo '}'; ?><?php echo ');</script>'; ?><?php elseif ($this->_tpl_vars['field']['Default'] == 'single'): ?><?php echo '<input placeholder="'; ?><?php echo $this->_tpl_vars['lang']['from']; ?><?php echo '"class="date"type="text"id="date_'; ?><?php echo $this->_tpl_vars['field']['Key']; ?><?php echo '_from'; ?><?php if ($this->_tpl_vars['postfix']): ?><?php echo '_'; ?><?php echo $this->_tpl_vars['postfix']; ?><?php echo ''; ?><?php endif; ?><?php echo '_'; ?><?php echo $this->_tpl_vars['post_form_key']; ?><?php echo '"name="f['; ?><?php echo $this->_tpl_vars['field']['Key']; ?><?php echo '][from]"maxlength="10"value="'; ?><?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['from']; ?><?php echo '"autocomplete="off" /><input placeholder="'; ?><?php echo $this->_tpl_vars['lang']['to']; ?><?php echo '"class="date"type="text"id="date_'; ?><?php echo $this->_tpl_vars['field']['Key']; ?><?php echo '_to'; ?><?php if ($this->_tpl_vars['postfix']): ?><?php echo '_'; ?><?php echo $this->_tpl_vars['postfix']; ?><?php echo ''; ?><?php endif; ?><?php echo '_'; ?><?php echo $this->_tpl_vars['post_form_key']; ?><?php echo '"name="f['; ?><?php echo $this->_tpl_vars['field']['Key']; ?><?php echo '][to]"maxlength="10"value="'; ?><?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['to']; ?><?php echo '"autocomplete="off" /><script class="fl-js-dynamic">$(document).ready(function()'; ?><?php echo '{'; ?><?php echo '$(\'#date_'; ?><?php echo $this->_tpl_vars['field']['Key']; ?><?php echo '_from'; ?><?php if ($this->_tpl_vars['postfix']): ?><?php echo '_'; ?><?php echo $this->_tpl_vars['postfix']; ?><?php echo ''; ?><?php endif; ?><?php echo '_'; ?><?php echo $this->_tpl_vars['post_form_key']; ?><?php echo '\').datepicker('; ?><?php echo '{
                            showOn     : \'focus\',
                            dateFormat : \'yy-mm-dd\',
                            changeMonth: true,
                            changeYear : true,
                            yearRange  : \'-100:+30\'
                        }'; ?><?php echo ').datepicker($.datepicker.regional[\''; ?><?php echo (defined('RL_LANG_CODE') ? @RL_LANG_CODE : null); ?><?php echo '\']);$(\'#date_'; ?><?php echo $this->_tpl_vars['field']['Key']; ?><?php echo '_to'; ?><?php if ($this->_tpl_vars['postfix']): ?><?php echo '_'; ?><?php echo $this->_tpl_vars['postfix']; ?><?php echo ''; ?><?php endif; ?><?php echo '_'; ?><?php echo $this->_tpl_vars['post_form_key']; ?><?php echo '\').datepicker('; ?><?php echo '{
                            showOn     : \'focus\',
                            dateFormat : \'yy-mm-dd\',
                            changeMonth: true,
                            changeYear : true,
                            yearRange  : \'-100:+30\'
                        }'; ?><?php echo ').datepicker($.datepicker.regional[\''; ?><?php echo (defined('RL_LANG_CODE') ? @RL_LANG_CODE : null); ?><?php echo '\']);'; ?><?php echo '}'; ?><?php echo ');</script>'; ?><?php endif; ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['field']['Type'] == 'mixed'): ?><?php echo '<input value="'; ?><?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['from']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['from']; ?><?php echo ''; ?><?php endif; ?><?php echo '" placeholder="'; ?><?php echo $this->_tpl_vars['lang']['from']; ?><?php echo '" class="numeric" type="text" name="f['; ?><?php echo $this->_tpl_vars['field']['Key']; ?><?php echo '][from]" maxlength="15" /><input value="'; ?><?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['to']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['to']; ?><?php echo ''; ?><?php endif; ?><?php echo '" placeholder="'; ?><?php echo $this->_tpl_vars['lang']['to']; ?><?php echo '" class="numeric" type="text" name="f['; ?><?php echo $this->_tpl_vars['field']['Key']; ?><?php echo '][to]" maxlength="15" />'; ?><?php if (! empty ( $this->_tpl_vars['field']['Condition'] )): ?><?php echo ''; ?><?php $this->assign('df_source', ((is_array($_tmp=$this->_tpl_vars['field']['Condition'])) ? $this->_run_mod_handler('df', true, $_tmp) : smarty_modifier_df($_tmp))); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->assign('df_source', $this->_tpl_vars['field']['Values']); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if (count($this->_tpl_vars['df_source']) == 1): ?><?php echo '<span>'; ?><?php $_from = $this->_tpl_vars['df_source']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['df_item']):
?><?php echo ''; ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['df_item']['pName']]; ?><?php echo ''; ?><?php break; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo '</span>'; ?><?php elseif (count($this->_tpl_vars['df_source']) > 1): ?><?php echo '<select name="f['; ?><?php echo $this->_tpl_vars['field']['Key']; ?><?php echo '][df]"><option value="0">'; ?><?php echo $this->_tpl_vars['lang']['unit']; ?><?php echo '</option>'; ?><?php $_from = $this->_tpl_vars['df_source']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['df_item']):
?><?php echo '<option value="'; ?><?php echo $this->_tpl_vars['df_item']['Key']; ?><?php echo '" '; ?><?php if ($this->_tpl_vars['df_item']['Key'] == $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['df']): ?><?php echo 'selected="selected"'; ?><?php endif; ?><?php echo '>'; ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['df_item']['pName']]; ?><?php echo '</option>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</select>'; ?><?php endif; ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['field']['Type'] == 'price'): ?><?php echo '<input '; ?><?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['from']): ?><?php echo 'value="'; ?><?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['from']; ?><?php echo '"'; ?><?php endif; ?><?php echo ' placeholder="'; ?><?php echo $this->_tpl_vars['lang']['from']; ?><?php echo '" class="numeric" type="text" name="f['; ?><?php echo $this->_tpl_vars['field']['Key']; ?><?php echo '][from]" maxlength="15" /><input '; ?><?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['to']): ?><?php echo 'value="'; ?><?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['to']; ?><?php echo '"'; ?><?php endif; ?><?php echo ' placeholder="'; ?><?php echo $this->_tpl_vars['lang']['to']; ?><?php echo '" class="numeric" type="text" name="f['; ?><?php echo $this->_tpl_vars['field']['Key']; ?><?php echo '][to]" maxlength="15" />'; ?><?php $this->assign('currency_suorce', ((is_array($_tmp='currency')) ? $this->_run_mod_handler('df', true, $_tmp) : smarty_modifier_df($_tmp))); ?><?php echo ''; ?><?php if (count($this->_tpl_vars['currency_suorce']) == 1): ?><?php echo '<span>'; ?><?php $_from = $this->_tpl_vars['currency_suorce']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['currency_item']):
?><?php echo ''; ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['currency_item']['pName']]; ?><?php echo ''; ?><?php break; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo '</span>'; ?><?php elseif (count($this->_tpl_vars['currency_suorce']) > 1): ?><?php echo '<select title="'; ?><?php echo $this->_tpl_vars['lang']['currency']; ?><?php echo '" name="f['; ?><?php echo $this->_tpl_vars['field']['Key']; ?><?php echo '][currency]"><option value="0">'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['any'])) ? $this->_run_mod_handler('replace', true, $_tmp, '-', '') : smarty_modifier_replace($_tmp, '-', '')); ?><?php echo '</option>'; ?><?php $_from = $this->_tpl_vars['currency_suorce']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['currency_item']):
?><?php echo '<option value="'; ?><?php echo $this->_tpl_vars['currency_item']['Key']; ?><?php echo '" '; ?><?php if ($this->_tpl_vars['currency_item']['Key'] == $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['currency']): ?><?php echo 'selected="selected"'; ?><?php endif; ?><?php echo '>'; ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['currency_item']['pName']]; ?><?php echo '</option>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</select>'; ?><?php endif; ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['field']['Type'] == 'bool'): ?><?php echo '<span class="custom-input"><label><input type="radio" value="1" name="f['; ?><?php echo $this->_tpl_vars['field']['Key']; ?><?php echo ']" '; ?><?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']] == '1'): ?><?php echo 'checked="checked"'; ?><?php endif; ?><?php echo ' />'; ?><?php echo $this->_tpl_vars['lang']['yes']; ?><?php echo '</label></span><span class="custom-input"><label><input type="radio" value="0" name="f['; ?><?php echo $this->_tpl_vars['field']['Key']; ?><?php echo ']" '; ?><?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']] == '0'): ?><?php echo 'checked="checked"'; ?><?php endif; ?><?php echo '/>'; ?><?php echo $this->_tpl_vars['lang']['no']; ?><?php echo '</label></span>'; ?><?php elseif ($this->_tpl_vars['field']['Type'] == 'select'): ?><?php echo ''; ?><?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'tplSearchFieldSelect'), $this);?><?php echo ''; ?><?php if ($this->_tpl_vars['field']['Condition'] == 'years'): ?><?php echo '<select name="f['; ?><?php echo $this->_tpl_vars['field']['Key']; ?><?php echo '][from]"><option value="0">'; ?><?php echo $this->_tpl_vars['lang']['from']; ?><?php echo '</option>'; ?><?php $_from = $this->_tpl_vars['field']['Values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['option']):
?><?php echo ''; ?><?php if ($this->_tpl_vars['field']['Condition']): ?><?php echo ''; ?><?php $this->assign('key', $this->_tpl_vars['option']['Key']); ?><?php echo ''; ?><?php endif; ?><?php echo '<option '; ?><?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['from']): ?><?php echo ''; ?><?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['from'] == $this->_tpl_vars['key']): ?><?php echo 'selected="selected"'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ' value="'; ?><?php if ($this->_tpl_vars['field']['Condition']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['option']['Key']; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['key']; ?><?php echo ''; ?><?php endif; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['option']['name']; ?><?php echo '</option>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</select><select name="f['; ?><?php echo $this->_tpl_vars['field']['Key']; ?><?php echo '][to]"><option value="0">'; ?><?php echo $this->_tpl_vars['lang']['to']; ?><?php echo '</option>'; ?><?php $_from = $this->_tpl_vars['field']['Values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['option']):
?><?php echo ''; ?><?php if ($this->_tpl_vars['field']['Condition']): ?><?php echo ''; ?><?php $this->assign('key', $this->_tpl_vars['option']['Key']); ?><?php echo ''; ?><?php endif; ?><?php echo '<option '; ?><?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['to']): ?><?php echo ''; ?><?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['to'] == $this->_tpl_vars['key']): ?><?php echo 'selected="selected"'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ' value="'; ?><?php if ($this->_tpl_vars['field']['Condition']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['option']['Key']; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['key']; ?><?php echo ''; ?><?php endif; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['option']['name']; ?><?php echo '</option>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</select>'; ?><?php elseif ($this->_tpl_vars['field']['Key'] == 'Category_ID' && $this->_tpl_vars['listing_types'][$this->_tpl_vars['multicat_listing_type']]['Search_multi_categories']): ?><?php echo '<input type="hidden"data-listing-type="'; ?><?php echo $this->_tpl_vars['listing_types'][$this->_tpl_vars['multicat_listing_type']]['Key']; ?><?php echo '"name="f[Category_ID]"value="'; ?><?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]; ?><?php echo '"/><input type="hidden"name="f[category_parent_ids]"value="'; ?><?php echo $this->_tpl_vars['fVal']['category_parent_ids']; ?><?php echo '" /><select class="multicat'; ?><?php if ($this->_tpl_vars['field']['Autocomplete']): ?><?php echo ' select-autocomplete'; ?><?php endif; ?><?php echo '" id="cascading-category-'; ?><?php echo $this->_tpl_vars['multicat_listing_type']; ?><?php echo '-'; ?><?php echo $this->_tpl_vars['post_form_key']; ?><?php echo '"><option value="0">'; ?><?php echo $this->_tpl_vars['lang']['any']; ?><?php echo '</option>'; ?><?php $_from = $this->_tpl_vars['field']['Values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['option']):
?><?php echo '<option '; ?><?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']] == $this->_tpl_vars['option']['ID']): ?><?php echo 'selected="selected"'; ?><?php endif; ?><?php echo ' value="'; ?><?php echo $this->_tpl_vars['option']['ID']; ?><?php echo '">'; ?><?php echo $this->_plugins['function']['phrase'][0][0]->getPhrase(array('key' => $this->_tpl_vars['option']['pName']), $this);?><?php echo '</option>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</select><script class="fl-js-dynamic">'; ?><?php echo '
                    flUtil.loadScript(rlConfig[\'tpl_base\'] + \'components/cascading-category/_cascading-category.js\', function(){
                        $(\'#cascading-category-'; ?><?php echo ''; ?><?php echo $this->_tpl_vars['multicat_listing_type']; ?><?php echo '-'; ?><?php echo $this->_tpl_vars['post_form_key']; ?><?php echo ''; ?><?php echo '\').cascadingCategory();
                    });
                    '; ?><?php echo '</script>'; ?><?php unset($this->_sections['multicat']);
$this->_sections['multicat']['name'] = 'multicat';
$this->_sections['multicat']['start'] = (int)1;
$this->_sections['multicat']['loop'] = is_array($_loop=$this->_tpl_vars['levels_number']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['multicat']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['multicat']['show'] = true;
$this->_sections['multicat']['max'] = $this->_sections['multicat']['loop'];
if ($this->_sections['multicat']['start'] < 0)
    $this->_sections['multicat']['start'] = max($this->_sections['multicat']['step'] > 0 ? 0 : -1, $this->_sections['multicat']['loop'] + $this->_sections['multicat']['start']);
else
    $this->_sections['multicat']['start'] = min($this->_sections['multicat']['start'], $this->_sections['multicat']['step'] > 0 ? $this->_sections['multicat']['loop'] : $this->_sections['multicat']['loop']-1);
if ($this->_sections['multicat']['show']) {
    $this->_sections['multicat']['total'] = min(ceil(($this->_sections['multicat']['step'] > 0 ? $this->_sections['multicat']['loop'] - $this->_sections['multicat']['start'] : $this->_sections['multicat']['start']+1)/abs($this->_sections['multicat']['step'])), $this->_sections['multicat']['max']);
    if ($this->_sections['multicat']['total'] == 0)
        $this->_sections['multicat']['show'] = false;
} else
    $this->_sections['multicat']['total'] = 0;
if ($this->_sections['multicat']['show']):

            for ($this->_sections['multicat']['index'] = $this->_sections['multicat']['start'], $this->_sections['multicat']['iteration'] = 1;
                 $this->_sections['multicat']['iteration'] <= $this->_sections['multicat']['total'];
                 $this->_sections['multicat']['index'] += $this->_sections['multicat']['step'], $this->_sections['multicat']['iteration']++):
$this->_sections['multicat']['rownum'] = $this->_sections['multicat']['iteration'];
$this->_sections['multicat']['index_prev'] = $this->_sections['multicat']['index'] - $this->_sections['multicat']['step'];
$this->_sections['multicat']['index_next'] = $this->_sections['multicat']['index'] + $this->_sections['multicat']['step'];
$this->_sections['multicat']['first']      = ($this->_sections['multicat']['iteration'] == 1);
$this->_sections['multicat']['last']       = ($this->_sections['multicat']['iteration'] == $this->_sections['multicat']['total']);
?><?php echo '</div></div></div><div class="search-form-cell '; ?><?php echo $this->_tpl_vars['cell_class']; ?><?php echo ' '; ?><?php echo $this->_tpl_vars['field']['Type']; ?><?php echo '"><div><span>'; ?><?php $this->assign('field_phrase_key', 'subcategory'); ?><?php echo ''; ?><?php if ($this->_tpl_vars['listing_types'][$this->_tpl_vars['multicat_listing_type']]['Search_multi_categories'] > 0 && $this->_tpl_vars['listing_types'][$this->_tpl_vars['multicat_listing_type']]['Search_multicat_phrases']): ?><?php echo ''; ?><?php $this->assign('field_phrase_key', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp='multilevel_category+')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['multicat_listing_type']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['multicat_listing_type'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '+') : smarty_modifier_cat($_tmp, '+')))) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_LANG_CODE') ? @RL_LANG_CODE : null)) : smarty_modifier_cat($_tmp, (defined('RL_LANG_CODE') ? @RL_LANG_CODE : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, '+') : smarty_modifier_cat($_tmp, '+')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_sections['multicat']['index']+1) : smarty_modifier_cat($_tmp, $this->_sections['multicat']['index']+1))); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['lang'][$this->_tpl_vars['field_phrase_key']]): ?><?php echo ''; ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['field_phrase_key']]; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['lang']['subcategory']; ?><?php echo ''; ?><?php endif; ?><?php echo '</span><div><select disabled="disabled" class="multicat disabled'; ?><?php if ($this->_tpl_vars['field']['Autocomplete']): ?><?php echo ' select-autocomplete'; ?><?php endif; ?><?php echo '"><option value="0">'; ?><?php echo $this->_tpl_vars['lang']['any']; ?><?php echo '</option></select>'; ?><?php endfor; endif; ?><?php echo ''; ?><?php else: ?><?php echo '<select name="f['; ?><?php echo $this->_tpl_vars['field']['Key']; ?><?php echo ']"'; ?><?php if ($this->_tpl_vars['field']['Autocomplete']): ?><?php echo ' class="select-autocomplete"'; ?><?php endif; ?><?php echo '><option value="0">'; ?><?php echo $this->_tpl_vars['lang']['any']; ?><?php echo '</option>'; ?><?php $_from = $this->_tpl_vars['field']['Values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['option']):
?><?php echo ''; ?><?php if ($this->_tpl_vars['field']['Key'] == 'Category_ID'): ?><?php echo ''; ?><?php $this->assign('key', $this->_tpl_vars['option']['ID']); ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['field']['Condition']): ?><?php echo ''; ?><?php $this->assign('key', $this->_tpl_vars['option']['Key']); ?><?php echo ''; ?><?php endif; ?><?php echo '<option'; ?><?php if (isset ( $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']] ) && $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']] == $this->_tpl_vars['key']): ?><?php echo ' selected="selected"'; ?><?php endif; ?><?php echo ' value="'; ?><?php echo $this->_tpl_vars['key']; ?><?php echo '">'; ?><?php echo $this->_plugins['function']['phrase'][0][0]->getPhrase(array('key' => $this->_tpl_vars['option']['pName']), $this);?><?php echo '</option>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</select>'; ?><?php endif; ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['field']['Type'] == 'radio'): ?><?php echo ''; ?><?php if (count($this->_tpl_vars['field']['Values']) < 3): ?><?php echo '<input type="hidden" value="0" name="f['; ?><?php echo $this->_tpl_vars['field']['Key']; ?><?php echo ']" />'; ?><?php echo smarty_function_math(array('assign' => 'pill_width','equation' => 'round(100/(count+1), 4)','count' => count($this->_tpl_vars['field']['Values'])), $this);?><?php echo '<span class="pills"><label title="'; ?><?php echo $this->_tpl_vars['lang']['all']; ?><?php echo '" style="width: '; ?><?php echo $this->_tpl_vars['pill_width']; ?><?php echo '%;"><input type="radio" value="" name="f['; ?><?php echo $this->_tpl_vars['field']['Key']; ?><?php echo ']" '; ?><?php if (! $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]): ?><?php echo 'checked="checked"'; ?><?php endif; ?><?php echo ' />'; ?><?php echo $this->_tpl_vars['lang']['all']; ?><?php echo '</label>'; ?><?php $_from = $this->_tpl_vars['field']['Values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['radioF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['radioF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['option']):
        $this->_foreach['radioF']['iteration']++;
?><?php echo ''; ?><?php if ($this->_tpl_vars['field']['Condition']): ?><?php echo ''; ?><?php $this->assign('key', $this->_tpl_vars['option']['Key']); ?><?php echo ''; ?><?php endif; ?><?php echo '<label title="'; ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['option']['pName']]; ?><?php echo '" style="width: '; ?><?php echo $this->_tpl_vars['pill_width']; ?><?php echo '%;"><input type="radio" value="'; ?><?php echo $this->_tpl_vars['key']; ?><?php echo '" name="f['; ?><?php echo $this->_tpl_vars['field']['Key']; ?><?php echo ']" '; ?><?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]): ?><?php echo ''; ?><?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']] == $this->_tpl_vars['key']): ?><?php echo 'checked="checked"'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ' />'; ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['option']['pName']]; ?><?php echo '</label>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</span>'; ?><?php else: ?><?php echo '<select name="f['; ?><?php echo $this->_tpl_vars['field']['Key']; ?><?php echo ']"><option value="" '; ?><?php if (! $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]): ?><?php echo 'selected="selected"'; ?><?php endif; ?><?php echo '>'; ?><?php echo $this->_tpl_vars['lang']['all']; ?><?php echo '</option>'; ?><?php $_from = $this->_tpl_vars['field']['Values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['radioF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['radioF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['option']):
        $this->_foreach['radioF']['iteration']++;
?><?php echo ''; ?><?php if ($this->_tpl_vars['field']['Condition']): ?><?php echo ''; ?><?php $this->assign('key', $this->_tpl_vars['option']['Key']); ?><?php echo ''; ?><?php endif; ?><?php echo '<option value="'; ?><?php echo $this->_tpl_vars['key']; ?><?php echo '" '; ?><?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]): ?><?php echo ''; ?><?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']] == $this->_tpl_vars['key']): ?><?php echo 'selected="selected"'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo '>'; ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['option']['pName']]; ?><?php echo '</option>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</select>'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo '</div></div></div>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '<!-- fields block (for search in horizontal box) end -->'; ?>
