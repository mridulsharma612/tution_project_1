<?php
require_once "dbconfig.php";

$s="SELECT CustomerID,Country FROM Customers GROUP BY Country ORDER BY CustomerID ASC";
echo "<table border='1'>
<thead>
<tr>
<th>Customer ID</th>
<th>Country</th>
</tr>
</thead>";
$re=mysqli_query($conn,$s);
while($info=mysqli_fetch_array($re))
{
    extract($info);
    echo "<tr><td>$CustomerID</td><td>$Country</td></tr>";
}
  echo "</table>";
?>