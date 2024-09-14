<?php /* Smarty version 2.6.31, created on 2023-12-18 01:57:30
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/components/statistics/_statistics.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'addCSS', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/components/statistics/_statistics.tpl', 4, false),array('function', 'pageUrl', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/components/statistics/_statistics.tpl', 127, false),array('function', 'math', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/components/statistics/_statistics.tpl', 131, false),array('function', 'phrase', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/components/statistics/_statistics.tpl', 140, false),array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/components/statistics/_statistics.tpl', 4, false),)), $this); ?>
<!-- statistics box -->

<?php if ($this->_tpl_vars['statistics_block']): ?>
    <?php echo $this->_plugins['function']['addCSS'][0][0]->smartyAddCSS(array('file' => ((is_array($_tmp=$this->_tpl_vars['rlTplBase'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'components/statistics/statistics.css') : smarty_modifier_cat($_tmp, 'components/statistics/statistics.css'))), $this);?>


    <?php if (! $this->_tpl_vars['side_bar_exists'] && ! $this->_tpl_vars['block']['Tpl'] && ( $this->_tpl_vars['block']['Side'] == 'top' || $this->_tpl_vars['block']['Side'] == 'middle' || $this->_tpl_vars['block']['Side'] == 'bottom' )): ?>
        <?php $this->assign('stat_class', ' statistics-box_full-width'); ?>

        <script class="fl-js-dynamic">
        <?php echo '

        (function(){
            var arrangeStatBox = function(){
                var $statBox  = $(\'.statistics-box\');

                $statBox.removeAttr(\'style\');

                var box_width = $statBox.width();
                var doc_width = $(document).width();
                var margin    = (doc_width - box_width) / 2 * -1;

                $statBox.css({
                    marginLeft: margin,
                    marginRight: margin
                })
            }

            $(window).resize(function(){
                arrangeStatBox();
            });

            arrangeStatBox();
        })();

        '; ?>

        </script>
    <?php endif; ?>

    <script class="fl-js-dynamic">
    <?php echo '

    $(function(){
        var $statBox = $(\'.statistics-box\');
        var animated = false;
        var steps = 50;
        var startFrom = 20; // %
        var timeout = 0.035 * 1000;

        var formatNumber = function(number){
            return String(number).replace(/(.)(?=(\\d{3})+$)/g,\'$1\' + rlConfig[\'price_delimiter\']);
        }

        var animate = function($item, max, step, count, current){
            if (current > max) {
                return;
            }

            var setCount = current == max ? count : Math.floor(current * step);
            $item.text(formatNumber(setCount));

            current++;

            setTimeout(function(){
                animate($item, max, step, count, current);
            }, timeout);
        }

        var initAnimation = function(){
            if (animated) {
                return;
            }

            setTimeout(function(){
                $statBox.find(\'.statistics-box__number\').each(function(){
                    var count = parseInt($(this).data(\'count\'));

                    if (count > 0) {
                        var max = count > steps ? steps : count;
                        var step = count > steps ? Math.floor(count / steps) : 1;
                        var start = Math.ceil((max * startFrom) / 100);
                        animate($(this), max, step, count, start);
                    }
                });
            }, 300);

            animated = true;
        }

        var checkScrollTop = function(){
            var boxTop = $statBox.offset().top;
            var boxBottom = $statBox.offset().top + $statBox.height();
            var scrollTop = $(window).scrollTop();
            var scrollBottom = scrollTop + $(window).height();

            if (boxTop >= scrollTop && boxBottom <= scrollBottom) {
                initAnimation();
            }
        }

        $(window).scroll(function(){
            checkScrollTop();
        });

        checkScrollTop();
    });

    '; ?>

    </script>

    <?php $this->assign('stats_col_class', 'col-6 col-sm-4 col-md'); ?>

    <?php if ($this->_tpl_vars['block']['Side'] == 'left'): ?>
        <?php $this->assign('stats_col_class', 'col-6 col-sm-4 col-md-3 col-lg-12 col-xl-6'); ?>
    <?php elseif ($this->_tpl_vars['block']['Side'] == 'middle_left' || $this->_tpl_vars['block']['Side'] == 'middle_right'): ?>
        <?php $this->assign('stats_col_class', 'col-6 col-sm-4 col-md-6 col-lg-4 col-xl-3'); ?>
    <?php else: ?>
        <?php $this->assign('stats_col_class', ((is_array($_tmp=$this->_tpl_vars['stats_col_class'])) ? $this->_run_mod_handler('cat', true, $_tmp, ' mb-md-0') : smarty_modifier_cat($_tmp, ' mb-md-0'))); ?>
    <?php endif; ?>

    <section class="statistics-box <?php echo $this->_tpl_vars['stat_class']; ?>
">
        <?php if ($this->_tpl_vars['stat_class']): ?><div class="point1 mx-auto"><?php endif; ?>
            <div class="position-relative row">
                <?php $_from = $this->_tpl_vars['statistics_block']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['stat_type_key'] => $this->_tpl_vars['stat_item']):
?>
                <?php if (! $this->_tpl_vars['stat_item']['is_account'] && ( ! isset ( $this->_tpl_vars['listing_types'][$this->_tpl_vars['stat_type_key']] ) || ! $this->_tpl_vars['listing_types'][$this->_tpl_vars['stat_type_key']]['Statistics'] )): ?><?php continue; ?><?php endif; ?>

                <div class="<?php echo $this->_tpl_vars['stats_col_class']; ?>
 mb-3 d-flex justify-content-center">
                    <a class="text-center statistics-box__link text-decoration-none" href="<?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => $this->_tpl_vars['stat_item']['page_key']), $this);?>
">
                        <div class="pb-0 pb-md-2 d-flex statistics-box__count align-items-center justify-content-center">
                            <span class="statistics-box__number" data-count="<?php echo $this->_tpl_vars['stat_item']['total']; ?>
">
                            <?php if ($this->_tpl_vars['stat_item']['total'] > 0): ?>
                                <?php echo smarty_function_math(array('equation' => 'ceil((20*count)/100)','count' => $this->_tpl_vars['stat_item']['total']), $this);?>

                            <?php else: ?>
                                0
                            <?php endif; ?>
                            </span>
                            <?php if ($this->_tpl_vars['stat_item']['total']): ?>
                            <span class="statistics-box__plus">+</span>
                            <?php endif; ?>
                        </div>
                        <div class="statistics-box__name"><?php echo $this->_plugins['function']['phrase'][0][0]->getPhrase(array('key' => $this->_tpl_vars['stat_item']['phrase_key']), $this);?>
</div>
                    </a>
                </div>
                <?php endforeach; endif; unset($_from); ?>
            </div>
        <?php if ($this->_tpl_vars['stat_class']): ?></div><?php endif; ?>
    </section>
<?php else: ?>
    <?php echo $this->_tpl_vars['lang']['statistics_isnot_available']; ?>

<?php endif; ?>

<!-- statistics box end -->