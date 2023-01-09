<?php
session_start();
if(!(isset($_SESSION['logged_in']))){
  header("Location: login.php");
}
?>
<a style="float: right;" href="logout.php">Logout</a>
<center><h1>Welcome Admin</h1></center>