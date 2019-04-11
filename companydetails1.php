<?php
require_once "connection.php";

$i=$_REQUEST["i"];

$query="select * from tbcompany where id=$i";

$result=mysqli_query($dbconn,$query);

echo "<table id=mytable class=table table-bordred table-striped>";
while($row=mysqli_fetch_array($result))
{
    extract($row);
    echo "<tr><td>$id</td><td>$company_name</td><td>$company_director</td><td>$company_email</td><td>$company_address</td><td>$company_contact</td><td>$company_username</td><td>$company_password</td></tr>";
}
echo "</table>";
?>