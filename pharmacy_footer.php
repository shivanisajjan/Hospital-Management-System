</div>
<div id="home" class="tabcontent">
<div class = "parallax"></div>
<img src="pharmacy6.jpg"/>
</div>
<div id="view" class="tabcontent">
</div>
<div id="update" class="tabcontent">
 <div class="box"> <form action="pharmacy_update.php" method="post">
<table id="update-form">
   <tr>
     <td class="td1">Medicine Name:<td>
     <td><input type="text" name="medicine_name"></td>
  </tr>
  <tr>
     <td class="td1">Mfg Date:<td>
     <td><input type="date" name="mfg_date"></td>
  </tr>
  <tr>
     <td class="td1">Exp Date:<td>
     <td><input type="date" name="exp_date"></td>
  </tr>

  <tr>
     <td class="td1">Price:<td>
     <td><input type="number" name="price" step = 'any'></td>
  </tr>
  <tr>
     <td class="td1">Stock Availability:<td>
     <td><input type="number" name="qty"></td>
  </tr>
  <tr>
     <td style="padding:20px"><input type="submit" value="     UPDATE      " style="background-color: #66B9BF;color:white;font-family:Pathway Gothic One;color:white;font-size:20px;padding:10px"/></td><td></td>
  </tr>

</table> 
</form>
</div>
</div>
<div id="sell" class="tabcontent">
  <form action="pharmacy_sell.php">
  <table><tr>
<td class="td1">Medicine Name:</td>
<td><input type="text" name="medicine_name"></td></tr>
<tr><td class="td1">Quantity:</td>
<td><input type="number" name="qty"></td></tr>
<tr><td style="padding:20px"><input type="submit" value='   SEARCH    'style="background-color: #66B9BF;color:white;font-family:Pathway Gothic One;color:white;font-size:20px;padding:10px"/></td></tr>
</table>
</form>
</div>

<div id="search" class="tabcontent">
<table>
  <form action="pharmacy_search.php">
<tr><td style="font-family:Sans-serif;font-size:30px;color:#E37222">Search by:</td><td></td> </tr>
<tr><td class="td1"><input type = 'checkbox' name = "search[]" value='1'/>Medicine Name</td><td>  <input type='text' class="search" name='medicine_name' placeholder='Enter medicine name'/></tr>
<tr><td class="td1"><input type = 'checkbox' name = "search[]" value='2'/>Mfg. date </td><td><input type='date' class="search" name='mfg_date' /></tr>
<tr><td class="td1"><input type = 'checkbox' name = "search[]" value='3'/>Exp.date </td><td> <input type='date' class="search" name='exp_date' /></tr>
<tr><td class="td1"><input type = 'checkbox' name = "search[]" value='4'/>Price </td><td> <input type='number' class="search" step = 'any' name='price' placeholder='Enter price' /></tr>
<tr><td></td><td><input type="submit" value="    GO     " style="background-color: #66B9BF;color:white;font-family:Pathway Gothic One;color:white;font-size:20px;padding:10px"/></td></tr>
</form>
</table>
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

$(document).ready(function() {

    //Default Action
    $("div.tabcontent").hide(); //Hide all content
    $("div.tabs button:first").addClass("active").show(); //Activate first tab
    $("div.tabcontent:first").show(); //Show first tab content


});
</script>
</body>
</html>
