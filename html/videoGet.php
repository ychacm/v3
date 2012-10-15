<?php

	header('Content-Type:text/html; charset=utf-8'); 

	$ss="select * from dow";
	
	$obj=new yc();
	$result= $obj->method($ss);
	while($row=mysql_fetch_array($result))
	{
		$arr4[]=$row;
	}
	echo json_encode($arr4);
	function __autoload($className)
	{
		include_once "../fun/$className.php";
	}
	
?>