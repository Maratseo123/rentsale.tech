<?php /* Smarty version 2.6.31, created on 2023-10-30 15:01:48
         compiled from controllers/subscriptions.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'rlHook', 'controllers/subscriptions.tpl', 5, false),array('modifier', 'cat', 'controllers/subscriptions.tpl', 18, false),array('modifier', 'number_format', 'controllers/subscriptions.tpl', 270, false),array('modifier', 'date_format', 'controllers/subscriptions.tpl', 289, false),)), $this); ?>
<!-- subscription tpl -->

<!-- navigation bar -->
<div id="nav_bar">
    <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'apTplSubscriptionNavBar'), $this);?>


    <?php if (! $_GET['action']): ?>
        <a href="javascript:void(0)" onclick="show('search')" class="button_bar"><span class="left"></span><span class="center_search"><?php echo $this->_tpl_vars['lang']['search']; ?>
</span><span class="right"></span></a>
    <?php endif; ?>

    <a href="<?php echo $this->_tpl_vars['rlBase']; ?>
index.php?controller=<?php echo $_GET['controller']; ?>
" class="button_bar"><span class="left"></span><span class="center_list"><?php echo $this->_tpl_vars['lang']['subscription_list']; ?>
</span><span class="right"></span></a>
</div>

<!-- navigation bar end -->
<!-- search -->
<?php if (! $_GET['action']): ?>
    <div id="search" class="hide">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_start.tpl') : smarty_modifier_cat($_tmp, 'm_block_start.tpl')), 'smarty_include_vars' => array('block_caption' => $this->_tpl_vars['lang']['search'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <table>
        <tr>
            <td valign="top">
                <table class="form">
                    <tr>
                        <td class="name w130"><?php echo $this->_tpl_vars['lang']['username']; ?>
</td>
                        <td class="field">
                            <input type="text" id="username" maxlength="60" />
                        </td>
                    </tr>
                    <tr>
                        <td class="name w130"><?php echo $this->_tpl_vars['lang']['subscription_id']; ?>
</td>
                        <td class="field">
                            <input type="text" id="subscription_id" maxlength="60" />
                        </td>
                    </tr>
                    <tr>
                        <td class="name w130"><?php echo $this->_tpl_vars['lang']['account_type']; ?>
</td>
                        <td class="field">
                            <select id="account_type" style="width: 200px;">
                                <option value=""><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
                                <?php $_from = $this->_tpl_vars['account_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['type']):
?>
                                    <option value="<?php echo $this->_tpl_vars['type']['Key']; ?>
" <?php if ($this->_tpl_vars['sPost']['profile']['type'] == $this->_tpl_vars['type']['Key']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['type']['name']; ?>
</option>
                                <?php endforeach; endif; unset($_from); ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="name w130"><?php echo $this->_tpl_vars['lang']['plan']; ?>
</td>
                        <td class="field">
                            <select class="filters w200" id="plan_id">
                                <option value=""><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
                                <?php $_from = $this->_tpl_vars['services']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['plans']):
?>
                                    <option disabled="disabled" value="<?php echo $this->_tpl_vars['key']; ?>
" class="highlight_opt"><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['key']]; ?>
</option>
                                    <?php $_from = $this->_tpl_vars['plans']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['plan']):
?>
                                        <option value="<?php echo $this->_tpl_vars['plan']['ID']; ?>
-<?php echo $this->_tpl_vars['key']; ?>
"><?php echo $this->_tpl_vars['plan']['name']; ?>
</option>
                                    <?php endforeach; endif; unset($_from); ?>
                                <?php endforeach; endif; unset($_from); ?>
                            </select>
                        </td>
                    </tr>

                    <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'apTplSubscriptionSearch1'), $this);?>


                    <tr>
                        <td></td>
                        <td class="field">
                            <input id="search_button" type="submit" value="<?php echo $this->_tpl_vars['lang']['search']; ?>
" />
                            <input type="button" value="<?php echo $this->_tpl_vars['lang']['reset']; ?>
" id="reset_filter_button" />

                            <a class="cancel" href="javascript:void(0)" onclick="show('search')"><?php echo $this->_tpl_vars['lang']['cancel']; ?>
</a>
                        </td>
                    </tr>
                </table>
            </td>
            <td style="width: 50px;"></td>
            <td valign="top">
                <table class="form">
                    <tr>
                        <td class="name w130"><?php echo $this->_tpl_vars['lang']['payment_gateway']; ?>
</td>
                        <td class="field">
                            <select class="filters w200" id="gateway_id">
                                <option value=""><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
                                <?php $_from = $this->_tpl_vars['payment_gateways']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['gateway']):
?>
                                    <option value="<?php echo $this->_tpl_vars['gateway']['ID']; ?>
" <?php if ($this->_tpl_vars['sPost']['gateway_id'] == $this->_tpl_vars['gateway']['ID']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['gateway']['name']; ?>
</option>
                                <?php endforeach; endif; unset($_from); ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="name w130"><?php echo $this->_tpl_vars['lang']['amount']; ?>
</td>
                        <td class="field">
                            <input type="text" id="amount_from" maxlength="10" style="width: 50px;text-align: center;" />
                            <img class="divider" alt="" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" />
                            <input type="text" id="amount_to" maxlength="10" style="width: 50px;text-align: center;" />
                        </td>
                    </tr> 
                    <tr>
                        <td class="name w130"><?php echo $this->_tpl_vars['lang']['status']; ?>
</td>
                        <td class="field">
                            <select id="search_status" style="width: 200px;">
                                <option value="">- <?php echo $this->_tpl_vars['lang']['all']; ?>
 -</option>
                                <?php $_from = $this->_tpl_vars['statuses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['status']):
?>
                                    <option value="<?php echo $this->_tpl_vars['status']; ?>
" <?php if ($this->_tpl_vars['status'] == $this->_tpl_vars['sPost']['status']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['status']]; ?>
</option>
                                <?php endforeach; endif; unset($_from); ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="name w130"><?php echo $this->_tpl_vars['lang']['date']; ?>
</td>
                        <td class="field" style="white-space: nowrap;">
                            <input class="date-calendar"
                                type="text"
                                value="<?php echo $_POST['date_from']; ?>
"
                                size="12"
                                maxlength="10"
                                id="date_from"
                                autocomplete="off" />
                            <img class="divider" alt="" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" />
                            <input class="date-calendar"
                                type="text"
                                value="<?php echo $_POST['date_to']; ?>
"
                                size="12"
                                maxlength="10"
                                id="date_to"
                                autocomplete="off" />
                        </td>
                    </tr>

                    <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'apTplSubscriptionSearch2'), $this);?>


                </table>
            </td>
        </tr>
        </table>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_end.tpl') : smarty_modifier_cat($_tmp, 'm_block_end.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>

    <script type="text/javascript">
    <?php echo '
    
    var sFields = new Array(\'username\', \'subscription_id\', \'account_type\', \'plan_id\', \'gateway_id\', \'amount_from\', \'amount_to\', \'search_status\', \'date_from\', \'date_to\');
    var cookie_filters = new Array();
    
    $(document).ready(function(){
        $(function(){
            $(\'#date_from\').datepicker({
                showOn: \'both\',
                buttonImage    : \''; ?>
<?php echo $this->_tpl_vars['rlTplBase']; ?>
<?php echo 'img/blank.gif\',
                buttonText     : \''; ?>
<?php echo $this->_tpl_vars['lang']['dp_choose_date']; ?>
<?php echo '\',
                buttonImageOnly: true,
                dateFormat     : \'yy-mm-dd\',
                changeMonth    : true,
                changeYear     : true,
                yearRange      : \'-100:+30\'
            }).datepicker($.datepicker.regional[\''; ?>
<?php echo (defined('RL_LANG_CODE') ? @RL_LANG_CODE : null); ?>
<?php echo '\']);

            $(\'#date_to\').datepicker({
                showOn: \'both\',
                buttonImage    : \''; ?>
<?php echo $this->_tpl_vars['rlTplBase']; ?>
<?php echo 'img/blank.gif\',
                buttonText     : \''; ?>
<?php echo $this->_tpl_vars['lang']['dp_choose_date']; ?>
<?php echo '\',
                buttonImageOnly: true,
                dateFormat     : \'yy-mm-dd\',
                changeMonth    : true,
                changeYear     : true,
                yearRange      : \'-100:+30\'
            }).datepicker($.datepicker.regional[\''; ?>
<?php echo (defined('RL_LANG_CODE') ? @RL_LANG_CODE : null); ?>
<?php echo '\']);
        });
        
        if ( readCookie(\'subscription_sc\') )
        {
            $(\'#search\').show();
            cookie_filters = readCookie(\'subscription_sc\').split(\',\');
            
            for (var i in cookie_filters)
            {
                if ( typeof(cookie_filters[i]) == \'string\' )
                {
                    var item = cookie_filters[i].split(\'||\');
                    $(\'#\'+item[0]).selectOptions(item[1]);
                }
            }
            
            cookie_filters.push(new Array(\'search\', 1));
        }
        
        $(\'#search_button\').click(function(){       
            var sValues = new Array();
            var filters = new Array();
            var save_cookies = new Array();
            
            for(var si = 0; si < sFields.length; si++)
            {
                sValues[si] = $(\'#\'+sFields[si]).val();
                filters[si] = new Array(sFields[si], $(\'#\'+sFields[si]).val());
                save_cookies[si] = sFields[si]+\'||\'+$(\'#\'+sFields[si]).val();
            }
            
            // save search criteria
            createCookie(\'subscription_sc\', save_cookies, 1);
            
            filters.push(new Array(\'search\', 1));
            
            subscriptionGrid.filters = filters;
            subscriptionGrid.reload();
        });
        
        $(\'#reset_filter_button\').click(function(){
            eraseCookie(\'subscription_sc\');
            subscriptionGrid.reset();
            
            $("#search select option[value=\'\']").attr(\'selected\', true);
            $("#search input[type=text]").val(\'\');
        });
        
        /* autocomplete js */
        $(\'#username\').rlAutoComplete();
    });
    
    '; ?>

    
    <?php if ($_GET['status']): ?>
        cookie_filters = new Array();
        cookie_filters[0] = new Array('search_status', '<?php echo $_GET['status']; ?>
');
        cookie_filters.push(new Array('search', 1));
    <?php endif; ?>
    
    <?php if ($_GET['account_type']): ?>
        cookie_filters = new Array();
        cookie_filters[0] = new Array('account_type', '<?php echo $_GET['account_type']; ?>
');
        cookie_filters.push(new Array('search', 1));
    <?php endif; ?>
    
    <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'apTplSubscriptionSearchJS'), $this);?>

    
    </script>
