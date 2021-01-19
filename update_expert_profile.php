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

    $expert_email=$_SESSION["email"];
    $expert_education=$_POST['education'];
	$address=$_POST['adds'];
	$mobile=$_POST['m'];
	
}
$UpdateSql="UPDATE psychology_expert SET expert_education='$expert_education', address='$address', mobile='$mobile' WHERE expert_email='$expert_email' ";
$res=mysqli_query($conn,$UpdateSql);
	if($res)
	{
		header( "refresh:2;url=expert_profile.php" );  
        echo '<script type="text/javascript">';
        echo ' alert("Expert Profile successfully updated!")';  //not showing an alert box.
        echo '</script>';

	}
	else
	{
		$fmsg="Failed to update expert profile!.";
	}

mysqli_close($conn);
?>