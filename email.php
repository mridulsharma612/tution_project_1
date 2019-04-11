<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Email Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/email.css">
    <script src="js/email.js"></script>
</head>

<body id="LoginForm">
    <div class="container">
        <h1 class="form-heading">Email Login</h1>
        <div class="login-form">
            <div class="main-div">
                <div class="panel">
                    <h2>Email Login</h2>
                </div>
                <form id="login" name="login" method="post" action="">

                    <div class="form-group">


                        <input type="text" class="form-control" id="user" name="user" placeholder="Username">

                    </div>
                    <div class="form-group">


                        <input type="email" class="form-control" id="emadd" name="emadd" placeholder="Email Address">

                    </div>

                    <div class="form-group">

                        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">

                    </div>
                    <input type="button" id="btn-login" name="btn-login" class="btn btn-primary" value="Login">
                </form>
            </div>

</body>

</html>