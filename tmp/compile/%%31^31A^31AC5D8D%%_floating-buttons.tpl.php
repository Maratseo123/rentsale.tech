<?php /* Smarty version 2.6.31, created on 2023-12-18 01:50:46
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/components/call-owner/_floating-buttons.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'phrase', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/components/call-owner/_floating-buttons.tpl', 7, false),)), $this); ?>
<!-- Call owner mobile floating buttons -->

<?php if (! $this->_tpl_vars['is_owner'] && $this->_tpl_vars['pageInfo']['Controller'] == 'listing_details' && $this->_tpl_vars['config']['show_call_owner_button'] && $this->_tpl_vars['allow_contacts']): ?>
    <div class="contact-owner-navbar d-lg-none hlight w-100">
        <div class="point1 container mx-auto">
            <div class="d-flex pt-3 pb-3 content-padding">
                <?php if ($this->_tpl_vars['config']['messages_module']): ?><input type="button" class="flex-fill mr-2 contact-owner" value="<?php echo $this->_plugins['function']['phrase'][0][0]->getPhrase(array('key' => 'contact_owner'), $this);?>
" accesskey="<?php echo $this->_plugins['function']['phrase'][0][0]->getPhrase(array('key' => 'contact_owner'), $this);?>
" /><?php endif; ?>
                <input class="flex-fill call-owner<?php if ($this->_tpl_vars['config']['messages_module']): ?> ml-2<?php endif; ?>" data-listing-id="<?php echo $this->_tpl_vars['listing_data']['ID']; ?>
" type="button" value="<?php echo $this->_plugins['function']['phrase'][0][0]->getPhrase(array('key' => 'call_owner'), $this);?>
" />
            </div>
        </div>
    </div>

    <script>
    <?php echo '

    (function(){
        $(\'body\').append(
            $(\'<div>\')
                .addClass(\'contact-owner-navbar-crossbar\')
                .css(\'flex\', \'0 0 \' + $(\'.contact-owner-navbar\').height() + \'px\')
                .height($(\'.contact-owner-navbar\').height())
        );
    })();

    '; ?>

    </script>
<?php endif; ?>

<!-- Call owner mobile floating buttons end -->