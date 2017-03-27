<?php
session_start();
include_once("partnerconnect.php");
$uid=$_GET["txtuid"];

$_SESSION["uid"]=$uid;

$_SESSION["entryTime"] = time();

$pwd=$_GET["txtpwd"];
$mob=$_GET["txtmob"];
if($_GET["client"]=="customer")
{
$qry="insert into consumer (uid,password,mobile)values('$uid','$pwd','$mob')";
$res=mysql_query($qry);
header("location: consumerform.php");
}
else
{
	$qry="insert into users (uid,password,mobile)values('$uid','$pwd','$mob')";
$res=mysql_query($qry);
header("location: partnerform.php");
}

if(!$qry)
die(mysql_error());

?>