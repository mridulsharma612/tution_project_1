<?php
require_once "config.php";

$companyusername=$_REQUEST["companyusername"];

$qu="select * from tbquestions where company_username='$companyusername'";

$op=mysqli_query($connection,$qu);

while($row=mysqli_fetch_array($op))
{
    extract($row);
    echo "Company ID: $company_id"."<br>"." Q: $question"."<br>"." Option 1: $option_1"."<br>"." Option 2: $option_2"."<br>"." Option 3: $option_3"."<br>"." Option 4: $option_4"."<br>"." Answer: $answer<br>";
}
?>