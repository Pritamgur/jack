<?php


$user = 'root';
$pass='';
$db='lifestyle';
$conn = new mysqli('localhost',$user,$pass,$db) or die("Aborted");

$sql = "SELECT Product_title, Product_price FROM product where Product_id = 1";
$result = mysqli_query($conn, $sql);
$a= mysqli_fetch_array($result);

echo $a['Product_title'].'</br>';
echo $a['Product_price'].'</br>';
mysqli_close($conn);
?>
