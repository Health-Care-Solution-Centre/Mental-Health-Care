<?php
include_once 'Database_connection.php';
$sql = "DELETE FROM story WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    ?>
		<script>
			alert("Story has been deleted.");
			window.location.href = "mainpage_admin.php";
		</script>
		<?php
} else {
    ?>
		<script>
			alert("Fail to delete.");
			window.location.href = "mainpage_admin.php";
		</script>
		<?php
}
mysqli_close($conn);
?>