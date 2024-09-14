<?php /* Smarty version 2.6.31, created on 2023-12-30 14:02:54
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/my_listing.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'rlHook', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/my_listing.tpl', 3, false),array('function', 'pageUrl', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/my_listing.tpl', 42, false),array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/my_listing.tpl', 42, false),array('modifier', 'date_format', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/my_listing.tpl', 97, false),)), $this); ?>
<!-- my listing item -->

<?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'myListingTop'), $this);?>


<?php if ($this->_tpl_vars['listing']['Listing_type']): ?>
	<?php $this->assign('listing_type', $this->_tpl_vars['listing_types'][$this->_tpl_vars['listing']['Listing_type']]); ?>
<?php endif; ?>

<article class="item<?php if ($this->_tpl_vars['listing']['Featured_expire']): ?> featured<?php endif; ?> <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'tplMyListingItemClass'), $this);?>
" id="listing_<?php echo $this->_tpl_vars['listing']['ID']; ?>
"><?php echo '<div class="title"><a title="'; ?><?php echo $this->_tpl_vars['listing']['listing_title']; ?><?php echo '" '; ?><?php if ($this->_tpl_vars['config']['view_details_new_window']): ?><?php echo 'target="_blank"'; ?><?php endif; ?><?php echo ' href="'; ?><?php echo $this->_tpl_vars['listing']['url']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['listing']['listing_title']; ?><?php echo '</a></div><div class="nav">'; ?><?php if ($this->_tpl_vars['listing_type']['Photo']): ?><?php echo '<div class="info"><a title="'; ?><?php echo $this->_tpl_vars['listing']['listing_title']; ?><?php echo '" '; ?><?php if ($this->_tpl_vars['config']['view_details_new_window']): ?><?php echo 'target="_blank"'; ?><?php endif; ?><?php echo ' href="'; ?><?php echo $this->_tpl_vars['listing']['url']; ?><?php echo '"><div class="picture'; ?><?php if (! $this->_tpl_vars['listing']['Main_photo']): ?><?php echo ' no-picture'; ?><?php endif; ?><?php echo '">'; ?><?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'tplMyListingItemPhoto'), $this);?><?php echo ''; ?><?php if ($this->_tpl_vars['listing']['Featured_expire']): ?><?php echo '<div class="label"><div title="'; ?><?php echo $this->_tpl_vars['lang']['featured']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['lang']['featured']; ?><?php echo '</div></div>'; ?><?php endif; ?><?php echo '<img src="'; ?><?php if ($this->_tpl_vars['listing']['Main_photo']): ?><?php echo ''; ?><?php echo (defined('RL_FILES_URL') ? @RL_FILES_URL : null); ?><?php echo ''; ?><?php echo $this->_tpl_vars['listing']['Main_photo']; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['rlTplBase']; ?><?php echo 'img/blank_10x7.gif'; ?><?php endif; ?><?php echo '"'; ?><?php if ($this->_tpl_vars['listing']['Main_photo_x2']): ?><?php echo 'srcset="'; ?><?php echo (defined('RL_FILES_URL') ? @RL_FILES_URL : null); ?><?php echo ''; ?><?php echo $this->_tpl_vars['listing']['Main_photo_x2']; ?><?php echo ' 2x"'; ?><?php endif; ?><?php echo 'alt="'; ?><?php echo $this->_tpl_vars['listing']['listing_title']; ?><?php echo '" />'; ?><?php if (! empty ( $this->_tpl_vars['listing']['Main_photo'] ) && $this->_tpl_vars['config']['grid_photos_count']): ?><?php echo '<span accesskey="'; ?><?php echo $this->_tpl_vars['listing']['Photos_count']; ?><?php echo '"></span>'; ?><?php endif; ?><?php echo '</div></a></div>'; ?><?php endif; ?><?php echo '<div class="navigation"><ul>'; ?><?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'myListingsIconTop'), $this);?><?php echo '<li class="nav-icon"><a class="edit"href="'; ?><?php echo ''; ?><?php if ($this->_tpl_vars['listing']['Status'] == 'incomplete'): ?><?php echo ''; ?><?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'add_listing','vars' => ((is_array($_tmp='incomplete=')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['listing']['ID']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['listing']['ID']))), $this);?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'edit_listing','vars' => ((is_array($_tmp='id=')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['listing']['ID']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['listing']['ID']))), $this);?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php echo '"><span>'; ?><?php echo $this->_tpl_vars['lang']['edit_listing']; ?><?php echo '</span>&nbsp;</a></li>'; ?><?php if ($this->_tpl_vars['listing']['Subscription_ID']): ?><?php echo '<li class="nav-icon"><a class="unsubscription" id="unsubscription-'; ?><?php echo $this->_tpl_vars['listing']['ID']; ?><?php echo '" href="javascript:void(0);" accesskey="'; ?><?php echo $this->_tpl_vars['listing']['ID']; ?><?php echo '-'; ?><?php echo $this->_tpl_vars['listing']['Subscription_ID']; ?><?php echo '-'; ?><?php echo $this->_tpl_vars['listing']['Subscription_service']; ?><?php echo '"><span>'; ?><?php echo $this->_tpl_vars['lang']['unsubscription']; ?><?php echo '</span>&nbsp;</a></li>'; ?><?php endif; ?><?php echo '<li class="nav-icon"><a class="delete" id="delete_listing_'; ?><?php echo $this->_tpl_vars['listing']['ID']; ?><?php echo '" title="'; ?><?php echo $this->_tpl_vars['lang']['delete']; ?><?php echo '" href="javascript://"><span>'; ?><?php echo $this->_tpl_vars['lang']['remove']; ?><?php echo '</span>&nbsp;</a></li>'; ?><?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'myListingsIcon'), $this);?><?php echo '</ul></div><div class="stat"><ul>'; ?><?php if ($this->_tpl_vars['listing']['Plan_type'] == 'account' && ( $this->_tpl_vars['listing']['Status'] == 'active' || $this->_tpl_vars['listing']['Status'] == 'approval' )): ?><?php echo '<li class="switcher-controll"><label class="switcher switcher-status"><input type="checkbox" '; ?><?php if ($this->_tpl_vars['listing']['Status'] == 'active'): ?><?php echo 'checked="checked"'; ?><?php endif; ?><?php echo ' value="'; ?><?php echo $this->_tpl_vars['listing']['ID']; ?><?php echo '" class="default"><span></span><span class="status" data-enabled="'; ?><?php echo $this->_tpl_vars['lang']['approval']; ?><?php echo '" data-disabled="'; ?><?php echo $this->_tpl_vars['lang']['active']; ?><?php echo '"></span></label></li>'; ?><?php else: ?><?php echo '<li><div class="statuses">'; ?><?php if ($this->_tpl_vars['listing']['Status'] == 'incomplete'): ?><?php echo '<a href="'; ?><?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'add_listing','vars' => ((is_array($_tmp='incomplete=')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['listing']['ID']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['listing']['ID']))), $this);?><?php echo '" class="'; ?><?php echo $this->_tpl_vars['listing']['Status']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['listing']['Status']]; ?><?php echo '</a>'; ?><?php elseif ($this->_tpl_vars['listing']['Status'] == 'expired' || $this->_tpl_vars['listing']['Status'] == 'approval'): ?><?php echo '<a href="'; ?><?php echo $this->_tpl_vars['rlBase']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['pages']['upgrade_listing']; ?><?php echo '.html?id='; ?><?php echo $this->_tpl_vars['listing']['ID']; ?><?php echo ''; ?><?php else: ?><?php echo '?page='; ?><?php echo $this->_tpl_vars['pages']['upgrade_listing']; ?><?php echo '&amp;id='; ?><?php echo $this->_tpl_vars['listing']['ID']; ?><?php echo ''; ?><?php endif; ?><?php echo '" class="'; ?><?php echo $this->_tpl_vars['listing']['Status']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['listing']['Status']]; ?><?php echo '</a>'; ?><?php else: ?><?php echo '<span '; ?><?php if ($this->_tpl_vars['listing']['Status'] == 'pending'): ?><?php echo 'title="'; ?><?php echo $this->_tpl_vars['lang']['waiting_approval']; ?><?php echo '"'; ?><?php endif; ?><?php echo ' class="'; ?><?php echo $this->_tpl_vars['listing']['Status']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['listing']['Status']]; ?><?php echo '</span>'; ?><?php endif; ?><?php echo '</div></li>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['listing']['Plan_type'] == 'account' && $this->_tpl_vars['account_info']['plan']['Advanced_mode']): ?><?php echo '<li class="switcher-controll">'; ?><?php if ($this->_tpl_vars['listing']['Status'] != 'expired'): ?><?php echo '<label class="switcher switcher-featured"><input type="checkbox" '; ?><?php if ($this->_tpl_vars['listing']['Featured_expire']): ?><?php echo 'checked="checked"'; ?><?php endif; ?><?php echo ' value="'; ?><?php echo $this->_tpl_vars['listing']['ID']; ?><?php echo '" class="default"><span></span><span class="status" data-enabled="'; ?><?php echo $this->_tpl_vars['lang']['featured_off']; ?><?php echo '" data-disabled="'; ?><?php echo $this->_tpl_vars['lang']['featured_on']; ?><?php echo '"></span></label>'; ?><?php endif; ?><?php echo '</li>'; ?><?php endif; ?><?php echo '<li><span class="name">'; ?><?php echo $this->_tpl_vars['lang']['added']; ?><?php echo '</span> '; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['listing']['Date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)) : smarty_modifier_date_format($_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null))); ?><?php echo '</li>'; ?><?php if ($this->_tpl_vars['listing']['Plan_expire']): ?><?php echo '<li><span class="name">'; ?><?php echo $this->_tpl_vars['lang']['active_till']; ?><?php echo '</span> '; ?><?php if ($this->_tpl_vars['listing']['Plan_expire'] == $this->_tpl_vars['listing']['Pay_date']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['lang']['unlimited']; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['listing']['Plan_expire'])) ? $this->_run_mod_handler('date_format', true, $_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)) : smarty_modifier_date_format($_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null))); ?><?php echo ''; ?><?php endif; ?><?php echo '</li>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['listing']['Plan_key'] && $this->_tpl_vars['listing']['Plan_type'] != 'account'): ?><?php echo '<li><span class="name">'; ?><?php echo $this->_tpl_vars['lang']['plan']; ?><?php echo '</span> '; ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['listing']['Plan_key']]; ?><?php echo '<div style="padding-top: 0px"><a href="'; ?><?php echo $this->_tpl_vars['rlBase']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['pages']['upgrade_listing']; ?><?php echo '.html?id='; ?><?php echo $this->_tpl_vars['listing']['ID']; ?><?php echo ''; ?><?php else: ?><?php echo '?page='; ?><?php echo $this->_tpl_vars['pages']['upgrade_listing']; ?><?php echo '&amp;id='; ?><?php echo $this->_tpl_vars['listing']['ID']; ?><?php echo ''; ?><?php endif; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['lang']['upgrade_plan']; ?><?php echo '</a></div></li>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['listing']['Featured_expire']): ?><?php echo '<li><span class="name">'; ?><?php echo $this->_tpl_vars['lang']['featured_till']; ?><?php echo '</span> '; ?><?php if ($this->_tpl_vars['listing']['Featured_expire'] == $this->_tpl_vars['listing']['Featured_date']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['lang']['unlimited']; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['listing']['Featured_expire'])) ? $this->_run_mod_handler('date_format', true, $_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)) : smarty_modifier_date_format($_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null))); ?><?php echo ''; ?><?php endif; ?><?php echo '</li>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['listing']['Shows'] && $this->_tpl_vars['config']['count_listing_visits']): ?><?php echo '<li><span class="name">'; ?><?php echo $this->_tpl_vars['lang']['shows']; ?><?php echo '</span> '; ?><?php echo $this->_tpl_vars['listing']['Shows']; ?><?php echo '</li>'; ?><?php endif; ?><?php echo ''; ?><?php if (! $this->_tpl_vars['listing']['Featured_expire'] && $this->_tpl_vars['listing']['Status'] == 'active' && $this->_tpl_vars['available_plans'] && $this->_tpl_vars['listing']['Plan_type'] != 'account'): ?><?php echo '<li><a title="'; ?><?php echo $this->_tpl_vars['lang']['make_featured']; ?><?php echo '" class="nav_icon text_button" href="'; ?><?php echo $this->_tpl_vars['rlBase']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['pages']['upgrade_listing']; ?><?php echo '/featured.html?id='; ?><?php echo $this->_tpl_vars['listing']['ID']; ?><?php echo ''; ?><?php else: ?><?php echo '?page='; ?><?php echo $this->_tpl_vars['pages']['upgrade_listing']; ?><?php echo '&amp;id='; ?><?php echo $this->_tpl_vars['listing']['ID']; ?><?php echo '&amp;featured'; ?><?php endif; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['lang']['make_featured']; ?><?php echo '</a></li>'; ?><?php endif; ?><?php echo ''; ?><?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'myListingsafterStatFields'), $this);?><?php echo '</ul></div></div>'; ?>
</article>

<!-- my listing item end -->