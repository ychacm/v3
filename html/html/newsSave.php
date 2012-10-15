<?php

	require_once("../init.php");
	require_once("../class/news.class.php");
	
	$title=iconv("utf-8","gb2312", $_POST['title']);
	$text=iconv("utf-8","gb2312", $_POST['text']);
	$id=$_POST['itemsId'];

	$obj=new News();
	$result= $obj->addNews($title,$id,$text);
?>
