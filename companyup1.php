<!DOCTYPE html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/companyup2.js"></script>
</head>    
<body>
<?php
require_once "connection.php";

$com=$_REQUEST["com"];

$q="select * from tbcompany where id='$com'";

$r=mysqli_query($dbconn,$q);

while($row=mysqli_fetch_assoc($r))
{
    extract($row);
    echo "ID <input type='text' name='a1' id='a1' value='$id'><br/>";
    echo "Company Name <input type='text' name='a2' id='a2' value='$company_name'><br/>";
    echo "Company Director <input type='text' name='a3' id='a3' value='$company_director'><br/>";
    echo "Company Email <input type='email' name='a4' id='a4' value='$company_email'><br/>";
    echo "Company Address <input type='text' name='a5' id='a5' value='$company_address'><br/>";
    echo "Company Contact <input type='text' name='a6' id='a6' value='$company_contact'><br/>";
    echo "Company Username <input type='text' name='a7' id='a7' value='$company_username'><br/>";
    echo "Company Password <input type='password' name='a8' id='a8' value='$company_password'><br/>";
    echo "<input type='button' id='e2' name='e2' value='Edit'>";
}
?>
</body>
</html>