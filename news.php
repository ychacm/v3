<?php
require_once("init.php");
require_once("class/fy.php");
require_once("class/news.class.php");

if($_REQUEST['act']=='one'){
 	$cpage = isset($_GET['page'])? intval($_GET['page']):1;
 	$connect=new News();
 	$num=$connect->getRowTotal("news",1);
 	$fypage=new Page($num,$cpage,5);
 	$pageInfo = $fypage->getPageInfo();
 	$products = $connect->getPageRows($pageInfo["row_offset"],$pageInfo["row_num"],1,"news");

 	if($products){
          $smarty->assign("tableName","新闻列表");
          $smarty->assign("url","news.php");
          $smarty->assign("products",$products);
          $smarty->assign("pageInfo",$pageInfo);
    }else{
          echo "读取信息失败！";
          exit();
    }
      
    $smarty->display("newsList.tpl",$cpage);
}

if($_REQUEST['act']=='two'){
 	$cpage = isset($_GET['page'])? intval($_GET['page']):1;
 	$connect=new News();
 	$num=$connect->getRowTotal("news",2);
 	$fypage=new Page($num,$cpage,5);
 	$pageInfo = $fypage->getPageInfo();
 	$products = $connect->getPageRows($pageInfo["row_offset"],$pageInfo["row_num"],2,"news");

 	if($products){
          $smarty->assign("tableName","超越新闻");
          $smarty->assign("url","news.php");
          $smarty->assign("products",$products);
          $smarty->assign("pageInfo",$pageInfo);
    }else{
          echo "读取信息失败！";
          exit();
   }
      
   $smarty->display("newsList.tpl",$cpage);
}

if($_REQUEST['act']=='view'){
	$nid=isset($_GET['newsId'])?$_GET['newsId']:0;
	$news=new News;
	$newsinfo=$news->getNews($nid);

	$smarty->assign('news',$newsinfo);
	$smarty->display("news.tpl");
}
?>