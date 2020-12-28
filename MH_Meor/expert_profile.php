<?php
require "Database_connection.php";

$sql = mysqli_query($conn,"SELECT * FROM psychology_expert");
if ($sql->num_rows > 0) {
		while ($row = $sql -> fetch_assoc()) {
			$userid = $row['expert_id'];
			$name = $row['expert_name'];
			$email = $row['expert_email'];
			$education = $row['expert_education'];
			$password =$row['expert_password'];
			$tips = $row['expert_tips'];
		}
    }
	
	
	
?>

<html>
<head>
    <title>My Profile</title>
</head>
<style type="text/css">
html { 
  background: url(icons&images/3.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}




body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.content {
	
	background-color: #ffffff;
	color: #000000;
	padding: 40px;
	height: 900px;
	width: 1200px;
	margin: 100px auto;	
  	border: 1px solid black;
  	opacity: 0.6;
	

}
table {
  background-color: #F0FFFF;
  border-collapse: collapse;
}

table {
  border: 2px solid black;
  width: 1000px;
}
td {
	font-family: Arial;
	font-size: 20px;
	border: 3px solid black;
	height: 30px;
	padding: 20px;
}




</style>
<body>
<div class = "content">
		<center>
		<h1>My Profile</h1>
		<svg id="svgelem" height="30">
		<line x1="0" y1="0" x2="1200" y2="0" style="stroke:red;stroke-width:8"/>
		</svg>
		<br><br><br><br>
		<table>
		<tr>
			<td><b>Name</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>:</b>&nbsp;<?php echo $name; ?></td>
		</tr>
		<tr>
			<td><b>Education</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>:</b>&nbsp;<?php echo $education; ?></td>
		</tr>
		<tr>
			<td><b>Email Address</b>&nbsp;&nbsp;<b>:</b>&nbsp;<?php echo $email; ?></td>
		</tr>
		<tr>
			<td><b>Password</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>:</b>&nbsp;<?php echo $password; ?></td>
		</tr>
		</table>
		<br><br>

		<button style="height:50px;width:200px"; onclick="window.location.href='psyhology_profile.html';">
		Edit Profile
		</button>
       <input type="button" class="btn btn-success" style="font-weight: bold;display: inline; height:50px;width:200px" value="Close" onclick="closeMe()">
		<script>
		function closeMe()
		{
			window.opener = self;
			window.close();
		}
		</script>

	
		
		
	</center>
	</div>


 
</body>
</html>