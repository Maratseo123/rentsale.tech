<?php /* Smarty version 2.6.31, created on 2023-12-30 14:02:54
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/my_search_block.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/my_search_block.tpl', 7, false),array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/my_search_block.tpl', 24, false),array('modifier', 'key', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/my_search_block.tpl', 92, false),array('function', 'pageUrl', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/my_search_block.tpl', 93, false),)), $this); ?>
<!-- my search block tpl -->

<section class="side_block_search">
    <form id="my-search-form" method="post" action="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
/<?php echo $this->_tpl_vars['search_results_url']; ?>
.html<?php else: ?>?page=<?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
&<?php echo $this->_tpl_vars['search_results_url']; ?>
<?php endif; ?>">
        <input type="hidden" name="action" value="search" />

        <div class="search-item single-field<?php if (count($this->_tpl_vars['listing_types']) == 1): ?> hide<?php endif; ?>">
            <select id="search_type_select" name="search_type">
                <option value="" <?php if (! $this->_tpl_vars['selected_search_type']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['any_of_listing_type']; ?>
</option>

                <?php $_from = $this->_tpl_vars['listing_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['search_type']):
?>
                    <option value="<?php echo $this->_tpl_vars['search_type']['Key']; ?>
"
                        <?php if ($this->_tpl_vars['selected_search_type'] == $this->_tpl_vars['search_type']['Key'] || count($this->_tpl_vars['listing_types']) === 1): ?>selected="selected"<?php endif; ?>>
                        <?php echo $this->_tpl_vars['search_type']['name']; ?>

                    </option>
                <?php endforeach; endif; unset($_from); ?>
            </select>
        </div>

        <?php if ($this->_tpl_vars['search_forms'] && $this->_tpl_vars['listing_types']): ?>
            <div id="search-forms" class="hide">
                <?php if (count($this->_tpl_vars['listing_types']) > 1): ?>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_header.tpl') : smarty_modifier_cat($_tmp, 'fieldset_header.tpl')), 'smarty_include_vars' => array('id' => 'searchType')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <?php endif; ?>

                <?php $_from = $this->_tpl_vars['listing_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['listing_type_key'] => $this->_tpl_vars['listing_type']):
?>
                    <div id="form_<?php echo $this->_tpl_vars['listing_type_key']; ?>
" class="hide form"></div>
                <?php endforeach; endif; unset($_from); ?>

                <?php if (count($this->_tpl_vars['listing_types']) > 1): ?>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_footer.tpl') : smarty_modifier_cat($_tmp, 'fieldset_footer.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <div class="search-footer clearfix">
            <?php if ($this->_tpl_vars['group']['With_picture']): ?>
            <div class="search-item">
                <div class="field"></div>
                <label><input <?php if ($_REQUEST['f']['with_photo']): ?>checked="checked"<?php endif; ?> type="checkbox" name="f[with_photo]" value="true" /> <?php echo $this->_tpl_vars['lang']['with_photos_only']; ?>
</label>
            </div>
            <?php endif; ?>

            <div class="align-button">
                <input id="search-button" class="search_field_item button" type="submit" name="search" value="<?php echo $this->_tpl_vars['lang']['search']; ?>
" />
            </div>
        </div>
    </form>
</section>

<?php if ($this->_tpl_vars['search_forms'] && $this->_tpl_vars['listing_types']): ?>
    <div id="search-forms-fields">
        <?php $_from = $this->_tpl_vars['listing_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['listing_type_key'] => $this->_tpl_vars['listing_type']):
?>
            <form>
                <div id="fields_<?php echo $this->_tpl_vars['listing_type_key']; ?>
" class="hide">
                    <?php $this->assign('search_form', $this->_tpl_vars['search_forms'][$this->_tpl_vars['listing_type_key']]); ?>
                    <?php $this->assign('listing_type', $this->_tpl_vars['listing_type']); ?>

                    <input type="hidden" name="post_form_key" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['listing_type']['Key'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_myads') : smarty_modifier_cat($_tmp, '_myads')); ?>
" />

                    <?php if ($this->_tpl_vars['search_form']): ?>
                        <?php $_from = $this->_tpl_vars['search_form']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['group']):
?><?php echo ''; ?><?php if ($this->_tpl_vars['group']['Group_ID']): ?><?php echo ''; ?><?php if ($this->_tpl_vars['group']['Fields'] && $this->_tpl_vars['group']['Display']): ?><?php echo ''; ?><?php $this->assign('hide', false); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->assign('hide', true); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_header.tpl') : smarty_modifier_cat($_tmp, 'fieldset_header.tpl')), 'smarty_include_vars' => array('id' => $this->_tpl_vars['group']['Group_ID'],'name' => $this->_tpl_vars['lang'][$this->_tpl_vars['group']['pName']])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php if ($this->_tpl_vars['group']['Fields']): ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fields_search_box.tpl') : smarty_modifier_cat($_tmp, 'fields_search_box.tpl')), 'smarty_include_vars' => array('fields' => $this->_tpl_vars['group']['Fields'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['lang']['no_items_in_group']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_footer.tpl') : smarty_modifier_cat($_tmp, 'fieldset_footer.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fields_search_box.tpl') : smarty_modifier_cat($_tmp, 'fields_search_box.tpl')), 'smarty_include_vars' => array('fields' => $this->_tpl_vars['group']['Fields'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
<?php endforeach; endif; unset($_from); ?>
                    <?php else: ?>
                        <?php echo $this->_tpl_vars['lang']['search_form_empty']; ?>

                    <?php endif; ?>
                </div>
            </form>
        <?php endforeach; endif; unset($_from); ?>
    </div>
<?php endif; ?>

<script class="fl-js-dynamic">
var selected_type = '<?php if ($this->_tpl_vars['selected_search_type']): ?><?php echo $this->_tpl_vars['selected_search_type']; ?>
<?php elseif (count($this->_tpl_vars['listing_types']) === 1): ?><?php echo key($this->_tpl_vars['listing_types']); ?>
<?php endif; ?>';
var myAdsPageUrl  = '<?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'my_all_ads'), $this);?>
';

<?php echo '
    $(document).ready(function(){
        // general container of search forms
        var $formsContainer = $(\'#search-forms\');

        // show type which was selected in previous page
        if (selected_type) {
            $(\'#fields_\' + selected_type)
                .appendTo($(\'#form_\' + selected_type).removeClass(\'hide\'))
                .removeClass(\'hide\');
            $formsContainer.removeClass(\'hide\');
        }

        // add handler to select of types
        $(\'#search_type_select\').change(function(){
            // selected listing type
            var type = $(this).find(\'option:selected\').val() != \'0\' ? $(this).find(\'option:selected\').val() : \'\';

            // hide all forms
            $formsContainer.find(\'.form\').addClass(\'hide\');

            // show selected form if it exist
            if (type) {
                var $appendContainer = $(\'#form_\' + type);
                $formsContainer.removeClass(\'hide\');

                // move all forms to hidden container
                $formsContainer.find(\'.form\').each(function(){
                    if ($(this).children().length) {
                        var $moved_form = $(this).children().detach();
                        $moved_form.addClass(\'hide\').appendTo($(\'#search-forms-fields\'));
                    }
                });

                // move fields of selected search form
                var $content = $(\'#fields_\' + type).length ? $(\'#fields_\' + type).detach() : null;

                if ($content) {
                    $content.appendTo($appendContainer);
                    $content.removeClass(\'hide\');
                    $content.parent().removeClass(\'hide\');
                }
            }
            // hide forms & disable submit button
            else {
                $formsContainer.addClass(\'hide\');
            }
        });

        // Added "Loading..." text after submit of form
        $(\'#my-search-form\').submit(function(){
            $(\'#search-button\').val(lang[\'loading\']).addClass(\'disabled\').attr(\'disabled\', true);

            if ($formsContainer.hasClass(\'hide\') && myAdsPageUrl) {
                location.href = myAdsPageUrl;
                return false;
            }

            return true;
        });
    });
'; ?>
</script>

<!-- my search block tpl end -->