<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>{$title} -  </title>

<script type="text/javascript">
var andSoItBegins = (new Date()).getTime();
</script>
<link rel="shortcut icon" href="{$webbuild}/web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon" />

<link rel="stylesheet" href="{$webbuild}/web-gallery/static/styles/common.css" type="text/css" />
<link rel="stylesheet" href="{$webbuild}/web-gallery/static/styles/process.css" type="text/css" />

<script src="{$webbuild}/web-gallery/static/js/libs2.js" type="text/javascript"></script>
<script src="{$webbuild}/web-gallery/static/js/visual.js" type="text/javascript"></script>
<script src="{$webbuild}/web-gallery/static/js/libs.js" type="text/javascript"></script>
<script src="{$webbuild}/web-gallery/static/js/common.js" type="text/javascript"></script>
<script src="{$webbuild}/web-gallery/static/js/fullcontent.js" type="text/javascript"></script>

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

<link rel="stylesheet" href="{$webbuild}/web-gallery/static/styles/frontpage.css" type="text/css" />

<meta name="description" content="{$headerdescription}" />
<meta name="keywords" content="{$headerkeywords}" />

<meta name="build" content="{$webbuildrelease}" />
</head>
<body class="process-template black secure-page">

<div id="container">
	<div class="process-template-box clearfix">
		<div id="content" class="wide">
		    <div id="header" class="clearfix">
			    <h1><a href="{$url}"></a></h1>
			</div>
			<div id="process-content">
	        	<p class="phishing-warning">This screen is to protect your log-in details from phishing. Please make sure the address bar above starts with {$url} and cancel this dialog if you are seeing some other address!</p>


<div id="reset-password-form-container">
    <div id="errors">
    	{if $iserror}
    	<div class="rounded rounded-red">
            <div id="error-title" class="error">
            	{$errormessage}
            </div>
        </div>
    	{/if}
    </div>
    <div id="reset-password-form-content">
        <div id="left-column">
            <div class="header bottom-top-border">Set password</div>
            <form method="post" action="{$url}/account/password/resetIdentity/{$securekey}" id="pwreset-form">
                <fieldset id="register-fieldset-password">
                    <div class="form-content clearfix">
                        <div class="label registration-text">Account email</div>
                        <input type="text" id="email-address" value="{$email}" autocomplete="off"
                               readOnly="true"/>
                    </div>
                    <div class="form-content clearfix">
                        <div class="left">
                            <div id="password">
                                <div class="label registration-text">New password</div>
                                <input type="password" name="password" id="register-password" maxlength="32"
                                        {if $iserror}class="error"{/if} />
                            </div>
                            <div id="password-retype">
                                <div class="label registration-text">New password again</div>
                                <input type="password" name="retypedPassword" id="register-password2" maxlength="32"
                                        {if $iserror}class="error"{/if} />
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
                <input type="hidden" name="token" value="{$securekey}"/>
            </form>
            <div id="change-password-buttons">
                <a href="{$url}" id="change-password-cancel-link">Close this page to cancel</a>
                <a href="#" id="reset-password-submit-button"
                   class="new-button"><b>Save password</b><i></i></a>
            </div>
        </div>

        <div id="right-column">
            <div class="header bottom-top-border">Your character(s)</div>
            <div id="password-change-accounts-notice-text" class="bottom-border"><span
                    class="white">These character(s) are linked to your account.</span></div>
            <ul id="reset-password-account-list" class="clearfix">
            	{foreach $names item=k}
                    <li class="white">
                        <div class="green-tick"></div>
                        <span>{$k}</span></li>
                {/foreach}
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
	<p class="copyright">{$footercopyright}</p>
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
