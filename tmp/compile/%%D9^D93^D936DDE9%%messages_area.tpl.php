<?php /* Smarty version 2.6.31, created on 2024-09-04 15:05:17
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/messages_area.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/messages_area.tpl', 10, false),array('modifier', 'replace', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/messages_area.tpl', 10, false),array('modifier', 'date_format', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/messages_area.tpl', 12, false),)), $this); ?>
<!-- messages area DOM -->
	
<?php $_from = $this->_tpl_vars['messages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['messagesF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['messagesF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['message']):
        $this->_foreach['messagesF']['iteration']++;
?>
<li class="<?php if ($this->_tpl_vars['message']['To'] != $this->_tpl_vars['account_info']['ID']): ?>me<?php endif; ?><?php if ($this->_tpl_vars['message']['Hide']): ?> removed<?php endif; ?>" id="message_<?php echo $this->_tpl_vars['message']['ID']; ?>
">

	<?php if ($this->_tpl_vars['message']['listing_url']): ?>
		<div><?php echo $this->_tpl_vars['lang']['regarding_short']; ?>
: <a href="<?php echo $this->_tpl_vars['message']['listing_url']; ?>
"><?php echo $this->_tpl_vars['message']['listing_title']; ?>
</a></div>
	<?php endif; ?>

	<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['message']['Message'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, '\n', '<br />') : smarty_modifier_replace($_tmp, '\n', '<br />')); ?>

	<div class="date">
		<?php if (((is_array($_tmp=$this->_tpl_vars['message']['Date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)) : smarty_modifier_date_format($_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null))) == ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)) : smarty_modifier_date_format($_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)))): ?>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['message']['Date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%H:%M') : smarty_modifier_date_format($_tmp, '%H:%M')); ?>

		<?php else: ?>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['message']['Date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)) : smarty_modifier_date_format($_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null))); ?>

		<?php endif; ?>
		<?php if ($this->_tpl_vars['message']['Hide']): ?>
            <?php $this->assign('replace_name', ('{')."name".('}')); ?>
			<span class="red" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['removed_by'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['replace_name'], $this->_tpl_vars['contact']['Full_name']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['replace_name'], $this->_tpl_vars['contact']['Full_name'])); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['removed_by'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['replace_name'], $this->_tpl_vars['contact']['Full_name']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['replace_name'], $this->_tpl_vars['contact']['Full_name'])); ?>
</span>
		<?php endif; ?>
	</div>
	<span class="delete" title="<?php echo $this->_tpl_vars['lang']['delete']; ?>
"></span>
</li>
<?php endforeach; endif; unset($_from); ?>
	
<!-- messages area DOM end -->