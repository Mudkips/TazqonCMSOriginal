<?php /* Smarty version Smarty-3.1.8, created on 2012-03-18 12:52:08
         compiled from "C:\xampp\htdocs\TazqonCMS\templates\tpl\page-register-age-gate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122494f5e34276c1014-79341957%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cae96c03a3ce81da5a5f12201fc283d1f8db233' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TazqonCMS\\templates\\tpl\\page-register-age-gate.tpl',
      1 => 1332067077,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122494f5e34276c1014-79341957',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f5e3427826715_86264150',
  'variables' => 
  array (
    'title' => 0,
    'webbuild' => 0,
    'url' => 0,
    'headerdescription' => 0,
    'headerkeywords' => 0,
    'webbuildrelease' => 0,
    'titleshort' => 0,
    'iserror' => 0,
    'errormessage' => 0,
    'amount_months' => 0,
    'k' => 0,
    'value_month' => 0,
    'i' => 0,
    'amount_days' => 0,
    'value_day' => 0,
    'amount_years' => 0,
    'value_year' => 0,
    'value_gender' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f5e3427826715_86264150')) {function content_4f5e3427826715_86264150($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 -  </title>

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

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery/static/styles/quickregister.css" type="text/css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery/static/js/quickregister.js" type="text/javascript"></script>

<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['headerdescription']->value;?>
" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['headerkeywords']->value;?>
" />

<meta name="build" content="<?php echo $_smarty_tpl->tpl_vars['webbuildrelease']->value;?>
" />
</head>

<body id="client" class="background-agegate">
<div id="overlay"></div>
<img src="<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery/v2/images/page_loader.gif" style="position:absolute; margin: -1500px;" />

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
        Javascript is disabled on your browser. Please enable JavaScript or upgrade to a Javascript-capable browser to use <?php echo $_smarty_tpl->tpl_vars['titleshort']->value;?>
 :)
    </div>
</div>
</noscript>

<div id="alert-cookies-container" style="display:none">
    <div id="alert-cookies-title">
        Missing cookie support
    </div>
    <div id="alert-cookies-text">
        Cookies are disabled on your browser. Please enable cookies to use <?php echo $_smarty_tpl->tpl_vars['titleshort']->value;?>
.
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

	<?php if ($_smarty_tpl->tpl_vars['iserror']->value){?>
	<div id="error-messages-container" class="cbb">
	    <div class="rounded" style="background-color: #cb2121;">
		    <div id="error-title" class="error">
		    	<?php echo $_smarty_tpl->tpl_vars['errormessage']->value;?>
 <br />
		    </div>
	    </div>
    </div>
	<?php }else{ ?>
    <div id="error-placeholder"></div>
    <?php }?>

    <form id="quickregisterform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/quickregister/age_gate_submit">

        <h2>Birthdate &amp; Gender</h2>

        <div id="date-selector">
            <h3>Please enter a valid birthdate</h3>
			<select name="bean.month" id="bean_month" class="dateselector">
			<option value="">Month</option>
			<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['amount_months']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['value_month']->value){?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
				<?php }else{ ?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
				<?php }?>
			<?php } ?>
			</select>
			
			<select name="bean.day" id="bean_day" class="dateselector">
			<option value="">Day</option>
			<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['amount_days']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['value_day']->value){?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
				<?php }else{ ?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
				<?php }?>
			<?php } ?>
			</select>
			
			<select name="bean.year" id="bean_year" class="dateselector">
			<option value="">Year</option>
			<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['amount_years']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['value_year']->value){?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
				<?php }else{ ?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
				<?php }?>
			<?php } ?>
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
                            Male<br/><img alt="male" src="<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery/v2/images/registration/male_sign.png" width="36" height="47">
                        </span>
                    </li>
                    <li>
                        <span class="bgtop"></span>
                        <span class="bgbottom"></span>
                        <span class="gender-choice">
                            Female<br/><img alt="female" src="<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery/v2/images/registration/female_sign.png" width="36" height="47">
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </form>

    <div id="select">
        <a id="back-link" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/">Go Back</a>
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
        QuickRegister.initGenderChooser("<?php echo $_smarty_tpl->tpl_vars['value_gender']->value;?>
");
    });
</script>

<script type="text/javascript">
    HabboView.run();
</script>

</body>
</html><?php }} ?>