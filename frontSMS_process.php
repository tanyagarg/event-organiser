<?php
session_start();
include_once("sms_bce_sst.php");
$uid=$_SESSION["uid"];
$mob=$_GET["mob"];
$addr=$_GET["addr"];
$city=$_GET["city"];
$mail=$_GET["mail"];
$msg=$_GET["msg"];

$resp= SendSMS($mob,$msg);
if($resp=="sent")
echo $resp;
else
echo "SMS Failed..";


?>