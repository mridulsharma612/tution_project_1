<?php
require_once "dbconfig.php";

$q="SELECT CustomerID, Country FROM Customers GROUP BY Country";

$res=mysqli_query($conn,$q);
echo "<table border='1'> 
      <thead>
      <tr> 
      <th>Customer ID</th>
      <th>Country</th>
      </tr>
      </thead> ";
while($row=mysqli_fetch_array($res))
{
    extract($row);
    echo "<tr><td>$CustomerID</td><td>$Country</td></tr>";
}
echo "</table>";
?>