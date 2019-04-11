<form action="" method="post">
New Password <input type="password" name="np" id="np"><br/>
Confirm Password <input type="password" name="cp" id="cp"><br/>
<input type="submit" name="sub2" id="sub2" value="Submit">
</form>
<?php
if(isset($_REQUEST["sub2"]))
{
    require_once "config.php";
    $newpassword=($_POST['np']);
    $confirmpassword=($_POST['cp']);
    if($newpassword==$confirmpassword)
   {
       session_start();
       $companyusername=$_SESSION["companyuname"];
       $up="update tbcompany set company_password='$newpassword' where company_username='$companyusername'";
       mysqli_query($connection,$up);
   } 
   else {
       echo "New Password and Confirm Password doesn't match!"; 
   }
}
?>