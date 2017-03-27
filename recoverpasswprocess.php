<?php

include_once("sms_bce_sst.php");
include_once("partnerconnect.php");
$uid=$_GET["uid"];
$type=$_GET["type"];
if($type=="customer")
$qry="select password,mobile from consumer where uid='$uid'";
else
$qry="select password,mobile from users where uid='$uid'";
if(!$qry)
echo mysql_error();
$res=mysql_query($qry);
while($ress=mysql_fetch_array($res))
{
$data=$ress["password"];
$dataa=$ress["mobile"];
}
$resp= SendSMS($dataa,$data);
if($resp=="sent")
echo $resp;
else
echo "SMS Failed..";

?>