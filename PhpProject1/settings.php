<?php
session_start();
$user = 'root';
$pass='';
$db='lifestyle';
$conn = new mysqli('localhost',$user,$pass,$db) or die("Aborted");
 
if(isset($_SESSION['Uid'])){
   $a=$_SESSION['Uid'];
   $sql = "SELECT * FROM userinfo WHERE ID='$a'; ";
   $run_query = mysqli_query($conn,$sql);
   $b= mysqli_fetch_array($run_query);
   
}
?>
<!DOCTYPE html>
<html>
    <head>
     <title> Settings </title>
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
        </div>
    </nav>
        <div class="container" style="margin-top: 50px; margin-left: 200px; ">
            <div class="row">
                <div class="col-sm-6">
                    <h1 style="margin-left: 300px;">HELLO <?php echo $b['Name'];?>,</h1>
            
            <div class="center">
                <h2>Personal Information</h2>
            <form action="update.php" method='post'>
                <h3>Name </h3>   <strong><input type="text" name="user" value="<?php echo $b['Name'];?>" size= "30" style="height: 30px;" ></strong>
                <input type="submit" name="uname" value="Edit" style="background-color: #ccccb3; " size="10">
            </form>
        </div>
            <div style="margin-top: 20px;">
                <form action="update.php" method='post'>
                    <h3>Email </h3> <strong><input type="text" name="email" value="<?php echo $b['Email'];?>" size= "30" style="height: 30px;" ></strong>
                <input type="submit" name="uemail" value="Edit" style="background-color: #ccccb3; " size="10">
            </form>
            </div>
            
                <div style="margin-top: 20px;">
                <form action="update.php" method='post'>
                    <h3>Password</h3> <strong><input type="password" name="password" value="<?php echo $b['Password'];?>" size= "30" style="height: 30px;"></strong>
                <input type="submit" name="pass" value="Edit" style="background-color: #ccccb3; " size="10"></form>
            </div>
            
                <div style="margin-top: 20px;">
                <form action="update.php" method='post'>
                    <h3>Contact</h3><strong><input type="text" name="contact" value="<?php echo $b['Contact'];?>" size= "30" style="height: 30px;"></strong>
                <input type="submit" name="ucontact" value="Edit" style="background-color: #ccccb3; " size="10">
                </form>
                </div>
        </div>
                <div class="col-sm-6" style="float: right; margin-top: 54px;">
                    <h2>Address Information</h2>
                        <form action="update.php" method='post'>
                        <h3>Address</h3><strong><input type="text" name="addr" value="<?php echo $b['Address'];?>" size= "30" style="height: 30px;"></strong>
                        <input type="submit" name="uaddr" value="Edit" style="background-color: #ccccb3; " size="10">
                </form>
                    <div style="margin-top: 20px;">
                        <form action="update.php" method='post'>
                            <h3>City</h3>   <strong><input type="text" name="city" value="<?php echo $b['City'];?>" size= "30" style="height: 30px;"></strong>
                        <input type="submit" name="ucity" value="Edit" style="background-color: #ccccb3; " size="10">
                </form>
                    </div>
                    <div style="margin-top: 20px;">
                        <form action="update.php" method='post'>
                        <h3>State</h3><strong><input type="text" name="state" value="<?php echo $b['State'];?>" size= "30" style="height: 30px;"></strong>
                        <input type="submit" name="ustate" value="Edit" style="background-color: #ccccb3; " size="10">
                </form>
                    </div>
                    <div style="margin-top: 20px;">
                        <form action="update.php" method='post'>
                            <h3>Zip</h3> <strong><input type="text" name="zip" value="<?php echo $b['Zip'];?>" size= "30" style="height: 30px;"></strong>
                        <input type="submit" name="uzip" value="Edit" style="background-color: #ccccb3; " size="10">
                </form>
                    </div>
                        
                    </div>
                </div>
        </div>
        
    
</body> 
</html>