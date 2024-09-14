<?php /* Smarty version 2.6.31, created on 2024-04-26 02:18:34
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/account_type.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/account_type.tpl', 21, false),array('modifier', 'count', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/account_type.tpl', 37, false),array('modifier', 'regex_replace', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/account_type.tpl', 78, false),array('modifier', 'json_encode', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/account_type.tpl', 190, false),array('function', 'paging', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/account_type.tpl', 37, false),array('function', 'pageUrl', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/account_type.tpl', 76, false),array('function', 'mapsAPI', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/account_type.tpl', 187, false),)), $this); ?>
<!-- accounts tpl -->

<?php if ($this->_tpl_vars['account_type']): ?>
    <!-- account details -->
    <?php if ($this->_tpl_vars['account']): ?>
        <?php if (isset ( $this->_tpl_vars['account']['Agents_count'] )): ?>
            <ul class="tabs tabs-hash">
                <li class="active" id="tab_listings">
                    <a href="#listings" data-target="listings"><?php echo $this->_tpl_vars['lang']['listings']; ?>
</a>
                </li>
                <li id="tab_agents">
                    <a href="#agents" data-target="agents"><?php echo $this->_tpl_vars['lang']['agents']; ?>
</a>
                </li>
            </ul>
        <?php endif; ?>

        <?php if (isset ( $this->_tpl_vars['account']['Agents_count'] )): ?><div id="area_listings" class="tab_area"><?php endif; ?>

        <!-- account listings -->
        <?php if (! empty ( $this->_tpl_vars['listings'] )): ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'grid_navbar.tpl') : smarty_modifier_cat($_tmp, 'grid_navbar.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'grid.tpl') : smarty_modifier_cat($_tmp, 'grid.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

            <?php $this->assign('pageOnSubdomain', false); ?>
            <?php if ($this->_tpl_vars['config']['account_wildcard'] && $this->_tpl_vars['account_type']['Own_location']): ?>
                <?php $this->assign('pageOnSubdomain', true); ?>
            <?php endif; ?>

            <?php $this->assign('custom_url', $this->_tpl_vars['account']['Own_address']); ?>
            <?php if (! $this->_tpl_vars['account']['Own_location']): ?>
                <?php $this->assign('custom_url', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['pageInfo']['Path'])) ? $this->_run_mod_handler('cat', true, $_tmp, '/') : smarty_modifier_cat($_tmp, '/')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['account']['Own_address']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['account']['Own_address']))); ?>
            <?php endif; ?>

            <!-- paging block -->
            <?php if ($this->_tpl_vars['selected_search_type']): ?>
                <?php if ($this->_tpl_vars['config']['mod_rewrite']): ?>
                    <?php echo $this->_plugins['function']['paging'][0][0]->paging(array('calc' => $this->_tpl_vars['pInfo']['calc'],'total' => count($this->_tpl_vars['listings']),'current' => $this->_tpl_vars['pInfo']['current'],'perPage' => $this->_tpl_vars['config']['listings_per_page'],'custom' => $this->_tpl_vars['custom_url'],'customSubdomain' => $this->_tpl_vars['pageOnSubdomain'],'url' => $this->_tpl_vars['search_results_url'],'method' => $this->_tpl_vars['listing_type']['Submit_method']), $this);?>

                <?php else: ?>
                    <?php echo $this->_plugins['function']['paging'][0][0]->paging(array('calc' => $this->_tpl_vars['pInfo']['calc'],'total' => count($this->_tpl_vars['listings']),'current' => $this->_tpl_vars['pInfo']['current'],'perPage' => $this->_tpl_vars['config']['listings_per_page'],'var' => 'id','url' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['account']['ID'])) ? $this->_run_mod_handler('cat', true, $_tmp, '&') : smarty_modifier_cat($_tmp, '&')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['search_results_url']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['search_results_url'])),'full' => true), $this);?>

                <?php endif; ?>
            <?php else: ?>
                <?php if ($this->_tpl_vars['config']['mod_rewrite']): ?>
                    <?php echo $this->_plugins['function']['paging'][0][0]->paging(array('calc' => $this->_tpl_vars['pInfo']['calc'],'total' => count($this->_tpl_vars['listings']),'current' => $this->_tpl_vars['pInfo']['current'],'perPage' => $this->_tpl_vars['config']['listings_per_page'],'custom' => $this->_tpl_vars['custom_url'],'customSubdomain' => $this->_tpl_vars['pageOnSubdomain']), $this);?>

                <?php else: ?>
                    <?php echo $this->_plugins['function']['paging'][0][0]->paging(array('calc' => $this->_tpl_vars['pInfo']['calc'],'total' => count($this->_tpl_vars['listings']),'current' => $this->_tpl_vars['pInfo']['current'],'perPage' => $this->_tpl_vars['config']['listings_per_page'],'var' => 'id','url' => $this->_tpl_vars['account']['ID'],'full' => true), $this);?>

                <?php endif; ?>
            <?php endif; ?>
            <!-- paging block end -->
        <?php else: ?>
            <div class="info">
                <?php if ($this->_tpl_vars['selected_search_type'] && $this->_tpl_vars['pages']['add_listing']): ?>
                    <?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'add_listing','assign' => 'add_listing_link'), $this);?>

                    <?php $this->assign('link', ((is_array($_tmp=((is_array($_tmp='<a href="')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['add_listing_link']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['add_listing_link'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '">$1</a>') : smarty_modifier_cat($_tmp, '">$1</a>'))); ?>
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['no_listings_found'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, '/\[(.+)\]/', $this->_tpl_vars['link']) : smarty_modifier_regex_replace($_tmp, '/\[(.+)\]/', $this->_tpl_vars['link'])); ?>

                <?php else: ?>
                    <?php echo $this->_tpl_vars['lang']['no_dealer_listings']; ?>

                <?php endif; ?>
            </div>
        <?php endif; ?>
        <!-- account listings end -->

        <?php if (isset ( $this->_tpl_vars['account']['Agents_count'] )): ?>
            </div>

            <div id="area_agents" class="tab_area hide">
                <?php if ($this->_tpl_vars['account']['Agents_count'] > 0): ?>
                    <section id="accounts" class="grid row"><?php echo $this->_tpl_vars['lang']['loading']; ?>
</section>
                    <section id="pagination"></section>
                <?php else: ?>
                    <div class="info"><?php echo $this->_tpl_vars['lang']['agency_not_have_agents']; ?>
</div>
                <?php endif; ?>
            </div>

            <script class="fl-js-dynamic"><?php echo '
                $(function () {
                    let agentsTabOpened = false, agentsCount = '; ?>
<?php echo $this->_tpl_vars['account']['Agents_count']; ?>
<?php echo ';

                    $(\'#tab_agents\').click(function () {
                        if (agentsTabOpened === true) {
                            return;
                        }

                        if (agentsCount) {
                            flGetAgents(1);
                        }

                        agentsTabOpened = true;
                    });

                    if (location.hash && location.hash === \'#agents_tab\') {
                        if (agentsCount) {
                            flGetAgents(1);
                        }

                        agentsTabOpened = true;
                    }

                    $(\'a.agencies-agents\').click(function () {
                        $(\'#tab_agents a\').trigger(\'click\');
                    })
                });

                let flGetAgents = function (page) {
                    flUtil.ajax(
                        {mode: \'getAgents\', agencyID: \''; ?>
<?php echo $this->_tpl_vars['account']['ID']; ?>
<?php echo '\', page: page},
                        function(response) {
                            if (response && response.status === \'OK\' && response.agentsHtml) {
                                $(\'#area_agents #accounts\').empty().append(response.agentsHtml);

                                if (response.paginationHTML) {
                                    flUtil.loadScript(
                                        rlConfig.tpl_base + \'components/pagination/_pagination.js\',
                                        function () {
                                            let $pagination = $(\'#area_agents #pagination\');
                                            $pagination.empty().append(response.paginationHTML);
                                            flPaginationHandler($pagination);
                                        }
                                    );
                                }
                            } else {
                                printMessage(\'error\', lang.system_error);
                            }
                        }
                    )
                }
            '; ?>
</script>
        <?php endif; ?>
    <?php else: ?>
        <?php if ($this->_tpl_vars['alphabet_dealers']): ?>
            <?php $this->assign('dealers', $this->_tpl_vars['alphabet_dealers']); ?>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['config']['map_module']): ?>
        <script>var accounts_map_data = new Array();</script>
        <?php endif; ?>

        <!-- dealers list -->
        <?php if ($this->_tpl_vars['dealers']): ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'grid_navbar_account.tpl') : smarty_modifier_cat($_tmp, 'grid_navbar_account.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

            <script>var accounts_map = new Array();</script>
            <section id="accounts" class="grid row">
                <?php $_from = $this->_tpl_vars['dealers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['dealersF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['dealersF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['dealer']):
        $this->_foreach['dealersF']['iteration']++;
?>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'dealer.tpl') : smarty_modifier_cat($_tmp, 'dealer.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                    <?php if ($this->_tpl_vars['dealer']['Loc_latitude'] && $this->_tpl_vars['dealer']['Loc_longitude'] && $this->_tpl_vars['config']['map_module']): ?>
                    <script class="fl-js-dynamic">
                    accounts_map_data.push(<?php echo '{'; ?>

                        latLng: [<?php echo $this->_tpl_vars['dealer']['Loc_latitude']; ?>
, <?php echo $this->_tpl_vars['dealer']['Loc_longitude']; ?>
],
                        preview: <?php echo '{'; ?>

                            component: 'account',
                            id: <?php echo $this->_tpl_vars['dealer']['ID']; ?>

                        <?php echo '}'; ?>

                    <?php echo '}'; ?>
);
                    </script>
                <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
            </section>

            <?php if ($this->_tpl_vars['config']['map_module']): ?>
                <section id="accounts_map" class="hide"></section>

                <?php echo $this->_plugins['function']['mapsAPI'][0][0]->mapsAPI(array('assign' => 'mapAPI'), $this);?>


                <script>
                rlConfig['map_api_css'] = <?php echo json_encode($this->_tpl_vars['mapAPI']['css']); ?>
;
                rlConfig['map_api_js'] = <?php echo json_encode($this->_tpl_vars['mapAPI']['js']); ?>
;
                </script>
            <?php endif; ?>

            <?php if ($this->_tpl_vars['alphabet_dealers']): ?>
                <?php echo $this->_plugins['function']['paging'][0][0]->paging(array('calc' => $this->_tpl_vars['pInfo']['calc_alphabet'],'total' => count($this->_tpl_vars['dealers']),'current' => $this->_tpl_vars['pInfo']['current'],'per_page' => $this->_tpl_vars['config']['dealers_per_page'],'url' => $this->_tpl_vars['char'],'var' => 'character'), $this);?>

            <?php else: ?>
                <?php echo $this->_plugins['function']['paging'][0][0]->paging(array('calc' => $this->_tpl_vars['pInfo']['calc'],'total' => count($this->_tpl_vars['dealers']),'current' => $this->_tpl_vars['pInfo']['current'],'per_page' => $this->_tpl_vars['config']['dealers_per_page'],'url' => $this->_tpl_vars['search_results_url']), $this);?>

            <?php endif; ?>
        <?php else: ?>
            <div class="info"><?php echo $this->_tpl_vars['lang']['no_dealers']; ?>
</div>
        <?php endif; ?>
        <!-- dealers list end -->
    <?php endif; ?>
<?php endif; ?>

<!-- accounts tpl end -->