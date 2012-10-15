<?php
	$title=$_POST['name'];
	$text=$_POST['text'];
	$item=$_POST['itemsId'];
	
	$upfile= $_FILES["file"]['name'];
	$path='pdf/';
	$savePath='../pdf/';
	$dd=$_FILES["file"];
	$tmp_name=$dd["tmp_name"];
	$url=$path.$upfile;
	$sql="insert into ysj(ysjTitle,itemsId,imgurl,ysjText) values('$title',$item,'$url','$text')";
		

	move_uploaded_file($tmp_name,$savePath.$upfile);

	$obj=new yc();
	$result= $obj->method($sql);
	
	function __autoload($className)
	{
		include_once "../fun/$className.php";
	}
?>
	<a href="user.php">返回</a>