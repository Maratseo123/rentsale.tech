<?php /* Smarty version 2.6.31, created on 2024-05-02 01:32:26
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/controllers/profile/manage_thumbnail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'addJS', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/controllers/profile/manage_thumbnail.tpl', 98, false),array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/controllers/profile/manage_thumbnail.tpl', 98, false),)), $this); ?>
<!-- my profile sidebar box -->

<div class="row my-profile-sidebar">
    <div class="picture col-sm-6 col-md-12">
        <div class="image-preview-wrapper">
            <form method="post"
                action="<?php echo (defined('RL_URL_HOME') ? @RL_URL_HOME : null); ?>
request.ajax.php?mode=thumbnail&item=1"
                enctype="multipart/form-data">
                <input id="fileupload" type="file" name="thumbnail[]" />
                <div class="image-preview"
                    style="<?php echo 'width:'; ?><?php if ($this->_tpl_vars['profile_info']['Thumb_width']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['profile_info']['Thumb_width']; ?><?php echo ''; ?><?php else: ?><?php echo '110'; ?><?php endif; ?><?php echo 'px;height:'; ?><?php if ($this->_tpl_vars['profile_info']['Thumb_height']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['profile_info']['Thumb_height']; ?><?php echo ''; ?><?php else: ?><?php echo '100'; ?><?php endif; ?><?php echo 'px;'; ?>
">
                        <img
                            data-no-picture="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/no-account.png"
                            <?php if ($this->_tpl_vars['config']['thumbnails_x2']): ?>data-no-picture-2x="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/@2x/no-account.png"<?php endif; ?>
                            src="<?php echo ''; ?><?php if ($this->_tpl_vars['profile_info']['Photo']): ?><?php echo ''; ?><?php echo (defined('RL_FILES_URL') ? @RL_FILES_URL : null); ?><?php echo ''; ?><?php echo $this->_tpl_vars['profile_info']['Photo']; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['rlTplBase']; ?><?php echo 'img/no-account.png'; ?><?php endif; ?><?php echo ''; ?>
"
                            data-source="<?php echo ''; ?><?php if ($this->_tpl_vars['profile_info']['Photo_original']): ?><?php echo ''; ?><?php echo (defined('RL_FILES_URL') ? @RL_FILES_URL : null); ?><?php echo ''; ?><?php echo $this->_tpl_vars['profile_info']['Photo_original']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
"
                            <?php if ($this->_tpl_vars['config']['thumbnails_x2']): ?>
                                srcset="<?php echo ''; ?><?php if ($this->_tpl_vars['profile_info']['Photo_x2']): ?><?php echo ''; ?><?php echo (defined('RL_FILES_URL') ? @RL_FILES_URL : null); ?><?php echo ''; ?><?php echo $this->_tpl_vars['profile_info']['Photo_x2']; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['rlTplBase']; ?><?php echo 'img/@2x/no-account.png'; ?><?php endif; ?><?php echo ''; ?>
 2x"
                            <?php endif; ?>
                        />
                </div>
            </form>

            <div id="navigation" class="two-inline<?php if ($this->_tpl_vars['profile_info']['Photo']): ?> loaded<?php endif; ?>" data-loading="<?php echo $this->_tpl_vars['lang']['loading']; ?>
">
                <nav class="icons">
                    <?php if ($this->_tpl_vars['config']['img_account_crop_interface']): ?>
                        <img class="icon crop" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" />
                    <?php endif; ?>
                    <img class="icon delete" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" />
                </nav>
                <label class="link"><?php echo $this->_tpl_vars['lang']['manage']; ?>
</label>
            </div>
        </div>
    </div>

    <div class="info col-sm-6 col-md-12">
        <div class="table-cell clearfix small">
            <div class="name"><?php echo $this->_tpl_vars['lang']['username']; ?>
</div>
            <div class="value"><?php echo $this->_tpl_vars['profile_info']['Username']; ?>
</div>
        </div>
        <div class="table-cell clearfix small">
            <div class="name"><?php echo $this->_tpl_vars['lang']['account_type']; ?>
</div>
            <div class="value"><?php echo $this->_tpl_vars['profile_info']['Type_name']; ?>
</div>
        </div>

        <?php if ($this->_tpl_vars['profile_info']['Agency_ID'] && $this->_tpl_vars['profile_info']['Agency_Info']): ?>
            <div class="table-cell clearfix small">
                <div class="name"><?php echo $this->_tpl_vars['lang']['agency']; ?>
</div>
                <div class="value">
                    <?php if ($this->_tpl_vars['profile_info']['Agency_Info']['Personal_address']): ?>
                        <a href="<?php echo $this->_tpl_vars['profile_info']['Agency_Info']['Personal_address']; ?>
"
                           title="<?php echo $this->_tpl_vars['profile_info']['Agency_Info']['Full_name']; ?>
"
                           target="_blank"
                        >
                    <?php endif; ?>
                    <?php echo $this->_tpl_vars['profile_info']['Agency_Info']['Full_name']; ?>

                    <?php if ($this->_tpl_vars['profile_info']['Agency_Info']['Personal_address']): ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['profile_info']['Type_description']): ?>
            <div class="table-cell clearfix small" style="margin-top: 5px;">
                <div class="value"><?php echo $this->_tpl_vars['profile_info']['Type_description']; ?>
</div>
            </div>
        <?php endif; ?>

        <!-- removing account button -->
        <?php if ($this->_tpl_vars['config']['account_removing']): ?>
            <div class="account-removing">
                <a href="javascript://" class="button warning"><?php echo $this->_tpl_vars['lang']['delete_account']; ?>
</a>
            </div>

            <script class="fl-js-dynamic"><?php echo '
                flUtil.loadScript(rlConfig[\'tpl_base\'] + \'components/account-removing/_account-removing.js\', function(){
                    $(\'.account-removing > a\').click(function(){
                        flAccountRemoving.init();
                    });
                });
            '; ?>
</script>
        <?php endif; ?>
        <!-- removing account button end -->
    </div>
</div>

<?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=(defined('RL_LIBS_URL') ? @RL_LIBS_URL : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'jquery/upload/jquery.ui.widget.js') : smarty_modifier_cat($_tmp, 'jquery/upload/jquery.ui.widget.js'))), $this);?>

<?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=(defined('RL_LIBS_URL') ? @RL_LIBS_URL : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'jquery/upload/load-image.all.min.js') : smarty_modifier_cat($_tmp, 'jquery/upload/load-image.all.min.js'))), $this);?>

<?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=(defined('RL_LIBS_URL') ? @RL_LIBS_URL : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'jquery/upload/jquery.iframe-transport.js') : smarty_modifier_cat($_tmp, 'jquery/upload/jquery.iframe-transport.js'))), $this);?>

<?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=(defined('RL_LIBS_URL') ? @RL_LIBS_URL : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'jquery/upload/jquery.fileupload.js') : smarty_modifier_cat($_tmp, 'jquery/upload/jquery.fileupload.js'))), $this);?>

<?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=(defined('RL_LIBS_URL') ? @RL_LIBS_URL : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'jquery/upload/jquery.fileupload-process.js') : smarty_modifier_cat($_tmp, 'jquery/upload/jquery.fileupload-process.js'))), $this);?>

<?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=(defined('RL_LIBS_URL') ? @RL_LIBS_URL : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'jquery/upload/jquery.fileupload-image.js') : smarty_modifier_cat($_tmp, 'jquery/upload/jquery.fileupload-image.js'))), $this);?>

<?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=(defined('RL_LIBS_URL') ? @RL_LIBS_URL : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'jquery/upload/jquery.fileupload-ui.js') : smarty_modifier_cat($_tmp, 'jquery/upload/jquery.fileupload-ui.js'))), $this);?>

<?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=(defined('RL_LIBS_URL') ? @RL_LIBS_URL : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'jquery/upload/jquery.fileupload-validate.js') : smarty_modifier_cat($_tmp, 'jquery/upload/jquery.fileupload-validate.js'))), $this);?>

<?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=$this->_tpl_vars['rlTplBase'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'components/popup/_popup.js') : smarty_modifier_cat($_tmp, 'components/popup/_popup.js'))), $this);?>


<script class="fl-js-dynamic">
lang['uploading_completed']   = "<?php echo $this->_tpl_vars['lang']['uploading_completed']; ?>
";
lang['save']                  = '<?php echo $this->_tpl_vars['lang']['save']; ?>
';
lang['crop_photo']            = '<?php echo $this->_tpl_vars['lang']['crop_photo']; ?>
';
lang['delete_confirm']        = '<?php echo $this->_tpl_vars['lang']['delete_confirm']; ?>
';
lang['thumbnail_removed']     = '<?php echo $this->_tpl_vars['lang']['thumbnail_removed']; ?>
';
lang['error_wrong_file_type'] = '<?php echo $this->_tpl_vars['lang']['error_wrong_file_type']; ?>
';

rlConfig['account_thumb_width']        = <?php if ($this->_tpl_vars['profile_info']['Thumb_width']): ?><?php echo $this->_tpl_vars['profile_info']['Thumb_width']; ?>
<?php else: ?>110<?php endif; ?>;
rlConfig['account_thumb_height']       = <?php if ($this->_tpl_vars['profile_info']['Thumb_height']): ?><?php echo $this->_tpl_vars['profile_info']['Thumb_height']; ?>
<?php else: ?>100<?php endif; ?>;
rlConfig['img_account_crop_interface'] = <?php if ($this->_tpl_vars['config']['img_account_crop_interface']): ?>true<?php else: ?>false<?php endif; ?>;
rlConfig['img_account_crop_thumbnail'] = <?php if ($this->_tpl_vars['config']['img_account_crop_thumbnail']): ?>true<?php else: ?>false<?php endif; ?>;
<?php echo '

$(function(){
    "use strict";

    var $link = $(\'.image-preview-wrapper .link\');
    var $img = $(\'.image-preview img\');
    var $nav_bar = $(\'#navigation\');

    var loading_delay = null;
    var file_types = \'gif|jpe?g|png|webp\';
    var accept_file_patter = RegExp(\'(\\.|\\/)(\' + file_types + \')$\', \'i\');

    var loading = function(enable){
        if (enable) {
            loading_delay = setTimeout(function(){
                $nav_bar.addClass(\'loading\');
            }, 250);
        } else {
            clearTimeout(loading_delay);
            $nav_bar.removeClass(\'loading\');
        }
    }

    var validate = function(file){
        if (!accept_file_patter.test(file.type)) {
            var types = file_types.replace(\'?\', \'\').split(\'|\');

            printMessage(\'error\',
                lang[\'error_wrong_file_type\']
                    .replace(\'{ext}\', file.name.replace(/.+\\.([^\\.]+)$/, \'$1\'))
                    .replace(\'{types}\', types.join(\', \'))
            );
            return false;
        }

        return true;
    }

    // Upload handler
    $(\'#fileupload\').fileupload({
        url: rlConfig[\'ajax_url\'] + \'?mode=profilePictureUpload\',
        dataType: \'json\',
        autoUpload: true,
        singleFileUploads: true,
        disableImageResize: false,
        imageMaxWidth: 1000,
        imageMaxHeight: 1000,
        previewCrop: rlConfig[\'img_account_crop_thumbnail\'],
        previewMaxWidth: rlConfig[\'account_thumb_width\'],
        previewMaxHeight: rlConfig[\'account_thumb_height\'],
        disableImagePreview: true,
        getFilesFromResponse: function(data){
            var response = data.result.thumbnail[0];
            if (response.error) {
                printMessage(\'error\', response.error);
            } else {
                $img
                    .attr(\'src\', rlConfig[\'files_url\'] + response.Photo)
                    .attr(\'data-source\', rlConfig[\'files_url\'] + response.Photo_original);

                if (rlConfig[\'thumbnails_x2\'] && response.Photo_x2) {
                    $img.attr(\'srcset\', rlConfig[\'files_url\'] + response.Photo_x2 + \' 2x\');
                }

                $nav_bar.addClass(\'loaded\');

                printMessage(\'notice\', lang[\'uploading_completed\']);
            }

            loading(false);
        }
    }).on(\'fileuploadsubmit\', function(e, data){
        if (!data.context.aborted) {
            loading(true);
        }
    }).on(\'fileuploadadd\', function(e, data){
        return validate(data.originalFiles[0]);
    }).on(\'fileuploadprocessdone\', function(e, data){
        // prevent loading picture with too big size
        if (data.files[0].size >= rlConfig.upload_max_size) {
            data.abort();
            data.context.aborted = true

            printMessage(\'error\', lang.error_maxFileSize.replace(\'{limit}\', rlConfig.upload_max_size / 1024 / 1024));
            return false;
        }
    });

    if (rlConfig[\'img_account_crop_interface\']) {
        flUtil.loadStyle(rlConfig[\'libs_url\'] + \'cropper/cropper.css\');

        flUtil.loadScript([
            rlConfig[\'libs_url\'] + \'cropper/cropper.min.js\'
        ], function(){
            // Crop handler
            $(\'nav.icons img.crop\').click(function(){
                // show loading bar
                loading(true);

                // show interface
                var source = $img.attr(\'data-source\')
                ? $img.attr(\'data-source\')
                : $img.attr(\'src\');
                var $interface = $(\'<div>\')
                    .addClass(\'crop-interface\')
                    .append(
                        $(\'<img>\')
                            .addClass(\'crop-image\')
                            .attr(\'src\', source.replace(/https?:/, \'\'))
                            .css(\'maxWidth\', \'100%\')
                            .on(\'load\', function(){
                                loading(false);

                                var original_width = this.width;
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
                                                    mode: \'profileThumbnailCrop\',
                                                    data: {
                                                        x: x,
                                                        y: y,
                                                        width: width,
                                                        height: height,
                                                    }
                                                };
                                                flUtil.ajax(data, function(response, status){
                                                    if (status == \'success\' && response.status == \'OK\') {
                                                        $img.attr(\'src\', rlConfig[\'files_url\'] + response.results.Photo);

                                                        if (rlConfig[\'thumbnails_x2\'] && response.results.Photo_x2) {
                                                            $img.attr(
                                                                \'srcset\',
                                                                rlConfig[\'files_url\'] + response.results.Photo_x2 + \' 2x\'
                                                            );
                                                        }

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

                                        var aspectRatio = rlConfig[\'img_account_crop_thumbnail\']
                                            ? rlConfig[\'account_thumb_width\'] / rlConfig[\'account_thumb_height\']
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
        });
    }

    // Delete handler
    $(\'nav.icons img.delete\').popup({
        scroll: false,
        caption: lang[\'warning\'],
        content: lang[\'delete_confirm\'],
        navigation: {
            okButton: {
                text: lang[\'delete\'],
                class: \'\',
                onClick: function(popup){
                    loading(true);

                    var data = {
                        mode: \'profileThumbnailDelete\'
                    };
                    flUtil.ajax(data, function(response, status){
                        if (status == \'success\' && response.status == \'OK\') {
                            $img
                                .attr(\'src\', $img.data(\'no-picture\'))
                                .attr(\'data-source\', \'\');

                            if (rlConfig[\'thumbnails_x2\'] && $img.data(\'no-picture-2x\')) {
                                $img.attr(\'srcset\', $img.data(\'no-picture-2x\') + \' 2x\');
                            }

                            $nav_bar.removeClass(\'loaded\');

                            printMessage(\'notice\', lang[\'thumbnail_removed\']);
                        } else {
                            printMessage(\'error\', lang[\'system_error\']);
                        }

                        loading(false);
                        popup.close();
                    });
                }
            },
            cancelButton: {
                text: lang[\'cancel\'],
                class: \'cancel\'
            }
        }
    });
});

'; ?>

</script>
<!-- my profile sidebar box end -->