<?php
session_start();
$username =@ $_POST['username'];
$password =@ $_POST['password'];
if(!strcmp($username,"1024") && !strcmp($password,"1024"))
{
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	$_SESSION['logged_in'] = true; 
	header("Location:chairman.php");
}
else
{
	echo"<h1>Invalid Username or Password!</h1>";
}
?>
