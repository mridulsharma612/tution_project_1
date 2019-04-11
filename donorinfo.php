<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Donor Registration Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/jquery.min.js"></script>
    <script src="js/donorinfo.js"></script>
</head>
<body>
<div class="dropdown">
    <form method="post" action="" name="dd1" id="dd1">
 <label>Donor Information</label>
 <select name="s1" id="s1">
 <?php
 require_once "database.php";
 $sq="select * from donarregistration";
 $o=mysqli_query($connection,$sq);
 while($row=mysqli_fetch_array($o))
 {
 extract($row);
 echo "<option value=$donar_id>$name</option>";
 }     
 ?>
</select>
<input type="button" name="i1" id="i1" value="Info">
<div id="d1"></div>
</form>
</div>    
</body>
</html>