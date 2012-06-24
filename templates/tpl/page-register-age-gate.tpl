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

<meta name="description" content="{$headerdescription}" />
<meta name="keywords" content="{$headerkeywords}" />

<meta name="build" content="{$webbuildrelease}" />
</head>

<body id="client" class="background-agegate">
<div id="overlay"></div>
<img src="{$webbuild}/web-gallery/v2/images/page_loader.gif" style="position:absolute; margin: -1500px;" />

<div id="stepnumbers">
    <div class="step1focus">Birthdate &amp; Gender</div>
    <div class="step2">Account details</div>
    <div class="step3">Security Check</div>
    <div class="stephabbo"></div>
</div>

<div id="main-container">

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

    <form id="quickregisterform" method="post" action="{$url}/quickregister/age_gate_submit">

        <h2>Birthdate &amp; Gender</h2>

        <div id="date-selector">
            <h3>Please enter a valid birthdate</h3>
			<select name="bean.month" id="bean_month" class="dateselector">
			<option value="">Month</option>
			{foreach from=$amount_months key=k item=i}
				{if $k == $value_month}
					<option value="{$k}" selected>{$i}</option>
				{else}
					<option value="{$k}">{$i}</option>
				{/if}
			{/foreach}
			</select>
			
			<select name="bean.day" id="bean_day" class="dateselector">
			<option value="">Day</option>
			{foreach from=$amount_days item=i}
				{if $i == $value_day}
					<option value="{$i}" selected>{$i}</option>
				{else}
					<option value="{$i}">{$i}</option>
				{/if}
			{/foreach}
			</select>
			
			<select name="bean.year" id="bean_year" class="dateselector">
			<option value="">Year</option>
			{foreach from=$amount_years item=i}
				{if $i == $value_year}
					<option value="{$i}" selected>{$i}</option>
				{else}
					<option value="{$i}">{$i}</option>
				{/if}
			{/foreach}
			</select>
		</div>
			
        <div class="delimiter_smooth">
            <div class="flat">&nbsp;</div>
            <div class="arrow">&nbsp;</div>
            <div class="flat">&nbsp;</div>
        </div>

        <div id="inner-container">
            <div id="gender-selection">
                <h3>I am...</h3>
                <input type="hidden" id="avatarGender" name="bean.gender" value=""/>
                <ul id="gender-choices">
                    <li>
                        <span class="bgtop"></span>
                        <span class="bgbottom"></span>
                        <span class="gender-choice">
                            Male<br/><img alt="male" src="{$webbuild}/web-gallery/v2/images/registration/male_sign.png" width="36" height="47">
                        </span>
                    </li>
                    <li>
                        <span class="bgtop"></span>
                        <span class="bgbottom"></span>
                        <span class="gender-choice">
                            Female<br/><img alt="female" src="{$webbuild}/web-gallery/v2/images/registration/female_sign.png" width="36" height="47">
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </form>

    <div id="select">
        <a id="back-link" href="{$url}/">Go Back</a>
        <div class="button">
            <a id="proceed" href="#" class="area">Next</a>
            <span class="close"></span>
        </div>
   </div>
</div>

<script type="text/javascript">
    L10N.put("identity.register.overlay.loading.text", 'Loading...');
    document.observe("dom:loaded", function() {
        QuickRegister.initAgeGate(true);
        QuickRegister.initGenderChooser("{$value_gender}");
    });
</script>

<script type="text/javascript">
    HabboView.run();
</script>

</body>
</html>