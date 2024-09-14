<!-- listing picture wide gallery tpl -->

{if $listing_type.Photo && $photos && $listing_type.Escort_Type == 'single'}
    <div class="wide-gallery">
        <div class="carousel has-dots">
            <div class="carousel__viewport">
                <div class="carousel__track {if $photos|@count <= 2} justify-content-center{/if} d-flex">
                    {foreach from=$photos item='photo' name='photosF'}
                        <div class="carousel__slide{if $photo.Type == 'video'} video-slide{else} picture-slide{/if}{if !$allow_photos && !$smarty.foreach.photosF.first} locked{/if}">
                        {if $photo.Type == 'video'}
                            {if $allow_photos || $smarty.foreach.photosF.first}
                                {if $photo.Original == 'youtube'}
                                    <img src="{$rlTplBase}img/blank16x10.gif" />
                                    <div class="youtube-wrapper" data-youtube-key="{$photo.youtube_key}" id="youtube_embed_{$smarty.foreach.photosF.index}"></div>
                                {else}
                                    <img src="{$rlTplBase}img/blank16x10.gif" />
                                    <video controls id="local_video_{$smarty.foreach.photosF.index}">
                                        <source src="{$photo.href}" type="video/mp4">
                                    </video>
                                {/if}
                            {else}
                                <img alt="" src="{$rlTplBase}img/blank_10x7.gif" />
                            {/if}
                        {else}
                            <img alt="{if $photo.Description}{$photo.Description}{else}{$pageInfo.name}{/if}"
                                 title="{if $photo.Description}{$photo.Description}{else}{$pageInfo.name}{/if}"
                                 src="{if $allow_photos || $smarty.foreach.photosF.first}{$photo.Photo}{else}{$rlTplBase}img/blank_10x7.gif{/if}" />
                        {/if}

                        {if !$allow_photos && !$smarty.foreach.photosF.first}
                            <div class="picture_locked">
                                <div>
                                    <div class="restricted-content d-flex flex-column align-items-center">
                                    <img src="{$rlTplBase}img/blank.gif" />
                                    {if $isLogin}
                                        <p class="pl-3 pr-3">{if $photo.Type == 'video'}{$lang.watch_video_not_available}{else}{$lang.view_picture_not_available}{/if}</p>
                                        <span>
                                            <a class="button" title="{$lang.registration}" href="{pageUrl key='my_profile'}#membership">{$lang.change_plan}</a>
                                        </span>
                                    {else}
                                        <p class="pl-3 pr-3">{if $photo.Type == 'video'}{$lang.watch_video_hint}{else}{$lang.view_picture_hint}{/if}</p>
                                        <span>
                                            <a href="javascript://" class="button login">{$lang.sign_in}</a> <span>{$lang.or}</span> <a title="{$lang.registration}" href="{pageUrl key='registration'}">{$lang.sign_up}</a>
                                        </span>
                                    {/if}
                                    </div>
                                </div>
                            </div>
                        {else}
                            {rlHook name='tplListingDetailsGalleryPreview'}
                        {/if}
                        </div>
                    {/foreach}
                </div>
            </div>
        </div>
    </div>

    <script class="fl-js-dynamic">
    {literal}

    $(function(){
        flUtil.loadStyle(rlConfig['libs_url']+'fancyapps/carousel.css');
        flUtil.loadScript(rlConfig['libs_url']+'fancyapps/carousel.umd.js', function(){
            var players = [];
            var $wideGallery = $('.wide-gallery');

            var gCarousel = new Carousel($wideGallery.find('> .carousel').get(0), {
                center: true,
                on: {
                    init: (carousel) => {
                        $wideGallery.find('.carousel__track').removeClass('justify-content-center');
                    }
                }
            });

            var stopAllVideoExcept = function(index){
                for (var i in players) {
                    if (i != index) {
                        if (typeof players[i].stopVideo == 'function') {
                            players[i].stopVideo();
                        } else {
                            players[i].pause();
                        }
                    }
                }
            }
            var loadYoutubeVideo = function(id, key){
                let index = parseInt(id.split('_')[2]);

                players[index] = new YT.Player(id, {
                    videoId: key,
                    playerVars: {
                        autoplay: 0,
                        rel: 0
                    },
                    events: {
                        'onStateChange': function(e){
                            if (e.data === 1) {
                                stopAllVideoExcept(index);
                            }
                        }
                    }
                });
            }

            $.getScript('https://www.youtube.com/iframe_api');

            onYouTubeIframeAPIReady = function(){
                $wideGallery.find('.carousel__slide:not(.locked) .youtube-wrapper').each(function(){
                    loadYoutubeVideo($(this).attr('id'), $(this).data('youtube-key'));
                });
            };

            $wideGallery.find('.carousel__slide:not(.locked) video').each(function(){
                let index = parseInt($(this).attr('id').split('_')[2]);
                players[index] = $(this).get(0);

                players[index].addEventListener('play', (event) => {
                    stopAllVideoExcept(index);
                });
            });
        });
    });

    {/literal}
    </script>
{/if}

<!-- listing picture wide gallery tpl -->
