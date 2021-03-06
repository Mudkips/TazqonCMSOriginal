<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>{$title} - Logged out </title>

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

<script language="JavaScript" type="text/javascript">
	document.logoutPage = true;
	</script>

<meta name="description" content="{$headerdescription}" />
<meta name="keywords" content="{$headerkeywords}" />

<meta name="build" content="{$webbuildrelease}" />
</head>
<body id="logout" class="process-template">

<div id="overlay"></div>

<div id="container">
	<div class="cbb process-template-box clearfix">
		<div id="content" class="wide">
					<div id="header" class="clearfix">
						<h1><a href="{$url}"></a></h1>
<ul class="stats">
    <li class="stats-online"><span class="stats-fig">{$usersonline}</span> Habbos online now!</li>
</ul>
					</div>
			<div id="process-content">
	        	<div class="action-confirmation flash-message">
	<div class="rounded">
		You have successfully signed out
	</div>
</div>

<div style="text-align: center">


        <div style="width:100px; margin: 10px auto"><a href="#" id="logout-ok" class="new-button fill"><b>OK</b><i></i></a></div>



<div id="column1" class="column">
</div>
<div id="column2" class="column">
</div>
</div>

<script type="text/javascript">
document.observe("dom:loaded", function() {

    if (!!$("logout-ok")) {
	    Event.observe('logout-ok', 'click', function(e) {
		    Event.stop(e);
			    document.location.href='{$url}';
	    });
    }
    
    Cookie.erase("habboclient");
    Cookie.erase("friendlist");

    HabboView.run();
});
</script>
<div id="footer">
	<p class="footer-links"><a href="http://help.habbo.com">Habbo.com Customer Support</a> | <a href="http://www.sulake.com" target="_new">Sulake</a> | <a href="https://help.habbo.com/entries/20106178-privacy-policies-terms-of-use" target="_new">Terms of Use</a> | <a href="https://help.habbo.com/entries/20106178-privacy-policies-terms-of-use" target="_new">Privacy Policy/Your California Privacy Rights</a> | <a href="https://help.habbo.com/entries/278050-infringements-policy" target="_new">Infringements</a> | <a href="https://help.habbo.com/entries/20106178-privacy-policies-terms-of-use" target="_new"> Terms and Conditions of Sale - US</a> | <a href="http://www.habbo.com/groups/officialhabboway" target="_new">The Habbo Way</a> | <a href="http://www.habbo.com/groups/officialsafetytips">Safety Tips</a> | <a href="http://www.habbo.com/groups/officialparentsguide">Parents</a> |<a href="mailto:advertising.com@sulake.com" target="_new">Advertise With Us</a></p>
	<p class="copyright">{$footercopyright}</p>
</div>			</div>
        </div>
    </div>
</div>
</body>
</html>
