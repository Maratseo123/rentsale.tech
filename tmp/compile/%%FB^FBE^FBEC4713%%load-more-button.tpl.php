<?php /* Smarty version 2.6.31, created on 2023-12-18 01:57:30
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/load-more-button.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/load-more-button.tpl', 23, false),)), $this); ?>
<!-- load more button tpl -->

<div class="text-center" id="ads-block-<?php echo $this->_tpl_vars['block']['ID']; ?>
">
    <input class="pl-5 pr-5" type="button" value="<?php echo $this->_tpl_vars['lang']['load_more_listings']; ?>
" data-phrase="<?php echo $this->_tpl_vars['lang']['load_more_listings']; ?>
" />
</div>

<?php 
$GLOBALS['rlSmarty']->assign('selected_listing_ids', implode(',', $GLOBALS['rlListings']->selectedIDs));
 ?>

<script class="fl-js-dynamic">
<?php echo '

$(function(){
    var box_id  = \'ads-block-'; ?>
<?php echo $this->_tpl_vars['block']['ID']; ?>
<?php echo '\';
    var $cont   = $(\'#\' + box_id);
    var $box    = $cont.prev();
    var $button = $cont.find(\'input[type=button]\');

    var data = {
        '; ?>

        mode: 'loadMoreListings',
        key: '<?php if ($this->_tpl_vars['block']['Plugin'] == 'listings_box'): ?><?php echo $this->_tpl_vars['block']['Key']; ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['block']['Key'])) ? $this->_run_mod_handler('replace', true, $_tmp, 'ltfb_', '') : smarty_modifier_replace($_tmp, 'ltfb_', '')); ?>
<?php endif; ?>',
        type: '<?php if ($this->_tpl_vars['block']['Plugin'] == 'listings_box'): ?>listings_box<?php else: ?>featured<?php endif; ?>',
        ids: '<?php echo $this->_tpl_vars['selected_listing_ids']; ?>
',
        total: $box.find('> li').length,
        side_bar_exists: <?php if ($this->_tpl_vars['side_bar_exists']): ?>1<?php else: ?>0<?php endif; ?>,
        block_side: '<?php echo $this->_tpl_vars['block']['Side']; ?>
'
        <?php echo '
    };

    $button.width($button.width());

    $button.click(function(){
        $(this).val(lang[\'loading\']);

        flUtil.ajax(data, function(response, status){
            if (status == \'success\' && response.status == \'OK\') {
                if (response.results.html) {
                    var $html = $(jQuery.parseHTML(response.results.html)[2]);
                    $listings = $html.find(\'> li\').unwrap();

                    if (typeof $.convertPrice == \'function\') {
                        $listings.find(\'.price_tag > *:not(nav)\').each(function(){
                            $(this).convertPrice();
                        });
                    }

                    $box.append($listings);

                    flFavoritesHandler();

                    if (response.results.next) {
                        data.total += parseInt(response.results.count);
                        data.ids += \',\' + response.results.ids;
                    } else {
                        $cont.remove();
                    }
                } else {
                    $cont.remove();
                }
            } else {
                printMessage(\'error\', lang[\'system_error\']);
            }

            $button.val($button.data(\'phrase\'));
        });
    });
});

'; ?>

</script>

<!-- load more button tpl end -->