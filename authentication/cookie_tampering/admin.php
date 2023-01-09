<?php
// In this page authorization is being done

if(!(isset($_COOKIE['admin']))){
	header("Location: login.php");
}
elseif ($_COOKIE['admin'] == 0) {
	// code...
	header("Location: dashboard.php");
}
?>
<center><h1>Welcome Admin</h1></center>