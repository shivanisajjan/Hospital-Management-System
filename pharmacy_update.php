<?php
include("connect.php");
if($_SERVER['REQUEST_METHOD']=='POST')
{
$med_name = @$_POST['medicine_name'];
	$mfg_date = @$_POST['mfg_date'];
	$exp_date =@ $_POST['exp_date'];
	$price = @$_POST['price'];

$qty  =@ $_POST['qty'];

	$sql = "INSERT INTO medicines (medicine_name,mfg_date,exp_date,price,qty) VALUES('$med_name','$mfg_date','$exp_date','$price','$qty')";
	
	$result = mysqli_query($conn,$sql);
	
}
mysqli_close($conn);
header("Location:pharmacy.php");

?>
