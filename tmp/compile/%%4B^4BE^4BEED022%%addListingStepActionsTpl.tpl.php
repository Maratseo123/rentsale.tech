<?php /* Smarty version 2.6.31, created on 2024-04-30 03:06:27
         compiled from /var/www/u2273289/data/www/rentsale.tech/plugins/autoPoster/view/addListingStepActionsTpl.tpl */ ?>
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