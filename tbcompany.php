<?php
require_once "connection.php";

$cn=$_REQUEST["cn"];
$cd=$_REQUEST["cd"];
$ce=$_REQUEST["ce"];
$ca=$_REQUEST["ca"];
$cco=$_REQUEST["cco"];
$cu=$_REQUEST["cu"];
$cp=$_REQUEST["cp"];

$qu="INSERT into tbcompany(company_name,company_director,company_email,company_address,company_contact,company_username,company_password)values('$cn','$cd','$ce','$ca',$cco,'$cu','$cp')";
mysqli_query($dbconn,$qu);
echo "Company has been successfully registered!";
?>