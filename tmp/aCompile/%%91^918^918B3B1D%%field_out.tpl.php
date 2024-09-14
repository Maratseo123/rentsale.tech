<?php /* Smarty version 2.6.31, created on 2023-10-31 01:56:12
         compiled from blocks/field_out.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'in_array', 'blocks/field_out.tpl', 22, false),)), $this); ?>
<!-- listing field output tpl -->

<tr id="df_field_<?php echo $this->_tpl_vars['item']['Key']; ?>
">
    <td class="name"><?php echo $this->_tpl_vars['item']['name']; ?>
:</td>
    <td class="value <?php if (($this->_foreach['fListings']['iteration'] <= 1)): ?>first<?php endif; ?>">
        <?php if ($this->_tpl_vars['item']['Type'] == 'checkbox'): ?>
            <?php if ($this->_tpl_vars['item']['Opt1']): ?>
                <?php if ($this->_tpl_vars['item']['Opt2']): ?>
                    <?php $this->assign('col_num', $this->_tpl_vars['item']['Opt2']); ?>
                <?php else: ?>
                    <?php $this->assign('col_num', 3); ?>
                <?php endif; ?>
                <table class="checkboxes<?php if ($this->_tpl_vars['col_num'] > 2): ?> fixed<?php endif; ?>">
                <tr>
                <?php $_from = $this->_tpl_vars['item']['Values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['checkboxF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['checkboxF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tile']):
        $this->_foreach['checkboxF']['iteration']++;
?>
                    <td>
                        <?php if (! empty ( $this->_tpl_vars['item']['Condition'] )): ?>
                            <?php $this->assign('tile_source', $this->_tpl_vars['tile']['Key']); ?>
                        <?php else: ?>
                            <?php $this->assign('tile_source', $this->_tpl_vars['tile']['ID']); ?>
                        <?php endif; ?>
                        <div title="<?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['tile']['pName']]; ?>
" class="checkbox<?php if (((is_array($_tmp=$this->_tpl_vars['tile_source'])) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['item']['source']) : in_array($_tmp, $this->_tpl_vars['item']['source']))): ?>_active<?php endif; ?>">
                        <?php if (((is_array($_tmp=$this->_tpl_vars['tile_source'])) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['item']['source']) : in_array($_tmp, $this->_tpl_vars['item']['source']))): ?><img src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" alt="" /><?php endif; ?>
                        <?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['tile']['pName']]; ?>

                        </div>
                    </td>
                    <?php if ($this->_foreach['checkboxF']['iteration']%$this->_tpl_vars['col_num'] == 0 && ! ($this->_foreach['checkboxF']['iteration'] == $this->_foreach['checkboxF']['total'])): ?>
                    </tr>
                    <tr>
                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
                </tr>
                </table>
            <?php else: ?>
                <?php echo $this->_tpl_vars['item']['value']; ?>

            <?php endif; ?>
        <?php elseif ($this->_tpl_vars['item']['Type'] === 'phone'): ?>
            <span class="mr-3">
                <a href="tel:<?php echo $this->_tpl_vars['item']['value']; ?>
"><?php echo $this->_tpl_vars['item']['value']; ?>
</a>
            </span>

            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'blocks/field_out_phone_messengers.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php else: ?>
            <?php echo $this->_tpl_vars['item']['value']; ?>

        <?php endif; ?>
    </td>
</tr>

<!-- listing field output tpl end -->