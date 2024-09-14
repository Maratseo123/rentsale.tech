<?php /* Smarty version 2.6.31, created on 2023-12-10 02:02:08
         compiled from blocks/delete_preparing_category.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'blocks/delete_preparing_category.tpl', 4, false),array('modifier', 'cat', 'blocks/delete_preparing_category.tpl', 33, false),)), $this); ?>
<!-- category deleting -->

<?php $this->assign('replace', ('{')."category".('}')); ?>
<div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['delete_category_conditions'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['replace'], $this->_tpl_vars['category']['name']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['replace'], $this->_tpl_vars['category']['name'])); ?>
</div>

<table class="list" style="margin: 0 0 15px 10px;">
<?php if (! empty ( $this->_tpl_vars['delete_info']['categories'] )): ?>
    <tr>
        <td class="name" style="width: 80px"><?php echo $this->_tpl_vars['lang']['subcategories']; ?>
:</td>
        <td class="value"><b><?php echo $this->_tpl_vars['delete_info']['categories']; ?>
</b></td>
    </tr>
<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['delete_info']['listings'] )): ?>
    <tr>
        <td class="name" style="width: 80px"><?php echo $this->_tpl_vars['lang']['listings']; ?>
:</td>
        <td class="value"><b><?php echo $this->_tpl_vars['delete_info']['listings']; ?>
</b></td>
    </tr>
<?php endif; ?>
</table>

<?php echo $this->_tpl_vars['lang']['choose_removal_method']; ?>

<div style="margin: 5px 10px">
    <div style="padding: 2px 0;"><label><input type="radio" value="delete" name="del_method" onclick="$('div#replace_content:visible').slideUp();$('#top_buttons').slideDown();$('#bottom_buttons').slideUp();" /> <?php if ($this->_tpl_vars['config']['trash']): ?><?php echo $this->_tpl_vars['lang']['full_category_drop']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['full_category_delete']; ?>
<?php endif; ?></label></div>
    <div style="padding: 2px 0;"><label><input type="radio" value="replace" name="del_method" /> <?php echo $this->_tpl_vars['lang']['replace_parent_category']; ?>
</label></div>
    
    <div style="margin: 5px 0;">
        <div id="top_buttons">
            <input class="simple" type="button" value="<?php echo $this->_tpl_vars['lang']['go']; ?>
" onclick="delete_chooser($('input[name=del_method]:checked').val(), '<?php echo $this->_tpl_vars['category']['Key']; ?>
', '<?php echo $this->_tpl_vars['category']['name']; ?>
')" />
            <a class="cancel" href="javascript:void(0)" onclick="$('#delete_block').fadeOut()"><?php echo $this->_tpl_vars['lang']['cancel']; ?>
</a>
        </div>
        
        <div id="replace_content" style="margin: 10px 0;" class="hide">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'category_selector.tpl') : smarty_modifier_cat($_tmp, 'category_selector.tpl')), 'smarty_include_vars' => array('button' => $this->_tpl_vars['lang']['go'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div>
    </div>
</div>

<!-- category deleting end -->