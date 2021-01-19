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


    <ul class="nav navbar-nav navbar-right">
      <li><a href="SignInPage.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul> 
  </div>
</nav>
<br><br>

 <form action="expert_update_tips.php" method="post">
     <table class="table table-bordered" >
      <input type="hidden" name="tip_id" value="<?php echo $tip_id; ?>">
       <tr>
        <td colspan="2" align="left"><h1> Expert share tips</h1></td>
      </tr>
  
      <tr>
      <td>Tips </td>
      <td>
      <textarea type="text" name="tip" class="single-input-primary" row="5" cols="50" required></textarea>
      </td>
      </tr>
      <tr>
      <tr>
      <td>Date</tD>
      <td><input type="date"  name="date" ></td>
       </tR>
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