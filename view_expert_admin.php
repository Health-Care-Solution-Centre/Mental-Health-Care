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
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="user_profile_admin.php">Manage User</a></li>
      <li><a href="update_story-admin.php">Post Stories</a></li>
     <li class="dropdown" id="navstory">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></i>Manage Pschology Expert <span class="caret"></span></a>
          <ul class="dropdown-menu">            
        
      <li><a href="expert_tips_admin.php"></i>Add Expert Profile</a></li> 
      <li><a href="view_expert_admin.php"></i>Expert Data</a></li>
                       
          </ul>
        </li> 
       <li><a href="linegraph.php"></i>User's Graph</a></li> 
     </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="SignInPage.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul> 
  </div>
</nav>

<div class="container">
  <h2>Expert Data</h2>           
  <table class="table table-bordered">
    <thead>
  <div class="btn-group pull-right">
  <a href="report.php" class="btn btn-info" role="button">Generate Report</a>
   </div>
 
     <br></br>
      <tr>
        <th class="text-center">No</th>
        <th class="text-center">Image</th>
        <th class="text-center">Name</th>
        <th class="text-center">Email</th>
        <th class="text-center">Phone Number</th>
        <th class="text-center">Address</th>
        <th class="text-center">Gender</th>
        <th class="text-center">Birthday date</th>
        <th class="text-center">Education</th>
        <th class="text-center">Status</th>
        <th class="text-center">Action</th>

      </tr>
    </thead>

<?php 
include('Database_Connection.php');

  
  $sql=mysqli_query($conn,"select * from expert_profile");

  $i=1;
  while($res=mysqli_fetch_assoc($sql))
  {
  $expert_id=$res['expert_id'];  
  $email=$res['email'];
  $img=$res['pic']; 
  
  
  echo "<tr>";
  echo "<td align='center' valign='center'>".$i."</td>";
  echo "<td align='center' valign='center'><img src='image/$email/$img' width='100px'/></td>";
  echo "<td align='center' valign='center'>".$res['name']."</td>";
  echo "<td align='center' valign='center'>".$email."</td>";
  echo "<td align='center' valign='center'>".$res['mobile']."</td>";
  echo "<td align='center' valign='center'>".$res['address']."</td>";
  echo "<td align='center' valign='center'>".$res['gender']."</td>";
  echo "<td align='center' valign='center'>".$res['dob']."</td>";
  echo "<td align='center' valign='center'>".$res['education']."</td>";
  echo "<td align='center' valign='center'>".$res['status']."</td>";
  echo "<td align='center' valign='center'><a href='status_expert_admin.php?expert_id=$expert_id' class='btn btn-info' role='button'>Update</a></td>";
  
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
    <li class="page-item"><a class="page-link" href="view_expert_admin.php">Previous</a></li>
    <li class="page-item"><a class="page-link" href="view_expert_admin.php">1</a></li>
    <li class="page-item"><a class="page-link" href="view_expert_admin.php">2</a></li>
    <li class="page-item"><a class="page-link" href="view_expert_admin.php">3</a></li>
    <li class="page-item"><a class="page-link" href="view_expert_admin.php">Next</a></li>
  </ul>
</nav>
</div>
</div>

</body>
</html>