<?php
	require_once("../init.php");
	require_once("../class/ysj.class.php");
	
	$string =$_POST['id'];
	$obj=new ysj();
    $obj->deleteNews($string);
?>