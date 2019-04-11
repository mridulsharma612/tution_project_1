<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'dbconfig.php';

$s="SELECT employees.lastname, COUNT(orders.orderid) As NumberOfOrders FROM Orders INNER JOIN Employees on orders.employeeid = employees.employeeid where lastname = 'Freehafer' or lastname='Cencini' GROUP BY lastname having count(orders.orderid) > 10";
echo  "<table border='1'>
<thead>
<tr>
<th>Last Name</th>
<th>Number Of Orders</th>
</tr>
</thead>";
$rs= mysqli_query($conn, $s);
while($ro= mysqli_fetch_array($rs))
{
    extract($ro);
    echo "<tr><td>$lastname</td><td>$NumberOfOrders</td></tr>";
}
echo "</table>";
?>