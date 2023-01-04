<html>
<head>
	<style>
		body {
			background-image: url("img/userback1.png");
			background-size: cover;
			color: white;
		}	
	</style>
</head>
<body>
<?php

	if(isset($_GET["userid"])) {
		$userid = $_GET["userid"];
		if($userid == 14) {
			// Page for userid 6475
			echo "<h1><center>Welcome Jacob</center><h1>";
		}
		elseif ($userid == 4) {
			echo "<h1><center>Welcome Jessie</center><h1>";			
		}
		elseif ($userid == 10) {
			echo "<h1><center>Welcome Adam</center><h1>";
		}
		elseif ($userid == 1) {
			echo "<h1><center>Welcome Admin</center></h1>";
		}
		elseif ($userid == 3) {
			echo "<h1><center>Welcome Tony</center><h1>";
		}
		elseif($userid == 9) {
			echo "<h1><center>Welcome Ezekiel</center><h1>";
		}
		else {
			echo "<h1><center>User Not Found</center><h1>";
		}
	}
	else {
		header("Location: error.php");
		exit;
	}

?>
</body>
</html>
