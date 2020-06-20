<link rel="stylesheet" href="Header.css">
<div class="Header">
<div class="Header-logo">
<img src="https://dummyimage.com/600x400/000/fff" />
</div>
<div class="Header-right">
<?php
session_start();
if (isset($_SESSION['userID'])) {
	echo "<a href='writePost.html'>writePost</a><a href='logout.php'>logout</a>";
} else {
	echo "<a href='signin.html'>signin</a>";
}	


?>
</div>
</div>
