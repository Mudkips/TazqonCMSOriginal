<?php /* Smarty version Smarty-3.1.8, created on 2012-03-18 18:58:58
         compiled from "C:\xampp\htdocs\TazqonCMS\templates\tpl\email-register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:238824f649a62b95ea4-80053463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fdbacef053c82d6106e198cf8f45e7e6e0f33ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TazqonCMS\\templates\\tpl\\email-register.tpl',
      1 => 1332067301,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '238824f649a62b95ea4-80053463',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f649a62e3f3c8_56638299',
  'variables' => 
  array (
    'webbuild' => 0,
    'titleshort' => 0,
    'email' => 0,
    'url' => 0,
    'id' => 0,
    'securekey' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f649a62e3f3c8_56638299')) {function content_4f649a62e3f3c8_56638299($_smarty_tpl) {?><table width="98%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td align="center">

            <table border="0" cellpadding="0" cellspacing="0" width="595">
                <tr>
                    <td align="left" style="border-bottom: 1px solid #aaaaaa;" height="70" valign="middle">
                        <table border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['webbuild']->value;?>
/web-gallery/v2/images/habbologo_blackR.gif" alt="<?php echo $_smarty_tpl->tpl_vars['titleshort']->value;?>
" width="110" height="40" style="margin-left: 12px; display: block;" />
                                </td>
                            </tr>

                        </table>
                    </td>
                </tr>


<tr>
    <td align="left" style="border-bottom: 1px dashed #aaaaaa;"  valign="middle">
        <table style="margin-left: 12px; margin-right: 12px; padding: 0 0 10px 0; width: 100%;" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td valign="top">

                                    <p style="font-family: Verdana,Arial,sans-serif; font-size: 20px; padding-top: 15px;">
                                        Hello, <b><span style="font-weight:bold"><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</span></b>
                                    </p>
                                    <p style="font-family: Verdana,Arial,sans-serif; font-size: 12px; padding-bottom: 5px;">
                                        Thanks for joining the <b><span style="font-weight:bold"><?php echo $_smarty_tpl->tpl_vars['titleshort']->value;?>
 Hotel</span></b> community!
                                        <br/><br/>
                                        Here's a special <a style="color: #007df2" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/identity/activate?a=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&b=<?php echo $_smarty_tpl->tpl_vars['securekey']->value;?>
">welcome gift</a> to get you started.
                                    </p>
                                    <p style="font-family: Verdana,Arial,sans-serif; font-size: 12px; font-style:italic; padding-top: 5px; padding-bottom: 5px;">
                                        <em>We hope to see you soon!</em>
                                    </p>
                                    <p style="font-family: Verdana,Arial,sans-serif; font-size: 12px; font-style:italic; padding-top: 5px; padding-bottom: 5px;">
                                        <em>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" style="color: #007df2"><?php echo $_smarty_tpl->tpl_vars['titleshort']->value;?>
 Hotel</a>
                                            <br />Hotel Administrators
                                        </em>
                                    </p>
</td>
</tr>
</table>
</td>
</tr>
<tr>
    <td align="left" style="border-bottom: 1px solid #aaaaaa;" height="100" valign="middle">
        <table style="margin-left: 12px;" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td valign="middle">
                    <table style="background-color: #51b708; height: 50px;" height="50px;" cellpadding="0" cellspacing="0">
                        <tr>
                            <td style="height: 100%; vertical-align:middle; border:solid 2px #000000" valign="middle">
                                <p style="font-family: Verdana,Arial,sans-serif; font-weight: bold; font-size: 18px; color:#ffffff; margin-top: 0; margin-bottom: 0;">
                                                <a style="text-decoration: none; padding:15px 20px; color:#ffffff" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/identity/activate?a=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&b=<?php echo $_smarty_tpl->tpl_vars['securekey']->value;?>
">
                                                        Open welcome gift
                                                    </a>
</p>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>

</td>
</tr>
</table>
<?php }} ?>