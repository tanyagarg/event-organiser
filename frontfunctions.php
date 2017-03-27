<?php

	include_once("partnerconnect.php");
	
	$qry="select * from functions";
	$res=mysql_query($qry);
	
	$i=mysql_num_rows($res);
	
	while($ress=mysql_fetch_array($res))
		echo $ress["functions"].";";
	
	
?>