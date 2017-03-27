<?php
include_once("partnerconnect.php");
$uid = $_GET["uid"];
$qry = "select * from users where uid='$uid'";
$records = mysql_query($qry);
$arr = array();
$arr[] = mysql_fetch_array($records);
echo json_encode($arr);
?>