<?php /* Smarty version 2.6.31, created on 2024-06-11 13:44:14
         compiled from /var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/my_messages.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'addCSS', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/my_messages.tpl', 8, false),array('function', 'addJS', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/my_messages.tpl', 9, false),array('modifier', 'cat', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/my_messages.tpl', 8, false),array('modifier', 'replace', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/my_messages.tpl', 172, false),array('modifier', 'date_format', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/my_messages.tpl', 205, false),array('modifier', 'nl2br', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/my_messages.tpl', 207, false),array('modifier', 'truncate', '/var/www/u2273289/data/www/rentsale.tech/templates/realty_nova/tpl/controllers/my_messages.tpl', 207, false),)), $this); ?>
<!-- my messages tpl -->

<?php if (! empty ( $this->_tpl_vars['contact'] )): ?>
    <?php if (empty ( $this->_tpl_vars['messages'] )): ?>
        <div class="text-message"><?php echo $this->_tpl_vars['lang']['no_messages']; ?>
</div>
    <?php else: ?>
        <?php if ($this->_tpl_vars['contact']['ID'] < 0): ?>
            <?php echo $this->_plugins['function']['addCSS'][0][0]->smartyAddCSS(array('file' => ((is_array($_tmp=$this->_tpl_vars['rlTplBase'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'components/popup/popup.css') : smarty_modifier_cat($_tmp, 'components/popup/popup.css'))), $this);?>

            <?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=$this->_tpl_vars['rlTplBase'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'components/popup/_popup.js') : smarty_modifier_cat($_tmp, 'components/popup/_popup.js'))), $this);?>

        <?php endif; ?>

        <div id="messages_cont">
            <ul id="messages_area">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'messages_area.tpl') : smarty_modifier_cat($_tmp, 'messages_area.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </ul>
        </div>

        <div class="send-controls">
            <textarea rows="4" cols="" id="message_text"></textarea>
            <div><input id="send_message" type="button" value="<?php echo $this->_tpl_vars['lang']['send']; ?>
" /></div>
        </div>

        <script class="fl-js-dynamic">
            var period = <?php if ($this->_tpl_vars['config']['messages_refresh']): ?><?php echo $this->_tpl_vars['config']['messages_refresh']; ?>
 * 1000<?php else: ?>10000<?php endif; ?>;
            var message_count = 0;
            var contactID = <?php echo $this->_tpl_vars['contact']['ID']; ?>
;
            var isAdminContact = <?php if ($this->_tpl_vars['contact']['Admin']): ?>1<?php else: ?>0<?php endif; ?>;
            var visitorEmail = <?php if ($_GET['visitor_mail']): ?>"<?php echo $_GET['visitor_mail']; ?>
"<?php else: ?>null<?php endif; ?>;
            var visitorName = <?php if ($this->_tpl_vars['contact']['Full_name']): ?>"<?php echo $this->_tpl_vars['contact']['Full_name']; ?>
"<?php else: ?>null<?php endif; ?>;

            lang['send_message'] = "<?php echo $this->_tpl_vars['lang']['send_message']; ?>
";
            lang['notice_message_sent'] = "<?php echo $this->_tpl_vars['lang']['notice_message_sent']; ?>
";

            <?php echo '
            $(function(){
                message_count = $(\'ul#messages_area > li\').length;
                $textarea = $(\'#message_text\');

                $(\'#messages_cont\').mCustomScrollbar({
                    advanced: {	updateOnContentResize: true }
                });
                $(\'#messages_cont\').mCustomScrollbar(\'scrollTo\', \'bottom\');

                messageRemoveHandler();

                $textarea.textareaCount({
                    \'maxCharacterSize\': rlConfig[\'messages_length\'],
                    \'warningNumber\': 20
                });

                $textarea.keydown( function(e) {
                    if (e.ctrlKey && e.keyCode == 13) {
                        xajax_sendMessage(contactID, $(this).val(), isAdminContact);
                    }
                });

                flynaxTpl.setupTextarea();

                $(\'#send_message\').click(function(){
                    if (!$textarea.val().trim()) {
                        return;
                    }

                    if (contactID > 0) {
                        xajax_sendMessage(contactID, $textarea.val(), isAdminContact);
                    } else {
                        $(\'body\').popup({
                            click: false,
                            content   : lang.confirm_sent_message_to_visitor,
                            caption   : lang.notice,
                            navigation: {
                                okButton: {
                                    text: lang.send_message,
                                    onClick: function(popup){
                                        var $button = $(this);

                                        $button
                                            .addClass(\'disabled\')
                                            .attr(\'disabled\', true)
                                            .val(lang.loading);

                                        var data = {
                                            mode: \'sendMessageToVisitor\',
                                            message: $textarea.val(),
                                            email: visitorEmail,
                                            name: visitorName
                                        };

                                        flUtil.ajax(data, function(response, status) {
                                            if (status == \'success\' && response && response.status === \'OK\') {
                                                printMessage(\'notice\', lang[\'notice_message_sent\']);
                                                xajax_refreshMessagesArea(contactID, 0, visitorEmail, 0);
                                                $textarea.val(\'\');
                                            } else {
                                                printMessage(\'error\', lang.system_error);
                                            }

                                            $button
                                                .removeClass(\'disabled\')
                                                .removeAttr(\'disabled\')
                                                .val(lang.send_message);

                                            popup.close();
                                        });
                                    }
                                },
                                cancelButton: {text: lang.cancel, class: \'cancel\'}
                            }
                        });
                    }
                });

                if (contactID >= 0) {
                    setInterval(function(){
                        xajax_refreshMessagesArea(contactID, 0, 0, isAdminContact);
                    }, period);
                }
            });

            var messageRemoveHandler = function() {
                $(\'#messages_area li > span\').each(function(){
                    var id = $(this).parent().attr(\'id\').split(\'_\')[1];
                    $(this).flModal({
                        caption: \''; ?>
<?php echo $this->_tpl_vars['lang']['warning']; ?>
<?php echo '\',
                        content: \''; ?>
<?php echo $this->_tpl_vars['lang']['remove_message_notice']; ?>
<?php echo '\',
                        prompt: \'mRemoveMsg(\'+id+\')\',
                        width: \'auto\',
                        height: \'auto\'
                    });
                });
            }

            var checkboxControl = function(){
                messageRemoveHandler();

                var length = $(\'ul#messages_area > li\').length;

                if ( length > message_count ) {
                    $(\'#messages_cont\').mCustomScrollbar(\'scrollTo\', \'bottom\');
                }

                message_count = length;
            }

            var mRemoveMsg = function(id) {
                if ( id ) {
                    '; ?>
xajax_removeMsg(id, <?php echo $this->_tpl_vars['contact']['ID']; ?>
, <?php if ($this->_tpl_vars['contact']['Admin']): ?>1<?php else: ?>0<?php endif; ?>);<?php echo '
                }
            }

            '; ?>

        </script>

    <?php endif; ?>

<?php else: ?>

    <?php if (! empty ( $this->_tpl_vars['contacts'] )): ?>
        <div class="content-padding">
            <table class="list contacts-list">
                <tr class="header">
                    <td class="last">
                        <label><input class="inline" type="checkbox" id="check_all" /></label>
                    </td>
                    <td class="user"><?php echo $this->_tpl_vars['lang']['user']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['lang']['message']; ?>
</td>
                </tr>

                <?php $this->assign('replace', ('{')."name".('}')); ?>
                <?php $_from = $this->_tpl_vars['contacts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['searchF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['searchF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['contact_id'] => $this->_tpl_vars['item']):
        $this->_foreach['searchF']['iteration']++;
?>
                    <?php $this->assign('status_key', $this->_tpl_vars['item']['Status']); ?>
                    <tr class="body" id="item_<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['contact_id'])) ? $this->_run_mod_handler('replace', true, $_tmp, '@', '') : smarty_modifier_replace($_tmp, '@', '')))) ? $this->_run_mod_handler('replace', true, $_tmp, '.', '') : smarty_modifier_replace($_tmp, '.', '')); ?>
">
                        <td>
                            <label>
                                <input type="checkbox"
                                       name="del_mess"
                                       class="inline del_mess<?php if ($this->_tpl_vars['item']['Admin']): ?> admin<?php endif; ?>"
                                       <?php if ($this->_tpl_vars['item']['From'] && $this->_tpl_vars['item']['From'] != '-1'): ?>id="contact_<?php echo $this->_tpl_vars['item']['From']; ?>
"<?php endif; ?>
                                       <?php if ($this->_tpl_vars['item']['Visitor_mail']): ?>attr="<?php echo $this->_tpl_vars['item']['Visitor_mail']; ?>
"<?php endif; ?>
                                />
                            </label>
                        </td>
                        <td valign="top">
                            <div class="picture<?php if (! $this->_tpl_vars['item']['Photo']): ?> no-picture<?php endif; ?>">
                                <a href="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
.html?id=<?php echo $this->_tpl_vars['item']['From']; ?>
<?php else: ?>?page=<?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
&id=<?php echo $this->_tpl_vars['item']['From']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['item']['Admin']): ?>&administrator<?php endif; ?><?php if ($this->_tpl_vars['item']['Visitor_mail']): ?>&visitor_mail=<?php echo $this->_tpl_vars['item']['Visitor_mail']; ?>
<?php endif; ?>"
                                   title="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['chat_with'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['replace'], $this->_tpl_vars['item']['Full_name']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['replace'], $this->_tpl_vars['item']['Full_name'])); ?>
"
                                >
                                    <img class="account-picture"
                                         style="<?php echo 'width:'; ?><?php if ($this->_tpl_vars['item']['Thumb_width']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['item']['Thumb_width']; ?><?php echo ''; ?><?php else: ?><?php echo '110'; ?><?php endif; ?><?php echo 'px;height:'; ?><?php if ($this->_tpl_vars['item']['Thumb_height']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['item']['Thumb_height']; ?><?php echo ''; ?><?php else: ?><?php echo '100'; ?><?php endif; ?><?php echo 'px;'; ?>
"
                                         alt="<?php echo $this->_tpl_vars['item']['Full_name']; ?>
"
                                         src="<?php if ($this->_tpl_vars['item']['Photo']): ?><?php echo (defined('RL_FILES_URL') ? @RL_FILES_URL : null); ?>
<?php echo $this->_tpl_vars['item']['Photo']; ?>
<?php else: ?><?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif<?php endif; ?>"
                                            <?php if ($this->_tpl_vars['item']['Photo_x2']): ?>
                                                srcset="<?php echo (defined('RL_FILES_URL') ? @RL_FILES_URL : null); ?>
<?php echo $this->_tpl_vars['item']['Photo_x2']; ?>
 2x"
                                            <?php endif; ?>
                                    />
                                    <?php if ($this->_tpl_vars['item']['Status'] == 'new' && $this->_tpl_vars['item']['Count'] > 0): ?><span title="<?php echo $this->_tpl_vars['item']['Count']; ?>
 <?php echo $this->_tpl_vars['lang']['new_message']; ?>
" class="new"></span><?php endif; ?>
                                </a>
                            </div>
                        </td>
                        <td class="info">
                            <div class="name"><?php echo $this->_tpl_vars['item']['Full_name']; ?>
<?php if ($this->_tpl_vars['item']['Admin']): ?> <span>(<?php echo $this->_tpl_vars['lang']['website_admin']; ?>
)</span><?php endif; ?><?php if ($this->_tpl_vars['item']['Visitor_mail']): ?> <span>(<?php echo $this->_tpl_vars['lang']['website_visitor']; ?>
)</span><?php endif; ?> <?php if ($this->_tpl_vars['item']['Status'] == 'new'): ?><span title="<?php echo $this->_tpl_vars['item']['Count']; ?>
 <?php echo $this->_tpl_vars['lang']['new_message']; ?>
" class="new"></span><?php endif; ?></div>
                            <div class="date"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['Date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)) : smarty_modifier_date_format($_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null))); ?>
</div>

                            <a href="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
.html?id=<?php echo $this->_tpl_vars['item']['From']; ?>
<?php else: ?>?page=<?php echo $this->_tpl_vars['pageInfo']['Path']; ?>
&id=<?php echo $this->_tpl_vars['item']['From']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['item']['Admin']): ?>&administrator<?php endif; ?><?php if ($this->_tpl_vars['item']['Visitor_mail']): ?>&visitor_mail=<?php echo $this->_tpl_vars['item']['Visitor_mail']; ?>
<?php endif; ?>"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['Message'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, '\n', '<br />') : smarty_modifier_replace($_tmp, '\n', '<br />')))) ? $this->_run_mod_handler('truncate', true, $_tmp, 120) : smarty_modifier_truncate($_tmp, 120)); ?>
</a>
                        </td>
                    </tr>
                <?php endforeach; endif; unset($_from); ?>
            </table>

            <div class="mass-actions">
                <a class="close remove_contacts" href="javascript:void(0)" title="<?php echo $this->_tpl_vars['lang']['remove_selected_messages']; ?>
"><?php echo $this->_tpl_vars['lang']['remove_selected']; ?>
</a>
            </div>
        </div>

        <script class="fl-js-dynamic"><?php echo '
            $(document).ready(function(){
                $(\'.del_mess\').click(function(){
                    if ( $(\'.del_mess:checked\').length == 0 ) {
                        $(\'#check_all\').prop(\'checked\', false);
                    }
                });

                $(\'#check_all\').click(function(){
                    if ( $(this).is(\':checked\') ) {
                        $(\'.del_mess\').prop(\'checked\', true);
                    }
                    else {
                        $(\'.del_mess\').prop(\'checked\', false);
                    }
                });

                $(\'.remove_contacts\').click(function(){
                    var ids = \'\';
                    var admin = false;

                    $(\'.del_mess\').each(function(){
                        if ($(this).is(\':checked\')) {
                            if ($(this).attr(\'attr\')) {
                                ids += ids ? \',\' + $(this).attr(\'attr\') : $(this).attr(\'attr\');
                            } else {
                                admin = $(this).hasClass(\'admin\');

                                ids += ids
                                    ? \',\' + $(this).attr(\'id\').split(\'_\')[1] + (admin ? \'_admin\' : \'\')
                                    : $(this).attr(\'id\').split(\'_\')[1] + (admin ? \'_admin\' : \'\');
                            }
                        }
                    });

                    if (ids != \'\') {
                        $(this).flModal({
                            caption: \''; ?>
<?php echo $this->_tpl_vars['lang']['warning']; ?>
<?php echo '\',
                            content: \''; ?>
<?php echo $this->_tpl_vars['lang']['remove_contact_notice']; ?>
<?php echo '\',
                            prompt: \'xajax_removeContacts("\' + ids + \'")\',
                            width: \'auto\',
                            height: \'auto\',
                            click: false
                        });
                    }
                });
            });
            '; ?>
</script>
    <?php else: ?>
        <div class="text-message"><?php echo $this->_tpl_vars['lang']['no_messages']; ?>
</div>
    <?php endif; ?>
<?php endif; ?>

<!-- my messages tpl end -->