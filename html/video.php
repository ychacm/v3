<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>jQuery.EasyUI- 1.2.2 应用实例</title>
    <link href="Css/default.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="../easyui/themes/default/easyui.css" />
    <link rel="stylesheet" type="text/css" href="../easyui/themes/icon.css" />
    <script type="text/javascript" src="../easyui/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="../easyui/jquery.easyui.min.js"></script>
    <script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
    <script type="text/javascript" language="javascript">
	$(function(){
    $('#tt').datagrid({
    title:'下载中心',
    iconCls:'icon-save',
    url:'videos.php?act=view',
    columns:[[
        {field:'dowId',title:'序号',width:80},
        {field:'dowFile',title:'文件名',width:600},
        {field:'zz',title:'作者',width:80,align:'right'}
    ]],
	toolbar:[
	{text:'Add',iconCls:'icon-add',handler:show1},'-',
	{text:'Del',iconCls:'icon-cut',handler:del
    },'-',
	{text:'Save',iconCls:'icon-save',handler:function(){alert('save')}
    }],
    pagination:true
	});
	
	function show1(){$('#win').window('open');}
	 function del(){
  
   //获取所有选中的记录
  var select=$('#tt').datagrid('getSelections');              //单条记录用getSelected函数
  if(select)
   {
   $.messager.confirm('Warning','确定要删除么？',function(ids){
   if(ids)
    {
    
    var i=0;
    for(;i<select.length;i++)
       {
        if(i==0)
         ids=select[i].dowId;
       else
        ids=ids+","+select[i].dowId;
       }
    }  
       
    $.ajax({
     type:'POST',
     url:'videos.php?act=del',
     data:'id='+ids,
     dataType:'xml',
     success:function callback(){}
    });
    $('#tt').datagrid('reload');
   });
   }
  else
   {
   $.messager.alert('warning','请选择一行数据','warning');
   }
  
  }

	});
	
	
    </script>
</head>
<body >
<table id="tt" class="easyui-datagrid" ></table>
<div id="win" class="easyui-window" title="添加新闻" closed="true" style="width:700px;height:250px;padding:5px;">  
  <form id="myForm"  name="myForm" enctype="multipart/form-data" action="videos.php?act=save" method="post">
   	<p>文件名：<input type="text" name="name" style="width:250px;"></p>
		<p>作者：<input type="text" name="zz" style="width:250px;"></p>
    <p>文件类型：<input id="cc"  name="itemsId" class="easyui-combobox"   url="videos.php?act=item" valueField="itemsId" textField="itemsName" panelHeight="auto" style="width:150px;"></p>
		<p>图片文件：<input type="file" name="photofile" value="图片"></p>
		<p>下载文件：<input type="file" name="dowfile" value="文件"></p>
    	<div style="padding:5px; text-align:center">
        	<input type="submit" value="提交"  />
          <input name="act" type="hidden" value="save"/>
        </div>
   </form> 
</div> 
</body>
</html>