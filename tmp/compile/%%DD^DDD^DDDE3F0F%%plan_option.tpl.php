<?php /* Smarty version 2.6.31, created on 2024-04-30 03:06:27
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/controllers/add_listing/plan_option.tpl */ ?>
<!-- plan option jsrender template -->

<script id="plan_selector_option" type="text/x-jsrender"><?php echo '<option value="[%:ID%]" [%if Listings_remains%]data-available="true"[%/if%] [%if plan_disabled%]disabled="disabled"[%/if%]>[%:name%] ([%if plan_disabled%]'; ?><?php echo $this->_tpl_vars['lang']['used_up']; ?><?php echo '[%else Listings_remains%]'; ?><?php echo $this->_tpl_vars['lang']['available']; ?><?php echo '[%else%][%if Price == 0%]'; ?><?php echo $this->_tpl_vars['lang']['free']; ?><?php echo '[%else%]'; ?><?php if ($this->_tpl_vars['config']['system_currency_position'] == 'before'): ?><?php echo ''; ?><?php echo $this->_tpl_vars['config']['system_currency']; ?><?php echo ''; ?><?php endif; ?><?php echo '[%:Price%]'; ?><?php if ($this->_tpl_vars['config']['system_currency_position'] == 'after'): ?><?php echo ''; ?><?php echo $this->_tpl_vars['config']['system_currency']; ?><?php echo ''; ?><?php endif; ?><?php echo '[%/if%][%/if%])</option>'; ?>
</script>

<!-- plan option jsrender template end -->