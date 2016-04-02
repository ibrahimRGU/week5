<?php
	include('login.php'); // Include Login Script

	if ((isset($_SESSION['username']) != '')) 
	{
		header('Location: home.php');
	}	
?>

<!DOCTYPE HTML>
<Html>
 

	<head>
	    <title>Course Work</title>
		<meta charset="UTF-8">
	</head>
   	<link href="style.css" rel="stylesheet" type="text/css" />
  <body>
  <div class="main_container"> 
	   <div class="welcome_container"> 
	   <div class="welcome">
	      <h1>Bug Tracking Site</h1>
		  </div>  <!--close welcome-->
		  </div>
		<div class="slogan_container"> 
	       <div class="welcome_slogan">   
	      <h4>WE FIX BUGS</h4>

	       </div><!--close welcome_slogan-->
		</div>
		<div class="menu_container">
		<div class="menu">
          <li><a href="index.php">About US</a></li>
          <li><a href="Contact.html">Contact Us</a></li>
          
      </div><!--close menubar-->
	  </div><!--close menubar_container-->
		
	  </div><!--Main_container-->
	 
		
	<div class="new">
		
		<div class="textarea1"> 
		<div align="center">
	
	<div class="loginBox">
			<h3>Pleas Login Here</h3>
			<br><br>
		<form method="post" action="">
			<label>Username:</label><br>
			<input type="text" name="username" placeholder="username" /><br><br>
			<label>Password:</label><br>
			<input type="password" name="password" placeholder="password" />  <br><br>
			<input type="submit" name="submit" value="Login" /> 
			<a href="register.php" style="font-size:18px">Signup Here</a>
		</form>
    <div class="error"><?php echo $error;?></div>
</div>
</div>
		</div>
	<div class="sidebar"> 
		<p><i>Usefull links</i></p>
		<p>HTML</p>
		<p>CSS</p>
		<p>PHP</p>
		<p>MySQL</p>	
	</div>
	</div> 
	
	<div class="footer">
	<div footer="footer_content">
		<footer>
<address>&copy; Copyright 2016 All Rights Reserved east3.azurewebsites.net </address>
</footer>
	</div>
	</div>
	
  </body>
   
</Html>
