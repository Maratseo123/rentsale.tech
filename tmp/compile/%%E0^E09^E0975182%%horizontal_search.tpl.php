<?php /* Smarty version 2.6.31, created on 2024-04-24 15:46:43
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/horizontal_search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/horizontal_search.tpl', 3, false),array('function', 'phrase', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/horizontal_search.tpl', 24, false),array('function', 'geoAutocompleteAPI', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/horizontal_search.tpl', 91, false),array('modifier', 'count', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/horizontal_search.tpl', 3, false),array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/horizontal_search.tpl', 24, false),)), $this); ?>
<!-- home page search box tpl -->

<?php echo smarty_function_math(array('assign' => 'pill_width','equation' => 'round(100/(count), 4)','count' => count($this->_tpl_vars['search_forms'])), $this);?>


<div class="search-block-content">
    <?php $_from = $this->_tpl_vars['search_forms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sformsF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sformsF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sf_key'] => $this->_tpl_vars['search_form']):
        $this->_foreach['sformsF']['iteration']++;
?>
        <?php $this->assign('spage_key', $this->_tpl_vars['listing_types'][$this->_tpl_vars['search_form']['listing_type']]['Page_key']); ?>
        <?php $this->assign('listing_type', $this->_tpl_vars['listing_types'][$this->_tpl_vars['search_form']['listing_type']]); ?>
        <?php $this->assign('post_form_key', $this->_tpl_vars['sf_key']); ?>

        <div id="area_<?php echo $this->_tpl_vars['sf_key']; ?>
" class="search_tab_area<?php if (! ($this->_foreach['sformsF']['iteration'] <= 1)): ?> hide<?php endif; ?>">
            <form name="map-search-form" class="row" accesskey="<?php echo $this->_tpl_vars['search_form']['listing_type']; ?>
" method="<?php echo $this->_tpl_vars['listing_type']['Submit_method']; ?>
" action="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pages']['search_on_map']; ?>
.html<?php else: ?>?page=<?php echo $this->_tpl_vars['pages']['search_on_map']; ?>
<?php endif; ?>"><?php echo '<input type="hidden" value="" name="loc_lat" /><input type="hidden" value="" name="loc_lng" />'; ?><?php if ($this->_tpl_vars['search_form']['arrange_field']): ?><?php echo '<input type="hidden" name="f['; ?><?php echo $this->_tpl_vars['search_form']['arrange_field']; ?><?php echo ']" value="'; ?><?php echo $this->_tpl_vars['search_form']['arrange_value']; ?><?php echo '" />'; ?><?php endif; ?><?php echo '<!-- Listing type switcher -->'; ?><?php if (count($this->_tpl_vars['search_forms']) > 1): ?><?php echo '<div class="search-form-cell form-switcher tabs"><div class="align-items-end"><span>'; ?><?php if ($this->_tpl_vars['search_form']['arrange_field']): ?><?php echo ''; ?><?php echo $this->_plugins['function']['phrase'][0][0]->getPhrase(array('key' => ((is_array($_tmp='listing_fields+name+')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['search_form']['arrange_field']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['search_form']['arrange_field']))), $this);?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['lang']['listing_type']; ?><?php echo ''; ?><?php endif; ?><?php echo '</span><div>'; ?><?php if (count($this->_tpl_vars['search_forms']) > 3): ?><?php echo '<select name="pills_'; ?><?php echo $this->_tpl_vars['sf_key']; ?><?php echo '">'; ?><?php $_from = $this->_tpl_vars['search_forms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pill_key'] => $this->_tpl_vars['search_pill']):
?><?php echo '<option value="'; ?><?php echo $this->_tpl_vars['pill_key']; ?><?php echo '"'; ?><?php if ($this->_tpl_vars['sf_key'] == $this->_tpl_vars['pill_key']): ?><?php echo ' selected="selected"'; ?><?php endif; ?><?php echo '>'; ?><?php echo $this->_tpl_vars['search_pill']['name']; ?><?php echo '</option>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</select>'; ?><?php else: ?><?php echo '<span class="pills" data-key="'; ?><?php echo $this->_tpl_vars['sf_key']; ?><?php echo '">'; ?><?php $_from = $this->_tpl_vars['search_forms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pill_key'] => $this->_tpl_vars['search_pill']):
?><?php echo '<label data-key="'; ?><?php echo $this->_tpl_vars['pill_key']; ?><?php echo '" data-target="'; ?><?php echo $this->_tpl_vars['pill_key']; ?><?php echo '" title="'; ?><?php echo $this->_tpl_vars['search_pill']['name']; ?><?php echo '" style="width: '; ?><?php echo $this->_tpl_vars['pill_width']; ?><?php echo '%;"><input type="radio" value="'; ?><?php echo $this->_tpl_vars['pill_key']; ?><?php echo '" name="pills_'; ?><?php echo $this->_tpl_vars['sf_key']; ?><?php echo '" '; ?><?php if ($this->_tpl_vars['sf_key'] == $this->_tpl_vars['pill_key']): ?><?php echo 'checked="checked"'; ?><?php endif; ?><?php echo ' />'; ?><?php echo $this->_tpl_vars['search_pill']['name']; ?><?php echo '</label>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</span>'; ?><?php endif; ?><?php echo '</div></div></div>'; ?><?php endif; ?><?php echo '<!-- Listing type switcher end -->'; ?><?php $_from = $this->_tpl_vars['search_form']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fields_search_horizontal.tpl') : smarty_modifier_cat($_tmp, 'fields_search_horizontal.tpl')), 'smarty_include_vars' => array('fields' => $this->_tpl_vars['item']['Fields'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo '<div class="d-flex '; ?><?php if ($this->_tpl_vars['config']['home_page_h1']): ?><?php echo 'search-form-button'; ?><?php else: ?><?php echo 'search-form-cell flex-column justify-content-end ml-auto'; ?><?php endif; ?><?php echo '"><div class="align-items-end w-100"><span></span><div><input type="submit" value="'; ?><?php echo $this->_tpl_vars['lang']['search']; ?><?php echo '" /></div></div></div>'; ?>
</form>
        </div>
    <?php endforeach; endif; unset($_from); ?>

    <?php if (count($this->_tpl_vars['search_forms']) > 1): ?>
    <script class="fl-js-dynamic">
    <?php echo '

    (function(){
        $(\'.form-switcher label\').click(function(e){
            e.stopPropagation();
            searchFormSwitcher($(this).data(\'key\'));
            return false;
        });

        $(\'.form-switcher select\').change(function(e){
            e.stopPropagation();
            searchFormSwitcher($(this).val());
            return false;
        });

        var searchFormSwitcher = function(key){
            $(\'.search-block-content > .search_tab_area\').addClass(\'hide\');
            $(\'#area_\' + key).removeClass(\'hide\');
        }
    })();

    '; ?>

    </script>
    <?php endif; ?>

    <?php echo $this->_plugins['function']['geoAutocompleteAPI'][0][0]->geoAutocompleteAPI(array('assign' => 'autocompleteAPI'), $this);?>


    <script class="fl-js-dynamic">
    lang['enter_a_location'] = '<?php echo $this->_tpl_vars['lang']['enter_a_location']; ?>
';
    <?php echo '

    flUtil.loadStyle(\''; ?>
<?php echo $this->_tpl_vars['autocompleteAPI']['css']; ?>
<?php echo '\');
    flUtil.loadScript(\''; ?>
<?php echo $this->_tpl_vars['autocompleteAPI']['js']; ?>
<?php echo '\', function(){
        $target = $(\'.horizontal-search input[name*=address]\');

        $target.attr(\'placeholder\', lang[\'enter_a_location\']);
        $target.geoAutocomplete({
            onSelect: function(address, lat, lng){
                if (typeof mapSearch == \'object\') {
                    mapSearch.map.panTo(new L.LatLng(lat, lng));
                } else {
                    $(\'[name=loc_lat]\').val(lat);
                    $(\'[name=loc_lng]\').val(lng);
                }
            }
        });
    });

    '; ?>

    </script>
</div>

<!-- home page search box tpl end -->