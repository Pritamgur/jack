<?php

$user = 'root';
$pass='';
$db='lifestyle';
$conn = new mysqli('localhost',$user,$pass,$db) or die("Aborted");


//if submit button is set
if(isset($_GET['q'])){
    $search = $_GET['q'];
}
$sql = "SELECT * from product WHERE Product_title LIKE '$search' ;";
$result = mysqli_query($conn, $sql);
$num= mysqli_num_rows($result);
$a= mysqli_fetch_array($result);
$cat=$a['Cat_id'];

if($search =='camera' || $search =='Camera' || $search == 'Cameras' || $search == 'cameras'){
    header("Location:Camera.php");
}
else if($search =='shoe' || $search =='Shoe' || $search == 'Shoes'|| $search == 'shoes'){
    header("Location:shoes.php");
}
else if($search =='Shirt' || $search =='shirt' || $search == 'Shirts' || $search == 'shirts'){
    header("Location:shirts.php");
}
else if($search =='Watch' || $search =='Watches' || $search == 'watches'){
    header("Location:watches.php");
}
else if($num>0){
    if($cat ==1){  // it is a shirt item
        $p=$a['Product_id'];
        header("Location:shirtsdetail.php?id=$p");
    }
    if($cat==2){ // it is a camera item
         $p=$a['Product_id'];
        header("Location:cameradetails.php?id=$p");
    }
     if($cat==3){
          $p=$a['Product_id'];
        header("Location:watchesdetails.php?id=$p");
     } //Its a watch item
     if($cat==4){ //Its a shoe item
          $p=$a['Product_id'];
        header("Location:shoesdetails.php?id=$p");
     }
}
 else {
  echo'No products found';  
 }