<?php /* Smarty version 2.6.31, created on 2023-12-18 01:51:24
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/agreement_fields.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/agreement_fields.tpl', 5, false),array('modifier', 'strstr', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/agreement_fields.tpl', 5, false),array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/agreement_fields.tpl', 22, false),array('function', 'pageUrl', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/agreement_fields.tpl', 21, false),array('function', 'phrase', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/agreement_fields.tpl', 22, false),)), $this); ?>
<!-- agreement fields -->

<?php $_from = $this->_tpl_vars['agreement_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ag_field']):
?>
    <div class="ag_fields <?php echo ''; ?><?php if (count($this->_tpl_vars['account_types']) > 1 && ( ! $this->_tpl_vars['selected_atype'] || ( $this->_tpl_vars['ag_field']['Values'] && $this->_tpl_vars['selected_atype'] && ((is_array($_tmp=$this->_tpl_vars['ag_field']['Values'])) ? $this->_run_mod_handler('strstr', true, $_tmp, $this->_tpl_vars['selected_atype']) : strstr($_tmp, $this->_tpl_vars['selected_atype'])) == false ) )): ?><?php echo 'hide'; ?><?php endif; ?><?php echo ''; ?>
" 
        data-types="<?php echo $this->_tpl_vars['ag_field']['Values']; ?>
">
        <label style="padding: 10px 0 5px;">
            <input value="1"
                type="checkbox" 
                name="profile[accept][<?php echo $this->_tpl_vars['ag_field']['Key']; ?>
]" 
                <?php if (isset ( $_POST['profile']['accept'][$this->_tpl_vars['ag_field']['Key']] )): ?>checked="checked"<?php endif; ?> 
                <?php if ($this->_tpl_vars['selected_atype'] && $_SESSION['page_info']['current'] != 'add_listing'): ?>disabled="disabled"<?php endif; ?> 
                <?php if ($this->_tpl_vars['data_form']): ?>form="<?php echo $this->_tpl_vars['data_form']; ?>
"<?php endif; ?> />
            &nbsp;<?php echo $this->_tpl_vars['lang']['agree']; ?>


            <a target="_blank" href="<?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => $this->_tpl_vars['ag_field']['Default']), $this);?>
">
                <?php echo $this->_plugins['function']['phrase'][0][0]->getPhrase(array('key' => ((is_array($_tmp='pages+name+')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['ag_field']['Default']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['ag_field']['Default']))), $this);?>

            </a>
        </label>
    </div>
<?php endforeach; endif; unset($_from); ?>

<!-- agreement fields end -->