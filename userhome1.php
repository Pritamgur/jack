<!DOCTYPE html>
<?php
session_start();
 if(isset($_GET['user']))
 {
     $name = $_GET['user'];
 }
 if(isset($_SESSION)){
     $name=$_GET['user'];
 }
?>
<html>
  <head>
    <title>Lifestyle Store </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="index.css" rel="stylesheet" type="text/css">
    <style>
        button{
            background-color: red; 
        }
       .speech {border: 1px solid #DDD; width: 300px; padding: 0; margin: 0}
  .speech input {border: 0; width: 240px; display: inline-block; height: 30px;}
  .speech img {float: right; width: 40px }
    </style>
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
            <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><span class="glyphicon glyphicon-user"></span><mark>WELCOME <?php echo $name; ?></mark></li>
                <li><a href="settings.php"><span class="glyphicon glyphicon-wrench"></span>Setting</a></li>
                <li><a href="logout.php" ><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
            </ul>
            </div>
        </div>
    </nav>    
    <div id="banner-image">
        <div class="container">
           
            <div id="banner_content">
                 <h1> We sell lifestyle</h1>
                        <P> offers on premium brands</p><form role="search">
                           </form>
                        <center>  
                    <form id="labnol" method="get" action="search.php">
  <div class="speech">
    <input type="text" name="q" id="transcript" placeholder="e.g. Shirts,Watches,Shoes,Cameras" />
    <img onclick="startDictation()" src="//i.imgur.com/cHidSVu.gif" />
  </div>
</form>
                        </center>
                       
            </div>
            
        </div>
       
    </div>
    <script>
     function startDictation() {

    if (window.hasOwnProperty('webkitSpeechRecognition')) {

      var recognition = new webkitSpeechRecognition();

      recognition.continuous = false;
      recognition.interimResults = false;

      recognition.lang = "en-US";
      recognition.start();

      recognition.onresult = function(e) {
        document.getElementById('transcript').value
                                 = e.results[0][0].transcript;
        recognition.stop();
        document.getElementById('labnol').submit();
      };

      recognition.onerror = function(e) {
        recognition.stop();
      }

    }
  }
    </script>
   
     <?php
   require 'footer.php';
   ?>
   
</body>
</html>