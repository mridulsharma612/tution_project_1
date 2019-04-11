<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/tbupdate2.js"></script>
</head>
<body>
<?php
require_once "config.php";

$u=$_REQUEST["u"];

$sq="select * from tbproduct where id='$u'";

$o=mysqli_query($connection,$sq);

while($row=mysqli_fetch_assoc($o))
{
    extract($row);
    echo "ID <input type='text' name='i11' id='i11' value='$id'><br/>";
    echo "Product Name <input type='text' name='i12' id='i12' value='$product_name'><br/>";
    echo "Price <input type='text' name='i13' id='i13' value='$price'><br/>";
    echo "Quantity <input type='text' name='i14' id='i14' value='$quantity'><br/>";
    echo "CID <input type='text' name='i15' id='i15' value='$cid'><br/>";
    echo "<input type='button' id='sbm1' name='sbm1' value='Submit'>";
}
?>
</body>
</html>