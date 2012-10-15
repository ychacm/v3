<?php
	$string =$_POST['id'];
	$sql="delete from user where userId=".$string;
	$obj=new yc();
	$result= $obj->method($sql);
	function __autoload($className)
	{
		include_once "fun/$className.php";
	}
?>