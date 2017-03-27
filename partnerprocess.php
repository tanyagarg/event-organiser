<?php

include_once("partnerconnect.php");
$btn=$_POST["btn"];

if($btn=="SAVE")
dosave();
else
doupdate();

function dosave()
{
	$uid=$_POST["txtuid"];
	$name=$_POST["txtname"];
	$mobile=$_POST["txtmob"];
	$address=$_POST["txtaddr"];
	$city=$_POST["txtcity"];
	$email=$_POST["txteml"];
	$temp=$_FILES["pp"]["tmp_name"];
	$org=$_FILES["pp"]["name"];
	$org=$uid."_".$org;
	$firm=$_POST["txtfrm"];
	$establsh=$_POST["txtestb"];
	$special=$_POST["txtspec"];
	$work=$_POST["txtwrk"];
	$info=$_POST["txtinfo"];
	
	$items=$_POST["cat"];
	$cat="";
	foreach($items as $it)
	{
	$cat=$cat.$it.";";
	}
	$cat=substr($cat,0,strlen($cat)-1);
	echo $cat;
	
	$items=$_POST["fun"];
	$caat="";
	foreach($items as $it)
	{
	$caat=$caat.$it.";";
	}
	$caat=substr($caat,0,strlen($caat)-1);
	move_uploaded_file($temp,"uploads/".$org );
	
	$qry="insert into users (uid,category,functions,cname,mobile,addr,city,email,id,firm,estb,spec,prevwork,otherinfo)values('$uid','$cat','$caat','$name','$mobile','$address','$city','$email','uploads/$org','$firm','$establsh','$special','$work','$info')";
	//$a=mysql_query;
	//mysql_query($qry);
	$q= mysql_query($qry);
	if(!$q)
	{
	echo mysql_error();
	}
	$rows=mysql_affected_rows();
	echo "rows ".$rows;
	
}


function doupdate()
{
	$uid=$_POST["txtuid"];

	$name=$_POST["txtname"];
	$mobile=$_POST["txtmob"];
	$address=$_POST["txtaddr"];
	$city=$_POST["txtcity"];
	$email=$_POST["txteml"];
	$temp=$_FILES["pp"]["tmp_name"];
	$org=$_FILES["pp"]["name"];
	$org=$uid."_".$org;
	$firm=$_POST["txtfrm"];
	$establsh=$_POST["txtestb"];
	$special=$_POST["txtspec"];
	$work=$_POST["txtwrk"];
	$info=$_POST["txtinfo"];
	
	if($org!=" ")
	{
		$picpath="uploads/".$uid."_".$org;
		move_uploaded_file($temp,$picpath);
	}
	else
	$picpath=$hdn;
	
$qry="update users set  cname='$name',mobile='$mobile',addr='$address',city='$city',email='$email',id='$picpath',firm='$firm',estb='$establsh',spec='$special',prevwork='$work',otherinfo='$info' where uid='$uid'";
	
	$q= mysql_query($qry);
	if(!$q)
	{
	echo mysql_error();
	}
	$rows=mysql_affected_rows();
	echo "rows ".$rows;
	
}

?>