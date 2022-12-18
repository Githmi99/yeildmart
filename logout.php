<?php
$dbserver="localhost";
$user="root";
$passwor="";
$db="yeildmart";


$connection=  mysqli_connect($dbserver,$user,$passwor,$db)or die("Unable to connect");

$_SESSION=[];
session_unset();
session_destroy();
header("Location:index.php");

?>