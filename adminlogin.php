<!--<?php
	//include("admin_login.php"); 
?>-->

<!DOCTYPE html>
<html>

<head>
	  <title>Admin Login</title>      
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
      <link rel="stylesheet" type="text/css" href="css/all.min.css">
      
      <link href="https://fonts.googleapis.com/css?family=Palanquin+Dark&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Scope+One&display=swap" rel="stylesheet">


</head>

<body>
	<div class="header">
		<div class="inner_header">
			<div class="logo_container">
				<h1><img src="images/logo.jpg"></h1>
			</div>

			<ul class="navigation">
				<a href="http://localhost/kaalakuma/index.html"><li>Home</li></a>
				<a href="http://localhost/kaalakuma/music.html"><li>Music</li></a>
				<a href="http://localhost/kaalakuma/merchandise.html"><li>Merchandise</li></a>
				<a href="http://localhost/kaalakuma/events.html"><li>Shows</li></a>
				<a href="http://localhost/kaalakuma/booking.html"><li>Booking</li></a>
			</ul>
		</div>
	</div>


	<div class="content-login">
		<form name="admin_login" action="admin_login.php" method="POST">
            <p>
            	<label for="fname" style="margin-right: 118px;">User:</label>
 				<input type="text" id="username" name="username" placeholder="User Name" required pattern="^[A-Za-z0-9 ]+$" maxlength="50"><br>
            </p>


            

            <p>
            	<label for="Password" style="margin-right: 73px;">Password :</label>
				<input type="text" id="password" name="password" placeholder="****"> 
            </p>


            
            <p>
                <input style="margin-left: 198px;padding-bottom: 7px;padding-left: 14px;margin-top: 17px;" type="submit" id="btn" name="submit" value="Login">
            </p>
            <!--<span><?php //echo $error; ?></span>-->
    
            </form>
        </div>
	</div>

	
</body>
</html>

