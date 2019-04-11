<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<?php
require_once "config.php";
$ide=$_REQUEST["ide"];
$o1=$_REQUEST["o1"];
$o2=$_REQUEST["o2"];
$o3=$_REQUEST["o3"];
$o4=$_REQUEST["o4"];
$an=$_REQUEST["an"];

$q="update tbquestions set option_1='$o1', option_2='$o2', option_3='$o3', option_4='$o4', answer='$an' where id=$ide";
mysqli_query($connection,$q);
?>
</body>
</html>