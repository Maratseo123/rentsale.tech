<?php /* Smarty version 2.6.31, created on 2024-04-26 02:16:07
         compiled from /var/www/u2273289/data/www/rentsale.tech/plugins/booking/smarty_blocks/fields.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'pageUrl', '/var/www/u2273289/data/www/rentsale.tech/plugins/booking/smarty_blocks/fields.tpl', 65, false),array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/plugins/booking/smarty_blocks/fields.tpl', 67, false),array('modifier', 'replace', '/var/www/u2273289/data/www/rentsale.tech/plugins/booking/smarty_blocks/fields.tpl', 68, false),)), $this); ?>
<!-- booking fields -->

<?php if ($this->_tpl_vars['step'] == 'fields' && $this->_tpl_vars['edit_action'] && $_SESSION['bookingData']['fields']): ?>
    <?php $this->assign('booking_fields', $_SESSION['bookingData']['fields']); ?>
<?php endif; ?>

<div class="<?php if (( $this->_tpl_vars['step'] && $this->_tpl_vars['step'] != 'fields' ) || ! $this->_tpl_vars['step']): ?>hide<?php endif; ?>" id="step_2">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'blocks/fieldset_header.tpl', 'smarty_include_vars' => array('id' => 'booking_mes','name' => $this->_tpl_vars['lang']['booking_client_details'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <form action="#" method="post">
        <input type="hidden" name="booking_order" value="">

        <?php $_from = $this->_tpl_vars['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
            <?php $this->assign('fKey', $this->_tpl_vars['field']['Key']); ?>
            <?php $this->assign('fVal', $_POST['f']); ?>

            <div class="submit-cell">
                <div class="name">
                    <?php if ($this->_tpl_vars['field']['Required']): ?><span class="red">*</span><?php endif; ?> <?php echo $this->_tpl_vars['field']['name']; ?>

                    <?php if (! empty ( $this->_tpl_vars['field']['description'] )): ?>
                        <img class="booking_qtip" alt="" title="<?php echo $this->_tpl_vars['field']['description']; ?>
" id="fd_<?php echo $this->_tpl_vars['field']['Key']; ?>
" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" />
                    <?php endif; ?>
                </div>

                <div class="field <?php if ($this->_tpl_vars['field']['Type'] == 'bool'): ?>inline-fields<?php endif; ?>">
                    <?php if ($this->_tpl_vars['field']['Type'] == 'text'): ?>
                        <input class="wauto <?php if ($this->_tpl_vars['field']['Required']): ?>required<?php endif; ?> <?php if ($this->_tpl_vars['field']['Condition'] == 'isEmail'): ?>isEmail<?php elseif ($this->_tpl_vars['field']['Condition'] == 'isUrl'): ?>isUrl<?php elseif ($this->_tpl_vars['field']['Condition'] == 'isDomain'): ?>isDomain<?php endif; ?>" type="text" name="<?php echo $this->_tpl_vars['field']['Key']; ?>
" maxlength="<?php if ($this->_tpl_vars['field']['Values'] > 0): ?><?php echo $this->_tpl_vars['field']['Values']; ?>
<?php else: ?>150<?php endif; ?>" value ="<?php if ($this->_tpl_vars['booking_fields'][$this->_tpl_vars['field']['Key']]): ?><?php echo $this->_tpl_vars['booking_fields'][$this->_tpl_vars['field']['Key']]; ?>
<?php elseif ($this->_tpl_vars['field']['Key'] == 'first_name' && $this->_tpl_vars['account_info']['First_name']): ?><?php echo $this->_tpl_vars['account_info']['First_name']; ?>
<?php elseif ($this->_tpl_vars['field']['Key'] == 'last_name' && $this->_tpl_vars['account_info']['Last_name']): ?><?php echo $this->_tpl_vars['account_info']['Last_name']; ?>
<?php elseif ($this->_tpl_vars['field']['Key'] == 'email' && $this->_tpl_vars['account_info']['Mail']): ?><?php echo $this->_tpl_vars['account_info']['Mail']; ?>
<?php elseif ($this->_tpl_vars['field']['default']): ?><?php echo $this->_tpl_vars['field']['default']; ?>
<?php endif; ?>" />
                    <?php elseif ($this->_tpl_vars['field']['Type'] == 'textarea'): ?>
                        <textarea rows="5" class="text <?php if ($this->_tpl_vars['field']['Required']): ?>required<?php endif; ?>" name="<?php echo $this->_tpl_vars['field']['Key']; ?>
" id="textarea_<?php echo $this->_tpl_vars['field']['Key']; ?>
"><?php if ($this->_tpl_vars['booking_fields'][$this->_tpl_vars['field']['Key']]): ?><?php echo $this->_tpl_vars['booking_fields'][$this->_tpl_vars['field']['Key']]; ?>
<?php elseif ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]): ?><?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]; ?>
<?php elseif ($this->_tpl_vars['field']['Default']): ?><?php echo $this->_tpl_vars['field']['Default']; ?>
<?php endif; ?></textarea>
                        <script class="fl-js-dynamic"><?php echo '
                            $(document).ready(function() {
                                $(\'#textarea_'; ?>
<?php echo $this->_tpl_vars['field']['Key']; ?>
<?php echo '\').textareaCount({
                                    \'maxCharacterSize\': '; ?>
<?php echo $this->_tpl_vars['field']['Values']; ?>
<?php echo ',
                                    \'warningNumber\'   : 20
                                });
                            });
                        '; ?>
</script>
                    <?php elseif ($this->_tpl_vars['field']['Type'] == 'number'): ?>
                        <input class="numeric wauto <?php if ($this->_tpl_vars['field']['Required']): ?>required<?php endif; ?>" type="text" name="<?php echo $this->_tpl_vars['field']['Key']; ?>
" size="<?php if ($this->_tpl_vars['field']['Values']): ?><?php echo $this->_tpl_vars['field']['Values']; ?>
<?php else: ?>18<?php endif; ?>" maxlength="<?php if ($this->_tpl_vars['field']['Values']): ?><?php echo $this->_tpl_vars['field']['Values']; ?>
<?php else: ?>18<?php endif; ?>" value="<?php if ($this->_tpl_vars['booking_fields'][$this->_tpl_vars['field']['Key']]): ?><?php echo $this->_tpl_vars['booking_fields'][$this->_tpl_vars['field']['Key']]; ?>
<?php elseif ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]): ?><?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]; ?>
<?php endif; ?>"/>
                    <?php elseif ($this->_tpl_vars['field']['Type'] == 'bool'): ?>
                        <span class="custom-input">
                            <label>
                                <input class="bool" type="radio" value="1" name="<?php echo $this->_tpl_vars['field']['Key']; ?>
" <?php if ($this->_tpl_vars['booking_fields'][$this->_tpl_vars['field']['Key']] == '1'): ?><?php echo $this->_tpl_vars['booking_fields'][$this->_tpl_vars['field']['Key']]; ?>
<?php elseif ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']] == '1'): ?>checked="checked"<?php elseif ($this->_tpl_vars['field']['Default']): ?>checked="checked"<?php endif; ?> />
                                <?php echo $this->_tpl_vars['lang']['yes']; ?>

                            </label>
                        </span>
                        <span class="custom-input">
                            <label>
                                <input class="bool" type="radio" value="0" name="<?php echo $this->_tpl_vars['field']['Key']; ?>
" <?php if ($this->_tpl_vars['booking_fields'][$this->_tpl_vars['field']['Key']] == '0'): ?><?php echo $this->_tpl_vars['booking_fields'][$this->_tpl_vars['field']['Key']]; ?>
<?php elseif ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']] == '0'): ?>checked="checked"<?php elseif (! $this->_tpl_vars['field']['Default']): ?>checked="checked"<?php endif; ?> />
                                <?php echo $this->_tpl_vars['lang']['no']; ?>

                            </label>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; endif; unset($_from); ?>

        <div class="submit-cell">
            <div class="name"></div>
            <div class="field">
                <?php $this->assign('b_terms', ('{')."terms".('}')); ?>
                <?php $this->assign('b_terms_page_key', 'pages+title+booking_terms_and_conditions'); ?>
                <?php $this->assign('b_terms_page_name', $this->_tpl_vars['lang'][$this->_tpl_vars['b_terms_page_key']]); ?>

                <?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'booking_terms_and_conditions','assign' => 'booking_terms_and_conditions_url'), $this);?>


                <?php $this->assign('b_link', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp='<a target="_blank" href="')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['booking_terms_and_conditions_url']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['booking_terms_and_conditions_url'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '">') : smarty_modifier_cat($_tmp, '">')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['b_terms_page_name']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['b_terms_page_name'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '</a>') : smarty_modifier_cat($_tmp, '</a>'))); ?>
                <?php $this->assign('b_accept_notice', ((is_array($_tmp=$this->_tpl_vars['lang']['booking_terms_and_conditions_notice'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['b_terms'], $this->_tpl_vars['b_link']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['b_terms'], $this->_tpl_vars['b_link']))); ?>

                <?php echo $this->_tpl_vars['b_accept_notice']; ?>

            </div>
        </div>

        <div class="submit-cell buttons">
            <div class="name"></div>
            <div class="field">
                <input type="submit" class="button" id="checkValid" value="<?php echo $this->_tpl_vars['lang']['next_step']; ?>
" />
            </div>
        </div>
    </form>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'blocks/fieldset_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<!-- booking fields end -->