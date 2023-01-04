<?php
session_start();
   if (isset($_SESSION['user']))
   {
	header("Location: user.php");
	      exit;
	  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="./log.css">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form  action="verify.php" method="post"> 
					<label for="chk" aria-hidden="true">Login</label>
					<!-- <input type="text" name="txt" placeholder="User name" required=""> -->
					<input type="text" name="username" placeholder="Username" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button>Login</button>
				</form>
			</div>
	</div>
</body>
</html>