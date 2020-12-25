<?php

include("connect.php");

$name = trim($_GET['medicine_name']);
$mfg_date = $_GET['mfg_date'];
$exp_date = $_GET['exp_date'];
$price =@ $_GET['price'];

$var1 = 0;
$var2 = 0;
$var3 = 0;
$var4 = 0;

//var_dump($_GET["search"]);
$search =@ $_GET["search"];
if($search)
foreach($search as $a)
{
	if($a == "1")
	$var1 = 1;
	if($a == "2")
	$var2 = 1;
	if($a == "3")
	$var3 = 1;
	if($a == "4")
	$var4 = 1;
}
$r = true;	

//echo $var1;
//echo $var2;
//echo $var3;
//echo $var4;

	
if($var1==0 && $var2 == 0 &&$var3 == 0&& $var4 == 1)
	$sql = "SELECT * FROM medicines WHERE price = '$price'";
else if($var1==0 && $var2 == 0 &&$var3 == 1&& $var4 == 0)
	$sql = "SELECT * FROM medicines WHERE exp_date = '$exp_date'";
else if($var1==0 && $var2 == 0 &&$var3 == 1&& $var4 == 1)
	$sql = "SELECT * FROM medicines WHERE exp_date = '$exp_date' AND price = '$price'";
else if($var1==0 && $var2 == 1 &&$var3 == 0&& $var4 == 0)
	$sql = "SELECT * FROM medicines WHERE mfg_date = '$mfg_date'";
else if($var1==0 && $var2 == 1 &&$var3 == 0&& $var4 == 1)
	$sql = "SELECT * FROM medicines WHERE mfg_date = '$mfg_date' AND price = '$price'";
else if($var1==0 && $var2 == 1 &&$var3 == 1&& $var4 == 0)
	$sql = "SELECT * FROM medicines WHERE mfg_date = '$mfg_date' AND exp_date = '$exp_date'";
else if($var1==0 && $var2 == 1 &&$var3 == 1&& $var4 == 1)
	$sql = "SELECT * FROM medicines WHERE mfg_date = '$mfg_date' AND exp_date = '$exp_date'AND price = '$price'";
else if($var1==1 && $var2 == 0 &&$var3 == 0&& $var4 == 0)
	{$sql = "SELECT * FROM medicines WHERE medicine_name = '$name'";}
else if($var1==1 && $var2 == 0 &&$var3 == 0&& $var4 == 1)
	$sql = "SELECT * FROM medicines WHERE medicine_name = '$name' AND price = '$price'";
else if($var1==1 && $var2 == 0 &&$var3 == 1&& $var4 == 0)
	$sql = "SELECT * FROM medicines WHERE medicine_name = '$name' AND exp_date = '$exp_date'";
else if($var1==1 && $var2 == 0 &&$var3 == 1&& $var4 == 1)
	$sql = "SELECT * FROM medicines WHERE medicine_name = '$name' AND exp_date = '$exp_date' AND price = '$price' ";
else if($var1==1 && $var2 == 1 &&$var3 == 0&& $var4 == 0)
	$sql = "SELECT * FROM medicines WHERE exp_date = '$exp_date' AND name = '$name'";
else if($var1==1 && $var2 == 1 &&$var3 == 0&& $var4 == 1)
	$sql = "SELECT * FROM medicines WHERE medicine_name = '$name' AND mfg_date = '$mfg_date' AND price = '$price'";
else if($var1==1 && $var2 == 1 &&$var3 == 1&& $var4 == 0)
	$sql = "SELECT * FROM medicines WHERE medicine_name = '$name' AND mfg_date = '$mfg_date' AND exp_date = '$exp_date'";
else if($var1==1 && $var2 == 1 &&$var3 == 1&& $var4 == 1)
	$sql = "SELECT * FROM medicines WHERE medicine_name = '$name' AND mfg_date = '$mfg_date' AND exp_date = '$exp_date' AND $price = '$price'";
else {echo	"You did not enter any search term!<br><form action='pharmacy.php'><input type='submit' value = 'Back'/></form>";
		$r = false;}
		
		
$results = mysqli_query($conn,$sql);
mysqli_error($conn);
//var_dump($results);
if($results)
$num = mysqli_num_rows($results);

//echo "<br>".$num;

if($results)

{
include("pharmacy_results.php");
echo "<h1 style=\"font-family:Merriweather;color:#66B9BF\">Search Results</h1><table>";
//var_dump($results);

echo "<table class='table'>
				  <tr class='td'><th class='tr'>Medicine Name</th>
				    <th class='td'>Mfg Date</th>
				    <th class='td'>Expiry Date</th>
				    <th class='td'>Price</th>
				    <th class='td'>Qty</th>
				  </tr>";
if($num > 1)
while($row = mysqli_fetch_array($results))
{
	echo "<tr><td class=\"td\">".$row['medicine_name']."</td><td class=\"td\">".$row['mfg_date']."</td><td class=\"td\">".$row['exp_date']."</td><td class=\"td\">".$row['price']."</td><td class=\"td\">".$row['qty']."</td></tr>";
}

else
{
	$row = mysqli_fetch_assoc($results);
	echo "<tr><td class=\"td\">".$row['medicine_name']."</td><td class=\"td\">".$row['mfg_date']."</td><td class=\"td\">".$row['exp_date']."</td><td class=\"td\">".$row['price']."</td><td class=\"td\">".$row['qty']."</td></tr>";
	

}	
}

echo "</table>";

mysqli_close($conn);		
?>
