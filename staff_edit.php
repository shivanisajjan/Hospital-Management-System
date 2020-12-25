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

<header>NEW HORIZONS HOSPITAL</header>

<br>
<br>

<?php


include ("hey.php");

$ID = $_POST["id"];


$Name = $_POST["name"];


$Contact = $_POST["contact"];


$Email = $_POST["email"];

$Dob = $_POST["dob"];

$Gender = $_POST["gender"];


$Address = $_POST["address"];


$Type = $_POST["type"];


$Id_proof = $_POST["id_proof"];


$Qualifications = $_POST["qualifications"];


$Timings = $_POST["timings"];


$Salary = $_POST["salary"];

$row =  "UPDATE staff SET contact='$Contact' ,email='$Email' ,address='$Address' ,qualifications='$Qualifications' ,timings='$Timings' ,salary='$Salary' WHERE id='$ID' AND name='$Name'";
$result = $conn->query($row);
if ($result)
{
echo "edited successfully";
}
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
