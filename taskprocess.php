<?php

include("taskconnect.php");
$tsk=$_GET["val"];

$qry="insert into task values('$tsk')";
//mysql_query($qry);

$res=mysql_query($qry);
	$count=mysql_affected_rows();
	
	echo $count;
?>