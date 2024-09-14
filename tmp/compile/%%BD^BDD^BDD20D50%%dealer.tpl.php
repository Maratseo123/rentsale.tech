<?php /* Smarty version 2.6.31, created on 2024-04-26 02:18:34
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/dealer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'rlHook', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/dealer.tpl', 29, false),array('modifier', 'strpos', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/dealer.tpl', 55, false),array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/dealer.tpl', 59, false),)), $this); ?>
<!-- account item -->

<article class="col-sm-4<?php if ($this->_tpl_vars['dealer']['Thumb_width'] <= 120): ?> col-md-<?php if ($this->_tpl_vars['side_bar_exists']): ?>6<?php else: ?>4<?php endif; ?> col-lg-4<?php else: ?><?php if (! $this->_tpl_vars['side_bar_exists']): ?> col-md-3<?php endif; ?><?php endif; ?>">
    <div class="main-container clearfix<?php if ($this->_tpl_vars['dealer']['Thumb_width'] > 120): ?> landscape<?php endif; ?><?php if (! $this->_tpl_vars['dealer']['Photo']): ?> no-picture<?php endif; ?>" <?php if ($this->_tpl_vars['dealer']['Thumb_width'] > 120): ?>style="width: <?php echo $this->_tpl_vars['dealer']['Thumb_width']; ?>
px;"<?php endif; ?>>
        <?php if ($this->_tpl_vars['dealer']['Personal_address']): ?><a title="<?php echo $this->_tpl_vars['dealer']['Full_name']; ?>
" href="<?php echo $this->_tpl_vars['dealer']['Personal_address']; ?>
"><?php endif; ?>
            <div class="picture" style="width: <?php echo $this->_tpl_vars['dealer']['Thumb_width']; ?>
px; height: <?php echo $this->_tpl_vars['dealer']['Thumb_height']; ?>
px;">
                <?php if ($this->_tpl_vars['dealer']['Photo']): ?>
                    <img alt="<?php echo $this->_tpl_vars['dealer']['Full_name']; ?>
"
                         src="<?php echo (defined('RL_FILES_URL') ? @RL_FILES_URL : null); ?>
<?php echo $this->_tpl_vars['dealer']['Photo']; ?>
"
                         <?php if ($this->_tpl_vars['dealer']['Photo_x2']): ?>srcset="<?php echo (defined('RL_FILES_URL') ? @RL_FILES_URL : null); ?>
<?php echo $this->_tpl_vars['dealer']['Photo_x2']; ?>
 2x"<?php endif; ?> />
                <?php endif; ?>
            </div>
        <?php if ($this->_tpl_vars['dealer']['Personal_address']): ?></a><?php endif; ?>

        <div class="statistics">
            <ul>
                <li class="name">
                    <?php if ($this->_tpl_vars['dealer']['Personal_address']): ?><a title="<?php echo $this->_tpl_vars['lang']['visit_owner_page']; ?>
" href="<?php echo $this->_tpl_vars['dealer']['Personal_address']; ?>
"><?php endif; ?>
                    <?php echo $this->_tpl_vars['dealer']['Full_name']; ?>

                    <?php if ($this->_tpl_vars['dealer']['Personal_address']): ?></a><?php endif; ?>
                </li>
                                <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'accountAfterStats'), $this);?>

            </ul>

            <?php if ($this->_tpl_vars['dealer']['Listings_count']): ?>
                <div class="counter">
                    <span><?php echo $this->_tpl_vars['dealer']['Listings_count']; ?>
 <?php echo $this->_tpl_vars['lang']['listings']; ?>
</span>
                </div>
            <?php endif; ?>

            <?php if ($this->_tpl_vars['dealer']['Agents_count']): ?>
                <div class="counter mt-1">
                    <span><?php echo $this->_tpl_vars['dealer']['Agents_count']; ?>
 <?php echo $this->_tpl_vars['lang']['agents']; ?>
</span>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <ul class="info">
        <li class="fields">
            <?php $this->assign('phone', false); ?>
            <?php $this->assign('inline_fields', false); ?>

            <?php $_from = $this->_tpl_vars['dealer']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['item']):
?>
                <?php if ($this->_tpl_vars['item']['Key'] == 'First_name' || $this->_tpl_vars['item']['Key'] == 'Last_name' || $this->_tpl_vars['item']['Key'] == 'company_name'): ?><?php continue; ?><?php endif; ?>

                <?php if (! empty ( $this->_tpl_vars['item']['value'] ) && $this->_tpl_vars['item']['Details_page']): ?>
                    <?php if (((is_array($_tmp=$this->_tpl_vars['item']['Key'])) ? $this->_run_mod_handler('strpos', true, $_tmp, 'phone') : strpos($_tmp, 'phone')) || $this->_tpl_vars['item']['Type'] == 'phone'): ?>
                        <?php $this->assign('phone', $this->_tpl_vars['item']['value']); ?>
                        <?php $this->assign('hiddenPhone', $this->_tpl_vars['item']['Hidden']); ?>
                    <?php else: ?>
                        <?php $this->assign('inline_fields', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['inline_fields'])) ? $this->_run_mod_handler('cat', true, $_tmp, ', ') : smarty_modifier_cat($_tmp, ', ')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['item']['value']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['item']['value']))); ?>
                        <span><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'field_out_value.tpl') : smarty_modifier_cat($_tmp, 'field_out_value.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></span>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>

            <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'accountAfterFields'), $this);?>

        </li>

        <?php if ($this->_tpl_vars['phone']): ?>
            <li class="tel">
                <?php if (! $this->_tpl_vars['hiddenPhone']): ?><a dir="ltr" href="<?php if ($this->_tpl_vars['allow_contacts']): ?>tel:<?php echo $this->_tpl_vars['phone']; ?>
<?php else: ?>javascript://<?php endif; ?>"><?php endif; ?>
                <?php echo $this->_tpl_vars['phone']; ?>

                <?php if (! $this->_tpl_vars['hiddenPhone']): ?></a><?php endif; ?>
            </li>
        <?php endif; ?>
    </ul>
</article>

<!-- account item end -->