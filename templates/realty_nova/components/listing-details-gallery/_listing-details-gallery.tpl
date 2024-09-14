<!-- listing picture gallery tpl -->

<div class="gallery position-relative">
    <div id="media" data-view="gallery">
        <div class="preview{if $photos.0.Type == 'video'} {if $photos.0.Original == 'youtube'}video{else}local{/if}{/if}">
            <div class="iframe" id="yt_iframe"></div>

            <video id="player" controls>
                <source src="{if $photos.0.Type == 'video' && $photos.0.Original != 'youtube'}{$photos.0.Original}{/if}" type="video/mp4"></source>
            </video>

            <img class="default-picture"
                 title="{if $photos.0.Description}{$photos.0.Description}{else}{$pageInfo.name}{/if}"
                 src="{if $photos.0.Photo}{$photos.0.Photo}{else}{$rlTplBase}img/blank.gif{/if}" />

            {if !$allow_photos}
                <div class="picture_locked hide">
                    <div>
                        <div class="restricted-content text-center">
                            <img class="locked-media" src="{$rlTplBase}img/blank.gif" />
                            {if $isLogin}
                                <p class="picture-hint hide">{$lang.view_picture_not_available}</p>
                                <p class="video-hint hide">{$lang.watch_video_not_available}</p>
                                <span>
                                    <a class="button" title="{$lang.registration}" href="{pageUrl key='my_profile'}#membership">{$lang.change_plan}</a>
                                </span>
                            {else}
                                <p class="picture-hint hide">{$lang.view_picture_hint}</p>
                                <p class="video-hint hide">{$lang.watch_video_hint}</p>
                                <span>
                                    <a href="javascript://" class="button login">{$lang.sign_in}</a> <span>{$lang.or}</span> <a title="{$lang.registration}" href="{pageUrl key='registration'}">{$lang.sign_up}</a>
                                </span>
                            {/if}
                        </div>
                    </div>
                </div>
            {/if}

            {rlHook name='tplListingDetailsPhotoPreview'}
        </div>

        <div class="map-container"></div>

        {if $noNavBar}
            <span class="media-enlarge"><span></span></span>
        {else}
            <div class="nav-buttons">
                <span class="nav-button zoom">{$lang.view_larger}</span>
                <span class="map-group">
                    {rlHook name='tplListingDetailsMapButtons'}
                    <span class="nav-button gallery">{$lang.gallery}</span>
                    {if $config.map_module && $location.direct}
                        <span class="nav-button map">{$lang.map}</span>
                    {/if}
                </span>
            </div>
        {/if}
    </div>

    <div class="thumbs{if $photos|@count == 1} hide{/if}">
        <div class="carousel has-dots">
            <div class="carousel__viewport">
                <div class="carousel__track d-flex">
                    {foreach from=$photos item='photo' name='photosF'}
                    <div class="carousel__slide{if $smarty.foreach.photosF.first} active{/if}{if !$allow_photos && !$smarty.foreach.photosF.first} locked{/if}" data-media-type="{$photo.Type}">
                        {if ((!$allow_photos && $smarty.foreach.photosF.first) || $allow_photos) && $photo.Type == 'video' && $photo.Original != 'youtube'}
                            <video><source src="{$photo.Original}" type="video/mp4"></source></video>
                        {else}
                            <img alt="{if $photo.Description}{$photo.Description}{else}{$pageInfo.name}{/if}"
                                 src="{if $photo.Thumbnail && ($allow_photos || $smarty.foreach.photosF.first)}{$photo.Thumbnail}{else}{$rlTplBase}img/blank.gif{/if}"
                                 {if $photo.Thumbnail_x2 && ($allow_photos || $smarty.foreach.photosF.first)}srcset="{$photo.Thumbnail_x2} 2x"{/if} />
                        {/if}

                        {if $photo.Type == 'video'}<span class="play"></span>{/if}
                    </div>
                    {/foreach}
                </div>
            </div>
        </div>
    </div>

    <script>
    let galleryData = [];

    {foreach from=$photos item='photo' name='photosF'}
        {if !$smarty.foreach.photosF.first && !$allow_photos}
            {break}
        {/if}

        galleryData.push({$smarty.ldelim}
            type: '{if $photo.Type == 'video'}{if $photo.Original == 'youtube'}iframe{else}html5video{/if}{else}image{/if}',
            src: '{if $photo.Type == 'video'}{if $photo.Original == 'youtube'}https://www.youtube.com/embed/{$photo.youtube_key}?rel=0{else}{$photo.Original}{/if}{else}{$photo.Photo}{/if}',
            thumb: '{if $photo.Thumbnail_x2}{$photo.Thumbnail_x2}{elseif $photo.Thumbnail}{$photo.Thumbnail}{else}{$rlTplBase}img/play.svg{/if}',
            caption: "{if $photo.Description}{$photo.Description|escape:'javascript'}{else}{$pageInfo.name|escape:'javascript'}{/if}",
            youtubeKey: "{if $photo.Type == 'video' && $photo.Original == 'youtube'}{$photo.youtube_key}{/if}",
        {$smarty.rdelim});
    {/foreach}

    </script>
