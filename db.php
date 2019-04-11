<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$database="ap";
$connection=mysqli_connect($dbhost,$dbuser,$dbpass,$database);
mysqli_select_db($connection,$database);
?>