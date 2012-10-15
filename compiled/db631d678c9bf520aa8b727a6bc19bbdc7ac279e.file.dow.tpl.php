<?php /* Smarty version Smarty-3.1.10, created on 2012-10-08 05:03:41
         compiled from "templates/dow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:872840015501d0cddca3f15-05281321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db631d678c9bf520aa8b727a6bc19bbdc7ac279e' => 
    array (
      0 => 'templates/dow.tpl',
      1 => 1348649140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '872840015501d0cddca3f15-05281321',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_501d0cddd0e9b1_99622521',
  'variables' => 
  array (
    'dow' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_501d0cddd0e9b1_99622521')) {function content_501d0cddd0e9b1_99622521($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="cen">
        	<div id="cenleft">
            	<?php echo $_smarty_tpl->getSubTemplate ("lefttop.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<div id="leftNav"><div class="top">NEWS</div>
					<ul>
						<li><a href="dowList.php">课件ppt</a></li>
						<li><a href="dowList1.php">媒体资料</a></li>
					</ul>
				</div>
				<?php echo $_smarty_tpl->getSubTemplate ("leftfoot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        	</div>
            <div id="cenright1">
            <?php echo $_smarty_tpl->getSubTemplate ("navtop.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

             <div class="nav"><h1><span>首页</span>新闻中心</h1></div>
                <ul>
								图片：<img src="<?php echo $_smarty_tpl->tpl_vars['dow']->value['imgurl'];?>
">
          				标题：<?php echo $_smarty_tpl->tpl_vars['dow']->value['dowFile'];?>

									文本: <?php echo $_smarty_tpl->tpl_vars['dow']->value['zz'];?>

									<a href="<?php echo $_smarty_tpl->tpl_vars['dow']->value['dowurl'];?>
">dow</a>
	   </ul>
            </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>