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
<!DOCTYPE html>
<html>
  <head>
    <title>Product User LineGraph</title>
    <style>
      .chart-container {
        width: 750px;
        height: auto;

      }
    </style>

  </head>
  <body>
    <div class="container">
  <h2>User's Graph</h2> 
</div>
    <div class="chart-container", align="center", style="margin-left:200px;margin-top: 100px;" >
      <canvas id="mycanvas"></canvas>
    </div>
    
    <!-- javascript -->
    <script type="text/javascript" src="chart_js/jquery.min.js"></script>
    <script type="text/javascript" src="chart_js/Chart.min.js"></script>
    <script type="text/javascript" src="chart_js/linegraph.js"></script>
  </body>
</html>