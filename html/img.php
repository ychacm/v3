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
    title:'精品课程',
    iconCls:'icon-save',
    url:'imgGet.php',
    columns:[[
        {field:'classId',title:'序号',width:80},
        {field:'classTitle',title:'标题',width:600},
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
         ids=select[i].newsId;
       else
        ids=ids+","+select[i].newsId;
       }
    }  
       
    $.ajax({
     type:'POST',
     url:'imgdel.php',
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
	$('#cc').combobox({
		url:'imgItemsGet.php',
		valueField:'itemsId',
		textField:'itemsName'
		});
		
	
    </script>
</head>
<body >
<table id="tt" class="easyui-datagrid" ></table>
<div id="win" class="easyui-window" title="添加新闻" closed="true" style="width:700px;height:550px;padding:5px;">  
   <form id="myForm"  name="myForm" action="imgSave.php" enctype="multipart/form-data" method="post">
   	<p>新闻标题：<input type="text" name="name" style="width:250px;"></p>
    <p>新闻类型：<input id="cc"  name="itemsId" class="easyui-combobox"   url="imgItemGet.php" valueField="itemsId" textField="itemsName" panelHeight="auto" style="width:150px;"></p>
 		<p>新闻图片：<input type="file" name="file" value="文件"></p>
		新闻导航：
		<textarea id="TextArea1"  name="text" cols="20" rows="2" class="ckeditor"></textarea>
		新闻内容：
		<textarea id="TextArea2"  name="text2" cols="20" rows="2" class="ckeditor"></textarea>
    	<div style="padding:5px; text-align:center">
        	<input type="submit" value="提交"  />
            
        </div>
   </form> 
</div> 
</body>
</html>