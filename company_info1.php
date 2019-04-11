<?php
require_once "connection.php";

$query="select * from tbcompany";

$output=mysqli_query($dbconn,$query);
echo "<table border='1' width='80%'>";
while($row=mysqli_fetch_array($output))
{
    extract($row);
   echo "<tr><td>$id</td> <td>$company_name</td>  <td>$company_director</td> <td>$company_email</td> <td>$company_address</td> <td>$company_contact</td> <td>$company_username</td>  <td>$company_password</td></tr> <br/>";
}
echo "</table>";
?>