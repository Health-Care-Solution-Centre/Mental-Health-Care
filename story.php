<?php
require('Database_connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
  body
  {
background: url(icons&images/) no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  font-family: Arial, Helvetica, sans-serif;
}
</style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div>
    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.html"><span class="glyphicon glyphicon-log-in"></span> Home</a></li>
    </ul> 
  </div>
</nav>

<div class="container">
  <h2>The stories of people that was struggling with mental health</h2>
   <br></br>           
  <table class="table table-bordered">
    <thead>
      <tr>
        <th class="text-center">Title</th>
        <th class="text-center">Story</th>
        

      </tr>
    </thead>

<?php 
include('Database_Connection.php');

  
  $sql=mysqli_query($conn,"select * from user");
  $sql=mysqli_query($conn,"SELECT * FROM user WHERE user.statuspost = '1' ORDER BY user_id DESC");

  $i=1;
  while($res=mysqli_fetch_assoc($sql))
  {
  
  
  
  echo "<tr>";
  echo "<td align='center' valign='center'>".$res['title']."</td>";
  echo "<td align='center' valign='center'>".$res['story_user']."</td>";
 
  echo "</tr>";
  $i++;
  }
  echo "</table>";
?>

    
<tr>
       
    </tbody>
  </table>
</div>
</div>
<div style="position: absolute; bottom: 5px;left:25%;"><img src="icons&images/q.jpg" alt="mentalhealth" style="width:200px;height:150px;"/><img src="icons&images/y.jpg" alt="mentalhealth" style="width:200px;height:150px;"/><img src="icons&images/s.jpg" alt="mentalhealth" style="width:200px;height:150px;"/><img src="icons&images/v.jpg" alt="mentalhealth" style="width:200px;height:150px;"/></div>
</body>
</html>