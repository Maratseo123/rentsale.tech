<?php /* Smarty version 2.6.31, created on 2024-05-02 01:23:40
         compiled from /var/www/u2273289/data/www/rentsale.tech/plugins/locationFinder/map.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'addJS', '/var/www/u2273289/data/www/rentsale.tech/plugins/locationFinder/map.tpl', 7, false),array('function', 'mapsAPI', '/var/www/u2273289/data/www/rentsale.tech/plugins/locationFinder/map.tpl', 9, false),array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/plugins/locationFinder/map.tpl', 7, false),array('modifier', 'array_keys', '/var/www/u2273289/data/www/rentsale.tech/plugins/locationFinder/map.tpl', 61, false),array('modifier', 'json_encode', '/var/www/u2273289/data/www/rentsale.tech/plugins/locationFinder/map.tpl', 61, false),)), $this); ?>
<!-- location finder map -->

<svg class="hide" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => '../img/svg/userLocation.svg', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</svg>

<?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=(defined('RL_LIBS_URL') ? @RL_LIBS_URL : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'maps/geocoder.js') : smarty_modifier_cat($_tmp, 'maps/geocoder.js'))), $this);?>


<?php echo $this->_plugins['function']['mapsAPI'][0][0]->mapsAPI(array(), $this);?>


<div id="lf_container"<?php if ($this->_tpl_vars['config']['locationFinder_position'] != 'top'): ?> class="hide"<?php endif; ?>>
    <?php if ($this->_tpl_vars['config']['locationFinder_position'] == 'top' || $this->_tpl_vars['config']['locationFinder_position'] == 'bottom'): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_header.tpl') : smarty_modifier_cat($_tmp, 'fieldset_header.tpl')), 'smarty_include_vars' => array('id' => 'lf_fieldset','name' => $this->_tpl_vars['lang']['locationFinder_fieldset_caption'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>

    <div class="submit-cell">
        <div class="name"><?php echo $this->_tpl_vars['lang']['locationFinder_location']; ?>
 <img src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" class="qtip" title="<?php echo $this->_tpl_vars['lang']['locationFinder_hint']; ?>
" /></div>
        <div class="field">
            <div id="lf_map" style="height: 400px;"></div>

            <input id="lf_lat" name="f[lf][lat]" type="hidden" value="<?php echo $_POST['f']['lf']['lat']; ?>
" />
            <input id="lf_lng" name="f[lf][lng]" type="hidden" value="<?php echo $_POST['f']['lf']['lng']; ?>
" />
            <input id="lf_zoom" name="f[lf][zoom]" type="hidden" value="<?php echo $_POST['f']['lf']['zoom']; ?>
" />
        </div>
    </div>

    <?php if ($this->_tpl_vars['config']['locationFinder_position'] == 'top' || $this->_tpl_vars['config']['locationFinder_position'] == 'bottom'): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_footer.tpl') : smarty_modifier_cat($_tmp, 'fieldset_footer.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>
</div>

<script class="fl-js-dynamic">
lang['locationFinder_address_hint'] = "<?php echo $this->_tpl_vars['lang']['locationFinder_address_hint']; ?>
";
lang['locationFinder_drag_notice'] = "<?php echo $this->_tpl_vars['lang']['locationFinder_drag_notice']; ?>
";

<?php echo '

$(function(){
    '; ?>

    var position    = '<?php echo $this->_tpl_vars['config']['locationFinder_position']; ?>
';
    var group       = '<?php echo $this->_tpl_vars['config']['locationFinder_group']; ?>
';
    var append_type = '<?php echo $this->_tpl_vars['config']['locationFinder_type']; ?>
';
    var options     = <?php echo ' { '; ?>

        postLat: <?php if ($_POST['f']['lf']['lat']): ?><?php echo $_POST['f']['lf']['lat']; ?>
<?php else: ?>false<?php endif; ?>,
        postLng: <?php if ($_POST['f']['lf']['lng']): ?><?php echo $_POST['f']['lf']['lng']; ?>
<?php else: ?>false<?php endif; ?>,
        postZoom: <?php if ($_POST['f']['lf']['zoom']): ?><?php echo $_POST['f']['lf']['zoom']; ?>
<?php else: ?>false<?php endif; ?>,
        defaultLocation: '<?php echo $this->_tpl_vars['config']['locationFinder_default_location']; ?>
',
        containerID: '#lf_container',
        mapElementID: '#lf_map',
        zoom: <?php echo $this->_tpl_vars['config']['locationFinder_map_zoom']; ?>
,
        useVisitorLocation: <?php if ($this->_tpl_vars['config']['locationFinder_use_location']): ?>true<?php else: ?>false<?php endif; ?>,
        useNeighborhood: <?php if ($this->_tpl_vars['config']['locationFinder_use_neighborhood']): ?>true<?php else: ?>false<?php endif; ?>,
        ipLocation: "<?php echo $_SESSION['GEOLocationData']->Country_name; ?>
, <?php echo $_SESSION['GEOLocationData']->Region; ?>
, <?php echo $_SESSION['GEOLocationData']->City; ?>
",
        mapping: <?php if ($this->_tpl_vars['config']['locationFinder_mapping']): ?>true<?php else: ?>false<?php endif; ?>,
        mappingCountry: <?php if ($this->_tpl_vars['config']['locationFinder_mapping_country']): ?>'<?php echo $this->_tpl_vars['config']['locationFinder_mapping_country']; ?>
'<?php else: ?>false<?php endif; ?>,
        mappingState: <?php if ($this->_tpl_vars['config']['locationFinder_mapping_state']): ?>'<?php echo $this->_tpl_vars['config']['locationFinder_mapping_state']; ?>
'<?php else: ?>false<?php endif; ?>,
        mappingCity: <?php if ($this->_tpl_vars['config']['locationFinder_mapping_city']): ?>'<?php echo $this->_tpl_vars['config']['locationFinder_mapping_city']; ?>
'<?php else: ?>false<?php endif; ?>,
        mappingAddress: <?php if ($this->_tpl_vars['config']['locationFinder_mapping_address']): ?>'<?php echo $this->_tpl_vars['config']['locationFinder_mapping_address']; ?>
'<?php else: ?>false<?php endif; ?>,
        mappingZip: <?php if ($this->_tpl_vars['config']['locationFinder_mapping_zip']): ?>'<?php echo $this->_tpl_vars['config']['locationFinder_mapping_zip']; ?>
'<?php else: ?>false<?php endif; ?>,
        geocoding: <?php if (! isset ( $this->_tpl_vars['config']['geocoding_provider'] ) || $this->_tpl_vars['config']['geocoding_provider'] == 'google'): ?>true<?php else: ?>false<?php endif; ?>,
        mfFields: <?php if ($this->_tpl_vars['geo_filter_data']['location_listing_fields']): ?>JSON.parse('<?php echo json_encode(array_keys($this->_tpl_vars['geo_filter_data']['location_listing_fields'])); ?>
')<?php else: ?>false<?php endif; ?>
    <?php echo '
    };

    var $container  = $(\'#lf_container\');
    var $form       = $(\'#controller_area form\');

    // Assign map container
    if (position == \'bottom\'){
        $form.find(\'.fieldset, .submit-cell\').last().after($container);
    } else if (position != \'top\'){
        $(\'div#fs_\' + group + \' > div.body\')[append_type]($container);
    }

    // Create class object
    var locationFinder = new locationFinderClass();

    // Init plugin depending on "account address" option
    var $account_address = $(\'input[name="f[account_address_on_map]"]\');

    if (!$account_address.length
        || parseInt($account_address.filter(\':checked\').val()) == 0
    ){
        locationFinder.init(options);
    }

    $account_address.change(function(){
        if (parseInt($(this).val()) == 0){
            locationFinder.init(options);
        } else {
            locationFinder.destroy();
        }
    });
});

'; ?>

</script>

<?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=(defined('RL_PLUGINS_URL') ? @RL_PLUGINS_URL : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'locationFinder/static/lib.js') : smarty_modifier_cat($_tmp, 'locationFinder/static/lib.js'))), $this);?>


<!-- location finder map end -->