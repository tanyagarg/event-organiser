<?php
session_start();
include_once("partnerconnect.php");
$uid=$_GET["txtuid"];

$_SESSION["uid"]=$uid;
$pwd=$_GET["txtpwdd"];
$_SESSION["entryTime"] = time();
if($_GET["client"]=="customer")
{
$qry="select password from consumer where uid='$uid'";
$res=mysql_query($qry);
if(!$res)
die(mysql_error());
while($rec=mysql_fetch_array($res))
{
	if($rec["password"]==$pwd)
	$cnt=1;
	else
	$cnt=0;
}
echo $rec["password"];
echo $cnt;
if($cnt=="1")
 header("location: changefrontt.php");
 else
 {
 header("location: projfront.php");
 }
		
}
else
{
$qry="select password from users where uid='$uid'";

$res=mysql_query($qry);
if(!$res)
die(mysql_error());
while($rec=mysql_fetch_array($res))
{
	if($rec["password"]==$pwd)
	$cnt=1;
	else
	$cnt=0;
}
if($cnt=="1")
 header("location: contributorprofile1.php");
 else
 {
 header("location: projfront.php");
 }
}
?>