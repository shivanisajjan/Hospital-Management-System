<?php
session_start();
unset($_SESSION['logged_in']);
unset($_SESSION['username']);
unset($_SESSION['password']);
session_destroy();
header('Location:main.php');
?>
