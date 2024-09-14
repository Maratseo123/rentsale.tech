<?php /* Smarty version 2.6.31, created on 2023-12-18 06:37:55
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/plugins/testimonials/box.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/testimonials/box.tpl', 12, false),array('function', 'pageUrl', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/testimonials/box.tpl', 20, false),)), $this); ?>
<!-- testimonials box -->

<?php if ($this->_tpl_vars['testimonial_box']): ?>
    <?php if ($this->_tpl_vars['testimonials_long']): ?>
        <div class="row">
        <?php $_from = $this->_tpl_vars['testimonial_box']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['tName'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['tName']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['tName']['iteration']++;
?>
            <?php $this->assign('read_more', false); ?>
            <?php if (($this->_foreach['tName']['iteration'] == $this->_foreach['tName']['total'])): ?>
                <?php $this->assign('read_more', true); ?>
            <?php endif; ?>
            <div class="col-md-4<?php if (! ($this->_foreach['tName']['iteration'] == $this->_foreach['tName']['total'])): ?> mb-4 mb-md-0<?php endif; ?>">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=(defined('RL_PLUGINS') ? @RL_PLUGINS : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'testimonials/box.item.tpl') : smarty_modifier_cat($_tmp, 'testimonials/box.item.tpl')), 'smarty_include_vars' => array('testimonial_item' => $this->_tpl_vars['item'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </div>
        <?php endforeach; endif; unset($_from); ?>
        </div>
    <?php else: ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=(defined('RL_PLUGINS') ? @RL_PLUGINS : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'testimonials/box.item.tpl') : smarty_modifier_cat($_tmp, 'testimonials/box.item.tpl')), 'smarty_include_vars' => array('testimonial_item' => $this->_tpl_vars['testimonial_box'],'read_more' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>
<?php else: ?>
    <div class="info pb-4"><?php echo $this->_tpl_vars['lang']['testimonials_no_testimonials']; ?>
 <a href="<?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'testimonials'), $this);?>
#add-testimonial"><?php echo $this->_tpl_vars['lang']['testimonials_add_testimonial']; ?>
</a></div>
<?php endif; ?>

<script class="fl-js-dynamic">
<?php echo '

$(function() {
    var color = $(\'.testimonial-item div.hlight\').css(\'background-color\');
    $(\'.testimonial-item .testimonial-triangle\').css(
        \'border-\' + (rlLangDir == \'rtl\' ? \'top\' : \'right\') + \'-color\',
        color
    );
});

'; ?>

</script>

<!-- testimonials box end -->