<html>
<head>
<style>
	body {
		background-image: url("background.jpg");
		background-size: cover;
	}
	input {
		width: 50%;
		padding: 12px 20px;
		margin: 8px 0;
		box-sizing: border-box;
	}
	input[type=submit] {
		background-color: #c92b12;
		color: white;
	}
	input:focus {
		border: 3px solid #555;
	}
	form {
		color: white;
		margin-top: 80px;
	}
</style>
</head>
<body>
<center>
	<form action="verify.php" method="post"> 
    	USERNAME&nbsp;&nbsp;&nbsp;<br> 
    	<input type="text" name="username"><br><br> 
    	PASSWORD&nbsp;&nbsp;&nbsp;<br>
    	<input type="password" name="password"><br><br> 
    	<input type="submit" name="submit" value="LOGIN"> 
</form>
</center>
</body>
</html> 
