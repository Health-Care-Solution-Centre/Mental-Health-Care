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
$servername = "localhost";
$database = "mentalhealth";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
//echo "Connected successfully";

 $date=$_POST["date"];
  $tip=$_POST["tip"];
 
$sql = "INSERT INTO tips (date, tip) VALUES ('$date', '$tip')";
if (mysqli_query($conn, $sql)) {
    header( "refresh:2;url=view_expert_tips.php" );  
        echo '<script type="text/javascript">';
        echo ' alert("Expert update tips!")';  //not showing an alert box.
        echo '</script>';

	}
	else
	{
		$fmsg="Failed to update!.";
	}
mysqli_close($conn);
?>