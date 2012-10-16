<?php

	require_once("../init.php");
	require_once("../class/news.class.php");

	if($_REQUEST['act']=='del'){
		$string =$_POST['id'];
		$obj=new News();
		$obj->deleteNews($string);
	}

	if($_REQUEST['act']=='save'){
		$title=iconv("utf-8","gb2312", $_POST['title']);
		$text=iconv("utf-8","gb2312", $_POST['text']);
		$id=$_POST['itemsId'];
		$obj=new News();
		$obj->addNews($title,$id,$text);
	}

	if($_REQUEST['act']=='view'){
		$list=new News();
		$result=$list->getListItem();
		echo json_encode($result);
	}

	if($_REQUEST['act']=='item'){
		$list=new News();
		$result=$list->getItem();
		echo json_encode($result);
	}
?>