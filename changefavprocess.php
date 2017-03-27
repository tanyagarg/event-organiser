<?php
session_start();
include_once("partnerconnect.php");
	$cid=$_SESSION["uid"];

$val=$_GET["value"];

$qry="select * from favorites where consumerid='$cid' and function='$val'";
$records=mysql_query($qry);
$all=array();
if(!$records)
die(mysql_error());
while($row=mysql_fetch_array($records))
{
$all[]=$row;
}
echo json_encode($all);

?>