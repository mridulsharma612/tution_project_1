<?php
require_once "config.php";

$q=$_REQUEST["q"];

$sql="select * from tbquestions where id=$q";

$output=mysqli_query($connection,$sql);

while($row=mysqli_fetch_array($output))
{
    extract($row);
    echo "Option 1 <input type='text' name='op1' value='$option_1'><br/>";
    echo "Option 2 <input type='text' name='op2' value='$option_2'><br/>";
    echo "Option 3 <input type='text' name='op3' value='$option_3'><br/>";
    echo "Option 4 <input type='text' name='op4' value='$option_4'><br/>";
    echo "Answer <input type='text' name='ans' value='$answer'>";
}

?>