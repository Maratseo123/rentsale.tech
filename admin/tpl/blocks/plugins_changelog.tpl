<!-- plugins changelog block -->

<script type="text/javascript" src="{$rlBase}js/plugin.js?rev={$config.static_files_revision}"></script>

<script type="text/javascript">
var plugin_obj                  = false;
var license_domain = '{$license_domain}';
var license_number = '{$license_number}';
{literal}

var rlPluginRemoteInstall = function(){
    // install links handler
    $('.changelog_install a.install_icon').click(function(){
        plugin_obj = this;
        rlConfirm(lang['remote_plugin_install_notice'], 'startInstallation');
    });
    
    // update links handler
    $('.changelog_update a.update_icon').click(function(){
        plugin_obj = this;
        rlConfirm(lang['remote_plugin_update_notice'], 'startUpdating');
    });

    // buy button handler
    $('a.buy_icon').click(function(){
        startBuying($(this), $(this).text());
    });
};

var buyingInterval;
var startBuying = function(button, caption){
    var key = button.attr('name');
    
    window.open('https://www.flynax.ru/buy-plugin.html?key='+key+'&domain={/literal}{$license_domain}&license={$license_number}{literal}', '_blank');

    setTimeout(function(){
        buyingInterval = setInterval('updatePluginStatus("'+key+'")', 5000);
    }, 20000);
}

var updatePluginStatus = function(key){
    // track paid plugins
    var data = {
        item: 'updatePluginStatus',
        key: key,
        domain: license_domain,
        license: license_number
    };
    $.getJSON(rlUrlHome+'request.ajax.php', data, function(status){
        // stop checking
        if ( status.status == 'paid' || status.status == 'fail' ) {
            clearInterval(buyingInterval);
        }

        // start plugin installation
        if ( status.status == 'paid' ) {
            $('div.modal-window > div:first > span:last').click();
            plugin_obj = $('.changelog_install a.buy_icon[name='+key+']');
            startInstallation();
        }
    });
}

var startInstallation = function(){
    if (plugin.actionsLocked || plugin.clickLocked) {
        return;
    }

    plugin.clickLocked = true;
    
    hideNotices();
    
    var key = $(plugin_obj).attr('name');
    var area = $(plugin_obj).closest('div.changelog_item');
    var name = $(area).find('a:first').html();
    var id = $(area).attr('id');
    var height = $(area).height()-16-2;
    height = height < 55 ? 'auto' : height;
    var width = $(area).width();
    
    /* set fixed height for main container */
    $(area).parent().height($(area).height());
    
    /* prepare HTML DOM */
    var html = ' \
    <div style="margin: 0 0 16px 0;height: '+ height +'px;width: '+ width +'px;position: absolute;padding: 0;" class="hide grey_area" id="'+ id +'_tmp"> \
        <div style="padding: 8px 10px 10px;"> \
            <div class="dark_13"><b>'+ name +'</b> '+ lang['plugin_is_installing'] +'</div> \
            <div class="progress static" style="padding: 5px 0 0;"></div> \
        </div> \
    </div>';
    
    /* show progress bar */
    $(area).after(html);
    $(area).css({width: $(area).width(), position: 'absolute'}).fadeOut();
    $(area).next().fadeIn('normal', function(){
        $(area).css('position', 'relative');
        $(this).css({position: 'relative', width: 'auto'});
        $(this).find('.progress').html(lang['remote_progress_connect']);
        plugin.remoteInstall(key, true);

        plugin.clickLocked = false;
    });
};

var startUpdating = function(){
    if (plugin.actionsLocked || plugin.clickLocked) {
        return;
    }

    plugin.clickLocked = true;
    
    hideNotices();
    
    var key = $(plugin_obj).attr('name');
    var area = $(plugin_obj).closest('div.changelog_item');
    var name = $(area).find('a:first').html();
    var id = $(area).attr('id');
    var height = $(area).height()-16-2;
    height = height < 55 ? 'auto' : height;
    var width = $(area).width();
    
    /* set fixed height for main container */
    $(area).parent().height($(area).height());
    
    /* prepare HTML DOM */
    var html = ' \
    <div style="margin: 0 0 16px 0;height: '+ height +'px;width: '+ width +'px;position: absolute;padding: 0;" class="hide grey_area" id="'+ id +'_tmp"> \
        <div style="padding: 8px 10px 10px;"> \
            <div class="dark_13"><b>'+ name +'</b> '+ lang['plugin_is_updating'] +'</div> \
            <div class="progress static" style="padding: 5px 0 0;"></div> \
        </div> \
    </div>';
    
    /* show progress bar */
    $(area).after(html);
    $(area).css({width: $(area).width(), position: 'absolute'}).fadeOut();
    $(area).next().fadeIn('normal', function(){
        $(area).css('position', 'relative');
        $(this).css({position: 'relative', width: 'auto'});
        $(this).find('.progress').html(lang['remote_progress_backingup']);
        plugin.remoteUpdate(key, true);

        plugin.clickLocked = false;
    });
};

var continueInstallation = function(key){
    var area = $('div.changelog_item a[name='+ key +']').closest('div.changelog_item');
    $(area).next().find('div.progress').html(lang['remote_progress_installing']);
    
    plugin.install(key, true);
};

var continueUpdating = function(key){
    var area = $('div.changelog_item a[name='+ key +']').closest('div.changelog_item');
    $(area).next().find('div.progress').html(lang['remote_progress_updating']);
    
    plugin.update(key, true);
};

$(function () {
    flynax.adminBoxesHandler('plugins_log', xajax_getPluginsLog);
});
{/literal}
</script>

<!-- plugins changelog block end -->
