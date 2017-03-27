<?php 
session_start();
session_unset();
session_destroy();
//echo "U are log out";
header("location: projfront.php");
if(!isset($_SESSION["uid"]))
header("location: projfront.php");
?>