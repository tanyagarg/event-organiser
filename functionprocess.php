<?php

include("taskconnect.php");
$fun=$_GET["val"];

$qry="insert into functions values('$fun')";
//mysql_query($qry);

$res=mysql_query($qry);
	$count=mysql_affected_rows();
	
	echo $count;
?>