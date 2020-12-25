 <?php

  // Inialize session
  session_start();

// Delete certain session
  unset($_SESSION['logged_in']);
  unset($_SESSION['username']);
  unset($_SESSION['password']);
  // Delete all session variables
   session_destroy();

 // Jump to login page
 header('Location: main.php');

  ?>
