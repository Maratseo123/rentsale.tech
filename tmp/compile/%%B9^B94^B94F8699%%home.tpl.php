<?php /* Smarty version 2.6.31, created on 2023-12-18 01:57:30
         compiled from /var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/home.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'rlHook', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/home.tpl', 3, false),array('function', 'addCSS', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/home.tpl', 10, false),array('function', 'addJS', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/home.tpl', 11, false),array('function', 'pageUrl', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/home.tpl', 33, false),array('modifier', 'cat', '/var/www/u2273289/data/www/heidenbauer.ru/templates/realty_nova/tpl/controllers/home.tpl', 10, false),)), $this); ?>
<!-- home tpl --><?php echo ''; ?><?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'homeTop'), $this);?><?php echo ''; ?><?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'homeBottomTpl'), $this);?><?php echo '<!-- removing account popup -->'; ?><?php $this->assign('remove_account_variable', 'remove-account'); ?><?php echo ''; ?><?php if (isset ( $_REQUEST[$this->_tpl_vars['remove_account_variable']] ) && $_REQUEST['id'] && $_REQUEST['hash']): ?><?php echo ''; ?><?php echo $this->_plugins['function']['addCSS'][0][0]->smartyAddCSS(array('file' => ((is_array($_tmp=$this->_tpl_vars['rlTplBase'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'components/popup/popup.css') : smarty_modifier_cat($_tmp, 'components/popup/popup.css'))), $this);?><?php echo ''; ?><?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=$this->_tpl_vars['rlTplBase'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'components/popup/_popup.js') : smarty_modifier_cat($_tmp, 'components/popup/_popup.js'))), $this);?><?php echo ''; ?><?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=$this->_tpl_vars['rlTplBase'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'components/account-removing/_account-removing.js') : smarty_modifier_cat($_tmp, 'components/account-removing/_account-removing.js'))), $this);?><?php echo '<script class="fl-js-dynamic">$(function()'; ?><?php echo '{'; ?><?php echo 'flAccountRemoving.init(\''; ?><?php echo $_REQUEST['id']; ?><?php echo '\', \''; ?><?php echo $_REQUEST['hash']; ?><?php echo '\');'; ?><?php echo '}'; ?><?php echo ');</script>'; ?><?php endif; ?><?php echo '<!-- removing account popup end --><!-- Showing the popup for the agent by link with the invite -->'; ?><?php if ($this->_tpl_vars['agentInviteInfo']): ?><?php echo ''; ?><?php echo $this->_plugins['function']['addCSS'][0][0]->smartyAddCSS(array('file' => ((is_array($_tmp=$this->_tpl_vars['rlTplBase'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'components/popup/popup.css') : smarty_modifier_cat($_tmp, 'components/popup/popup.css'))), $this);?><?php echo ''; ?><?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=$this->_tpl_vars['rlTplBase'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'components/popup/_popup.js') : smarty_modifier_cat($_tmp, 'components/popup/_popup.js'))), $this);?><?php echo '<script class="fl-js-dynamic">const invite = '; ?>{<?php echo '\'Agent_ID\': '; ?><?php echo $this->_tpl_vars['agentInviteInfo']['Agent_ID']; ?><?php echo ',\'Code\'    : \''; ?><?php echo $this->_tpl_vars['agentInviteInfo']['Invite_Code']; ?><?php echo '\',\'Status\'  : \''; ?><?php echo $this->_tpl_vars['agentInviteInfo']['Status']; ?><?php echo '\','; ?>}<?php echo ',loginUrl        = \''; ?><?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'login','vars' => ((is_array($_tmp='agent-invite=')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['agentInviteInfo']['Invite_Code']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['agentInviteInfo']['Invite_Code']))), $this);?><?php echo '\',registrationUrl = \''; ?><?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'registration','vars' => ((is_array($_tmp='agent-invite=')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['agentInviteInfo']['Invite_Code']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['agentInviteInfo']['Invite_Code']))), $this);?><?php echo '\';'; ?><?php echo '
        $(function () {
            if (isLogin && rlAccountInfo.ID !== invite.Agent_ID) {
                printMessage(\'error\', lang.deny_use_invite);
                return;
            }

            if (invite.Status !== \'pending\') {
                printMessage(\'error\', lang.invite_is_invalid);
                return;
            }

            $(\'body\').popup({
                width     : \'360\',
                click     : false,
                caption   : lang.notice,
                content   : `<div>${lang.confirmation_invite_notice}</div>`,
                navigation: {
                    okButton: {
                        text: \''; ?><?php echo ''; ?><?php echo $this->_tpl_vars['lang']['rl_accept']; ?><?php echo ''; ?><?php echo '\',
                        onClick: function(popup) {
                            let $okButton = $(this);
                            $okButton.val(lang.loading).addClass(\'disabled\').prop(\'disabled\', true);

                            if (isLogin) {
                                flUtil.ajax(
                                    {mode: \'acceptAgentInvite\', key: invite.Code},
                                    function(response, status) {
                                        $okButton.val(lang.resend_invite).removeClass(\'disabled\').removeProp(\'disabled\');

                                        if (status === \'success\' && response.status === \'OK\') {
                                            printMessage(\'notice\', lang.agency_invite_accepted);
                                        } else {
                                            printMessage(\'error\', lang.system_error);
                                        }

                                        popup.close();
                                    }
                                );
                            } else {
                                location.href = invite.Agent_ID ? loginUrl : registrationUrl;
                            }
                        }
                    },
                    cancelButton: {
                        text: \''; ?><?php echo ''; ?><?php echo $this->_tpl_vars['lang']['decline']; ?><?php echo ''; ?><?php echo '\',
                        onClick: function(popup) {
                            let $okButton = $(this);
                            $okButton.val(lang.loading).addClass(\'disabled\').prop(\'disabled\', true);

                            flUtil.ajax(
                                {mode: \'declineAgentInvite\', key: invite.Code},
                                function(response, status) {
                                    $okButton.val(lang.resend_invite).removeClass(\'disabled\').removeProp(\'disabled\');

                                    if (status === \'success\' && response.status === \'OK\') {
                                        printMessage(\'notice\', lang.agency_invite_declined);
                                    } else {
                                        printMessage(\'error\', lang.system_error);
                                    }

                                    popup.close();
                                }
                            );
                        }
                    }
                }
            })
        });
    '; ?><?php echo '</script>'; ?><?php endif; ?><?php echo '<!-- Showing the popup for the agent by link with the invite end -->'; ?>

<!-- home tpl end -->