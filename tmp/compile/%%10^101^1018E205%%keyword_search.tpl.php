<?php /* Smarty version 2.6.31, created on 2023-12-18 01:50:49
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/keyword_search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/keyword_search.tpl', 14, false),)), $this); ?>
<!-- keyword search block -->

<form class="kws-block" method="post" action="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pages']['search']; ?>
.html<?php else: ?>?page=<?php echo $this->_tpl_vars['pages']['search']; ?>
<?php endif; ?>">
	<input type="hidden" name="form" value="keyword_search" />
	<div class="two-inline">
		<div><input type="submit" name="search" value="<?php echo $this->_tpl_vars['lang']['go']; ?>
" /></div>
		<div style="padding-<?php echo $this->_tpl_vars['text_dir_rev']; ?>
: 10px;"><input type="text" maxlength="255" name="f[keyword_search]" <?php if ($_POST['f']['keyword_search']): ?>value="<?php echo $_POST['f']['keyword_search']; ?>
"<?php endif; ?> /></div>
	</div>

	<div class="options hide">
		<ul>
			<?php $this->assign('tmp', 3); ?>
			<?php unset($this->_sections['keyword_opts']);
$this->_sections['keyword_opts']['name'] = 'keyword_opts';
$this->_sections['keyword_opts']['loop'] = is_array($_loop=$this->_tpl_vars['tmp']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['keyword_opts']['max'] = (int)3;
$this->_sections['keyword_opts']['show'] = true;
if ($this->_sections['keyword_opts']['max'] < 0)
    $this->_sections['keyword_opts']['max'] = $this->_sections['keyword_opts']['loop'];
$this->_sections['keyword_opts']['step'] = 1;
$this->_sections['keyword_opts']['start'] = $this->_sections['keyword_opts']['step'] > 0 ? 0 : $this->_sections['keyword_opts']['loop']-1;
if ($this->_sections['keyword_opts']['show']) {
    $this->_sections['keyword_opts']['total'] = min(ceil(($this->_sections['keyword_opts']['step'] > 0 ? $this->_sections['keyword_opts']['loop'] - $this->_sections['keyword_opts']['start'] : $this->_sections['keyword_opts']['start']+1)/abs($this->_sections['keyword_opts']['step'])), $this->_sections['keyword_opts']['max']);
    if ($this->_sections['keyword_opts']['total'] == 0)
        $this->_sections['keyword_opts']['show'] = false;
} else
    $this->_sections['keyword_opts']['total'] = 0;
if ($this->_sections['keyword_opts']['show']):

            for ($this->_sections['keyword_opts']['index'] = $this->_sections['keyword_opts']['start'], $this->_sections['keyword_opts']['iteration'] = 1;
                 $this->_sections['keyword_opts']['iteration'] <= $this->_sections['keyword_opts']['total'];
                 $this->_sections['keyword_opts']['index'] += $this->_sections['keyword_opts']['step'], $this->_sections['keyword_opts']['iteration']++):
$this->_sections['keyword_opts']['rownum'] = $this->_sections['keyword_opts']['iteration'];
$this->_sections['keyword_opts']['index_prev'] = $this->_sections['keyword_opts']['index'] - $this->_sections['keyword_opts']['step'];
$this->_sections['keyword_opts']['index_next'] = $this->_sections['keyword_opts']['index'] + $this->_sections['keyword_opts']['step'];
$this->_sections['keyword_opts']['first']      = ($this->_sections['keyword_opts']['iteration'] == 1);
$this->_sections['keyword_opts']['last']       = ($this->_sections['keyword_opts']['iteration'] == $this->_sections['keyword_opts']['total']);
?>
				<li><label><input <?php if ($this->_tpl_vars['fVal']['keyword_search_type'] || $this->_tpl_vars['keyword_mode']): ?><?php if ($this->_sections['keyword_opts']['iteration'] == $this->_tpl_vars['fVal']['keyword_search_type'] || $this->_tpl_vars['keyword_mode'] == $this->_sections['keyword_opts']['iteration']): ?>checked="checked"<?php endif; ?><?php else: ?><?php if ($this->_sections['keyword_opts']['iteration'] == $this->_tpl_vars['config']['keyword_search_type']): ?>checked="checked"<?php endif; ?><?php endif; ?> value="<?php echo $this->_sections['keyword_opts']['iteration']; ?>
" type="radio" name="f[keyword_search_type]" /> <?php $this->assign('ph', ((is_array($_tmp='keyword_search_opt')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_sections['keyword_opts']['iteration']) : smarty_modifier_cat($_tmp, $this->_sections['keyword_opts']['iteration']))); ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['ph']]; ?>
</label></li>
			<?php endfor; endif; ?>
		</ul>
	</div>

	<a id="refine_keyword_opt" href="javascript:void(0)"><?php echo $this->_tpl_vars['lang']['advanced_options']; ?>
</a>
</form>

<!-- keyword search block -->