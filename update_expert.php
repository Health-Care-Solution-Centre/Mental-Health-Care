
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
      <li class="active"><a href="MainPage.html">Home</a></li>
       <li><a href="user_story.php">Upload Stories</a></li>
     
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
$expert_email=$_SESSION["email"];
//$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : '';
//$user_id = $_GET['user_id'];
$SelSql="SELECT * FROM psychology_expert WHERE expert_email = '$expert_email'";
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
  <h2>Update Status Expert Profile</h2>     
  <body>
    <form action="update_status.php" method="post" enctype="multipart/form-data">
      <table class="table table-bordered">
        

         <tr>
          <td>Upload Image</tD>
          <td>
          <?php $path="image/$email/$pic"; ?>      
          <img src="<?php echo $path; ?>" width="100px" height="100px" readonly="readonly" /></td>
        </tR>
        <tr>
          <td>Enter Name</tD>
          <td><input type="text" value="<?php echo $r ['expert_name']; ?>" name="n" readonly="readonly"/></td>
        </tR>
        <tr>
          <td>Enter Email</tD>
          <td><input type="email" value="<?php echo $r ['expert_email']; ?>" name="e" readonly/></td>
        </tR>
        
        <tr>
          <td>Enter Mobile</tD>
          <td><input type="number" value="<?php echo $r ['mobile']; ?>" name="m" readonly/></td>
        </tR>
        <tr>
          <td>Enter Address</tD>
          <td><input type="text" value="<?php echo $r ['address']; ?>" name="adds" readonly/></td>
        </tR>
        <
         <tr>
          <td>Enter Education</tD>
          <td><input type="text" value="<?php echo $r ['expert_education']; ?>" name="expert_education" readonly="readonly"/></td>
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