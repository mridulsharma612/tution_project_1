<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'dbconfig.php';

$mysql="SELECT Orders.OrderID, Customers.CustomerName, Shippers.ShipperName FROM ((Orders INNER JOIN Customers ON Orders.CustomerID = Customers.CustomerID)INNER JOIN Shippers ON Orders.ShipperID = Shippers.ShipperID)";

echo "<table border='1'>
<thead>
<tr>
<th>OrderID</th>
<th>CustomerName</th>
<th>ShipperName</th>
</tr>
</thead>";
$r= mysqli_query($conn, $mysql);
while($row= mysqli_fetch_array($r))
{
    extract($row);
    echo "<tr><td>$OrderID</td><td>$CustomerName</td><td>$ShipperName</td></tr>";
}
echo "</table>";
?>