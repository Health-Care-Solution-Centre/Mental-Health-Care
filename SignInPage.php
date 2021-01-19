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
include "Database_connection.php";
        if(isset($_POST['submit']))
        {
            $USER=$_POST['user'];
            $EMAIL=$_POST['email_address'];
            $PASSWORD=$_POST['password'];
            if ($USER=='user')
            {
              $sql = "SELECT * FROM user WHERE user_email='$EMAIL' and user_password='$PASSWORD'";
              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0)
              { 
              session_start();
              $_SESSION["loggedin"] = true;
              $_SESSION["email"] = $EMAIL;
              $_SESSION["user_type"]= $USER;
              header("location: MainPage.php?STATE=true&TYPE=user");
            }
              else
              {
              echo'<script>alert("Incorrect ID or Password.")</script>';
              echo'<script>window.location="SignInPage.php"</script>';
              }

            }
            elseif ($USER == 'admin') 
            {
              $sql = "SELECT * FROM admin WHERE admin_email='$EMAIL' and admin_password='$PASSWORD'";
              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0) 
              {session_start();
                $_SESSION["loggedin"] = true;
                $_SESSION["email"] = $EMAIL;
                $_SESSION["user_type"]= $USER;
                #header("location: MainPage.php?STATE=true&TYPE=admin");
                header("location: home.php");
              }
              else
              {
              echo'<script>alert("Incorrect ID or Password.")</script>';
              echo'<script>window.location="SignInPage.php"</script>';
              }
            }
            else
            {
              $sql = "SELECT * FROM psychology_expert WHERE expert_email='$EMAIL' and expert_password='$PASSWORD'";
              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0)
              {session_start();
               $_SESSION["loggedin"] = true;
               $_SESSION["email"] = $EMAIL;
               $_SESSION["user_type"]= $USER; 
               header("location: MainPage.php?STATE=true&TYPE=expert");
              }
              else
              {
              echo'<script>alert("Incorrect ID or Password.")</script>';
              echo'<script>window.location="SignInPage.php"</script>';
              }
            }
    }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title>SIGN IN</title>
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.body_bg
{
background: url(icons&images/signin1.jpg) no-repeat center center fixed; 
  	-webkit-background-size: cover;
  	-moz-background-size: cover;
  	-o-background-size: cover;
  	background-size: cover;
	font-family: Arial, Helvetica, sans-serif;
 

}
.login_box
{
width: 350px;
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
colour: white;
background-color: #ffffff;
  opacity: 1;
  filter: alpha(opacity=50); /* For IE8 and earlier */
}
.login_box h1
{
float: left;
font-weight: bold;
font_size: 40px;
border-bottom: 6px solid #301934;
margin-bottom: 50px;
padding: 13px 0;
}
.text_box
{
width: 100%;
overflow: hidden;
font-size: 20px;
padding: 8px 0;
margin 8px 0;
border-bottom: 1px solid #301934; 
}
.text_box input
{
border: none;
outline: none;
background: none;
}
/* Set a style for all buttons */
button 
{width: 100%;
background: none;
border: 2px solid #301934;
colour:white;
padding: 5px;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

[type=radio] { 
  position: absolute;
  opacity: 0;
  width: 0;
  height: 0;
}

/* IMAGE STYLES */
[type=radio] + img {
  cursor: pointer;
}

/* CHECKED STYLES */
[type=radio]:checked + img {
  outline: 2px solid #f00;
}

}
</style>
<body class="body_bg">

<form action="SignInPage.php" method="post">

  <div class="login_box">
	<div class="text_box">
    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter email address" name="email_address" required>
</div>

<div class="text_box">
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
</div>
<div>
<label>
  <input type="radio" name="user" value="user" checked>
  <img src="icons&images/user3.png" width="100px" height="100px">
</label>

<label>
  <input type="radio" name="user" value="admin">
  <img src="icons&images/adminlogin.png" width="110px" height="110px">
</label>

<label>
  <input type="radio" name="user" value="expert">
  <img src="icons&images/dr1.png" width="100px" height="100px">
</label>
</div>
    <button type="submit" value="submit" name="submit">Sign In</button>

<div>
<br><form>
 <input type="button" class="btn btn-info" value="Go back!" onclick="location.href = 'index.html';">
</form></br>
<br><a href="Registration_form.php" class="btn btn-info" role="button">USER REGISTER! I don't have an account</a></br>

</br>
</div>
</div>
</form>
</body>
</html>