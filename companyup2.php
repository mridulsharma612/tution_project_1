<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>    
</head>
<body>
<?php
require_once "connection.php";

$ide=$_REQUEST["ide"];
$cn=$_REQUEST["cn"];
$cd=$_REQUEST["cd"];
$ce=$_REQUEST["ce"];
$ca=$_REQUEST["ca"];
$co=$_REQUEST["co"];
$cu=$_REQUEST["cu"];
$cp=$_REQUEST["cp"];

$sql="update tbcompany set company_name='$cn', company_director='$cd', company_email='$ce', company_address='$ca',company_contact=$co, company_username='$cu', company_password='$cp' where id=$ide";
mysqli_query($dbconn,$sql); 
?>
</body>
</html>