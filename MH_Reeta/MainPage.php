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
<html>
<head>
	<title>Mental Health Care</title>
</head>
<style type="text/css">
	* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: 'Helvetica', sans-serif;
}

/* All the snapping stuff */
.scroll-container {
  height: 100vh;
  overflow-y: scroll;
  scroll-snap-type: y mandatory;
}

section {
  height: 100vh;
  scroll-snap-align: center;
}

/* Other styles */
section {
  /*padding: 1rem;
  display: flex;*/
  background: url(icons&images/liquid_splash_4-wallpaper-1680x1050.jpg) no-repeat center; 
  	/*-webkit-background-size: cover;
  	-moz-background-size: cover;
  	-o-background-size: cover;
  	background-size: cover;*/
  align-items: center;
  justify-content: center;
  /*background-color: darkorchid;*/
}

section:nth-child(2n) {
  /*background-color: turquoise;*/
  background: url(icons&images/pastel_colors-wallpaper-1680x1050.jpg) no-repeat center center;
}

section:nth-child(3n) {
  /*background-color: tomato;*/
  background: url(icons&images/colorful_background_16-wallpaper-1680x1050.jpg) no-repeat center center;
}

section:nth-child(5n) {
  /*background-color: turquoise;*/
  background: url(icons&images/colorful_background_16-wallpaper-1680x1050.jpg) no-repeat center center;
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
<body>
<main class="scroll-container">
  <section>
  	<table>
  			<tr align="center">
  				<?php if($STATE==true)
  				{
  					if($TYPE == 'user')
  					{ ?>
 		 				<a class="button" href="founders.html">FOUNDERS</a>
            <a class="button" href="#">PROFILE</a>
            <a class="button" href="#">CHECK UP</a>
            <a class="button" href="#">SCORE</a>
            <a class="button" href="#">SHARE MY STORY</a>
            <a class="button" href="logout.php" style="background-color: #6A0DAD;">LOGOUT</a>
            

  					<?php }
  					elseif ($TYPE == 'admin') 
  					{ ?>
 		 				<a class="button" href="founders.html">FOUNDERS</a>
            <a class="button" href="#">ADD EXPERT</a>
            <a class="button" href="#">MANAGE USER</a>
            <a class="button" href="#">UPDATE MAINPAGE</a>
            <a class="button" href="logout.php" style="background-color: #6A0DAD;">LOGOUT</a>
  					<?php }
  					elseif ($TYPE=='expert') 
  					{ ?>
 		 				<a class="button" href="founders.html">FOUNDERS</a>
            <a class="button" href="#">PROFILE</a>
            <a class="button" href="#">VIEW USERS</a>
            <a class="button" href="#">UPDATE MENTAL HEALTH TIPS</a>
            <a class="button" href="logout.php" style="background-color: #6A0DAD;">LOGOUT</a>
  					<?php }
  				}
  					else
  				{
  					?>
  				<a class="button" href="SignInPage.php">SIGN IN</a>
  				<a class="button" href="founders.html">FOUNDERS</a>
  				<?php }?>
  			</tr>
  			<tr>
				<th><img src="icons&images/coollogo_com-20958361.png" alt="Logo"/></th>
  				<th><img src="icons&images/Logo.png" style="width:200px;height:150px; alt="Logo"/></th>
			</tr>
			<tr><td>
				<div class="slideshow-container">

				<div class="mySlides fade">
  				<div class="numbertext">1 / 3</div>
  				<img src="icons&images/1a74a0c41792aaa7bbd9ffbe986fcce2.jpg" style="width:100%">
  				<div class="text">Mental Health</div>
				</div>

				<div class="mySlides fade">
 				 <div class="numbertext">2 / 3</div>
  				<img src="icons&images/images.png" style="width:100%">
  				<div class="text">Mental Health</div>
				</div>

				<div class="mySlides fade">
  				<div class="numbertext">3 / 3</div>
  				<img src="icons&images/support_mental_health_awareness_facebook_cover.jpg" style="width:100%">
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
  				<li style = "list-style-type: circle"><p style="font-size: 14px;">We are gathering Malaysians to let them know they are not alone in this Mental Health Battle against the pandemic</p></li>
  				<li style = "list-style-type: circle"><p style="font-size: 14px;">Share your stories with your fellow friends</p></li>
  				<li style = "list-style-type: circle"><p style="font-size: 14px;">Get insights about your Mental Health</p></li>
  				<li style = "list-style-type: circle"><p style="font-size: 14px;">Get your hands dirty on the Mental Health Activities as recommended by our Psychology Experts</p></li>
          <li style = "list-style-type: circle"><p style="font-size: 14px;">Get immediate consultations with our <h5>HI!BOT</h5></p></li>
  				</ul>
          <?php if($STATE==true)
          {
            if($TYPE == 'user')
            { ?>
          <div><button style="background-color: transparent;border: none; cursor: pointer;"><img src="icons&images/bot.gif" alt="chatbot" style="height: 220px; width: 220px;" /></button></div>
        <?php } }?>
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
  <section>
    <div class="row">
  		<div class="column" style="padding: 5px;border: 5px solid black;">
    		<h2>What is Mental Health?</h2>
    		<p>Mental health includes our emotional, psychological, and social well-being. It affects how we think, feel, and act. It also helps determine how we handle stress, relate to others, and make choices. Mental health is important at every stage of life, from childhood and adolescence through adulthood.</p>
			
			<p>Over the course of your life, if you experience mental health problems, your thinking, mood, and behavior could be affected. Many factors contribute to mental health problems, including:</p>

			<p>Biological factors, such as genes or brain chemistry,Life experiences, such as trauma or abuse, Family history of mental health problems.</p>

			<p>Not sure if you or someone you know is living with mental health problems? Experiencing one or more of the following feelings or behaviors can be an early warning sign of a problem:Eating or sleeping too much or too little, Pulling away from people and usual activities, Feeling numb or like nothing matters, Feeling helpless or hopeless, Smoking, drinking, or using drugs more than usual, Feeling unusually confused, forgetful, on edge, angry, upset, worried, or scared, Yelling or fighting with family and friends, Having persistent thoughts and memories you can't get out of your head, Hearing voices or believing things that are not true, Inability to perform daily tasks like taking care of your kids or getting to work or school</p>
  		</div>
  		<div class="column" style="padding: 5px;border: 5px solid black;">
    		<h2>Mental Health Myths and Facts</h2>
    		<p>Myth: Children don't experience mental health problems.</p>
			<p>Fact: Even very young children may show early warning signs of mental health concerns. These mental health problems are often clinically diagnosable, and can be a product of the interaction of biological, psychological, and social factors.

			Half of all mental health disorders show first signs before a person turns 14 years old, and three quarters of mental health disorders begin before age 24.

			Unfortunately, less than 20% of children and adolescents with diagnosable mental health problems receive the treatment they need. Early mental health support can help a child before problems interfere with other developmental needs.</p>

			<p>Myth: I can't do anything for a person with a mental health problem.</p>
			<p>Fact: Friends and loved ones can make a big difference. Only 44% of adults with diagnosable mental health problems and less than 20% of children and adolescents receive needed treatment. Friends and family can be important influences to help someone get the treatment and services they need by: Reaching out and letting them know you are available to help, Helping them access mental health services, Learning and sharing the facts about mental health, especially if you hear something that isn't true, Treating them with respect, just as you would anyone else, Refusing to define them by their diagnosis or using labels such as "crazy"</p>
 		 </div>
  		<div class="column" style="padding: 10px;border: 5px solid black;">
   			 <h2>Anxiety, Depression, Stress</h2>
    		<p>Depression refers to an experience where you feel down most of the time which is called "low mood" and you have also lost interest in things you usually enjoy. You may also have changes in your sleep, appetite, feel guilty, de-motivated and generally withdraw from others.</p>
			<p>Stress is usually characterized by a sense of feeling overwhelmed. This feeling may be due to your coping capacity being over-stretched or having been under pressure for too long. Some stress can help us to perform our day to day functions, too much stress leaves us "distressed" and often exhausted.</p>
			<p>Anxiety is a sense of fear or dread that something terrible is going to happen. Anxiety can be general or specific to a place, social situation or thing (phobia)</p>
			<img src="icons&images/feature1-1.png" style="width:200px;height:200px; alt="Stress"/>
  		</div>
	</div>
  </section>
  <section>
    <h2>YOU ARE NOT ALONE IN THE JOURNEY HERE ARE SOME STORIES FROM OUR FELLOW FRIENDS</h2>
    <table>
    	<tr>
    		<th>STORY ONE</th>
    	</tr>
      <?php 
      include "Database_connection.php";
      $sql="SELECT * FROM mainpage ORDER BY main_page_id DESC LIMIT 1";
      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result)>0)
      {
      while ($row = $result->fetch_assoc())
      {
      ?>
      <tr><td><p style="font-size: 20px;"><?php echo $row["story1"]; ?></p></td></tr>
    </table>
  </section>
  <section>
    <table>
    	<tr>
    		<th><h4>STORY TWO</h4></th>
    	</tr>
    	<tr><td><p style="font-size: 20px;"><?php echo $row["story2"]; ?></p></td></tr>
    </table>
  </section>
  <section>
    <h2>SOME OF THE COMMON TIPS FROM OUR PSYCHOLOGY EXPERTS</h2>
    <table>
    	<tr>
    		<th><h5>Tips</h5></th><th><h5>Tips</h5></th>
    	</tr>
    	<td width="50%">
    		<p><?php echo $row["main_page_tips1"]; ?></p>
			<div><img src="icons&images/brain.gif" alt="mentalhealth" style="width:230px;height:200px;"/></div>
    	</td>
    	<td width="50%">
    		<p><?php echo $row["main_page_tips2"]; } }?></p>
			<div><img src="icons&images/giphy.gif" alt="mentalhealth" style="width:300px;height:300px;"/></div>
    	</td>
    </table>
  </section>
</main>
</body>
</html>