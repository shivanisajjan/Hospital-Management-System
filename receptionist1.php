<?php
include("connect.php");
session_start();

$username =@ $_POST['username'];
$password =@ $_POST['password'];
if(!strcmp($username,"1022") && !strcmp($password,"1022"))
{	
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	$_SESSION['logged_in'] = true; 
	header("Location:reception.php");
}
else
{
	echo "invalid username or password" ;
}
?>
