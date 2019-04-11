<?php
require_once "conn.php";

$fname=$_REQUEST["fname"];
$lname=$_REQUEST["lname"];
$cno=$_REQUEST["cno"];
$em=$_REQUEST["em"];
$pass=$_REQUEST["pass"];

$sql="INSERT into users(first_name,last_name,contact_no,email_address,password)values('$fname','$lname',$cno,'$em','$pass')";
mysqli_query($conn,$sql);
echo "User has been successfully registered!";
?>