<?php
include "Database_connection.php";
?>
<!DOCTYPE html>

<html>
 
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

    <style >

.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color: #4CAF50;} 

    </style>
   
	<meta charset=UTF-8" />
	 <center>
	<title>Depression Test</title>
	
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
 
<body>
 
	<div id="page-wrap">
 
		<h1>Result | Depression test</h1>
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            $answer6 = $_POST['question-6-answers'];
            $answer7 = $_POST['question-7-answers'];
            $answer8 = $_POST['question-8-answers'];
            $answer9 = $_POST['question-9-answers'];
            $answer10 = $_POST['question-10-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "D") { $totalCorrect++; }
            if ($answer2 == "D") { $totalCorrect++; }
            if ($answer3 == "D") { $totalCorrect++; }
            if ($answer4 == "D") { $totalCorrect++; }
            if ($answer5 == "D") { $totalCorrect++; }
            if ($answer6 == "D") { $totalCorrect++; }
            if ($answer7 == "D") { $totalCorrect++; }
            if ($answer8 == "D") { $totalCorrect++; }
            if ($answer9 == "D") { $totalCorrect++; }
            if ($answer10 == "D") { $totalCorrect++; }
            
            echo "<div id='results'>$totalCorrect / 10 mark. </div>";
            session_start();
            $user_email=$_SESSION["email"];
            $SCORE=$totalCorrect;
            $sql="UPDATE user SET mental_score='$SCORE' WHERE user_email='$user_email' ";
                    if(!mysqli_query($conn,$sql))
                    {
                      echo'<script>alert("Error. Try Again")</script>';
                      echo'<script>window.location="result.php"</script>';
                    }
        ?>

        <?php
$d = date("D");
if($totalCorrect >=6){
    echo "Your depression score is quite high. We suggest you to seek professional help.";
} else{
    echo "You are having a mild to low depression level. You can seek professional help or can seek help using our story features.";
}
?>
	 </center>
	</div>

  
    <center>

<form action="view_user.php">
         <input type="submit" value="Back to Main Page" class="button button1" />
         </form>
        
    </center>

</body>
 
</html>