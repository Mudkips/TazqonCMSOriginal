<?php /* Smarty version Smarty-3.1.8, created on 2012-03-25 16:35:33
         compiled from "C:\xampp\htdocs\TazqonCMS\templates\tpl\page-logout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:317404f6f2c85269070-90083180%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '076e60a2a47321897c1994b79509352c369635ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TazqonCMS\\templates\\tpl\\page-logout.tpl',
      1 => 1332686121,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '317404f6f2c85269070-90083180',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f6f2c853e48f6_19534788',
  'variables' => 
  array (
    'title' => 0,
    'webbuild' => 0,
    'url' => 0,
    'headerdescription' => 0,
    'headerkeywords' => 0,
    'webbuildrelease' => 0,
    'usersonline' => 0,
    'footercopyright' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f6f2c853e48f6_19534788')) {function content_4f6f2c853e48f6_19534788($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - Logged out </title>

<script type="text/javascript">
var andSoItBegins = (new Date()).getTime();
</script>
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon" />

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery/static/styles/common.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery/static/styles/process.css" type="text/css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery/static/js/libs2.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery/static/js/visual.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery/static/js/libs.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery/static/js/common.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery/static/js/fullcontent.js" type="text/javascript"></script>

<script type="text/javascript">
document.habboLoggedIn = false;
var habboName = null;
var habboId = null;
var habboReqPath = "";
var habboStaticFilePath = "<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery";
var habboImagerUrl = "http://www.habbo.com/habbo-imaging/";
var habboPartner = "";
var habboDefaultClientPopupUrl = "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/client";
window.name = "habboMain";
if (typeof HabboClient != "undefined") {
    HabboClient.windowName = "client";
    HabboClient.maximizeWindow = true;
}


</script>

<script language="JavaScript" type="text/javascript">
	document.logoutPage = true;
	</script>

<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['headerdescription']->value;?>
" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['headerkeywords']->value;?>
" />

<meta name="build" content="<?php echo $_smarty_tpl->tpl_vars['webbuildrelease']->value;?>
" />
</head>
<body id="logout" class="process-template">

<div id="overlay"></div>

<div id="container">
	<div class="cbb process-template-box clearfix">
		<div id="content" class="wide">
					<div id="header" class="clearfix">
						<h1><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"></a></h1>
<ul class="stats">
    <li class="stats-online"><span class="stats-fig"><?php echo $_smarty_tpl->tpl_vars['usersonline']->value;?>
</span> Habbos online now!</li>
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
			    document.location.href='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
';
	    });
    }
    
    Cookie.erase("habboclient");
    Cookie.erase("friendlist");

    HabboView.run();
});
</script>
<div id="footer">
	<p class="footer-links"><a href="http://help.habbo.com">Habbo.com Customer Support</a> | <a href="http://www.sulake.com" target="_new">Sulake</a> | <a href="https://help.habbo.com/entries/20106178-privacy-policies-terms-of-use" target="_new">Terms of Use</a> | <a href="https://help.habbo.com/entries/20106178-privacy-policies-terms-of-use" target="_new">Privacy Policy/Your California Privacy Rights</a> | <a href="https://help.habbo.com/entries/278050-infringements-policy" target="_new">Infringements</a> | <a href="https://help.habbo.com/entries/20106178-privacy-policies-terms-of-use" target="_new"> Terms and Conditions of Sale - US</a> | <a href="http://www.habbo.com/groups/officialhabboway" target="_new">The Habbo Way</a> | <a href="http://www.habbo.com/groups/officialsafetytips">Safety Tips</a> | <a href="http://www.habbo.com/groups/officialparentsguide">Parents</a> |<a href="mailto:advertising.com@sulake.com" target="_new">Advertise With Us</a></p>
	<p class="copyright"><?php echo $_smarty_tpl->tpl_vars['footercopyright']->value;?>
</p>
</div>			</div>
        </div>
    </div>
</div>
</body>
</html>
<?php }} ?>