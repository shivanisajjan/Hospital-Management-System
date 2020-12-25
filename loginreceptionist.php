<!DOCTYPE html>

<html>

<style>



input[type=text], input[type=password] {
    width: 50%;
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
    width: 50%;
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
	
	
	background-attachment:fixed;
	
	background-repeat:no-repeat;
	
	background-size:cover;

}

</style>
<body  align="center">
<br>
<br>
<br>
<br>
<br>
<br>
<h2 style="font-size:70px;">Hello Receptionist!</h2>
<form action="receptionist1.php" method="post">
  <div class="container">
    
    <input type="text" placeholder="Enter Username" name="username">

    
    <input type="password" placeholder="Enter Password" name="password">
        
    <a href="receptionist1.php"><button>SUBMIT</button></a>
    
  </div>
</form>
<a href="main.php"><button>BACK</button></a>
<body>
</html>

