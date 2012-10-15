	<?php include("top.php");?>
	<script type="text/javascript" language="javascript">
	$(function(){
    $('#tt').datagrid({
			title:'影音中心',
    		iconCls:'icon-save',
    		url:'dowGet.php',
    		columns:[[
        	{field:'fileId',title:'序号',width:80},
        	{field:'fileName',title:'文件名',width:600}
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
     		url:'newsDel.php',
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
   <form id="myForm"  name="myForm" action="dowSave.php" enctype="multipart/form-data" method="post">
   	<p>新闻标题：<input type="text" name="title" style="width:400px;"></p>
     <p>下载文件：<input type="file" name="dowfile" value="文件"></p>
		<p>图片：<input type="file" name="photofile" value="图片"></p>
    	<div style="padding:5px; text-align:center">
        	<input type="submit" value="提交"  />
        </div>
   </form> 
</div> 
</body>
</html>