<!DOCTYPE html>
<html>
<style>
input[type=text] {
    padding: 1px 2px;
    margin: 4px 38px;
    width: 93px;
}
</style>
<body>
<p></p>
<form action="doctorsearchresults.php" method="post">
  <div>
    Department
    <select name="department">
    <option value="pathology">Pathology</option>
    <option value="radiology">Radiology</option>
    <option value="gynaecology">Gynaecology</option>
    <option value="neurology">Neurology</option>
    <option value="dental">Dental</option>
    <option value="orthopaedics">Orthopaedics</option>
    <option value="physiology">Physiology</option>
  </select>
<p></p>
    Name
    <input type="text" placeholder="Enter Name" name="name">
<p></p>  
    <a href="doctorsearchresults.php"><button>SUBMIT</button></a>
<p></p>
  </div>
</form>
<body>
</html>
