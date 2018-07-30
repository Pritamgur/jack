<?php
$user = 'root';
$pass='';
$db='lifestyle';
$conn = new mysqli('localhost',$user,$pass,$db) or die("Aborted");
 
    if(isset($_POST['commentsubmit']))
    {
      $name = $_POST['Uname'];
      $uid  =$_POST['Uid'];
      $Pid = $_POST['Pid'];
      
      $mess = $_POST['message'];
      $date = $_POST['date'];
      
      
      
      $sql = "INSERT INTO review (UID,Uname, Pid, Comment,date) VALUES ('$uid','$name', '$Pid', '$mess' ,'$date');";
      $res = mysqli_query($conn, $sql); 
      
    }