<?php
$config=mysqli_connect("localhost","root","");
mysqli_select_db($config, "tbproject");
$companyname=$_REQUEST["companyname"];
$companydirector=$_REQUEST["companydirector"];
$companyemail=$_REQUEST["companyemail"];
$companyaddress=$_REQUEST["companyaddress"];
$companycontact=$_REQUEST["companycontact"];
$companyusername=$_REQUEST["companyusername"];
$companypassword=$_REQUEST["companypassword"];
$query="INSERT into tbcompany(company_name,company_director,company_email,company_address,company_contact,company_username,company_password)values('$companyname','$companydirector','$companyemail','$companyaddress',$companycontact,'$companyusername','$companypassword')";
mysqli_query($config,$query);
?>