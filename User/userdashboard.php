<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>

 <style>
.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color: #4CAF50;} 
.button2 {background-color: #4CAF50;} 
.button3 {background-color: #FF0000;}

  body{
    
  background-image: url('icons&images/background.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}

table, th, td {
  border: 2px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
background-color: white; 
 filter:alpha(opacity=90);
   /* CSS3 standard */
   opacity:0.9;
}



</style> 

<body>
	<!-- Navbar -->
	<?php include "navibar.php"; ?>
	<!-- End Navbar -->

	<!-- Jumbotron -->
	<div class="jumbotron text-center">
		<br>
		<center>
		<h1>Welcome to the Mental Health Check System.</h1>
		<h2> User's Profile </h2>
		</center>
		<br><br>
		<br></br>
	</div>
	<!-- End Jumbotron -->
<center>
	<img src="icon.png" alt="Stay Safe" width="150" height="200"/>
<table style="width:50%">
<img style="margin-bottom: 20px">


<br></br>
  <tr>
    <th>User Name:</th>
    <td>notdepressed</td>
  </tr>

  <th>Full Name:</th>
    <td>John Smith</td>
  </tr>

  <tr>
    <th>Age:</th>
    <td>30 years old</td>
  </tr>
  

  <tr>
    <th>Email:</th>
    <td>b031810408@student.utem.edu.my</td>
  </tr>

  <tr>
  	<th>Mental health quiz score:</th>
    <td>50</td>
  </tr>
   
 
</table>

<button class="button button1">Edit</button>
<button class="button button2">Upload Photo</button>
<button class="button button3">Delete</button>

</center>
</body>

</html>
