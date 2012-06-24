<?php /* Smarty version Smarty-3.1.8, created on 2012-03-18 18:58:30
         compiled from "C:\xampp\htdocs\TazqonCMS\templates\tpl\page-register-captcha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165984f60c60ccdcd23-53320068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '546410a3718310645451bcbe36dffc8fa8325885' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TazqonCMS\\templates\\tpl\\page-register-captcha.tpl',
      1 => 1332067087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165984f60c60ccdcd23-53320068',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f60c60cdb31c2_93091344',
  'variables' => 
  array (
    'title' => 0,
    'webbuild' => 0,
    'url' => 0,
    'headerdescription' => 0,
    'headerkeywords' => 0,
    'webbuildrelease' => 0,
    'iserror' => 0,
    'errormessage' => 0,
    'random_avatars' => 0,
    'publickey' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f60c60cdb31c2_93091344')) {function content_4f60c60cdb31c2_93091344($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
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
    <script type="text/javascript" src="https://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>

<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['headerdescription']->value;?>
" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['headerkeywords']->value;?>
" />

<meta name="build" content="<?php echo $_smarty_tpl->tpl_vars['webbuildrelease']->value;?>
" />
</head>

<body id="client" class="background-captcha">
<div id="overlay"></div>
<img src="<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery/v2/images/page_loader.gif" style="position:absolute; margin: -1500px;" />

<div id="stepnumbers">
    <div class="stepdone">Birthdate &amp; Gender</div>
    <div class="stepdone">Account details</div>
    <div class="step3focus">Security Check</div>
    <div class="stephabbo"></div>
</div>

<div id="main-container">

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

    <h2>Step into the Hotel</h2>

        <div id="avatar-choices">
            <h3>Choose a look for your first visit:</h3>
            <ul id="avatars">
				<?php echo $_smarty_tpl->tpl_vars['random_avatars']->value;?>

            </ul>
            <p style="clear: left;">
                Don't like any of these?
                <a href="#" id="more-avatars">Check out more styles.</a>
                <br/><span class="help">Don't worry - you can change your look later.</span>
            </p>
        </div>

    <div id="captcha-container">
        <h3>Just one quick security thingie before we go:</h3>
        <div id="captcha-image-container">
            <div id="recaptcha_image"></div>
        </div>
        <div id="captcha-reload-container">
            Can't make out the words?
            <a id="recaptcha-reload" href="#">Try new code</a>
        </div>
    </div>

    <div class="delimiter_smooth">
        <div class="flat">&nbsp;</div>
        <div class="arrow">&nbsp;</div>
        <div class="flat">&nbsp;</div>
    </div>

    <div id="inner-container">
        <form id="captcha-form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/quickregister/captcha_submit" onsubmit="Overlay.show(null,'Loading...');">
            <div id="recaptcha-input-title">Type in the two words (separated with a space):</div>
            <div id="recaptcha-input">
                <input type="text" tabindex="2" name="captchaResponse" id="recaptcha_response_field">
            </div>
                <input type="hidden" id="avatarFigure" name="bean.figure" value=""/>
        </form>
    </div>

    <div id="select">
        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/quickregister/backToAccountDetails" id="back-link">Go Back</a>
        <div class="button">
            <a id="proceed-button" href="#" class="area">Done</a>
            <span class="close"></span>
        </div>
   </div>

    <script type="text/javascript">

        document.observe("dom:loaded", function() {
            Utils.showRecaptcha("registration-recaptcha", "<?php echo $_smarty_tpl->tpl_vars['publickey']->value;?>
");
            if ($("recaptcha-reload")) {
                Event.observe($("recaptcha-reload"), "click", function(e) {
                    Event.stop(e);
                    Utils.reloadRecaptcha();
                });
            }

            if ($("more-avatars")) {
                Event.observe($("more-avatars"), "click", function(e) {
                    Event.stop(e);
                    new Ajax.Updater("avatars", "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/quickregister/refresh_avatars", {
                        onComplete: function (t) {
                            QuickRegister.initAvatarChooser();
                        }
                    });
                });
            }

            if($("proceed-button")) {
                $("proceed-button").observe("click", function(e) {
                    Event.stop(e);
                    Overlay.show(null,'Loading...');
                    $("captcha-form").submit();
                });

                Event.observe($("back-link"), "click", function() {
                    Overlay.show(null,'Loading...');
                });
            }

            $("recaptcha_response_field").focus();

            QuickRegister.initAvatarChooser();
        });
    </script>

</div>

<script type="text/javascript">
    HabboView.run();
</script>

</body>
</html><?php }} ?>