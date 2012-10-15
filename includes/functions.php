<?php
function sys_addslash($data)
{
    if (!get_magic_quotes_gpc())
    {
        if (is_array($data))
        {
            foreach ($data as $key => $value)
            {
                if (is_array($value))
                {
                    $data[$key] = sys_addslash($value);
                }
                else
                {
                    $data[$key] = addslashes($value);
                }
            }
        }
        else
        {
            $data = addslashes($data);
        }
    }
    return $data;
}
function go_back(){
	echo('<script language="JavaScript">');
	echo('history.back();');
	echo('</script>');
	exit;
}
function alert_back($msg){
	echo('<script language="JavaScript">');
	echo("alert('$msg');");
	echo('history.back();');
	echo('</script>');
	exit;
}
function alert_go($msg,$url){
	echo('<script language="JavaScript">');
	echo("alert('$msg');");
	echo("location.href='$url';");
	echo('</script>');
	exit;
}

function check_admin()
{
	   if(!private_admin())
	  header('location:admin.php?act=login');
}
function private_admin()
{
       if(isset($_COOKIE['ckaid'])&&!empty($_COOKIE['ckaid']))
	  return 1;
	  else
	  return 0;
}
function createFckeditor($fckid,$fckvalue=''){
	$editor = new FCKeditor($fckid) ;
	$editor->BasePath   = "fckeditor/";
	$editor->ToolbarSet = "Basic";
	$editor->Width      = "450";
	$editor->Height     = "400";
	$editor->Value=$fckvalue;
	$fckeditor = $editor->CreateHtml();
	return $fckeditor;
}

function getPageNav($pagerecords,$totalrecords)
{
   $page=isset($_GET["page"])?$_GET["page"]:1;
    
    if(!isset($url))
    	$url=$_SERVER["REQUEST_URI"];
    $parse_url=parse_url($url);
    $url_query=isset($parse_url["query"])?$parse_url["query"]:''; 
	
	if($url_query)
	{
	  $url_query=ereg_replace("(^|&)page=$page","",$url_query);
	  $url=str_replace($parse_url["query"],$url_query,$url);
	  if($url_query) $url.="&page"; 
	  else $url.="page";
	}
	else 
	{
	   $url.="?page";
	 }

   $totalpages=ceil($totalrecords/$pagerecords);
   $lastpg=$totalpages;
   $page=min($totalpages,$page);
   $prepg=$page-1;
   $nextpg=($page==$totalpages?0:$page+1);

   $firstcount=($page-1)*$pagerecords;
   $showresult="显示第 ".($totalrecords?($firstcount+1):0)." - ".min($firstcount+$pagerecords,$totalrecords)." 条记录，共   $totalrecords 条记录 ";

   if($lastpg<=1)
   {
	 return "";
   }
   $showresult.="<a href='$url=1'>首页</a>";
   if($prepg)
   {$showresult.=" <a href='$url=$prepg'>前页</a>";}
   else
   {$showresult.=" 前页";}
   if($nextpg)
   {$showresult.=" <a href='$url=$nextpg'>后页</a>";}
   else
   { $showresult.=" 后页";}
   $showresult.=" <a href='$url=$lastpg'>尾页</a>";
   $showresult.=" 跳转到第<select name='topage' size='1' onchange='window.location=\"$url=\"+this.value'>\n";
  for($i=1;$i<=$lastpg;$i++)
  {
	if($i==$page) $showresult.="<option value='$i' selected>$i</option>\n";
	else $showresult.="<option value='$i'>$i</option>\n";
   }
	$showresult.="</select> 页，共 $lastpg 页";
   return $showresult;
}
?>