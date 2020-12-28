<!DOCTYPE html>

<html>
 
<head>
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
        
            $totalCorrect = 0;
            
            if ($answer1 == "C") { $totalCorrect++; }
            if ($answer2 == "D") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "B") { $totalCorrect++; }
            if ($answer5 == "D") { $totalCorrect++; }
            
            echo "<div id='results'>$totalCorrect / 5 mark. </div>";
            
        ?>
	 </center>
	</div>
    <center>

<form action="MainPage.php">
         <input type="submit" value="Back to Main Page" class="button button1" />
         </form>
        
    </center>
 
</body>
 
</html>