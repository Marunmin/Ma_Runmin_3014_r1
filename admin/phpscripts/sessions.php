<?php
    session_start();

    function confirm_logged_in() {
      if(!isset($_SESSION['user_id'])){
        redirect_to("admin_login.php");
      }
    }
    if (isset($_POST["username"]) && isset($_POST["password"]))
    {
    if (!isset($_SESSION["attempts"]))
      $_SESSION["attempts"] = 0;
    if ($_SESSION["attempts"] < 3)
       {
         $username = $_POST["username"];
	       $password = $_POST["password"];
    if ($username = "test" && $password == "test")
    {
      echo "Hello, you are logged in.";
    }
  else{
    echo "You failed to log-in, try again";
	  $_SESSION["attempts"] = $_SESSION["attempts"] + 1;
  }
}
}
 ?>
