<?php /* Smarty version 2.6.31, created on 2023-12-18 01:50:46
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/plugins/socialMetaData/social_meta_data.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/socialMetaData/social_meta_data.tpl', 3, false),array('modifier', 'strip_tags', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/socialMetaData/social_meta_data.tpl', 33, false),array('modifier', 'count', '/var/www/u2273289/data/www/heidenbauer.ru/plugins/socialMetaData/social_meta_data.tpl', 38, false),)), $this); ?>
<?php if ($this->_tpl_vars['pageInfo']['Controller'] == 'listing_details'): ?>
    <?php if ($this->_tpl_vars['pageInfo']['meta_title']): ?>
        <?php $this->assign('smd_page_title', ((is_array($_tmp=$this->_tpl_vars['pageInfo']['meta_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))); ?>
    <?php elseif ($this->_tpl_vars['pageInfo']['name']): ?>
        <?php $this->assign('smd_page_title', ((is_array($_tmp=$this->_tpl_vars['pageInfo']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))); ?>
    <?php elseif ($this->_tpl_vars['pageInfo']['title']): ?>
        <?php $this->assign('smd_page_title', ((is_array($_tmp=$this->_tpl_vars['pageInfo']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))); ?>
    <?php endif; ?>
<?php elseif ($this->_tpl_vars['pageInfo']['Controller'] == 'news' && ( $this->_tpl_vars['article'] || $_GET['nvar_1'] )): ?>
    <?php if ($this->_tpl_vars['pageInfo']['title']): ?>
        <?php $this->assign('smd_page_title', ((is_array($_tmp=$this->_tpl_vars['pageInfo']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))); ?>
    <?php else: ?>
        <?php $this->assign('smd_page_title', ((is_array($_tmp=$this->_tpl_vars['pageInfo']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))); ?>
    <?php endif; ?>
<?php elseif ($this->_tpl_vars['pageInfo']['Controller'] && $this->_tpl_vars['category']['ID'] && ( $this->_tpl_vars['category']['title'] || $this->_tpl_vars['category']['name'] )): ?>
    <?php if ($this->_tpl_vars['category']['title']): ?>
        <?php $this->assign('smd_page_title', ((is_array($_tmp=$this->_tpl_vars['category']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))); ?>
    <?php else: ?>
        <?php $this->assign('smd_page_title', ((is_array($_tmp=$this->_tpl_vars['category']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))); ?>
    <?php endif; ?>
<?php else: ?>
    <?php if ($this->_tpl_vars['pageInfo']['title']): ?>
        <?php $this->assign('smd_page_title', ((is_array($_tmp=$this->_tpl_vars['pageInfo']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))); ?>
    <?php elseif ($this->_tpl_vars['pageInfo']['name']): ?>
        <?php $this->assign('smd_page_title', ((is_array($_tmp=$this->_tpl_vars['pageInfo']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'))); ?>
    <?php endif; ?>
<?php endif; ?>

<!-- Twitter Card data -->
<meta name="twitter:card" content="<?php if ($this->_tpl_vars['pageInfo']['Controller'] == 'listing_details'): ?>product<?php else: ?>summary<?php endif; ?>">
<meta name="twitter:title" content="<?php echo $this->_tpl_vars['smd_page_title']; ?>
">
<?php if ($this->_tpl_vars['pageInfo']['meta_description']): ?>
<meta name="twitter:description" content="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['pageInfo']['meta_description'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">
<?php endif; ?>
<?php if ($this->_tpl_vars['config']['smd_twitter_name']): ?>
<meta name="twitter:site" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['smd_twitter_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">
<?php endif; ?>
<?php if (is_array ( $this->_tpl_vars['photos'] ) && count($this->_tpl_vars['photos']) > 1): ?>
<?php $_from = $this->_tpl_vars['photos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['listingPhotos'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['listingPhotos']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['photo']):
        $this->_foreach['listingPhotos']['iteration']++;
?>
<?php if (( $this->_tpl_vars['photo']['Type'] == 'photo' || $this->_tpl_vars['photo']['Type'] == 'picture' || $this->_tpl_vars['photo']['Type'] == 'main' ) && $this->_tpl_vars['photo']['Photo']): ?>
<?php if ($this->_tpl_vars['allow_photos'] || ($this->_foreach['listingPhotos']['iteration'] <= 1)): ?>
<meta name="twitter:image" content="<?php echo $this->_tpl_vars['photo']['Photo']; ?>
">
<?php endif; ?>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php else: ?>
<?php if ($this->_tpl_vars['smd_logo']): ?>
<meta name="twitter:image" content="<?php echo $this->_tpl_vars['smd_logo']; ?>
">
<?php endif; ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['pageInfo']['Controller'] == 'listing_details'): ?>
<?php if ($this->_tpl_vars['smd_price']): ?>
<meta name="twitter:data1" content="<?php echo $this->_tpl_vars['smd_price']['currency']; ?>
<?php echo $this->_tpl_vars['smd_price']['value']; ?>
">
<meta name="twitter:label1" content="Price">
<?php endif; ?>
<?php if ($this->_tpl_vars['smd_second_field']): ?>
<meta name="twitter:data2" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['smd_second_field']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">
<meta name="twitter:label2" content="<?php echo $this->_tpl_vars['smd_second_field']['key']; ?>
">
<?php endif; ?>
<?php endif; ?>

<!-- Open Graph data -->
<meta property="og:title" content="<?php echo $this->_tpl_vars['smd_page_title']; ?>
" />
<meta property="og:type" content="<?php if ($this->_tpl_vars['pageInfo']['Controller'] == 'listing_details'): ?>product<?php else: ?>website<?php endif; ?>" />
<?php if ($this->_tpl_vars['pageInfo']['meta_description']): ?>
<meta property="og:description" content="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['pageInfo']['meta_description'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
<?php endif; ?>
<meta property="og:url" content="http<?php if ($_SERVER['HTTPS'] == 'on'): ?>s<?php endif; ?>://<?php echo $_SERVER['HTTP_HOST']; ?>
<?php if ($_SERVER['REQUEST_URI'] != "/"): ?><?php echo $_SERVER['REQUEST_URI']; ?>
<?php endif; ?>" />
<?php if (is_array ( $this->_tpl_vars['photos'] ) && count($this->_tpl_vars['photos']) > 1): ?>
<?php $_from = $this->_tpl_vars['photos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['listingPhotos'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['listingPhotos']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['photo']):
        $this->_foreach['listingPhotos']['iteration']++;
?>
<?php if (( $this->_tpl_vars['photo']['Type'] == 'photo' || $this->_tpl_vars['photo']['Type'] == 'picture' || $this->_tpl_vars['photo']['Type'] == 'main' ) && $this->_tpl_vars['photo']['Photo']): ?>
<?php if ($this->_tpl_vars['allow_photos'] || ($this->_foreach['listingPhotos']['iteration'] <= 1)): ?>
<meta property="og:image" content="<?php echo $this->_tpl_vars['photo']['Photo']; ?>
" />
<?php if ($this->_foreach['listingPhotos']['iteration'] == 1 && $this->_tpl_vars['smd_logo_properties']): ?>
<meta property="og:image:type" content="<?php echo $this->_tpl_vars['smd_logo_properties']['mime']; ?>
" />
<meta property="og:image:width" content="<?php echo $this->_tpl_vars['smd_logo_properties']['width']; ?>
" />
<meta property="og:image:height" content="<?php echo $this->_tpl_vars['smd_logo_properties']['height']; ?>
" />
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php else: ?>
<?php if ($this->_tpl_vars['smd_logo']): ?>
<meta property="og:image" content="<?php echo $this->_tpl_vars['smd_logo']; ?>
" />
<?php if ($this->_tpl_vars['smd_logo_properties']): ?>
<meta property="og:image:type" content="<?php echo $this->_tpl_vars['smd_logo_properties']['mime']; ?>
" />
<meta property="og:image:width" content="<?php echo $this->_tpl_vars['smd_logo_properties']['width']; ?>
" />
<meta property="og:image:height" content="<?php echo $this->_tpl_vars['smd_logo_properties']['height']; ?>
" />
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['config']['site_name']): ?>
<meta property="og:site_name" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['site_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
<?php endif; ?>
<?php if ($this->_tpl_vars['pageInfo']['Controller'] == 'listing_details' && $this->_tpl_vars['smd_price'] && $this->_tpl_vars['curConv_rates'][$this->_tpl_vars['smd_price']['currency_code']]['Code']): ?>
<meta property="og:price:amount" content="<?php echo $this->_tpl_vars['smd_price']['og_value']; ?>
" />
<meta property="og:price:currency" content="<?php echo $this->_tpl_vars['curConv_rates'][$this->_tpl_vars['smd_price']['currency_code']]['Code']; ?>
" />
<?php endif; ?>
<?php if ($this->_tpl_vars['config']['smd_fb_admins']): ?>
<meta property="fb:admins" content="<?php echo $this->_tpl_vars['config']['smd_fb_admins']; ?>
" />
<?php endif; ?>
<?php if ($this->_tpl_vars['config']['smd_fb_appid']): ?>
<meta property="fb:app_id" content="<?php echo $this->_tpl_vars['config']['smd_fb_appid']; ?>
" />
<?php endif; ?>