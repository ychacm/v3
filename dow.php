<?php
require_once("init.php");
require_once("class/fy.php");
require_once("class/dow.class.php");

if($_REQUEST['act']=='view'){
	$nid=isset($_GET['dowId'])?$_GET['dowId']:0;
	$news=new dow;
	$newsinfo=$news->getNews($nid);
	
	$smarty->assign('dow',$newsinfo);
	$smarty->display("dow.tpl");
}

if($_REQUEST['act']=='one'){
	$cpage = isset($_GET['page'])? intval($_GET['page']):1;
	$connect=new dow();
	$num=$connect->getRowTotal("dow",1);
	$fypage=new Page($num,$cpage,5);
	$pageInfo = $fypage->getPageInfo();
	$products = $connect->getPageRows($pageInfo["row_offset"],$pageInfo["row_num"],1,"dow");

	if($products){
          $smarty->assign("tableName","人员列表");
          $smarty->assign("url","dowList.php");
          $smarty->assign("products",$products);
          $smarty->assign("pageInfo",$pageInfo);
      }else{
          echo "读取信息失败！";
          exit();
      }
      
    $smarty->display("dowList.tpl",$cpage);
}

if($_REQUEST['act']=='two'){
	$cpage = isset($_GET['page'])? intval($_GET['page']):1;
	$connect=new dow();
	$num=$connect->getRowTotal("dow",2);
	$fypage=new Page($num,$cpage,5);
	$pageInfo = $fypage->getPageInfo();
	$products = $connect->getPageRows($pageInfo["row_offset"],$pageInfo["row_num"],2,"dow");

	if($products){
          $smarty->assign("tableName","人员列表");
          $smarty->assign("url","dowList.php");
          $smarty->assign("products",$products);
          $smarty->assign("pageInfo",$pageInfo);
      }else{
          echo "读取信息失败！";
          exit();
      }
      
      $smarty->display("dowList.tpl",$cpage);
}
?>
