<?php
/**
 * Created by PhpStorm.
 * User: Jimmy Arthur
 * Date: 1/21/2019
 * Time: 9:17 PM
 */
require_once 'dbconfig.php';

$s="SELECT Customers.CustomerName, Orders.OrderID FROM Customers LEFT JOIN Orders ON Customers.CustomerID=Orders.CustomerID ORDER BY Customers.CustomerName";

echo"<table border='1'>
<thead>
<tr>
<th>CustomerName</th>
<th>OrderID</th>
</tr>
</thead>";
$ro= mysqli_query($conn, $s);
while($row= mysqli_fetch_array($ro))
{
    extract($row);
    echo "<tr><td>$CustomerName</td><td>$OrderID</td></tr>";
}
echo "</table>"; 
?>
