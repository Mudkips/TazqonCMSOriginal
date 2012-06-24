<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>{$title} - {$subtitle} </title>

<script type="text/javascript">
var andSoItBegins = (new Date()).getTime();
</script>
<link rel="shortcut icon" href="{$webbuild}/web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon" />

<link rel="stylesheet" href="{$webbuild}/web-gallery/static/styles/common.css" type="text/css" />
<script src="{$webbuild}/web-gallery/static/js/libs2.js" type="text/javascript"></script>
<script src="{$webbuild}/web-gallery/static/js/visual.js" type="text/javascript"></script>
<script src="{$webbuild}/web-gallery/static/js/libs.js" type="text/javascript"></script>
<script src="{$webbuild}/web-gallery/static/js/common.js" type="text/javascript"></script>
<script src="{$webbuild}/web-gallery/static/js/fullcontent.js" type="text/javascript"></script>

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

{$IncludeFiles}

<meta name="description" content="{$headerdescription}" />
<meta name="keywords" content="{$headerkeywords}" />

<meta name="build" content="{$webbuildrelease}" />
</head>
<body id="{$body_id}" class=" ">
<div id="overlay"></div>
<div id="header-container">
	<div id="header" class="clearfix">
		<h1><a href="{$url}"></a></h1>
<div id="subnavi" class="narrow">
    <div id="subnavi-search">
        <div id="subnavi-search-upper">
        <ul id="subnavi-search-links">
                <li><a href="{$url}/help/login" target="habbohelp" >Help</a></li>
            <li>
                <form action="{$url}/account/logout" method="post">
                    <button type="submit" id="signout" class="link"><span>Sign Out</span></button>
                </form>
            </li>
        </ul>
        </div>
    </div>
    <div id="to-hotel">
                <a href="{$url}/client" class="new-button green-button" target="client" onclick="HabboClient.openOrFocus(this); return false;"><b>Enter {$titleshort} Hotel</b><i></i></a>
    </div>
</div>
<script type="text/javascript">
L10N.put("purchase.group.title", "Create a Group");
document.observe("dom:loaded", function() {
    $("signout").observe("click", function() {
        HabboClient.close();
    });
});
</script><ul id="navi">
{foreach from=$menu_mainitems item=item}
	{if $item.selected}
	<li class="{$item.classname} selected">
		<strong>
			{$item.title}
		</strong>
		<span></span>
	</li>
	{else}
	<li class="{$item.classname}">
		<a href="{$item.url}">{$item.title}</a>
		<span></span>
	</li>
	{/if}
{/foreach}
</ul>

        <div id="habbos-online"><div class="rounded"><span>{$usersonline} members online</span></div></div>
	</div>
</div>

<div id="content-container">

<div id="navi2-container" class="pngbg">
    <div id="navi2" class="pngbg clearfix">
	<ul>
	{foreach from=$menu_subitems item=item}
		{if $item.selected}
		<li class="{$item.classname} selected">
			<strong>
				{$item.title}
			</strong>
			<span></span>
		</li>
		{else}
		<li class="{$item.classname}">
			<a href="{$item.url}">{$item.title}</a>
			<span></span>
		</li>
		{/if}
	{/foreach}
	</ul>
    </div>
</div>

<div id="container">
	<div id="content" style="position: relative" class="clearfix">
	{foreach from=$content item=plugin}
		{$plugin->OnCreate()}
	{/foreach}

<div id="column1" class="column">
	{foreach from=$column1 item=plugin}
		{$plugin->OnCreate()}
	{/foreach}
</div>
<div id="column2" class="column">
	{foreach from=$column2 item=plugin}
		{$plugin->OnCreate()}
	{/foreach}
</div>
<script type="text/javascript">
HabboView.run();
</script>
<div id="column3" class="column">		 
	{foreach from=$column3 item=plugin}
		{$plugin->OnCreate()}
	{/foreach}
</div>
<!--[if lt IE 7]>
<script type="text/javascript">
Pngfix.doPngImageFix();
</script>
<![endif]-->
    </div>
<div id="footer">
	<p class="footer-links"><a href="http://help.habbo.com">Habbo.com Customer Support</a> | <a href="http://www.sulake.com" target="_new">Sulake</a> | <a href="https://help.habbo.com/entries/20106178-privacy-policies-terms-of-use" target="_new">Terms of Use</a> | <a href="https://help.habbo.com/entries/20106178-privacy-policies-terms-of-use" target="_new">Privacy Policy/Your California Privacy Rights</a> | <a href="https://help.habbo.com/entries/278050-infringements-policy" target="_new">Infringements</a> | <a href="https://help.habbo.com/entries/20106178-privacy-policies-terms-of-use" target="_new"> Terms and Conditions of Sale - US</a> | <a href="http://www.habbo.com/groups/officialhabboway" target="_new">The Habbo Way</a> | <a href="http://www.habbo.com/groups/officialsafetytips">Safety Tips</a> | <a href="http://www.habbo.com/groups/officialparentsguide">Parents</a> |<a href="mailto:advertising.com@sulake.com" target="_new">Advertise With Us</a></p>
	<p class="copyright">{$footercopyright}</p>
</div></div>

</div>

</body>
</html>
