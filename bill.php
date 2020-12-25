<?php

include("connect.php");

$username = $_SERVER['username'];
$password = $_SERVER['password'];


$sql ="SELECT * FROM patient where username = '$username' and $password = '$password'";

$result = mysqli_query($conn,$sql);

$med = $result['medicines'];
$p =$result['prescriptions'];

$med = explode(",", $med);

$p = explode(",",$p);

$total_cost = 0;
echo "<table><th><td>Test Name</td>  <td>Price(Rs.)</td></th>";
foreach ($test as $p )
{
	$test_st = "SELECT * FROM treatment_cost where tests = '$test'";
	$row = mysqli_query($conn,$test_st);
	
	$a = mysqli_fetch_assoc($row);
	$price = $a['price'];
	echo "<tr><td>$test</td>  <td>$price</td></tr>";
	$total_cost += $price;
}
echo "</table>";

?>
<br><br>
<?php

echo "<table><th><td>Medicine Name</td>  <td>Price(Rs.)</td></th>";
foreach ($m as $med )
{
	$med_st = "SELECT * FROM medicines where medicine_name = '$m'";
	$row = mysqli_query($conn,$med_st);
	
	$a = mysqli_fetch_assoc($row);
	$price = $a['price'];
	echo "<tr><td>$test</td>  <td>$price</td></tr>";
	$total_cost += $price;
}

echo "</table><br> <h2>Total Cost: Rs.".$total_cost."</h2>";

mysqli_close($conn);

?>
