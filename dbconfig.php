<?php
$dbhost="localhost";
$dbuser="root";
$dbpassword="";
$db="northwind";
$conn=mysqli_connect($dbhost,$dbuser,$dbpassword,$db);
mysqli_select_db($conn,$db);
?>