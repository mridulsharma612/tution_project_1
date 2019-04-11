<?php
require_once "tbconnect.php";

$pname=$_REQUEST["pname"];
$pr=$_REQUEST["pr"];
$qty=$_REQUEST["qty"];
$ds=$_REQUEST["ds"];

$sql="INSERT into tbproduct(product_name,price,quantity,description)values('$pname','$pr','$qty','$ds')";
mysqli_query($conn,$sql);
echo "Product has been successfully inserted into the db!";
?>