<?php endif; ?>
<!-- search end -->

<?php if ($_GET['action']): ?> 
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_start.tpl') : smarty_modifier_cat($_tmp, 'm_block_start.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <table class="list">
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['service']; ?>
:</td>
            <td class="value"><?php echo $this->_tpl_vars['subscription_info']['Service']; ?>
</td>
        </tr>
        <?php if ($this->_tpl_vars['subscription_info']['Subscription_ID']): ?>
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['subscription_id']; ?>
:</td>
            <td class="value"><?php echo $this->_tpl_vars['subscription_info']['Subscription_ID']; ?>
</td>
        </tr>
        <?php endif; ?>
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['status']; ?>
:</td>
            <td class="value"><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['subscription_info']['Status']]; ?>
</td>
        </tr>
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['subscription_count']; ?>
:</td>
            <td class="value"><?php echo $this->_tpl_vars['subscription_info']['Count']; ?>
</td>
        </tr>
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['item']; ?>
:</td>
            <td class="value"><?php echo $this->_tpl_vars['subscription_info']['Item_name']; ?>
</td>
        </tr>
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['plan']; ?>
:</td>
            <td class="value"><?php echo $this->_tpl_vars['subscription_info']['plan']['name']; ?>
</td>
        </tr>
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['price']; ?>
:</td>
            <td class="value">
                <?php if ($this->_tpl_vars['config']['system_currency_position'] == 'before'): ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?> <span id="total"><?php echo ((is_array($_tmp=$this->_tpl_vars['subscription_info']['plan']['Price'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, '.', ',') : number_format($_tmp, 2, '.', ',')); ?>
</span> <?php if ($this->_tpl_vars['config']['system_currency_position'] == 'after'): ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?>
            </td>
        </tr>
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['payment_gateway']; ?>
:</td>
            <td class="value"><?php echo $this->_tpl_vars['subscription_info']['Gateway']; ?>
</td>
        </tr>
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['txn_id']; ?>
:</td>
            <td class="value"><?php echo $this->_tpl_vars['subscription_info']['Txn_ID']; ?>
</td>
        </tr>
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['username']; ?>
:</td>
            <td class="value">
                <a href="<?php echo $this->_tpl_vars['rlBase']; ?>
index.php?controller=accounts&amp;action=view&amp;userid=<?php echo $this->_tpl_vars['subscription_info']['Account_ID']; ?>
"><?php echo $this->_tpl_vars['subscription_info']['Full_name']; ?>
</a>
            </td>
        </tr>
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['date']; ?>
:</td>
            <td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['subscription_info']['Date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)) : smarty_modifier_date_format($_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null))); ?>
</td>
        </tr>
        
    </table>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_end.tpl') : smarty_modifier_cat($_tmp, 'm_block_end.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
    <!-- subscription grid -->
    <div id="grid"></div>
    <script type="text/javascript">//<![CDATA[
    var subscriptionGrid;

    <?php echo '
    $(document).ready(function(){

        subscriptionGrid = new gridObj({
            key: \'subscription\',
            id: \'grid\',
            ajaxUrl: rlUrlHome + \'controllers/subscriptions.inc.php?q=ext\',
            defaultSortField: \'ID\',
            remoteSortable: true,
            filters: cookie_filters,
            checkbox: false,
            actions: [
                [lang[\'ext_delete\'], \'delete\']
            ],
            title: lang[\'ext_subscription_manager\'],

            fields: [
                {name: \'ID\', mapping: \'ID\', type: \'int\'},
                {name: \'Service\', mapping: \'Service\'},
                {name: \'Item_name\', mapping: \'Item_name\'},
                {name: \'Total\', mapping: \'Total\'},
                {name: \'Full_name\', mapping: \'Full_name\', type: \'string\'},
                {name: \'Account_ID\', mapping: \'Account_ID\', type: \'int\'},
                {name: \'Status\', mapping: \'Status\', type: \'string\'},
                {name: \'Date\', mapping: \'Date\', type: \'date\', dateFormat: \'Y-m-d H:i:s\'},
                {name: \'Gateway\', mapping: \'Gateway\'},
                {name: \'Subscription_ID\', mapping: \'Subscription_ID\'},
                {name: \'Allow_check\', mapping: \'Allow_check\'}
            ],
            columns: [
                {
                    header: lang[\'ext_id\'],
                    dataIndex: \'ID\',
                    width: 3,
                    id: \'rlExt_black_bold\'
                },{
                    header: lang[\'ext_service\'],
                    dataIndex: \'Service\',
                    width: 10,
                    id: \'rlExt_item_bold\'
                },{
                    header: lang[\'ext_item\'],
                    dataIndex: \'Item_name\',
                    width: 20
                },{
                    header: lang[\'ext_total\']+\' (\'+rlCurrency+\')\',
                    dataIndex: \'Total\',
                    width: 5
                },{
                    header: lang[\'ext_username\'],
                    dataIndex: \'Full_name\',
                    width: 10,
                    renderer: function(username, ext, row){
                        if (username) {
                            var out = "<a target=\'_blank\' ext:qtip=\'"+lang[\'ext_click_to_view_details\']+"\' href=\'"+rlUrlHome+"index.php?controller=accounts&action=view&userid="+row.data.Account_ID+"\'>"+username+"</a>"   
                        } else {
                            var out = \'<span class="delete">'; ?>
<?php echo $this->_tpl_vars['lang']['account_removed']; ?>
<?php echo '</span>\';
                        }
                        return out;
                    }
                },{
                    header: lang[\'ext_gateway\'],
                    dataIndex: \'Gateway\',
                    width: 10
                },{
                    header: lang[\'ext_date\'],
                    dataIndex: \'Date\',
                    width: 10,
                    renderer: Ext.util.Format.dateRenderer(rlDateFormat.replace(/%/g, \'\').replace(\'b\', \'M\'))
                },{
                    header: lang[\'ext_status\'],
                    dataIndex: \'Status\',
                    width: 100,
                    fixed: true
                },{
                    header: lang[\'ext_actions\'],
                    width: 50,
                    fixed: true,
                    dataIndex: \'ID\',
                    sortable: false,
                    renderer: function(data, obj, row) {
                        var out = "<center>";

                        if (row.data.Allow_check && row.data.Subscription_ID) {
                            out += "<a href=\'javascript://\' onClick=\'checkSubscription("+row.data.ID+");\'><img class=\'info\' ext:qtip=\'"+lang[\'check_subscription\']+"\' src=\'"+rlUrlHome+"img/blank.gif\' style=\'vertical-align: top;\' /></a>";
                        }

                        out += "<a href=\'"+rlUrlHome+"index.php?controller="+controller+"&action=view&item="+data+"\'><img class=\'view\' ext:qtip=\'"+lang[\'ext_view\']+"\' src=\'"+rlUrlHome+"img/blank.gif\' /></a>";

                        out += "</center>";

                        return out;
                    }
                }
            ]
        });

        '; ?>
<?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'apTplSubscriptionGrid'), $this);?>
<?php echo '

        subscriptionGrid.init();
        grid.push(subscriptionGrid.grid);
        
    });

    var checkSubscription = function(itemID) {
        popupSubscriptionInfo = new Ext.Window({
            title: \''; ?>
<?php echo $this->_tpl_vars['lang']['subscription_details']; ?>
<?php echo '\',
            autoLoad: {
                url: rlConfig[\'ajax_url\'],
                scripts: true ,
                params: {item: \'checkSubscription\', itemID: itemID}
            },
            layout: \'fit\',
            width: 500,
            height: \'auto\',
            plain: true,
            modal: true,
            closable: true,
            y: 150,
        });

        popupSubscriptionInfo.show();
        flynax.slideTo(\'body\');
    }
    '; ?>

    //]]>
    </script>
    <!-- subscription grid end -->
<?php endif; ?>

<?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'apTplPaymentGatewaysBottom'), $this);?>


<!-- subscription tpl end -->