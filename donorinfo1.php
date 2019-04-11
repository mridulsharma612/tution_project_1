<?php
require_once "database.php";
$di=$_POST["s1"];

$qu="select * from donarregistration where donar_id=$di";

$r=mysqli_query($connection,$qu);

echo " <table class='table table-striped table-bordered table-list'>
<thead>
<tr>
<th>Donor ID</th>
<th>Name</th>
<th>Gender</th>
<th>Age</th>
<th>Mobile</th>
<th>B ID</th>
<th>Email</th>
<th>Password</th>
<th>Pic</th>
</tr>
</thead>";
while($row=mysqli_fetch_array($r))
{
    extract($row);
    echo "<tr><td>$donar_id</td><td>$name</td><td>$gender</td><td>$age</td><td>$mobile</td><td>$b_id</td><td>$email</td><td>$pwd</td><td>$pic</td></tr>";
}
echo "</table>";
?>