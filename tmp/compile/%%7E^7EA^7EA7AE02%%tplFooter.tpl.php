<?php /* Smarty version 2.6.31, created on 2024-04-24 15:46:43
         compiled from /var/www/u2273289/data/www/rentsale.tech/plugins/multiField/tplFooter.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/plugins/multiField/tplFooter.tpl', 28, false),)), $this); ?>
<?php if ($this->_tpl_vars['multi_format_keys']): ?>
    <script class="fl-js-dynamic">
    var mf_prefix = '<?php echo $this->_tpl_vars['mf_form_prefix']; ?>
';
    <?php echo '
    $(function(){
        for (var i in mfFields) {
            (function(fields, values, index){
                var $form = null;

                if (index.indexOf(\'|\') >= 0) {
                    var form_key = index.split(\'|\')[1];
                    $form = $(\'#area_\' + form_key).find(\'form\');
                    $form = $form.length ? $form : null;
                }

                var mfHandler = new mfHandlerClass();
                mfHandler.init(mf_prefix, fields, values, $form);
            })(mfFields[i], mfFieldVals[i], i);
        }
    });
    '; ?>

    </script>
<?php endif; ?>

<?php if ($this->_tpl_vars['config']['mf_select_interface'] == 'usernavbar'): ?>
    <div class="hide d-none" id="gf_tmp">
        <div class="gf-root flex-column">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=(defined('RL_PLUGINS') ? @RL_PLUGINS : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'multiField') : smarty_modifier_cat($_tmp, 'multiField')))) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'autocomplete.tpl') : smarty_modifier_cat($_tmp, 'autocomplete.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

            <div class="gf-cities-hint font-size-sm"><?php echo $this->_tpl_vars['lang']['mf_select_city_hint']; ?>
</div>
            <div class="gf-cities flex-fill"></div>
            <?php if ($this->_tpl_vars['geo_filter_data']['applied_location']): ?>
                <div class="gf-navbar">
                    <a href="javascript://" data-link="<?php echo $this->_tpl_vars['geo_filter_data']['location']['0']['Parent_link']; ?>
" class="nowrap text-overflow button w-100 align-center gf-ajax"><?php echo $this->_tpl_vars['lang']['mf_reset_location']; ?>
<span class="d-inline<?php if (! $this->_tpl_vars['mf_is_flatty'] && ! $this->_tpl_vars['mf_hide_name']): ?> d-md-none<?php endif; ?>"> (<?php echo $this->_tpl_vars['geo_filter_data']['applied_location']['name']; ?>
)</span></a>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <script id="gf_city_item" type="text/x-jsrender">
        <li class="col-md-4">
            <div class="gf-city">
                <a title="[%:name%]"
                    <?php if ($this->_tpl_vars['geo_filter_data']['is_location_url']): ?>
                        href="[%:Link%]" class="text-overflow"
                    <?php else: ?>
                        href="javascript://" class="gf-ajax text-overflow"
                    <?php endif; ?>
                   data-path="[%:Path%]" data-key="[%:Key%]">[%:name%]</a>
            </div>
        </li>
    </script>
<?php endif; ?>

<?php if ($this->_tpl_vars['geo_filter_data'] && $this->_tpl_vars['geo_filter_data']['is_filtering']): ?>
<script class="fl-js-dynamic">
<?php echo '

if (typeof flUtil.modifyDataFunctions != \'undefined\') {
    flUtil.modifyDataFunctions.push(function(data){
        if (data.mode == \'novaLoadMoreListings\') {
            data.mf_filtering = 1;
        }
    });
}

'; ?>

</script>
<?php endif; ?>