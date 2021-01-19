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
$expert_id=$_GET['expert_id'];
$SelSql="SELECT * FROM expert_profile WHERE expert_id=$expert_id";
$res=mysqli_query($conn,$SelSql);
$r=mysqli_fetch_assoc($res);
 
?>
<!--<?php 
include'Database_connection.php';
//$x = isset($_GET['expert_id']) ? $_GET['expert_id'] : '';
$x=$_GET['expert_id'];//
$test="select * from expert_profile where expert_id='$x'";
$query=mysqli_query($conn,$test);
// if($query === FALSE) { 
//    die(mysqli_error());
// }
$res=mysqli_fetch_assoc($query);

extract($res);
extract($_GET);
if(isset($update)&!empty($update))
{
$img=$_FILES['pic']['name'];  

  if($img=="")
  { 
    
  $query="update expert_profile SET name='$n',email='$e',mobile='$m',address='$adds',gender='$gen',dob='$dob',education='$education',status='$status', pic='$img' where expert_id=$x";
  mysqli_query($conn,$query);  
  }
  else
  {
  //delete old pic 
  unlink("image/$email/$pic");
  move_uploaded_file($_FILES['pic']['tmp_name'],"image/$email/".$_FILES['pic']['name']);  
  
  $query="update expert_profile SET name='$n',email='$e',mobile='$m',address='$adds',gender='$gen',dob='$dob',education='$education',status='$status',pic='$img' where expert_id=$x";
  mysqli_query($conn,$query);  
  
  }
  header( "refresh:2;url=view_expert_admin.php" );  
  echo '<script type="text/javascript">';
  echo ' alert("Status Updated!")';  //not showing an alert box.
  echo '</script>';

}


?>-->
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
        <input type="hidden" name="expert_id" value="<?php echo $expert_id; ?>">

         <tr>
          <td>Upload Image</tD>
          <td>
          <?php $path="image/$email/$pic"; ?>      
          <img src="<?php echo $path; ?>" width="100px" height="100px" readonly="readonly" /></td>
        </tR>
        <tr>
          <td>Enter Name</tD>
          <td><input type="text" value="<?php echo $r ['name']; ?>" name="n" readonly="readonly"/></td>
        </tR>
        <tr>
          <td>Enter Email</tD>
          <td><input type="email" value="<?php echo $r ['email']; ?>" name="e" readonly/></td>
        </tR>
        
        <tr>
          <td>Enter Mobile</tD>
          <td><input type="number" value="<?php echo $r ['mobile']; ?>" name="m" readonly/></td>
        </tR>
        <tr>
          <td>Enter Address</tD>
          <td><input type="text" value="<?php echo $r ['address']; ?>" name="adds" readonly/></td>
        </tR>
        <tr>
          <td>Select gender</tD>
          <td>
          Male<input type="radio" <?php if($r ['gender']=="m"){echo "checked";} ?> value="m" name="gen" readonly/>
          Female<input type="radio" <?php if($r ['gender']=="f"){echo "checked";} ?> value="f" name="gen" readonly/>
          </td>
        </tR>
         <tr>
          <td>Enter Education</tD>
          <td><input type="text" value="<?php echo $r ['education']; ?>" name="education" readonly="readonly"/></td>
        </tR>
        <tr>
          <td>Select Birthday Date</tD>
          <td><input type="date" value="<?php echo $r ['dob']; ?>" name="dob" readonly></td>
        </tR>

       <td>Select Status</tD>
          <td>
          Active<input type="radio" <?php if($r ['status']=="Active"){echo "checked";} ?> value="Active" name="status"/>
          Deactive<input type="radio" <?php if($r ['status']=="Deactive"){echo "checked";} ?>value="Deactive" name="status"/>
          </td>
       
        
        <tr>
      <td align="center" colspan="2">
        <input type="submit" name="save" value="Update"/>
        </td>
        </tR>
      </table>
    </form>







</body>
</html>
