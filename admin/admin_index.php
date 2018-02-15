<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL);

  require_once('phpscripts/config.php');
  confirm_logged_in();

 ?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>CMS Portal Login</title>
</head>
<body>
  <h1>Welcome movie area to Runmin Ma</h1>
  <?php echo "<h2>hi ~ {$_SESSION['user_name']}</h2>"; ?>
  <?php echo "<p> {$_SESSION['user_date']} </p>"; ?>
</body>
</html>
