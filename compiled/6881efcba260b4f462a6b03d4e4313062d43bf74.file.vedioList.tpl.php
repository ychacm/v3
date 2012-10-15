<?php /* Smarty version Smarty-3.1.10, created on 2012-09-03 03:57:02
         compiled from "templates/vedioList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2037507162501d1f16cdce67-84392397%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6881efcba260b4f462a6b03d4e4313062d43bf74' => 
    array (
      0 => 'templates/vedioList.tpl',
      1 => 1346659019,
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
    'pageInfo' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_501d1f16d3ed62_67298961')) {function content_501d1f16d3ed62_67298961($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="cen">
        	<div id="cenleft">
            	<div id="cenleft2">
					<ul>
						<li>用户名<input type="text" name="textfield" width=150 id="textfield" style="border:1px solid #ddd"></li>
						<li>密&ensp;&ensp;码<input type="text" name="textfield2" id="textfield2" style="border:1px solid #ddd"></li>
						<li>
						  <form name="form1" method="post" action="" style="text-align:center; margin-top:15px;">
						    <input type="image" name="submit" src="images/reg.gif" >
					         <input type="image" name="submit" src="images/login.gif" >
                             <p>忘记密码 申请注册</p>
						  </form>
						</li>
					</ul>
			</div>
			<div id="leftNav"><div class="top">NEWS</div>
					<ul>
						<li><a href="vedioList.php">影音中心</a></li>
					</ul>
				</div>
				<div id="cenleft3">
											<ul>
											<li><img src="images/tool1.gif"><img src="images/tool2.gif"></li>
											<li style="margin-bottom:30px;font-size:14px;">发表感想!    发表疑问?</li>
											<div class="bb"></div>
											<dl>
												<dt>超越党员之家</dt>
									<dd class="pic"><img src="images/model2.png"></dd>
									<dd class="text">党支部活动</dd>
																</dl><div class="bb"></div>
											<dl>
									<dt>人才招聘</dt>
									<dd class="pic"><img src="images/model3.png"></dd>
												<dd class="text">顶尖人才信息</dd>
													</dl><div class="bb"></div>
										   <dl>
							<dt>课程时间表</dt>
								<dd class="pic"><img src="images/model4.png"></dd>
									<dd class="text">精彩课程分享</dd>
									<dd class="text">课程图片分享</dd>
													</dl><div class="bb"></div>
											</ul>
											</div>
            </div>
            <div id="cenright1">
            <img src="images/nav.jpg">
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
" widht="80" height="120"><a href="vedio.php?fileId=<?php echo $_smarty_tpl->tpl_vars['products']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['fileId'];?>
"><p><?php echo $_smarty_tpl->tpl_vars['products']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['fileName'];?>
</p></a></li>
		 						 				            <?php endfor; else: ?>
                <tr><td colspan="5"></td></tr>
            <?php endif; ?>
    
                </ul>
             </div>
       <p align="center">
            共<b><?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['row_total'];?>
</b>条记录
            这是第<b><?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['page_start'];?>
</b> - <b><?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['page_end'];?>
</b>条记录
            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
?page=1">第一页</a>
            <?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['prev_page']){?>
                <a href='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
?page=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['prev_page'];?>
'>上一页</a>
            <?php }else{ ?>
                第一页
            <?php }?>
            
             <?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['next_page']){?>
                <a href='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
?page=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['next_page'];?>
'>下一页</a>
            <?php }else{ ?>
                最后一页
            <?php }?>
            
            <a href='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
?page=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['page_num'];?>
'>最后一页</a>
            当前<b><?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['current_page'];?>
/<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['page_num'];?>
</b>页
            
       </p>      

            </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>