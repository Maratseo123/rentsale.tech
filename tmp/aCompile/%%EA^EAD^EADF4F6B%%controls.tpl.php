<?php /* Smarty version 2.6.31, created on 2023-10-31 15:51:55
         compiled from controllers/controls.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', 'controllers/controls.tpl', 3, false),array('function', 'rlHook', 'controllers/controls.tpl', 101, false),)), $this); ?>
<!-- controls tpl -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_start.tpl') : smarty_modifier_cat($_tmp, 'm_block_start.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div style="padding: 10px;">
    <table class="lTable">
        <tr class="body">
            <td class="list_td_light"><?php echo $this->_tpl_vars['lang']['recount_text']; ?>
</td>
            <td style="width: 5px;" rowspan="100"></td>
            <td class="list_td_light" align="center" style="width: 200px;">
                <input id="listing_recount" type="button" onclick="xajax_recountListings('#listing_recount');$(this).val('<?php echo $this->_tpl_vars['lang']['loading']; ?>
');" value="<?php echo $this->_tpl_vars['lang']['recount']; ?>
" />
            </td>
        </tr>
        <tr>
            <td style="height: 5px;" colspan="3"></td>
        </tr>

        <tr class="body">
            <td class="list_td"><?php echo $this->_tpl_vars['lang']['rebuild_cat_levels']; ?>
</td>
            <td align="center" class="list_td">
                <input id="cat_levels" type="button" onclick="xajax_rebuildCatLevels(true, '#cat_levels');$(this).val('<?php echo $this->_tpl_vars['lang']['loading']; ?>
');" value="<?php echo $this->_tpl_vars['lang']['rebuild']; ?>
" />
            </td>
        </tr>
        <tr>
            <td style="height: 5px;" colspan="3"></td>
        </tr>

        <tr class="body">
            <td class="list_td_light"><?php echo $this->_tpl_vars['lang']['reorder_fields_positions']; ?>
</td>
            <td class="list_td_light" align="center">
                <input id="reorder_fields" type="button" onclick="xajax_reorderFields(true, '#reorder_fields');$(this).val('<?php echo $this->_tpl_vars['lang']['loading']; ?>
');" value="<?php echo $this->_tpl_vars['lang']['reorder']; ?>
" />
            </td>
        </tr>
        <tr>
            <td style="height: 5px;" colspan="3"></td>
        </tr>

        <tr class="body">
            <td class="list_td"><?php echo $this->_tpl_vars['lang']['resize_images']; ?>
</td>
            <td class="list_td" align="center">
                <input id="resize_images" type="button" value="<?php echo $this->_tpl_vars['lang']['update']; ?>
" data-default-value="<?php echo $this->_tpl_vars['lang']['update']; ?>
" />
            </td>
        </tr>
        <tr>
            <td style="height: 5px;" colspan="3"></td>
        </tr>

        <tr class="body">
            <td class="list_td_light"><?php echo $this->_tpl_vars['lang']['refresh_coordinates']; ?>
</td>
            <td class="list_td_light" align="center">
                <input id="refresh_listing_location" type="button" value="<?php echo $this->_tpl_vars['lang']['rebuild']; ?>
" />
            </td>
        </tr>
        <tr>
            <td style="height: 5px;" colspan="3"></td>
        </tr>

        <tr class="body">
            <td class="list_td"><?php echo $this->_tpl_vars['lang']['refresh_account_coordinates']; ?>
</td>
            <td class="list_td" align="center">
                <input id="refresh_account_location" type="button" value="<?php echo $this->_tpl_vars['lang']['rebuild']; ?>
" />
            </td>
        </tr>
        <tr>
            <td style="height: 5px;" colspan="3"></td>
        </tr>

        <?php if ($this->_tpl_vars['config']['cache']): ?>
        <tr class="body">
            <td class="list_td"><?php echo $this->_tpl_vars['lang']['update_cache']; ?>
</td>
            <td class="list_td" align="center">
                <input id="update_cache" type="button" onclick="xajax_updateCache(true, '#update_cache');$(this).val('<?php echo $this->_tpl_vars['lang']['loading']; ?>
');" value="<?php echo $this->_tpl_vars['lang']['update']; ?>
" />
            </td>
        </tr>
        <tr>
            <td style="height: 5px;" colspan="3"></td>
        </tr>
        <?php endif; ?>

        <tr class="body">
            <td class="list_td"><?php echo $this->_tpl_vars['lang']['drop_static_data_cache']; ?>
</td>
            <td class="list_td" align="center">
                <input id="update_static_files" type="button" onclick="updateStaticFilesRevision()" value="<?php echo $this->_tpl_vars['lang']['update']; ?>
" />
            </td>
        </tr>
        <tr>
            <td style="height: 5px;" colspan="3"></td>
        </tr>

        <?php if ($this->_tpl_vars['config']['membership_module']): ?>
        <tr class="body">
            <td class="list_td"><?php echo $this->_tpl_vars['lang']['listing_statistic_mp_recount']; ?>
</td>
            <td class="list_td" align="center">
                <input id="listing_mp_recount" type="button" onclick="xajax_recountListingsMP('#listing_mp_recount'); $(this).val('<?php echo $this->_tpl_vars['lang']['loading']; ?>
');" value="<?php echo $this->_tpl_vars['lang']['recount']; ?>
" />
            </td>
        </tr>
        <tr>
            <td style="height: 5px;" colspan="3"></td>
        </tr>
        <?php endif; ?>

        <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'apTplControlsForm'), $this);?>


    </table>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_end.tpl') : smarty_modifier_cat($_tmp, 'm_block_end.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script>
lang.resize_in_progress          = '<?php echo $this->_tpl_vars['lang']['resize_in_progress']; ?>
';
lang.resize_completed            = '<?php echo $this->_tpl_vars['lang']['resize_completed']; ?>
';
lang.confirm_notice              = '<?php echo $this->_tpl_vars['lang']['confirm_notice']; ?>
';
lang.refresh_listing_pictures    = '<?php echo $this->_tpl_vars['lang']['refresh_listing_pictures']; ?>
';
lang.refresh_account_pictures    = '<?php echo $this->_tpl_vars['lang']['refresh_account_pictures']; ?>
';
lang.refresh_account_coordinates = '<?php echo $this->_tpl_vars['lang']['refresh_account_coordinates']; ?>
';
lang.rebuild                     = '<?php echo $this->_tpl_vars['lang']['rebuild']; ?>
';

<?php echo '
$(function(){
    $(\'#resize_images\').click(function(){
        rlConfirm(lang.confirm_notice, \'flynax.initRebuildPictures\');
    });

    // fix wrong coloring of background in rows
    $(\'.lTable tr.body\').each(function(index){
        $columns = $(this).find(\'td\').length == 3 ? $(this).find(\'td:even\') : $(this).find(\'td\');
        $columns.attr(\'class\', index % 2 == 0 ? \'list_td_light\' : \'list_td\');
    });

    function refreshLocations() {
        return function($button, mode) {
            if (!$button) {
                return;
            }

            $button.click(function() {
                $button.addClass(\'disabled\').prop(\'disabled\', true).val(lang.loading);
                refreshLocationsRequest($button);
            });

            var refreshLocationsRequest = function($button, start){
                flynax.sendAjaxRequest(
                    \'refreshLocations\',
                    {start: (start ? start : 0), mode: mode},
                    function(response) {
                        if (response.start) {
                            refreshLocationsRequest($button, response.start);
                        } else {
                            $button.removeClass(\'disabled\').prop(\'disabled\', false).val(lang.rebuild);
                        }
                    }
                );
            };
        };
    }

    var refreshLocationsHandler = refreshLocations();
    refreshLocationsHandler($(\'#refresh_account_location\'), \'accounts\');
    refreshLocationsHandler($(\'#refresh_listing_location\'), \'listings\');
});

/**
 * @since 4.9.1
 */
const updateStaticFilesRevision = function () {
    let $button = $(\'#update_static_files\');
    $button.attr(\'data-phrase\', $button.val());
    $button.val(lang.loading).prop(\'disabled\', true).addClass(\'disabled\');

    flynax.sendAjaxRequest(
        \'updateStaticFilesRevision\',
        {},
        function(response) {
            $button.val($button.data(\'phrase\')).prop(\'disabled\', false).removeClass(\'disabled\');

            if (response.status && response.status === \'OK\') {
                printMessage(\'notice\', lang.update_static_files_notice);
            } else {
                printMessage(\'error\', lang.system_error);
            }
        },
        function () {
            $button.val($button.data(\'phrase\')).prop(\'disabled\', false).removeClass(\'disabled\');
        }
    );
}
'; ?>
</script>

<!-- controls tpl end -->