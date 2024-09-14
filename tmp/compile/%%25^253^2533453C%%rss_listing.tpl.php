<?php /* Smarty version 2.6.31, created on 2023-12-21 05:26:25
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/rss_listing.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strtotime', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/rss_listing.tpl', 1, false),array('modifier', 'date', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/rss_listing.tpl', 2, false),array('modifier', 'replace', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/rss_listing.tpl', 5, false),array('modifier', 'regex_replace', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/rss_listing.tpl', 45, false),array('function', 'rlHook', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/rss_listing.tpl', 48, false),)), $this); ?>
<?php $this->assign('pubdate', ((is_array($_tmp=$this->_tpl_vars['listing']['Date'])) ? $this->_run_mod_handler('strtotime', true, $_tmp) : strtotime($_tmp))); ?>
<?php $this->assign('pubdate', ((is_array($_tmp='r')) ? $this->_run_mod_handler('date', true, $_tmp, $this->_tpl_vars['pubdate']) : date($_tmp, $this->_tpl_vars['pubdate']))); ?>

<item>
    <title><?php echo ((is_array($_tmp=$this->_tpl_vars['listing']['listing_title'])) ? $this->_run_mod_handler('replace', true, $_tmp, '&', '&amp;') : smarty_modifier_replace($_tmp, '&', '&amp;')); ?>
</title>
    <link><?php echo $this->_tpl_vars['listing']['url']; ?>
</link>
    <guid><?php echo $this->_tpl_vars['listing']['url']; ?>
</guid>
    <pubDate><?php echo $this->_tpl_vars['pubdate']; ?>
</pubDate>
        
    <category><?php echo ((is_array($_tmp=$this->_tpl_vars['listing']['name'])) ? $this->_run_mod_handler('replace', true, $_tmp, '&', '&amp;') : smarty_modifier_replace($_tmp, '&', '&amp;')); ?>
</category>
    <description><![CDATA[
    <table cellpadding="0" cellspacing="0">
    <tr>
        <?php if (! empty ( $this->_tpl_vars['listing']['Main_photo'] )): ?>
        <td valign="top">
            <a title="<?php echo $this->_tpl_vars['listing']['listing_title']; ?>
" <?php if ($this->_tpl_vars['config']['view_details_new_window']): ?>target="_blank"<?php endif; ?> href="<?php echo $this->_tpl_vars['listing']['url']; ?>
">
                <img alt="<?php echo $this->_tpl_vars['listing']['listing_title']; ?>
" src="<?php echo (defined('RL_FILES_URL') ? @RL_FILES_URL : null); ?>
<?php echo $this->_tpl_vars['listing']['Main_photo']; ?>
" />
            </a>
        </td>
        <td width="10px">&nbsp;</td>
        <?php else: ?>
        <td colspan="2"></td>
        <?php endif; ?>
        <td valign="top">
            <table cellpadding="0" cellspacing="0">
            <?php $_from = $this->_tpl_vars['listing']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['fListings'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fListings']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['item']):
        $this->_foreach['fListings']['iteration']++;
?>
            <?php if (! empty ( $this->_tpl_vars['item']['value'] ) && $this->_tpl_vars['item']['Details_page']): ?>
            <tr>
                <td><?php echo $this->_tpl_vars['item']['name']; ?>
:</td>
                <td width="10px"></td>
                <td>
                    <?php if ($this->_tpl_vars['f_first']): ?>
                        <a title="<?php echo $this->_tpl_vars['item']['value']; ?>
" <?php if ($this->_tpl_vars['config']['view_details_new_window']): ?>target="_blank"<?php endif; ?> href="<?php echo $this->_tpl_vars['listing']['url']; ?>
"><?php echo $this->_tpl_vars['item']['value']; ?>
</a>
                    <?php else: ?>
                        <?php echo $this->_tpl_vars['item']['value']; ?>

                    <?php endif; ?>
                </td>
            </tr>
            <?php $this->assign('f_first', false); ?>
            <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
            <tr>
                <td><?php echo $this->_tpl_vars['lang']['category']; ?>
:</td>
                <td></td>
                <td><a title="<?php echo $this->_tpl_vars['lang']['category']; ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['listing']['name'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, "/[^A-Za-z0-9\-]/", ' ') : smarty_modifier_regex_replace($_tmp, "/[^A-Za-z0-9\-]/", ' ')); ?>
" class="cat_caption" href="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pages'][$this->_tpl_vars['listing_type']['Page_key']]; ?>
/<?php echo $this->_tpl_vars['listing']['Path']; ?>
<?php if ($this->_tpl_vars['listing_type']['Cat_postfix']): ?>.html<?php else: ?>/<?php endif; ?><?php else: ?>?page=<?php echo $this->_tpl_vars['pages'][$this->_tpl_vars['listing_type']['Page_key']]; ?>
&amp;category=<?php echo $this->_tpl_vars['listing']['Category_ID']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['listing']['name']; ?>
</a></td>
            </tr>
            
            <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'xmlListingsAfterFields'), $this);?>

            
            </table>
        </td>
    </table>
    ]]></description>
</item>