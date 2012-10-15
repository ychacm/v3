<?php
	require_once("../init.php");
	require_once("../class/kc.class.php");
	
	$id=$_POST['id'];
	$list=new kc();
	$list->deleteNews($id);
?>