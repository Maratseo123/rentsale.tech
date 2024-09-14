<?php /* Smarty version 2.6.31, created on 2024-05-02 03:32:11
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/news_block.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/news_block.tpl', 9, false),array('modifier', 'regex_replace', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/news_block.tpl', 18, false),array('modifier', 'strip_tags', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/news_block.tpl', 18, false),array('modifier', 'truncate', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/news_block.tpl', 20, false),array('modifier', 'strlen', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/news_block.tpl', 21, false),array('function', 'pageUrl', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/blocks/news_block.tpl', 27, false),)), $this); ?>
<!-- news block tpl -->

<?php if (! empty ( $this->_tpl_vars['all_news'] )): ?>
    <ul class="news">
    <?php $_from = $this->_tpl_vars['all_news']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['newsData']):
?>
        <li>
            <div>
                <div class="date">
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['newsData']['Date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)) : smarty_modifier_date_format($_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null))); ?>

                </div>
                
                <a title="<?php echo $this->_tpl_vars['newsData']['title']; ?>
" href="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pages']['news']; ?>
/<?php echo $this->_tpl_vars['newsData']['Path']; ?>
.html<?php else: ?>?page=<?php echo $this->_tpl_vars['pages']['news']; ?>
&amp;id=<?php echo $this->_tpl_vars['newsData']['ID']; ?>
<?php endif; ?>">
                    <h4><?php echo $this->_tpl_vars['newsData']['title']; ?>
</h4>
                </a>
            </div>
            <article>
                <?php $this->assign('newsContent', $this->_tpl_vars['newsData']['content']); ?>
                <?php $this->assign('newsContent', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['newsContent'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, "/(<style[^>]*>[^>]*<\\/style>)/mi", "") : smarty_modifier_regex_replace($_tmp, "/(<style[^>]*>[^>]*<\\/style>)/mi", "")))) ? $this->_run_mod_handler('strip_tags', true, $_tmp, false) : smarty_modifier_strip_tags($_tmp, false))); ?>

                <?php echo ((is_array($_tmp=$this->_tpl_vars['newsContent'])) ? $this->_run_mod_handler('truncate', true, $_tmp, $this->_tpl_vars['config']['news_block_content_length'], "", false) : smarty_modifier_truncate($_tmp, $this->_tpl_vars['config']['news_block_content_length'], "", false)); ?>

                <?php if (((is_array($_tmp=$this->_tpl_vars['newsContent'])) ? $this->_run_mod_handler('strlen', true, $_tmp) : strlen($_tmp)) > $this->_tpl_vars['config']['news_block_content_length']): ?>...<?php endif; ?>
            </article>
        </li>
    <?php endforeach; endif; unset($_from); ?>
    </ul>
    <div class="ralign">
        <a title="<?php echo $this->_tpl_vars['lang']['all_news']; ?>
" href="<?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'news'), $this);?>
"><?php echo $this->_tpl_vars['lang']['all_news']; ?>
</a>
    </div>
<?php else: ?>
    <?php echo $this->_tpl_vars['lang']['no_news']; ?>

<?php endif; ?>

<!-- news block tpl end -->