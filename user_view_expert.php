<?php
require('Database_connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
      <a class="navbar-brand" href="#">Mental Health Care</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="view_user.php">Profile</a></li>
      <li><a href="user_story.php">Post Stories</a></li>
      <li><a href="user_view_expert.php">List of Expert</a></li>
      </li> 
       <li><a href="quiz.php"></i>Quick Test</a></li> 
      
     </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="SignInPage.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul> 
  </div>
</nav>

<div class="container">
  <h2>List of Expert</h2>           
  <table class="table table-bordered">
    <thead>
     <br></br>
      <tr>
        <th class="text-center">No</th>
        <th class="text-center">Name</th>
        <th class="text-center">Email</th>
        <th class="text-center">Phone Number</th>
        <th class="text-center">Address</th>
        <th class="text-center">Education</th>


      </tr>
    </thead>

<?php 
include('Database_Connection.php');

  
  $sql=mysqli_query($conn,"select * from expert_profile");

  $i=1;
  while($res=mysqli_fetch_assoc($sql))
  {
  $expert_id=$res['expert_id'];  


  
  
  echo "<tr>";
  echo "<td align='center' valign='center'>".$i."</td>";
  echo "<td align='center' valign='center'>".$res['name']."</td>";
  echo "<td align='center' valign='center'>".$res['email']."</td>";
  echo "<td align='center' valign='center'>".$res['mobile']."</td>";
  echo "<td align='center' valign='center'>".$res['address']."</td>";
  echo "<td align='center' valign='center'>".$res['education']."</td>";

  
  echo "</tr>";
  $i++;
  }
  echo "</table>";
?>

    
<tr>
       
    </tbody>
  </table>
  <nav aria-label="Page navigation example">
  <div class="btn-group pull-right">
  <ul class="pagination" class="float-right">
    <li class="page-item"><a class="page-link" href="">Previous</a></li>
    <li class="page-item"><a class="page-link" href="">1</a></li>
    <li class="page-item"><a class="page-link" href="">2</a></li>
    <li class="page-item"><a class="page-link" href="">3</a></li>
    <li class="page-item"><a class="page-link" href="">Next</a></li>
  </ul>
</nav>
</div>
</div>

</body>
</html>