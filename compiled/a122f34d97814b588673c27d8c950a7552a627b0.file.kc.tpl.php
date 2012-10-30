<?php /* Smarty version Smarty-3.1.10, created on 2012-10-26 11:35:09
         compiled from "templates/kc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:464734884501d0516b705a6-84435390%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a122f34d97814b588673c27d8c950a7552a627b0' => 
    array (
      0 => 'templates/kc.tpl',
      1 => 1350299833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '464734884501d0516b705a6-84435390',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_501d0516bcae55_36236389',
  'variables' => 
  array (
    'kc' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_501d0516bcae55_36236389')) {function content_501d0516bcae55_36236389($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="cen">
        	<div id="cenleft">
            	<?php echo $_smarty_tpl->getSubTemplate ("lefttop.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<div id="leftNav"><div class="top">NEWS</div>
					<ul>
						<li><a href="kc.php?act=one">大师课程</a></li>
						<li><a href="kc.php?act=two">总裁必上的7堂课</a></li>
						<li><a href="kc.php?act=tree">特别课程</a></li>
					</ul>
				</div>
				<?php echo $_smarty_tpl->getSubTemplate ("leftfoot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        	</div>	
            <div id="cenright1">
            <?php echo $_smarty_tpl->getSubTemplate ("navtop.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

             <div class="nav"><h1><span>首页</span>新闻中心</h1></div>
                <div id="kclist">
          			<div class="title"><p><?php echo $_smarty_tpl->tpl_vars['kc']->value['classTitle'];?>
</p><em><?php echo $_smarty_tpl->tpl_vars['kc']->value['navText'];?>
</em></div><img src="<?php echo $_smarty_tpl->tpl_vars['kc']->value['imgurl'];?>
" width="150">
					<div class="text"><?php echo $_smarty_tpl->tpl_vars['kc']->value['classText'];?>
</div>
	            </div>    
 
            </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>