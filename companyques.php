<!DOCTYPE html>
<html>
<head>
<title>Company Questions and Answers</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script src="js/companyques.js"></script>   
</head>
<body>    
<form method="post" action="">

 <select id="ques" name="ques">
<?php
require_once "config.php";
session_start();
$companyusername=$_SESSION["companyuname"];
$sq="select * from tbquestions where company_username='$companyusername'";
$res=mysqli_query($connection,$sq);
while($row=mysqli_fetch_array($res)) {

    echo "<option value=".$row["id"].">" .$row['question']."</option>";
} 
?>
<input type="button" name="subm1" id="subm1" value="View">
<div id="a1"></div>
</form>
</body>
</html>