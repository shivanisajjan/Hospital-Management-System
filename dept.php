<!DOCTYPE html>
<html>
<head>
<style>
h1 {
	color: black;
	text-align: left;
	font-family: Georgia;
	font-size: 250%;
}

q {
	margin: 0;
	font-family: 'Lato', sans-serif;
}

.tabordion {
	color: #333;
	display: block;
	font-family: arial, sans-serif;
	margin: auto;
	position: relative;
	width: 100%;
}

.tabordion input[name="sections"] {
  left: -9999px;
  position: absolute;
  top: -9999px;
}

.tabordion section {
  display: block;
  padding-bottom: 74px;
}

.tabordion section label {
  background: #ccc;
  border:1px solid #fff;
  cursor: pointer;
  display: block;
  font-size: 1.2em;
  font-weight: bold;
  padding: 15px 20px;
  position: relative;
  width: 180px;
  z-index:100;
}

.tabordion section article {
  display: none;
  left: 230px;
  min-width: 300px;
  padding: 0 0 0 21px;
  position: absolute;  
  top: 0;
}

.tabordion section article:after {
  background-color: #ccc;
  bottom: 0;
  content: "";
  display: block;
  left:-229px;
  position: absolute;
  top: 0;
  width: 220px;
  z-index:1;
}

.tabordion input[name="sections"]:checked + label { 
  background: #eee;
  color: #bbb;
}

.tabordion input[name="sections"]:checked ~ article {
  display: block;
}


@media (max-width: 533px) {
  
  h1 {
    width: 100%;
  }

  .tabordion {
    width: 100%;
  }
  
  .tabordion section label {
    font-size: 1em;
    width: 160px;
  }  

 .tabordion section article {
    left: 200px;
    min-width: 270px;
  } 
  
  .tabordion section article:after {
    background-color: #ccc;
    bottom: 0;
    content: "";
    display: block;
    left:-199px;
    position: absolute;
    top: 0;
    width: 200px;

  }  
  
}

#hey {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

table#hey td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

table#hey tr:nth-child(even) {
    background-color: #dddddd;
}
@media (max-width: 768px) {
  h1 {
    width: 96%;
  }

  .tabordion {
    width: 96%;
  }
}


@media (min-width: 1366px) {
  h1 {
    width: 70%;
  }

  .tabordion {
    width: 70%;
  }
}


.overlay {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    color:white;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.9);
    overflow-x: hidden;
    transition: 0.5s;
}

.overlay-content {
    position: relative;
    top: 25%;
    width: 100%;
    text-align: center;
    margin-top: 30px;
}

.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
}

.overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
  }
}
div.container {
    width: 100%;
    border: 1px solid gray;
}

header {
    padding: 1em;
    color: solid-black;
    background-color: #f0f0f0;
    clear: left;
    text-align: center;
    font-variant:small-caps;
}


footer {
padding: 1em;
    color: solid-black;
    background-color: #f0f0f0;
    clear: both;
    text-align: center;
    position:relative;
    margin-top:-300px;
    bottom:0;
    width:100%;
    height:300px; 
}



ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #00ced1;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 12px;
    text-decoration: none;
    font-size:100%;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #000080;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 10000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}


.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
table#t {
width=100%;
}

table#t th, td {
    padding: 10px;
}
table#t,td{
	text-align:left;
}
article {
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
}
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}


table#t01 {
    width:70%;
}
table#t01 th, td {
    padding: 5px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th {
    background-color: #008080;
    color: white;
}

</style>
</head>
<body>

<div class="container">

<header>
   <h1>
<img src="logo.gif" alt="Smiley face" style="float:left;width:57px;height:57px;">
     New Horizons Hospital  
</h1>
</header>
<ul>
<li class="dropdown">
    <a href="Homepage.html" class="dropbtn">Home</a>
</li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">About us</a>
    <div class="dropdown-content">
      <a href="aboutus.html">Why Our Hospital</a>
      <a href="aboutus.html">About Chairman</a>
      <a href="aboutus.html">Mission & Vision</a>
      <a href="aboutus.html">Contact Us</a>
    </div>
  </li>

