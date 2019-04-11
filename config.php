<?php
$host="localhost";
$user="root";
$pwd="";
$database="tbproject";
$connection=mysqli_connect($host,$user,$pwd,$database);
mysqli_select_db($connection,$database);
?>