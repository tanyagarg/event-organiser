<?php
include_once("partnerconnect.php");

$uid=$_GET["id"];

$qry="select count from users where uid='$uid'";
$res=mysql_query($qry);
if(!$res)
die(mysql_error());

while($record=mysql_fetch_array($res))
$cnt= $record["count"];


$cnt=$cnt+1;

$qry="update users set count=$cnt where uid='$uid'";
$res=mysql_query($qry);

$qry="select count from users where uid='$uid'";
$res=mysql_query($qry);
while($record=mysql_fetch_array($res))
$cnt= $record["count"];
echo $cnt;

?>