<?php
session_start();

include_once("partnerconnect.php");
$uid=$_GET["id"];
$qry="select mobile,address,city,email from consumer where uid='$uid'";
	$ress=mysql_query($qry);
	
	while($res=mysql_fetch_array($ress))
	$data=$res["mobile"].",".$res["address"].",".$res["city"].",".$res["email"];

	echo $data;


?>