<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>   
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/tbproduct23.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
	    <form method="post" action="">
        <div class="form-group col-md-4">
        <label >Select Products</label> 
        <select  class="form-control" id="products" name="products"> 
        <?php
        require_once "config.php";
        $qu="select * from tbproduct";
        $con=mysqli_query($connection,$qu);
        while($row=mysqli_fetch_array($con)){
            echo "<option value=".$row["id"].">".$row['product_name']."</option>";
        }  
        ?>
      </select>
      <input type="button" id="sub12" name="sub12" value="Show">
    </div>
    </div>
    </form>
    <div id="i1"></div> 
</body>
</html>