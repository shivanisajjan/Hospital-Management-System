<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #67323F;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #C09F80;
}

.active {
    background-color: #D7CEC7;
}

#logo
{
float:left;width:80px;height:80px;font-family:Verdana;
}

.hdg

{
color:#565656;
font-family:Merriweather;
font-size:20px;

}


</style>
</head>
<body>
<table>

<tr><td  rowspan="80px"><img id = "logo" src="hospital.png" alt="New Horizons Hospital"/></td><td class = "hdg">NEW</td>
<tr><td class = "hdg">HORIZONS</td></tr>
<tr><td class = "hdg">HOSPITAL</td></tr>
</table>


<br><br>

<ul>
  <li><a href="home.php">Home</a></li>
  <li><a class="active" href="profile.php">View Profile</a></li>
  <li><a href="patients.php">View Patients</a></li>
  <li><a href="editpatientbydoctor.php">Edit Prescription</a></li>
  <li><a href="logoutdoctor.php">Logout</a></li>
</ul>
<p></p>
<?php
session_start();
include 'hey.php';
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$sql = "SELECT * FROM doctors WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) 
{
	echo "<p></p>";    
	echo "<table cellpadding='10' align='left'>";		
	echo "<tr>";
	echo "<td><b>ID</b></td>";
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
	echo "<td><b>Qualifictaions</b></td>";	
	echo '<td>' .$row["qualifications"] . '</td>';              
	echo "</tr> "; 
	echo "<tr>";
	echo "<td><b>Experience</b></td>";	
	echo '<td>' .$row["experience"] . '</td>';              
	echo "</tr> ";   
	echo "<tr>";
	echo "<td><b>Department</b></td>";	
	echo '<td>' .$row["department"] . '</td>';              
	echo "</tr> "; 
	echo "<tr>";
	echo "<td><b>Timing</b></td>";	
	echo '<td>' .$row["timing"] . '</td>';              
	echo "</tr> ";   
	echo "</table>";
	echo "<p></p>";	
}
$conn->close(); 
?>

</body>
</html>

