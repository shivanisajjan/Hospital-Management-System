<?php
session_start();
$username =@ $_POST['username'];
$password =@ $_POST['password'];
if(!strcmp($username,"1023") && !strcmp($password,"1023"))
{
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	$_SESSION['logged_in'] = true; 
	header("Location:pharmacy.php");
}
else
{	
	header("Location:main.php");
	echo"<h1>Invalid Username or Password!</h1>";
}
?>
