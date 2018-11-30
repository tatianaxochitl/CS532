<?php $title="Patient Record"; ?>


<?php include ("healthcareheader.php") ?>
<link rel="stylesheet" href="style.css">
<body>
<h3>Patient Records</h1>
<p>Enter patent information below and hit enter</p>
<form action="/action_page.php">
  First name:<br>
  <input type="text" name="firstname" placeholder="Ex. John"><br>

  Last name:<br>
  <input type="text" name="lastname" placeholder="Ex. Doe"><br><br>

  Patient ID:<br>
  <input type="text" name="patientID" placeholder="Ex. 123456"><br>

  Address:<br>
  <input type="text" name="address" placeholder="Ex. 123 Main St."><br>

  City:<br>
  <input type="text" name="city" placeholder="Ex. San Diego"><br>

  State:<br>
  <input type="text" name="state" placeholder="Ex. CA"><br><br>

  Phone Number:<br>
  <input type="text" name="phoneNumber" placeholder="Ex. 123-456-7890"><br><br>

  Date of Birth:<br>
  <input type="text" name="dob" placeholder="Ex. 01/01/1990"><br><br>

<p>Gender:</p>

<div>
  <input type="radio" id="male" name="gender""
         checked>
  <label for="male">Male</label>
</div>

<div>
  <input type="radio" id="female" name="gender">
  <label for="female">Female</label>
</div>

<div>
  <input type="radio" id="other" name="gender">
  <label for="other">Other</label>
</div><br><br>

  <input type="submit" value="Submit">
</form>

</body>


<?php include ("healthcarefooter.php") ?>
