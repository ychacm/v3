<?php

	require_once("../init.php");
	require_once("../class/ysj.class.php");
	
	header('Content-Type:text/html; charset=utf-8'); 

	$list=new ysj();
	$result=$list->getListItem();
	echo json_encode($result);
?>