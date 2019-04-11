<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" media="screen" href="css/tbproduct123.css">
</head>
<body>

<?php
require_once "connection.php";

$c=$_REQUEST["c"];

$qu="select * from tbproduct where cid=$c";

$r=mysqli_query($dbconn,$qu);

echo "<table class='table table-fixed table-striped'>";
echo "<thead>
	        <tr>
	            <th>ID</th>
	            <th>Product Name</th>
	            <th>Price</th>
	            <th>Quantity</th>
	            <th>CID</th>
            </tr>
        </thead>";
while($row=mysqli_fetch_array($r))
{
  extract($row);  
  echo "<tr><td>$id</td><td>$product_name</td><td>$price</td><td>$quantity</td><td>$cid</td></tr>";
}
echo "</table>";
?>
</body>
</html>