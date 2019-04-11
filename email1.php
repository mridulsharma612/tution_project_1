<?php
require_once "db.php";
$user=($_REQUEST['user']);
$emadd=($_REQUEST['emadd']);
$pwd=($_REQUEST['pwd']);

$qu="SELECT ID, username, email, password FROM users WHERE username='$user'";
$o=mysqli_query($connection,$qu);
$r=mysqli_fetch_assoc($o);

if($r["password"]==$pwd){
    session_start();
    $_SESSION["u"]=$user;
    echo "Welcome to your account";
 } else {
    echo "Error"; 
 }
?>