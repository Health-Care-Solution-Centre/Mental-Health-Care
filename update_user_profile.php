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
	$user_email=$_POST["user_email"];
    $username=$_POST['n'];
    $user_email=$_POST['e'];
	$age=$_POST['age'];
	
	
}
$UpdateSql="UPDATE user SET username='$username', user_email='$user_email', age='$age' WHERE user_email='$user_email' ";
$res=mysqli_query($conn,$UpdateSql);
	if($res)
	{
        echo '<script type="text/javascript">';
        echo ' alert("User Profile successfully updated!")';  //not showing an alert box.
        echo '</script>';
        echo'<script>window.location="view_user.php"</script>';
        

	}
	else
	{
		$fmsg="Failed to update expert profile!.";
	}

mysqli_close($conn);
?>