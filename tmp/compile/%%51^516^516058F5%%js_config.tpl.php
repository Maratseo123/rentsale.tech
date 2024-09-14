<?php /* Smarty version 2.6.31, created on 2024-04-24 15:46:43
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/js_config.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lower', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/js_config.tpl', 3, false),array('modifier', 'escape', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/js_config.tpl', 9, false),)), $this); ?>
<script type="text/javascript">
    var rlLangDir       = '<?php echo (defined('RL_LANG_DIR') ? @RL_LANG_DIR : null); ?>
';
    var rlLang          = '<?php echo ((is_array($_tmp=(defined('RL_LANG_CODE') ? @RL_LANG_CODE : null))) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
';
    var isLogin         = <?php if ($this->_tpl_vars['isLogin']): ?>true<?php else: ?>false<?php endif; ?>;
    var staticDataClass = <?php if (class_exists ( 'rlStatic' )): ?>true<?php else: ?>false<?php endif; ?>;

    var lang = new Array();
    <?php $_from = $this->_tpl_vars['js_keys']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['js_key']):
?>
    lang['<?php echo $this->_tpl_vars['js_key']; ?>
'] = '<?php echo ((is_array($_tmp=$this->_tpl_vars['lang'][$this->_tpl_vars['js_key']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
';
    <?php endforeach; endif; unset($_from); ?>

    var rlPageInfo           = new Array();
    rlPageInfo['key']        = '<?php echo $this->_tpl_vars['pageInfo']['Key']; ?>
';
    rlPageInfo['controller'] = '<?php echo $this->_tpl_vars['pageInfo']['Controller']; ?>
';
    rlPageInfo['path']       = '<?php if ($this->_tpl_vars['pageInfo']['Path_real']): ?><?php echo $this->_tpl_vars['pageInfo']['Path_real']; ?>
<?php else: ?><?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
<?php endif; ?>';

    var rlConfig                                 = new Array();
    rlConfig['seo_url']                          = '<?php echo $this->_tpl_vars['rlBase']; ?>
';
    rlConfig['tpl_base']                         = '<?php echo $this->_tpl_vars['rlTplBase']; ?>
';
    rlConfig['files_url']                         = '<?php echo (defined('RL_FILES_URL') ? @RL_FILES_URL : null); ?>
';
    rlConfig['libs_url']                         = '<?php echo (defined('RL_LIBS_URL') ? @RL_LIBS_URL : null); ?>
';
    rlConfig['plugins_url']                      = '<?php echo (defined('RL_PLUGINS_URL') ? @RL_PLUGINS_URL : null); ?>
';

    /**
     * @since 4.8.2 - Added "cors_url", "tpl_cors_base" variables
     */
    rlConfig['cors_url']                         = '<?php echo $this->_tpl_vars['domain_info']['scheme']; ?>
://<?php echo $_SERVER['HTTP_HOST']; ?>
';
    <?php if ($this->_tpl_vars['domain_info']['path'] !== '/'): ?>
        rlConfig['cors_url']                     += '<?php echo $this->_tpl_vars['domain_info']['path']; ?>
';
    <?php endif; ?>
    rlConfig['ajax_url']                         = rlConfig['cors_url'] + '/request.ajax.php';
    rlConfig['tpl_cors_base']                    = rlConfig['cors_url'] + '/templates/<?php echo $this->_tpl_vars['config']['template']; ?>
/';
    rlConfig['mod_rewrite']                      = <?php echo $this->_tpl_vars['config']['mod_rewrite']; ?>
;
    rlConfig['sf_display_fields']                 = <?php echo $this->_tpl_vars['config']['sf_display_fields']; ?>
;
    rlConfig['account_password_strength']        = <?php echo $this->_tpl_vars['config']['account_password_strength']; ?>
;
    rlConfig['messages_length']                  = <?php if ($this->_tpl_vars['config']['messages_length']): ?><?php echo $this->_tpl_vars['config']['messages_length']; ?>
<?php else: ?>250<?php endif; ?>;
    rlConfig['pg_upload_thumbnail_width']        = <?php if ($this->_tpl_vars['config']['pg_upload_thumbnail_width']): ?><?php echo $this->_tpl_vars['config']['pg_upload_thumbnail_width']; ?>
<?php else: ?>120<?php endif; ?>;
    rlConfig['pg_upload_thumbnail_height']       = <?php if ($this->_tpl_vars['config']['pg_upload_thumbnail_height']): ?><?php echo $this->_tpl_vars['config']['pg_upload_thumbnail_height']; ?>
<?php else: ?>90<?php endif; ?>;
    rlConfig['thumbnails_x2']                    = <?php if ($this->_tpl_vars['config']['thumbnails_x2']): ?>true<?php else: ?>false<?php endif; ?>;
    rlConfig['template_type']                    = <?php if ($this->_tpl_vars['tpl_settings']['type']): ?>'<?php echo $this->_tpl_vars['tpl_settings']['type']; ?>
'<?php else: ?>false<?php endif; ?>;
    rlConfig['domain']                           = '<?php echo $this->_tpl_vars['domain_info']['domain']; ?>
