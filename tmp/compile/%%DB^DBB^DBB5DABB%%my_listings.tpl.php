<?php /* Smarty version 2.6.31, created on 2024-05-02 01:32:10
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/my_listings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'in_array', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/my_listings.tpl', 21, false),array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/my_listings.tpl', 42, false),array('modifier', 'count', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/my_listings.tpl', 52, false),array('modifier', 'regex_replace', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/my_listings.tpl', 138, false),array('function', 'rlHook', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/my_listings.tpl', 29, false),array('function', 'paging', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/my_listings.tpl', 52, false),array('function', 'phrase', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/my_listings.tpl', 140, false),array('function', 'addJS', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/my_listings.tpl', 148, false),)), $this); ?>
<!-- my listings -->

<?php if (! empty ( $this->_tpl_vars['listings'] )): ?>

    <?php if ($this->_tpl_vars['sorting']): ?>

        <?php 
            $types = array('asc' => 'ascending', 'desc' => 'descending'); $this -> assign('sort_types', $types);
            $sort = array('price', 'number', 'date'); $this -> assign('sf_types', $sort);
         ?>

        <div class="grid_navbar">
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
                                <li><a rel="nofollow" <?php if ($this->_tpl_vars['sort_by'] == $this->_tpl_vars['sort_key'] && $this->_tpl_vars['sort_type'] == $this->_tpl_vars['st_key']): ?>class="active"<?php endif; ?> title="<?php echo $this->_tpl_vars['lang']['sort_listings_by']; ?>
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
                            <li><a rel="nofollow" <?php if ($this->_tpl_vars['sort_by'] == $this->_tpl_vars['sort_key']): ?>class="active"<?php endif; ?> title="<?php echo $this->_tpl_vars['lang']['sort_listings_by']; ?>
 <?php echo $this->_tpl_vars['field_item']['name']; ?>
" href="<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?>?<?php else: ?>index.php?<?php echo $this->_tpl_vars['pageInfo']['query_string']; ?>
&<?php endif; ?>sort_by=<?php echo $this->_tpl_vars['sort_key']; ?>
&sort_type=asc"><?php echo $this->_tpl_vars['field_item']['name']; ?>
</a></li>
                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                    <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'myListingsAfterSorting'), $this);?>

                </ul>
            </div>
        </div>
    <?php endif; ?>

    <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'myListingsBeforeListings'), $this);?>


    <section id="listings" class="my-listings list">
        <?php $_from = $this->_tpl_vars['listings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['listing']):
?>
            <?php if ($this->_tpl_vars['listing']['Subscription_ID']): ?>
                <?php $this->assign('hasSubscriptions', true); ?>
            <?php endif; ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'my_listing.tpl') : smarty_modifier_cat($_tmp, 'my_listing.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php endforeach; endif; unset($_from); ?>
    </section>

    <!-- paging block -->
    <?php if ($this->_tpl_vars['search_results_mode'] && $this->_tpl_vars['refine_search_form']): ?>
        <?php $this->assign('myads_paging_url', $this->_tpl_vars['search_results_url']); ?>
    <?php else: ?>
        <?php $this->assign('myads_paging_url', false); ?>
    <?php endif; ?>
    <?php echo $this->_plugins['function']['paging'][0][0]->paging(array('calc' => $this->_tpl_vars['pInfo']['calc'],'total' => count($this->_tpl_vars['listings']),'current' => $this->_tpl_vars['pInfo']['current'],'per_page' => $this->_tpl_vars['config']['listings_per_page'],'url' => $this->_tpl_vars['myads_paging_url'],'method' => $this->_tpl_vars['listing_type']['Submit_method']), $this);?>

    <!-- paging block end -->

    <script class="fl-js-dynamic"><?php echo '
        $(document).ready(function(){
            $(\'.my-listings .delete\').each(function(){
                $(this).flModal({
                    caption: \''; ?>
<?php echo $this->_tpl_vars['lang']['warning']; ?>
<?php echo '\',
                    content: \''; ?>
<?php echo $this->_tpl_vars['lang']['notice_delete_listing']; ?>
<?php echo '\',
                    prompt: \'xajax_deleteListing(\'+ $(this).attr(\'id\').split(\'_\')[2] +\')\',
                    width: \'auto\',
                    height: \'auto\'
                });
            });

            '; ?>
<?php if ($this->_tpl_vars['hasSubscriptions']): ?><?php echo '
            $(\'.my-listings .unsubscription\').each(function() {
                $(this).flModal({
                    caption: \'\',
                    content: \''; ?>
<?php echo $this->_tpl_vars['lang']['stripe_unsubscripbe_confirmation']; ?>
<?php echo '\',
                    prompt: \'flSubscription.cancelSubscription(\\\'\'+ $(this).attr(\'accesskey\').split(\'-\')[2] +\'\\\', \\\'\'+ $(this).attr(\'accesskey\').split(\'-\')[0] +\'\\\', \'+ $(this).attr(\'accesskey\').split(\'-\')[1] +\', false)\',
                    width: \'auto\',
                    height: \'auto\'
                });
            });
            '; ?>
<?php endif; ?><?php echo '

            $(\'label.switcher-status input[type="checkbox"]\').change(function() {
                var element = $(this);
                var id = $(this).val();
                var status = $(this).is(\':checked\') ? \'active\' : \'approval\';

                $.getJSON(
                    rlConfig[\'ajax_url\'],
                    {mode: \'changeListingStatus\', item: id, value: status, lang: rlLang},
                    function(response) {
                        if (response) {
                            if (response.status == \'ok\') {
                                printMessage(\'notice\', response.message_text);
                            } else {
                                printMessage(\'error\', response.message_text);
                                element.prop(\'checked\', false);
                            }
                        }
                    }
                );
            });

            $(\'label.switcher-featured input[type="checkbox"]\').change(function() {
                var element = $(this);
                var id = $(this).val();
                var status = $(this).is(\':checked\') ? \'featured\': \'standard\';

                $.getJSON(
                    rlConfig[\'ajax_url\'],
                    {mode: \'changeListingFeaturedStatus\', item: id, value: status, lang: rlLang},
                    function(response) {
                        if (response) {
                            if (response.status == \'ok\') {
                                if (status == \'featured\') {
                                    $(\'article#listing_\' + id).addClass(\'featured\');
                                    $(\'article#listing_\'+ id +\' div.nav div.info .picture\').prepend(\'<div class="label"><div title="'; ?>
<?php echo $this->_tpl_vars['lang']['featured']; ?>
<?php echo '">'; ?>
<?php echo $this->_tpl_vars['lang']['featured']; ?>
<?php echo '</div></div></div>\');
                                } else {
                                    $(\'article#listing_\'+ id +\' div.nav div.info .picture\').find(\'div.label\').remove();
                                    $(\'article#listing_\' + id).removeClass(\'featured\');
                                }
                                printMessage(\'notice\', response.message_text);
                            } else {
                                printMessage(\'error\', response.message_text);
                                if (element.is(\':checked\')) {
                                    element.prop(\'checked\', false);
                                } else {
                                    element.prop(\'checked\', \'checked\');
                                }
                            }
                        }
                    }
                );
            });
        });
        '; ?>

    </script>
<?php else: ?>
    <div class="info">
        <?php if ($this->_tpl_vars['pages']['add_listing']): ?>
            <?php $this->assign('link', ((is_array($_tmp=((is_array($_tmp='<a href="')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['add_listing_href']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['add_listing_href'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '">$1</a>') : smarty_modifier_cat($_tmp, '">$1</a>'))); ?>
            <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['no_listings_here'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, '/\[(.+)\]/', $this->_tpl_vars['link']) : smarty_modifier_regex_replace($_tmp, '/\[(.+)\]/', $this->_tpl_vars['link'])); ?>

        <?php else: ?>
            <?php echo $this->_plugins['function']['phrase'][0][0]->getPhrase(array('key' => 'no_listings_found_deny_posting','db_check' => 'true'), $this);?>

        <?php endif; ?>
    </div>
<?php endif; ?>

<?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'myListingsBottom'), $this);?>


<?php if ($this->_tpl_vars['hasSubscriptions']): ?>
    <?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=$this->_tpl_vars['rlTplBase'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'js/subscription.js') : smarty_modifier_cat($_tmp, 'js/subscription.js')),'id' => 'subscription'), $this);?>

<?php endif; ?>

<!-- my listings end -->