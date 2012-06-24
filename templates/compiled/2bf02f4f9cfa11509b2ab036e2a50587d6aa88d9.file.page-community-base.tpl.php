<?php /* Smarty version Smarty-3.1.8, created on 2012-03-25 12:55:17
         compiled from "C:\xampp\htdocs\TazqonCMS\templates\tpl\page-community-base.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115524f6d99ab8ac530-48636904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bf02f4f9cfa11509b2ab036e2a50587d6aa88d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TazqonCMS\\templates\\tpl\\page-community-base.tpl',
      1 => 1332672916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115524f6d99ab8ac530-48636904',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f6d99abc7e460_33238750',
  'variables' => 
  array (
    'title' => 0,
    'subtitle' => 0,
    'webbuild' => 0,
    'LoggedIn' => 0,
    'Username' => 0,
    'Userid' => 0,
    'url' => 0,
    'IncludeFiles' => 0,
    'headerdescription' => 0,
    'headerkeywords' => 0,
    'webbuildrelease' => 0,
    'body_id' => 0,
    'titleshort' => 0,
    'menu_mainitems' => 0,
    'item' => 0,
    'usersonline' => 0,
    'menu_subitems' => 0,
    'content' => 0,
    'plugin' => 0,
    'column1' => 0,
    'column2' => 0,
    'column3' => 0,
    'footercopyright' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f6d99abc7e460_33238750')) {function content_4f6d99abc7e460_33238750($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['subtitle']->value;?>
 </title>

<script type="text/javascript">
var andSoItBegins = (new Date()).getTime();
</script>
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon" />

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery/static/styles/common.css" type="text/css" />
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
document.habboLoggedIn = <?php echo $_smarty_tpl->tpl_vars['LoggedIn']->value;?>
;
var habboName = "<?php echo $_smarty_tpl->tpl_vars['Username']->value;?>
";
var habboId = <?php echo $_smarty_tpl->tpl_vars['Userid']->value;?>
;
var facebookUser = false;
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

<?php echo $_smarty_tpl->tpl_vars['IncludeFiles']->value;?>


<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['headerdescription']->value;?>
" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['headerkeywords']->value;?>
" />

<meta name="build" content="<?php echo $_smarty_tpl->tpl_vars['webbuildrelease']->value;?>
" />
</head>
<body id="<?php echo $_smarty_tpl->tpl_vars['body_id']->value;?>
" class=" ">
<div id="overlay"></div>
<div id="header-container">
	<div id="header" class="clearfix">
		<h1><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"></a></h1>
<div id="subnavi" class="narrow">
    <div id="subnavi-search">
        <div id="subnavi-search-upper">
        <ul id="subnavi-search-links">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/help/login" target="habbohelp" >Help</a></li>
            <li>
                <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/account/logout" method="post">
                    <button type="submit" id="signout" class="link"><span>Sign Out</span></button>
                </form>
            </li>
        </ul>
        </div>
    </div>
    <div id="to-hotel">
                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/client" class="new-button green-button" target="client" onclick="HabboClient.openOrFocus(this); return false;"><b>Enter <?php echo $_smarty_tpl->tpl_vars['titleshort']->value;?>
 Hotel</b><i></i></a>
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
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu_mainitems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
	<?php if ($_smarty_tpl->tpl_vars['item']->value['selected']){?>
	<li class="<?php echo $_smarty_tpl->tpl_vars['item']->value['classname'];?>
 selected">
		<strong>
			<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

		</strong>
		<span></span>
	</li>
	<?php }else{ ?>
	<li class="<?php echo $_smarty_tpl->tpl_vars['item']->value['classname'];?>
">
		<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
		<span></span>
	</li>
	<?php }?>
<?php } ?>
</ul>

        <div id="habbos-online"><div class="rounded"><span><?php echo $_smarty_tpl->tpl_vars['usersonline']->value;?>
 members online</span></div></div>
	</div>
</div>

<div id="content-container">

<div id="navi2-container" class="pngbg">
    <div id="navi2" class="pngbg clearfix">
	<ul>
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu_subitems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['item']->value['selected']){?>
		<li class="<?php echo $_smarty_tpl->tpl_vars['item']->value['classname'];?>
 selected">
			<strong>
				<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

			</strong>
			<span></span>
		</li>
		<?php }else{ ?>
		<li class="<?php echo $_smarty_tpl->tpl_vars['item']->value['classname'];?>
">
			<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
			<span></span>
		</li>
		<?php }?>
	<?php } ?>
	</ul>
    </div>
</div>

<div id="container">
	<div id="content" style="position: relative" class="clearfix">
	<?php  $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plugin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->key => $_smarty_tpl->tpl_vars['plugin']->value){
$_smarty_tpl->tpl_vars['plugin']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['plugin']->value->OnCreate();?>

	<?php } ?>

<div id="column1" class="column">
	<?php  $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plugin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['column1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->key => $_smarty_tpl->tpl_vars['plugin']->value){
$_smarty_tpl->tpl_vars['plugin']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['plugin']->value->OnCreate();?>

	<?php } ?>
</div>
<div id="column2" class="column">
	<?php  $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plugin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['column2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->key => $_smarty_tpl->tpl_vars['plugin']->value){
$_smarty_tpl->tpl_vars['plugin']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['plugin']->value->OnCreate();?>

	<?php } ?>
</div>
<script type="text/javascript">
HabboView.run();
</script>
<div id="column3" class="column">		 
	<?php  $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plugin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['column3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->key => $_smarty_tpl->tpl_vars['plugin']->value){
$_smarty_tpl->tpl_vars['plugin']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['plugin']->value->OnCreate();?>

	<?php } ?>
</div>
<!--[if lt IE 7]>
<script type="text/javascript">
Pngfix.doPngImageFix();
</script>
<![endif]-->
    </div>
<div id="footer">
	<p class="footer-links"><a href="http://help.habbo.com">Habbo.com Customer Support</a> | <a href="http://www.sulake.com" target="_new">Sulake</a> | <a href="https://help.habbo.com/entries/20106178-privacy-policies-terms-of-use" target="_new">Terms of Use</a> | <a href="https://help.habbo.com/entries/20106178-privacy-policies-terms-of-use" target="_new">Privacy Policy/Your California Privacy Rights</a> | <a href="https://help.habbo.com/entries/278050-infringements-policy" target="_new">Infringements</a> | <a href="https://help.habbo.com/entries/20106178-privacy-policies-terms-of-use" target="_new"> Terms and Conditions of Sale - US</a> | <a href="http://www.habbo.com/groups/officialhabboway" target="_new">The Habbo Way</a> | <a href="http://www.habbo.com/groups/officialsafetytips">Safety Tips</a> | <a href="http://www.habbo.com/groups/officialparentsguide">Parents</a> |<a href="mailto:advertising.com@sulake.com" target="_new">Advertise With Us</a></p>
	<p class="copyright"><?php echo $_smarty_tpl->tpl_vars['footercopyright']->value;?>
</p>
</div></div>

</div>

</body>
</html>
<?php }} ?>