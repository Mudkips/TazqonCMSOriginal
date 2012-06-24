<?php /* Smarty version Smarty-3.1.8, created on 2012-03-18 18:57:45
         compiled from "C:\xampp\htdocs\TazqonCMS\templates\tpl\page-register-email-password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64854f5e4e5c6f81d2-22654061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '655b32e5df0aa52cb30df025b67046f04536eea9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TazqonCMS\\templates\\tpl\\page-register-email-password.tpl',
      1 => 1332067167,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64854f5e4e5c6f81d2-22654061',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f5e4e5c7cfca5_79937506',
  'variables' => 
  array (
    'title' => 0,
    'webbuild' => 0,
    'url' => 0,
    'headerdescription' => 0,
    'headerkeywords' => 0,
    'webbuildrelease' => 0,
    'gender' => 0,
    'iserror' => 0,
    'errormessage' => 0,
    'value_email' => 0,
    'error_email' => 0,
    'titleshort' => 0,
    'value_retypedEmail' => 0,
    'error_retypedEmail' => 0,
    'value_password' => 0,
    'error_password' => 0,
    'error_toss' => 0,
    'value_toss' => 0,
    'value_marketing' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f5e4e5c7cfca5_79937506')) {function content_4f5e4e5c7cfca5_79937506($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
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

<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['headerdescription']->value;?>
" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['headerkeywords']->value;?>
" />

<meta name="build" content="<?php echo $_smarty_tpl->tpl_vars['webbuildrelease']->value;?>
" />
</head>

<body id="client" class="background-accountdetails-<?php echo $_smarty_tpl->tpl_vars['gender']->value;?>
">
<div id="overlay"></div>
<img src="<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery/v2/images/page_loader.gif" style="position:absolute; margin: -1500px;" />

<div id="stepnumbers">
    <div class="stepdone">Birthdate &amp; Gender</div>
    <div class="step2focus">Account details</div>
    <div class="step3">Security Check</div>
    <div class="stephabbo"></div>
</div>

<div id="main-container">
	
	<?php if ($_smarty_tpl->tpl_vars['iserror']->value){?>
	<div id="error-messages-container" class="cbb">
	   <div class="rounded rounded-red">
	       <div id="error-title" class="error">
	            <?php echo $_smarty_tpl->tpl_vars['errormessage']->value;?>

	       </div>
	    </div>
	  </div>
	<?php }else{ ?>
    <div id="error-placeholder"></div>
    <?php }?>

    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/quickregister/email_password_submit" id="quickregister-form">

        <h2>Account details</h2>

      <div id="inner-container">
        <div class="inner-content bottom-border">
            <div class="field">
                <label for="email-address">Email</label>
                <input type="text" id="email-address" name="bean.email" value="<?php echo $_smarty_tpl->tpl_vars['value_email']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['error_email']->value){?>class="error"<?php }?>/>
            </div>
            <div class="help">You'll need to use this <b>email address to log in</b> to <?php echo $_smarty_tpl->tpl_vars['titleshort']->value;?>
 in the future. Please use a valid address.</div>
            <div class="field">
                <label for="email-address2">Re-enter Email</label>
                <input type="text" id="email-address2" name="bean.retypedEmail" value="<?php echo $_smarty_tpl->tpl_vars['value_retypedEmail']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['error_retypedEmail']->value){?>class="error"<?php }?>/>
            </div>
            <div class="help">...just to be sure.</div>

            <div id="password-field" class="field">
                <label for="register-password">Password</label>
                <input type="password" name="bean.password" id="register-password" maxlength="32" value="<?php echo $_smarty_tpl->tpl_vars['value_password']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['error_password']->value){?>class="error"<?php }?>/>
            </div>
            <div class="help">Password must be at least <b>6 characters </b>long and include <b>letters and numbers</b></div>
        </div>

        <div class="inner-content top-margin">
			<div class="field-content checkbox <?php if ($_smarty_tpl->tpl_vars['error_toss']->value){?>error<?php }?>">
			  <label>
			    <input type="checkbox" name="bean.termsOfServiceSelection" id="terms" value="true" class="checkbox-field" <?php if ($_smarty_tpl->tpl_vars['value_toss']->value){?>checked<?php }?>/>
			    I accept the <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/help/entries/20106178-privacy-policies-terms-of-use" target="_blank" onclick="window.open('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/help/entries/20106178-privacy-policies-terms-of-use'); return false;">Terms Of Service</a>
			  </label>
			</div>            

			<div class="field-content checkbox">
			  <label>
							    <input type="checkbox" name="bean.marketing" id="marketing" value="true" class="checkbox-field" <?php if ($_smarty_tpl->tpl_vars['value_marketing']->value){?>checked<?php }?>/>
			    Keep me updated about the latest <?php echo $_smarty_tpl->tpl_vars['titleshort']->value;?>
 happenings, news and gossip!
			  </label>
			</div>
			
			
			
        </div>
      </div>
    </form>


    <div id="select">
        <div class="button">
            <a id="proceed-button" href="#" class="area">Next</a>
            <span class="close"></span>
        </div>
        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/quickregister/back" id="back-link">Go Back</a>
   </div>
</div>

<script type="text/javascript">
    document.observe("dom:loaded", function() {
        Event.observe($("back-link"), "click", function() {
            Overlay.show(null,'Loading...');
        });
        Event.observe($("proceed-button"), "click", function() {
            Overlay.show(null,'Loading...');            
            $("quickregister-form").submit();
        });
            $("email-address").focus();
    });
</script>

<script type="text/javascript">
    HabboView.run();
</script>

</body>
</html><?php }} ?>