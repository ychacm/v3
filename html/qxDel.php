<?php
	$string =$_POST['id'];
	mysql_select_db("ych",$connect);
	$sql="delete from news where newsId=".$string;
	$obj=new yc();
	$result= $obj->method($sql);
	
	function __autoload($className)
	{
		include_once "fun/$className.php";
	}
?>