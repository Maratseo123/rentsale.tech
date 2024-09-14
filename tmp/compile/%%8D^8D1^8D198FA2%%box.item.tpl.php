<?php /* Smarty version 2.6.31, created on 2024-08-29 09:08:30
         compiled from /var/www/u2273289/data/www/rentsale.tech/plugins/testimonials/box.item.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', '/var/www/u2273289/data/www/rentsale.tech/plugins/testimonials/box.item.tpl', 3, false),array('modifier', 'regex_replace', '/var/www/u2273289/data/www/rentsale.tech/plugins/testimonials/box.item.tpl', 3, false),array('modifier', 'nl2br', '/var/www/u2273289/data/www/rentsale.tech/plugins/testimonials/box.item.tpl', 3, false),array('function', 'pageUrl', '/var/www/u2273289/data/www/rentsale.tech/plugins/testimonials/box.item.tpl', 10, false),)), $this); ?>
<!-- testimonial item box -->
<?php if ($this->_tpl_vars['block']['Tpl']): ?>
    <p><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['testimonial_item']['Testimonial'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 320, ' ...', false) : smarty_modifier_truncate($_tmp, 320, ' ...', false)))) ? $this->_run_mod_handler('regex_replace', true, $_tmp, '/(https?\:\/\/[^\s\n\t]+)/', '<a href="$1">$1</a>') : smarty_modifier_regex_replace($_tmp, '/(https?\:\/\/[^\s\n\t]+)/', '<a href="$1">$1</a>')))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>

    <div class="d-flex flex-wrap">
        <span class="date flex-fill pt-2 pr-2 font-size-sm mr-auto">
            <?php echo $this->_tpl_vars['testimonial_item']['Author']; ?>

        </span>

        <?php if ($this->_tpl_vars['read_more']): ?><a class="mx-auto pt-2" href="<?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'testimonials'), $this);?>
"><?php echo $this->_tpl_vars['lang']['testimonials_read_more']; ?>
</a><?php endif; ?>
    </div>
<?php else: ?>
    <div class="testimonial-item">
        <div class="p-4 hlight d-flex">
            <svg viewBox="0 0 18 13" class="testimonials-quote flex-shrink-0 header-usernav-icon-fill mt-1 mr-3">
                <use xlink:href="#quote-icon"></use>
            </svg>
            <p>
                <?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['testimonial_item']['Testimonial'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 320, ' ...', false) : smarty_modifier_truncate($_tmp, 320, ' ...', false)))) ? $this->_run_mod_handler('regex_replace', true, $_tmp, '/(https?\:\/\/[^\s\n\t]+)/', '<a href="$1">$1</a>') : smarty_modifier_regex_replace($_tmp, '/(https?\:\/\/[^\s\n\t]+)/', '<a href="$1">$1</a>')))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

            </p>
        </div>

        <div class="testimonial-bottom position-relative d-flex flex-wrap">
            <div class="testimonial-triangle"></div>
        
            <span class="pt-1 author date font-size-sm flex-fill">
                <?php echo $this->_tpl_vars['testimonial_item']['Author']; ?>

            </span> 
            
            <?php if ($this->_tpl_vars['read_more']): ?><a class="mx-auto pt-1" href="<?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'testimonials'), $this);?>
"><?php echo $this->_tpl_vars['lang']['testimonials_read_more']; ?>
</a><?php endif; ?>
        </div>
    </div>
<?php endif; ?>
<!-- testimonial item box end -->