<?php

	require_once("../init.php");
	require_once("../class/vedio.class.php");

	if($_REQUEST['act']=='save'){
 
		$title=$_POST['title'];

		$upfile= $_FILES["dowfile"]['name'];
		$photofile= $_FILES["photofile"]['name'];
	
		$path='pdf/';
		$savePath='../pdf/';
	
		$dd=$_FILES["dowfile"];
		$photo=$_FILES["photofile"];
	
		$tmp_name=$dd["tmp_name"];
		$phototmp_name=$photo["tmp_name"];
	
		$url=$path.$upfile;
		$photourl=$path.$photofile;
	
		$obj=new vedioFile();
		$obj->addNews($title,$url,$photourl);
	
		move_uploaded_file($tmp_name,$savePath.$upfile);
		move_uploaded_file($phototmp_name,$savePath.$photofile);
	}

	if($_REQUEST['act']=='view'){
		$obj=new vedioFile();
		$result= $obj->getListItem();
		echo json_encode($result);
	}

	if($_REQUEST['act']=='del'){
		$string =$_POST['id'];
		$obj=new vedioFile();
		$obj->deleteNews($string);
	}
?>
