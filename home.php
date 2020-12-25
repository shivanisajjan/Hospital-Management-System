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
  <li><a class="active" href="home.php">Home</a></li>
  <li><a href="profile.php">View Profile</a></li>
  <li><a href="patients.php">View Patients</a></li>
  <li><a href="editpatientbydoctor.php">Edit Prescription</a></li>
  <li><a href="logoutdoctor.php">Logout</a></li>
</ul>
<p></p>
<img src="original.jpg" width="100%" height="700px">
</body>
</html>
