<?php /* Smarty version 2.6.31, created on 2024-09-04 02:21:46
         compiled from /var/www/u2273289/data/www/rentsale.tech/plugins/multiField/tplHeader.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'version_compare', '/var/www/u2273289/data/www/rentsale.tech/plugins/multiField/tplHeader.tpl', 211, false),)), $this); ?>
<!-- multifield header tpl -->

<?php if ($this->_tpl_vars['multi_format_keys']): ?>
<script>
    var mfFields = new Array();
    var mfFieldVals = new Array();
    lang['select'] = "<?php echo $this->_tpl_vars['lang']['select']; ?>
";
    lang['not_available'] = "<?php echo $this->_tpl_vars['lang']['not_available']; ?>
";
</script>
<?php endif; ?>

<script>
<?php echo '

var mfGeoFields = new Array();

var gfAjaxClick = function(key, path, redirect){
    flUtil.ajax({
        mode: \'mfApplyLocation\',
        item: path,
        key: key
    }, function(response, status) {
        if (status == \'success\' && response.status == \'OK\') {
            if (rlPageInfo[\'key\'] === \'404\') {
                location.href = rlConfig[\'seo_url\'];
            } else {
                if (location.href.indexOf(\'?reset_location\') > 0) {
                    location.href = location.href.replace(\'?reset_location\', \'\');
                } else {
                    if (redirect) {
                        location.href = redirect;
                    } else {
                        location.reload();
                    }
                }
            }
        } else {
            printMessage(\'error\', lang[\'system_error\']);
        }
    });
}

'; ?>

</script>

<?php if ($this->_tpl_vars['config']['mf_select_interface'] == 'usernavbar'): ?>
<?php $this->assign('navbar_icon_size', 16); ?>
<?php if ($this->_tpl_vars['mf_is_nova']): ?>
    <?php $this->assign('navbar_icon_size', 14); ?>
<?php endif; ?>
<style>
<?php echo '
/*** GEO LOCATION IN NAVBAR */
.circle #mf-location-selector {
    vertical-align: top;
    display: inline-block;
}
#mf-location-selector + .popover {
    color: initial;
    /*min-width: auto;*/
}
#mf-location-selector .default:before,
#mf-location-selector .default:after {
    display: none;
}
#mf-location-selector .default {
    max-width: 170px;
    '; ?>

    <?php if ($this->_tpl_vars['tpl_settings']['name'] == 'auto_brand_wide' || $this->_tpl_vars['tpl_settings']['name'] == 'boats_seaman_wide'): ?>
    display: flex;
    <?php elseif ($this->_tpl_vars['tpl_settings']['name'] != 'escort_sun_cocktails_wide'): ?>
    vertical-align: top;
    <?php endif; ?>
    <?php echo '
    white-space: nowrap;
}
#mf-location-selector .default > span {
    display: inline-block;
    min-width: 0;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
}
'; ?>

<?php if ($this->_tpl_vars['mf_is_flatty'] || $this->_tpl_vars['mf_hide_name']): ?>
<?php echo '
#mf-location-selector .default > span {
    display: none;
}
svg.mf-location-icon {
    margin: 0 !important;
}
'; ?>

<?php endif; ?>
<?php echo '
@media screen and (max-width: 767px) {
    #mf-location-selector .default > span {
        display: none;
    }
    svg.mf-location-icon {
        margin: 0 !important;
    }
}

.popup .gf-root {
    width: 500px;
    display: flex;
    height: '; ?>
<?php if ($this->_tpl_vars['geo_filter_data']['applied_location']): ?>285<?php else: ?>255<?php endif; ?><?php echo 'px;
}
.gf-cities {
    overflow: hidden;
}
.gf-cities .gf-city {
    padding: 4px 0;
}
.gf-cities .gf-city a {
    display: block;
}
.gf-cities-hint {
    padding-bottom: 10px;
}
svg.mf-location-icon {
    '; ?>

    width: <?php echo $this->_tpl_vars['navbar_icon_size']; ?>
px;
    height: <?php echo $this->_tpl_vars['navbar_icon_size']; ?>
px;
    <?php if ($this->_tpl_vars['mf_is_nova']): ?>
    flex-shrink: 0;
    <?php else: ?>
    vertical-align: middle;
    margin-top: -1px;
    <?php endif; ?>
    <?php echo '
}
#mf-location-selector:hover svg.mf-location-icon {
    opacity: .8;
}
@media screen and (max-width: 767px) {
    .popup .gf-root {
        height: 85vh;
        min-width: 1px;
    }
}
@media screen and (min-width: 768px) and (max-width: 991px) {
    .header-contacts .contacts__email {
        display: none;
    }
}
'; ?>

