<?php
include "db.php";

$stmt = mq("SELECT * FROM BOARD");
while($row = mysqli_fetch_array($stmt)) {
	$link = "postDetail.php?id=".$row['id'];
?>
	<a href="<?php echo $link; ?>">
<?php echo $row['TItle'];  ?>
</a>
<?php } ?>
