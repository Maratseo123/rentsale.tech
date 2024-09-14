<?php /* Smarty version 2.6.31, created on 2023-12-18 01:50:46
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/plugins/multiField/autocomplete.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'end', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/multiField/autocomplete.tpl', 10, false),)), $this); ?>
<!-- multifield location autocomplete tpl -->

<div class="mf-autocomplete kws-block">
    <input class="mf-autocomplete-input w-100" type="text" maxlength="64" placeholder="<?php echo $this->_tpl_vars['lang']['mf_geo_type_location']; ?>
" />
    <div class="mf-autocomplete-dropdown hide"></div>
</div>

<script class="fl-js-dynamic">
    var mf_script_loaded = false;
    var mf_current_key   = <?php if ($this->_tpl_vars['geo_filter_data']['location_keys']): ?>'<?php echo end($this->_tpl_vars['geo_filter_data']['location_keys']); ?>
'<?php else: ?>null<?php endif; ?>;

    rlPageInfo['Geo_filter'] = <?php if ($this->_tpl_vars['geo_filter_data']['is_location_url']): ?>true<?php else: ?>false<?php endif; ?>;

    <?php echo '
    $(function(){
        $(\'.mf-autocomplete-input\').on(\'focus keyup\', function(){
            if (!mf_script_loaded) {
                flUtil.loadScript(rlConfig[\'plugins_url\'] + \'multiField/static/autocomplete.js\');
                mf_script_loaded = true;
            }
        });
    });
    '; ?>

</script>

<!-- multifield location autocomplete tpl end -->