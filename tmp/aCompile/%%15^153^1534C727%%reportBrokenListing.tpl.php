<?php /* Smarty version 2.6.31, created on 2023-12-10 02:14:17
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/plugins/reportBrokenListing/admin/reportBrokenListing.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/reportBrokenListing/admin/reportBrokenListing.tpl', 23, false),array('modifier', 'count', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/reportBrokenListing/admin/reportBrokenListing.tpl', 29, false),)), $this); ?>
<!-- Navigation bar -->
<div id="nav_bar">
    <?php $this->assign('cur_page', $_GET['page']); ?>

    <?php if ($_GET['page']): ?>
        <?php if ($this->_tpl_vars['cur_page'] == 'reportDetail'): ?>
            <a href="javascript:void(0)" data-listing-id="<?php echo $_GET['id']; ?>
" id="remove-listing" class="button_bar"><span class="left"></span><span class="center_remove"><?php echo $this->_tpl_vars['lang']['rbl_listing_remove']; ?>
</span><span class="right"></span></a>
            <a href="javascript:void(0)" id="filter-points" class="button_bar"><span class="left"></span><span class="center_search"><?php echo $this->_tpl_vars['lang']['filter']; ?>
</span><span class="right"></span></a>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['cur_page'] == 'reportPoints'): ?>
            <a href="javascript:void(0)" id="add-point" class="button_bar"><span class="left"></span><span class="center_add"><?php echo $this->_tpl_vars['lang']['rbl_add_points']; ?>
</span><span class="right"></span></a>
        <?php endif; ?>

        <a href="<?php echo $this->_tpl_vars['rlBaseC']; ?>
" class="button_bar"><span class="left"></span><span class="center_list"><?php echo $this->_tpl_vars['lang']['rbl_reports_list']; ?>
</span><span class="right"></span></a>
    <?php else: ?>
        <a href="<?php echo $this->_tpl_vars['rlBaseC']; ?>
page=reportPoints" class="button_bar"><span class="left"></span><span class="center_list"><?php echo $this->_tpl_vars['lang']['rbl_report_points']; ?>
</span><span class="right"></span></a>
    <?php endif; ?>
</div>

<div id="action_block">
    <div id="add_report_point" class="hide">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_start.tpl') : smarty_modifier_cat($_tmp, 'm_block_start.tpl')), 'smarty_include_vars' => array('block_caption' => $this->_tpl_vars['lang']['rbl_add_points'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <form id="add-report-points" action="" method="post" onsubmit="return false;">
            <table class="form">
                <tr>
                    <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['rbl_point_name']; ?>
</td>
                    <td class="field">
                        <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                            <ul class="tabs">
                                <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
                                    <li lang="<?php echo $this->_tpl_vars['language']['Code']; ?>
" <?php if (($this->_foreach['langF']['iteration'] <= 1)): ?>class="active"<?php endif; ?>><?php echo $this->_tpl_vars['language']['name']; ?>
</li>
                                <?php endforeach; endif; unset($_from); ?>
                            </ul>
                        <?php endif; ?>

                        <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
                            <?php if (count($this->_tpl_vars['allLangs']) > 1): ?><div class="tab_area<?php if (! ($this->_foreach['langF']['iteration'] <= 1)): ?> hide<?php endif; ?> <?php echo $this->_tpl_vars['language']['Code']; ?>
"><?php endif; ?>

                            <input data-required="true" type="text" name="<?php echo $this->_tpl_vars['language']['Code']; ?>
" value="<?php echo $this->_tpl_vars['sPost']['name'][$this->_tpl_vars['language']['Code']]; ?>
" maxlength="350" />

                            <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                                <span class="field_description_noicon"><?php echo $this->_tpl_vars['lang']['name']; ?>
 (<b><?php echo $this->_tpl_vars['language']['name']; ?>
</b>)</span>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>
                    </td>
                </tr>

                <tr>
                    <td class="name" style="width: 170px">
                        <span class="red">*</span>
                        <?php echo $this->_tpl_vars['lang']['rbl_reports_make_inactive_after']; ?>

                    </td>
                    <td class="field">
                        <input style="width: 40px;"  class="numeric" type="text" id="reports_count_to_critical" name="reports_count_to_critical" data-required="true" data-required-rule=">0">
                        <span class="settings_desc"><?php echo $this->_tpl_vars['lang']['rbl_reports']; ?>
</span>
                    </td>
                </tr>

                <tr>
                    <td class="name"><?php echo $this->_tpl_vars['lang']['status']; ?>
</td>
                    <td class="field">
                        <select name="status" id="point-status" class="login_input_select">
                            <option value="active" <?php if ($this->_tpl_vars['sPost']['status'] == 'active'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['active']; ?>
</option>
                            <option value="approval" <?php if ($this->_tpl_vars['sPost']['status'] == 'approval'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['approval']; ?>
</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td id="submit_area" class="field">
                        <a class="cancel" href="javascript:void(0)" onclick="show('add_report_point')"><?php echo $this->_tpl_vars['lang']['cancel']; ?>
</a>
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
    <div id="filter_reports" class="hide">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_start.tpl') : smarty_modifier_cat($_tmp, 'm_block_start.tpl')), 'smarty_include_vars' => array('block_caption' => $this->_tpl_vars['lang']['rbl_filter_reports'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <table>
            <tbody>
                    <tr>
                        <td valign="top">
                            <table class="form">
                                <tr>
                                    <td class="name"><?php echo $this->_tpl_vars['lang']['rbl_report_point']; ?>
</td>
                                    <td>
                                        <select id="point" name="point">
                                            <option value="0">-<?php echo $this->_tpl_vars['lang']['all']; ?>
-</option>
                                            <?php $_from = $this->_tpl_vars['report_points']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                                                <option value="<?php echo $this->_tpl_vars['item']['Key']; ?>
"><?php echo $this->_tpl_vars['item']['Value']; ?>
</option>
                                            <?php endforeach; endif; unset($_from); ?>
                                            <option value="custom"><?php echo $this->_tpl_vars['lang']['rbl_other']; ?>
</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="name w130"><?php echo $this->_tpl_vars['lang']['rbl_report_date']; ?>
</td>
                                    <td class="field" style="white-space: nowrap;">
                                        <input style="width: 65px;" type="text" value="<?php echo $_POST['date_from']; ?>
" size="12" maxlength="10" id="date_from" />
                                        <img class="divider" alt="" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" />
                                        <input style="width: 65px;" type="text" value="<?php echo $_POST['date_to']; ?>
" size="12" maxlength="10" id="date_to"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="field nowrap">
                                        <input type="button" class="button" value="<?php echo $this->_tpl_vars['lang']['filter']; ?>
" id="filter_button" />
                                        <input type="button" class="button" value="<?php echo $this->_tpl_vars['lang']['reset']; ?>
" id="reset_filter_button" />
                                        <a class="cancel" href="javascript:void(0)"><?php echo $this->_tpl_vars['lang']['cancel']; ?>
</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
            </tbody>
        </table>

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_end.tpl') : smarty_modifier_cat($_tmp, 'm_block_end.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
    <div id="delete_block" class="hide">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_start.tpl') : smarty_modifier_cat($_tmp, 'm_block_start.tpl')), 'smarty_include_vars' => array('block_caption' => $this->_tpl_vars['lang']['rbl_remove_block'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <div style="margin: 0 0 15px" class="delete-block-info">
            <?php echo $this->_tpl_vars['lang']['rbl_label_has_reports']; ?>

        </div>
        <?php echo $this->_tpl_vars['lang']['rbl_remove_bellow']; ?>

        <div style="margin: 5px 10px;" class="actions">
            <div style="padding: 2px 0;">
                <label>
                    <input class="remove_by" type="radio" id="remove-all" name="del_method">
                    <?php echo $this->_tpl_vars['lang']['rbl_remove_label_with_reports']; ?>

                </label>
            </div>
            <div style="padding: 2px 0;">
                <label>
                    <input class="remove_by" type="radio" id="to-another-label" name="del_method">
                    <?php echo $this->_tpl_vars['lang']['rbl_assign_label_reports']; ?>

                </label>
            </div>
        </div>

        <div id="all-labels" class="hide">
            <table class="form">
                <tbody>
                    <tr>
                        <td class="name">Please choose label</td>
                        <td class="field">
                            <select id="assigning-to">
                                <?php $_from = $this->_tpl_vars['rbl_points']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['point']):
?>
                                    <option value="<?php echo $this->_tpl_vars['point']['Key']; ?>
"><?php echo $this->_tpl_vars['point']['Value']; ?>
</option>
                                <?php endforeach; endif; unset($_from); ?>
                                <option value="custom"><?php echo $this->_tpl_vars['lang']['rbl_other']; ?>
</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id="top_buttons">
            <input id="delete-finally-btn" disabled="disabled" class="simple" type="button" value="<?php echo $this->_tpl_vars['lang']['go']; ?>
">
            <a class="cancel" href="javascript:void(0)"><?php echo $this->_tpl_vars['lang']['cancel']; ?>
</a>
        </div>

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_end.tpl') : smarty_modifier_cat($_tmp, 'm_block_end.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
</div>
<!-- Navigation bar end-->

<?php if (! $_GET['page']): ?>
    <div id="grid"></div>
    <script type="text/javascript">//<![CDATA[
        var reportGrid;
        
        <?php echo '
        $(document).ready(function(){
            var reportBrokenListing = new ReportBrokenListings();

            
            window.reportBrokenListing = reportBrokenListing;

            reportGrid = new gridObj({
                key: \'reportBroken\',
                id: \'grid\',
                ajaxUrl: rlPlugins + \'reportBrokenListing/admin/reportBrokenListing.inc.php?q=ext\',
                fieldID: \'Listing_ID\',
                title: lang[\'ext_manager\'],
                fields: [
                    {name: \'ID\', mapping: \'ID\', type: \'int\'},
                    {name: \'Listing_ID\', mapping: \'Listing_ID\', type: \'int\'},
                    {name: \'Listing_title\', mapping: \'Listing_title\', type: \'string\'},
                    {name: \'Reports_count\', mapping: \'Reports_count\', type: \'int\'},
                    {name: \'Criticality\', mapping: \'Criticality\', type: \'int\'},
                    {name: \'Status\', mapping: \'Status\', type: \'string\'}
                ],
                columns: [{
                    header: lang[\'ext_listing_id\'],
                    id: \'rlExt_black_bold\',
                    dataIndex: \'Listing_ID\',
                    width: 70,
                    fixed: true
                },{
                    header: rblLang[\'rbl_listing_title\'],
                    dataIndex: \'Listing_title\',
                    renderer: function(value, param1, row){
                        var out = \'\';

                        out  = \'<a href="\' + rlUrlHome + \'index.php?controller=listings&action=view&id=\';
                        out += row.data.Listing_ID + \'" target="_blank">\' + value + \'</a> \';

                        return out;
                    }
                },{
                    header: rblLang[\'rbl_reports_count\'],
                    dataIndex: \'Reports_count\',
                    width: 100,
                    fixed: true,
                    renderer: function(value, obj, row) {
                        return \'<center>\' + value + \'</center>\';
                    }
                },{
                    header: rblLang[\'rbl_listing_criticality\'],
                    dataIndex: \'Criticality\',
                    width: 100,
                    fixed: true,
                    renderer: function(value, param1, row){
                        param1.style = \'\';
                        var href_attr = {
                            text: value + \'%\',
                            style: \'width:100%;height:100%; display: block; text-decoration:none\'
                        };

                        if (value > 30 && value < 80) {
                            param1.style += \'background: #ffe7ad;\';
                        } else if (value >= 80) {
                            param1.style += \'background: #fbc4c4;\';
                        }

                        var a_elem = $(\'<a/>\', href_attr);
                        var $critical_box = $(\'<div />\', {
                            class: \'critical_cell\',
                            style: \'text-align: center\'
                        }).append(a_elem);

                        return $critical_box.prop(\'outerHTML\');
                    }
                },{
                    header: rblLang[\'rbl_listing_status\'],
                    dataIndex: \'Status\',
                    width: 100,
                    fixed: true,
                    editor: new Ext.form.ComboBox({
                        store: [
                            [\'active\', lang[\'ext_active\']],
                            [\'approval\', lang[\'ext_approval\']]
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
                    dataIndex: \'ID\',
                    width: 100,
                    fixed: true,
                    renderer: function(id, cell, row) {
                        var out = "<center>";

                        out += "<a href=\'" + rlUrlHome + "index.php?controller=" + controller + "&page=reportDetail&id=" + row.data.Listing_ID + "\'><img class=\'view\' ext:qtip=\'" + lang[\'ext_view\'] + "\' src=\'" + rlUrlHome + "img/blank.gif\' /></a>";
                        out += "<img class=\'remove\' ext:qtip=\'" + rblLang[\'rbl_remove_all_reports\'] + "\' src=\'" + rlUrlHome + "img/blank.gif\' onClick=\'rlConfirm( \\"" + lang[\'ext_notice_\' + delete_mod] + "\\",  \\"reportBrokenListing.removeAllListingReports\\", \\"" + row.data.Listing_ID + "\\")\' /></center>";

                        out += "</center>";

                        return out;
                    }
                }
                ]
            });

            reportGrid.init();
            reportBrokenListing.setActiveGrid(reportGrid);
            
            grid.push(reportGrid.grid);
        });
        '; ?>

        //]]>
    </script>
<?php else: ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['rblConfigs']['a_pages'])) ? $this->_run_mod_handler('cat', true, $_tmp, $_GET['page']) : smarty_modifier_cat($_tmp, $_GET['page'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '.tpl') : smarty_modifier_cat($_tmp, '.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<script>
    var rblLang = new Array();
    rblLang['rbl_edit'] = '<?php echo $this->_tpl_vars['lang']['rbl_edit']; ?>
';
    rblLang['rbl_add'] = '<?php echo $this->_tpl_vars['lang']['rbl_add']; ?>
';
    rblLang['status'] = '<?php echo $this->_tpl_vars['lang']['status']; ?>
';
    rblLang['rbl_points_to_inactive'] = '<?php echo $this->_tpl_vars['lang']['rbl_points_to_inactive']; ?>
';
    rblLang['rbl_reports_count'] = '<?php echo $this->_tpl_vars['lang']['rbl_reports_count']; ?>
';
    rblLang['rbl_criticality'] = '<?php echo $this->_tpl_vars['lang']['rbl_criticality']; ?>
';
    rblLang['rbl_listing_criticality'] = '<?php echo $this->_tpl_vars['lang']['rbl_listing_criticality']; ?>
';
    rblLang['rbl_listing_status'] = '<?php echo $this->_tpl_vars['lang']['rbl_listing_status']; ?>
';
    rblLang['rbl_report_message'] = '<?php echo $this->_tpl_vars['lang']['rbl_report_message']; ?>
';
    rblLang['rbl_fill_all'] = '<?php echo $this->_tpl_vars['lang']['rbl_fill_all']; ?>
';
    rblLang['rbl_report_date'] = '<?php echo $this->_tpl_vars['lang']['rbl_report_date']; ?>
';
    rblLang['rbl_other'] = '<?php echo $this->_tpl_vars['lang']['rbl_other']; ?>
';
    rblLang['rbl_listing_title'] = '<?php echo $this->_tpl_vars['lang']['rbl_listing_title']; ?>
';
    rblLang['rbl_label'] = '<?php echo $this->_tpl_vars['lang']['rbl_label']; ?>
';
    rblLang['rbl_criticality_low'] = '<?php echo $this->_tpl_vars['lang']['rbl_criticality_low']; ?>
';
    rblLang['rbl_criticality_medium'] = '<?php echo $this->_tpl_vars['lang']['rbl_criticality_medium']; ?>
';
    rblLang['rbl_criticality_high'] = '<?php echo $this->_tpl_vars['lang']['rbl_criticality_high']; ?>
';
    rblLang['rbl_ip'] = '<?php echo $this->_tpl_vars['lang']['rbl_ip']; ?>
';
    rblLang['rbl_report_message'] = '<?php echo $this->_tpl_vars['lang']['rbl_report_message']; ?>
';
    rblLang['rbl_remove_all_reports'] = '<?php echo $this->_tpl_vars['lang']['rbl_remove_all_reports']; ?>
';
</script>