<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.-->
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
    <link href="index.css" rel="stylesheet" type="text/css">
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
                <a href="#" class="navbar-brand">Lifestyle Store</a>
            </div>
            <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="sign up.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
            </ul>
            </div>
        </div>
    </nav>
    <div id="banner-image">
        <div class="container">
           
            <div id="banner_content">
                 <h1> We sell lifestyle</h1>
                        <P> Flat 40% OFF on premium brands</p>
                        <a href="login.php" class="btn btn-danger btn-lg active">Shop Now</a>
            </div>
            
        </div>
    </div>
    <?php
   require 'footer.php';
   ?>
</body>
</html>