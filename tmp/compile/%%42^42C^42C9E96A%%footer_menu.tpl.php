<?php /* Smarty version 2.6.31, created on 2023-12-18 01:50:46
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/menus/footer_menu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'array_values', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/menus/footer_menu.tpl', 3, false),array('modifier', 'count', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/menus/footer_menu.tpl', 4, false),array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/menus/footer_menu.tpl', 8, false),array('modifier', 'replace', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/menus/footer_menu.tpl', 14, false),array('function', 'math', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/menus/footer_menu.tpl', 4, false),array('function', 'phrase', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/menus/footer_menu.tpl', 8, false),)), $this); ?>
<!-- footer menu block -->

<?php $this->assign('footer_menu', array_values($this->_tpl_vars['footer_menu'])); ?>
<?php echo smarty_function_math(array('equation' => 'ceil(total/3)','total' => count($this->_tpl_vars['footer_menu']),'assign' => 'per_column'), $this);?>


<?php unset($this->_sections['menu_column']);
$this->_sections['menu_column']['name'] = 'menu_column';
$this->_sections['menu_column']['loop'] = is_array($_loop=3) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['menu_column']['max'] = (int)3;
$this->_sections['menu_column']['show'] = true;
if ($this->_sections['menu_column']['max'] < 0)
    $this->_sections['menu_column']['max'] = $this->_sections['menu_column']['loop'];
$this->_sections['menu_column']['step'] = 1;
$this->_sections['menu_column']['start'] = $this->_sections['menu_column']['step'] > 0 ? 0 : $this->_sections['menu_column']['loop']-1;
if ($this->_sections['menu_column']['show']) {
    $this->_sections['menu_column']['total'] = min(ceil(($this->_sections['menu_column']['step'] > 0 ? $this->_sections['menu_column']['loop'] - $this->_sections['menu_column']['start'] : $this->_sections['menu_column']['start']+1)/abs($this->_sections['menu_column']['step'])), $this->_sections['menu_column']['max']);
    if ($this->_sections['menu_column']['total'] == 0)
        $this->_sections['menu_column']['show'] = false;
} else
    $this->_sections['menu_column']['total'] = 0;
if ($this->_sections['menu_column']['show']):

            for ($this->_sections['menu_column']['index'] = $this->_sections['menu_column']['start'], $this->_sections['menu_column']['iteration'] = 1;
                 $this->_sections['menu_column']['iteration'] <= $this->_sections['menu_column']['total'];
                 $this->_sections['menu_column']['index'] += $this->_sections['menu_column']['step'], $this->_sections['menu_column']['iteration']++):
$this->_sections['menu_column']['rownum'] = $this->_sections['menu_column']['iteration'];
$this->_sections['menu_column']['index_prev'] = $this->_sections['menu_column']['index'] - $this->_sections['menu_column']['step'];
$this->_sections['menu_column']['index_next'] = $this->_sections['menu_column']['index'] + $this->_sections['menu_column']['step'];
$this->_sections['menu_column']['first']      = ($this->_sections['menu_column']['iteration'] == 1);
$this->_sections['menu_column']['last']       = ($this->_sections['menu_column']['iteration'] == $this->_sections['menu_column']['total']);
?>
    <ul class="col-sm-6 col-md-3 mb-4">
    	<li class="footer__menu-title"><?php echo $this->_plugins['function']['phrase'][0][0]->getPhrase(array('key' => ((is_array($_tmp='footer_menu_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_sections['menu_column']['iteration']) : smarty_modifier_cat($_tmp, $this->_sections['menu_column']['iteration']))), $this);?>
</li>
        <?php echo smarty_function_math(array('assign' => 'start','equation' => '(iter-1)*per_column','iter' => $this->_sections['menu_column']['iteration'],'per_column' => $this->_tpl_vars['per_column']), $this);?>

        <?php unset($this->_sections['item']);
$this->_sections['item']['name'] = 'item';
$this->_sections['item']['loop'] = is_array($_loop=$this->_tpl_vars['footer_menu']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['item']['start'] = (int)$this->_tpl_vars['start'];
$this->_sections['item']['max'] = (int)$this->_tpl_vars['per_column'];
$this->_sections['item']['show'] = true;
if ($this->_sections['item']['max'] < 0)
    $this->_sections['item']['max'] = $this->_sections['item']['loop'];
$this->_sections['item']['step'] = 1;
if ($this->_sections['item']['start'] < 0)
    $this->_sections['item']['start'] = max($this->_sections['item']['step'] > 0 ? 0 : -1, $this->_sections['item']['loop'] + $this->_sections['item']['start']);
else
    $this->_sections['item']['start'] = min($this->_sections['item']['start'], $this->_sections['item']['step'] > 0 ? $this->_sections['item']['loop'] : $this->_sections['item']['loop']-1);
if ($this->_sections['item']['show']) {
    $this->_sections['item']['total'] = min(ceil(($this->_sections['item']['step'] > 0 ? $this->_sections['item']['loop'] - $this->_sections['item']['start'] : $this->_sections['item']['start']+1)/abs($this->_sections['item']['step'])), $this->_sections['item']['max']);
    if ($this->_sections['item']['total'] == 0)
        $this->_sections['item']['show'] = false;
} else
    $this->_sections['item']['total'] = 0;
if ($this->_sections['item']['show']):

            for ($this->_sections['item']['index'] = $this->_sections['item']['start'], $this->_sections['item']['iteration'] = 1;
                 $this->_sections['item']['iteration'] <= $this->_sections['item']['total'];
                 $this->_sections['item']['index'] += $this->_sections['item']['step'], $this->_sections['item']['iteration']++):
$this->_sections['item']['rownum'] = $this->_sections['item']['iteration'];
$this->_sections['item']['index_prev'] = $this->_sections['item']['index'] - $this->_sections['item']['step'];
$this->_sections['item']['index_next'] = $this->_sections['item']['index'] + $this->_sections['item']['step'];
$this->_sections['item']['first']      = ($this->_sections['item']['iteration'] == 1);
$this->_sections['item']['last']       = ($this->_sections['item']['iteration'] == $this->_sections['item']['total']);
?>
            <?php $this->assign('index', $this->_sections['item']['index']); ?>
            <?php $this->assign('footerMenu', $this->_tpl_vars['footer_menu'][$this->_tpl_vars['index']]); ?>
    	    <li>
                <a <?php if ($this->_tpl_vars['page'] == $this->_tpl_vars['footerMenu']['Path']): ?>class="active"<?php endif; ?> <?php if ($this->_tpl_vars['footerMenu']['No_follow'] || $this->_tpl_vars['footerMenu']['Login']): ?>rel="nofollow"<?php endif; ?>title="<?php echo $this->_tpl_vars['footerMenu']['title']; ?>
" href="<?php if ($this->_tpl_vars['footerMenu']['Page_type'] != 'external'): ?><?php echo $this->_tpl_vars['rlBase']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['pageInfo']['Controller'] != 'add_listing' && $this->_tpl_vars['footerMenu']['Controller'] == 'add_listing' && ! empty ( $this->_tpl_vars['category']['Path'] ) && ! $this->_tpl_vars['category']['Lock']): ?><?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['footerMenu']['Path']; ?>
/<?php echo $this->_tpl_vars['category']['Path']; ?>
/<?php echo $this->_tpl_vars['steps']['plan']['path']; ?>
.html<?php else: ?>?page=<?php echo $this->_tpl_vars['footerMenu']['Path']; ?>
&amp;step=<?php echo $this->_tpl_vars['steps']['plan']['path']; ?>
&amp;id=<?php echo $this->_tpl_vars['category']['ID']; ?>
<?php endif; ?><?php else: ?><?php if ($this->_tpl_vars['footerMenu']['Page_type'] == 'external'): ?><?php echo $this->_tpl_vars['footerMenu']['Controller']; ?>
<?php else: ?><?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php if ($this->_tpl_vars['footerMenu']['Path'] != ''): ?><?php echo $this->_tpl_vars['footerMenu']['Path']; ?>
.html<?php echo $this->_tpl_vars['footerMenu']['Get_vars']; ?>
<?php endif; ?><?php else: ?><?php if ($this->_tpl_vars['footerMenu']['Path'] != ''): ?>?page=<?php echo $this->_tpl_vars['footerMenu']['Path']; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['footerMenu']['Get_vars'])) ? $this->_run_mod_handler('replace', true, $_tmp, '?', '&amp;') : smarty_modifier_replace($_tmp, '?', '&amp;')); ?>
<?php endif; ?><?php endif; ?><?php endif; ?><?php endif; ?>">
                    <?php echo $this->_tpl_vars['footerMenu']['name']; ?>

                </a>
            </li>
        <?php endfor; endif; ?>
    </ul>
<?php endfor; endif; ?>

<!-- footer menu block end -->