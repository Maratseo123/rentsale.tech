<?php /* Smarty version 2.6.31, created on 2024-09-04 02:11:56
         compiled from /var/www/u2273289/data/www/rentsale.tech/plugins/autoPoster/admin/view/module_configs.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', '/var/www/u2273289/data/www/rentsale.tech/plugins/autoPoster/admin/view/module_configs.tpl', 17, false),)), $this); ?>
<!-- AutoPoster modules configuration area -->
<?php if ($this->_tpl_vars['configItem']['Type'] == 'text' || $this->_tpl_vars['configItem']['Type'] == 'textarea' || $this->_tpl_vars['configItem']['Type'] == 'bool' || $this->_tpl_vars['configItem']['Type'] == 'select' || $this->_tpl_vars['configItem']['Type'] == 'radio'): ?>
    <?php $this->assign('sPost', $_POST); ?>

    <tr <?php if ($this->_tpl_vars['configItem']['Key'] === 'ap_facebook_subject_id' && $this->_tpl_vars['config']['ap_facebook_post_to'] === 'to_page'): ?>class="hide"<?php endif; ?>>
        <td class="name"><?php echo $this->_tpl_vars['configItem']['name']; ?>
<?php if ($this->_tpl_vars['configItem']['validate']): ?><span class="red"> *</span><?php endif; ?></td>
        <td class="field">
            <div class="inner_margin">
                <?php if ($this->_tpl_vars['configItem']['Type'] == 'text'): ?>
                    <input name="post_config[<?php echo $this->_tpl_vars['configItem']['Key']; ?>
]" class="<?php if ($this->_tpl_vars['configItem']['Data_type'] == 'int'): ?>numeric<?php endif; ?>" type="text" value="<?php if (isset ( $this->_tpl_vars['sPost']['post_config'][$this->_tpl_vars['configItem']['Key']] )): ?><?php echo $this->_tpl_vars['sPost']['post_config'][$this->_tpl_vars['configItem']['Key']]; ?>
<?php else: ?><?php echo $this->_tpl_vars['configItem']['Default']; ?>
<?php endif; ?>" maxlength="255" />
                <?php elseif ($this->_tpl_vars['configItem']['Type'] == 'bool'): ?>
                    <label><input type="radio" <?php if ($this->_tpl_vars['configItem']['Default'] == 1): ?>checked="checked"<?php endif; ?> name="post_config[<?php echo $this->_tpl_vars['configItem']['Key']; ?>
]" value="1" /> <?php echo $this->_tpl_vars['lang']['enabled']; ?>
</label>
                    <label><input type="radio" <?php if ($this->_tpl_vars['configItem']['Default'] == 0): ?>checked="checked"<?php endif; ?> name="post_config[<?php echo $this->_tpl_vars['configItem']['Key']; ?>
]" value="0" /> <?php echo $this->_tpl_vars['lang']['disabled']; ?>
</label>
                <?php elseif ($this->_tpl_vars['configItem']['Type'] == 'textarea'): ?>
                    <textarea cols="5" rows="5" class="<?php if ($this->_tpl_vars['configItem']['Data_type'] == 'int'): ?>numeric<?php endif; ?>" name="post_config[<?php echo $this->_tpl_vars['configItem']['Key']; ?>
]"><?php if (isset ( $this->_tpl_vars['sPost']['post_config'][$this->_tpl_vars['configItem']['Key']] )): ?><?php echo $this->_tpl_vars['sPost']['post_config'][$this->_tpl_vars['configItem']['Key']]; ?>
<?php else: ?><?php echo $this->_tpl_vars['configItem']['Default']; ?>
<?php endif; ?></textarea>
                <?php elseif ($this->_tpl_vars['configItem']['Type'] == 'select'): ?>
                    <select <?php if ($this->_tpl_vars['configItem']['Key'] == 'timezone'): ?>class="w350"<?php endif; ?> style="width: 204px;" name="post_config[<?php echo $this->_tpl_vars['configItem']['Key']; ?>
]" <?php if (count($this->_tpl_vars['configItem']['Values']) < 2): ?> class="disabled" disabled="disabled"<?php endif; ?>>
                        <?php if (count($this->_tpl_vars['configItem']['Values']) > 1): ?>
                            <option value=""><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
                        <?php endif; ?>
                        <?php $_from = $this->_tpl_vars['configItem']['Values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sForeach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sForeach']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sValue']):
        $this->_foreach['sForeach']['iteration']++;
?>
                            <option  <?php if ($this->_tpl_vars['sValue']['Disabled']): ?>disabled="disabled"<?php endif; ?> value="<?php if (is_array ( $this->_tpl_vars['sValue'] )): ?><?php echo $this->_tpl_vars['sValue']['ID']; ?>
<?php else: ?><?php echo $this->_tpl_vars['sValue']; ?>
<?php endif; ?>" <?php if (is_array ( $this->_tpl_vars['sValue'] )): ?><?php if ($this->_tpl_vars['configItem']['Default'] == $this->_tpl_vars['sValue']['ID'] || $this->_tpl_vars['sPost']['post_config'][$this->_tpl_vars['configItem']['Key']] == $this->_tpl_vars['sValue']['ID']): ?>selected="selected"<?php endif; ?><?php else: ?><?php if ($this->_tpl_vars['sValue'] == $this->_tpl_vars['configItem']['Default']): ?>selected="selected"<?php endif; ?><?php endif; ?>><?php if (is_array ( $this->_tpl_vars['sValue'] )): ?><?php echo $this->_tpl_vars['sValue']['name']; ?>
<?php else: ?><?php echo $this->_tpl_vars['sValue']; ?>
<?php endif; ?></option>
                        <?php endforeach; endif; unset($_from); ?>
                    </select>
                <?php elseif ($this->_tpl_vars['configItem']['Type'] == 'radio'): ?>
                    <?php $this->assign('displayItem', $this->_tpl_vars['configItem']['Display']); ?>
                    <?php $_from = $this->_tpl_vars['configItem']['Values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['rForeach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['rForeach']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['rKey'] => $this->_tpl_vars['rValue']):
        $this->_foreach['rForeach']['iteration']++;
?>
                        <input id="radio_<?php echo $this->_tpl_vars['configItem']['Key']; ?>
_<?php echo $this->_tpl_vars['rKey']; ?>
" <?php if ($this->_tpl_vars['rValue'] == $this->_tpl_vars['configItem']['Default']): ?>checked="checked"<?php endif; ?> type="radio" value="<?php echo $this->_tpl_vars['rValue']; ?>
" name="post_config[<?php echo $this->_tpl_vars['configItem']['Key']; ?>
][value]" /><label for="radio_<?php echo $this->_tpl_vars['configItem']['Key']; ?>
_<?php echo $this->_tpl_vars['rKey']; ?>
"><?php echo $this->_tpl_vars['displayItem'][$this->_tpl_vars['rKey']]; ?>
</label>
                    <?php endforeach; endif; unset($_from); ?>
                <?php else: ?>
                    <?php echo $this->_tpl_vars['configItem']['Default']; ?>

                <?php endif; ?>

                <?php if ($this->_tpl_vars['configItem']['des'] != ''): ?>
                    <span style="<?php if ($this->_tpl_vars['configItem']['Type'] == 'textarea'): ?>line-height: 10px;<?php elseif ($this->_tpl_vars['configItem']['Type'] == 'bool'): ?>line-height: 14px;margin: 0 10px;<?php endif; ?>" class="settings_desc"><?php echo $this->_tpl_vars['configItem']['des']; ?>
</span>
                <?php endif; ?>
            </div>
        </td>
    </tr>
<?php endif; ?>
<!-- AutoPoster modules configuration area end -->