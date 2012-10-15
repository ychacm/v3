<?php
header("Content-type:text/html;charset=utf-8");
require_once("init.php");
require_once("class/news.class.php");
require_once("class/ysj.class.php");
require_once("class/vedio.class.php");
$news=new News;
$newslist=$news->getNewsItem(1,8,1);
$newst=new News;
$newstit=$newst->getNewsItem(1,8,2);

$ysj=new ysj;
$newsinfo=$ysj->getNewsItem(1,8,1);
$ysj1=new ysj;
$ysjinfo1=$ysj1->getNewsItem(1,8,2);
$ysj2=new ysj;
$ysjinfo2=$ysj2->getNewsItem(1,8,3);

$vedio=new vedioFile;
$vedioinfo=$vedio->getNewses(1,8);

$smarty->assign('ysjlist',$newsinfo['data']);
$smarty->assign('ysjlist1',$ysjinfo1['data']);
$smarty->assign('ysjlist2',$ysjinfo2['data']);

$smarty->assign('vedio',$vedioinfo['data']);

$smarty->assign('newslist',$newslist['data']);
$smarty->assign('newslist1',$newstit['data']);
$smarty->display("index.tpl");
?>
