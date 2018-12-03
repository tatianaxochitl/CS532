<?php $title="Patient Record"; ?>


<?php include ("healthcareheader.php") ?>

<script language="javascript">
function option2js()
{

if (document.myform.lastname.value == "")
  {
  alert("Please enter patient last name.")
  return false
  }
if (document.myform.firstname.value == "")
  {
  alert("Please enter patient first name.")
  return false
  }
if (document.myform.physicianID.value == "")
  {
  alert("Please enter Physician ID.")
  return false
  }
if (document.myform.street.value == "")
  {
  alert("Please enter street address.")
  return false
  }
if (document.myform.city.value == "")
  {
  alert("Please enter city.")
  return false
  }
if (document.myform.state.value == "")
  {
  alert("Please enter state.")
  return false
  }
if (document.myform.phone.value == "")
  {
  alert("Please enter patient phone number.")
  return false
  }
if (document.myform.dob.value == "")
  {
  alert("Please enter patient date of birth")
  return false
  }
if (document.myform.gender.value == "")
  {
  alert("Please enter patient gender.")
  return false
  }
}
</script>

<link rel="stylesheet" href="style.css">
<body>
<h3>Patient Records</h3>
<p>Enter patient information below and hit enter<br> 
<b>or</b><br>
<a href="patient_data.php">Access Patient Data</a></p>
<form name ="myform" onsubmit ="return option2js()" action="action.php" method="post">
  Physician ID:<br> 
  <input type="text" name="physicianID" placeholder="Ex. 123"><br><br>
  
  First name:<br>
  <input type="text" name="firstname" placeholder="Ex. John"><br><br>

  Last name:<br>
  <input type="text" name="lastname" placeholder="Ex. Doe"><br><br>

  Patient ID:<br>
  <input type="text" name="patientID" placeholder="Ex. 123"><br><br>

  Address:<br>
  <input type="text" name="street" placeholder="Ex. 123 Main St."><br><br>

  City:<br>
  <input type="text" name="city" placeholder="Ex. San Diego"><br><br>

  State:<br>
  <input type="text" name="state" placeholder="Ex. CA"><br><br>

  Phone Number:<br>
  <input type="text" name="phone" placeholder="Ex. 123-456-7890"><br><br>

  Date of Birth:<br>
  <input type="text" name="dob" placeholder="Ex. 01011990"><br><br>

<p>Gender:</p>

<div>
  <input type="radio" id="M" name="gender" value ="M">
  <label for="male">Male</label>
</div>

<div>
  <input type="radio" id="F" name="gender" value ="F" >
  <label for="female">Female</label>
</div>

<div>
  <input type="radio" id="O" name="gender" value ="O">
  <label for="other">Other</label>
</div><br><br>

  <input type="submit" value="Submit">
</form>

</body>


<?php include ("healthcarefooter.php") ?>
