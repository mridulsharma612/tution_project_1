<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <script src="js/company_login.js"></script>
</head>
<body>
<div class="form">
  <div id="login">   
          <h1>Company Login</h1>
          
          <form action="" name="ca" id="ca" method="post" autocomplete="off">
          
            <div class="field-wrap">
            <label>
              Company ID<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="ci" id="ci">
          </div>
          <div class="field-wrap">
            <label>
              Company Username<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="cu" id="cu">
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="pass" id="pass">
          </div>    
          <input type="button" class="button button-block" id="log" value="Login" name="log">
          
          </form>

        </div>

      
</div> <!-- /form -->
</body>
</html>