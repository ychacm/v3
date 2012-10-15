<?php
	$title=iconv("utf-8","gb2312", $_POST['title']);
	$text=iconv("utf-8","gb2312", $_POST['text']);
	$id=$_POST['itemsId'];
	$sql="insert into news(newsTitle,itemsId,newsText) values('$title',$id,'$text')";
	$obj=new yc();
	$result= $obj->method($sql);
	function __autoload($className)
	{
		include_once "fun/$className.php";
	}
?>
<a href="user.php">·µ»Ø</a>