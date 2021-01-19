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

session_start();
$STATE=$_GET['STATE'];
$TYPE=$_GET['TYPE'];
if(!isset($STATE)&& !isset($TYPE))
{
  echo "none";
  $STATE = false;
  $TYPE = "none";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
  * {
  box-sizing: border-box;
}


.button {
  background-color: #00C5CD;
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  border-radius: 50%;
}

.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
 
/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

p
{
  font-size: 17.5px;
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
      <a class="navbar-brand" href="#">Mental Health Care</a>
    </div>
    <ul class="nav navbar-nav">
      
      <?php if($STATE==true)
          {
            if($TYPE == 'user')
            { ?>
      <li class="active"><a href="MainPage.html">Home</a></li>
      <li><a href="view_user.php">Profile</a></li>
      <li><a href="user_story.php">Post Stories</a></li>
      <li><a href="user_view_expert.php">List of Expert</a></li>
      </li> 
      <li><a href="quiz.php"></i>Quick Test</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="SignInPage.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul> 

      <?php }
            elseif ($TYPE=='expert') 
            { ?>
    <li class="active"><a href="MainPage.html">Home</a></li>
    <li><a href="expert_profile.php">Expert Profile</a></li>
    <li><a href="expert_tips.php">Expert Tips</a></li>
    <li><a href="view_expert_tips.php">Expert Tips</a></li>
    <li><a href="view_expert_tips.php">View Expert Tips</a></li>
    <li><a href="expert_view_user.php">User Score</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <li><a href="SignInPage.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul> 
    <?php }
          }
            else
          {
            ?>
        <li><a href="SignInPage.php">SignInPage</a></li>
        <?php }?>
  </div>
</nav>

<center><h1 class="text-primary">WELCOME TO MENTAL HEALTH CARE DASHBOARD<span class="badge badge-secondary">MHC</span></h1></center>
<br></br>
<main class="scroll-container">
  <section>
    <table>
        
      <tr><td>
        <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <center><img src="icons&images/v.jpg" style="width:50%"></center>
          <div class="text">Mental Health</div>
        </div>

        <div class="mySlides fade">
         <div class="numbertext">2 / 3</div>
          <center><img src="icons&images/y.jpg" style="width:30%"></center>
          <div class="text">Mental Health</div>
        </div>
       
        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <center><img src="icons&images/s.jpg" style="width:30%"></center>
          <div class="text">Mental Health</div>
        </div>

        </div>
        <br>

        <div style="text-align:center">
         <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
        </div>
      </td>
          <td><ul>
          <li style = "list-style-type: circle"><h4>We are gathering Malaysians to let them know they are not alone in this Mental Health Battle against the pandemic</h4></li>
          <li style = "list-style-type: circle"><h4>Share your stories with your fellow friends</h4></li>
          <li style = "list-style-type: circle"><h4>Get insights about your Mental Health</h4></li>
          <li style = "list-style-type: circle"><h4>Get immediate consultations</h4></li>
          <li style = "list-style-type: circle"><h4>Get your hands dirty on the Mental Health Activities as recommended by our Psychology Experts</h4></li>
           <li style = "list-style-type: circle"><h4>Mental health includes our emotional, psychological, and social well-being. It affects how we think, feel, and act. It also helps determine how we handle stress, relate to others, and make choices. Mental health is important at every stage of life, from childhood and adolescence through adulthood.</h4></li>

          </ul>
      </td></tr>
   <td><ul>
         <li style = "list-style-type: circle"><h4>Mental health includes our emotional, psychological, and social well-being. It affects how we think, feel, and act. It also helps determine how we handle stress, relate to others, and make choices. Mental health is important at every stage of life, from childhood and adolescence through adulthood.</h4></li>
          <li style = "list-style-type: circle"><h4>Over the course of your life, if you experience mental health problems, your thinking, mood, and behavior could be affected. Many factors contribute to mental health problems, including:</h4></li>
          <li style = "list-style-type: circle"><h4>Biological factors, such as genes or brain chemistry,Life experiences, such as trauma or abuse, Family history of mental health problems.
          </h4>
          <li style = "list-style-type: circle"><h4>Not sure if you or someone you know is living with mental health problems? Experiencing one or more of the following feelings or behaviors can be an early warning sign of a problem:Eating or sleeping too much or too little, Pulling away from people and usual activities, Feeling numb or like nothing matters, Feeling helpless or hopeless, Smoking, drinking, or using drugs more than usual, Feeling unusually confused, forgetful, on edge, angry, upset, worried, or scared, Yelling or fighting with family and friends, Having persistent thoughts and memories you can't get out of your head, Hearing voices or believing things that are not true, Inability to perform daily tasks like taking care of your kids or getting to work or school.</h4>
          </ul>
      </td></tr>
    </table>

    <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
       dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
  </script>
  </section>








</body>
</html>