<!DOCTYPE html>
<html>
<head>
<title>Employee Details</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script src="js/employee.js"></script>
</head>
<body>
<form method="post" action="">

<select id="details" name="details">
<?php
require_once "config.php";
session_start();
$username=$_SESSION["companyuname"];
$qu="select * from tblogin";
$o=mysqli_query($connection,$qu);
while($row=mysqli_fetch_array($o)) {
    echo "<option value=".$row["id"].">".$row['username']."</option>";
}
?>
<input type="button" name="subm" id="subm" value="Submit">
<div id="i1"></div>
</form>
</body>
</html>