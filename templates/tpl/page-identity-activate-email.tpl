<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>{$title} - Account activation successful </title>

<script type="text/javascript">
var andSoItBegins = (new Date()).getTime();
</script>
<link rel="shortcut icon" href="{$webbuild}/web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon" />

<link rel="stylesheet" href="{$webbuild}/web-gallery/static/styles/embed.css" type="text/css" />
<script src="{$webbuild}/web-gallery/static/js/embed.js" type="text/javascript"></script>
<link rel="stylesheet" href="/styles/local/com.css" type="text/css" />

<script type="text/javascript">
document.habboLoggedIn = {$LoggedIn};
var habboName = "{$Username}";
var habboId = {$Userid};
var facebookUser = false;
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

<link rel="stylesheet" href="{$webbuild}/web-gallery/static/styles/common.css" type="text/css" />
<link rel="stylesheet" href="{$webbuild}/web-gallery/static/styles/embeddedregistration.css" type="text/css" />
<link rel="stylesheet" href="{$webbuild}/web-gallery/static/styles/identitysettings.css" type="text/css" />

<meta name="description" content="{$headerdescription}" />
<meta name="keywords" content="{$headerdescription}" />

<meta name="build" content="{$webbuildrelease}" />
</head>

<body id="embedpage">
<div id="overlay"></div>
<div id="container">

    <div class="activateemail-container clearfix">
        <h1>Account activation successful</h1>
        <div style="padding: 50px 10px 0;">
                <p>You should no longer receive emails from {$titleshort} Next time you log in to {$titleshort} Hotel you will be asked to provide a valid email address.</p>
            <p>
                <a href="{$url}">Back to to homepage</a>
            </p>
        </div>
    </div>
    <div class="activateemail-container-bottom"></div>
<div id="footer">
	<p class="footer-links"><a href="http://help.habbo.com">Habbo.com Customer Support</a> | <a href="http://www.sulake.com" target="_new">Sulake</a> | <a href="https://help.habbo.com/entries/20106178-privacy-policies-terms-of-use" target="_new">Terms of Use</a> | <a href="https://help.habbo.com/entries/20106178-privacy-policies-terms-of-use" target="_new">Privacy Policy/Your California Privacy Rights</a> | <a href="https://help.habbo.com/entries/278050-infringements-policy" target="_new">Infringements</a> | <a href="https://help.habbo.com/entries/20106178-privacy-policies-terms-of-use" target="_new"> Terms and Conditions of Sale - US</a> | <a href="http://www.habbo.com/groups/officialhabboway" target="_new">The Habbo Way</a> | <a href="http://www.habbo.com/groups/officialsafetytips">Safety Tips</a> | <a href="http://www.habbo.com/groups/officialparentsguide">Parents</a> |<a href="mailto:advertising.com@sulake.com" target="_new">Advertise With Us</a></p>
	<p class="copyright">{$footercopyright}</p>
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
