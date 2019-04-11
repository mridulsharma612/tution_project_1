<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" media="screen" href="css/tbupdate.css">
<script src="js/tbupdate.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
	    <form class="col-md-4" method="post" action="">
	        <label>Products</label>
	        <select class="form-control select2" id="up" name="up">
             <?php
             require_once "config.php";
             $qu="select * from tbproduct";
             $ou=mysqli_query($connection,$qu);
             while($row=mysqli_fetch_array($ou)){
                 echo "<option value=".$row["id"].">".$row['product_name']."</option>";
             }
             ?>
             </select>
             <input type="button" id="u" name="u" value="Update">
             </form>
            </div>
            </div> 
            <div id="info1"></div>
            <div id="info2"></div>
</body>
</html>