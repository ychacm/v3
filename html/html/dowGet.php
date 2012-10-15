<?php
	require_once("../init.php");
	require_once("../class/dow.class.php");
	
	header('Content-Type:text/html; charset=utf-8'); 

	$list=new dow();
	$result=$list->getListItem();
	echo json_encode($result);
?>