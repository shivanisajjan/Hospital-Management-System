<!DOCTYPE html>
<html>
<style>
#logo
{
float:left;width:80px;height:80px;font-family:Verdana;
}
.hdg
{
color:#607d8b;
font-family:Merriweather;
font-size:20px;

}

body
{
background-image: url("admin2.jpg");

    
/* Set a specific height */    
height: 800px;    
/* Create the parallax scrolling effect */
    
background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.button {
    background-color: #FF533D; 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 12px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

</style>
<body>
<table id="head">
<tr><td  rowspan="80px"><img id = "logo" src="hospital.png" alt="New Horizons Hospital"/></td><td class = "hdg">NEW</td><td id="p_title" rowspan="60px" style = "padding-left:370px;font-size:60px;font-family:Raleway;color:#ff533d">                                       Doctors</td></tr>
<tr><td class = "hdg">HORIZONS</td></tr>
<tr><td class = "hdg">HOSPITAL</td></tr>
</table>

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
		
$results =@ mysqli_query($conn,$sql);
mysqli_error($conn);
//var_dump($results);
if($results)
$num =@ mysqli_num_rows($results);

//echo "<br>".$num;

if($results)

{
//include("pharmacy_results.php");
echo "<h1 style=\"font-family:Merriweather;color:#66B9BF\">Search Results</h1><table>";
//var_dump($results);

echo "<br><br><br><table style='border-collapse: collapse;
    width: 100%;background-color: white;'>";
	echo "<tr> <th style='text-align: left;
    padding: 8px;
    background-color: #EAE3EA;
    border-bottom: 1px solid #ddd;'><b>Medicine Name</b></th> <th style='text-align: left;
    padding: 8px;
    background-color: #EAE3EA;
    border-bottom: 1px solid #ddd;'><b>Mfg Date</b>	</th>  <th style='text-align: left;
    padding: 8px;
    background-color: #EAE3EA;
    border-bottom: 1px solid #ddd;'><b>Exp Date</b></th><th style='text-align: left;
    padding: 8px;
    background-color: #EAE3EA;
    border-bottom: 1px solid #ddd;'><b>Price</b></th><th style='text-align: left;
    padding: 8px;
    background-color: #EAE3EA;
    border-bottom: 1px solid #ddd;'><b>Qty</b></th> </tr>";
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


echo "</table>";
//echo "<br><br><a href='pharmacy_logic.php'><button class='button button2'>Back</button></a>";
}
else
{
	echo "<br><br><h2>0 results</h2>";
	echo "<p></p>";
}

echo "<br><br><a href='pharmacy_logic.php'><button class='button button2'>Back</button></a>";

?>
</body>
</html>

