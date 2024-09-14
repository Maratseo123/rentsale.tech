<?php /* Smarty version 2.6.31, created on 2024-09-04 20:35:11
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/refine_search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/refine_search.tpl', 12, false),)), $this); ?>
<!-- refine search block tpl -->

<span class="expander"></span>

<form method="<?php echo $this->_tpl_vars['listing_type']['Submit_method']; ?>
" action="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
<?php if ($this->_tpl_vars['category']['ID'] > 0): ?>/<?php echo $this->_tpl_vars['category']['Path']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['advanced_search']): ?>/<?php echo $this->_tpl_vars['advanced_search_url']; ?>
<?php endif; ?>/<?php echo $this->_tpl_vars['search_results_url']; ?>
.html<?php else: ?>?page=<?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
&<?php echo $this->_tpl_vars['search_results_url']; ?>
<?php if ($this->_tpl_vars['category']['ID'] > 0): ?>&category=<?php echo $this->_tpl_vars['category']['ID']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['advanced_search']): ?>&<?php echo $this->_tpl_vars['advanced_search_url']; ?>
<?php endif; ?><?php endif; ?>">
	<input type="hidden" name="action" value="search" />

    <?php if ($_REQUEST['post_form_key']): ?>
        <?php $this->assign('post_form_key', $_REQUEST['post_form_key']); ?>
    <?php else: ?>
    	<?php if ($this->_tpl_vars['listing_type']['Advanced_search']): ?>
    		<?php $this->assign('post_form_key', ((is_array($_tmp=$this->_tpl_vars['listing_type']['Key'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_advanced') : smarty_modifier_cat($_tmp, '_advanced'))); ?>
    	<?php else: ?>
    		<?php $this->assign('post_form_key', ((is_array($_tmp=$this->_tpl_vars['listing_type']['Key'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_quick') : smarty_modifier_cat($_tmp, '_quick'))); ?>
    	<?php endif; ?>
    <?php endif; ?>
	<input type="hidden" name="post_form_key" value="<?php echo $this->_tpl_vars['post_form_key']; ?>
" />
	
	<?php $_from = $this->_tpl_vars['refine_search_form']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['group']):
?><?php echo ''; ?><?php if ($this->_tpl_vars['group']['Group_ID']): ?><?php echo ''; ?><?php if ($this->_tpl_vars['group']['Fields'] && $this->_tpl_vars['group']['Display']): ?><?php echo ''; ?><?php $this->assign('hide', false); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->assign('hide', true); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_header.tpl') : smarty_modifier_cat($_tmp, 'fieldset_header.tpl')), 'smarty_include_vars' => array('id' => $this->_tpl_vars['group']['Group_ID'],'name' => $this->_tpl_vars['lang'][$this->_tpl_vars['group']['pName']])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php if ($this->_tpl_vars['group']['Fields']): ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fields_search_box.tpl') : smarty_modifier_cat($_tmp, 'fields_search_box.tpl')), 'smarty_include_vars' => array('fields' => $this->_tpl_vars['group']['Fields'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['lang']['no_items_in_group']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_footer.tpl') : smarty_modifier_cat($_tmp, 'fieldset_footer.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fields_search_box.tpl') : smarty_modifier_cat($_tmp, 'fields_search_box.tpl')), 'smarty_include_vars' => array('fields' => $this->_tpl_vars['group']['Fields'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
<?php endforeach; endif; unset($_from); ?><?php echo '<!-- sorting -->'; ?><?php if ($this->_tpl_vars['fields_list']): ?><?php echo '<div class="search-item two-fields"><div class="field">'; ?><?php echo $this->_tpl_vars['lang']['sort_listings_by']; ?><?php echo '</div><select name="f[sort_by]"><option value="0">'; ?><?php echo $this->_tpl_vars['lang']['select']; ?><?php echo '</option>'; ?><?php $_from = $this->_tpl_vars['fields_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?><?php echo ''; ?><?php if ($this->_tpl_vars['field']['Type'] != 'checkbox'): ?><?php echo '<option value="'; ?><?php echo $this->_tpl_vars['field']['Key']; ?><?php echo '" '; ?><?php if ($_REQUEST['f']['sort_by'] == $this->_tpl_vars['field']['Key']): ?><?php echo 'selected="selected"'; ?><?php endif; ?><?php echo '>'; ?><?php echo $this->_tpl_vars['field']['name']; ?><?php echo '</option>'; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo '</select><select name="f[sort_type]"><option value="asc">'; ?><?php echo $this->_tpl_vars['lang']['ascending']; ?><?php echo '</option><option value="desc" '; ?><?php if ($_REQUEST['f']['sort_type'] == 'desc'): ?><?php echo 'selected="selected"'; ?><?php endif; ?><?php echo '>'; ?><?php echo $this->_tpl_vars['lang']['descending']; ?><?php echo '</option></select></div>'; ?><?php endif; ?><?php echo '<!-- sorting end -->'; ?>


	<div class="search-footer clearfix">
		<?php if ($this->_tpl_vars['group']['With_picture']): ?>
		<div class="search-item">
			<div class="field"></div>
			<label><input <?php if ($_REQUEST['f']['with_photo']): ?>checked="checked"<?php endif; ?> type="checkbox" name="f[with_photo]" value="true" /> <?php echo $this->_tpl_vars['lang']['with_photos_only']; ?>
</label>
		</div>
		<?php endif; ?>

		<div class="align-button"><input class="search_field_item button" type="submit" name="search" value="<?php echo $this->_tpl_vars['lang']['search']; ?>
" /></div>
	</div>
</form>	

<?php if ($this->_tpl_vars['search_results']): ?>
	<span class="<?php echo $this->_tpl_vars['listing_type']['Key']; ?>
" id="save_search"><span class="link" title="<?php echo $this->_tpl_vars['lang']['save_search_hint']; ?>
"><?php echo $this->_tpl_vars['lang']['save_search']; ?>
</span></span>
<?php endif; ?>

<!-- refine search block tpl end -->