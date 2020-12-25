<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" href="chairman.css"/>
<link rel="stylesheet" type="text/css"href="https://fonts.googleapis.com/css?family=Raleway"/>
</head>

<body>

<style>

table {
margin-top:10px; 
width: 600px;
background-color:white;
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
	
	background-image:url("u.jpg");
	
	background-attachment:fixed;
	
	background-repeat:no-repeat;
	
	background-size:cover;

}
</style>

<br>
<br>

<?php


include ('connect.php');

$ID = $_POST["id"];


$Name = $_POST["name"];



$sql = "SELECT * FROM staff WHERE id='$ID' AND name='$Name'";
$result = $conn->query($sql);

echo "<table cellpadding='10' border='1' style='border-collapse:collapse;' align='center'>";		
echo "<tr>";

echo "<th><b>ID</b></th>";
echo "<th><b>Name</b></th>";
echo "<th><b>Gender</b></th>";
echo "<th><b>Dob</b></th>";
echo "<th><b>Type</b></th>";
echo "<th><b>Qualifications</b></th>";
echo "<th><b>Timings</b></th>";
echo "<th><b>Salary</b></th>";
echo "<th><b>Contact</b></th>";
echo "<th><b>Email</b></th>";
echo "<th><b>Address</b></th>";
echo "<th><b>Id Proof</b></th>";

if ($result->num_rows > 0) 

{
    
while($row = $result->fetch_assoc()) 
  
{

		
echo "<tr>";

echo '<td>' .$row["id"] . '</td>';
echo '<td>' .$row["name"] . '</td>';
echo '<td>' .$row["gender"] . '</td>';
echo '<td>' .$row["dob"] . '</td>';
echo '<td>' .$row["type"] . '</td>';
echo '<td>' .$row["qualifications"] . '</td>';
echo '<td>' .$row["timings"] . '</td>';
echo '<td>' .$row["salary"] . '</td>';
echo '<td>' .$row["contact"] . '</td>';
echo '<td>' .$row["email"] . '</td>';
echo '<td>' .$row["address"] . '</td>';
echo '<td>' .$row["id_proof"] . '</td>';
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
<a href="staff_logic.php"><button>HOME</button></a>

</body>

</html>
