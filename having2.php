<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'dbconfig.php';

$sq="SELECT COUNT(id) as CustomerID, Country FROM Customers GROUP BY Country HAVING COUNT(id) > 5 ORDER BY COUNT(id) DESC";
echo "<table border='1'>
<thead>
<tr>
<th>CustomerID</th>
<th>Country</th>
</tr>
</thead>";
$r= mysqli_query($conn, $sq);
while($ou= mysqli_fetch_array($r))
{
    extract($ou);
    echo "<tr><td>$CustomerID</td><td>$Country</td></tr>";
}
echo "</table>";
?>