<?php
	include("check.php");	
	
	
?>

<!doctype html><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Post a Bug</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>

<a href="home.php">Home</a>
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
</body>
</html>
<html>
<head>
<meta charset="utf-8">
<title>Bugtracker</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>

 