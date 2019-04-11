<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'dbconfig.php';

$qu="SELECT SupplierName FROM Suppliers WHERE EXISTS (SELECT ProductName FROM Products WHERE SupplierId = Suppliers.supplierId AND Price < 10)";
echo "<table border='1'>
<thead>
<tr>
<th>SupplierName</th>
</tr>
</thead>";
$ou= mysqli_query($conn, $qu);
while($r= mysqli_fetch_array($ou))
{
    extract($r);
    echo "<tr><td>$SupplierName</td></tr>";
}
echo "</table>";
?>