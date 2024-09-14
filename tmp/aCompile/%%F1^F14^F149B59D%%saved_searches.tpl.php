<?php /* Smarty version 2.6.31, created on 2023-10-29 16:15:29
         compiled from controllers/saved_searches.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'rlHook', 'controllers/saved_searches.tpl', 5, false),array('modifier', 'cat', 'controllers/saved_searches.tpl', 14, false),)), $this); ?>
<!-- saved searches tpl -->

<!-- navigation bar -->
<div id="nav_bar">
    <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'apTplSavedSearchesNavBar'), $this);?>

    
    <a href="<?php echo $this->_tpl_vars['rlBase']; ?>
index.php?controller=<?php echo $_GET['controller']; ?>
" class="button_bar"><span class="left"></span><span class="center_list"><?php echo $this->_tpl_vars['lang']['searches_list']; ?>
</span><span class="right"></span></a>
</div>
<!-- navigation bar end -->

<?php if ($_GET['action'] == 'view'): ?>

    <!-- view details -->
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_start.tpl') : smarty_modifier_cat($_tmp, 'm_block_start.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    
    <table class="sTatic">
    <tr>
        <td valign="top" style="width: 170px;text-align: right;padding-right: 20px;">
            <a title="<?php echo $this->_tpl_vars['lang']['visit_owner_page']; ?>
" href="<?php echo $this->_tpl_vars['rlBase']; ?>
index.php?controller=accounts&amp;action=view&amp;userid=<?php echo $this->_tpl_vars['profile_data']['ID']; ?>
">
                <img style="display: inline;" <?php if (! empty ( $this->_tpl_vars['profile_data']['Photo'] )): ?>class="thumbnail"<?php endif; ?> alt="<?php echo $this->_tpl_vars['lang']['seller_thumbnail']; ?>
" src="<?php if (! empty ( $this->_tpl_vars['profile_data']['Photo'] )): ?><?php echo (defined('RL_FILES_URL') ? @RL_FILES_URL : null); ?>
<?php echo $this->_tpl_vars['profile_data']['Photo']; ?>
<?php else: ?><?php echo $this->_tpl_vars['rlTplBase']; ?>
img/no-account.png<?php endif; ?>" />
            </a>

            <ul class="info">
                <?php if ($this->_tpl_vars['config']['messages_module']): ?><li><input id="contact_owner" type="button" value="<?php echo $this->_tpl_vars['lang']['contact_owner']; ?>
" /></li><?php endif; ?>
            </ul>
        </td>
        <td valign="top">
            <div class="username"><?php echo $this->_tpl_vars['profile_data']['Full_name']; ?>
</div>
            
            <table class="list" style="margin-bottom: 25px;">
                <tr id="si_field_username">
                    <td class="name"><?php echo $this->_tpl_vars['lang']['username']; ?>
:</td>
                    <td class="value first"><?php echo $this->_tpl_vars['profile_data']['Username']; ?>
</td>
                </tr>
                <tr id="si_field_email">
                    <td class="name"><?php echo $this->_tpl_vars['lang']['mail']; ?>
:</td>
                    <td class="value"><a href="mailto:<?php echo $this->_tpl_vars['profile_data']['Mail']; ?>
"><?php echo $this->_tpl_vars['profile_data']['Mail']; ?>
</a></td>
                </tr>
                
                <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'apTplSavedSearchesUserField'), $this);?>

            </table>
            
            <div class="username"><?php echo $this->_tpl_vars['lang']['search_criteria']; ?>
</div>
            <?php if ($this->_tpl_vars['saved_search']): ?>
                <table class="list">
                <?php $_from = $this->_tpl_vars['saved_search']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'saved_search_field.tpl') : smarty_modifier_cat($_tmp, 'saved_search_field.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <?php endforeach; endif; unset($_from); ?>
                
                <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'apTplSavedSearchesCriteraiField'), $this);?>

                
                <tr>
                    <td class="name"></td>
                    <td class="value"><input name="search" type="button" value="<?php echo $this->_tpl_vars['lang']['search_and_send']; ?>
" /></td>
                </tr>
                </table>
            <?php endif; ?>
        </td>
    </tr>
    </table>
    
    <script type="text/javascript">
    var owner_id = <?php if ($this->_tpl_vars['profile_data']['ID']): ?><?php echo $this->_tpl_vars['profile_data']['ID']; ?>
<?php else: ?>false<?php endif; ?>;
    var search_id = <?php if ($this->_tpl_vars['saved_search']['ID']): ?><?php echo $this->_tpl_vars['saved_search']['ID']; ?>
<?php else: ?>false<?php endif; ?>;
    <?php echo '
    
    $(document).ready(function(){
        $(\'#contact_owner\').click(function(){
            rlPrompt(\''; ?>
<?php echo $this->_tpl_vars['lang']['contact_owner']; ?>
<?php echo '\', \'xajax_contactOwner\', owner_id, true);
        });
        
        $(\'input[name=search]\').click(function(){
            rlConfirm("'; ?>
<?php echo $this->_tpl_vars['lang']['make_saved_search_notice']; ?>
<?php echo '", \'xajax_checkSavedSearch\', search_id);
        });
    });
    
    '; ?>

    </script>
    
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_end.tpl') : smarty_modifier_cat($_tmp, 'm_block_end.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <!-- view details end -->
    
    <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'apTplSavedSearchesViewBottom'), $this);?>


<?php else: ?>

    <!-- listing groups grid -->
    <div id="grid"></div>
    <script type="text/javascript">//<![CDATA[
    var savedSearchesGrid;
    
    <?php echo '
    $(document).ready(function(){
        
        savedSearchesGrid = new gridObj({
            key: \'savedSearches\',
            id: \'grid\',
            ajaxUrl: rlUrlHome + \'controllers/saved_searches.inc.php?q=ext\',
            defaultSortField: \'ID\',
            title: lang[\'ext_saved_searches_manager\'],
            remoteSortable: false,
            fields: [
                {name: \'ID\', mapping: \'ID\', type: \'int\'},
                {name: \'Account_ID\', mapping: \'Account_ID\', type: \'int\'},
                {name: \'Username\', mapping: \'Username\', type: \'string\'},
                {name: \'Form_key\', mapping: \'Form_key\', type: \'string\'},
                {name: \'Form_name\', mapping: \'Form_name\', type: \'string\'},
                {name: \'Listing_type\', mapping: \'Listing_type\', type: \'string\'},
                {name: \'name\', mapping: \'name\', type: \'string\'},
                {name: \'Status\', mapping: \'Status\'},
                {name: \'Date\', mapping: \'Date\', type: \'date\', dateFormat: \'Y-m-d H:i:s\'}
            ],
            columns: [
                {
                    header: lang[\'ext_id\'],
                    dataIndex: \'ID\',
                    width: 40,
                    fixed: true,
                    id: \'rlExt_black_bold\'
                },{
                    header: lang[\'ext_username\'],
                    dataIndex: \'Username\',
                    width: 8,
                    id: \'rlExt_item_bold\',
                    renderer: function(username, ext, row){
                        return "<a target=\'_blank\' ext:qtip=\'"+lang[\'ext_click_to_view_details\']+"\' href=\'"+rlUrlHome+"index.php?controller=accounts&action=view&userid="+row.data.Account_ID+"\'>"+username+"</a>"
                    }
                },
                {
                    header: lang[\'ext_search_listing_type\'],
                    dataIndex: \'name\',
                    width: 40,
                    id: \'rlExt_item\'
                },{
                    header: "'; ?>
<?php echo $this->_tpl_vars['lang']['last_check']; ?>
<?php echo '",
                    dataIndex: \'Date\',
                    width: 10,
                    renderer: Ext.util.Format.dateRenderer(rlDateFormat.replace(/%/g, \'\').replace(\'b\', \'M\'))
                },{
                    header: lang[\'ext_status\'],
                    dataIndex: \'Status\',
                    fixed: true,
                    width: 110,
                    editor: new Ext.form.ComboBox({
                        store: [
                            [\'active\', lang.active],
                            [\'approval\', lang.approval]
                        ],
                        displayField: \'value\',
                        valueField: \'key\',
                        typeAhead: true,
                        mode: \'local\',
                        triggerAction: \'all\',
                        selectOnFocus:true
                    })
                },{
                    header: lang[\'ext_actions\'],
                    width: 70,
                    fixed: true,
                    dataIndex: \'ID\',
                    sortable: false,
                    renderer: function(data) {
                        var out = "<center>";

                        if ( rights[cKey].indexOf(\'edit\') >= 0 )
                        {
                            out += "<a href=\'"+rlUrlHome+"index.php?controller="+controller+"&action=view&id="+data+"\'><img class=\'view\' ext:qtip=\'"+lang[\'ext_view\']+"\' src=\'"+rlUrlHome+"img/blank.gif\' /></a>";
                        }
                        if ( rights[cKey].indexOf(\'delete\') >= 0 )
                        {
                            out += "<img class=\'remove\' ext:qtip=\'"+lang[\'ext_delete\']+"\' src=\'"+rlUrlHome+"img/blank.gif\' onClick=\'rlConfirm( \\""+lang[\'ext_notice_\'+delete_mod]+"\\", \\"xajax_deleteSavedSearch\\", \\""+data+"\\" )\' />";
                        }
                        out += "</center>";
                        
                        return out;
                    }
                }
            ]
        });
        
        '; ?>
<?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'apTplSavedSearchesGrid'), $this);?>
<?php echo '
        
        savedSearchesGrid.init();
        grid.push(savedSearchesGrid.grid);
        
    });
    '; ?>

    //]]>
    </script>
    <!-- listing groups grid end -->

    <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'apTplSavedSearchesBottom'), $this);?>

    
<?php endif; ?>

<!-- saved searches tpl end -->