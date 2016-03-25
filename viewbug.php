<?php
	include("check.php");	
	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<a href="logout.php" style="font-size:18px">Logout?</a>

<a href="home.php" style="font-size:18px">Home</a>
<body>



<div class="conts">
<h1 class="hello">View Bug</h1>
<?php
	include("connection.php");
	
		if(isset($_GET["id"])){
			
			$id = $_GET["id"];
		}
	
		$sql="SELECT * FROM `bugs` WHERE bugID ='$id' LIMIT 1";
		
			$result=mysqli_query($db,$sql);
			
			if(mysqli_num_rows($result) > 0)
			{
				while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
					extract($row);
				?>	
					
				<a href="viewbug.php?id=<?php echo $bugID ?>"><h3><?php echo $title; ?></h3></a>
				<p><?php echo  $desc  ; ?></p>
				<span class="time"><i><?php echo $postDate; ?></i></span>
				<?php	
				}
			   
			}else
			{
				echo  "<h1 class='hello'>No Bug Found</h1>";
			}
			
			
			


?>


<div class="commentbox">
<h3>Comment</h3>
<hr/>
<?php
$sql="SELECT * FROM `comments` WHERE bugID ='$id'";
		
			$result=mysqli_query($db,$sql);
			
			if(mysqli_num_rows($result) > 0)
			{
				while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
					extract($row);
				?>	
					
				 <p><?php echo  $desc  ; ?></p>
				<span class="time"><i><?php echo $postDate; ?></i></span>
				<?php	
				}
			   
			}else
			{
				echo  "<h2  >No Comment Yet</h2>";
			}
			



?>
<hr/>
<br><br> 
<?php

if(isset($_POST["submit"])){
			
			  $comment = trim($_POST["comment"]);
			  
			  
			
			if($comment  == ""){
				
				echo "<div class='error'> Enter comment</div>";
				
				 
			} else{
				include("connection.php");
				$sql = mysqli_query($db,"INSERT INTO `comments`( `desc`, `postDate`, `userID`, `bugID`) VALUES ('$comment ',NOW(),'$login_id','$id')");
				
				if($sql){
					
					echo "<div style='color:green'>Comment have been Posted</div>";
				}else{
					
					echo "<div class='error'> There was an Error </div>";
					 
				}
				
			}
		}





?>
 <form method="post" action="viewbug.php?id=<?php echo $id?>">
          
        <label>Leave a Comment:</label><br>
        <textarea name="comment" rows="4" placeholder="Bug Description"><?php if(isset($_POST["des"])){echo $_POST["comment"];}?></textarea> <br><br>
        <input type="submit" name="submit" value="Post Comment" /> 
   
  </form>

</div>

</div>
<br><br><br>

</body>
</html>

