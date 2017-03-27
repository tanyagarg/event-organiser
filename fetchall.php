<?php

	include_once("partnerconnect.php");
	$ui=$_GET["uid"];
	$qry="select category,functions,cname,mobile,addr,city,email,id,firm,estb,spec,prevwork,otherinfo from users where uid='$ui'";
	$ress=mysql_query($qry);
	
	while($res=mysql_fetch_array($ress))
		$data=$res["cname"].",".$res["mobile"].",".$res["addr"].",".$res["city"].",".$res["email"].",".$res["id"].",".$res["firm"].",".$res["estb"].",".$res["spec"].",".$res["prevwork"].",".$res["otherinfo"].",".$res["category"].",".$res["functions"];

	echo $data;

?>