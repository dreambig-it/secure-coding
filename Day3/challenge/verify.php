<?php

	$username = "jacob";
	$password = "verysecretpassword";

	if(!strcmp($_POST["username"], $username) && !strcmp($_POST["password"], $password)) {
		// echo "Hello world!";
		header("Location: home.php?userid=14");
		exit;
	}
	else {
		header("Location: index.php");
		exit;
	}

?>
