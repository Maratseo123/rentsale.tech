<?php /* Smarty version 2.6.31, created on 2024-05-02 03:36:36
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/search.tpl', 5, false),array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/search.tpl', 7, false),array('modifier', 'replace', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/search.tpl', 8, false),array('modifier', 'regex_replace', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/search.tpl', 95, false),array('function', 'phrase', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/search.tpl', 15, false),array('function', 'paging', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/search.tpl', 84, false),array('function', 'pageUrl', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/search.tpl', 93, false),)), $this); ?>
<!-- search tpl -->

<!-- tabs -->
<ul class="tabs tabs-hash">
    <?php if (is_array ( $this->_tpl_vars['search_forms'] ) && count($this->_tpl_vars['search_forms']) > 0): ?>
        <?php $_from = $this->_tpl_vars['search_forms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sformsF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sformsF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sf_key'] => $this->_tpl_vars['search_form']):
        $this->_foreach['sformsF']['iteration']++;
?>
            <?php $this->assign('tab_phrase', ((is_array($_tmp='listing_types+name+')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['listing_types'][$this->_tpl_vars['sf_key']]['Key']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['listing_types'][$this->_tpl_vars['sf_key']]['Key']))); ?>
            <li <?php if (($this->_foreach['sformsF']['iteration'] <= 1)): ?>class="<?php if (($this->_foreach['sformsF']['iteration'] <= 1) && ! $this->_tpl_vars['keyword_search']): ?>active<?php endif; ?>"<?php endif; ?> id="tab_<?php echo ((is_array($_tmp=$this->_tpl_vars['sf_key'])) ? $this->_run_mod_handler('replace', true, $_tmp, '_', '') : smarty_modifier_replace($_tmp, '_', '')); ?>
">
                <a href="#<?php echo $this->_tpl_vars['sf_key']; ?>
" data-target="<?php echo ((is_array($_tmp=$this->_tpl_vars['sf_key'])) ? $this->_run_mod_handler('replace', true, $_tmp, '_', '') : smarty_modifier_replace($_tmp, '_', '')); ?>
"><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['tab_phrase']]; ?>
</a>
            </li>
        <?php endforeach; endif; unset($_from); ?>
    <?php endif; ?>

    <li <?php if ($this->_tpl_vars['keyword_search'] || ! $this->_tpl_vars['search_forms']): ?>class="active"<?php endif; ?> id="tab_keyword">
        <a href="#keyword" data-target="keyword"><?php echo $this->_plugins['function']['phrase'][0][0]->getPhrase(array('key' => 'keyword_search'), $this);?>
</a>
    </li>
</ul>
<!-- tabs end -->

<div class="content-padding">
    <?php $_from = $this->_tpl_vars['search_forms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sformsF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sformsF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sf_key'] => $this->_tpl_vars['search_form']):
        $this->_foreach['sformsF']['iteration']++;
?>
        <?php $this->assign('spage_key', $this->_tpl_vars['listing_types'][$this->_tpl_vars['sf_key']]['Page_key']); ?>

        <div id="area_<?php echo ((is_array($_tmp=$this->_tpl_vars['sf_key'])) ? $this->_run_mod_handler('replace', true, $_tmp, '_', '') : smarty_modifier_replace($_tmp, '_', '')); ?>
" class="tab_area<?php if (! ($this->_foreach['sformsF']['iteration'] <= 1) || $this->_tpl_vars['keyword_search']): ?> hide<?php endif; ?>">
            <form method="<?php echo $this->_tpl_vars['listing_types'][$this->_tpl_vars['sf_key']]['Submit_method']; ?>
" action="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pages'][$this->_tpl_vars['spage_key']]; ?>
/<?php echo $this->_tpl_vars['search_results_url']; ?>
.html<?php else: ?>?page=<?php echo $this->_tpl_vars['pages'][$this->_tpl_vars['spage_key']]; ?>
&amp;<?php echo $this->_tpl_vars['search_results_url']; ?>
<?php endif; ?>">
                <input type="hidden" name="action" value="search" />
                <?php $this->assign('post_form_key', ((is_array($_tmp=$this->_tpl_vars['sf_key'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_quick') : smarty_modifier_cat($_tmp, '_quick'))); ?>
                <input type="hidden" name="post_form_key" value="<?php echo $this->_tpl_vars['post_form_key']; ?>
" />

                <?php $_from = $this->_tpl_vars['search_form']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['qsearchF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['qsearchF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['group']):
        $this->_foreach['qsearchF']['iteration']++;
?>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fields_search.tpl') : smarty_modifier_cat($_tmp, 'fields_search.tpl')), 'smarty_include_vars' => array('fields' => $this->_tpl_vars['group']['Fields'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <?php endforeach; endif; unset($_from); ?>

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
                        <?php if ($this->_tpl_vars['listing_types'][$this->_tpl_vars['sf_key']]['Advanced_search'] && $this->_tpl_vars['listing_types'][$this->_tpl_vars['sf_key']]['Advanced_search_availability']): ?>
                            <a title="<?php echo $this->_tpl_vars['lang']['advanced_search']; ?>
" href="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pages'][$this->_tpl_vars['spage_key']]; ?>
/<?php echo $this->_tpl_vars['advanced_search_url']; ?>
.html<?php else: ?>?page=<?php echo $this->_tpl_vars['pages'][$this->_tpl_vars['spage_key']]; ?>
&amp;<?php echo $this->_tpl_vars['advanced_search_url']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['lang']['advanced_search']; ?>
</a>
                        <?php endif; ?>
                    </div>
                </div>
            </form>
        </div>
    <?php endforeach; endif; unset($_from); ?>

    <div id="area_keyword" class="tab_area<?php if (! $this->_tpl_vars['keyword_search'] && is_array ( $this->_tpl_vars['search_forms'] ) && count($this->_tpl_vars['search_forms']) > 0): ?> hide<?php endif; ?>">
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

            <div class="options">
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
        </form>

        <div class="listings-area">
        <?php if (! empty ( $this->_tpl_vars['listings'] )): ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'grid_navbar.tpl') : smarty_modifier_cat($_tmp, 'grid_navbar.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'grid.tpl') : smarty_modifier_cat($_tmp, 'grid.tpl')), 'smarty_include_vars' => array('hl' => 'trye')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

            <script class="fl-js-dynamic">flynaxTpl.highlightResults($('#area_keyword input[name="f\[keyword_search\]"]').val());</script>

            <!-- paging block -->
            <?php if ($this->_tpl_vars['config']['mod_rewrite']): ?>
                <?php echo $this->_plugins['function']['paging'][0][0]->paging(array('calc' => $this->_tpl_vars['pInfo']['calc'],'total' => count($this->_tpl_vars['listings']),'current' => $this->_tpl_vars['pInfo']['current'],'per_page' => $this->_tpl_vars['config']['listings_per_page'],'url' => $this->_tpl_vars['category']['Path'],'var' => 'listing'), $this);?>

            <?php else: ?>
                <?php echo $this->_plugins['function']['paging'][0][0]->paging(array('calc' => $this->_tpl_vars['pInfo']['calc'],'total' => count($this->_tpl_vars['listings']),'current' => $this->_tpl_vars['pInfo']['current'],'per_page' => $this->_tpl_vars['config']['listings_per_page'],'url' => $this->_tpl_vars['category']['ID'],'var' => 'category'), $this);?>

            <?php endif; ?>
            <!-- paging block end -->
        <?php else: ?>
            <?php if ($this->_tpl_vars['keyword_search']): ?>
                <div class="info">
                    <?php if ($this->_tpl_vars['pages']['add_listing']): ?>
                        <?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'add_listing','assign' => 'add_listing_href'), $this);?>

                        <?php $this->assign('link', ((is_array($_tmp=((is_array($_tmp='<a href="')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['add_listing_href']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['add_listing_href'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '">$1</a>') : smarty_modifier_cat($_tmp, '">$1</a>'))); ?>
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['no_listings_found'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, '/\[(.+)\]/', $this->_tpl_vars['link']) : smarty_modifier_regex_replace($_tmp, '/\[(.+)\]/', $this->_tpl_vars['link'])); ?>

                    <?php else: ?>
                        <?php echo $this->_plugins['function']['phrase'][0][0]->getPhrase(array('key' => 'no_listings_found_deny_posting','db_check' => 'true'), $this);?>

                    <?php endif; ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
        </div>
    </div>
</div>



<!-- search tpl end -->