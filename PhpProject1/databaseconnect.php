<?php
$user = 'root';
$pass='';
$db='lifestyle';
$errors=array();

$conn = new mysqli('localhost',$user,$pass,$db) or die("Aborted");
 if(isset($_POST['register'])){
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['psd'];
$contact=$_POST['contact'];
$city=$_POST['city'];
$add=$_POST['add'];
$state= $_POST['state'];
$zip = $_POST['zip'];
$sql="SELECT * FROM  userinfo where Email= '$email'";
$res=mysqli_query($conn, $sql);
$a= mysqli_num_rows($res);
if(empty($name))
{
    array_push($errors,"Username is Required");
}
if(empty($email))
{
    array_push($errors,"Email is Required");
}
if(empty($pass))
{
    array_push($errors,"Password is Required");
}
if(empty($contact))
{
    array_push($errors,"Contact is Required");
}
if(empty($city))
{
    array_push($errors,"City is Required");
}
if(empty($add))
{
    array_push($errors,"Address is Required");
}
//Check if there are registered user 
if($a>0){
     echo "You are already registered: ";
     header('Location:login.php');
}
else{
  if(count($errors)==0)
  {
   $sql = "INSERT INTO userinfo (Name,Email,Password,Contact,City,Address,State,Zip) VALUES ('$name',  '$email',   '$pass',  $contact,   '$city',  '$add', '$state', '$zip')";
   mysqli_query($conn, $sql);
   echo "Account created Succesfully";
   header('Location:login.php');
  }
 }
mysqli_close($conn);
}
?>