<?php
require_once 'dbconfig.php';

$sq="SELECT CustomerID,Country FROM Customers GROUP BY Country ORDER BY CustomerID DESC";
echo "<table border='1'>
      <thead>
      <tr>
      <th>Customer ID</th>
      <th>Country</th>
      </tr>
      </thead>";
$r= mysqli_query($conn, $sq);
while($ro=mysqli_fetch_array($r))
{
    extract($ro);
    echo "<tr><td>$CustomerID</td><td>$Country</td></tr>";
}
   echo "</table>"; 
?>
