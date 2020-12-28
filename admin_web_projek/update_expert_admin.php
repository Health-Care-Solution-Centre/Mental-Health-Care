<?php
require('Database_connection.php');
?>
<html>
<style>
  ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: black;
}

form { 
margin: 0 auto; 
width:250px;
}
</style>

<head>
<link href="mainpage_admin.css" rel="stylesheet" />
</head>
<body>
<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="mainpage_admin.php">Manage Stories</a></li>
  <li><a href="user_admin.php">Manage User</a></li>
  <li><a href="expert_admin.php">Manage Psycology Expert</a></li>
  <li style="float:right"><a class="active" href="home.php">Logout</a></li>
</ul>
<br></br>
<center><h2> UPDATE PSYCOLOGY EXPERT DETAILS</h2></center>
<br></br>
<script>
function validateForm() {
  var x = document.forms["myForm"]["name"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
function validateForm() {
 var x = document.forms["myForm"]["education"].value;
  if (x == "") {
    alert("Education must be filled out");
    return false;
  }
}
function validateForm() {
   var x = document.forms["myForm"]["email"].value;
  if (x == "") {
    alert("Email Address must be filled out");
    return false;
  }
}
function validateForm() {
 var x = document.forms["myForm"]["pass"].value;
  if (x == "") {
    alert("Password must be filled out");
    return false;
  }
}


</script>
</head>
<body>

<form name="myForm" action="/action_page.php" onsubmit="return validateForm()" method="post">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"value="expert"><br>
  <label for="education">Education:</label><br>
  <input type="text" id="education" name="education" value="Master"><br><br>
  <label for="email">Email Address:</label ><br>
  <input type="text" id="email" name="email" value="expert@gmail.com"><br><br>
  <label for="pass">Password:</label><br>
  <input type="text" id="pass" name="pass" value="expert123"><br><br>
  <input type="Submit" value="update">
</form> 
</body>
</html>
