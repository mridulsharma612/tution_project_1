<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'dbconfig.php';

$sq="SELECT City FROM Customers UNION SELECT City FROM Customers UNION SELECT City FROM Suppliers ORDER BY city";
echo "<table border='1'>
<thead>
<tr>
<th>City</th>
</tr>
</thead>";
$r= mysqli_query($conn, $sq);
while($ro= mysqli_fetch_array($r))
{
    extract($ro);
    echo "<tr><td>$City</td></tr>";
}
echo "</table>";
?>