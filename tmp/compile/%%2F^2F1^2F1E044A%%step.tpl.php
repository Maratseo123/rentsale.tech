<?php /* Smarty version 2.6.31, created on 2024-05-02 01:30:20
         compiled from /var/www/u2273289/data/www/rentsale.tech/plugins/listingPreview/step.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/plugins/listingPreview/step.tpl', 5, false),array('function', 'buildFormAction', '/var/www/u2273289/data/www/rentsale.tech/plugins/listingPreview/step.tpl', 8, false),array('function', 'buildPrevStepURL', '/var/www/u2273289/data/www/rentsale.tech/plugins/listingPreview/step.tpl', 12, false),)), $this); ?>
<!-- listing preview tpl -->

<?php if ($this->_tpl_vars['cur_step'] == 'preview'): ?>
    <div class="area_preview step_area">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='controllers')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'listing_details.tpl') : smarty_modifier_cat($_tmp, 'listing_details.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

        <div>
            <form method="post" action="<?php echo $this->_plugins['function']['buildFormAction'][0][0]->buildFormAction(array(), $this);?>
">
                <input type="hidden" name="step" value="preview" />

                <span class="form-buttons form">
                    <a href="<?php echo $this->_plugins['function']['buildPrevStepURL'][0][0]->buildPrevStepURL(array('show_extended' => $this->_tpl_vars['manageListing']->singleStep), $this);?>
"><?php echo $this->_tpl_vars['lang']['edit_listing']; ?>
</a>
                    <input type="submit" value="<?php echo $this->_tpl_vars['lang']['listingPreview_confirm']; ?>
" />
                </span>
            </form>
        </div>
    </div>

    <script class="fl-js-dynamic">
    <?php echo '

    $(function(){
        flynaxTpl.contactOwnerSubmit = function(){}
        flynaxTpl.contactSeller = function(){}

        /**
         * This code appears above the \'.contact-seller\' selector initialization on listing details,
         * that is why we forced to set setTimeout
         *
         * @todo - Remove the setTimeout once the \'.contact-seller\' selector initialization script 
         * class is switched to dynamic for flatty templates.
         */
        setTimeout(function(){
            $(\'.contact-seller, .contact-owner\').unbind(\'click\');

            $(\'.seller-short, .contact-buttons-personal\').find(\'a, input[type=button]\').click(function(){
                return false;
            });

            $(\'body\').off(\'submit\', \'form[name=contact_owner]\');
            $(\'body\').on(\'submit\', \'form[name=contact_owner]\', function(){
                return false;
            });

            if (typeof flynaxTpl.contactOwnerSubmit == \'function\') {
                flynaxTpl.contactOwnerSubmit = function(){
                    return false;
                }
            }

            $(\'input[name=resume]\').closest(\'form\').unbind(\'submit\');
        }, 50);

        /**
         * Unset click for .contact-owner\' selector the second time after longer timeout due to
         * related script loads using loadScript method.
         */
        setTimeout(function(){
            $(\'.contact-owner\').unbind(\'click\');
        }, 1000);
    });

    '; ?>

    </script>
<?php endif; ?>

<!-- listing preview tpl end -->