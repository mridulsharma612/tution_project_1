<?php
$host = "localhost";
$user = "root";
$pwd  = "";
$db = "bloodbank";
$connection = mysqli_connect($host,$user,$pwd,$db);
mysqli_select_db($connection,$db);
?>