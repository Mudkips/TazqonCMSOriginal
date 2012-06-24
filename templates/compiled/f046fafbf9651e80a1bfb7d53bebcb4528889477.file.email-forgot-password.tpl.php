<?php /* Smarty version Smarty-3.1.8, created on 2012-03-18 11:53:40
         compiled from "C:\xampp\htdocs\TazqonCMS\templates\tpl\email-forgot-password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:235654f65beb4321ef1-86906094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f046fafbf9651e80a1bfb7d53bebcb4528889477' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TazqonCMS\\templates\\tpl\\email-forgot-password.tpl',
      1 => 1332067520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '235654f65beb4321ef1-86906094',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'webbuild' => 0,
    'titleshort' => 0,
    'email' => 0,
    'url' => 0,
    'securekey' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f65beb43d6e28_79959219',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f65beb43d6e28_79959219')) {function content_4f65beb43d6e28_79959219($_smarty_tpl) {?><table width="98%" border="0" cellspacing="0" cellpadding="0">
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
                                        Hello, <?php echo $_smarty_tpl->tpl_vars['email']->value;?>

                                    </p>
                                    <p style="font-family: Verdana,Arial,sans-serif; font-size: 12px; padding-bottom: 5px;">
                                        To change your password please click <a href=<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/account/password/resetIdentity/<?php echo $_smarty_tpl->tpl_vars['securekey']->value;?>
">this link to reset your password</a>.
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
/account/password/resetIdentity/<?php echo $_smarty_tpl->tpl_vars['securekey']->value;?>
">
                                                    Reset my Habbo password
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
<tr>
    <td valign="top" align="center">
        <table style="font-family: Verdana,Arial,sans-serif; text-align: justify; font-size:11px; color:#aaaaaa; padding-top: 10px;padding-right: 10px;padding-left: 10px;padding-bottom: 10px; margin-top: 0pt;margin-right: 0pt;margin-left: 0pt;margin-bottom: 0pt;" border="0" cellpadding="0" cellspacing="0" width="595">
            <tr>
                <td height="8"><!-- Dummy --></td>
            </tr>
            <tr>
                <td valign="top">
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