<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>   
</head>
<body>
<?php
require_once "config.php";

$idd=$_REQUEST["idd"];
$pn=$_REQUEST["pn"];
$pr=$_REQUEST["pr"];
$qty=$_REQUEST["qty"];
$c=$_REQUEST["c"];

$up="update tbproduct set product_name='$pn', price='$pr', quantity='$qty',cid=$c where id=$idd";
mysqli_query($connection,$up);

?>
</body>
</html>