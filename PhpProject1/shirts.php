<!DOCTYPE html> 
<?php
session_start();


$user = 'root';
$pass='';
$db='lifestyle';
$conn = new mysqli('localhost',$user,$pass,$db) or die("Aborted");

$sql = "SELECT Product_title, Product_price FROM product where Cat_id=1;";
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
                        <a href="shirtsdetail.php?id=41"> <img style="height:170px" src="./products/Shirts/navy-blue-lt-blue.jpeg"  alt="Shirt"></a>
                        <div class="caption"><h3><?php echo $a['Product_title'].'</br>';?></h3>
                            <p> $ <?php echo $a['Product_price'].'</br>';?></p> <p style="text-decoration: line-through;">$ 999 </p>
                        </div>
                    </div>
                   
                </div>
                <div class="col-md-3 col-sm-6">
                 <div class="thumbnail">
                     <a href="shirtsdetail.php?id=42"><img style="height:170px" src="./products/Shirts/being-fab-black-original.jpeg"  alt="Shirt" ></a>
                        <div class="caption">
                            <h3><?php echo $b['Product_title'].'</br>';?></h3>
                            <p> $ <?php echo $b['Product_price'].'</br>';?></p><p style="text-decoration: line-through;">$ 999 </p>
                            
                        </div>
                       
                    </div>
                    </div>
                   
                
                <div class="col-md-3 col-sm-6">
                 <div class="thumbnail">
                     <a href="shirtsdetail.php?id=43"><img style="height:170px" src="./products/Shirts/being-fab-original.jpeg"  alt="Shirt" ></a>
                        <div class="caption">
                            <h3><?php echo $c['Product_title'].'</br>';?></h3>
                            <p> $ <?php echo $c['Product_price'].'</br>';?></p><p style="text-decoration: line-through;">$ 899 </p>
                            
                        </div>
                       
                    </div>
                    </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="shirtsdetail.php?id=44"><img style="height:170px" src="./Products/Shirts/blue-spykar-original.jpeg" alt="Shirt"></a>
                        <div class="caption">
                            <h3><?php echo $d['Product_title'].'</br>';?></h3>
                            <p> $ <?php echo $d['Product_price'].'</br>';?></p><p style="text-decoration: line-through;">$ 1299 </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    
                    <div class="thumbnail">
                        <a href="shirtsdetail.php?id=45"><img style="height : 170px" src="./Products/Shirts/campus-sutra-original.jpeg"  alt="Shirt"></a>
                        <div class="caption">
                            <h3><?php echo $e['Product_title'].'</br>';?></h3>
                            <p> $ <?php echo $e['Product_price'].'</br>';?></p><p style="text-decoration: line-through;">$ 1599 </p>
                        </div>
                    </div>
                   
                </div>
                <div class="col-md-3 col-sm-6">
                 <div class="thumbnail">
                     <a href="shirtsdetail.php?id=46"> <img style="height:170px" src="./Products/Shirts/crownkart-original.jpeg" alt="Shirt"></a>
                        <div class="caption">
                           <h3><?php echo $f['Product_title'].'</br>';?></h3>
                            <p> $ <?php echo $f['Product_price'].'</br>';?></p><p style="text-decoration: line-through;">$ 1899 </p>
                        </div>
                       
                    </div>
                    </div>
                   
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="shirtsdetail.php?id=47"> <img style="height:170px" src="./Products/Shirts/dark-blue-highlander.jpeg" alt="Shirt"></a>
                        <div class="caption">
                            <h3><?php echo $g['Product_title'].'</br>';?></h3>
                            <p> $ <?php echo $g['Product_price'].'</br>';?></p><p style="text-decoration: line-through;">$ 1499 </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="shirtsdetail.php?id=48"><img style="height:170px" src="./Products/Shirts/jeanshirt-tribewear-original.jpeg"alt="Shirt"></a>
                        <div class="caption">
                            <h3><?php echo $h['Product_title'].'</br>';?></h3>
                            <p> $ <?php echo $h['Product_price'].'</br>';?></p><p style="text-decoration: line-through;">$ 2199 </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    
                    <div class="thumbnail">
                        <a href="shirtsdetail.php?id=49"><img style="height:170px" src="./Products/Shirts/maroon-highlander.jpeg"  alt="Shirt" ></a>
                        <div class="caption">
                            <h3><?php echo $i['Product_title'].'</br>';?></h3>
                            <p> $ <?php echo $i['Product_price'].'</br>';?></p><p style="text-decoration: line-through;">$ 2199 </p>
                        </div>
                    </div>
                   
                </div>
                <div class="col-md-3 col-sm-6">
                 <div class="thumbnail">
                     <a href="shirtsdetail.php?id=50"><img style="height:170px" src="./Products/Shirts/metronaut-original.jpeg" alt="Shirt"></a>
                        <div class="caption">
                            <h3><?php echo $j['Product_title'].'</br>';?></h3>
                            <p> $ <?php echo $j['Product_price'].'</br>';?></p><p style="text-decoration: line-through;">$ 999 </p>
                        </div>
                       
                    </div>
                    </div>
                   
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="shirtsdetail.php?id=51"><img style="height:170px" src="./Products/Shirts/rodid-s-original.jpeg" alt="Shirt"></a>
                        <div class="caption">
                            <h3><?php echo $k['Product_title'].'</br>';?></h3>
                            <p> $ <?php echo $k['Product_price'].'</br>';?></p><p style="text-decoration: line-through;">$ 1499 </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="shirtsdetail.php?id=52"><img style="height:170px" src="./Products/Shirts/white-arrow-original.jpeg" alt="Shirt"></a>
                        <div class="caption">
                            <h3><?php echo $l['Product_title'].'</br>';?></h3>
                            <p> $ <?php echo $l['Product_price'].'</br>';?></p><p style="text-decoration: line-through;">$ 1599 </p>
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

            

                    