<?php
	require_once("../init.php");
	require_once("../class/vedio.class.php");
	
	$string =$_POST['id'];
	$obj=new vedioFile();
    $obj->deleteNews($string);
?>