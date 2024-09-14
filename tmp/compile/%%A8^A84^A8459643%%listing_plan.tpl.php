<?php /* Smarty version 2.6.31, created on 2023-12-18 02:05:00
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/listing_plan.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/listing_plan.tpl', 17, false),array('function', 'rlHook', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/listing_plan.tpl', 36, false),)), $this); ?>
<?php echo '<!-- listing plan tpl --><li id="plan_'; ?><?php echo $this->_tpl_vars['plan']['ID']; ?><?php echo '" class="plan">'; ?>

    <div class="frame<?php if ($this->_tpl_vars['plan']['Color']): ?> colored<?php endif; ?><?php if ($this->_tpl_vars['plan']['plan_disabled']): ?> disabled<?php endif; ?>" <?php if ($this->_tpl_vars['plan']['Color']): ?>style="background-color: #<?php echo $this->_tpl_vars['plan']['Color']; ?>
;border-color: #<?php echo $this->_tpl_vars['plan']['Color']; ?>
;"<?php endif; ?>>
        <span class="name"><?php echo $this->_tpl_vars['plan']['name']; ?>
</span>
        <span class="price">
            <?php if (isset ( $this->_tpl_vars['plan']['Listings_remains'] )): ?>
                &#8212;
            <?php else: ?>
                <?php if ($this->_tpl_vars['config']['system_currency_position'] == 'before'): ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?>
                <?php echo $this->_tpl_vars['plan']['Price']; ?>

                <?php if ($this->_tpl_vars['config']['system_currency_position'] == 'after'): ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?>
            <?php endif; ?>
        </span>
        <span title="<?php echo $this->_tpl_vars['lang']['plan_type']; ?>
" class="type">
            <?php $this->assign('l_type', ((is_array($_tmp=$this->_tpl_vars['plan']['Type'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_plan_short') : smarty_modifier_cat($_tmp, '_plan_short'))); ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['l_type']]; ?>

        </span><span title="<?php echo $this->_tpl_vars['lang']['listing_live']; ?>
" class="count">
            <?php if ($this->_tpl_vars['plan']['Listing_period']): ?><?php echo $this->_tpl_vars['plan']['Listing_period']; ?>
 <?php echo $this->_tpl_vars['lang']['days']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['unlimited']; ?>
<?php endif; ?>
        </span>

        <?php if ($this->_tpl_vars['plan']['Type'] != 'featured'): ?>
            <?php if ($this->_tpl_vars['listing_type']['Photo']): ?>
            <span title="<?php echo $this->_tpl_vars['lang']['images_number']; ?>
" class="count">
                <?php if ($this->_tpl_vars['plan']['Image_unlim']): ?><?php echo $this->_tpl_vars['lang']['unlimited']; ?>
<?php else: ?><?php echo $this->_tpl_vars['plan']['Image']; ?>
 <?php echo $this->_tpl_vars['lang']['photos_count']; ?>
<?php endif; ?>
            </span>
            <?php endif; ?>

            <?php if ($this->_tpl_vars['listing_type']['Video']): ?>
            <span title="<?php echo $this->_tpl_vars['lang']['number_of_videos']; ?>
" class="count">
                <?php if ($this->_tpl_vars['plan']['Video_unlim']): ?><?php echo $this->_tpl_vars['lang']['unlimited']; ?>
<?php else: ?><?php echo $this->_tpl_vars['plan']['Video']; ?>
 <?php echo $this->_tpl_vars['lang']['video']; ?>
<?php endif; ?>
            </span>
            <?php endif; ?>
        <?php endif; ?>

        <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'tplListingPlanService'), $this);?>


   		<?php if ($this->_tpl_vars['plan']['des']): ?>
            <span class="description">
                <img class="qtip middle-bottom" alt="" title="<?php echo $this->_tpl_vars['plan']['des']; ?>
" id="fd_<?php echo $this->_tpl_vars['field']['Key']; ?>
" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" />
            </span>
        <?php endif; ?>

        <div class="selector">
            <?php if ($this->_tpl_vars['plan']['Advanced_mode']): ?>
                <input class="hide" type="radio" name="plan" value="<?php echo $this->_tpl_vars['plan']['ID']; ?>
" <?php if ($this->_tpl_vars['plan']['ID'] == $_POST['plan'] && ! $this->_tpl_vars['plan']['plan_disabled']): ?>checked="checked"<?php endif; ?> />

                <label<?php if ($this->_tpl_vars['plan']['standard_disabled']): ?> class="hint" title="<?php echo $this->_tpl_vars['lang']['plan_option_using_limit_hint']; ?>
"<?php endif; ?>><input class="multiline" <?php if (! $this->_tpl_vars['plan']['standard_disabled'] && $this->_tpl_vars['plan']['ID'] == $_POST['plan'] && ( $_POST['ad_type'] == 'standard' || ! $_POST['ad_type'] )): ?>checked="checked"<?php endif; ?> <?php if ($this->_tpl_vars['plan']['standard_disabled']): ?>disabled="disabled"<?php endif; ?> type="radio" name="ad_type" value="standard" /> <?php echo $this->_tpl_vars['lang']['standard_listing']; ?>
 <?php if ($this->_tpl_vars['plan']['Standard_listings'] != 0): ?>(<?php if (isset ( $this->_tpl_vars['plan']['Listings_remains'] )): ?><?php if (empty ( $this->_tpl_vars['plan']['Standard_remains'] )): ?><?php echo $this->_tpl_vars['lang']['used_up']; ?>
<?php else: ?><?php echo $this->_tpl_vars['plan']['Standard_remains']; ?>
<?php endif; ?><?php else: ?><?php echo $this->_tpl_vars['plan']['Standard_listings']; ?>
<?php endif; ?>)<?php endif; ?></label>

                <div>
                    <label<?php if ($this->_tpl_vars['plan']['featured_disabled']): ?> class="hint" title="<?php echo $this->_tpl_vars['lang']['plan_option_using_limit_hint']; ?>
"<?php endif; ?>><input class="multiline" <?php if (! $this->_tpl_vars['plan']['featured_disabled'] && $this->_tpl_vars['plan']['ID'] == $_POST['plan'] && $_POST['ad_type'] == 'featured'): ?>checked="checked"<?php endif; ?> <?php if ($this->_tpl_vars['plan']['featured_disabled']): ?>disabled="disabled"<?php endif; ?> type="radio" name="ad_type" value="featured" /> <?php echo $this->_tpl_vars['lang']['featured_listing']; ?>
 <?php if ($this->_tpl_vars['plan']['Featured_listings'] != 0): ?>(<?php if (isset ( $this->_tpl_vars['plan']['Listings_remains'] )): ?><?php if (empty ( $this->_tpl_vars['plan']['Featured_remains'] )): ?><?php echo $this->_tpl_vars['lang']['used_up']; ?>
<?php else: ?><?php echo $this->_tpl_vars['plan']['Featured_remains']; ?>
<?php endif; ?><?php else: ?><?php echo $this->_tpl_vars['plan']['Featured_listings']; ?>
<?php endif; ?>)<?php endif; ?></label>
                </div>
            <?php else: ?>
                <label <?php if ($this->_tpl_vars['plan']['plan_disabled']): ?>class="hint" title="<?php echo $this->_tpl_vars['lang']['plan_limit_using_deny']; ?>
"<?php endif; ?>>
                    <input class="multiline" 
                        <?php if ($this->_tpl_vars['plan']['plan_disabled']): ?>
                        disabled="disabled"
                        <?php endif; ?> 
                        type="radio"
                        name="plan"
                        value="<?php echo $this->_tpl_vars['plan']['ID']; ?>
" 
                        <?php if ($this->_tpl_vars['plan']['ID'] == $_POST['plan'] && ! $this->_tpl_vars['plan']['plan_disabled']): ?>
                        checked="checked"
                        <?php endif; ?>
                        />
                        <?php if ($this->_tpl_vars['plan']['Featured'] || $this->_tpl_vars['featured']): ?>
                            <?php echo $this->_tpl_vars['lang']['featured_listing']; ?>

                        <?php else: ?>
                            <?php echo $this->_tpl_vars['lang']['standard_listing']; ?>

                        <?php endif; ?>

                        <?php if ($this->_tpl_vars['plan']['plan_disabled']): ?>
                            (<?php echo $this->_tpl_vars['lang']['used_up']; ?>
)
                        <?php elseif ($this->_tpl_vars['plan']['Listings_remains']): ?>
                            (<?php echo $this->_tpl_vars['plan']['Listings_remains']; ?>
)
                        <?php elseif ($this->_tpl_vars['plan']['Listing_number'] > 0): ?>
                            (<?php echo $this->_tpl_vars['plan']['Listing_number']; ?>
)
                        <?php endif; ?>
                    </label>
            <?php endif; ?>

            <?php if ($this->_tpl_vars['plan']['Subscription'] && $this->_tpl_vars['plan']['Price'] > 0 && ! $this->_tpl_vars['plan']['Listings_remains']): ?>
                <div>
                    <?php $this->assign('subscription_period', ((is_array($_tmp='subscription_period_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['plan']['Period']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['plan']['Period']))); ?>
                    <label title="<?php echo $this->_tpl_vars['lang']['subscription_period']; ?>
: <?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['subscription_period']]; ?>
" class="hint"><input class="multiline" type="checkbox" name="subscription" <?php if ($_POST['subscription'] == $this->_tpl_vars['plan']['ID']): ?>checked="checked"<?php endif; ?> value="<?php echo $this->_tpl_vars['plan']['ID']; ?>
" /> <?php echo $this->_tpl_vars['lang']['subscription']; ?>
</label>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php echo '</li><!-- listing plan tpl end -->'; ?>