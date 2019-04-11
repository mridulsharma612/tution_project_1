<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Information</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="js/userdetails.js"></script>
</head>
<body>
<div class="row">
  <div class="col-md-6 mb-3">
    <form action="" method="post" name="ud" id="ud">
  	<label>User Details</label>    
    <select class="form-control form-control-lg" name="ui" id="ui">   
    <?php
    require_once "pagination.php";
    $qu="select * from user";
    $res=mysqli_query($conn,$qu);
    while($row=mysqli_fetch_array($res))
    {
      extract($row);
      echo "<option value=$id>$firstname</option>";  
    } 
    ?>
   </select>
   <input type="button" id="sub1" name="sub1" value="Details">
   <div id="ab1"></div>
   </form>
   </div>
   </div> 
</body>
</html>