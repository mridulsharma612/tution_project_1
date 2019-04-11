<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit Products</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/editproducts.css">
    <script src="js/editproducts2.js"></script>
</head>
<body>
<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h2 class="panel-title"><center>Edit User Data</center></h2>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form" method="post" action="" name="userd" id="userd">
                         <?php
                         require_once "connection.php";

                         $pr=$_REQUEST["pr"];

                         $qu="select * from tbproduct where id='$pr'";
                         
                         $res=mysqli_query($dbconn,$qu);
                         
                         while($row=mysqli_fetch_assoc($res))
                         {
                             extract($row);
                             echo "<input type='text' name='b11' id='b11' class='form-control input-sm' placeholder='ID' value='$id'><br/>";
                             echo "<input type='text' name='b12' id='b12'  class='form-control input-sm' placeholder='Product Name' value='$product_name'><br/>";
                             echo "<input type='text' name='b13' id='b13' class='form-control input-sm' placeholder='Price' value='$price'><br/>";
                             echo "<input type='text'  name='b14' id='b14' class='form-control input-sm' placeholder='Quantity' value='$quantity'><br/>";
                             echo "<input type='text' name='b15' id='b15' class='form-control input-sm' placeholder='CID' value='$cid'><br/>";
                             echo "<input type='button' name='b45' id='b45'  class='btn btn-info btn-block' value='Edit'>";
                         }
                         ?>
                         </form>
                        </div>
                  </div>
            </div>
     </div>
</div>              
</body>
</html>