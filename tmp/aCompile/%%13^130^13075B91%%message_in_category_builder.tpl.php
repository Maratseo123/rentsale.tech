<?php /* Smarty version 2.6.31, created on 2024-09-04 02:23:08
         compiled from /var/www/u2273289/data/www/rentsale.tech/plugins/autoPoster/admin/view/message_in_category_builder.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', '/var/www/u2273289/data/www/rentsale.tech/plugins/autoPoster/admin/view/message_in_category_builder.tpl', 10, false),array('modifier', 'replace', '/var/www/u2273289/data/www/rentsale.tech/plugins/autoPoster/admin/view/message_in_category_builder.tpl', 20, false),)), $this); ?>
<!-- AutoPoster message builder -->
<tr class="">
    <td class="divider_line" colspan="3">
        <div class="inner"><?php echo $this->_tpl_vars['lang']['ap_autoposter_settings']; ?>
</div>
    </td>
</tr>
<tr>
    <td class="name"><?php echo $this->_tpl_vars['lang']['ap_message_in_posts']; ?>
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
            <input type="text" name="facebook_message[<?php echo $this->_tpl_vars['language']['Code']; ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['sPost']['facebook_message'][$this->_tpl_vars['language']['Code']])) ? $this->_run_mod_handler('replace', true, $_tmp, '"', '&quot;') : smarty_modifier_replace($_tmp, '"', '&quot;')); ?>
" class="w350" maxlength="255" />
            <span class="field_description"><?php echo $this->_tpl_vars['lang']['listing_meta_title_des']; ?>
<?php if (count($this->_tpl_vars['allLangs']) > 1): ?> (<b><?php echo $this->_tpl_vars['language']['name']; ?>
</b>)<?php endif; ?></span>
            <div>
                <select>
                    <option value="0"><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
                    <?php $_from = $this->_tpl_vars['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
                        <option value="<?php echo $this->_tpl_vars['field']['Key']; ?>
"><?php echo $this->_tpl_vars['field']['name']; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
                <input type="button" class="add_variable_button" value="<?php echo $this->_tpl_vars['lang']['add']; ?>
"/>
            </div>
            <?php if (count($this->_tpl_vars['allLangs']) > 1): ?></div><?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
    </td>
</tr>
<!-- AutoPoster message builder end -->