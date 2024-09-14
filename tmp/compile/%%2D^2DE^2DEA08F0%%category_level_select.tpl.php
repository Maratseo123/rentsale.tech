<?php /* Smarty version 2.6.31, created on 2023-12-18 01:51:12
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/blocks/category_level_select.tpl */ ?>
<!-- category level - select tag -->

<script id="category_level_select" type="text/x-jsrender">
    <select size="10">
        <option value=""><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>

        [%for items%]
        <option data-path="[%:Path%]"
                value="[%:ID%]"
                [%if Lock == '1' && !sub_categories && !Add%]disabled="disabled"[%/if%]
                class="[%if Lock == '1'%]locked[%/if%][%if !sub_categories && Add != '1' && !~root.parent_user_category%] no-subcategories[%/if%][%if !tmp && (Add == '1' || ~root.parent_user_category)%] user-category[%/if%][%if !tmp && (Add_sub == '1' || ~root.parent_user_category)%] user-subcategory[%/if%]">
            [%:name%][%if Lock == '1'%] - <?php echo $this->_tpl_vars['lang']['locked']; ?>
[%/if%]
        </option>
        [%/for%]
    </select>
</script>

<!-- category level - select tag end -->