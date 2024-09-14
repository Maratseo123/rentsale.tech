<?php /* Smarty version 2.6.31, created on 2024-01-06 14:40:10
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/plugins/multiField/geo_box.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/multiField/geo_box.tpl', 5, false),array('function', 'rlHook', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/multiField/geo_box.tpl', 39, false),)), $this); ?>
<!-- Multi-Field Geo Filtering Box -->

<div class="gf-root">
    <?php if ($this->_tpl_vars['config']['mf_geo_block_autocomplete'] && $this->_tpl_vars['geo_box_data']['levels_data'][0]): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=(defined('RL_PLUGINS') ? @RL_PLUGINS : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'multiField') : smarty_modifier_cat($_tmp, 'multiField')))) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'autocomplete.tpl') : smarty_modifier_cat($_tmp, 'autocomplete.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>

    <div class="gf-box list-view<?php if ($this->_tpl_vars['geo_box_data']['levels_data'][0]): ?> gf-has-levels<?php endif; ?>">
        <?php if ($this->_tpl_vars['geo_filter_data']['location']): ?>
            <ul class="list-unstyled gf-current">
                <?php $_from = $this->_tpl_vars['geo_filter_data']['location']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
                    <li>
                        <span class="hborder"></span>
                        <?php echo $this->_tpl_vars['item']['name']; ?>

                        <a title="<?php echo $this->_tpl_vars['item']['name']; ?>
"
                            <?php if ($this->_tpl_vars['geo_filter_data']['is_location_url'] && $this->_tpl_vars['item']['Parent_path']): ?>
                                href="<?php echo $this->_tpl_vars['item']['Parent_link']; ?>
"
                            <?php else: ?>
                                href="javascript://"
                                class="gf-ajax"
                                <?php if ($this->_tpl_vars['item']['Parent_path']): ?>data-path="<?php echo $this->_tpl_vars['item']['Parent_path']; ?>
"<?php else: ?>data-link="<?php echo $this->_tpl_vars['item']['Parent_link']; ?>
"<?php endif; ?>
                            <?php endif; ?>><img class="remove" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" />
                        </a>
                    </li>
                <?php endforeach; endif; unset($_from); ?>
            </ul>
        <?php endif; ?>

        <?php $this->assign('gf_col_class', 'col-lg-6 col-md-12 col-sm-3'); ?>

        <?php if ($this->_tpl_vars['block']['Side'] == 'top' || $this->_tpl_vars['block']['Side'] == 'middle' || $this->_tpl_vars['block']['Side'] == 'bottom'): ?>
            <?php if ($this->_tpl_vars['side_bar_exists']): ?>
                <?php $this->assign('gf_col_class', 'col-lg-3 col-md-4 col-sm-3'); ?>
            <?php else: ?>
                <?php $this->assign('gf_col_class', 'col-lg-2 col-md-3 col-sm-3'); ?>
            <?php endif; ?>
        <?php endif; ?>

        <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'tplGFGeoBoxColClass'), $this);?>


        <?php if ($this->_tpl_vars['geo_box_data']['levels_data'][0]): ?>
        <div class="gf-container">
            <ul class="list-unstyled row">
                <?php $this->assign('level_data', $this->_tpl_vars['geo_box_data']['levels_data'][0]); ?>
                <?php $_from = $this->_tpl_vars['level_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                    <li class="<?php echo $this->_tpl_vars['gf_col_class']; ?>
">
                        <a title="<?php echo $this->_tpl_vars['item']['name']; ?>
"
                            <?php if ($this->_tpl_vars['geo_filter_data']['is_location_url']): ?>
                                href="<?php echo $this->_tpl_vars['item']['Link']; ?>
"
                            <?php else: ?>
                                href="javascript://" class="gf-ajax"
                            <?php endif; ?>
                           data-path="<?php echo $this->_tpl_vars['item']['Path']; ?>
" data-key="<?php echo $this->_tpl_vars['item']['Key']; ?>
"><?php echo $this->_tpl_vars['item']['name']; ?>
</a>
                    </li>
                <?php endforeach; endif; unset($_from); ?>
            </ul>
        </div>
        <?php elseif (! $this->_tpl_vars['geo_filter_data']['location']): ?>
            <?php echo $this->_tpl_vars['lang']['mf_geo_box_default']; ?>

        <?php endif; ?>
    </div>
</div>

<?php if ($this->_tpl_vars['level_data']): ?>
<script class="fl-js-dynamic">
<?php echo '

$(function(){
    $box = $(\'.gf-box .gf-container\');

    if ($box.closest(\'.special-block\').length) {
        $(\'.gf-box\').mCustomScrollbar();
    } else {
        $box.mCustomScrollbar()
    }
});

'; ?>

</script>
<?php endif; ?>

<script class="fl-js-dynamic">
<?php echo '

$(\'.gf-box,.mf-autocomplete-dropdown\').on(\'click\', \'a.gf-ajax\', function(){
    gfAjaxClick($(this).data(\'key\'), $(this).data(\'path\'), $(this).data(\'link\'))
});

'; ?>

</script>
<!-- Multi-Field Geo Filtering Box end -->