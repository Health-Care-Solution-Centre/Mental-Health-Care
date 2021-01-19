<?php
session_start();
$user_email=$_SESSION["email"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mentalhealth";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

if(isset($_POST)& !empty($_POST))
{
	//$user_id=$_POST['user_id'];
	//$user_email=$_POST["user_email"];
	$title=$_POST['title'];
	$story_user=$_POST['story_user'];
	
}
$UpdateSql="UPDATE user SET title='$title', story_user='$story_user' WHERE user_email='$user_email' ";
$res=mysqli_query($conn,$UpdateSql);
	if($res)
	{
		header( "refresh:2;url=user_story.php" );  
        echo '<script type="text/javascript">';
        echo ' alert("Story successfully submitted!")';  //not showing an alert box.
        echo '</script>';

	}
	else
	{
		$fmsg="Failed to submit story!.";
	}

mysqli_close($conn);
?>