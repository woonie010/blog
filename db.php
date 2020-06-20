<?php
$con = mysqli_connect('localhost','baikwoontaek','1234','test');
function mq($query) {
	global $con;
	return mysqli_query($con,$query);
}
?>
