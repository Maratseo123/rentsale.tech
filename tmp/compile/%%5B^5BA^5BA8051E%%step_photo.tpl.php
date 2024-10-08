<?php /* Smarty version 2.6.31, created on 2023-12-18 01:51:12
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/add_listing/step_photo.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'addJS', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/add_listing/step_photo.tpl', 3, false),array('function', 'buildFormAction', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/add_listing/step_photo.tpl', 69, false),array('function', 'buildPrevStepURL', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/add_listing/step_photo.tpl', 73, false),array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/add_listing/step_photo.tpl', 3, false),array('modifier', 'strpos', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/controllers/add_listing/step_photo.tpl', 92, false),)), $this); ?>
<!-- add picture step -->

<?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=(defined('RL_LIBS_URL') ? @RL_LIBS_URL : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'jquery/upload/jquery.ui.widget.js') : smarty_modifier_cat($_tmp, 'jquery/upload/jquery.ui.widget.js'))), $this);?>

<?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=(defined('RL_LIBS_URL') ? @RL_LIBS_URL : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'jquery/upload/load-image.all.min.js') : smarty_modifier_cat($_tmp, 'jquery/upload/load-image.all.min.js'))), $this);?>

<?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=(defined('RL_LIBS_URL') ? @RL_LIBS_URL : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'jquery/upload/canvas-to-blob.min.js') : smarty_modifier_cat($_tmp, 'jquery/upload/canvas-to-blob.min.js'))), $this);?>


<?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=(defined('RL_LIBS_URL') ? @RL_LIBS_URL : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'jquery/upload/jquery.iframe-transport.js') : smarty_modifier_cat($_tmp, 'jquery/upload/jquery.iframe-transport.js'))), $this);?>

<?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=(defined('RL_LIBS_URL') ? @RL_LIBS_URL : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'jquery/upload/jquery.fileupload.js') : smarty_modifier_cat($_tmp, 'jquery/upload/jquery.fileupload.js'))), $this);?>

<?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=(defined('RL_LIBS_URL') ? @RL_LIBS_URL : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'jquery/upload/jquery.fileupload-process.js') : smarty_modifier_cat($_tmp, 'jquery/upload/jquery.fileupload-process.js'))), $this);?>

<?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=(defined('RL_LIBS_URL') ? @RL_LIBS_URL : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'jquery/upload/jquery.fileupload-image.js') : smarty_modifier_cat($_tmp, 'jquery/upload/jquery.fileupload-image.js'))), $this);?>

<?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=(defined('RL_LIBS_URL') ? @RL_LIBS_URL : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'jquery/upload/jquery.fileupload-video.js') : smarty_modifier_cat($_tmp, 'jquery/upload/jquery.fileupload-video.js'))), $this);?>

<?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=(defined('RL_LIBS_URL') ? @RL_LIBS_URL : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'jquery/upload/jquery.fileupload-validate.js') : smarty_modifier_cat($_tmp, 'jquery/upload/jquery.fileupload-validate.js'))), $this);?>

<?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=(defined('RL_LIBS_URL') ? @RL_LIBS_URL : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'jquery/upload/jquery.fileupload-ui.js') : smarty_modifier_cat($_tmp, 'jquery/upload/jquery.fileupload-ui.js'))), $this);?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => '../img/svg/rotate.svg', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form id="fileupload">
    <div class="upload-zone">
        <input type="file" name="files[]" multiple />
        <span class="flex-wrap"><?php echo $this->_tpl_vars['lang']['drag_drop_or_browse_file']; ?>
</span>
    </div>

    <div class="upload-stat">
        <?php if ($this->_tpl_vars['manageListing']->singleStep && ! $this->_tpl_vars['manageListing']->planID): ?>
            <?php echo $this->_tpl_vars['lang']['single_step_select_plan']; ?>

        <?php else: ?>
            <?php if ($this->_tpl_vars['plan_info']['Image_unlim'] && $this->_tpl_vars['plan_info']['Video_unlim']): ?>
                <?php if ($this->_tpl_vars['is_video']): ?>
                    <span class="add-video-link link"><?php echo $this->_tpl_vars['lang']['add_video_link']; ?>
</span>
                <?php endif; ?>
            <?php else: ?>
                <?php if ($this->_tpl_vars['is_picture']): ?>
                    <?php if ($this->_tpl_vars['plan_info']['Image_unlim']): ?>
                        <?php echo $this->_tpl_vars['lang']['unlimited_pictures']; ?>

                    <?php else: ?>
                        <span id="pic_counter"><?php if ($this->_tpl_vars['plan_info']['Image']): ?><?php echo $this->_tpl_vars['plan_info']['Image']; ?>
<?php else: ?>0<?php endif; ?></span>
                        <?php echo $this->_tpl_vars['lang']['photo']; ?>

                    <?php endif; ?>
                <?php endif; ?>

                <?php if ($this->_tpl_vars['is_picture'] && $this->_tpl_vars['is_video']): ?>/<?php endif; ?>

                <?php if ($this->_tpl_vars['is_video']): ?>
                    <?php if ($this->_tpl_vars['plan_info']['Video_unlim']): ?>
                        <?php echo $this->_tpl_vars['lang']['unlimited_videos']; ?>

                    <?php else: ?>
                        <span id="video_counter"><?php if ($this->_tpl_vars['plan_info']['Video']): ?><?php echo $this->_tpl_vars['plan_info']['Video']; ?>
<?php else: ?>0<?php endif; ?></span>
                        <?php echo $this->_tpl_vars['lang']['video']; ?>

                    <?php endif; ?>

                    <?php echo $this->_tpl_vars['lang']['or']; ?>


                    <span class="add-video-link link"><?php echo $this->_tpl_vars['lang']['add_video_link']; ?>
</span>
                <?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>
    </div>

    <div class="upload-files row"></div>

    <?php if (! $this->_tpl_vars['config']['img_auto_upload']): ?>
        <div class="fileupload-buttonbar hide">
            <input id="start_upload" type="button" class="start disabled" value="<?php echo $this->_tpl_vars['lang']['upload']; ?>
" data-default-value="<?php echo $this->_tpl_vars['lang']['upload']; ?>
" />
        </div>
    <?php endif; ?>
</form>

<?php if (! $this->_tpl_vars['manageListing']->singleStep): ?>
    <form method="post" action="<?php echo $this->_plugins['function']['buildFormAction'][0][0]->buildFormAction(array(), $this);?>
">
        <input type="hidden" name="step" value="photo" />

        <div class="form-buttons">
            <a href="<?php echo $this->_plugins['function']['buildPrevStepURL'][0][0]->buildPrevStepURL(array(), $this);?>
">
                <?php echo $this->_tpl_vars['lang']['perv_step']; ?>

            </a>
            <input type="submit" value="<?php echo $this->_tpl_vars['lang']['next_step']; ?>
" data-default-phrase="<?php echo $this->_tpl_vars['lang']['next_step']; ?>
" />
        </div>
    </form>
<?php endif; ?>

<script id="manage_photo_dom" type="text/fl-dom">
    <div class="manage-photo-description light-inputs">
        <div class="two-inline">
            <div><input name="photo-desc-save" type="button" value="<?php echo $this->_tpl_vars['lang']['save']; ?>
" /></div>
            <div><input placeholder="<?php echo $this->_tpl_vars['lang']['description']; ?>
" name="photo-desc" type="text" value="" /></div>
        </div>
    </div>
</script>

<?php $this->assign('column_model', 'col-xs-6'); ?>
<?php if ($this->_tpl_vars['side_bar_exists']): ?>
    <?php $this->assign('flatty_offset', ((is_array($_tmp=$this->_tpl_vars['tpl_settings']['name'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '_flatty') : strpos($_tmp, '_flatty'))); ?>
    <?php if (( $this->_tpl_vars['flatty_offset'] + 7 ) == strlen ( $this->_tpl_vars['tpl_settings']['name'] )): ?>
        <?php $this->assign('column_model', ((is_array($_tmp='col-sm-6 ')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['column_model']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['column_model']))); ?>
    <?php else: ?>
        <?php $this->assign('column_model', ((is_array($_tmp='col-sm-4 ')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['column_model']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['column_model']))); ?>
    <?php endif; ?>
<?php else: ?>
    <?php $this->assign('column_model', ((is_array($_tmp='col-lg-3 col-sm-4 ')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['column_model']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['column_model']))); ?>
<?php endif; ?>

<script id="uploaded_picture" type="text/x-jsrender">
    <div class="picture-cont <?php echo $this->_tpl_vars['column_model']; ?>
 [%:Type%][%if Original == 'youtube'%] youtube[%/if%][%if error%] template-upload file-error[%/if%]" data-id="[%:ID%]">
        <span>
            <span class="item">
                [%if error %]
                    <div class="error"><span><?php echo $this->_tpl_vars['lang']['error']; ?>
</span> [%:error%]</div>
                [%else%]
                    [%if Type == 'picture'%]
                        <img class="thumbnail" src="[%:Thumbnail%]" />
                    [%else%]
                        [%if Original == 'youtube' || Thumbnail%]
                            <img class="thumbnail" src="[%:Thumbnail%]" />
                        [%else%]
                            <video src="[%:Original%]" controls></video>
                        [%/if%]
                    [%/if%]
                [%/if%]
            </span>
            <nav class="icons" data-loading="<?php echo $this->_tpl_vars['lang']['loading']; ?>
">
                [%if !error %]
                    <svg viewBox="0 0 17 17" class="icon rotate">
                        <title><?php echo $this->_tpl_vars['lang']['rotate_picture']; ?>
</title>
                        <use xlink:href="#rotate-picture-icon"></use>
                    </svg>
                    <?php if ($this->_tpl_vars['config']['img_crop_interface']): ?>
                        <img class="icon crop" alt="<?php echo $this->_tpl_vars['lang']['crop_photo']; ?>
" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" />
                    <?php endif; ?>
                    <img class="icon manage" alt="<?php echo $this->_tpl_vars['lang']['manage_description']; ?>
" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" />
                [%/if%]
                <img class="icon[%if error%] cancel[%/if%] delete" alt="<?php echo $this->_tpl_vars['lang']['delete']; ?>
" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" />
                <textarea class="hide">[%:Description%]</textarea>
            </nav>
        </span>
    </div>
</script>

<script id="preview_picture" type="text/x-jsrender">
    <div class="picture-cont <?php echo $this->_tpl_vars['column_model']; ?>
 template-upload [%:itemType%]">
        <span>
            <span class="item">
                <span class="preview">
                    <span class="prepare"><?php echo $this->_tpl_vars['lang']['picture_preparing']; ?>
</span>
                </span>
                <span class="progress"><span class="progress-bar"></span></span>
            </span>
            <nav class="icons">
                <img class="icon cancel delete" alt="<?php echo $this->_tpl_vars['lang']['delete']; ?>
" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" />
                <img class="hide start" />
            </nav>
        </span>
    </div>
</script>

<script>
rlConfig['mediaManager'] = false;
rlConfig['img_crop_module'] = <?php echo $this->_tpl_vars['config']['img_crop_module']; ?>
;
rlConfig['img_crop_thumbnail'] = <?php echo $this->_tpl_vars['config']['img_crop_thumbnail']; ?>
;
rlConfig['pg_upload_large_width'] = <?php echo $this->_tpl_vars['config']['pg_upload_large_width']; ?>
;
rlConfig['pg_upload_large_height'] = <?php echo $this->_tpl_vars['config']['pg_upload_large_height']; ?>
;
rlConfig['pg_upload_thumbnail_width'] = <?php if ($this->_tpl_vars['config']['pg_upload_thumbnail_width']): ?><?php echo $this->_tpl_vars['config']['pg_upload_thumbnail_width']; ?>
<?php else: ?>120<?php endif; ?>;
rlConfig['pg_upload_thumbnail_height'] = <?php if ($this->_tpl_vars['config']['pg_upload_thumbnail_height']): ?><?php echo $this->_tpl_vars['config']['pg_upload_thumbnail_height']; ?>
<?php else: ?>90<?php endif; ?>;
rlConfig['current_plan_name'] = '<?php echo $this->_tpl_vars['plan_info']['name']; ?>
';
rlConfig['media_required'] = <?php if ($this->_tpl_vars['manageListing']->listingType['Photo_required']): ?>true<?php else: ?>false<?php endif; ?>;
rlConfig['single_step'] = <?php if ($this->_tpl_vars['manageListing']->singleStep): ?>true<?php else: ?>false<?php endif; ?>;
rlConfig['current_listing_id'] = <?php if ($this->_tpl_vars['manageListing']->listingID): ?><?php echo $this->_tpl_vars['manageListing']->listingID; ?>
<?php else: ?>0<?php endif; ?>;
rlConfig['current_listing_type'] = [];
<?php if ($this->_tpl_vars['manageListing']->listingType): ?>
rlConfig['current_listing_type']['Photo'] = '<?php echo $this->_tpl_vars['manageListing']->listingType['Photo']; ?>
';
rlConfig['current_listing_type']['Video'] = '<?php echo $this->_tpl_vars['manageListing']->listingType['Video']; ?>
';
rlConfig['current_listing_type']['Key'] = '<?php echo $this->_tpl_vars['manageListing']->listingType['Key']; ?>
';
<?php endif; ?>

lang['notice_description_saved'] = '<?php echo $this->_tpl_vars['lang']['notice_description_saved']; ?>
';
lang['error_wrong_file_type'] = '<?php echo $this->_tpl_vars['lang']['error_wrong_file_type']; ?>
';
lang['no_photo_uploaded'] = '<?php echo $this->_tpl_vars['lang']['no_photo_uploaded']; ?>
';
lang['no_more_photos'] = '<?php echo $this->_tpl_vars['lang']['no_more_photos']; ?>
';
lang['no_more_videos'] = '<?php echo $this->_tpl_vars['lang']['no_more_videos']; ?>
';
lang['link_or_embed'] = '<?php echo $this->_tpl_vars['lang']['link_or_embed']; ?>
';
lang['notice_field_empty'] = '<?php echo $this->_tpl_vars['lang']['notice_field_empty']; ?>
';
lang['notice_field_not_valid'] = '<?php echo $this->_tpl_vars['lang']['notice_field_not_valid']; ?>
';
lang['crop_photo'] = '<?php echo $this->_tpl_vars['lang']['crop_photo']; ?>
';
lang['add'] = '<?php echo $this->_tpl_vars['lang']['add']; ?>
';
lang['save'] = '<?php echo $this->_tpl_vars['lang']['save']; ?>
';
lang['crop_completed'] = '<?php echo $this->_tpl_vars['lang']['crop_completed']; ?>
';
lang['single_step_select_plan'] = '<?php echo $this->_tpl_vars['lang']['single_step_select_plan']; ?>
';
lang['add_video_link'] = '<?php echo $this->_tpl_vars['lang']['add_video_link']; ?>
';
lang['unlimited_pictures'] = '<?php echo $this->_tpl_vars['lang']['unlimited_pictures']; ?>
';
lang['unlimited_videos'] = '<?php echo $this->_tpl_vars['lang']['unlimited_videos']; ?>
';
lang['photo'] = '<?php echo $this->_tpl_vars['lang']['photo']; ?>
';
lang['video'] = '<?php echo $this->_tpl_vars['lang']['video']; ?>
';
lang['or'] = '<?php echo $this->_tpl_vars['lang']['or']; ?>
';
lang['error_listing_type_picture_restricted'] = '<?php echo $this->_tpl_vars['lang']['error_listing_type_picture_restricted']; ?>
';
lang['error_listing_type_video_restricted'] = '<?php echo $this->_tpl_vars['lang']['error_listing_type_video_restricted']; ?>
';
lang['unsaved_photos_notice'] = '<?php echo $this->_tpl_vars['lang']['unsaved_photos_notice']; ?>
';
</script>

<script class="fl-js-dynamic" data-dependency-before="single-step">
<?php echo '

var flMediaManager = function(){
    '; ?>

    var auto_upload = <?php if ($this->_tpl_vars['config']['img_auto_upload']): ?>true<?php else: ?>false<?php endif; ?>;
    this.number = <?php echo ' { '; ?>

        picture: <?php if ($this->_tpl_vars['is_picture']): ?><?php if ($this->_tpl_vars['plan_info']['Image_unlim']): ?>true<?php else: ?><?php echo $this->_tpl_vars['plan_info']['Image']; ?>
<?php endif; ?><?php else: ?>false<?php endif; ?>,
        video: <?php if ($this->_tpl_vars['is_video']): ?><?php if ($this->_tpl_vars['plan_info']['Video_unlim']): ?>true<?php else: ?><?php echo $this->_tpl_vars['plan_info']['Video']; ?>
<?php endif; ?><?php else: ?>false<?php endif; ?>
    <?php echo ' };

    var self = this;

    var $media_manager = $(\'.upload-files\');
    var $upload_zone = $(\'.upload-zone\');
    var $button_bar = $(\'.fileupload-buttonbar\');
    var $start_upload = $(\'#start_upload\');
    var $stat_container = $(\'.upload-stat\');
    this.$stat_picture = $(\'#pic_counter\');
    this.$stat_video = $(\'#video_counter\');
    var $next_step_button = $(\'.form-buttons input[type=submit]\');
    var $selected_plan = $(\'.dynamic-content .selected-plan select\');

    var picture_file_types = \'gif|jpe?g|png|webp\';
    var video_file_types = \'mp4|webm|ogg\';

    var accept_picture_patter = RegExp(\'(\\.|\\/)(\' + picture_file_types + \')$\', \'i\');
    var accept_video_patter = RegExp(\'(\\.|\\/)(\' + video_file_types + \')$\', \'i\');

    this.loadedInitial = false;
    this.loadingInProgress = false;
    this.sortableTimeout = false;
    this.left = $.extend({}, this.number);

    this.init = function(){
        this.upload();
        this.loadHandler();
        this.removeHandler();
        this.manageDescriptionHandler();
        this.dragAndDropHandler();
        this.nextButtonHandler();
        this.sortableHandler();
        this.videoLinkHandler();
        this.cropHandler();
        this.rotateHandler();
    }

    this.upload = function(){
        // file upload init
        $(\'#fileupload\').fileupload({
            url: rlConfig[\'ajax_url\'],
            dataType: \'json\',
            autoUpload: auto_upload,
            singleFileUploads: true,
            disableImageResize: false,
            imageMaxWidth: rlConfig[\'pg_upload_large_width\'] * 2,
            imageMaxHeight: rlConfig[\'pg_upload_large_height\'] * 2,
            previewCrop: rlConfig[\'img_crop_thumbnail\'],
            previewMaxWidth: rlConfig[\'pg_upload_thumbnail_width\'],
            previewMaxHeight: rlConfig[\'pg_upload_thumbnail_height\'],
            filesContainer: $media_manager,
            uploadTemplateId: null,
            downloadTemplateId: null,
            loadImageFileTypes: /^image\\/(gif|jpeg|png|webp|svg\\+xml)$/,
            uploadTemplate: function(data){
                for (var i in data.files) {
                    data.files[i].itemType = /video/.test(data.files[i].type) ? \'video\' : \'picture\';
                }
                return $(\'#preview_picture\').render(data.files)
            },
            downloadTemplate: function(data){
                return $(\'#uploaded_picture\').render(data.files)
            }
        }).on(\'fileuploadadd\', function(e, data){
            return self.validate(data.originalFiles[0]);
        }).on(\'fileuploadprocessdone\', function(e, data){
            // save file index
            data.context.fileIndex = $media_manager.find(\'> *\').index($(data.context));

            // remove preparing note
            $(data.context).find(\'.prepare\').remove();

            // prevent loading video/picture with too big size
            if (data.files[0].size >= rlConfig.upload_max_size) {
                data.abort();

                printMessage(\'error\', lang.error_maxFileSize.replace(\'{limit}\', rlConfig.upload_max_size / 1024 / 1024));
                return false;
            }
        }).on(\'fileuploadstart\', function(e, data){
            $start_upload.val(lang[\'loading\']);
        }).on(\'fileuploaddone\', function(e, data){
            self.navigationState();
        }).on(\'fileuploadprocessalways\', function(e, data) {
            // update nav state
            self.navigationState();
        }).on(\'fileuploadsubmit\', function(e, data) {
            // update nav state
            self.navigationState(true);

            // remove suspend status
            $media_manager.find(\'> .suspend\').removeClass(\'suspend\');
            $(\'.notification .close\').trigger(\'click\');

            // add form data
            data.formData = {
                mode: \'pictureUpload\',
                listing_id: rlConfig[\'current_listing_id\'],
                index: data.context.fileIndex
            };
        }).on(\'fileuploaddestroy\', function(e, data) {
            var $cont = $(data.context.context).closest(\'.picture-cont\');
            var media_type = $cont.hasClass(\'picture\') || $cont.find(\'canvas\').length
                ? \'picture\'
                : \'video\';

            self.removeMedia(media_type);
            self.navigationState();
        }).on(\'fileuploadfail\', function(e, data) {
            self.navigationState();
        }).on(\'submit\', function(e){
            $youtubeInput = $(this).find(\'[name=video-url]\');
            if ($youtubeInput.is(\':focus\')) {
                $youtubeInput.closest(\'.popover\').find(\'nav > input:not(.cancel)\').trigger(\'click\');
            }
            return false
        });
    }

    this.validate = function(file){
        var index, key;

        // Check type
        if (accept_picture_patter.test(file.type)) {
            index = \'picture\';
            key = \'Photo\'
        } else if (accept_video_patter.test(file.type)) {
            index = \'video\';
            key = \'Video\';
        } else {
            var types = [];
            if (this.number.picture !== false) {
                types = types.concat(picture_file_types.replace(\'?\', \'\').split(\'|\'));
            }
            if (this.number.video !== false) {
                types = types.concat(video_file_types.split(\'|\'));
            }

            printMessage(\'error\',
                lang[\'error_wrong_file_type\']
                    .replace(\'{ext}\', file.name.replace(/.+\\.([^\\.]+)$/, \'$1\'))
                    .replace(\'{types}\', types.join(\', \'))
            );
            return false;
        }

        if (file.size >= rlConfig.upload_max_size && !/(\\.|\\/)jpe?g$/i.test(file.type)) {
            printMessage(\'error\', lang.error_maxFileSize.replace(\'{limit}\', rlConfig.upload_max_size / 1024 / 1024));
            return false;
        }

        // Check media availability by listing type
        if (rlConfig[\'current_listing_type\'][key] == \'0\') {
            printMessage(\'error\', lang[\'error_listing_type_\' + index + \'_restricted\']);
            return false;
        }

        // Check left number
        if (this.number[index] !== true && this.left[index] <= 0) {
            var phrase_key = index == \'picture\' ? \'no_more_photos\' : \'no_more_videos\';

            printMessage(\'error\',
                lang[phrase_key]
                    .replace(\'{plan}\', rlConfig[\'current_plan_name\'])
                    .replace(\'{count}\', this.number[index])
            );
            return false;
        }

        this.addMedia(index);

        return true;
    }

    this.addMedia = function(index){
        if (!index) {
            console.log(\'addMedia failed, no index parameter passed\');
            return;
        }

        if (this.left[index] <= 0 && this.number[index] !== true) {
            $media_manager.find(\'> *:not(.suspend).\' + index).last().addClass(\'suspend\');
        }

        this.left[index]--;
        this.updateStat();
    }

    this.removeMedia = function(index){
        if (!index) {
            console.log(\'removeMedia failed, no index parameter passed\');
            return;
        }

        this.left[index]++;
        this.updateStat();
    }

    this.updateStat = function(){
        if (this.left.picture >= 0) {
            this.$stat_picture.text(this.left.picture);
        }

        if (this.left.video >= 0) {
            this.$stat_video.text(this.left.video);
        }
    }

    this.navigationState = function(started){
        if (started) {
            self.loadingInProgress = true;
        }

        $button_bar[
            $media_manager.find(\'> *\').length
                ? \'removeClass\'
                : \'addClass\'
        ](\'hide\');

        setTimeout(function(){
            var length = $media_manager.find(\'> *.template-upload:not(.file-error)\').length;

            // Reset button phrase
            if (length == 0) {
                $start_upload.val($start_upload.data(\'default-value\'));
                self.loadingInProgress = false;
            }

            // Set button state
            if (started) {
                var disabled = true;
            } else {
                var disabled = (
                    (self.loadingInProgress && length)
                    || (!self.loadingInProgress && !length)
                ) ? true : false;
            }

            $start_upload[
                disabled
                    ? \'addClass\'
                    : \'removeClass\'
            ](\'disabled\')
            .attr(\'disabled\', disabled);
        }, 1);
    }

    /**
     * Load jsRender library and load pictures
     */
    this.loadHandler = function(){
        if (!rlConfig[\'current_listing_id\'] || this.loadedInitial) {
            return;
        }

        self.loadedInitial = true;

        flUtil.loadScript(rlConfig[\'libs_url\'] + \'javascript/jsRender.js\', function(){
            var data = {
                mode: \'pictureUpload\',
                listing_id: rlConfig[\'current_listing_id\']
            };
            flUtil.ajax(data, function(response, status){
                if (status == \'success\') {
                    if (response.count > 0) {
                        $media_manager.append(
                            $(\'#uploaded_picture\').render(response.results)
                        );

                        for (var i in response.results) {
                            self.addMedia(response.results[i].Type);
                        }

                        self.navigationState();
                    }
                } else {
                    printMessage(\'error\', lang[\'system_error\']);
                }
            }, true);
        });
    }

    /**
     * "Add Video" link handler
     */
    this.videoLinkHandler = function(){
        flUtil.loadScript(rlConfig[\'tpl_base\'] + \'components/popover/_popover.js\', function(){
            var $input = $(\'<input>\')
                .attr({
                    type: \'text\',
                    name: \'video-url\',
                    placeholder: lang[\'link_or_embed\']
                });

            $stat_container.popover({
                width: 350,
                content: $input,
                target: \'.add-video-link\',
                navigation: {
                    okButton: {
                        text: lang[\'add\'],
                        class: \'low\',
                        onClick: function(popover){
                            var link = $input.val();
                            var embed_pattern = new RegExp(\'^\\<iframe\', \'i\');
                            var error = false;

                            if (!link) {
                                error = lang[\'notice_field_empty\'].replace(\'{field}\', lang[\'link_or_embed\']);
                            } else if (!flynax.isURL(link) && !embed_pattern.test(link)) {
                                error = lang[\'notice_field_not_valid\'].replace(\'{field}\', lang[\'link_or_embed\']);
                            }

                            if (error) {
                                popover.error(error, $input);
                            } else {
                                var data = {
                                    mode: \'mediaAddYouTube\',
                                    controller: rlPageInfo[\'controller\'],
                                    listing_id: rlConfig[\'current_listing_id\'],
                                    position: $media_manager.find(\'> div\').length + 1,
                                    link: link
                                };
                                flUtil.ajax(data, function(response, status){
                                    if (status == \'success\') {
                                        if (response.status == \'OK\') {
                                            $media_manager.append(
                                                $(\'#uploaded_picture\').render(response.results)
                                            );

                                            self.addMedia(\'video\');
                                        } else {
                                            printMessage(\'error\', lang[\'system_error\']);
                                        }
                                    } else {
                                        printMessage(\'error\', lang[\'system_error\']);
                                    }
                                });

                                popover.close()
                            }
                        }
                    },
                    cancelButton: {
                        text: lang[\'cancel\'],
                        class: \'low cancel\'
                    }
                },
                onClick: function(popover){
                    if (self.number.video !== true && self.left.video <= 0) {
                        var error = lang[\'no_more_videos\']
                            .replace(\'{plan}\', rlConfig[\'current_plan_name\'])
                            .replace(\'{count}\', self.number.video);

                        printMessage(\'error\', error);
                    } else {
                        popover.click.call(this);
                    }
                }
            });
        });
    }

    /**
     * Remove media handler
     */
    this.removeHandler = function(){
        $media_manager.on(\'click\', \'.picture-cont:not(.template-upload) .icon.delete\', function(){
            // Show loading bar
            $(this).closest(\'nav.icons\').addClass(\'loading\');

            // Do delete request
            var $cont = $(this).closest(\'div.picture-cont\');
            var data = {
                mode: \'mediaDelete\',
                listing_id: rlConfig[\'current_listing_id\'],
                media_id: parseInt($cont.data(\'id\'))
            };
            flUtil.ajax(data, function(response, status){
                if (status == \'success\') {
                    if (response.status == \'OK\') {
                        $cont.remove();

                        self.navigationState();
                    }
                } else {
                    printMessage(\'error\', lang[\'system_error\']);
                }
            });
        });
    }

    /**
     * Manage description
     */
    this.manageDescriptionHandler = function(){
        $media_manager.on(\'click\', \'.icon.manage\', function(){
            var $container = $(this).closest(\'div.picture-cont\');
            var media_id = parseInt($container.data(\'id\'));
            var current_description = $container.find(\'textarea\').val();

            $(document).flModal({
                source: \'#manage_photo_dom\',
                caption: lang[\'manage\'],
                width: 450,
                height: \'auto\',
                click: false,
                ready: function(){
                    $(\'input[name=photo-desc]\').val(current_description);
                    $(\'input[name=photo-desc-save]\').click(function(){
                        var new_description = $(\'input[name=photo-desc]\').val();

                        // save new description
                        var data = {
                            mode: \'mediaChangeDescription\',
                            listing_id: rlConfig[\'current_listing_id\'],
                            media_id: media_id,
                            description: new_description
                        };
                        flUtil.ajax(data, function(response, status){
                            if (status == \'success\') {
                                if (response.status == \'OK\') {
                                    printMessage(\'notice\', lang[\'notice_description_saved\']);

                                    $container.find(\'textarea\').val(new_description);
                                    $(\'#modal_block div.close\').trigger(\'click\');
                                }
                            } else {
                                printMessage(\'error\', lang[\'system_error\']);
                            }
                        });
                    });
                }
            });
        });
    }

    /**
     * Drag&Drop files handler
     */
    this.dragAndDropHandler = function(){
        $(document).bind(\'dragover\', function(e){
            var timeout = window.dropZoneTimeout;
            if (!timeout) {
                $upload_zone.addClass(\'in\');
            } else {
                clearTimeout(timeout);
            }

            var found = false;
            var node = e.target;

            do {
                if (node === $upload_zone[0]){
                    found = true;
                    break;
                }
                node = node.parentNode;
            } while (node != null);

            $upload_zone[found
                ? \'addClass\'
                : \'removeClass\'
            ](\'hover\');

            window.dropZoneTimeout = setTimeout(function(){
                window.dropZoneTimeout = null;
                $upload_zone.removeClass(\'in hover\');
            }, 100);
        });
    }

    /**
     * Next step button click handler
     */
    this.nextButtonHandler = function(){
        $next_step_button.click(function(){
            // No plan selected
            if (
                rlConfig[\'single_step\']
                && !rlConfig[\'manageListing\'][\'selected_plan_id\']
                && $media_manager.find(\'> .picture-cont\').length
            ) {
                printMessage(\'error\', lang[\'single_step_select_plan\']);
                $selected_plan.addClass(\'error\');
                flynax.slideTo(\'#content\');

                manageListing.enableButton();

                return false;
            }

            // check suspension
            var $susspend_items = $media_manager.find(\'> .template-upload\');
            var files_count = $susspend_items.length;

            if (files_count) {
                $susspend_items.addClass(\'suspend\');

                printMessage(\'warning\',
                    lang[\'unsaved_photos_notice\']
                        .replace(\'{number}\', files_count)
                );
                manageListing.enableButton();

                return false;
            }

            // Check requirements
            if (self.number.picture !== false
                && rlConfig[\'media_required\']
                && !$media_manager.find(\'> .picture-cont\').length) {
                printMessage(\'error\', lang[\'no_photo_uploaded\']);
                manageListing.enableButton();

                return false;
            }

            // Exided limit
            var errors = [];
            if (self.number.picture !== true && self.left.picture < 0) {
                errors.push(lang[\'no_more_photos\']
                    .replace(\'{plan}\', rlConfig[\'current_plan_name\'])
                    .replace(\'{count}\', self.number.picture));
            }
            if (self.number.video !== true && self.left.video < 0) {
                errors.push(lang[\'no_more_videos\']
                    .replace(\'{plan}\', rlConfig[\'current_plan_name\'])
                    .replace(\'{count}\', self.number.video));
            }

            if (errors.length) {
                printMessage(\'error\', errors);
                manageListing.enableButton();

                return false;
            }
        }).mouseenter(function(){
            if (self.sortableTimeout) {
                self.sortable($media_manager);
            }
        });
    }

    this.sortable = function(obj){
        var sort = \'\';
        var $items = $(obj).find(\'> div:not(.template-upload)\');

        $items.each(function(){
            var id = $(this).data(\'id\');
            var pos = $items.index(this)+1;

            sort += id+\',\'+pos+\';\';
        });

        if (sort) {
            // save new order
            var data = {
                mode: \'mediaSetOrder\',
                listing_id: rlConfig[\'current_listing_id\'],
                data: sort
            };
            flUtil.ajax(data, function(response, status){
                if (status != \'success\') {
                    printMessage(\'error\', lang[\'system_error\']);
                }
            });
        }
    }

    /**
     * Items sortable handler
     */
    this.sortableHandler = function(){
        flUtil.loadScript([
            rlConfig[\'libs_url\'] + \'jquery/jquery.ui.js\',
            rlConfig[\'libs_url\'] + \'jquery/jquery.ui.touch-punch.min.js\'
        ], function(){
            $media_manager.sortable({
                items: \'> div:not(.template-upload)\',
                handle: \'span.item\',
                tolerance: \'pointer\',
                start: function(event, obj){
                    $(this).append(obj.item);
                    clearTimeout(self.sortableTimeout);
                },
                stop: function(event, obj){
                    var parent = this;
                    self.sortableTimeout = setTimeout(function(){
                        self.sortable(parent);
                    }, 2500);
                }
            });
        });
    }

    this.cropHandler = function(){
        flUtil.loadStyle(rlConfig[\'libs_url\'] + \'cropper/cropper.css\');

        flUtil.loadScript([
            rlConfig[\'tpl_base\'] + \'components/popup/_popup.js\',
            rlConfig[\'libs_url\'] + \'cropper/cropper.min.js\'
        ], function(){
            $media_manager.on(\'click\', \'.icon.crop\', function(){
                var $container = $(this).closest(\'div.picture-cont\');
                var media_id = parseInt($container.data(\'id\'));
                var $nav_bar = $(this).closest(\'nav.icons\');

                // show loading bar
                var loading_delay = setTimeout(function(){
                    $nav_bar.addClass(\'loading\');
                }, 250);

                // show interface
                var $interface = $(\'<div>\')
                    .addClass(\'crop-interface\')
                    .append(
                        $(\'<img>\')
                            .addClass(\'crop-image\')
                            .attr(\'src\', rlConfig[\'ajax_url\'] + \'?mode=tmpRotate&media_id=\' + media_id)
                            .css(\'maxWidth\', \'100%\')
                            .on(\'load\', function(){
                                clearTimeout(loading_delay);
                                $nav_bar.removeClass(\'loading\');

                                var crop_data = [];

                                $(this).popup({
                                    click: false,
                                    scroll: false,
                                    closeOnOutsideClick: false,
                                    content: $interface,
                                    caption: lang[\'crop_photo\'],
                                    navigation: {
                                        okButton: {
                                            text: lang[\'save\'],
                                            class: \'apply-crop\',
                                            onClick: function(popup){
                                                var $button = $(this);

                                                $button
                                                    .addClass(\'disabled\')
                                                    .attr(\'disabled\', true)
                                                    .val(lang[\'loading\']);

                                                var nat_width   = crop_data.target.naturalWidth;
                                                var nat_height  = crop_data.target.naturalHeight;
                                                var crop        = crop_data.detail;

                                                var x      = crop.x < 0 ? 0 : crop.x;
                                                var y      = crop.y < 0 ? 0 : crop.y;
                                                var x_diff = crop.x < 0 ? Math.abs(crop.x) : 0;
                                                var y_diff = crop.y < 0 ? Math.abs(crop.y) : 0;
                                                var width  = crop.width + crop.x > nat_width ? nat_width - x : crop.width - x_diff;
                                                var height = crop.height + crop.y > nat_height ? nat_height - y : crop.height - y_diff;

                                                var data = {
                                                    mode: \'pictureCrop\',
                                                    listing_id: rlConfig[\'current_listing_id\'],
                                                    media_id: media_id,
                                                    data: {
                                                        x: x,
                                                        y: y,
                                                        width: width,
                                                        height: height,
                                                    }
                                                };

                                                flUtil.ajax(data, function(response, status){
                                                    if (status == \'success\' && response.status == \'OK\') {
                                                        $container.find(\'img.thumbnail\')
                                                            .attr(\'src\', response.results.Thumbnail);

                                                        printMessage(\'notice\', lang[\'crop_completed\']);
                                                    } else {
                                                        $button
                                                            .removeClass()
                                                            .attr(\'disabled\', false)
                                                            .val(lang[\'save\']);

                                                        printMessage(\'error\', lang[\'system_error\']);
                                                    }

                                                    popup.close();
                                                }, true);
                                            }
                                        },
                                        cancelButton: {
                                            text: lang[\'cancel\'],
                                            class: \'cancel\'
                                        }
                                    },
                                    onShow: function(content){
                                        var popup_object = this;
                                        var aspect_ratio = 1;
                                        var $img = content.find(\'img.crop-image\');

                                        var aspectRatio = rlConfig[\'img_crop_thumbnail\'] || rlConfig[\'img_crop_module\']
                                            ? rlConfig[\'pg_upload_thumbnail_width\'] / rlConfig[\'pg_upload_thumbnail_height\']
                                            : null;

                                        $img.cropper({
                                            aspectRatio: aspectRatio,
                                            autoCropArea: 0.9,
                                            zoomable: false,
                                            minContainerWidth: 300,
                                            minContainerHeight: 300,
                                            viewMode: 2,
                                            crop: function(e) {
                                                crop_data = e;
                                            },
                                            ready: function(){
                                                popup_object.setPosition();
                                            }
                                        });
                                    }
                                });
                            })
                    );
            });
        }, true);
    }

    this.rotateHandler = function() {
        $media_manager.on(\'click\', \'.icon.rotate\', function(){
            var $container = $(this).closest(\'div.picture-cont\');
            var media_id = parseInt($container.data(\'id\'));
            var $nav_bar = $(this).closest(\'nav.icons\');

            var data = {
                mode: \'pictureRotate\',
                listing_id: rlConfig[\'current_listing_id\'],
                media_id: media_id
            };

            // show loading bar
            var loading_delay = setTimeout(function(){
                $nav_bar.addClass(\'loading\');
            }, 250);

            flUtil.ajax(data, function(response, status){
                clearTimeout(loading_delay);
                $nav_bar.removeClass(\'loading\');

                if (status == \'success\' && response.status == \'OK\') {
                    $container.find(\'img.thumbnail\')
                        .attr(\'src\', response.results.Thumbnail);
                } else {
                    printMessage(\'error\', lang[\'system_error\']);
                }
            }, true);
        });
    }

    this.changePlan = function(id, name, picture, video){
        var manage_suspend = function(number, left, index) {
            $items = $media_manager.find(\'> .\' + index);
            $items.removeClass(\'suspend\');

            if (number[index] === false) {
                $items.addClass(\'suspend\');
            } else if (number[index] !== true) {
                $media_manager.find(\'> .\' + index + \':gt(\' + (number[index] - 1) + \')\').addClass(\'suspend\');
                left[index] = number[index] - $items.length;
            }
        }

        // Define new params
        var number = {
            picture: picture,
            video: video
        };
        var left = $.extend({}, number);

        // Set suspend pictures
        manage_suspend(number, left, \'picture\');

        // Set suspend videos
        manage_suspend(number, left, \'video\');

        this.setPlanOptions(id, name, number, left);
    }

    this.setPlanOptions = function(id, name, number, left){
        // Update global vars
        rlConfig[\'current_plan_name\'] = name;

        // Update counters
        this.number = number;
        this.left = left;

        // Update interface
        var interface = $(\'<span>\');
        var type = rlConfig[\'current_listing_type\']; // Listing type reference
        var $add_video_link = $(\'<span>\')
            .addClass(\'add-video-link link\')
            .text(lang[\'add_video_link\']);

        var is_picture = (number.picture === true || number.picture > 0) && type.Photo === \'1\';
        var is_video = (number.video === true || number.video > 0) && type.Video === \'1\';

        if (number.picture === true && number.video === true) {
            if (type.Video === \'1\') {
                interface.append($add_video_link);
            }
        } else {
            if (is_picture) {
                if (number.picture === true) {
                    interface.append(
                        $(\'<span>\').text(lang[\'unlimited_pictures\'])
                    );
                } else {
                    this.$stat_picture = $(\'<span>\')
                        .attr(\'id\', \'pic_counter\')
                        .text(left.picture && left.picture > 0 ? left.picture : 0);

                    interface.append(this.$stat_picture);
                    interface.append(\' \' + lang[\'photo\']);
                }
            }

            if (is_picture && is_video) {
                interface.append(\' / \');
            }

            if (is_video) {
                if (number.video === true) {
                    interface.append(
                        $(\'<span>\').text(lang[\'unlimited_videos\'])
                    );
                } else {
                    this.$stat_video = $(\'<span>\')
                        .attr(\'id\', \'video_counter\')
                        .text(left.video && left.video > 0 ? left.video : 0);

                    interface.append(this.$stat_video);
                    interface.append(\' \' + lang[\'video\']);
                }

                interface.append(\' \' + lang[\'or\'] + \' \');
                interface.append($add_video_link);
            }
        }

        $stat_container.html(interface);
    }
}

$(function(){
    if (!rlConfig[\'single_step\'] || (rlConfig[\'single_step\'] && rlConfig[\'current_listing_id\'])) {
        rlConfig[\'mediaManager\'] = new flMediaManager();
        rlConfig[\'mediaManager\'].init();
    }
});

'; ?>

</script>