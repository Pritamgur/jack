<!DOCTYPE html>
<?php


$user = 'root';
$pass='';
$db='lifestyle';
$conn = new mysqli('localhost',$user,$pass,$db) or die("Aborted");

$sql = "SELECT Product_title, Product_price FROM product where cat_id=4";
$result = mysqli_query($conn, $sql);
$a= mysqli_fetch_array($result);
$b= mysqli_fetch_array($result);
$c= mysqli_fetch_array($result);
$d= mysqli_fetch_array($result);
$e= mysqli_fetch_array($result);
$f= mysqli_fetch_array($result);
$g= mysqli_fetch_array($result);
$h= mysqli_fetch_array($result);
$i= mysqli_fetch_array($result);
$j= mysqli_fetch_array($result);
$k= mysqli_fetch_array($result);
$l= mysqli_fetch_array($result);

mysqli_close($conn);
?>
<html>
    <head>
        <title> Products </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="product.css" rel="stylesheet" type="text/css">
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
                <a href="userhome.php" class="navbar-brand">Lifestyle Store</a>
            </div>
            <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="nav navbar-nav navbar-right">
                
                <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span>settings</a></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>logout</a></li>

            </ul>
            </div>
        </div>
    </nav>
        <div class="container pad2">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p> We have the best Shoess, watches and shirts for you. No need to hunt around, we have all in one place </p>
            </div>
            
        </div>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    
                    <div class="thumbnail">
                        <a href="shoesdetails.php?id=53">  <img style="height:170px" src="./products/Shoes/6-klicker-blue.jpeg" alt="Shoes"></a>
                        <div class="caption"><h3><?php echo $a['Product_title'].'</br>';?></h3>
                            <p> $. <?php echo $a['Product_price'].'</br>';?></p><p style="text-decoration: line-through;"> $ 2499 </p>
                        </div>
                    </div>
                   
                </div>
                <div class="col-md-3 col-sm-6">
                 <div class="thumbnail">
                     <a href="shoesdetails.php?id=54"><img style="height:170px" src="./products/Shoes/aadi-tan-original.jpeg"  alt="Shoes" ></a>
                        <div class="caption"><h3><?php echo $b['Product_title'].'</br>';?></h3>
                            <p> $. <?php echo $b['Product_price'].'</br>';?></p><p style="text-decoration: line-through;"> $ 2999 </p>
                            
                        </div>
                       
                    </div>
                    </div>
                   
                
                <div class="col-md-3 col-sm-6">
                    
                    <div class="thumbnail">
                        <a href="shoesdetails.php?id=55"><img style="height:170px" src="./products/Shoes/blue-denim.jpeg"   alt="Shoes"></a>
                        <div class="caption"><h3><?php echo $c['Product_title'].'</br>';?></h3>
                            <p> $. <?php echo $c['Product_price'].'</br>';?></p><p style="text-decoration: line-through;"> $ 1099 </p>
                        </div>
                    </div>
                   
                </div>
                <div class="col-md-3 col-sm-6">
                 <div class="thumbnail">
                     <a href="shoesdetails.php?id=56"><img style="height:170px" src="./products/Shoes/blue-original.jpeg"  alt="Shoes" ></a>
                        <div class="caption"><h3><?php echo $d['Product_title'].'</br>';?></h3>
                            <p> $. <?php echo $d['Product_price'].'</br>';?></p><p style="text-decoration: line-through;"> $ 1099 </p>
                            
                        </div>
                       
                    </div>
                    </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    
                    <div class="thumbnail">
                        <a href="shoesdetails.php?id=57"><img style="height:170px" src="./products/Shoes/camel-woodland.jpeg"   alt="Shoes"></a>
                        <div class="caption"><h3><?php echo $e['Product_title'].'</br>';?></h3>
                            <p> $. <?php echo $e['Product_price'].'</br>';?></p><p style="text-decoration: line-through;"> $ 2199 </p>
                        </div>
                    </div>
                   
                </div>
                <div class="col-md-3 col-sm-6">
                 <div class="thumbnail">
                     <a href="shoesdetails.php?id=58"><img style="height:170px" src="./products/Shoes/camro-porche-black.jpeg"  alt="Shoes" ></a>
                        <div class="caption"><h3><?php echo $f['Product_title'].'</br>';?></h3>
                            <p> $. <?php echo $f['Product_price'].'</br>';?></p><p style="text-decoration: line-through;"> $ 1299 </p>
                            
                        </div>
                       
                    </div>
                    </div>
                   
                
                <div class="col-md-3 col-sm-6">
                    
                    <div class="thumbnail">
                        <a href="shoesdetails.php?id=59"><img style="height:170px" src="./products/Shoes/core-espana-tan-original.jpeg"  alt="Shoes"></a>
                        <div class="caption"><h3><?php echo $g['Product_title'].'</br>';?></h3>
                            <p> $. <?php echo $g['Product_price'].'</br>';?></p><p style="text-decoration: line-through;"> $ 1299 </p>
                        </div>
                    </div>
                   
                </div>
                <div class="col-md-3 col-sm-6">
                 <div class="thumbnail">
                     <a href="shoesdetails.php?id=60"> <img style="height:170px" src="./products/Shoes/lee-cooper-black.jpeg"  alt="Shoes" ></a>
                        <div class="caption"><h3><?php echo $h['Product_title'].'</br>';?></h3>
                            <p> $. <?php echo $h['Product_price'].'</br>';?></p><p style="text-decoration: line-through;"> $ 3999 </p>
                            
                        </div>
                       
                    </div>
                    </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    
                    <div class="thumbnail">
                        <a href="shoesdetails.php?id=61"><img style="height:170px" src="./products/Shoes/red-chief-black-original.jpeg"   alt="Shoes"></a>
                        <div class="caption"><h3><?php echo $i['Product_title'].'</br>';?></h3>
                            <p> $. <?php echo $i['Product_price'].'</br>';?></p><p style="text-decoration: line-through;"> $ 1999 </p>
                        </div>
                    </div>
                   
                </div>
                <div class="col-md-3 col-sm-6">
                 <div class="thumbnail">
                     <a href="shoesdetails.php?id=62"> <img style="height:170px" src="./products/Shoes/reebok-green.jpeg"  alt="Shoes" ></a>
                        <div class="caption"><h3><?php echo $j['Product_title'].'</br>';?></h3>
                            <p> $. <?php echo $j['Product_price'].'</br>';?></p><p style="text-decoration: line-through;"> $ 2699 </p>
                            
                        </div>
                       
                    </div>
                    </div>
                   
                
                <div class="col-md-3 col-sm-6">
                    
                    <div class="thumbnail">
                        <a href="shoesdetails.php?id=63">  <img style="height:170px" src="./products/Shoes/royal-blue-puma.jpeg"  alt="Shoes"></a>
                        <div class="caption"><h3><?php echo $k['Product_title'].'</br>';?></h3>
                            <p> $. <?php echo $k['Product_price'].'</br>';?></p><p style="text-decoration: line-through;"> $ 3299 </p>
                        </div>
                    </div>
                   
                </div>
                <div class="col-md-3 col-sm-6">
                 <div class="thumbnail">
                     <a href="shoesdetails.php?id=64"> <img style="height:170px" src="./products/Shoes/vans-canvas-dark.jpeg"  alt="Shoes" ></a>
                        <div class="caption"><h3><?php echo $l['Product_title'].'</br>';?></h3>
                            <p> $. <?php echo $l['Product_price'].'</br>';?></p><p style="text-decoration: line-through;"> $ 1699 </p>
                            
                        </div>
                       
                    </div>
                    </div>
            </div>
            
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
                    