<?php /* Smarty version 2.6.31, created on 2023-12-21 01:14:53
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/news.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/news.tpl', 5, false),array('modifier', 'regex_replace', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/news.tpl', 31, false),array('modifier', 'strip_tags', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/news.tpl', 31, false),array('modifier', 'truncate', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/news.tpl', 33, false),array('modifier', 'strlen', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/news.tpl', 34, false),array('function', 'rlHook', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/news.tpl', 7, false),array('function', 'paging', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/news.tpl', 42, false),)), $this); ?>
<!-- news tpl -->

<div class="content-padding">
    <?php if ($this->_tpl_vars['article']): ?>
        <div class="date"><?php echo ((is_array($_tmp=$this->_tpl_vars['article']['Date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)) : smarty_modifier_date_format($_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null))); ?>
</div>

        <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'newsPostCaption'), $this);?>


        <article class="news">
            <?php echo $this->_tpl_vars['article']['content']; ?>

            <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'newsPostContent'), $this);?>

        </article>
        
        <div class="ralign">
            <a title="<?php echo $this->_tpl_vars['lang']['back_to_news']; ?>
" href="<?php echo $this->_tpl_vars['back_link']; ?>
"><?php echo $this->_tpl_vars['lang']['back_to_news']; ?>
</a>
        </div>
    <?php else: ?>
        <?php if ($this->_tpl_vars['news']): ?>
            <ul class="news">
            <?php $_from = $this->_tpl_vars['news']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['news_item']):
?>
                <li>
                    <div>
                        <div class="date"><?php echo ((is_array($_tmp=$this->_tpl_vars['news_item']['Date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)) : smarty_modifier_date_format($_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null))); ?>
</div>
                        <a class="link-large" title="<?php echo $this->_tpl_vars['news_item']['title']; ?>
" href="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pages']['news']; ?>
/<?php echo $this->_tpl_vars['news_item']['Path']; ?>
.html<?php else: ?>?page=<?php echo $this->_tpl_vars['pages']['news']; ?>
&amp;id=<?php echo $this->_tpl_vars['news_item']['ID']; ?>
<?php endif; ?>">
                            <h4><?php echo $this->_tpl_vars['news_item']['title']; ?>
</h4>
                        <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'newsPostCaption'), $this);?>
</a>
                    </div>
                    
                    <article>
                        <?php $this->assign('newsContent', $this->_tpl_vars['news_item']['content']); ?>
                        <?php $this->assign('newsContent', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['newsContent'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, "/(<style[^>]*>[^>]*<\\/style>)/mi", "") : smarty_modifier_regex_replace($_tmp, "/(<style[^>]*>[^>]*<\\/style>)/mi", "")))) ? $this->_run_mod_handler('strip_tags', true, $_tmp, false) : smarty_modifier_strip_tags($_tmp, false))); ?>

                        <?php echo ((is_array($_tmp=$this->_tpl_vars['newsContent'])) ? $this->_run_mod_handler('truncate', true, $_tmp, $this->_tpl_vars['config']['news_page_content_length'], "", false) : smarty_modifier_truncate($_tmp, $this->_tpl_vars['config']['news_page_content_length'], "", false)); ?>

                        <?php if (((is_array($_tmp=$this->_tpl_vars['newsContent'])) ? $this->_run_mod_handler('strlen', true, $_tmp) : strlen($_tmp)) > $this->_tpl_vars['config']['news_page_content_length']): ?>...<?php endif; ?>
                        <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'newsPostContent'), $this);?>

                    </article>
                </li>
            <?php endforeach; endif; unset($_from); ?>
            </ul>
            
            <!-- paging block -->
            <?php echo $this->_plugins['function']['paging'][0][0]->paging(array('calc' => $this->_tpl_vars['pageInfo']['calc'],'total' => $this->_tpl_vars['news'],'current' => $this->_tpl_vars['pageInfo']['current'],'per_page' => $this->_tpl_vars['config']['news_at_page']), $this);?>

            <!-- paging block end -->
        <?php else: ?>
            <div class="text-notice"><?php echo $this->_tpl_vars['lang']['no_news']; ?>
</div>
        <?php endif; ?>
    <?php endif; ?>
    
    <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'newsBottomTpl'), $this);?>

</div>

<!-- news tpl end -->