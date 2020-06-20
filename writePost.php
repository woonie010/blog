<?php

$con = mysqli_connect('localhost', 'baikwoontaek', '1234', 'test');
$Title = $_POST['Title'];
$Detail = $_POST['Detail'];
session_start();
$userID = $_SESSION['userID'];

$query = "INSERT INTO BOARD(userID, Title, Detail) VALUES('$userID', '$Title', '$Detail')";
$stmt = mysqli_query($con, $query);
if($stmt) {
	echo "<script>location.href='index.php';</script>";
}

?>
