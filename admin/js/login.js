
/******************************************************************************
 *  
 *  PROJECT: Flynax Classifieds Software
 *  VERSION: 4.9.2
 *  LICENSE: RU70XA4A4YQ2 - https://www.flynax.ru/user-agreement.html
 *  PRODUCT: Real Estate Classifieds
 *  DOMAIN: heidenbauer.ru
 *  FILE: INDEX.PHP
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

/* make username filed in focus */
$(document).ready(
    function(){
        $('#username').focus();
    }
);

/**
* check admin login form
*
* @param srting user_empty - error message in case when the user filed is empty
* @param string pass_empty - error message in case when the password filed is empty
*
* @return bool
* 
**/
function jsLogin( user_empty, pass_empty )
{
    if ( $("#username").val() != '' )
    {
        if ( $("#password").val() != '' )
        {
            $('#login_button').val(lang['loading']);
            xajax_logIn( $('#username').val(), $('#password').val(), $('#interface').val() );
        }
        else
        {
            fail_alert( '#password', pass_empty );
        }
    }
    else
    {
        fail_alert( '#username', user_empty );
    }
    
    return false;
}

/**
*
* alert the message and focus current field
*
* @param srting field - jQuery format field 
* @param string message - alert message text
* 
**/
function fail_alert( field, message )
{
    Ext.MessageBox.alert(lang['alert'], message, function(){
        if ( field != '' )
        {
            $(field).addClass('field_error');
            $(field).focus();
        }
    });
}
