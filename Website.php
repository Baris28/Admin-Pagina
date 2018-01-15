<?php
  session_start();

  if(isset($_SESSION["users"])) {
      echo "<h1>Welkom " . $_SESSION["users"]["naam"] . " op de website";
      echo "<p><a href='Admin.php'>Login</a></p>";
  } else if {

  } else {
      header("location: Admin.php");
  }

