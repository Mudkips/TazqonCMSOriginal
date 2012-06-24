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

<meta name="description" content="{$headerdescription}" />
<meta name="keywords" content="{$headerkeywords}" />

<meta name="build" content="{$webbuildrelease}" />
</head>

<body id="client">
<div id="overlay"></div>
<img src="{$webbuild}/web-gallery/v2/images/page_loader.gif" style="position:absolute; margin: -1500px;" />

<link rel="stylesheet" href="{$webbuild}/web-gallery/static/styles/quickregister.css" type="text/css" />
<div id="main-container">

    <div id="inner-container">
        <div id="title" class="age-limit">
            We are sorry
        </div>

        <div class="field-content clearfix">
            <div class="left">
                <div class="registration-text">
                    Sorry, you do not meet the eligibility requirements to register with this site.
                </div>
            </div>
       </div>
    </div>

    <div class="button">
        <a id="close" href="#" class="area gray">
            Close
        </a>
        <span class="close gray"></span>
    </div>
</div>

<script language="JavaScript" type="text/javascript">
    Event.observe('close', 'click', function(event) {
            window.location = "{$url}";
    });
</script>

<script type="text/javascript">
    HabboView.run();
</script>

</body>
</html>