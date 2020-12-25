<?php
session_start();

if($_SESSION['logged_in'] == false)
header('Location:main.php');
else
{
include("pharmacy_header.php");
}
?>

</body>
</html>
