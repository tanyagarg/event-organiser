<?php
session_start();
include_once("partnerconnect.php");

$ui=$_SESSION["uid"];
$qry="select * from consumer where uid='$ui'";
$res=mysql_query($qry);
$count=mysql_num_rows($res);
echo $count;

?>