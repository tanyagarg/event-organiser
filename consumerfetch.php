<?php
session_start();
	include_once("partnerconnect.php");
	$ui=$_SESSION["uid"];
	$qry="select * from consumer where uid='$ui'";
	$ress=mysql_query($qry);
	
	while($res=mysql_fetch_array($ress))
		$data=$res["mobile"].";".$res["address"].";".$res["city"].";".$res["email"].";".$res["occupation"];
			echo $data;

?>