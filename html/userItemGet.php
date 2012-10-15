<?php

	header('Content-Type:text/html; charset=utf-8'); 

	require("../gen.php");
	$ych=new mysql('sql209.byethost5.com','b5_10631563','19860129','b5_10631563_ych','utf8','conn');
	$result=$ych->Get('ysitems');
	while($row=mysql_fetch_array($result))
	{
		$arr4[]=$row;
	}
	echo json_encode($arr4);

?>
