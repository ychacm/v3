<?php
	require_once("../init.php");
	require_once("../class/kc.class.php");
	
	if($_REQUEST['act']=='del'){
		$id=$_POST['id'];
		$list=new kc();
		$list->deleteNews($id);
	}

	if($_REQUEST['act']=='view'){
		$list=new kc();
		$result=$list->getListItem();
		echo json_encode($result);
	}

	if($_REQUEST['act']=='item'){
		$list=new kc();
		$result=$list->getItem();
		echo json_encode($result);
	}

	if($_REQUEST['act']=='save'){
		$title=$_POST['name'];
		$text=$_POST['text2'];
		$textOne=$_POST['text'];
		$id=$_POST['itemsId'];

		$upfile=$_FILES["file"]['name'];
		$path='pdf/';
		$savePath='../pdf/';
		$dd=$_FILES["file"];
		$tmp_name=$dd["tmp_name"];
		$url=$path.$upfile;
 
		move_uploaded_file($tmp_name,$savePath.$upfile);

		$obj=new kc();
		$obj->addNews($title,$id,$url,$text,$textOne);	
	}
?>