
<?php

include_once("partnerconnect.php");

	$ui=$_GET["uid"];
	$mo=$_GET["mob"];
	$adr=$_GET["addr"];
	$cty=$_GET["city"];
	$mil=$_GET["mail"];
	$occu=$_GET["occu"];
	
	$qry="insert into consumer(uid,contact,address,city,email,occupation) values('$ui','$mo','$adr','$cty','$mil','$occu')";
	
	$res=mysql_query($qry);
	$count=mysql_affected_rows();
	
	echo $count;
	
?>