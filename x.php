<html>
<body>
<form action='x.php'><input type="submit" name="button" value='button'/>
<?php
if($_SERVER['REQUEST_METHOD']=='GET')
{if(!strcmp($_GET["button"],"button"))
{
echo "got it!";
}
}
?>
<body>
</html>
