<<!DOCTYPE html>
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
     <link href="cart.css" rel="stylesheet" type="text/css">
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
                <a href="index.html" class="navbar-brand">Lifestyle Store</a>
            </div>
            <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>cart</a></li>
                <li><a href="setting.php"><span class="glyphicon glyphicon-user"></span>settings</a></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>logout</a></li>

            </ul>
            </div>
        </div>
    </nav>
        <div class="container pad">
            <table class="table table-striped">
                <tbody>
                    
                    <tr>
                        <th>Item Number</th>
                        <th>Item Name</th>
                         <th>Price</th>
                         <th>      </th>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>Rs 0/- </td>
                        <td>
                            <button class="btn btn-primary">
                                Confirm Order
                            </button>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
            
        </div>
        <footer>
                <div class="container">
                    <center>
                      Copyright © Lifestyle Store. All Rights Reserved|Contact Us: +91 90000 00000
                   </center>
                </div>
    </footer>
    </body>
</html>

