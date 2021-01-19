
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

<center><h1 class="text-primary">WELCOME TO USER DASHBOARD<span class="badge badge-secondary">MHC</span></h1></center>

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

 <form action="user_update_story.php" method="post">
     <table class="table table-bordered" >
         <!--<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">-->
       <tr>
        <td colspan="2" align="left"><h1>MENTAL HEALTH CARE STORY</h1></td>
      </tr>
       <tr>
      <td>Name</td>
      <td>
      <input type="text" name="username" value="<?php echo $r ['username']; ?>"class="single-input-primary" required />
      </td>
      </tr>
       <tr>
      <td>Email</td>
      <td>
      <input type="text" name="user_email" value="<?php echo $r ['user_email']; ?>"class="single-input-primary" required />
      </td>
      </tr>
       <tr>
      <td>Age</td>
      <td>
      <input type="text" name="age" value="<?php echo $r ['age']; ?>"class="single-input-primary" required />
      </td>
      </tr>
      <tr>
      <td>Title </td>
      <td>
      <input type="text" name="title" class="single-input-primary" required />
      </td>
      </tr>
    
      <tr>
      <td>Story </td>
      <td>
      <input type="text" name="story_user" class="single-input-primary" required />
      </td>
      </tr>
      <tr>
    
      <tr>
      <td colspan="2" align="left" >
      <input type="submit" value="Submit" class="genric-btn primary" name="submit" />
      <input type="reset" value="Clear" class="genric-btn primary" name="reset" />
      </td>
      </tr>

      </table>
      </form>




</body>
</html>