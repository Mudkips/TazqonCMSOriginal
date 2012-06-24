<?php /* Smarty version Smarty-3.1.8, created on 2012-03-14 17:59:44
         compiled from "C:\xampp\htdocs\TazqonCMS\templates\tpl\page-register-captcha-avatar-refresh.tpl" */ ?>
<?php /*%%SmartyHeaderCode:247394f60ce803e0785-34970960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b2f9e55c360511aca199cc042ba1158fc67f5a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TazqonCMS\\templates\\tpl\\page-register-captcha-avatar-refresh.tpl',
      1 => 1331742845,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '247394f60ce803e0785-34970960',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'avatars' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f60ce805b5499_50794883',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f60ce805b5499_50794883')) {function content_4f60ce805b5499_50794883($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['avatars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
<li>
	<span class="bgtop"></span>
	<span class="bgbottom"></span>
	<img alt="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" src="http://www.habbo.co.uk/habbo-imaging/avatarimage?figure=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" width="64" height="110"/>
</li>
<?php } ?><?php }} ?>