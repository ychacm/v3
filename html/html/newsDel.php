<?php

	require_once("../init.php");
	require_once("../class/news.class.php");

	$string =$_POST['id'];
	$obj=new News();
    $obj->deleteNews($string);
?>