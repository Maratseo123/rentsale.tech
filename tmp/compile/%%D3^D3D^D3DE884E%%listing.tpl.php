<?php /* Smarty version 2.6.31, created on 2024-04-26 02:18:42
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/listing.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'rlHook', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/listing.tpl', 3, false),array('modifier', 'in_array', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/listing.tpl', 68, false),)), $this); ?>
<!-- listing item -->

<?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'listingTop'), $this);?>


<?php if ($this->_tpl_vars['listing']['Listing_type']): ?>
	<?php $this->assign('listing_type', $this->_tpl_vars['listing_types'][$this->_tpl_vars['listing']['Listing_type']]); ?>
<?php endif; ?>

<article class="item<?php if ($this->_tpl_vars['listing']['Featured']): ?> featured<?php endif; ?><?php if (! $this->_tpl_vars['listing_type']['Photo']): ?> no-image<?php endif; ?> two-inline col-sm-4<?php if (! $this->_tpl_vars['side_bar_exists']): ?> col-md-3<?php endif; ?> <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'tplListingItemClass'), $this);?>
">
	<div class="navigation-column">
		<div class="before-nav"><?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'listingBeforeStats'), $this);?>
</div>

		<ul class="nav-column<?php if (! $this->_tpl_vars['listing']['fields'][$this->_tpl_vars['config']['price_tag_field']]['value']): ?> stick-top<?php endif; ?>">
			<?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'listingNavIcons'), $this);?>

            <li id="fav_<?php echo $this->_tpl_vars['listing']['ID']; ?>
" class="favorite add" title="<?php echo $this->_tpl_vars['lang']['add_to_favorites']; ?>
"><span class="icon"></span><span class="link"><?php echo $this->_tpl_vars['lang']['add_to_favorites']; ?>
</span></li>
		</ul>

		<span class="category-info hide">
            <a href="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pages'][$this->_tpl_vars['listing_type']['Page_key']]; ?>
/<?php echo $this->_tpl_vars['listing']['Path']; ?>
<?php if ($this->_tpl_vars['listing_type']['Cat_postfix']): ?>.html<?php else: ?>/<?php endif; ?><?php else: ?>?page=<?php echo $this->_tpl_vars['pages'][$this->_tpl_vars['listing_type']['Page_key']]; ?>
&category=<?php echo $this->_tpl_vars['listing']['Category_ID']; ?>
<?php endif; ?>">
                <?php echo $this->_tpl_vars['listing']['name']; ?>

            </a>
		</span>
	</div>

	<div class="main-column clearfix">
		<?php if ($this->_tpl_vars['listing_type']['Photo']): ?>
			<a title="<?php echo $this->_tpl_vars['listing']['listing_title']; ?>
" <?php if ($this->_tpl_vars['config']['view_details_new_window']): ?>target="_blank"<?php endif; ?> href="<?php echo $this->_tpl_vars['listing']['url']; ?>
">
				<div class="picture<?php if (! $this->_tpl_vars['listing']['Main_photo']): ?> no-picture<?php endif; ?>">
                    <img src="<?php if ($this->_tpl_vars['listing']['Main_photo']): ?><?php echo (defined('RL_FILES_URL') ? @RL_FILES_URL : null); ?>
<?php echo $this->_tpl_vars['listing']['Main_photo']; ?>
<?php else: ?><?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank_10x7.gif<?php endif; ?>"
                        <?php if ($this->_tpl_vars['listing']['Main_photo_x2']): ?>srcset="<?php echo (defined('RL_FILES_URL') ? @RL_FILES_URL : null); ?>
<?php echo $this->_tpl_vars['listing']['Main_photo_x2']; ?>
 2x"<?php endif; ?>
                        alt="<?php echo $this->_tpl_vars['listing']['listing_title']; ?>
" />
                    <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'tplListingItemPhoto'), $this);?>

                    <?php if ($this->_tpl_vars['listing']['Featured']): ?><div class="label" title="<?php echo $this->_tpl_vars['lang']['featured']; ?>
"><?php echo $this->_tpl_vars['lang']['featured']; ?>
</div><?php endif; ?>
					<?php if (! empty ( $this->_tpl_vars['listing']['Main_photo'] ) && $this->_tpl_vars['config']['grid_photos_count']): ?>
						<span accesskey="<?php echo $this->_tpl_vars['listing']['Photos_count']; ?>
"></span>
					<?php endif; ?>
				</div>
			</a>
		<?php endif; ?>

		<ul class="card-info<?php if ($this->_tpl_vars['config']['sf_display_fields']): ?> with-names<?php endif; ?>">
			<li class="title">
				<a class="link-large" 
                    title="<?php echo $this->_tpl_vars['listing']['listing_title']; ?>
" 
                    <?php if ($this->_tpl_vars['config']['view_details_new_window']): ?>target="_blank"<?php endif; ?> 
                    href="<?php echo $this->_tpl_vars['listing']['url']; ?>
">
                    <?php echo $this->_tpl_vars['listing']['listing_title']; ?>

                </a>
			</li>
			
            <?php if ($this->_tpl_vars['listing']['fields']['bedrooms']['value'] || $this->_tpl_vars['listing']['fields']['bathrooms']['value'] || $this->_tpl_vars['listing']['fields']['square_feet']['value']): ?>
                <li class="services"><?php echo ''; ?><?php if ($this->_tpl_vars['listing']['fields']['bedrooms']['value']): ?><?php echo '<span title="'; ?><?php echo $this->_tpl_vars['listing']['fields']['bedrooms']['name']; ?><?php echo '" class="badrooms">'; ?><?php echo $this->_tpl_vars['listing']['fields']['bedrooms']['value']; ?><?php echo '</span>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['listing']['fields']['bathrooms']['value']): ?><?php echo '<span title="'; ?><?php echo $this->_tpl_vars['listing']['fields']['bathrooms']['name']; ?><?php echo '" class="bathrooms">'; ?><?php echo $this->_tpl_vars['listing']['fields']['bathrooms']['value']; ?><?php echo '</span>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['listing']['fields']['square_feet']['value']): ?><?php echo '<span title="'; ?><?php echo $this->_tpl_vars['listing']['fields']['square_feet']['name']; ?><?php echo '" class="square_feet">'; ?><?php echo $this->_tpl_vars['listing']['fields']['square_feet']['value']; ?><?php echo '</span>'; ?><?php endif; ?><?php echo ''; ?>
</li>
            <?php endif; ?>
            
			<li class="fields"><?php echo ''; ?><?php $this->assign('short_form_fields', 0); ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['listing']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['fListings'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fListings']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['item']):
        $this->_foreach['fListings']['iteration']++;
?><?php echo ''; ?><?php if (empty ( $this->_tpl_vars['item']['value'] ) || ! $this->_tpl_vars['item']['Details_page'] || ( $this->_tpl_vars['item']['Key'] == $this->_tpl_vars['config']['price_tag_field'] || ((is_array($_tmp=$this->_tpl_vars['item']['Key'])) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['tpl_settings']['listing_grid_except_fields']) : in_array($_tmp, $this->_tpl_vars['tpl_settings']['listing_grid_except_fields'])) )): ?><?php echo ''; ?><?php continue; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['config']['sf_display_fields']): ?><?php echo '<div class="table-cell small clearfix"><div class="name">'; ?><?php echo $this->_tpl_vars['item']['name']; ?><?php echo '</div><div class="value">'; ?><?php echo $this->_tpl_vars['item']['value']; ?><?php echo '</div></div>'; ?><?php else: ?><?php echo '<span>'; ?><?php echo $this->_tpl_vars['item']['value']; ?><?php echo '</span>'; ?><?php endif; ?><?php echo ''; ?><?php $this->assign('short_form_fields', $this->_tpl_vars['short_form_fields']+1); ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?><?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'listingAfterFields'), $this);?><?php echo ''; ?>
</li>

			<li class="system">
				<?php if ($this->_tpl_vars['listing']['fields'][$this->_tpl_vars['config']['price_tag_field']]['value']): ?>
					<span class="price-tag">
						<span><?php echo $this->_tpl_vars['listing']['fields'][$this->_tpl_vars['config']['price_tag_field']]['value']; ?>
</span>
						<?php if ($this->_tpl_vars['listing']['sale_rent'] == 2 && $this->_tpl_vars['listing']['fields']['time_frame']['value']): ?>
                            / <?php echo $this->_tpl_vars['listing']['fields']['time_frame']['value']; ?>

                        <?php endif; ?>
					</span>
				<?php endif; ?>

				<?php if ($this->_tpl_vars['config']['sf_display_fields'] && $this->_tpl_vars['short_form_fields'] > 2): ?>
					<div class="stat-line"><?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'listingAfterStats'), $this);?>
</div>
				<?php endif; ?>
			</li>

			<?php if (! $this->_tpl_vars['config']['sf_display_fields'] || $this->_tpl_vars['config']['sf_display_fields'] && $this->_tpl_vars['short_form_fields'] <= 2): ?>
				<ol>
					<div class="stat-line"><?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'listingAfterStats'), $this);?>
</div>
				</ol>
			<?php endif; ?>
		</ul>
	</div>
</article>

<!-- listing item end -->