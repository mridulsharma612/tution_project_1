<!DOCTYPE html>
<html>
<head>
<title>Single Company Details</title>    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" media="screen" href="css/companydetails.css">
<script src="js/companydetails.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
	    <form class="col-md-4">
	        <label>Single Company Details</label>
	        <select class="form-control select2" name="info" id="info">
                <?php
                require_once "connection.php";

                $sql="select * from tbcompany";
                $output=mysqli_query($dbconn,$sql);
                while($row = mysqli_fetch_array($output)) {
	           echo "<option>".$row['id']."</option>";
            ?>
            <?php
                }
            ?>
           <input type="button" name="submit" id="submit" value="Submit">
           <div id="a1">
            </div>     
	    </form>
 	</div>
</div>
</body>
</html>