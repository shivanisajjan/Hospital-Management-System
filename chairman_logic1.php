<?php
session_start();

if($_SESSION['logged_in'] == false)
header('Location:main.php');
?>
<!DOCTYPE html>
<head>
<link rel="stylesheet" href="chairman.css"/>
<link rel="stylesheet" href="materialize/materialize.css"/>
<link rel="stylesheet" href="materialize/css/materilaize.min.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bertoni+Capitals" />
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<link rel="stylesheet" type="text/css"href="https://fonts.googleapis.com/css?family=Merriweather"/>
<link rel="stylesheet" type="text/css"href="https://fonts.googleapis.com/css?family=Comfortaa"/>
<link rel="stylesheet" type="text/css"href="https://fonts.googleapis.com/css?family=Pathway Gothic One"/>
</head>
<body>

<div class="tab">
<button class="tablinks" onclick="phar(event, 'home')"><div class="navbar">HOME</button>
<button class="tablinks" onclick="phar(event, 'my team')"><div class="navbar">MY TEAM</button>
<button class="tablinks" onclick="phar(event, 'doctors')"><div class="navbar">DOCTORS</button>
<button class="tablinks" onclick="phar(event, 'staff')"><div class="navbar">STAFF</button>
<button class="tablinks" onclick="phar(event, 'our patients')"><div class="navbar">OUR PATIENTS</button>
<button class="tablinks" onclick="phar(event, 'growth report')"><div class="navbar">GROWTH REPORT</button>
<button class="tablinks" onclick="phar(event, 'growth report')"><div class="navbar">MINUTES OF THE MEETING</button>
<button class="tablinks" onclick="phar(event, 'notices')"><div class="navbar">NOTICES</button>
<button class="tablinks" onclick="phar(event, 'compose')"><div class="navbar">COMPOSE</button>
<button class="tablinks" onclick="phar(event, 'compose')"><div class="navbar">CONTACTS</button>
<a href="logout.php"><button><div class="navbar">Logout</div></button></a>
</div>
<br>
<br>
<br>
<br>
<div id="home" class="tabcontent">
  <h2> 400 happy patients<h2>
  <h2> 20 successful by-pass surgeries</h2>
  <h2> 30 doctors</h2>
  <h2> 100 staff members</h2>
  <h2>avg treatment success rate 98% </h2>
  
 <h1>Recent Highlights...</h1>
 <h3>Treated 98 cases of dengue successfully out of 100</h3>
 <h3>'RUN -Spread Cancer awareness' - our initiative saw a turnout of 2000 people </h3>
 <h3> Swachch Bharat Abhiyaan</h3>

</div>
<br>
<br>
<br>
<br>
<div id="my team" class="tabcontent">
<h2>Chairman :<h2>
table>
<tr><td>Dr. Prathap C Reddy </td></tr>
</table>
<h2>Board of Directors:</h2>
</table>
<tr><td>Mr.Salil J Mehta</td></tr>
<tr><td>Mrs.Avantika Mokhtali</td></tr>
<tr><td>Mr.Hirji Mulchandani</td></tr>
<tr><td>Mr.Anil Ramnani</td></tr>
<tr><td>Mr.V.Ganesan</td></tr>
</table>
</div>
<br>
<br>
<br>
<br>
<div id="doctors" class="tabcontent">
</div>

<div id="our patients" class="tabcontent">
</div>

<div id="growth report" class="tabcontent">
Growing since 25 yrs.
</div>
<br>
<br>
<br>
<br>

<div id="minutes of the meeting" class="tabcontent">
Growing since 25 yrs.
</div>
<br>
<br>
<br>
<br>
<div id="notices" class="tabcontent">
Growing since 25 yrs.
</div>
<br>
<br>
<br>
<br>
<div id="compose" class="tabcontent">
Growing since 25 yrs.
</div>
<br>
<br>
<br>
<br>
<div id="contacts" class="tabcontent">
Growing since 25 yrs.
</div>
<script>
function phar(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

</script>
</body>
</html>
