<!-- section of booking order -->

{if $isLogin || (!$isLogin && !$bookingConfigs.Deny_guest)}
    {if $bookingData}
        {pageUrl key='booking_order' assign='booking_order_page'}

        <ul class="steps">
            <li class="{if !$step}current{else}past{/if}">
                <a href="{if !$step}javascript:void(0){else}{$booking_order_page}{if $config.mod_rewrite}?{else}&{/if}edit{/if}" title="{$lang.booking_calendar}"><span>{$lang.step}</span> 1</a>
            </li>

            <li class="{if $step && $step == 'fields'}current{elseif $step && $step == 'prepayment'}past{/if}">
                <a href="{if !$step || $step == 'fields'}javascript:void(0){else}{if $config.mod_rewrite}{$booking_order_page|replace:'.html':'/contact-details.html'|cat:'?edit'}{else}{$booking_order_page}&step=contact-details&edit{/if}{/if}" title="{$lang.booking_client_details}"><span>{$lang.step}</span> 2</a>
            </li>

            {if $bookingConfigs.Prepayment}
                <li {if $step && $step == 'prepayment'}class="current"{/if}>
                    <a href="javascript:void(0)" title="{$lang.booking_prepayment_step}"><span>{$lang.step}</span> 3</a>
                </li>
            {/if}

            <li>
                <a href="javascript:void(0)" title="{$lang.reg_done}"><span>{$lang.reg_done}</span></a>
            </li>
        </ul>

        <div id="area_booking" class="content-padding {if $bookingConfigs.Booking_type == 'time_range'}escort{/if}">
            {if $bookingConfigs.Booking_type == 'time_range'}
                {if !$step}
                    {if $listing_escort}
                        {assign var='listing' value=$listing_escort}
                    {/if}

                    {include file=$bookingBlocksFolder|cat:'escort_data.tpl'}
                {/if}
            {else}
                {include file=$bookingBlocksFolder|cat:'calendar.tpl' fieldsetEnable=true}
            {/if}

            {include file=$bookingBlocksFolder|cat:'message.tpl' fieldsetEnable=true}
            {include file=$bookingBlocksFolder|cat:'checkin_checkout.tpl'}
            {include file=$bookingBlocksFolder|cat:'fields.tpl'}
        </div>

        {if $step == 'prepayment' && $bookingConfigs.Prepayment}
            {assign var='b_prepayment_percent' value=`$smarty.ldelim`prepayment_percent`$smarty.rdelim`}
            {assign var='percent' value=`$smarty.ldelim`prepayment`$smarty.rdelim`}
            {assign var="booking_adapted_notice_1" value=$lang.booking_prepayment_step_notice|replace:$b_prepayment_percent:$bookingConfigs.Prepayment}

            {if $config.system_currency_position == 'before'}
                {assign var="booking_rest" value=$config.system_currency|cat:' '|cat:$smarty.session.bookingData.prepayment}
            {else}
                {assign var="booking_rest" value=$smarty.session.bookingData.prepayment|cat:' '|cat:$config.system_currency}
            {/if}
            {assign var="booking_adapted_notice_2" value=$booking_adapted_notice_1|replace:$percent:$booking_rest}

            {assign var='b_amount' value=`$smarty.ldelim`amount`$smarty.rdelim`}
            {if $config.system_currency_position == 'before'}
                {assign var="booking_amount" value=$config.system_currency|cat:' '|cat:$smarty.session.bookingData.total_cost}
            {else}
                {assign var="booking_amount" value=$smarty.session.bookingData.total_cost|cat:' '|cat:$config.system_currency}
            {/if}
            {assign var="booking_adapted_notice_3" value=$booking_adapted_notice_2|replace:$b_amount:$booking_amount}

            <div class="prepayment-notice">{$booking_adapted_notice_3}</div>

            <!-- payment gateways -->
            <form id="form-checkout" method="post" action="{$rlBase}{if $config.mod_rewrite}{$pageInfo.Path}/prepayment.html{else}?page={$pageInfo.Path}&step=prepayment{/if}">
                <input type="hidden" name="step" value="checkout" />
                {gateways}
                <div class="form-buttons">
                    <input type="submit" value="{$lang.checkout}" />
                </div>
            </form>
            <!-- end payment gateways -->
        {/if}

        {include file=$bookingBlocksFolder|cat:'styles.tpl'}
        {include file=$bookingBlocksFolder|cat:'js_script.tpl' qtipEnable=true}
    {else}
        {phrase key='booking_data_not_found' db_check=true}
    {/if}
{else}
    {$lang.booking_deny_guests}
{/if}

<!-- section of booking order end -->
