<?php
require_once "connection.php";
$username=$_REQUEST["username"];
$password=$_REQUEST["password"];
$securityquestion=mysqli_real_escape_string($dbconn,$_REQUEST["security"]);
$securityanswer=$_REQUEST["answer"];
$query="INSERT into tblogin(username,password,security_question,security_answer)values('$username','$password','$securityquestion','$securityanswer')";
echo $query;
mysqli_query($dbconn,$query);
echo "record s inserted";
?>