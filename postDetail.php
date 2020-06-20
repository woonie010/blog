<?php
include "db.php";

$id = $_GET['id'];
$stmt = mysqli_fetch_array(mq("SELECT * FROM BOARD WHERE id='$id'"));
if($stmt) {
?>
	<p>id = <?php echo $stmt['id']; ?></p>
	<p>title = <?php echo $stmt['TItle']; ?></p>
	<p>detail = <?php echo $stmt['Detail']; ?></p>
<?php } ?>
