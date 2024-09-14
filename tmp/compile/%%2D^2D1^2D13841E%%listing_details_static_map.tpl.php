<?php /* Smarty version 2.6.31, created on 2024-05-02 12:58:20
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/listing_details_static_map.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'addCSS', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/listing_details_static_map.tpl', 3, false),array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/listing_details_static_map.tpl', 3, false),)), $this); ?>
<!-- static map handler -->

<?php echo $this->_plugins['function']['addCSS'][0][0]->smartyAddCSS(array('file' => ((is_array($_tmp=$this->_tpl_vars['rlTplBase'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'components/popup/popup.css') : smarty_modifier_cat($_tmp, 'components/popup/popup.css'))), $this);?>


<script class="fl-js-dynamic">
<?php echo '

// Static map handler
flUtil.loadScript(rlConfig[\'tpl_base\'] + \'components/popup/_popup.js\', function(){
    $(\'.map-capture\').popup({
        fillEdge: true,
        scroll: false,
        content: \'<div id="map_fullscreen"></div>\',
        onShow: function(){
            flUtil.loadStyle(rlConfig[\'mapAPI\'][\'css\']);
            flUtil.loadScript(rlConfig[\'mapAPI\'][\'js\'], function(){
                window.location.hash = \'map-fullscreen\';

                flMap.init($(\'#map_fullscreen\'), {
                    control: \'topleft\',
                    zoom: '; ?>
<?php echo $this->_tpl_vars['config']['map_default_zoom']; ?>
<?php echo ',
                    addresses: [{
                        latLng: \''; ?>
<?php echo $this->_tpl_vars['location']['direct']; ?>
',
                        content: '<?php echo $this->_tpl_vars['location']['show']; ?>
<?php echo '\'
                    }]
                });
            });
        },
        onClose: function(){
            history.pushState(\'\', document.title, window.location.pathname + window.location.search);
            this.destroy();
        }
    });

    $(window).on(\'hashchange\', function(e){
        var oe = e.originalEvent;

        if (oe.oldURL.indexOf(\'#map-fullscreen\') >= 0 && oe.newURL.indexOf(\'#map-fullscreen\') < 0) {
            $(\'.popup .close\').trigger(\'click\');
        }
    });
});

'; ?>

</script>

<!-- static map handler end -->