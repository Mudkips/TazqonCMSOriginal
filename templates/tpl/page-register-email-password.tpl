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

<meta name="description" content="{$headerdescription}" />
<meta name="keywords" content="{$headerkeywords}" />

<meta name="build" content="{$webbuildrelease}" />
</head>

<body id="client" class="background-accountdetails-{$gender}">
<div id="overlay"></div>
<img src="{$webbuild}/web-gallery/v2/images/page_loader.gif" style="position:absolute; margin: -1500px;" />

<div id="stepnumbers">
    <div class="stepdone">Birthdate &amp; Gender</div>
    <div class="step2focus">Account details</div>
    <div class="step3">Security Check</div>
    <div class="stephabbo"></div>
</div>

<div id="main-container">
	
	{if $iserror}
	<div id="error-messages-container" class="cbb">
	   <div class="rounded rounded-red">
	       <div id="error-title" class="error">
	            {$errormessage}
	       </div>
	    </div>
	  </div>
	{else}
    <div id="error-placeholder"></div>
    {/if}

    <form method="post" action="{$url}/quickregister/email_password_submit" id="quickregister-form">

        <h2>Account details</h2>

      <div id="inner-container">
        <div class="inner-content bottom-border">
            <div class="field">
                <label for="email-address">Email</label>
                <input type="text" id="email-address" name="bean.email" value="{$value_email}" {if $error_email}class="error"{/if}/>
            </div>
            <div class="help">You'll need to use this <b>email address to log in</b> to {$titleshort} in the future. Please use a valid address.</div>
            <div class="field">
                <label for="email-address2">Re-enter Email</label>
                <input type="text" id="email-address2" name="bean.retypedEmail" value="{$value_retypedEmail}" {if $error_retypedEmail}class="error"{/if}/>
            </div>
            <div class="help">...just to be sure.</div>

            <div id="password-field" class="field">
                <label for="register-password">Password</label>
                <input type="password" name="bean.password" id="register-password" maxlength="32" value="{$value_password}" {if $error_password}class="error"{/if}/>
            </div>
            <div class="help">Password must be at least <b>6 characters </b>long and include <b>letters and numbers</b></div>
        </div>

        <div class="inner-content top-margin">
			<div class="field-content checkbox {if $error_toss}error{/if}">
			  <label>
			    <input type="checkbox" name="bean.termsOfServiceSelection" id="terms" value="true" class="checkbox-field" {if $value_toss}checked{/if}/>
			    I accept the <a href="{$url}/help/entries/20106178-privacy-policies-terms-of-use" target="_blank" onclick="window.open('{$url}/help/entries/20106178-privacy-policies-terms-of-use'); return false;">Terms Of Service</a>
			  </label>
			</div>            

			<div class="field-content checkbox">
			  <label>
							    <input type="checkbox" name="bean.marketing" id="marketing" value="true" class="checkbox-field" {if $value_marketing}checked{/if}/>
			    Keep me updated about the latest {$titleshort} happenings, news and gossip!
			  </label>
			</div>
			
			
			
        </div>
      </div>
    </form>


    <div id="select">
        <div class="button">
            <a id="proceed-button" href="#" class="area">Next</a>
            <span class="close"></span>
        </div>
        <a href="{$url}/quickregister/back" id="back-link">Go Back</a>
   </div>
</div>

<script type="text/javascript">
    document.observe("dom:loaded", function() {
        Event.observe($("back-link"), "click", function() {
            Overlay.show(null,'Loading...');
        });
        Event.observe($("proceed-button"), "click", function() {
            Overlay.show(null,'Loading...');            
            $("quickregister-form").submit();
        });
            $("email-address").focus();
    });
</script>

<script type="text/javascript">
    HabboView.run();
</script>

</body>
</html>