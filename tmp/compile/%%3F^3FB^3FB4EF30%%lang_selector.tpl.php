<?php /* Smarty version 2.6.31, created on 2023-12-18 01:50:46
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/lang_selector.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/lang_selector.tpl', 3, false),array('modifier', 'ucfirst', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/lang_selector.tpl', 5, false),array('modifier', 'lower', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/lang_selector.tpl', 9, false),array('modifier', 'replace', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/lang_selector.tpl', 12, false),)), $this); ?>
<!-- languages selector -->

<?php if (count($this->_tpl_vars['languages']) > 1): ?>
	<span class="circle" id="lang-selector">
		<span class="default" accesskey="<?php echo ((is_array($_tmp=(defined('RL_LANG_CODE') ? @RL_LANG_CODE : null))) ? $this->_run_mod_handler('ucfirst', true, $_tmp) : ucfirst($_tmp)); ?>
"><?php echo $this->_tpl_vars['languages'][(defined('RL_LANG_CODE') ? @RL_LANG_CODE : null)]['Code']; ?>
</span>
		<span class="content hide">
			<ul class="lang-selector">
				<?php $_from = $this->_tpl_vars['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lang_item']):
?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['lang_item']['Code'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)) == ((is_array($_tmp=(defined('RL_LANG_CODE') ? @RL_LANG_CODE : null))) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp))): ?><?php continue; ?><?php endif; ?>

					<li>
						<a data-code="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang_item']['Code'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
" title="<?php echo $this->_tpl_vars['lang_item']['name']; ?>
" href="<?php if ($this->_tpl_vars['hreflang'][$this->_tpl_vars['lang_item']['Code']]): ?><?php echo $this->_tpl_vars['hreflang'][$this->_tpl_vars['lang_item']['Code']]; ?>
<?php else: ?><?php if ($this->_tpl_vars['lang_url_home']): ?><?php echo $this->_tpl_vars['lang_url_home']; ?>
<?php else: ?><?php echo (defined('RL_URL_HOME') ? @RL_URL_HOME : null); ?>
<?php endif; ?><?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['lang_item']['dCode']; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['pageLink'])) ? $this->_run_mod_handler('replace', true, $_tmp, '&', '&amp;') : smarty_modifier_replace($_tmp, '&', '&amp;')); ?>
<?php else: ?><?php echo $this->_tpl_vars['pageLink']; ?>
language=<?php echo $this->_tpl_vars['lang_item']['Code']; ?>
<?php endif; ?><?php endif; ?>"><?php echo $this->_tpl_vars['lang_item']['name']; ?>
</a>
					</li>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
		</span>
	</span>
<?php endif; ?>

<!-- languages selector end -->