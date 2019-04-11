<form action="" method="post">
New Password <input type="password" id="np" name="np"><br/>
Confirm Password <input type="password" id="cp" name="cp"><br/>
<input type="submit" id="sub1" name="sub1" value="Submit">
</form>
<?php
if(isset($_REQUEST["sub1"]))
{
    require_once "connection.php";
    $password=($_POST['np']);
    $confirmpassword=($_POST['cp']);
    if($password==$confirmpassword)
    {
        session_start();
        $username=$_SESSION["uname"];
        $sql="update tblogin set password='$password' where username='$username'";
        mysqli_query($dbconn,$sql);
    }
    else {
        echo "Password and Confirm Password doesn't match!";
    }
}
?>