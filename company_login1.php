<?php
require_once "connection.php";
$ci=($_REQUEST['ci']);
$cu=($_REQUEST['cu']);
$pass=($_REQUEST['pass']);

$sql="SELECT id, company_name, company_director,company_email, company_address,  company_contact, company_username, company_password FROM tbcompany WHERE company_username='$cu'";
$res=mysqli_query($dbconn,$sql);
$ro=mysqli_fetch_assoc($res);

if($ro["company_password"]==$pass){
    session_start();
    $_SESSION["company_user"]=$cu;
    echo "Welcome to your account";
 } else {
    echo "Error"; 
 }
?>