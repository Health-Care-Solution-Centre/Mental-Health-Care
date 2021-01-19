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
	$expert_id=$_POST['expert_id'];
	$name=$_POST['n'];
	$email=$_POST['e'];
	$mobile=$_POST['m'];
	$address=$_POST['adds'];
	$gender=$_POST['gen'];
	$dob=$_POST['dob'];
	$education=$_POST['education'];
	$status=$_POST['status'];
	//$pic=$_POST['pic'];
}

$UpdateSql="UPDATE expert_profile SET name='$name', email='$email', mobile=$mobile, address='$address', gender='$gender', dob='$dob', education='$education', status='$status' WHERE expert_id=$expert_id ";
$res=mysqli_query($conn,$UpdateSql);
	if($res)
	{
		header( "refresh:2;url=view_expert_admin.php" );  
        echo '<script type="text/javascript">';
        echo ' alert("Status Updated!")';  //not showing an alert box.
        echo '</script>';

	}
	else
	{
		$fmsg="Failed to Update Data.";
	}
mysqli_close($conn);
?>