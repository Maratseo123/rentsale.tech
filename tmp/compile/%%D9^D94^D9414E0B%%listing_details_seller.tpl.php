<?php /* Smarty version 2.6.31, created on 2023-12-18 01:50:52
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/listing_details_seller.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/listing_details_seller.tpl', 46, false),array('modifier', 'replace', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/listing_details_seller.tpl', 47, false),array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/listing_details_seller.tpl', 122, false),array('function', 'rlHook', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/listing_details_seller.tpl', 54, false),array('function', 'phrase', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/listing_details_seller.tpl', 62, false),array('function', 'encodeEmail', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/listing_details_seller.tpl', 129, false),array('function', 'pageUrl', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/listing_details_seller.tpl', 139, false),)), $this); ?>
<!-- bottom listing details seller -->

<?php if ($this->_tpl_vars['contact']): ?>
    <?php $this->assign('seller_info', $this->_tpl_vars['contact']); ?>
<?php endif; ?>

<?php if (! $this->_tpl_vars['is_owner'] && $this->_tpl_vars['config']['messages_module'] && ( $this->_tpl_vars['isLogin'] || ( ! $this->_tpl_vars['isLogin'] && $this->_tpl_vars['config']['messages_allow_free'] ) ) && ! $this->_tpl_vars['contact']): ?>
    <?php $this->assign('allow_contact_section', true); ?>
<?php endif; ?>

<?php if (! $this->_tpl_vars['allow_contact_section'] && ! $this->_tpl_vars['sidebar']): ?>
    <?php $this->assign('inline_contacts', true); ?>
<?php endif; ?>

<div class="<?php if (! $this->_tpl_vars['inline_contacts']): ?>row <?php endif; ?>seller-short">
    <div class="<?php if (! $this->_tpl_vars['inline_contacts']): ?>col-sm-6 <?php if ($this->_tpl_vars['sidebar']): ?>col-md-12<?php else: ?>col-md-6 col-xs-12<?php endif; ?><?php endif; ?><?php if ($this->_tpl_vars['seller_info']['Listings_count'] && $this->_tpl_vars['seller_info']['Own_page'] && ! $this->_tpl_vars['owner_page']): ?> button-exists<?php endif; ?>">
        <?php if ($this->_tpl_vars['inline_contacts']): ?>
        <div class="row">
            <div class="col-sm-6">
        <?php endif; ?>

        <?php if (! $this->_tpl_vars['block']['Header'] && ! $this->_tpl_vars['sidebar']): ?>
            <?php $this->assign('get_more_phrase', 'blocks+name+get_more_details'); ?>
            <h3><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['get_more_phrase']]; ?>
</h3>
        <?php endif; ?>

        <div class="clearfix relative">
            <?php if ($this->_tpl_vars['seller_info']['Photo']): ?>
                <div class="picture<?php if ($this->_tpl_vars['seller_info']['Thumb_width'] > 120): ?> landscape<?php endif; ?>">
                    <?php if ($this->_tpl_vars['seller_info']['Own_page'] && ! $this->_tpl_vars['owner_page']): ?><a target="_blank" title="<?php echo $this->_tpl_vars['lang']['visit_owner_page']; ?>
" href="<?php echo $this->_tpl_vars['seller_info']['Personal_address']; ?>
"><?php endif; ?>
                    <img alt="<?php echo $this->_tpl_vars['lang']['seller_thumbnail']; ?>
"
                        src="<?php echo (defined('RL_FILES_URL') ? @RL_FILES_URL : null); ?>
<?php echo $this->_tpl_vars['seller_info']['Photo']; ?>
"
                        <?php if ($this->_tpl_vars['seller_info']['Photo_x2']): ?>srcset="<?php echo (defined('RL_FILES_URL') ? @RL_FILES_URL : null); ?>
<?php echo $this->_tpl_vars['seller_info']['Photo_x2']; ?>
 2x"<?php endif; ?> />
                    <?php if ($this->_tpl_vars['seller_info']['Own_page'] && ! $this->_tpl_vars['owner_page']): ?></a><?php endif; ?>
                </div>
            <?php endif; ?>
            <ul class="seller-info">
                <li class="name">
                    <?php if ($this->_tpl_vars['seller_info']['Own_page'] && ! $this->_tpl_vars['owner_page']): ?><a title="<?php echo $this->_tpl_vars['lang']['visit_owner_page']; ?>
" href="<?php echo $this->_tpl_vars['seller_info']['Personal_address']; ?>
"><?php endif; ?>
                    <?php echo $this->_tpl_vars['seller_info']['Full_name']; ?>

                    <?php if ($this->_tpl_vars['seller_info']['Own_page'] && ! $this->_tpl_vars['owner_page']): ?></a><?php endif; ?>

                    <?php if ($this->_tpl_vars['seller_info']['Type']): ?>
                        <?php $this->assign('type_replace', ('{')."account_type".('}')); ?>
                        <?php $this->assign('date_replace', ('{')."date".('}')); ?>
                        <?php $this->assign('date', ((is_array($_tmp=$this->_tpl_vars['seller_info']['Date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)) : smarty_modifier_date_format($_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)))); ?>
                        <div class="type"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['account_type_since_data'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['type_replace'], $this->_tpl_vars['seller_info']['Type_name']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['type_replace'], $this->_tpl_vars['seller_info']['Type_name'])))) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['date_replace'], $this->_tpl_vars['date']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['date_replace'], $this->_tpl_vars['date'])); ?>
</div>
                    <?php endif; ?>
                </li>

                                <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'tplSellerBoxAfterName'), $this);?>


                <?php if ($this->_tpl_vars['seller_info']['Fields']['about_me']['value']): ?>
                    <li class="about"><?php echo $this->_tpl_vars['seller_info']['Fields']['about_me']['value']; ?>
</li>
                <?php endif; ?>

                <?php if (! $this->_tpl_vars['owner_page'] && $this->_tpl_vars['seller_info']['Listings_count'] && $this->_tpl_vars['seller_info']['Own_page']): ?>
                    <li class="listings-button">
                        <a class="button low" href="<?php echo $this->_tpl_vars['seller_info']['Personal_address']; ?>
#listings" title="<?php echo $this->_tpl_vars['lang']['account_listings']; ?>
"><?php echo $this->_plugins['function']['phrase'][0][0]->getPhrase(array('key' => 'account_listings'), $this);?>
</a>
                    </li>
                <?php endif; ?>
            </ul>

            <?php if ($this->_tpl_vars['seller_info']['Listings_count'] && ! $this->_tpl_vars['contact']): ?>
                <?php $this->assign('listings_count_exists', true); ?>
            <?php endif; ?>

            <?php if ($this->_tpl_vars['owner_page'] && ( $this->_tpl_vars['listings_count_exists'] || $this->_tpl_vars['seller_info']['Agents_count'] )): ?>
                <ul class="d-flex align-items-center pt-4">
                    <?php if ($this->_tpl_vars['listings_count_exists']): ?>
                        <li class="counter pt-0">
                            <span class="counter d-inline"><?php echo $this->_tpl_vars['seller_info']['Listings_count']; ?>
</span>
                            <span><?php echo $this->_tpl_vars['lang']['listings']; ?>
</span>
                        </li>
                    <?php endif; ?>

                    <?php if ($this->_tpl_vars['seller_info']['Agents_count'] && $this->_tpl_vars['listings_count_exists']): ?>
                        <li class="ml-3"><span class="date">/</span></li>
                    <?php endif; ?>

                    <?php if ($this->_tpl_vars['seller_info']['Agents_count']): ?>
                        <li class="counter pt-0<?php if ($this->_tpl_vars['listings_count_exists']): ?> ml-3<?php endif; ?>">
                            <?php if ($this->_tpl_vars['seller_info']['Personal_address']): ?>
                                <a title="<?php echo $this->_tpl_vars['lang']['agency_listings']; ?>
"
                                   href="<?php echo $this->_tpl_vars['seller_info']['Personal_address']; ?>
#agents"
                                   class="agencies-agents"
                                >
                            <?php endif; ?>
                            <span class="counter d-inline"><?php echo $this->_tpl_vars['seller_info']['Agents_count']; ?>
</span>
                            <span><?php echo $this->_tpl_vars['lang']['agents']; ?>
</span>
                            <?php if ($this->_tpl_vars['seller_info']['Personal_address']): ?></a><?php endif; ?>
                        </li>
                    <?php endif; ?>
                </ul>
            <?php endif; ?>
        </div>

        <?php $this->assign('show_owner_details', false); ?>

        <?php $_from = $this->_tpl_vars['owner_short_details']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
            <?php if (! $this->_tpl_vars['item']['Map'] && ! empty ( $this->_tpl_vars['item']['value'] ) && $this->_tpl_vars['item']['Details_page'] && $this->_tpl_vars['item']['Key'] != 'First_name' && $this->_tpl_vars['item']['Key'] != 'Last_name' && $this->_tpl_vars['item']['Key'] != 'about_me'): ?>
                <?php $this->assign('show_owner_details', true); ?>
                <?php break; ?>
            <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>

        <?php if ($this->_tpl_vars['inline_contacts']): ?>
            </div>
            <div class="col-sm-6">
        <?php endif; ?>

        <?php if ($this->_tpl_vars['owner_short_details'] && $this->_tpl_vars['show_owner_details']): ?>
            <div class="owner-details">
                <?php if (! $this->_tpl_vars['allow_contacts']): ?><h3 class="cd-caption"><?php echo $this->_tpl_vars['lang']['contact_details']; ?>
</h3><?php endif; ?>
                <div class="info-table">
                    <div<?php if (! $this->_tpl_vars['allow_contacts']): ?> class="masked"<?php endif; ?>>
                        <?php $_from = $this->_tpl_vars['owner_short_details']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                            <?php if (! $this->_tpl_vars['item']['Map'] && ! empty ( $this->_tpl_vars['item']['value'] ) && $this->_tpl_vars['item']['Details_page'] && $this->_tpl_vars['item']['Key'] != 'First_name' && $this->_tpl_vars['item']['Key'] != 'Last_name' && $this->_tpl_vars['item']['Key'] != 'about_me'): ?>
                                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'field_out.tpl') : smarty_modifier_cat($_tmp, 'field_out.tpl')), 'smarty_include_vars' => array('small' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                            <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>

                        <?php if ($this->_tpl_vars['seller_info']['Display_email']): ?>
                            <div class="table-cell clearfix small">
                                <div class="name"><?php echo $this->_tpl_vars['lang']['mail']; ?>
</div>
                                <div class="value"><?php if ($this->_tpl_vars['allow_contacts']): ?><?php echo $this->_plugins['function']['encodeEmail'][0][0]->encodeEmail(array('email' => $this->_tpl_vars['seller_info']['Mail']), $this);?>
<?php else: ?><?php $this->assign('mail_replace', ('{')."field".('}')); ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['fake_value'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['mail_replace'], $this->_tpl_vars['lang']['mail']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['mail_replace'], $this->_tpl_vars['lang']['mail'])); ?>
<?php endif; ?></div>
                            </div>
                        <?php endif; ?>

                        <?php if (! $this->_tpl_vars['allow_contacts']): ?>
                            <div class="login-mask">
                                <div class="restricted-content">
                                    <?php if ($this->_tpl_vars['isLogin']): ?>
                                        <p><?php echo $this->_tpl_vars['lang']['contacts_not_available']; ?>
</p>
                                        <span>
                                            <a class="button" title="<?php echo $this->_tpl_vars['lang']['registration']; ?>
" href="<?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'my_profile'), $this);?>
#membership"><?php echo $this->_tpl_vars['lang']['change_plan']; ?>
</a>
                                        </span>
                                    <?php else: ?>
                                        <p><?php echo $this->_tpl_vars['lang']['contact_details_hint']; ?>
</p>
                                        <span>
                                            <a href="javascript://" class="button login"><?php echo $this->_tpl_vars['lang']['sign_in']; ?>
</a> <span><?php echo $this->_tpl_vars['lang']['or']; ?>
</span> <a title="<?php echo $this->_tpl_vars['lang']['registration']; ?>
" href="<?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'registration'), $this);?>
"><?php echo $this->_tpl_vars['lang']['sign_up']; ?>
</a>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'listingDetailsSellerBox'), $this);?>


        <?php if ($this->_tpl_vars['inline_contacts']): ?>
            </div>
        </div>
        <?php endif; ?>
    </div>

    <?php if ($this->_tpl_vars['allow_contact_section']): ?>
        <div class="col-sm-6 <?php if ($this->_tpl_vars['sidebar']): ?>col-md-12 form<?php else: ?>col-md-6 col-xs-12<?php endif; ?>">
            <?php if (! $this->_tpl_vars['allow_send_message']): ?><h3 class="cd-caption"><?php echo $this->_tpl_vars['lang']['contact_the_owner']; ?>
</h3><?php endif; ?>
            <div<?php if (! $this->_tpl_vars['allow_send_message']): ?> class="masked"<?php endif; ?>>
                <?php if ($this->_tpl_vars['sidebar'] && $this->_tpl_vars['config']['show_call_owner_button'] && $this->_tpl_vars['pageInfo']['Controller'] == 'listing_details' && $this->_tpl_vars['allow_contacts']): ?>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['componentDir'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'call-owner/_sidebar-buttons.tpl') : smarty_modifier_cat($_tmp, 'call-owner/_sidebar-buttons.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <?php else: ?>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'contact_seller_form.tpl') : smarty_modifier_cat($_tmp, 'contact_seller_form.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <?php endif; ?>

                <?php if (! $this->_tpl_vars['allow_send_message']): ?>
                    <div class="login-mask">
                        <div class="restricted-content">
                            <?php if ($this->_tpl_vars['isLogin']): ?>
                                <p><?php echo $this->_tpl_vars['lang']['contact_form_not_available']; ?>
</p>
                                <span>
                                    <a class="button" title="<?php echo $this->_tpl_vars['lang']['registration']; ?>
" href="<?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'my_profile'), $this);?>
#membership"><?php echo $this->_tpl_vars['lang']['change_plan']; ?>
</a>
                                </span>
                            <?php else: ?>
                                <p><?php echo $this->_tpl_vars['lang']['contact_owner_hint']; ?>
</p>
                                <span>
                                    <a href="javascript://" class="button login"><?php echo $this->_tpl_vars['lang']['sign_in']; ?>
</a> <span><?php echo $this->_tpl_vars['lang']['or']; ?>
</span> <a title="<?php echo $this->_tpl_vars['lang']['registration']; ?>
" href="<?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'registration'), $this);?>
"><?php echo $this->_tpl_vars['lang']['sign_up']; ?>
</a>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
</div>

<!-- bottom listing details seller end -->