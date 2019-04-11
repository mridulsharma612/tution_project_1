<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Product Categories</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/category.js"></script>
</head>
<body>
<form action="" method="post" name="info" id="info">
<label>Product Categories</label>
<select name="cat" id="cat">
<?php
require_once "connection.php";
$s="select * from tbcategory";
$o=mysqli_query($dbconn,$s);
while($row=mysqli_fetch_array($o))
{
    extract($row);
    echo "<option value=$id>$product_name</option>";
}
?>
</select>
<input type="button"  name="bu1" id="bu1" value="View Products">
<div id="p1"></div>
</form>
</body>
</html>