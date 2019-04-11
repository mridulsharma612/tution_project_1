<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit Products</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/editproducts.js"></script>
</head>
<body>
<form method="post" action="" name="ed" id="ed">    
<label>Edit Products</label>
<select name="pr" id="pr">
<?php
require_once "connection.php";
$mysql="select * from tbproduct";
$ou=mysqli_query($dbconn,$mysql);
while($row=mysqli_fetch_array($ou))
{
    extract($row);
    echo "<option value=$id>$product_name</option>";
}
?>
</select>
<input type="button" name="but1" id="but1" value="Edit Products">
<div id="info1"></div>
<div id="info2"></div>
</form>
</body>
</html>