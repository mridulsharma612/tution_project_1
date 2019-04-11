<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'dbconfig.php';

$sq="select employees.lastname, count(orders.orderid) as NumberOfOrders FROM (Orders INNER JOIN Employees ON Orders.employeeid = employees.employeeid)GROUP BY lastname  having count(orders.orderid) > 5";
echo "<table border='1'>
<thead>
<tr>
<th>Last Name</th>
<th>Number Of Orders</th>
</tr>
</thead>";
$r= mysqli_query($conn, $sq);
while($row= mysqli_fetch_array($r))
{
    extract($row);
    echo "<tr><td>$lastname</td><td>$NumberOfOrders</td></tr>";   
}
echo "</table>";
?>