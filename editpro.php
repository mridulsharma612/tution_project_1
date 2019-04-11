<?php
require_once "config.php";
session_start();
echo "<form action='' method='post'>";
$companyusername=$_SESSION["companyuname"];
$sel="select * from tbcompany where company_username='$companyusername'";
$output=mysqli_query($connection,$sel);
while($row=mysqli_fetch_assoc($output))
{
    extract($row);

    echo "Company Name <input type='text' name='a1' value='$company_name'><br/>";
    echo "Company Director <input type='text' name='a2' value='$company_director'><br/>";
    echo "Company Email <input type='email' name='a3' value='$company_email'><br/>";
    echo "Company Address <input type='text' name='a4' value='$company_address'><br/>";
    echo "Company Contact <input type='text' name='a5' value='$company_contact'><br/>";
    echo "Company Username <input type='text' name='a6' value='$company_username'><br/>";
    echo "Company Password <input type='password' name='a7' value='$company_password'><br/>";
    echo "<input type='submit' name='sub4' value='Submit'>";
}
if(isset($_REQUEST["sub4"]))
{
    $cn=$_REQUEST["a1"];
    $cd=$_REQUEST["a2"];
    $ce=$_REQUEST["a3"];
    $ca=$_REQUEST["a4"];
    $co=$_REQUEST["a5"];
    $cu=$_REQUEST["a6"];
    $cp=$_REQUEST["a7"];
  $sq="update tbcompany set company_name='$cn', company_director='$cd', company_email='$ce', company_address='$ca', company_contact='$co', company_username='$cu', company_password='$cp' where company_username='$company_username'";
  mysqli_query($connection,$sq);
}
?>