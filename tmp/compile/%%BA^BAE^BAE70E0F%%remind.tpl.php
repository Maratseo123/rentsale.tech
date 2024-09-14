<?php /* Smarty version 2.6.31, created on 2023-12-21 12:59:26
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/remind.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/remind.tpl', 7, false),)), $this); ?>
<!-- remind password page -->

<div class="content-padding">
    <?php if ($this->_tpl_vars['change']): ?>
        <!-- change password form -->
        <?php $this->assign('replace', ('{')."username".('}')); ?>
        <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['set_new_password_hint'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['replace'], $this->_tpl_vars['profile_info']['Full_name']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['replace'], $this->_tpl_vars['profile_info']['Full_name'])); ?>


        <form action="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pages']['remind']; ?>
.html?hash=<?php echo $_GET['hash']; ?>
<?php else: ?>?page=<?php echo $this->_tpl_vars['pages']['remind']; ?>
&amp;hash=<?php echo $_GET['hash']; ?>
<?php endif; ?>" style="margin-top: 20px;" method="post">
            <input type="hidden" name="change" value="1" />

            <div class="submit-cell">
                <div class="name"><?php echo $this->_tpl_vars['lang']['new_password']; ?>
</div>
                <div class="field single-field two-inline left">
                    <div><input id="new_password" size="25" class="wauto" type="password" name="profile[password]" maxlength="50" <?php if ($_POST['profile']['password']): ?>value="<?php echo $_POST['profile']['password']; ?>
"<?php endif; ?> /></div>
                    <?php if ($this->_tpl_vars['config']['account_password_strength']): ?>
                        <div>
                            <input type="hidden" id="password_strength" value="" />
                            <div class="password_strength">
                                <div class="scale">
                                    <div class="color"></div>
                                    <div class="shine"></div>
                                </div>
                                <div id="pass_strength"></div>
                            </div>

                            <script class="fl-js-dynamic">
                            <?php echo '

                            $(document).ready(function(){
                                flynax.passwordStrength();

                                $(\'#new_password\').blur(function(){
                                    if ( rlConfig[\'account_password_strength\'] ) {
                                        if ( $(\'#password_strength\').val() < 3 ) {
                                            printMessage(\'warning\', lang[\'password_weak_warning\'])
                                        }
                                        else {
                                            $(\'div.warning div.close\').trigger(\'click\');
                                        }
                                    }
                                });
                            });

                            '; ?>

                            </script>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="submit-cell">
                <div class="name"><?php echo $this->_tpl_vars['lang']['new_password_repeat']; ?>
</div>
                <div class="field single-field"><input class="wauto" size="25" type="password" name="password_repeat" maxlength="30" /></div>
            </div>

            <div class="submit-cell buttons">
                <div class="name"></div>
                <div class="field"><input type="submit" value="<?php echo $this->_tpl_vars['lang']['change']; ?>
" /></div>
            </div>
        </form>

        <!-- change password form end -->
    <?php else: ?>
        <!-- request password change form -->

        <form action="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pages']['remind']; ?>
.html<?php else: ?>?page=<?php echo $this->_tpl_vars['pages']['remind']; ?>
<?php endif; ?>" method="post">
            <input type="hidden" name="request" value="1" />

            <div class="submit-cell">
                <div class="name"><?php echo $this->_tpl_vars['lang']['mail']; ?>
</div>
                <div class="field"><input type="text" name="email" value="<?php echo $_POST['email']; ?>
" maxlength="100" size="50" class="wauto" /></div>
            </div>

            <div class="submit-cell buttons">
                <div class="name"></div>
                <div class="field"><input type="submit" value="<?php echo $this->_tpl_vars['lang']['next']; ?>
" /></div>
            </div>
        </form>

        <!-- request password change form end -->
    <?php endif; ?>
</div>

<!-- remind password page end -->