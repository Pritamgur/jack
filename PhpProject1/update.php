<?php

session_start();
if(isset($_SESSION['Uid'])){
    $a=$_SESSION['Uid'];
}
$user = 'root';
$pass='';
$db='lifestyle';
$conn = new mysqli('localhost',$user,$pass,$db) or die("Aborted");

if(isset($_POST['uname'])){
    $b=$_POST['user'];
    $sql = "UPDATE userinfo SET Name='$b' WHERE ID='$a';";
    $run_query = mysqli_query($conn,$sql);
    $c= mysqli_fetch_array($run_query);
    header("Location:settings.php");
}
if(isset($_POST['uemail'])){
    $b=$_POST['email'];
    $sql = "UPDATE userinfo SET Email='$b' WHERE ID='$a';";
    $run_query = mysqli_query($conn,$sql);
    $c= mysqli_fetch_array($run_query);
    header("Location:login.php");
}
if(isset($_POST['pass'])){
    $b=$_POST['password'];
    $sql = "UPDATE userinfo SET Password='$b' WHERE ID='$a';";
    $run_query = mysqli_query($conn,$sql);
    $c= mysqli_fetch_array($run_query);
    header("Location:login.php");
}
if(isset($_POST['ucontact'])){
    $b=$_POST['contact'];
    $sql = "UPDATE userinfo SET Contact='$b' WHERE ID='$a';";
    $run_query = mysqli_query($conn,$sql);
    $c= mysqli_fetch_array($run_query);
    header("Location:settings.php");
}
if(isset($_POST['ucity'])){
    $b=$_POST['city'];
     $sql = "UPDATE userinfo SET City='$b' WHERE ID='$a';";
    $run_query = mysqli_query($conn,$sql);
    $c= mysqli_fetch_array($run_query);
    header("Location:settings.php");
}
if(isset($_POST['ustate'])){
    $b=$_POST['state'];
    $sql = "UPDATE userinfo SET State='$b' WHERE ID='$a';";
    $run_query = mysqli_query($conn,$sql);
    $c= mysqli_fetch_array($run_query);
    header("Location:settings.php");
}
if(isset($_POST['uaddr'])){
    $b=$_POST['addr'];
    $sql = "UPDATE userinfo SET Address='$b' WHERE ID='$a';";
    $run_query = mysqli_query($conn,$sql);
    $c= mysqli_fetch_array($run_query);
    header("Location:settings.php");
    }
if(isset($_POST['uzip'])){
    $b=$_POST['zip'];
    $sql = "UPDATE userinfo SET Zip='$b' WHERE ID='$a';";
    $run_query = mysqli_query($conn,$sql);
    $c= mysqli_fetch_array($run_query);
    header("Location:settings.php");
    
}