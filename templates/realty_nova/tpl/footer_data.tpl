<!-- footer data tpl -->

<div class="footer-data row mt-4">{literal}
<!-- Yandex.Metrika counter -->

<script type="text/javascript">
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(97174441, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/97174441" style="position:absolute; left:-9999px;" alt="" /></div></noscript>

<!-- /Yandex.Metrika counter -->{/literal}
    <div class="icons text-left text-md-right col-12 col-sm-4 order-sm-2">
        <a class="facebook" target="_blank" title="{$lang.join_us_on_facebook}" href="{$config.facebook_page}"></a>
        <a class="twitter ml-4" target="_blank" title="{$lang.join_us_on_twitter}" href="{$config.twitter_page}"></a>
        {if $pages.rss_feed}
            <a class="rss ml-4" title="{$lang.subscribe_rss}" href="{getRssUrl mode='footer'}" target="_blank"></a>
        {/if}
    </div>

    <div class="align-self-center col-12 mt-4 mt-sm-0 col-sm-8 font-size-xs">
        &copy; {$smarty.now|date_format:'%Y'}, {$lang.powered_by}
        <a title="{$lang.powered_by} {$lang.copy_rights}" href="{$lang.flynax_url}">{$lang.copy_rights}</a>
    </div>
</div>

<!-- footer data tpl end -->