</div>

<script class="fl-js-dynamic">
lang.change_plan = "{$lang.change_plan}";
rlConfig.gallery_slideshow = {if $config.gallery_slideshow && $allow_photos}true{else}false{/if};
rlConfig.gallery_slideshow_delay = {if $config.gallery_slideshow_delay}{$config.gallery_slideshow_delay}{else}5{/if};
{literal}

var onYouTubeIframeAPIReady = function(){};

$(function(){
    var index = 0;
    var slideshowTimer = false;
    var gCarousel = false;
    var mapLoaded = false;
    var fytPlayer = null;

    var $gl = $('div.gallery');
    var $media = $('#media');
    var $preview = $('.listing-details .gallery div.preview');
    var $enlarge = $gl.find('.media-enlarge,.nav-button.zoom');
    var $previewPic = $preview.find('.default-picture');
    var $thumbs = $gl.find('div.thumbs');
    var $items = $thumbs.find('.carousel__slide');
    var $navButtons = $gl.find('.nav-buttons .map-group .nav-button');
    var $player = $('#player');

    flUtil.loadStyle(rlConfig['libs_url']+'fancyapps/fancybox.css');
    flUtil.loadScript(rlConfig['libs_url']+'fancyapps/fancybox.umd.js', function(){
        $previewPic.click(function(){
            if (!galleryData[index] || galleryData[index].type != 'image') {
                return;
            }

            clearInterval(slideshowTimer);

            openNext();
        });

        $player.on('play', function(){
            clearInterval(slideshowTimer);
        })

        $enlarge.click(function(){
            clearInterval(slideshowTimer);

            if (!galleryData[index]) {
                return true;
            }

            if (['iframe', 'video'].indexOf(galleryData[index].type) >= 0) {
                pauseYoutubeVideo();
            } else if (galleryData[index].type != 'image') {
                $player.get(0).pause();
            }

            Fancybox.show(galleryData, {
                startIndex: index
            });
            return false;
        });

        gCarousel = new Carousel($thumbs.find('> .carousel').get(0), {
            center: true,
            on: {
                ready: function(){
                    $('.carousel__button').click(function(){
                        clearInterval(slideshowTimer);
                    });
                }
            }
        });
    });

    var loadImage = function(obj){
        if (media_query == 'mobile'){
            return false;
        }

        if (index == $items.index(obj)) {
            return false;
        }

        index = $items.index(obj);
        var timer = false;

        $items.removeClass('active');
        $(obj).addClass('active');

        $player.get(0).pause();
        pauseYoutubeVideo();

        // Locked media
        if ($(obj).hasClass('locked')) {
            $preview.attr('class', 'preview');
            $preview.addClass('locked');

            var type_class = $(obj).find('.play').length ? 'fake-video' : 'picture';
            $preview.addClass(type_class);

            return false;
        }

        // Load media
        if (galleryData[index].type == 'image') {
            $preview.attr('class', 'preview');

            timer = setTimeout(function(){
                $(obj).find('img').after(
                    $('<span>', {class: 'img-loading'})
                );
            }, 100);

            var img = new Image();
            img.onload = function(){
                clearTimeout(timer);
                $previewPic.attr('src', galleryData[index].src);

                $(obj).find('.img-loading').fadeOut('normal', function(){
                    $(this).remove();
                });
            }
            img.src = galleryData[index].src;
        } else {
            if (['iframe', 'video'].indexOf(galleryData[index].type) >= 0) {
                $preview.attr('class', 'preview video');
                loadYoutubeVideo(galleryData[index].youtubeKey);
            } else {
                $player.find('source').attr('src', galleryData[index].src);
                $player.load();
                $preview.attr('class', 'preview local');
            }
        }

        return false;
    };

    var pauseYoutubeVideo = function(){
        if (fytPlayer && typeof fytPlayer.pauseVideo == 'function') {
            fytPlayer.pauseVideo();
        }
    }

    var loadYoutubeVideo = function(key){
        if (!fytPlayer) {
            onYouTubeIframeAPIReady = function() {
                fytPlayer = new YT.Player('yt_iframe', {
                    videoId: key,
                    playerVars: {
                        autoplay: 0,
                        rel: 0
                    },
                    events: {
                        'onStateChange': function(e){
                            if (e.data === 1) {
                                clearInterval(slideshowTimer);
                            }
                        }
                    }
                });
            }
        } else {
            fytPlayer.loadVideoById(key);
            fytPlayer.stopVideo();
        }
    }

    var openNext = function(){
        var $next = $items.filter('.active').next();

        if ($next.length) {
            if (!$next.hasClass('is-selected') && gCarousel) {
                gCarousel.slideNext();
            }
            $next.click();
        } else {
            if (gCarousel) {
                gCarousel.slideNext();
            }
            $items.filter('[data-index=0]').click();
        }
    }

    // Thumbnail click handler
    $items.click(function(e){
        $slide = $(this);

        if (e.originalEvent) {
            clearInterval(slideshowTimer);
        }

        if (media_query == 'mobile') {
            if ($(this).hasClass('locked')) {
                flUtil.loadStyle(rlConfig.tpl_base + 'components/popup/popup.css');
                flUtil.loadScript(rlConfig.tpl_base + 'components/popup/_popup.js', function() {
                    if (isLogin) {
                        var content = $('.picture_locked > div').clone(true, true);
                        content.removeClass('hide').addClass('w-100');
                        content.find('.' + $slide.data('media-type') + '-hint').removeClass('hide');
                    } else {
                        var content = $('#login_modal_source > .tmp-dom').clone(true, true);
                    }

                    $('body').popup({
                        caption: isLogin ? lang.change_plan : lang.login,
                        click: false,
                        content: content,
                        width: 320
                    });
                });
            } else {
                Fancybox.show(galleryData, {
                    startIndex: $items.index(this)
                });
            }
        } else {
            return loadImage(this);
        }
    });

    // Nav buttons click handler
    $navButtons.click(function(){
        var view = $(this).attr('class').replace('nav-button ', '');
        $media.attr('data-view', view).attr('class', view);

        if (view == 'map' && !mapLoaded) {
            flUtil.loadStyle(rlConfig['mapAPI']['css']);
            flUtil.loadScript(rlConfig['mapAPI']['js'], function(){
                flMap.init($('div.listing-details div.map-container'), {
                    control: 'topleft',
                    zoom: {/literal}{$config.map_default_zoom}{literal},
                    addresses: [{
                        latLng: '{/literal}{$location.direct}',
                        content: '{$location.show}{literal}'
                    }]
                });
            });
            mapLoaded = true;
        }

        return false;
    });

    // Initial Youtube video
    $.getScript('https://www.youtube.com/iframe_api');
    loadYoutubeVideo(galleryData[index].youtubeKey);

    // Slideshow
    if (galleryData.length && rlConfig.gallery_slideshow && media_query != 'mobile') {
        slideshowTimer = setInterval(function(){
            if (media_query == 'mobile') {
                clearInterval(slideshowTimer);
                return;
            }

            openNext();
        }, rlConfig.gallery_slideshow_delay * 1000);
    }
});

{/literal}
</script>

<!-- listing picture gallery tpl end -->
