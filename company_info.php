<!DOCTYPE html>
<html>
<head>
<title>Showing information about companies</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<script src="js/company_info.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
	    <form class="col-md-4">
	        <label>Showing information about companies</label>
	        <select class="form-control select2" id="details" name="details">
             <?php
             require_once "connection.php";
             $sql="select * from tbcompany";
             $info=mysqli_query($dbconn,$sql);
             echo "<option>Company Details</option>";  
             ?>
            </select>
            <input type="button" id="submit" name="submit" value="Submit">
            <div id="g1">
            </div>    
        </form>
 	</div>
</div>
</body>
</html>