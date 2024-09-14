<?php /* Smarty version 2.6.31, created on 2024-05-02 02:20:45
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/controllers/search_map/pagination.tpl */ ?>
<script id="tmplPagination" type="text/x-jquery-tmpl">
<?php echo '

<ul class="pagination">
    <li class="navigator ls"><a title="'; ?>
<?php echo $this->_tpl_vars['lang']['previous_page']; ?>
<?php echo '" class="button" href="javascript://">‹</a></li>
    <li class="transit">
        <span>'; ?>
<?php echo $this->_tpl_vars['lang']['page']; ?>
<?php echo ' </span>
        <input maxlength="4" type="text" value="1" size="3" />
        <span>'; ?>
<?php echo $this->_tpl_vars['lang']['of']; ?>
<?php echo ' ${pages}</span>
    </li>
    <li class="navigator rs"><a title="'; ?>
<?php echo $this->_tpl_vars['lang']['next_page']; ?>
<?php echo '" class="button" href="javascript://">›</a></li>
</ul>

'; ?>

</script>