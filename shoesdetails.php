<?php
session_start();
 $connect = mysqli_connect("localhost", "root", "", "lifestyle");  
 
require("userlogin.php");
include 'comment.php';
if(isset($_SESSION)){
    $b = $_SESSION['Uid'];
    $query = "SELECT * from Userinfo where ID='$b';";  
                    $result = mysqli_query($connect, $query); 
                    $i = mysqli_fetch_array($result);
                    $date = date("d/m/Y");

}
?> 
<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Shoes</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
           
           <title> Shoes </title>
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
                <a href="shoes.php" class="navbar-brand">Lifestyle Store</a>
            </div>
            <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span>settings</a></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>logout</a></li>

            </ul>
            </div>
        </div>
    </nav>
           
           
           
           
           <div class="container" style="margin-top: 30px;">
               <div class ="row">
                <div class ="col-md-6">   
               <div class="img-thumbnail"><?php  
                if(isset($_GET['id']))
                    
                {
                    $a=$_GET['id'];
                    $query = "SELECT * from product where Product_id='$a';";  
                    $result = mysqli_query($connect, $query); 
                    $j = mysqli_fetch_array($result);
                    $t = "SELECT * from shoesdetails where Desc_id ='$a';";
                    $result1 = mysqli_query($connect, $t); 
                    $c = mysqli_fetch_array($result1);
                    $p = $j['Product_Price'];
                     echo '<img src="data:image/jpeg;base64,'.base64_encode($j['Product_image'] ).'" height="400" width="400" style="margin-top: 50px; margin-left: 30px;"  class="img-thumnail" /> ';
                }  
                ?></div>
           <!-- Creating buttons -->
           <div class="row" style="margin-top: 20px; margin-left:20px;">
                          <div class="col-sm-3">                           
                         <form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                      
                        <!-- Identify your business so that you can collect the payments. -->
                         <input type="hidden" name="business" value="uttamgur@gmail.com">

  <!-- Specify a PayPal Shopping Cart Add to Cart button. -->
                         <input type="hidden" name="cmd" value="_cart">
                         <input type="hidden" name="add" value="1">

  <!-- Specify details about the item that buyers will purchase. -->
                        <input type="hidden" name="item_name" value="<?php echo $j['Product_title']; ?> ">
                        <input type="hidden" name="amount" value="<?php echo $j['Product_Price']; ?>">
                        <input type="hidden" name="currency_code" value="USD">
  <!-- Display the payment button. -->
                        <input type="image" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" alt="Add to Cart">
                        <img alt="" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
                       </form>
                 </div>
               
               
               
               <div class="col-sm-3">
                   <form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" >
                    
                    <input type="hidden" name="business" value="uttamgur@gmail.com">
                    <input type="hidden" name="cmd" value="_cart">
                    <input type="hidden" name="display" value="1">
                  <!-- <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
                     "> -->
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_viewcart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                   </form>

               </div>
                          
               <div class="col-sm-3">
               
                <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                 <input type="hidden" name="cmd" value="_xclick">
                 <input type="hidden" name="business" value="uttamgur@gmail.com">
                 <input type="hidden" name="item_name" value="<?php echo $j['Product_title']; ?> ">
                 <input type="hidden" name="item_number" value="<?php echo $j['Product_id']; ?>">
                 <input type="hidden" name="amount" value="<?php echo $j['Product_Price']; ?>">
                 <input type="hidden" name="tax" value="1">
                 <input type="hidden" name="quantity" value="1">
                 <input type="hidden" name="no_note" value="1">
                 <input type="hidden" name="currency_code" value="USD">
                 <input type='hidden' name='cancel_return' value="http://localhost/PhpProject1/shoes.php">
                 <input type='hidden' name='return' value="http://localhost/PhpProject1/shoes.php">

                <!-- Enable override of buyers's address stored with PayPal . -->
                <input type="hidden" name="address_override" value="1">
                <!-- Set variables that override the address stored with PayPal. -->
                <input type="hidden" name="first_name" value=" <?php echo $i['Name']; ?>">
                <input type="hidden" name="address1" value="<?php echo $i['Address']; ?>">
                <input type="hidden" name="city" value="<?php echo $i['City'];?>">
                <input type="hidden" name="state" value="<?php echo $i['State'];?>">
                <input type="hidden" name="zip" value="<?php echo $i['Zip'];?>">
                <input type="hidden" name="country" value="USA">
                <input type="image" name="submit" 
                src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                alt="PayPal - The safer, easier way to pay online">
                 </form>
            </div>
</div>


          <!--     <button type="button" class="btn btn-danger btn-lg" action="#" style="width:179px;"><span class="glyphicon glyphicon-flash"></span>Buy Now</button></div>
