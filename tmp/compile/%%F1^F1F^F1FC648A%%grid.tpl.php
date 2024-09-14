<?php /* Smarty version 2.6.31, created on 2023-12-18 01:50:49
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/grid.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/grid.tpl', 41, false),array('modifier', 'date_format', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/grid.tpl', 43, false),array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/grid.tpl', 50, false),array('modifier', 'count', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/grid.tpl', 64, false),array('modifier', 'json_encode', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/grid.tpl', 95, false),array('function', 'showIntegratedBanner', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/grid.tpl', 64, false),array('function', 'mapsAPI', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/grid.tpl', 92, false),)), $this); ?>
<!-- listing grid -->

<?php if (! $this->_tpl_vars['grid_mode']): ?>
	<?php $this->assign('grid_mode', $_COOKIE['grid_mode']); ?>
<?php endif; ?>

<?php if (! $this->_tpl_vars['grid_mode']): ?>
	<?php $this->assign('grid_mode', $this->_tpl_vars['tpl_settings']['default_listing_grid_mode']); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['listing_type'] && ! $this->_tpl_vars['listing_type']['Photo'] && ! $this->_tpl_vars['tpl_settings']['listing_grid_mode_only']): ?>
	<?php $this->assign('grid_mode', 'list'); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['grid_mode'] == 'map' && ! $this->_tpl_vars['config']['map_module'] && ! $this->_tpl_vars['tpl_settings']['listing_grid_mode_only']): ?>
    <?php $this->assign('grid_mode', $this->_tpl_vars['tpl_settings']['default_listing_grid_mode']); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['periods']): ?>
	<?php $this->assign('cur_date', false); ?>
	<?php $this->assign('grid_mode', $this->_tpl_vars['tpl_settings']['default_listing_grid_mode']); ?>
	<?php $this->assign('replace_patter', ('{')."day".('}')); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['config']['map_module']): ?>
<script>var listings_map_data = new Array();</script>
<?php endif; ?>

<section id="listings" class="<?php echo $this->_tpl_vars['grid_mode']; ?>
 <?php if ($this->_tpl_vars['listing_type'] && ! $this->_tpl_vars['listing_type']['Photo']): ?>no-image<?php endif; ?> <?php if (! ( $this->_tpl_vars['periods'] && $this->_tpl_vars['tpl_settings']['listing_grid_mode_only'] )): ?>row<?php else: ?>no-gutters<?php endif; ?>">
    <?php if ($this->_tpl_vars['periods'] && $this->_tpl_vars['tpl_settings']['listing_grid_mode_only']): ?>
        <span class="group row">
    <?php endif; ?>

	<?php $_from = $this->_tpl_vars['listings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['listingsF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['listingsF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['listing']):
        $this->_foreach['listingsF']['iteration']++;
?>
		<?php if ($this->_tpl_vars['periods'] && $this->_tpl_vars['listing']['Post_date'] != $this->_tpl_vars['cur_date']): ?>
			<?php if ($this->_tpl_vars['listing']['Date_diff'] == 1): ?>
				<?php $this->assign('divider_name', $this->_tpl_vars['lang']['today']); ?>
			<?php elseif ($this->_tpl_vars['listing']['Date_diff'] == 2): ?>
				<?php $this->assign('divider_name', $this->_tpl_vars['lang']['yesterday']); ?>
			<?php elseif ($this->_tpl_vars['listing']['Date_diff'] > 2 && $this->_tpl_vars['listing']['Date_diff'] < 8): ?>
				<?php $this->assign('divider_name', ((is_array($_tmp=$this->_tpl_vars['lang']['days_ago_pattern'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['replace_patter'], $this->_tpl_vars['listing']['Date_diff']-1) : smarty_modifier_replace($_tmp, $this->_tpl_vars['replace_patter'], $this->_tpl_vars['listing']['Date_diff']-1))); ?>
			<?php else: ?>
				<?php $this->assign('divider_name', ((is_array($_tmp=$this->_tpl_vars['listing']['Post_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)) : smarty_modifier_date_format($_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)))); ?>
			<?php endif; ?>

            <?php if ($this->_tpl_vars['tpl_settings']['listing_grid_mode_only']): ?>
            </span>
            <?php endif; ?>

			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'divider.tpl') : smarty_modifier_cat($_tmp, 'divider.tpl')), 'smarty_include_vars' => array('name' => $this->_tpl_vars['divider_name'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php $this->assign('cur_date', $this->_tpl_vars['listing']['Post_date']); ?>

            <?php if ($this->_tpl_vars['tpl_settings']['listing_grid_mode_only']): ?>
            <span class="group row">
            <?php endif; ?>
		<?php endif; ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'listing.tpl') : smarty_modifier_cat($_tmp, 'listing.tpl')), 'smarty_include_vars' => array('hl' => $this->_tpl_vars['hl'],'grid_photo' => $this->_tpl_vars['grid_photo'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

        <?php if ($this->_tpl_vars['config']['banner_in_grid_position_option'] && $this->_foreach['listingsF']['iteration'] % $this->_tpl_vars['config']['banner_in_grid_position'] == 0 && ! ($this->_foreach['listingsF']['iteration'] == $this->_foreach['listingsF']['total'])): ?>
            <div class="banner-in-grid col-sm-12">
                <?php if ($this->_tpl_vars['blocks']['integrated_banner']): ?>
                    <?php echo $this->_plugins['function']['showIntegratedBanner'][0][0]->showIntegratedBanner(array('blocks' => $this->_tpl_vars['blocks'],'pageinfo' => $this->_tpl_vars['pInfo'],'listings' => count($this->_tpl_vars['listings'])), $this);?>

                <?php else: ?>
                    <div class="banner-space mx-auto d-flex h-100 w-100 justify-content-center align-items-center"><?php echo $this->_tpl_vars['lang']['banner_in_grid_phrase']; ?>
</div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['listing']['Loc_latitude'] && $this->_tpl_vars['listing']['Loc_longitude'] && $this->_tpl_vars['config']['map_module']): ?>
            <script class="fl-js-dynamic">
            listings_map_data.push(<?php echo '{'; ?>

                latLng: [<?php echo $this->_tpl_vars['listing']['Loc_latitude']; ?>
, <?php echo $this->_tpl_vars['listing']['Loc_longitude']; ?>
],
                label: '<?php echo $this->_tpl_vars['listing']['fields'][$this->_tpl_vars['config']['price_tag_field']]['value']; ?>
',
                preview: <?php echo '{'; ?>

                    id: <?php echo $this->_tpl_vars['listing']['ID']; ?>

                <?php echo '}'; ?>

            <?php echo '}'; ?>
);
            </script>
        <?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>

    <?php if ($this->_tpl_vars['periods'] && $this->_tpl_vars['tpl_settings']['listing_grid_mode_only']): ?>
    </span>
    <?php endif; ?>
</section>

<?php if ($this->_tpl_vars['config']['map_module']): ?>
    <section id="listings_map" class="hide"></section>

    <?php echo $this->_plugins['function']['mapsAPI'][0][0]->mapsAPI(array('assign' => 'mapAPI'), $this);?>


    <script>
    rlConfig['map_api_css'] = <?php echo json_encode($this->_tpl_vars['mapAPI']['css']); ?>
;
    rlConfig['map_api_js'] = <?php echo json_encode($this->_tpl_vars['mapAPI']['js']); ?>
;
    </script>
<?php endif; ?>

<!-- listing grid end -->