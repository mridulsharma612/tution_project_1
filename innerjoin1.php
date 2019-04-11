<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once "dbconfig.php";

$sq="SELECT Orders.OrderID, Customers.CustomerName, Orders.OrderDate FROM Orders INNER JOIN Customers ON Orders.CustomerID=Customers.CustomerID";
echo "<table border='1'>
<thead>
<tr>
<th>Order ID</th>
<th>Customer Name</th>
<th>Order Date</th>
</tr>
</thead>";
$r= mysqli_query($conn, $sq);
while($ou= mysqli_fetch_array($r))
{
    extract($ou);
    echo "<tr><td>$OrderID</td><td>$CustomerName</td><td>$OrderDate</td></tr>";
}
echo "</table>";
?>