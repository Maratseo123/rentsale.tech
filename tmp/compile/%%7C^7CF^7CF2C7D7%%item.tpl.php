<?php /* Smarty version 2.6.31, created on 2024-08-31 23:45:40
         compiled from /var/www/u2273289/data/www/rentsale.tech/plugins/testimonials/item.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'regex_replace', '/var/www/u2273289/data/www/rentsale.tech/plugins/testimonials/item.tpl', 9, false),array('modifier', 'nl2br', '/var/www/u2273289/data/www/rentsale.tech/plugins/testimonials/item.tpl', 9, false),array('modifier', 'date_format', '/var/www/u2273289/data/www/rentsale.tech/plugins/testimonials/item.tpl', 22, false),)), $this); ?>
<!-- testimonial item -->

<div class="testimonial-item pb-4">
    <div class="p-4 hlight d-flex">
        <svg viewBox="0 0 18 13" class="testimonials-quote flex-shrink-0 header-usernav-icon-fill mt-1 mr-3">
            <use xlink:href="#quote-icon"></use>
        </svg>
        <p>
            <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['testimonial']['Testimonial'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, '/(https?\:\/\/[^\s]+)/', '<a href="$1">$1</a>') : smarty_modifier_regex_replace($_tmp, '/(https?\:\/\/[^\s]+)/', '<a href="$1">$1</a>')))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

        </p>
    </div>

    <div class="testimonial-bottom position-relative d-flex pt-1">
        <div class="testimonial-triangle"></div>
    
        <span class="author flex-fill">
            <?php if ($this->_tpl_vars['testimonial']['ProfileLink']): ?><a href="<?php echo $this->_tpl_vars['testimonial']['ProfileLink']; ?>
"><?php endif; ?>
            <?php echo $this->_tpl_vars['testimonial']['Author']; ?>

            <?php if ($this->_tpl_vars['testimonial']['ProfileLink']): ?></a><?php endif; ?>
        </span> 
        <span class="date mr-3">
            <span><?php echo ((is_array($_tmp=$this->_tpl_vars['testimonial']['Date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%d %b.') : smarty_modifier_date_format($_tmp, '%d %b.')); ?>
</span>
        </span>
    </div>
</div>

<!-- testimonial item end -->