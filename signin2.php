<?php
error_reporting(E_ALL);
$con = mysqli_connect('localhost','baikwoontaek','1234','test');
$userID = $_POST['userID'];
$userPassword = $_POST['userPassword'];
$query = "SELECT * FROM USR_INFO WHERE userID='$userID'";

$stmt = mysqli_query($con,$query);
if($stmt) {
	$res = mysqli_fetch_array($stmt);
	if($res['userPassword'] == $userPassword) {
		$_SESSION['isLogin'] = 1;
		echo "<script>alert('suc');location.href='index.html';</script>";
	else {
		echo "<script>alert('fail2');history.go(-1);</script>";
	}	
}
else {
	echo "<script>alert('fail');history.go(-1);</script>";
}

?>
