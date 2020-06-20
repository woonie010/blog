<?php
$con = mysqli_connect('localhost','baikwoontaek','1234','test');
$userID = $_POST['userID'];
$userPassword = $_POST['userPassword'];

$query = "INSERT INTO USR_INFO(userID,userPassword) VALUES('$userID','$userPassword')";

$stmt = mysqli_query($con,$query);
echo "<script>alert('register success');location.href='index.php';</script>";

?>
