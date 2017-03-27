<?php
include_once("partnerconnect.php");

$query="select category,functions from users";
$records=mysql_query($query);
$all=array();
if(!$records)
die(mysql_error());
while($row=mysql_fetch_array($records))
{
$all[]=$row;
}
echo json_encode($all);
?>