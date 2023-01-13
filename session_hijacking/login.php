<?php
// @author p4nth3r-5237
session_start();
include 'config.php';

if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $session_timeout)) {
    session_unset();
    session_destroy();
}

$_SESSION['last_activity'] = time();

if(isset($_SESSION['logged_in'])){
  header("Location: dashboard.php");
}
// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the username and password from the form
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Validate the username and password
  // (in a real application, you would likely query a database here)
  if ($username == 'jason' && $password == 'christopher') {
    // Login successful, set a session variable and redirect to the dashboard
    session_start();
    session_regenerate_id();
    $_SESSION['logged_in'] = true;
     $_SESSION["username"] = $username;
    header('Location: dashboard.php');
    exit;
  } 
  elseif($username != 'admin') {
    // Unsuccessful login
    $error_message = 'Incorrect Username';
  }
  else {
    // Login failed, display an error message
    $error_message = 'Incorrect Password';
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
