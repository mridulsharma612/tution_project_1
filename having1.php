<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'dbconfig.php';

$sql="SELECT COUNT(id) as CustomerID, City FROM Customers GROUP BY City HAVING COUNT(id)> 1";

echo "<table border='1'>
<thead>
<tr>
<th>CustomerID</th>
<th>City</th>
</tr>
</thead>";
$rs=mysqli_query($conn, $sql);
while($row= mysqli_fetch_array($rs))
{
    extract($row);
    echo "<tr><td>$CustomerID</td><td>$City</td></tr>";
}
echo "</table>";
?>