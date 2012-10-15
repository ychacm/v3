<?php
	//这是前面已经重构好的插入的代码
	require_once("../init.php");
	require_once("../class/kc.class.php");
	
	header('Content-Type:text/html; charset=utf-8'); 

	$list=new kc();
	$result=$list->getListItem();
	echo json_encode($result);
?>