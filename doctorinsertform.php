<!DOCTYPE html>
<html>
<style>
</style>
<body>
<p></p>
<form action="doctorinsertresults.php" method="post">
<table>
  <div class="container">
  <tr>
  <td>Staff Number</td>
    <td><input type="text" name="staffno"></td>
</tr>
<tr>
	<td>Username</td>
    <td><input type="text" name="username"></td>
</tr>
<tr>
	<td>Password</td>
    <td><input type="text" name="password"></td>
</tr>
<tr>
	<td>Doctor ID</td>
    <td><input type="text" name="id"></td>
</tr>
<tr>
	<td>Name</td>
    <td><input type="text" name="name"></td>
</tr>
<tr>	
	<td>Department</td>
    <td><select name="department" id="dropdown">
    <option value="pathology">Pathology</option>
    <option value="radiology">Radiology</option>
    <option value="gynaecology">Gynaecology</option>
    <option value="neurology">Neurology</option>
    <option value="dental">Dental</option>
    <option value="orthopaedics">Orthopaedics</option>
    <option value="physiology">Physiology</option>
  </select></td>
</tr>
<tr>
<td>Qualifications</td>
    <td><input type="text" name="qualifications"></td>
</tr>
<tr>
<td>Experience</td>
    <td><input type="text" name="experience"></td>
</tr>
<tr>
<td>Timing</td>
    <td><input type="text" name="timing"></td>
</tr>
<tr>
<td>Salary</td>
    <td><input type="text" name="salary"></td>
</tr>
<tr>
<td>Contact</td>
    <td><input type="text" name="contact"></td>
</tr>
<tr>
<td>E-mail</td>
    <td><input type="text" name="email"></td>
</tr>
<tr>
<td>Address</td>
    <td><input type="text" name="address"></td>
</tr>
</table>
    <a href="doctorinsertresults.php"><button>SUBMIT</button></a>
<p></p>
  </div>
</form>
<body>
</html>