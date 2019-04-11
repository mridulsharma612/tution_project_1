<?php
    require_once "connection.php";
    $rno=$_REQUEST['rno'];
    $cid=$_REQUEST["cid"];
         $up="insert into insert_info(roll_no,company_id)values($rno,$cid)";
       mysqli_query($dbconn,$up);
?>