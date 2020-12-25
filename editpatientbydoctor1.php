<!DOCTYPE html>

<html>

<style>



input[type=text], input[type=password] {
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #008CBA;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 40%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
body
{
	
	background-image:url("u.jpg");
	
	background-attachment:fixed;
	
	background-repeat:no-repeat;
	
	background-size:cover;

}

</style>
<body>
<form action="editedpatientsprint.php" method="post">
  <div class="container">
	<br><br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <h1>Tests</h1>
	<h2>Want to Upload Report</h2><br>
	<input type="file" name="pic" accept="image/*"><br>
	<br>
    <input type="textarea" placeholder="Enter Tests" name="tests" required>
      <br>  
    <a href="editedpatientsprint.php"><button>SUBMIT</button></a>
  </div>
</form>
<body>
</html>
