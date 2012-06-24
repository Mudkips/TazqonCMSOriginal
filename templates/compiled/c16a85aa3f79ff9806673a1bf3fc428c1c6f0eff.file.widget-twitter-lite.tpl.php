<?php /* Smarty version Smarty-3.1.8, created on 2012-03-25 14:09:47
         compiled from "C:\xampp\htdocs\TazqonCMS\templates\tpl\widget-twitter-lite.tpl" */ ?>
<?php /*%%SmartyHeaderCode:258394f6f0b0bed3238-03822568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c16a85aa3f79ff9806673a1bf3fc428c1c6f0eff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TazqonCMS\\templates\\tpl\\widget-twitter-lite.tpl',
      1 => 1332677387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '258394f6f0b0bed3238-03822568',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f6f0b0bf362c9_91323925',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f6f0b0bf362c9_91323925')) {function content_4f6f0b0bf362c9_91323925($_smarty_tpl) {?>				<div class="habblet-container ">		
	
						<div id="twitterfeed-habblet-container">
    <div id="twitterfeed-habblet-content"></div>
        <script>new TWTR.Widget({
                    version: 2,
                    id: 'twitterfeed-habblet-content',
                    type: 'profile',
                    rpp: 5,
                    interval: 30000,
                    width: 300,
                    height: 186,
                    theme: {
                        shell: {
                            background: '#4a4d4f',
                            color: '#ffffff'
                        },
                        tweets: {
                            background: '#ffffff',
                            color: '#4a4d4f',
                            links: '#fe6301'
                        }
                    },
                    features: {
                        scrollbar: true,
                        loop: false,
                        live: false,
                        behavior: 'default'
                    } }).render().setUser('<?php echo $_smarty_tpl->tpl_vars['options']->value['twittername'];?>
').start();
        </script>

</div>

						
					
				</div>
				<script type="text/javascript"> if (!$(document.body).hasClassName('process-template')) { Rounder.init(); } </script><?php }} ?>