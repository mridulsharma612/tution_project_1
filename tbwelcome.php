<!DOCTYPE html>
<head>
<title>Welcome Page</title>
</head>
<body>
<div class="container">    
	<div id="navbar" class="navbar-collapse collapse">
	 <ul class="nav navbar-nav navbar-right">            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			  <span class="glyphicon glyphicon-user"></span>&nbsp;Hi <?php //echo $row['user']; ?>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;View Profile</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
              </ul>
            </li>
          </ul>
	</div>	
	<div class='alert alert-success'>
		<button class='close' data-dismiss='alert'>&times;</button>
		Hello, <br><br>Welcome to the members page.<br><br>
    </div>		
</div>
</body>
</html>