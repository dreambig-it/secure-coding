<?php
// checking cookie
if(isset($_COOKIE['admin'])){
  if($_COOKIE['admin'] == 0){
    header("Location: dashboard.php");
  }
  elseif ($_COOKIE['admin'] == 1) {
    // code...
    header("Location: admin.php");
  }
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the username and password from the form
  $username = $_POST['username'];
  $password = $_POST['password'];
    if ($username === 'user' && $password === 'password') {
      // Login successful, set a session variable and redirect to the dashboard
      setcookie('admin', 0); 
      header('Location: dashboard.php');
      die();
    } 
    elseif($username === 'admin' && $password === "password") {
      // Admin login
      setcookie('admin', 1);
      header('Location: admin.php');
      die();
    }
    else {
      // Login failed, display an error message
      $error_message = 'Incorrect Username or Password';
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>
  <?php if (isset($error_message)): ?>
    <p style="color:red;"><?php echo $error_message; ?></p>
  <?php endif; ?>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="username">Username:</label><br>
    <input type="text" name="username" id="username"><br>
    <label for="password">Password:</label><br>
    <input type="password" name="password" id="password"><br><br>
    <input type="submit" value="Login">
  </form>
</body>
</html>