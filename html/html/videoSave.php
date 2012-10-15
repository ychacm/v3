<?php

	require_once("../init.php");
	require_once("../class/dow.class.php");
	
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
	$test=$obj->addNews($title,$photourl,$cc,$dowurl,$itemid)
	
	move_uploaded_file($phototmp_name,$savePath.$photo);
	move_uploaded_file($dowtmp_name,$savePath.$dow);
?>
