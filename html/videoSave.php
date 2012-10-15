<?php

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
	
	$sql="insert into dow(dowFile,imgurl,zz,dowurl,itemId) values('$title','$photourl','$cc','$dowurl',$itemid)";

	$obj=new yc();
	$test=$obj->method($sql);
	
	move_uploaded_file($phototmp_name,$savePath.$photo);
	move_uploaded_file($dowtmp_name,$savePath.$dow);
	
	function __autoload($className)
	{
		include_once "../fun/$className.php";
	}
?>
<a href="video.php">返回</a>