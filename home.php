<?php
	include("check.php");	
	
?>
<!DOCTYPE HTML>
<Html>
 

	<head>
	        <title>Course Work</title>
          	<meta charset="UTF-8">
	        <link href="style.css" rel="stylesheet" type="text/css" />
	</head>
   	
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
         <li><a href="logout.php" style="font-size:18px">Logout?</a></li>
                </div><!--close menubar-->
	          </div><!--close menubar_container-->
        </div><!--Main_container-->
		<div class="textarea1"> 
		<div align="center">
		<h1 class="hello">View Bug</h1>
<?php
	include("connection.php");
	
		$sql="SELECT * FROM `bugs`";
		
			$result=mysqli_query($db,$sql);
			
			if(mysqli_num_rows($result) > 0)
			{
				while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
					extract($row);
				?>	
					
				<a href="viewbug.php?id=<?php echo $bugID ?>"><h3><?php echo $title; ?></h3></a>
				<p><?php echo substr($desc,0,100); ?></p>
				<span class="time"><i><?php echo $postDate; ?></i></span>
				<?php	
				}
			   
			}else
			{
				echo  "<h1 class='hello'>No Bug Found</h1>";
			}
			


?>
<br><br><br>
	
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
