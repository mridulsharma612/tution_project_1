<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Finding Area of circle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php    
if(isset($_REQUEST["b1"]))
{
    $area=$_REQUEST["s1"];

    require_once "class41.php";
    $ob1=new circle();
    $ob1->sdata($area);
    $ob1->gdata();
}
?>
<form method="post" action="">
Find Area of circle <input type="text" name="s1"><br/>
<input type="submit" name="b1" value="Submit">
</form>
</body>
</html>