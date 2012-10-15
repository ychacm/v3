<?php
	require_once("../init.php");
	require_once("../class/vedio.class.php");
	
	header('Content-Type:text/html; charset=utf-8'); 
	
	$list=new vedioFile();
	$result=$list->getListItem();
	echo json_encode($result);
?>