<?php
ob_start();
session_start();
include("db_config.php");
if (!$_SESSION["username"]){
header('Location:index.php?msg=1');
}
ini_set('display_errors', 1);
?>

<html lang="en">
	<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>

  <body>
  <div class="container-narrow">
		
		<div class="jumbotron">
			<p class="lead">
				Welcome <?php echo $_SESSION["username"]; ?>!! You are now logged in!</a>
			</p>
        </div>
		
	  <div class="footer">
		<p><h4><a href="logout.php">Logout</a><h4> </p>
      </div>
  
</body>
</html>