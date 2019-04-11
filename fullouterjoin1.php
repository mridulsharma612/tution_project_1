<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'dbconfig.php';

$s1="SELECT Customers.CustomerName, Orders.OrderID FROM Customers FULL OUTER JOIN Orders ON Customers.CustomerID=Orders.CustomerID ORDER BY Customers.CustomerName";

echo "<table border='1'>
<thead>
<tr>
<th>CustomerName</th>
<th>OrderID</th>
</tr>
</thead>";
$op=mysqli_query($conn, $s1);
while($show=mysqli_fetch_array($op))
{
    extract($show);
    echo "<tr><td>$CustomerName</td><td>$OrderID</td></tr>";
}
   echo "</table>";
?>