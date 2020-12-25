<!DOCTYPE html>

<html>

<body>

<style>

table {
margin-top:10px; 
width: 600px;
}

td {
padding-left:10px;
}

header 
{
color:black;
 font-size:45px;
 text-align:center;
}


button
{
	
	background-color: #008CBA;
    	border: none;
    	color: white;
    	padding: 15px 32px;
    	text-align: center;
   	text-decoration: none;
    	display: inline-block;
    	font-size: 16px;
    	margin-left: 40%;
    	cursor: pointer;
    	border-radius: 12px;
    	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
	width:300px;
}

body
{
	
	
	background-attachment:fixed;
	
	background-repeat:no-repeat;
	
	background-size:cover;

}
</style>

<header>NEW HORIZONS HOSPITAL</header>

<br>
<br>

<?php


include 'hey.php';

$ID = $_POST["id"];


$Name = $_POST["name"];



$sql = "SELECT * FROM patient WHERE id='$ID' AND name='$Name'";
$result = $conn->query($sql);

echo "<table cellpadding='10' border='1' style='border-collapse:collapse;' align='center'>";		
echo "<tr>";

echo "<th><b>ID</b></th>";
echo "<th><b>Name</b></th>";
echo "<th><b>Contact</b></th>";
echo "<th><b>Email</b></th>";
echo "<th><b>Address</b></th>";
echo "<th><b>Gender</b></th>";
echo "<th><b>Dob</b></th>";
echo "<th><b>ID proof</b></th>";
echo "<th><b>Gaurdian's Name</b></th>";
echo "<th><b>Medical Concern</b></th>";
echo "<th><b>Doctor Id</b></th>";
echo "<th><b>Medicines</b></th>";
echo "<th><b>Tests</b></th>";
echo "<th><b>Room No</b></th>";
echo "<th><b>Check In</b></th>";
echo "<th><b>Check Out</b></th>";
echo "<th><b>Bill</b></th>";
echo "<th><b>In or Out</b></th>";

if ($result->num_rows > 0) 

{
    
while($row = $result->fetch_assoc()) 
  
{

		
echo "<tr>";

echo '<td>' .$row["id"] . '</td>';
echo '<td>' .$row["name"] . '</td>';
echo '<td>' .$row["contact"] . '</td>';
echo '<td>' .$row["email"] . '</td>';
echo '<td>' .$row["address"] . '</td>';
echo '<td>' .$row["gender"] . '</td>';
echo '<td>' .$row["dob"] . '</td>';
echo '<td>' .$row["id_proof"] . '</td>';
echo '<td>' .$row["gname"] . '</td>';
echo '<td>' .$row["m_concern"] . '</td>';
echo '<td>' .$row["doctor_id"] . '</td>';
echo '<td>' .$row["medicines"] . '</td>';
echo '<td>' .$row["tests"] . '</td>';
echo '<td>' .$row["room_no"] . '</td>';
echo '<td>' .$row["check_in"] . '</td>';
echo '<td>' .$row["check_out"] . '</td>';
echo '<td>' .$row["bill"] . '</td>';
echo '<td>' .$row["in_or_out"] . '</td>';
echo "</tr>";
 
}

} 

else 

{
    
echo "0 results";

}

echo "</table>";

$conn->close();

?>

<p></p>
<a href="patient_logic.php"><button>Back</button></a>

</body>

</html>
