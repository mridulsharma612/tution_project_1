<form method="post">
Company Username <input type="text" name="cuser" id="cuser"><br/>
Company Password <input type="password" name="pass" id="pass"><br/>
<input type="submit" name="sub1" value="Submit" id="sub1">
</form>
<?php
if(isset($_REQUEST["sub1"]))
{
    require_once "config.php";
    $companyusername=($_POST['cuser']);
    $companypassword=($_POST['pass']);

    $query="SELECT id,company_name,company_director,company_email,company_address,company_contact,company_username,company_password FROM tbcompany WHERE company_username='$companyusername'";
    $res=mysqli_query($connection,$query);
    $row=mysqli_fetch_assoc($res);

    if($row['company_password']==$companypassword){
        session_start();
        $_SESSION["companyuname"]=$companyusername;
        header('Location:profile.php');  
    } else {
        echo "Company Username or Password is incorrect!";
    }
}
?>