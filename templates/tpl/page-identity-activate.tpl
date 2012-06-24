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
var habboName = {$Username};
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
    
    <style type="text/css">
        .label { float: left; width: 100px; clear: left}
        #activate-account-form { margin-bottom: 10px; float: left } 
        #activate-account-form img { float: left; margin: 58px 55px 0 29px }
        #info { padding: 45px 0 10px 0; float: left; width: 310px }
        #remove-email { clear: left; margin: 0 2px; background-color: #eee; padding: 5px 10px; font-size: 10px }
    </style>

<meta name="description" content="{$headerdescription}" />
<meta name="keywords" content="{$headerkeywords}" />

<meta name="build" content="{$webbuildrelease}" />
</head>

<body id="embedpage">
<div id="overlay"></div>
<div id="container">

    <div class="activateemail-container clearfix">
        <h1 style="margin-bottom: 0">Account activation successful</h1>
        <div>
            <form method="post" id="activate-account-form">
                <img src="http://www.habbo.co.uk/habbo-imaging/avatarimage?figure={$figure}" width="64" height="110"/>
                <div id="info">
                <p>Your email address is verified when you click on the link.</p>
                <table>
                <tr>                
                <td>Habbo name</td> <td><b>{$Username}</b></td>
                </tr><tr>                
                <td>Date of birth</td> <td><b>{$dob}</b></td>
                </tr><tr>
                <td>Email</td> <td><b>{$email}</b></td>
                </tr>
                </table>            
                </div>
                <p style="width: 400px">
                <a href="#" onclick="$(this).up('form').submit();">Verify and go to website</a>
                </p>
                <input type="submit" value="Continue to website" id="next"/>
                <input type="hidden" name="a" value="{$email}"/>
                <input type="hidden" name="b" value="{$securekey}"/>
                <input type="hidden" name="c" value="11"/>
            </form>
            
            <a href="#" onclick="$('remove-email').toggle(); $(this).hide(); return false;">This account was not created by me</a>
            <div class="clearfix" id="remove-email" style="display: none">
                <div id="remove-email-details">
                <p>
                If you  received an email from us about an account you did not create yourself, you can ask us to add your email address to a block list. You will not receive any additional email from us once you do this, and the address cannot be used to create a Habbo character in the future.
                </p>
                <form method="post">
                <input type="hidden" name="a" value="{$email}"/>
                <input type="hidden" name="b" value="{$securekey}"/>
                <input type="hidden" name="c" value="15"/>
                <p><a href="#" class="new-button left" onclick="if (confirm('Are you sure you want to remove your email address from our databases?')) { $(this).up('form').submit(); } return false;"><b>Remove my email address from Habbo database</b><i></i></a></p>
                <input type="submit" value="habboid.activate.remove_address.button" id="next"/>
                </form>
                </div>
            </div>
        </div>
    </div>
    <div class="activateemail-container-bottom"></div>
    <script type="text/javascript">
        $(document.body).addClassName("js");
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
