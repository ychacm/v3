<?php /* Smarty version Smarty-3.1.10, created on 2012-10-15 11:56:35
         compiled from "templates/listnav.html" */ ?>
<?php /*%%SmartyHeaderCode:14455506135062c14e107f20-45032672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bc64d6a58177855d16ebea4048b63a40a0e7651' => 
    array (
      0 => 'templates/listnav.html',
      1 => 1350299831,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14455506135062c14e107f20-45032672',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_5062c14e18aab7_35515113',
  'variables' => 
  array (
    'pageInfo' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5062c14e18aab7_35515113')) {function content_5062c14e18aab7_35515113($_smarty_tpl) {?><p align="center">
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
            
</p>  <?php }} ?>