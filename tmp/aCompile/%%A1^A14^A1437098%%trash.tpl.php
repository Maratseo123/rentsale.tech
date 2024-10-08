<?php /* Smarty version 2.6.31, created on 2023-10-31 15:51:48
         compiled from controllers/trash.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'rlHook', 'controllers/trash.tpl', 7, false),)), $this); ?>
<!-- trash box tpl -->

<?php if ($this->_tpl_vars['config']['trash']): ?>

    <!-- navigation bar -->
    <div id="nav_bar">
        <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'apTplTrashNavBar'), $this);?>

        
        <a href="javascript:void(0)" onclick="rlConfirm( '<?php echo $this->_tpl_vars['lang']['clear_trash_nitice']; ?>
', 'refMethod', '');" class="button_bar"><span class="left"></span><span class="center_remove"><?php echo $this->_tpl_vars['lang']['clear_trash']; ?>
</span><span class="right"></span></a>
    </div>
    <!-- navigation bar end -->

    <!-- trash grid -->
    <div id="grid"></div>
    <script type="text/javascript">//<![CDATA[
    <?php echo '
    var refMethod = function(){
        $(\'.button_bar span.center_remove\').html(\''; ?>
<?php echo $this->_tpl_vars['lang']['loading']; ?>
<?php echo '\');
        xajax_clearTrash();
    };
    var trashGrid;
    
    $(document).ready(function(){
        
        trashGrid = new gridObj({
            key: \'trash\',
            id: \'grid\',
            ajaxUrl: rlUrlHome + \'controllers/trash.inc.php?q=ext\',
            defaultSortField: \'Date\',
            defaultSortType: \'desc\',
            checkbox: true,
            actions: [
                [lang[\'ext_restore\'], \'restore\'],
                [lang[\'ext_delete\'], \'delete\']
            ],
            title: lang[\'ext_trash_manager\'],
            fields: [
                {name: \'Admin\', mapping: \'Admin\'},
                {name: \'Date\', mapping: \'Date\', type: \'date\', dateFormat: \'Y-m-d H:i:s\'},
                {name: \'Zones\', mapping: \'Zones\'},
                {name: \'Item\', mapping: \'Item\'},
                {name: \'ID\', mapping: \'ID\'}
            ],
            columns: [
                {
                    header: lang[\'ext_area\'],
                    dataIndex: \'Zones\',
                    width: 15
                },{
                    id: \'rlExt_item\',
                    header: lang[\'ext_item\'],
                    dataIndex: \'Item\',
                    width: 60
                },{
                    header: lang[\'ext_deleted_by\'],
                    dataIndex: \'Admin\',
                    width: 15
                },{
                    header: lang[\'ext_delete_date\'],
                    dataIndex: \'Date\',
                    width: 15,
                    renderer: Ext.util.Format.dateRenderer(rlDateFormat.replace(/%/g, \'\').replace(\'b\', \'M\')),
                    editor: new Ext.form.DateField({
                        format: \'Y-m-d H:i:s\'
                    })
                },{
                    header: lang[\'ext_actions\'],
                    width: 70,
                    fixed: true,
                    dataIndex: \'ID\',
                    sortable: false,
                    renderer: function(data) {
                        var out = "<center>";
    
                        out += "<img class=\'restore\' ext:qtip=\'"+lang[\'ext_restore\']+"\' src=\'"+rlUrlHome+"img/blank.gif\' onClick=\'xajax_restoreTrashItem(\\""+data+"\\")\' />";
                        out += "<img class=\'remove\' ext:qtip=\'"+lang[\'ext_delete\']+"\' src=\'"+rlUrlHome+"img/blank.gif\' onClick=\'rlConfirm( \\""+lang[\'ext_notice_delete\']+"\\", \\"xajax_deleteTrashItem\\", \\""+Array(data)+"\\", \\"section_load\\" )\' />";
    
                        out += "</center>";
                    
                        return out;
                    }
                }
            ]
        });
        
        '; ?>
<?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'apTplTrashGrid'), $this);?>
<?php echo '
        
        trashGrid.init();
        grid.push(trashGrid.grid);
        
        /* mass actions listener */
        trashGrid.actionButton.addListener(\'click\', function()
        {
            var sel_obj = trashGrid.checkboxColumn.getSelections();
            var action = trashGrid.actionsDropDown.getValue();

            if (!action)
            {
                return false;
            }
            
            for( var i = 0; i < sel_obj.length; i++ )
            {
                trashGrid.ids += sel_obj[i].id;
                if ( sel_obj.length != i+1 )
                {
                    trashGrid.ids += \'|\';
                }
            }
            
            if ( action == \'delete\' )
            {
                Ext.MessageBox.confirm(\'Confirm\', lang[\'ext_notice_delete\'], function(btn){
                    if ( btn == \'yes\' )
                    {
                        xajax_massActions( trashGrid.ids, action );
                        trashGrid.reload();
                    }
                });
            }
            else
            {
                xajax_massActions( trashGrid.ids, action );
                trashGrid.reload();
            }

            trashGrid.checkboxColumn.clearSelections();
            trashGrid.actionsDropDown.setVisible(false);
            trashGrid.actionButton.setVisible(false);
        });
        
    });
    '; ?>

    //]]>
    </script>
    <!-- trash grid end -->
    
    <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'apTplTrashBottom'), $this);?>

    
<?php endif; ?>

<!-- trash box tpl end -->