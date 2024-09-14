<?php /* Smarty version 2.6.31, created on 2023-12-22 06:03:09
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/plugins/autoPoster/view/addListingStepActionsTpl.tpl */ ?>
<?php if ($this->_tpl_vars['cur_step'] == 'done'): ?>
    <script class="fl-js-dynamic">
        var listing_id = <?php echo $_SESSION['add_listing']['listing_id']; ?>
;
        <?php echo '
        $(document).ready(function () {
            if (listing_id) {
                autoPoster = new AutoPosters();
                autoPoster.sendPost(listing_id);
            }
        });
        '; ?>

    </script>
<?php endif; ?>