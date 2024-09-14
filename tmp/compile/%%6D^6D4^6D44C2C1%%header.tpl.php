<?php /* Smarty version 2.6.31, created on 2024-04-24 15:46:43
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'mapsAPI', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/header.tpl', 14, false),array('function', 'addJS', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/header.tpl', 16, false),array('function', 'rlHook', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/header.tpl', 65, false),array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/header.tpl', 16, false),array('modifier', 'escape', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/header.tpl', 19, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'head.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <div class="main-wrapper d-flex flex-column">
        <header class="page-header<?php if ($this->_tpl_vars['pageInfo']['Key'] == 'search_on_map'): ?> fixed-menu<?php endif; ?><?php if ($this->_tpl_vars['config']['home_map_search'] && $this->_tpl_vars['pageInfo']['Key'] == 'home'): ?> page-header-map<?php endif; ?>">
            <div class="page-header-mask">
                <?php if ($this->_tpl_vars['config']['home_map_search'] && $this->_tpl_vars['pageInfo']['Key'] == 'home'): ?>
                    <div id="map_container"></div>
                    <span class="loading map-loading"><span class="loading-spinner"></span></span>

                    <svg class="hide" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => '../img/svg/userLocation.svg', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    </svg>

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
                    lang['short_price_k'] = '<?php echo $this->_tpl_vars['lang']['short_price_k']; ?>
';
                    lang['short_price_m'] = '<?php echo $this->_tpl_vars['lang']['short_price_m']; ?>
';
                    lang['short_price_b'] = '<?php echo $this->_tpl_vars['lang']['short_price_b']; ?>
';

                    <?php echo '

                    var mapTabBar = mapSearch.tabBar;
                    mapSearch.tabBar = function(){
                        $(\'.leaflet-top.leaflet-right\').addClass(\'point1\');

                        if (typeof mapTabBar == \'function\') {
                            mapTabBar.call(mapSearch);
                        }
                    }

                    mapSearch.init({
                        mapContainer: $(\'#map_container\'),
                        mapCenter: default_map_coordinates,
                        mapZoom: default_map_zoom,
                        mapAltLocation: default_map_location,
                        searchForm: $(\'.map-search-mode .search-block-content\'),
                        tabBar: $(\'.map-search-mode .form-switcher\'),
                        desktopLimit: listings_limit_desktop,
                        mobileLimit: listings_limit_mobile,
                        geocoder: false
                    });
                    '; ?>

                    </script>
                <?php endif; ?>
            </div>

            <div class="point1">
                <div class="top-navigation">
                    <div class="point1 h-100 d-flex align-items-center">
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'lang_selector.tpl') : smarty_modifier_cat($_tmp, 'lang_selector.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                        <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'tplHeaderUserNav'), $this);?>


                        <span class="header-contacts d-none d-lg-block font-size-xs font-weight-semibold">
                            <?php if ($this->_tpl_vars['lang']['header_contact_email']): ?>
                                <a class="color-light contacts__email ml-3 mr-3" href="mailto: <?php echo $this->_tpl_vars['lang']['header_contact_email']; ?>
">
                                    <svg viewBox="0 0 12 10" class="mr-1">
                                        <use xlink:href="#envelope-small"></use>
                                    </svg>
                                    <?php echo $this->_tpl_vars['lang']['header_contact_email']; ?>

                                </a>
                            <?php endif; ?>
                            <?php if ($this->_tpl_vars['lang']['header_contact_phone_number']): ?>
                                <a class="color-light contacts__handset ml-3 mr-3" href="tel: <?php echo $this->_tpl_vars['lang']['header_contact_phone_number']; ?>
">
                                    <svg viewBox="0 0 12 12" class="mr-1">
                                        <use xlink:href="#handset"></use>
                                    </svg>
                                    <?php echo $this->_tpl_vars['lang']['header_contact_phone_number']; ?>

                                </a>
                            <?php endif; ?>
                        </span>

                        <nav class="d-flex flex-fill shrink-fix h-100 justify-content-end user-navbar">
                            <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'tplHeaderUserArea'), $this);?>


                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'user_navbar.tpl') : smarty_modifier_cat($_tmp, 'user_navbar.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                            <span class="menu-button d-flex d-lg-none align-items-center" title="<?php echo $this->_tpl_vars['lang']['menu']; ?>
">
                                <svg viewBox="0 0 20 14" class="mr-2">
                                    <use xlink:href="#mobile-menu"></use>
                                </svg>
                                <?php echo $this->_tpl_vars['lang']['menu']; ?>

                            </span>
                        </nav>
                    </div>
                </div>
                <section class="header-nav d-flex">
                    <div class="point1 d-flex align-items-center">
                        <div>
                            <div class="mr-0 mr-md-3" id="logo">
                                <a class="d-inline-block" href="<?php echo $this->_tpl_vars['rlBase']; ?>
" title="<?php echo $this->_tpl_vars['config']['site_name']; ?>
">
                                    <img alt="<?php echo $this->_tpl_vars['config']['site_name']; ?>
"
                                        src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/logo.png?rev=<?php echo $this->_tpl_vars['config']['static_files_revision']; ?>
"
                                        srcset="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/@2x/logo.png?rev=<?php echo $this->_tpl_vars['config']['static_files_revision']; ?>
 2x" />
                                </a>
                            </div>
                        </div>
                        <div class="main-menu flex-fill">
                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='menus')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'main_menu.tpl') : smarty_modifier_cat($_tmp, 'main_menu.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        </div>
                    </div>
                </section>

                <?php if ($this->_tpl_vars['pageInfo']['Key'] == 'home'): ?>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'home_content.tpl') : smarty_modifier_cat($_tmp, 'home_content.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <?php endif; ?>
            </div>
        </header>