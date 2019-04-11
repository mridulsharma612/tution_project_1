<?php
$host = "localhost";
$username = "root" ;
$password = "";
$db = "adminform";
$conn = mysqli_connect($host,$username,$password,$db);
mysqli_select_db($conn,$db);
?>