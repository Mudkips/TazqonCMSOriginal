<?php /* Smarty version Smarty-3.1.8, created on 2012-03-25 13:51:03
         compiled from "C:\xampp\htdocs\TazqonCMS\templates\tpl\widget-promo-box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117674f6ef85598f9f9-46734328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc713185afd0e228e9a22bc0dbce501ef2414c33' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TazqonCMS\\templates\\tpl\\widget-promo-box.tpl',
      1 => 1332676259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117674f6ef85598f9f9-46734328',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f6ef8559dae58_16063790',
  'variables' => 
  array (
    'newspromo' => 0,
    'key' => 0,
    'item' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f6ef8559dae58_16063790')) {function content_4f6ef8559dae58_16063790($_smarty_tpl) {?><div id="promo-box">

    <div id="promo-bullets"></div>
		
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['newspromo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
        <div class="promo-container" style="<?php if ($_smarty_tpl->tpl_vars['key']->value>0){?>display: none; <?php }?>background-image: url(<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
)">
            <div class="promo-content">
                <div class="title"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</div>
                <div class="body"><?php echo $_smarty_tpl->tpl_vars['item']->value['body'];?>
</div>
            </div>
            
            <?php if ($_smarty_tpl->tpl_vars['item']->value['show_facebook']==1){?>
                <a href="http://www.facebook.com/habbo" target="_blank" class="facebook-link"></a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['show_twitter']==1){?>
                <a href="http://www.twitter.com/habbo" target="_blank" class="twitter-link"></a>
            <?php }?>
            <?php if (strlen($_smarty_tpl->tpl_vars['item']->value['show_client'])>0){?>
<div class="enter-hotel-btn">
    <div class="open enter-btn">
            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/client" target="client" onclick="HabboClient.openOrFocus(this); return false;"><?php echo $_smarty_tpl->tpl_vars['item']->value['show_client'];?>
 &gt;&gt;&gt;<i></i></a>
        <b></b>
    </div>
</div>
			<?php }?>
        </div>
        <?php } ?>

</div>
<script type="text/javascript">
    document.observe("dom:loaded", function() { PromoSlideShow.init(); });
</script><?php }} ?>