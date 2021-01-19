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
</style>

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
  <h2>User Profile</h2>           
  <!--<table class="table table-bordered">
    <thead>
 
   </div>
 
     <br></br>
      <tr>
        <th class="text-center">No</th>
        <th class="text-center">User ID</th>
        <th class="text-center">User Name</th>
        <th class="text-center">Email</th>
        <th class="text-center">Age</th>
        <th class="text-center">Mental Score</th>
        <th class="text-center">Title</th>
        <th class="text-center">Story</th>
       

      </tr>
    </thead>-->
<!--
<?php
$conn = mysqli_connect("localhost","root","");
     if(!$conn){
           die("Database Connection failed".mysqli_error());
}else{
$db_select = mysqli_select_db($conn,"mentalhealth");
     if(!$db_select){
           die("Database selection failed".mysql_error());
}
}
session_start();
//$user_email=$_SESSION["email"];
//$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : '';
//$user_id = $_GET['user_id'];
$SelSql="SELECT * FROM user WHERE user_email = '$user_email'";
$res=mysqli_query($conn,$SelSql);
$r=mysqli_fetch_assoc($res);
//echo $r['username'];
?>
 
  
  
  echo "<tr>";
  echo "<td align='center' valign='center'>".$i."</td>";
  echo "<td align='center' valign='center'>".$uid['user_id']."</td>";
  echo "<td align='center' valign='center'>".$username['username']."</td>";
  echo "<td align='center' valign='center'>".$res['user_email']."</td>";
  echo "<td align='center' valign='center'>".$res['age']."</td>";
  echo "<td align='center' valign='center'>".$res['mental_score']."</td>";
  echo "<td align='center' valign='center'>".$res['title']."</td>";
  echo "<td align='center' valign='center'>".$res['story']."</td>";
  
  echo "<td align='center' valign='center'><a href='status_expert_admin.php?expert_id=$expert_id' class='btn btn-info' role='button'>Update</a></td>";
  
  echo "</tr>";
  $i++;
  }
  echo "</table>";


    
<tr>
       
    </tbody>
  </table>-->

  <table class="table table-bordered">
    <thead>
       <th class="text-center">No</th>
        <th class="text-center">User Name</th>
        <th class="text-center">Email</th>
        <th class="text-center">Age</th>
         <th class="text-center">Mental Score</th>
        <th class="text-center">Title</th>
        <th class="text-center">Story</th>
       
    </thead>

    <?php
$count=1;

$user_email=$_SESSION["email"];
$sql = "SELECT * FROM user WHERE user_email = '$user_email'";

$result = $conn->query($sql);

while($row = $result->fetch_assoc()) { ?>
    <tbody>
      <tr>
        <tr>
<td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row['username']; ?></td>
<td align="center"><?php echo $row['user_email']; ?></td>
<td align="center"><?php echo $row['age']; ?></td>
<td align="center"><?php echo $row['mental_score']; ?></td>
<td align="center"><?php echo $row['title']; ?></td>
<td align="center"><?php echo $row['story_user']; ?></td>

      </tr>
<?php $count++; } ?>
       
      
    </tbody>
  </table>

  <form action=" edit_profile_user.php">
         <input type="submit" value="Edit" class="button button1" />
         </form>



</div>
</div>

</body>
</html>