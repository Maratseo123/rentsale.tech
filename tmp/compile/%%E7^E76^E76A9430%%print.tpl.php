<?php /* Smarty version 2.6.31, created on 2024-05-11 05:38:20
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/print.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/print.tpl', 32, false),array('modifier', 'replace', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/print.tpl', 118, false),array('modifier', 'date_format', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/print.tpl', 134, false),array('function', 'encodeEmail', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/print.tpl', 157, false),array('function', 'staticMap', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/print.tpl', 170, false),array('function', 'rlHook', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/print.tpl', 235, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

<title>
<?php echo $this->_tpl_vars['config']['site_name']; ?>

</title>

<meta name="generator" content="Flynax Classifieds Software" />
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['config']['encoding']; ?>
" />
<meta name="robots" content="noindex, follow">

<link href="<?php echo $this->_tpl_vars['rlTplBase']; ?>
css/print.css?rev=<?php echo $this->_tpl_vars['config']['static_files_revision']; ?>
" type="text/css" rel="stylesheet" />

<link type="image/x-icon" rel="shortcut icon" href="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/favicon.ico?rev=<?php echo $this->_tpl_vars['config']['static_files_revision']; ?>
" />

<script type="text/javascript" src="<?php echo (defined('RL_LIBS_URL') ? @RL_LIBS_URL : null); ?>
jquery/jquery.js?rev=<?php echo $this->_tpl_vars['config']['static_files_revision']; ?>
"></script>
<script src="<?php echo (defined('RL_LIBS_URL') ? @RL_LIBS_URL : null); ?>
javascript/system.lib.js?rev=<?php echo $this->_tpl_vars['config']['static_files_revision']; ?>
"></script>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'js_config.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script type="text/javascript" src="<?php echo (defined('RL_LIBS_URL') ? @RL_LIBS_URL : null); ?>
jquery/cookie.js?rev=<?php echo $this->_tpl_vars['config']['static_files_revision']; ?>
"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
js/lib.js?rev=<?php echo $this->_tpl_vars['config']['static_files_revision']; ?>
"></script>

</head>
<body<?php if ((defined('RL_LANG_DIR') ? @RL_LANG_DIR : null) == 'rtl'): ?> dir="rtl"<?php endif; ?>>
	<div class="print-button">
		<input title="<?php echo $this->_tpl_vars['lang']['print_page']; ?>
" onclick="$(this).parent().hide();window.print();" type="button" value="<?php echo $this->_tpl_vars['lang']['print_page']; ?>
" />
	</div>

    <?php $this->assign('logo_ext', 'png'); ?>
    <?php $this->assign('logo_file', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=(defined('RL_ROOT') ? @RL_ROOT : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'templates/') : smarty_modifier_cat($_tmp, 'templates/')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['config']['template']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['config']['template'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '/img/logo.svg') : smarty_modifier_cat($_tmp, '/img/logo.svg'))); ?>

    <?php if (is_file ( $this->_tpl_vars['logo_file'] )): ?>
        <?php $this->assign('logo_ext', 'svg'); ?>
    <?php endif; ?>

	<div class="header">
		<div class="two-inline left clearfix">
			<img src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/logo.<?php echo $this->_tpl_vars['logo_ext']; ?>
?rev=<?php echo $this->_tpl_vars['config']['static_files_revision']; ?>
" />
			<div class="site-name"><?php echo $this->_tpl_vars['config']['site_name']; ?>
</div>
		</div>
	</div>

	<div class="container">
		<?php if ($_GET['item'] == 'listing'): ?>
            <div class="two-inline">
                <?php if ($this->_tpl_vars['price_tag_value']): ?>
                    <?php $_from = $this->_tpl_vars['listing']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field_group']):
?>
                        <?php if (isset ( $this->_tpl_vars['field_group']['Fields']['time_frame'] ) && $this->_tpl_vars['field_group']['Fields']['time_frame']['value']): ?>
                            <?php $this->assign('time_frame_value', $this->_tpl_vars['field_group']['Fields']['time_frame']['value']); ?>
                        <?php endif; ?>
                        <?php if (isset ( $this->_tpl_vars['field_group']['Fields']['sale_rent'] ) && $this->_tpl_vars['field_group']['Fields']['sale_rent']['source']['0']): ?>
                            <?php $this->assign('sale_rent_value', $this->_tpl_vars['field_group']['Fields']['sale_rent']['source']['0']); ?>
                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>

                    <div class="price-tag">
                        <span><?php echo $this->_tpl_vars['price_tag_value']; ?>
</span>
                        <?php if ($this->_tpl_vars['sale_rent_value'] == 2 && $this->_tpl_vars['time_frame_value']): ?> / <?php echo $this->_tpl_vars['time_frame_value']; ?>
<?php endif; ?>
                    </div>
                <?php endif; ?>
    			<h1><?php echo $this->_tpl_vars['listing_title']; ?>
</h1>
            </div>

			<?php if ($this->_tpl_vars['main_photo']): ?>
				<div class="pic-gallery">
					<img alt="" src="<?php echo $this->_tpl_vars['main_photo']; ?>
" />
				</div>
			<?php endif; ?>

			<div class="details clearfix">
				<div class="listing">
					<h2><?php echo $this->_tpl_vars['lang']['listing_details']; ?>
</h2>

					<div>
						<?php $_from = $this->_tpl_vars['listing']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['group']):
?>
							<?php if ($this->_tpl_vars['group']['Group_ID']): ?>
								<?php $this->assign('hide', true); ?>
								<?php if ($this->_tpl_vars['group']['Fields'] && $this->_tpl_vars['group']['Display']): ?>
									<?php $this->assign('hide', false); ?>
								<?php endif; ?>

								<?php $this->assign('value_counter', '0'); ?>
								<?php $_from = $this->_tpl_vars['group']['Fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['groupsF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['groupsF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['group_values']):
        $this->_foreach['groupsF']['iteration']++;
?>
									<?php if ($this->_tpl_vars['group_values']['value'] == '' || ! $this->_tpl_vars['group_values']['Details_page']): ?>
										<?php $this->assign('value_counter', $this->_tpl_vars['value_counter']+1); ?>
									<?php endif; ?>
								<?php endforeach; endif; unset($_from); ?>

								<?php if (! empty ( $this->_tpl_vars['group']['Fields'] ) && ( $this->_foreach['groupsF']['total'] != $this->_tpl_vars['value_counter'] )): ?>
									<summary class="group-name"><?php echo $this->_tpl_vars['group']['name']; ?>
</summary>
									<section>
										<?php $_from = $this->_tpl_vars['group']['Fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['fListings'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fListings']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['item']):
        $this->_foreach['fListings']['iteration']++;
?>
											<?php if (! empty ( $this->_tpl_vars['item']['value'] ) && $this->_tpl_vars['item']['Details_page']): ?>
												<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'field_out.tpl') : smarty_modifier_cat($_tmp, 'field_out.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
											<?php endif; ?>
										<?php endforeach; endif; unset($_from); ?>
									</section>
								<?php endif; ?>
							<?php else: ?>
								<?php if ($this->_tpl_vars['group']['Fields']): ?>
									<?php $_from = $this->_tpl_vars['group']['Fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
										<?php if (! empty ( $this->_tpl_vars['item']['value'] ) && $this->_tpl_vars['item']['Details_page']): ?>
											<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'field_out.tpl') : smarty_modifier_cat($_tmp, 'field_out.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
										<?php endif; ?>
									<?php endforeach; endif; unset($_from); ?>
								<?php endif; ?>
							<?php endif; ?>
						<?php endforeach; endif; unset($_from); ?>
					</div>
				</div>

                <?php $this->assign('type_replace', ('{')."account_type".('}')); ?>

                <?php if ($this->_tpl_vars['allow_contacts']): ?>
				<div class="owner">
					<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['account_type_details'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['type_replace'], $this->_tpl_vars['seller_info']['Type_name']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['type_replace'], $this->_tpl_vars['seller_info']['Type_name'])); ?>
</h2>

					<div>
						<div class="profile two-inline clearfix">
							<?php if ($this->_tpl_vars['seller_info']['Photo']): ?>
								<div class="picture">
									<img style="<?php echo 'background-image: url(\''; ?><?php echo (defined('RL_FILES_URL') ? @RL_FILES_URL : null); ?><?php echo ''; ?><?php echo $this->_tpl_vars['seller_info']['Photo']; ?><?php echo '\');width:'; ?><?php if ($this->_tpl_vars['seller_info']['Thumb_width']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['seller_info']['Thumb_width']; ?><?php echo ''; ?><?php else: ?><?php echo '110'; ?><?php endif; ?><?php echo 'px;height:'; ?><?php if ($this->_tpl_vars['seller_info']['Thumb_height']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['seller_info']['Thumb_height']; ?><?php echo ''; ?><?php else: ?><?php echo '100'; ?><?php endif; ?><?php echo 'px;'; ?>
"
                                        alt="<?php echo $this->_tpl_vars['lang']['seller_thumbnail']; ?>
"
                                        src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" />
								</div>
							<?php endif; ?>
							<div class="summary">
								<?php $this->assign('date_replace', ('{')."date".('}')); ?>
								<?php $this->assign('date', ((is_array($_tmp=$this->_tpl_vars['seller_info']['Date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)) : smarty_modifier_date_format($_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)))); ?>

								<span class="name"><?php echo $this->_tpl_vars['seller_info']['Full_name']; ?>
</span>
								<div class="type"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['account_type_since_data'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['type_replace'], $this->_tpl_vars['seller_info']['Type_name']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['type_replace'], $this->_tpl_vars['seller_info']['Type_name'])))) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['date_replace'], $this->_tpl_vars['date']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['date_replace'], $this->_tpl_vars['date'])); ?>
</div>

								<?php if ($this->_tpl_vars['seller_info']['Fields']['about_me']['value']): ?>
									<div class="about"><?php echo $this->_tpl_vars['seller_info']['Fields']['about_me']['value']; ?>
</div>
								<?php endif; ?>
							</div>
						</div>

						<?php if ($this->_tpl_vars['seller_info']['Fields']): ?>
							<summary class="group-name"><?php echo $this->_tpl_vars['lang']['personal_details']; ?>
</summary>
							<section>
								<?php $_from = $this->_tpl_vars['seller_info']['Fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
									<?php if (! empty ( $this->_tpl_vars['item']['value'] ) && $this->_tpl_vars['item']['Details_page'] && $this->_tpl_vars['item']['Key'] != 'First_name' && $this->_tpl_vars['item']['Key'] != 'Last_name' && $this->_tpl_vars['item']['Key'] != 'about_me'): ?>
										<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'field_out.tpl') : smarty_modifier_cat($_tmp, 'field_out.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
									<?php endif; ?>
								<?php endforeach; endif; unset($_from); ?>

								<?php if ($this->_tpl_vars['seller_info']['Display_email']): ?>
									<div class="table-cell small">
										<div class="name"><?php echo $this->_tpl_vars['lang']['mail']; ?>
</div>
										<div class="value"><?php if ($this->_tpl_vars['allow_contacts']): ?><?php echo $this->_plugins['function']['encodeEmail'][0][0]->encodeEmail(array('email' => $this->_tpl_vars['seller_info']['Mail']), $this);?>
<?php else: ?><?php $this->assign('mail_replace', ('{')."field".('}')); ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['fake_value'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['mail_replace'], $this->_tpl_vars['lang']['mail']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['mail_replace'], $this->_tpl_vars['lang']['mail'])); ?>
<?php endif; ?></div>
									</div>
								<?php endif; ?>
							</section>
						<?php endif; ?>
					</div>
				</div>
				<?php endif; ?>
			</div>

			<?php if ($this->_tpl_vars['config']['map_module'] && $this->_tpl_vars['location'] && $this->_tpl_vars['config']['google_map_key']): ?>
				<div class="map">
                    <img alt="<?php echo $this->_tpl_vars['lang']['expand_map']; ?>
"
                         src="<?php echo $this->_plugins['function']['staticMap'][0][0]->staticMap(array('location' => $this->_tpl_vars['location']['direct'],'zoom' => $this->_tpl_vars['config']['map_default_zoom'],'width' => 480,'height' => 150), $this);?>
"
                         srcset="<?php echo $this->_plugins['function']['staticMap'][0][0]->staticMap(array('location' => $this->_tpl_vars['location']['direct'],'zoom' => $this->_tpl_vars['config']['map_default_zoom'],'width' => 480,'height' => 150,'scale' => 2), $this);?>
 2x" />
					<span class="media-enlarge"><span></span></span>
				</section>
			<?php endif; ?>
		<?php elseif ($_GET['item'] == 'browse' || $_GET['item'] == 'search' || $_GET['item'] == 'listings'): ?>
			<table class="sTable">
			<tr>
                <?php $this->assign('replace_category', ('{')."category".('}')); ?>
				<td><h1><?php if ($_GET['item'] == 'browse'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['listings_of_category'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['replace_category'], $this->_tpl_vars['rss']['title']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['replace_category'], $this->_tpl_vars['rss']['title'])); ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['search_results']; ?>
<?php endif; ?></h1></td>
				<td align="right"><input title="<?php echo $this->_tpl_vars['lang']['print_page']; ?>
" onclick="window.print();$(this).slideUp('slow');" type="button" value="<?php echo $this->_tpl_vars['lang']['print_page']; ?>
" /></td>
			</tr>
			</table>
			<div class="sLine"></div>

			<div id="listings">
				<?php if (! empty ( $this->_tpl_vars['listings'] )): ?>
					<?php $_from = $this->_tpl_vars['listings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['listing']):
?>

					<div style="padding: 13px 0;border-bottom: 1px #ccc solid;">
						<table class="sTable">
						<tr>
							<td rowspan="2" style="width: 100px;padding: 0 10px 0 0;" align="center" valign="top">
								<img src="<?php if (empty ( $this->_tpl_vars['listing']['Main_photo'] )): ?><?php echo $this->_tpl_vars['rlTplBase']; ?>
img/no-picture.jpg<?php else: ?><?php echo (defined('RL_FILES_URL') ? @RL_FILES_URL : null); ?>
<?php echo $this->_tpl_vars['listing']['Main_photo']; ?>
<?php endif; ?>" />
							</td>
							<td class="spliter" rowspan="2"></td>
							<td valign="top" style="height: 65px">
								<table>
								<?php $_from = $this->_tpl_vars['listing']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['fListings'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fListings']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['item']):
        $this->_foreach['fListings']['iteration']++;
?>
								<?php if (! empty ( $this->_tpl_vars['item']['value'] )): ?>
								<tr>
									<td valign="top" align="left">
										<div class="field"><?php echo $this->_tpl_vars['item']['name']; ?>
:</div>
									</td>
									<td style="width: 3px;"></td>
									<td valign="top" align="left">
										<div class="value">
										<?php if (($this->_foreach['fListings']['iteration'] <= 1)): ?>
											<b><?php echo $this->_tpl_vars['item']['value']; ?>
</b>
										<?php else: ?>
											<?php echo $this->_tpl_vars['item']['value']; ?>

										<?php endif; ?>
										</div>
									</td>
								</tr>
								<?php endif; ?>
								<?php endforeach; endif; unset($_from); ?>
								<tr>
									<td valign="top" align="left"><div class="field"><?php echo $this->_tpl_vars['lang']['category']; ?>
:</div></td>
									<td style="width: 3px;"></td>
									<td valign="top" align="left">
										<div class="value"><?php echo $this->_tpl_vars['listing']['name']; ?>
</div>
									</td>
								</tr>
								</table>
							</td>
						</tr>
						</table>
					</div>

					<?php endforeach; endif; unset($_from); ?>
				<?php endif; ?>
			</div>
		<?php endif; ?>

		<?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'tplPrintPage'), $this);?>


		<div class="footer">
			<span>&copy; <?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y') : smarty_modifier_date_format($_tmp, '%Y')); ?>
, <?php echo $this->_tpl_vars['lang']['powered_by']; ?>
 </span><a title="<?php echo $this->_tpl_vars['lang']['powered_by']; ?>
 <?php echo $this->_tpl_vars['lang']['copy_rights']; ?>
" href="<?php echo $this->_tpl_vars['lang']['flynax_url']; ?>
"><?php echo $this->_tpl_vars['lang']['copy_rights']; ?>
</a>
		</div>

	</div>
</body>
</html>