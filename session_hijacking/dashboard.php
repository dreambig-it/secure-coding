<?php
include 'config.php';

session_start();
if(!(isset($_SESSION['logged_in']))){
  header("Location: login.php");
  die();
}
// echo $_SESSION['last_activity'];
// echo "\n"; echo time() - $_SESSION['last_activity'];
// echo "\n"; echo $session_timeout;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $session_timeout)) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    die();
}
// check id is set
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['name'])) {
  // getting id and echo back
  $name=$_GET['name'];
  echo "<h1><input value=$name></h1>";
}
?>
<a style="float: right;" href="logout.php">Logout</a>
<center><h1>Welcome Admin</h1></center>
<?php if (!(isset($_GET['name']))): ?>
    <form action="" method="GET">
      <p>Your name please</p>
      <input type="text" name="name">
      <input type="submit" name="Submit">
    </form>
  <?php endif; ?>