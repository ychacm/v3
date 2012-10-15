<?php
require_once("init.php");
require_once("class/fy.php");
require_once("class/vedio.class.php");

if($_REQUEST['act']=='view'){
	$nid=isset($_GET['fileId'])?$_GET['fileId']:0;
	$news=new vedioFile;
	$newsinfo=$news->getNews($nid);

	$smarty->assign('vedio',$newsinfo);
	$smarty->display("vedio.tpl");
}

if($_REQUEST['act']=='one'){
	$cpage = isset($_GET['page'])? intval($_GET['page']):1;
	$connect=new vedioFile();
	$num=$connect->getRowTotal("file");
	$fypage=new Page($num,$cpage,5);
	$pageInfo = $fypage->getPageInfo();
	$products = $connect->getPageRows($pageInfo["row_offset"],$pageInfo["row_num"],"file");

	if($products){
          $smarty->assign("tableName","人员列表");
          $smarty->assign("url","vedioList.php");
          $smarty->assign("products",$products);
          $smarty->assign("pageInfo",$pageInfo);
      }else{
          echo "读取信息失败！";
          exit();
      }
      
      $smarty->display("vedioList.tpl",$cpage);
}
?>