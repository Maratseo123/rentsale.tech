<?php /* Smarty version 2.6.31, created on 2024-06-11 13:44:31
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/my_package_item.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'rlHook', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/my_package_item.tpl', 28, false),array('modifier', 'replace', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/my_package_item.tpl', 43, false),array('modifier', 'date_format', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/my_package_item.tpl', 78, false),)), $this); ?>
<!-- my package item -->

<li class="clearfix">
    <div class="frame clearfix" <?php if ($this->_tpl_vars['package']['Color']): ?>style="background-color: #<?php echo $this->_tpl_vars['package']['Color']; ?>
;border-color: #<?php echo $this->_tpl_vars['package']['Color']; ?>
;"<?php endif; ?>>
        <h3 class="name"><?php echo $this->_tpl_vars['package']['name']; ?>
</h3>
        <div class="plan-info">
            <span class="price">
                <?php if ($this->_tpl_vars['config']['system_currency_position'] == 'before'): ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?>
                <?php echo $this->_tpl_vars['package']['Price']; ?>

                <?php if ($this->_tpl_vars['config']['system_currency_position'] == 'after'): ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?>
            </span>
            <span>
                <?php echo $this->_tpl_vars['lang']['plan_live_for']; ?>
: <span class="highlight"><?php if ($this->_tpl_vars['package']['Plan_period']): ?><?php echo $this->_tpl_vars['package']['Plan_period']; ?>
 <?php echo $this->_tpl_vars['lang']['days']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['unlimited_short']; ?>
<?php endif; ?></span>
            </span>
        </div>

        <div class="listing-info">
            <span class="count">
                <?php echo $this->_tpl_vars['lang']['listing_live_for']; ?>
: <span class="highlight"><?php if ($this->_tpl_vars['package']['Listing_period']): ?><?php echo $this->_tpl_vars['package']['Listing_period']; ?>
 <?php echo $this->_tpl_vars['lang']['days']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['unlimited_short']; ?>
<?php endif; ?></span>
            </span>
            <span title="<?php echo $this->_tpl_vars['lang']['images_number']; ?>
" class="count">
                <?php echo $this->_tpl_vars['lang']['photos_count']; ?>
: <span class="highlight"><?php if ($this->_tpl_vars['package']['Image_unlim']): ?><?php echo $this->_tpl_vars['lang']['unlimited_short']; ?>
<?php else: ?><?php echo $this->_tpl_vars['package']['Image']; ?>
<?php endif; ?></span>
            </span>
            <span title="<?php echo $this->_tpl_vars['lang']['number_of_videos']; ?>
" class="count">
                <?php echo $this->_tpl_vars['lang']['video']; ?>
: <span class="highlight"><?php if ($this->_tpl_vars['package']['Video_unlim']): ?><?php echo $this->_tpl_vars['lang']['unlimited_short']; ?>
<?php else: ?><?php echo $this->_tpl_vars['package']['Video']; ?>
<?php endif; ?></span>
            </span>

            <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'tplMyPackageItemListingInfo'), $this);?>

        </div>
    </div>

    <div class="status">
        <ul class="package_info">
            <?php if ($this->_tpl_vars['package']['Advanced_mode']): ?>
                <li>
                    <?php echo $this->_tpl_vars['lang']['standard']; ?>
:
                    <span <?php if (empty ( $this->_tpl_vars['package']['Standard_remains'] ) && ! empty ( $this->_tpl_vars['package']['Standard_listings'] )): ?>class="overdue"<?php endif; ?>>
                        <?php if (empty ( $this->_tpl_vars['package']['Standard_listings'] )): ?>
                            <b><?php echo $this->_tpl_vars['lang']['unlimited_short']; ?>
</b>
                        <?php else: ?>
                            <?php $this->assign('rRest', ('{')."rest".('}')); ?>
                            <?php $this->assign('rAmount', ('{')."amount".('}')); ?>
                            <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['rest_of_amount'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['rRest'], $this->_tpl_vars['package']['Standard_remains']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['rRest'], $this->_tpl_vars['package']['Standard_remains'])))) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['rAmount'], $this->_tpl_vars['package']['Standard_listings']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['rAmount'], $this->_tpl_vars['package']['Standard_listings'])); ?>

                        <?php endif; ?>
                    </span>
                </li>
                <li style="padding-top: 5px;">
                    <?php echo $this->_tpl_vars['lang']['featured']; ?>
:
                    <span <?php if (empty ( $this->_tpl_vars['package']['Featured_remains'] ) && ! empty ( $this->_tpl_vars['package']['Featured_listings'] )): ?>class="overdue"<?php endif; ?>>
                        <?php if (empty ( $this->_tpl_vars['package']['Featured_listings'] )): ?>
                            <b><?php echo $this->_tpl_vars['lang']['unlimited_short']; ?>
</b>
                        <?php else: ?>
                            <?php $this->assign('rRest', ('{')."rest".('}')); ?>
                            <?php $this->assign('rAmount', ('{')."amount".('}')); ?>
                            <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['rest_of_amount'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['rRest'], $this->_tpl_vars['package']['Featured_remains']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['rRest'], $this->_tpl_vars['package']['Featured_remains'])))) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['rAmount'], $this->_tpl_vars['package']['Featured_listings']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['rAmount'], $this->_tpl_vars['package']['Featured_listings'])); ?>

                        <?php endif; ?>
                    </span>
                </li>
            <?php else: ?>
                <li>
                    <?php if ($this->_tpl_vars['package']['Featured']): ?>
                        <?php echo $this->_tpl_vars['lang']['featured']; ?>
:
                    <?php else: ?>
                        <?php echo $this->_tpl_vars['lang']['standard']; ?>
:
                    <?php endif; ?>
                    <span <?php if (empty ( $this->_tpl_vars['package']['Listings_remains'] ) && ! empty ( $this->_tpl_vars['package']['Listing_number'] )): ?>class="overdue"<?php endif; ?>>
                        <?php if (empty ( $this->_tpl_vars['package']['Listing_number'] )): ?>
                            <b><?php echo $this->_tpl_vars['lang']['unlimited_short']; ?>
</b>
                        <?php else: ?>
                            <?php $this->assign('rRest', ('{')."rest".('}')); ?>
                            <?php $this->assign('rAmount', ('{')."amount".('}')); ?>
                            <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['rest_of_amount'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['rRest'], $this->_tpl_vars['package']['Listings_remains']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['rRest'], $this->_tpl_vars['package']['Listings_remains'])))) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['rAmount'], $this->_tpl_vars['package']['Listing_number']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['rAmount'], $this->_tpl_vars['package']['Listing_number'])); ?>

                        <?php endif; ?>
                    </span>
                </li>
            <?php endif; ?>
            <li class="<?php echo $this->_tpl_vars['package']['Exp_status']; ?>
" style="padding: 10px 0 0;">
                <?php echo $this->_tpl_vars['lang']['expiration_date']; ?>
: <?php if ($this->_tpl_vars['package']['Exp_date'] == 'unlimited'): ?><?php echo $this->_tpl_vars['lang']['unlimited_short']; ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['package']['Exp_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)) : smarty_modifier_date_format($_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null))); ?>
<?php endif; ?>
            </li>
        </ul>

        <?php if (! $this->_tpl_vars['renew']): ?>
            <div class="renew">
                <?php if ($this->_tpl_vars['package']['Subscription']): ?>
                    <a class="unsubscription button" id="unsubscription-<?php echo $this->_tpl_vars['package']['ID']; ?>
" href="javascript:void(0);" accesskey="<?php echo $this->_tpl_vars['package']['ID']; ?>
-<?php echo $this->_tpl_vars['package']['Subscription_ID']; ?>
-<?php echo $this->_tpl_vars['package']['Subscription_service']; ?>
"><span><?php echo $this->_tpl_vars['lang']['unsubscription']; ?>
</span>&nbsp;</a>
                <?php elseif ($this->_tpl_vars['package']['Exp_status'] === 'expired' || $this->_tpl_vars['package']['Price'] > 0): ?>
                    <a class="button" href="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
.html?renew=<?php echo $this->_tpl_vars['package']['ID']; ?>
<?php else: ?>?page=<?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
&amp;renew=<?php echo $this->_tpl_vars['package']['ID']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['lang']['renew']; ?>
</a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</li>

<!-- my package item emd -->