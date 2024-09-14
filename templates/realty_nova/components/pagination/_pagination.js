
/******************************************************************************
 *  
 *  PROJECT: Flynax Classifieds Software
 *  VERSION: 4.7.2
 *  LICENSE: RU70XA4A4YQ2 - https://www.flynax.ru/user-agreement.html
 *  PRODUCT: General Classifieds
 *  DOMAIN: heidenbauer.ru
 *  FILE: SETTINGS.TPL.PHP
 *  
 *  The software is a commercial product delivered under single, non-exclusive,
 *  non-transferable license for one domain or IP address. Therefore distribution,
 *  sale or transfer of the file in whole or in part without permission of Flynax
 *  respective owners is considered to be illegal and breach of Flynax License End
 *  User Agreement.
 *  
 *  You are not allowed to remove this information from the file without permission
 *  of Flynax respective owners.
 *  
 *  Flynax Classifieds Software 2023 | All copyrights reserved.
 *  
 *  https://www.flynax.ru
 ******************************************************************************/

/**
 * Paging transit handler
 * @since 4.9.0
 *
 * @param $pagination - Base UL container of the pagination
 */
let flPaginationHandler = function($pagination) {
    $pagination.find('li.transit input').on('focus', function() {
        $(this).select();
    }).keypress(function(event) {
        // Enter key pressed
        if (event.keyCode === 13) {
            let page     = Number($(this).val()),
                $transit = $pagination.find('li.transit'),
                info     = $transit.find('input[name=stats]').val().split('|');

            if (page > 0 && page !== Number(info[0]) && page <= Number(info[1])) {
                if (page === 1) {
                    location.href = $transit.find('input[name=first]').val();
                }
                else {
                    location.href = $transit.find('input[name=pattern]').val().replace('[pg]', page);
                }
            }
        }
    });
}
