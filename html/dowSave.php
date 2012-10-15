<?php
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

	$sql="insert into file(fileName,fileUrl,imgurl) values('$title','$url','$photourl')";
	
	
	$obj=new yc();
	$result= $obj->method($sql);
	
	move_uploaded_file($tmp_name,$savePath.$upfile);
	move_uploaded_file($phototmp_name,$savePath.$photofile);
	
	function __autoload($className)
	{
		include_once "../fun/$className.php";
	}
?>
<a href="dow.php">返回</a>