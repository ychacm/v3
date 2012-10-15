<?php
	
	require_once("../init.php");
	require_once("../class/kc.class.php");
	
	header('Content-Type:text/html; charset=utf-8'); 

	$list=new kc();
	$result=$list->getListItem();
	echo json_encode($result);
	

?>