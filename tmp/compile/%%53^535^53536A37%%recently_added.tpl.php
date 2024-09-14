<?php /* Smarty version 2.6.31, created on 2023-12-18 01:50:49
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/recently_added.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/recently_added.tpl', 4, false),array('modifier', 'replace', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/recently_added.tpl', 7, false),array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/recently_added.tpl', 44, false),)), $this); ?>
<!-- listings tpl -->

<!-- tabs -->
<?php if (count($this->_tpl_vars['listing_types']) > 1): ?>
	<ul class="tabs tabs-hash">
		<?php $_from = $this->_tpl_vars['listing_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['tabsF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['tabsF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['lt_key'] => $this->_tpl_vars['tab']):
        $this->_foreach['tabsF']['iteration']++;
?>
			<li class="<?php if ($this->_tpl_vars['requested_type'] == $this->_tpl_vars['lt_key']): ?>active<?php endif; ?>" lang="<?php echo $this->_tpl_vars['lt_key']; ?>
" id="tab_<?php echo ((is_array($_tmp=$this->_tpl_vars['lt_key'])) ? $this->_run_mod_handler('replace', true, $_tmp, '_', '') : smarty_modifier_replace($_tmp, '_', '')); ?>
">
                <a href="#<?php echo ((is_array($_tmp=$this->_tpl_vars['lt_key'])) ? $this->_run_mod_handler('replace', true, $_tmp, '_', '') : smarty_modifier_replace($_tmp, '_', '')); ?>
" data-target="<?php echo ((is_array($_tmp=$this->_tpl_vars['lt_key'])) ? $this->_run_mod_handler('replace', true, $_tmp, '_', '') : smarty_modifier_replace($_tmp, '_', '')); ?>
"><?php echo $this->_tpl_vars['tab']['name']; ?>
</a>
            </li>
		<?php endforeach; endif; unset($_from); ?>
	</ul>
	
	<script class="fl-js-dynamic">
	<?php echo '
	
	$(document).ready(function(){

        $(\'.tab_area\').data(\'loaded\', false);

		$(\'ul.tabs li\').click(function(){
			var key = $(this).attr(\'lang\');
            var $area = $(\'#area_\'+key);

            if ( $area.find(\'#listings\').length == 0 && !$area.data(\'loaded\') ) {
                $area.data(\'loaded\', true);
				xajax_loadRecentlyAdded(key);
			}
		});
		
		if ( flynax.getHash() ) {

			$(\'ul.tabs li#tab_\' + flynax.getHash().replace(\'_tab\', \'\')).trigger(\'click\');
		}
	});
	
	'; ?>

	</script>
<?php endif; ?>
<!-- tabs end -->

<?php $_from = $this->_tpl_vars['listing_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['tabsF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['tabsF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['lt_key'] => $this->_tpl_vars['tab']):
        $this->_foreach['tabsF']['iteration']++;
?>
	<div class="tab_area<?php if ($this->_tpl_vars['requested_type'] != $this->_tpl_vars['lt_key']): ?> hide<?php endif; ?>" id="area_<?php echo ((is_array($_tmp=$this->_tpl_vars['lt_key'])) ? $this->_run_mod_handler('replace', true, $_tmp, '_', '') : smarty_modifier_replace($_tmp, '_', '')); ?>
">
		<?php if ($this->_tpl_vars['requested_type'] == $this->_tpl_vars['lt_key']): ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'recently.tpl') : smarty_modifier_cat($_tmp, 'recently.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php elseif ($this->_tpl_vars['requested_type'] != $this->_tpl_vars['lt_key']): ?>
			<span class="text-notice"><?php echo $this->_tpl_vars['lang']['loading']; ?>
</span>
		<?php endif; ?>
	</div>
<?php endforeach; endif; unset($_from); ?>

<!-- listings tpl end -->