<?php

	require_once("../init.php");
	require_once("../class/ysj.class.php");

	if($_REQUEST['act']=='del'){
		$string =$_POST['id'];
		$obj=new ysj();
		$obj->deleteNews($string);
	}

	if($_REQUEST['act']=='save'){
		$title=$_POST['name'];
		$text=$_POST['text'];
		$item=$_POST['itemsId'];
	
		$upfile= $_FILES["file"]['name'];
		$path='pdf/';
		$savePath='../pdf/';
		$dd=$_FILES["file"];
		$tmp_name=$dd["tmp_name"];
		$url=$path.$upfile;
		move_uploaded_file($tmp_name,$savePath.$upfile);

		$obj=new ysj();
		$obj->addNews($title,$item,$url,$text);
	}

	if($_REQUEST['act']=='view'){
		$obj=new ysj();
		$result= $obj->getListItem();
		echo json_encode($result);
	}

	if($_REQUEST['act']=='item'){
		$obj=new ysj();
		$result= $obj->getItem();
		echo json_encode($result);
	}
?>