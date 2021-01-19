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
include('Database_Connection.php');
extract($_REQUEST);
if(isset($save))
{
  $query="select * from expert_profile where email='$e' ";
  $sql=mysqli_query($conn,$query);
  
  //select record
  $row=mysqli_num_rows($sql); 
  if($row==1)
  {
    echo '<script type="text/javascript">';
  echo ' alert("This Email already exist!")';  //not showing an alert box.
  echo '</script>';
  }
  else
  {
      
  //image
  $image=$_FILES['pic']['name'];
  //video
  
  $query="insert into expert_profile values('','$n','$e','$m','$adds','$gen','$dob','$education','$image','$status','$password',now())";
  
  //upload image
  @mkdir("image/$e");
  move_uploaded_file($_FILES['pic']['tmp_name'],"image/$e/".$_FILES['pic']['name']);
  
  if(mysqli_query($conn,$query))
  {
  header( "refresh:2;url=view_expert_admin.php" ); 
  echo '<script type="text/javascript">';
  echo ' alert("Expert Data save successfully")';  //not showing an alert box.
  echo '</script>';
   
  }
  else
  {
  echo '<script type="text/javascript">';
  echo ' alert("Some error while executing query")';  //not showing an alert box.
  echo '</script>';
   
    
  }
  
  }
  
}

?>
<div class="container">
  <h2>Add Expert Profile</h2>  
  <br></br>   
  <body>
    <form method="post" enctype="multipart/form-data">
      <table class="table table-bordered">

         <tr>
          <td>Upload Image</tD>
          <td><input type="file" name="pic" required></td>
        </tR>
        <tr>
          <td>Enter Name</tD>
          <td><input type="text" name="n" required/></td>
        </tR>
        <tr>
          <td>Enter Email</tD>
          <td><input type="email" name="e" required/></td>
        </tR>
        
        <tr>
          <td>Enter Mobile</tD>
          <td><input type="number" name="m" required/></td>
        </tR>
        <tr>
          <td>Enter Address</tD>
          <td><textarea name="adds" required></textarea></td>
        </tR>
        <tr>
          <td>Select gender</tD>
          <td>
          Male<input type="radio" value="m" name="gen" required/>
          Female<input type="radio" value="f" name="gen" required/>
          </td>
        </tR>
         <tr>
          <td>Enter Education</tD>
          <td><textarea name="education" required></textarea></td>
        </tR>
        <tr>
          <td>Select Birthday Date</tD>
          <td><input type="date" name="dob" required></td>
        </tR>

       <td>Select Status</tD>
          <td>
          Active<input type="radio" value="Active" name="status" required/>
          Deactive<input type="radio" value="Deactive" name="status" required/>
          </td>
       <tr>
          <td>Password</tD>
            <td><input type="password" name="password" required/></td>
        </tR>
        
        <tr>
      <td align="center" colspan="2">
        <input type="submit" name="save" value="Save Data"/>
        </td>
        </tR>
      </table>
    </form>





</body>
</html>
