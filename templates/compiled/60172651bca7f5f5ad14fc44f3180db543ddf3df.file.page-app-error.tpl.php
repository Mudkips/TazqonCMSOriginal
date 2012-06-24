<?php /* Smarty version Smarty-3.1.8, created on 2012-03-11 19:47:17
         compiled from "C:\xampp\htdocs\TazqonCMS\templates\tpl\page-app-error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190484f5cf33503b077-97582022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60172651bca7f5f5ad14fc44f3180db543ddf3df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TazqonCMS\\templates\\tpl\\page-app-error.tpl',
      1 => 1331491636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190484f5cf33503b077-97582022',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'webbuild' => 0,
    'LoggedIn' => 0,
    'Username' => 0,
    'Userid' => 0,
    'url' => 0,
    'headerdescription' => 0,
    'headerkeywords' => 0,
    'webbuildrelease' => 0,
    'footercopyright' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f5cf3351090a5_51633385',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f5cf3351090a5_51633385')) {function content_4f5cf3351090a5_51633385($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
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
/web-gallery/static/styles/embed.css" type="text/css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery/static/js/embed.js" type="text/javascript"></script>

<script type="text/javascript">
document.habboLoggedIn = <?php echo $_smarty_tpl->tpl_vars['LoggedIn']->value;?>
;
var habboName = "<?php echo $_smarty_tpl->tpl_vars['Username']->value;?>
";
var habboId = <?php echo $_smarty_tpl->tpl_vars['Userid']->value;?>
;
var facebookUser = false;
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

<meta property="fb:app_id" content="183096284873" />

<script src="<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery/static/js/identity.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery/static/styles/identity.css" type="text/css" />

<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['headerdescription']->value;?>
" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['headerkeywords']->value;?>
" />

<meta name="build" content="<?php echo $_smarty_tpl->tpl_vars['webbuildrelease']->value;?>
" />
</head>

<body id="embedpage">
<div id="overlay"></div>

<div id="change-password-form" style="display: none;">
    <div id="change-password-form-container" class="clearfix">
        <div id="change-password-form-title" class="bottom-border">Forgot Password?</div>
        <div id="change-password-form-content" style="display: none;">
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/account/password/identityResetForm" id="forgotten-pw-form">
                <input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/identity/useOrCreateAvatar/323533735?changePwd=true" />
                <span>Type in your Habbo account email address:</span>
                <div id="email" class="center bottom-border">
                    <input type="text" id="change-password-email-address" name="emailAddress" value="" class="email-address" maxlength="48"/>
                    <div id="change-password-error-container" class="error" style="display: none;">Please enter a correct email address</div>
                </div>
            </form>
            <div class="change-password-buttons">
                <a href="#" id="change-password-cancel-link">Cancel</a>
                <a href="#" id="change-password-submit-button" class="new-button"><b>Send Email</b><i></i></a>
            </div>
        </div>
        <div id="change-password-email-sent-notice" style="display: none;">
            <div class="bottom-border">
                <span>Hey, we just sent you an email with a link that lets you reset your password.<br>
<br>

NOTE! Remember to check your "junk" folder too!</span>
                <div id="email-sent-container"></div>
            </div>
            <div class="change-password-buttons">
                <a href="#" id="change-password-change-link">Back</a>
                <a href="#" id="change-password-success-button" class="new-button"><b>OK</b><i></i></a>
            </div>
        </div>
    </div>
    <div id="change-password-form-container-bottom"></div>
</div>

<script type="text/javascript">
HabboView.add( function() {
     ChangePassword.init();


});
</script><div id="container">

    <div id="content">
  <div id="landing-container">
    <div class="cbb error-message">
	    <ul style="text-align: center">
		    <li>Oops, something went wrong! We're fixing the issue as fast as we can. So sorry for the inconvenience.</li>
	    </ul>
      </div>
        <div style="width:250px; margin: 10px auto"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/" id="rpx-landingpage-redirect" class="new-button fill"><b>Return to the landing page</b><i></i></a></div>
  </div>
  <div id="landing-caption"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
... make friends, chillax, get noticed!</div>

</div>
<script type="text/javascript">
    function orderVerificationEmail() {
        document.forms["verification"].submit();
    }
</script>
<div id="footer">
	<p class="footer-links"><a href="http://help.habbo.com">Habbo.com Customer Support</a> | <a href="http://www.sulake.com" target="_new">Sulake</a> | <a href="https://help.habbo.com/entries/20106178-privacy-policies-terms-of-use" target="_new">Terms of Use</a> | <a href="https://help.habbo.com/entries/20106178-privacy-policies-terms-of-use" target="_new">Privacy Policy/Your California Privacy Rights</a> | <a href="https://help.habbo.com/entries/278050-infringements-policy" target="_new">Infringements</a> | <a href="https://help.habbo.com/entries/20106178-privacy-policies-terms-of-use" target="_new"> Terms and Conditions of Sale - US</a> | <a href="http://www.habbo.com/groups/officialhabboway" target="_new">The Habbo Way</a> | <a href="http://www.habbo.com/groups/officialsafetytips">Safety Tips</a> | <a href="http://www.habbo.com/groups/officialparentsguide">Parents</a> |<a href="mailto:advertising.com@sulake.com" target="_new">Advertise With Us</a></p>
	<p class="copyright"><?php echo $_smarty_tpl->tpl_vars['footercopyright']->value;?>
</p>
</div>    <script type="text/javascript">
        Embed.decorateFooterLinks();
    </script>
</div>
<script type="text/javascript">
if (typeof HabboView != "undefined") {
	HabboView.run();
}
</script>

</body>
</html>
<?php }} ?>