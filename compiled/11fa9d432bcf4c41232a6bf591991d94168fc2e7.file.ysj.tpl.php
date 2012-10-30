<?php /* Smarty version Smarty-3.1.10, created on 2012-10-30 12:41:14
         compiled from "templates/ysj.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1515148348501ce7d9517026-15335804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11fa9d432bcf4c41232a6bf591991d94168fc2e7' => 
    array (
      0 => 'templates/ysj.tpl',
      1 => 1351252822,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1515148348501ce7d9517026-15335804',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_501ce7d95750f5_53110701',
  'variables' => 
  array (
    'ysj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_501ce7d95750f5_53110701')) {function content_501ce7d95750f5_53110701($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="cen">
        	<div id="cenleft">
            	<?php echo $_smarty_tpl->getSubTemplate ("lefttop.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<div id="leftNav"><div class="top">NEWS</div>
					<ul>
						<li><a href="ysj.php?act=one">超级演说家</a></li>
						<li><a href="ysj.php?act=two">世界大师</a></li>
						<li><a href="ysj.php?act=tree">战略合作</a></li>
					</ul>
				</div>
				<?php echo $_smarty_tpl->getSubTemplate ("leftfoot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
        	</div>
			<div id="cenright1">
            <?php echo $_smarty_tpl->getSubTemplate ("navtop.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

             <div class="nav"><h1><span>首页</span>新闻中心</h1></div>
                <ul>
					<div id="ysj">
          				<img src="<?php echo $_smarty_tpl->tpl_vars['ysj']->value['imgurl'];?>
" width="200" height="350">
						<div class="title"><?php echo $_smarty_tpl->tpl_vars['ysj']->value['ysjTitle'];?>
<?php echo $_smarty_tpl->tpl_vars['ysj']->value['navText'];?>
</div>
								<div class="text">	<?php echo $_smarty_tpl->tpl_vars['ysj']->value['ysjText'];?>
</div>
	                </ul>
            </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>