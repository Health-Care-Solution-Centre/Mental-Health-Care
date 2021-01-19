<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
#t01 {
  width: 50%;    
  background-color: #f1f1c1;
}
</style>

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
$user_id=$_GET['user_id'];
$SelSql="SELECT * FROM user WHERE user_id=$user_id";
$res=mysqli_query($conn,$SelSql);
$r=mysqli_fetch_assoc($res);
 
?>
 <form action="update_story.php" method="post">
     <table class="table table-bordered" >
         <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">

       <tr>
        <td colspan="2" align="left"><h1>MENTAL HEALTH CARE STORY</h1></td>
      </tr>
      <tr>
      <td>Title </td>
      <td>
      <input type="text" name="title" value="<?php echo $r ['title']; ?>"class="single-input-primary" required />
      </td>
      </tr>
    
      <tr>
      <td>Story </td>
      <td>
      <input type="text" name="story_user" value="<?php echo $r ['story_user']; ?>"class="single-input-primary" required />
      </td>
      </tr>
      <tr>
      <td>Status Post</td>
      <td>
      <input type="number" min="0" max= "1" name="statuspost" value="<?php echo $r ['statuspost']; ?>"class="single-input-primary" required />
      </td>
      </tr>
      <tr>
      <td colspan="2" align="left" >
      <input type="submit" value="Update" class="genric-btn primary" name="submit" />
      <input type="reset" value="Clear" class="genric-btn primary" name="reset" />
      </td>
      </tr>

      </table>
      </form>

</body>
</html>