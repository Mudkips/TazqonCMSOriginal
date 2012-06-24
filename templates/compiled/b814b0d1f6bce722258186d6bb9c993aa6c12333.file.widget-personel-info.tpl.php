<?php /* Smarty version Smarty-3.1.8, created on 2012-03-25 12:46:08
         compiled from "C:\xampp\htdocs\TazqonCMS\templates\tpl\widget-personel-info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:267584f6e36e9cd7a74-92148704%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b814b0d1f6bce722258186d6bb9c993aa6c12333' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TazqonCMS\\templates\\tpl\\widget-personel-info.tpl',
      1 => 1332672250,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '267584f6e36e9cd7a74-92148704',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f6e36e9d96089_64885490',
  'variables' => 
  array (
    'url' => 0,
    'Username' => 0,
    'figure' => 0,
    'motto' => 0,
    'lastsignin' => 0,
    'titleshort' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f6e36e9d96089_64885490')) {function content_4f6e36e9d96089_64885490($_smarty_tpl) {?><div id="wide-personal-info">

    <div id="habbo-plate">
            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/identity/avatars">
            <img alt="<?php echo $_smarty_tpl->tpl_vars['Username']->value;?>
" src="<?php echo $_smarty_tpl->tpl_vars['figure']->value;?>
"/>
        </a>
    </div>

    <div id="name-box" class="info-box">
        <div class="label">Name:</div>
        <div class="content"><?php echo $_smarty_tpl->tpl_vars['Username']->value;?>
</div>
    </div>
    <div id="motto-box" class="info-box">
        <div class="label">Motto:</div>
        <div class="content"><?php echo $_smarty_tpl->tpl_vars['motto']->value;?>
</div>
    </div>
    <div id="last-logged-in-box" class="info-box">
        <div class="label">Last signed in:</div>
        <div class="content"><?php echo $_smarty_tpl->tpl_vars['lastsignin']->value;?>
</div>
    </div>

<div class="enter-hotel-btn">
    <div class="open enter-btn">
            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/client" target="client" onclick="HabboClient.openOrFocus(this); return false;">Enter <?php echo $_smarty_tpl->tpl_vars['titleshort']->value;?>
 Hotel<i></i></a>
        <b></b>
    </div>
</div>

</div><?php }} ?>