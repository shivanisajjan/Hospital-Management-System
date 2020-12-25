<!DOCTYPE html>
<html>
<head>
<style>
.button {
    background-color: #565656;
    border: none;
    color: white;
    padding: 10px 42px;
    text-align: center;
    border-radius: 4px;
    text-decoration: none;
    display: inline-block;
    font-size: 13px;
    margin: 4px 35px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
input[type=text] {
    padding: 7px 17px;
    margin: 4px 2px;
}
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
  <li><a href="patients.php">View Patients</a></li>
  <li><a class="active" href="editpatientbydoctor.php">Edit Prescription</a></li>
  <li><a href="logoutdoctor.php">Logout</a></li>
</ul>
<p></p>
<form action="editedpatientsprint.php" method="post">
  <div class="container">
    <label><b>Patient ID</b></label><br>
    <input type="text" placeholder="Enter ID" name="id">
<p></p>
    <label><b>Tests</b></label><br>
    <input type="text" placeholder="Enter Tests" name="tests">
<p></p>
    <label><b>Medicines</b></label><br>
    <input type="text" placeholder="Enter Medicines" name="medicines">
      <br>  <br>
    <a href="editedpatientsprint.php"><button class='button button2'>SUBMIT</button></a>
<p></p>
  </div>
</form>
<body>
</html>

