<?php
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"tbproject");
$id=$_REQUEST["id"];
$sql="DELETE FROM tbcompany WHERE id=$id";
mysqli_query($conn,$sql);