<?php /* Smarty version 2.6.31, created on 2023-12-18 02:00:50
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/components/call-owner/_sidebar-buttons.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'phrase', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/components/call-owner/_sidebar-buttons.tpl', 3, false),)), $this); ?>
<!-- Call buttons in sidebar -->

<input type="button" class="w-100 contact-owner" value="<?php echo $this->_plugins['function']['phrase'][0][0]->getPhrase(array('key' => 'contact_owner'), $this);?>
" accesskey="<?php echo $this->_plugins['function']['phrase'][0][0]->getPhrase(array('key' => 'contact_owner'), $this);?>
" />
<input class="w-100 mt-3 call-owner" data-listing-id="<?php echo $this->_tpl_vars['listing_data']['ID']; ?>
" type="button" value="<?php echo $this->_plugins['function']['phrase'][0][0]->getPhrase(array('key' => 'call_owner'), $this);?>
" accesskey="<?php echo $this->_plugins['function']['phrase'][0][0]->getPhrase(array('key' => 'call_owner'), $this);?>
" />

<!-- Call buttons in sidebar end -->