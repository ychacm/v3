<?php /* Smarty version Smarty-3.1.10, created on 2012-08-09 10:59:21
         compiled from "templates/yy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9413636765023c8709d52a8-71781128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba0eeb686fade0c0e83c8e9f9e045b8f10c41d55' => 
    array (
      0 => 'templates/yy.tpl',
      1 => 1344524358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9413636765023c8709d52a8-71781128',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_5023c870abff40_73866372',
  'variables' => 
  array (
    'ly' => 0,
    'news' => 0,
    'pcunt' => 0,
    'page' => 0,
    'qian' => 0,
    'next' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5023c870abff40_73866372')) {function content_5023c870abff40_73866372($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['news']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ly']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value){
$_smarty_tpl->tpl_vars['news']->_loop = true;
?>
								<li><h1><span><?php echo $_smarty_tpl->tpl_vars['news']->value['newsTime'];?>
</span><a href="news.php?newsId=<?php echo $_smarty_tpl->tpl_vars['news']->value['newsId'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value['newsTitle'];?>
<h1></a></li>
		 						<?php } ?>

<p align="center">页数：<span class="STYLE1"><?php echo $_smarty_tpl->tpl_vars['pcunt']->value;?>
</span>当前页：<span class="STYLE1"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</span><a href="newsList.php"></a><?php echo $_smarty_tpl->tpl_vars['qian']->value;?>
<?php echo $_smarty_tpl->tpl_vars['next']->value;?>
<a href="newsList.php?page=<?php echo $_smarty_tpl->tpl_vars['pcunt']->value;?>
">尾页</a></p>
<?php }} ?>