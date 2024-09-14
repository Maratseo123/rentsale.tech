<!-- report broken listing form -->
<div class="hide" id="reportBrokenListing_form">
    <div class="caption hide">{$lang.reportbroken_add_comment}</div>
    <div class="rbl_loading">{$lang.loading}</div>
    <div id="points"></div>
    <div class="report-nav hide">
        <div class="rbl-submit-row">
            <input type="submit" id="add-report" name="send" value="{$lang.rbl_report}" />
            <input type="button" name="close" class="cancel" value="{$lang.cancel}" />
        </div>
    </div>
</div>

<div class="hide" id="remove_report_form">
    <div class="caption"></div>
    <div>{$lang.reportbroken_do_you_want_to_delete_list}</div>
    <div class="submit-cell clearfix rbl-submit-row prompt">
        <input type="submit" id="remove-report-button" name="remove" value="{$lang.yes}" />
        <input type="button" name="close" class="cancel" value="{$lang.no}" />
    </div>
</div>

<script class="fl-js-dynamic">
    rlConfig['reportBroken_listing_id'] = {if $listing_data.ID}{$listing_data.ID}{else}0{/if};
    rlConfig['reportBroken_message_length'] = {if $config.reportBroken_message_length}{$config.reportBroken_message_length}{else}300{/if};
    lang['reportbroken_remove_in'] = '{$lang.reportbroken_remove_in}';
    lang['rbl_other'] = '{$lang.rbl_other}';
    lang['rbl_provide_a_reason'] = '{$lang.rbl_provide_a_reason}';
    lang['rbl_reportbroken_add_comment'] = '{$lang.reportbroken_add_comment}';
    lang['reportbroken_add_in'] = '{$lang.reportbroken_add_in}';
    lang['reportbroken_do_you_want_to_delete_list'] = '{$lang.reportbroken_do_you_want_to_delete_list}';

    $(document).ready(function() {literal}{{/literal}
        var reportBrokenListing = new ReportBrokenListings();
        reportBrokenListing.listing_id = rlConfig['reportBroken_listing_id'];
        reportBrokenListing.init();
    {literal}}{/literal});
</script>
<!-- report broken listing form end -->
