<?php /* Smarty version 2.6.31, created on 2024-04-24 15:46:43
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/footerScript.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/footerScript.tpl', 1, false),array('modifier', 'in_array', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/footerScript.tpl', 9, false),array('modifier', 'strpos', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/footerScript.tpl', 55, false),array('function', 'displayCSS', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/footerScript.tpl', 3, false),array('function', 'displayJS', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/footerScript.tpl', 5, false),array('function', 'phrase', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/footerScript.tpl', 14, false),)), $this); ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['componentDir'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'call-owner/_floating-buttons.tpl') : smarty_modifier_cat($_tmp, 'call-owner/_floating-buttons.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <?php echo $this->_plugins['function']['displayCSS'][0][0]->displayCSS(array('mode' => 'footer'), $this);?>


    <?php echo $this->_plugins['function']['displayJS'][0][0]->displayJS(array(), $this);?>


    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['componentDir'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'call-owner/_popup-interface.tpl') : smarty_modifier_cat($_tmp, 'call-owner/_popup-interface.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <?php if (((is_array($_tmp=$this->_tpl_vars['pageInfo']['Controller'])) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['_hiddenContactFormControllers']) : in_array($_tmp, $this->_tpl_vars['_hiddenContactFormControllers']))): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['componentDir'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'contact-owner/_contact-owner.tpl') : smarty_modifier_cat($_tmp, 'contact-owner/_contact-owner.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>

    <script>
    lang.login = "<?php echo $this->_plugins['function']['phrase'][0][0]->getPhrase(array('key' => 'login'), $this);?>
";

    <?php echo '
        $(function () {
            flUtil.loadScript(rlConfig.tpl_base + \'js/form.js\', function () {
                $(\'select.select-autocomplete\').each(function () {
                    flForm.addAutocompleteForDropdown($(this));
                });

                $(\'.show-phone a\').click(function () {
                    let $phone = $(this).parent().parent().find(\'.hidden-phone\');
                    flForm.showHiddenPhone($phone, $phone.data(\'entity-id\'), $phone.data(\'entity\'), $phone.data(\'field\'));
                });

                $(\'.hidden-phone .messenger-icons a\').click(function () {
                    let $messengerLink = $(this);
                    let $showPhoneLink = $(this).closest(\'.hidden-phone\').next(\'.show-phone\').find(\'a\');

                    if ($messengerLink.attr(\'href\') !== \'javascript://\') {
                        return;
                    }

                    if ($showPhoneLink.length) {
                        $showPhoneLink.trigger(\'click\');
                    }

                    $messengerLink.attr(\'data-callback\', \'open\');
                })
            });

            flUtil.loadStyle(rlConfig.tpl_base + \'components/popup/popup.css\');
            flUtil.loadScript(rlConfig.tpl_base + \'components/popup/_popup.js\', function() {
                $(\'a.login\').popup({
                    caption: lang.login,
                    content: $(\'#login_modal_source > .tmp-dom\').clone(true, true),
                    width: 320
                });
            });
        });
    '; ?>
</script>

    <?php if ($this->_tpl_vars['plugins']['massmailer_newsletter'] && false !== ((is_array($_tmp=$this->_tpl_vars['tpl_settings']['name'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '_nova_') : strpos($_tmp, '_nova_'))): ?>
        <script><?php echo '
            (function(){
                $(\'#nova-newsletter-cont\').append($(\'#tmp-newsletter > div\'));
                $(\'#nova-newsletter-cont .newsletter_name\').val(\'Guest\');
            })();
        '; ?>
</script>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['tpl_settings']['listing_picture_slider']): ?>
        <script><?php echo '
        (function(){
            $(\'#main_container\').on(\'mouseover\', \'.listing-picture-slider\', function(event){
                if (\'ontouchstart\' in window
                    || navigator.maxTouchPoints > 0
                    || navigator.msMaxTouchPoints > 0
                ) {
                    return;
                }

                if (!this.sliderPicturesLoaded) {
                    var id = $(this).data(\'id\');
                    var item = this;
                    var counter = 0;

                    var data = {
                        mode: \'getListingPhotos\',
                        id: id
                    };
                    flUtil.ajax(data, function(response, status){
                        if (status == \'success\') {
                            if (response.status == \'OK\') {
                                for (var i in response.data) {
                                    if (i === \'0\') {
                                        continue;
                                    }

                                    var index = parseInt(i) + 1;
                                    var src = response.data[i].Thumbnail;

                                    $(item).find(\'.pic-empty-\' + index).attr(\'src\', src);
                                }

                                $(item).find(\'img\').one(\'load\', function(){
                                    counter++;

                                    if (counter == (response.data.length - 1)) {
                                        $(item).addClass(\'listing-picture-slider_loaded\');
                                    }
                                });
                            }
                        } else {
                            printMessage(\'error\', lang[\'system_error\']);
                        }
                    }, true);

                    item.sliderPicturesLoaded = true;
                }
            });
        })();
        '; ?>
</script>
    <?php endif; ?>

    <script>
    <?php echo '

    (function(){
        $(\'.map-capture img\').each(function(){
            var width = $(this).width();
            var height = $(this).height();
            var srcAttr = window.devicePixelRatio === 1 ? \'src\' : \'srcset\';

            var src = $(this).attr(srcAttr);

            if (src && width && height) {
                src = decodeURIComponent(src);

                if (rlConfig[\'static_map_provider\'] == \'yandex\') {
                    src = src.replace(/size=[0-9]+\\,[0-9]+/, \'size=\' + width + \',\' + height);
                } else {
                    src = src.replace(/[0-9]+x[0-9]+/, width + \'x\' + height);
                }

                $(this).attr(srcAttr, src);
            }
        });
    })();

    '; ?>

    </script>
</body>
</html>