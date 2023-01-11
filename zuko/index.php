<?php
ob_start();
session_start();
include("db_config.php");
ini_set('display_errors', 1);
?>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Login</title>
    <link href="css/htmlstyles.css" rel="stylesheet">
	</head>

  <body style="margin:0px">
  	<div class="container-narrow" style="display:flex;flex-direction:column;justify-content:center;align-items:center;height:100vh">
	  <h1>Login Page</h1>	
		<div class="response" style="width:100%;max-width:30rem;background:#000;padding:4rem;border-radius:4px">
			<form method="POST">
				<p style="color:white ">
					<span>Username:</span>  <input style="width:100%;padding:0.5rem" type="text" id="uid" name="uid" ><br /></br />
					<span>Password:</span> <input style="width:100%;padding:0.5rem" type="password" id="password" name="password">
				</p>
				<br />
				<p>
				<input style="border:none;padding:0.5rem 1rem;background:green;color:#fff;border-radius:4px;margin-right:1rem" type="submit" value="Submit"/> 
				<input style="border:none;padding:0.5rem 1rem;background:red;color:#fff;border-radius:4px" type="reset" value="Reset"/>
				</p>
			</form>
			<div class="row marketing">
        <div class="col-lg-6">

			<?php

			if (!empty($_GET['msg'])) {
				echo "<font style=\"color:#FF0000\">Please login to continue.<br\></font\>";
			}
			//echo md5("pa55w0rd");

			if (!empty($_REQUEST['uid'])) {
			$username = ($_REQUEST['uid']);
			$pass = $_REQUEST['password'];

			$q = "SELECT * FROM users where username='".$username."' AND password = '".md5($pass)."'" ;
			//echo $q;
				if (!mysqli_query($con,$q))
				{
					die('Error: ' . mysqli_error($con));
				}
				
				$result = mysqli_query($con,$q);
				$row_cnt = mysqli_num_rows($result);

				if ($row_cnt > 0) {
				
				$row = mysqli_fetch_array($result);
				
				if ($row){
				//$_SESSION["id"] = $row[0];
				$_SESSION["username"] = $row[1];
				$_SESSION["name"] = $row[3];
				//ob_clean();
				
				header('Location:home.php');
				}
			}
				else{
					echo "<font style=\"color:#FF0000\"><br \>Invalid password!</font\>";
					
				}
			}

			//}
			?>

	</div>
        </div>
	</div>
</body>
</html>