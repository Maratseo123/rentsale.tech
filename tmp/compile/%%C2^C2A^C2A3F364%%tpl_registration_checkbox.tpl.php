<?php /* Smarty version 2.6.31, created on 2023-12-22 06:03:08
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/plugins/affiliate/tpl_registration_checkbox.tpl */ ?>
<!-- the checkbox with terms of condition in the registration page -->

<?php $this->assign('sProfile', $_POST['profile']); ?>

<script class="fl-js-dynamic"><?php echo '
$(document).ready(function(){
    var $accountType = $(\'select[name="profile[type]"]\');

    if ($(\'.aff_term_of_use\').length == 0) {
        '; ?>
var aff_checkbox_content = '<div class="aff_term_of_use hide" style="padding-top:10px">';
        aff_checkbox_content     += '<label><input type="checkbox" name="profile[affiliate_accept]" value="yes"';
        aff_checkbox_content     += ' <?php if ($this->_tpl_vars['sProfile']['affiliate_accept'] == 'yes'): ?>checked="checked"<?php endif; ?>>';
        aff_checkbox_content     += ' <?php echo $this->_tpl_vars['lang']['aff_affiliate_accept']; ?>
';
        aff_checkbox_content     += ' <?php echo $this->_tpl_vars['aff_terms_of_use_link']; ?>
</label></div>';<?php echo '
        $(aff_checkbox_content).insertAfter($accountType);
        flynaxTpl.customInput();
        var $checkboxContainer = $(\'.aff_term_of_use\');

        $accountType.change(function(){
            $checkboxContainer[$(this).val() == \''; ?>
<?php echo $this->_tpl_vars['affiliate_ID']; ?>
<?php echo '\' ? \'show\' : \'hide\']();
        });

        // show checkbox if user was reverted to same step
        '; ?>
<?php if ($this->_tpl_vars['sProfile']['type'] == $this->_tpl_vars['affiliate_ID']): ?>
            $checkboxContainer.show();
        <?php endif; ?><?php echo '

        // update the profile submit handler
        var submit_allowed = false;
        $(\'form[name=account_reg_form]\').unbind(\'submit\').submit(function(){
            if ($accountType.val() == \''; ?>
<?php echo $this->_tpl_vars['affiliate_ID']; ?>
<?php echo '\') {
                submit_allowed = false;
                if ($(\'input[name="profile[affiliate_accept]"]\').is(\':checked\')) {
                    submit_allowed = true;
                } else {
                    printMessage(
                        \'error\',
                        \''; ?>
<?php echo $this->_tpl_vars['lang']['aff_affiliate_not_accepted']; ?>
<?php echo '\',
                        \'profile[affiliate_accept]\'
                    );
                }
            } else {
                submit_allowed = true;
            }

            return submit_allowed ? true : false;
        });
    }
});
'; ?>
</script>

<!-- the checkbox with terms of condition in the registration page end -->