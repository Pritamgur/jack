<?php
session_destroy();
unset($_SESSION['Uid']);
?><h2>You are logged out</h2>
<?php header("Location:index.php");

