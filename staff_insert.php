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

$Contact = $_POST["contact"];

$Email = $_POST["email"];

$Address = $_POST["address"];

$Gender = $_POST["gender"];

$Dob = $_POST["dob"];

$Id_proof = $_POST["id_proof"];

$Type = $_POST["type"];

$Qualifications = $_POST["qualifications"];

$Timings = $_POST["timings"];

$Salary = $_POST["salary"];

$row = "INSERT INTO staff (id, name, contact, email, address, gender, dob, id_proof, type, qualifications, timings, salary)
VALUES ($ID, '$Name', '$Contact', '$Email', '$Address', '$Gender', '$Dob', '$Id_proof', '$Type', '$Qualifications', '$Timings', '$Salary')";

if ($conn->query($row) === TRUE) {
    echo "<h2 style='font-family:Raleway'>Insertion successful!</h2>";
} else {
    echo "Error: " . $row . "<br>" . $conn->error;
}
echo "<p></p>";


$sql = "SELECT * FROM staff";

$result = $conn->query($sql);



if ($result->num_rows > 0) 

{
    
while($row = $result->fetch_assoc()) 
  
{

		
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
