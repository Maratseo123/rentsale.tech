<?php /* Smarty version 2.6.31, created on 2023-12-18 02:02:08
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/account_page_location.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/account_page_location.tpl', 11, false),array('modifier', 'json_encode', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/account_page_location.tpl', 31, false),array('function', 'staticMap', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/account_page_location.tpl', 20, false),array('function', 'addCSS', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/account_page_location.tpl', 25, false),array('function', 'mapsAPI', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/account_page_location.tpl', 27, false),)), $this); ?>
<!-- contact person location tpl -->

<?php if ($this->_tpl_vars['contact']): ?>
<?php $this->assign('account', $this->_tpl_vars['contact']); ?>
<?php endif; ?>

<div class="location-cont clearfix">
	<div class="location-info">
		<?php $_from = $this->_tpl_vars['account']['Fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['fListings'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fListings']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['fListings']['iteration']++;
?>
			<?php if ($this->_tpl_vars['item']['Map'] && ! empty ( $this->_tpl_vars['item']['value'] ) && $this->_tpl_vars['item']['Details_page']): ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'field_out.tpl') : smarty_modifier_cat($_tmp, 'field_out.tpl')), 'smarty_include_vars' => array('small' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php $this->assign('map_fields', true); ?>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
	</div>

	<?php if ($this->_tpl_vars['config']['map_module'] && $this->_tpl_vars['location']['direct']): ?>
		<div title="<?php echo $this->_tpl_vars['lang']['expand_map']; ?>
" class="map-capture">
			<img alt="<?php echo $this->_tpl_vars['lang']['expand_map']; ?>
" 
                 src="<?php echo $this->_plugins['function']['staticMap'][0][0]->staticMap(array('location' => $this->_tpl_vars['location']['direct'],'zoom' => $this->_tpl_vars['config']['map_default_zoom'],'width' => 480,'height' => 180), $this);?>
" 
                 srcset="<?php echo $this->_plugins['function']['staticMap'][0][0]->staticMap(array('location' => $this->_tpl_vars['location']['direct'],'zoom' => $this->_tpl_vars['config']['map_default_zoom'],'width' => 480,'height' => 180,'scale' => 2), $this);?>
 2x" />
			<span class="media-enlarge"><span></span></span>
		</div>

        <?php echo $this->_plugins['function']['addCSS'][0][0]->smartyAddCSS(array('file' => ((is_array($_tmp=$this->_tpl_vars['rlTplBase'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'components/popup/popup.css') : smarty_modifier_cat($_tmp, 'components/popup/popup.css'))), $this);?>


        <?php echo $this->_plugins['function']['mapsAPI'][0][0]->mapsAPI(array('assign' => 'mapAPI'), $this);?>


        <script class="fl-js-dynamic">
        rlConfig['mapAPI'] = [];
        rlConfig['mapAPI']['css'] = JSON.parse('<?php echo json_encode($this->_tpl_vars['mapAPI']['css']); ?>
');
        rlConfig['mapAPI']['js']  = JSON.parse('<?php echo json_encode($this->_tpl_vars['mapAPI']['js']); ?>
');
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

                        var accountMap = new mapClass();

                        accountMap.init($(\'#map_fullscreen\'), {
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
	<?php else: ?>
		<?php if (! $this->_tpl_vars['map_fields']): ?>
			<div title="<?php echo $this->_tpl_vars['lang']['expand_map']; ?>
"><?php echo $this->_tpl_vars['lang']['no_account_location']; ?>
</div>
		<?php endif; ?>
	<?php endif; ?>
</div>

<!-- contact person location tpl end -->