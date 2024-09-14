<!-- report broken listing | listing details icon -->
{if (!$account_info || $listing_data.Account_ID !== $account_info.ID) && $pageInfo.Controller == 'listing_details'}
    <li>
        <a href="javascript:void(0)" data-lid="{$listing_data.ID}" title="{$lang.reportbroken_add_in}" rel="nofollow" class="reportBroken hide" id="report-broken-listing">
            <span class="link">{$lang.reportbroken_add_in}</span>
            <span class="icon"><img src="{$rlTplBase}img/blank.gif" alt="" /></span>
        </a>
        <a  href="javascript:void(0)" data-lid="{$listing_data.ID}" title="{$lang.reportbroken_add_in}" rel="nofollow" class="removeBroken hide" id="remove-report">
            <span class="link">{$lang.reportbroken_remove_in}</span>
            <span class="icon"><img src="{$rlTplBase}img/blank.gif" alt="" /></span>
        </a>
    </li>
{/if}
<!-- report broken listing | listing details icon end -->
