<!DOCTYPE html>

<html>

<style>
table {
	margin-top:10px; 
	width: 600px;
	background-color: #f2f2f2;
	border: none;
}

td {
	padding:10px;
}
tr{background-color: white}

tr:nth-child(even){background-color: #f2f2f2}

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

p
{
	font-color:#4B0082;
	font-size:40px;
	text-align:center;
}	
</style>

<body>
<?php

include 'hey.php';
$username = $_POST["username"];
$password = $_POST["password"];
$sql = "SELECT * FROM doctors,patient WHERE username='$username' AND password='$password' AND doctor_id='$username'";
$result = $conn->query($sql);
if($username != $password)
{
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<p>The Username Or Password You Entered Is Wrong. 	Please Try Again.</p>";
	echo "<a href='main.php'><button>Back</button></a>";
}
else
{
	
	if ($result->num_rows > 0) 
	{
	
	while($row = $result->fetch_assoc()) 
	{
	echo "<p></p>";    
	echo "<table cellpadding='10' align='center'>";		
	echo "<tr>";
	echo "<td><b>Patient ID</b></td>";		
	echo '<td>' .$row["id"] . '</td>';                
	echo "</tr> ";  
	echo "<tr>";
	echo "<td><b>Name</b></td>";		
	echo '<td>' .$row["name"] . '</td>';              
	echo "</tr> "; 
	echo "<tr>";
	echo "<td><b>Contact</b></td>";		
	echo '<td>' .$row["contact"] . '</td>';               
	echo "</tr> ";  
	echo "<tr>";
	echo "<td><b>E-mail</b></td>";		
	echo '<td>' .$row["email"] . '</td>';                
	echo "</tr> "; 
	echo "<tr>";
	echo "<td><b>Address</b></td>";		
	echo '<td>' .$row["address"] . '</td>';           
	echo "</tr> "; 
	echo "<tr>";
	echo "<td><b>Gender</b></td>";		
	echo '<td>' .$row["gender"] . '</td>';         
	echo "</tr> "; 
	echo "<tr>";
	echo "<td><b>Date Of Birth</b></td>";		
	echo '<td>' .$row["dob"] . '</td>';               
	echo "</tr> "; 
	echo "<tr>";
	echo "<td><b>Guardian's Name</b></td>";		
	echo '<td>' .$row["gname"] . '</td>';
	echo "</tr> "; 
	echo "<tr>"; 
	echo "<td><b>Medical Concern</b></td>";		
	echo '<td>' .$row["m_concern"] . '</td>';
	echo "</tr> ";
	echo "<tr>"; 
	echo "<td><b>Medicines</b></td>";		
	echo '<td>' .$row["medicines"] . '</td>';
	echo "</tr> ";
	echo "<tr>"; 
	echo "<td><b>Tests</b></td>";		
	echo '<td>' .$row["tests"] . '</td>';
	echo "</tr> ";
	echo "<tr>"; 
	echo "<td><b>Room Number</b></td>";		
	echo '<td>' .$row["room_no"] . '</td>';
	echo "</tr> ";
	echo "</table>";
	echo "<p></p>";	
	echo "<a href='editpatientbydoctor.php'><button>EDIT</button></a>";
	echo "<p></p>";
	echo "<a href='main.php'><button>BACK</button></a>";
	}
	}
}
$conn->close(); 
?>

</body>
</html>

