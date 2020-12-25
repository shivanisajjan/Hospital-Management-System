<!DOCTYPE html>
<html>
<body>
<?php

include 'hey.php';
$sql = "SELECT * FROM staff";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
	echo "<table cellpadding='10' border='1' style='border-	collapse:collapse;' align='center'>";
	echo "<tr><th><b>ID</b>	</th>  <th><b>Name</b></th> <th><b>Type</b></th> </tr>";
	while($row = $result->fetch_assoc()) 
	{
		echo "<tr>";
		echo '<td>' .$row["id"] . '</td>';
		echo '<td>' .$row["name"] . '</td>';
                echo '<td>' .$row["type"] . '</td>';
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
<a href="staff1.php"><button>HOME</button></a>


</body>
</html>


  