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

<link rel="stylesheet" href="{$webbuild}/web-gallery/static/styles/embed.css" type="text/css" />
<script src="{$webbuild}/web-gallery/static/js/embed.js" type="text/javascript"></script>

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

<meta property="fb:app_id" content="183096284873" />

<script src="{$webbuild}/web-gallery/static/js/identity.js" type="text/javascript"></script>
<link rel="stylesheet" href="{$webbuild}/web-gallery/static/styles/identity.css" type="text/css" />

<meta name="description" content="{$headerdescription}" />
<meta name="keywords" content="{$headerkeywords}" />

<meta name="build" content="{$webbuildrelease}" />
</head>

<body id="embedpage">
<div id="overlay"></div>

<div id="container">

    <div id="content">
  <div id="landing-container">
    <div class="cbb error-message">
	    <ul style="text-align: center">
		    <li>Oops, something went wrong! We're fixing the issue as fast as we can. So sorry for the inconvenience.</li>
	    </ul>
      </div>
        <div style="width:250px; margin: 10px auto"><a href="{$url}/" id="rpx-landingpage-redirect" class="new-button fill"><b>Return to the landing page</b><i></i></a></div>
  </div>
  <div id="landing-caption">{$title}... make friends, chillax, get noticed!</div>

</div>
<script type="text/javascript">
    function orderVerificationEmail() {
        document.forms["verification"].submit();
    }
</script>
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