-->
               <h3 style="margin-left: 20px;"> Select your size</h3>       
               <select id="list" onchange="getvalue()" style="margin-top: 10px; margin-left: 30px; font-size: 23px;">
                   <option value=6>6</option>
                   <option value=7>7</option>
                   <option value=8>8</option>
                   <option value=9>9</option>
                   <option value=10>10</option>
                   <option value=11>11</option>
               </select>
    </div>
                   <script>
                       function getvalue(){
                           var p = document.getElementById("list");
                           console.log(p);
                       }
                   </script>
           
          
          <div class="col-md-6">
          <div>
              
              <b><h2 >
                      
              <?php 
                     if(isset($_GET['id']))
                     {
                     echo $j['Product_title'].'</br>';
                     
                     }
                     ?></h2></b> 
              
          <b><h3><p>$
              <?php 
                     if(isset($_GET['id']))
                     {
                     echo $j['Product_Price'].'</br>';
                     
                     }
                     ?></p></h3></b>
               <div class="container-flow" style="margin-left:-100px;">  
               <div class="panel panel-default" style="margin-top: 20px; " >    
              <div class="panel-heading">
                     <h2>Specification</h2></div>
                   
          </div> 
          </div>
              <ul class="list-group" style="margin-left: -100px;" >
                  <li class="list-group-item" style="align: justify;" ><b>Brand</b>  
        <span style="margin-left: 280px;" ><b> <?php        if(isset($_GET['id']))
                     {
                                                             echo $c['Brand'].'</br>';
                     
                     }?></b></span></li>
    <li class="list-group-item"><b>Model Name</b>  
        <span style="margin-left: 220px;" ><strong> <?php        if(isset($_GET['id']))
                     {
                                                            echo $c['Model'].'</br>';
                     
                     }?></strong></span></li>
    <li class="list-group-item"><b>Colour</b>  
        <span style="margin-left: 290px;" ><b> <?php        if(isset($_GET['id']))
                     {
                                                            echo $c['Colour'].'</br>';
                     
                     }?></b></span></li>
    <li class="list-group-item"><b>Ideal for</b>  
        <span style="margin-left: 280px;" ><b> <?php        if(isset($_GET['id']))
                     {
                                                            echo $c['Ideal'].'</br>';
                     
                     }?></b></span></li>
    <li class="list-group-item"><b>Ocassion</b>  
        <span style="margin-left: 270px;" ><b> <?php        if(isset($_GET['id']))
                     {
                                                             echo $c['Ocassion'].'</br>';
                     
                     }?></b></span></li>
    <li class="list-group-item"> <b>Outer Material</b>  
        <span style="margin-left: 240px;" ><b> <?php        if(isset($_GET['id']))
                     {
                                                             echo $c['Material'].'</br>';
                     
                     }?></b></span></li>   
    <li class="list-group-item"><b>Weight</b>
    <span style="margin-left: 280px;" ><b> <?php        if(isset($_GET['id']))
                     {
                                                             echo $c['Weight'].'</br>';
                     
                     }?></b></span></li>  
    <li class="list-group-item"><b>Closure</b>
    <span style="margin-left: 270px;" ><b> <?php        if(isset($_GET['id']))
                     {
                                                             echo $c['Closure'].'</br>';
                     
                     }?></b></span></li> 
    <li class="list-group-item"><b>Heel Height</b>
    <span style="margin-left: 250px;" ><b> <?php        if(isset($_GET['id']))
                     {
                                                             echo $c['Heel'].'</br>';
                     
                     }?></b></span></li> 
    
            </ul>
          </div>
       </div>
    </div> 
  </div>
       <hr>
                    <div class="container">
                    <div class="row">
                            
                    <div class="page-header">
                        <h2>Product Reviews</h2>
                    </div>
                            <form method='POST' onsubmit="comment.php">
                                <input type="hidden" name="Uname" value="<?php echo $i['Name']; ?>">
                                <input type="hidden" name="Uid" value="<?php echo $b;?>">
                                <input type="hidden" name="date"  value="<?php echo $date;?>">
                                <input type="hidden" name="Pid"  value="<?php echo $a;?>">
                                <textarea name="message" style="width :600px; height: 80px; background-color: #fff;"> </textarea><br>
                                <button type ="submit" name="commentsubmit">Comment</button>
                            </form>
                            
                            <?php
                             $sql ="SELECT * FROM review where Pid ='$a';";
                            /* @var $connect type */
                            $result = mysqli_query($connect, $sql);?>
                            <div class="col-md-12" style="background-color: #e6e6e6;">
                            <?php while($row = mysqli_fetch_assoc($result)){ ?>
                              
                                     
                                <h3> <?php echo $row['Uname'] .'<br>';?></h3>
                                <h5> <?php echo $row['Date'] . '<br>';?></h5> 
                                 <p> <?php echo $row['Comment'];?> </p>
                    
                                
                            <?php } ?>
                            </div>    
                        </div>
                    
          </div>              
              <?php
   require 'footer.php';
   ?>
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script> 

