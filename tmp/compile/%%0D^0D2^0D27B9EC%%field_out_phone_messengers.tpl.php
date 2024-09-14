<?php /* Smarty version 2.6.31, created on 2024-05-02 01:30:20
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/field_out_phone_messengers.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'getPlainPhoneNumber', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/field_out_phone_messengers.tpl', 6, false),)), $this); ?>
<!-- item out phone messengers tpl -->

<?php if ($this->_tpl_vars['item']['Opt3'] && ( $this->_tpl_vars['config']['whatsapp_phone_icon'] || $this->_tpl_vars['config']['viber_phone_icon'] || $this->_tpl_vars['config']['telegram_phone_icon'] ) && ( $this->_tpl_vars['item']['Messengers']['whatsapp'] || $this->_tpl_vars['item']['Messengers']['viber'] || $this->_tpl_vars['item']['Messengers']['telegram'] )): ?>
    <?php echo $this->_plugins['function']['getPlainPhoneNumber'][0][0]->getPlainPhoneNumber(array('phone' => $this->_tpl_vars['item']['value'],'assign' => 'messengerPhoneNumber'), $this);?>


    <span class="messenger-icons d-inline-flex flex-nowrap<?php if ($this->_tpl_vars['sidebar']): ?> mt-2 mb-2<?php endif; ?>">
        <?php if ($this->_tpl_vars['config']['whatsapp_phone_icon'] && $this->_tpl_vars['item']['Messengers']['whatsapp']): ?>
            <a <?php if ($this->_tpl_vars['hidden']): ?>href="javascript://" data-href="<?php echo $this->_tpl_vars['_phoneMessengersURLs']['whatsapp']; ?>
"
               <?php else: ?>href="<?php echo $this->_tpl_vars['_phoneMessengersURLs']['whatsapp']; ?>
<?php echo $this->_tpl_vars['messengerPhoneNumber']; ?>
" target="_blank"<?php endif; ?>
               class="m<?php if ((defined('RL_LANG_DIR') ? @RL_LANG_DIR : null) === 'ltr'): ?>r<?php else: ?>l<?php endif; ?>-2 hover-brightness-affect messenger-icons__whatsapp"
               title="<?php if ($this->_tpl_vars['hidden']): ?><?php echo $this->_tpl_vars['lang']['phone_show_number']; ?>
<?php endif; ?>"
            >
                <img src="<?php echo (defined('RL_LIBS_URL') ? @RL_LIBS_URL : null); ?>
icons/messengers/whatsapp.svg?rev=<?php echo $this->_tpl_vars['config']['static_files_revision']; ?>
" alt="">
            </a>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['config']['viber_phone_icon'] && $this->_tpl_vars['item']['Messengers']['viber']): ?>
            <a <?php if ($this->_tpl_vars['hidden']): ?>href="javascript://" data-href="<?php echo $this->_tpl_vars['_phoneMessengersURLs']['viber']; ?>
"
               <?php else: ?>href="<?php echo $this->_tpl_vars['_phoneMessengersURLs']['viber']; ?>
<?php echo $this->_tpl_vars['messengerPhoneNumber']; ?>
" target="_blank"<?php endif; ?>
               class="m<?php if ((defined('RL_LANG_DIR') ? @RL_LANG_DIR : null) === 'ltr'): ?>r<?php else: ?>l<?php endif; ?>-2 hover-brightness-affect messenger-icons__viber"
               title="<?php if ($this->_tpl_vars['hidden']): ?><?php echo $this->_tpl_vars['lang']['phone_show_number']; ?>
<?php endif; ?>"
            >
                <img src="<?php echo (defined('RL_LIBS_URL') ? @RL_LIBS_URL : null); ?>
icons/messengers/viber.svg?rev=<?php echo $this->_tpl_vars['config']['static_files_revision']; ?>
" alt="">
            </a>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['config']['telegram_phone_icon'] && $this->_tpl_vars['item']['Messengers']['telegram']): ?>
            <a <?php if ($this->_tpl_vars['hidden']): ?>href="javascript://" data-href="<?php echo $this->_tpl_vars['_phoneMessengersURLs']['telegram']; ?>
"
               <?php else: ?>href="<?php echo $this->_tpl_vars['_phoneMessengersURLs']['telegram']; ?>
<?php echo $this->_tpl_vars['messengerPhoneNumber']; ?>
" target="_blank"<?php endif; ?>
               class="hover-brightness-affect messenger-icons__telegram"
               title="<?php if ($this->_tpl_vars['hidden']): ?><?php echo $this->_tpl_vars['lang']['phone_show_number']; ?>
<?php endif; ?>"
            >
                <img src="<?php echo (defined('RL_LIBS_URL') ? @RL_LIBS_URL : null); ?>
icons/messengers/telegram.svg?rev=<?php echo $this->_tpl_vars['config']['static_files_revision']; ?>
" alt="">
            </a>
        <?php endif; ?>
    </span>
<?php endif; ?>

<!-- item out phone messengers tpl end -->