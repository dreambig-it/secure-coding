<?php
session_start();
if ($_POST['captcha'] == $_SESSION['captcha']) {
    if ($_POST['username'] === "admin" && $_POST['password'] === "password") {
	    echo "Login";
    } else {
	    echo "Login Failed";
    }
} else {
	echo "Captcha error";
}

?>
