<?php
require_once "config.php";

$de=$_REQUEST["de"];

$qu="select * from tblogin where id='$de'";

$res=mysqli_query($connection,$qu);

while($row=mysqli_fetch_array($res))
{
    extract($row);
    echo "Password <input type='text' name='pass' value='$password'><br/>";
    echo "Security Question <input type='text' name='sq' value='$security_question'><br/>";
    echo "Security Answer <input type='text' name='sa' value='$security_answer'>";
}
?>