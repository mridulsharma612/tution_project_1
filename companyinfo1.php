<?php
require_once "connection.php";

$sel="select * from tbcompany";

$queryconn=mysqli_query($dbconn,$sel);
echo "<table class=table table-bordered>";
while($row=mysqli_fetch_array($queryconn))
{
 extract($row);
 echo "<tr><td>$id</td><td>$company_name</td><td>$company_director</td><td>$company_email</td><td>$company_address</td><td>$company_contact</td><td>$company_username</td><td>$company_password</td></tr> <br/>";
}
echo "</table>";
?>