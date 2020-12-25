<?php
session_start();
include 'hey.php';
$username =@ $_POST['username'];
$password =@ $_POST['password'];
$sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);
if(!$row = $result->fetch_assoc())
{
	echo "<h1>Invalid Username Or Password!</h1>";
}
else
{
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	$_SESSION['logged_in'] = true;
	header("Location:home.php");
}
