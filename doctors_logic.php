<html>
<head>
<link rel="stylesheet" href="chairman.css"/>
<link rel="stylesheet" type="text/css"href="https://fonts.googleapis.com/css?family=Raleway"/>
</head>
<body background="white">
<table id="head">
<tr><td  rowspan="80px"><img id = "logo" src="hospital.png" alt="New Horizons Hospital"/></td><td class = "hdg">NEW</td><td id="p_title" rowspan="60px" style = "padding-left:370px;font-size:60px;font-family:Raleway;color:#ff533d">                                       Doctors</td></tr>
<tr><td class = "hdg">HORIZONS</td></tr>
<tr><td class = "hdg">HOSPITAL</td></tr>
</table>
<div class="tab">
  <a href="chairman_logic.php" style="text-decoration:none"><button class="tablinks" onclick="openCity(event, 'Home')">HOME</button></a>
<button class="tablinks" onclick="openCity(event, 'view')">VIEW</button></a>
 <button class="tablinks" onclick="openCity(event, 'add')" id="defaultOpen">ADD</button></a>
 <button class="tablinks" onclick="openCity(event, 'search')">SEARCH</button></a>
 <button class="tablinks" onclick="openCity(event, 'edit')">EDIT</button></a>
 <button class="tablinks" onclick="openCity(event, 'delete')">DELETE</button></a>
 <a href="logout.php" style="text-decoration:none"><button class="tablinks">LOG OUT</button></a>
</div>

<div id="view" class="tabcontent">
<?php

include 'hey.php';
$sql = "SELECT * FROM doctors";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
	echo "<table style='border-collapse: collapse;
    width: 100%;background-color: white;'>";
	echo "<tr> <th style='text-align: left;
    padding: 8px;
    background-color: #EAE3EA;
    border-bottom: 1px solid #ddd;'><b>Staff Number</b></th> <th style='text-align: left;
    padding: 8px;
    background-color: #EAE3EA;
    border-bottom: 1px solid #ddd;'><b>Doctor ID</b>	</th>  <th style='text-align: left;
    padding: 8px;
    background-color: #EAE3EA;
    border-bottom: 1px solid #ddd;'><b>Name</b></th> </tr>";
	while($row = $result->fetch_assoc()) 
	{
		echo "<tr>";
		echo '<td>' .$row["staffno"] . '</td>';
		echo '<td >' .$row["id"] . '</td>';
		echo '<td >' .$row["name"] . '</td>';
		echo "</tr>";

	}
	echo "</table>";

}
else
{
	echo "0 results";
}

$conn->close();		
?>


  

</div>

<div id="add" class="tabcontent">
  <p></p>
<form action="doctorinsertresults.php" method="post">
<table>
  <div class="container">
  <tr>
  <td>Staff Number</td>
    <td><input type="text" name="staffno"></td>
</tr>
<tr>
	<td>Username</td>
    <td><input type="text" name="username"></td>
</tr>
<tr>
	<td>Password</td>
    <td><input type="text" name="password"></td>
</tr>
<tr>
	<td>Doctor ID</td>
    <td><input type="text" name="id"></td>
</tr>
<tr>
	<td>Name</td>
    <td><input type="text" name="name"></td>
</tr>
<tr>	
	<td>Department</td>
    <td><select name="department" id="dropdown" style="width:190px;">
    <option value="pathology">Pathology</option>
    <option value="radiology">Radiology</option>
    <option value="gynaecology">Gynaecology</option>
    <option value="neurology">Neurology</option>
    <option value="dental">Dental</option>
    <option value="orthopaedics">Orthopaedics</option>
    <option value="physiology">Physiology</option>
  </select></td>
</tr>
<tr>
<td>Qualifications</td>
    <td><input type="text" name="qualifications"></td>
</tr>
<tr>
<td>Experience</td>
    <td><input type="text" name="experience"></td>
</tr>
<tr>
<td>Timing</td>
    <td><input type="text" name="timing"></td>
</tr>
<tr>
<td>Salary</td>
    <td><input type="text" name="salary"></td>
</tr>
<tr>
<td>Contact</td>
    <td><input type="text" name="contact"></td>
</tr>
<tr>
<td>E-mail</td>
    <td><input type="text" name="email"></td>
</tr>
<tr>
<td>Address</td>
    <td><input type="text" name="address"></td>
</tr>
</table>
    <a href="doctorinsertresults.php"><button class="button button2">ADD</button></a>
<p></p>
  </div>
</form>

</div>

<div id="search" class="tabcontent">
<p></p>
<form action="doctorsearchresults.php" method="post">
<table>
  <div>
<tr>
    <td>Department</td>
    <td><select name="department" id="dropdown" style="width:190px;">
    <option value="pathology">Pathology</option>
    <option value="radiology">Radiology</option>
    <option value="gynaecology">Gynaecology</option>
    <option value="neurology">Neurology</option>
    <option value="dental">Dental</option>
    <option value="orthopaedics">Orthopaedics</option>
    <option value="physiology">Physiology</option>
  </select></td>
</tr>
<tr>
    <td>Name</td>
    <td><input type="text" placeholder="Enter Name" name="name"</td>
 </tr>
</table>
    <a href="doctorsearchresults.php"><button class="button button2">SEARCH</button></a>
<p></p>
  </div>
</form>

  </div>
<div id="edit" class="tabcontent">
<p></p>
<form action="doctoreditresults.php" method="post">
<table>
  <div class="container">
  <tr>
  <td>Staff Number</td>
    <td><input type="text" name="staffno"></td>
</tr>
<tr>
	<td>Doctor ID</td>
    <td><input type="text" name="id"></td>
</tr>
<tr>
	<td>Name</td>
    <td><input type="text" name="name"></td>
</tr>
<tr>	
	<td>Department</td>
    <td><select name="department" id="dropdown" style="width:190px;">
    <option value="pathology">Pathology</option>
    <option value="radiology">Radiology</option>
    <option value="gynaecology">Gynaecology</option>
    <option value="neurology">Neurology</option>
    <option value="dental">Dental</option>
    <option value="orthopaedics">Orthopaedics</option>
    <option value="physiology">Physiology</option>
  </select></td>
</tr>
<tr>
<td>Qualifications</td>
    <td><input type="text" name="qualifications"></td>
</tr>
<tr>
<td>Experience</td>
    <td><input type="text" name="experience"></td>
</tr>
<tr>
<td>Timing</td>
    <td><input type="text" name="timing"></td>
</tr>
<tr>
<td>Salary</td>
    <td><input type="text" name="salary"></td>
</tr>
<tr>
<td>Contact</td>
    <td><input type="text" name="contact"></td>
</tr>
<tr>
<td>E-mail</td>
    <td><input type="text" name="email"></td>
</tr>
<tr>
<td>Address</td>
    <td><input type="text" name="address"></td>
</tr>
</table>
    <a href="doctoreditresults.php"><button class="button button2">EDIT</button></a>
<p></p>
  </div>
</form>

  </div>

<div id="delete" class="tabcontent">
  <p></p>
<form action="doctordeleteresults.php" method="post">
<table>
  <div class="container">
  <tr>
  <td>Staff Number</td>
    <td><input type="text" name="staffno"></td>
</tr>
<tr>
<td>Name</td>
    <td><input type="text" name="name"></td>
</tr>
</table>
    <a href="doctordeleteresults.php"><button class="button button2">DELETE</button></a>
<p></p>
  </div>
</form>

</div>
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
    
    document.getElementById("display").style.display = "none";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>






</body>
</html>
