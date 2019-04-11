<!DOCTYPE html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" media="screen" href="css/companyinfo1.css">
<script src="js/companyinfo.js"></script>
<title>Company Details</title>
</head>
<body>
<div class="row">
  <div class="col-md-6 mb-3">
  	<label for="details">Company Details</label>
      <select class="form-control form-control-lg" name="details" id="details">
          <?php
          require_once "connection.php";
          $query="select * from tbcompany";
          $details=mysqli_query($dbconn,$query);
          echo "<option>Information about all the companies</option>";   
          ?>
      </select>
      <input type="button" id="submit" name="submit" value="Submit">
      <div id="t1">
  </div>    
</body>
</html>