<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'dbconfig.php';

$sql="SELECT Orders.OrderID, Customers.CustomerName FROM Orders INNER JOIN Customers ON Orders.CustomerID = Customers.CustomerID";

echo "<table border='1'>
<thead>
<tr>
<th>OrderID</th>
<th>CustomerName</th>
</tr>
</thead>";
$o=mysqli_query($conn,$sql);
while($ro= mysqli_fetch_array($o))
{
    extract($ro);
    echo "<tr><td>$OrderID</td><td>$CustomerName</td></tr>";
}
echo "</table>";
?>