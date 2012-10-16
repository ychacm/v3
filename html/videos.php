<?php

	require_once("../init.php");
	require_once("../class/dow.class.php");

	if($_REQUEST['act']=='del'){
		$string =$_POST['id'];
		$obj=new dow();
		$obj->deleteNews($string);
	}

	if($_REQUEST['act']=='save'){
		$title=$_POST['name'];
		$itemid=$_POST['itemsId'];
		$cc=$_POST['zz'];

		$photo=$_FILES["photofile"]['name'];
		$dow=$_FILES["dowfile"]['name'];
	
		$path='pdf/';
		$savePath='../pdf/';
	
		$photofile=$_FILES["photofile"];
		$dowfile=$_FILES["dowfile"];
	
		$phototmp_name=$photofile["tmp_name"];
		$dowtmp_name=$dowfile["tmp_name"];
	
		$photourl=$path.$photo;
		$dowurl=$path.$dow;

		$obj=new dow();
		$obj->addNews($title,$photourl,$cc,$dowurl,$itemid);
	
		move_uploaded_file($phototmp_name,$savePath.$photo);
		move_uploaded_file($dowtmp_name,$savePath.$dow);
	}

	if($_REQUEST['act']=='view'){
		$obj=new dow();
		$result= $obj->getListItem();
		echo json_encode($result);
	}

	if($_REQUEST['act']=='item'){
		$obj=new dow();
		$result= $obj->getItem();
		echo json_encode($result);
	}
?>