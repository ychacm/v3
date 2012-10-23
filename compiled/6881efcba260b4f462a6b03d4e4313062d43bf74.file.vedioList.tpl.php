<?php /* Smarty version Smarty-3.1.10, created on 2012-10-16 12:14:18
         compiled from "templates/vedioList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2037507162501d1f16cdce67-84392397%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6881efcba260b4f462a6b03d4e4313062d43bf74' => 
    array (
      0 => 'templates/vedioList.tpl',
      1 => 1350299824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2037507162501d1f16cdce67-84392397',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_501d1f16d3ed62_67298961',
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_501d1f16d3ed62_67298961')) {function content_501d1f16d3ed62_67298961($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="cen">
        	<div id="cenleft">
            	<?php echo $_smarty_tpl->getSubTemplate ("lefttop.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
			<div id="leftNav"><div class="top">VEDIO</div>
					<ul>
						<li><a href="vedio.php?act=one">影音中心</a></li>
					</ul>
				</div>
				<?php echo $_smarty_tpl->getSubTemplate ("leftfoot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
        	</div>
			<div id="cenright1">
            <?php echo $_smarty_tpl->getSubTemplate ("navtop.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			
             <div class="nav"><h1><span>首页</span>影音中心</h1></div>
						<div class="vedio">
                <ul>
		 				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['record'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['record']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['name'] = 'record';
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['products']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['total']);
?>
		 				<li><img src="<?php echo $_smarty_tpl->tpl_vars['products']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['imgurl'];?>
" widht="80" height="120"><a href="vedio.php?act=view&fileId=<?php echo $_smarty_tpl->tpl_vars['products']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['fileId'];?>
"><p><?php echo $_smarty_tpl->tpl_vars['products']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['fileName'];?>
</p></a></li>
		 						 				            <?php endfor; else: ?>
                <tr><td colspan="5"></td></tr>
            <?php endif; ?>
    
                </ul>
             </div>
        <?php echo $_smarty_tpl->getSubTemplate ("listnav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>