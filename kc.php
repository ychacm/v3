<?php
require_once("init.php");
require_once("class/fy.php");
require_once("class/kc.class.php");

if($_REQUEST['act']=='one'){
 	$cpage = isset($_GET['page'])? intval($_GET['page']):1;
 	$connect=new kc();//此部位需要替换
 	$num=$connect->getRowTotal("class",1);//替换
 	$fypage=new Page($num,$cpage,5);
 	$pageInfo = $fypage->getPageInfo();
 	$products = $connect->getPageRows($pageInfo["row_offset"],$pageInfo["row_num"],1,"class");

 	if($products){
          $smarty->assign("tableName","人员列表");
          $smarty->assign("url","kcList.php");
          $smarty->assign("products",$products);
          $smarty->assign("pageInfo",$pageInfo);
    }else{
          echo "读取数据失败！";
          exit();
    }
      
    $smarty->display("kcList.tpl",$cpage);
}
if($_REQUEST['act']=='two'){
 	$cpage = isset($_GET['page'])? intval($_GET['page']):1;
 	$connect=new kc();//此部位需要替换
 	$num=$connect->getRowTotal("class",2);//替换
 	$fypage=new Page($num,$cpage,5);
 	$pageInfo = $fypage->getPageInfo();
 	$products = $connect->getPageRows($pageInfo["row_offset"],$pageInfo["row_num"],2,"class");

 	if($products){
          $smarty->assign("tableName","人员列表");
          $smarty->assign("url","kcList.php");
          $smarty->assign("products",$products);
          $smarty->assign("pageInfo",$pageInfo);
    }else{
          echo "读取数据失败！";
          exit();
    }
      
    $smarty->display("kcList.tpl",$cpage);
}
if($_REQUEST['act']=='tree'){
 	$cpage = isset($_GET['page'])? intval($_GET['page']):1;
 	$connect=new kc();//此部位需要替换
 	$num=$connect->getRowTotal("class",3);//替换
 	$fypage=new Page($num,$cpage,5);
 	$pageInfo = $fypage->getPageInfo();
 	$products = $connect->getPageRows($pageInfo["row_offset"],$pageInfo["row_num"],3,"class");

 	if($products){
          $smarty->assign("tableName","人员列表");
          $smarty->assign("url","kcList.php");
          $smarty->assign("products",$products);
          $smarty->assign("pageInfo",$pageInfo);
    }else{
          echo "读取数据失败！";
          exit();
    }
      
    $smarty->display("kcList.tpl",$cpage);
}
if($_REQUEST['act']=='view'){
	$nid=isset($_GET['classId'])?$_GET['classId']:0;
	$news=new kc;
	$newsinfo=$news->getNews($nid);

	$smarty->assign('kc',$newsinfo);
	$smarty->display("kc.tpl");
}
  ?>
