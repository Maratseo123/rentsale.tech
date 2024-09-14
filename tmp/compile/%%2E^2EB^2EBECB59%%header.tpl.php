<?php /* Smarty version 2.6.31, created on 2024-04-24 15:46:43
         compiled from /var/www/u2273289/data/www/rentsale.tech/plugins/listings_box/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strpos', '/var/www/u2273289/data/www/rentsale.tech/plugins/listings_box/header.tpl', 130, false),)), $this); ?>
<!-- listing box grid-view box styles -->

<style>
<?php echo '

ul.lb-box-grid li.item .photo {
    width: 60px;
    height: 60px;
    float: left;
    margin-right: 10px;
    padding: 0;
}
ul.lb-box-grid li.item .photo img {
    width: 100%;
    height: 100%;
}

ul.lb-box-grid > li div.picture img {
    background-size: contain!important;
}
/* craigslist fallback end */
ul.lb-box-grid li.item ul {
    padding: 0!important;
    margin: 0!important;
    overflow: hidden;
    background: transparent;
    box-shadow: none;
    width: auto!important;
}
ul.lb-box-grid li.item ul > li.title {
    margin: -2px 0 5px 0;
    text-overflow: ellipsis;
    padding: 0px;

    position: static;
    background: transparent;

    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
}
ul.lb-box-grid li.item ul > li.title > a {
    white-space: normal;
}
ul.lb-box-grid li.item span.price-tag {
    font-weight: normal;
}

/* rlt option */
body[dir=rtl]  ul.lb-box-grid li.item .photo {
    float: right;
    margin-right: 0;
    margin-left: 10px;
}

/*** ALL DESKTOPS VIEW ***/
@media screen and (min-width: 992px) {
    .side_block ul.lb-box-grid li.col-md-12:not(:last-child) {
        margin-bottom: 10px;
    }
}
/*** MIDDLE DESKTOP VIEW ***/
@media screen and (min-width: 992px) and (max-width: 1199px) {
    .two-middle ul.lb-box-grid li.col-md-12:not(:last-child) {
        margin-bottom: 10px;
    }
}
/*** LARGE DESKTOP VIEW ***/
@media screen and (min-width: 1200px) {
    .two-middle ul.lb-box-grid li.col-md-12:not(.col-lg-6):not(:last-child) {
        margin-bottom: 10px;
    }
}
/*** MOBILE VIEW ***/
@media screen and (max-width: 767px) {
    ul.lb-box-grid li.item {
        max-width: none;
    }
    ul.lb-box-grid li.item:not(:last-child) {
        margin-bottom: 10px;
    }
}

'; ?>

</style>

<!-- listing box grid-view box styles end -->
<?php if (preg_match ( '/(_flatty|_modern|_modern_wide|escort.*wide)$/' , $this->_tpl_vars['tpl_settings']['name'] )): ?>
    <!-- listing box grid-view box styles | flatty fallback -->
    <style>
    <?php echo '

    {if  $tpl_settings.name == \'escort_rainbow\'}
        ul.featured.lb-box-grid > li > ul {
            position: relative;
            display: block;
            white-space: normal;
        }
    {/if}

    ul.lb-box-grid li.item ul {
        padding: 0!important;
        text-align: left;
    }
    body[dir=rtl] ul.lb-box-grid li.item ul {
        text-align: right;
    }
    ul.lb-box-grid li.item .photo img {
        background-size: cover;
        background-position: center;
        background-image: url(\''; ?>
<?php echo $this->_tpl_vars['rlTplBase']; ?>
<?php echo 'img/no-picture.png\');
    }

    '; ?>

    </style>
    <!-- listing box grid-view box styles | flatty fallback end -->
<?php elseif ($this->_tpl_vars['tpl_settings']['name'] == 'boats_seaman_wide'): ?>
    <!-- boats seaman fallback -->
    <style>
    <?php echo '

    ul.lb-box-grid li.item ul > li.title > a {
        color: inherit;
    }

    '; ?>

    </style>
    <!-- boats seaman fallback end -->
<?php elseif (((is_array($_tmp=$this->_tpl_vars['tpl_settings']['name'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '_nova') : strpos($_tmp, '_nova'))): ?>
    <!-- listing box grid-view box styles | nova fallback -->
    <style>
    <?php echo '

    '; ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['tpl_settings']['name'])) ? $this->_run_mod_handler('strpos', true, $_tmp, '_rainbow') : strpos($_tmp, '_rainbow')) === false): ?><?php echo '
    ul.lb-box-grid li.item .picture.photo {
        border: 1px #E8E8E8 solid;
        border-radius: 4px;
        overflow: hidden;
    }
    '; ?>
<?php endif; ?><?php echo '


    ul.lb-box-grid > li div.picture img {
        background-size: 50%!important;
    }
    ul.featured.lb-box-grid > li > ul {
        border: 0px;
        border-radius: 0;
    }

    '; ?>

    </style>
<?php endif; ?>

<?php if (((is_array($_tmp=$this->_tpl_vars['tpl_settings']['name'])) ? $this->_run_mod_handler('strpos', true, $_tmp, 'escort_') : strpos($_tmp, 'escort_'))): ?>
    <!-- escort wide fallback -->
    <style>
    <?php echo '

    ul.lb-box-grid > li > ul > li a {
        font-size: 1.071em!important;
    }

    '; ?>

    </style>
    <!-- escort wide fallback end -->
<?php endif; ?>
<?php if ($this->_tpl_vars['tpl_settings']['name'] == 'general_flatty' && $this->_tpl_vars['pageInfo']['Controller'] == 'listing_details'): ?>
    <!-- general flatty fallback -->
    <style>
    <?php echo '

    @media screen and (max-width: 991px) and (min-width: 768px) {
        ul.lb-box-grid > li {
            margin-bottom: 10px;
            padding: 0!important;
        }
        ul.lb-box-grid > li:last-child {
            margin-bottom: 0;
        }
    }

    '; ?>

    </style>
    <!-- general flatty fallback end -->
<?php endif; ?>