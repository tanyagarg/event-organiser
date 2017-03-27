<?php
session_start();
include_once("partnerconnect.php");
$cid=$_SESSION["uid"];
$bid=$_GET["id"];
$func=$_GET["func"];
$cat=$_GET["cat"];
/*
$bid="hlo";
$func="school";
$cat="horse";
*/
$qry="select businessid from favorites where consumerid='$cid' and function='$func' and categoryfav='$cat'";
$res=mysql_query($qry);
if(!$res)
die(mysql_error());
$cnt=mysql_num_rows($res);
//echo $cnt;
if($cnt!=0)
{
	while($rec=mysql_fetch_array($res))
$business= $rec["businessid"];
$business=$business.";".$bid;
$qry="update favorites set businessid='$business' where consumerid='$cid' and function='$func' and categoryfav='$cat'";
$res=mysql_query($qry);
if(!$res)
die(mysql_error());
$count=mysql_affected_rows();
echo $count;
}
else
{
	
	$qry="insert into favorites(consumerid,businessid,function,categoryfav) values('$cid','$bid','$func','$cat')";
	$res=mysql_query($qry);
	$count=mysql_affected_rows();
	echo $count;
	
}
?>