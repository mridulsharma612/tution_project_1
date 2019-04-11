<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">	
<title>Placementcell Registration Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">		
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>	
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"/>
<script>
$(document).ready(function(){
  $("#b1").click(function(){
     $rno = $("#s1").val();

     $cid = $("#s2").val();
    
     $.post("addcompany.php", {
          rno:$rno,
          cid:$cid
        },
        function(info,status){
          $("#d1").html(info);
    });
  });
});

    </script>

</head>


<?php
require_once "connection.php";

$query="select * from tbstudent";

$output=mysqli_query($dbconn,$query);
echo "<select name='s1' id='s1'>";
while($row=mysqli_fetch_array($output))
{
    extract($row);
   echo "<option>$roll_no</option>";
}
echo "</select>";
echo "<br>";

$query="select * from tbcompany";

$output=mysqli_query($dbconn,$query);
echo "<select name='s2' id='s2'>";
while($row=mysqli_fetch_array($output))
{
    extract($row);
   echo "<option>$id</option>";
}
echo "</select>";
echo "<br>";
echo "<input type='button' name='b1' id='b1' value='Add'/>";
?>

<div id='d1'>


</div>