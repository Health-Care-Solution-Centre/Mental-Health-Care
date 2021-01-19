<script type="text/javascript">
    (function(d, m){
        var kommunicateSettings = 
            {"appId":"39d9e5a0d44b60da08f4c8fdd8d9b5164","popupWidget":true,"automaticChatOpenOnNavigation":true};
        var s = document.createElement("script"); s.type = "text/javascript"; s.async = true;
        s.src = "https://widget.kommunicate.io/v2/kommunicate.app";
        var h = document.getElementsByTagName("head")[0]; h.appendChild(s);
        window.kommunicate = m; m._globals = kommunicateSettings;
    })(document, window.kommunicate || {});
/* NOTE : Use web server to view HTML files as real-time update will not work if you directly open the HTML file in the browser. */
</script>
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
     <li class="dropdown" id="navstory">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></i>Manage Pschology Expert <span class="caret"></span></a>
          <ul class="dropdown-menu">            
        
      <li><a href="expert_tips_admin.php"></i>Add Expert Profile</a></li> 
      <li><a href="view_expert_admin.php"></i>Expert Data</a></li>
                           
          </ul>
        </li> 
      <li class="dropdown" id="navReport">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></i>Manage Story <span class="caret"></span></a>
          <ul class="dropdown-menu">            
        
      <li><a href="approve_decline_admin.php"></i>Approve/Decline</a></li> 
      <li><a href="update_story-admin.php"></i>Update Story</a></li>                      
          </ul>
        </li> 
     
      <li class="dropdown" id="navReport">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></i>Graph <span class="caret"></span></a>
          <ul class="dropdown-menu">            
        
      <li><a href="report_supplier.php"></i>Report</a></li> 
      <li><a href=""></i>Report</a></li>                      
          </ul>
        </li> 
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="SignInPage.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul> 
  </div>
</nav>
<div class="container">
  <h2>Approve/Decline the story</h2>  
  <br></br>         
  <table class="table table-bordered">
    <thead>
      <tr>
        <th class="text-center">No</th>
        <th class="text-center">Title</th>
        <th class="text-center">Story</th>
        <th class="text-center">Date & Time</th>
        <th class="text-center">Status</th>
        <th class="text-center">Action</th>
      </tr>
    </thead>

    <?php
$count=1;

$sql = "SELECT * FROM story";

if( isset($_GET['search']) ){

    $name = mysqli_real_escape_string($conn, htmlspecialchars($_GET['search']));

    $sql = "SELECT * FROM story WHERE title LIKE '%$title%' OR total LIKE '%$title%'";

}

$result = $conn->query($sql);

while($row = $result->fetch_assoc()) { ?>
    <tbody>
      <tr>
        <tr>
<td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row['title']; ?></td>
<td align="center"><?php echo $row['story']; ?></td>
<td align="center"><?php echo $row['date_time']; ?></td>
<td align="center"><?php echo $row['status']; ?></td>
<td class="text-center"><button type="button" class="btn btn-info">Accepted</button><button type="button" class="btn btn-danger">Declined</button></td>
      </tr>
<?php $count++; } ?>
       
      
    </tbody>
  </table>
  <nav aria-label="Page navigation example">
  <div class="btn-group pull-right">
  <ul class="pagination" class="float-right">
    <li class="page-item"><a class="page-link" href="approve_decline_admin.php">Previous</a></li>
    <li class="page-item"><a class="page-link" href="approve_decline_admin.php">1</a></li>
    <li class="page-item"><a class="page-link" href="approve_decline_admin.php">2</a></li>
    <li class="page-item"><a class="page-link" href="approve_decline_admin.php">3</a></li>
    <li class="page-item"><a class="page-link" href="approve_decline_admin.php">Next</a></li>
  </ul>
</nav>
</div>
</div>

</body>
</html>