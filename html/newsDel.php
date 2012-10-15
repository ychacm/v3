<?php
	$string =$_POST['id'];
	$sql="delete from news where newsId=".$string;
	$obj=new yc();
	$result= $obj->method($sql);
	
	function __autoload($className)
	{
		include_once "fun/$className.php";
	}
?>