<html>
<head>
<link rel="stylesheet" href="chairman.css"/>
<link rel="stylesheet" type="text/css"href="https://fonts.googleapis.com/css?family=Raleway"/>
</head>
<body>
<table id="head">

<tr><td  rowspan="80px"><img id = "logo" src="hospital.png" alt="New Horizons Hospital"/></td><td class = "hdg">NEW</td><td id="p_title" rowspan="60px" style = "padding-left:370px;font-size:60px;font-family:Raleway;color:#ff533d">                                       Home</td></tr>
<tr><td class = "hdg">HORIZONS</td></tr>
<tr><td class = "hdg">HOSPITAL</td></tr>
</table>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Home')" id="defaultOpen">HOME</button>
  <a href="doctors_logic.php" style="text-decoration:none"><button class="tablinks" onclick="openCity(event, 'Doctors')">DOCTORS</button></a>
  <a href="staff_logic.php" style="text-decoration:none"><button class="tablinks" onclick="openCity(event, 'Staff')">STAFF</button></a>
  <a href="patient_logic.php" style="text-decoration:none"><button class="tablinks" onclick="openCity(event, 'Staff')">PATIENTS</button></a>
  <a href="pharmacy_logic.php" style="text-decoration:none"><button class="tablinks" onclick="openCity(event, 'Pharmacy')">PHARMACY</button></a>
 <a href="logout.php" style="text-decoration:none"><button class="tablinks">LOG OUT</button></a>
</div>

<div id="Home" class="tabcontent">
                                                                                <p align="right" id="welcome">Have a good day.</p>
<?php
include("connect.php");
$sql = "SELECT * FROM doctors";
$res = mysqli_query($conn,$sql);
$num_doc = mysqli_num_rows($res);

$sql = "SELECT * FROM staff";
$res = mysqli_query($conn,$sql);
$num_staff = mysqli_num_rows($res);

$sql = "SELECT * FROM patient";
$res = mysqli_query($conn,$sql);
$num_patient = mysqli_num_rows($res);
mysqli_close($conn);
?>

<br><br><br><br><br><br>
<h2 style="font-family:Raleway;color:white">Total doctors ...<?php echo $num_doc; ?></h2>
<h2 style="font-family:Raleway;color:white">Total staff ...<?php echo $num_staff; ?></h2>
<h2 style="font-family:Raleway;color:white">Total patients ...<?php echo $num_patient; ?></h2>
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
