<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/companyup.js"></script>    
</head>
<body>
<form method="post" action="">
<label>Company Info</label>
<select id="company" name="company">
<?php
require_once "connection.php";
$sq="select * from tbcompany";
$res=mysqli_query($dbconn,$sq);
while($row=mysqli_fetch_array($res)){
    echo "<option value=".$row["id"].">".$row['company_name']."</option>";
}
?>
</select>
<input type="button" id="e1" name="e1" value="Info">
</form>
<div id="i1"></div>
<div id="i2"></div>
</body>
</html>