';
    rlConfig['host']                             = '<?php echo $this->_tpl_vars['domain_info']['host']; ?>
'; // @since 4.9.1
    rlConfig['domain_path']                      = '<?php echo $this->_tpl_vars['domain_info']['path']; ?>
';
    rlConfig['isHttps']                          = <?php if ($this->_tpl_vars['domain_info']['isHttps']): ?>true<?php else: ?>false<?php endif; ?>;
    rlConfig['map_search_listings_limit']        = <?php if ($this->_tpl_vars['config']['map_search_listings_limit']): ?><?php echo $this->_tpl_vars['config']['map_search_listings_limit']; ?>
<?php else: ?>500<?php endif; ?>;
    rlConfig['map_search_listings_limit_mobile'] = <?php if ($this->_tpl_vars['config']['map_search_listings_limit_mobile']): ?><?php echo $this->_tpl_vars['config']['map_search_listings_limit_mobile']; ?>
<?php else: ?>75<?php endif; ?>;
    rlConfig['price_delimiter']                  = <?php if ($this->_tpl_vars['config']['price_delimiter'] == '"'): ?>'<?php echo $this->_tpl_vars['config']['price_delimiter']; ?>
'<?php else: ?>"<?php echo $this->_tpl_vars['config']['price_delimiter']; ?>
"<?php endif; ?>;
    rlConfig['price_separator']                  = "<?php echo $this->_tpl_vars['config']['price_separator']; ?>
";
    rlConfig['random_block_slideshow_delay']     = '<?php echo $this->_tpl_vars['config']['random_block_slideshow_delay']; ?>
';
    rlConfig['template_name']                    = '<?php echo $this->_tpl_vars['tpl_settings']['name']; ?>
';
    rlConfig['map_provider']                     = '<?php echo $this->_tpl_vars['config']['map_provider']; ?>
';
    rlConfig['map_default_zoom']                 = '<?php echo $this->_tpl_vars['config']['map_default_zoom']; ?>
';
    rlConfig['upload_max_size']                  = <?php echo $this->_tpl_vars['upload_max_size']; ?>
;
    rlConfig['expire_languages']                 = <?php if ($this->_tpl_vars['config']['expire_languages']): ?><?php echo $this->_tpl_vars['config']['expire_languages']; ?>
<?php else: ?>12<?php endif; ?>;
    rlConfig['static_files_revision']             = <?php echo $this->_tpl_vars['config']['static_files_revision']; ?>
; // @since 4.9.1
    rlConfig['static_map_provider']              = '<?php echo $this->_tpl_vars['config']['static_map_provider']; ?>
'; // @since 4.9.2

    var rlAccountInfo = new Array();
    rlAccountInfo['ID'] = <?php if ($this->_tpl_vars['account_info']): ?><?php echo $this->_tpl_vars['account_info']['ID']; ?>
<?php else: ?>null<?php endif; ?>;

    var qtip_style = new Object(<?php echo '{'; ?>

        width      : '<?php if ($this->_tpl_vars['tpl_settings']['qtip']['width']): ?><?php echo $this->_tpl_vars['tpl_settings']['qtip']['width']; ?>
<?php else: ?>auto<?php endif; ?>',
        background : '#<?php if ($this->_tpl_vars['tpl_settings']['qtip']['background']): ?><?php echo $this->_tpl_vars['tpl_settings']['qtip']['background']; ?>
<?php else: ?>396932<?php endif; ?>',
        color      : '#<?php if ($this->_tpl_vars['tpl_settings']['qtip']['color']): ?><?php echo $this->_tpl_vars['tpl_settings']['qtip']['color']; ?>
<?php else: ?>ffffff<?php endif; ?>',
        tip        : '<?php if ($this->_tpl_vars['tpl_settings']['qtip']['tip']): ?><?php echo $this->_tpl_vars['tpl_settings']['qtip']['tip']; ?>
<?php else: ?>bottomLeft<?php endif; ?>',
        border     : <?php echo '{'; ?>

            width  : <?php if ($this->_tpl_vars['tpl_settings']['qtip']['b_width']): ?><?php echo $this->_tpl_vars['tpl_settings']['qtip']['b_width']; ?>
<?php else: ?>7<?php endif; ?>,
            radius : <?php if ($this->_tpl_vars['tpl_settings']['qtip']['b_radius']): ?><?php echo $this->_tpl_vars['tpl_settings']['qtip']['b_radius']; ?>
<?php else: ?>0<?php endif; ?>,
            color  : '#<?php if ($this->_tpl_vars['tpl_settings']['qtip']['b_color']): ?><?php echo $this->_tpl_vars['tpl_settings']['qtip']['b_color']; ?>
<?php else: ?>396932<?php endif; ?>'
        <?php echo '}
    }'; ?>
);
</script>

<?php 
    if (in_array($GLOBALS['page_info']['Controller'], array('listing_details', 'listing_type'))) {
        $this->assign('navIcons', ' ');
    }
 ?>