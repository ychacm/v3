<?php

	require_once("../init.php");
	require_once("../class/news.class.php");
	
	header('Content-Type:text/html; charset=utf-8'); 

	$list=new News();
	$result=$list->getItem();
	echo json_encode($result);

?>
