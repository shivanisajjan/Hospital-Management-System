<html>

<head>
<title>Input</title>

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
	width:280px;
}

body
{
	
	background-image:url("u.jpg");
	
	background-attachment:fixed;
	
	background-repeat:no-repeat;
	
	background-size:cover;

}
input[type=text] 
{
    width: 20%;
    padding: 12px 20px;
    margin: 5px 0;
    box-sizing: border-box;
}
</style>
</head>
<body>

<form action="editedprint.php" method="post">
<br><br><br>
<pre style="text-align:center;font-size:25px;">

ID:<input type="text" name="ID" required>

<br>Name:<input type="text" name="Name" required>

<br>Contact:<input type="text" name="Contact" required>

<br>E-mail:<input type="text" name="E-mail" required>

<br>Address:<input type="text" name="Address" required>

<br>Department:<input type="text" name="Department" required>

<br>Qualifications:<input type="text" name="Qualifications" required>

<br>Experience:<input type="text" name="Experience" required>

<br>Timing:<input type="text" name="Timing" required>

<br>Salary:<input type="text" name="Salary" required>
</pre>

<a href="editedprint.php"><button>SUBMIT</button></a>

</form>

<body>

</html>
