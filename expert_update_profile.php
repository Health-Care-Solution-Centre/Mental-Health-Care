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
$expert_email = $_SESSION["email"];
$SelSql="SELECT * FROM psychology_expert WHERE expert_email = '$expert_email'";
$res=mysqli_query($conn,$SelSql);
$r=mysqli_fetch_assoc($res);
 
?>
<!--<?php 
include'Database_connection.php';
$x=$_GET['email'];
$test="select * from expert_profile where email='$x'";
$query=mysqli_query($conn,$test);
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
  
    <div class="container">
  <h2>Expert Profile</h2>     
  <body>
    <form action="update_expert_profile.php" method="post" enctype="multipart/form-data">
      <table class="table table-bordered">
        <input type="hidden" name="expert_id" value="<?php echo $expert_id; ?>">

         <!--<tr>
          <td>Upload Image</tD>
          <td>
          <?php $path="image/$email/$pic"; ?>      
          <img src="<?php echo $path; ?>" width="100px" height="100px" readonly="readonly" /></td>
        </tR>-->
        <tr>
          <td>Enter Name</tD>
          <td><input type="text" name="n" value="<?php echo $r ['expert_name']; ?>"class="single-input-primary" required  /></td>
        </tR>
        <tr>
          <td>Email</tD>
          <td><input type="email" value="<?php echo $r ['expert_email']; ?>" name="e" readonly="readonly"></td>
        </tR>
		<tr>
          <td>Enter Password</tD>
          <td><input type="text" class="single-input-primary" value="<?php echo $r ['expert_password']; ?>" name="p" required></td>
        </tR>
        
        <tr>
          <td>Enter Mobile</tD>
          <td><input type="number" name="m" value="<?php echo $r ['mobile']; ?>"class="single-input-primary" required /></td>
			
		
		</tR>
        <tr>
          <td>Enter Address</tD>
          <td><input type="text" name="adds" value="<?php echo $r ['address']; ?>"class="single-input-primary" required /></td>
        </tR>
        
         <tr>
          <td>Enter Education</tD>
          <td><input type="text" value="<?php echo $r ['expert_education']; ?>" name="education" ></td>
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
