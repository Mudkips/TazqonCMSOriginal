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
    <script type="text/javascript" src="https://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>

<meta name="description" content="{$headerdescription}" />
<meta name="keywords" content="{$headerkeywords}" />

<meta name="build" content="{$webbuildrelease}" />
</head>

<body id="client" class="background-captcha">
<div id="overlay"></div>
<img src="{$webbuild}/web-gallery/v2/images/page_loader.gif" style="position:absolute; margin: -1500px;" />

<div id="stepnumbers">
    <div class="stepdone">Birthdate &amp; Gender</div>
    <div class="stepdone">Account details</div>
    <div class="step3focus">Security Check</div>
    <div class="stephabbo"></div>
</div>

<div id="main-container">

	{if $iserror}
	<div id="error-messages-container" class="cbb">
	    <div class="rounded" style="background-color: #cb2121;">
		    <div id="error-title" class="error">
		    	{$errormessage} <br />
		    </div>
	    </div>
    </div>
	{else}
    <div id="error-placeholder"></div>
    {/if}

    <h2>Step into the Hotel</h2>

        <div id="avatar-choices">
            <h3>Choose a look for your first visit:</h3>
            <ul id="avatars">
				{$random_avatars}
            </ul>
            <p style="clear: left;">
                Don't like any of these?
                <a href="#" id="more-avatars">Check out more styles.</a>
                <br/><span class="help">Don't worry - you can change your look later.</span>
            </p>
        </div>

    <div id="captcha-container">
        <h3>Just one quick security thingie before we go:</h3>
        <div id="captcha-image-container">
            <div id="recaptcha_image"></div>
        </div>
        <div id="captcha-reload-container">
            Can't make out the words?
            <a id="recaptcha-reload" href="#">Try new code</a>
        </div>
    </div>

    <div class="delimiter_smooth">
        <div class="flat">&nbsp;</div>
        <div class="arrow">&nbsp;</div>
        <div class="flat">&nbsp;</div>
    </div>

    <div id="inner-container">
        <form id="captcha-form" method="post" action="{$url}/quickregister/captcha_submit" onsubmit="Overlay.show(null,'Loading...');">
            <div id="recaptcha-input-title">Type in the two words (separated with a space):</div>
            <div id="recaptcha-input">
                <input type="text" tabindex="2" name="captchaResponse" id="recaptcha_response_field">
            </div>
                <input type="hidden" id="avatarFigure" name="bean.figure" value=""/>
        </form>
    </div>

    <div id="select">
        <a href="{$url}/quickregister/backToAccountDetails" id="back-link">Go Back</a>
        <div class="button">
            <a id="proceed-button" href="#" class="area">Done</a>
            <span class="close"></span>
        </div>
   </div>

    <script type="text/javascript">

        document.observe("dom:loaded", function() {
            Utils.showRecaptcha("registration-recaptcha", "{$publickey}");
            if ($("recaptcha-reload")) {
                Event.observe($("recaptcha-reload"), "click", function(e) {
                    Event.stop(e);
                    Utils.reloadRecaptcha();
                });
            }

            if ($("more-avatars")) {
                Event.observe($("more-avatars"), "click", function(e) {
                    Event.stop(e);
                    new Ajax.Updater("avatars", "{$url}/quickregister/refresh_avatars", {
                        onComplete: function (t) {
                            QuickRegister.initAvatarChooser();
                        }
                    });
                });
            }

            if($("proceed-button")) {
                $("proceed-button").observe("click", function(e) {
                    Event.stop(e);
                    Overlay.show(null,'Loading...');
                    $("captcha-form").submit();
                });

                Event.observe($("back-link"), "click", function() {
                    Overlay.show(null,'Loading...');
                });
            }

            $("recaptcha_response_field").focus();

            QuickRegister.initAvatarChooser();
        });
    </script>

</div>

<script type="text/javascript">
    HabboView.run();
</script>

</body>
</html>