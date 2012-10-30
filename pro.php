<?php
	$conn=mysqli_connect('localhost','root','','b5_10631563_ych');

	$sql="call b5_10631563_ych.proc1(3)";

	if($result = mysqli_query($conn,$sql))
	{
		while($row=mysqli_fetch_array($result))
		{
			echo ("序号".$row['fileid']."</br>");
		}
		mysqli_free_result($result);
	}
	mysqli_close($conn);

	echo "ok";
?>