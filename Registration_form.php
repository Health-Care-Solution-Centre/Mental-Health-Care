<?php
include "Database_connection.php";
    if(isset($_POST['submit']))
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
            	$EMAIL1=$_POST['email_address'];
            	$sql_e="SELECT * FROM user WHERE user_email='$EMAIL1'";
            	$res=mysqli_query($conn,$sql_e);
            	if(mysqli_num_rows($res) > 0)
            	{
            		$row = mysqli_fetch_assoc($res);
        			if($EMAIL1==$row['user_email'])
                	{
                		echo'<script>alert("Email already exists. Please try another email.")</script>';
            		    echo'<script>window.location="Registration_form.php"</script>';
                	}
            }
            		else
            		{
                		$NAME=$_POST['username'];
                		$PASSWORD=$_POST['password'];
                		$EMAIL=$_POST['email_address'];
                		$AGE=$_POST['age'];
                		$GENDER=$_POST['gender'];
                		$DATE = strftime('%F');
                		$sql="INSERT INTO user (user_id,username,user_email,age,gender,user_password,mental_score,mental_activity,story,register_date,status,admin_id,title,story_user,statuspost,reg_Date) VALUES (NULL, '$NAME','$EMAIL','$AGE','$GENDER','$PASSWORD',NULL,NULL,NULL,'$DATE','1','1','NULL','NULL','0',now())";
                		if(!mysqli_query($conn,$sql))
                		{
                			echo'<script>alert("Error. Try Again")</script>';
                			echo'<script>window.location="Registration_form.php"</script>';
                		}
                		else
                		{
                			echo'<script>alert("Registered Successfully")</script>';
                			echo'<script>window.location="SignInPage.php"</script>';
                		}
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
<title>SIGN UP FORM</title>
</head>
<style>
.body_bg
{
    background: url(icons&images/wallpaper.svg) no-repeat center center fixed; 
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
                <td><h3><label>Gender</label></h3></td>
                <td><input type="radio" id="Male" name="gender" value="Male"><label for="Male">Male</label><br>
                    <input type="radio" id="Female" name="gender" value="Female"><label for="Female">Female</label><br>
                    <input type="radio" id="Other" name="gender" value="Other"><label for="Other">Other</label></td>
            </tr>
             <tr>
        
                <td><input type="submit" name="submit" value="submit" /><input type="reset"  value="Reset"/></td>       
            </tr>
            <tr>
                <td><a href="SignInPage.php" class="btn btn-info" role="button">Already signup? Click here</a><a href="index.html" class="btn btn-info" role="button">Cancel</a></td>
            </tr>
        </table>
 </form>
</div>
<div style="position: absolute; bottom: 5px;left:22%;"><img src="icons&images/bg1.jpeg" alt="mentalhealth" style="width:200px;height:150px;"/><img src="icons&images/registerbg.jpeg" alt="mentalhealth" style="width:200px;height:150px;"/><img src="icons&images/bg2.jpeg" alt="mentalhealth" style="width:200px;height:150px;"/><img src="icons&images/depression.webp" alt="mentalhealth" style="width:200px;height:150px;"/></div>
</body>
</html>