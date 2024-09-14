{if $listing.ID
    && $listing.booking_module
    && ($booking_allowed_plans[$listing.Plan_ID]
        || ($config.membership_module && $booking_allowed_membership_plans[$listing.Plan_ID]))
    && $listing_type.Booking_type != 'none'}
    <li class="nav-icon">
        <a class="booking-details" href="{$rlBase}{if $config.mod_rewrite}{$pages.booking_details}.html?id={$listing.ID}{else}?page={$pages.booking_details}&id={$listing.ID}{/if}">
            <span>{$lang.booking_module}</span>&nbsp;
        </a>
    </li>
{/if}
