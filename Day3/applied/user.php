<html>
<head>
</head>
<body>
<?php
session_start();
   if (!isset($_SESSION['user']))
   {
	header("Location: /error.html");
	      exit;
	  }
?>
<div class="footer">
		<a style="float: right;" href="logout.php">Logout</a>
		<center><h1>Welcome to User</h1></center>
			<div class="img">
		<center><img src="https://i.redd.it/ebyyg0yg00v91.jpg"></center>
	</div>
      </div>
</body>
</html>