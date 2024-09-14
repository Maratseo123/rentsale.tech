<?php /* Smarty version 2.6.31, created on 2023-12-22 06:03:08
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/plugins/hybridAuthLogin/view//iconsContainer.tpl */ ?>
<?php if ($this->_tpl_vars['ha_networks_icons']): ?>
    <div class="ha-icons-container<?php if ($this->_tpl_vars['icon_container_class']): ?> <?php echo $this->_tpl_vars['icon_container_class']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['icon_container_class'] == 'in-registration'): ?> hide<?php endif; ?>">
        <div class="ha-or"><span><?php echo $this->_tpl_vars['lang']['or']; ?>
</span></div>

        <div class="ha-social-icons">
            <?php $_from = $this->_tpl_vars['ha_networks_icons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['icon']):
?>
                <div class="ha-social-icon">
                    <a class="ha-<?php echo $this->_tpl_vars['icon']['network']; ?>
-provider <?php if ($this->_tpl_vars['loginAttemptsLeft'] <= 0 && $this->_tpl_vars['config']['security_login_attempt_user_module']): ?>ha-disabled<?php endif; ?>" href="<?php echo $this->_tpl_vars['icon']['url']; ?>
">
                        <svg viewBox="0 0 24 24" class="ha-social-icon-svg">
                            <use xlink:href="#ga-<?php echo $this->_tpl_vars['icon']['network']; ?>
"></use>
                        </svg>
                    </a>
                </div>
            <?php endforeach; endif; unset($_from); ?>
        </div>
    </div>
<?php endif; ?>