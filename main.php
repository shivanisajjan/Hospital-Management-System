<!DOCTYPE html>

<html>

<style>



button
{
	
	background-color: #008CBA;
    	border: none;
    	color: white;
    	padding: 15px 32px;
    	text-align: center;
   	text-decoration: none;
    	display: inline-block;
    	font-size: 16px;
    	margin-left: 40%;
    	cursor: pointer;
    	border-radius: 12px;
    	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
	width:300px;
}

body
{
	
	
	background-attachment:fixed;
	
	background-repeat:no-repeat;
	
	background-size:cover;

}

p
{
	font-color:#4B0082;
	font-size:40px;
	text-align:center;
}	


</style>
<body>
<?php
include 'hey.php';
echo "<h1 style='text-align:center;font-family:Raleway;color:#656565;font-size:60px'>LOGIN</h1>";
echo "<p></p>";
echo "<a href='loginreceptionist.php'><button>Receptionist</button></a>";
echo "<p></p>";
echo "<a href='logindoc.php'><button>Doctor</button></a>";
echo "<p></p>";
echo "<a href='loginpharmacist.php'><button>Pharmacist</button></a>";
echo "<p></p>";
echo "<a href='loginchairman.php'><button>Admin </button></a>";
$conn->close(); 
?>

</body>
</html>
