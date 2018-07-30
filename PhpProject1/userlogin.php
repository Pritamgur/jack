<?php
$user = 'root';
$pass='';
$db='lifestyle';
$conn = new mysqli('localhost',$user,$pass,$db) or die("Aborted");

if(isset($_POST['Submit'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM userinfo WHERE Email = '$email' AND Password = '$password'";
	$run_query = mysqli_query($conn,$sql);
        $a= mysqli_fetch_array($run_query);
	$count = mysqli_num_rows($run_query);
	//if user record is available in database then $count will be equal to 1
	if($count == 1){
                session_start();
                $_SESSION['Uid']=$a['ID'];
                $id = $a['Name'];
                header("Location:userhome.php?user=$id");
        }
 else {
     echo '<script type= "text/javascript"> alert("Invalid Credential!!")</script>';
 }
}

mysqli_close($conn);
?>


