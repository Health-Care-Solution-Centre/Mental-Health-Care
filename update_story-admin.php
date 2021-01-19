<?php
require('Database_connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
  <h2>Update story to website</h2>  
  <br></br>  
  <table>
    <tr>
    <th>Status</th>
  </tr>
  <tr>
    <td>0 = Pending</td>
  </tr>
  <tr>
  <td>1 = Post</td>
  </tr>
  </table>
  <right><label></label>

<!--<form action="" method="GET">

<input type="text" placeholder="Type here" name="search">&nbsp;

<input type="submit" value="Search" name="btn" class="btn btn-sm btn-primary">

</form></right>-->
       
  <table class="table table-bordered">
    <thead>
      <tr>
        <th class="text-center">No</th>
        <th class="text-center">Name</th>
        <th class="text-center">Age</th>
        <th class="text-center">Title</th>
        <th class="text-center">Story</th>
        <th class="text-center">Status</th>
        <th class="text-center">Action</th>
      </tr>
    </thead>

    <?php
$count=1;
$sql = "SELECT * FROM user";

$result = $conn->query($sql);

while($row = $result->fetch_assoc()) { ?>
    <tbody>
      <tr>
        <tr>
<td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row['username']; ?></td>
<td align="center"><?php echo $row['age']; ?></td>
<td align="center"><?php echo $row['title']; ?></td>
<td align="center"><?php echo $row['story_user']; ?></td>
<td align="center"><?php echo $row['statuspost']; ?></td>
<td class="text-center"> <a href="update_story_page.php? user_id=<?php echo $row['user_id']; ?>" class="btn btn-info" role="button">Update</a> <a href="delete_story.php?user_id=<?php echo $row['user_id']; ?>" class="btn btn-danger" role="button">Delete</a></td>
      </tr>
<?php $count++; } ?>
       
      
    </tbody>
  </table>
  <nav aria-label="Page navigation example">
  <div class="btn-group pull-right">
  <ul class="pagination" class="float-right">
    <li class="page-item"><a class="page-link" href="">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
</div>
</div>
</body>
</html>