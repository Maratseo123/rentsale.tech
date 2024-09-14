<?php /* Smarty version 2.6.31, created on 2023-12-18 01:50:46
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/footer_data.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'getRssUrl', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/footer_data.tpl', 27, false),array('modifier', 'date_format', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/footer_data.tpl', 32, false),)), $this); ?>
<!-- footer data tpl -->

<div class="footer-data row mt-4"><?php echo '
<!-- Yandex.Metrika counter -->

<script type="text/javascript">
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(95432092, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/95432092" style="position:absolute; left:-9999px;" alt="" /></div></noscript>

<!-- /Yandex.Metrika counter -->'; ?>

    <div class="icons text-left text-md-right col-12 col-sm-4 order-sm-2">
        <a class="facebook" target="_blank" title="<?php echo $this->_tpl_vars['lang']['join_us_on_facebook']; ?>
" href="<?php echo $this->_tpl_vars['config']['facebook_page']; ?>
"></a>
        <a class="twitter ml-4" target="_blank" title="<?php echo $this->_tpl_vars['lang']['join_us_on_twitter']; ?>
" href="<?php echo $this->_tpl_vars['config']['twitter_page']; ?>
"></a>
        <?php if ($this->_tpl_vars['pages']['rss_feed']): ?>
            <a class="rss ml-4" title="<?php echo $this->_tpl_vars['lang']['subscribe_rss']; ?>
" href="<?php echo $this->_plugins['function']['getRssUrl'][0][0]->getRssUrl(array('mode' => 'footer'), $this);?>
" target="_blank"></a>
        <?php endif; ?>
    </div>

    <div class="align-self-center col-12 mt-4 mt-sm-0 col-sm-8 font-size-xs">
        &copy; <?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y') : smarty_modifier_date_format($_tmp, '%Y')); ?>
, <?php echo $this->_tpl_vars['lang']['powered_by']; ?>

        <a title="<?php echo $this->_tpl_vars['lang']['powered_by']; ?>
 <?php echo $this->_tpl_vars['lang']['copy_rights']; ?>
" href="<?php echo $this->_tpl_vars['lang']['flynax_url']; ?>
"><?php echo $this->_tpl_vars['lang']['copy_rights']; ?>
</a>
    </div>
</div>

<!-- footer data tpl end -->