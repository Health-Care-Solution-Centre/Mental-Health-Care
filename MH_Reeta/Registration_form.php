<?php
include "Database_connection.php";
        if(isset($_POST['submit']))
        {
            $EMAIL1=$_POST['email_address'];
            $sql_e="SELECT * FROM user WHERE user_email='$EMAIL1'";
            if(mysqli_query($conn,$sql_e)>0)
            {
                echo'<script>alert("Email already exists. Please try another email.")</script>';
                echo'<script>window.location="Registration_form.php"</script>';
            }
            else
            {
            $PASSWORD1=$_POST['password'];
            $PASSWORD2=$_POST['password2'];
            if($PASSWORD1!=$PASSWORD2)
                {
                echo'<script>alert("Passwords do not match.")</script>';
                echo'<script>window.location="Registration_form.php"</script>';
                }
            else
            {
                $NAME=$_POST['username'];
                $PASSWORD=$_POST['password'];
                $EMAIL=$_POST['email_address'];
                $AGE=$_POST['age'];
                $DATE = strftime('%F');
                $sql="INSERT INTO user (user_id,username,user_email,age,user_password,mental_score,mental_activity,story,register_date,status,admin_id) VALUES (NULL, '$NAME','$EMAIL','$AGE','$PASSWORD',NULL,NULL,NULL,'$DATE','1','1')";
                if(!mysqli_query($conn,$sql))
                {
                echo'<script>alert("Error. Try Again")</script>';
                echo'<script>window.location="Registration_form.php"</script>';
                }
                else
                {
                echo'<script>alert("Message Sent Successfully")</script>';
                echo'<script>window.location="MainPage.php"</script>';
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
<title>SIGN UP FORM</title>
</head>
<style>
.body_bg
{
	background: url(icons&images/liquid_splash_4-wallpaper-1680x1050.jpg) no-repeat center center fixed; 
  	-webkit-background-size: cover;
  	-moz-background-size: cover;
  	-o-background-size: cover;
  	background-size: cover;
}
.data{
   background-color:#B19CD9;}

.Back {
    position: fixed; /* or position: absolute; */
    top: 0;
    right: 0;
	border: none;
    	background-color: black;
    	padding: 14px 28px;
    	font-size: 16px;
    	cursor: pointer;
    	color: white;
}

input:required:invalid, input:focus:invalid {
    background-image: url(icons&images/invalid.png);
    background-position: right top;
    background-repeat: no-repeat;
  }
  input:required:valid {
    background-image: url(icons&images/valid.png);
    background-position: right top;
    background-repeat: no-repeat;
  }

</style>
<body class="body_bg">
<div class="header" align="center">
<h1>SIGN UP FORM</h1>
</div>
<div class="data"  align="center">
    <form name="reg_form" action="Registration_form.php" method="post">
        <table border="0">
	<col width="200">
            <tr>
                <td><h3><label>Name</label></h3></td>
                <td><input type="text" name="username" required></input></td>
            </tr>
            <tr>
                <td><h3><label>Password</label></h3></td>
                <td><input type="password" id="password" name="password" required></input></td>
            </tr>
	       <tr>
                <td><h3><label>Confirm Password</label></h3></td>
                <td><input type="password" id="confirmPassword" name="password2" required></input></td>
            </tr>
	       <tr>
                <td><h3><label>Email Address</label></h3></td>
                <td><input type="email" name="email_address" required></input></td>
            </tr>
            <tr>
                <td><h3><label>Age</label></h3></td>
                <td><input type="number" name="age" required></input></td>
            </tr>
            <tr>
		
                <td><input type="submit" name="submit" value="submit" />
                <td><input type="reset"  value="Reset"/>		
            </tr>
            <tr><td><a href="SignInPage.php" class="button">SIGN IN! I have an account</a></td></tr>
            <tr><td><a href="MainPage.html" class="button">Cancel</a></td></tr>
        </table>
 </form>
</div>
<div style="position: absolute; bottom: 5px;right:40%;"><img src="icons&images/mental+health.gif" alt="mentalhealth" style="width:270px;height:230px;"/></div>
</body>
</html>