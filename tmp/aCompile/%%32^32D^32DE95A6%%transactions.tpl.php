<?php /* Smarty version 2.6.31, created on 2023-10-30 15:01:51
         compiled from controllers/transactions.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'rlHook', 'controllers/transactions.tpl', 5, false),array('modifier', 'cat', 'controllers/transactions.tpl', 13, false),)), $this); ?>
<!-- transactions tpl -->

<!-- navigation bar -->
<div id="nav_bar">
    <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'apTplTransactionsNavBar'), $this);?>

    
    <a onclick="show('search');" href="javascript:void(0)" class="button_bar"><span class="left"></span><span class="center_search"><?php echo $this->_tpl_vars['lang']['search']; ?>
</span><span class="right"></span></a>
</div>
<!-- navigation bar end -->

<!-- search -->
<div id="search" class="hide">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_start.tpl') : smarty_modifier_cat($_tmp, 'm_block_start.tpl')), 'smarty_include_vars' => array('block_caption' => $this->_tpl_vars['lang']['search'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <form onsubmit="return false" method="post" action="">
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
                    <td class="name w130"><?php echo $this->_tpl_vars['lang']['name']; ?>
</td>
                    <td class="field">
                        <input type="text" id="name" maxlength="60" />
                    </td>
                </tr>
                <tr>
                    <td class="name w130"><?php echo $this->_tpl_vars['lang']['mail']; ?>
</td>
                    <td class="field">
                        <input type="text" id="email" maxlength="60" />
                    </td>
                </tr>
                <tr>
                    <td class="name w130"><?php echo $this->_tpl_vars['lang']['account_type']; ?>
</td>
                    <td class="field">
                        <select id="account_type">
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
                
                <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'apTplTransactionsSearch1'), $this);?>

                
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
                    <td class="name w130"><?php echo $this->_tpl_vars['lang']['item']; ?>
</td>
                    <td class="field">
                        <select id="item">
                            <option value=""><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
                            <?php $_from = $this->_tpl_vars['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                            <option value="<?php echo $this->_tpl_vars['item']['Service']; ?>
"><?php if (array_key_exists ( $this->_tpl_vars['item']['Service'] , $this->_tpl_vars['l_plan_types'] )): ?><?php echo $this->_tpl_vars['l_plan_types'][$this->_tpl_vars['item']['Service']]; ?>
<?php else: ?><?php echo $this->_tpl_vars['item']['Service']; ?>
<?php endif; ?></option>
                            <?php endforeach; endif; unset($_from); ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="name w130"><?php echo $this->_tpl_vars['lang']['txn_id']; ?>
</td>
                    <td class="field">
                        <input type="text" id="txn_id" maxlength="60" />
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
                    <td class="name w130"><?php echo $this->_tpl_vars['lang']['date']; ?>
</td>
                    <td class="field">
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

                <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'apTplTransactionsSearch2'), $this);?>


                </table>
            </td>
        </tr>   
        </table>
    </form>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_end.tpl') : smarty_modifier_cat($_tmp, 'm_block_end.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<script type="text/javascript">
<?php echo '

var sFields = new Array(\'username\', \'name\', \'email\', \'account_type\', \'item\', \'txn_id\', \'amount_from\', \'amount_to\', \'date_from\', \'date_to\');
var cookie_filters = new Array();

$(document).ready(function(){
    $(function(){
        $(\'#date_from\').datepicker({
            showOn         : \'both\',
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
    
    if ( readCookie(\'transactions_sc\') )
    {
        $(\'#search\').show();
        cookie_filters = readCookie(\'transactions_sc\').split(\',\');
        
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
        
        '; ?>
<?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'apTplTransactionsSearchJS'), $this);?>
<?php echo '
        
        // save search criteria
        createCookie(\'transactions_sc\', save_cookies, 1);
        
        filters.push(new Array(\'search\', 1));
        
        transactionsGrid.filters = filters;
        transactionsGrid.reload();
    });
    
    $(\'#reset_filter_button\').click(function(){
        eraseCookie(\'transactions_sc\');
        transactionsGrid.reset();
        
        $("#search select option[value=\'\']").attr(\'selected\', true);
        $("#search input[type=text]").val(\'\');
    });
    
    /* autocomplete js */
    $(\'#username\').rlAutoComplete();
});

'; ?>


