<?php
	$ss="select * from news,items where news.itemsId=items.itemsId";
	
	$obj=new yc();
	$result= $obj->method($ss);
	while($row=mysql_fetch_array($result))
	{
		$arr4[]=$row;
	}
	echo json_encode($arr4);
	
	function __autoload($className)
	{
		include_once "$className.php";
	}
?>