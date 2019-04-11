<?php
session_start();
if(isset($_SESSION["company_user"]))
{
    echo "Welcome ".$_SESSION["company_user"]."<br/>";
?>
<a href="changepwd.php">Change Password</a>
<a href="editpro.php">Edit Profile</a>
<a href="companyques.php">Company Questions</a>
<a href="employee.php">Employee Information</a>
<a href='logout.php'>Logout</a>
<?php
}
else
{
 header('company_login.php');   
}
?>