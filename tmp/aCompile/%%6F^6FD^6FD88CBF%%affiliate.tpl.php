<?php /* Smarty version 2.6.31, created on 2023-10-31 15:06:16
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/plugins/affiliate/admin/affiliate.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/affiliate/admin/affiliate.tpl', 46, false),array('modifier', 'count', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/affiliate/admin/affiliate.tpl', 57, false),array('modifier', 'date_format', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/affiliate/admin/affiliate.tpl', 266, false),)), $this); ?>
<!-- affiliate tpl -->

<style><?php echo '
div.payout-table  > div > span:first-child {
    display: inline-block;
    width: 135px;
}
.x-window-mc {
    font-size: 13px!important;
}
'; ?>
</style>

<!-- navigation bar -->
<div id="nav_bar">
    <?php if ($_GET['mode'] == 'banners' && ! $_GET['action']): ?>
        <a href="<?php echo $this->_tpl_vars['rlBaseC']; ?>
mode=banners&action=add" class="button_bar"><span class="left"></span><span class="center_add"><?php echo $this->_tpl_vars['lang']['aff_add_banner_button']; ?>
</span><span class="right"></span></a>
    <?php endif; ?>

    <?php if (! $_GET['mode'] || ( $_GET['mode'] == 'payouts' && ! $_GET['action'] )): ?>
        <a href="javascript:void(0)" onclick="show('filters', '#action_blocks div');" class="button_bar"><span class="left"></span><span class="center_search"><?php echo $this->_tpl_vars['lang']['filters']; ?>
</span><span class="right"></span></a>
    <?php endif; ?>

    <?php if (! $_GET['action']): ?>
        <?php if ($_GET['mode']): ?>
            <a href="<?php echo $this->_tpl_vars['rlBase']; ?>
index.php?controller=<?php echo $_GET['controller']; ?>
" class="button_bar"><span class="left"></span><span class="center_list"><?php echo $this->_tpl_vars['lang']['aff_events_button']; ?>
</span><span class="right"></span></a>
        <?php endif; ?>
    <?php endif; ?>

    <?php if (( ! $_GET['action'] && $_GET['mode'] != 'banners' ) || ( $_GET['action'] && $_GET['mode'] == 'banners' )): ?>
        <a href="<?php echo $this->_tpl_vars['rlBaseC']; ?>
mode=banners" class="button_bar"><span class="left"></span><span class="center_list"><?php echo $this->_tpl_vars['lang']['aff_banners_button']; ?>
</span><span class="right"></span></a>
    <?php endif; ?>

    <?php if (( ! $_GET['action'] && $_GET['mode'] != 'payouts' ) || ( $_GET['action'] && $_GET['mode'] == 'payouts' )): ?>
        <a href="<?php echo $this->_tpl_vars['rlBaseC']; ?>
mode=payouts" class="button_bar"><span class="left"></span><span class="center_list"><?php echo $this->_tpl_vars['lang']['aff_payouts_button']; ?>
</span><span class="right"></span></a>
    <?php endif; ?>

    <a target="_blank" href="<?php echo $this->_tpl_vars['rlBase']; ?>
index.php?controller=accounts&account_type=affiliate" class="button_bar"><span class="left"></span><span class="center_list"><?php echo $this->_tpl_vars['lang']['aff_affiliates_button']; ?>
</span><span class="right"></span></a>
</div>
<!-- navigation bar end -->

<?php if ($_GET['mode'] == 'banners'): ?>
    <?php if ($_GET['action']): ?>
        <?php $this->assign('sPost', $_POST); ?>

        <!-- add new/edit banner -->
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_start.tpl') : smarty_modifier_cat($_tmp, 'm_block_start.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

        <form action="<?php echo $this->_tpl_vars['rlBaseC']; ?>
mode=banners&action=<?php if ($_GET['action'] == 'add'): ?>add<?php elseif ($_GET['action'] == 'edit'): ?>edit&id=<?php echo $_GET['id']; ?>
<?php endif; ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="submit" value="1" />
            <?php if ($_GET['action'] == 'edit'): ?>
                <input type="hidden" name="fromPost" value="1" />
            <?php endif; ?>
            <table class="form">
            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['aff_banner_name']; ?>
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
                        <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                            <div class="tab_area<?php if (! ($this->_foreach['langF']['iteration'] <= 1)): ?> hide<?php endif; ?> <?php echo $this->_tpl_vars['language']['Code']; ?>
">
                        <?php endif; ?>

                        <input type="text" name="name[<?php echo $this->_tpl_vars['language']['Code']; ?>
]" value="<?php echo $this->_tpl_vars['sPost']['name'][$this->_tpl_vars['language']['Code']]; ?>
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
                <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['aff_banner_size']; ?>
</td>
                <td class="field">
                    <fieldset class="light">
                        <legend id="legend_banner_size" class="up" onclick="fieldset_action('banner_size');"><?php echo $this->_tpl_vars['lang']['aff_banner_size']; ?>
</legend>
                        <div id="banner_size">
                            <table class="form">
                            <tr>
                                <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['aff_banner_width']; ?>
</td>
                                <td class="field">
                                    <input class="numeric w60" type="text" name="width" value="<?php echo $this->_tpl_vars['sPost']['width']; ?>
" maxlength="350" /> <?php echo $this->_tpl_vars['lang']['aff_banner_size_px']; ?>

                                </td>
                            </tr>
                            <tr>
                                <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['aff_banner_height']; ?>
</td>
                                <td class="field">
                                    <input class="numeric w60" type="text" name="height" value="<?php echo $this->_tpl_vars['sPost']['height']; ?>
" maxlength="350" /> <?php echo $this->_tpl_vars['lang']['aff_banner_size_px']; ?>

                                </td>
                            </tr>
                            </table>
                        </div>
                    </fieldset>
                </td>
            </tr>

            <tr>
                <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['aff_banner_image']; ?>
</td>
                <td class="field">
                    <input type="hidden" name="removed_banner" value="<?php if ($this->_tpl_vars['sPost']['removed_banner']): ?><?php echo $this->_tpl_vars['sPost']['removed_banner']; ?>
<?php endif; ?>" />

                    <?php if ($_GET['action'] == 'edit' && $this->_tpl_vars['sPost']['image']): ?>
                        <img style="width:auto" class="thumbnail" alt="" src="<?php echo (defined('RL_FILES_URL') ? @RL_FILES_URL : null); ?>
aff_images/<?php echo $this->_tpl_vars['sPost']['image']; ?>
">
                        <a class="remove-banner" style="padding:5px 0 5px;display:block;font-weight:600;max-width:300px;" href="javascript:void(0)"><?php echo $this->_tpl_vars['lang']['aff_update_banner_image']; ?>
</a>
                    <?php endif; ?>

                    <div class="<?php if ($_GET['action'] == 'edit' && $this->_tpl_vars['sPost']['image']): ?>hide<?php endif; ?>"><input type="file" name="image" value="" /> <span class="field_description">(<?php echo $this->_tpl_vars['lang']['aff_banner_image_desc']; ?>
)</span></div>
                </td>
            </tr>

            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['status']; ?>
</td>
                <td class="field">
                    <select name="status">
                        <option value="active" <?php if ($this->_tpl_vars['sPost']['status'] == 'active'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['active']; ?>
</option>
                        <option value="approval" <?php if ($this->_tpl_vars['sPost']['status'] == 'approval'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['approval']; ?>
</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td></td>
                <td class="field">
                    <input type="submit" value="<?php if ($_GET['action'] == 'edit'): ?><?php echo $this->_tpl_vars['lang']['edit']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['add']; ?>
<?php endif; ?>" />
                </td>
            </tr>
            </table>
        </form>

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_end.tpl') : smarty_modifier_cat($_tmp, 'm_block_end.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <!-- add new block end -->

        <script><?php echo '
        $(document).ready(function(){
            $(\'.remove-banner\').click(function(){
                $(this).prev().hide();
                $(this).hide();
                $(this).next().fadeIn();
                $(\'[name="removed_banner"]\').val(\'1\');
            });
        });
        '; ?>
</script>
    <?php else: ?>
        <!-- grid -->
        <div id="grid"></div>
        <script>
        var affiliateBannersGrid;

        <?php echo '
        $(document).ready(function(){
            affiliateBannersGrid = new gridObj({
                key: \'affiliate_banners\',
                id: \'grid\',
                ajaxUrl: rlPlugins + \'affiliate/admin/affiliate.inc.php?q=ext&mode=banners\',
                defaultSortField: \'ID\',
                title: lang[\'aff_banners_ext_caption\'],
                remoteSortable: false,
                // checkbox: true,
                fields: [
                    {name: \'ID\', mapping: \'ID\'},
                    {name: \'Name\', mapping: \'Name\', type: \'string\'},
                    {name: \'Size\', mapping: \'Size\', type: \'string\'},
                    {name: \'Clicks\', mapping: \'Clicks\', type: \'int\'},
                    {name: \'Status\', mapping: \'Status\', type: \'string\'}
                ],
                columns: [
                    {
                        header: lang[\'ext_id\'],
                        dataIndex: \'ID\',
                        width: 30,
                        fixed: true
                    },{
                        header: lang[\'aff_banner_name_ext\'],
                        dataIndex: \'Name\',
                        width: 300,
                        fixed: true
                    },{
                        header: lang[\'aff_banner_size_ext\'],
                        dataIndex: \'Size\',
                    },{
                        header: lang[\'aff_banner_clicks_ext\'],
                        dataIndex: \'Clicks\',
                        width: 100,
                        fixed: true
                    },{
                        header: lang[\'ext_status\'],
                        dataIndex: \'Status\',
                        width: 100,
                        fixed: true,
                        editor: new Ext.form.ComboBox({
                            store: [
                                [\'active\', lang[\'ext_active\']],
                                [\'approval\', lang[\'ext_approval\']]
                            ],
                            mode: \'local\',
                            typeAhead: true,
                            triggerAction: \'all\',
                            selectOnFocus: true
                        })
                    },{
                        header: lang[\'ext_actions\'],
                        width: 100,
                        fixed: true,
                        dataIndex: \'ID\',
                        sortable: false,
                        renderer: function(data) {
                            var out = "<center>";
                            out += "<a href=\'" + rlUrlHome + "index.php?controller=" + controller;
                            out += "&mode=banners&action=edit&id=" + data + "\'><img class=\'edit\' ext:qtip=\'";
                            out += lang[\'ext_edit\'] + "\' src=\'" + rlUrlHome + "img/blank.gif\' /></a>";
                            out += "<img class=\'remove\' ext:qtip=\'" + lang[\'ext_delete\'] + "\' src=\'" + rlUrlHome;
                            out += "img/blank.gif\' onClick=\'rlConfirm( \\"" + lang[\'ext_notice_\' + delete_mod];
                            out += "\\", \\"apAjaxRequest\\", \\"" + Array(data) + "\\" )\' />";
                            out += "</center>";

                            return out;
                        }
                    }
                ]
            });

            affiliateBannersGrid.init();
            grid.push(affiliateBannersGrid.grid);
        });

        var apAjaxRequest = function(data) {
            if (data) {
                $.post(
                    rlConfig[\'ajax_url\'],
                    {item: \'ajaxDeleteAffiliateBanner\', id: data},
                    function(response){
                        if (response && response.status && response.message) {
                            if (response.status == \'OK\') {
                                printMessage(\'notice\', response.message);
                                affiliateBannersGrid.reload();
                            } else {
                                printMessage(\'error\', response.message);
                            }
                        }
                    },
                    \'json\'
                );
            }
        }
        '; ?>
</script>
        <!-- grid end -->
    <?php endif; ?>
<?php elseif ($_GET['mode'] == 'payouts'): ?>
    <?php if ($_GET['action']): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_start.tpl') : smarty_modifier_cat($_tmp, 'm_block_start.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

        <div class="listing_details">
            <table class="sTable">
                <tr>
                    <td class="sidebar" style="width: 210px">
                        <ul class="statistics" style="padding-top:0">
                            <li><span class="name"><?php echo $this->_tpl_vars['lang']['aff_affiliate_filter']; ?>
:</span> <?php echo $this->_tpl_vars['payout']['Aff_Full_name']; ?>
</li>
                            <li><span class="name"><?php echo $this->_tpl_vars['lang']['aff_payout_date']; ?>
:</span> <?php echo ((is_array($_tmp=$this->_tpl_vars['payout']['Date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)) : smarty_modifier_date_format($_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null))); ?>
</li>
                            <li><span class="name"><?php echo $this->_tpl_vars['lang']['aff_payout_count']; ?>
:</span> <?php echo $this->_tpl_vars['payout']['Count_deals']; ?>
</li>
                            <li><span class="name"><?php echo $this->_tpl_vars['lang']['aff_payout_amount']; ?>
:</span> <?php echo $this->_tpl_vars['payout']['Amount']; ?>
</li>
                        </ul>
                    </td>
                    <td valign="top">
                        <?php $_from = $this->_tpl_vars['payout']['Deals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['payoutDeals'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['payoutDeals']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['Item_ID'] => $this->_tpl_vars['deal']):
        $this->_foreach['payoutDeals']['iteration']++;
?>
                            <fieldset class="light">
                                <legend id="legend_deal_<?php echo $this->_tpl_vars['Item_ID']; ?>
" class="up" onclick="fieldset_action('deal_<?php echo $this->_tpl_vars['Item_ID']; ?>
');"><?php echo $this->_tpl_vars['lang']['aff_details_item_admin_item']; ?>
 #<?php echo $this->_foreach['payoutDeals']['iteration']; ?>
</legend>
                                <div id="deal_<?php echo $this->_tpl_vars['Item_ID']; ?>
" class="tree">
                                    <table class="list">
                                        <tr>
                                            <td class="name"><?php echo $this->_tpl_vars['lang']['aff_details_item_admin_item']; ?>
:</td>
                                            <td class="value"><?php echo $this->_tpl_vars['deal']['Item']; ?>
</td>
                                        </tr>

                                        <?php if ($this->_tpl_vars['deal']['Type'] == 'listing'): ?>
                                            <tr>
                                                <td class="name"><?php echo $this->_tpl_vars['lang']['aff_details_item_admin_plan']; ?>
:</td>
                                                <td class="value"><?php echo $this->_tpl_vars['deal']['Plan']; ?>
</td>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <td class="name"><?php echo $this->_tpl_vars['lang']['aff_commissions_date']; ?>
:</td>
                                            <td class="value"><?php if ($this->_tpl_vars['deal']['Posted']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['deal']['Posted'])) ? $this->_run_mod_handler('date_format', true, $_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)) : smarty_modifier_date_format($_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null))); ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['not_available']; ?>
<?php endif; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="name"><?php echo $this->_tpl_vars['lang']['aff_details_item_admin_commission']; ?>
:</td>
                                            <td class="value"><?php echo $this->_tpl_vars['deal']['Commission']; ?>
</td>
                                        </tr>
                                    </table>
                                </div>
                            </fieldset>
                        <?php endforeach; endif; unset($_from); ?>
                    </td>
                </tr>
            </table>
        </div>

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_end.tpl') : smarty_modifier_cat($_tmp, 'm_block_end.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php else: ?>
        <div id="action_blocks">
            <!-- filters -->
            <div id="filters" class="hide">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_start.tpl') : smarty_modifier_cat($_tmp, 'm_block_start.tpl')), 'smarty_include_vars' => array('block_caption' => $this->_tpl_vars['lang']['filter_by'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                <table>
                <tr>
                    <td valign="top">
                        <table class="form">
                        <tr>
                            <td class="name w130"><?php echo $this->_tpl_vars['lang']['aff_affiliate_filter']; ?>
</td>
                            <td class="field"><input class="filters" type="text" maxlength="255" id="Affiliate" /></td>
                        </tr>
                        <tr>
                            <td class="name w130"><?php echo $this->_tpl_vars['lang']['aff_payout_date']; ?>
</td>
                            <td class="field" style="white-space: nowrap;">
                                <input class="filters" style="width: 65px;" type="text" value="" size="12" maxlength="10" id="date_from" />
                                <img class="divider" alt="" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" />
                                <input class="filters" style="width: 65px;" type="text" value="" size="12" maxlength="10" id="date_to"/>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="field nowrap">
                                <input type="button" class="button" value="<?php echo $this->_tpl_vars['lang']['filter']; ?>
" id="filter_button" />
                                <input type="button" class="button" value="<?php echo $this->_tpl_vars['lang']['reset']; ?>
" id="reset_filter_button" />
                                <a class="cancel" href="javascript:void(0)" onclick="show('filters')"><?php echo $this->_tpl_vars['lang']['cancel']; ?>
</a>
                            </td>
                        </tr>
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

            <script><?php echo '
            var filters = new Array();

            $(document).ready(function(){
                $(\'#date_from\').datepicker({showOn: \'both\', buttonImage: \''; ?>
<?php echo $this->_tpl_vars['rlTplBase']; ?>
<?php echo 'img/blank.gif\', buttonText: \''; ?>
<?php echo $this->_tpl_vars['lang']['dp_choose_date']; ?>
<?php echo '\', buttonImageOnly: true, dateFormat: \'yy-mm-dd\'}).datepicker($.datepicker.regional[\''; ?>
<?php echo (defined('RL_LANG_CODE') ? @RL_LANG_CODE : null); ?>
<?php echo '\']);
                $(\'#date_to\').datepicker({showOn: \'both\', buttonImage: \''; ?>
<?php echo $this->_tpl_vars['rlTplBase']; ?>
<?php echo 'img/blank.gif\', buttonText: \''; ?>
<?php echo $this->_tpl_vars['lang']['dp_choose_date']; ?>
<?php echo '\', buttonImageOnly: true, dateFormat: \'yy-mm-dd\'}).datepicker($.datepicker.regional[\''; ?>
<?php echo (defined('RL_LANG_CODE') ? @RL_LANG_CODE : null); ?>
<?php echo '\']);

                $(\'#filter_button\').click(function(){
                    filters = new Array();
                    write_filters = new Array();

                    $(\'.filters\').each(function(){
                        if ($(this).attr(\'value\') != 0) {
                            filters.push(new Array($(this).attr(\'id\'), $(this).attr(\'value\')));
                            write_filters.push($(this).attr(\'id\') + \'||\' + $(this).attr(\'value\'));
                        }
                    });

                    /* reload grid */
                    affiliatePayoutsGrid.filters = filters;
                    affiliatePayoutsGrid.reload();
                });

                /* reset filters */
                $(\'#reset_filter_button\').click(function(){
                    affiliatePayoutsGrid.reset();
                    $("#filters input[type=text]").val(\'\');
                });

                /* autocomplete js */
                $(\'#Affiliate\').rlAutoComplete({type: \'affiliate\'});
            });
            '; ?>
