<?php
require_once "connection.php";
$username=($_POST['username']);
$password=($_POST['password']);

$sql="SELECT id, username, password, security_question, security_answer FROM tblogin WHERE username='$username'";
$result=mysqli_query($dbconn,$sql);
$row = mysqli_fetch_assoc($result);

if($row['password']==$password){
    echo "ok";
} else {
    echo "username or password doesn't exist.";
}
?>