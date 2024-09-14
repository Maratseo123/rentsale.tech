<?php /* Smarty version 2.6.31, created on 2024-05-02 03:34:14
         compiled from /var/www/u2273289/data/www/rentsale.tech/plugins/testimonials/page.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/plugins/testimonials/page.tpl', 5, false),)), $this); ?>
<!-- testimonials page content -->

<div class="testimonials-area">
<?php if ($this->_tpl_vars['testimonials']): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=(defined('RL_PLUGINS') ? @RL_PLUGINS : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'testimonials') : smarty_modifier_cat($_tmp, 'testimonials')))) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'dom.tpl') : smarty_modifier_cat($_tmp, 'dom.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>
</div>

<?php if (! $this->_tpl_vars['testimonials']): ?>
    <div class="text-notice"><?php echo $this->_tpl_vars['lang']['testimonials_no_testimonials']; ?>
</div>
<?php endif; ?>

<div class="testimonials-form mx-auto mt-<?php if ($this->_tpl_vars['testimonials']): ?>3<?php else: ?>5<?php endif; ?> content-padding">
    <a id="add-testimonial"></a>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_header.tpl') : smarty_modifier_cat($_tmp, 'fieldset_header.tpl')), 'smarty_include_vars' => array('name' => $this->_tpl_vars['lang']['testimonials_add_testimonial'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <form class="content-padding" method="POST" action="" name="testimonial-form">
        <div class="submit-cell">
            <div class="field">
                <input placeholder="<?php echo $this->_tpl_vars['lang']['your_name']; ?>
 *" type="text" size="32" class="w-100" maxlength="32" id="t-name" <?php if ($this->_tpl_vars['account_info']): ?>value="<?php echo $this->_tpl_vars['account_info']['Full_name']; ?>
"<?php endif; ?> />
            </div>
        </div>
        <div class="submit-cell">
            <div class="field">
                <input placeholder="<?php echo $this->_tpl_vars['lang']['your_email']; ?>
" type="text" size="50" class="w-100" maxlength="100" id="t-email" />
            </div>
        </div>
        <div class="submit-cell">
            <div class="field">
                <textarea placeholder="<?php echo $this->_tpl_vars['lang']['testimonials_testimonial']; ?>
 *" id="t-testimonial" cols="" rows="6"></textarea>
            </div>
        </div>
        <div class="submit-cell">
            <div class="field"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'captcha.tpl', 'smarty_include_vars' => array('no_caption' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
        </div>
        <div class="submit-cell buttons">
            <div class="field"><input class="w-100" type="submit" name="finish" value="<?php echo $this->_tpl_vars['lang']['add']; ?>
" data-default-phrase="<?php echo $this->_tpl_vars['lang']['add']; ?>
" /></div>
        </div>
    </form>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_footer.tpl') : smarty_modifier_cat($_tmp, 'fieldset_footer.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<script class="fl-js-dynamic">
rlConfig['testimonials_moderate'] = <?php if ($this->_tpl_vars['config']['testimonials_moderate']): ?>true<?php else: ?>false<?php endif; ?>;

<?php echo '

var setTriangleColor = function(){
    var color = $(\'.testimonials-area div.hlight\').css(\'background-color\');

    $(\'.testimonials-area .testimonial-triangle\').css(
        \'border-\' + (rlLangDir == \'rtl\' ? \'top\' : \'right\') + \'-color\',
        color
    );
}

$(function(){
    var $fieldset = $(\'#controller_area .fieldset\');
    var $form = $(\'form[name="testimonial-form"]\');
    var $button = $form.find(\'input[type=submit]\');
    var $container = $(\'.testimonials-area\');

    setTriangleColor();

    $(\'a.post_ad\').click(function(e){
        flynax.slideTo($fieldset);
        return false;
    });
    
    if (flynax.getHash() == \'add-testimonial\') {
        flynax.slideTo($fieldset);
    }

    $form.submit(function(){
        $button
            .val(lang[\'loading\'])
            .addClass(\'disabled\')
            .attr(\'disabled\', true);

        flUtil.ajax({
                mode: \'addTM\',
                nameTM: $(this).find(\'#t-name\').val(),
                emailTM: $(this).find(\'#t-email\').val(),
                testimonial : $(this).find(\'#t-testimonial\').val(),
                captchaTM: $(this).find(\'#security_code\').val()
            },
            function(response, status) {
                if (response && status == \'success\') {
                    if (response.status === \'ERROR\') {
                        printMessage(\'error\', response.errorContent, response.errorFields); 
                    } else {
                        $form.find(\'#t-name,#t-email,#t-testimonial\').val(\'\');
                        $(\'#security_img\').trigger(\'click\');

                        // Reset captcha/reCaptcha widget
                        if (typeof ReCaptcha === \'object\' && typeof ReCaptcha.resetWidgetByIndex === \'function\') {
                            ReCaptcha.resetWidgetByIndex($form.find(\'.gptwdg\').attr(\'data-recaptcha-index\'));
                        } else {
                            $form.find(\'#security_code\').val(\'\');
                        }

                        if (!rlConfig[\'testimonials_moderate\']) {
                            $(\'.text-notice\').remove();

                            $container.html(\'\');
                            flynax.slideTo(\'body\');

                            $container.append(response.data)
                            setTriangleColor();
                        }

                        printMessage(\'notice\', response.msg);
                    }
                } else {
                    printMessage(\'error\', lang.system_error);
                }

                $button
                    .val($button.data(\'default-phrase\'))
                    .removeClass(\'disabled\')
                    .attr(\'disabled\', false);
            }
        );

        return false;
    });
});

'; ?>

</script>

<!-- testimonials page content -->