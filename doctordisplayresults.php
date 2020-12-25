<!DOCTYPE html>
<?php

include 'hey.php';
$sql = "SELECT * FROM doctors";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
	echo "<table cellpadding='10' border='1' style='border-	collapse:collapse;' align='center'>";
	echo "<tr> <th><b>Staff Number</b></th> <th><b>Doctor ID</b>	</th>  <th><b>Name</b></th> </tr>";
	while($row = $result->fetch_assoc()) 
	{
		echo "<tr>";
		echo '<td>' .$row["staffno"] . '</td>';
		echo '<td>' .$row["id"] . '</td>';
		echo '<td>' .$row["name"] . '</td>';
		echo "</tr>";

	}
	echo "</table>";

}
else
{
	echo "0 results";
}

$conn->close();		
?>


  