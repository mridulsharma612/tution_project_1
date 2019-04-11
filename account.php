<?php
session_start();
if(isset($_SESSION["user"]))
{
    echo "Welcome ".$_SESSION["user"]."<br/>";
?>
<a href="changepwd.php">Change Password</a>
<?php
}
else
{
    header('Location:signin.php');
}
?>
