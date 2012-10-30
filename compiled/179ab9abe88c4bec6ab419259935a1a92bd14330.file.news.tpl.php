<?php /* Smarty version Smarty-3.1.10, created on 2012-10-30 11:43:58
         compiled from "templates/news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2445754995014a90ccb1694-79711215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '179ab9abe88c4bec6ab419259935a1a92bd14330' => 
    array (
      0 => 'templates/news.tpl',
      1 => 1351252724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2445754995014a90ccb1694-79711215',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_5014a90ccfffc6_90717403',
  'variables' => 
  array (
    'news' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5014a90ccfffc6_90717403')) {function content_5014a90ccfffc6_90717403($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="cen">
        	<div id="cenleft">
            	<?php echo $_smarty_tpl->getSubTemplate ("lefttop.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<div id="leftNav"><div class="top">NEWS</div>
					<ul>
						<li><a href="news.php?act=one">重要公告</a></li>
						<li><a href="news.php?act=two">超越新闻</a></li>
					</ul>
				</div>
				<?php echo $_smarty_tpl->getSubTemplate ("leftfoot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
        	</div>
		    <div id="cenright1">
            <?php echo $_smarty_tpl->getSubTemplate ("navtop.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

             <div class="nav"><h1><span>首页</span>新闻中心</h1></div>
                <ul>
          				标题：<?php echo $_smarty_tpl->tpl_vars['news']->value['newsTitle'];?>

									文本: <?php echo $_smarty_tpl->tpl_vars['news']->value['newsText'];?>

									时间:<?php echo $_smarty_tpl->tpl_vars['news']->value['newsTime'];?>

                </ul>
            </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>