<html>
<head>
<link rel="stylesheet" href="chairman.css"/>
<link rel="stylesheet" type="text/css"href="https://fonts.googleapis.com/css?family=Raleway"/>
</head>
<body background="white">
<table id="head">

<tr><td  rowspan="80px"><img id = "logo" src="hospital.png" alt="New Horizons Hospital"/></td><td class = "hdg">NEW</td></tr>
<tr><td class = "hdg">HORIZONS</td></tr>
<tr><td class = "hdg">HOSPITAL</td></tr>
</table>
<div class="tab">
  <a href="chairman_logic.php" style="text-decoration:none"><button class="tablinks" onclick="openCity(event, 'Home')" id="defaultOpen">HOME</button></a>
 <button class="tablinks" onclick="openCity(event, 'add')">ADD</button></a>
 <button class="tablinks" onclick="openCity(event, 'search')">SEARCH</button></a>
 <button class="tablinks" onclick="openCity(event, 'edit')">EDIT</button></a>
 <button class="tablinks" onclick="openCity(event, 'delete')">DELETE</button></a>
 <a href="logout.php" style="text-decoration:none"><button class="tablinks">LOG OUT</button></a>
</div>

<div id="add" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p> 
</div>

<div id="search" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>
<div id="edit" class="tabcontent">
  <h3>London</h3>
  <p>London is the capital city of England.</p>
</div>

<div id="delete" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p> 
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
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>






</body>
</html>
