<?php /* Smarty version 2.6.31, created on 2024-05-02 02:20:45
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/controllers/search_map/listing.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/controllers/search_map/listing.tpl', 6, false),)), $this); ?>
<?php $this->assign('count_replace', ('{')."count".('}')); ?>

<script id="tmplListing" type="text/x-jquery-tmpl">
<?php echo '

${($data.count_in_location = \''; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['count_properties_in_location'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['count_replace'], '[count]') : smarty_modifier_replace($_tmp, $this->_tpl_vars['count_replace'], '[count]')); ?>
<?php echo '\'),\'\'}
${($data.group_location_hint = \''; ?>
<?php echo $this->_tpl_vars['lang']['group_location_hint']; ?>
<?php echo '\'),\'\'}
${($data.seo_base = \''; ?>
<?php echo (defined('SEO_BASE') ? @SEO_BASE : null); ?>
<?php echo '\'),\'\'}

<article class="item col-sm-6{{if fd == 1 && gc == 1}} featured{{/if}}{{if gc > 1}} group{{/if}}" id="map_ad_${ID}">
    <div class="main-column relative clearfix">
        <a {{if gc == 1}}target="_blank"{{/if}} href="{{if gc > 1}}javascript://{{else}}${url}{{/if}}">
            <div class="picture{{if !img}} no-picture{{/if}}">
                {{if fd == 1 && gc == 1}}<div class="label" title="'; ?>
<?php echo $this->_tpl_vars['lang']['featured']; ?>
<?php echo '">'; ?>
<?php echo $this->_tpl_vars['lang']['featured']; ?>
<?php echo '</div>{{/if}}
                <img src="{{if img}}${img}{{else}}'; ?>
<?php echo $this->_tpl_vars['rlTplBase']; ?>
<?php echo 'img/blank_10x7.gif{{/if}}"
                {{if img_x2}}srcset="${img_x2} 2x"{{/if}} />
                {{if tmplMapListingHookData}}{{html tmplMapListingHookData}}{{/if}}
                {{if gc > 1}}<mark class="group"><span>{{html String(count_in_location).replace(/(\\[count\\])/gi, gc)}}</span></mark>{{/if}}
            </div>
        </a>
        <ul class="card-info">
            {{if gc > 1}}
                <li class="group-info">
                    ${group_location_hint}
                </li>
                {{else}}
                <li class="title{{if gc == 1}} two-inline{{/if}}">
                    {{if gc == 1}}<div id="fav_${ID}" class="favorite add"><span class="icon"></span></div>{{/if}}
                    <a target="_blank" href="${url}" title="${title}" class="link-large text-overflow">${title}</a>
                </li>
                {{if bds > 0 || bts > 0 || sf}}
                <li class="services">
                    {{if bds > 0}}<span title="" class="badrooms">${bds}</span>{{/if}}{{if bts > 0}}<span title="" class="bathrooms">${bts}</span>{{/if}}{{if sf}}<span title="" class="square_feet">${sf}</span>{{/if}}
                </li>
                {{/if}}
                <li class="fields">
                    {{each fields_data}}
                        <span>${$value}</span>
                    {{/each}}
                </li>
                {{if price}}
                <li class="system">
                    <span class="price-tag">
                        <span>${price}</span>
                        {{if srk == 2 && tf}}/ ${tf}{{/if}}
                    </span>
                </li>
                {{/if}}
            {{/if}}
        </ul>
    </div>
</article>

'; ?>

</script>