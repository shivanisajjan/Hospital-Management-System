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
include 'hey.php';
$name = $_POST['name'];
$department = $_POST['department'];
$sql = "SELECT * FROM doctors WHERE name = '$name' AND department = '$department'";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
	
while($row = $result->fetch_assoc()) 
{
	echo "<p></p>";    
	echo "<table cellpadding='10' align='left'>";
	echo "<tr>";
	echo "<td><b>Staff Number</b></td>";
	echo '<td>' .$row["staffno"] . '</td>';              		
	echo "</tr> ";  		
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
	echo "<tr>";
	echo "<td><b>Salary</b></td>";	
	echo '<td>' .$row["salary"] . '</td>';              
	echo "</tr> ";   
	echo "<p></p>";	
}
echo "</table>";
echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
echo "<p></p>";
}
else
{
	echo "0 results";
	echo "<p></p>";
}

echo "<a href='doctors_logic.php'><button class='button button2'>Back</button></a>";

$conn->close();		
?>
</body>
</html>

