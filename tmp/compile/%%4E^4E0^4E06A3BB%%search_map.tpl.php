<?php /* Smarty version 2.6.31, created on 2024-05-02 02:20:45
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/controllers/search_map/search_map.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/controllers/search_map/search_map.tpl', 13, false),array('modifier', 'escape', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/controllers/search_map/search_map.tpl', 51, false),array('function', 'mapsAPI', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/controllers/search_map/search_map.tpl', 46, false),array('function', 'addJS', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/controllers/search_map/search_map.tpl', 48, false),)), $this); ?>
<!-- map search tpl -->

<svg class="hide" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => '../img/svg/userLocation.svg', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</svg>

<div class="search-map-container">
    <div id="map_area">
        <div id="map_listings" class="map-listings-container">
            <div id="listings_area">
                <div id="search_area">
                    <?php if ($this->_tpl_vars['search_forms']): ?>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'horizontal_search.tpl') : smarty_modifier_cat($_tmp, 'horizontal_search.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php else: ?>
                        <?php echo $this->_tpl_vars['lang']['search_form_empty']; ?>

                    <?php endif; ?>
                </div>

                <div id="listings_cont">
                    <header class="progress">
                        <div class="caption"></div>
                        <div class="loading"><?php echo $this->_tpl_vars['lang']['loading']; ?>
</div>
                    </header>
                    <div class="wrapper">
                        <div class="clearfix"></div>
                        <footer>
                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer_data.tpl', 'smarty_include_vars' => array('no_rss' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        </footer>
                    </div>
                </div>
            </div>

            <div class="control btn"></div>
        </div>
        <div class="map-search">
            <div id="map_container"></div>
            <span class="loading-container"><span class="loading-spinner"></span></span>
        </div>
        <div class="mobile-navigation hide"><div class="search"></div><div class="list"></div><div class="map active"></div></div>
    </div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['controllerDir'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'search_map/listing.tpl') : smarty_modifier_cat($_tmp, 'search_map/listing.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['controllerDir'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'search_map/pagination.tpl') : smarty_modifier_cat($_tmp, 'search_map/pagination.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo $this->_plugins['function']['mapsAPI'][0][0]->mapsAPI(array(), $this);?>


<?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=$this->_tpl_vars['rlTplBase'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'controllers/search_map/search_map.js') : smarty_modifier_cat($_tmp, 'controllers/search_map/search_map.js'))), $this);?>


<script class="fl-js-dynamic">
var default_map_location = '<?php echo ((is_array($_tmp=$this->_tpl_vars['default_map_location'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
';
var default_map_coordinates = [<?php if ($_POST['loc_lat'] && $_POST['loc_lng']): ?><?php echo $_POST['loc_lat']; ?>
,<?php echo $_POST['loc_lng']; ?>
<?php else: ?><?php echo $this->_tpl_vars['config']['search_map_location']; ?>
<?php endif; ?>];
var default_map_zoom = <?php if ($this->_tpl_vars['config']['search_map_location_zoom']): ?><?php echo $this->_tpl_vars['config']['search_map_location_zoom']; ?>
<?php else: ?>14<?php endif; ?>;
var listings_limit_desktop = <?php if ($this->_tpl_vars['config']['map_search_listings_limit']): ?><?php echo $this->_tpl_vars['config']['map_search_listings_limit']; ?>
<?php else: ?>500<?php endif; ?>;
var listings_limit_mobile = <?php if ($this->_tpl_vars['config']['map_search_listings_limit_mobile']): ?><?php echo $this->_tpl_vars['config']['map_search_listings_limit_mobile']; ?>
<?php else: ?>75<?php endif; ?>;

lang['count_properties'] = '<?php echo $this->_tpl_vars['lang']['count_properties']; ?>
';
lang['number_property_found'] = '<?php echo $this->_tpl_vars['lang']['number_property_found']; ?>
';
lang['no_properties_found'] = '<?php echo $this->_tpl_vars['lang']['no_properties_found']; ?>
';
lang['map_listings_request_empty'] = '<?php echo $this->_tpl_vars['lang']['map_listings_request_empty']; ?>
';
lang['enter_a_location'] = '<?php echo $this->_tpl_vars['lang']['enter_a_location']; ?>
';

<?php echo '
mapSearch.init({
    mapContainer: $(\'#map_container\'),
    mapCenter: default_map_coordinates,
    mapAltLocation: default_map_location,
    mapZoom: default_map_zoom,
    listingGrid: $(\'#map_listings\'),
    searchForm: $(\'.search-block-content\'),
    tabBar: $(\'.tabs\'),
    desktopLimit: listings_limit_desktop,
    mobileLimit: listings_limit_mobile
});
'; ?>

</script>

<!-- map search tpl end -->