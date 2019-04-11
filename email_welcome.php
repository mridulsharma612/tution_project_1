<?php
session_start();
if(isset($_SESSION["u"]))
{
  echo "Welcome ".$_SESSION["u"]."<br/>";
?>    
<a href="#">My account</a>
<a href="#">Inbox</a>
<a href="#">Change Password</a>
<a href="log-out.php">Logout</a>
<?php
}
else
{
    header('location:email.php');
}
?>