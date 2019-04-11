<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" media="screen" href="css/company_questions.css">
<script src="js/company_questions.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
	    <form class="col-md-4">
	        <label>Company Name</label>
	        <select class="form-control select2" id="details" name="details">
                <?php
                require_once "config.php";
                $sq="select * from tbcompany";
                $res=mysqli_query($connection,$sq);
                while($row = mysqli_fetch_array($res)) {
             echo  "<option>".$row['company_name']."</option>";
                } 
               ?>
            </select>
           <input type="button" id="subm" name="subm" value="Submit">
        </form>
     </div>
     <div id="a1"></div>
</div>
</body>
</html>