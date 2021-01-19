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
include_once 'Database_connection.php';
$sql = "DELETE FROM user WHERE user_id='" . $_GET["user_id"] . "'";
if (mysqli_query($conn, $sql)) {
    ?>
		<script>
			alert("Story has been deleted.");
			window.location.href = "update_story-admin.php";
		</script>
		<?php
} else {
    ?>
		<script>
			alert("Fail to delete.");
			window.location.href = "update_story-admin.php";
		</script>
		<?php
}
mysqli_close($conn);
?>