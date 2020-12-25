<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="chairman.css"/>
<link rel="stylesheet" type="text/css"href="https://fonts.googleapis.com/css?family=Raleway"/>
<style>
body
{
	
	background-image:url("u.jpg");
	
	background-attachment:fixed;
	
	background-repeat:no-repeat;
	
	background-size:cover;

}
</style>
</head>
<body>

<?php
include 'hey.php';

$ID = $_POST["id"];
$name = $_POST["name"];
$sql = "DELETE FROM staff WHERE  name='$name'";
if ($conn->query($sql) === TRUE) {
    echo "<h2 style='font-family:Raleway'>Deletion successful.</h2>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
<a href="staff_logic.php"><button>HOME</button></a>


</body>
</html>


