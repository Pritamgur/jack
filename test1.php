
<?php?>
<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    <?php
 $con=mysqli_connect("localhost","root","","lifestyle") or die("Aborted");
 
 $sql="SELECT * from userinfo;";
 $query=mysqli_query($con,$sql);?>
 <h1>NAME</h1><?php
 while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
     
      echo $row['Name'];?>
    <br>
<?php
 }
 ?>
</body>
</html>


