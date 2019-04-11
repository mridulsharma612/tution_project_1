<?php
require_once "connection.php";
session_start();
echo "<form>";
$username=$_SESSION["uname"];
$sql="select * from tblogin where username='$username'";
$res=mysqli_query($dbconn,$sql);
while($row=mysqli_fetch_assoc($res)) 
{
   extract($row);
   
  echo "Username <input type='text' name='t1' value='$username'><br/>";
  echo "Password <input type='password' name='t2' value='$password'><br/>";
  echo "Security Question <input type='text' name='t3' value='$security_question'><br/>";
  echo "Security Answer <input type='text' name='t4' value='$security_answer'><br/>";
  echo "<input type='submit' name='sub2' value='Submit'>";
}
if(isset($_REQUEST["sub2"]))
{
    $sq=$_REQUEST["t3"];
    $sa=$_REQUEST["t4"];
  $query="update tblogin set  security_question='$sq', security_answer='$sa' where username='$username'";
  mysqli_query($dbconn,$query);
}   
?>