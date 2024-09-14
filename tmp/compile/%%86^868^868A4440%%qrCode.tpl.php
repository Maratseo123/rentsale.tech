<?php /* Smarty version 2.6.31, created on 2024-04-26 02:14:44
         compiled from /var/www/u2273289/data/www/rentsale.tech/plugins/qrCode/qrCode.tpl */ ?>
<!-- QR Code link -->
<?php if ($this->_tpl_vars['listing_data']['Status'] == 'active'): ?>
<li>
    <a href="#" class="qrCodeModal"><?php echo $this->_tpl_vars['lang']['see_qrCode']; ?>
</a> <a href="#" class="qrCodeModal"><img style="vertical-align: top;margin-top: 1px;" src="<?php echo (defined('RL_PLUGINS_URL') ? @RL_PLUGINS_URL : null); ?>
qrCode/qrcode.png" alt="<?php echo $this->_tpl_vars['lang']['see_qrCode']; ?>
" title="<?php echo $this->_tpl_vars['lang']['see_qrCode']; ?>
"/></a>
    <script type="text/javascript">
        <?php echo '
        $(document).ready(function(){
            $(\'.qrCodeModal\').click(function(e){
                e.preventDefault();
                var src = "'; ?>
<?php echo (defined('RL_FILES_URL') ? @RL_FILES_URL : null); ?>
qrcode/user_<?php echo $this->_tpl_vars['listing_data']['Account_ID']; ?>
/listing_<?php echo $this->_tpl_vars['listing_data']['ID']; ?>
<?php echo '.png";
                var qrImg = new Image();
                qrImg.onload = function(){
                    $(this).flModal({
                        caption: \''; ?>
<?php echo $this->_tpl_vars['lang']['see_qrCode']; ?>
<?php echo '\',
                        content: \'<img src="\'+src+\'" alt="" style="border:1px solid #000000;" />\',
                        width: \'auto\',
                        height: \'auto\',
                        click: false
                    });
                };
                qrImg.src = src;
            });
        });
        '; ?>

    </script>
</li>
<?php endif; ?>
<!-- QR Code link end -->