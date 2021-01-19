<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mentalhealth";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

if(isset($_POST)& !empty($_POST))
{
	$user_id=$_POST['user_id'];
	$title=$_POST['title'];
	$story_user=$_POST['story_user'];
	$statuspost=$_POST['statuspost'];
}

$UpdateSql="UPDATE user SET title='$title', story_user='$story_user', statuspost=$statuspost WHERE user_id=$user_id ";
$res=mysqli_query($conn,$UpdateSql);
	if($res)
	{
		header( "refresh:2;url=update_story-admin.php" );  
        echo '<script type="text/javascript">';
        echo ' alert("Story Updated!")';  //not showing an alert box.
        echo '</script>';

	}
	else
	{
		$fmsg="Failed to Update Data.";
	}
mysqli_close($conn);
?>