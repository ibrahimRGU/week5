<?php
	include("check.php");	
	
?>
<!DOCTYPE HTML>
<Html>
 

	<head>
	        <title>Course Work</title>
          	<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
	        <link href="style.css" rel="stylesheet" type="text/css" />
	</head>
   	
  <body>
        <div class="Header"> 
			<div class="welcome">
			 	<h1>Bug Tracking Site</h1>
			</div> <!--close welcome-->
	        
			<div class="welcome_slogan">   
				<h4>WE FIX BUGS</h4>
	        </div><!--close welcome_slogan-->
			<div id="nav">
					<li><a href="home.php">Home</a></li>
					<li><a href="index.php">AboutUS</a></li>
					<li><a href="Contact.html">ContactUs</a></li>
					<li><a href="logout.php" style="font-size:18px">Logout?</a></li>
            </div><!--close menubar-->
	              
		</div> <!--close Header-->
			<div class="maincontainer">
				<div class="sidebar"> 
					<p><h2>Usefull links</h2></p>
						<li>HTML</li>
						<li>CSS</li>
						<li>PHP</li>
						<li>MySQL</li>	
    	        </div> 
				<div class="main"> 
					<div align="center">


<h1 style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font-size:32px;">Post a Bug </h1>
<div class="loginBox">
    <h3> </h3>
    <br><br> <?php 

		if(isset($_POST["submit"])){
			
			  $title = trim($_POST["title"]);
			  
			  $des = trim($_POST["des"]);
			
			if($title  == ""){
				
				echo "<div class='error'> Enter Bug Title</div>";
				
				 
			}else if($des  == ""){
				
				echo "<div class='error'> Bug Description</div>";
				
			}else{
				include("connection.php");
				$sql = mysqli_query($db,"INSERT INTO `bugs`( `title`, `desc`, `postDate`, `fixDate`, `fixed`, `userID`) VALUES ('$title','$des',NOW(),NOW(),'','$login_id')");
				
				if($sql){
					
					echo "<div style='color:green'>Bug have been Posted</div>";
				}else{
					
					echo "<div class='error'> There was an Error </div>";
					 
				}
				
			}
		}
?>
    <form method="post" action="bug.php">
        <label>Title:</label><br>
        <input type="text" name="title" value="<?php if(isset($_POST["title"])){echo $_POST["title"];}?>" placeholder="Bug title" /><br><br>
        <label>Description:</label><br>
        <textarea name="des" rows="4" placeholder="Bug Description"><?php if(isset($_POST["des"])){echo $_POST["des"];}?></textarea> <br><br>
        <input type="submit" name="submit" value="Post Bug" /> 
   
   </form>
    
</div>
</div>
			
				</div>
		   </div>	 
			
		<div class="footer">
		<footer>
				<address>&copy; Copyright 2016 All Rights Reserved east3.azurewebsites.net </address>
        </footer>
	    </div>
	  
	
  </body>
   
</Html>
