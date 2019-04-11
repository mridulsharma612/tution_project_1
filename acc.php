<?php
session_start();
if(isset($_SESSION["uname"]))
{
  echo "Welcome ".$_SESSION["uname"]."<br/>";
?>
<a href="cp.php">Change Password</a>
<a href="edit.php">Edit Profile</a>
<?php
}
else
{
 header('signin_session.php');
}
?>