<?php if ($_GET['status']): ?>
    cookie_filters = new Array();
    cookie_filters.push(new Array('search_status', '<?php echo $_GET['status']; ?>
'));
    cookie_filters.push(new Array('search', 1));
<?php endif; ?>

</script>
<!-- search end -->

<!-- transactions grid -->
<div id="grid"></div>
<script type="text/javascript">//<![CDATA[
var transactionsGrid;

<?php echo '
$(document).ready(function(){
    
    transactionsGrid = new gridObj({
        key: \'transactions\',
        id: \'grid\',
        ajaxUrl: rlUrlHome + \'controllers/transactions.inc.php?q=ext\',
        defaultSortField: \'Date\',
        remoteSortable: true,
        checkbox: true,
        actions: [
            [lang[\'ext_delete\'], \'delete\']
        ],
        title: lang[\'ext_transactions_manager\'],
        filters: cookie_filters,
        fields: [
            {name: \'Item\', mapping: \'Item\'},
            {name: \'Username\', mapping: \'Username\', type: \'string\'},
            {name: \'Full_name\', mapping: \'Full_name\', type: \'string\'},
            {name: \'Account_ID\', mapping: \'Account_ID\', type: \'int\'},
            {name: \'Txn_ID\', mapping: \'Txn_ID\'},
            {name: \'Total\', mapping: \'Total\'},
            {name: \'Gateway\', mapping: \'Gateway\'},
            {name: \'Service\', mapping: \'Service\'},
            {name: \'pStatus\', mapping: \'Status\'},
            {name: \'ID\', mapping: \'ID\', type: \'int\'},
            {name: \'Date\', mapping: \'Date\', type: \'date\', dateFormat: \'Y-m-d H:i:s\'}
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
                width: 15
            },{
                header: lang[\'ext_item\'],
                dataIndex: \'Item\',
                width: 20,
                id: \'rlExt_item_bold\',
                renderer: function(val) {
                    return "<span>"+val+"</span>";
                }
            },{
                header: lang[\'ext_username\'],
                dataIndex: \'Username\',
                width: 15,
                renderer: function(username, obj, row){
                    if ( username )
                    {
                        var full_name = trim(row.data.Full_name) ? \' (\'+trim(row.data.Full_name)+\')\' : \'\';
                        var out = \'<a class="green_11_bg" href="\'+rlUrlHome+\'index.php?controller=accounts&action=view&userid=\'+row.data.Account_ID+\'" ext:qtip="\'+lang[\'ext_click_to_view_details\']+\'">\'+username+\'</a>\'+full_name;
                    }
                    else
                    {
                        var out = \'<span class="delete">'; ?>
<?php echo $this->_tpl_vars['lang']['account_removed']; ?>
<?php echo '</span>\';
                    }
                    return out;
                }
            },{
                header: lang[\'ext_txn_id\'],
                dataIndex: \'Txn_ID\',
                width: 15
            },{
                header: lang[\'ext_total\']+\' (\'+rlCurrency+\')\',
                dataIndex: \'Total\',
                width: 5
            },{
                header: lang[\'ext_gateway\'],
                dataIndex: \'Gateway\',
                width: 10,
                css: \'font-weight: bold;\'
            },{
                header: lang[\'ext_date\'],
                dataIndex: \'Date\',
                width: 10,
                renderer: Ext.util.Format.dateRenderer(rlDateFormat.replace(/%/g, \'\').replace(\'b\', \'M\'))
            },{
                header: lang[\'ext_status\'],
                dataIndex: \'pStatus\',
                width: 100,
                fixed: true,
                editor: new Ext.form.ComboBox({
                    store: [
                        [\'paid\', lang[\'ext_paid\']],
                        [\'unpaid\', lang[\'ext_unpaid\']]
                    ],
                    displayField: \'value\',
                    valueField: \'key\',
                    typeAhead: true,
                    mode: \'local\',
                    triggerAction: \'all\',
                    selectOnFocus:true
                }),
                renderer: function(val, obj, row){
                    if(val == lang[\'ext_paid\'])
                    {
                        obj.style += \'background: #d2e798;\';
                    }
                    else if (val == lang[\'ext_unpaid\'])
                    {
                        obj.style += \'background: #fbc4c4;\';
                    }

                    return \'<span ext:qtip="\'+lang[\'ext_click_to_edit\']+\'">\'+val+\'</span>\';
                }
            },{
                header: lang[\'ext_actions\'],
                width: 50,
                fixed: true,
                dataIndex: \'ID\',
                sortable: false,
                renderer: function(data) {
                    return "<center><img class=\'remove\' ext:qtip=\'"+lang[\'ext_delete\']+"\' src=\'"+rlUrlHome+"img/blank.gif\' onClick=\'rlConfirm( \\""+lang[\'ext_notice_\'+delete_mod]+"\\", \\"xajax_deleteTransaction\\", \\""+data+"\\", \\"load\\" )\' /></center>";
                }
            }
        ]
    });
    
    '; ?>
<?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'apTplTransactionsGrid'), $this);?>
<?php echo '
    
    transactionsGrid.init();
    grid.push(transactionsGrid.grid);
    
    // actions listener
    transactionsGrid.actionButton.addListener(\'click\', function()
    {
        var sel_obj = transactionsGrid.checkboxColumn.getSelections();
        var action = transactionsGrid.actionsDropDown.getValue();

        if (!action)
        {
            return false;
        }
        
        for( var i = 0; i < sel_obj.length; i++ )
        {
            transactionsGrid.ids += sel_obj[i].id;
            if ( sel_obj.length != i+1 )
            {
                transactionsGrid.ids += \'|\';
            }
        }
        
        if ( action == \'delete\' )
        {
            Ext.MessageBox.confirm(\'Confirm\', lang[\'ext_notice_\'+delete_mod], function(btn){
                if ( btn == \'yes\' )
                {
                    xajax_deleteTransaction( transactionsGrid.ids );
                }
            });
        }
    });
    
});
'; ?>

//]]>
</script>
<!-- transactions grid end -->

<?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'apTplTransactionsBottom'), $this);?>


<!-- transactions tpl end -->