<li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Departments & Centers</a>
    <div class="dropdown-content">
      <a href="dept.php">Pathology</a>
      <a href="dept.php">Radiology</a>
      <a href="dept.php">Gynaecology</a>
      <a href="dept.php">Neurology</a>
      <a href="dept.php">Dental</a>
      <a href="dept.php">Orthopaedics</a>
      <a href="dept.php">Physiology</a>
    </div>
  </li>

  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Research</a>
    <div class="dropdown-content">
      <a href="#">Research & Innovations</a>
      <a href="#">Explore Research Labs</a>
      <a href="#">Research Publications</a>
      <a href="#">Research Committees</a>
    </div>
  </li>

  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Services</a>
    <div class="dropdown-content">
      <a href="#">Hospital Statistics</a>
      <a href="#">Hospital Fees & Charges</a>
      <a href="#">Patient Accommodation</a>
      <a href="#">Emergency</a>
      <a href="#">Blood Bank</a>
    </div>
  </li>
 
<li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Patients & Visitors</a>
    <div class="dropdown-content">
      <a href="#">Floor Directory</a>
      <a href="#">Visiting Hours</a>
      <a href="#">Facilities</a>
      <a href="#">Feedback</a>
      <a href="#">Guidelines</a>
    </div>
  </li>
</ul>
<p></p>

<div class="tabordion">
<?php
include("connect.php");

$sql="SELECT * FROM doctors";
$result=mysqli_query($conn,$sql);

if($result)
{
while($row = mysqli_fetch_array($result))  
    {
echo "<article>
<table id=\"t01\">
  <tr>
    <th>Name</th>
    <th>".$row['name']."</th>
  </tr>
  <tr>
    <td>Qualification</td>
    <td>".$row['qualifications']."</td>
  </tr>
  <tr>
    <td>Experience</td>
    <td>".$row['experience']."</td>
  </tr>
  <tr>
    <td>Timings</td>
    <td>".$row['timings']."</td>
  </tr>  
</table>
</article>
<p></p>";
}
}
else
echo "Could not display!";

mysqli_close($conn);
?>
    
</div>


<footer>
<table id="t">
  <tr>
    <th style="font-size:20px;">Patient care and health information</th>
    <th  style="font-size:20px;">International Services</th> 
    <th style="font-size:20px;">For Medical Professionals</th>
  </tr>
  <tr>
    <td style="color:grey;">More than 3,300 physicians, scientists and researchers from New Horizons share their expertise to empower you. Find out why New Horizons is the right place for your health care. </td>
    <td style="color:grey;">Thousands of people from around the world travel to New Horizons each year for medical care.</td>
    <td style="color:grey;">Refer a patient. Access medical professional services. Connect to research. Grow and develop with New Horizons.</td>
  </tr>
   <tr>
   <td> <a href="aboutus.html">Why Our Hospital?</a></td>
   <td> <a href="#">International Services</a></td>
   <td> <a href="#">For Medical Professionals<a></td>
  </tr>
<tr>
<td></td>
<td> <a href="#">Financial Services</a></td>
<td></td>
</tr>
</table>
<a target="_blank" title="follow me on Twitter" href="http://www.twitter.com/PLACEHOLDER"><img alt="follow me on twitter" src="https://c866088.ssl.cf3.rackcdn.com/assets/twitter40x40.png" border=0></a>
<a target="_blank" title="follow me on facebook" href="http://www.facebook.com/PLACEHOLDER"><img alt="follow me on facebook" src="https://c866088.ssl.cf3.rackcdn.com/assets/facebook30x30.png" border=0></a>
<a target="_blank" title="follow me on google plus" href="https://plus.google.com/PLACEHOLDER"><img alt="follow me on google plus" src="https://c866088.ssl.cf3.rackcdn.com/assets/googleplus30x30.png" border=0></a>
<a target="_blank" title="follow me on instagram" href="http://www.instagram.com/PLACEHOLDER"><img alt="follow me on instagram" src="https://c866088.ssl.cf3.rackcdn.com/assets/instagram30x30.png" border=0></a>
<a target="_blank" title="follow me on youtube" href="http://www.youtube.com/PLACEHOLDER"><img alt="follow me on youtube" src="https://c866088.ssl.cf3.rackcdn.com/assets/youtube30x30.png" border=0></a>
</footer>


</body>
</html>
