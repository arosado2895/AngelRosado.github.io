<?php
	/****/
	session_start();
	if(!isset($_SESSION['simple_login'])){
		header("Location: index.php");
		exit();
	}
	/*** Important END ***/
?>


<!-------- "MY SITE OR DASH BOARD" -------->
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authentication Successful</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <meta name="description" content=""/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <link rel='shortcut icon' href='/favicon.ico'  />
    <style>
        body,html {
            height: 100%;
        }       


        .bg { 
            /* The image used */
            background-image: url("images/bg.gif");
            /* Full height */
            height: 100%; 
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
           
            background-size: cover;
        }
    </style>


</head>
<body  class="bg">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3"  style="background: white; padding: 20px; box-shadow: 10px 10px 5px #888888; margin-top: 100px;">
                <hr>
					<div style="text-align: center;">
					<center><h1><h1>DEMO SITE</h1></center>
					<h3>Authentication Successful</h3>
<br>
<h4 align="center">Welcome, Imaginate que esto es un excelente website lleno de mucha informacion importante relacionado con dinero.</h4>
<p align="center"><a href="logout.php">Logout</a></p></h1>
                    </div>
                <hr>    
                <a target="_blank" href="https://www.google.com/landing/2step/"><p style="text-align: center;;">Learn more about <br>     How it Works? <br>  Why is it Necessary? <br>   and How to Build it?</p></a>
            </div>
        </div>
    </div>
</body>
</html>

