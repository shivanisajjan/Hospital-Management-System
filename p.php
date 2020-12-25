<?php
session_start();
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="patient.css">
<link rel="stylesheet" href="materialize/materialize.css"/>
<link rel="stylesheet" href="materialize/css/materilaize.min.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bertoni+Capitals" />
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<link rel="stylesheet" type="text/css"href="https://fonts.googleapis.com/css?family=Merriweather"/>
<link rel="stylesheet" type="text/css"href="https://fonts.googleapis.com/css?family=Comfortaa"/>
<link rel="stylesheet" type="text/css"href="https://fonts.googleapis.com/css?family=Pathway Gothic One"/>

</style>
<body>
<table>

<tr><td  rowspan="80px"><img width="120" height="150" id = "logo" src="hospital.png" alt="New Horizons Hospital"/></td><td class = "hdg">NEW</td><td id="p_title" rowspan="60px" style = "padding-left:300px;font-size:60px;font-family:Comfortaa;">                                       PATIENTS PROFILE</td></tr>
<tr><td class = "hdg">HORIZONS</td></tr>
<tr><td class = "hdg">HOSPITAL</td></tr>
</table>

<div class="tab">
<button class="tablinks" onclick="phar(event, 'home')"><div class="navbar">HOME</div></buttton>
 <a href="viewpatients1.php" style="text-decoration:none;"><button class="tablinks"><div class="navbar">VIEW PROFILE</div></buttton></a>
 <button class="tablinks" onclick="phar(event, 'update')"><div class="navbar">UPDATE FILE</div></buttton>
 <a href="Homepage.html"><button><div class="navbar">Logout</div></button></a>
</div>


<div id="home" class="tabcontent">
<div class = "parallax"></div>
<img src="doctors1.jpg" style="width:100%"/>
</div>

<div id="view" class="tabcontent">
</div>

<div id="update" class="tabcontent">
 <div class="box"> <form action="patient_report.php" method="post">
<table id="update-form">
   <tr>
     <td class="td1">File:<td>
     <td><input type="file" name="name"></td>
  </tr>
  <tr>
     <td class="td1">test:<td>
     <td><input type="text" name="report_tag"></td>
  </tr>
  <tr>
     <td style="padding:20px"><input type="submit" value="     UPLOAD      " style="background-color: #66B9BF;color:white;font-family:Pathway Gothic One;color:white;font-size:20px;padding:10px" name="btn-upload"/></td><td></td>
  </tr>

</table> 
</form>
</div>
</div>
<div id="bill" class="tabcontent">
  <form action="pharmacy_sell.php">
  <table><tr>
<td class="td1">Medicine Name:</td>
<td><input type="text" name="medicine_name"></td></tr>
<tr><td class="td1">Quantity:</td>
<td><input type="number" name="qty"></td></tr>
<tr><td style="padding:20px"><input type="submit" value='   SEARCH    'style="background-color: #66B9BF;color:white;font-family:Pathway Gothic One;color:white;font-size:20px;padding:10px"/></td></tr>
</table>
</form>
</div>
<script>

function phar(evt, cityName) {
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

$(document).ready(function() {

    //Default Action
    $("div.tabcontent").hide(); //Hide all content
    $("div.tabs button:first").addClass("active").show(); //Activate first tab
    $("div.tabcontent:first").show(); //Show first tab content


});
</script>
</body>
</html>
