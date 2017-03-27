<?php
include_once("partnerconnect.php");

$ui=$_GET["uid"];

$qry="select * from users where uid='$ui'";
$res=mysql_query($qry);
$count=mysql_num_rows($res);
echo $count;

?>