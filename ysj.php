<?php
require_once("init.php");
require_once("class/fy.php");
require_once("class/ysj.class.php");

 if($_REQUEST['act']=='one'){
	$cpage = isset($_GET['page'])? intval($_GET['page']):1;
	$connect=new ysj();
	$num=$connect->getRowTotal("ysj",1);
	$fypage=new Page($num,$cpage,5);
	$pageInfo = $fypage->getPageInfo();
	$products = $connect->getPageRows($pageInfo["row_offset"],$pageInfo["row_num"],1,"ysj");

	if($products){
          $smarty->assign("tableName","人员列表");
          $smarty->assign("url","ysjList.php");
          $smarty->assign("products",$products);
          $smarty->assign("pageInfo",$pageInfo);
      }else{
          echo "读取信息失败！";
          exit();
      }
      
      $smarty->display("ysjList.tpl",$cpage);
}

if($_REQUEST['act']=='two'){
	$cpage = isset($_GET['page'])? intval($_GET['page']):1;
	$connect=new ysj();
	$num=$connect->getRowTotal("ysj",2);
	$fypage=new Page($num,$cpage,5);
	$pageInfo = $fypage->getPageInfo();
	$products = $connect->getPageRows($pageInfo["row_offset"],$pageInfo["row_num"],2,"ysj");

	if($products){
          $smarty->assign("tableName","人员列表");
          $smarty->assign("url","ysjList.php");
          $smarty->assign("products",$products);
          $smarty->assign("pageInfo",$pageInfo);
      }else{
          echo "读取信息失败！";
          exit();
      }
      
      $smarty->display("ysjList.tpl",$cpage);
}

if($_REQUEST['act']=='tree'){
	$cpage = isset($_GET['page'])? intval($_GET['page']):1;
	$connect=new ysj();
	$num=$connect->getRowTotal("ysj",3);
	$fypage=new Page($num,$cpage,5);
	$pageInfo = $fypage->getPageInfo();
	$products = $connect->getPageRows($pageInfo["row_offset"],$pageInfo["row_num"],3,"ysj");

	if($products){
          $smarty->assign("tableName","人员列表");
          $smarty->assign("url","ysjList.php");
          $smarty->assign("products",$products);
          $smarty->assign("pageInfo",$pageInfo);
      }else{
          echo "读取信息失败！";
          exit();
      }
      
      $smarty->display("ysjList.tpl",$cpage);
}

if($_REQUEST['act']=='view'){
	$nid=isset($_GET['ysjId'])?$_GET['ysjId']:0;
	$news=new ysj;
	$newsinfo=$news->getNews($nid);

	$smarty->assign('ysj',$newsinfo);
	$smarty->display("ysj.tpl");
}

?>