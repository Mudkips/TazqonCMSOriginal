<?php /* Smarty version Smarty-3.1.8, created on 2012-03-19 18:21:20
         compiled from "C:\xampp\htdocs\TazqonCMS\templates\tpl\page-identity-reset-identity.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147804f6766c7ef9de0-56779734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61d37717188003c179464d3fbb930e1585124c6d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TazqonCMS\\templates\\tpl\\page-identity-reset-identity.tpl',
      1 => 1332177673,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147804f6766c7ef9de0-56779734',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f6766c80f23b5_76746586',
  'variables' => 
  array (
    'title' => 0,
    'webbuild' => 0,
    'url' => 0,
    'headerdescription' => 0,
    'headerkeywords' => 0,
    'webbuildrelease' => 0,
    'iserror' => 0,
    'errormessage' => 0,
    'securekey' => 0,
    'email' => 0,
    'names' => 0,
    'k' => 0,
    'footercopyright' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f6766c80f23b5_76746586')) {function content_4f6766c80f23b5_76746586($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 -  </title>

<script type="text/javascript">
var andSoItBegins = (new Date()).getTime();
</script>
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon" />

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery/static/styles/common.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery/static/styles/process.css" type="text/css" />

<script src="<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery/static/js/libs2.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery/static/js/visual.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery/static/js/libs.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery/static/js/common.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery/static/js/fullcontent.js" type="text/javascript"></script>

<script type="text/javascript">
document.habboLoggedIn = false;
var habboName = null;
var habboId = null;
var habboReqPath = "";
var habboStaticFilePath = "<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery";
var habboImagerUrl = "http://www.habbo.com/habbo-imaging/";
var habboPartner = "";
var habboDefaultClientPopupUrl = "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/client";
window.name = "habboMain";
if (typeof HabboClient != "undefined") {
    HabboClient.windowName = "client";
    HabboClient.maximizeWindow = true;
}


</script>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery/static/styles/frontpage.css" type="text/css" />

<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['headerdescription']->value;?>
" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['headerkeywords']->value;?>
" />

<meta name="build" content="<?php echo $_smarty_tpl->tpl_vars['webbuildrelease']->value;?>
" />
</head>
<body class="process-template black secure-page">

<div id="container">
	<div class="process-template-box clearfix">
		<div id="content" class="wide">
		    <div id="header" class="clearfix">
			    <h1><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"></a></h1>
			</div>
			<div id="process-content">
	        	<p class="phishing-warning">This screen is to protect your log-in details from phishing. Please make sure the address bar above starts with <?php echo $_smarty_tpl->tpl_vars['url']->value;?>
 and cancel this dialog if you are seeing some other address!</p>


<div id="reset-password-form-container">
    <div id="errors">
    	<?php if ($_smarty_tpl->tpl_vars['iserror']->value){?>
    	<div class="rounded rounded-red">
            <div id="error-title" class="error">
            	<?php echo $_smarty_tpl->tpl_vars['errormessage']->value;?>

            </div>
        </div>
    	<?php }?>
    </div>
    <div id="reset-password-form-content">
        <div id="left-column">
            <div class="header bottom-top-border">Set password</div>
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/account/password/resetIdentity/<?php echo $_smarty_tpl->tpl_vars['securekey']->value;?>
" id="pwreset-form">
                <fieldset id="register-fieldset-password">
                    <div class="form-content clearfix">
                        <div class="label registration-text">Account email</div>
                        <input type="text" id="email-address" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" autocomplete="off"
                               readOnly="true"/>
                    </div>
                    <div class="form-content clearfix">
                        <div class="left">
                            <div id="password">
                                <div class="label registration-text">New password</div>
                                <input type="password" name="password" id="register-password" maxlength="32"
                                        <?php if ($_smarty_tpl->tpl_vars['iserror']->value){?>class="error"<?php }?> />
                            </div>
                            <div id="password-retype">
                                <div class="label registration-text">New password again</div>
                                <input type="password" name="retypedPassword" id="register-password2" maxlength="32"
                                        <?php if ($_smarty_tpl->tpl_vars['iserror']->value){?>class="error"<?php }?> />
                            </div>
                        </div>
                        <div class="right">
                            <div class="help">Password must be at least <b>6 characters </b>long and include <b>letters and numbers</b></div>
                        </div>
                    </div>
                </fieldset>
                <div id="password-change-all-account-notice-text" class="bottom-top-dotted-border">
                    <div class="force-email-notice"></div>
                    <span class="white">Changing your password will effect all the character(s) linked to your email address.</span></div>
                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['securekey']->value;?>
"/>
            </form>
            <div id="change-password-buttons">
                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" id="change-password-cancel-link">Close this page to cancel</a>
                <a href="#" id="reset-password-submit-button"
                   class="new-button"><b>Save password</b><i></i></a>
            </div>
        </div>

        <div id="right-column">
            <div class="header bottom-top-border">Your character(s)</div>
            <div id="password-change-accounts-notice-text" class="bottom-border"><span
                    class="white">These character(s) are linked to your account.</span></div>
            <ul id="reset-password-account-list" class="clearfix">
            	<?php  $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['k']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['names']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['k']->key => $_smarty_tpl->tpl_vars['k']->value){
$_smarty_tpl->tpl_vars['k']->_loop = true;
?>
                    <li class="white">
                        <div class="green-tick"></div>
                        <span><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</span></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>

<script type="text/javascript">
    Event.observe($("reset-password-submit-button"), "click", function() {
        $("pwreset-form").submit();
    });

    $("register-password").focus();
</script>
<div id="footer">
	<p class="footer-links"><a href="http://help.habbo.com">Habbo.com Customer Support</a> | <a href="http://www.sulake.com" target="_new">Sulake</a> | <a href="https://help.habbo.com/entries/20106178-privacy-policies-terms-of-use" target="_new">Terms of Use</a> | <a href="https://help.habbo.com/entries/20106178-privacy-policies-terms-of-use" target="_new">Privacy Policy/Your California Privacy Rights</a> | <a href="https://help.habbo.com/entries/278050-infringements-policy" target="_new">Infringements</a> | <a href="https://help.habbo.com/entries/20106178-privacy-policies-terms-of-use" target="_new"> Terms and Conditions of Sale - US</a> | <a href="http://www.habbo.com/groups/officialhabboway" target="_new">The Habbo Way</a> | <a href="http://www.habbo.com/groups/officialsafetytips">Safety Tips</a> | <a href="http://www.habbo.com/groups/officialparentsguide">Parents</a> |<a href="mailto:advertising.com@sulake.com" target="_new">Advertise With Us</a></p>
	<p class="copyright"><?php echo $_smarty_tpl->tpl_vars['footercopyright']->value;?>
</p>
</div>			</div>
        </div>
    </div>
</div>
<script type="text/javascript">
if (typeof HabboView != "undefined") {
	HabboView.run();
}
</script>

</body>
</html>
<?php }} ?>