<html>
<head>
<link rel="stylesheet" href="chairman.css"/>
<link rel="stylesheet" type="text/css"href="https://fonts.googleapis.com/css?family=Raleway"/>
<style>
td
{
margin-left:10px;
}
</style>
</head>
<body background="white">
<table id="head">
<tr><td  rowspan="80px"><img id = "logo" src="hospital.png" alt="New Horizons Hospital"/></td><td class = "hdg">NEW</td><td id="p_title" rowspan="60px" style = "padding-left:370px;font-size:60px;font-family:Raleway;color:#ff533d">                                       STAFF</td></tr>
<tr><td class = "hdg">HORIZONS</td></tr>
<tr><td class = "hdg">HOSPITAL</td></tr>
</table>
<div class="tab">
  <a href="chairman_logic.php" style="text-decoration:none"><button class="tablinks" onclick="openCity(event, 'Home')">HOME</button></a>
<button class="tablinks" onclick="openCity(event, 'view')">VIEW</button></a>
 <button class="tablinks" onclick="openCity(event, 'insert')" id="defaultOpen">INSERT</button></a>
 <button class="tablinks" onclick="openCity(event, 'edit')">EDIT</button></a>
 <button class="tablinks" onclick="openCity(event, 'delete')">DELETE</button></a>
 <button class="tablinks" onclick="openCity(event, 'search')">SEARCH</button></a>
 <a href="logout.php" style="text-decoration:none"><button class="tablinks">LOG OUT</button></a>
</div>

<div id="view" class="tabcontent">

<?php

include 'hey.php';
$sql = "SELECT * FROM staff";
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
    border-bottom: 1px solid #ddd;'><b>Name</b>	</th>  <th style='text-align: left;
    padding: 8px;
    background-color: #EAE3EA;
    border-bottom: 1px solid #ddd;'><b>Type</b></th> </tr>";
	while($row = $result->fetch_assoc()) 
	{
		echo "<tr>";
		echo '<td>' .$row["id"] . '</td>';
		echo '<td>' .$row["name"] . '</td>';
                echo '<td>' .$row["type"] . '</td>';
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

<div id="insert" class="tabcontent">
  <p></p>

<form action="staff_insert.php" method="post">
<div class="box"> 
<table>
 
<tr><td >ID:</td><td><input type="text" name="id"/></td></tr>
<tr><td >Name:</td><td><input type="text" name="name"/></td></tr>
  
<tr><td >Gender:</td><td style="padding-left:40px"><input type="radio" name="gender" value="m"/> Male  <input type="radio" name="gender" value="f"/> female</td></tr>
  
<tr><td >Date of Birth</td><td style="padding-left:50px"><input type="date" name="dob"/></td></tr>

<tr><td >Type:</td><td ><input type="text" name="type"/></td></tr>
  
<tr><td >Qualifications:</td><td><input type="text" name="qualifications"/></td></tr>
  
<tr><td >Timings:</td><td  style="padding-left:50px"><input type="time" name="timings"/></td></tr>
  
<tr><td >Salary:</td><td  style="padding-left:50px"><input type="number" name="salary"/></td></tr>
  
<tr><td >Contact:</td><td><input type="text" name="contact" maxlength="10"/></td></tr>
  
<tr><td >Email:</td><td  style="padding-left:50px"><input type="email" name="email"/></td></tr>
  
<tr><td >Address:</td><td><input type="text" name="address"></td></tr>
<tr><td >Id proof:</td><td  style="padding-left:50px"><input type="number" name="id_proof"/></td></tr>
  
  
<tr><td style="padding:20px"><input type="submit" value="     ADD      "  class="button button2"/></td>
<td></td></tr>


</table> 


    
  </div>
</form>
</div>

<div id="edit" class="tabcontent">
<p></p>

<form action="staff_edit.php" method="post">
<div class="box"> 
<table id="update-form">
 
<tr>
 
    <td >ID:</td><td><input type="text" name="id"></td>

</tr>
    
<tr>
 
    <td >Name:</td><td><input type="text" name="name"></td>

</tr>
  
<tr>
 
    <td >Gender:</td><td style="padding-left:-100px"><input type="text" name="gender"></td>
  
</tr>
  
<tr>
 
    <td >Date of Birth</td><td style="padding-left:50px"><input type="date" name="dob"></td>
  
</tr>

  
<tr>
 
    <td >Type:</td><td><input type="text" name="type"></td>
  
</tr>
  
<tr>
 
    <td >Qualifications:</td><td><input type="text" name="qualifications"></td>
  
</tr>
  
<tr>
 
    <td >Timings:</td><td style="padding-left:50px"><input type="time" name="timings"></td>

</tr>
  
<tr>
 
    <td >Salary:</td><td style="padding-left:50px"><input type="number" name="salary"></td>

</tr>
  
<tr>
 
    <td >Contact:</td><td style="padding-left:50px"><input type="number" name="contact"></td>

</tr>
  
<tr>
 
    <td >Email:</td><td style="padding-left:50px"><input type="email" name="email"></td>

</tr>
  
<tr>
 
    <td >Address:</td><td><input type="text" name="address"></td>

</tr>
<tr>
 
    <td >Id proof:</td><td style="padding-left:50px"><input type="number" name="id_proof"></td>

</tr>
  
  
<tr>
 
    <td style="padding:20px"><input type="submit" value="     EDIT      " class="button button2"/></td><td></td>
  
</tr>


</table> 
</div>
</form>
  </div>
<div id="delete" class="tabcontent">
<p></p>
<form action="staff_delete.php" method="post">
<div class="container">
<table>
<tr>
  
<td>ID:</td>

  <td style="padding-left:50px"><input type="number" name="id"></td>
</tr>

<tr>
  <td >Name:</td>

  <td><input type="text" name="name"></td>
</tr>

<tr>
  <td style="padding:20px"><input type="submit" value='   DELETE    'class="button button2"/></td>
</tr>

</table>
<p></p>
  </div>
</form>

  </div>

<div id="search" class="tabcontent">
  <p></p>
<form action="staff_search.php" method="post">
<div class="container">
<table>
<tr>
  
<td>ID:</td>

  <td style="padding-left:50px"><input type="number" name="id"></td>
</tr>

<tr>
  <td >Name:</td>

  <td><input type="text" name="name"></td>
</tr>

<tr>
  <td style="padding:20px"><input type="submit" value='   SEARCH    'class="button button2"/></td>
</tr>

</table>
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
