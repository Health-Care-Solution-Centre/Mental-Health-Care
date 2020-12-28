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
<center><label></label>

<form action="" method="GET">

<input type="text" placeholder="Type the name here" name="search">&nbsp;

<input type="submit" value="Search" name="btn" class="btn btn-sm btn-primary">

</form></center>
 <p></p>
 
 <table>
  <tr>
    <th>No</th>
    <th>Name</th>
    <th>Email Address</th>
    <th>Update</th>
    <th>Delete</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Expert</td>
    <td>expert@gmail.com</td>
    <td><a href="update_expert_admin.php">Update</a></td>
    <td><a href="delete_expert_admin.php">Delete</a></td>
  </tr>
  
</table>


</body>
</html>

<center><div>


</div></center>
</div>
</body>
</html>