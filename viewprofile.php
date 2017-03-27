<?php

session_start();
include_once("partnerconnect.php");
$uid=$_SESSION["uid"];

$qry="select count from users where uid='$uid'";
$res=mysql_query($qry);
if(!$qry)
echo mysql_error();
$arr = array();
$arr[] = mysql_fetch_array($res);
echo json_encode($arr);

?>