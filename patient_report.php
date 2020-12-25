<?php
if(isset($_POST['btn-upload']))
{    session_start();
     include("connect.php");
 @$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = @$_FILES['file']['tmp_name'];
 $file_size = @$_FILES['file']['size'];
 $file_type =@ $_FILES['file']['type'];
 $user = $_SESSION['username'];
 $sql="INSERT INTO patient(file,type,size) VALUES('$file','$file_type','$file_size') WHERE username = '$user' ";
 mysqli_query($conn,$sql); 
 header("Location:p.php");
}
?>
