<html>
<head>
</head>
<body>
<?php
session_start();
   if (!isset($_SESSION['user']))
   {
	header("Location: error.html");
	      exit;
	  }
?>
<div class="footer">
		<a style="float: right;" href="logout.php">Logout</a>
		<center><h1>Welcome Admin</h1></center>
		<div class="img">
		<center><img style="height: 50%;" src="./admin.png"></center>
	</div>
      </div>
</body>
</html>