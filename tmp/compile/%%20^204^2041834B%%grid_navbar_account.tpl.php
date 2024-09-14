<?php /* Smarty version 2.6.31, created on 2024-04-26 02:18:34
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/grid_navbar_account.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'rlHook', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/grid_navbar_account.tpl', 15, false),array('modifier', 'in_array', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/grid_navbar_account.tpl', 91, false),)), $this); ?>
<!-- grid navigation bar for accounts -->

<?php $this->assign('grid_mode', $_COOKIE['grid_mode_account']); ?>
<?php if (! $this->_tpl_vars['grid_mode']): ?>
	<?php $this->assign('grid_mode', 'grid'); ?>
<?php endif; ?>

<?php 
	$types = array('asc' => 'ascending', 'desc' => 'descending'); $this -> assign('sort_types', $types);
	$sort = array('price', 'number', 'custom', 'date'); $this -> assign('sf_types', $sort);
 ?>

<div class="grid_navbar">
	<div class="switcher">
		<div class="hook"><?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'accountGridNavBar'), $this);?>
</div>
		<div class="buttons"><?php echo '<div data-type="grid" class="grid'; ?><?php if ($this->_tpl_vars['grid_mode'] == 'grid'): ?><?php echo ' active'; ?><?php endif; ?><?php echo '" title="'; ?><?php echo $this->_tpl_vars['lang']['gallery_view']; ?><?php echo '"><div><span></span><span></span><span></span><span></span></div></div>'; ?><?php if ($this->_tpl_vars['config']['map_module']): ?><?php echo '<div data-type="map" class="map'; ?><?php if ($this->_tpl_vars['grid_mode'] == 'map'): ?><?php echo ' active'; ?><?php endif; ?><?php echo '" title="'; ?><?php echo $this->_tpl_vars['lang']['map']; ?><?php echo '"><div><span></span></div></div>'; ?><?php endif; ?><?php echo ''; ?>
</div>
	</div>

    <script class="fl-js-dynamic">
    <?php echo '

    $(function(){
        var $buttons  = $(\'div.switcher > div.buttons > div\');
        var $sorting  = $(\'div.grid_navbar > div.sorting > div.current\');
        var $accounts = $(\'#accounts\');
        var $map      = $(\'#accounts_map\');
        var view      = readCookie(\'grid_mode_account\');

        $buttons.click(function(){
            $buttons.filter(\'.active\').removeClass(\'active\');

            var view         = $(this).data(\'type\');
            var currentClass = $accounts.attr(\'class\').split(\' \')[0];

            createCookie(\'grid_mode_account\', view, 365);

            $(this).addClass(\'active\');

            $accounts.attr(\'class\', $accounts.attr(\'class\').replace(currentClass, view));
            $accounts[view == \'map\' ? \'hide\' : \'show\']();
            $map[view == \'map\' ? \'show\' : \'hide\']();
            $sorting[view == \'map\' ? \'addClass\' : \'removeClass\'](\'disabled\');

            if (view == \'map\') {
                if ($map.find(\'> *\').length > 0
                    || typeof accounts_map_data == \'undefined\'
                    || !accounts_map_data.length
                ) {
                    return;
                }

                flUtil.loadStyle(rlConfig[\'map_api_css\']);
                flUtil.loadScript(rlConfig[\'map_api_js\'], function(){
                    flMap.init($map, {
                        addresses: accounts_map_data,
                        zoom: rlConfig[\'map_default_zoom\'],
                        markerCluster: true
                    });
                });
            }
        });

        if (typeof accounts_map_data == \'undefined\' || accounts_map_data.length <= 0) {
            $buttons.filter(\'.map\').remove();

            if (view == \'map\') {
                $buttons.filter(\'.list\').trigger(\'click\');
            }
        } else if (view == \'map\') {
            $buttons.filter(\'.map\').trigger(\'click\');
        }
    });

    '; ?>

    </script>

	<?php if ($this->_tpl_vars['sorting']): ?>
		<div class="sorting">
			<div class="current<?php if ($this->_tpl_vars['grid_mode'] == 'map'): ?> disabled<?php endif; ?>">
				<?php echo $this->_tpl_vars['lang']['sort_by']; ?>
: 
				<span class="link"><?php if ($this->_tpl_vars['sort_by']): ?><?php echo $this->_tpl_vars['sorting'][$this->_tpl_vars['sort_by']]['name']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['date']; ?>
<?php endif; ?></span>
				<span class="arrow"></span>
			</div>
			<ul class="fields">
			<?php $_from = $this->_tpl_vars['sorting']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['fSorting'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fSorting']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sort_key'] => $this->_tpl_vars['field_item']):
        $this->_foreach['fSorting']['iteration']++;
?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['field_item']['Type'])) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['sf_types']) : in_array($_tmp, $this->_tpl_vars['sf_types']))): ?>
					<?php $_from = $this->_tpl_vars['sort_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['st_key'] => $this->_tpl_vars['st']):
?>
						<li><a rel="nofollow" <?php if (( $this->_tpl_vars['sort_by'] == $this->_tpl_vars['sort_key'] && $this->_tpl_vars['sort_type'] == $this->_tpl_vars['st_key'] ) || ( $this->_tpl_vars['field_item']['default'] && ! $this->_tpl_vars['sort_by'] && $this->_tpl_vars['st_key'] == 'asc' )): ?>class="active"<?php endif; ?> title="<?php echo $this->_tpl_vars['lang']['sort_listings_by']; ?>
 <?php echo $this->_tpl_vars['field_item']['name']; ?>
 (<?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['st']]; ?>
)" href="<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?>?<?php else: ?>index.php?<?php echo $this->_tpl_vars['pageInfo']['query_string']; ?>
&<?php endif; ?>sort_by=<?php echo $this->_tpl_vars['sort_key']; ?>
&sort_type=<?php echo $this->_tpl_vars['st_key']; ?>
"><?php echo $this->_tpl_vars['field_item']['name']; ?>
 (<?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['st']]; ?>
)</a></li>
					<?php endforeach; endif; unset($_from); ?>
				<?php else: ?>
					<li><a rel="nofollow" <?php if ($this->_tpl_vars['sort_by'] == $this->_tpl_vars['sort_key'] || ( $this->_tpl_vars['field_item']['default'] && ! $this->_tpl_vars['sort_by'] )): ?>class="active"<?php endif; ?> title="<?php echo $this->_tpl_vars['lang']['sort_listings_by']; ?>
 <?php echo $this->_tpl_vars['field_item']['name']; ?>
" href="<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?>?<?php else: ?>index.php?<?php echo $this->_tpl_vars['pageInfo']['query_string']; ?>
&<?php endif; ?>sort_by=<?php echo $this->_tpl_vars['sort_key']; ?>
&sort_type=asc"><?php echo $this->_tpl_vars['field_item']['name']; ?>
</a></li>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
			<?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'accountAfterSorting'), $this);?>

			</ul>
		</div>
	<?php endif; ?>
</div>

<!-- grid navigation bar for accounts end -->