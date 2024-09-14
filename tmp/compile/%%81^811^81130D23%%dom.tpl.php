<?php /* Smarty version 2.6.31, created on 2024-07-02 17:38:08
         compiled from /var/www/u2273289/data/www/rentsale.tech/plugins/testimonials/dom.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/plugins/testimonials/dom.tpl', 6, false),array('modifier', 'count', '/var/www/u2273289/data/www/rentsale.tech/plugins/testimonials/dom.tpl', 10, false),array('function', 'paging', '/var/www/u2273289/data/www/rentsale.tech/plugins/testimonials/dom.tpl', 10, false),)), $this); ?>
<!-- dom tpl -->

<?php if ($this->_tpl_vars['testimonials']): ?>
    <div class="testimonials-container">
    <?php $_from = $this->_tpl_vars['testimonials']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['testimonialsF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['testimonialsF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['testimonial']):
        $this->_foreach['testimonialsF']['iteration']++;
?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=(defined('RL_PLUGINS') ? @RL_PLUGINS : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'testimonials/item.tpl') : smarty_modifier_cat($_tmp, 'testimonials/item.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endforeach; endif; unset($_from); ?>
    </div>

    <?php echo $this->_plugins['function']['paging'][0][0]->paging(array('calc' => $this->_tpl_vars['countTestimonials'],'total' => count($this->_tpl_vars['testimonials']),'current' => $this->_tpl_vars['testimonials_page'],'per_page' => $this->_tpl_vars['config']['testimonials_per_page']), $this);?>
 
<?php endif; ?>

<!-- dom tpl end -->