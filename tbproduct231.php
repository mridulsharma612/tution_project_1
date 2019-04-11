<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
<?php
require_once "config.php";

$p=$_REQUEST["p"];

$sq="select * from tbproduct where id=$p";

$ou=mysqli_query($connection,$sq);

echo "<table id='mytable' class='table table-bordred table-striped'>";
echo "<thead>
<th>ID</th>
 <th>Product Name</th>
  <th>Price</th>
  <th>Quantity</th>
  <th>CID</th>
  <th>Edit</th>
                      
 <th>Delete</th>
</thead>";
while($row=mysqli_fetch_array($ou))
{
    echo "<tbody>";
    extract($row);
    echo "<tr><td>$id</td><td>$product_name</td><td>$price</td><td>$quantity</td><td>$cid</td> <td><p data-placement='top' data-toggle='tooltip' title='Edit'><button class='btn btn-primary btn-xs' data-title='Edit' data-toggle='modal' data-target='#edit' ><span class='glyphicon glyphicon-pencil'></span></button></p></td><td><p data-placement='top' data-toggle='tooltip' title='Delete'><button class='btn btn-danger btn-xs' data-title='Delete' data-toggle='modal' data-target='#delete' ><span class='glyphicon glyphicon-trash'></span></button></p></td></tr>";
    echo "</tbody>";
}
echo "</table>";
?>
</body>
</html>