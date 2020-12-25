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


include 'hey.php';

$ID = $_POST["ID"];


$Name = $_POST["Name"];


$Contact = $_POST["Contact"];


$E-mail = $_POST["E-mail"];


$Address = $_POST["Address"];


$Department = $_POST["Department"];


$Qualifications = $_POST["Qualifications"];


$Experience = $_POST["Experience"];


$Timing = $_POST["Timing"];


$Salary = $_POST["Salary"];

$row =  "UPDATE doctorstable SET Name='$Name' ,Contact='$Contact' ,E-mail='$E-mail' ,Address='$Address' ,Department='$Department' ,Qualifications='$Qualifications' ,Experience='$Experience' ,Timing='$Timing' ,Salary='$Salary' WHERE ID=$ID";
$sql = "SELECT * FROM doctorstable";

$result = $conn->query($sql);
if ($result->num_rows > 0) 

{
    
while($row = $result->fetch_assoc()) 
  
{

echo "<table cellpadding='10' border='1' style='border-collapse:collapse;' align='center'>";		
echo "<tr>";

echo "<td><b>ID</b></td>";		
echo '<td>' .$row["ID"] . '</td>';
		
                
echo "</tr> ";
  
echo "<tr>";

echo "<td><b>Name</b></td>";		
echo '<td>' .$row["Name"] . '</td>';
		
                
echo "</tr> ";
  
echo "<tr>";

echo "<td><b>Contact</b></td>";		
echo '<td>' .$row["Contact"] . '</td>';
		
                
echo "</tr> ";
  
echo "<tr>";

echo "<td><b>E-mail</b></td>";		
echo '<td>' .$row["E-mail"] . '</td>';
		
                
echo "</tr> ";
  
echo "<tr>";

echo "<td><b>Address</b></td>";		
echo '<td>' .$row["Address"] . '</td>';
		
                
echo "</tr> ";
  
echo "<tr>";

echo "<td><b>Department</b></td>";		
echo '<td>' .$row["Department"] . '</td>';
		
                
echo "</tr> ";
  
echo "<tr>";

echo "<td><b>Qualifications</b></td>";		
echo '<td>' .$row["Qualifications"] . '</td>';
		
                
echo "</tr> ";
  
echo "<tr>";

echo "<td><b>Experience</b></td>";		
echo '<td>' .$row["Experience"] . '</td>';

echo "</tr> ";
  
echo "<tr>"; 
echo "<td><b>Timing</b></td>";		
echo '<td>' .$row["Timing"] . '</td>';

echo "</tr> ";
 
echo "<td><b>Salary</b></td>";		
echo '<td>' .$row["Salary"] . '</td>';

echo "</tr> ";
 
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
<a href="first.php"><button>HOME</button></a>

</body>

</html>
