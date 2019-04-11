<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/lumen/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/category1.css">
</head>
<body>
<div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="list">
      <?php
      require_once "connection.php";
      
      $cat=$_REQUEST["cat"];

      $q="select * from tbproduct where cid=$cat";

      $result=mysqli_query($dbconn,$q);

      echo "<table class='table table-striped table-bordered table-list'>
      
      <thead>
      <tr>
         <th class='avatar'>ID</th>
         <th>Product Name</th>
         <th>Price</th>
         <th>Quantity</th>
         <th>CID</th>
         </tr>
         </thead>";
      while($r=mysqli_fetch_array($result))
      {
          extract($r);
          echo "<tr><td>$id</td><td>$product_name</td><td>$price</td><td>$quantity</td><td>$cid</td></tr>";
      }
      echo "</table>";  
      ?>
</body>
</html>