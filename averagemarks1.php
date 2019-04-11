<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Calculating Average Marks</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
if(isset($_REQUEST["b12"]))
{
    $marks1=$_REQUEST["ab1"];
    $marks2=$_REQUEST["ab2"];
    $marks3=$_REQUEST["ab3"];
    $marks4=$_REQUEST["ab4"];
    $marks5=$_REQUEST["ab5"];

    require_once "class31.php";
    $obj=new av();
    $obj->info($marks1,$marks2,$marks3,$marks4,$marks5);
    $obj->add();
}
?>
<form method="post" action="">
Physics <input type="text" name="ab1"><br/>
Chemistry <input type="text" name="ab2"><br/>
PHP <input type="text" name="ab3"><br/>
Javascript <input type="text" name="ab4"><br/>
HTML <input type="text" name="ab5"><br/>
<input type="submit" name="b12" value="Submit">
</form>
</body>
</html>