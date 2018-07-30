<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
     <head>
    <title>Lifestyle Store </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="login.css" rel="stylesheet" type="text/css">
     </head>
    <body>
         <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand">Lifestyle Store</a>
            </div>
            <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="Sign up.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
               
            </ul>
            </div>
        </div>
    </nav>
   <div class="container pad">
       <div class="col-xs-6 col-xs-offset-3">
        <div class="panel panel-primary ">
            <div class="panel-heading">
                <h4> Login</h4>
                
            </div>
            <div class="panel-body">
                <div class="text-warning">
                <p> Login to make a purchase </p>
            </div>
            <form action="userlogin.php"  method="post" id="nameform">
                <div class="form-group">
                    <input type="text" placeholder="Enter your email" name="email" required >
                </div>
                 <div class="form-group">
                     <input type="password" placeholder="Enter your password" name="password" required>
                </div>
                
            </form>
                <button class="btn btn-primary" form="nameform" name="Submit" target="_self">
                    Login
                </button>
        </div>
            <div class="panel-footer">Don't have an account?<a class="text-primary" href="sign up.php"> Register</a></div>
        </div>
       </div>
    </div>
         <?php
   require 'footer.php';
   ?>
    </body>
</html>
