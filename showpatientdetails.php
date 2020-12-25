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
  <li><a href="profile.php">View Profile</a></li>
  <li><a class="active" href="patients.php">View Patients</a></li>
<li><a href="editpatientbydoctor.php">Edit Prescription</a></li>

  <li><a href="logoutdoctor.php">Logout</a></li>
</ul>
<p></p>
<?php
session_start();
include 'hey.php';
$id = $_POST["id"];
$sql = "SELECT * FROM patient WHERE id='$id'";
$result = $conn->query($sql);
if(!$row = $result->fetch_assoc())
{
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<p>Invalid Patient ID.</p>";
}
else
{    
	echo "<table cellpadding='10'>";		
	echo "<tr>";
	echo "<td><b>ID</b></td>";
	echo '<td>' .$row["id"] . '</td>';              			
	echo "</tr> ";  
	echo "<tr>";
	echo "<td><b>Name</b></td>";	
	echo '<td>' .$row["name"] . '</td>';              
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
	echo "<td><b>Address</b></td>";	
	echo '<td>' .$row["address"] . '</td>';              
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
}
?>
</body>
</html>
