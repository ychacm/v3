<?php /* Smarty version Smarty-3.1.10, created on 2012-10-16 12:18:15
         compiled from "templates/vedio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1488337875501d20467160f2-90950431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e040f36f349b804379a981be335c42a132132cdc' => 
    array (
      0 => 'templates/vedio.tpl',
      1 => 1350389892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1488337875501d20467160f2-90950431',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_501d2046755c32_38470839',
  'variables' => 
  array (
    'vedio' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_501d2046755c32_38470839')) {function content_501d2046755c32_38470839($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="cen">
	<div id="cenleft">
		<?php echo $_smarty_tpl->getSubTemplate ("lefttop.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div id="leftNav"><div class="top">NEWS</div>
		<ul>
			<li><a href="vedio.php?act=one">影音中心</a></li>
		</ul>
	</div>
		<?php echo $_smarty_tpl->getSubTemplate ("leftfoot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
    <div id="cenright1">
        <?php echo $_smarty_tpl->getSubTemplate ("navtop.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <div class="nav"><h1><span>首页</span>新闻中心</h1></div>
        <ul>
          	标题：<?php echo $_smarty_tpl->tpl_vars['vedio']->value['fileName'];?>

			<a href="<?php echo $_smarty_tpl->tpl_vars['vedio']->value['fileUrl'];?>
">dow</a>
			<div id="mediaplayer">JW Player goes here</div>
			<script type="text/javascript" src="jwplayer/jwplayer.js"></script>
			<script type="text/javascript">
			jwplayer("mediaplayer").setup({
				flashplayer: "jwplayer/player.swf",
				file: "jwplayer/1.mov",
				image: "jwplayer/preview.jpg"
			});
	</script>
		</ul>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>