<?php
   session_start();

   
   $db = mysqli_connect('localhost', 'root','', 'mentalhealth');
// initialize variables
   $title = "";
   $story_user = "";
   $user_id = 0;

   if(isset($_POST['submit']))
   {
      $title = $_POST['title'];
      $story_user = $_POST['story_user'];
      

      mysqli_query($db, "INSERT INTO user (title, story_user) 
         VALUES ('$title', '$story_user');"); 
      $_SESSION['message'] = "Detail saved"; 
      header('location: story_user.php');
   }
?>
