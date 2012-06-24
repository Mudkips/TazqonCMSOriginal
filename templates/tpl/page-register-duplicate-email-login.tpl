<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title{$title} -  </title>

<script type="text/javascript">
var andSoItBegins = (new Date()).getTime();
</script>
<link rel="shortcut icon" href="{$webbuild}/web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon" />

<link rel="stylesheet" href="{$webbuild}/web-gallery/static/styles/common.css" type="text/css" />
<script src="{$webbuild}/web-gallery/static/js/libs2.js" type="text/javascript"></script>
<script src="{$webbuild}/web-gallery/static/js/visual.js" type="text/javascript"></script>
<script src="{$webbuild}/web-gallery/static/js/libs.js" type="text/javascript"></script>
<script src="{$webbuild}/web-gallery/static/js/common.js" type="text/javascript"></script>

<script type="text/javascript">
document.habboLoggedIn = false;
var habboName = null;
var habboId = null;
var habboReqPath = "";
var habboStaticFilePath = "{$webbuild}/web-gallery";
var habboImagerUrl = "http://www.habbo.com/habbo-imaging/";
var habboPartner = "";
var habboDefaultClientPopupUrl = "{$url}/client";
window.name = "habboMain";
if (typeof HabboClient != "undefined") {
    HabboClient.windowName = "client";
    HabboClient.maximizeWindow = true;
}


</script>

<link rel="stylesheet" href="{$webbuild}/web-gallery/static/styles/quickregister.css" type="text/css" />
<script src="{$webbuild}/web-gallery/static/js/quickregister.js" type="text/javascript"></script>

<meta name="description" content="{$headerdescription}" />
<meta name="keywords" content="{$headerkeywords}" />

<meta name="build" content="{$webbuildrelease}" />
</head>

<body id="client">
<div id="overlay"></div>
<img src="{$webbuild}/web-gallery/v2/images/page_loader.gif" style="position:absolute; margin: -1500px;" />

<div id="change-password-form" style="display: none;">
    <div id="change-password-form-container" class="clearfix">
        <div id="change-password-form-title" class="bottom-border">Forgot Password?</div>
        <div id="change-password-form-content" style="display: none;">
            <form method="post" action="{$url}/account/password/identityResetForm" id="forgotten-pw-form">
                <input type="hidden" name="page" value="{$url}/?changePwd=true" />
                <span>Type in your {$titleshort} account email address:</span>
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
            Trying to create a new {$titleshort} account? Log in to your existing account and add new characters by going to your Account Settings / Identity Settings.
        </div>
    </div>
</div>

    <div id="title">
        Log in to Habbo
    </div>

    <div id="inner-container" class="clearfix">
        <form method="post" action="{$url}/quickregister/login_submit" id="quickregister-login" method="post" onsubmit="Overlay.show(null,'Loading...');">
            <input type="hidden" name="emailOnlyLogin" value="true" />

                <input type="hidden" name="next" value="{$url}{$next}"/>



            <div id="login-container" class="field-content clearfix">
                <div class="left">
                    <div class="field">
                        <div class="label" class="login-text">Email:</div>
                        <input type="text" id="login-username" name="credentials.username" value="{$email}"  />
                    </div>
                    <div class="field">
                        <div class="label" class="registration-text">Password:</div>
                        <input type="password" name="credentials.password" id="login-password" maxlength="32" value="" />
                    </div>
                    <div id="login-forgot-password">
                        <a href="{$url}/account/password/forgot" id="forgot-password"><span>Forgot your password?</span></a>
                    </div>
                </div>
                <div class="right text-right">
                </div>
            </div>
            <input type="submit" style="position:absolute; margin: -1500px;"/>            
        </form>
    </div>

    <div id="select">
            <a href="{$url}/quickregister/backToAccountDetails" id="back-link">Go Back</a>
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
</html>