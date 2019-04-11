<form method="post">
    Enter New Password<input type="text" name="t1"/>
   Confirm Password <input type="text" name="t2"/>
    <input type="submit" name="b3" value="submit"/>



</form>




<?php
if(isset($_REQUEST["b3"]))
{
require_once "connection.php";
$pass=($_POST['t1']);
$cpass=($_POST['t2']);
if($pass==$cpass)
{
    session_start();
$username=$_SESSION["user"];
    $sql="update tblogin set password='$pass' where username='$username'";
    mysqli_query($dbconn,$sql);
}
else{
    echo "Password & Confirm password";
}

}
?>