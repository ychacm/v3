<?php
require_once("includes/config.inc.php");
require_once("libs/Smarty.class.php");
require_once("includes/functions.php");
require_once("class/mysqlhelper.php");

$smarty=new Smarty;

$smarty->template_dir   = 'templates';
$smarty->cache_dir      = 'caches';
$smarty->compile_dir    = 'compiled';

$_REQUEST = sys_addslash($_REQUEST);
$_GET     = sys_addslash($_GET);
$_POST    = sys_addslash($_POST);
$_COOKIE  = sys_addslash($_COOKIE);
$_FILES   = sys_addslash($_FILES);

$_REQUEST['act']=isset($_REQUEST['act'])?$_REQUEST['act']:'';
?>
