<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
</head>
<body>
        <?php
        require_once "connection.php";
        
        $b11=$_REQUEST["b11"];
        $b12=$_REQUEST["b12"];
        $b13=$_REQUEST["b13"];
        $b14=$_REQUEST["b14"];
        $b15=$_REQUEST["b15"];
        
        $sql="update tbproduct set product_name='$b12', price='$b13', quantity='$b14', cid=$b15 where id='$b11'";
        mysqli_query($dbconn,$sql);
        echo "Record is Updated!";
        ?>    
</body>
</html>



