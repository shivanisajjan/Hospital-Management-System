<!DOCTYPE html>
<html>
<body>
<style>
header{
	background-color:black;
	font-size:60px;
	color:white;
	padding:2px;
	text-align:center;
	background-size:cover;
}
body{
background-color:grey;
}
</style>
<header>
		<table width="1335px">
			<tr>
				<td style="padding-left:300px;" align="left">	
					 New Horizons Hospital
				</td>
			</tr>
		</table>
</header>
<p></p>
<?php
include("connect.php");
$id =@ $_POST['id'];
$name = $_POST["name"];
$address = $_POST["address"];
$gender = $_POST["gender"];
$phone = $_POST["contact"];
$dob = $_POST["dob"];
$gname = $_POST["gname"];
$m_concern = $_POST["m_concern"];
$doctor = @$_POST["doctor"];
$id_proof = $_POST['id_proof'];
$email = $_POST['email'];
$date = @$_POST['date'];
$time = @$_POST['time'];
		
$row = "INSERT INTO appointments (name,address,gender,contact,dob,gname,m_concern,doctor,id_proof,email,date,time)
VALUES ('$name','$address','$gender','$phone','$dob','$gname','$m_concern','$doctor','$id_proof','$email','$date','$time')";

$result = mysqli_query($conn,$row);
if ( $result) {
    echo "Your appointment was  successfully booked!";
} else {
    echo "Error: " . $row . "<br>" . mysqli_error($conn);
}
/*echo "<p></p>";
$sql = "SELECT * FROM mytable";
$result = $conn->query($sql);
echo "<table cellpadding='10' border='1' style='border-collapse:collapse;' align='center'>";
echo "<tr> <th><b>ID</b></th><th><b>Name</b></th> <th><b>Address</b></th><th><b>Address</b></th> <th><b>Date of Birth</b></th> <th><b>Guardian Name</b></th> <th><b>Medical Concern</b></th><th><b>Doctor</b></th><th><b>ID Proof</b></th><th><b>E-mail</b></th> </tr>";
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo '<td>' .$row["id"].'</td>';
		echo '<td>' .$row["name"] . '</td>';
		echo '<td>' .$row["address"] . '</td>';
		echo '<td>' .$row["gender"] . '</td>';
		echo '<td>' .$row["phone"] . '</td>';
		echo '<td>' .$row["dob"] . '</td>';
		echo '<td>' .$row["gmane"] . '</td>';
		echo '<td>' .$row["m_concern"] . '</td>';
		echo '<td>' .$row["doctor"] . '</td>';
		echo '<td>' .$row["id_proof"].'</td>';
		echo '<td>' .$row["email"].'</td>';
	
		echo "</tr>";
	}
}
else
{
	echo "0 results";
}
echo "</table>";*/
mysqli_close($conn);
?>
<br>
<a href="Homepage.html"><button>BACK</button></a>
</body>
</html>

