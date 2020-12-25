
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="materialize/materialize.css"/>

<link rel="stylesheet" href="materialize/css/materilaize.min.css"/>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bertoni+Capitals" />

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js">
</script>

<script src="http://code.jquery.com/jquery-latest.min.js">
</script>

<link rel="stylesheet" type="text/css"href="https://fonts.googleapis.com/css?family=Merriweather"/>

<link rel="stylesheet" type="text/css"href="https://fonts.googleapis.com/css?family=Comfortaa"/>

<link rel="stylesheet" type="text/css"href="https://fonts.googleapis.com/css?family=Pathway Gothic One"/>

<link rel="stylesheet" href="pharmacy1.css"/>  
 
<style>
#last{
float:right;
}

</style>
</head>
<body>

<table>


<tr>
  <td  rowspan="80px"><img id = "logo" src="hospital.png" alt="New Horizons Hospital"/></td>
  <td class = "hdg">NEW</td>
  <td id="p_title" rowspan="60px" style = "padding-left:300px;font-size:60px;font-family:Comfortaa;">                                       RECEPTIONIST</td>
</tr>

<tr>
  <td class = "hdg">HORIZONS</td>
</tr>

<tr>
  <td class = "hdg">HOSPITAL</td>
</tr>

</table>


<br>
<br>



<div class="tab">
  <button class="tablinks" onclick="phar(event, 'home')">
   <div class="navbar">HOME</div>
   </buttton>

  <a href="doc.html"><button class="tablinks" onclick="phar(event, 'doctor_info')"><div class="navbar">DOCTOR INFO</div></button></a>
  <button class="tablinks" onclick="phar(event, 'patient')"><div class="navbar">PATIENT</div></button>
  <button class="tablinks" onclick="phar(event, 'findpatient')"><div class="navbar">FIND PATIENT</div></button>
  <button class="tablinks" onclick="phar(event, 'changetype')"><div class="navbar">CHANGE TYPE</div></button>
  <a href="ref.html"><button class="tablinks" ><div class="navbar">HOMEPAGE</div></button></a>
  <a href="logout.php"><button class="tablinks" id="last" ><div class="navbar">LOGOUT</div></button></a>
  
</div>

<div id="home" class="tabcontent">
   
<div class = "parallax">
   </div>

   <img src="pharmacy6.jpg"/>

</div>



<div id="doctor_info" class="tabcontent" href="dept.html">
  
</div>

<div id="patient" class="tabcontent">
 <div class="box">
<form  action="patient.php" method="post" >
<table id="update-form">

<tr>
  <td class="td1">Name:</td>
  <td><input type="text" name="name" required placeholder="Name"></td>
</tr>
<tr>
  <td class="td1">ID:</td>
  <td><input type="number" name="id" required placeholder="ID"></td>
</tr>
<tr>
  <td class="td1">Gender:</td>
  <td><input type="radio" name="gender" value="male" required>Male</td>
  <td><input type="radio" name="gender" value="female" required>Female</td>
</tr>
<tr>
  <td class="td1">Date of Birth:</td>
  <td><input type="date" name="dob" required placeholder="dob"></td>
</tr>
<tr>
  <td class="td1">Email:</td>
  <td><input type="email" name="email" required placeholder="Your Email"></td>
</tr>
<tr>
  <td class="td1">Phone Number:</td>
  <td><input type="number" name="contact" required placeholder="Phone Number"></td>
</tr>
<tr>
  <td class="td1">In or Out:</td>
  <td><input type="text" name="in_or_out" required placeholder="Type:in or out"></td>
</tr>
<tr>
  <td class="td1">Address:</td>
  <td><input type="text" name="address" required placeholder="Address Line"></td>
</tr>
<tr>
  <td class="td1">Gaurdian Name:</td>
  <td><input type="text" name="gname" required placeholder="Guardian Name"></td>
</tr>
<tr>
  <td class="td1">Id proof:</td>
  <td><input type="number" name="id_proof" required placeholder="ID Proof"></td>
</tr>
<tr>
  <td class="td1">Medical concern:</td>
  <td><textarea name="m_concern" rows="10" cols="50" required placeholder="Medical concern"></textarea></td>
</tr>
<tr>
  <td class="td1">Doctor ID:</td>
  <td><input type="number" name="doctor_id" required placeholder="Doctor ID"></td>
</tr>
<tr>
  <td class="td1">Medicines:</td>
  <td><input type="text" name="medicines"  placeholder="Medicines"></td>
</tr>
<tr>
  <td class="td1">Tests:</td>
  <td><input type="text" name="tests"  placeholder="Tests"></td>
</tr>
<tr>
  <td class="td1">Room No.:</td>
  <td><input type="number" name="room_no" placeholder="Room Number"></td>
</tr>
<tr>
  <td class="td1">Check In:</td>
  <td><input type="date" name="check_in" placeholder="check_in"></td>
</tr>
<tr>
  <td class="td1">Chek Out:</td>
  <td><input type="date" name="check_out" placeholder="check_out"></td>
</tr>
<tr>
  <td class="td1">Bill:</td>
  <td><input type="number" name="bill" required placeholder="bill"></td>
</tr>
<tr>
  <td style="padding:20px"><input type="submit" value='   SUBMIT    'style="background-color: #66B9BF;color:white;font-family:Pathway Gothic One;color:white;font-size:20px;padding:10px"/></td>
</tr>
</table>
</form>
</div>
</div>

<div id="findpatient" class="tabcontent">
 <div class="box">
<form action="fpatient.php" method="post">
<table id="update-form">

<tr>
  <td class="td1">Name:</td>

  <td><input type="text" name="name" required placeholder="Name"></td>
</tr>
<tr>
  <td class="td1">ID:</td>
  <td><input type="number" name="id" required placeholder="ID"></td>
</tr>
<tr>
 
    <td style="padding:20px"><input type="submit" value="     FIND      " style="background-color: #66B9BF;color:white;font-family:Pathway Gothic One;color:white;font-size:20px;padding:10px"/></td>
<td></td>
  
</tr>
</table>
</form>
</div>
</div>

<div id="changetype" class="tabcontent">
 <div class="box">
<form action="cpatient.php" method="post">
<table id="update-form">
 
<tr>
  <td class="td1">Name:</td>

  <td><input type="text" name="name" required placeholder="Name"></td>
</tr>
<tr>
  <td class="td1">ID:</td>

  <td><input type="number" name="id" required placeholder="ID"></td>
</tr>
<tr>
  <td class="td1">In or Out:</td>

  <td><input type="text" name="in_or_out" required placeholder="Change to"></td>
</tr>
<tr>
  <td class="td1">Room No.:</td>

  <td><input type="number" name="room_no" placeholder="Room No."></td>
</tr>
<tr>
  <td class="td1">Check In:</td>

  <td><input type="date" name="check_in" placeholder="Check In"></td>
</tr>
<tr>
  <td class="td1">Check Out:</td>

  <td><input type="date" name="check_out" placeholder="Check Out"></td>
</tr>
<tr>
 
    <td style="padding:20px"><input type="submit" value="     CHANGE      " style="background-color: #66B9BF;color:white;font-family:Pathway Gothic One;color:white;font-size:20px;padding:10px"/></td>
<td></td>
  
</tr>


</table>
</form>
</div>
</div>


<div id="home" class="tabcontent" >
  
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
</script>
     
<body>
</html> ";

