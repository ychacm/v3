<?php
	require_once("../init.php");
	require_once("../class/kc.class.php");

	$title=$_POST['name'];
	$text=$_POST['text2'];
	$textOne=$_POST['text'];
	$id=$_POST['itemsId'];

	$upfile=$_FILES["file"]['name'];
	$path='pdf/';
	$savePath='../pdf/';
	$dd=$_FILES["file"];
	$tmp_name=$dd["tmp_name"];
	$url=$path.$upfile;
 
	move_uploaded_file($tmp_name,$savePath.$upfile);

	$obj=new kc();
	$obj->addNews($title,$id,$url,$text,$textOne);	
?>
