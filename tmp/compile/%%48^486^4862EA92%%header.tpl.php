<?php /* Smarty version 2.6.31, created on 2023-12-18 06:37:55
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/plugins/testimonials/header.tpl */ ?>
<!-- Testimonials plugin styles -->

<style>
<?php if ($this->_tpl_vars['tpl_settings']['dark_mode']): ?>
    <?php echo '
    .testimonial-triangle {
        border-right-color: var(--content-background-color) !important;
    }
    '; ?>

<?php endif; ?>

<?php echo '

.testimonials-form {
    max-width: 400px;
}
.testimonials-container {
    column-count: 2;
    column-gap: 20px;
}
.testimonial-item {
    break-inside: avoid-column;
}
.testimonial-item p,
.testimonials p {
    word-break: break-word;
}
.testimonials-quote {
    width: 18px;
    height: 13px;
}
.testimonial-triangle {
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 0 25px 25px 0;
    border-color: transparent transparent transparent transparent;
    position: absolute;
    top: 0;
    left: 25px;
}
.testimonial-bottom {
    padding-left: 58px;
}

@media (max-width: 767px) {
    .testimonials-container {
        column-count: 1;
    }
}

body[dir=rtl] .testimonial-triangle {
    border-width: 25px 25px 0 0;
    left: auto;
    right: 25px;
}
body[dir=rtl] .testimonial-bottom {
    padding-left: 0;
    padding-right: 58px;
}

'; ?>

</style>

<!-- Testimonials plugin styles end -->