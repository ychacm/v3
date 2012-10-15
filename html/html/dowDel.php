<?php
	require_once("../init.php");
	require_once("../class/dow.class.php");
	
	$string =$_POST['id'];
	$obj=new dow();
    $obj->deleteNews($string);
?>