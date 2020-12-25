<!DOCTYPE html>
<html>
<style>
#logo
{
float:left;width:80px;height:80px;font-family:Verdana;
}
.hdg
{
color:#607d8b;
font-family:Merriweather;
font-size:20px;

}

body
{
background-image: url("admin2.jpg");

    
/* Set a specific height */    
height: 800px;    
/* Create the parallax scrolling effect */
    
background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.button {
    background-color: #FF533D; 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 12px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
<body>
<table id="head">
<tr><td  rowspan="80px"><img id = "logo" src="hospital.png" alt="New Horizons Hospital"/></td><td class = "hdg">NEW</td><td id="p_title" rowspan="60px" style = "padding-left:370px;font-size:60px;font-family:Raleway;color:#ff533d">                                       Doctors</td></tr>
<tr><td class = "hdg">HORIZONS</td></tr>
<tr><td class = "hdg">HOSPITAL</td></tr>
</table>

<?php
include 'hey.php';
$staffno = $_POST["staffno"];
$username = $_POST["username"];
$password = $_POST["password"];
$id = $_POST["id"];
$name = $_POST["name"];
$department = $_POST["department"];
$qualifications = $_POST["qualifications"];
$experience = $_POST["experience"];
$timing = $_POST["timing"];
$salary = $_POST["salary"];
$contact = $_POST["contact"];
$email = $_POST["email"];
$address = $_POST["address"];
$row = "INSERT INTO doctors (staffno,username,password,id,name,department,qualifications,experience,timing,salary,contact,email,address)
VALUES ('$staffno',$username,'$password','$id','$name','$department','$qualifications','$experience','$timing','$salary','$contact','$email','$address')";
if ($conn->query($row) === TRUE) {
    echo "Insertion successful!";
} else {
    echo "Error: " . $row . "<br>" . $conn->error;
}
$conn->close();
?>
<p></p>
<a href="doctors_logic.php"><button class="button button2">Back</button></a>
</body>
</html>
