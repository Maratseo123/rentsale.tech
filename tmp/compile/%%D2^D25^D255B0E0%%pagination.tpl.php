<?php /* Smarty version 2.6.31, created on 2024-04-26 02:18:34
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/components/pagination/pagination.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/components/pagination/pagination.tpl', 6, false),array('modifier', 'count_characters', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/components/pagination/pagination.tpl', 11, false),)), $this); ?>
<!-- pagination tpl -->

<ul class="pagination">
    <?php if ($this->_tpl_vars['pagination']['current'] > 1): ?>
        <li class="navigator ls">
            <a title="<?php echo $this->_tpl_vars['lang']['prev_page']; ?>
" class="button" href="<?php if ($this->_tpl_vars['pagination']['current'] == 2): ?><?php echo $this->_tpl_vars['pagination']['first_url']; ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['pagination']['tpl_url'])) ? $this->_run_mod_handler('replace', true, $_tmp, '[pg]', $this->_tpl_vars['pagination']['current']-1) : smarty_modifier_replace($_tmp, '[pg]', $this->_tpl_vars['pagination']['current']-1)); ?>
<?php endif; ?>">&lsaquo;</a>
        </li>
    <?php endif; ?>
    <li class="transit">
        <span><?php echo $this->_tpl_vars['lang']['page']; ?>
 </span>
        <input maxlength="<?php echo smarty_modifier_count_characters($this->_tpl_vars['pagination']['pages']); ?>
" type="text" size="<?php echo smarty_modifier_count_characters($this->_tpl_vars['pagination']['pages']); ?>
" value="<?php echo $this->_tpl_vars['pagination']['current']; ?>
">
        <input type="hidden" name="stats" value="<?php echo $this->_tpl_vars['pagination']['current']; ?>
|<?php echo $this->_tpl_vars['pagination']['pages']; ?>
">
        <input type="hidden" name="pattern" value="<?php echo $this->_tpl_vars['pagination']['tpl_url']; ?>
">
        <input type="hidden" name="first" value="<?php echo $this->_tpl_vars['pagination']['first_url']; ?>
">
        <span> <?php echo $this->_tpl_vars['lang']['of']; ?>
 <?php echo $this->_tpl_vars['pagination']['pages']; ?>
</span>
    </li>

    <?php if ($this->_tpl_vars['pagination']['current'] < $this->_tpl_vars['pagination']['pages']): ?>
        <li class="navigator rs">
            <a title="<?php echo $this->_tpl_vars['lang']['next_page']; ?>
" class="button" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['pagination']['tpl_url'])) ? $this->_run_mod_handler('replace', true, $_tmp, '[pg]', $this->_tpl_vars['pagination']['current']+1) : smarty_modifier_replace($_tmp, '[pg]', $this->_tpl_vars['pagination']['current']+1)); ?>
">&rsaquo;</a>
        </li>
    <?php endif; ?>
</ul>

<script class="fl-js-dynamic"><?php echo '
    flUtil.loadScript(rlConfig.tpl_base + \'components/pagination/_pagination.js\', function() {
        flPaginationHandler($(\'ul.pagination\'));
    });
'; ?>
</script>

<!-- pagination tpl end -->