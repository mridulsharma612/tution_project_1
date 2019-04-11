<?php
require_once "pagination.php";

$ui=$_POST["ui"];

$sql="select * from user where id=$ui";

$output=mysqli_query($conn,$sql);

echo "<table class='table table-striped table-bordered table-list'>
<thead>
<tr>
<th>User ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Username</th>
</tr>
</thead>";
while($ro=mysqli_fetch_array($output))
{
    extract($ro);
    echo "<tr><td>$id</td><td>$firstname</td><td>$lastname</td><td>$username</td></tr>";
}
echo "</table>";
?>