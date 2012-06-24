<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>{$title} - Make friends, join the fun, get noticed! </title>

<script type="text/javascript">
var andSoItBegins = (new Date()).getTime();
</script>
<link rel="shortcut icon" href="{$webbuild}/web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon" />


<link rel="stylesheet" href="{$webbuild}/web-gallery/static/styles/frontpage.css" type="text/css" />
<script src="{$webbuild}/web-gallery/static/js/libs2.js" type="text/javascript"></script>
<script src="{$webbuild}/web-gallery/static/js/landing.js" type="text/javascript"></script>

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

<style type="text/css">
        body {
             background-color: #000;
            
        }
        #footer .footer-links   { color: #666666; }
        #footer .footer-links a { color: #ffffff; }
        #footer .copyright      { color: #666666; }
        #footer #compact-tags-container span, #footer #compact-tags-container a { color: #333333; }
    </style>

<meta name="description" content="{$headerdescription}" />
<meta name="keywords" content="{$headerkeywords}" />

<meta name="build" content="{$webbuildrelease}" />
</head>


<body id="frontpage">

<div id="overlay"></div>

{if $forcedemail}
<div id="forced-email-login" style="display: none;">
    <div id="forced-email-login-container" class="clearfix">
      <div id="forced-email-login-title" class="bottom-border">Important Notice</div>
      <ul id="forced-email-login-content" class="clearfix">
        <li><div class="force-email-notice"></div>
          <span>We have improved our security measures, the hotel is now safer than ever. Please use your <b>email address</b> to log in.</span>
        </li>
        <li><div class="force-email-notice-1"></div>
          <span>Keep your account safe and secure.</span>
        </li>
        <li class="center bottom-border">
            <input type="text" class="email-address" value="{$email}" autocomplete="off" readonly="readonly" />
        </li>
        <li class="bottom-border"><div class="force-email-notice-2"></div>
          <span>Please use the {$titleshort} password associated with your email address to log in.</span>
        </li>
      </ul>
      <a href="#" id="force-email-ok-button" class="new-button"><b>OK</b><i></i></a>
    </div>
    <div id="forced-email-login-container-bottom"></div>
</div>


<script type="text/javascript">
HabboView.add( function() {
    LandingPage.showForcedEmailNotice();
    LandingPage.loginUserNameFieldValue = "{$email}";
});
</script>
{/if}

<div id="change-password-form" style="display: none;">
    <div id="change-password-form-container" class="clearfix">
        <div id="change-password-form-title" class="bottom-border">Forgot Password?</div>
        <div id="change-password-form-content" style="display: none;">
            <form method="post" action="{$url}/account/password/identityResetForm" id="forgotten-pw-form">
                <input type="hidden" name="page" value="{$url}/?changePwd=true" />
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
	{if $changepwd}
	ChangePassword.showChangeEmailPasswordSentNotice("{$email}");
	{/if}
});
</script>

{if $emailchanged}
<div id="email-changed-notice" style="display: none;">
    <div id="email-changed-notice-container" class="clearfix">
        <div id="email-changed-notice-title" class="bottom-border">Your email address was changed</div>
        <div id="email-changed-notice-content" class="bottom-border clearfix">
            <div><span style="font-size:13px; color: #f24805;"><b></b></span> was marked as inactive.<br><br> From now on {$titleshort} emails will be sent to this address:</div>
            <div class="email-address">{$email}</div>
        </div>
        <a href="{$url}" id="force-email-ok-button" class="new-button"><b>Okay</b><i></i></a>
    </div>
    <div id="email-changed-notice-container-bottom"></div>
</div>

<script type="text/javascript">{literal}
    HabboView.add( function() {
        if ($("overlay")) {
            Utils.showDialogOnOverlay($("email-changed-notice"));
        } else {
            $("email-changed-notice").setStyle({position: 'relative', display: 'block', margin: '0 auto 2em auto'});
        }

        if (!!$("email-changed-submit-button")) {
            Event.observe($("email-changed-submit-button"), "click", function() {
                $("email-changed-submit-button").up("form").submit();
            });
        }

        if (!!$("combine-submit-button")) {
            Event.observe($("combine-submit-button"), "click", function() {
                $("combine-chosen").value = "1" ;
                $("combine-submit-button").up("form").submit();
            });
        }

        if (!!$("donotcombine-link")) {
            Event.observe($("donotcombine-link"), "click", function() {
                $("donotcombine-link").href = $("donotcombine-link").href + "&doNotShowCombineOverlay=" + $("doNotShow").checked;
            });
        }

        if (!!$("email-changed-update-email")) {
            $("email-changed-update-email").focus();
            if (LandingPage) {
                LandingPage.focusForced = true;
            }
        }

    });
{/literal}</script>
{/if}

<div id="site-header">


    <form id="loginformitem" name="loginformitem" action="{$url}/account/submit"
          method="post">

    
		{if $iserror}
		<div id="loginerrorfieldwrapper">
            <div id="loginerrorfield">
                <div>{$errormessage}</div>
            </div>
        </div>
		{/if}


        <div style="clear: both;"></div>

        <div id="site-header-content">

            <div id="habbo-logo"></div>

            <div id="login-form">


                <div id="login-form-email">
                    <label for="login-username"
                           class="login-text">Email</label>
                    <input tabindex="3" type="text" class="login-field {if $loginerror}focus{/if}" name="credentials.username" id="login-username"
                           value="{$loginvalue}" maxlength="48"/>
                    <input tabindex="6" type="checkbox" name="_login_remember_me" id="login-remember-me"
                           value="true"/>
                    <label for="login-remember-me">Keep me logged in</label>

