<?php /* Smarty version Smarty-3.1.8, created on 2012-03-14 16:35:30
         compiled from "C:\xampp\htdocs\TazqonCMS\templates\tpl\page-register-duplicate-email-login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115054f60bac2de6936-09437056%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0d3d384552ec93e0de31416d36fe4da66f11a9d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TazqonCMS\\templates\\tpl\\page-register-duplicate-email-login.tpl',
      1 => 1331738895,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115054f60bac2de6936-09437056',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'webbuild' => 0,
    'url' => 0,
    'headerdescription' => 0,
    'headerkeywords' => 0,
    'webbuildrelease' => 0,
    'titleshort' => 0,
    'next' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f60bac337f777_18110606',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f60bac337f777_18110606')) {function content_4f60bac337f777_18110606($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 -  </title>

<script type="text/javascript">
var andSoItBegins = (new Date()).getTime();
</script>
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon" />

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery/static/styles/common.css" type="text/css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery/static/js/libs2.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery/static/js/visual.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery/static/js/libs.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery/static/js/common.js" type="text/javascript"></script>

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
/web-gallery/static/styles/quickregister.css" type="text/css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery/static/js/quickregister.js" type="text/javascript"></script>

<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['headerdescription']->value;?>
" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['headerkeywords']->value;?>
" />

<meta name="build" content="<?php echo $_smarty_tpl->tpl_vars['webbuildrelease']->value;?>
" />
</head>

<body id="client">
<div id="overlay"></div>
<img src="<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery/v2/images/page_loader.gif" style="position:absolute; margin: -1500px;" />

<div id="change-password-form" style="display: none;">
    <div id="change-password-form-container" class="clearfix">
        <div id="change-password-form-title" class="bottom-border">Forgot Password?</div>
        <div id="change-password-form-content" style="display: none;">
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/account/password/identityResetForm" id="forgotten-pw-form">
                <input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/quickregister/duplicateEmailLogin?changePwd=true" />
                <span>Type in your <?php echo $_smarty_tpl->tpl_vars['titleshort']->value;?>
 account email address:</span>
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
</script>
<div id="main-container" class="login">

<div class="cbb">
    <div id="alert-container" class="rounded">
        <div id="alert-title" class="notice">
            Account already exists
        </div>
        <div id="alert-text">
            Trying to create a new <?php echo $_smarty_tpl->tpl_vars['titleshort']->value;?>
 account? Log in to your existing account and add new characters by going to your Account Settings / Identity Settings.
        </div>
    </div>
</div>

    <div id="title">
        Log in to Habbo
    </div>

    <div id="inner-container" class="clearfix">
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/quickregister/login_submit" id="quickregister-login" method="post" onsubmit="Overlay.show(null,'Loading...');">
            <input type="hidden" name="emailOnlyLogin" value="true" />

                <input type="hidden" name="next" value="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['next']->value;?>
"/>



            <div id="login-container" class="field-content clearfix">
                <div class="left">
                    <div class="field">
                        <div class="label" class="login-text">Email:</div>
                        <input type="text" id="login-username" name="credentials.username" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"  />
                    </div>
                    <div class="field">
                        <div class="label" class="registration-text">Password:</div>
                        <input type="password" name="credentials.password" id="login-password" maxlength="32" value="" />
                    </div>
                    <div id="login-forgot-password">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/account/password/forgot" id="forgot-password"><span>Forgot your password?</span></a>
                    </div>
                </div>
                <div class="right text-right">
                </div>
            </div>
            <input type="submit" style="position:absolute; margin: -1500px;"/>            
        </form>
    </div>

    <div id="select">
            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/quickregister/backToAccountDetails" id="back-link">Go Back</a>
        <div class="button">
            <a id="proceed-button" href="#" class="area">Login</a>
            <span class="close"></span>
        </div>
   </div>
</div>

<script type="text/javascript">
        if ($("login-username").value.length == 0) {
            $("login-username").focus();
        } else {
            $("login-password").focus();
        }


    if (!!$("back-link")) {
        Event.observe($("back-link"), "click", function() {
            Overlay.show(null,'Loading...');
        });
    }

    Event.observe($("proceed-button"), "click", function() {
        Overlay.show(null,'Loading...');
        $("quickregister-login").submit();
    });
</script>

<script type="text/javascript">
    HabboView.run();
</script>

</body>
</html><?php }} ?>