/**copyright**/

/**
 * Create new cookie
 */
function createCookie(name, value, days) {
    value = encodeURI(value);

    var expires = '',
        cookieData = name + '=' + value;

    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = '; expires=' + date.toGMTString();
    }

    cookieData += expires + '; SameSite=' + (rlConfig.isHttps ? 'None' : '') + '; ';

    if (rlConfig.isHttps) {
        cookieData += 'Secure; ';
    }

    if (typeof rlConfig['domain'] !== 'undefined'
        && typeof rlConfig['domain_path'] !== 'undefined'
    ) {
        cookieData += 'path=' + rlConfig['domain_path'] + '; domain=' + rlConfig['domain'];
    } else {
        cookieData += 'path=/';
    }

    document.cookie = cookieData;
}

/**
 * Get cookie value by name
 * @param name
 * @returns {string|null}
 */
function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');

    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return decodeURI(c.substring(nameEQ.length,c.length));
    }
    return null;
}

/**
 * Delete cookie by name
 * @param name
 */
function eraseCookie(name) {
    createCookie(name, '', -1);
}
