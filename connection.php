<?php
$dbhost="localhost";
$dbuser="root";
$dbpassword="";
$db="tbproject";
$dbconn=mysqli_connect($dbhost,$dbuser,$dbpassword,$db);
mysqli_select_db($dbconn,$db);
?>