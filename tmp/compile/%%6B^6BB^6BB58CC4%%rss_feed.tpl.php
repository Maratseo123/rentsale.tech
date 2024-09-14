<?php /* Smarty version 2.6.31, created on 2024-05-02 03:34:14
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/rss_feed.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/rss_feed.tpl', 8, false),array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/rss_feed.tpl', 23, false),array('modifier', 'strtotime', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/rss_feed.tpl', 42, false),array('modifier', 'date', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/rss_feed.tpl', 43, false),array('function', 'rlHook', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/rss_feed.tpl', 64, false),)), $this); ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="utf-8"<?php echo '?>'; ?>

<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
<channel>
<image>
    <url><?php echo $this->_tpl_vars['rlTplBase']; ?>
img/logo.png</url>
    <title><?php echo ((is_array($_tmp=$this->_tpl_vars['site_name'])) ? $this->_run_mod_handler('replace', true, $_tmp, '&', '&amp;') : smarty_modifier_replace($_tmp, '&', '&amp;')); ?>
</title>
    <link><?php echo (defined('RL_URL_HOME') ? @RL_URL_HOME : null); ?>
</link>
</image>

<title><?php echo $this->_tpl_vars['rss']['title']; ?>
</title>
<description><?php echo $this->_tpl_vars['rss']['description']; ?>
</description>
<link><?php echo $this->_tpl_vars['rss']['back_link']; ?>
</link>
<atom:link href="<?php echo $_SERVER['SCRIPT_URI']; ?>
" rel="self" type="application/rss+xml" />

<?php if ($this->_tpl_vars['rss_item'] == 'account-listings'): ?>
    <?php $_from = $this->_tpl_vars['listings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['listing']):
?>
        <?php if ($this->_tpl_vars['listing']['Listing_type']): ?>
            <?php $this->assign('listing_type', $this->_tpl_vars['listing_types'][$this->_tpl_vars['listing']['Listing_type']]); ?>
        <?php endif; ?>
        
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'rss_listing.tpl') : smarty_modifier_cat($_tmp, 'rss_listing.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endforeach; endif; unset($_from); ?>
<?php elseif ($this->_tpl_vars['rss_item'] == 'category'): ?>
    <?php $_from = $this->_tpl_vars['listings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['listing']):
?>
        <?php if ($this->_tpl_vars['listing']['Listing_type']): ?>
            <?php $this->assign('listing_type', $this->_tpl_vars['listing_types'][$this->_tpl_vars['listing']['Listing_type']]); ?>
        <?php endif; ?>
        
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'rss_listing.tpl') : smarty_modifier_cat($_tmp, 'rss_listing.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endforeach; endif; unset($_from); ?>
<?php elseif ($this->_tpl_vars['rss_item'] == 'news'): ?>
    <?php $_from = $this->_tpl_vars['news']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['news_item']):
?>
        <?php $this->assign('news_item_url', $this->_tpl_vars['rlBase']); ?>
        <?php if ($this->_tpl_vars['config']['mod_rewrite']): ?>
            <?php $this->assign('news_item_url', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['news_item_url'])) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['pages']['news']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['pages']['news'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '/') : smarty_modifier_cat($_tmp, '/')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['news_item']['Path']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['news_item']['Path'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '.html') : smarty_modifier_cat($_tmp, '.html'))); ?>
        <?php else: ?>
            <?php $this->assign('news_item_url', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['news_item_url'])) ? $this->_run_mod_handler('cat', true, $_tmp, '?page=') : smarty_modifier_cat($_tmp, '?page=')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['pages']['news']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['pages']['news'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '&id=') : smarty_modifier_cat($_tmp, '&id=')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['news_item']['ID']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['news_item']['ID']))); ?>
        <?php endif; ?>

            <?php $this->assign('pubdate', ((is_array($_tmp=$this->_tpl_vars['news_item']['Date'])) ? $this->_run_mod_handler('strtotime', true, $_tmp) : strtotime($_tmp))); ?>
            <?php $this->assign('pubdate', ((is_array($_tmp='r')) ? $this->_run_mod_handler('date', true, $_tmp, $this->_tpl_vars['pubdate']) : date($_tmp, $this->_tpl_vars['pubdate']))); ?>

        <item>
            <title><?php echo ((is_array($_tmp=$this->_tpl_vars['news_item']['title'])) ? $this->_run_mod_handler('replace', true, $_tmp, '&', '&amp;') : smarty_modifier_replace($_tmp, '&', '&amp;')); ?>
</title>
            <pubDate><?php echo $this->_tpl_vars['pubdate']; ?>
</pubDate>
            <link><?php echo $this->_tpl_vars['news_item_url']; ?>
</link>
            <guid><?php echo $this->_tpl_vars['news_item_url']; ?>
</guid>
            <description><![CDATA[<?php echo $this->_tpl_vars['news_item']['content']; ?>
]]></description>
            <?php echo $this->_tpl_vars['tplRssNewsItem']; ?>

        </item>
    <?php endforeach; endif; unset($_from); ?>
<?php else: ?>
    <?php $_from = $this->_tpl_vars['listings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['listing']):
?>
        <?php if ($this->_tpl_vars['listing']['Listing_type']): ?>
            <?php $this->assign('listing_type', $this->_tpl_vars['listing_types'][$this->_tpl_vars['listing']['Listing_type']]); ?>
        <?php endif; ?>
        
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'rss_listing.tpl') : smarty_modifier_cat($_tmp, 'rss_listing.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

<?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'tplRssFeedBottom'), $this);?>


</channel>
</rss>