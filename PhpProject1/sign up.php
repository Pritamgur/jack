<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
       
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="signup.css" rel="stylesheet" type="text/css">
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
                
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
            </ul>
            </div>
        </div>
    </nav>
        <div class="container">
            <div class="col-xs-6 col-xs-offset-3">
                <form action ="databaseconnect.php" method = "post"  onsubmit="return validation()">
                    <br><br>      
            <h2><b>Sign Up</b></h2><br>
            
            <input type="text" class="form-control" placeholder="Enter your name" name="name" id="user" ><span id="username" class="text-danger" font-weight-bold></span><br>
            <input type="text" class="form-control" placeholder="Enter your email" name="email" id="email1" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"> <span id="useremail" class="text-danger" font-weight-bold></span><br>
            <input type="password" class="form-control" placeholder="password" name="psd" id="pass" <span id="userpass" class="text-danger" font-weight-bold></span><br>
            <input type="number" class="form-control" placeholder="contact" name="contact" id="cont"><span id="usercontact" class="text-danger" font-weight-bold></span><br>
            <input type="text" class="form-control" placeholder="city" name="city" id="city1"><span id="usercity" class="text-danger" font-weight-bold></span><br>
            <input type="text" class="form-control" placeholder="address" name="add" id="add1"><span id="useraddr" class="text-danger" font-weight-bold></span><br>
            <input type="text" class="form-control" placeholder="State" name="state" id="add1"><span id="useraddr" class="text-danger" font-weight-bold></span><br>
            <input type="number" class="form-control" placeholder="Zip" name="zip" id="add1"><span id="useraddr" class="text-danger" font-weight-bold></span><br>
            <input type="submit" name="register" target="_self"> 
              </form>
            
            
            
            </div>
    </div>
   
    
         
            <script type="text/javascript">
                function validation(){
                    var con_user = document.getElementById('user').value;
                    var con_email = document.getElementById('email1').value;
                    var con_passwd = document.getElementById('pass').value;
                    var con_contact = document.getElementById('cont').value;
                    var con_city = document.getElementById('city1').value;
                    var con_addr = document.getElementById('add1').value;
                    if(con_user== "")
                    {
                        document.getElementById('username').innerHTML="**Username Required";
                        return false;
                    }
                       if(con_email== "")
                    {
                        document.getElementById('useremail').innerHTML="**Email Required";
                        return false;
                    }
                    if(con_passwd== "")
                    {
                        document.getElementById('userpass').innerHTML="**Password Required";
                        return false;
                    }
                    if(con_contact== "")
                    {
                        document.getElementById('usercontact').innerHTML="**Contact Number Required";
                        return false;
                    }
                    if(con_city== "")
                    {
                        document.getElementById('usercity').innerHTML="**City Name Required";
                        return false;
                    }
                    if(con_addr== "")
                    {
                        document.getElementById('useraddr').innerHTML="**Valid Address Required";
                        return false;
                    }
                 
                }
            </script>
            <br> <br>
       <?php
   require 'footer.php';
   ?>
</body>
</html>

