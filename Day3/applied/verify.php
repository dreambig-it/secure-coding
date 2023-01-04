<?php

	$username = "jacob";
	$password = "verysecretpassword";
	session_start();
	if($_POST["username"] === $username && $_POST["password"] === $password) {
		$_SESSION['user'] = $username;
		header("Location: user.php");
		die();
	}
	elseif($_POST["username"] === "admin" && $_POST["password"] === "Adm1NP4ssw0rd") {
		$_SESSION['user'] = $username;
		header("Location: admin.php");
		die();
	}
	else {
		header("Location: index.php");
		die();
	}

?>
