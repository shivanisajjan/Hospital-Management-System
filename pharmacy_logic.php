<html>
<head>
<link rel="stylesheet" href="chairman.css"/>
<link rel="stylesheet" type="text/css"href="https://fonts.googleapis.com/css?family=Raleway"/>
<style>
td
{
align:center;
}
</style>
</head>
<body background="white">
<table id="head">
<tr><td  rowspan="80px"><img id = "logo" src="hospital.png" alt="New Horizons Hospital"/></td><td class = "hdg">NEW</td><td id="p_title" rowspan="60px" style = "padding-left:370px;font-size:60px;font-family:Raleway;color:#ff533d">                                       Pharmacy</td></tr>
<tr><td class = "hdg">HORIZONS</td></tr>
<tr><td class = "hdg">HOSPITAL</td></tr>
</table>
<div class="tab">
  <a href="chairman_logic.php" style="text-decoration:none"><button class="tablinks">HOME</button></a>
<button class="tablinks" onclick="openCity(event, 'view')" id="defaultOpen">VIEW</button></a>
 
 <a href="logout.php" style="text-decoration:none"><button class="tablinks">LOG OUT</button></a>
</div>

<div id="view" class="tabcontent">
<?php

include("connect.php");
$sql = "SELECT * FROM medicines";
		$result = mysqli_query($conn,$sql);
		if($result)
		{

			echo "<br><br><br><table style='border-collapse: collapse;
    width: 100%;background-color: white;'>";
	echo "<tr> <th style='text-align: left;
    padding: 8px;
    background-color: #EAE3EA;
    border-bottom: 1px solid #ddd;'><b>Medicine Name</b></th> <th style='text-align: left;
    padding: 8px;
    background-color: #EAE3EA;
    border-bottom: 1px solid #ddd;'><b>Mfg Date</b>	</th>  <th style='text-align: left;
    padding: 8px;
    background-color: #EAE3EA;
    border-bottom: 1px solid #ddd;'><b>Exp Date</b></th><th style='text-align: left;
    padding: 8px;
    background-color: #EAE3EA;
    border-bottom: 1px solid #ddd;'><b>Price</b></th><th style='text-align: left;
    padding: 8px;
    background-color: #EAE3EA;
    border-bottom: 1px solid #ddd;'><b>Qty</b></th> </tr>";
			while($row = mysqli_fetch_array($result))
			{
				echo "<tr> <td class='td'>".$row['medicine_name']."   </td>
				    <td class='td'>".$row['mfg_date']."   </td>
				    <td class='td'>".$row['exp_date']."  </td>
				    <td class='td'>   ".$row['price']."  </td>
				    <td class='td'>".$row['qty']."  </td>
				  </tr>";	
			}
			
			echo "</div>";
		}
		else
		{
			echo "<h2>Unable to view record</h2>";
		}
	
mysqli_close($conn);
?>
</div>

<div id="search" class="tabcontent" style="display:none">
<table>
  <form action="pharmacysearch.php">
<tr><td><br><br><br><h2 style="font-family:Raleway">Search by:</h2></td><td></td> </tr>
<tr><td><input type = 'checkbox' name = "search[]" value='1'/>Medicine Name</td><td>  <input type='text' class="search" name='medicine_name' placeholder='Enter medicine name'/></tr>
<tr><td><input type = 'checkbox' name = "search[]" value='2'/>Mfg. date </td><td style="padding-left:50px"><input type='date' class="search" name='mfg_date' /></tr>
<tr><td><input type = 'checkbox' name = "search[]" value='3'/>Exp.date </td><td style="padding-left:50px"> <input type='date' class="search" name='exp_date' /></tr>
<tr><td><input type = 'checkbox' name = "search[]" value='4'/>Price </td><td style="padding-left:50px"> <input type='number' class="search" step = 'any' name='price' placeholder='Enter price' /></tr>
<tr><td></td><td style="padding-left:50px"><input type="submit" value="go" class="button button2"/></td></tr>
</form>
</table>

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
