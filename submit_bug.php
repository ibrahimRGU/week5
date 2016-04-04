

<?php
session_start();
	include("connection.php"); //Establishing connection with our database
	
	$error = ""; //Variable for storing our errors.
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["title"]) || empty($_POST["desc"]) || empty($_POST["fixed"]))
		{
			$error = "Both fields are required.";
		}else
{
			
if(isset($_POST["submit"]))
 {
    $bugID = $_POST["bugID"];
	$title = $_POST["title"];
	$desc = $_POST["desc"];
    $postDate = $_POST["date('d/m/y');"];
    $fixDate = $_post ["fixDate"];
	$userID = $_POST ["login_user"];
    
	//$commentID = mysqli_real_escape_string($db, $commentID);
	//$title = mysqli_real_escape_string($db, $title);
    //$desc = mysqli_real_escape_string($db, $desc);
    //$postdate = mysqli_real_escape_string($db, $postdate);
	//$fixdate = mysqli_real_escape_string($db, $fixDate);
	//$userID = mysqli_real_escape_string($db, $userID);
    
    {
        //echo $title" ".$desc." ".$postdate" ".$postdate" " .$fixdate" "
        $query = mysqli_query($db, "INSERT INTO bugs ($commentID, $desc, $postDate, $fixdate, $userID, $bugID) VALUES ('$commentID', '$desc', '$postDate', '$fixdate', '$userID')")or die(mysqli_error($db));
        if($query)
        {
            $msg = "Thank You for submitting your bugs.";
        }

    }
 }
}}
?>