</script>
            <!-- filters end -->
        </div>

        <!-- grid -->
        <div id="grid"></div>
        <script>//<![CDATA[
        var affiliatePayoutsGrid;

        <?php echo '
        $(document).ready(function(){
            affiliatePayoutsGrid = new gridObj({
                key: \'affiliate_payouts\',
                id: \'grid\',
                ajaxUrl: rlPlugins + \'affiliate/admin/affiliate.inc.php?q=ext&mode=payouts\',
                defaultSortField: \'ID\',
                title: lang[\'aff_payouts_ext_caption\'],
                remoteSortable: false,
                // checkbox: true,
                fields: [
                    {name: \'ID\', mapping: \'ID\'},
                    {name: \'Affiliate\', mapping: \'Affiliate\', type: \'string\'},
                    {name: \'Date\', mapping: \'Date\', dateFormat: \'Y-m-d H:i:s\'},
                    {name: \'Count_deals\', mapping: \'Count_deals\', type: \'int\'},
                    {name: \'Amount\', mapping: \'Amount\', type: \'string\'}
                ],
                columns: [
                    {
                        header: lang[\'ext_id\'],
                        dataIndex: \'ID\',
                        width: 30,
                        fixed: true
                    },{
                        header: lang[\'aff_affiliate_ext\'],
                        dataIndex: \'Affiliate\'
                    },{
                        header: lang[\'aff_payment_date_ext_caption\'],
                        dataIndex: \'Date\',
                        width: 200,
                        fixed: true,
                        renderer: function(val){
                            return val ? Ext.util.Format.dateRenderer(rlDateFormat.replace(/%/g, \'\').replace(\'b\', \'M\'))(val) : \'\';
                        }
                    },{
                        header: lang[\'aff_count_deals_ext_caption\'],
                        dataIndex: \'Count_deals\',
                        width: 200,
                        fixed: true
                    },{
                        header: lang[\'aff_amount_ext_caption\'],
                        dataIndex: \'Amount\',
                        width: 200,
                        fixed: true
                    },{
                        header: lang[\'ext_actions\'],
                        width: 80,
                        fixed: true,
                        dataIndex: \'ID\',
                        sortable: false,
                        renderer: function(data) {
                            var out = "<center>";
                            out += "<a href=\'" + rlUrlHome + "index.php?controller=" + controller + "&mode=payouts&action=view&id=" + data + "\'><img class=\'view\' ext:qtip=\'" + lang[\'ext_view\'] + "\' src=\'" + rlUrlHome + "img/blank.gif\' /></a>";
                            out += "</center>";

                            return out;
                        }
                    }
                ]
            });

            affiliatePayoutsGrid.init();
            grid.push(affiliatePayoutsGrid.grid);
        });
        '; ?>

        //]]>
        </script>
        <!-- grid end -->
    <?php endif; ?>
<?php else: ?>
    <div id="action_blocks">
        <!-- filters -->
        <div id="filters" class="hide">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_start.tpl') : smarty_modifier_cat($_tmp, 'm_block_start.tpl')), 'smarty_include_vars' => array('block_caption' => $this->_tpl_vars['lang']['filter_by'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

            <table>
            <tr>
                <td valign="top">
                    <table class="form">
                    <tr>
                        <td class="name w130"><?php echo $this->_tpl_vars['lang']['aff_affiliate_filter']; ?>
</td>
                        <td class="field"><input class="filters" type="text" maxlength="255" id="Affiliate" /></td>
                    </tr>
                    <tr>
                        <td class="name w130"><?php echo $this->_tpl_vars['lang']['aff_referral_filter']; ?>
</td>
                        <td class="field"><input class="filters" type="text" maxlength="255" id="Referral" /></td>
                    </tr>
                    <tr>
                        <td class="name w130"><?php echo $this->_tpl_vars['lang']['date']; ?>
</td>
                        <td class="field" style="white-space: nowrap;">
                            <input class="filters" style="width: 65px;" type="text" value="" size="12" maxlength="10" id="date_from" />
                            <img class="divider" alt="" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" />
                            <input class="filters" style="width: 65px;" type="text" value="" size="12" maxlength="10" id="date_to"/>
                        </td>
                    </tr>
                    <tr>
                        <td class="name w130"><?php echo $this->_tpl_vars['lang']['aff_type_filter']; ?>
</td>
                        <td class="field">
                            <select class="filters" id="event_type">
                                <option value="" selected="selected"><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
                                <option value="visit"><?php echo $this->_tpl_vars['lang']['aff_type_visit']; ?>
</option>
                                <option value="register"><?php echo $this->_tpl_vars['lang']['aff_type_register']; ?>
</option>
                                <option value="listing"><?php echo $this->_tpl_vars['lang']['aff_type_listing']; ?>
</option>
                                <option value="membership"><?php echo $this->_tpl_vars['lang']['aff_type_membership']; ?>
</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="name w130"><?php echo $this->_tpl_vars['lang']['status']; ?>
</td>
                        <td class="field">
                            <select class="filters" id="status">
                                <option value="" selected="selected"><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
                                <option value="refused"><?php echo $this->_tpl_vars['lang']['aff_status_refused']; ?>
</option>
                                <option value="pending"><?php echo $this->_tpl_vars['lang']['aff_status_pending']; ?>
</option>
                                <option value="ready"><?php echo $this->_tpl_vars['lang']['aff_status_ready']; ?>
</option>
                                <option value="deposited"><?php echo $this->_tpl_vars['lang']['aff_status_deposited']; ?>
</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="field nowrap">
                            <input type="button" class="button" value="<?php echo $this->_tpl_vars['lang']['filter']; ?>
" id="filter_button" />
                            <input type="button" class="button" value="<?php echo $this->_tpl_vars['lang']['reset']; ?>
" id="reset_filter_button" />
                            <a class="cancel" href="javascript:void(0)" onclick="show('filters')"><?php echo $this->_tpl_vars['lang']['cancel']; ?>
</a>
                        </td>
                    </tr>
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

        <script><?php echo '
        var filters = new Array();

        $(document).ready(function(){
            $(\'#date_from\').datepicker({showOn: \'both\', buttonImage: \''; ?>
<?php echo $this->_tpl_vars['rlTplBase']; ?>
<?php echo 'img/blank.gif\', buttonText: \''; ?>
<?php echo $this->_tpl_vars['lang']['dp_choose_date']; ?>
<?php echo '\', buttonImageOnly: true, dateFormat: \'yy-mm-dd\'}).datepicker($.datepicker.regional[\''; ?>
<?php echo (defined('RL_LANG_CODE') ? @RL_LANG_CODE : null); ?>
<?php echo '\']);
            $(\'#date_to\').datepicker({showOn: \'both\', buttonImage: \''; ?>
<?php echo $this->_tpl_vars['rlTplBase']; ?>
<?php echo 'img/blank.gif\', buttonText: \''; ?>
<?php echo $this->_tpl_vars['lang']['dp_choose_date']; ?>
<?php echo '\', buttonImageOnly: true, dateFormat: \'yy-mm-dd\'}).datepicker($.datepicker.regional[\''; ?>
<?php echo (defined('RL_LANG_CODE') ? @RL_LANG_CODE : null); ?>
<?php echo '\']);

            $(\'#filter_button\').click(function(){
                filters = new Array();
                write_filters = new Array();

                $(\'.filters\').each(function(){
                    if ($(this).val()) {
                        filters.push(new Array($(this).attr(\'id\'), $(this).val()));
                        write_filters.push($(this).attr(\'id\') + \'||\' + $(this).val());
                    }
                });

                /* reload grid */
                affiliateGrid.filters = filters;
                affiliateGrid.reload();
            });

            /* reset filters */
            $(\'#reset_filter_button\').click(function(){
                affiliateGrid.reset();

                $("#filters select option[value=\'\']").attr(\'selected\', true);
                $("#filters input[type=text]").val(\'\');
            });

            /* autocomplete js */
            $(\'#Affiliate\').rlAutoComplete({type: \'affiliate\'});
            $(\'#Referral\').rlAutoComplete();
        });
        '; ?>
</script>
        <!-- filters end -->
    </div>

    <!-- grid -->
    <div id="grid"></div>
    <script>//<![CDATA[
    var affiliateGrid;
    var mass_actions = [
        [lang['aff_mark_as_deposited_ext'], 'deposited'],
        [lang['aff_mark_as_refused_ext'], 'refused']
    ];

    <?php echo '
    $(document).ready(function(){
        affiliateGrid = new gridObj({
            key: \'affiliate\',
            id: \'grid\',
            ajaxUrl: rlPlugins + \'affiliate/admin/affiliate.inc.php?q=ext\',
            title: lang[\'aff_events_ext_caption\'],
            remoteSortable: true,
            defaultSortField: \'Date\',
            defaultSortType: \'DESC\',
            checkbox: true,
            actions: mass_actions,
            fields: [
                {name: \'ID\', mapping: \'ID\'},
                {name: \'Affiliate_ID\', mapping: \'Affiliate_ID\', type: \'int\'},
                {name: \'Affiliate\', mapping: \'Affiliate\', type: \'string\'},
                {name: \'Referral\', mapping: \'Referral\', type: \'string\'},
                {name: \'IP\', mapping: \'IP\', type: \'string\'},
                {name: \'Date\', mapping: \'Date\', type: \'date\', dateFormat: \'Y-m-d H:i:s\'},
                {name: \'Location\', mapping: \'Location\', type: \'string\'},
                {name: \'Plan\', mapping: \'Plan\', type: \'string\'},
                {name: \'Type\', mapping: \'Type\', type: \'string\'},
                {name: \'Commission\', mapping: \'Commission\', type: \'string\'},
                {name: \'Aff_status\', mapping: \'Aff_status\', type: \'string\'},
                {name: \'Aff_type\', mapping: \'Aff_type\', type: \'string\'}
            ],
            columns: [
                {
                    header: lang[\'ext_id\'],
                    dataIndex: \'ID\',
                    width: 30,
                    fixed: true
                },{
                    header: lang[\'aff_affiliate_ext\'],
                    dataIndex: \'Affiliate\',
                    width: 150,
                    fixed: true
                },{
                    header: lang[\'aff_referral_ext\'],
                    dataIndex: \'Referral\',
                    width: 150,
                    fixed: true
                },{
                    header: lang[\'aff_ip_ext\'],
                    dataIndex: \'IP\',
                    width: 150,
                    fixed: true
                },{
                    header: lang[\'aff_date_ext\'],
                    dataIndex: \'Date\',
                    width: 150,
                    fixed: true,
                    id: \'rlExt_item_bold\',
                    renderer: function(val){
                        return val ? Ext.util.Format.dateRenderer(rlDateFormat.replace(/%/g, \'\').replace(\'b\', \'M\'))(val) : \'\';
                    }
                },{
                    header: lang[\'aff_location_ext\'],
                    dataIndex: \'Location\',
                },{
                    header: lang[\'aff_plan_ext\'],
                    dataIndex: \'Plan\',
                    width: 100,
                    fixed: true
                },{
                    header: lang[\'aff_type_ext\'],
                    dataIndex: \'Type\',
                    width: 80,
                    fixed: true
                },{
                    header: lang[\'aff_commission_ext\'],
                    dataIndex: \'Commission\',
                    width: 80,
                    fixed: true
                },{
                    header: lang[\'ext_status\'],
                    dataIndex: \'Aff_status\',
                    width: 50,
                    renderer: function(val, param1){
                        if (val == \'pending\') {
                            param1.style += \'background: #ffe7ad;\';
                        } else if (val == \'ready\') {
                            param1.style += \'background: #d2e798;\';
                        } else if (val == \'refused\') {
                            param1.style += \'background: #f9cece;\';
                        } else if (val == \'deposited\') {
                            param1.style += \'background: #c0ecee;\';
                        }

                        return lang[\'aff_status_\' + val] ? lang[\'aff_status_\' + val] : val;
                    }
                }
            ]
        });

        affiliateGrid.init();
        grid.push(affiliateGrid.grid);

        // actions listener
        affiliateGrid.actionButton.addListener(\'click\', function(){
            var sel_obj           = affiliateGrid.checkboxColumn.getSelections();
            var action            = affiliateGrid.actionsDropDown.getValue();
            var affiliate_ID      = sel_obj[0][\'data\'][\'Affiliate_ID\'];
            var different_aff     = false;
            var wrong_event       = false;
            var wrong_event_error = \'\';
            var request_url       = rlConfig[\'ajax_url\'];

            if (!action || !affiliate_ID) {
                return false;
            }

            /* find logic issue\'s */
            for (var i = 0; i < sel_obj.length; i++) {
                // found another affiliate account
                if (!different_aff && affiliate_ID != sel_obj[i][\'data\'][\'Affiliate_ID\']) {
                    different_aff = true;
                    break;
                }

                // found wrong event in list
                if (!wrong_event) {
                    // wrong selected Type
                    if (sel_obj[i][\'data\'][\'Aff_type\'] == \'visit\') {
                        wrong_event = \'type\';
                        break;
                    }

                    // wrong selected Status for deposit
                    if (action == \'deposited\' && sel_obj[i][\'data\'][\'Aff_status\'] != \'ready\') {
                        wrong_event = \'status\';
                        break;
                    }

                    // wrong selected Status for refuse
                    if (action == \'refused\' && sel_obj[i][\'data\'][\'Aff_status\'] != \'ready\') {
                        wrong_event = \'status\';
                        break;
                    }
                }

                affiliateGrid.ids += sel_obj[i].id;

                if (sel_obj.length != i+1) {
                    affiliateGrid.ids += \',\';
                }
            }

            if (wrong_event) {
                // show type/status error
                if (wrong_event == \'type\') {
                    wrong_event_error = \''; ?>
<?php echo $this->_tpl_vars['lang']['aff_mass_actions_error_type']; ?>
<?php echo '\';
                } else if (wrong_event == \'status\') {
                    wrong_event_error = \''; ?>
<?php echo $this->_tpl_vars['lang']['aff_mass_actions_error_status']; ?>
<?php echo '\';
                }
                printMessage(\'error\', wrong_event_error);

                affiliateGrid.reload();
                affiliateGrid.checkboxColumn.clearSelections();
                affiliateGrid.actionsDropDown.setVisible(false);
                affiliateGrid.actionButton.setVisible(false);
                return;
            }

            if (action == \'deposited\') {
                if (!different_aff) {
                    $(\'#deposited_content\').remove();

                    var deposited_content = \'<div class="x-hidden" id="deposited_content">\';
                    deposited_content += \'<div class="x-window-header">'; ?>
<?php echo $this->_tpl_vars['lang']['aff_payout_details']; ?>
<?php echo '</div>\';
                    deposited_content += \'<div class="x-window-body" style="padding:10px 15px">\';
                    deposited_content += \'<div class="payout-table">\' + lang[\'loading\'] + \'</div>\';
                    deposited_content += \'<span id="popup_ok"></span>\';
                    deposited_content += \'</div></div>\';

                    $(\'body\').after(deposited_content);

                    var popup = new Ext.Window({
                        applyTo: \'deposited_content\',
                        layout: \'fit\',
                        width: 600,
                        height: \'auto\',
                        closeAction: \'hide\',
                        plain: true
                    });

                    popup.show();

                    $.getJSON(
                        request_url,
                        {item: \'deposited\', affiliate_ID: affiliate_ID, deals_ids: affiliateGrid.ids},
                        function(response){
                            if (response && response.aff_billing_details) {
                                var aff_info_content = \'<div><b>'; ?>
<?php echo $this->_tpl_vars['lang']['account']; ?>
<?php echo '</b></div>\';
                                aff_info_content += \'<div><span>'; ?>
<?php echo $this->_tpl_vars['lang']['username']; ?>
<?php echo ':</span> \' + response.Full_name + \'</div>\';
                                aff_info_content += \'<div><span>'; ?>
<?php echo $this->_tpl_vars['lang']['mail']; ?>
<?php echo ':</span> \' + response.Mail + \'</div>\';
                                aff_info_content += \'<div style="padding-top:15px"><b>'; ?>
<?php echo $this->_tpl_vars['lang']['aff_billing_area']; ?>
<?php echo '</b></div>\';
                                aff_info_content += \'<div><span>Payment Method:</span> \' +
                                    (response.aff_billing_details.Billing_type
                                        ? response.aff_billing_details.Billing_type
                                        : response.aff_billing_details.type) + \'</div>\';

                                if (response.aff_billing_details.type == \'paypal\') {
                                    aff_info_content += \'<div><span>'; ?>
<?php echo $this->_tpl_vars['lang']['aff_paypal_email']; ?>
<?php echo ':</span> \' + (response.aff_billing_details.paypal_email
                                            ? response.aff_billing_details.paypal_email
                                            : \''; ?>
<?php echo $this->_tpl_vars['lang']['not_available']; ?>
<?php echo '\') + \'</div>\';
                                } else if (response.aff_billing_details.type == \'western_union\') {
                                    aff_info_content += \'<div><span>'; ?>
<?php echo $this->_tpl_vars['lang']['aff_wu_country']; ?>
<?php echo ':</span> \' +
                                        (response.aff_billing_details.wu_country
                                            ? response.aff_billing_details.wu_country
                                            : \''; ?>
<?php echo $this->_tpl_vars['lang']['not_available']; ?>
<?php echo '\') + \'</div><div><span>'; ?>
<?php echo $this->_tpl_vars['lang']['aff_wu_city']; ?>
<?php echo ':</span> \' +
                                        (response.aff_billing_details.wu_city
                                            ? response.aff_billing_details.wu_city
                                            : \''; ?>
<?php echo $this->_tpl_vars['lang']['not_available']; ?>
<?php echo '\') + \'</div><div><span>'; ?>
<?php echo $this->_tpl_vars['lang']['aff_wu_fullname']; ?>
<?php echo ':</span> \' +
                                        (response.aff_billing_details.wu_fullname
                                            ? response.aff_billing_details.wu_fullname
                                            : \''; ?>
<?php echo $this->_tpl_vars['lang']['not_available']; ?>
<?php echo '\') + \'</div>\';
                                } else if (response.aff_billing_details.type == \'bank_wire\') {
                                    aff_info_content += \'<div><span>'; ?>
<?php echo $this->_tpl_vars['lang']['aff_bank_wire_details']; ?>
<?php echo ':</span> \' +
                                        (response.aff_billing_details.bank_wire_details
                                            ? response.aff_billing_details.bank_wire_details
                                            : \''; ?>
<?php echo $this->_tpl_vars['lang']['not_available']; ?>
<?php echo '\') + \'</div>\';
                                }

                                if (response.Deals) {
                                    aff_info_content += \'<table style="margin-top:15px;border-collapse:initial;border-spacing:0px 5px;" width="100%"><tr><td><b>#</b></td><td><b>'; ?>
<?php echo $this->_tpl_vars['lang']['aff_details_item_admin_item']; ?>
<?php echo '</b></td><td><b>'; ?>
<?php echo $this->_tpl_vars['lang']['aff_details_item_admin_plan']; ?>
<?php echo '</b></td><td><b>'; ?>
<?php echo $this->_tpl_vars['lang']['date']; ?>
<?php echo '</b></td><td align="right"><b>'; ?>
<?php echo $this->_tpl_vars['lang']['aff_details_item_admin_commission']; ?>
<?php echo '</b></td></tr>\';

                                    for (var i = 0; i < response.Deals.length; i++) {
                                        aff_info_content += \'<tr><td>\' + (i+1) + \'.</td>\';
                                        aff_info_content += \'<td>\' + response.Deals[i].Item + \'</td>\';
                                        aff_info_content += \'<td>\' + response.Deals[i].Plan + \'</td>\';
                                        aff_info_content += \'<td>\' + response.Deals[i].Posted + \'</td>\';
                                        aff_info_content += \'<td align="right">\' + response.Deals[i].Commission + \'</td></tr>\';
                                    };

                                    // total amount
                                    aff_info_content += \'<tr><td colspan="4"></td><td align="right"><b>\' + lang[\'aff_amount_ext_caption\'] + \'</b>: \' + response.Amount + \'</td></tr>\';

                                    // note
                                    aff_info_content += \'</table><div style="padding:15px 0">'; ?>
<?php echo $this->_tpl_vars['lang']['aff_deposite_note']; ?>
<?php echo '</div>\';
                                }

                                var deposited_button = new Ext.Button({
                                    text: lang[\'aff_mark_as_deposited_ext\'],
                                    applyTo: \'popup_ok\'
                                });

                                // add content to popup
                                $(\'#popup_ok\').prev().html(aff_info_content);

                                // send a request for deposited deals
                                deposited_button.addListener(\'click\', function(){
                                    deposited_button.setText(lang.loading);
                                    deposited_button.onDisable(true);

                                    $.getJSON(request_url, {item: \'deposited_action\', affiliate_ID: affiliate_ID, deals_ids: affiliateGrid.ids}, function(response){
                                        if (response) {
                                            popup.hide();
                                            affiliateGrid.reload();
                                            printMessage(\'notice\', \''; ?>
<?php echo $this->_tpl_vars['lang']['aff_marked_as_deposited']; ?>
<?php echo '\');
                                        }
                                    });
                                });
                            }
                        }
                    );
                } else {
                    printMessage(\'error\', \''; ?>
<?php echo $this->_tpl_vars['lang']['aff_use_one_affiliate']; ?>
<?php echo '\');
                }
            } else if (action == \'refused\') {
                $(\'#refused_content\').remove();

                var refused_content = \'<div class="x-hidden" id="refused_content">\';
                refused_content += \'<div class="x-window-header">\' + lang[\'ext_confirm\'] + \'</div>\';
                refused_content += \'<div class="x-window-body" style="padding:10px 15px">\';
                refused_content += \'<div style="padding:5px 0 15px">\' + lang[\'ext_explain_your_reason\'] + \'<textarea id="refused_reason" style="margin-top:10px"></textarea></div><span id="popup_ok"></span></div></div>\';

                $(\'body\').after(refused_content);

                var popup = new Ext.Window({
                    applyTo: \'refused_content\',
                    layout: \'fit\',
                    width: 600,
                    height: \'auto\',
                    closeAction: \'hide\',
                    plain: true
                });

                var refused_button = new Ext.Button({
                    text: \''; ?>
<?php echo $this->_tpl_vars['lang']['aff_button_refused']; ?>
<?php echo '\',
                    applyTo: \'popup_ok\'
                });

                popup.show();

                // send a request for deposited deals
                refused_button.addListener(\'click\', function(){
                    refused_button.setText(lang.loading);
                    refused_button.onDisable(true);

                    $.getJSON(
                        request_url,
                        {
                            item         : \'refused_action\',
                            affiliate_ID : affiliate_ID,
                            deals_ids    : affiliateGrid.ids,
                            reason       : $(\'#refused_reason\').val()
                        },
                        function(response){
                            if (response) {
                                popup.hide();
                                affiliateGrid.reload();
                                printMessage(\'notice\', \''; ?>
<?php echo $this->_tpl_vars['lang']['aff_marked_as_refused']; ?>
<?php echo '\');
                            }
                        }
                    );
                });
            }

            affiliateGrid.checkboxColumn.clearSelections();
            affiliateGrid.actionsDropDown.setVisible(false);
            affiliateGrid.actionButton.setVisible(false);
        });
    });
    '; ?>

    //]]>
    </script>
    <!-- grid end -->
<?php endif; ?>

<!-- affiliate tpl end -->