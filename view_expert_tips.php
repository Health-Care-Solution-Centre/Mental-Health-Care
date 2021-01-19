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
    <li><a href="expert_profile.php">Expert Profile</a></li>
	  <li><a href="expert_tips.php">Expert Tips</a></li>
    <li><a href="view_expert_tips.php">View Expert Tips</a></li>
	  <li><a href="expert_view_user.php">User Score</a></li>
                           
          </ul>
        </li> 

     
    <ul class="nav navbar-nav navbar-right">
      <li><a href="SignInPage.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul> 
  </div>
</nav>
   
<div class="container">
<h2>Display Tips Expert have been updated</h2>
<br></br>
 <table class="table table-bordered">
    <thead>
      <tr>
        <th class="text-center">No</th>
        <th class="text-center">Tips</th>
         <th class="text-center">Action</th>

      </tr>
    </thead>

    <?php
$count=1;
$sql = "SELECT * FROM tips";

$result = $conn->query($sql);

while($row = $result->fetch_assoc()) { ?>
    <tbody>
      <tr>
        <tr>
<td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row['tip']; ?></td>
<td class="text-center"><a href="delete_tip.php?tip_id=<?php echo $row['tip_id']; ?>" class="btn btn-danger" role="button">Delete</a></td>


      </tr>
<?php $count++; } ?>
       
      
    </tbody>
  </table>
</body>
</html>