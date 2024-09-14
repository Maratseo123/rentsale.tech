<?php /* Smarty version 2.6.31, created on 2024-04-30 03:06:27
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/components/category-selector/_category-selector.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/components/category-selector/_category-selector.tpl', 3, false),array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/components/category-selector/_category-selector.tpl', 39, false),)), $this); ?>
<!-- Category dropdowns -->

<ul class="select-type<?php if (! $this->_tpl_vars['dropdown_data'] || count($this->_tpl_vars['dropdown_data']) <= 1): ?> hide<?php endif; ?>">
    <?php $_from = $this->_tpl_vars['dropdown_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sectionsF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sectionsF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['dropdown_item']):
        $this->_foreach['sectionsF']['iteration']++;
?><?php echo ''; ?><?php if ($this->_tpl_vars['dropdown_item']['Admin_only']): ?><?php echo ''; ?><?php continue; ?><?php echo ''; ?><?php endif; ?><?php echo '<li><label><input type="radio"name="section'; ?><?php if ($this->_tpl_vars['section_postfix']): ?><?php echo '_'; ?><?php echo $this->_tpl_vars['section_postfix']; ?><?php echo ''; ?><?php endif; ?><?php echo '"value="'; ?><?php echo $this->_tpl_vars['dropdown_item']['Key']; ?><?php echo '"data-path="'; ?><?php echo $this->_tpl_vars['pages'][$this->_tpl_vars['dropdown_item']['Page_key']]; ?><?php echo '"data-no-user-category="'; ?><?php if ($this->_tpl_vars['no_user_category'] || ! $this->_tpl_vars['dropdown_item']['Cat_custom_adding']): ?><?php echo 'true'; ?><?php else: ?><?php echo 'false'; ?><?php endif; ?><?php echo '"'; ?><?php if (isset ( $this->_tpl_vars['dropdown_item']['Single_category'] )): ?><?php echo 'data-single-category-id="'; ?><?php echo $this->_tpl_vars['dropdown_item']['Single_category']['ID']; ?><?php echo '"data-single-category-path="'; ?><?php echo $this->_tpl_vars['dropdown_item']['Single_category']['Path']; ?><?php echo '"data-single-category-name="'; ?><?php echo $this->_tpl_vars['dropdown_item']['Single_category']['name']; ?><?php echo '"'; ?><?php endif; ?><?php echo '/> '; ?><?php echo $this->_tpl_vars['dropdown_item']['name']; ?><?php echo '</label></li>'; ?>
<?php endforeach; endif; unset($_from); ?>
</ul>

<ul class="select-category">
    <?php $_from = $this->_tpl_vars['dropdown_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sectionsF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sectionsF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['dropdown_item']):
        $this->_foreach['sectionsF']['iteration']++;
?><?php echo ''; ?><?php if ($this->_tpl_vars['dropdown_item']['Admin_only'] || isset ( $this->_tpl_vars['dropdown_item']['Single_category'] )): ?><?php echo ''; ?><?php continue; ?><?php echo ''; ?><?php endif; ?><?php echo '<li data-type-key="'; ?><?php echo $this->_tpl_vars['dropdown_item']['Key']; ?><?php echo '" class="row'; ?><?php if (( ($this->_foreach['sectionsF']['iteration'] <= 1) && ! $this->_tpl_vars['addListing']->listingType ) || ( $this->_tpl_vars['addListing']->listingType && $this->_tpl_vars['addListing']->listingType['Key'] == $this->_tpl_vars['dropdown_item']['Key'] )): ?><?php echo ' show'; ?><?php endif; ?><?php echo '"><div class="col-md-4"><select size="10" class="tmp" data-no-data-phrase="'; ?><?php echo $this->_tpl_vars['lang']['no_items_in_sections']; ?><?php echo '"><option value="0" class="locked">'; ?><?php echo $this->_tpl_vars['lang']['loading']; ?><?php echo '</option></select></div></li>'; ?>
<?php endforeach; endif; unset($_from); ?>
</ul>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'category_level_select.tpl') : smarty_modifier_cat($_tmp, 'category_level_select.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!-- Category dropdowns end -->