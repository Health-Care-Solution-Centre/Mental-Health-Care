<?php
include_once 'Database_connection.php';
$sql = "DELETE FROM tips WHERE tip_id='" . $_GET["tip_id"] . "'";
if (mysqli_query($conn, $sql)) {
    ?>
		<script>
			alert("Tips has been deleted.");
			window.location.href = "view_expert_tips.php";
		</script>
		<?php
} else {
    ?>
		<script>
			alert("Fail to delete.");
			window.location.href = "view_expert_tips.php";
		</script>
		<?php
}
mysqli_close($conn);
?>