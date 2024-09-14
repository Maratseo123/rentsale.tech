<?php /* Smarty version 2.6.31, created on 2023-12-10 15:58:58
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/plugins/rating/admin/listing_details.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/rating/admin/listing_details.tpl', 3, false),array('modifier', 'ceil', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/rating/admin/listing_details.tpl', 8, false),)), $this); ?>
<!-- listing ration block -->

<?php echo smarty_function_math(array('assign' => 'average_rating','equation' => 'round(rating/votes, 1)','rating' => $this->_tpl_vars['listing_data']['lr_rating'],'votes' => $this->_tpl_vars['listing_data']['lr_rating_votes']), $this);?>

<?php echo smarty_function_math(array('assign' => 'rating_rest','equation' => '(av_rating - floor(av_rating))*100+5','av_rating' => $this->_tpl_vars['average_rating']), $this);?>

<?php $this->assign('star', ('{')."number".('}')); ?>

<ul class="listing_rating_ul">
<?php unset($this->_sections['ratingS']);
$this->_sections['ratingS']['name'] = 'ratingS';
$this->_sections['ratingS']['start'] = (int)0;
$this->_sections['ratingS']['loop'] = is_array($_loop=$this->_tpl_vars['config']['rating_stars_number']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['ratingS']['show'] = true;
$this->_sections['ratingS']['max'] = $this->_sections['ratingS']['loop'];
$this->_sections['ratingS']['step'] = 1;
if ($this->_sections['ratingS']['start'] < 0)
    $this->_sections['ratingS']['start'] = max($this->_sections['ratingS']['step'] > 0 ? 0 : -1, $this->_sections['ratingS']['loop'] + $this->_sections['ratingS']['start']);
else
    $this->_sections['ratingS']['start'] = min($this->_sections['ratingS']['start'], $this->_sections['ratingS']['step'] > 0 ? $this->_sections['ratingS']['loop'] : $this->_sections['ratingS']['loop']-1);
if ($this->_sections['ratingS']['show']) {
    $this->_sections['ratingS']['total'] = min(ceil(($this->_sections['ratingS']['step'] > 0 ? $this->_sections['ratingS']['loop'] - $this->_sections['ratingS']['start'] : $this->_sections['ratingS']['start']+1)/abs($this->_sections['ratingS']['step'])), $this->_sections['ratingS']['max']);
    if ($this->_sections['ratingS']['total'] == 0)
        $this->_sections['ratingS']['show'] = false;
} else
    $this->_sections['ratingS']['total'] = 0;
if ($this->_sections['ratingS']['show']):

            for ($this->_sections['ratingS']['index'] = $this->_sections['ratingS']['start'], $this->_sections['ratingS']['iteration'] = 1;
                 $this->_sections['ratingS']['iteration'] <= $this->_sections['ratingS']['total'];
                 $this->_sections['ratingS']['index'] += $this->_sections['ratingS']['step'], $this->_sections['ratingS']['iteration']++):
$this->_sections['ratingS']['rownum'] = $this->_sections['ratingS']['iteration'];
$this->_sections['ratingS']['index_prev'] = $this->_sections['ratingS']['index'] - $this->_sections['ratingS']['step'];
$this->_sections['ratingS']['index_next'] = $this->_sections['ratingS']['index'] + $this->_sections['ratingS']['step'];
$this->_sections['ratingS']['first']      = ($this->_sections['ratingS']['iteration'] == 1);
$this->_sections['ratingS']['last']       = ($this->_sections['ratingS']['iteration'] == $this->_sections['ratingS']['total']);
?><li title="<?php echo $this->_tpl_vars['lang']['rating_rating']; ?>
: <?php echo $this->_tpl_vars['average_rating']; ?>
" <?php if ($this->_sections['ratingS']['iteration'] <= $this->_tpl_vars['average_rating']): ?>class="active"<?php endif; ?>><?php if (((is_array($_tmp=$this->_tpl_vars['average_rating'])) ? $this->_run_mod_handler('ceil', true, $_tmp) : ceil($_tmp)) == $this->_sections['ratingS']['iteration']): ?><div style="width: <?php echo $this->_tpl_vars['rating_rest']; ?>
%;"></div><?php endif; ?></li><?php endfor; endif; ?>
</ul>

<ul>
    <li><span class="name"><?php echo $this->_tpl_vars['lang']['rating_current_rating']; ?>
:</span> <?php echo $this->_tpl_vars['average_rating']; ?>
</li>
    <li><span class="name"><?php echo $this->_tpl_vars['lang']['rating_total_votes']; ?>
:</span> <?php echo $this->_tpl_vars['listing_data']['lr_rating_votes']; ?>
</li>
</ul>

<!-- listing ration block end -->