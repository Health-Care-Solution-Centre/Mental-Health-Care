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
$user_email=$_SESSION["email"];
//$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : '';
//$user_id = $_GET['user_id'];
$SelSql="SELECT * FROM user WHERE user_email = '$user_email'";
$res=mysqli_query($conn,$SelSql);
$r=mysqli_fetch_assoc($res);
//echo $r['username'];
?>

  <body>
   <?php if (isset($_SESSION['message'])): ?>
    <div class="msg">
      <?php 
        echo $_SESSION['message']; 
        unset($_SESSION['message']);
      ?>
    </div>
  <?php endif ?>
    <div class="container">
  <h2>Update User Profile</h2>     
  <body>
    <form action="update_user_profile.php" method="post" enctype="multipart/form-data">
      <table class="table table-bordered">
        <input type="hidden" name="user_email" value="<?php echo $user_email; ?>">

         
        <tr>
          <td>Enter Username</tD>
          <td><input type="text" value="<?php echo $r ['username']; ?>" name="n"/></td>
        </tR>
        <tr>
          <td>Enter Email</tD>
          <td><input type="email" value="<?php echo $r ['user_email']; ?>" name="e"/></td>
        </tR>
        
        <tr>
          <td>Age</tD>
          <td><input type="number" value="<?php echo $r ['age']; ?>" name="age" /></td>
        </tR>
       
       
        
        <tr>
      <td align="center" colspan="2">
        <input type="submit" name="save" value="Update"/>
        </td>
        </tR>
      </table>
    </form>







</body>
</html>
