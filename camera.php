<!DOCTYPE html> 
<?php
session_start();

$user = 'root';
$pass='';
$db='lifestyle';
$conn = new mysqli('localhost',$user,$pass,$db) or die("Aborted");

$sql = "SELECT Product_title, Product_price FROM product where Cat_id=2;";
$result = mysqli_query($conn, $sql);
$a= mysqli_fetch_array($result);
$b= mysqli_fetch_array($result);
$c=mysqli_fetch_array($result);
$d=mysqli_fetch_array($result);
$e=mysqli_fetch_array($result);
$f=mysqli_fetch_array($result);
$g=mysqli_fetch_array($result);
$h=mysqli_fetch_array($result);
$i=mysqli_fetch_array($result);
$j=mysqli_fetch_array($result);
$k=mysqli_fetch_array($result);
$l=mysqli_fetch_array($result);
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
                <p> We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place </p>
            </div>
            
        </div>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    
                    <div class="thumbnail">
                        <a href="cameradetails.php?id=1"> <img style="height:170px" src="./products/Cameras/canona3300.jpeg"   alt="camera"></a>
                        <div class="caption"><h3><?php echo $a['Product_title'].'</br>';?></h3>
                            <p> $ <?php echo $a['Product_price'].'</br>';?></p><p style="text-decoration: line-through;">$ 3599 </p>
                        </div>
                    </div>
                   
                </div>
                <div class="col-md-3 col-sm-6">
                 <div class="thumbnail">
                     <a href="cameradetails.php?id=2">  <img style="height:170px" src="./products/Cameras/canon-eos-1300d.jpeg"  alt="camera" ></a>
                        <div class="caption"><h3><?php echo $b['Product_title'].'</br>';?></h3>
                            <p> $ <?php echo $b['Product_price'].'</br>';?></p><p style="text-decoration: line-through;">$ 3599 </p>
                            
                        </div>
                       
                    </div>
                    </div>
                   
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cameradetails.php?id=3"> <img style="height:170px" src="./products/Cameras/canon-eos-1500d.jpeg" alt="camera"></a>
                        <div class="caption">
                            <h3><?php echo $c['Product_title'].'</br>';?></h3>
                            <p> $ <?php echo $c['Product_price'].'</br>';?></p><p style="text-decoration: line-through;">$ 4599 </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cameradetails.php?id=4">  <img style="height:170px" src="./Products/Cameras/d-810-nikon.jpeg" alt="camera"></a>
                        <div class="caption">
                            <h3><?php echo $d['Product_title'].'</br>';?></h3>
                            <p> $ <?php echo $d['Product_price'].'</br>';?></p><p style="text-decoration: line-through;">$ 8999 </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    
                    <div class="thumbnail">
                        <a href="cameradetails.php?id=5"><img style="height : 170px" src="./Products/Cameras/eos-77d.jpeg"  alt="Camera"></a>
                        <div class="caption">
                            <h3><?php echo $e['Product_title'].'</br>';?></h3>
                            <p> $ <?php echo $e['Product_price'].'</br>';?></p><p style="text-decoration: line-through;">$ 6999 </p>
                        </div>
                    </div>
                   
                </div>
                <div class="col-md-3 col-sm-6">
                 <div class="thumbnail">
                     <a href="cameradetails.php?id=6"> <img style="height:170px" src="./Products/Cameras/fujifilmx.jpeg" alt="Camera"></a>
                        <div class="caption">
                           <h3><?php echo $f['Product_title'].'</br>';?></h3>
                            <p> $ <?php echo $f['Product_price'].'</br>';?></p><p style="text-decoration: line-through;">$ 5999 </p>
                        </div>
                       
                    </div>
                    </div>
                   
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cameradetails.php?id=8">     <img style="height:170px" src="./Products/Cameras/nikoncoolpix.jpeg" alt="Camera"></a>
                        <div class="caption">
                            <h3><?php echo $g['Product_title'].'</br>';?></h3>
                            <p> $ <?php echo $g['Product_price'].'</br>';?></p><p style="text-decoration: line-through;">$ 1999 </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cameradetails.php?id=9">  <img style="height:170px" src="./Products/Cameras/nikond3400.jpeg"alt="Camera"></a>
                        <div class="caption">
                            <h3><?php echo $h['Product_title'].'</br>';?></h3>
                            <p> $ <?php echo $h['Product_price'].'</br>';?></p><p style="text-decoration: line-through;">$ 4999 </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    
                    <div class="thumbnail">
                        <a href="cameradetails.php?id=10">    <img style="height:170px" src="./Products/Cameras/pentax-k-5.jpeg"  alt="Camera"></a>
                        <div class="caption">
                            <h3><?php echo $i['Product_title'].'</br>';?></h3>
                            <p> $ <?php echo $i['Product_price'].'</br>';?></p><p style="text-decoration: line-through;">$ 4959 </p>
                        </div>
                    </div>
                   
                </div>
                <div class="col-md-3 col-sm-6">
                 <div class="thumbnail">
                     <a href="cameradetails.php?id=11"> <img style="height:170px" src="./Products/Cameras/Sonyalpha.jpg" alt="Camera"></a>
                        <div class="caption">
                            <h3><?php echo $j['Product_title'].'</br>';?></h3>
                            <p> $ <?php echo $j['Product_price'].'</br>';?></p> <p style="text-decoration: line-through;">$ 9059 </p>
                        </div>
                       
                    </div>
                    </div>
                   
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cameradetails.php?id=12">    <img style="height:170px" src="./Products/Cameras/sony-mirrorless.jpeg" alt="Camera"></a>
                        <div class="caption">
                            <h3><?php echo $k['Product_title'].'</br>';?></h3>
                            <p> $ <?php echo $k['Product_price'].'</br>';?></p> <p style="text-decoration: line-through;">$ 9059 </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cameradetails.php?id=65"><img style="height:170px" src="./Products/Cameras/nikon-d5300-dslr.jpeg" alt="Camera"></a>
                        <div class="caption">
                            <h3><?php echo $l['Product_title'].'</br>';?></h3>
                            <p> $ <?php echo $l['Product_price'].'</br>';?></p> <p style="text-decoration: line-through;">$ 8059 </p>
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
