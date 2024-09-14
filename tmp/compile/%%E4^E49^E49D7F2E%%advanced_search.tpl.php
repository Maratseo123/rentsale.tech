<?php /* Smarty version 2.6.31, created on 2024-05-03 22:37:39
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/advanced_search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/advanced_search.tpl', 6, false),)), $this); ?>
<!-- advanced search form -->

<div class="content-padding">
	<form class="advanced-search-form" method="<?php echo $this->_tpl_vars['listing_type']['Submit_method']; ?>
" action="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
/<?php echo $this->_tpl_vars['advanced_search_url']; ?>
/<?php echo $this->_tpl_vars['search_results_url']; ?>
.html<?php else: ?>?page=<?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
&amp;<?php echo $this->_tpl_vars['search_results_url']; ?>
&amp;<?php echo $this->_tpl_vars['advanced_search_url']; ?>
<?php endif; ?>">
		<input type="hidden" name="action" value="search" />
		<?php $this->assign('post_form_key', ((is_array($_tmp=$this->_tpl_vars['listing_type']['Key'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_advanced') : smarty_modifier_cat($_tmp, '_advanced'))); ?>
		<input type="hidden" name="post_form_key" value="<?php echo $this->_tpl_vars['post_form_key']; ?>
" />
		
		<?php $_from = $this->_tpl_vars['search_form']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['group']):
?>
			<?php if ($this->_tpl_vars['group']['Group_ID']): ?>
				<?php if ($this->_tpl_vars['group']['Fields'] && $this->_tpl_vars['group']['Display']): ?>
					<?php $this->assign('hide', false); ?>
				<?php else: ?>
					<?php $this->assign('hide', true); ?>
				<?php endif; ?>
				
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_header.tpl') : smarty_modifier_cat($_tmp, 'fieldset_header.tpl')), 'smarty_include_vars' => array('id' => $this->_tpl_vars['group']['ID'],'name' => $this->_tpl_vars['lang'][$this->_tpl_vars['group']['pName']])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php if ($this->_tpl_vars['group']['Fields']): ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fields_search.tpl') : smarty_modifier_cat($_tmp, 'fields_search.tpl')), 'smarty_include_vars' => array('fields' => $this->_tpl_vars['group']['Fields'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php else: ?>
					<div class="text-notice"><?php echo $this->_tpl_vars['lang']['no_items_in_group']; ?>
</div>
				<?php endif; ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_footer.tpl') : smarty_modifier_cat($_tmp, 'fieldset_footer.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php else: ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fields_search.tpl') : smarty_modifier_cat($_tmp, 'fields_search.tpl')), 'smarty_include_vars' => array('fields' => $this->_tpl_vars['group']['Fields'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
		
		<!-- sorting -->
		<div class="submit-cell"><?php echo '<div class="name">'; ?><?php echo $this->_tpl_vars['lang']['sort_listings_by']; ?><?php echo '</div><div class="field search-item two-fields"><select name="f[sort_by]"><option value="0">'; ?><?php echo $this->_tpl_vars['lang']['select']; ?><?php echo '</option>'; ?><?php $_from = $this->_tpl_vars['fields_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?><?php echo ''; ?><?php if ($this->_tpl_vars['field']['Type'] != 'checkbox'): ?><?php echo '<option value="'; ?><?php echo $this->_tpl_vars['field']['Key']; ?><?php echo '" '; ?><?php if ($_REQUEST['f']['sort_by'] == $this->_tpl_vars['field']['Key']): ?><?php echo 'selected="selected"'; ?><?php endif; ?><?php echo '>'; ?><?php echo $this->_tpl_vars['field']['name']; ?><?php echo '</option>'; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo '</select><select name="f[sort_type]"><option value="asc">'; ?><?php echo $this->_tpl_vars['lang']['ascending']; ?><?php echo '</option><option value="desc" '; ?><?php if ($_REQUEST['f']['sort_type'] == 'desc'): ?><?php echo 'selected="selected"'; ?><?php endif; ?><?php echo '>'; ?><?php echo $this->_tpl_vars['lang']['descending']; ?><?php echo '</option></select></div>'; ?>
</div>
		<!-- sorting end -->
		
        <?php if ($this->_tpl_vars['group']['With_picture']): ?>
    		<div class="submit-cell custom-padding">
    			<div class="name"></div>
    			<div class="field">
    				<label><input style="margin-<?php echo $this->_tpl_vars['text_dir']; ?>
: 20px;" type="checkbox" name="f[with_photo]" value="true" /> <?php echo $this->_tpl_vars['lang']['with_photos_only']; ?>
</label>
    			</div>
    		</div>
        <?php endif; ?>

		<div class="submit-cell">
			<div class="name"></div>
			<div class="field search-button">
				<input type="submit" name="search" value="<?php echo $this->_tpl_vars['lang']['search']; ?>
" />
				<a title="<?php echo $this->_tpl_vars['lang']['quick_search']; ?>
" href="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pages']['search']; ?>
.html<?php else: ?>?page=<?php echo $this->_tpl_vars['pages']['search']; ?>
<?php endif; ?>#<?php echo $this->_tpl_vars['listing_type']['Key']; ?>
"><?php echo $this->_tpl_vars['lang']['quick_search']; ?>
</a>
			</div>
		</div>
	</form>
</div>

<!-- advanced search form end -->