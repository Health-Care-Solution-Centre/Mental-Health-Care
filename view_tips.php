<?php
require('Database_connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
  body
  {
background: url(icons&images/) no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  font-family: Arial, Helvetica, sans-serif;
}
</style>
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
      <a class="navbar-brand" href="#"></a>
    </div>
    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.html"><span class="glyphicon glyphicon-log-in"></span> Home</a></li>
    </ul> 
  </div>
</nav>
<center><h1>This is some tips how to handle your mental health from our expert</h1></center>
<!--<h5>Because of the pandemic Covid-19,our lifestyle has been change. There are some poeple that lost their job,some they need to work from, some they did not get to meet with their family and many other problem. Because of this some people are stress, depression, anxiety and other mental health because our lifestyle have been change. We need to get used with this new norma. Here are some tips from our expert how to handle your mental health.</h5>-->
<br></br>
<div class="container">
 <table class="table table-bordered">
    <thead>
      <tr>
        <th class="text-center">No</th>
        <th class="text-center">Tips</th>

      </tr>
    </thead>

    <?php
$count=1;
$sql = "SELECT * FROM tips";

$result = $conn->query($sql);

while($row = $result->fetch_assoc()) { ?>
    <tbody>
      <tr>
        <tr>
<td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row['tip']; ?></td>


      </tr>
<?php $count++; } ?>
       
      
    </tbody>
  </table>
 <div style="position: absolute; bottom: 5px;left:30%;"><img src="icons&images/q.jpg" alt="mentalhealth" style="width:150px;height:100px;"/><img src="icons&images/y.jpg" alt="mentalhealth" style="width:150px;height:100px;"/><img src="icons&images/s.jpg" alt="mentalhealth" style="width:150px;height:100px;"/><img src="icons&images/v.jpg" alt="mentalhealth" style="width:150px;height:100px;"/></div>
</body>
</html>