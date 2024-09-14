<?php /* Smarty version 2.6.31, created on 2024-04-26 02:14:44
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/components/listing-details-gallery/_listing-details-gallery.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'pageUrl', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/components/listing-details-gallery/_listing-details-gallery.tpl', 25, false),array('function', 'rlHook', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/components/listing-details-gallery/_listing-details-gallery.tpl', 39, false),array('modifier', 'count', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/components/listing-details-gallery/_listing-details-gallery.tpl', 60, false),array('modifier', 'escape', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/components/listing-details-gallery/_listing-details-gallery.tpl', 94, false),)), $this); ?>
<!-- listing picture gallery tpl -->

<div class="gallery position-relative">
    <div id="media" data-view="gallery">
        <div class="preview<?php if ($this->_tpl_vars['photos']['0']['Type'] == 'video'): ?> <?php if ($this->_tpl_vars['photos']['0']['Original'] == 'youtube'): ?>video<?php else: ?>local<?php endif; ?><?php endif; ?>">
            <div class="iframe" id="yt_iframe"></div>

            <video id="player" controls>
                <source src="<?php if ($this->_tpl_vars['photos']['0']['Type'] == 'video' && $this->_tpl_vars['photos']['0']['Original'] != 'youtube'): ?><?php echo $this->_tpl_vars['photos']['0']['Original']; ?>
<?php endif; ?>" type="video/mp4"></source>
            </video>

            <img class="default-picture"
                 title="<?php if ($this->_tpl_vars['photos']['0']['Description']): ?><?php echo $this->_tpl_vars['photos']['0']['Description']; ?>
<?php else: ?><?php echo $this->_tpl_vars['pageInfo']['name']; ?>
<?php endif; ?>"
                 src="<?php if ($this->_tpl_vars['photos']['0']['Photo']): ?><?php echo $this->_tpl_vars['photos']['0']['Photo']; ?>
<?php else: ?><?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif<?php endif; ?>" />

            <?php if (! $this->_tpl_vars['allow_photos']): ?>
                <div class="picture_locked hide">
                    <div>
                        <div class="restricted-content text-center">
                            <img class="locked-media" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" />
                            <?php if ($this->_tpl_vars['isLogin']): ?>
                                <p class="picture-hint hide"><?php echo $this->_tpl_vars['lang']['view_picture_not_available']; ?>
</p>
                                <p class="video-hint hide"><?php echo $this->_tpl_vars['lang']['watch_video_not_available']; ?>
</p>
                                <span>
                                    <a class="button" title="<?php echo $this->_tpl_vars['lang']['registration']; ?>
" href="<?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'my_profile'), $this);?>
#membership"><?php echo $this->_tpl_vars['lang']['change_plan']; ?>
</a>
                                </span>
                            <?php else: ?>
                                <p class="picture-hint hide"><?php echo $this->_tpl_vars['lang']['view_picture_hint']; ?>
</p>
                                <p class="video-hint hide"><?php echo $this->_tpl_vars['lang']['watch_video_hint']; ?>
</p>
                                <span>
                                    <a href="javascript://" class="button login"><?php echo $this->_tpl_vars['lang']['sign_in']; ?>
</a> <span><?php echo $this->_tpl_vars['lang']['or']; ?>
</span> <a title="<?php echo $this->_tpl_vars['lang']['registration']; ?>
" href="<?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'registration'), $this);?>
"><?php echo $this->_tpl_vars['lang']['sign_up']; ?>
</a>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'tplListingDetailsPhotoPreview'), $this);?>

        </div>

        <div class="map-container"></div>

        <?php if ($this->_tpl_vars['noNavBar']): ?>
            <span class="media-enlarge"><span></span></span>
        <?php else: ?>
            <div class="nav-buttons">
                <span class="nav-button zoom"><?php echo $this->_tpl_vars['lang']['view_larger']; ?>
</span>
                <span class="map-group">
                    <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'tplListingDetailsMapButtons'), $this);?>

                    <span class="nav-button gallery"><?php echo $this->_tpl_vars['lang']['gallery']; ?>
</span>
                    <?php if ($this->_tpl_vars['config']['map_module'] && $this->_tpl_vars['location']['direct']): ?>
                        <span class="nav-button map"><?php echo $this->_tpl_vars['lang']['map']; ?>
</span>
                    <?php endif; ?>
                </span>
            </div>
        <?php endif; ?>
    </div>

    <div class="thumbs<?php if (count($this->_tpl_vars['photos']) == 1): ?> hide<?php endif; ?>">
        <div class="carousel has-dots">
            <div class="carousel__viewport">
                <div class="carousel__track d-flex">
                    <?php $_from = $this->_tpl_vars['photos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['photosF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['photosF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['photo']):
        $this->_foreach['photosF']['iteration']++;
?>
                    <div class="carousel__slide<?php if (($this->_foreach['photosF']['iteration'] <= 1)): ?> active<?php endif; ?><?php if (! $this->_tpl_vars['allow_photos'] && ! ($this->_foreach['photosF']['iteration'] <= 1)): ?> locked<?php endif; ?>" data-media-type="<?php echo $this->_tpl_vars['photo']['Type']; ?>
">
                        <?php if (( ( ! $this->_tpl_vars['allow_photos'] && ($this->_foreach['photosF']['iteration'] <= 1) ) || $this->_tpl_vars['allow_photos'] ) && $this->_tpl_vars['photo']['Type'] == 'video' && $this->_tpl_vars['photo']['Original'] != 'youtube'): ?>
                            <video><source src="<?php echo $this->_tpl_vars['photo']['Original']; ?>
" type="video/mp4"></source></video>
                        <?php else: ?>
                            <img alt="<?php if ($this->_tpl_vars['photo']['Description']): ?><?php echo $this->_tpl_vars['photo']['Description']; ?>
<?php else: ?><?php echo $this->_tpl_vars['pageInfo']['name']; ?>
<?php endif; ?>"
                                 src="<?php if ($this->_tpl_vars['photo']['Thumbnail'] && ( $this->_tpl_vars['allow_photos'] || ($this->_foreach['photosF']['iteration'] <= 1) )): ?><?php echo $this->_tpl_vars['photo']['Thumbnail']; ?>
<?php else: ?><?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif<?php endif; ?>"
                                 <?php if ($this->_tpl_vars['photo']['Thumbnail_x2'] && ( $this->_tpl_vars['allow_photos'] || ($this->_foreach['photosF']['iteration'] <= 1) )): ?>srcset="<?php echo $this->_tpl_vars['photo']['Thumbnail_x2']; ?>
 2x"<?php endif; ?> />
                        <?php endif; ?>

                        <?php if ($this->_tpl_vars['photo']['Type'] == 'video'): ?><span class="play"></span><?php endif; ?>
                    </div>
                    <?php endforeach; endif; unset($_from); ?>
                </div>
            </div>
        </div>
    </div>

    <script>
    let galleryData = [];

    <?php $_from = $this->_tpl_vars['photos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['photosF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['photosF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['photo']):
        $this->_foreach['photosF']['iteration']++;
?>
        <?php if (! ($this->_foreach['photosF']['iteration'] <= 1) && ! $this->_tpl_vars['allow_photos']): ?>
            <?php break; ?>
        <?php endif; ?>

        galleryData.push(<?php echo '{'; ?>

            type: '<?php if ($this->_tpl_vars['photo']['Type'] == 'video'): ?><?php if ($this->_tpl_vars['photo']['Original'] == 'youtube'): ?>iframe<?php else: ?>html5video<?php endif; ?><?php else: ?>image<?php endif; ?>',
            src: '<?php if ($this->_tpl_vars['photo']['Type'] == 'video'): ?><?php if ($this->_tpl_vars['photo']['Original'] == 'youtube'): ?>https://www.youtube.com/embed/<?php echo $this->_tpl_vars['photo']['youtube_key']; ?>
?rel=0<?php else: ?><?php echo $this->_tpl_vars['photo']['Original']; ?>
<?php endif; ?><?php else: ?><?php echo $this->_tpl_vars['photo']['Photo']; ?>
<?php endif; ?>',
            thumb: '<?php if ($this->_tpl_vars['photo']['Thumbnail_x2']): ?><?php echo $this->_tpl_vars['photo']['Thumbnail_x2']; ?>
<?php elseif ($this->_tpl_vars['photo']['Thumbnail']): ?><?php echo $this->_tpl_vars['photo']['Thumbnail']; ?>
<?php else: ?><?php echo $this->_tpl_vars['rlTplBase']; ?>
img/play.svg<?php endif; ?>',
            caption: "<?php if ($this->_tpl_vars['photo']['Description']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['photo']['Description'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['pageInfo']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
<?php endif; ?>",
            youtubeKey: "<?php if ($this->_tpl_vars['photo']['Type'] == 'video' && $this->_tpl_vars['photo']['Original'] == 'youtube'): ?><?php echo $this->_tpl_vars['photo']['youtube_key']; ?>
<?php endif; ?>",
        <?php echo '}'; ?>
);
    <?php endforeach; endif; unset($_from); ?>

    </script>
</div>

<script class="fl-js-dynamic">
lang.change_plan = "<?php echo $this->_tpl_vars['lang']['change_plan']; ?>
";
rlConfig.gallery_slideshow = <?php if ($this->_tpl_vars['config']['gallery_slideshow'] && $this->_tpl_vars['allow_photos']): ?>true<?php else: ?>false<?php endif; ?>;
rlConfig.gallery_slideshow_delay = <?php if ($this->_tpl_vars['config']['gallery_slideshow_delay']): ?><?php echo $this->_tpl_vars['config']['gallery_slideshow_delay']; ?>
<?php else: ?>5<?php endif; ?>;
<?php echo '

var onYouTubeIframeAPIReady = function(){};

$(function(){
    var index = 0;
    var slideshowTimer = false;
    var gCarousel = false;
    var mapLoaded = false;
    var fytPlayer = null;

    var $gl = $(\'div.gallery\');
    var $media = $(\'#media\');
    var $preview = $(\'.listing-details .gallery div.preview\');
    var $enlarge = $gl.find(\'.media-enlarge,.nav-button.zoom\');
    var $previewPic = $preview.find(\'.default-picture\');
    var $thumbs = $gl.find(\'div.thumbs\');
    var $items = $thumbs.find(\'.carousel__slide\');
    var $navButtons = $gl.find(\'.nav-buttons .map-group .nav-button\');
    var $player = $(\'#player\');

    flUtil.loadStyle(rlConfig[\'libs_url\']+\'fancyapps/fancybox.css\');
    flUtil.loadScript(rlConfig[\'libs_url\']+\'fancyapps/fancybox.umd.js\', function(){
        $previewPic.click(function(){
            if (!galleryData[index] || galleryData[index].type != \'image\') {
                return;
            }

            clearInterval(slideshowTimer);

            openNext();
        });

        $player.on(\'play\', function(){
            clearInterval(slideshowTimer);
        })

        $enlarge.click(function(){
            clearInterval(slideshowTimer);

            if (!galleryData[index]) {
                return true;
            }

            if ([\'iframe\', \'video\'].indexOf(galleryData[index].type) >= 0) {
                pauseYoutubeVideo();
            } else if (galleryData[index].type != \'image\') {
                $player.get(0).pause();
            }

            Fancybox.show(galleryData, {
                startIndex: index
            });
            return false;
        });

        gCarousel = new Carousel($thumbs.find(\'> .carousel\').get(0), {
            center: true,
            on: {
                ready: function(){
                    $(\'.carousel__button\').click(function(){
                        clearInterval(slideshowTimer);
                    });
                }
            }
        });
    });

    var loadImage = function(obj){
        if (media_query == \'mobile\'){
            return false;
        }

        if (index == $items.index(obj)) {
            return false;
        }

        index = $items.index(obj);
        var timer = false;

        $items.removeClass(\'active\');
        $(obj).addClass(\'active\');

        $player.get(0).pause();
        pauseYoutubeVideo();

        // Locked media
        if ($(obj).hasClass(\'locked\')) {
            $preview.attr(\'class\', \'preview\');
            $preview.addClass(\'locked\');

            var type_class = $(obj).find(\'.play\').length ? \'fake-video\' : \'picture\';
            $preview.addClass(type_class);

            return false;
        }

        // Load media
        if (galleryData[index].type == \'image\') {
            $preview.attr(\'class\', \'preview\');

            timer = setTimeout(function(){
                $(obj).find(\'img\').after(
                    $(\'<span>\', {class: \'img-loading\'})
                );
            }, 100);

            var img = new Image();
            img.onload = function(){
                clearTimeout(timer);
                $previewPic.attr(\'src\', galleryData[index].src);

                $(obj).find(\'.img-loading\').fadeOut(\'normal\', function(){
                    $(this).remove();
                });
            }
            img.src = galleryData[index].src;
        } else {
            if ([\'iframe\', \'video\'].indexOf(galleryData[index].type) >= 0) {
                $preview.attr(\'class\', \'preview video\');
                loadYoutubeVideo(galleryData[index].youtubeKey);
            } else {
                $player.find(\'source\').attr(\'src\', galleryData[index].src);
                $player.load();
                $preview.attr(\'class\', \'preview local\');
            }
        }

        return false;
    };

    var pauseYoutubeVideo = function(){
        if (fytPlayer && typeof fytPlayer.pauseVideo == \'function\') {
            fytPlayer.pauseVideo();
        }
    }

    var loadYoutubeVideo = function(key){
        if (!fytPlayer) {
            onYouTubeIframeAPIReady = function() {
                fytPlayer = new YT.Player(\'yt_iframe\', {
                    videoId: key,
                    playerVars: {
                        autoplay: 0,
                        rel: 0
                    },
                    events: {
                        \'onStateChange\': function(e){
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
        var $next = $items.filter(\'.active\').next();

        if ($next.length) {
            if (!$next.hasClass(\'is-selected\') && gCarousel) {
                gCarousel.slideNext();
            }
            $next.click();
        } else {
            if (gCarousel) {
                gCarousel.slideNext();
            }
            $items.filter(\'[data-index=0]\').click();
        }
    }

    // Thumbnail click handler
    $items.click(function(e){
        $slide = $(this);

        if (e.originalEvent) {
            clearInterval(slideshowTimer);
        }

        if (media_query == \'mobile\') {
            if ($(this).hasClass(\'locked\')) {
                flUtil.loadStyle(rlConfig.tpl_base + \'components/popup/popup.css\');
                flUtil.loadScript(rlConfig.tpl_base + \'components/popup/_popup.js\', function() {
                    if (isLogin) {
                        var content = $(\'.picture_locked > div\').clone(true, true);
                        content.removeClass(\'hide\').addClass(\'w-100\');
                        content.find(\'.\' + $slide.data(\'media-type\') + \'-hint\').removeClass(\'hide\');
                    } else {
                        var content = $(\'#login_modal_source > .tmp-dom\').clone(true, true);
                    }

                    $(\'body\').popup({
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
        var view = $(this).attr(\'class\').replace(\'nav-button \', \'\');
        $media.attr(\'data-view\', view).attr(\'class\', view);

        if (view == \'map\' && !mapLoaded) {
            flUtil.loadStyle(rlConfig[\'mapAPI\'][\'css\']);
            flUtil.loadScript(rlConfig[\'mapAPI\'][\'js\'], function(){
                flMap.init($(\'div.listing-details div.map-container\'), {
                    control: \'topleft\',
                    zoom: '; ?>
<?php echo $this->_tpl_vars['config']['map_default_zoom']; ?>
<?php echo ',
                    addresses: [{
                        latLng: \''; ?>
<?php echo $this->_tpl_vars['location']['direct']; ?>
',
                        content: '<?php echo $this->_tpl_vars['location']['show']; ?>
<?php echo '\'
                    }]
                });
            });
            mapLoaded = true;
        }

        return false;
    });

    // Initial Youtube video
    $.getScript(\'https://www.youtube.com/iframe_api\');
    loadYoutubeVideo(galleryData[index].youtubeKey);

    // Slideshow
    if (galleryData.length && rlConfig.gallery_slideshow && media_query != \'mobile\') {
        slideshowTimer = setInterval(function(){
            if (media_query == \'mobile\') {
                clearInterval(slideshowTimer);
                return;
            }

            openNext();
        }, rlConfig.gallery_slideshow_delay * 1000);
    }
});

'; ?>

</script>

<!-- listing picture gallery tpl end -->