</style>
<?php elseif ($this->_tpl_vars['blocks']['geo_filter_box'] || $this->_tpl_vars['home_page_special_block']['Key'] == 'geo_filter_box'): ?>
<style>
<?php echo '
/*** GEO LOCATION BOX */
.gf-box.gf-has-levels ul.gf-current {
    padding-bottom: 10px;
}
.gf-box ul.gf-current > li {
    padding: 3px 0;
}
.gf-box ul.gf-current span {
    display: inline-block;
    margin: 0 5px 1px 3px;
}
.gf-box ul.gf-current span:before {
    content: \'\';
    display: block;
    width: 5px;
    height: 9px;
    border-style: solid;
    border-width: 0 2px 2px 0;
    transform: rotate(45deg);
}
body[dir=rtl] .gf-box ul.gf-current span {
    margin: 0 3px 1px 5px;
}

.special-block .gf-root {
    display: flex;
    flex-direction: column;
    width: 100%;
}
.special-block .gf-root .gf-box {
    flex: 1;
    overflow: hidden;
}
.special-block .multiField .clearfix {
    display: flex;
}
.special-block .gf-box .gf-container {
    max-height: none;
}

.gf-box .gf-container {
    max-height: 250px;
}
.gf-box .gf-container li > a {
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    padding: 3px 0;
    display: inline-block;
    width: 100%;
}
@media screen and (max-width: 767px) {
    .gf-box .gf-container li > a {
        padding: 6px 0;
    }
}
'; ?>


<?php if (((is_array($_tmp=$this->_tpl_vars['config']['rl_version'])) ? $this->_run_mod_handler('version_compare', true, $_tmp, '4.9.3', '<') : version_compare($_tmp, '4.9.3', '<'))): ?>
<?php echo '
.gf-box .gf-container {
    overflow: hidden;
}
'; ?>

<?php endif; ?>
</style>
<?php endif; ?>

<?php if ($this->_tpl_vars['blocks']['geo_filter_box'] || $this->_tpl_vars['home_page_special_block']['Key'] == 'geo_filter_box' || $this->_tpl_vars['config']['mf_select_interface'] == 'usernavbar'): ?>
<style>
<?php echo '
.mf-autocomplete {
    padding-bottom: 15px;
    position: relative;
}
.mf-autocomplete-dropdown {
    width: 100%;
    height: auto;
    max-height: 185px;
    position: absolute;
    overflow-y: auto;
    background: white;
    z-index: 500;
    margin: 0 !important;
    box-shadow: 0px 3px 5px rgba(0,0,0, 0.2);
}
.mf-autocomplete-dropdown > a {
    display: block;
    padding: 9px 10px;
    margin: 0;
}
.mf-autocomplete-dropdown > a:hover,
.mf-autocomplete-dropdown > a.active {
    background: #eeeeee;
}

.gf-current a > img {
    background-image: url('; ?>
<?php echo $this->_tpl_vars['rlTplBase']; ?>
<?php echo 'img/gallery.png);
}
@media only screen and (-webkit-min-device-pixel-ratio: 1.5),
only screen and (min--moz-device-pixel-ratio: 1.5),
only screen and (min-device-pixel-ratio: 1.5),
only screen and (min-resolution: 144dpi) {
    .gf-current a > img {
        background-image: url('; ?>
<?php echo $this->_tpl_vars['rlTplBase']; ?>
<?php echo 'img/@2x/gallery2.png) !important;
    }
}
'; ?>

</style>
<?php endif; ?>

<?php if ($this->_tpl_vars['config']['mf_show_nearby_listings']): ?>
<style>
<?php echo '
.mf-nearby-wrapper header {
    font-size: 1.125em !important;
}
'; ?>

</style>
<?php endif; ?>

<!-- multifield header tpl end -->