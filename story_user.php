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
      <li class="active"><a href="MainPage.php">Home</a></li>
      <li><a href="view_user.php">Profile</a></li>
      <li><a href="story_user.php">Post Stories</a></li>
      <li><a href="user_view_expert.php">List of Expert</a></li>
     

        </li> 
       <li><a href="quiz.php"></i>Quick Test</a></li> 
     </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="SignInPage.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul> 
  </div>
</nav>

<form action="story_user1.php" method="post">
     <table class="table table-bordered" >

       <tr>
        <td colspan="2" align="left"><h1>MENTAL HEALTH CARE STORY</h1></td>
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
      <td colspan="2" align="left" >
      <input type="submit" name="save" value="Save Data"/>
      <input type="reset" value="Clear" class="genric-btn primary" name="reset" />
      </td>
      </tr>

      </table>
      </form>

</body>
</html>