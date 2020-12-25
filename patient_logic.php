<html>
<head>

<link rel="stylesheet" href="chairman.css"/>
<link rel="stylesheet" type="text/css"href="https://fonts.googleapis.com/css?family=Raleway"/>
</head><body background="white">
<table id="head">
<tr><td  rowspan="80px"><img id = "logo" src="hospital.png" alt="New Horizons Hospital"/></td><td class = "hdg">NEW</td><td id="p_title" rowspan="60px" style = "padding-left:370px;font-size:60px;font-family:Raleway;color:#ff533d">                                       Find Patient</td></tr>
<tr><td class = "hdg">HORIZONS</td></tr>
<tr><td class = "hdg">HOSPITAL</td></tr>
</table>

<div class="tab">
  <a href="chairman_logic.php" style="text-decoration:none"><button class="tablinks">HOME</button></a>
<button class="tablinks" onclick="openCity(event, 'view')" id="defaultOpen"><div class="navbar">VIEW</button></a>
 
 <a href="logout.php" style="text-decoration:none"><button class="tablinks">LOG OUT</button></a>
</div>

<div id="view" class="tabcontent">
  <p></p>
<form action="our_patients.php" method="post">
<div class="container">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<table>
<tr>
  
<td align="right" class="td1">ID:</td>

  <td  style="padding:50px;"><input type="number" name="id" required></td>
</tr>

<tr>
  <td align="right" class="td1">Name:</td>

  <td><input type="text" name="name" required></td>
</tr>

<tr>
 <td>      </td> <td align="center" style="padding:20px"><input type="submit" value='   SEARCH    ' class="button button2"/></td>
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
