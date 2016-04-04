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
<a href="bug.php" style="font-size:18px">Post a bug</a>
<body>



<div class="conts">
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


</div>
<br><br><br>

</body>
</html>

