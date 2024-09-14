<!-- categories block -->

{if $types && is_string($types)}
    {assign var='types' value=','|explode:$types}
{/if}

{if !$block.Tpl}
    {if is_array($types) && $types|@count > 1}
        <div class="caption">
            {$lang.categories}
        </div>
    {/if}
{/if}

{php}
$block = $this->_tpl_vars['block'];
$side_bar_exists = $this->_tpl_vars['side_bar_exists'];
$two_middle = in_array($block['Side'], ['middle_left', 'middle_right']);
$two_columns = $block['Key'] == 'ltcb_listings' && in_array($GLOBALS['config']['package_name'], ['general', 'auto']) ? '6' : '12';

if ($block['Side'] == 'left' || ($two_middle && $side_bar_exists)) {
    $col_class = "col-{$two_columns} col-sm-6 col-md-{$two_columns} col-lg-{$two_columns}";
} elseif ($two_middle) {
    $col_class = "col-{$two_columns} col-sm-6 col-md-{$two_columns} col-lg-6";
} else {
    $col_class = 'col-12 col-sm-6 col-md-4 ' . ($side_bar_exists ? '' : 'col-lg-3');
}

$this->assign('col_class', $col_class);
{/php}

{foreach from=$types item='type'}
    {assign var='box_listing_type' value=$listing_types.$type}

    {if $types|@count > 1}
        {include file='blocks'|cat:$smarty.const.RL_DS|cat:'fieldset_header.tpl' name=$box_listing_type.name id='addcatblock'|cat:$box_listing_type.Key class='categories_padding'}
    {/if}

    {if $box_categories.$type}
        {if $box_listing_type.Ablock_visible_number}
            {math assign='pages_number' equation='ceil(count/num)' count=$box_categories.$type|@count num=$box_listing_type.Ablock_visible_number}
        {/if}

        <div class="categories{if $box_listing_type.Ablock_show_subcats} sub-categories-exist{/if}" id="categories_{$type|replace:'_':''}_{$pages_number}">
            <ul class="clearfix">
                <li>
                    <div class="row categoty-column clearfix">

                    {foreach from=$box_categories.$type item='cat' name='fCats'}
                        {rlHook name='tplBetweenCategories'}

                        <div class="{$col_class} item{if !$cat.Count} empty-category{/if}">
                            <div class="parent-cateory">
                                {if $box_listing_type.Cat_listing_counter}
                                    <div class="category-counter">
                                        <span>{$cat.Count|number_format}</span>
                                    </div>
                                {/if}

                                <div class="category-name">
                                    {rlHook name='tplPreCategory'}
                                    <a class="category" title="{if $lang[$cat.pTitle]}{$lang[$cat.pTitle]}{else}{$lang[$cat.pName]}{/if}" href="{$rlBase}{if $config.mod_rewrite}{$pages[$box_listing_type.Page_key]}/{$cat.Path}{if $box_listing_type.Cat_postfix}.html{else}/{/if}{else}?page={$pages[$box_listing_type.Page_key]}&amp;category={$cat.ID}{/if}">{$lang[$cat.pName]}</a>
                                    {rlHook name='tplPostCategory'}
                                </div>
                            </div>

                            {if !empty($cat.sub_categories) && $box_listing_type.Ablock_show_subcats}
                            <div class="sub_categories">
                                {if $box_listing_type.Ablock_subcat_number}
                                    {section loop=$cat.sub_categories name='sub_cat' max=$box_listing_type.Ablock_subcat_number}
                                        {rlHook name='tplPreSubCategory'}
                                        {assign var='subcat_title' value=$cat.sub_categories[sub_cat].pTitle}
                                        <a title="{if $lang.$subcat_title}{$lang.$subcat_title}{else}{$cat.sub_categories[sub_cat].name}{/if}" href="{$rlBase}{if $config.mod_rewrite}{$pages[$box_listing_type.Page_key]}/{$cat.sub_categories[sub_cat].Path}{if $box_listing_type.Cat_postfix}.html{else}/{/if}{else}?page={$pages[$box_listing_type.Page_key]}&amp;category={$cat.sub_categories[sub_cat].ID}{/if}">{$cat.sub_categories[sub_cat].name}</a>{if $smarty.section.sub_cat.last}{if $cat.sub_categories|@count > $box_listing_type.Ablock_subcat_number}<span class="more" title="{$lang.show_other_categories}">&nbsp;&raquo;</span>{/if}{else}, {/if}
                                    {/section}

                                    <div class="hide other_categories">
                                        {section loop=$cat.sub_categories name='sub_cat' start=$box_listing_type.Ablock_subcat_number}
                                        {rlHook name='tplPreSubCategory'}
                                        {assign var='subcat_title' value=$cat.sub_categories[sub_cat].pTitle}
                                            <a title="{if $lang.$subcat_title}{$lang.$subcat_title}{else}{$cat.sub_categories[sub_cat].name}{/if}" href="{$rlBase}{if $config.mod_rewrite}{$pages[$box_listing_type.Page_key]}/{$cat.sub_categories[sub_cat].Path}{if $box_listing_type.Cat_postfix}.html{else}/{/if}{else}?page={$pages[$box_listing_type.Page_key]}&amp;category={$cat.sub_categories[sub_cat].ID}{/if}">{$cat.sub_categories[sub_cat].name}</a>{if !$smarty.section.sub_cat.last}, {/if}
                                        {/section}
                                    </div>
                                {else}
                                    {foreach from=$cat.sub_categories item='sub_cat' name='subCatF'}
                                        {rlHook name='tplPreSubCategory'}
                                            <a title="{if $lang[$sub_cat.pTitle]}{$lang[$sub_cat.pTitle]}{else}{$sub_cat.name}{/if}" href="{$rlBase}{if $config.mod_rewrite}{$pages[$box_listing_type.Page_key]}/{$sub_cat.Path}{if $box_listing_type.Cat_postfix}.html{else}/{/if}{else}?page={$pages[$box_listing_type.Page_key]}&amp;category={$sub_cat.ID}{/if}">{$sub_cat.name}</a>{if !$smarty.foreach.subCatF.last}, {/if}
                                    {/foreach}
                                {/if}
                            </div>
                            {/if}
                        </div>

                        {if $box_listing_type.Ablock_visible_number && $smarty.foreach.fCats.iteration%$box_listing_type.Ablock_visible_number == 0 && !$smarty.foreach.fCats.last}
                            </div>
                            {if $box_listing_type.Ablock_visible_number}
                                </li><li class="hide">
                            {/if}
                            <div class="row categoty-column categories_{$type|replace:'_':''}">
                        {/if}
                    {/foreach}
                    </div>
                </li>
            </ul>
        </div>

        {if $pages_number > 1}
            <div class="d-flex align-items-center justify-content-center category-slider-bar text-center mt-3{if $box_listing_type.Ablock_scrolling} mousewheel{/if}">{strip}
                <span class="arrow"><span class="prev" title="{$lang.show_previous_categories}"></span></span>
                <span class="navigation d-flex">
                    {section name='slide_page' loop=$pages_number|ceil}
                        <span accesskey="{$smarty.section.slide_page.iteration}" class="flex-fill{if $smarty.section.slide_page.first} active{/if}"></span>
                    {/section}
                </span>
                <span class="arrow"><span class="next" title="{$lang.show_next_categories}"></span></span>
            {/strip}</div>
        {/if}

    {else}
        {$lang.listing_type_no_categories}
    {/if}

    {if $types|@count > 1}
        {include file='blocks'|cat:$smarty.const.RL_DS|cat:'fieldset_footer.tpl'}
    {/if}
{/foreach}

<!-- categories block end -->
