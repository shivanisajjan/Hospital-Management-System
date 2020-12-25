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
.button {
    background-color: #565656;
    border: none;
    color: white;
    padding: 10px 32px;
    text-align: center;
    border-radius: 4px;
    text-decoration: none;
    display: inline-block;
    font-size: 13px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
input[type=text] {
    padding: 8px 20px;
    margin: 0px 10px;
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
$username = $_SESSION['username'];
$sql = "SELECT * FROM patient WHERE doctor_id='$username'";
$result = $conn->query($sql);
if($result->num_rows>0)
{
	echo "<p></p>";    
	echo "<table cellpadding='10' align='left'>";
	echo "<tr>";
	echo "<td><b>Patient ID</b></td>";
	echo "<td><b>Name</b></td>";		              
	echo "</tr> ";  
	while($row = $result->fetch_assoc()) 
	{
	echo "<tr>";	
	echo '<td>' .$row["id"] . '</td>'; 	
	echo '<td>' .$row["name"] . '</td>';              
	echo "</tr> "; 
	}
	echo "</table>";
	echo "<p></p>";
} 
echo "<p></p>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo "<form action='showpatientdetails.php' method='post'>";
echo "<div class='container'>";


echo "<a href='showpatientdetails.php'><button class='button button2'>VIEW DETAILS</button></a>";
echo "<input type='text' placeholder='Enter Patient ID' name='id'>";
echo "</div>";
echo "</form>";
$conn->close(); 
?>

</body>
</html>

