<?php
require_once "connection.php";

$tab="select * from tbstudent";

$tab=mysqli_query($dbconn,$tab);
echo "<table class=table table-hoverid=dev-table>";
while($row=mysqli_fetch_array($tab))
{
    extract($row);
    echo "<tr><td>$id</td><td>$roll_no</td><td>$first_name</td><td>$last_name</td><td>$email</td><td>$contact</td><td>$address</td><td>$tenth_marks</td><td>$twelfth_marks</td><td>$graduation_marks</td></tr> <br/>";
}
echo "</table>";
?>