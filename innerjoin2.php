<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once "dbconfig.php";

$query="SELECT Orders.OrderID, Customers.CustomerName FROM Orders INNER JOIN Customers ON Orders.CustomerID = Customers.CustomerID";
echo "<table border='1'>
<thead>
<tr>
<th>Order ID</th>
<th>Customer Name</th>
</tr>
</thead>";
$res= mysqli_query($conn, $query);
while($r= mysqli_fetch_array($res))
{
    extract($r);
    echo "<tr><td>$OrderID</td><td>$CustomerName</td></tr>";
}
echo "</table>";
?>