<?php
// In this page authorization is being done

if(isset($_COOKIE['admin'])){
	if($_COOKIE['admin'] == 1){
		header("Location: admin.php");
	}
}
else{
	header("Location: login.php");
}
?>

<center><h1>Welcome User</h1></center>