<?php
	include('login.php'); // Include Login Script

	if ((isset($_SESSION['username']) != '')) 
	{
		header('Location: home.php');
	}	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Who cares been an ethical hacker my site is not even secured </title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<div align="center">
<h1 style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font-size:32px;">PHP Login Form with Session</h1>
<div class="loginBox">
    <h3>Login Form</h3>
    <br><br>
    <form method="post" action="">
        <label>Username:</label><br>
        <input type="text" name="username" placeholder="username" /><br><br>
        <label>Password:</label><br>
        <input type="password" name="password" placeholder="password" />  <br><br>
        <input type="submit" name="submit" value="Login" /> 
    </form>
    <div class="error"><?php echo $error;?></div>
</div>
</div>
<div class="footer">        IM watching you ,Put off your WEBCAM !!!      +++            IM watching you ,Put off your WEBCAM !!!</div>
</body>
</html>
