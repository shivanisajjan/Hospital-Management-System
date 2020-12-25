<?php
session_start();
$username =@ $_POST['username'];
$password =@ $_POST['password'];
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;

include("connect.php");

$sql = "SELECT * FROM patient WHERE username = '$username' AND '$password' ";

$result = mysqli_query($conn,$sql);


if($result)
{
	$result = mysqli_fetch_assoc($result);
	$_SESSION['id'] = $result['id'];
	$_SESSION['name'] = $result['name'];
	$_SESSION['contact'] = $result['contact'];
	$_SESSION['email'] = $result['email'];
	$_SESSION['address'] = $result['address'];
	$_SESSION['gender'] = $result['gender'];
	$_SESSION['dob'] = $result['dob']; 
	$_SESSION['id_proof'] = $result['id_proof']; 
	$_SESSION['gname'] = $result['gname']; 
	$_SESSION['m_concern'] = $result['m_concern'];
	$_SESSION['doctor_id'] = $result['doctor_id'];
	$_SESSION['test'] = $result['test'];
	$_SESSION['medicines'] = $result['medicines']; 
	$_SESSION['tests'] = $result['tests']; 
	$_SESSION['room_no'] = $result['room_no']; 
	$_SESSION['check_in'] = $result['check_in'];
	$_SESSION['check_out'] = $result['check_out'];
	$_SESSION['bill'] = $result['bill'];
	$_SESSION['in_or_out'] = $result['in_or_out'];
	
	 
	
	header("Location:p.php");
}
else
{
	echo"<h1>Invalid Username or Password!</h1>";
}
?>
