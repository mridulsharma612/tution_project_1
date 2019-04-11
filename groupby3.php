<?php
require_once "dbconfig.php";

$qu="SELECT Shippers.ShipperName,COUNT(Orders.OrderID)AS NumberOfOrders FROM Orders LEFT JOIN Shippers ON Orders.ShipperID = Shippers.ShipperID GROUP BY ShipperName";
echo"<table border='1'>
<thead>
<tr>
<th>Shipper Name</th>
<th>Number Of Orders</th>
</tr>
</thead>";
$ou= mysqli_query($conn, $qu);
while($de= mysqli_fetch_array($ou))
{
    extract($de);
    echo"<tr><td>$ShipperName</td><td>$NumberOfOrders</td></tr>";
}
echo "</table>";
?>