<div id="landing-remember-me-notification" class="bottom-bubble" style="display:none;">
	<div class="bottom-bubble-t"><div></div></div>
	<div class="bottom-bubble-c">
                By selecting this you will stay logged in to {$titleshort}, until you &quot;Log out&quot;.
	</div>
	<div class="bottom-bubble-b"><div></div></div>
</div>

                </div>

                <div id="login-form-password">
                    <label for="login-password" class="login-text">Password</label>
                    <input tabindex="4" type="password" class="login-field {if $passworderror}focus{/if}" name="credentials.password"
                           id="login-password" maxlength="32"/>

                    <div id="login-forgot-password">
                        <a href="#" id="forgot-password"><span>Forgot your password?</span></a>
                    </div>
                </div>

                <div id="login-form-submit">
                    <input type="submit" value="Login" class="login-top-button"
                           id="login-submit-button"/>
                    <a href="#" tabindex="5"
                       id="login-submit-new-button"><span>Login</span></a>
                </div>

            </div>

       
<noscript>
<div id="alert-javascript-container">
    <div id="alert-javascript-title">
        Missing JavaScript support
    </div>
    <div id="alert-javascript-text">
        Javascript is disabled on your browser. Please enable JavaScript or upgrade to a Javascript-capable browser to use {$titleshort} :)
    </div>
</div>
</noscript>

<div id="alert-cookies-container" style="display:none">
    <div id="alert-cookies-title">
        Missing cookie support
    </div>
    <div id="alert-cookies-text">
        Cookies are disabled on your browser. Please enable cookies to use {$titleshort}.
    </div>
</div>
<script type="text/javascript">
    document.cookie = "habbotestcookie=supported";
    var cookiesEnabled = document.cookie.indexOf("habbotestcookie") != -1;
    if (cookiesEnabled) {
        var date = new Date();
        date.setTime(date.getTime()-24*60*60*1000);
        document.cookie="habbotestcookie=supported; expires="+date.toGMTString();
    } else {
        $('alert-cookies-container').show();
    }
</script>

            <script type="text/javascript">
                HabboView.add(function() {
                    LandingPage.init();
                    if (!LandingPage.focusForced) {
                        LandingPage.fieldFocus('login-username');
                    }
                });
            </script>

        </div>

    </form>

</div>

<div id="fp-container">
    <div id="content">
    <div id="column1" class="column">
			     		
				<div class="habblet-container ">		
	
						<div style="width: 890px; margin: 0 auto">
        <div id="tagline">Chat, make new friends, play and enjoy!</div>
</div>

<div id="frontpage-image-container">


    <div id="join-now-button-container">
        <div id="join-now-button-wrapper-fb" style="display: none !important;">
            <div class="join-now-alternative">&nbsp;</div>
            <div class="join-now-button">
                <a class="join-now-link" href="#" onclick="assistedLogin(FB); return false;"> 
                    <span class="join-now-text-big">Play Habbo</span>
                    <span class="join-now-text-small">with<span class="fbword">Facebook</span></span>
                </a>
                <span class="close"></span>
            </div>
            <div class="join-now-alternative">
                <a id="register-link-fb" href="{$url}/quickregister/start" onclick="startRegistration(this); return false;">
                or create a {$titleshort} account
                </a>
            </div>
        </div>
        <div id="join-now-button-wrapper" style="display: block !important;">
            <div class="join-now-alternative">
                <a href="{$url}/quickregister/start" class="newusers" onclick="startRegistration(this); return false;"><b>New to {$titleshort}?</b><span style="color: #8f8f8f;">Click here to</span></a>
            </div>
            <div class="join-now-button">
                <a class="join-now-link" id="register-link" href="{$url}/quickregister/start" onclick="startRegistration(this); return false;"> 
                    <span class="join-now-text-big">Join now</span>
                    <span class="join-now-text-small">for Free</span>
                </a>
                <span class="close"></span>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function startRegistration(elem) {
            targetUrl = elem.href;
            if (typeof targetUrl == "undefined") {
                targetUrl = "{$url}/quickregister/start";
            }
            window.location.href = targetUrl;
        }
    </script>

    <div id="people-inside">
        <b><span><span class="stats-fig">{$usersonline}</span> players online now</span></b>
        <i></i>
    </div>

    <a href="{$url}/quickregister/start" id="frontpage-image" style="background-image: url('//habbo.hs.llnwd.net/c_images/Frontpage_images/landing_val12_b.png')" onclick="startRegistration(this); return false;"></a>

</div>


<script type="text/javascript">
    document.observe("dom:loaded", function() {
        LandingPage.checkLoginButtonSetTimer();
    });
</script>

						
							
					
				</div>
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
			 

</div>
<!--[if lt IE 7]>
<script type="text/javascript">
Pngfix.doPngImageFix();
</script>
<![endif]-->
<div id="footer" class="new_and_improved">
	<p class="footer-links"><a href="http://help.habbo.com">Customer Support</a> | <a href="http://www.habbo.com/groups/officialparentsguide">Parents</a> | <a href="https://help.habbo.com/entries/20106178-privacy-policies-terms-of-use" target="_new">Terms of Use & Privacy Policy</a> | <a href="https://help.habbo.com/entries/278050-infringements-policy" target="_new">Infringements</a> | <a href="http://www.habbo.com/groups/officialhabboway" target="_new">Habbo Way</a> | <a href="http://www.habbo.com/groups/officialsafetytips">Safety</a> | <a href="mailto:advertising.com@sulake.com" target="_new">For Advertisers</a></p>
    <div id="age-recommendation"></div>
	<p class="copyright">{$footercopyright}</p>

        <div id="compact-tags-container">
            <span class="tags-habbos-like">{$titleshort} Like:</span>

    		{$tagslist}
        </div>

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
